@extends('layouts.app')
@section('content')
    <link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">プロフィール</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="/"
                                        class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        オヤテック
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
                                        <a href="{{ route('userMana.show', ['userMana' => Auth::user()->id]) }}"
                                            class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">プロフィール</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="tab-pane" id="underline-icon-verifyInfo">
                    <div class="col-span-12 lg:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <form class="card-body" action="{{ route('userMana.user_photo_check') }}" method="POST">
                                @csrf
                                <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-3">
                                    本人の写真と確認書類（運転免許証またはIDカード）の写真をアップロードしてください。</h5>
                                @if (session('success'))
                                    <div
                                        class="px-5 py-[9px] flex items-center bg-green-50 border border-green-100 rounded alert-dismissible mb-4">
                                        <i
                                            class="mdi mdi-baby-face-outline ltr:mr-2 rtl:ml-2 align-middle text-green-700 text-lg"></i>
                                        <p class="text-green-700">{{ session('success') }}</p>
                                        <button type="button"
                                            class="alert-close ltr:ml-auto rtl:mr-auto text-green-400 text-lg">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </div>
                                @endif
                                <div class="flex w-full">
                                    <div class="h-80 w-80 ltr:mr-4 rtl:ml-1">
                                        <div class="w-full h-full">
                                            <div class="avatar-upload relative h-full">
                                                <div class="avatar-edit">
                                                    <input type='file' id="face_imageUpload"
                                                        accept=".png, .jpg, .jpeg" />
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview_face"
                                                        @if (isset($user_photo_check)) style="background-image: url({{ asset($user_photo_check->user_photo_url) }});"
                                                                        @else
                                                                            style="background-image: url('/assets/images/users/default.png');" @endIf>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-80 w-148 ltr:mr-4 rtl:ml-1">
                                        <div class="w-full h-full">
                                            <div class="avatar-upload relative h-full">
                                                <div class="avatar-edit">
                                                    <input type='file' id="id_imageUpload" accept=".png, .jpg, .jpeg" />
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview_id_card"
                                                        @if (isset($user_photo_check)) style="background-image: url({{ asset($user_photo_check->user_check_url) }});"
                                                                        @else
                                                                            style="background-image: url('/assets/images/users/default.png');" @endIf>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-148">
                                        <form class="max-w-md mx-auto">
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input type="email" name="floating_email" id="floating_email"
                                                    @if (isset($user)) value="e-mail :   {{ $user->email }}" @endIf
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" " required readonly />
                                            </div>
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input type="text" name="user_country" id="user_country"
                                                    @if (isset($user_country)) value="国籍 :  {{ $user_country->name }}" @endIf
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" " required readonly />
                                            </div>
                                            <div class="text z-0 w-full mb-5 group">
                                                <input type="text" name="user_language" id="user_language"
                                                    @if (isset($user_language)) value="言語 :  {{ $user_language }}" @endIf
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" " required readonly />
                                            </div>
                                            <div class="text z-0 w-full mb-5 group">
                                                <div class="relative z-0 w-full mb-5 group">
                                                    <input type="text" name="user_name"
                                                        @if (isset($user)) value="氏名 :  {{ $user->nickname }}" id="user_name" @endIf
                                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                        placeholder=" " required readonly />
                                                </div>
                                            </div>
                                            <div class="text z-0 w-full mb-5 group">
                                                <div class="relative z-0 w-full mb-5 group">
                                                    <input type="text" name="user_address"
                                                        @if (isset($user_detail)) value="住所 :  {{ $user_detail->address }}" id="user_address" @endIf
                                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                        placeholder=" " required readonly />
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <div class="flex items-center mx-5">
                                                    <input id="link-checkbox-1" type="checkbox" value=""
                                                        onclick="return false;"
                                                        @if (isset($user_verify)) checked @endIf
                                                        class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="link-checkbox"
                                                        class="mx-2 text-sm font-medium text-gray-900 dark:text-gray-300">質問入力</label>
                                                </div>
                                                <div class="flex items-center mx-5">
                                                    <input id="link-checkbox-2" type="checkbox" value=""
                                                        onclick="return false;"
                                                        @if (isset($user->other)) checked @endIf
                                                        class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="link-checkbox"
                                                        class="mx-2 text-sm font-medium text-gray-900 dark:text-gray-300">加入承認</label>
                                                </div>
                                                <div class="flex items-center mx-5">
                                                    <input id="link-checkbox-3" type="checkbox" value=""
                                                        onclick="return false;"
                                                        @if (isset($user->confirmed) && $user->confirmed == 1) checked @endIf
                                                        class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="link-checkbox"
                                                        class="mx-2 text-sm font-medium text-gray-900 dark:text-gray-300">身分確認</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="flex justify-center my-4 mb-8">
                                    <a href="{{ route('userMana.index') }}"
                                        class="mx-5 h-12 w-48 btn text-lg text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">
                                        <i class="fa-solid fa-users text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                        <span class="align-middle">ユーザー一覧</span>
                                    </a>
                                    <form action="{{ route('userMana.confirm') }}" method="POST"> 
                                    @csrf
                                     <input type="hidden"
                                        value="{{ $user->id }}" name="userId">
                                        <button type="submit"
                                            class="mx-5 h-12 w-40 btn text-lg text-white bg-blue-500 border-blue-500 hover:bg-blue-600 hover:border-blue-600 focus:bg-blue-600 focus:border-blue-600 focus:ring focus:ring-blue-500/30 active:bg-blue-600 active:border-blue-600">
                                            <i class="bx bx-check-double text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                            <span class="align-middle">身分確認</span>
                                        </button>
                                    </form>
                                    <form action="{{ route('userMana.unconfirm') }}" method="POST"> 
                                    @csrf
                                     <input type="hidden"
                                        value="{{ $user->id }}" name="userId">
                                        <button type="submit"
                                            class="mx-5 h-12 w-40 btn text-lg text-white bg-blue-500 border-blue-500 hover:bg-blue-600 hover:border-blue-600 focus:bg-blue-600 focus:border-blue-600 focus:ring focus:ring-blue-500/30 active:bg-blue-600 active:border-blue-600">
                                            <i class="fa-solid fa-xmark text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                            <span class="align-middle">確認解除</span>
                                        </button>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
