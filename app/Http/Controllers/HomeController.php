<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Invoice;
use App\Models\Project;
use App\Models\Deposit;
use App\Models\Withdraw;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role_id != 5) {
            $totalForToday = Invoice::whereDate('created_at', Carbon::today())->sum('amount');
            $totalForYesterday = Invoice::whereDate('created_at', Carbon::yesterday())->sum('amount');
            $differenceTodayYesterday = $totalForToday - $totalForYesterday;

            $totalForThisWeek = Invoice::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('amount');
            $totalForLastWeek = Invoice::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->sum('amount');
            $differenceThisWeekLastWeek = $totalForThisWeek - $totalForLastWeek;

            $totalForThisMonth = Invoice::whereMonth('created_at', Carbon::now()->month)->sum('amount');
            $totalForLastMonth = Invoice::whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('amount');
            $differenceThisMonthLastMonth = $totalForThisMonth - $totalForLastMonth;

            $totalForThisYear = Invoice::whereYear('created_at', Carbon::now()->year)->sum('amount');
            $totalForLastYear = Invoice::whereYear('created_at', Carbon::now()->subYear()->year)->sum('amount');
            $differenceThisYearLastYear = $totalForThisYear - $totalForLastYear;
        } else {
            $totalForToday = Invoice::where('user_id', Auth::user()->id)->whereDate('created_at', Carbon::today())->sum('amount');
            $totalForYesterday = Invoice::where('user_id', Auth::user()->id)->whereDate('created_at', Carbon::yesterday())->sum('amount');
            $differenceTodayYesterday = $totalForToday - $totalForYesterday;

            $totalForThisWeek = Invoice::where('user_id', Auth::user()->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('amount');
            $totalForLastWeek = Invoice::where('user_id', Auth::user()->id)->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->sum('amount');
            $differenceThisWeekLastWeek = $totalForThisWeek - $totalForLastWeek;

            $totalForThisMonth = Invoice::where('user_id', Auth::user()->id)->whereMonth('created_at', Carbon::now()->month)->sum('amount');
            $totalForLastMonth = Invoice::where('user_id', Auth::user()->id)->whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('amount');
            $differenceThisMonthLastMonth = $totalForThisMonth - $totalForLastMonth;

            $totalForThisYear = Invoice::where('user_id', Auth::user()->id)->whereYear('created_at', Carbon::now()->year)->sum('amount');
            $totalForLastYear = Invoice::where('user_id', Auth::user()->id)->whereYear('created_at', Carbon::now()->subYear()->year)->sum('amount');
            $differenceThisYearLastYear = $totalForThisYear - $totalForLastYear;
        }

        $projects = Project::all()->sortByDesc('created_at');
        $projectsForProgress = Project::all()->sortByDesc('progress');

        $deposits = Deposit::all()->sortByDesc('created_at');
        $withdraws = Withdraw::all()->sortByDesc('created_at');

        $combined = DB::table('deposits')
                        ->leftJoin('units', 'deposits.unit_id', '=', 'units.id')
                        ->select('client_info', DB::raw('NULL as send_to'), 'amount', 'deposits.unit_id', 'units.title as unit_title', 'deposits.created_at', DB::raw("'deposit' as type"))
                        ->union(
                            DB::table('withdraws')
                            ->leftJoin('units', 'withdraws.unit_id', '=', 'units.id')
                            ->select(DB::raw('NULL as client_info'), 'send_to', 'amount', 'withdraws.unit_id', 'units.title as unit_title', 'withdraws.created_at', DB::raw("'withdraw' as type"))
                        )
                        ->orderBy('created_at', 'desc')
                        ->get();



        return view('home', compact('totalForToday', 'differenceTodayYesterday', 'totalForThisWeek', 'differenceThisWeekLastWeek', 'totalForThisMonth', 'differenceThisMonthLastMonth', 'totalForThisYear', 'differenceThisYearLastYear', 'projects', 'projectsForProgress', 'deposits', 'withdraws', 'combined'));
    }
}
