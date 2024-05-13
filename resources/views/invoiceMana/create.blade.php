@extends('layouts.app')
@section('content')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/invoiceMana/html2pdf.bundle.min.js') }}"></script>
<!-- <script src=" {{ asset('js.invoiceMana.html2pdf.bundle.min.js') }} "></script> -->
<div class="main-content overflow-auto">
    <div class="page-content dark:bg-zinc-700" style="height: 100vh;">

        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">新規作成</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="{{ route('invoiceMana.index') }}"
                                    class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    請求書管理
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
                                    <a href="{{ route('invoiceMana.create') }}"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">新規作成</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 xl:col-span-3">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <form action="{{ route('invoiceMana.store') }}" method="POST">
                                @csrf
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="payment"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">請求種類</label>
                                        <select name="payment" id="payment"
                                            class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100">
                                            @foreach($payments as $payment)
                                            <option value="{{ $payment->id }}" @if(old('payment') == $payment->id) selected @endif>{{ $payment->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                        <label for="client_info"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">お客様情報</label>
                                        <input type="text" id="client_info" name="client_info" onkeyup="previewInvoiceHTML()"
                                            class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                            placeholder="OO株式会社" value="{{ old('client_info') }}">
                                        @error('client_info')
                                            <div class="text-xs text-red-500 mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="amount"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">金額</label>
                                        <input type="number" step="1000" id="amount" name="amount" onkeyup="previewInvoiceHTML()" onchange="previewInvoiceHTML()"
                                            class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                            placeholder="100000円" value="{{ old('amount') }}">
                                        @error('amount')
                                            <div class="text-xs text-red-500 mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="project_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">案件名</label>
                                    <input type="text" id="project_name" name="project_name" onkeyup="previewInvoiceHTML()"
                                        class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                        placeholder="ランディングページコーディング(HTML、CSS)" value="{{ old('project_name') }}">
                                    @error('project_name')
                                        <div class="text-xs text-red-500 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-6">
                                    <label for="other"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">特記事項</label>
                                    <textarea name="other" id="other" onkeyup="previewInvoiceHTML()"
                                        class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-100"
                                        rows="5" placeholder="" style="white-space: pre-wrap;">{{ old('other') }}</textarea>
                                </div>
                                <button type="submit"
                                    class="mx-auto text-white bg-violet-500 hover:bg-violet-700 focus:ring-2 focus:ring-violet-100 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">送 信</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 xl:col-span-9 hidden sm:block" id="InvoiceHTML">
                    
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.12/pdfobject.min.js"></script>
<script>
    previewInvoiceHTML();
    function previewInvoiceHTML() {
        let payment = $("#payment").val();
        let client_info = $("#client_info").val();
        let amount = $("#amount").val();
        let project_name = $("#project_name").val();
        let other = $("#other").val();
        $.post("{{ route('previewInvoiceHTML') }}", {
            _token : $('meta[name="csrf-token"]').attr('content'),
            "payment" : payment,
            "client_info" : client_info,
            "amount" : amount,
            "project_name" : project_name,
            "other" : other.replace(/ /g, '&nbsp;').replace(/\n/g, '<br>'),
        }, function(res){
            $("#InvoiceHTML").html(res);
        });
    }
</script>
@endsection