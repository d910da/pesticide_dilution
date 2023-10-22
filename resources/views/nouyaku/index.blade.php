<x-app-layout>
    <div class="flex items-center">
        <div >
            <img src="{{ asset('images/youtei.jpg') }}" alt="">
        </div>
        <div>
            <div class="text-emerald-600">
                <a href="{{ route('register') }}"> {{ __('新規登録') }} </a>
            </div>
            <div class = "pt-10 text-emerald-600">
                <a href="{{ route('login') }}" class="right-30">{{ __('Log In') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>
