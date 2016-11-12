<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function application()
    {
        // get all users
        $applications = DB::table('applicant')->get();

        return view('admin.application', [
            "applications" => $applications,
        ]);
    }

    public function capSetting()
    {
        return view('admin.capSetting');
    }

    public function accountManagement()
    {
        // get all users
        $users = DB::table('users')->get();

        return view('admin.accountManagement', [
            "users" => $users,
        ]);
    }

    public function applicationForm()
    {
        return view('applicant.applicationForm');
    }

    public function statusSetting()
    {
        return view('admin.statusSetting');
    }

    public function deleteAccount($id)
    {
        // delete user with $id if exists
        DB::table('users')->where('id', $id)->delete();

        // get all users
        $users = DB::table('users')->get();

        return view('admin.accountManagement', [
            "users" => $users,
        ]);
    }

    public function applicationSubmission(Request $request)
    {
        //dd($request->all());

        // check applicant has applied or not
        /*
        if(DB::table('applicant')->where('id', Auth::user()->id)->count() != 0) {
            Session::flash('applicationMsg', '這學號已經申請過囉！'); // for flash session
            return view('applicant.applicationForm');
        }
        */
        // no-brainer check is completed

        // add to DB
        DB::table('applicant')->insert(
            [
                'id'            => Auth::user()->id,
                'ChineseName'   => $request->input('chineseName'),
                'EnglishName'   => $request->input('englishName'),
                'studentID'     => $request->input('studentID'),
                'created_At'    => Carbon::now(),
            ]
        );

        Session::flash('applicationMsg', '申請已經遞出！'); // for flash session
        return view('applicant.applicationForm');
    }
}
