<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Lnurl;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'lnurl' => 'string'
        ]);
        if(count(Worker::where('lnurl',$request->lnurl)->get()) >0){
            return redirect('/')->with('msg', 'Data already exists');
        }
        $lnurl = Lnurl::create([
            'lnurl' => $request->lnurl
        ]);
        $s = Worker::create([
            'email' => $request->email,
            'lnurl' => $request->lnurl,
            'code' => $request->code,
            'lnurl_id' => $lnurl->id
        ]);
        if($s){
            return redirect('/')->with('msg', 'Done');
        }else{
            return redirect('/')->with('msg', 'There was an error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Worker::where('id',$id)->delete();
        return redirect('/home');
    }
}
