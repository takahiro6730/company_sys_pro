<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>トップページ | オヤテックジャパン</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="オヤテックジャパン" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />



</head>

<body data-mode="light" data-sidebar-size="lg">
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 relative z-50">
                    <div class="w-full bg-white xl:p-12 p-10 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                            <div class="mx-auto">
                                <a href="/" class="">
                                    <img src="{{ asset('assets/images/logo-sm1.png') }}" alt="" class="h-8 inline" style="min-width: 50px; min-height: 50px;">
                                    {{-- <span class="text-xl align-middle font-medium ltr:ml-2 rtl:mr-2 dark:text-white">オヤテック</span> --}}
                                </a>
                            </div>

                            <div class="my-auto">
                                {{-- <div class="text-center mb-8">
                                    <h5 class="text-gray-600 dark:text-gray-100">Lock Screen</h5>
                                    <p class="text-gray-500 dark:text-zinc-100/60 mt-1">Enter your password to unlock
                                        the screen!</p>
                                </div> --}}

                                <div class="mt-4 pt-2">
                                    <div class="mb-4">
                                        <a href="{{ route('register') }}"
                                            class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600">会員登録</a>
                                    </div>

                                    <div class="mb-4">
                                        <a href="{{ route('login') }}"
                                            class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600">ログイン</a>
                                    </div>
                                </div>
                            </div>
                            <div class=" text-center">
                                <a href="/term"
                                    class="w-full py-2.5 text-blue-500 dark:text-blue-100">
                                    利用規約
                                </a>
                                <p class="text-gray-500 dark:text-gray-100  relative mb-2">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> オヤテックジャパン <i class="mdi mdi-heart text-red-400"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>

                        <ul class="bg-bubbles absolute top-0 left-0 w-full h-full overflow-hidden animate-square">
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                            <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                            <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                            <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                        </ul>

                        <div class="grid grid-cols-12 content-center h-screen">
                            <div class="col-span-8 col-start-3">
                                <div class="swiper login-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" style="height: 250px">
                                            <h2 class="text-center text-green-500">サービス</h2>
                                            <h3 class="mt-4 text-white">
                                                主に日本に銀行がない海外の開発者に報酬受取に対する代行を本業務とします。
                                            </h3>
                                            <ul class="px-8 py-4 text-white">
                                                <li style="list-style-type: circle;">請求書発行サービス</li>
                                                <li style="list-style-type: circle;">フィアット通貨への送金サービス</li>
                                            </ul>
                                        </div>
                                        <div class="swiper-slide">
                                            <h2 class="text-center text-green-500">利用対象</h2>
                                            <h3 class="mt-4 text-white">
                                                <li style="list-style-type: circle;">日本に銀行口座を開設できなかった開発者</li>
                                                <li style="list-style-type: circle;">資金の振替が必要な開発者</li>
                                            </h3>
                                        </div>
                                        <div class="swiper-slide">
                                            <h2 class="text-center text-green-500">サインアップ手順</h2>
                                            <h3 class="mt-4 text-white">
                                                <li style="list-style-type: circle;">登録画面で必要な情報を入力してください。</li>
                                                <li style="list-style-type: circle;">登録要求を送ると管理者が確認し、1営業日以内に登録したメールで接続リンクをお送りします。</li>
                                            </h3>
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
    </div>

    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/login.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>