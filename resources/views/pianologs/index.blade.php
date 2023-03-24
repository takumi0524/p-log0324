<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            演奏曲一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    index<br>
                    <a href="{{ route( 'pianologs.create') }}" class="text-blue-500" >演奏曲新規登録</a>
                    <form class="mb-8" method="get" action="{{ route('pianologs.index') }}">
                      <input type="text" name="search" placeholder="検索">
                      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
                    </form>

                    <div class="lg:w-full w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th> --}}
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ユーザネーム</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ユーザID</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">曲名</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作曲家</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏時年齢</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">体感難易度</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">必要度数</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏時間(リピート有)</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏時間(リピート無)</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">使用楽譜</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">譜読み期間</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">譜読みの進め方</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">難所</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">録音データ</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">URL</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">参考音源</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">参考書籍</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">詳細</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pianologs as $pianolog)
                            <tr>
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->id }}</td> --}}
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->username }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->userid }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->song }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->composer }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->playingage }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->difficulty }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->degree }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->playingtimerp }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->playingtimenrp }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->score }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->readingperiod }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->exercise }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->technique }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->recording }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->url }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->soundsource }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->books }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3"><a  class="text-blue-500" href="{{ route('pianologs.show', ['id' => $pianolog->id ] )}}">詳細</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      {{ $pianologs->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
