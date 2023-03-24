<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            演奏曲登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <section class="text-gray-600 body-font relative">
                    <form method="post" action="{{ route('pianologs.store') }}">
                        @csrf
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="username" class="leading-7 text-sm text-gray-600">ユーザーネーム</label>
                                  <input type="text" id="username" name="username" value="{{ old('username') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="userid" class="leading-7 text-sm text-gray-600">ユーザID</label>
                                  <input type="text" id="userid" name="userid" value="{{ old('userid') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="song" class="leading-7 text-sm text-gray-600">曲名</label>
                                  <input type="song" id="song" name="song" value="{{ old('song') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="composer" class="leading-7 text-sm text-gray-600">作曲家</label>
                                  <input type="composer" id="composer" name="composer" value="{{ old('composer') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="playingage" class="leading-7 text-sm text-gray-600">演奏時年齢</label><br>
                                  <select name="playingage">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('playingage') ==  1 ? 'selected' : ""}}>0～5歳</option>
                                    <option value="2" {{ old('playingage') ==  2 ? 'selected' : ""}}>6～9歳</option>
                                    <option value="3" {{ old('playingage') ==  3 ? 'selected' : ""}}>10～14歳</option>
                                    <option value="4" {{ old('playingage') ==  4 ? 'selected' : ""}}>15～18歳</option>
                                    <option value="5" {{ old('playingage') ==  5 ? 'selected' : ""}}>19～22歳</option>
                                    <option value="6" {{ old('playingage') ==  6 ? 'selected' : ""}}>23～30歳</option>
                                    <option value="7" {{ old('playingage') ==  7 ? 'selected' : ""}}>31～40歳</option>
                                    <option value="8" {{ old('playingage') ==  8 ? 'selected' : ""}}>41～50歳</option>
                                    <option value="9" {{ old('playingage') ==  9 ? 'selected' : ""}}>51～60歳</option>
                                    <option value="10" {{ old('playingage') ==  10 ? 'selected' : ""}}>61歳～</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="difficulty" class="leading-7 text-sm text-gray-600">体感難易度</label><br>
                                  <select name="difficulty">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('difficulty') ==  1 ? 'selected' : ""}}>1</option>
                                    <option value="2" {{ old('difficulty') ==  2 ? 'selected' : ""}}>2</option>
                                    <option value="3" {{ old('difficulty') ==  3 ? 'selected' : ""}}>3</option>
                                    <option value="4" {{ old('difficulty') ==  4 ? 'selected' : ""}}>4</option>
                                    <option value="5" {{ old('difficulty') ==  5 ? 'selected' : ""}}>5</option>
                                    <option value="6" {{ old('difficulty') ==  6 ? 'selected' : ""}}>6</option>
                                    <option value="7" {{ old('difficulty') ==  7 ? 'selected' : ""}}>7</option>
                                    <option value="8" {{ old('difficulty') ==  8 ? 'selected' : ""}}>8</option>
                                    <option value="9" {{ old('difficulty') ==  9 ? 'selected' : ""}}>9</option>
                                    <option value="10" {{ old('difficulty') ==  10 ? 'selected' : ""}}>10</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="degree" class="leading-7 text-sm text-gray-600">必要度数</label><br>
                                  <select name="degree">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('degree') ==  1 ? 'selected' : ""}}>1</option>
                                    <option value="2" {{ old('degree') ==  2 ? 'selected' : ""}}>2</option>
                                    <option value="3" {{ old('degree') ==  3 ? 'selected' : ""}}>3</option>
                                    <option value="4" {{ old('degree') ==  4 ? 'selected' : ""}}>4</option>
                                    <option value="5" {{ old('degree') ==  5 ? 'selected' : ""}}>5</option>
                                    <option value="6" {{ old('degree') ==  6 ? 'selected' : ""}}>6</option>
                                    <option value="7" {{ old('degree') ==  7 ? 'selected' : ""}}>7</option>
                                    <option value="8" {{ old('degree') ==  8 ? 'selected' : ""}}>8</option>
                                    <option value="9" {{ old('degree') ==  9 ? 'selected' : ""}}>9</option>
                                    <option value="10" {{ old('degree') ==  10 ? 'selected' : ""}}>10</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="playingtimerp" class="leading-7 text-sm text-gray-600">演奏時間（リピート有）</label><br>
                                  <select name="playingtimerp">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('playingtimerp') ==  1 ? 'selected' : ""}}>1分以内</option>
                                    <option value="2" {{ old('playingtimerp') ==  2 ? 'selected' : ""}}>2分以内</option>
                                    <option value="3" {{ old('playingtimerp') ==  3 ? 'selected' : ""}}>3分以内</option>
                                    <option value="4" {{ old('playingtimerp') ==  4 ? 'selected' : ""}}>4分以内</option>
                                    <option value="5" {{ old('playingtimerp') ==  5 ? 'selected' : ""}}>5分以内</option>
                                    <option value="6" {{ old('playingtimerp') ==  6 ? 'selected' : ""}}>6分以内</option>
                                    <option value="7" {{ old('playingtimerp') ==  7 ? 'selected' : ""}}>7分以内</option>
                                    <option value="8" {{ old('playingtimerp') ==  8 ? 'selected' : ""}}>8分以内</option>
                                    <option value="9" {{ old('playingtimerp') ==  9 ? 'selected' : ""}}>9分以内</option>
                                    <option value="10" {{ old('playingtimerp') ==  10 ? 'selected' : ""}}>10分以内</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="playingtimenrp" class="leading-7 text-sm text-gray-600">演奏時間（リピート無）</label><br>
                                  <select name="playingtimenrp">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('playingtimenrp') ==  1 ? 'selected' : ""}}>1分以内</option>
                                    <option value="2" {{ old('playingtimenrp') ==  2 ? 'selected' : ""}}>2分以内</option>
                                    <option value="3" {{ old('playingtimenrp') ==  3 ? 'selected' : ""}}>3分以内</option>
                                    <option value="4" {{ old('playingtimenrp') ==  4 ? 'selected' : ""}}>4分以内</option>
                                    <option value="5" {{ old('playingtimenrp') ==  5 ? 'selected' : ""}}>5分以内</option>
                                    <option value="6" {{ old('playingtimenrp') ==  6 ? 'selected' : ""}}>6分以内</option>
                                    <option value="7" {{ old('playingtimenrp') ==  7 ? 'selected' : ""}}>7分以内</option>
                                    <option value="8" {{ old('playingtimenrp') ==  8 ? 'selected' : ""}}>8分以内</option>
                                    <option value="9" {{ old('playingtimenrp') ==  9 ? 'selected' : ""}}>9分以内</option>
                                    <option value="10" {{ old('playingtimenrp') ==  10 ? 'selected' : ""}}>10分以内</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="score" class="leading-7 text-sm text-gray-600">使用楽譜</label>
                                  <input type="score" id="score" name="score" value="{{ old('score') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="readingperiod" class="leading-7 text-sm text-gray-600">譜読み期間</label><br>
                                  <select name="readingperiod">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('readingperiod') ==  1 ? 'selected' : ""}}>1週間以内</option>
                                    <option value="2" {{ old('readingperiod') ==  2 ? 'selected' : ""}}>2週間以内</option>
                                    <option value="3" {{ old('readingperiod') ==  3 ? 'selected' : ""}}>3週間以内</option>
                                    <option value="4" {{ old('readingperiod') ==  4 ? 'selected' : ""}}>4週間以内</option>
                                    <option value="5" {{ old('readingperiod') ==  5 ? 'selected' : ""}}>5週間以内</option>
                                    <option value="6" {{ old('readingperiod') ==  6 ? 'selected' : ""}}>6週間以内</option>
                                    <option value="7" {{ old('readingperiod') ==  7 ? 'selected' : ""}}>7週間以内</option>
                                    <option value="8" {{ old('readingperiod') ==  8 ? 'selected' : ""}}>8週間以内</option>
                                    <option value="9" {{ old('readingperiod') ==  9 ? 'selected' : ""}}>9週間以内</option>
                                    <option value="10" {{ old('readingperiod') ==  10 ? 'selected' : ""}}>10週間以内</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="exercise" class="leading-7 text-sm text-gray-600">譜読みの進め方</label>
                                  <input type="exercise" id="exercise" name="exercise" value="{{ old('exercise') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="technique" class="leading-7 text-sm text-gray-600">テクニック・勘所</label>
                                  <input type="technique" id="technique" name="technique" value="{{ old('technique') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="recording" class="leading-7 text-sm text-gray-600">録音データ</label>
                                  <input type="recording" id="recording" name="recording" value="{{ old('recording') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="url" class="leading-7 text-sm text-gray-600">情報サイトURL</label>
                                  <input type="url" id="url" name="url" value="{{ old('url') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="soundsource" class="leading-7 text-sm text-gray-600">参考音源</label>
                                  <input type="soundsource" id="soundsource" name="soundsource" value="{{ old('soundsource') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="books" class="leading-7 text-sm text-gray-600">参考書籍</label>
                                  <input type="books" id="books" name="books" value="{{ old('books') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <input type="checkbox" id="caution" name="caution">注意事項に同意
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">演奏曲登録</button>
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
