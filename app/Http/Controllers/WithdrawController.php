<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Unit;
use App\Models\Withdraw;
use Auth;
use Illuminate\Http\Request;

class WithdrawController extends Controller
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
        if(Auth::user()->role_id > 1) {
            return view('error.401');
        } else {
            $withdraws = Withdraw::all();
            $units = Unit::all();
            return view('withdrawMana.index', compact('withdraws', 'units'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->role_id > 1) {
            return view('error.401');
        } else {
            $units = Unit::all();
            return view('withdrawMana.create', compact('units'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'withdrawal_date' => ['required'],
                'send_to' => ['required'],
                'amount' => ['required'],
                'unit_id' => ['required'],
                'purpose' => ['required']
            ],
            $messages = [
                'withdrawal_date.required' => '出金日を入力してください。',
                'send_to.required' => '受信者名を入力してください。',
                'amount.required' => '金額を入力してください。',
                'unit_id.required' => '単位を入力してください。',
                'purpose.required' => '用途を入力してください。'
                ]
        );

        $withdraw = new Withdraw();
        $withdraw->withdrawal_date = $request->withdrawal_date;
        $withdraw->send_to = $request->send_to;
        $withdraw->amount = $request->amount;
        $withdraw->unit_id = $request->unit_id;
        $withdraw->purpose = $request->purpose;
        $withdraw->other = $request->other;
        $withdraw->save();

        $store = 1;
        $units = Unit::all();
        return view('withdrawMana.create', compact('store', 'units'));
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
        $withdraw = Withdraw::find($request->id);

        $withdraw->withdrawal_date = $request->withdrawal_date;
        $withdraw->send_to = $request->send_to;
        $withdraw->amount = $request->amount;
        $withdraw->unit_id = $request->unit_id;
        $withdraw->purpose = $request->purpose;
        $withdraw->other = $request->other;
        $withdraw->save();

        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $withdraw = Withdraw::find($id);
        $withdraw->delete();

        return 'OK';
    }
}
