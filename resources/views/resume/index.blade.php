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
					@foreach($resumes as $resume)
					<tr>
            <td class="px-4 py-3">
							<a class="text-blue-500" href="{{ route('resumes.show', $resume) }}">
								{{ $resume->title }}
							</a>
						</td>
            <td class="px-4 py-3">{{ $resume->result }}</td>
            <td class="px-4 py-3">{{ $resume->memo }}</td>
            <td class="px-4 py-3">{{ $resume->created_at }}</td>
            <td class="border-gray-200 px-4 py-3">
                <a>
                  <button class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">
                    編集
                  </button>
                </a>
            </td>
            <td class="border-gray-200 px-4 py-3">
                <a>
                  <button class="bg-blue-500 hover:bg-blue-400 text-white rounded px-1 py-2">
                    削除
                  </button>
                </a>
            </td>
          </tr>
					
					@endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

</x-app-layout>
