<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\MyPianoLog;
use App\Models\PianoLog;
use App\Services\CheckPianoLogService;
use App\Http\Requests\StoreMyPianologRequest;

class MyPianoLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $mypianologs = PianoLog::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->get();

        // ペジネーション対応
        // $mypianologs = PianoLog::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->paginate(20);

        // 検索対応
        $search = $request->search;
        // $query = MyPianoLog::search($search);
        $query = PianoLog::search($search);
        $mypianologs = $query->select('id','username','userid','song','composer','playingage','difficulty','degree','playingtimerp','playingtimenrp','score','readingperiod','exercise','technique','recording','url','soundsource','books')
        ->paginate(20);

        // return view('mypianologs.index', compact('mypianologs','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
        return view('mypianologs.index', compact('mypianologs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mypianologs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StorePianologRequest $request)
    public function store(request $request)
    {
        // dd($request, $request->name);
        
        // MyPianoLog::create([
        PianoLog::create([
            'username' => $request->username,
            'userid' => $request->userid,
            'song' => $request->song,
            'composer' => $request->composer,
            'playingage' => $request->playingage,
            'difficulty' => $request->difficulty,
            'degree' => $request->degree,
            'playingtimerp' => $request->playingtimerp,
            'playingtimenrp' => $request->playingtimenrp,
            'score' => $request->score,
            'readingperiod' => $request->readingperiod,
            'exercise' => $request->exercise,
            'technique' => $request->technique,
            'recording' => $request->recording,
            'url' => $request->url,
            'soundsource' => $request->soundsource,
            'books' => $request->books,
        ]);

        return to_route('mypianologs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $mypianolog = MyPianoLog::find($id);
        $mypianolog = PianoLog::find($id);

        $playingage = CheckPianoLogService::checkPlayingage($mypianolog);
        $difficulty = CheckPianoLogService::checkDifficulty($mypianolog);
        $degree = CheckPianoLogService::checkDegree($mypianolog);     
        $playingtimerp = CheckPianoLogService::checkPlayingtimerp($mypianolog);
        $playingtimenrp = CheckPianoLogService::checkPlayingtimenrp($mypianolog);
        $readingperiod = CheckPianoLogService::checkReadingperiod($mypianolog);

        return view('mypianologs.show', compact('mypianolog','playingage','difficulty','degree','playingtimerp','playingtimenrp','readingperiod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $mypianolog = MyPianoLog::find($id);
        $mypianolog = PianoLog::find($id);

        return view('mypianologs.edit', compact('mypianolog'));
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
        $mypianolog = PianoLog::find($id);
        // $mypianolog = MyPianoLog::find($id);
        $mypianolog->username = $request->username;
        $mypianolog->userid = $request->userid;
        $mypianolog->song = $request->song;
        $mypianolog->composer = $request->composer;
        $mypianolog->playingage = $request->playingage;
        $mypianolog->difficulty = $request->difficulty;
        $mypianolog->degree = $request->degree;
        $mypianolog->playingtimerp = $request->playingtimerp;
        $mypianolog->playingtimenrp = $request->playingtimenrp;
        $mypianolog->score = $request->score;
        $mypianolog->readingperiod = $request->readingperiod;
        $mypianolog->exercise = $request->exercise;
        $mypianolog->recording = $request->recording;
        $mypianolog->url = $request->url;
        $mypianolog->soundsource = $request->soundsource;
        $mypianolog->books = $request->books;
        $mypianolog->save();

        return to_route('mypianologs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $mypianolog = MyPianoLog::find($id);
        $mypianolog = PianoLog::find($id);
        $mypianolog->delete();

        return to_route('mypianologs.index');
    }
}
