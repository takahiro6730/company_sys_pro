@extends('layouts.app')
@section('content')
<!-- from ProjectController -->
<div class="main-content overflow-auto">
    <div class="page-content dark:bg-zinc-700">
        <div class="container-fluid px-[0.625rem]">
                @csrf
                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100"> 入出金管理詳細
                        </h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="javascript:;"
                                        class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        入出金管理
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
                                        <a href="{{ route('projectMana.create') }}"
                                            class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">案件詳細</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600" style="min-height: calc(100vh - 218px);">
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="user_name"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">ユーザー名
                                           </label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="text" value="{{ $project->project_user->nickname }}" name="user_name"
                                            id="user_name" readonly>
                                        @error('user_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="title"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">案件名
                                           </label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="text" value="{{ $project->title }}" name="title" id="title" readonly>
                                        @error('title')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="worker"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">開発者
                                           </label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="text" name="worker" value="{{ $project->project_worker }}" id="worker"
                                            readonly>
                                        @error('worker')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="project_type"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2"><a
                                                href="{{ route('projectMana.types') }}" class="text-blue-500"
                                                target="_blank">業務形式番号</a></label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="text" name="project_type" value="{{ $project->type_id }}"
                                            id="project_type" readonly>
                                        @error('project_type')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="remittance"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">送金先</label>
                                        <textarea
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            name="remittance" id="remittance" rows="4"
                                            readonly>{{ $project->remittance_address }}</textarea>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="manager"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">担当者
                                            </label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="text" value="{{ isset($project->project_manager)? $project->user->nickname : "未設定" }}" name="manager" id="manager"
                                            readonly>
                                        @error('manager')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="amount"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">{{ ($project->progress_state>4)? "入金額" : "予算額"}}
                                            </label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="number" value="{{ $project->amount }}" name="amount" id="amount"
                                            readonly>
                                        @error('amount')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="deposit"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">支払予定日
                                           </label>
                                        <input
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="date" name="deposit" id="deposit" value="{{ $project->deposit }}"
                                            readonly>
                                        @error('deposit')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="deadline"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">希望出金日
                                           </label>
                                        <input
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="date" name="deadline" id="deadline" value="{{ $project->deadline }}"
                                            readonly>
                                        @error('deadline')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong style="color:red;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="comment"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">備考</label>
                                        <textarea
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            name="comment" id="comment" rows="4"
                                            readonly>{{ $project->project_comment }}</textarea>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-12 text-right">
                                    <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded"
                                    onclick="showDeleteConfirmModal({{$project->id}})" >
                                        案件削除
                                    </button>
                                    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                    onclick="location.href ='{{route('message.index')}}'" >
                                        開発者に連絡
                                    </button>
                                    @if (isset($project->invoice_id))
                                    <a class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                                    href="{{route('projectMana.showInvoice', ['id' => $project->invoice_id])}}" target="_blank">
                                        請求書を見る
                                    </a>
                                    @else
                                    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed">
                                        請求書を見る
                                    </button>
                                    @endif
                                </div>
                                <div class="col-span-12 lg:col-span-12">
                                    @include('projectMana.admin.progressAdmin_state')
                                </div>
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

<div class="relative z-50 modal hidden" id="progressConfirmModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden bg-gray-500/75">
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-xl dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <div class="mx-auto bg-green-100 rounded-full h-14 w-14">
                        <i class="mdi mdi-check-all text-2xl text-green-600 leading-[2.4]"></i>
                    </div>
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">確認</h2>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60" id="caption">操作を続行してもよろしいですか？</p>
                    <div class="w-full py-4 my-4">
                        <button id="confirm_btn" onclick="closeProgressConfirmModal()"
                            class="btn text-white bg-red-500 mx-4 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                            キャンセル
                        </button>
                        <button type="submit" class="btn bg-violet-500 border-transparent text-white mx-4 px-8"
                            onclick="checkConfirmModal()">
                            登録
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" value="{{ Auth::user()->id }}" name="auther_id" id="auther_id">
<input type="hidden" value="{{ $project->id }}" name="project_id" id="project_id">
<input type="hidden" value="" name="current_seq" id="current_seq">
<div class="relative z-50 modal hidden" id="cannotModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden bg-gray-500/75">
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-xl dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <div class="mx-auto bg-red-100 rounded-full h-14 w-14">
                        <i class="mdi mdi-exclamation text-2xl text-red-600 leading-[2.4]"></i>
                    </div>
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">警告</h2>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60" id="caption"></p>
                    <div class="w-full py-4 my-4">
                        <button id="confirm_btn" onclick="closeCannotModal()"
                            class="btn text-white bg-red-500 mx-4 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                            キャンセル
                        </button>
                        <button type="submit" class="btn bg-violet-500 border-transparent text-white mx-4 px-8"
                            onclick="sendform()">
                            登録
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-50 modal hidden" id="invoiceConfirmModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden bg-gray-500/75">
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-xl dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <div class="mx-auto bg-green-100 rounded-full h-14 w-14">
                        <i class="mdi mdi-check-all text-2xl text-green-600 leading-[2.4]"></i>
                    </div>
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">確認</h2>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60" id="caption">請求書を受け入れますか？</p>
                    <div class="w-full py-4 my-4">
                        <button id="confirm_btn" onclick="closeInvoiceModal()"
                            class="btn text-white bg-red-500 mx-4 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                            キャンセル
                        </button>
                        <button type="submit" class="btn bg-violet-500 border-transparent text-white mx-4 px-8"
                            onclick="checkInvoiceModal()">
                            承認
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-50 modal hidden" id="payConfirmModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden bg-gray-500/75">
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-xl dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">確認</h2>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60" id="caption">入金を確認します。<br>
                    入金金額を入力してください。</p>
                    <input type="text" class="" name="pay_amoumt" id="pay_amoumt" value="{{$project->amount}}">
                    <div class="w-full py-4 my-4">
                        <button id="confirm_btn" onclick="closePayModal()"
                            class="btn text-white bg-red-500 mx-4 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                            キャンセル
                        </button>
                        <button type="submit" class="btn bg-violet-500 border-transparent text-white mx-4 px-8"
                            onclick="checkPayModal()">
                            確認
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-50 modal hidden" id="outConfirmModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden bg-gray-500/75">
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-xl dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">確認</h2>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60" id="caption">出金を確認してください。</p>
                    <input type="text" class="" name="pay_amoumt" id="pay_amoumt" value="{{$project->amount}}" readonly>
                    <div class="w-full py-4 my-4">
                        <button id="confirm_btn" onclick="closeOutModal()"
                            class="btn text-white bg-red-500 mx-4 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                            キャンセル
                        </button>
                        <button type="submit" class="btn bg-violet-500 border-transparent text-white mx-4 px-8"
                            onclick="checkOutModal()">
                            確認
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative z-50 modal hidden" id="completeModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden bg-gray-500/75">
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-xl dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">確認</h2>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60" id="caption">プロジェクトを完了します。</p>
                    <div class="w-full py-4 my-4">
                        <button id="confirm_btn" onclick="closeCompleteModal()"
                            class="btn text-white bg-red-500 mx-4 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                            キャンセル
                        </button>
                        <button type="submit" class="btn bg-violet-500 border-transparent text-white mx-4 px-8"
                            onclick="checkCompleteModal()">
                            確認
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="relative z-50 modal hidden" id="managerModal" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-hidden bg-gray-500/75">
        <div
            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
            <div
                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-xl dark:bg-zinc-700">
                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">担当者選択</h2>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60" id="caption">担当者を選択してください。</p>
                    <select class="w-full max-w-60 rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                        name="manager_select" id="manager_select">
                        @foreach ($managers as $manager)
                            <option value="{{ $manager->id }}">{{$manager->nickname}}</option>
                        @endforeach
                    </select>
                    <div class="w-full py-4 my-4">
                        <button id="confirm_btn" onclick="closeManagerModal()"
                            class="btn text-white bg-red-500 mx-4 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                            キャンセル
                        </button>
                        <button type="submit" class="btn bg-violet-500 border-transparent text-white mx-4 px-8"
                            onclick="selectManager()">
                            確認
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="relative z-50 modal hidden" id="deleteprojectConfirmModal" aria-labelledby="modal-title" role="dialog"
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
                    <form method="post" action="{{route('projectMana.state_cancel')}}" id="state_cancel">
                        @csrf
                    <input type="hidden" name="delete_project" id="delete_project" value="{{$project->id}}">
                    <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                        <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20" data-tw-dismiss="modal">戻る</button>
                        <button type="button" onclick="deleteproject();" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">削除</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/pages/projectsAdmin.js') }}"></script>

@endsection
