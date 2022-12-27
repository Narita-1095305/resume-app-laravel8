<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('履歴書作成') }}
        </h2>
    </x-slot>
  <section class="bg-white dark:bg-gray-900">
      <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
          <div class="container mx-auto flex flex-wrap flex-col mt-3">
              <div class="flex mx-auto flex-wrap">
                <a href="#education-form" class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium bg-gray-100 inline-flex items-center leading-none border-gray-200 tracking-wider rounded-t">
                  学歴
                </a>
                <a href="#work-form" class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 hover:text-gray-900 tracking-wider">
                  職歴
                </a>
                <a href="#licence-form" class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 hover:text-gray-900 tracking-wider">
                  資格・免許
                </a>
                <a href="#summary-form" class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 hover:text-gray-900 tracking-wider">
                  自己PR
                </a>
                <a href="#other-form" class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 hover:text-gray-900 tracking-wider">
                  その他
                </a>
              </div>
          </div>
          <div class="min-h-screen flex flex-col items-center pt-2 sm:pt-0">
              <div class="w-full sm:max-w-md mt-1 px-6 overflow-hidden sm:rounded-lg">
              <form action="{{ route('resumes.update', $resume) }}" method="POST" class="space-y-8">
                  @csrf
                  @method('PUT')
                  <div class="w-full sm:max-w-md mt-6 overflow-hidden sm:rounded-lg">
                      <div id="education-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">タイトルを入力</h2>
                        <p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">タイトルの記入をしてください。</p>
                        <x-input type="text" name="title" 
                        class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        value="{{$resume->title}}"
                        required/>
                      </div>
                      <div id="education-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">学歴を入力</h2>
                        <p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">現在までの学歴経験の記入をしてください。</p>
                        @foreach($resume->educations as $education)
                        <div class="border-2 border-black-500 bg-gray-50 p-2 mb-1">
                          <div class="mb-2">
                              <label for="education" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">学歴</label>
                              <label class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                          </div>
                          <div class="flex mb-2">
                              <x-input class="block w-1/3" min="1960" max="2050" type="number" name="education_year[]" value="{{$education->year}}" required/>
                              <p class="block font-medium self-center mx-1 mt-1">年</p>
                              <x-input class="block w-1/4" min="1" max="12"  type="number" name="education_month[]" value="{{$education->month}}" required/> 
                              <p class="block font-medium  self-center mx-1 mt-1">月</p>
                          </div>
                          <x-input type="text" name="education_background[]"
                          class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                          value="{{$education->background}}"
                          required/>
                        </div>
                        @endforeach
                      </div>
                      <div id="work-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">職歴を入力</h2>
                        <p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">現在までの職務経験の記入をしてください。</p>
                        @foreach($resume->works as $work)
                        <div class="border-2 border-black-500 bg-gray-50 p-2 mb-1">
                          <div class="mb-2">
                              <label for="education" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">職歴</label>
                              <label class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                          </div>
                          <div class="flex mb-2">
                              <x-input class="block w-1/3" min="1960" max="2050" type="number" name="work_year[]" value="{{$work->year}}" required/>
                              <p class="block font-medium self-center mx-1 mt-1">年</p>
                              <x-input class="block w-1/4" min="1" max="12"  type="number" name="work_month[]" value="{{$work->month}}" required/> 
                              <p class="block font-medium  self-center mx-1 mt-1">月</p>
                          </div>
                          <x-input type="text" name="work_background[]"
                          class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                          value="{{$work->background}}"
                          required/>
                        </div>
                        @endforeach
                      </div>
                      <div id="licence-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">免許・資格を入力</h2>
                        <p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">取得している免許・資格の記入をしてください。</p>
                        @foreach($resume->licences as $licence)
                        <div class="border-2 border-black-500 bg-gray-50 p-2 mb-1">
                          <div class="mb-2">
                              <label for="education" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">資格・免許</label>
                              <label class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                          </div>
                          <div class="flex mb-2">
                              <x-input class="block w-1/3" min="1960" max="2050" type="number" name="licence_year[]" value="{{$licence->year}}" required/>
                              <p class="block font-medium self-center mx-1 mt-1">年</p>
                              <x-input class="block w-1/4" min="1" max="12"  type="number" name="licence_month[]" value="{{$licence->month}}" required/> 
                              <p class="block font-medium  self-center mx-1 mt-1">月</p>
                          </div>
                          <x-input type="text" name="licence_background[]"
                          class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                          value="{{$licence->background}}"
                          required/>
                        </div>
                        @endforeach                        
                      </div>
                      <div id="summary-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">自己PR</h2>
                        <p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">自己PRの記入をしてください。</p>
                        <div class="p-2">
                            <label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">自己PR</label>
                            <textarea 
                                name="summary"
                                class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            >{{$resume->self_pr}}</textarea>
                        </div>
                      </div>
                      <div id="other-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">その他</h2>
                        <p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">他に必要な項目の記入をしてください。</p>
                        <div class="p-2">
                            <label for="commuting_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">通勤時間</label>
                            <div class="flex mb-2">
                                <x-input id="hour" class="block w-1/4" min="0" max="10" type="number" name="hour" value="{{$resume->commuting_hour}}"/>
                                <p class="block font-medium self-center mx-1 mt-1">時間</p>
                                <x-input id="minutes" class="block w-1/4" min="0" max="59"  type="number" name="minutes" value="{{$resume->commuting_minutes}}"/> 
                                <p class="block font-medium  self-center mx-1 mt-1">分</p>
                            </div>
                        </div>
                        
                        <div class="p-2">
                            <label for="family_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">扶養家族(配偶者を除く)</label>
                            <div class="flex mb-2">
                                <x-input id="family_num" class="block w-1/4" min="0" max="10" type="number" name="family_num" value="{{$resume->spouse_num}}"/>
                                <p class="block font-medium self-center mx-1 mt-1">人</p>
                            </div>
                        </div>
                        
                        <div class="p-2">
                            <label for="is_spouse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">配偶者</label>
                            <div class="flex mb-2">
                                <input type="hidden" name="is_spouse" value="-1">
                                <input type="radio" name="is_spouse" value="1" @if( $resume->is_spouse == 1 )checked @endif>あり
                                <input type="radio" name="is_spouse" value="0" @if( $resume->is_spouse == 0 )checked @endif>なし
                            </div>
                        </div>
                        
                        <div class="p-2">
                            <label for="is_spouse_dependent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">配偶者の扶養義務</label>
                            <div class="flex mb-2">
                                <input type="hidden" name="is_spouse_dependent" value="-1">
                                <input type="radio" name="is_spouse_dependent" value="1" @if( $resume->is_spouse_dependent == 1 )checked @endif>あり
                                <input type="radio" name="is_spouse_dependent" value="0" @if( $resume->is_spouse_dependent == 0 )checked @endif>なし
                            </div>
                        </div>
                        
                        <div class="p-2">
                            <label for="other" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">その他希望</label>
                            <textarea 
                                name="other"
                                class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            >{{$resume->other}}</textarea>
                        </div>                        
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-emerald-500 border-0 py-2 px-8 focus:outline-none hover:bg-emerald-600 rounded text-lg">更新</button>
                        </div>
                      </div>
                  </div>
              </form>
              </div>
          </div>
        </div>
    </section>
  </x-app-layout>