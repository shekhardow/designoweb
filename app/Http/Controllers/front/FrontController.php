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
        // $this->toemail = "shekhar.designoweb@gmail.com";
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
        $data['meta_title'] = "App Development Company in India & USA | Designoweb Technologies";
        $data['meta_description'] = "Designoweb Technologies is a leading mobile app development company with a global presence in India & USA. We specialize in delivering digital solutions to startups & enterprises worldwide.";
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
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
        $data['testimonials'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','!=',NULL);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        $data['testimonials_without_video_and_images'] = $this->admin_model->getAllTestimonials()->where('client_image','==',NULL)->where('video_link','==',NULL);
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        return $this->loadview('testimonials', $data);
    }

    public function career(){
        $data['title'] = 'Career';
        return $this->loadview('career', $data);
    }

    public function blog(){
        $data['title'] = 'Blogs';
        $data['blogs'] = $this->admin_model->getAllBlogs();
        return $this->loadview('blogs/blog', $data);
    }

    public function blog_details($slug=NULL){
        $data['title'] = 'Blog Details';
        $data['blog_detail'] = $this->front_model->getBlogDetailBySlug($slug);
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(4);
        return $this->loadview('blogs/blog_details', $data);
    }

    public function press_release(){
        $data['title'] = 'Press Release';
        $data['banner_press_release'] = $this->admin_model->getAllPressRelease()->where('banner_poster','==','Yes');
        $data['press_release'] = $this->admin_model->getAllPressRelease()->where('banner_poster','==','No');
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        return $this->loadview('press_release/press_release', $data);
    }

    public function press_release_details($slug=NULL){
        $data['title'] = 'Press Release Details';
        $data['press_release_detail'] = $this->front_model->getPressReleaseDetailBySlug($slug);
        $data['press_release'] = $this->admin_model->getAllPressRelease()->skip(0)->take(3);
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
        $data['case_studies'] = $this->admin_model->getAllCaseStudies();
        return $this->loadview('case_study/case_studies', $data);
    }

    public function case_study_details($slug=NULL){
        $data['case_study_detail'] = $this->front_model->getCaseStudyDetailBySlug($slug);
        $data['case_challenges_detail'] = $this->admin_model->getAllCaseChallenges($data['case_study_detail']->case_study_id);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->skip(0)->take(3);
        $data['title'] = $data['case_study_detail']->project_name;
        return $this->loadview('case_study/case_study_details', $data);
    }

    public function portfolio(){
        $data['title'] = 'Portfolio';
        $data['portfolio'] = $this->admin_model->getAllPortfolio();
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        return $this->loadview('portfolio', $data);
    }


    // ========================================================= Services Start ===========================================================

    // Ui Ux Design Start
    public function services_ui_ux_design(){
        $data['title'] = 'UI UX Design';
        $data['meta_title'] = "UI/UX Design Services | Designoweb Technologies";
        $data['meta_description'] = "Boost user engagement with our expert UI/UX design services. Our team will help you create a website that's not only visually stunning but also easy to navigate. Contact us now!";
        $data['meta_keywords'] = "ui ux design services";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/ui_ux_design', $data);
    }
    
    public function services_product_design(){
        $data['title'] = 'Product Design';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/product_design', $data);
    }
    
    public function services_web_design(){
        $data['title'] = 'Web Design';
        $data['meta_title'] = "Web Design Services | Designoweb Technologies";
        $data['meta_description'] = "We provide expert web design services that create visually stunning, user-friendly websites that are optimized for conversion. Get in touch today to elevate your online presence.";
        $data['meta_keywords'] = "web design services";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/web_design', $data);
    }
    
    public function services_mobile_app_design(){
        $data['title'] = 'Mobile App Design';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/mobile_app_design', $data);
    }
    
    public function services_brand_design(){
        $data['title'] = 'Brand Design';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/ui_ux_design/brand_design', $data);
    }
    // Ui Ux Design End

    // Web App Development Start
    public function services_web_app_development(){
        $data['title'] = 'Web App Development';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/web_app_development', $data);
    }

    public function services_saas_website(){
        $data['title'] = 'SAAS Website';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/saas_website', $data);
    }
    
    public function services_cms_website(){
        $data['title'] = 'CMS Website';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/cms_website', $data);
    }
    
    public function services_ecommerce_website(){
        $data['title'] = 'E-Commerce Website';
        $data['meta_title'] = "Ecommerce Website Development Services | Designoweb Technologies";
        $data['meta_description'] = "Looking for expert ecommerce website development services? We create responsive & user-friendly websites that drive sales. Contact us today!";
        $data['meta_keywords'] = "ecommerce website development services";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/ecommerce_website', $data);
    }
    
    public function services_custom_website(){
        $data['title'] = 'Custom Website';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/custom_website', $data);
    }
    
    public function services_custom_crm(){
        $data['title'] = 'Custom CRM';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/web_app_development/custom_crm', $data);
    }
    // Web App Development End

    // Mobile App Development Start
    public function services_mobile_app_development(){
        $data['title'] = 'Mobile App Development';
        $data['meta_title'] = "Custom Mobile App Development Services | Designoweb Technologies";
        $data['meta_description'] = "Elevate your business with our top-notch mobile app development services. Tailored solutions for iOS, Android, & hybrid apps. Contact us for a quote!";
        $data['meta_keywords'] = "mobile app development services";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/mobile_app_development', $data);
    }

    public function services_native_apps(){
        $data['title'] = 'Native Apps';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/native_apps', $data);
    }

    public function services_hybrid_apps(){
        $data['title'] = 'Hybrid Apps';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/hybrid_apps', $data);
    }

    public function services_tv_apps(){
        $data['title'] = 'TV Apps';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/tv_apps', $data);
    }

    public function services_wearable_apps(){
        $data['title'] = 'Wearable Apps';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/wearable_apps', $data);
    }

    public function services_iot_apps(){
        $data['title'] = 'IOT Apps';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/iot_apps', $data);
    }

    public function services_ar_vr_apps(){
        $data['title'] = 'AR VR Apps';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/mobile_app_development/ar_vr_apps', $data);
    }
    // Mobile App Development End

    // Quality Assurance Start
    public function services_quality_assurance(){
        $data['title'] = 'Quality Assurance';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/quality_assurance/quality_assurance', $data);
    }
    
    public function services_manual_testing(){
        $data['title'] = 'Manual Testing';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/quality_assurance/manual_testing', $data);
    }
    
    public function services_automation_testing(){
        $data['title'] = 'Automation Testing';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/quality_assurance/automation_testing', $data);
    }
    
    public function services_user_experience_testing(){
        $data['title'] = 'User Experience Testing';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/quality_assurance/user_experience_testing', $data);
    }
    // Quality Assurance End

    public function services_growth_hacking(){
        $data['title'] = 'Growth Hacking';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/growth_hacking', $data);
    }
    
    // SEO Start
    public function services_seo(){
        $data['title'] = 'SEO';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/seo/seo', $data);
    }
    
    public function services_performance_marketing(){
        $data['title'] = 'Performance Marketing';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/seo/performance_marketing', $data);
    }
    
    public function services_google_ads(){
        $data['title'] = 'Google Ads';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/seo/google_ads', $data);
    }
    
    public function services_meta_ads(){
        $data['title'] = 'Meta Ads';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/seo/meta_ads', $data);
    }
    // SEO End

    // Startup Boosters Start
    public function services_idea_consulting(){
        $data['title'] = 'Idea Consulting';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/startup_boosters/idea_consulting', $data);
    }

    public function services_prototyping(){
        $data['title'] = 'Prototyping';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/startup_boosters/prototyping', $data);
    }

    public function services_mvp_development(){
        $data['title'] = 'MVP Development';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('services/startup_boosters/mvp_development', $data);
    }

    public function services_product_development(){
        $data['title'] = 'Product Development';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
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
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/hire_web_developers', $data);
    }
    
    public function offshore_hire_java_developers(){
        $data['title'] = 'Hire Java Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/java', $data);
    }
    
    public function offshore_hire_python_developers(){
        $data['title'] = 'Hire Python Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/python', $data);
    }
    
    public function offshore_hire_php_developers(){
        $data['title'] = 'Hire PHP Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/php', $data);
    }
    
    public function offshore_hire_dotnet_developers(){
        $data['title'] = 'Hire .NET Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/dotnet', $data);
    }
    
    public function offshore_hire_ruby_on_rails_developers(){
        $data['title'] = 'Hire Ruby On Rails Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/ruby_on_rails', $data);
    }
    
    public function offshore_hire_laravel_developers(){
        $data['title'] = 'Hire Laravel Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/laravel', $data);
    }
    
    public function offshore_hire_magento_developers(){
        $data['title'] = 'Hire Magento Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/magento', $data);
    }
    
    public function offshore_hire_shopify_developers(){
        $data['title'] = 'Hire Shopify Developers';
        $data['meta_title'] = "Hire Certified Shopify Developers | Designoweb Technologies";
        $data['meta_description'] = "Hire certified Shopify developers to build high-converting & user-friendly Shopify stores that stand out from the competition.  Hire our Shopify developer now!";
        $data['meta_keywords'] = "hire shopify developers";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/shopify', $data);
    }
    
    public function offshore_hire_wordpress_developers(){
        $data['title'] = 'Hire Wordpress Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_web_developers/wordpress', $data);
    }
    // Hire Web Developers End

    // Hire App Developers Start
    public function offshore_hire_app_developers(){
        $data['title'] = 'Hire App Developers';
        $data['meta_title'] = "Hire Professional App Developers | Designoweb Technologies";
        $data['meta_description'] = "Bring your app ideas to life with our top-rated app developers. Contact us to hire app developers who can create engaging, high-performing mobile apps. Hire Now!";
        $data['meta_keywords'] = "hire app developers";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/hire_app_developers', $data);
    }
    
    public function offshore_hire_android_developers(){
        $data['title'] = 'Hire Android Developers';
        $data['meta_title'] = "Hire Top Android Developers | Designoweb Technologies";
        $data['meta_description'] = "Need a custom Android app? Contact us to hire top Android developers who can create visually appealing & high-performing mobile apps. Hire Now!";
        $data['meta_keywords'] = "hire android developers";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/android', $data);
    }
    
    public function offshore_hire_ios_developers(){
        $data['title'] = 'Hire IOS Developers';
        $data['meta_title'] = "Hire Certified iOS Developers | Designoweb Technologies";
        $data['meta_description'] = "Need a custom iOS app? Hire certified iOS developers to build high-quality & user-friendly iOS app tailored to your business. Hire iOS Developers Now!";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/ios', $data);
    }
    
    public function offshore_hire_react_native_developers(){
        $data['title'] = 'Hire React Native Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/react_native', $data);
    }
    
    public function offshore_hire_flutter_developers(){
        $data['title'] = 'Hire Flutter Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_app_developers/flutter', $data);
    }
    // Hire App Developers End

    // Hire Js Developers Start
    public function offshore_hire_js_developers(){
        $data['title'] = 'Hire Js Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_js_developers/hire_js_developers', $data);
    }
    
    public function offshore_hire_react_js_developers(){
        $data['title'] = 'Hire React Js Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_js_developers/react_js', $data);
    }
    
    public function offshore_hire_angular_js_developers(){
        $data['title'] = 'Hire Angular Js Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_js_developers/angular_js', $data);
    }
    
    public function offshore_hire_node_js_developers(){
        $data['title'] = 'Hire Node Js Developers';
        $data['meta_title'] = "Hire Certified NodeJS Developers | Dedicated Node.js Programmer";
        $data['meta_description'] = "Hire NodeJS Developers for scalable & efficient web applications. Contact us to create feature-rich web apps for your business. Hire our Nodejs developer Now!";
        $data['meta_keywords'] = "hire nodejs developers";
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_js_developers/node_js', $data);
    }
    // Hire Js Developers End

    // Hire Full Stack Developers Start
    public function offshore_hire_fullstack_developers(){
        $data['title'] = 'Hire Full Stack Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_fullstack_developers/hire_fullstack_developers', $data);
    }
    
    public function offshore_hire_mean_stack_developers(){
        $data['title'] = 'Hire Mean Stack Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_fullstack_developers/mean_stack', $data);
    }
    
    public function offshore_hire_mern_stack_developers(){
        $data['title'] = 'Hire Mern Stack Developers';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/hire_fullstack_developers/mern_stack', $data);
    }
    // Hire Full Stack Developers End

    // Hire Other Developers Start
    public function offshore_ui_ux_designer(){
        $data['title'] = 'Hire UI UX Designer';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/ui_ux_designer', $data);
    }

    public function offshore_business_analyst(){
        $data['title'] = 'Offshore Business Analyst';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/business_analyst', $data);
    }

    public function offshore_project_manager(){
        $data['title'] = 'Offshore Project Manager';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/project_manager', $data);
    }

    public function offshore_blockchain_developer(){
        $data['title'] = 'Offshore Blockchain Developer';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/blockchain_developer', $data);
    }

    public function offshore_salesforce_developer(){
        $data['title'] = 'Offshore Salesforce Developer';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/salesforce_developer', $data);
    }
    // Hire Other Developers End

    // Team Extension Start
    public function offshore_development_center(){
        $data['title'] = 'Offshore Development Center';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/development_center', $data);
    }

    public function offshore_dedicated_teams(){
        $data['title'] = 'Offshore Dedicated Teams';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/dedicated_teams', $data);
    }

    public function offshore_staff_augmentation(){
        $data['title'] = 'Offshore Staff Augmentation';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        $data['testimonials_without_video'] = $this->admin_model->getAllTestimonials()->where('client_image','!=',NULL)->where('video_link','==',NULL);
        return $this->loadview('offshore_developers/staff_augmentation', $data);
    }
    // Team Extension End
    // ==================================================== OffShore Developers End  =====================================================


    // ===================================================== Technologies Start  =========================================================
    // Mobile Start
    public function technology_ios(){
        $data['title'] = 'Technology IOS';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/ios', $data);
    }

    public function technology_android(){
        $data['title'] = 'Technology Android';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/android', $data);
    }

    public function technology_flutter(){
        $data['title'] = 'Technology Flutter';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/flutter', $data);
    }

    public function technology_react_native(){
        $data['title'] = 'Technology React Native';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/react_native', $data);
    }

    public function technology_iot(){
        $data['title'] = 'Technology IOT';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/iot', $data);
    }

    public function technology_ar(){
        $data['title'] = 'Technology AR';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/ar', $data);
    }

    public function technology_vr(){
        $data['title'] = 'Technology VR';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/mobile/vr', $data);
    }
    // Mobile End

    // Web Start
    public function technology_java(){
        $data['title'] = 'Technology Java';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/java', $data);
    }

    public function technology_php(){
        $data['title'] = 'Technology PHP';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/php', $data);
    }

    public function technology_python(){
        $data['title'] = 'Technology Python';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/python', $data);
    }

    public function technology_ruby_on_rails(){
        $data['title'] = 'Technology Ruby On Rails';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/ruby_on_rails', $data);
    }

    public function technology_laravel(){
        $data['title'] = 'Technology Laravel';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/laravel', $data);
    }

    public function technology_mean(){
        $data['title'] = 'Technology MEAN';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/mean', $data);
    }

    public function technology_mern(){
        $data['title'] = 'Technology MERN';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/mern', $data);
    }

    public function technology_angular_js(){
        $data['title'] = 'Technology Angular Js';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/angular_js', $data);
    }

    public function technology_react_js(){
        $data['title'] = 'Technology React Js';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/react_js', $data);
    }

    public function technology_shopify(){
        $data['title'] = 'Technology Shopify';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/shopify', $data);
    }

    public function technology_wordpress(){
        $data['title'] = 'Technology Wordpress';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/web/wordpress', $data);
    }
    // Web End

    // Cloud & Devops Start
    public function technology_aws(){
        $data['title'] = 'Technology AWS';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/cloud_and_devops/aws', $data);
    }

    public function technology_azure(){
        $data['title'] = 'Technology Azure';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
        return $this->loadview('technology/cloud_and_devops/azure', $data);
    }

    public function technology_docker(){
        $data['title'] = 'Technology Docker';
        $data['blogs'] = $this->admin_model->getAllBlogs()->skip(0)->take(3);
        $data['case_studies'] = $this->admin_model->getAllCaseStudies()->random(2);
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
        $result = $this->front_model->insertConsultationData($requestdata);
        if($result){
            if(@$this->send_consultation_mail($requestdata)){
                @$this->send_thankyou_mail($requestdata);
            }
            return response()->json(['result' => 1, 'msg' => "Email Sent Successfully"]);
        }else{
            return response()->json(['result' => -1, 'msg' => "Something went wrong!"]);
        }
    }
    
    public function send_consultation_mail($requestdata){
        $from = $requestdata['email'];
        $fromName = $requestdata['name'];
        $data['name'] = $fromName;
        $data['phone'] = $requestdata['phone'];
        $data['message'] = $requestdata['requirements'];
        
        $to = $this->toemail;

        $subject = "Email to consult with Designoweb Technologies";

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
    
}
