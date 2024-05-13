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
    <link href="{{ asset('assets/css/pages/user.css') }}" rel="stylesheet" type="text/css" />

    <div class="main-content overflow-auto">
        <div class="page-content dark:bg-zinc-700">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">ユーザー管理</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li>
                                    <div class="flex items-center">
                                        <a href="{{ route('userMana.index') }}"
                                            class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">ユーザー管理</a>
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
                                                class="p-4 pr-8 border rtl:border-l-0 border-y-2 border-gray-50 dark:border-zinc-600 max-w-[50px]">
                                                番号</th>
                                            <th
                                                class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                                氏名</th>
                                            <th
                                                class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                                メール</th>
                                            <th
                                                class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                                身分確認</th>
                                            <th
                                                class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                                確認状態</th>
                                            <th
                                                class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                                役割</th>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                                登録日</th>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                                更新日</th>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">
                                                削除</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($users as $user)
                                            <tr>
                                                <td
                                                    class="p-4 pr-8 border rtl:border-l-0 border-t-0 border-gray-50 dark:border-zinc-600]">
                                                    {{ $i++ }}</td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                    {{ $user->nickname }}</td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                    <a href="mailto:{{ $user->email }}"
                                                        class="btn text-violet-500 border-0 group">
                                                        <span
                                                            class="group-hover:border-b transition-all duration-100 ease-in-out group-hover:border-violet-500">{{ $user->email }}</span>
                                                    </a>
                                                </td>
                                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"
                                                    style="text-align: center;">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" onclick="return false;"
                                                            name="darkmode"
                                                            value="yes" @if ($user->confirmed != null && $user->confirmed == 1) checked @endif>
                                                    </div>
                                                </td>
                                                <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"
                                                    style="text-align: center;">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="checkbox_{{ $user->id }}"
                                                            onclick="changeUserVerify({{ $user->id }})" name="darkmode"
                                                            value="yes" @if ($user->other != null) checked @endif>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                    {{ $user->role->name }}</td>
                                                <td
                                                    class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                    {{ $user->created_at->format('Y-m-d') }}</td>
                                                <td
                                                    class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                    {{ $user->updated_at->format('Y-m-d') }}</td>
                                                <td
                                                    class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                    <button onclick="showDeleteConfirmModal({{ $user->id }})"
                                                        class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
                                                        <i class="bx bx-trash text-16 align-middle"></i>
                                                    </button>

                                                    <a href="{{ route('userMana.edit', ['userMana' => $user->id]) }}"
                                                        class="btn text-white bg-blue-500 border-blue-500 hover:bg-blue-600 hover:border-blue-600 focus:bg-blue-600 focus:border-blue-600 focus:ring focus:ring-blue-500/30 active:bg-blue-600 active:border-blue-600">
                                                        <i class="bx bx-edit text-16 align-middle"></i>
                                                        </button>
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

    <div class="relative z-50 modal hidden" id="userVerifiedModal" aria-labelledby="modal-title" role="dialog"
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
                        <p class="mt-2 text-gray-500 dark:text-zinc-100/60">ログイン権限が変更されました。</p>
                        <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                            <button type="button"
                                class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                data-tw-dismiss="modal">戻る</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative z-50 modal hidden" id="deleteUserConfirmModal" aria-labelledby="modal-title" role="dialog"
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
                        <input type="hidden" name="delete_user" id="delete_user" value="">
                        <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                            <button type="button"
                                class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                data-tw-dismiss="modal">戻る</button>
                            <button type="button" onclick="deleteUser();"
                                class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">削除</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative z-50 modal hidden" id="userDeletedModal" aria-labelledby="modal-title" role="dialog"
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
                        <p class="mt-2 text-gray-500 dark:text-zinc-100/60">正確に削除されました。</p>
                        <div class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                            <a href="{{ route('userMana.index') }}"
                                class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                data-tw-dismiss="modal">戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/pages/users.js') }}"></script>
@endsection
