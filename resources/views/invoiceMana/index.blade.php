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

<div class="main-content overflow-auto">
    <div class="page-content dark:bg-zinc-700">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">請求書一覧</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="{{ route('invoiceMana.index') }}"
                                    class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    請求書管理
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">請求書一覧</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>


            <div class=" grid grid-cols-1 ">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body" style="min-height: calc(100vh - 220px);">
                        <div class="relative overflow-x-auto">
                            <table id="datatable" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                                <thead>
                                    <tr>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l-0 border-y-2 border-gray-50 dark:border-zinc-600" style="max-width: 25px;">
                                            番号</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 50px;">
                                            請求書番号</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 70px;">
                                            ユーザー名</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 50px;">
                                            支払い方法</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 50px;">
                                            客様情報</th>
                                        <th
                                            class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 70px;">
                                            金額</th>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                            案件名</th>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 60px;">
                                            請求書リンク</th>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 70px;">
                                            状態</th>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 60px;">
                                            登録時間</th>
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 60px;">
                                            更新時間</th>
                                        @if(Auth::user()->role_id < 3)
                                        <th
                                            class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0" style="max-width: 40px;">
                                            削除</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invoices as $invoice)
                                    <tr>
                                        <td
                                            class="p-4 pr-8 border rtl:border-l-0 border-t-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $loop->iteration }}</td>
                                        <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            @php
                                                $len = strlen($invoice->id);
                                                $prefix_len = 6 - $len;
                                                $prefix = '';
                                                for($i = 0; $i < $prefix_len; $i ++) {
                                                    $prefix .= '0';
                                                }
                                                echo $prefix . $invoice->id;
                                            @endphp
                                        </td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $invoice->user->nickname }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $invoice->payment->title }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $invoice->client_info }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ number_format($invoice->amount) }}{{ $invoice->unit->title }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $invoice->project_name }}</td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            @if($invoice->status == 2)
                                                <a href="{{ asset($invoice->invoice_link) }}" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600" target="_blank" download>
                                                    <i class="bx bx-download text-16 align-middle"></i>
                                                </a>
                                            @else
                                                <p class="text-red-500">未確認</p>
                                            @endif
                                        </td>
                                        <td
                                            class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            @if(Auth::user()->role_id < 3)
                                            <select id="status_{{ $invoice->id }}" onchange="changeStatus({{ $invoice->id }})" class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                <option value="0" @if($invoice->status == 0) selected @endif>リクエスト中</option>
                                                <option value="1" @if($invoice->status == 1) selected @endif>拒否</option>
                                                <option value="2" @if($invoice->status == 2) selected @endif>承認</option>
                                            </select>
                                            @else
                                                @if($invoice->status == 0) リクエスト中 @endif
                                                @if($invoice->status == 1) 拒否 @endif
                                                @if($invoice->status == 2) 承認 @endif
                                            @endif
                                        </td>
                                        <td
                                            class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $invoice->created_at->format('Y-m-d H:m') }}</td>
                                        <td
                                            class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            {{ $invoice->updated_at->format('Y-m-d H:m') }}</td>
                                        @if(Auth::user()->role_id < 3)
                                        <td
                                            class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">
                                            <button onclick="showDeleteConfirmModal({{ $invoice->id }})"
                                                class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                                                <i class="bx bx-trash text-16 align-middle"></i>
                                            </button>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-50 modal hidden" id="deleteConfirmModal" aria-labelledby="modal-title" role="dialog".show();
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
                    <input type="hidden" name="delete_user" id="delete_id" value="">
                    <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                        <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20" data-tw-dismiss="modal">戻る</button>
                        <button type="button" onclick="deleteUser();" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">削除</button>
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
                    <p class="mt-2 text-gray-500 dark:text-zinc-100/60">操作に成功しました。</p>
                    <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                        <a href="{{ route('invoiceMana.index') }}" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                            data-tw-dismiss="modal">確認</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function downloadPdfInvoice(id) {
        $.get("{{ route('downloadInvoice') }}", {
            "id": id
        }, function(res){
            if(res == "Unauthorized") {
                toastr.warning('ユーザー認証に失敗しました。');
            } else if(res == "Unapproved") {
                toastr.warning('請求書が承認されていません。');
            } else {
                const data = res;
                const link = document.createElement('a');
                link.setAttribute('href', data);
                link.setAttribute('download', '');
                link.click();
            }
        });
    }

    const changeStatus = (id) => {
        const status = $("#status_" + id).val();
        $.post("{{ route('invoiceMana.changeInvoiceStatus') }}", {
            _token : $('meta[name="csrf-token"]').attr('content'),
            "id" : id,
            "status" : status
        }, function(res){
            if(res == 401) {
                toastr.warning('ユーザー認証に失敗しました。');
            }

            if(res == 200) {
                $("#successModal").removeClass("hidden");
            }
        });
    }
</script>

<script src="{{ asset('assets/js/pages/invoice.js') }}"></script>

@endsection