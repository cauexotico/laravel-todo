<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskGroupRequest;
use App\Models\TaskGroup;
use Illuminate\Http\Request;

class TaskGroupController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(TaskGroup::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taskGroups = TaskGroup::where('user_id', auth()->user()->id)->paginate();

        return view('taskGroup.index', compact('taskGroups'));
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
    public function store(StoreTaskGroupRequest $request)
    {
        auth()->user()->taskGroups()->create($request->validated());

        return redirect()->route('task-group.index')->with('success', 'Task group has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskGroup  $taskGroup
     * @return \Illuminate\Http\Response
     */
    public function show(TaskGroup $taskGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskGroup  $taskGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskGroup $taskGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaskGroup  $taskGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskGroup $taskGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskGroup  $taskGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskGroup $taskGroup)
    {
        //
    }
}
