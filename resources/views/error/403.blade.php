<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>403エラー | オヤテックジャパン</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />



</head>

<body data-mode="light" data-sidebar-size="lg">
    <div class="container-fluid">
        <div class="bg-gray-50/20 h-screen dark:bg-zinc-800">
            <div>
                <div class="container mx-auto pt-12">
                    <div class="grid grid-cols-12 justify-center pt-12">
                        <div class="col-span-12">
                            <div class="text-center">
                                <h1 class="text-8xl text-gray-600 mb-3 dark:text-gray-100">4<span
                                        class="text-violet-500 mx-2">0</span>3</h1>
                                <h3 class="uppercase mb-2 text-gray-600 text-[21px] dark:text-gray-100">
                                    ページにアクセスする権限がありません。</h3>
                                <h3 class="uppercase mb-2 text-gray-600 text-[21px] dark:text-gray-100">
                                    身分確認手続きを完了し、再度アクセスしてください。</h3>
                            </div>
                            <div class="mt-12 text-center">
                                <button
                                    class="btn bg-violet-500 border-transparent focus:ring focus:ring-violet-50 text-white py-2"
                                    onclick="history.back()">戻る</button>
                            </div>
                        </div>
                        <div class="col-span-8 col-start-3">
                            <div class="pt-12">
                                <img src="{{ asset('assets/images/error-img.png') }}" alt="" class="img-fluid">
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

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>