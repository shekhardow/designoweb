<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class FrontModel extends Model{

    use HasFactory;
    
    public function getAllCaseStudies(){
        return DB::table('case_studies')->select('*')->where('status','!=','Deleted')->orderBy('order_by','asc')->where('status','!=','Inactive')->get();
    }
    
    public function getAllPortfolio(){
        return DB::table('portfolio')->select('*')->where('status','!=','Deleted')->where('status','!=','Inactive')->orderBy('portfolio_id', 'desc')->get();
    }
    
    public function getAllTestimonials(){
        return DB::table('testimonials')->select('*')->where('status','!=','Deleted')->where('status','!=','Inactive')->get();
    }
    
    public function getAllBlogs(){
        return DB::table('blogs')->select('*')->where('status','!=','Deleted')->where('status','!=','Inactive')->get();
    }
    
    public function getAllPressRelease(){
        return DB::table('press_release')->select('*')->where('status','!=','Deleted')->where('status','!=','Inactive')->get();
    }

    public function getBlogDetailBySlug($slug){
        return DB::table('blogs')->where('slug', $slug)->get()->first();
    }
    
    public function getPressReleaseDetailBySlug($slug){
        return DB::table('press_release')->where('slug', $slug)->get()->first();
    }
    
    public function getCaseStudyDetailBySlug($slug){
        return DB::table('case_studies')->where('slug', $slug)->get()->first();
    }
    
    public function insertContactData($request){
        $data = [
            'name'          => $request['name'],
            'email'         => $request['email'],
            'phone'         => $request['phone'],
            'budget'        => $request['budget'],
            'requirements'  => $request['comments'],
            'type'          => 'contact',
        ];
        DB::table('email_leads')->insert($data);
        return DB::getPdo()->lastInsertId();
    }
    
    public function insertConsultationData($request){
        $data = [
            'name'          => $request['name'],
            'email'         => $request['email'],
            'phone'         => $request['phone'],
            'requirements'  => $request['requirements'],
            'type'          => 'consultation',
        ];
        DB::table('email_leads')->insert($data);
        return DB::getPdo()->lastInsertId();
    }
    
    public function insertBlogConsultData($request){
        $data = [
            'email'         => $request['email'],
            'type'          => 'information',
        ];
        DB::table('email_leads')->insert($data);
        return DB::getPdo()->lastInsertId();
    }
    
}
