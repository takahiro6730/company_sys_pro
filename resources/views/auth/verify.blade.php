<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>メール確認 | オヤテックジャパン</title>
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
                    <div class="w-full bg-white xl:p-12 p-10">
                        <div class="flex h-[90vh] flex-col">
                            <div class="mx-auto">
                                <a href="/" class="">
                                    <img src="{{ asset('assets/images/logo-sm1.png') }}" alt="" class="h-8 inline" style="min-width: 50px; min-height: 50px;">
                                    {{-- <span class="text-xl align-middle font-medium ltr:ml-2 rtl:mr-2 dark:text-white">オヤテック</span> --}}
                                </a>
                            </div>

                            <div class="my-auto">
                                <div>
                                    <div class=" bg-gray-500/10 h-16 w-16 text-primary text-center mx-auto rounded-full">
                                        <i class="bx bx-mail-send text-3xl leading-[2.2] text-violet-500"></i>
                                    </div>
                                </div>

                                <div class="text-center mt-6">
                                    <h4 class="text-gray-600 text-21">メール確認が完了していません</h4>
                                    <p class="text-gray-500 mt-1">メール確認が完了しないとログインできません。</p>
                                </div>

                                <div class="mt-5">
                                    <a href="/" class="btn border-transparent bg-violet-500 w-full py-2.5 text-white shadow-md shadow-violet-200 dark:shadow-zinc-600">戻 る</a>
                                </div>
                            </div>

                            
                            <div class="text-center">
                                <p class="text-gray-500 dark:text-gray-100 relative mb-5">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> オヤテックジャパン <i class="mdi mdi-heart text-red-400"></i></p>
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