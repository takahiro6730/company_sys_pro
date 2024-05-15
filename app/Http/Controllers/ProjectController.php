<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Project;
use App\Models\Unit;
use App\Models\ProjectType;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public const progress_state_types =[
        0 => "未設定",
        1 => "登録",
        2 => "案件許可",
        3 => "請求書作成",
        4 => "入金",
        5 => "出金",
        6 => "完了",
    ];

    public const compleate_state_types =[
        0 => "進行中",
        1 => "完了",
        2 => "キャンセル",
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // if(Auth::user()->role_id > 2) {
        //     return view('error.401');
        // } else {
            $progress_state_types = self::progress_state_types;
            $compleate_state_types = self::compleate_state_types;
            $projects = Project::where("user_id", Auth::user()->id)->get();
            return view("projectMana.index", compact('projects', 'progress_state_types', 'compleate_state_types'));
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->role_id > 2) {
            return view('error.401');
        } else{
            $user = Auth::user();
            $project_types = ProjectType::all();
            return view('projectMana.create', compact('user', 'project_types'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $title = $request->title;
        $worker = $request->worker;
        $project_type = $request->project_type;
        $remittance = $request->remittance;
        $amount = $request->amount;
        $deposit = $request->deposit;
        $deadline = $request->deadline;
        $comment = $request->comment;

        $request->validate(
            [
            'title' => ['required'],
            'worker' => ['required'],
            'project_type' => ['required'],
            'amount' => ['required'],
            ],
            $messages = [
                'title.required' => '案件名を入力してください。',
                'worker.required' => '開発者を入力してください。',
                'project_type.required' => '業務形番号を入力してください。',
                'amount.required' => '予算額を入力してください。',
            ]
        );

        $project = new Project();
        $project->user_id = $user_id;
        $project->project_worker = $worker;
        $project->title = $title;
        $project->amount = $amount;
        $project->type_id = $project_type;
        $project->progress_state = 1;
        $project->compleate_state = 0;
        $project->deadline = $deadline;
        $project->deposit = $deposit;
        $project->remittance_address = $remittance;
        $project->project_comment = $comment;

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
        dd("ertyuio");
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

    public function project_types_view()
    {
        $project_types = ProjectType::all();
        return view("projectMana.types", compact("project_types"));
    }

    public function admin_index()
    {
        if(Auth::user()->role_id > 2) {
            return view('error.401');
        } else {
            $progress_state_types = self::progress_state_types;
            $compleate_state_types = self::compleate_state_types;
            $projects = Project::all();
            return view("projectMana.admin.index", compact('projects', 'progress_state_types', 'compleate_state_types'));
        }
    }
}
