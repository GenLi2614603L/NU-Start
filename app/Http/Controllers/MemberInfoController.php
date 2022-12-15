<?php

namespace App\Http\Controllers;

use App\Models\MemberInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MemberInfoController extends Controller
{
    //
    public function index(){
        $user = Auth::user()->name;
        $MemberInfos = DB::table('member_infos')->where('m_email','=',Auth::user()->email)->get();
        return view('register.member',['user'=> $user,'MemberInfos'=>$MemberInfos]);
    }

    public function store(){
        request()->validate([
            'OrganisationName' => 'required',
            'OrganisationEmail' => 'required|email|max:100',
            'OrganisationPhone' => 'required',
            'StreetAddress' => 'required',
            'Town' => 'required',
            'Postcode' => 'required',
            'FirstName' => 'required',
            'Phone' => 'required',
            'Job' => 'required',
            'LastName' => 'required',
            'Email' => 'required|email|max:100',
            'Role' => 'required',
            'SpecialistService' => 'required',
            'Motivation' => 'required',
            'Person' => 'required|max:50',
        ]);
        $user = Auth::user()->email;

        $memberInfos = new MemberInfo();

        $memberInfos->m_email = $user ;
        $memberInfos->OrganisationName = request('OrganisationName');
        $memberInfos->OrganisationEmail = request('OrganisationEmail');
        $memberInfos->Website = request('Website');
        $memberInfos->OrganisationPhone = request('OrganisationPhone');
        $memberInfos->StreetAddress =request('StreetAddress');
        $memberInfos->Town =request('Town');
        $memberInfos->Postcode =request('Postcode');
        $memberInfos->FirstName =request('FirstName');
        $memberInfos->Phone =request('Phone');
        $memberInfos->Job =request('Job');
        $memberInfos->LastName =request('LastName');
        $memberInfos->Email =request('Email');
        $memberInfos->Role =request('Role');
        $memberInfos->Establish =request('Establish');
        $memberInfos->CompanyNumber =request('CompanyNumber');
        $memberInfos->CharityNumber =request('CharityNumber');
        $memberInfos->Group =request('Group');
        $memberInfos->WorkWith =request('WorkWith');
        $memberInfos->SpecialistService =request('SpecialistService');
        $memberInfos->Motivation =request('Motivation');
        $memberInfos->Comment =request('Comment');
        $memberInfos->Person =request('Person');
        $memberInfos->save();

        return redirect('/myaccount');
//        dd($memberInfos->m_email);
//        dd(request()->all());
    }

}
