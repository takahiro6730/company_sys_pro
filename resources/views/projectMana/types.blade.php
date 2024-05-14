@extends('layouts.app')
@section('content')

<div class="main-content overflow-auto">
    <div class="page-content dark:bg-zinc-700">
        <div class="container-fluid px-[0.625rem]">
            <form action="{{ route('projectMana.store')}}" method="post">
                @csrf
                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100"> 業務形式
                        </h4>
                    </div>
                </div>
                <div class="flex items-center justify-center py-4">
                    <div class="w-full">
                        <table class="min-w-full bg-white shadow-md rounded-xl">
                            <thead>
                                <tr class="bg-blue-gray-100 text-gray-700 bg-blue-100">
                                    <th class="py-3 px-4 text-center bg-zinc-700 rounded-tl-xl">カテゴリ</th>
                                    <th class="py-3 px-4 text-center bg-zinc-700">番号</th>
                                    <th class="py-3 px-4 text-center bg-zinc-700 rounded-tr-xl">業務内容</th>
                                </tr>
                            </thead>
                            <tbody class="text-blue-gray-700">
                                @foreach ( $project_types as $project_type)
                                    <tr class="{{ ($loop->last)? 'border-blue-gray-200 rounded-br-xl': 'border-b border-blue-gray-200'}}">
                                        <td class="py-3 px-4 text-center ">{{ $project_type->comment }}</td>
                                        <td class="py-3 px-4 text-center">{{ $project_type->type_num }}</td>
                                        <td class="py-3 px-4 {{ ($loop->last)? 'rounded-br-xl' : '' }}">
                                            <p class="font-bold text-lg">{{ $project_type->content }}</p>
                                            <p class="text-sm">{{ $project_type->sub_content }}</p>
                                        </td>
                                        <!-- <td class="py-3 px-4">
                                            <a href="#" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
                                        </td> -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
@endsection