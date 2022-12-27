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
              <form action="{{ route('resumes.store') }}" method="POST" class="space-y-8">
                  @csrf
                  <div class="w-full sm:max-w-md mt-6 overflow-hidden sm:rounded-lg">
                      <div id="education-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                          <x-title-form />
                      </div>
                      <div id="education-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                          <x-education-form />
                      </div>
                      <div id="work-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                          <x-work-form />
                      </div>
                      <div id="licence-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                          <x-licence-form />
                      </div>
                      <div id="summary-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                          <x-summary-form />
                      </div>
                      <div id="other-form" class="my-2 px-6 py-4 rounded-lg bg-white drop-shadow-md">
                          <x-other-form />
                          <div class="p-2 w-full">
                              <button class="flex mx-auto text-white bg-emerald-500 border-0 py-2 px-8 focus:outline-none hover:bg-emerald-600 rounded text-lg">プレビュー</button>
                          </div>
                      </div>
                  </div>
              </form>
              </div>
          </div>
        </div>
    </section>
  </x-app-layout>