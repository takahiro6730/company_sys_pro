@extends('layouts.app')
@section('content')

<div class="main-content overflow-auto">
    <div class="page-content dark:bg-zinc-700">
        <div class="container-fluid px-[0.625rem]">
            <form action="{{ route('projectMana.store')}}" method="post" id="create_form">
                @csrf
                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100"> 案件管理の新規作成
                        </h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="javascript:;"
                                        class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        案件管理
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
                                            class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">新規追加</a>
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
                                        <label for="title"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">案件名 *</label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="text" value="{{ old('title') }}" name="title" id="title">
                                        @error('title')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="worker"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">開発者 *</label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="text" name="worker" value="{{ old('worker') }}" id="worker">
                                        @error('worker')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="project_type"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">業務形式番号 *<span class="text-xs px-4"><a href="{{ route('projectMana.types') }}" class="text-blue-500" target="_blank">業務形式</a>を見て業務形式番号を入力してください。</span></label>
                                        <select
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            placeholder="" name="project_type" id="project_type">
                                            @foreach ($project_types as $project_type)
                                            <option value="{{ $project_type->type_num }}" @if(old('project_type')==$project_type->id) selected
                                                @endif>{{ $project_type->type_num }}</option>
                                            @endforeach
                                        </select>
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
                                            name="remittance" id="remittance"
                                            rows="4">@if(old('remittance') != "") {{old('remittance')}} @endif</textarea>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="amount"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">予算額
                                            *</label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="number" value="{{ old('amount') }}" name="amount" id="amount">
                                        @error('amount')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="deposit"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">支払予定日
                                            *</label>
                                        <input
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="date" name="deposit" id="deposit" value="{{ old('deadline') }}">
                                        @error('deposit')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="deadline"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">希望出金日
                                            *</label>
                                        <input
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="date" name="deadline" id="deadline" value="{{ old('deadline') }}">
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
                                            name="comment" id="comment"
                                            rows="4">@if(old('comment') != "") {{old('comment')}} @endif</textarea>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-12">
                                    <div style="display: flex;justify-content:right;">
                                        <button type="submit" class="btn bg-violet-500 border-transparent text-white" onclick="showRegisterConfirmModal()">
                                            <i class=" bx bx-plus-medical ms-1 align-middle"></i>
                                            登録
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

<div class="relative z-50 modal hidden" id="showRegisterConfirmModal" aria-labelledby="modal-title" role="dialog"
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
                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">登録確認</h2>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60">案件を登録すると、自動的に承認を要請することになります。</p>
                    <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60">新規案件を登録しますか？</p>
                    <div class="w-full py-4 my-4">
                        <button id="confirm_btn" onclick="closeRegisterConfirmModal()"
                            class="btn text-white bg-red-500 mx-4 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                            キャンセル
                        </button>
                        <button type="submit" class="btn bg-violet-500 border-transparent text-white mx-4 px-8" onclick="sendform()">
                            登録
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/pages/projects.js') }}"></script>

@endsection