<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class AdminModel extends Model{

    use HasFactory;

	public function getAdminDetail($id){
        return DB::table('admin')->where('id', $id)->first();
    }

    public function getContactDetail(){
        return DB::table('contact_details')->get()->first();
    }

    public function getAdmin(){
        return DB::table('admin')->first();
    }

    public function get_social_link(){
        return DB::table('social')->where('status', '=', '1')->get();
    }

    public function getAllUsers(){
        return DB::table('users')->select('users.*')->orderByDesc('user_id')->get();
    }
    public function getAllBlogs(){
        return DB::table('blogs')->select('*')->where('status','!=','Deleted')->get();
    }

    public function getBlogDetailById($blog_id){
        return DB::table('blogs')->where('blog_id', $blog_id)->get()->first();
    }

    public function insertBlog($request,$blog_image){
        $slug = strtolower($request['blog_name']);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace(",", "", $slug);
        $slug = str_replace("'", "", $slug);
        $slug = str_replace("(", "", $slug);
        $slug = str_replace(")", "", $slug);
        $slug = str_replace("[", "", $slug);
        $slug = str_replace("]", "", $slug);
        $slug = str_replace("{", "", $slug);
        $slug = str_replace("}", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace("--", "-", $slug);
        $slug = str_replace("---", "-", $slug);
        $data=[
            'blog_title'        => $request['blog_name'],
            'blog_description'  => $request['blog_description'],
            'slug'              => $slug,
            'blog_description'  => $request['blog_description'],
            'image_url'         => $blog_image,
        ];
        DB::table('blogs')->insert($data);
        return DB::getPdo()->lastInsertId();
    }

    public function updateBlogDetails($request,$blog_image,$blog_id){
        $slug = strtolower($request['blog_name']);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace(",", "", $slug);
        $slug = str_replace("'", "", $slug);
        $slug = str_replace("(", "", $slug);
        $slug = str_replace(")", "", $slug);
        $slug = str_replace("[", "", $slug);
        $slug = str_replace("]", "", $slug);
        $slug = str_replace("{", "", $slug);
        $slug = str_replace("}", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace("--", "-", $slug);
        $slug = str_replace("---", "-", $slug);
        $data=[
            'blog_title'        => $request['blog_name'],
            'blog_description'  => $request['blog_description'],
            'slug'              => $slug,
            'image_url'         => $blog_image,
        ];
        $affected_row = DB::table('blogs')->where('blog_id', $blog_id)->update($data);
        return $affected_row;
    }

    public function getAllPressRelease(){
        return DB::table('press_release')->select('*')->where('status','!=','Deleted')->get();
    }

    public function getPressReleaseDetailById($press_release_id){
        return DB::table('press_release')->where('press_release_id', $press_release_id)->get()->first();
    }

    public function insertPressRelease($request,$press_release_image){
        $slug = strtolower($request['press_release_title']);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace(",", "", $slug);
        $slug = str_replace("'", "", $slug);
        $slug = str_replace("(", "", $slug);
        $slug = str_replace(")", "", $slug);
        $slug = str_replace("[", "", $slug);
        $slug = str_replace("]", "", $slug);
        $slug = str_replace("{", "", $slug);
        $slug = str_replace("}", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace("--", "-", $slug);
        $slug = str_replace("---", "-", $slug);
        $data=[
            'press_release_title'        => $request['press_release_title'],
            'press_release_description'  => $request['press_release_description'],
            'slug'                       => $slug,
            'image_url'                  => $press_release_image,
            'author'                     => $request['press_release_author'],
        ];
        DB::table('press_release')->insert($data);
        return DB::getPdo()->lastInsertId();
    }

    public function updatePressReleaseDetails($request,$press_release_image,$press_release_id){
        $slug = strtolower($request['press_release_title']);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace(",", "", $slug);
        $slug = str_replace("'", "", $slug);
        $slug = str_replace("(", "", $slug);
        $slug = str_replace(")", "", $slug);
        $slug = str_replace("[", "", $slug);
        $slug = str_replace("]", "", $slug);
        $slug = str_replace("{", "", $slug);
        $slug = str_replace("}", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace("--", "-", $slug);
        $slug = str_replace("---", "-", $slug);
        $data=[
            'press_release_title'        => $request['press_release_title'],
            'press_release_description'  => $request['press_release_description'],
            'slug'                       => $slug,
            'image_url'                  => $press_release_image,
            'author'                     => $request['press_release_author'],
        ];
        $affected_row = DB::table('press_release')->where('press_release_id', $press_release_id)->update($data);
        return $affected_row;
    }

    public function getAllCaseStudies(){
        return DB::table('case_studies')->select('*')->where('status','!=','Deleted')->get();
    }

    public function getCaseStudyDetailById($case_study_id){
        return DB::table('case_studies')->where('case_study_id', $case_study_id)->get()->first();
    }

    public function getAllCaseChallenges($case_study_id){
        return DB::table('case_challenges')->where('case_study_id', $case_study_id)->get();
    }

    public function insertCaseStudies($request,$case_banner,$case_front_image,$client_wanted_banner,$case_detail_screen_banner,$case_detail_card_image,$client_image){
        $slug = strtolower($request['project_name']);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace(",", "", $slug);
        $slug = str_replace("'", "", $slug);
        $slug = str_replace("(", "", $slug);
        $slug = str_replace(")", "", $slug);
        $slug = str_replace("[", "", $slug);
        $slug = str_replace("]", "", $slug);
        $slug = str_replace("{", "", $slug);
        $slug = str_replace("}", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace("--", "-", $slug);
        $slug = str_replace("---", "-", $slug);
        $data=[
            'project_name'               => $request['project_name'],
            'slug'                       => $slug,
            'tagline'                    => $request['tagline'],
            'industry'                   => $request['industry'],
            'business_type'              => $request['business_type'],
            'required_services'          => $request['services'],
            'build_your_idea'            => $request['build_your_idea'],
            'description'                => $request['description'],
            'client_requirement'         => $request['client_requirement'],
            'given_services'             => $request['given_services'],
            'design_layout'              => $request['design_layout'],
            'palette'                    => $request['palette'],
            'about_project'              => $request['about_project'],
            'technology_used'            => $request['technology_used'],
            'client_quote'               => $request['client_quote'],
            'client_name'                => $request['client_name'],
            'case_banner'                => $case_banner,
            'case_front_image'           => $case_front_image,
            'client_wanted_banner'       => $client_wanted_banner,
            'case_detail_screen_banner'  => $case_detail_screen_banner,
            'case_detail_card_image'     => $case_detail_card_image,
            'client_image'               => $client_image,
        ];
        DB::table('case_studies')->insert($data);
        return DB::getPdo()->lastInsertId();
    }

    public function insertProjectChallenges($data){
        return DB::table('case_challenges')->insert($data);
    }

    public function deleteProjectChallenges($case_study_id){
        DB::table('case_challenges')->where('case_study_id', $case_study_id)->delete();
    }

    public function updateCaseStudies($request,$case_banner,$case_front_image,$client_wanted_banner,$case_detail_screen_banner,$case_detail_card_image,$client_image,$case_study_id){
        $slug = strtolower($request['project_name']);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace(",", "", $slug);
        $slug = str_replace("'", "", $slug);
        $slug = str_replace("(", "", $slug);
        $slug = str_replace(")", "", $slug);
        $slug = str_replace("[", "", $slug);
        $slug = str_replace("]", "", $slug);
        $slug = str_replace("{", "", $slug);
        $slug = str_replace("}", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace("--", "-", $slug);
        $slug = str_replace("---", "-", $slug);
        $data=[
            'project_name'               => $request['project_name'],
            'slug'                       => $slug,
            'tagline'                    => $request['tagline'],
            'industry'                   => $request['industry'],
            'business_type'              => $request['business_type'],
            'required_services'          => $request['services'],
            'build_your_idea'            => $request['build_your_idea'],
            'description'                => $request['description'],
            'client_requirement'         => $request['client_requirement'],
            'given_services'             => $request['given_services'],
            'design_layout'              => $request['design_layout'],
            'palette'                    => $request['palette'],
            'about_project'              => $request['about_project'],
            'technology_used'            => $request['technology_used'],
            'client_quote'               => $request['client_quote'],
            'client_name'                => $request['client_name'],
            'case_banner'                => $case_banner,
            'case_front_image'           => $case_front_image,
            'client_wanted_banner'       => $client_wanted_banner,
            'case_detail_screen_banner'  => $case_detail_screen_banner,
            'case_detail_card_image'     => $case_detail_card_image,
            'client_image'               => $client_image,
        ];
        return DB::table('case_studies')->where('case_study_id', $case_study_id)->update($data);
    }

    public function getAllPortfolio(){
        return DB::table('portfolio')->select('*')->where('status','!=','Deleted')->orderBy('portfolio_id', 'desc')->get();
    }

    public function getPortfolioDetailById($portfolio_id){
        return DB::table('portfolio')->where('portfolio_id', $portfolio_id)->get()->first();
    }

    public function insertPortfolio($request,$project_image){
        $data=[
            'project_name'          => $request['project_name'],
            'description'   => $request['project_description'],
            'project_type'          => $request['project_type'],
            'project_link'          => $request['project_link'],
            'image_url'             => $project_image,
        ];
        DB::table('portfolio')->insert($data);
        return DB::getPdo()->lastInsertId();
    }

    public function updatePortfolioDetails($request,$project_image,$portfolio_id){
        $data=[
            'project_name'          => $request['project_name'],
            'description'   => $request['project_description'],
            'project_type'          => $request['project_type'],
            'project_link'          => $request['project_link'],
            'image_url'             => $project_image,
        ];
        $affected_row = DB::table('portfolio')->where('portfolio_id', $portfolio_id)->update($data);
        return $affected_row;
    }

    public function getAllTestimonials(){
        return DB::table('testimonials')->select('*')->where('status','!=','Deleted')->get();
    }

    public function getTestimonialDetailById($testimonial_id){
        return DB::table('testimonials')->where('testimonial_id', $testimonial_id)->get()->first();
    }

    public function insertTestimonial($request,$client_image){
        $data=[
            'client_name'                => $request['client_name'],
            'project_name'               => $request['project_name'],
            'client_quote'               => $request['client_quote'],
            'client_image'               => $client_image,
            'video_link'                 => $request['video_link'],
        ];
        DB::table('testimonials')->insert($data);
        return DB::getPdo()->lastInsertId();
    }

    public function updateTestimonialDetails($request,$client_image,$testimonial_id){
        $data=[
            'client_name'                => $request['client_name'],
            'project_name'               => $request['project_name'],
            'client_quote'               => $request['client_quote'],
            'client_image'               => $client_image,
            'video_link'                 => $request['video_link'],
        ];
        $affected_row = DB::table('testimonials')->where('testimonial_id', $testimonial_id)->update($data);
        return $affected_row;
    }

    public function getAllUsersByUserID($user_id){
        return DB::table('users')->where('user_id', $user_id)->get();
    }

    public function getAllFacebookUsers(){
        return DB::table('users')->select('users.*')->where('source', '=', 'facebook')->orderByDesc('user_id')->get();
    }

    public function getAllGmailUsers(){
        return DB::table('users')->select('users.*')->where('source', '=', 'google')->orderByDesc('user_id')->get();
    }

    public function updateProfile($data){
        return DB::table('admin')->where('id', 1)->update($data);
    }

    public function update_social_link($request){
        $social_name=$request['social_name'];
        $social_link=$request['social_link'];
        $i=0;
        foreach($social_name as $value){
            $data=array(
                'social_name'=>$value,
                'social_link'=>$social_link[$i],
            );
            DB::table('social')->where('id', $i+1)->update($data);
            $i++;
        }
        return true;
    }

    //--------------------------------------------------------Forgot Password------------------------------------------
    public function do_reset_password($email,$password) {
      return  DB::table('admin')->where('email',$email)->update(['admin_password' => $password]);
    }
    
    public function get_admin_by_email($email) {
        return DB::table('admin')->where('admin_email',$email)->first();
    }
    
    public function forgetPasswordLinkValidity($admin_id) {
        $data = array(
            'admin_id'  => $admin_id,
            'status'   => '0',
        );
        DB::table('forgot_password')->insert($data);
        $id = DB::getPdo()->lastInsertId();
        return DB::table('forgot_password')->where('forgot_password_id',$id)->get()->first();

    }
    
    public function linkValidity($admin_id) {
        return DB::table('admin')->where('admin_id' ,$admin_id)->update(['status' => '1']);
    }
    
    public function getLinkValidity($admin_id){  
        return DB::table('forgot_password')->where('admin_id',$admin_id)->orderByDesc('forgot_password_id');    
    }
    
    public function do_fogot_password($id,$newpassword) {
       return DB::table('admin')->where('admin_id',$id)->update(['password' => $newpassword]);
    }
    //--------------------------------------------------------------------------------------------------

    public function updateContactDetails($request){
        $data=[
            'company_name' => $request['company_name'],
            'address' => $request['address'],
            'email1' => $request['email1'],
            'email2' => $request['email2'],
            'contact_no1' => $request['contact_no1'],
            'contact_no2' => $request['contact_no2'],
        ];
        $affected_row = DB::table('contact_details')->update($data);
        return $affected_row;
    }

    public function getAllCases(){
        return DB::table('cases')->select('cases.*')->where('status', '!=', 'Deleted')->orderByDesc('case_id')->get();
    }

    public function getAllCasesById($case_id){
        return DB::table('cases')->where('case_id', $case_id)->get();
    }

    public function getCaseDetail($case_id){
        return DB::table('cases')->where('case_id', $case_id)->where('status', '!=', 'Deleted')->get()->first();
    }

    public function getAllCaseTypes(){
        return DB::table('cases')->select('case_type')->get();
    }

    public function updateCaseDetails($data, $case_id){
        $affected_row = DB::table('cases')->where('case_id', $case_id)->update($data);
        return $affected_row;
    }

    public function getAllDocuments(){
        return DB::table('documents')->select('documents.*')->orderByDesc('id')->get();
    }

    public function getDocumentById($document_id){
        return DB::table('documents')->where('id', $document_id)->get()->first();
    }

    public function getAllDocumentTypes(){
        return DB::table('documents')->select('documents.document_type')->get();
    }

    public function updateDocumentDetails($data, $id){
        $affected_row = DB::table('documents')->where('id', $id)->update($data);
        return $affected_row;
    }

    public function getAllLawyers(){
        return DB::table('lawyer')->select('lawyer.*')->orderByDesc('lawyer_id')->get();
    }

}