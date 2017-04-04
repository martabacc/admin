<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Http\Requests\CreateAnnouncementRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Announcement::orderBy('end_time','desc')->paginate(10);
        return view('pages.pengumuman.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAnnouncementRequest $request)
    {
        $data['start_time'] = Carbon::createFromFormat('m/d/Y', $request->only('start_time')['start_time']);
        $data['end_time'] = Carbon::createFromFormat('m/d/Y', $request->only('end_time')['end_time']);
        $data['name'] =  $request->only('name')['name'];
        $data['html_code'] =  $request->only('html_code')['html_code'];
        if(Announcement::create($data)){
            return redirect('announcement')->with('success','Sukses menambahkan pengumuman!');
        };


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['x'] = Announcement::findOrFail($id);
        return view('pages.pengumuman.edit', $data);
        //
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
        $x = Announcement::findOrFail($id);
        $x->start_time = Carbon::createFromFormat('m/d/Y', $request->only('start_time')['start_time']);
        $x->end_time = Carbon::createFromFormat('m/d/Y', $request->only('end_time')['end_time']);
        $x->name =  $request->only('name')['name'];
        $x->html_code =  $request->only('html_code')['html_code'];
        if($x->save()){
            return redirect('announcement')->with('success','Sukses memperbarui pengumuman!');
        };

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
