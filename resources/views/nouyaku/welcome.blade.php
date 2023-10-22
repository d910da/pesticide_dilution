<x-app-layout>
    <div class="flex justify-center items-center gap-4 bg-gray-900">
        <img class=" object-cover" src="{{ asset('images/drone1.jpg') }}" alt="">

        <div>
            <h2
                class="font-bold font-sans break-normal text-gray-900 pt-6 pb-5 text-3xl md:text-4xl break-words text-right text-white">
                農薬希釈倍率計算･管理アプリ</h2>


            <div class="">
                <a href="{{ route('login') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">ログイン</a>
                <a href="{{ route('register') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">新規登録</a>
            </div>
        </div>
    </div>
</x-app-layout>
