<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tasklist;   //追加

class TasklistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasklists = Tasklist::all();
        
        return view('tasklists.index', [
            'tasklists' => $tasklists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasklist = new Tasklist;

        return view('tasklists.create', [
            'tasklist' => $tasklist,
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
        $this->validate($request, ['task' => 'required|max:191']);
        $this->validate($request, ['status' => 'required']);
        
        $tasklist = new Tasklist;
        $tasklist->task = $request->task;
        $tasklist->deadline = $request->deadline;
        $tasklist->status = $request->status;
        $tasklist->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasklist = Tasklist::find($id);
        
        return view('tasklists.show', [
            'tasklist' => $tasklist,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasklist = Tasklist::find($id);

        return view('tasklists.edit', [
            'tasklist' => $tasklist,
            ]);
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
        $this->validate($request, ['task' => 'required|max:191']);
        $this->validate($request, ['status' => 'required']);
        
        $tasklist = Tasklist::find($id);
        $tasklist->task = $request->task;
        $tasklist->deadline = $request->deadline;
        $tasklist->status = $request->status;    
        $tasklist->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasklist = Tasklist::find($id);
        $tasklist->delete();

        return redirect('/');
    }
}
