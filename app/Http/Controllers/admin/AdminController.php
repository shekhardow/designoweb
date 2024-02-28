<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\AdminModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{

    //--------------------------------- DB Instance---------------------------------
    private $admin_model;

    public function __construct(){
        $this->admin_model = new AdminModel();
    }

    public function admin_detail(){
        $admin_detail = $this->admin_model->getAdminDetail(session()->get('admin_id'));
        return $admin_detail;
    }

    private function loadview($view, $data = NULL){
        $data['admin_detail'] = $this->admin_detail();
        return view('admin/' . $view, $data);
    }

    // ----------------------------- For Single Files ------------------------------
    public function singleUpload(Request $request, $file_name, $path){
        if ($request->hasfile($file_name)) {
            $file = $request->file($file_name);
            sleep(1);
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

	//---------------------------- Login -------------------------------------------
    public function login(){
        $data['title'] = 'Login';
        $data['admin_detail'] = $this->admin_model->getAdminDetail(1);
        return view('admin/login', $data);
    }

    public function do_login(Request $request){
        $form_data = $request->all();
        $admin_detail = $this->admin_model->getAdmin();
        if($admin_detail->email != $form_data['email'] && $admin_detail->password != hash('sha256',$form_data['password'])){
            return response()->json(['result' => -1, 'msg' => 'Please Enter Valid Email and Password']);
        }elseif($admin_detail->email != $form_data['email']){
            return response()->json(['result' => -1, 'msg' => 'Please Enter Valid Email']);
        }elseif($admin_detail->password != hash('sha256',$form_data['password'])){
            return response()->json(['result' => -1, 'msg' => 'Please Enter Valid Password']);
        }else{
            $request->session()->put(['admin_id' => $admin_detail->id]);
            return response()->json(['result' => 1, 'msg' => 'Logging in, please wait...', 'url' => route('admin/dashboard')]);
        }
    }

    //-----------Logout ---------------------------------------------------------------
    public function logout(Request $request){
        $request->session()->forget('admin_id');
        return response()->json(['result' => 1, 'msg' => 'Logged out...', 'url' => route('admin/login')]);
    }
    
    // --------------- Index -------------------------------------------------------
    public function index(){
        $admin_detail = $this->admin_detail();
        if(!empty($admin_detail)){
            $data['title'] ='Dashboard';
            $data['portfolio_count'] = $this->admin_model->getAllPortfolio()->count();
            return $this->loadview('dashboard',$data);
        }else{
            return redirect('admin');
        }
    }

    public function blogs(){
        $data['title'] ='Blogs';
        $data['basic_datatable']='1';
        $data['blogs'] = $this->admin_model->getAllBlogs();
        return $this->loadview('blogs/blogs',$data);
    }

    public function open_blog_form($blog_id=NULL){
        $blog_id = decryptionID($blog_id);
        if(empty($blog_id)){
            $data['title'] = 'Add Blog';
        }else{
            $data['title'] = 'Edit Blog';
        }if(!empty($blog_id)){
            $data['blog_detail'] = $this->admin_model->getBlogDetailById($blog_id);
        }
        return $this->loadview('blogs/blog_form',$data,true);
    }

    public function doAddBlog(Request $request){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'blog_name'        => 'required',
            'blog_description' => 'required',
            'added_date'       => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        if($request->hasfile('blog_image')){
            $blog_image = $this->singleUpload($request, 'blog_image', 'admin/blogs');
        }else{
            return response()->json(['result' => -1, 'msg' => 'Please Upload Blog Image.']);
            return false;
        }
        $result = $this->admin_model->insertBlog($Requestdata, $blog_image);
        if(!empty($result)){
            return response()->json(['result' => 1, 'msg' => 'Blog Added Successfully!!', 'url' => url('admin/blogs')]);
        }else{
            return response()->json(['result' => -1, 'msg' => 'Something Went Wrong']);
        }
    }

    public function doUpdateBlog(Request $request,$blog_id){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'blog_name'        => 'required',
            'blog_description' => 'required',
            'added_date'       => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $blog_id = decryptionID($blog_id);
        $data['blog_detail'] = $this->admin_model->getBlogDetailById($blog_id);
        if($request->hasfile('blog_image')){
            $blog_image = $this->singleUpload($request, 'blog_image', 'admin/blogs');
        }else{
            $blog_image = $data['blog_detail']->image_url;
        }
        $result = $this->admin_model->updateBlogDetails($request, $blog_image,$blog_id);
        if($result){
            return response()->json(['result'=>1, 'msg'=>'Blog Updated Successfully!!', 'url'=>url('admin/blogs')]);
        }else{
            return response()->json(['result'=>-1,'msg'=>'No Changes Were Found!!']);
        }
    }

    public function press_release(){
        $data['title'] ='Press Release';
        $data['basic_datatable']='1';
        $data['press_release'] = $this->admin_model->getAllPressRelease();
        return $this->loadview('press_release/press_release',$data);
    }

    public function open_press_release_form($press_release_id=NULL){
        $press_release_id = decryptionID($press_release_id);
        if(empty($press_release_id)){
            $data['title'] = 'Add Press Release';
        }else{
            $data['title'] = 'Edit Press Release';
        }if(!empty($press_release_id)){
            $data['press_release_detail'] = $this->admin_model->getPressReleaseDetailById($press_release_id);
        }
        return $this->loadview('press_release/press_release_form',$data,true);
    }

    public function doAddPressRelease(Request $request){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'press_release_title'        => 'required',
            'press_release_description'  => 'required',
            'press_release_author'       => 'required',
            'added_date'                 => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        if($request->hasfile('press_release_image')){
            $press_release_image = $this->singleUpload($request, 'press_release_image', 'admin/press_release');
        }else{
            return response()->json(['result' => -1, 'msg' => 'Please Upload Press Release Image.']);
            return false;
        }
        $result = $this->admin_model->insertPressRelease($Requestdata, $press_release_image);
        if(!empty($result)){
            return response()->json(['result' => 1, 'msg' => 'Press Release Added Successfully!!', 'url' => url('admin/press_release')]);
        }else{
            return response()->json(['result' => -1, 'msg' => 'Something Went Wrong']);
        }
    }

    public function doUpdatePressRelease(Request $request,$press_release_id){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'press_release_title'        => 'required',
            'press_release_description'  => 'required',
            'press_release_author'       => 'required',
            'added_date'                 => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $press_release_id = decryptionID($press_release_id);
        $data['press_release_detail'] = $this->admin_model->getPressReleaseDetailById($press_release_id);
        if($request->hasfile('press_release_image')){
            $press_release_image = $this->singleUpload($request, 'press_release_image', 'admin/press_release');
        }else{
            $press_release_image = $data['press_release_detail']->image_url;
        }
        $result = $this->admin_model->updatePressReleaseDetails($request, $press_release_image,$press_release_id);
        if($result){
            return response()->json(['result'=>1, 'msg'=>'Press Release Updated Successfully!!', 'url'=>url('admin/press_release')]);
        }else{
            return response()->json(['result'=>-1,'msg'=>'No Changes Were Found!!']);
        }
    }

    public function case_studies(){
        $data['title'] ='Case Studies';
        $data['basic_datatable']='1';
        $data['case_studies'] = $this->admin_model->getAllCaseStudies();
        return $this->loadview('case_studies/case_studies',$data);
    }
    
    public function updateCaseStudyOrder(Request $request){
        $case_study_id = $request->post('case_study_id');
        $order = $request->post('order');
        $update_data = [
            'order_by'      => $order,
        ];
        $result = DB::table('case_studies')->where('case_study_id', $case_study_id)->update($update_data);
        if($result){
            return response()->json(['result' => 1, 'msg' => 'Order Updated Successfully']);
        }else{
            return response()->json(['result' => -1, 'msg' => 'No Changes Were Found!']);
        }
    }

    public function open_case_studies_form($case_study_id=NULL){
        $case_study_id = decryptionID($case_study_id);
        if(empty($case_study_id)){
            $data['title'] = 'Add Case Studies';
        }else{
            $data['title'] = 'Edit Case Studies';
        }if(!empty($case_study_id)){
            $data['case_study_detail'] = $this->admin_model->getCaseStudyDetailById($case_study_id);
            $data['case_challenges'] = $this->admin_model->getAllCaseChallenges($case_study_id);
        }
        return $this->loadview('case_studies/case_studies_form',$data,true);
    }

    public function viewCaseStudies($case_study_id){
        $data['title'] ='View Case Studies';
        $case_study_id = decryptionID($case_study_id);
        $data['case_study_detail'] = $this->admin_model->getCaseStudyDetailById($case_study_id);
        return $this->loadview('case_studies/view_case_study',$data);
    }

    public function doAddCaseStudies(Request $request){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'project_name' => 'required',
            'tagline' => 'required',
            'project_type' => 'required',
            // 'project_link' => 'required',
            // 'industry' => 'required',
            // 'business_type' => 'required',
            // 'services' => 'required',
            // 'build_your_idea' => 'required',
            'description' => 'required',
            'client_requirement' => 'required',
            // 'given_services' => 'required',
            // 'design_layout' => 'required',
            // 'palette' => 'required',
            // 'about_project' => 'required',
            // 'technology_used' => 'required',
            // 'client_quote' => 'required',
            'client_name' => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        if($request->hasfile('case_banner')){
            $case_banner = $this->singleUpload($request, 'case_banner', 'admin/case_studies');
        }else{
            return response()->json(['result' => -1, 'msg' => 'Please Upload Case Banner Image.']);
            return false;
        }
        if($request->hasfile('case_front_image')){
            $case_front_image = $this->singleUpload($request, 'case_front_image', 'admin/case_studies');
        }else{
            return response()->json(['result' => -1, 'msg' => 'Please Upload Case Front Image.']);
            return false;
        }
        if($request->hasfile('client_wanted_banner')){
            $client_wanted_banner = $this->singleUpload($request, 'client_wanted_banner', 'admin/case_studies');
        }else{
            return response()->json(['result' => -1, 'msg' => 'Please Upload Client Wanted Banner Image.']);
            return false;
        }
        if($request->hasfile('case_detail_screen_banner')){
            $case_detail_screen_banner = $this->singleUpload($request, 'case_detail_screen_banner', 'admin/case_studies');
        }else{
            return response()->json(['result' => -1, 'msg' => 'Please Upload Case Detail Screen Banner Image.']);
            return false;
        }
        if($request->hasfile('case_detail_card_image')){
            $case_detail_card_image = $this->singleUpload($request, 'case_detail_card_image', 'admin/case_studies');
        }else{
            return response()->json(['result' => -1, 'msg' => 'Please Upload Case Detail Card Image.']);
            return false;
        }
        if($request->hasfile('client_image')){
            $client_image = $this->singleUpload($request, 'client_image', 'admin/case_studies');
        }else{
            $client_image = url('public/front/img/client-default-image.webp');
        }
        $projectchallenges = $request->post('challenge');
        $solutions= $request->post('solutions');
        if(empty($projectchallenges[0])){
            return response()->json(['result' => -1, 'msg' => 'Please add atleast one Project Challenge.']);
            return false;
        }
        $result = $this->admin_model->insertCaseStudies($Requestdata,$case_banner,$case_front_image,$client_wanted_banner,$case_detail_screen_banner,$case_detail_card_image,$client_image);
        if(!empty($result)){
            $i=0;
            foreach($projectchallenges as $challenge){
                $temp['case_study_id'] = $result;
                $temp['challenge'] = $challenge;
                $temp['solutions']  =  $solutions[$i];
                $this->admin_model->insertProjectChallenges($temp);
                $i++;
            }
            return response()->json(['result' => 1, 'msg' => 'Case Study Added Successfully!!', 'url' => url('admin/case_studies')]);
        }else{
            return response()->json(['result' => -1, 'msg' => 'Something Went Wrong']);
        }
    }

    public function doUpdateCaseStudies(Request $request,$case_study_id){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'project_name' => 'required',
            'tagline' => 'required',
            'project_type' => 'required',
            // 'project_link' => 'required',
            // 'industry' => 'required',
            // 'business_type' => 'required',
            // 'services' => 'required',
            // 'build_your_idea' => 'required',
            'description' => 'required',
            'client_requirement' => 'required',
            // 'given_services' => 'required',
            // 'design_layout' => 'required',
            // 'palette' => 'required',
            // 'about_project' => 'required',
            // 'technology_used' => 'required',
            // 'client_quote' => 'required',
            'client_name' => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $case_study_id = decryptionID($case_study_id);
        $data['case_study_detail'] = $this->admin_model->getCaseStudyDetailById($case_study_id);
        if($request->hasfile('case_banner')){
            $case_banner = $this->singleUpload($request, 'case_banner', 'admin/case_studies');
        }else{
            $case_banner = $data['case_study_detail']->case_banner;
        }
        if($request->hasfile('case_front_image')){
            $case_front_image = $this->singleUpload($request, 'case_front_image', 'admin/case_studies');
        }else{
            $case_front_image = $data['case_study_detail']->case_front_image;
        }
        if($request->hasfile('client_wanted_banner')){
            $client_wanted_banner = $this->singleUpload($request, 'client_wanted_banner', 'admin/case_studies');
        }else{
            $client_wanted_banner = $data['case_study_detail']->client_wanted_banner;
        }
        if($request->hasfile('case_detail_screen_banner')){
            $case_detail_screen_banner = $this->singleUpload($request, 'case_detail_screen_banner', 'admin/case_studies');
        }else{
            $case_detail_screen_banner = $data['case_study_detail']->case_detail_screen_banner;
        }
        if($request->hasfile('case_detail_card_image')){
            $case_detail_card_image = $this->singleUpload($request, 'case_detail_card_image', 'admin/case_studies');
        }else{
            $case_detail_card_image = $data['case_study_detail']->case_detail_card_image;
        }
        if($request->hasfile('client_image')){
            $client_image = $this->singleUpload($request, 'client_image', 'admin/case_studies');
        }else{
            $client_image = $data['case_study_detail']->client_image;
        }
        $projectchallenges = $request->post('challenge');
        $solutions= $request->post('solutions');
        if(empty($projectchallenges[0])){
            return response()->json(['result' => -1, 'msg' => 'Please add atleast one Project Challenge.']);
            return false;
        }
        $result = $this->admin_model->updateCaseStudies($request,$case_banner,$case_front_image,$client_wanted_banner,$case_detail_screen_banner,$case_detail_card_image,$client_image,$case_study_id);
        if($result){
            $this->admin_model->deleteProjectChallenges($case_study_id);
            $i=0;
            foreach($projectchallenges as $challenge){
                $temp['case_study_id'] = $case_study_id;
                $temp['challenge'] = $challenge;
                $temp['solutions']  =  $solutions[$i];
                $this->admin_model->insertProjectChallenges($temp);
                $i++;
            }
            return response()->json(['result'=>1, 'msg'=>'Case Study Updated Successfully!!', 'url'=>url('admin/case_studies')]);
        }else{
            return response()->json(['result'=>-1,'msg'=>'No Changes Were Found!!']);
        }
    }

    public function portfolio(){
        $data['title'] ='Portfolio';
        $data['basic_datatable']='1';
        $data['portfolio'] = $this->admin_model->getAllPortfolio();
        return $this->loadview('portfolio/portfolio',$data);
    }

    public function open_portfolio_form($portfolio_id=NULL){
        $portfolio_id = decryptionID($portfolio_id);
        if(empty($portfolio_id)){
            $data['title'] = 'Add Project';
        }else{
            $data['title'] = 'Edit Project';
        }if(!empty($portfolio_id)){
            $data['portfolio_detail'] = $this->admin_model->getPortfolioDetailById($portfolio_id);
        }
        return $this->loadview('portfolio/portfolio_form',$data,true);
    }

    public function doAddPortfolio(Request $request){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'project_name'        => 'required',
            'project_description' => 'required',
            'project_type' => 'required',
            'project_link' => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        if($request->hasfile('project_image')){
            $project_image = $this->singleUpload($request, 'project_image', 'admin/portfolio');
        }else{
            return response()->json(['result' => -1, 'msg' => 'Please Upload Project Image.']);
            return false;
        }
        $result = $this->admin_model->insertPortfolio($Requestdata, $project_image);
        if(!empty($result)){
            return response()->json(['result' => 1, 'msg' => 'Project Added Successfully!!', 'url' => url('admin/portfolio')]);
        }else{
            return response()->json(['result' => -1, 'msg' => 'Something Went Wrong']);
        }
    }

    public function doUpdatePortfolio(Request $request,$portfolio_id){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'project_name'        => 'required',
            'project_description' => 'required',
            'project_type' => 'required',
            'project_link' => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $portfolio_id = decryptionID($portfolio_id);
        $data['portfolio_detail'] = $this->admin_model->getPortfolioDetailById($portfolio_id);
        if($request->hasfile('project_image')){
            $project_image = $this->singleUpload($request, 'project_image', 'admin/portfolio');
        }else{
            $project_image = $data['portfolio_detail']->image_url;
        }
        $result = $this->admin_model->updatePortfolioDetails($request,$project_image,$portfolio_id);
        if($result){
            return response()->json(['result'=>1, 'msg'=>'Project Updated Successfully!!', 'url'=>url('admin/portfolio')]);
        }else{
            return response()->json(['result'=>-1, 'msg'=>'No Changes Were Found!!']);
        }
    }

    public function testimonials(){
        $data['title'] ='Testimonials';
        $data['basic_datatable']='1';
        $data['testimonials'] = $this->admin_model->getAllTestimonials();
        return $this->loadview('testimonials/testimonials',$data);
    }

    public function open_testimonial_form($testimonial_id=NULL){
        $testimonial_id = decryptionID($testimonial_id);
        if(empty($testimonial_id)){
            $data['title'] = 'Add Testimonial';
        }else{
            $data['title'] = 'Edit Testimonial';
        }if(!empty($testimonial_id)){
            $data['testimonial_detail'] = $this->admin_model->getTestimonialDetailById($testimonial_id);
        }
        return $this->loadview('testimonials/testimonial_form',$data,true);
    }

    public function viewTestimonial($testimonial_id){
        $data['title'] ='View Testimonial';
        $testimonial_id = decryptionID($testimonial_id);
        $data['testimonial_detail'] = $this->admin_model->getTestimonialDetailById($testimonial_id);
        return $this->loadview('testimonials/view_testimonial',$data);
    }

    public function doAddTestimonial(Request $request){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'client_name'        => 'required',
            'project_name'       => 'required',
            'client_quote'       => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        if($request->hasfile('client_image')){
            $client_image = $this->singleUpload($request, 'client_image', 'admin/testimonials');
        }else{
            $client_image = null;
        }
        $result = $this->admin_model->insertTestimonial($Requestdata,$client_image);
        if(!empty($result)){
            return response()->json(['result' => 1, 'msg' => 'Testimonial Added Successfully!!', 'url' => url('admin/testimonials')]);
        }else{
            return response()->json(['result' => -1, 'msg' => 'Something Went Wrong']);
        }
    }

    public function doUpdateTestimonial(Request $request,$testimonial_id){
        $Requestdata = $request->all();
        $validator = Validator::make($Requestdata, $rules = [
            'client_name'        => 'required',
            'project_name'       => 'required',
            'client_quote'       => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $testimonial_id = decryptionID($testimonial_id);
        $data['testimonial_detail'] = $this->admin_model->getTestimonialDetailById($testimonial_id);
        if($request->hasfile('client_image')){
            $client_image = $this->singleUpload($request, 'client_image', 'admin/testimonials');
        }else{
            $client_image = $data['testimonial_detail']->client_image;
        }
        $result = $this->admin_model->updateTestimonialDetails($request,$client_image,$testimonial_id);
        if($result){
            return response()->json(['result'=>1, 'msg'=>'Testimonial Updated Successfully!!', 'url'=>url('admin/testimonials')]);
        }else{
            return response()->json(['result'=>-1, 'msg'=>'No Changes Were Found!!']);
        }
    }

    public function about(){
        $data['title'] ='About Us';
        $data['basic_datatable']='1';
        $data['users'] = $this->admin_model->getAllUsers();
        return $this->loadview('about',$data);
    }

    // //------------------User-------------------------------------------------------------
    // public function users(){
    //     $data['title'] ='Users';
    //     $data['basic_datatable']='1';
    //     $data['users'] = $this->admin_model->getAllUsers();
    //     return $this->loadview('user',$data);
    // }
    
    // public function viewUser($user_id) {
    //     $data['title'] ='View Users';
    //     $user_id = decryptionID($user_id);
    //     $data['users'] = $this->admin_model->getAllUsersByUserID($user_id);
    //     return $this->loadview('view_user',$data);
    // }

    //------------------------------- Profile --------------------------------------
    public function profile(){
        $data['title'] = 'Profile';
        return $this->loadview('profile',$data);
    }

    public function updateProfile(Request $request){
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'mobile'  => 'required',
        ]);
        $form_data = $request->post();
        $admin_detail = $this->admin_detail();
        $images=$request->file('profile_image');
        $company_image_url=$request->file('image_url');
        $favicon_icon=$request->file('favicon_icon');
        if (empty($images)) {
            $form_data['profile_image'] = $admin_detail->profile_image;
        }else{
            $images=$this->singleUpload($request,'profile_image','admin/profilePic');
            $form_data['profile_image'] =$images;
        }
        if (empty($company_image_url)) {
            $form_data['image_url'] = $admin_detail->image_url;
        }else{
            $company_image_url=$this->singleUpload($request,'image_url','admin/profilePic');
            $form_data['image_url'] =$company_image_url;
        }
        if (empty($favicon_icon)) {
            $form_data['favicon_icon'] = $admin_detail->favicon_icon;
        }else{
            $favicon_icon=$this->singleUpload($request,'favicon_icon','admin/profilePic');
            $form_data['favicon_icon'] =$favicon_icon;
        }
        $update_data = [
            'name'          => $form_data['name'],
            'email'         => $form_data['email'],
            'mobile'        => $form_data['mobile'],
            'image_url'     => $form_data['image_url'],
            'favicon_icon'  => $form_data['favicon_icon'],
            'profile_image' => $form_data['profile_image'],
        ];
        $result = DB::table('admin')->where('id',session()->get('admin_id'))->update($update_data);
        if ($result) {
            return response()->json(['result' => 1, 'msg' => 'Profile Updated Succesfully', 'url' => url('admin/profile')]);
        } else {
            return response()->json(['result' => -1, 'msg' => 'No changes Found']);
        }
    }

    //----------------------------- change Password -------------------------------------
    public function changePassword(Request $request){
        $form_data = $request->post();
        $admin_detail = $this->admin_model->getAdminDetail(session()->get('admin_id'));
        $result = DB::table('admin')->where(['admin_password' =>hash('sha256',$form_data['old_password'])])->first();
        if (!empty($result)) {
            if($form_data['new_password']==$form_data['confirm_new_password']){
                $update_data = [
                    'admin_password'  => hash('sha256',$form_data['new_password']),
                ];
                $changed = $result = DB::table('admin')->where('id', 1)->update($update_data);
                if ($changed) {
                    return response()->json(['result' => 1, 'url' => url('admin'), 'msg' => 'Password successfully changed.']);
                }else{
                    return response()->json(['result' => -1, 'msg' => 'Password did not changed successfully']);
                }
            }else{
                return response()->json(['result' => -1, 'msg' => 'New password and Confirm Password should be same']);
            }
        } else {
            return response()->json(['result' => -1, 'msg' => 'Old password did not matched current password']);
        }
    }

    //------------------------------ Social ----------------------------------------
    public function social(){
        $data['title'] ='Social';
        $data['social_data'] = $this->admin_model->get_social_link();
        return $this->loadview('social', $data);
    }

    public function update_social_link(Request $request){
        $requestdata = $request->all();
        $result = $this->admin_model->update_social_link($requestdata);
        if ($result) {
            return response()->json(['result' => 1, 'msg' => 'Social Links Updated Successfully!!', 'url' => url('admin/social')]);
        }else{
            return response()->json(['result' => -1, 'msg' => 'Something went wrong!!']);
        }
        return FALSE;
    }

    //---------------------------------------- Send Notification to All --------------------------------------
     public function notification(Request $request){
        $data['user_id'] = $request->post('user_id');
        $data['data'] = NULL;
        $model_wrapper = view('admin/notification',$data)->render();
        return response()->json(['result' => 1, 'model_wrapper' => $model_wrapper]);
        return false;
    }

    public function sendNotficationToAll(Request $request){
        $requestData=$request->all();
        $validator = Validator::make($requestData, $rules = [
            'subject' => 'required',
            'message' => 'required|min:6',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $user_id = $request->post('user_id');
        $message = strip_tags($request->post('message'));
        $subject = strip_tags($request->post('subject'));
        foreach($user_id as $id){
            // $this->sendNotfication($id,$message,$subject);
        }
        $this->output->set_output(json_encode(['result' => 1, 'msg' => 'Notification Sent Successfully.','url'=> url('admin/users')]));
        return false;
    }

    public function change_status(Request $request, $id, $status, $table, $wherecol, $status_variable){
        $delete_service = change_status($id, $status, $table, $wherecol, $status_variable, '=');
        $status_type = $request->post('status_type');
        if($status_type != 'delete'){
            $message = 'Status Changed Successfully!';
        }else{
            $message = 'Service Deleted Successfully!';
        }
        if(!empty($delete_service)){
            return response()->json(['result' => 1, 'msg' => $message, 'url' => url('admin/users')]);
        }else{
            return response()->json(['result' => -1, 'msg' => 'Something Went Wrong']);
        }
    }

    //---------------------------------------------------Forgot Password---------------------------------------------------------
    public function forgot_password(Request $request){
        $email = $request->post('email');
        $admin_detail = $this->admin_model->get_admin_by_email($email);
        if(!empty($admin_detail)){
            $this->send_password_reset_mail($admin_detail);
            $this->admin_model->forgetPasswordLinkValidity($admin_detail->id);
            return response()->json(['result' => 1, 'msg'=>'Reset Password Link Sent To Your Email Id.','url'=> route('admin/login')]);
            return FALSE;
        }else{
            return response()->json((['result' => -1, 'msg'=>'Please Enter Valid Email Id.']));
            return FALSE;
        }
    }
    
    public function send_password_reset_mail($admin_detail){
        $encrypted_id = substr(uniqid(), 0, 10).$admin_detail->id.substr(uniqid(), 0, 10);
        $htmlContent = "<h3>Dear " . $admin_detail->admin_name . ",</h3>";
        $htmlContent .= "<div style='padding-top:8px;'>Please click the following link to reset your password.</div>";
        $htmlContent .= "<a href='" . url('admin/reset-password/' . $encrypted_id) . "'> Click Here!!</a>";
        $from = "admin@tawid.com";
        $to = $admin_detail->admin_email;
        $subject = "[Tawid] Forgot Password";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . $from . "\r\n";
        @mail($to, $subject, $htmlContent, $headers);
        return FALSE;
    }
    
    public function reset_password($admin_id){
        $data['admin_detail'] = $this->admin_model->getAdminDetail($admin_id);
        $data['title'] = "Reset Password";        
        $data['admin_id'] = $admin_id;
        $id = substr($admin_id, 10);
        $admin_id = substr($id, 0, -10);
        $forget_password = $this->admin_model->getLinkValidity($admin_id);
        if($forget_password['status'] == 1){
            $data['forget_password'] = 'expired';
        }else{
            $data['forget_password'] = 'valid';
        }
        $this->admin_model->linkValidity($admin_id);
        return view('admin/reset_password',$data);
    }
    
    public function do_reset_password(Request $request){
        $encrypted_id = $request->post('admin_id');
        $newpassword=hash('sha256',$request->post('newpassword'));
        $admin_id = decryptionID($encrypted_id);
        $result = $this->admin_model->do_fogot_password($admin_id,$newpassword);
        if (!empty($result)) {
            $this->output->set_output(json_encode(['result' => 1, 'url' => url('admin'), 'msg' => 'Pasword Reset Successfully']));
            return FALSE;
        } else {
            $this->output->set_output(json_encode(['result' => -1, 'msg' => 'New Password Cannot Be Same As Old Password.']));
            return FALSE;
        }
    }

    // ----------------------- Contact Us ----------------------------------
    public function contactus(){
        $data['title'] ='Contact Us';
        $data['basic_datatable'] ='1';
        $data['contact_detail'] = $this->admin_model->getContactDetail();
        return $this->loadview('contactus/contactus',$data);
    }

    public function open_contact_form($id=NULL){
        $data['title'] = 'Edit Contact Detail';
        $data['contact_detail'] = $this->admin_model->getContactDetail();
        return $this->loadview('contactus/contact-form',$data,true);
    }

    public function doUpdateContact(Request $request){
        $requestdata = $request->all();
        $validator = Validator::make($requestdata, $rules = [
            'company_name' => 'required',
            'address' => 'required',
            'email1' => 'required|email',
            'email2' => 'required|email',
            'contact_no1' => 'required',
            'contact_no2' => 'required',
        ], $messages = [
            'required' => 'The :attribute field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 0, 'errors' => $validator->errors()]);
            return false;
        }
        $result=$this->admin_model->updateContactDetails($request);
        if($result){
            return response()->json(['result'=>1, 'msg'=>'Contact Detail Updated Successfully!!', 'url'=>url('admin/contactus')]);
        }else{
            return response()->json(['result'=>-1,'msg'=>'No Changes Were Found!!']);
        }
    }

}