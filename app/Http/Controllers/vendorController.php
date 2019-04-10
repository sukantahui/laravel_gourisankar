<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class vendorController extends Controller
{
    //

    function getPersonDetails(){
        $details=array();
       /* $details=DB::table('person')
            ->select('person_id as id','person_cat_id','person_name')
            ->get();
        */
        $details=DB::select( DB::raw("select * from person") );
        return array('records'=>$details);
    }


    function getPersonDetailsById($id){
        $details=array();
        $details=DB::table('person')

            ->where([
                ['person_cat_id','=' ,$id]
            ])
            ->get();
        return array('records'=>$details);
    }



    function getPersonByDistrict($id,$districtId){
        $details=array();
        $details=DB::table('person')

            ->where([
                ['person_cat_id','=' ,$id],['district_id','=' ,$districtId]
            ])
            ->get();
        return array('records'=>$details);
    }

    function savePerson(Request $request){
        //$arRequestData = Request::all();
        //$arRequestData=array('a'=>89,'b'=>88);
        $post = Post::create($request->only('login'));
        return array('records'=>$post);
//        $symptomsId = DB::table('person')->insertGetId(array(
//            'symptom'      => $vrName,
//            'startDate'    => $startDate,
//            'uidOfPatient' => $actionDoneOnUserId,
//            'firstParentId' => $parentId,
//            'createdByUid' => $createdByUserId,
//            'discontinuedOnDateTime'=> null,
//            'deletedOnDateTime'=> null,
//            'severity'     => $vrSeverity,
//            'created_at'   => $vrCreatedOnTimeOnClient,
//            'createdOnTimeZone'   => $vrCreatedOnTimeZoneOnClient,
//            'createdFromIPAddress'   => $createdFromIPAddress,
//            'typeOfSection' => 'ScBrain'
//        ));

    }
}
