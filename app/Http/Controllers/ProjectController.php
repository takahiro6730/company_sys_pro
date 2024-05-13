<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Project;
use App\Models\Unit;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role_id > 2) {
            return view('error.401');
        } else {
            $projects = Project::all();
            return view("projectMana.index", compact('projects'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->role_id > 2) {
            return view('error.401');
        } else{
            $users = User::all();
            $units = Unit::all();
            return view('projectMana.create', compact('users', 'units'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project_manager = $request->pm;
        $project_worker = $request->worker;
        $title = $request->title;
        $platform = $request->platform;
        $amount = $request->amount;
        $unit = $request->unit;
        $deadline = $request->deadline;
        $other = $request->other;

        $request->validate(
            [
            'pm' => ['required'],
            'worker' => ['required'],
            'title' => ['required'],
            'platform' => ['required'],
            'amount' => ['required'],
            'unit' => ['required'],
            'deadline' => ['required']
            ],
            $messages = [
                'pm.required' => 'プロジェクト担当者を入力してください。',
                'worker.required' => '開発者を入力してください。',
                'title.required' => '案件名を入力してください。',
                'platform.required' => 'プラットフォームを入力してください。',
                'amount.required' => '予算額を入力してください。',
                'unit.required' => '通貨単位を入力してください。',
                'deadline.required' => '納期日を入力してください。'
            ]
        );


        $project = new Project();
        $project->project_manager = $project_manager;
        $project->project_worker = $project_worker;
        $project->title = $title;
        $project->platform = $platform;
        $project->amount = $amount;
        $project->unit_id = $unit;
        $project->deadline = $deadline;
        $project->other = $other;
        $project->progress = "0";

        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('Y-m-d');
        $project->created_at = $currentDate;
        $project->save();
        // Create a new record

        return redirect()->route('projectMana.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $id = $request->id;
        $worker = $request->worker;
        $deadline = $request->deadline;
        $progress = $request->progress;
        $other = $request->other;
        $project = Project::find($id);

        $project->project_worker = $worker;
        $project->deadline = $deadline;
        $project->progress = $progress;
        $project->other = $other;
        $currentDate = Carbon::now();
        $project->updated_at = $currentDate;
        $project->save();
        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $project = Project::find($id);
        $project->delete();

        return "OK";
    }
}
