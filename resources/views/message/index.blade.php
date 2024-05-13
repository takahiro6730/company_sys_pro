@extends('layouts.app')
@section('content')
    <div class="main-content overflow-auto h-screen">
        @csrf
        <div class="page-content dark:bg-zinc-700 h-full pb-2">
            <!-- This is an example component -->
            <div class="h-full">
                <!-- Chatting -->
                <div class="flex flex-row justify-between bg-white h-full">
                    <!-- chat list -->
                    <div class="flex flex-col w-2/5 border-r-2 overflow-y-auto">
                        <!-- search compt -->
                        <div class="border-b-2 py-4 px-2">
                            <input type="text" placeholder="ユーザー検索"
                                class="py-2 px-2 border-2 border-gray-200 rounded-2xl w-full" 
                                id="search_user" />
                        </div>
                        <!-- end search compt -->
                        <!-- user list -->
                        @foreach ($sel_users as $sel_user)
                            @php
                             if($sel_user->id ==Auth::user()->id) continue;
                            @endphp
                            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2 sel_user" id="user_{{$sel_user->id}}">
                                <div class="w-1/4">
                                    @if ($sel_user->avatar)
                                        <img class="object-cover h-12 w-12 rounded-full"
                                            src="{{ asset($sel_user->avatar) }}" alt="">
                                    @else
                                        <img class="object-cover h-12 w-12 rounded-full"
                                            src="{{ asset('assets/images/users/default.png') }}" alt="">
                                    @endif
                                </div>
                                <div class="w-full">
                                    <div class="text-lg font-semibold user_name">{{ $sel_user->nickname }}</div>
                                    <span class="text-gray-500">{{ $roles[$sel_user->role_id - 1]->name }}</span>
                                </div>
                            </div>
                        @endforeach
                        <!-- end user list -->
                    </div>
                    <p>
             <!-- end chat list -->
                    <!-- message -->
                    <div class="w-full px-5 flex flex-col justify-between">
                        <div class="flex flex-col mt-5 overflow-y-auto" id="chat_form">

                        </div>
                        <div class="py-5">
                            <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0" style="display:none" id="chat_input">
                                <div class="relative flex">
                                    <input type="text" placeholder="メッセージを入力してください。" class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-4 bg-gray-200 rounded-md py-3" id="message_input">
                                    <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
                                        <button type="button" class="inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none" id="send_text">
                                            <span class="font-bold">送信</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 ml-2 transform rotate-90">
                                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end message -->
                </div>
            </div>
        </div>
    </div>
    <div style="display:none!important">
        <div class="flex justify-end mb-6" id="right_chat">
            <div class="relative min-w-48 mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white">
                <div id="chat_content">right</div>
                <div class="absolute text-black bg-primary-100 text-xs bottom-2 right-2" id="chat_time">
                    chat_time
                </div>
            </div>
            <img src="" class="object-cover h-8 w-8 rounded-full" alt="" />
        </div>
        <div class="flex justify-start mb-6" id="left_chat">
            <img src="" class="object-cover h-8 w-8 rounded-full" alt="" />
            <div class="relative min-w-48 ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white">
                <div id="chat_content">left</div>    
                <div class="absolute text-black bg-primary-100 text-xs bottom-2 right-2" id="chat_time">
                    chat_time
                </div>
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "{{ url('/') }}";
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/pages/message.js') }}"></script>
    <script>

    </script>
@endsection
