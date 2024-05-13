<?php

namespace App\Http\Controllers;

use PDF;
use File;
use Auth;
use Response;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Unit;
use App\Models\Invoice;

class InvoiceController extends Controller
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
        if(Auth::user()->role_id < 3) {
            $invoices = Invoice::all();
        } else {
            $invoices = Invoice::where('user_id', Auth::user()->id)->get();
        }
        return view("invoiceMana.index", compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = Unit::all();
        $payments = Payment::all();
        return view('invoiceMana.create', compact('units', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'payment' => 'required',
            'client_info' => 'required',
            'amount' => 'required',
            'project_name' => 'required',
        ]);

        Invoice::create([
            'user_id' => Auth::user()->id,
            'payment_id' =>  $request->payment,
            'client_info' => $request->client_info,
            'amount' => $request->amount,
            'unit_id' => 1,
            'project_name' => $request->project_name,
            'other' => $request->other,
        ]);

        return redirect()->route('invoiceMana.index');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if(Auth::user()->role_id > 2) {
            return "Unauthorized";
        }

        $invoice = Invoice::find($request->id);
        $invoice->delete();

        return "OK";
    }

    public function downloadInvoice(Request $request)
    {
        $id = $request->id;

        $invoice = Invoice::find($id);

        if(Auth::user()->role_id > 2 && Auth::user()->id != $invoice->user_id) {
            return "Unauthorized";
        }

        if($invoice->status != 2) {
            return "Unapproved";
        }

        $pdf = PDF::loadView('invoice', ['invoice' => $invoice]);

        $pdf->setPaper('a4', 'landscape');

        $filename = 'invoice_' . time() . '.pdf';
        $pdf->save(storage_path('app/public/invoices/' . $filename));

        $invoice->invoice_link = storage_path('app/public/invoices/' . $filename);

        return response()->download($invoice->invoice_link);
    }

    public function previewInvoiceHTML(Request $request)
    {
        $payment = $request->payment;
        $client_info = $request->client_info;
        $amount = $request->amount;
        $project_name = $request->project_name;
        $other = $request->other;
        $today = $currentDate = Carbon::now();

        $cnt = Invoice::all()->count() + 1;
        $len = strlen($cnt);
        $prefix_len = 6 - $len;
        $prefix = '';
        for($i = 0; $i < $prefix_len; $i ++) {
            $prefix .= '0';
        }
        $no = $prefix . $cnt;
        return view('invoiceMana.invoiceHTML', compact('no', 'payment', 'client_info', 'amount', 'project_name', 'other', 'today'));
    }

    public function changeInvoiceStatus(Request $request)
    {
        if(Auth::user()->role_id > 2) {
            return 401;
        }

        $id = $request->id;
        $status = $request->status;

        $invoice = Invoice::find($id);

        $invoice->status = $status;

        if($status == 2) {
            $pdf = PDF::loadView('invoice', ['invoice' => $invoice]);

            $pdf->setPaper('a4', 'landscape');

            $filename = 'invoice_' . time() . '.pdf';
            $pdf->save(public_path('/assets/invoices/' . $filename));

            $invoice->invoice_link = '/assets/invoices/' . basename($filename, '.pdf') . '.pdf';
        } else {
            if($invoice->invoice_link != NULL) {
                if(File::exists(public_path('/assets/invoices/' . basename($invoice->invoice_link, '.pdf') . '.pdf'))) {
                    File::delete(public_path('/assets/invoices/' . basename($invoice->invoice_link, '.pdf') . '.pdf'));
                }
            }

            $invoice->invoice_link = NULL;
        }

        $invoice->save();

        return 200;
    }
}
