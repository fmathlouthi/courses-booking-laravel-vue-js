<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\SubjectProgramResource;
use App\Mail\RequestService;
use App\Models\Country;
use App\Models\Subject;
use App\Models\SubjectProgram;
use App\Models\UniversityRequest;
use App\Models\UniversitySubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubjectsUniversitiesApiController extends Controller
{
    public function index()
    {
        $products = SubjectProgram::with(['university.city','university.city.country','university.features','subject','university'])->withFilters()->get();
        return SubjectProgramResource::collection($products);
      }

    

    public function show(SubjectProgram $subjectprogram)
    { 
        return new SubjectProgramResource($subjectprogram->load(['university.city','university.city.country','university.features','subject','university']));
    }
    public function getsubjectbydegree(Request $request)
    {
        $subjects = Subject::join('subject_programs', 'subjects.id', '=', 'subject_programs.subject_id')
        ->select('subjects.*')
        ->distinct()
        ->where('subject_programs.type', $request->degree)
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        return $subjects;
    }
    public function getcountrybysubject(Request $request)
    {
        $countries = Country::join('cities', 'countries.id', '=', 'cities.country_id')
        ->join('university_subjects', 'university_subjects.city_id', '=', 'cities.id')
        ->join('subject_programs', 'university_subjects.id', '=', 'subject_programs.university_id')
        ->join('subjects', 'subject_programs.subject_id', '=', 'subjects.id')
        ->select('countries.*')
        ->distinct()
        ->where('subject_programs.subject_id', $request->subject)
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        return $countries;
    }
    public function subjectlist(){
        return Subject::get(['id','name']);
    }
    public function filtersubject()
    {
        $products = SubjectProgram::with(['university.city','university.city.country','university.features','subject','university'])->withFilters()->get();
 
        return SubjectProgramResource::collection($products);
    }
    public function newrequest(Request $request)
    {
        $data = $request->validate([
            'data' => 'required|array|min:1',
            'uid' => 'required',
        ]);
        $newdata = $data['data'];
        $uid = $data['uid'];
        $universty = UniversitySubject::findOrFail($uid);
        $time = strtotime($newdata['dBirth']);
        $newformat = date('Y-m-d',$time);
        $nationality = $newdata['nationality'];
        $subjectinterestitem= $newdata['subjectinterestitem'];
        $name=explode(" ",$newdata['fullName']);
        $newreqquest = new UniversityRequest();
        $newreqquest->student_first_name = $name[0];
        $newreqquest->student_last_name = $name[1];
        $newreqquest->gendre = $newdata['gender'];
        $newreqquest->nationality = $nationality["value"];
        $newreqquest->level_of_study = $newdata['levelofstudy'];
        $newreqquest->email = $newdata['email'];
        $newreqquest->phone = $newdata['phone'];
        $newreqquest->country = $newdata['country'];
        $newreqquest->post_code = $newdata['zip'];
        $newreqquest->state = $newdata['region'];
        $newreqquest->city = $newdata['city'];
        $newreqquest->address_1 = $newdata['address1'];
        $newreqquest->address_2 = $newdata['address2'];
        $newreqquest->special_needs = $newdata['specialneeds'];
        $newreqquest->comments = $newdata['comments'];
        $newreqquest->preferred_intake = $newdata['preferredintake'];
        $newreqquest->university_degree = $newdata['ProgressionUniversitydegree'];
        $newreqquest->university_college = $newdata['decision'];
        $newreqquest->secondary_school = $newdata['ssdeg'];
        $newreqquest->english_proficiency = $newdata['engp'];
        $newreqquest->current_address = $newdata['currently'];
        $newreqquest->date_of_birth = $newformat;
        $newreqquest->subject_id = $subjectinterestitem["value"];
        $newreqquest->university_id = $uid;
        $newreqquest->owner_id = $universty->owner_id;
        $newreqquest->save();
        Mail::to(env('MAIL_ADMIN_ADDRESS'))->send(new RequestService($newdata));
        return $newreqquest;
    }
}
