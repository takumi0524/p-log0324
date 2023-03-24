<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            演奏曲編集画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <section class="text-gray-600 body-font relative">
                    <form method="post" action="{{ route('mypianologs.update', ['id' => $mypianolog->id ]) }}">
                        @csrf
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="username" class="leading-7 text-sm text-gray-600">ユーザーネーム</label>
                                  <input type="text" id="username" name="username" value="{{ $mypianolog->username }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="userid" class="leading-7 text-sm text-gray-600">ユーザID</label>
                                  <input type="text" id="userid" name="userid" value="{{ $mypianolog->userid }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="song" class="leading-7 text-sm text-gray-600">曲名</label>
                                  <input type="song" id="song" name="song" value="{{ $mypianolog->song }}"class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="composer" class="leading-7 text-sm text-gray-600">作曲家</label>
                                  <input type="composer" id="composer" name="composer" value="{{ $mypianolog->composer }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="playingage" class="leading-7 text-sm text-gray-600">演奏時年齢</label><br>
                                  <select name="playingage">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->playingage == 1) selected @endif>0～5歳</option>
                                    <option value="2" @if($mypianolog->playingage == 2) selected @endif>6～9歳</option>
                                    <option value="3" @if($mypianolog->playingage == 3) selected @endif>10～14歳</option>
                                    <option value="4" @if($mypianolog->playingage == 4) selected @endif>15～18歳</option>
                                    <option value="5" @if($mypianolog->playingage == 5) selected @endif>19～22歳</option>
                                    <option value="6" @if($mypianolog->playingage == 6) selected @endif>23～30歳</option>
                                    <option value="7" @if($mypianolog->playingage == 7) selected @endif>31～40歳</option>
                                    <option value="8" @if($mypianolog->playingage == 8) selected @endif>41～50歳</option>
                                    <option value="9" @if($mypianolog->playingage == 9) selected @endif>51～60歳</option>
                                    <option value="10" @if($mypianolog->playingage == 10) selected @endif>61歳～</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="difficulty" class="leading-7 text-sm text-gray-600">体感難易度</label><br>
                                  <select name="difficulty">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->difficulty == 1) selected @endif>1</option>
                                    <option value="2" @if($mypianolog->difficulty == 2) selected @endif>2</option>
                                    <option value="3" @if($mypianolog->difficulty == 3) selected @endif>3</option>
                                    <option value="4" @if($mypianolog->difficulty == 4) selected @endif>4</option>
                                    <option value="5" @if($mypianolog->difficulty == 5) selected @endif>5</option>
                                    <option value="6" @if($mypianolog->difficulty == 6) selected @endif>6</option>
                                    <option value="7" @if($mypianolog->difficulty == 7) selected @endif>7</option>
                                    <option value="8" @if($mypianolog->difficulty == 8) selected @endif>8</option>
                                    <option value="9" @if($mypianolog->difficulty == 9) selected @endif>9</option>
                                    <option value="10" @if($mypianolog->difficulty == 10) selected @endif>10</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="degree" class="leading-7 text-sm text-gray-600">必要度数</label><br>
                                  <select name="degree">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->degree == 1) selected @endif>1</option>
                                    <option value="2" @if($mypianolog->degree == 2) selected @endif>2</option>
                                    <option value="3" @if($mypianolog->degree == 3) selected @endif>3</option>
                                    <option value="4" @if($mypianolog->degree == 4) selected @endif>4</option>
                                    <option value="5" @if($mypianolog->degree == 5) selected @endif>5</option>
                                    <option value="6" @if($mypianolog->degree == 6) selected @endif>6</option>
                                    <option value="7" @if($mypianolog->degree == 7) selected @endif>7</option>
                                    <option value="8" @if($mypianolog->degree == 8) selected @endif>8</option>
                                    <option value="9" @if($mypianolog->degree == 9) selected @endif>9</option>
                                    <option value="10" @if($mypianolog->degree == 10) selected @endif>10</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="playingtimerp" class="leading-7 text-sm text-gray-600">演奏時間（リピート有）</label><br>
                                  <select name="playingtimerp">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->playingtimerp == 1) selected @endif>1分以内</option>
                                    <option value="2" @if($mypianolog->playingtimerp == 2) selected @endif>2分以内</option>
                                    <option value="3" @if($mypianolog->playingtimerp == 3) selected @endif>3分以内</option>
                                    <option value="4" @if($mypianolog->playingtimerp == 4) selected @endif>4分以内</option>
                                    <option value="5" @if($mypianolog->playingtimerp == 5) selected @endif>5分以内</option>
                                    <option value="6" @if($mypianolog->playingtimerp == 6) selected @endif>6分以内</option>
                                    <option value="7" @if($mypianolog->playingtimerp == 7) selected @endif>7分以内</option>
                                    <option value="8" @if($mypianolog->playingtimerp == 8) selected @endif>8分以内</option>
                                    <option value="9" @if($mypianolog->playingtimerp == 9) selected @endif>9分以内</option>
                                    <option value="10" @if($mypianolog->playingtimerp == 10) selected @endif>10分以内</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="playingtimenrp" class="leading-7 text-sm text-gray-600">演奏時間（リピート無）</label><br>
                                  <select name="playingtimenrp">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->playingtimenrp == 1) selected @endif>1分以内</option>
                                    <option value="2" @if($mypianolog->playingtimenrp == 2) selected @endif>2分以内</option>
                                    <option value="3" @if($mypianolog->playingtimenrp == 3) selected @endif>3分以内</option>
                                    <option value="4" @if($mypianolog->playingtimenrp == 4) selected @endif>4分以内</option>
                                    <option value="5" @if($mypianolog->playingtimenrp == 5) selected @endif>5分以内</option>
                                    <option value="6" @if($mypianolog->playingtimenrp == 6) selected @endif>6分以内</option>
                                    <option value="7" @if($mypianolog->playingtimenrp == 7) selected @endif>7分以内</option>
                                    <option value="8" @if($mypianolog->playingtimenrp == 8) selected @endif>8分以内</option>
                                    <option value="9" @if($mypianolog->playingtimenrp == 9) selected @endif>9分以内</option>
                                    <option value="10" @if($mypianolog->playingtimenrp == 10) selected @endif>10分以内</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="score" class="leading-7 text-sm text-gray-600">使用楽譜</label>
                                  <input type="score" id="score" name="score" value="{{ $mypianolog->score }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="readingperiod" class="leading-7 text-sm text-gray-600">譜読み期間</label><br>
                                  <select name="readingperiod">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->readingperiod == 1) selected @endif>1週間以内</option>
                                    <option value="2" @if($mypianolog->readingperiod == 2) selected @endif>2週間以内</option>
                                    <option value="3" @if($mypianolog->readingperiod == 3) selected @endif>3週間以内</option>
                                    <option value="4" @if($mypianolog->readingperiod == 4) selected @endif>4週間以内</option>
                                    <option value="5" @if($mypianolog->readingperiod == 5) selected @endif>5週間以内</option>
                                    <option value="6" @if($mypianolog->readingperiod == 6) selected @endif>6週間以内</option>
                                    <option value="7" @if($mypianolog->readingperiod == 7) selected @endif>7週間以内</option>
                                    <option value="8" @if($mypianolog->readingperiod == 8) selected @endif>8週間以内</option>
                                    <option value="9" @if($mypianolog->readingperiod == 9) selected @endif>9週間以内</option>
                                    <option value="10" @if($mypianolog->readingperiod == 10) selected @endif>10週間以内</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="exercise" class="leading-7 text-sm text-gray-600">譜読みの進め方</label>
                                  <input type="exercise" id="exercise" name="exercise" value="{{ $mypianolog->exercise }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="technique" class="leading-7 text-sm text-gray-600">テクニック・勘所</label>
                                  <input type="technique" id="technique" name="technique" value="{{ $mypianolog->technique }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="recording" class="leading-7 text-sm text-gray-600">録音データ</label>
                                  <input type="recording" id="recording" name="recording" value="{{ $mypianolog->recording }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="url" class="leading-7 text-sm text-gray-600">情報サイトURL</label>
                                  <input type="url" id="url" name="url" value="{{ $mypianolog->url }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="soundsource" class="leading-7 text-sm text-gray-600">参考音源</label>
                                  <input type="soundsource" id="soundsource" name="soundsource" value="{{ $mypianolog->soundsource }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="books" class="leading-7 text-sm text-gray-600">参考書籍</label>
                                  <input type="books" id="books" name="books" value="{{ $mypianolog->books }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>


                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新</button>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </form>
                      </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
