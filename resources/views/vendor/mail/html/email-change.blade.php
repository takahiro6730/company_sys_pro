<x-mail::layout>
    {{-- Header --}}
    <x-slot name="header">
        <x-mail::header :url="config('app.url')">
            {{ config('app.name') }}
        </x-mail::header>
    </x-slot>

    {{-- Body --}}
    以下のリンクをクリックして、メールの変更を確認してください：
    
    {{-- Subcopy --}}
    @isset($url)
        <x-mail::button :url="$url">
            メール変更
        </x-mail::button>
    @endisset

    {{-- Footer --}}
    <x-slot name="footer">
        <x-mail::footer>
            © {{ date('Y') }} {{ config('app.name') }}
        </x-mail::footer>
    </x-slot>
</x-mail::layout>