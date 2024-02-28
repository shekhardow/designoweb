<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\front\FrontModel;
use App\Models\admin\AdminModel;
use Illuminate\Support\Facades\Validator;
use Illuminget_site_urlate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Rules\ReCaptcha;

class FrontController extends Controller{

    //--------------------------------- DB Instance---------------------------------
    private $front_model;
    private $admin_model;
    private $toemail;

    public function __construct(){
        $this->front_model = new FrontModel();
        $this->admin_model = new AdminModel();
        $this->toemail = "info@designoweb.com";
         //$this->toemail = "ambuj.designoweb@gmail.com";
    }

    private function loadview($view, $data = NULL){
        return view('front/' . $view, $data);
    }

    // ----------------------------- For Single Files ------------------------------
    public function singleUpload(Request $request, $file_name, $path){
        if ($request->hasfile($file_name)) {
            $file = $request->file($file_name);
            $name = time() . '.' . $file->extension();
            $file->move(base_path('uploads/') . $path, $name);
            return $name;
        } else {
            return false;
        }
    }

    // ---------------------------- For Multiple Files -----------------------------
    public function multipleUploads(Request $request, $file_name, $path){
        if ($request->hasfile($file_name)) {
            $data = [];
            foreach ($request->file($file_name) as $file) {
                $name = time() . '.' . $file->extension();
                $file->move(base_path('uploads/') . $path, $name);
                sleep(1);
                $data[] = $name;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function index(){
        $data['title'] = 'Home';
        $data['loader'] = '1';
        $data['meta_title'] = "App Development Company in India & USA | Designoweb Technologies";
        $data['meta_description'] = "Designoweb Technologies is a leading mobile app development company with a global presence in India & USA. We specialize in delivering digital solutions to startups & enterprises worldwide.";
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image', '!=', NULL)->where('video_link', '==', NULL);
        // $data['highlighted_blogs'] = $this->front_model->getAllBlogs()->where('highlighted', 'Yes')->skip(0)->take(2);
        return $this->loadview('index', $data);
    }

    public function about(){
        $data['title'] = 'About';
        return $this->loadview('about', $data);
    }

    public function our_process(){
        $data['title'] = 'Our Process';
        return $this->loadview('our_process', $data);
    }

    public function testimonials(){
        $data['title'] = 'Testimonials';
        $data['testimonials'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','!=',NULL);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        $data['testimonials_without_video_and_images'] = $this->front_model->getAllTestimonials()->where('client_image','==',NULL)->where('video_link','==',NULL);
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        return $this->loadview('testimonials', $data);
    }

    public function career(){
        $data['title'] = 'Career';
        return $this->loadview('career', $data);
    }

    public function blog(){
        $data['title'] = 'Blogs';
        $data['blogs'] = $this->front_model->getAllBlogs();
        return $this->loadview('blogs/blog', $data);
    }

    public function blog_details($slug=null){
        $data['title'] = 'Blog Details';
        $data['blog_detail'] = $this->front_model->getBlogDetailBySlug($slug);
        $data['blogs'] = $this->front_model->getAllBlogs()->where('blog_id', '!=', $data['blog_detail']->blog_id)->skip(0)->take(3);
        return $this->loadview('blogs/blog_details', $data);
    }

    public function press_release(){
        $data['title'] = 'Press Release';
        $data['banner_press_release'] = $this->front_model->getAllPressRelease()->where('banner_poster','==','Yes');
        $data['press_release'] = $this->front_model->getAllPressRelease()->where('banner_poster','==','No');
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        return $this->loadview('press_release/press_release', $data);
    }

    public function press_release_details($slug=null){
        $data['title'] = 'Press Release Details';
        $data['press_release_detail'] = $this->front_model->getPressReleaseDetailBySlug($slug);
        $data['press_release'] = $this->front_model->getAllPressRelease()->skip(0)->take(3);
        return $this->loadview('press_release/press_release_details', $data);
    }

    public function contact(){
        $data['title'] = 'Contact';
        return $this->loadview('contact', $data);
    }
    
    public function sendContactMail(Request $request){
        $requestdata = $request->all();
        $user_id = $request->session()->get('lge_user_id');
        $validator = Validator::make($requestdata, $rules = [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'comments'  => 'required',
            'budget'  =>'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
            
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $result = $this->front_model->insertContactData($requestdata);
        if($result){
            if(@$this->send_contact_mail($requestdata)){
                @$this->send_thankyou_mail($requestdata);
            }
            return response()->json(['result' => 1, 'msg' => "Email sent successfully", 'url' => route('front/contact')]);
        }else{
            return response()->json(['result' => -1, 'msg' => "Something went wrong!"]);
        }
    }
    
    public function send_contact_mail($requestdata){
        $from = $requestdata['email'];
        $fromName = $requestdata['name'];
        $data['name'] = $fromName;
        $data['phone'] = $requestdata['phone'];
        $data['budget'] = $requestdata['budget'];
        $data['message'] = $requestdata['comments'];
        
        $to = $this->toemail;

        $subject = "Email to contact with Designoweb Technologies";

        $htmlContent = view('front/mail/sendmail', $data)->render();

        $this->sendInBlue($to, 'Designoweb Technologies', $subject, $fromName, $from, $htmlContent);
        return true;
    }
    
    public function send_thankyou_mail($requestdata){
        $from = "info@designoweb.com";
        $fromName = "Designoweb Technologies";
        
        $to = $requestdata['email'];
        $toName = $requestdata['name'];
        
        $data['client'] = $toName;

        $subject = "Acknowledgement in response to your previous mail";

        $htmlContent = view('front/mail/thankyoumail', $data)->render();

        $this->sendInBlue($to, $toName, $subject, $fromName, $from, $htmlContent);
        return true;
    }
 
    public function sendInBlue($to,$toName,$subject,$mail_sender_name="Designoweb Technologies",$mail_sender_email='info@designoweb.com',$html=null){
        $curl = curl_init();
        $config = [
            "sender" => [
                  "name" => $mail_sender_name, 
                  "email" => $mail_sender_email,
               ], 
            "to" => [
                     [
                        "email" => $to, 
                        "name" => $toName, 
                     ] 
                  ], 
            "subject" => $subject, 
            "htmlContent" => $html 
         ]; 

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sendinblue.com/v3/smtp/email',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>json_encode($config),
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'api-key: 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',
                'content-type: application/json'
            ),
        ));
    
        $response = curl_exec($curl);
        curl_close($curl);
    }

    public function case_studies(){
        $data['title'] = 'Case Studies';
        $data['case_studies'] = $this->front_model->getAllCaseStudies();
        return $this->loadview('case_study/case_studies', $data);
    }
    public function case_studies1(){
        $data['title'] = 'Portfolio';
        $data['case_studies'] = $this->front_model->getAllCaseStudies();
        return $this->loadview('case_study/case_studies1', $data);
    }
    public function case_studies2(){
        $data['title'] = 'Portfolio';
        $data['case_studies'] = $this->front_model->getAllCaseStudies();
        return $this->loadview('case_study/case_studies2', $data);
    }

    public function case_study_details($slug=NULL){
        $data['case_study_detail'] = $this->front_model->getCaseStudyDetailBySlug($slug);
        $data['case_challenges_detail'] = $this->admin_model->getAllCaseChallenges(@$data['case_study_detail']->case_study_id);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['title'] = @$data['case_study_detail']->project_name;
        return $this->loadview('case_study/case_study_details', $data);
    }

    public function portfolio(){
        $data['title'] = 'Portfolio';
        $data['portfolio'] = $this->front_model->getAllPortfolio();
        $data['case_studies'] = $this->front_model->getAllCaseStudies();
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        return $this->loadview('case_study/case_studies', $data);
    }


    // ========================================================= Services Start ===========================================================

    // Ui Ux Design Start
    public function services_ui_ux_design(){
        $data['title'] = 'UI UX Design Services';
        $data['meta_title'] = "UI/UX Design Services | Designoweb Technologies";
        $data['meta_description'] = "Boost user engagement with our expert UI/UX design services. Our team will help you create a website that's not only visually stunning but also easy to navigate. Contact us now!";
        $data['meta_keywords'] = "ui ux design services";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/ui_ux_design', $data);
    }
    
    public function services_product_design(){
        $data['title'] = 'Product Design Services';
        $data['meta_title'] = "Product Design Services | Designoweb Technologies";
        $data['meta_description'] = "Designoweb Technologies provides top-notch product design services. We empower entrepreneurs to design & launch better products by leveraging our decades of experience in design.";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/product_design', $data);
    }
    
    public function services_web_design(){
        $data['title'] = 'Web Design Services';
        $data['meta_title'] = "Web Design Services | Designoweb Technologies";
        $data['meta_description'] = "We provide expert web design services that create visually stunning, user-friendly websites that are optimized for conversion. Get in touch today to elevate your online presence.";
        $data['meta_keywords'] = "web design services";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/web_design', $data);
    }
    
    public function services_mobile_app_design(){
        $data['title'] = 'Mobile App Design Services';
        $data['meta_title'] = "Expert Mobile App Design Services | Designoweb Technologies";
        $data['meta_description'] = "Get expert mobile app design services from Designoweb Technologies. We provide custom, branded apps with a responsive design and beautiful visuals.";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/mobile_app_design', $data);
    }
    
    public function services_brand_design(){
        $data['title'] = 'Brand Design Services';
        $data['meta_title'] = "Custom Brand Design Services| Designoweb Technologies";
        $data['meta_description'] = "Designoweb Technologies provides Custom Brand Design Services. We deliver innovative, professional & tailored solutions for brandingwith 100% satisfaction guaranteed.";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/brand_design', $data);
    }
    // Ui Ux Design End

    // Web App Development Start
    public function services_web_app_development(){
        $data['title'] = 'Web App Development Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/web_app_development', $data);
    }

    public function services_saas_website(){
        $data['title'] = 'SAAS Website Services';
        $data['meta_title'] = "Professional SAAS Website Development Services | Designoweb Technologies";
        $data['meta_description'] = "Designoweb Technologies provides professional SAAS website development services. Our SAAS developers will help you build a scalable & secure website at an affordable price.";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/saas_website', $data);
    }
    
    public function services_cms_website(){
        $data['title'] = 'CMS Website Services';
        $data['meta_title'] = "CMS Website Development Services| Designoweb Technologies";
        $data['meta_description'] = "Designoweb Technologies offers professional CMS website development services. Our team of experienced CMS developers will help you build a dynamic &user-friendly website that is easy to manage.";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/cms_website', $data);
    }
    
    public function services_ecommerce_website(){
        $data['title'] = 'E-Commerce Website Services';
        $data['meta_title'] = "Ecommerce Website Development Services | Designoweb Technologies";
        $data['meta_description'] = "Looking for expert ecommerce website development services? We create responsive & user-friendly websites that drive sales. Contact us today!";
        $data['meta_keywords'] = "ecommerce website development services";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/ecommerce_website', $data);
    }
    
    public function services_custom_website(){
        $data['title'] = 'Custom Website Services';
        $data['meta_title'] = "Custom Website Development Services | Designoweb Technologies";
        $data['meta_description'] = "Designoweb Technologies provides custom website development services. Our team of experienced web developers offers the best solution to your business at affordable rates, with high-quality work.";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/custom_website', $data);
    }
    
    public function services_custom_crm(){
        $data['title'] = 'Custom CRM Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/custom_crm', $data);
    }
    // Web App Development End

    // Mobile App Development Start
    public function services_mobile_app_development(){
        $data['title'] = 'Mobile App Development Services';
        $data['meta_title'] = "Custom Mobile App Development Services | Designoweb Technologies";
        $data['meta_description'] = "Elevate your business with our top-notch mobile app development services. Tailored solutions for iOS, Android, & hybrid apps. Contact us for a quote!";
        $data['meta_keywords'] = "mobile app development services";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/mobile_app_development', $data);
    }

    public function services_native_apps(){
        $data['title'] = 'Native Apps Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/native_apps', $data);
    }

