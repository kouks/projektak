<?php

namespace App\Http\Controllers;

use App\TaskRequest;
use App\Notifications\TimeRequestDenied;
use App\Notifications\TimeRequestApproved;

class TaskRequestController extends Controller
{
    /**
     * Handles listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = TaskRequest::with('task', 'worker')->get();

        return view('task-requests.index', compact('requests'));
    }

    /**
     * Handles approval of given task request.
     *
     * @param  \App\TaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function approve(TaskRequest $request)
    {
        $request->worker->user->notify(
            new TimeRequestApproved($request)
        );

        $request->approve();

        return back()->withSuccess('Request has been approved.');
    }

    /**
     * Handles denial of given task request.
     *
     * @param  \App\TaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function deny(TaskRequest $request)
    {
        $request->worker->user->notify(
            new TimeRequestDenied($request)
        );

        $request->deny();

        return back()->withSuccess('Request has been denied');
    }
}
