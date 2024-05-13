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

                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="flex flex-wrap card-body w-full">
                        <div class="nav-tabs border-b-tabs w-full">
                            <ul
                                class="flex flex-wrap w-full text-sm font-medium text-center text-gray-500 border-b border-gray-100 nav dark:border-gray-700 dark:text-gray-400">
                                <li>
                                    <a href="javascript:void(0);" data-tw-toggle="tab"
                                        data-tw-target="underline-icon-nickname"
                                        class="inline-block p-4 hover:border-b-2 hover:border-gray-300 active">
                                        <i
                                            class="text-lg align-middle mdi mdi-account-circle-outline ltr:mr-2 rtl:ml-2"></i>ユーザー名
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-icon-email"
                                        class="inline-block p-4">
                                        <i
                                            class="text-lg align-middle mdi mdi-email-edit-outline ltr:mr-2 rtl:ml-2"></i>メール変更
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-tw-toggle="tab"
                                        data-tw-target="underline-icon-password"
                                        class="inline-block p-4 hover:border-b-2 hover:border-gray-300">
                                        <i class="text-lg align-middle mdi mdi-shield-key ltr:mr-2 rtl:ml-2"></i>パスワード変更
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-tw-toggle="tab"
                                        data-tw-target="underline-icon-personalInfo"
                                        class="inline-block p-4 hover:border-b-2 hover:border-gray-300">
                                        <i
                                            class="text-lg align-middle mdi mdi-account-details-outline ltr:mr-2 rtl:ml-2"></i>個人情報
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-tw-toggle="tab"
                                        data-tw-target="underline-icon-twoStep"
                                        class="inline-block p-4 hover:border-b-2 hover:border-gray-300">
                                        <i class="text-lg align-middle mdi mdi-account-lock ltr:mr-2 rtl:ml-2"></i>確認情報
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-tw-toggle="tab"
                                        data-tw-target="underline-icon-verifyInfo"
                                        class="inline-block p-4 hover:border-b-2 hover:border-gray-300">
                                        <i
                                            class="text-lg align-middle mdi mdi-account-box-outline ltr:mr-2 rtl:ml-2"></i>身分確認
                                    </a>
                                </li>
                            </ul>

                            <div class="mt-5 tab-content">
                                <div class="block tab-pane" id="underline-icon-nickname">
                                    <div class="col-span-12 w-full">
                                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                            <form class="card-body"
                                                action="{{ route('userMana.update', ['userMana' => Auth::user()->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('put')
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
                                                <div class="grid grid-cols-12 mb-5">
                                                    <div class="col-span-9">
                                                        <div class="flex flex-wrap items-center">
                                                            <div class="h-20 w-20 ltr:mr-4 rtl:ml-1">
                                                                {{-- <div
                                                                class="bg-gray-100 text-gray-700 h-20 w-20 rounded-full text-center text-3xl font-medium leading-[2.7]">
                                                                {{ substr(Auth::user()->nickname, 0, 2) }}</div> --}}
                                                                @if (Auth::user()->avatar)
                                                                    <div class="w-full h-full">
                                                                        <div class="avatar-upload relative h-full">
                                                                            <div class="avatar-edit">
                                                                                <input type='file' id="imageUpload"
                                                                                    accept=".png, .jpg, .jpeg" />
                                                                                <label for="imageUpload"
                                                                                    class="flex justify-center items-center">
                                                                                    <i
                                                                                        class="mdi mdi-fountain-pen-tip mx-auto"></i>
                                                                                </label>
                                                                            </div>
                                                                            <div class="avatar-preview">
                                                                                <div id="imagePreview"
                                                                                    style="background-image: url({{ asset(Auth::user()->avatar) }});">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="w-full h-full">
                                                                        <div class="avatar-upload relative h-full">
                                                                            <div class="avatar-edit">
                                                                                <input type='file' id="imageUpload"
                                                                                    accept=".png, .jpg, .jpeg" />
                                                                                <label for="imageUpload"
                                                                                    class="flex justify-center items-center">
                                                                                    <i
                                                                                        class="mdi mdi-fountain-pen-tip mx-auto"></i>
                                                                                </label>
                                                                            </div>
                                                                            <div class="avatar-preview">
                                                                                <div id="imagePreview"
                                                                                    style="background-image: url({{ asset('assets/images/users/default.png') }});">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div>
                                                                <h5 class="text-16 mb-1 text-gray-700 dark:text-gray-100">
                                                                    {{ Auth::user()->nickname }}
                                                                </h5>
                                                                <p class="text-gray-500 dark:text-zinc-100 text-13">
                                                                    {{ Auth::user()->role->name }}
                                                                </p>

                                                                <div class="flex flex-wrap items-start gap-2 text-13 mt-3">
                                                                    <div class="text-gray-500 dark:text-zinc-100">
                                                                        <i
                                                                            class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>
                                                                        {{ Auth::user()->email }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-3">
                                                        <div class="flex flex-wrap justify-end">
                                                            <button type="button" onclick="removeNicknameReadonly()"
                                                                id="editableNickName"
                                                                class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">
                                                                <i class="bx bx-edit text-16 align-middle "></i>
                                                            </button>
                                                            <button type="button" onclick="addNicknameReadonly()"
                                                                id="readonlyNickname"
                                                                class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600 hidden">
                                                                <i class="bx bx-window-close text-16 align-middle "></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-6 mb-4">
                                                    <label for="username"
                                                        class="block font-medium text-gray-700 dark:text-gray-100 mb-2">ユーザー名</label>
                                                    <input type="text" placeholder="ユーザー名" id="username"
                                                        name="nickname" value="{{ Auth::user()->nickname }}"
                                                        class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                        readonly>
                                                    @error('nickname')
                                                        <div
                                                            class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                            <i
                                                                class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                            <p class="text-red-700">{{ $message }}</p>
                                                            <button type="button"
                                                                class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                    class="mdi mdi-close"></i></button>
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="flex justify-end">
                                                    <button type="submit" id="saveNicknameBtn"
                                                        class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600 hidden">
                                                        <i
                                                            class="bx bx-check-double text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                                        <span class="align-middle">保 存</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden tab-pane" id="underline-icon-email">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                            <form class="card-body" action="{{ route('userMana.requestChangeEmail') }}"
                                                method="POST">
                                                @csrf
                                                <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-3">メール変更</h5>
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
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-4">
                                                        <input type="text" placeholder="メール" id="email"
                                                            name="email" value="{{ Auth::user()->email }}"
                                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100">
                                                        @if (session('error'))
                                                            <div
                                                                class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                                <i
                                                                    class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                                <p class="text-red-700">{{ session('error') }}</p>
                                                                <button type="button"
                                                                    class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <button type="submit"
                                                            class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">
                                                            <i
                                                                class="bx bx-check-double text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                                            <span class="align-middle">保 存</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden tab-pane" id="underline-icon-password">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                            <form id="pass_main_form" class="card-body"
                                                action="{{ route('userMana.changePassword') }}" method="POST">
                                                @csrf
                                                <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-3">パスワード変更</h5>
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
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-4">
                                                        <label for="last_password"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">以前のパスワード</label>
                                                        <input type="password" placeholder="" id="last_password"
                                                            name="last_password"
                                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100">
                                                        @error('last_password')
                                                            <div
                                                                class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                                <i
                                                                    class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                                <p class="text-red-700">{{ $message }}</p>
                                                                <button type="button"
                                                                    class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="new_password"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">新しいパスワード</label>
                                                        <input type="password" placeholder="" id="new_password"
                                                            name="password"
                                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100">
                                                        @error('password')
                                                            <div
                                                                class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                                <i
                                                                    class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                                <p class="text-red-700">{{ $message }}</p>
                                                                <button type="button"
                                                                    class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="confirm_password"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">パスワード確認</label>
                                                        <input type="password" placeholder="" id="confirm_password"
                                                            name="password_confirmation"
                                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100">
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <button id="pass_change_btn"
                                                            class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">
                                                            <i
                                                                class="bx bx-check-double text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                                            <span class="align-middle">保存</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden tab-pane" id="underline-icon-personalInfo">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                            <form class="card-body" action="{{ route('userMana.user_detail') }}"
                                                method="POST">
                                                @csrf
                                                <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-3">個人情報</h5>
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
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-4">
                                                        <label for="user_language"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">言語</label>
                                                        <select
                                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                            id="user_language" name="user_language">
                                                            @if (isset($user_detail))
                                                                @foreach ($languages as $code => $language)
                                                                    @if ($code == $user_detail->language)
                                                                        ddddddd
                                                                        <option value="{{ $code }}"
                                                                            selected="selected">{{ $language }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $code }}">
                                                                            {{ $language }}</option>
                                                                    @endIf
                                                                @endForEach
                                                            @else
                                                                @foreach ($languages as $code => $language)
                                                                    <option value="{{ $code }}">
                                                                        {{ $language }}</option>
                                                                @endForEach
                                                            @endIf
                                                        </select>
                                                        @error('user_language')
                                                            <div
                                                                class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                                <i
                                                                    class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                                <p class="text-red-700">{{ $message }}</p>
                                                                <button type="button"
                                                                    class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="user_birthday"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">生年月日</label>
                                                        <input type="date" placeholder="" id="user_birthday"
                                                            name="user_birthday"
                                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                            @if (isset($user_detail)) value="{{ date('Y-m-d', strtotime($user_detail->birthday)) }}" @endIf
                                                            required>
                                                        @error('user_birthday')
                                                            <div
                                                                class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                                <i
                                                                    class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                                <p class="text-red-700">{{ $message }}</p>
                                                                <button type="button"
                                                                    class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="user_nationality"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">国籍</label>
                                                        <select
                                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                            id="user_nationality" name="user_nationality">
                                                            @if (isset($user_detail))
                                                                @foreach ($countries as $country)
                                                                    @if ($country->code == $user_detail->getCountry())
                                                                        <option value="{{ $country->code }}"
                                                                            selected = "selected">{{ $country->name }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $country->code }}">
                                                                            {{ $country->name }}</option>
                                                                    @endIf
                                                                @endForEach
                                                            @else
                                                                @foreach ($countries as $country)
                                                                    @if ($country->code == 'JP')
                                                                        <option value="{{ $country->code }}"
                                                                            selected = "selected">{{ $country->name }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $country->code }}">
                                                                            {{ $country->name }}</option>
                                                                    @endIf
                                                                @endForEach
                                                            @endIf
                                                        </select>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="user_address"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">住所</label>
                                                        <input type="text" placeholder="" id="user_address"
                                                            name="user_address"
                                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                            @if (isset($user_detail)) )
                                                                value="{{ $user_detail->address }}" @endIf
                                                            required>
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <button type="submit"
                                                            class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">
                                                            <i
                                                                class="bx bx-check-double text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                                            <span class="align-middle">保存</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden tab-pane" id="underline-icon-twoStep">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                            <form class="card-body" action="{{ route('userMana.user_verify') }}"
                                                method="POST">
                                                @csrf
                                                <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-3">
                                                    自分だけが知ることができる情報を入力してください。</h5>
                                                <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-3">
                                                    保存ボタンを押すと再度変更できません。</h5>
                                                <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-3">
                                                    パスワードを変更する場合、アカウントで奇妙な行動が検出された場合は、ユーザーの確認を進めます。</h5>
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
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-4">
                                                        <label for="user_verify_question1"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">質問1</label>
                                                        <div class="w-full">
                                                            <select
                                                                class="w-1/2 rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                                id="user_verify_question1" name="user_verify_question1">
                                                                @foreach ($questions as $question)
                                                                    <option value="{{ $question->id }}"
                                                                        @if (isset($user_verify) && $user_verify->question_id1 == $question->id) selected="selected" @endIf>
                                                                        {{ $question->question }}</option>
                                                                @endForEach
                                                            </select>
                                                            <input type="text"
                                                                class="w-1/3 rounded ml-8 border-gray-100 focus:border focus:border-violet-500 focus:ring-0"
                                                                name="user_verify_answer1" id="user_verify_answer1"
                                                                required
                                                                @if (isset($user_verify)) value="{{ $user_verify->answer1 }}" @endIf>
                                                        </div>
                                                        @error('user_verify_question1')
                                                            <div
                                                                class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                                <i
                                                                    class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                                <p class="text-red-700">{{ $message }}</p>
                                                                <button type="button"
                                                                    class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="user_verify_question2"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">質問2</label>
                                                        <div class="w-full">
                                                            <select
                                                                class="w-1/2 rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                                id="user_verify_question2" name="user_verify_question2">
                                                                @foreach ($questions as $question)
                                                                    <option value="{{ $question->id }}"
                                                                        @if (isset($user_verify) && $user_verify->question_id2 == $question->id) selected="selected" @endIf>
                                                                        {{ $question->question }}</option>
                                                                @endForEach
                                                            </select>
                                                            <input type="text"
                                                                class="w-1/3 rounded ml-8 border-gray-100 focus:border focus:border-violet-500 focus:ring-0"
                                                                name="user_verify_answer2" id="user_verify_answer2"
                                                                required
                                                                @if (isset($user_verify)) value="{{ $user_verify->answer2 }}" @endIf>
                                                        </div>
                                                        @error('user_verify_question2')
                                                            <div
                                                                class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                                <i
                                                                    class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                                <p class="text-red-700">{{ $message }}</p>
                                                                <button type="button"
                                                                    class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="user_verify_question3"
                                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">質問3</label>
                                                        <div class="w-full">
                                                            <select
                                                                class="w-1/2 rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                                id="user_verify_question3" name="user_verify_question3">
                                                                @foreach ($questions as $question)
                                                                    <option value="{{ $question->id }}"
                                                                        @if (isset($user_verify) && $user_verify->question_id3 == $question->id) selected="selected" @endIf>
                                                                        {{ $question->question }}</option>
                                                                @endForEach
                                                            </select>
                                                            <input type="text"
                                                                class="w-1/3 rounded ml-8 border-gray-100 focus:border focus:border-violet-500 focus:ring-0"
                                                                name="user_verify_answer3" id="user_verify_answer3"
                                                                required
                                                                @if (isset($user_verify)) value="{{ $user_verify->answer3 }}" @endIf>
                                                        </div>
                                                        @error('user_verify_question3')
                                                            <div
                                                                class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible mt-2">
                                                                <i
                                                                    class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                                                <p class="text-red-700">{{ $message }}</p>
                                                                <button type="button"
                                                                    class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i
                                                                        class="mdi mdi-close"></i></button>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="flex justify-end">
                                                        <button type="submit"
                                                            class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">
                                                            <i
                                                                class="bx bx-check-double text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                                            <span class="align-middle">保存</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden tab-pane" id="underline-icon-verifyInfo">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                            <form class="card-body" action="{{ route('userMana.user_photo_check') }}"
                                                method="POST">
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
                                                                    <label for="face_imageUpload"
                                                                        class="flex justify-center items-center">
                                                                        <i class="mdi mdi-fountain-pen-tip mx-auto"></i>
                                                                    </label>
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
                                                                    <input type='file' id="id_imageUpload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="id_imageUpload"
                                                                        class="flex justify-center items-center">
                                                                        <i class="mdi mdi-fountain-pen-tip mx-auto"></i>
                                                                    </label>
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
                                                    @if (isset($user_photo_check))
                                                        <input type="hidden" id="user_photo_url" name="user_photo_url"
                                                            value="{{ $user_photo_check->user_photo_url }}">
                                                        <input type="hidden" id="user_check_url" name="user_check_url"
                                                            value="{{ $user_photo_check->user_check_url }}">
                                                    @else
                                                        <input type="hidden" id="user_photo_url" name="user_photo_url"
                                                            value="NONE">
                                                        <input type="hidden" id="user_check_url" name="user_check_url"
                                                            value="NONE">
                                                    @endIf
                                                </div>
                                                <div class="flex justify-center mt-4">
                                                    <button type="submit"
                                                        class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">
                                                        <i
                                                            class="bx bx-check-double text-16 align-middle ltr:mr-1 rtl:ml-1 "></i>
                                                        <span class="align-middle">保存</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quiz modal -->
    <div id="quiz-modal"
        class="flex hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen max-h-full bg-black-opacity">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        質問を確認してください。
                    </h3>
                    <button type="button" id="hide_modal"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        >
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-2" action="{{ route('userMana.pass_modal_check') }}" name="submit_modal_form"
                        id="submit_modal_form">
                        @csrf
                        <div>
                            <label for="pass_question1"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">質問１</label>
                            <input type="text" name="pass_question1" id="pass_question1"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="name@company.com" required readonly />
                            <input type="hidden" name="pass_question1_id" id="pass_question1_id">
                        </div>
                        <div>
                            <input type="text" name="pass_answer1" id="pass_answer1" placeholder="回答１"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <div>
                            <label for="pass_question2"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">質問２</label>
                            <input type="text" name="pass_question2" id="pass_question2"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="name@company.com" required readonly />
                            <input type="hidden" name="pass_question2_id" id="pass_question2_id">
                        </div>
                        <div>
                            <input type="text" name="pass_answer2" id="pass_answer2" placeholder="回答２"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <div>
                            <label for="pass_question3"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">質問３</label>
                            <input type="text" name="pass_question3" id="pass_question3"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="name@company.com" required readonly />
                            <input type="hidden" name="pass_question3_id" id="pass_question3_id">
                        </div>
                        <div>
                            <input type="text" name="pass_answer3" id="pass_answer3" placeholder="回答３"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <button type="submit" id="modal_submit"
                            class="w-full btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">確認</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const removeNicknameReadonly = () => {
            $('#editableNickName').addClass('hidden');
            $('#readonlyNickname').removeClass('hidden');
            $('#username').removeAttr('readonly');
            $('#saveNicknameBtn').removeClass('hidden');
        }

        const addNicknameReadonly = () => {
            $('#readonlyNickname').addClass('hidden');
            $('#editableNickName').removeClass('hidden');
            $('#username').prop('readonly', true);
            $('#saveNicknameBtn').addClass('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            initializeTabs();
            setTabClickEvents();
        });

        function initializeTabs() {
            let activeTabname = localStorage.getItem('activeTab') || 'nickname';

            setActiveTab(activeTabname);
            showActiveContent(activeTabname);
        }

        function setTabClickEvents() {
            document.querySelectorAll('[data-tw-toggle="tab"]').forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabname = this.getAttribute('data-tw-target').replace('underline-icon-', '');
                    localStorage.setItem('activeTab', tabname);
                    setActiveTab(tabname);
                    showActiveContent(tabname);
                });
            });
        }

        function setActiveTab(tabname) {
            document.querySelectorAll('[data-tw-toggle="tab"]').forEach(tab => {
                tab.classList.remove('active');
            });

            const activeTab = document.querySelector(`[data-tw-target="underline-icon-${tabname}"]`);
            if (activeTab) {
                activeTab.classList.add('active');
            }
        }

        function showActiveContent(tabname) {
            document.querySelectorAll('.tab-pane').forEach(content => {
                content.classList.remove('block');
                content.classList.add('hidden');
            });

            const activeContent = document.getElementById(`underline-icon-${tabname}`);
            if (activeContent) {
                activeContent.classList.remove('hidden');
                activeContent.classList.add('block');
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload").change(function() {
            readURL(this);

            var formData = new FormData();
            formData.append('avatar', $('#imageUpload')[0].files[0]);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "{{ route('userMana.changeAvatar') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    location.href = "{{ route('userMana.show', ['userMana' => Auth::user()->id]) }}";
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        $("#face_imageUpload").change(function() {
            readURL(this);

            var formData = new FormData();
            formData.append('face', $('#face_imageUpload')[0].files[0]);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "{{ route('userMana.changeFace') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    const randomNumber = Math.random();
                    const imageUrlWithCacheBuster = response + `?cache=${randomNumber}`;
                    $("#imagePreview_face").css('background-image', 'url(' + imageUrlWithCacheBuster +
                        ')');
                    $("#user_photo_url").val(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        $("#id_imageUpload").change(function() {
            readURL(this);

            var formData = new FormData();
            formData.append('id_card', $('#id_imageUpload')[0].files[0]);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "{{ route('userMana.changeId') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    const randomNumber = Math.random();
                    const imageUrlWithCacheBuster = response + `?cache=${randomNumber}`;
                    $("#imagePreview_id_card").css('background-image', 'url(' +
                        imageUrlWithCacheBuster + ')');
                    $("#user_check_url").val(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        $("#pass_change_btn").click(function(e) {
            e.preventDefault();

            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: "{{ route('userMana.password_question') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#quiz-modal").removeClass("hidden");
                    let quiz = JSON.parse(response);
                    $("#pass_question1").val(quiz[0].text);
                    $("#pass_question1_id").val(quiz[0].id);
                    $("#pass_question2").val(quiz[1].text);
                    $("#pass_question2_id").val(quiz[1].id);
                    $("#pass_question3").val(quiz[2].text);
                    $("#pass_question3_id").val(quiz[2].id);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        $("#modal_submit").click(function(e) {
            e.preventDefault();
            var formData = $("#submit_modal_form").serialize();

            $.ajax({
                url: "{{ route('userMana.pass_modal_check') }}",
                method: 'POST',
                data: formData,
                success: function(response) {
                    if (response == "SUCCESS") {
                        $("#pass_main_form").submit();
                    } else if (response == "FAILED") {
                        alert("正確に入力してください。");
                    } else {
                        alert(response);
                    }

                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
        $("#hide_modal").click(function() {
            $("#quiz-modal").addClass("hidden");
        });
    </script>
@endsection
