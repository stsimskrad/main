<?php

namespace App\Http\Traits;

use Hashids\Hashids;  
use App\Models\Scholar;
use App\Models\ListDropdown;
use App\Models\FinancialGroup;
use App\Models\FinancialGroupList;
use App\Models\SchoolCourseProspectus;
use App\Models\ScholarEducation;
use App\Models\SchoolSemester;
use App\Models\ScholarEnrollment;
use App\Models\ScholarEnrollmentList;
use App\Http\Resources\DefaultResource;

trait EnrollmentTrait {
    
    public function createList($id,$request) 
    {
        $lists = json_decode($request->lists,true);
        foreach($lists as $key=>$list){
            $options = [];
            ScholarEnrollmentList::create(array_merge($list,[
                'options' => json_encode($options) ,
                'enrollment_id' => $id,
                'encoded_by' =>  \Auth::user()->id
            ]));
        }
    }

    public function check($request)
    {
        $count = ScholarCourse::where('scholar_id',$request->scholar_id)->count();
        if($count == 0){
            $pros = SchoolCourseProspectus::where('school_course_id',$request->subcourse)->first();
            $information = [
                'prospectus' => json_decode($pros->subjects)
            ];

            $data = new ScholarCourse;
            $data->scholar_id = $request->scholar_id;
            $data->subcourse_id = $request->subcourse;
            $data->information = json_encode($information);
            $data->save();
        }
    }

    public function level($request){
        $hashids = new Hashids('krad',10);
        $scholar_id = $hashids->decode($request->scholar_id);
        $data = ScholarEducation::where('scholar_id',$scholar_id[0])->first();
        ($data->level_id != $request->level_id) ? $data->level_id = $request->level_id : '';
        $data->save();
    }

    public function financialGroup($request){
        $hashids = new Hashids('krad',10);
        $scholar_id = $hashids->decode($request->scholar_id);
        
        $id = $request->semester_id;
        $semester = SchoolSemester::where('id',$id)->first();

        $month = $semester->start_at;
        $semester_id = $semester->semester->id;
        $academic_year = $semester->academic_year;

        $data = FinancialGroup::where('academic_year',$academic_year)->where('semester_id',$semester_id)->first();
        if(empty($data) || $data == null){
            $data = new FinancialGroup;
            $data->academic_year = $academic_year;
            $data->semester_id = $semester_id;
            $data->is_regular = ($semester->semester->others == 'regular') ? 1 : 0;
            $data->save();
        }

        $list = new FinancialGroupList;
        $list->start_at = $month;
        $list->group_id = $data->id;
        $list->scholar_id = $scholar_id[0];
        $list->save();
    }
}