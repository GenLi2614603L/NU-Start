<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonalInfoController extends Controller
{
    public function index(){
        $user = Auth::user()->name;
        return view('register.personal',['user'=> $user]);
    }


    public function store(){
        request()->validate([
            'FirstName' => 'required|max:50',
            'SurName' => 'required|max:50',
            'sex' => 'required',
            'DateOfBirth' => 'required',
            'Nationality' => 'required',
            'PostCode' => 'required',
            'Passport' => 'required',
            'Mobile'=>'required',
            'PermanentAddress' => 'required|max:255',
            'disable' => 'required',
            'FullName' => 'required|max:50',
            'Relationship' => 'required',
            'Address' => 'required',
            'ContactNo' => 'required|min:10',
            'EmailAddress' => 'required|email|max:255',
        ]);
        $user = Auth::user()->email;

        $personalInfos = new PersonalInfo();

        $personalInfos->p_email = $user ;
        $personalInfos->FirstName = request('FirstName');
        $personalInfos->MiddleName = request('MiddleName');
        $personalInfos->SurName = request('SurName');
        $personalInfos->sex = request('sex');
        $personalInfos->DateOfBirth =request('DateOfBirth');
        $personalInfos->Nationality =request('Nationality');
        $personalInfos->PostCode =request('PostCode');
        $personalInfos->Telephone =request('Telephone');
        $personalInfos->Mobile =request('Mobile');
        $personalInfos->Passport =request('Passport');
        $personalInfos->PermanentAddress =request('PermanentAddress');
        $personalInfos->disable =request('disable');
        $personalInfos->disableStatement =request('disableStatement');
        $personalInfos->FullName =request('FullName');
        $personalInfos->Relationship =request('Relationship');
        $personalInfos->Address =request('Address');
        $personalInfos->ContactNo =request('ContactNo');
        $personalInfos->emailAddress =request('EmailAddress');
        $personalInfos->save();

        return redirect('/myaccount');

//        dd(request()->all());
    }

    public function edit(){
        $user = Auth::user()->name;
       $personalInfos = DB::table('personal_infos')->where('p_email','=',Auth::user()->email)->get();
        return view('register.edit',['personalInfos'=>$personalInfos,'user'=> $user]);
//        dd(DB::table('personal_infos')->where('p_email','=',Auth::user()->email)->get());
    }

    public function update(){
//
        request()->validate([
            'FirstName' => 'required|max:50',
            'SurName' => 'required|max:50',
            'sex' => 'required',
            'DateOfBirth' => 'required',
            'Nationality' => 'required',
            'PostCode' => 'required',
            'Passport' => 'required',
            'Mobile'=>'required',
            'PermanentAddress' => 'required|max:255',
            'disable' => 'required',
            'FullName' => 'required|max:50',
            'Relationship' => 'required',
            'Address' => 'required',
            'ContactNo' => 'required',
            'EmailAddress' => 'required|email|max:255',
        ]);
        $user = Auth::user()->email;

        $personalInfos = new PersonalInfo();

        $personalInfos->p_email = $user ;
        $personalInfos->FirstName = request('FirstName');
        $personalInfos->MiddleName = request('MiddleName');
        $personalInfos->SurName = request('SurName');
        $personalInfos->sex = request('sex');
        $personalInfos->DateOfBirth =request('DateOfBirth');
        $personalInfos->Nationality =request('Nationality');
        $personalInfos->PostCode =request('PostCode');
        $personalInfos->Telephone =request('Telephone');
        $personalInfos->Mobile =request('Mobile');
        $personalInfos->Passport =request('Passport');
        $personalInfos->PermanentAddress =request('PermanentAddress');
        $personalInfos->disable =request('disable');
        $personalInfos->disableStatement =request('disableStatement');
        $personalInfos->FullName =request('FullName');
        $personalInfos->Relationship =request('Relationship');
        $personalInfos->Address =request('Address');
        $personalInfos->ContactNo =request('ContactNo');
        $personalInfos->emailAddress =request('EmailAddress');
        DB::table('personal_infos')->where('p_email','=',Auth::user()->email)->delete();
        $personalInfos->save();

        return redirect('/myaccount');
    }

    public function account(){
        $user = Auth::user()->name;
        $MemberInfos = DB::table('member_infos')->where('m_email','=',Auth::user()->email)->get();
        $PersonalInfos = DB::table('personal_infos')->where('p_email','=',Auth::user()->email)->get();
        return view('register.myaccount',['user'=>$user,'MemberInfos'=>$MemberInfos,'PersonalInfos'=>$PersonalInfos]);

    }

}
