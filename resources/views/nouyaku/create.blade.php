<x-app-layout>
    <div class="flex justify-center items-center gap-4">
        <img class=" object-cover" src="{{ asset('images/drone2.jpg') }}" alt="">


        <div>
            <p class = "tracking-widest text-center text-5xl bg-clip-border bg-green-400 px-6 py-4">圃場登録</p>
            <div class = "my-8">
                <label for="">地域</label><br>
                <input type="name" style="border border-blue-400 text-align:right; font-size:250%;"><br>

                <label for="">圃場名</label><br>
                <input type="name" style="border border-blue-400 text-align:right; font-size:250%;"><br>

                <label for="">名前</label><br>
                <input type="name" style="border border-blue-400 text-align:right; font-size:250%;"><br>

                <label for="">連絡先</label><br>
                <input type="tell" style="border border-blue-400 text-align:right; font-size:250%;"><br>

                <label for="">作物</label><br>
                <input type="name" style="border border-blue-400 text-align:right; font-size:250%;"><br>

                <label for="">散布日</label><br>
                <input type="date" style="border border-blue-400 text-align:right; font-size:150%;"><br>

                <label for="">散布回数</label><br>
                <input type="number" style="border border-blue-400 text-align:right; font-size:100%;"><br>
            </div>


            <div class="mt-8">
                <a
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">新規登録</a>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
