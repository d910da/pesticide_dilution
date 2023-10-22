<x-app-layout>
    <img class="h-96 w-full object-cover" src="{{ asset('images/youteizan.jpg') }}" alt="">
    <div class="py-12 bg-slate-300">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <h1 class="text-center text-3xl font-bold bg-green-100">農薬希釈</h1>
                    <form action="/nouyaku/keisan" method="post" class="space-y-5">
                        @csrf
                        <div class="flex">
                            <div class="w-48 justify-items-center">
                                <a class ="text-white text-xl">希釈倍率</a>
                            </div>
                            <input type="number" step='0.1' name="kisyaku"
                                style="text-align:right; font-size:150%;" value="{{ old('kisyaku', $kisyaku) }}">
                        </div>
                        <div class="flex">
                            <div class="w-48 justify-items-center">
                                <a class ="text-white text-xl">10a当り散布量</a>
                            </div>
                            <input type="number" step='0.1' name="kisyaku2"
                                style="text-align:right; font-size:150%;" value="{{ old('kisyaku2', $kisyaku2) }}">
                        </div>
                        <div class="flex">
                            <div class="w-48 justify-items-center">
                                <a class ="text-white text-xl">散布面積</a>
                            </div>
                            <input type="number" step='0.1' name="kisyaku3"
                                style="text-align:right; font-size:150%;" value="{{ old('kisyaku3', $kisyaku3) }}"><a
                                class = "text-white text-3xl font-bold align-baseline">町</a>
                        </div>
                        <input type="submit" value="計算"
                            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-max">
                        <a href="{{ route('nouyaku.create') }}"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-50 mr-2">農地登録</a>
                    </form>

                </div>
                @if (isset($nouyaku))
                    <a class = "font-bold text-green-600 text-3xl">散布液量</a>
                    <p class="w-1/3 border-4 border-indigo-600 bg-emerald-300 text-5xl text-right pr-4">
                        {{ $nouyaku }} L</P>
                    <a class = "font-bold text-green-600 text-3xl">使用薬量</a>
                    <p class="w-1/3 border-4 border-indigo-600 bg-emerald-300 text-5xl text-right pr-4">
                        {{ $nouyaku2 }} L</p>
                    <div class="flex justify-center items-center gap-4">

                    </div>
            </div>
            @endif
        </div>
    </div>
    </div>


</x-app-layout>
