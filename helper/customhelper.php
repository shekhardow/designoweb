<?php 
/*
@Auther :Ambuj Mishra
Here You Can Write Your Custom Helper
*/

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

    function admindetails(){
        $result=DB::table('admins')->orderBy('id', 'desc')->first();
        return $result;
    }

    // for id encrypt 
    function encryptionID($id){
        $res=substr(uniqid(), 0, 10).$id.substr(uniqid(), 0, 10);
        return $res;
    }

    // decription
    function decryptionID($result_id){
        $id = substr($result_id, 10);
        $result_id = substr($id, 0, -10);
        return $result_id;
    }

    function insert($table,$data=[]){
        $result=DB::table($table)->insert($data);
        return  DB::getPdo()->lastInsertId();
    }

    function update($table,$wherecol,$wherevalue,$data,$wherecondition='='){
        $affected_row = DB::table($table)->where($wherecol, $wherecondition, $wherevalue)->update($data);
        return $affected_row;
    }

    function delete($table,$wherecol,$wherevalue){
        $affected_row = DB::table($table)->where($wherecol, $wherevalue)->delete();
        return $affected_row;
    }

    function change_status($id,$status,$table,$wherecol,$status_variable,$wherecondition='='){
        $data = array(
            $status_variable    =>  $status,
        );
       $affected_row = DB::table($table)->where($wherecol, $wherecondition, $id)->update($data);
        return $affected_row;
    }

    function change_status_version2($id,$status,$table,$wherecondition,$status_variable){
        $data = array(
            $status_variable    =>  $status,
        );
       $affected_row = DB::table($table)->where($wherecondition)->update($data);
        return $affected_row;
    }

    function convertToHoursMinsSec($end,$full = false) {
        $now = new DateTime;
        $ago = new DateTime($end);
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    function dayBytwodates($date){
        $date=strtotime($date);       
        $date2=time();
        $datediff=$date2-$date; 
        $days=floor(($datediff)/(60*60*24));
        if($days<0){
            return 0;
        }
        return $days;
    }

    function startWithNumber($str){
        return preg_match("~^(\d+)~", $str, $m)===1;
    }

    //----------------------Logic for Currency conversion---------------------------
    function number_format_short( $n, $precision = 1 ) {
    	if ($n < 900) {
    		// 0 - 900
    		$n_format = number_format($n, $precision);
    		$suffix = '';
    	} else if ($n < 900000) {
    		// 0.9k-850k
    		$n_format = number_format($n / 1000, $precision);
    		$suffix = ' k';
    	} else if ($n < 900000000) {
    		// 0.9m-850m
    		$n_format = number_format($n / 1000000, $precision);
    		$suffix = ' m';
    	} else if ($n < 900000000000) {
    		// 0.9b-850b
    		$n_format = number_format($n / 1000000000, $precision);
    		$suffix = ' b';
    	} else {
    		// 0.9t+
    		$n_format = number_format($n / 1000000000000, $precision);
    		$suffix = ' t';
    	}

      // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
      // Intentionally does not affect partials, eg "1.50" -> "1.50"
    	if ( $precision > 0 ) {
    		$dotzero = '.' . str_repeat( '0', $precision );
    		$n_format = str_replace( $dotzero, '', $n_format );
    	}

    	return $n_format . $suffix;
    }

    //financial Year
    function get_finacial_year_range($year, $month) {
        $year = $year;
        $month = $month;
        if($month < 4){
            $year = $year - 1;
        }
        $start_date = date('y',strtotime(($year).'-04-01'));
        $end_date = date('y',strtotime(($year+1).'-03-31'));
        $response = $start_date.'-'.$end_date;
        return $response;
    }
    function datecreate($date){
        $date=date_create($date);
        return date_format($date,"Y-m-d");
    }

    // For Other platform Icons
    function findPlatform($platformlink){
        $platformlink1=strtolower($platformlink);
        if (strpos($platformlink1, 'facebook.com') !== false) {
            return "<span class='socialOptions'><a href='".$platformlink."'><img src='".asset('public/admin/img/Facebook(2).png')."' class='img-fluid' alt='Icon'></a></span>";
        }else if (strpos($platformlink1, 'linkedin.com') !== false) {
            return "<span class='socialOptions'><a href='".$platformlink."'><img src='".asset('public/admin/img/Linkedin.png')."' class='img-fluid' alt='Icon'></a></span>";
        } else if(strpos($platformlink1, 'twitter.com') !== false) {
            return "<span class='socialOptions'><a href='".$platformlink."'><img src='".asset('public/admin/img/Twitter.png')."' class='img-fluid' alt='Icon'></a></span>";
        }else{
            return "<span class='socialOptions'><a href='".$platformlink."'><img src='".asset('public/admin/img/Other.png')."' class='img-fluid' alt='Icon'></a></span>";
        }
    }
?>