<!DOCTYPE html>
<html lang="jp" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>オヤテックジャパン</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="オヤテックジャパン" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />


    <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body data-mode="light" data-sidebar-size="lg">

    <!-- leftbar-tab-menu -->
    <nav
        class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">

        <div class="flex items-center justify-between w-full">
            <div class="topbar-brand flex items-center">
                <div
                    class="navbar-brand flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                    <a href="/" class="flex items-center font-bold text-lg  dark:text-white">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt=""
                            class="ltr:mr-2 rtl:ml-2 inline-block h-6" style="min-width: 40px; min-height: 40px;" />
                        <span class="hidden xl:block align-middle">OyaTech</span>
                    </a>
                </div>
                <button type="button"
                    class="text-gray-600 dark:text-white h-[70px] ltr:-ml-10 ltr:mr-6 rtl:-mr-10 rtl:ml-10 vertical-menu-btn"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <div class="app-search hidden xl:block px-5">
                    <h4>株式会社オヤテックジャパン</h4>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex">
                    <a class="relative m-6 inline-flex w-fit" href="{{ route('message.index') }}">
                        <div
                            class="absolute bottom-auto left-auto right-0 top-0 z-10 inline-block -translate-y-1/2 translate-x-2/4 rotate-0 skew-x-0 skew-y-0 scale-x-100 scale-y-100 rounded-full bg-red-600 p-2.5 text-xs">
                        </div>
                        <div class="flex items-center justify-center  bg-gray-50/30 px-8 py-4 text-center text-white">
                            <img src="{{ asset('assets/images/icons/message.png') }}" alt="message" class="w-10 h-8">
                        </div>
                    </a>
                    <div class="dropdown relative ltr:mr-4 rtl:ml-4">
                        <button type="button"
                            class="flex items-center px-4 py-5 border-x border-gray-50 bg-gray-50/30 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            @if (Auth::user()->avatar)
                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-zinc-500 mr-2"
                                    src="{{ asset(Auth::user()->avatar) }}" alt="">
                            @else
                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-zinc-500 mr-2"
                                    src="{{ asset('assets/images/users/default.png') }}" alt="">
                            @endif
                            <span class="fw-medium hidden xl:block">{{ Auth::user()->nickname }}</span>
                            <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                        </button>
                        <div class="dropdown-menu absolute top-0 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800"
                            id="profile/log">
                            <div class="border border-gray-50 dark:border-zinc-600" aria-labelledby="navNotifications">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50"
                                        href="{{ route('userMana.show', ['userMana' => Auth::user()->id]) }}">
                                        <i class="mdi mdi-face-man text-16 align-middle mr-1"></i> プロフィール
                                    </a>
                                </div>
                                <hr class="border-gray-50 dark:border-gray-700">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="p-3 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout text-16 align-middle mr-1"></i> ログアウト
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ========== Left Sidebar Start ========== -->
    <div
        class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

        <div data-simplebar class="h-full">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default"
                        data-key="t-menu">メニュー</li>

                    <li>
                        <a href="{{ route('home') }}"
                            class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard"> ダッシュボード</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="pen-tool"></i>
                            <span data-key="t-apps"> 請求書管理</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('invoiceMana.create') }}"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">新規作成</a>
                            </li>
                            <li>
                                <a href="{{ route('invoiceMana.index') }}"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">請求書一覧</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="folder"></i>
                            <span data-key="t-auth"> 案件管理</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('projectMana.create') }}"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">新規追加</a>
                            </li>
                            <li>
                                <a href="{{ route('projectMana.index') }}"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">案件一覧</a>
                            </li>
                        </ul>
                    </li>
                    @if (Auth::user()->role_id < 2)
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="arrow-right-circle"></i>
                                <span data-key="t-auth"> 入出金管理</span>
                            </a>
                            <ul>
                                <!-- <li>
                                    <a href="{{ route('depositMana.create') }}"
                                        class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">新規追加</a>
                                </li> -->
                                <li>
                                    <a href="{{ route('projectMana.admin.index') }}"
                                        class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">案件一覧</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (Auth::user()->role_id < 3)
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="arrow-left-circle"></i>
                                <span data-key="t-auth"> ユーザー管理</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('userMana.index') }}"
                                        class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">ユーザー一覧</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>

    @yield('content')

    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- apexcharts -->
    {{-- <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}
    <!-- Plugins js-->
    <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>
    <!-- dashboard init -->
    {{-- <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> --}}

    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

    <script src="{{ asset('assets/js/pages/nav&tabs.js') }}"></script>

    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/login.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
