@extends('layouts.common')

@section('content')
<section class="bg-white dark:bg-gray-900">
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="max-w-4xl mx-auto relative" x-data="{ activePage: 1, pages: [1, 2, 3, 4, 5] }">
      <!-- Breadcrumb -->
      <nav
        class="flex justify-evenly mt-6 px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a x-on:click="activePage = 1"
              class="cursor-pointer inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
              学歴
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <a x-on:click="activePage = 2"
                class="cursor-pointer ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                職歴
              </a>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <a x-on:click="activePage = 3"
                class="cursor-pointer ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                資格・免許
              </a>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <a x-on:click="activePage = 4"
                class="cursor-pointer ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                自己PR
              </a>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <a x-on:click="activePage = 5"
                class="cursor-pointer ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                その他
              </a>
            </div>
          </li>
        </ol>
      </nav>
      <section class="bg-white dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-1 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
              <form action="{{ route('form.store') }}" method="POST" class="space-y-8">
                @csrf
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
                  <div x-show="activePage === 1">
                    <x-education-form />
                  </div>
                  <div x-show="activePage === 2">
                    <x-work-form />
                  </div>
                  <div x-show="activePage === 3">
                    <x-licence-form />
                  </div>
                  <div x-show="activePage === 4">
                    <x-summary-form />
                  </div>
                  <div x-show="activePage === 5">
                    <x-other-form />
                  </div>
                  <div class="p-2 w-full flex justify-between">
                    <button type="button" class="text-blue-500 bg-white border-0 py-2 px-8 focus:outline-none rounded text-lg" x-on:click="activePage -= 1" x-bind:disabled="activePage === 1">戻る</button>
                    <button type="button" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" x-on:click="activePage += 1" x-bind:disabled="activePage === 5">次へ</button>
                  </div>
                  <div class="p-2 w-full">
                    <button class="flex mx-auto text-white bg-emerald-500 border-0 py-2 px-8 focus:outline-none hover:bg-emerald-600 rounded text-lg" x-show="activePage === 5">送信</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </section>
    </div>
  </div>
</section>
@endsection