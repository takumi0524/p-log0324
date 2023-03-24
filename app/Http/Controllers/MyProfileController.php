<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\MyProfile;
use App\Models\ContactForm;
use App\Services\CheckFormService;
use App\Http\Requests\StoreMyprofileRequest;

class MyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $myprofiles = MyProfile::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->get();

        // ペジネーション対応
        // $myprofiles = MyProfile::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->paginate(20);

        // 検索対応
        $search = $request->search;
        // $query = MyProfile::search($search);
        $query = ContactForm::search($search);
        $myprofiles = $query->select('id','username','userid','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        ->paginate(20);

        // return view('myprofiles.index', compact('myprofiles','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
        return view('myprofiles.index', compact('myprofiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myprofiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyprofileRequest $request)
    {
        // dd($request, $request->name);
        
        // MyProfile::create([
        ContactForm::create([
            'username' => $request->username,
            'userid' => $request->userid,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'pstartage' => $request->pstartage,
            'totalhistory' => $request->totalhistory,
            'pianohon' => $request->pianohon,
            'soundproofhon' => $request->soundproofhon,
            'community' => $request->community,
        ]);

        return to_route('myprofiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $myprofile = MyProfile::find($id);
        $myprofile = ContactForm::find($id);

        $gender = CheckFormService::checkGender($myprofile);
        $age = CheckFormService::checkAge($myprofile);
        $pstartage = CheckFormService::checkPstartage($myprofile);     
        $totalhistory = CheckFormService::checkTotalhistory($myprofile);
        $pianohon = CheckFormService::checkPianohon($myprofile);
        $soundproofhon = CheckFormService::checkSoundproofhon($myprofile);

        return view('myprofiles.show', compact('myprofile','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $myprofile = MyProfile::find($id);
        $myprofile = ContactForm::find($id);

        return view('myprofiles.edit', compact('myprofile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $myprofile = MyProfile::find($id);
        $myprofile = ContactForm::find($id);
        $myprofile->username = $request->username;
        $myprofile->userid = $request->userid;
        $myprofile->email = $request->email;
        $myprofile->age = $request->age;
        $myprofile->gender = $request->gender;
        $myprofile->pstartage = $request->pstartage;
        $myprofile->totalhistory = $request->totalhistory;
        $myprofile->pianohon = $request->pianohon;
        $myprofile->soundproofhon = $request->soundproofhon;
        $myprofile->community = $request->community;
        $myprofile->save();

        return to_route('myprofiles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $myprofile = MyProfile::find($id);
        $myprofile = ContactForm::find($id);
        $myprofile->delete();

        return to_route('myprofiles.index');
    }
}
