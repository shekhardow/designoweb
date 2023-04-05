<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class FrontModel extends Model{

    use HasFactory;

    public function getBlogDetailBySlug($slug){
        return DB::table('blogs')->where('slug', $slug)->get()->first();
    }
    
    public function getPressReleaseDetailBySlug($slug){
        return DB::table('press_release')->where('slug', $slug)->get()->first();
    }
    
    public function getCaseStudyDetailBySlug($slug){
        return DB::table('case_studies')->where('slug', $slug)->get()->first();
    }
    
    public function insertLeadsData($request){
        $data = [
            'name'          => $request['name'],
            'email'         => $request['email'],
            'phone'         => $request['phone'],
            'skype_id'      => $request['skypeid'],
            'requirements'  => $request['requirements']
        ];
        DB::table('email_leads')->insert($data);
        return DB::getPdo()->lastInsertId();
    }
    
    public function insertModalLeadsData($request){
        $data = [
            'name'          => $request['name1'],
            'email'         => $request['email1'],
            'phone'         => $request['phone1'],
            'skype_id'      => $request['skypeid1'],
            'requirements'  => $request['requirements1']
        ];
        DB::table('email_leads')->insert($data);
        return DB::getPdo()->lastInsertId();
    }
    
}