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
<link href="{{ asset('assets/css/pages/withdraw.css') }}" rel="stylesheet" type="text/css" />

<div class="main-content overflow-auto">
    <div class="page-content dark:bg-zinc-700">

        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">出金管理</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="javascript:;" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    出金管理
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    <a href="{{ route('withdrawMana.index') }}"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">出金情報一覧</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600" style="min-height: calc(100vh - 218px);">
                        <div class="card-body relative overflow-x-auto">
                            <table id="datatable" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                                <thead>
                                    <tr>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l-0 border-y-2 border-gray-50 dark:border-zinc-600 max-w-[50px] text-center">
                                            番号</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">
                                            出金日</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">
                                            受信者名</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">
                                            金額</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">
                                            単位</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">
                                            用途</th>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">
                                            備考</th>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">
                                            編集</th>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0 text-center">
                                            削除</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ( $withdraws as $withdraw )
                                    <tr>
                                        <td
                                            class="p-4 pr-8 border rtl:border-l-0 border-t-0 border-gray-50 dark:border-zinc-600] text-center">
                                            {{ $i ++ }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $withdraw->withdrawal_date }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $withdraw->send_to }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $withdraw->amount }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $withdraw->unit->title }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $withdraw->purpose }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $withdraw->other }}</td>
                                        <td
                                            class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{-- @if ($withdraw->register_user == $user_id) --}}
                                                <button onclick="showEditModal('{{ $withdraw->id }}', '{{ $withdraw->withdrawal_date }}', '{{ $withdraw->send_to }}', '{{ $withdraw->amount }}', '{{ $withdraw->unit_id }}', '{{ $withdraw->purpose }}', '{{ $withdraw->other }}')"
                                                    class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">
                                                    <i class="bx bx-pencil text-16 align-middle"></i>
                                                </button>
                                            {{-- @else
                                                <button
                                                    class="btn text-white bg-gray-500 border-gray-500 hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600">
                                                    <i class="bx bx-pencil text-16 align-middle"></i>
                                                </button> --}}
                                            {{-- @endif --}}
                                        </td>
                                        <td
                                            class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{-- @if ($withdraw->register_user == $user_id) --}}
                                                <button id="del_btn[{{ $i }}]" onclick="showDeleteConfirmModal({{ $withdraw->id }})"
                                                    class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                                                    <i class="bx bx-trash text-16 align-middle"></i>
                                                </button>
                                            {{-- @else
                                                <button
                                                    class="btn text-white bg-gray-500 border-gray-500 hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600">
                                                    <i class="bx bx-trash text-16 align-middle"></i>
                                                </button> --}}
                                            {{-- @endif --}}
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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

<div class="relative z-50 modal hidden" id="deleteWithdrawConfirmModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden">
        <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50"></div>
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-lg dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <div class="mx-auto bg-red-100 rounded-full h-14 w-14">
                        <i class="mdi mdi-trash-can text-2xl text-red-600 leading-[2.4]"></i>
                    </div>
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">本当に削除しますか？</h2>
                    <input type="hidden" name="delete_withdraw" id="delete_withdraw">
                    <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                        <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20" data-tw-dismiss="modal">戻る</button>
                        <button type="button" onclick="deleteWithdraw();" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">削除</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-50 modal hidden" id="successModal" aria-labelledby="modal-title" role="dialog"
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
                    <p id="del_success" class="mt-2 text-gray-500 dark:text-zinc-100/60 hidden">正確に削除されました。</p>
                    <p id="edit_success" class="mt-2 text-gray-500 dark:text-zinc-100/60 hidden">資料が正確に更新されました。</p>
                    <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                        <a href="{{ route('withdrawMana.index') }}" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                            data-tw-dismiss="modal">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-50 modal hidden" id="editWithdrawModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden">
        <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50"></div>
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-lg dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <div class="mx-auto bg-green-100 rounded-full h-14 w-14">
                        <i class=" bx bx-cylinder text-2xl text-green-600 leading-[2.4]"></i>
                    </div>
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">出金情報変更</h2>
                    <div class="grid grid-cols-1">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">                    
                            <div class="card-body">
                                <div class="grid grid-cols-12 gap-5 ">
                                    <div class="col-span-12 lg:col-span-12">
                                        <div class="mb-4">
                                            <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="hidden" name="withdraw_id" id="withdraw_id">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2">出金日 *</label>
                                            <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="date" name="withdrawal_date" id="withdrawal_date">
                                            <span id="withdrawal_date_invalid" class="invalid-feedback hidden" role="alert">
                                                <strong>出金日を入力してください。</strong>
                                            </span>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2">受信者名 *</label>
                                            <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="text" name="send_to" id="send_to">
                                            <span id="send_to_invalid" class="invalid-feedback hidden" role="alert">
                                                <strong>受信者名を入力してください。</strong>
                                            </span>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2">金額 *</label>
                                            <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="text" name="amount" id="amount">
                                            <span id="amount_invalid" class="invalid-feedback hidden" role="alert">
                                                <strong>金額を入力してください。</strong>
                                            </span>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2">単位 *</label>
                                            <select class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            name="unit_id" id="unit_id">
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}">{{ $unit->title }}</option>
                                            @endforeach
                                            </select>
                                            <span id="unit_id_invalid" class="invalid-feedback hidden" role="alert">
                                                <strong>単位を入力してください。</strong>
                                            </span>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2">用途 *</label>
                                            <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="text" name="purpose" id="purpose">
                                            <span id="purpose_invalid" class="invalid-feedback hidden" role="alert">
                                                <strong>用途を入力してください。</strong>
                                            </span>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2">備考</label>
                                            <textarea type="text" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            name="other" id="other"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                        <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20" data-tw-dismiss="modal">戻る</button>
                        <button type="button" onclick="updateWithdraw();" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-green-500 border border-transparent rounded-md shadow-sm btn hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">変更</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/withdraws.js') }}"></script>

@endsection