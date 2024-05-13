<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Payment;
use App\Models\Unit;
use Auth;
use Illuminate\Http\Request;

class DepositController extends Controller
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
            $user = Auth::user();
            $user_id = $user->id;

            $deposits = Deposit::all();
            $units = Unit::all();
            $payments = Payment::all();
            return view('depositMana.index', compact('deposits', 'units', 'payments', 'user_id'));
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
            $payments = Payment::all();
            return view('depositMana.create', compact('units', 'payments'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate(
            [
                'deposited_date' => ['required'],
                'client_info' => ['required'],
                'amount' => ['required'],
                'unit_id' => ['required'],
                'payment_id' => ['required']
            ],
            $messages = [
                'deposited_date.required' => '入金日を入力してください。',
                'client_info.required' => 'クライアント名を入力してください。',
                'amount.required' => '金額を入力してください。',
                'unit_id.required' => '単位を入力してください。',
                'payment_id.required' => '入金経路を入力してください。'
                ]
        );

        $deposit = new Deposit();

        $deposit->register_user = $user->id;
        $deposit->deposited_date = $request->deposited_date;
        $deposit->client_info = $request->client_info;
        $deposit->amount = $request->amount;
        $deposit->unit_id = $request->unit_id;
        $deposit->payment_id = $request->payment_id;
        $deposit->other = $request->other;
        $deposit->save();

        $store = 1;
        $units = Unit::all();
        $payments = Payment::all();
        return view('depositMana.create', compact('store', 'units', 'payments'));
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
        $deposit = Deposit::find($id);
        return view('depositMana.edit', compact('deposit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $deposit = Deposit::find($request->id);

        $deposit->deposited_date = $request->deposited_date;
        $deposit->client_info = $request->client_info;
        $deposit->amount = $request->amount;
        $deposit->unit_id = $request->unit_id;
        $deposit->payment_id = $request->payment_id;
        $deposit->other = $request->other;
        $deposit->save();

        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $deposit = Deposit::find($id);
        $deposit->delete();

        return "OK";
    }
}