    public function services_hybrid_apps(){
        $data['title'] = 'Hybrid Apps Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/hybrid_apps', $data);
    }

    public function services_tv_apps(){
        $data['title'] = 'TV Apps Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/tv_apps', $data);
    }

    public function services_wearable_apps(){
        $data['title'] = 'Wearable Apps Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/wearable_apps', $data);
    }

    public function services_iot_apps(){
        $data['title'] = 'IOT Apps Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/iot_apps', $data);
    }

    public function services_ar_vr_apps(){
        $data['title'] = 'AR VR Apps Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/ar_vr_apps', $data);
    }
    // Mobile App Development End

    // Quality Assurance Start
    public function services_quality_assurance(){
        $data['title'] = 'Quality Assurance Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/quality_assurance/quality_assurance', $data);
    }
    
    public function services_manual_testing(){
        $data['title'] = 'Manual Testing Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/quality_assurance/manual_testing', $data);
    }
    
    public function services_automation_testing(){
        $data['title'] = 'Automation Testing Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/quality_assurance/automation_testing', $data);
    }
    
    public function services_user_experience_testing(){
        $data['title'] = 'User Experience Testing Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/quality_assurance/user_experience_testing', $data);
    }
    // Quality Assurance End

    public function services_growth_hacking(){
        $data['title'] = 'Growth Hacking Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/growth_hacking', $data);
    }
    
    // SEO Start
    public function services_seo(){
        $data['title'] = 'SEO Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/seo/seo', $data);
    }
    
    public function services_performance_marketing(){
        $data['title'] = 'Performance Marketing Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/seo/performance_marketing', $data);
    }
    
    public function services_google_ads(){
        $data['title'] = 'Google Ads Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/seo/google_ads', $data);
    }
    
    public function services_meta_ads(){
        $data['title'] = 'Meta Ads Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/seo/meta_ads', $data);
    }
    // SEO End

    // Startup Boosters Start
    public function services_idea_consulting(){
        $data['title'] = 'Idea Consulting Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/startup_boosters/idea_consulting', $data);
    }

    public function services_prototyping(){
        $data['title'] = 'Prototyping Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/startup_boosters/prototyping', $data);
    }

    public function services_mvp_development(){
        $data['title'] = 'MVP Development Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/startup_boosters/mvp_development', $data);
    }

    public function services_product_development(){
        $data['title'] = 'Product Development Services';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/startup_boosters/product_development', $data);
    }
    // Startup Boosters End
    // ========================================================= Services End ============================================================


    // =================================================== OffShore Developers Start  ====================================================

    // Hire Web Developers Start
    public function offshore_hire_web_developers(){
        $data['title'] = 'Hire Web Developers';
        $data['meta_title'] = "Hire Dedicated Web Developers | Designoweb Technologies";
        $data['meta_description'] = "Custom websites that drive results. Contact us to hire top web developers with expertise in various web technologies for your project. Hire our web developers today!";
        $data['meta_keywords'] = "hire web developers";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/hire_web_developers', $data);
    }
    
    public function offshore_hire_java_developers(){
        $data['title'] = 'Hire Java Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/java', $data);
    }
    
    public function offshore_hire_python_developers(){
        $data['title'] = 'Hire Python Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/python', $data);
    }
    
    public function offshore_hire_php_developers(){
        $data['title'] = 'Hire PHP Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/php', $data);
    }
    
    public function offshore_hire_dotnet_developers(){
        $data['title'] = 'Hire .NET Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/dotnet', $data);
    }
    
    public function offshore_hire_ruby_on_rails_developers(){
        $data['title'] = 'Hire Ruby On Rails Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/ruby_on_rails', $data);
    }
    
    public function offshore_hire_laravel_developers(){
        $data['title'] = 'Hire Laravel Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/laravel', $data);
    }
    
    public function offshore_hire_magento_developers(){
        $data['title'] = 'Hire Magento Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/magento', $data);
    }
    
    public function offshore_hire_shopify_developers(){
        $data['title'] = 'Hire Shopify Developers';
        $data['meta_title'] = "Hire Certified Shopify Developers | Designoweb Technologies";
        $data['meta_description'] = "Hire certified Shopify developers to build high-converting & user-friendly Shopify stores that stand out from the competition.  Hire our Shopify developer now!";
        $data['meta_keywords'] = "hire shopify developers";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/shopify', $data);
    }
    
    public function offshore_hire_wordpress_developers(){
        $data['title'] = 'Hire Wordpress Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/wordpress', $data);
    }
    // Hire Web Developers End

    // Hire App Developers Start
    public function offshore_hire_app_developers(){
        $data['title'] = 'Hire App Developers';
        $data['meta_title'] = "Hire Professional App Developers | Designoweb Technologies";
        $data['meta_description'] = "Bring your app ideas to life with our top-rated app developers. Contact us to hire app developers who can create engaging, high-performing mobile apps. Hire Now!";
        $data['meta_keywords'] = "hire app developers";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/hire_app_developers', $data);
    }
    
    public function offshore_hire_android_developers(){
        $data['title'] = 'Hire Android Developers';
        $data['meta_title'] = "Hire Top Android Developers | Designoweb Technologies";
        $data['meta_description'] = "Need a custom Android app? Contact us to hire top Android developers who can create visually appealing & high-performing mobile apps. Hire Now!";
        $data['meta_keywords'] = "hire android developers";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/android', $data);
    }
    
    public function offshore_hire_ios_developers(){
        $data['title'] = 'Hire IOS Developers';
        $data['meta_title'] = "Hire Certified iOS Developers | Designoweb Technologies";
        $data['meta_description'] = "Need a custom iOS app? Hire certified iOS developers to build high-quality & user-friendly iOS app tailored to your business. Hire iOS Developers Now!";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/ios', $data);
    }
    
    public function offshore_hire_react_native_developers(){
        $data['title'] = 'Hire React Native Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/react_native', $data);
    }
    
    public function offshore_hire_flutter_developers(){
        $data['title'] = 'Hire Flutter Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/flutter', $data);
    }
    // Hire App Developers End

    // Hire Js Developers Start
    public function offshore_hire_js_developers(){
        $data['title'] = 'Hire Js Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_js_developers/hire_js_developers', $data);
    }
    
    public function offshore_hire_react_js_developers(){
        $data['title'] = 'Hire React Js Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_js_developers/react_js', $data);
    }
    
    public function offshore_hire_angular_js_developers(){
        $data['title'] = 'Hire Angular Js Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_js_developers/angular_js', $data);
    }
    
    public function offshore_hire_node_js_developers(){
        $data['title'] = 'Hire Node Js Developers';
        $data['meta_title'] = "Hire Certified NodeJS Developers | Dedicated Node.js Programmer";
        $data['meta_description'] = "Hire NodeJS Developers for scalable & efficient web applications. Contact us to create feature-rich web apps for your business. Hire our Nodejs developer Now!";
        $data['meta_keywords'] = "hire nodejs developers";
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_js_developers/node_js', $data);
    }
    // Hire Js Developers End

    // Hire Full Stack Developers Start
    public function offshore_hire_fullstack_developers(){
        $data['title'] = 'Hire Full Stack Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_fullstack_developers/hire_fullstack_developers', $data);
    }
    
    public function offshore_hire_mean_stack_developers(){
        $data['title'] = 'Hire Mean Stack Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_fullstack_developers/mean_stack', $data);
    }
    
    public function offshore_hire_mern_stack_developers(){
        $data['title'] = 'Hire Mern Stack Developers';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_fullstack_developers/mern_stack', $data);
    }
    // Hire Full Stack Developers End

    // Hire Other Developers Start
    public function offshore_ui_ux_designer(){
        $data['title'] = 'Hire UI UX Designer';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/ui_ux_designer', $data);
    }

    public function offshore_business_analyst(){
        $data['title'] = 'Offshore Business Analyst';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/business_analyst', $data);
    }

    public function offshore_project_manager(){
        $data['title'] = 'Offshore Project Manager';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/project_manager', $data);
    }

    public function offshore_blockchain_developer(){
        $data['title'] = 'Offshore Blockchain Developer';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/blockchain_developer', $data);
    }

    public function offshore_salesforce_developer(){
        $data['title'] = 'Offshore Salesforce Developer';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/salesforce_developer', $data);
    }
    // Hire Other Developers End

    // Team Extension Start
    public function offshore_development_center(){
        $data['title'] = 'Offshore Development Center';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/development_center', $data);
    }

    public function offshore_dedicated_teams(){
        $data['title'] = 'Offshore Dedicated Teams';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/dedicated_teams', $data);
    }

    public function offshore_staff_augmentation(){
        $data['title'] = 'Offshore Staff Augmentation';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/staff_augmentation', $data);
    }
    // Team Extension End
    // ==================================================== OffShore Developers End  =====================================================


    // ===================================================== Technologies Start  =========================================================
    // Mobile Start
    public function technology_ios(){
        $data['title'] = 'Technology IOS';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/ios', $data);
    }

    public function technology_android(){
        $data['title'] = 'Technology Android';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/android', $data);
    }

    public function technology_flutter(){
        $data['title'] = 'Technology Flutter';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/flutter', $data);
    }

    public function technology_react_native(){
        $data['title'] = 'Technology React Native';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/react_native', $data);
    }

    public function technology_iot(){
        $data['title'] = 'Technology IOT';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/iot', $data);
    }

    public function technology_ar(){
        $data['title'] = 'Technology AR';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/ar', $data);
    }

    public function technology_vr(){
        $data['title'] = 'Technology VR';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/vr', $data);
    }
    // Mobile End

    // Web Start
    public function technology_java(){
        $data['title'] = 'Technology Java';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/java', $data);
    }

    public function technology_php(){
        $data['title'] = 'Technology PHP';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/php', $data);
    }

    public function technology_python(){
        $data['title'] = 'Technology Python';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/python', $data);
    }

    public function technology_ruby_on_rails(){
        $data['title'] = 'Technology Ruby On Rails';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/ruby_on_rails', $data);
    }

    public function technology_laravel(){
        $data['title'] = 'Technology Laravel';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/laravel', $data);
    }

    public function technology_mean(){
        $data['title'] = 'Technology MEAN';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/mean', $data);
    }

    public function technology_mern(){
        $data['title'] = 'Technology MERN';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/mern', $data);
    }

    public function technology_angular_js(){
        $data['title'] = 'Technology Angular Js';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/angular_js', $data);
    }

    public function technology_react_js(){
        $data['title'] = 'Technology React Js';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/react_js', $data);
    }

    public function technology_shopify(){
        $data['title'] = 'Technology Shopify';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/shopify', $data);
    }

    public function technology_wordpress(){
        $data['title'] = 'Technology Wordpress';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/wordpress', $data);
    }
    // Web End

    // Cloud & Devops Start
    public function technology_aws(){
        $data['title'] = 'Technology AWS';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/cloud_and_devops/aws', $data);
    }

    public function technology_azure(){
        $data['title'] = 'Technology Azure';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/cloud_and_devops/azure', $data);
    }

    public function technology_docker(){
        $data['title'] = 'Technology Docker';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/cloud_and_devops/docker', $data);
    }
    // Cloud & Devops End
    // ====================================================== Technologies End  ==========================================================

    public function foodX(){
        $data['title'] = "FoodX";
        $data['meta_title'] = "FoodX - The World’s Best AI Based Food Delivery Solution for your Business";
        $data['meta_description'] = "FoodX is the world's most advance, ready to use food delivery application that lets you increase your food business revenue by leaps and bounds.";
        return $this->loadview('foodx/foodx', $data);
    }

    public function grocerX(){
        $data['title'] = 'GrocerX';
        $data['meta_title'] = "GrocerX | The World’s Best AI-Based Grocery Delivery Solution for your Business";
        return $this->loadview('grocerx/grocerx', $data);
    }

    public function medX(){
        $data['title'] = 'MedX';
        $data['meta_title'] = "MedX | The World’s Best AI-Based Pharmacy Delivery Solution for your Business";
        return $this->loadview('medx/medx', $data);
    }

    public function terms(){
        $data['title'] = 'Terms of Use';
        return $this->loadview('terms', $data);
    }

    public function privacy(){
        $data['title'] = 'Privacy-Policy';
        return $this->loadview('privacy', $data);
    }

    public function faqs(){
        $data['title'] = 'Faqs';
        return $this->loadview('faqs', $data);
    }

    public function coupons(){
        $data['title'] = 'Coupons';
        return $this->loadview('coupons', $data);
    }

    public function sendConsultationMail(Request $request){
        $requestdata = $request->all();
        $user_id = $request->session()->get('lge_user_id');
        $validator = Validator::make($requestdata, $rules = [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'requirements'  => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
            
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        
        $data = [
            'name'          => $request['name'],
            'phone'         => $request['phone'],
            'email'         => $request['email'],
            'requirements'  => $request['requirements'],
            'type'          => 'consultation',
        ];
        
        $result = $this->front_model->insertConsultationData($data);
        if($result){
            if(@$this->send_consultation_mail($data)){
                @$this->send_thankyou_mail($data);
            }
            return response()->json(['result' => 1, 'msg' => "Email Sent Successfully"]);
        }else{
            return response()->json(['result' => -1, 'msg' => "Something went wrong!"]);
        }
    }
    
    public function sendConsultationMailV2(Request $request){
        $requestdata = $request->all();
        $user_id = $request->session()->get('lge_user_id');
        $validator = Validator::make($requestdata, $rules = [
            'name1' => 'required',
            'phone1' => 'required',
            'email1' => 'required|email',
            'requirements1'  => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
            
        ], $messages = [
            'required' => 'The :attribute field is required.',
            'name1.required' => 'The name field is required.',
            'email1.required' => 'The email field is required.',
            'phone1.required' => 'The phone field is required.',
            'requirements1.required' => 'The requirements field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        
        $data = [
            'name'          => $request['name1'],
            'phone'         => $request['phone1'],
            'email'         => $request['email1'],
            'requirements'  => $request['requirements1'],
            'type'          => 'consultation',
        ];
        
        $result = $this->front_model->insertConsultationData($data);
        if($result){
            if(@$this->send_consultation_mail($data)){
                @$this->send_thankyou_mail($data);
            }
            return response()->json(['result' => 1, 'msg' => "Email Sent Successfully"]);
        }else{
            return response()->json(['result' => -1, 'msg' => "Something went wrong!"]);
        }
    }
    
    public function sendConsultationMailV3(Request $request){
        $requestdata = $request->all();
        $user_id = $request->session()->get('lge_user_id');
        $validator = Validator::make($requestdata, $rules = [
            'name3' => 'required',
            'company_name3' => 'required',
            'phone3' => 'required',
            'email3' => 'required|email',
            'requirements3'  => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
            
        ], $messages = [
            'required' => 'The :attribute field is required.',
            'name3.required' => 'The name field is required.',
            'company_name3.required' => 'The company field is required.',
            'phone3.required' => 'The phone field is required.',
            'email3.required' => 'The email field is required.',
            'requirements3.required' => 'The requirements field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        
        $data = [
            'name'          => $request['name3'],
            'company_name'  => $request['company_name3'],
            'phone'         => $request['phone3'],
            'email'         => $request['email3'],
            'requirements'  => $request['requirements3'],
            'type'          => 'consultation',
        ];
        
        $result = $this->front_model->insertConsultationData($data);
        if($result){
            if(@$this->send_consultation_mail($data)){
                @$this->send_thankyou_mail($data);
            }
            return response()->json(['result' => 1, 'msg' => "Email Sent Successfully"]);
        }else{
            return response()->json(['result' => -1, 'msg' => "Something went wrong!"]);
        }
    }
    
    
    
    public function send_consultation_mail($requestdata){
        //$from = $requestdata['email'];
        $fromName = $requestdata['name'];
        $data['name'] = $fromName;
        $data['phone'] = $requestdata['phone'];
        $data['message'] = $requestdata['requirements'];
        
        $to = $this->toemail;

        $subject = "Email to consult with Designoweb-Technologies";

        $htmlContent = view('front/mail/sendmail', $data)->render();

        $this->sendInBlue($to, 'Designoweb Technologies', $subject, $fromName, $from, $htmlContent);
        return true;
    }

    public function sendMail(Request $request){
        $requestdata = $request->all();
        $user_id = $request->session()->get('lge_user_id');
        $validator = Validator::make($requestdata, $rules = [
            'email' => 'required|email',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $result = $this->front_model->insertBlogConsultData($requestdata);
        if($result){
            if(@$this->send_consultation_mail($requestdata)){
                @$this->send_thankyou_mail($requestdata);
            }
            return response()->json(['result' => 1, 'msg' => "Email Sent Successfully", 'url' => route('front/blog')]);
        }else{
            return response()->json(['result' => -1, 'msg' => "Something went wrong!"]);
        }
    }
    
    public function send_blog_mail(){
        $to = $this->toemail;
        $from = $request->post('email');

        $subject = "Sending Email to contact with Designoweb Technologies";

        $htmlContent = " 
            <html> 
            <head> 
                <title>Email</title> 
            </head> 
            <body> 
                <h1>Hello,</h1><br>
                <h5>Here are my details:</h5> 
                <table cellspacing='0' style='border: 2px dashed #FB4314; width: 100%;'>  
                    <tr style='background-color: #e0e0e0;'> 
                        <th>For Articles, tips and expert talks about mobile apps my email:</th><td>$from</td> 
                    </tr> 
                </table> 
            </body> '
            </html>";
            
        $this->sendInBlue($to, 'Designoweb Technologies', $subject, NULL, $from, $htmlContent);
        return true;
    }
    
    // public function sendFoodxMail(Request $request){
    //     $requestdata = $request->all();
    //     $validator = Validator::make($requestdata, $rules = [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'requirements'  => 'required',
    //         'g-recaptcha-response' => ['required', new ReCaptcha]
            
    //     ], $messages = [
    //         'required' => 'The :attribute field is required.',
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json(['result' => 0, 'errors' => $validator->errors()]);
    //         return false;
    //     }
    //     $result = $this->front_model->insertLeadsData($requestdata);
    //     if($result){
    //         @$this->foodx_mail($requestdata);
    //         return response()->json(['result' => 1, 'msg' => "E-Mail sent successfully", 'url' => route('front/foodx')]);
    //     }else{
    //         return response()->json(['result' => -1, 'msg' => "Something went wrong!"]);
    //     }
    // }
    
    // public function sendFoodxModalMail(Request $request){
    //     $requestdata = $request->all();
    //     $validator = Validator::make($requestdata, $rules = [
    //         'name1' => 'required',
    //         'email1' => 'required|email',
    //         'phone1' => 'required',
    //         'requirements1'  => 'required',
    //         'g-recaptcha-response-1' => 'required|recaptcha'
            
    //     ], $messages = [
    //         'required' => 'The :attribute field is required.',
    //         'name1.required' => 'The name field is required.',
    //         'email1.required' => 'The email field is required.',
    //         'phone1.required' => 'The phone field is required.',
    //         'requirements1.required' => 'The requirements field is required.',
    //         'g-recaptcha-response-1.required' => 'The g-recaptcha-response field is required.',
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json(['result' => 0, 'errors' => $validator->errors()]);
    //         return false;
    //     }
    //     $result = $this->front_model->insertModalLeadsData($requestdata);
    //     if($result){
    //         @$this->foodx_modal_mail($requestdata);
    //         return response()->json(['result' => 1, 'msg' => "E-Mail sent successfully", 'url' => route('front/foodx')]);
    //     }else{
    //         return response()->json(['result' => -1, 'msg' => "Something went wrong!"]);
    //     }
    // }
    
    // ---------------------- Mail function ---------------------
    // public function foodx_mail($data){
    //     $fromName = $data['name'];
    //     $from = $data['email'];
    //     $phone = $data['phone'];
    //     $skypid = $data['skypeid'];
    //     $message = $data['requirements'];
    //     $subject = "Sending Email to contact with Designoweb Technologies";
    //     $htmlContent = " 
    //         <html> 
    //         <head> 
    //             <title>Email</title> 
    //         </head> 
    //         <body> 
    //             <h1>Hello, My name is $fromName.</h1><br>
    //             <h5>Here are my details:</h5> 
    //             <table cellspacing='0' style='border: 2px dashed #FB4314; width: 100%;'> 
    //                 <tr> 
    //                     <th>Contact Number:</th><td>$phone</td> 
    //                 </tr> 
    //                 <tr style='background-color: #e0e0e0;'> 
    //                     <th>Email:</th><td>$from</td> 
    //                 </tr>
    //                 <tr> 
    //                     <th>Skype Id:</th><td>$skypid</td> 
    //                 </tr> 
    //                 <tr style='background-color: #e0e0e0;'> 
    //                     <th>Requirements:</th><td>$message</td> 
    //                 </tr> 
    //             </table> 
    //         </body> 
    //         </html>"; 
    //     $to = $this->toemail;
    //     $headers = 'MIME-Version: 1.0' . "\r\n";
    //     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //     $headers .= 'From: ' . $from . "\r\n";
    //     @mail($to, $subject, $htmlContent, $headers);
    // }
    
    // public function foodx_modal_mail($data){
    //     $fromName = $data['name1'];
    //     $from = $data['email1'];
    //     $phone = $data['phone1'];
    //     $skypid = $data['skypeid1'];
    //     $message = $data['requirements1'];
    //     $subject = "Sending Email to contact with Designoweb Technologies";
    //     $htmlContent = " 
    //         <html> 
    //         <head> 
    //             <title>Email</title> 
    //         </head> 
    //         <body> 
    //             <h1>Hello, My name is $fromName.</h1><br>
    //             <h5>Here are my details:</h5> 
    //             <table cellspacing='0' style='border: 2px dashed #FB4314; width: 100%;'> 
    //                 <tr> 
    //                     <th>Contact Number:</th><td>$phone</td> 
    //                 </tr> 
    //                 <tr style='background-color: #e0e0e0;'> 
    //                     <th>Email:</th><td>$from</td> 
    //                 </tr>  
    //                 <tr> 
    //                     <th>Skype Id:</th><td>$skypid</td> 
    //                 </tr> 
    //                 <tr style='background-color: #e0e0e0;'> 
    //                     <th>Requirements:</th><td>$message</td> 
    //                 </tr> 
    //             </table> 
    //         </body> 
    //         </html>"; 
    //     $to = $this->toemail;
    //     $headers = 'MIME-Version: 1.0' . "\r\n";
    //     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //     $headers .= 'From: ' . $from . "\r\n";
    //     @mail($to, $subject, $htmlContent, $headers);
    // }
    
    // public function sendmailview(){
    //     $data['title'] = 'Mail';
    //     return view('front/mail/thankyoumail', $data);
    // }
    
     // scalie----------------
    // public function scalieHome(){
    //     $data['title'] = 'Scalie home';
    //     return $this->loadview('scalie/scaliehome', $data);
    // }
    
    public function scalieHome(){
        $data['title'] = 'Build Your Team';
        return $this->loadview('scalie/build_team', $data);
    }
    
    // public function scalieBecomePartner(){
    //     $data['title'] = 'Scalie Become Partner';
    //     return $this->loadview('scalie/scalie-become-partner', $data);
    // }
    
    public function scalieBecomePartner(){
        $data['title'] = 'Become Partner';
        return $this->loadview('scalie/become_partner', $data);
    }
    
    public function hiringStep1(){
        $data['title'] = 'Scalie Hiring';
        $data['technology'] = $this->front_model->getTechnologies();
        return $this->loadview('scalie/step1', $data);
    }
    public function hiringStep2(){
        $data['title'] = 'Scalie Hiring';
         $data['contactdata'] = select('skill_contact_details','*',[['contact_id','=',session()->get('contact_id')]])->first();
        return $this->loadview('scalie/step2', $data);
    }
    
    public function doStep1(Request $request){
        $technology = $request->post('selectOption');
        $email =$request->post('workEmail');
        $otherSkills = $request->post('otherSkills');
        if(!empty($otherSkills)){
            $data['already_added'] = $this->front_model->getAddedTechnologies($otherSkills);
        }
       
        if (!empty($otherSkills)) {
            if ($data['already_added'] != 0) {
                return response()->json(['result' => -1, 'msg' => 'Technology already exist in the list.']);
                return FALSE;
            }
        }
        $work_email = $request->post('workEmail');
        if(empty($work_email)){
            return response()->json(['result' => -1, 'msg' => 'Please Fill Work Email.']);
            return FALSE;
        }
        if (empty($technology) && empty($otherSkills)) {
            return response()->json(['result' => -1, 'msg' => 'Please choose atleast one technology!!!']);
            return FALSE;
        }
        $contact_details =array(
            'name' => $request->post('name'),
            'contact_no' => $request->post('contact_no'),
            'company_name' => $request->post('company_name'),
            'work_email' => $request->post('workEmail'),
            'employee_count' => $request->post('employee_count'),
            'funded_state' => $request->post('funded_state'),
            'status' => 'Active'
        );
        $session_id = $request->session()->get('contact_id');
       
        if(empty($session_id)){
            $insert_id = insert('skill_contact_details',$contact_details);
            $request->session()->put('contact_id',$insert_id);
        }else{
            $insert_id = $session_id;
            update('skill_contact_details','contact_id',$insert_id,$contact_details);
        }

        if(empty($session_id)){
            if(!empty($technology)){
                $temp = [];
                foreach($technology as $tec){
                    $temp['contact_id'] = $insert_id;
                    $temp['tech_id'] = $tec;
                    $temp['status'] = 'Active';
                    insert('skills_information',$temp);
                }
            }
            if(!empty($otherSkills)){
                $temp = [];
                foreach($otherSkills as $other){
                    $temp=[];
                    $temp['tech_id']='-1';
                    $temp['other_technology']=$other;
                    $temp['contact_id']=$insert_id;
                    insert('skills_information',$temp);
                }
            }
        }else{
            delete('skills_information','contact_id',$insert_id);
            if(!empty($technology)){
                $temp = [];
                foreach($technology as $tec){
                    $temp['contact_id'] = $insert_id;
                    $temp['tech_id'] = $tec;
                    $temp['status'] = 'Active';
                    insert('skills_information',$temp);
                }
            }
            if(!empty($otherSkills)){
                $temp = [];
                foreach($otherSkills as $other){
                    $temp=[];
                    $temp['tech_id']='-1';
                    $temp['other_technology']=$other;
                    $temp['contact_id']=$insert_id;
                    insert('skills_information',$temp);
                }
            }
        }
       
        return response()->json(['result'=>1,'msg'=>"Data added successfully",'url'=>route('scalie/hiringStep2')]);
    
    }
    public function doStep2(Request $request){
        $requestdata = $request->all();
        $validator = Validator::make($requestdata, $rules = [
            'name' => 'required',
            'contactNumber'=>'required',
            'companyName' => 'required',
            
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
         
        $employee_count = $request->post('employeeCount');
        if(empty($employee_count)){
            return response()->json(['result' => -1, 'msg' => 'Please Choose Employee Count.']);
            return FALSE;
        }
        $fundedState = $request->post('fundedState');
        if(empty($fundedState)){
            return response()->json(['result' => -1, 'msg' => 'Please Choose Funded State']);
            return FALSE;
        }
        $contact_details =array(
            'name' => $request->post('name'),
            'contact_no' => $request->post('contactNumber'),
            'company_name' => $request->post('companyName'),
            'employee_count' => $request->post('employeeCount'),
            'funded_state' => $request->post('fundedState'),
            'status' => 'Active'
        );
        $session_id = $request->session()->get('contact_id');
        if(empty($session_id)){
            $insert_id = insert('skill_contact_details',$contact_details);
            session()->put('contact_id',$insert_id);
        }else{
            $insert_id = $session_id;
            update('skill_contact_details','contact_id',$insert_id,$contact_details);
        }
        $data['contact_details'] =select('skill_contact_details','*',[['contact_id','=',session()->get('contact_id')]])->first();;
        $data['skillinfo'] = $this->front_model->getSkillinfoBycId($session_id);
        $data['otherskillsinfo'] = $this->front_model->getOtherSkillinfoBycId($session_id);
        
        if (!empty($other_technologies)) {
            foreach ($other_technologies as $session) {
                foreach ($data['otherskillsinfo'] as $value) {
                    $value->other_tech = $session;
                }
              
            }
        }

        $this->send_scalie_mail($data);
       
        return response()->json(['result'=>1,'msg'=>"Your Details has been Submitted",'url'=>route('scalie/thankyou')]);
    }
    public function thankyou(Request $request){
       
        if(!session()->get('contact_id')){
            return  redirect('/');
        }
         session()->forget('contact_id');
        $data['title'] = 'Thank You';
        return $this->loadview('scalie/thank-you', $data);
    }

    public function send_scalie_mail($data){
        $to ='info@designoweb.com';
        // $to ='ambuj.designoweb@gmail.com';
        $fromName = 'Scalie Leads';
        $subject = "Important Mail From Scalie";
        $from ='info@designoweb.com';

        $htmlContent = view('front/mail/leadmail', $data)->render();

        $this->sendInBlue($to, 'Designoweb Technologies', $subject, $fromName, $from, $htmlContent);
        return true;
    }
    
    
    public function contactus(){
        $data['title'] = 'Contact Us';
        return $this->loadview('scalie/contact-us', $data);
    }
    // -------------------Designowb New Urls----------------------
    public function designSolutions(){
        $data['title'] = 'Design Solutions';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/design_solutions', $data);
    }
    public function mobileSolutions(){
        $data['title'] = 'Mobile Solutions';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/mobile_solutions', $data);
    }
    public function webSolutions(){
        $data['title'] = 'Web Solutions';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/web_solutions', $data);
    }
    
    // ========

    // Nearshore Developers Urls
    // public function nearshoreDevelopment(){
    //     $data['title'] = 'Contractual Staffing';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/nearshore_development/nearshore_development', $data);
    // }
    // public function itStaffing(){
    //     $data['title'] = 'IT Staffing';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/nearshore_development/it_staffing', $data);
    // }
    // public function contractualStaffing(){
    //     $data['title'] = 'Contractual Staffing';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/nearshore_development/contractual_staffing', $data);
    // }
    // public function leadershipHiring(){
    //     $data['title'] = 'Leadership Hiring';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/nearshore_development/leadership_hiring', $data);
    // }
    // public function permanentStaffing(){
    //     $data['title'] = 'Permanent Staffing';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/nearshore_development/permanent_staffing', $data);
    // }
    // public function recruitmentProcessOutsourcing(){
    //     $data['title'] = 'Recruitment Process Outsourcing';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/nearshore_development/recruitment_process_outsourcing', $data);
    // }

    // Offshore Development Urls
    // public function offshoreDevelopment(){
    //     $data['title'] = 'Offshore Development';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/offshore_development', $data);
    // }
    // public function mobileAppDevelopers(){
    //     $data['title'] = 'Mobile App Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/mobile_app_developers', $data);
    // }
    // public function frontendDevelopers(){
    //     $data['title'] = 'Frontend Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/frontend_developers', $data);
    // }
    // public function backendDevelopers(){
    //     $data['title'] = 'Backend Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/backend_developers', $data);
    // }
    // public function fullstackDevelopers(){
    //     $data['title'] = 'Backend Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/fullstack_developers', $data);
    // }
    // public function javascriptDevelopers(){
    //     $data['title'] = 'Javascript Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/javascript_developers', $data);
    // }
    // public function automationEngineers(){
    //     $data['title'] = 'Automation Engineers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/automation_engineers', $data);
    // }
    // public function softwareArchitects(){
    //     $data['title'] = 'Software Architects';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/software_architects', $data);
    // }
    // public function aiDevelopers(){
    //     $data['title'] = 'AI Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/ai_developers', $data);
    // }
    // public function machineLearningEngineers(){
    //     $data['title'] = 'Machine Learning Engineers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/machine_learning_engineers', $data);
    // }
    // public function blockchainDevelopers(){
    //     $data['title'] = 'Blockchain Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/blockchain_developers', $data);
    // }
    // public function devOpsEngineers(){
    //     $data['title'] = 'DevOps Engineers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/dev_ops_engineers', $data);
    // }
    // public function dataEngineers(){
    //     $data['title'] = 'Data Engineers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/data_engineers', $data);
    // }
    // public function dataScientists(){
    //     $data['title'] = 'Data Scientists';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/data_scientists', $data);
    // }
    // public function tableauDevelopers(){
    //     $data['title'] = 'Tableau Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/tableau_developers', $data);
    // }
    // public function biDevelopers(){
    //     $data['title'] = 'BI Developers';
    //     $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
    //     $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
    //     return $this->loadview('offshore_developers/offshore_development/bi_developers', $data);
    // }

    // Metaverse Urls
    public function metaverseService(){
        $data['title'] = 'Metaverse';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/metaverse/metaverse', $data);
    }
    public function threedProductDesign(){
        $data['title'] = '3d Product Design';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/metaverse/3d_product_design', $data);
    }
    public function virtualSpaceCreation(){
        $data['title'] = 'Virtual Space Creation';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/metaverse/virtual_space_creation', $data);
    }
    public function unitySolutions(){
        $data['title'] = 'Unity Solutions';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/metaverse/unity_solutions', $data);
    }
    public function animations(){
        $data['title'] = 'Animations';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/metaverse/animations', $data);
    }
    public function itStaffing(){
        $data['title'] = 'IT Staffing';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('it_staffing', $data);
    }
    public function teamExtension(){
        $data['title'] = 'Team Extension';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('team_extension', $data);
    }
    public function virtualCto(){
        $data['title'] = 'Virtual CTO';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('offshore_developers/virtual_cto', $data);
    }
    public function developerCostOptimization(){
        $data['title'] = 'Developer Cost Optimization';
        $data['blogs'] = $this->front_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->front_model->getAllCaseStudies()->random(2);
        return $this->loadview('offshore_developers/developer_cost_optimization', $data);
    }
    
    public function index2(){
        $data['title'] = 'Home';
        $data['loader'] = '1';
        $data['meta_title'] = "App Development Company in India & USA | Designoweb Technologies";
        $data['meta_description'] = "Designoweb Technologies is a leading mobile app development company with a global presence in India & USA. We specialize in delivering digital solutions to startups & enterprises worldwide.";
        $data['testimonials_without_video'] = $this->front_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('index2', $data);
    }
    
}
