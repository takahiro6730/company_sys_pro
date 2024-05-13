@extends('layouts.app')
@section('content')

<div class="main-content ">
    <div class="page-content dark:bg-zinc-700">
        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">ダッシュボード</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    ダッシュボード
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid grid-cols-12 gap-5 items-center">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">本日請求金額</span>
                                    <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                        <span class="counter-value" data-target="{{ $totalForToday }}">{{ number_format($totalForToday) }}</span>￥
                                    </h4>
                                </div>
                                <div class="col-span-6 hidden">
                                    <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                </div>
                            </div>
                        </div>
                        @if($differenceTodayYesterday >= 0)
                        <div class="flex items-center">
                            <span class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">{{ number_format($differenceTodayYesterday) }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">今日と昨日の違い</span>
                        </div>
                        @else
                        <div class="flex items-center">
                            <span class="text-xs py-[1px] px-1 bg-red-50/60 text-red-500 rounded font-medium dark:bg-red-500/30">{{ number_format($differenceTodayYesterday) }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">今日と昨日の違い</span>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid grid-cols-12 gap-5 items-center">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">今週の請求金額</span>
                                    <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                        <span class="counter-value" data-target="{{ $totalForThisWeek }}">{{ number_format($totalForThisWeek) }}</span>￥
                                    </h4>
                                </div>
                                <div class="col-span-6 hidden">
                                    <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                </div>
                            </div>
                        </div>
                        @if($differenceThisWeekLastWeek >= 0)
                        <div class="flex items-center">
                            <span class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">{{ number_format($differenceThisWeekLastWeek) }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">今週と先週の違い</span>
                        </div>
                        @else
                        <div class="flex items-center">
                            <span class="text-xs py-[1px] px-1 bg-red-50/60 text-red-500 rounded font-medium dark:bg-red-500/30">{{ number_format($differenceThisWeekLastWeek) }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">今週と先週の違い</span>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid grid-cols-12 gap-5 items-center">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">今月の請求金額</span>
                                    <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                        <span class="counter-value" data-target="{{ $totalForThisMonth }}">{{ number_format($totalForThisMonth) }}</span>￥
                                    </h4>
                                </div>
                                <div class="col-span-6 hidden">
                                    <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                </div>
                            </div>
                        </div>
                        @if($differenceThisMonthLastMonth >= 0)
                        <div class="flex items-center">
                            <span class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">{{ number_format($differenceThisMonthLastMonth) }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">今月と先月の違い</span>
                        </div>
                        @else
                        <div class="flex items-center">
                            <span class="text-xs py-[1px] px-1 bg-red-50/60 text-red-500 rounded font-medium dark:bg-red-500/30">{{ number_format($differenceThisMonthLastMonth) }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">今月と先月の違い</span>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="card  dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid grid-cols-12 gap-5 items-center">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">今年請求金額</span>
                                    <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                        <span class="counter-value" data-target="{{ $totalForThisYear }}">{{ number_format($totalForThisYear) }}</span>￥
                                    </h4>
                                </div>
                                <div class="col-span-6 hidden">
                                    <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                </div>
                            </div>
                        </div>
                        @if($differenceThisYearLastYear >= 0)
                        <div class="flex items-center">
                            <span class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">{{ number_format($differenceThisYearLastYear) }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">今年と昨年の違い</span>
                        </div>
                        @else
                        <div class="flex items-center">
                            <span class="text-xs py-[1px] px-1 bg-red-50/60 text-red-500 rounded font-medium dark:bg-red-500/30">{{ number_format($differenceThisYearLastYear) }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">今年と昨年の違い</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-12 gap-5 hidden">
                <div class="col-span-12 xl:col-span-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                        <div class="card-body">
                            <div class="flex flex-wrap items-center mb-2">
                                <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 ">Wallet Balance</h5>
                                <div class="ltr:ml-auto rtl:mr-auto flex gap-1">
                                    <button type="button" class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800 font-medium">ALL</button>
                                    <button type="button" class="btn py-1 px-2 text-13 bg-violet-50/50 border-transparent text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white dark:bg-violet-500/20 dark:text-violet-300 dark:hover:bg-violet-500 dark:hover:text-white font-medium">1M</button>
                                    <button type="button" class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800 font-medium">6M</button>
                                    <button type="button" class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800 font-medium">1Y</button>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-5 justify-items-stretch">
                                <div class="col-span-6 justify-self-center">
                                    <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]' class="apex-charts"></div>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-4 mt-sm-0">
                                        <div>
                                            <p class="mb-2 dark:text-zinc-100">
                                                <i class="mdi mdi-circle align-middle text-10 mr-2 text-green-500 "></i> Bitcoin
                                            </p>
                                            <h6 class="text-gray-800 dark:text-gray-100">0.4412 BTC =
                                                <span class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$ 4025.32</span>
                                            </h6>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <p class="mb-2 dark:text-zinc-100">
                                                <i class="mdi mdi-circle align-middle text-10 mr-2 text-violet-500 "></i> Ethereum
                                            </p>
                                            <h6 class="text-gray-800 dark:text-gray-100">4.5701 ETH =
                                                <span class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$ 1123.64</span>
                                            </h6>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <p class="mb-2 dark:text-zinc-100">
                                                <i class="mdi mdi-circle align-middle text-10 mr-2 text-sky-500"></i> Litecoin
                                            </p>
                                            <h6 class="text-gray-800 dark:text-gray-100">35.3811 LTC =
                                                <span class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$ 2263.09</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-7">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                                <div class="card-body">
                                    <div class="flex flex-wrap items-center mb-2">
                                        <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 ">Invested Overview</h5>
                                        <div class="ltr:ml-auto rtl:mr-auto">
                                            <select class="form-select form-select-sm py-0 ltr:pl-4 rtl:pr-4 border-gray-50 bg-gray-50/20 dark:border-zinc-600 dark:text-gray-100 dark:bg-zinc-700">
                                                <option value="MAY" selected="">May</option>
                                                <option value="AP">April</option>
                                                <option value="MA">March</option>
                                                <option value="FE">February</option>
                                                <option value="JA">January</option>
                                                <option value="DE">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-6 justify-self-center">
                                            <div id="invested-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                        </div>
                                        <div class="col-span-6">
                                            <div class="mt-4 mt-sm-0">
                                                <p class="text-gray-700 dark:text-zinc-100">Invested Amount</p>
                                                <h4 class="text-21 text-gray-800 dark:text-gray-100 pb-2 pt-1">$ 6134.39</h4>
                                                <p class="text-gray-700 dark:text-zinc-100 mb-4"> + 0.0012.23 ( 0.2 % )
                                                    <i class="mdi mdi-arrow-up ml-1 text-green-500"></i>
                                                </p>
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div>
                                                            <p class="mb-1 text-gray-700 dark:text-zinc-100 text-uppercase font-size-11">Income</p>
                                                            <h5 class="text-gray-800 dark:text-gray-100">$ 2632.46</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <div>
                                                            <p class="mb-1 text-gray-700 dark:text-zinc-100 text-uppercase font-size-11">Expenses</p>
                                                            <h5 class="text-gray-800 dark:text-gray-100">-$ 924.38</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <a href="#" class="btn py-1.5 px-2.5 text-xs bg-violet-500 text-white shadow-md shadow-violet-100 border-transparent hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 dark:shadow-zinc-600">View more
                                                        <i class="mdi mdi-arrow-right ms-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-4">
                            <div class="card card-h-100 bg-violet-500 border-transparent shadow shadow-violet-100 dark:shadow-zinc-800 relative overflow-hidden">
                                <div class="card-body text-center relative">
                                        <div class="absolute -top-2 -right-2">
                                            <i class="mdi mdi-bitcoin widget-box-1-icon text-7xl text-white/10"></i>
                                        </div>
                                    <div dir="rtl" class="swiper login-slider bitcon-news">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide mb-8">
                                                <div class="h-12 w-12 rounded-full bg-white/30 mx-auto text-center">
                                                    <span class="text-white text-2xl">
                                                        <i class="mdi mdi-currency-btc leading-loose"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-4 lh-base fw-normal text-white text-21">
                                                    <span>Bitcoin</span>
                                                    <span class="font-normal">News</span>
                                                </h4>
                                                <p class="text-white/50 text-13 mt-2 mb-4 ">
                                                    Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin.
                                                </p>

                                                <button type="button" href="apps-invoices-list.html" class="btn py-1.5 px-2.5 text-xs flex rtl:flex-row-reverse mx-auto border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20">
                                                    <span><i class="mdi mdi-arrow-right ml-1"></i></span>
                                                    <p>View details</p> 
                                                </button>
                                                
                                            </div>
                                            <div class="swiper-slide mb-8">
                                                <div class="h-12 w-12 rounded-full bg-white/30 mx-auto text-center">
                                                    <span class="text-white text-2xl">
                                                        <i class="mdi mdi-currency-btc leading-loose"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-4 lh-base fw-normal text-white text-21">
                                                    <span>Bitcoin</span>
                                                    <span class="font-normal">News</span>
                                                </h4>
                                                <p class="text-white/50 text-13 mt-2 mb-4 ">
                                                    Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin.
                                                </p>

                                                <button type="button" href="apps-invoices-list.html" class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20">View details
                                                    <i class="mdi mdi-arrow-right ml-1"></i>
                                                </button>
                                            </div>
                                            <div class="swiper-slide mb-8">
                                                <div class="h-12 w-12 rounded-full bg-white/30 mx-auto text-center">
                                                    <span class="text-white text-2xl">
                                                        <i class="mdi mdi-currency-btc leading-loose"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-4 lh-base fw-normal text-white text-21">
                                                    <span>Bitcoin</span>
                                                    <span class="font-normal">News</span>
                                                </h4>
                                                <p class="text-white/50 text-13 mt-2 mb-4 ">
                                                    Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin.
                                                </p>

                                                <button type="button" href="apps-invoices-list.html" class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20">View details
                                                    <i class="mdi mdi-arrow-right ml-1"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if(Auth::user()->role_id != 5)
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-8">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                        <div class="card-body pb-0">
                            <div class="flex flex-wrap items-center mb-2">
                                <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 ">プロジェクト進行状況</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-10 items-center">
                                <div class="col-span-12 lg:col-span-8">
                                    <div id="projectManaStatus" data-colors='["#5156be", "#34c38f"]' class="apex-charts dark:border-zinc-700"></div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="p-4 space-y-5">
                                        @foreach($projectsForProgress->take(5) as $project)
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 bg-slate-100 text-center rounded-full dark:bg-zinc-700 dark:text-gray-100">
                                                <span class="leading-loose text-16">{{ $loop->iteration }}</span>
                                            </div>
                                            <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                <span class="text-16 text-gray-700 dark:text-gray-100">{{ $project->title }}</span>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <span class="text-xs bg-green-50/60 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">{{ $project->progress }}%</span>
                                            </div>
                                        </div>    
                                        @endforeach
                                        <div class="mt-4 pt-2">
                                            <a href="{{ route('projectMana.index') }}" class="btn bg-violet-500 w-full border-transparent text-white font-medium shadow-md shadow-violet-100 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 dark:shadow-zinc-600">
                                                もっと見る <i class="mdi mdi-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="nav-tabs border-b-tabs">
                            <div class="card-body pb-0 flex border-b border-gray-50 dark:border-zinc-700">
                                <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 flex-grow">入出金状況</h5>
                                <div class="flex-shrink-0 text-violet-500">
                                    <ul class="nav flex" role="tablist">
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium active"href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="all-tab" role="tab">全て</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="buy-tab" role="tab">入金</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="sell-tab" role="tab">出金</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <div class="tab-content">
                                    <div class="tab-pane block" id="all-tab" role="tabpanel">
                                        <div class="px-3" data-simplebar style="max-height: 400px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    @if(count($combined) > 0)
                                                    @foreach($combined as $combine)
                                                    <tr>
                                                        @if($combine->type == 'deposit')
                                                        <td class="p-3"  style="width: 50px;">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-right-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">{{ $combine->client_info }}</h5>
                                                                <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">{{ $combine->created_at }}</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">{{ number_format($combine->amount) }}</h5>
                                                                <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">{{ $combine->unit_title }}</p>
                                                            </div>
                                                        </td>
                                                        @else
                                                        <td class="p-3"  style="width: 50px;">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-left-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">{{ $combine->send_to }}</h5>
                                                                <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">{{ $combine->created_at }}</p>
                                                            </div>
                                                        </td>
    
                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">{{ number_format($combine->amount) }}</h5>
                                                                <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">{{ $combine->unit_title }}</p>
                                                            </div>
                                                        </td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan="3" align="center">データなし</td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
    
                                    <div class="tab-pane hidden" id="buy-tab" role="tabpanel">
                                        <div class="px-3" data-simplebar style="max-height: 400px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    @if(count($deposits) > 0)
                                                        @foreach($deposits as $deposit)
                                                        <tr>
                                                            <td class="p-3"  style="width: 50px;">
                                                                <div class="text-22 text-green-500">
                                                                    <i class="bx bx-right-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>
        
                                                            <td class="p-3">
                                                                <div>
                                                                    <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">{{ $deposit->client_info }}</h5>
                                                                    <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">{{ $deposit->created_at }}</p>
                                                                </div>
                                                            </td>
        
                                                            <td class="p-3">
                                                                <div class="text-end">
                                                                    <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">{{ number_format($deposit->amount) }}</h5>
                                                                    <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">{{ $deposit->unit->title }}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="3" align="center">データなし</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
    
                                    <div class="tab-pane hidden" id="sell-tab" role="tabpanel">
                                        <div class="px-3" data-simplebar style="max-height: 400px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    @if(count($withdraws) > 0)
                                                        @foreach($withdraws as $withdraw)
                                                        <tr>
                                                            <td class="p-3"  style="width: 50px;">
                                                                <div class="text-22 text-red-500">
                                                                    <i class="bx bx-left-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>
        
                                                            <td class="p-3">
                                                                <div>
                                                                    <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">{{ $withdraw->send_to }}</h5>
                                                                    <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">{{ $withdraw->created_at }}</p>
                                                                </div>
                                                            </td>
        
                                                            <td class="p-3">
                                                                <div class="text-end">
                                                                    <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">{{ number_format($withdraw->amount) }}</h5>
                                                                    <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">{{ $withdraw->unit->title }}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="3" align="center">データなし</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

@if(Auth::user()->role_id != 5)
<script>

    var projectTitles = @json($projects->pluck('title'));
    var projectProgress = @json($projects->pluck('progress'));

    function getChartColorsArray(chartId) {
        var colors = $(chartId).attr('data-colors');
        var colors = JSON.parse(colors);
        return colors.map(function (value) {
            var newValue = value.replace(' ', '');
            if (newValue.indexOf('--') != -1) {
                var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                if (color) return color;
            } else {
                return newValue;
            }
        })
    }

    var barchartColors = getChartColorsArray("#projectManaStatus");
    var options = {
        series: [{
            name: '進捗状況',
            data: projectProgress
        }],
        chart: {
            type: 'bar',
            height: 400,
            stacked: true,
            toolbar: {
                show: false
            },
        },
        plotOptions: {
            bar: {
                columnWidth: '10%',
            },
        },
        colors: barchartColors,
        fill: {
            opacity: 1
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        yaxis: {
            min: 0,
            max: 100,
            tickAmount: 5,
            labels: {
                formatter: function(val) {
                    return val + "%";
                }
            }
        },
        xaxis: {
            categories: projectTitles,
            labels: {
                rotate: -90
            }
        },
    };

    var chart = new ApexCharts(document.querySelector("#projectManaStatus"), options);
    chart.render();
</script>
@endif

@endsection