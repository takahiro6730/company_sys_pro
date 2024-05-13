@extends('layouts.app')
@section('content')

<!-- DataTables -->
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- This Page Only -->
<link href="{{ asset('assets/css/pages/deposit.css') }}" rel="stylesheet" type="text/css" />

<div class="main-content overflow-auto">
    <div class="page-content dark:bg-zinc-700">

        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">入金管理</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    入金管理
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    <a href="{{ route('depositMana.create') }}"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">入金情報編集</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            @php 
            if(!isset($update)){
                $update = 0;
            }
            @endphp

            <input type="hidden" id="deposit_update" value="{{ $update }}">

            <div class="grid grid-cols-1">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600" style="min-height: calc(100vh - 218px);">
                    <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">入金情報編集</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('depositMana.update', ['id' => $deposit->id ]) }}">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="deposited_date" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">日付</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" type="date" value="2023-09-11" id="deposited_date" name="deposited_date"
                                        value="{{ $deposit->deposited_date }}">
                                        @error('deposited_date')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12 lg:col-span-6">
                                            <div class="mb-4">
                                                <label for="amount" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">金額</label>
                                                <input class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" type="number" value="10000" id="amount" name="amount"
                                                value="{{ $deposit->amount }}">
                                                @error('amount')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-6">
                                            <div class="mb-4">
                                                <label for="unit" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">単位</label>
                                                <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="JPY, USD" id="unit" name="unit"
                                                value="{{ $deposit->unit }}">
                                                @error('unit')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="client_info" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">クライアント名</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="山田　太郎" id="client_info" name="client_info"
                                        value="{{ $deposit->client_info }}">
                                        @error('client_info')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="deposit_path" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">入金経路</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="Paypal" id="deposit_path" name="deposit_path"
                                        value="{{ $deposit->deposit_path }}">
                                        @error('deposit_path')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <div class="mb-4">
                                        <label class="text-gray-600 font-bold dark:text-gray-100">備考</label>
                                        <textarea name="other" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" rows="2" placeholder="">{{ $deposit->other }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <ul class="text-end">
                                <li class="next"><button type="submit" class="btn bg-violet-500 border-transparent text-white">変 更 <i
                                            class="bx bx-chevron-right ms-1 align-middle"></i></button></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
            <footer
                class="footer absolute bottom-0 right-0 left-0 border-t border-gray-50 py-5 px-5 bg-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                <div class="grid grid-cols-2">
                    <div class="grow">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> オヤテックジャパン
                    </div>
                    <div class="hidden md:inline-block text-end">デザイン・開発：
                        <a href="" target="_blank" class="text-violet-500 underline">オヤテックジャパン</a>
                    </div>

                </div>
            </footer>
            <!-- end Footer -->
        </div>
    </div>
</div>

<div class="relative z-50 modal hidden" id="depositUpdateModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden">
        <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50"></div>
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-lg dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <div class="mx-auto bg-green-100 rounded-full h-14 w-14">
                        <i class="mdi mdi-check-all text-2xl text-green-600 leading-[2.4]"></i>
                    </div>
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">操作成功</h2>
                    <p class="mt-2 text-gray-500 dark:text-zinc-100/60">正確に変更されました。</p>
                    <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                        <a href="{{ route('depositMana.index') }}" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                            data-tw-dismiss="modal">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/deposits.js') }}"></script>

@endsection