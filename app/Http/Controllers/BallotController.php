<?php

namespace App\Http\Controllers;

use App\Ballot;
use Illuminate\Http\Request;

class BallotController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ballots = Ballot::all();

        return view('ballots.index', [
            'ballots' => $ballots,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ballot = new Ballot();

        return view('ballots.create',[
            'ballot' => $ballot,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ballot = Ballot::create($request->all());

        return redirect()->route('ballots.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function show(Ballot $ballot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function edit(Ballot $ballot)
    {
        return view('ballots.edit',[
            'ballot' => $ballot,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ballot $ballot)
    {
        $ballot->fill($request->all());
        $ballot->save();

        return redirect()->route('ballots.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ballot $ballot)
    {
        //
    }
}
