<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('履歴書一覧') }}
        </h2>
    </x-slot>


<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">履歴書一覧</h1>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">提出会社</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">結果</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メモ</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日時</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">編集</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">削除</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-3">SONY</td>
            <td class="px-4 py-3">二次面接通過</td>
            <td class="px-4 py-3"></td>
            <td class="px-4 py-3">2022/11/04</td>
            <td class="border-gray-200 px-4 py-3">
                <a class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">編集</a>
            </td>
            <td class="border-gray-200 px-4 py-3">
                <a class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">削除</a>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">任天堂</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">書類選考</td>
            <td class="border-t-2 border-gray-200 px-4 py-3"></td>
            <td class="border-t-2 border-gray-200 px-4 py-3">2022/11/09</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">
                <a class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">編集</a>
            </td>
            <td class="border-t-2 border-gray-200 px-4 py-3">
                <a class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">削除</a>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">トヨタ</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">書類選考</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">第三希望</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">2022/11/20</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">
                <a class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">編集</a>
            </td>
            <td class="border-t-2 border-gray-200 px-4 py-3">
                <a class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">削除</a>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">NEC</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">最終面接</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3"></td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">2022/11/30</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">
                <a class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">編集</a>
            </td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">
                <a class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">削除</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

</x-app-layout>
