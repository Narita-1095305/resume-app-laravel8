@extends('layouts.common')

@section('content')
    <body>
        <section class="bg-white dark:bg-gray-900">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">自己PR</h2>
                <p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">自己PRの記入をしてください。</p>
                <form action="#" method="POST" class="space-y-8">
                @csrf
                    <div class="p-2">
                        <label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">自己PR</label>
                        <textarea 
                            name="summary"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        ></textarea>
                    </div>

                    <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">次へ</button>
                    </div>
                </form>
            </div>
            </div>
        </section>
    </body>
</html>
@endsection