<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            プロフィール編集画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <section class="text-gray-600 body-font relative">
                    <form method="post" action="{{ route('myprofiles.update', ['id' => $myprofile->id ]) }}">
                        @csrf
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="username" class="leading-7 text-sm text-gray-600">ユーザーネーム</label>
                                  <input type="text" id="username" name="username" value="{{ $myprofile->username }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="userid" class="leading-7 text-sm text-gray-600">ユーザID</label>
                                  <input type="text" id="userid" name="userid" value="{{ $myprofile->userid }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                  <input type="email" id="email" name="email" value="{{ $myprofile->email }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="age" class="leading-7 text-sm text-gray-600">年齢</label><br>
                                  <select name="age">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($myprofile->age == 1) selected @endif>0～5歳</option>
                                    <option value="2" @if($myprofile->age == 2) selected @endif>6～9歳</option>
                                    <option value="3" @if($myprofile->age == 3) selected @endif>10～14歳</option>
                                    <option value="4" @if($myprofile->age == 4) selected @endif>15～18歳</option>
                                    <option value="5" @if($myprofile->age == 5) selected @endif>19～22歳</option>
                                    <option value="6" @if($myprofile->age == 6) selected @endif>23～30歳</option>
                                    <option value="7" @if($myprofile->age == 7) selected @endif>31～40歳</option>
                                    <option value="8" @if($myprofile->age == 8) selected @endif>41～50歳</option>
                                    <option value="9" @if($myprofile->age == 9) selected @endif>51～60歳</option>
                                    <option value="10" @if($myprofile->age == 10) selected @endif>61歳～</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label class="leading-7 text-sm text-gray-600">性別</label><br>
                                  <input type="radio" name="gender" value="0" @if($myprofile->gender == 0) checked @endif>男性                         
                                  <input type="radio" name="gender" value="1" @if($myprofile->gender == 1) checked @endif>女性      
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="pstartage" class="leading-7 text-sm text-gray-600">ピアノ開始年齢</label><br>
                                  <select name="pstartage">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($myprofile->pstartage == 1) selected @endif>0～5歳</option>
                                    <option value="2" @if($myprofile->pstartage == 2) selected @endif>6～9歳</option>
                                    <option value="3" @if($myprofile->pstartage == 3) selected @endif>10～14歳</option>
                                    <option value="4" @if($myprofile->pstartage == 4) selected @endif>15～18歳</option>
                                    <option value="5" @if($myprofile->pstartage == 5) selected @endif>19～22歳</option>
                                    <option value="6" @if($myprofile->pstartage == 6) selected @endif>23～30歳</option>
                                    <option value="7" @if($myprofile->pstartage == 7) selected @endif>31～40歳</option>
                                    <option value="8" @if($myprofile->pstartage == 8) selected @endif>41～50歳</option>
                                    <option value="9" @if($myprofile->pstartage == 9) selected @endif>51～60歳</option>
                                    <option value="10" @if($myprofile->pstartage == 10) selected @endif>61歳～</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="totalhistory" class="leading-7 text-sm text-gray-600">通算演奏歴</label><br>
                                  <select name="totalhistory">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($myprofile->totalhistory == 1) selected @endif>～1年</option>
                                    <option value="2" @if($myprofile->totalhistory == 2) selected @endif>1～3年</option>
                                    <option value="3" @if($myprofile->totalhistory == 3) selected @endif>3～5年</option>
                                    <option value="4" @if($myprofile->totalhistory == 4) selected @endif>5～7年</option>
                                    <option value="5" @if($myprofile->totalhistory == 5) selected @endif>7～10年</option>
                                    <option value="6" @if($myprofile->totalhistory == 6) selected @endif>10～15年</option>
                                    <option value="7" @if($myprofile->totalhistory == 7) selected @endif>15～20年</option>
                                    <option value="8" @if($myprofile->totalhistory == 8) selected @endif>20～30年</option>
                                    <option value="9" @if($myprofile->totalhistory == 9) selected @endif>30年～</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="pianohon" class="leading-7 text-sm text-gray-600">ピアノ所持</label><br>
                                  <select name="pianohon">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($myprofile->pianohon == 1) selected @endif>グランドピアノ</option>
                                    <option value="2" @if($myprofile->pianohon == 2) selected @endif>アップライトピアノ</option>
                                    <option value="3" @if($myprofile->pianohon == 3) selected @endif>電子ピアノ</option>
                                    <option value="4" @if($myprofile->pianohon == 4) selected @endif>キーボードその他</option>
                                    <option value="5" @if($myprofile->pianohon == 5) selected @endif>所持なし</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label class="leading-7 text-sm text-gray-600">防音室有無</label><br>
                                  <input type="radio" name="soundproofhon" value="0" @if($myprofile->soundproofhon == 0) checked @endif>有
                                  <input type="radio" name="soundproofhon" value="1" @if($myprofile->soundproofhon == 1) checked @endif>無      
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="community" class="leading-7 text-sm text-gray-600">所属コミュニティ</label>
                                  <input type="text" id="community" name="community" value="{{ $myprofile->community }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
