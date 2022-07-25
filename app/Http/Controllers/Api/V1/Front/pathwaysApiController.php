<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\PathwayUniversityResource;
use App\Mail\RequestService;
use App\Models\Country;
use App\Models\Pathway;
use App\Models\PathwayRequest;
use App\Models\PathwayUniversity;
use App\Models\SubjectPathway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class pathwaysApiController extends Controller
{
    public function show(PathwayUniversity $pathwayUniversity)
    { 
        return new PathwayUniversityResource($pathwayUniversity->load(['city','city.country','features','pathways','pathways.subjectPathway']));
    }
    public function getsubjectbydegree(Request $request)
    {
        $subjects = SubjectPathway::join('pathways', 'subject_pathways.id', '=', 'pathways.subject_pathway_id')
        ->select('subject_pathways.*')
        ->distinct()
        ->where('pathways.type', $request->degree)
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        return $subjects;
    }
    public function getcountrybysubject(Request $request)
    {
        $countries = Country::join('cities', 'countries.id', '=', 'cities.country_id')
        ->join('pathway_universities', 'pathway_universities.city_id', '=', 'cities.id')
        ->join('pathways', 'pathway_universities.id', '=', 'pathways.university_id')
        ->select('countries.*')
        ->distinct()
        ->where('pathways.subject_pathway_id', $request->subject)
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        return $countries;
    }
    public function filtersubject()
    {
        $products = PathwayUniversity::with(['city','city.country','features','pathways','pathways.subjectPathway'])->withFilters()->get();
 
        return PathwayUniversityResource::collection($products);
    }
    public function subjectlist(){
        return SubjectPathway::get(['id','name']);
    }
    public function pathwaylist(){
        return Pathway::get(['id','name']);
    }
    public function newrequest(Request $request)
    {
        $data = $request->validate([
            'data' => 'required|array|min:1',
            'uid' => 'required',
        ]);
        $newdata = $data['data'];
        $uid = $data['uid'];
        $universty = PathwayUniversity::findOrFail($uid);
        $time = strtotime($newdata['dBirth']);
        $newformat = date('Y-m-d',$time);
        $nationality = $newdata['nationality'];
        $subjectinterestitem= $newdata['subjectinterestitem'];
        $ProgressionUniversitydegree= $newdata['ProgressionUniversitydegree'];
        $name=explode(" ",$newdata['fullName']);
        $newreqquest = new PathwayRequest();
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
        $newreqquest->university_degree_id = $ProgressionUniversitydegree['value'];
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
