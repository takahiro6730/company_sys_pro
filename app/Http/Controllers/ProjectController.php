<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\App;
use Auth;
use App\Models\User;
use App\Models\Project;
use App\Models\Unit;
use App\Models\ProjectType;
use Carbon\Carbon;
use Storage;
use App\Models\projectInvoice;
use Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public const progress_state_types =[
        // 0 => "未設定",
        1 => "登録",
        2 => "担当者選定",
        3 => "案件許可",
        4 => "請求書作成",
        5 => "入金",
        6 => "出金",
        7 => "完了",
    ];

    public const complete_state_types =[
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
            $complete_state_types = self::complete_state_types;
            $projects = Project::where("user_id", Auth::user()->id)->get();
            return view("projectMana.index", compact('projects', 'progress_state_types', 'complete_state_types'));
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->confirmed === null || Auth::user()->confirmed == 0) {
            return view('error.403');
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
        $project->complete_state = 0;
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
        $project = Project::find($id);
        $project_types = ProjectType::all();
        $progress_state_types = self::progress_state_types;
        $complete_state_types = self::complete_state_types;
        if($project->complete_state == 2) return view('error.400');
        return view('projectMana.edit_1', compact('project', 'project_types', 'progress_state_types', 'complete_state_types'));
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

    public function uploadInvoice(Request $request){
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,png|max:4096',
            'project_id' => 'required|integer',
            'auther_id' => 'required|integer'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('invoices', $fileName, 'public');

            $projectInvoice = new projectInvoice();
            $projectInvoice->projectId =  $request->project_id;
            $projectInvoice->filepath =  $filePath;
            $projectInvoice->save();

            $project = Project::find($request->project_id);
            $project->invoice_id = $projectInvoice->id;
            $project->save();

            return response()->json('OK');
        }

        return response()->json('File not uploaded', 400);
    }

    public function showInvoice($id)
    {
        $invoice = projectInvoice::findOrFail($id);
        $filePath = $invoice->filepath;
        $fileName = "invoice";
        
        if (Storage::disk('public')->exists($filePath)) {
            $pdfContent = Storage::disk('public')->get($filePath);

            return response($pdfContent, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . $fileName . '"')
            ->header('X-Content-Type-Options', 'nosniff');
        }

        return abort(404, 'File not found');
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

    public function state_cancel(Request $request)
    {
        $id = $request->delete_project;
        if(Auth::user()->role_id > 2) {
            $user = Auth::user();
            $project = Project::find($id);
            if($user->id !== $project->user_id) return "ERROR: INVALID USER";
            $project->complete_state = 2;
            $project->save();
            return redirect(route('projectMana.index'));
        } else {
            $project = Project::find($id);
            $project->complete_state = 2;
            $project->save();
            return redirect(route('projectMana.admin.index'));
        }
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
            $complete_state_types = self::complete_state_types;
            $projects = Project::all();
            return view("projectMana.admin.index", compact('projects', 'progress_state_types', 'complete_state_types'));
        }
    }

    public function admin_detail($id)
    {
        $project = Project::find($id);
        $project_types = ProjectType::all();
        $managers = User::where('role_id', '<=', '2')->get();
        $progress_state_types = self::progress_state_types;
        $complete_state_types = self::complete_state_types;
        return view('projectMana.admin.edit', compact('project', 'project_types', 'managers', 'progress_state_types', 'complete_state_types'));
    }

    public function manager_select(Request $request)
    {
        $current_user = User::find($request->auther_id);
        if(Auth::user()->role_id > 2 || $current_user->id != Auth::user()->id || $current_user->role_id > 2) {
            return "NO PERMISSIOM";
        }
        $project = Project::find($request->project_id);
        $manager_id = $request->manager_id;
        $project->project_manager = $manager_id;
        $saved = $project->save();
        if(!$saved){
            return "FAILED";
        }
        $project->progress_state = 2;
        $saved = $project->save();
        if(!$saved){
            return "UPDATE FAILED";
        }
        return "OK";
    }
    
    public function project_allow(Request $request)
    {
        $current_user = User::find($request->auther_id);
        if(Auth::user()->role_id > 2 || $current_user->id != Auth::user()->id || $current_user->role_id > 2) {
            return "NO PERMISSIOM";
        }
        $project = Project::find($request->project_id);

        $project->progress_state = 3;
        $saved = $project->save();
        if(!$saved){
            return "UPDATE FAILED";
        }

        return "OK";
    }
    
    public function invoice_allow(Request $request)
    {
        $current_user = User::find($request->auther_id);
        if(Auth::user()->role_id > 2 || $current_user->id != Auth::user()->id || $current_user->role_id > 2) {
            return "NO PERMISSIOM";
        }
        $project = Project::find($request->project_id);

        $project->progress_state = 4;
        $saved = $project->save();
        if(!$saved){
            return "UPDATE FAILED";
        }

        return "OK";
    }

    public function paymentCheck(Request $request)
    {
        $current_user = User::find($request->auther_id);
        if(Auth::user()->role_id > 2 || $current_user->id != Auth::user()->id || $current_user->role_id > 2) {
            return "NO PERMISSIOM";
        }
        $project = Project::find($request->project_id);

        $project->amount = $request->pay_amoumt;
        $project->progress_state = 5;
        $saved = $project->save();
        if(!$saved){
            return "UPDATE FAILED";
        }

        return "OK";
    }

    public function transferCheck(Request $request)
    {
        $current_user = User::find($request->auther_id);
        if(Auth::user()->role_id > 2 || $current_user->id != Auth::user()->id || $current_user->role_id > 2) {
            return "NO PERMISSIOM";
        }
        $project = Project::find($request->project_id);

        $project->progress_state = 6;
        $saved = $project->save();
        if(!$saved){
            return "UPDATE FAILED";
        }

        return "OK";
    }

    public function projectComplete(Request $request)
    {
        $current_user = User::find($request->auther_id);
        if(Auth::user()->role_id > 2 || $current_user->id != Auth::user()->id || $current_user->role_id > 2) {
            return "NO PERMISSIOM";
        }
        $project = Project::find($request->project_id);

        $project->progress_state = 7;
        $project->complete_state = 2;
        $saved = $project->save();
        if(!$saved){
            return "UPDATE FAILED";
        }

        return "OK";
    }
}
