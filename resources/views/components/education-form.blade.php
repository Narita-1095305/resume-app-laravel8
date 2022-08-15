<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">学歴を入力</h2>
<p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">最終学歴までの記入をしてください。</p> 
<div x-data="educationHandler()">
    <template x-for="(field, index) in fields" :key="index">
        <div class="border-2 border-black-500 bg-gray-50 p-2 mb-1">
            <span class="text-red-500" x-show="field.education_year == '' || field.education_month == '' || field.education_background == ''">全て入力してください。</span>
            <div class="flex mb-2">
                <label for="education" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">学歴</label>
                <label class="text-sm font-medium text-gray-900 dark:text-gray-300" x-text="index + 1"></label>
            </div>
            <div class="flex mb-2">
                <x-input x-model="field.education_year" class="block w-1/3" min="1960" max="2050" type="number" name="education_year[]"/>
                <p class="block font-medium self-center mx-1 mt-1">年</p>
                <x-input x-model="field.education_month" class="block w-1/4" min="1" max="12"  type="number" name="education_month[]"/> 
                <p class="block font-medium  self-center mx-1 mt-1">月</p>
            </div>

            <x-input x-model="field.education_background" type="text" name="education_background[]" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"/>
            <div class="p-2 w-full flex flex-row-reverse">
                <button type="button" class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg" @click="removeField(index)">削除</button>
            </div>
        </div>
    </template>

    <div class="p-2 w-full">
        <button type="button" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded font-bold text-3xl" @click="addNewField()">+</button>
    </div>

    <div class="p-2 w-full flex flex-row-reverse">
        <button type="button" class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg" @click="removeAllField()">一括削除</button>
    </div>
</div>