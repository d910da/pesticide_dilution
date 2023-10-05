<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="text-center text-3xl font-bold bg-green-100">農薬希釈</h1>


                    <form action="/nouyaku/keisan" method="post" class="space-y-5">
                        @csrf
                        <div>
                            <label for="">希釈倍率</label>
                            <input type="number" step='0.1' name="kisyaku">
                        </div>

                        <div>
                            <label for="">10a当り散布量</label>
                            <input type="number" step='0.1' name="kisyaku2">
                        </div>

                        <div>
                            <label for="">散布面積</label>
                            <input type="number" step='0.1' name="kisyaku3"><a>町</a>
                        </div>

                        <input type="submit" value="計算"
                            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">





                    </form>
                </div>
                @if (isset($nouyaku))
                    
                        
                            使用薬量
                            <p class="w-1/3 border-4 border-indigo-600">{{ $nouyaku }}</P>
                        
                    


                        
                            
                                使用薬量
                                <p class="w-1/3 border-4 border-indigo-600">{{ $nouyaku2 }}</p>
                            
                        




            </div>
            @endif
        </div>
    </div>
    </div>
</x-app-layout>
