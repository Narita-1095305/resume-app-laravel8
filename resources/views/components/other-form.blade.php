<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">その他</h2>
<p class="mb-2 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">他に必要な項目の記入をしてください。</p>
<div class="p-2">
    <label for="commuting_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">通勤時間</label>
    <div class="flex mb-2">
        <x-input id="hour" class="block w-1/4" min="0" max="10" type="number" name="hour" />
        <p class="block font-medium self-center mx-1 mt-1">時間</p>
        <x-input id="minutes" class="block w-1/4" min="0" max="59"  type="number" name="minutes" /> 
        <p class="block font-medium  self-center mx-1 mt-1">分</p>
    </div>
</div>

<div class="p-2">
    <label for="family_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">扶養家族(配偶者を除く)</label>
    <div class="flex mb-2">
        <x-input id="family_num" class="block w-1/4" min="0" max="10" type="number" name="family_num" />
        <p class="block font-medium self-center mx-1 mt-1">人</p>
    </div>
</div>

<div class="p-2">
    <label for="is_spouse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">配偶者</label>
    <div class="flex mb-2">
        <input type="radio" name="is_spouse" value="あり">あり
        <input type="radio" name="is_spouse" value="なし">なし
    </div>
</div>

<div class="p-2">
    <label for="is_spouse_dependent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">配偶者の扶養義務</label>
    <div class="flex mb-2">
        <input type="radio" name="is_spouse_dependent" value="あり">あり
        <input type="radio" name="is_spouse_dependent" value="なし">なし
    </div>
</div>

<div class="p-2">
    <label for="is_international_student" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">あなたは留学生ですか</label>
    <div class="flex mb-2">
        <input type="radio" name="is_international_student" value="はい">はい
        <input type="radio" name="is_international_student" value="いいえ">いいえ
    </div>
</div>

<div class="p-2">
    <label for="current_salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">現在の年収</label>
    <div class="flex mb-2">
        <x-input id="current_salary" class="block w-1/4" min="0" type="number" name="current_salary" />
        <p class="block font-medium self-center mx-1 mt-1">万円</p>
    </div>
</div>

<div class="p-2">
    <label for="expected_salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">希望年収</label>
    <div class="flex mb-2">
        <x-input id="expected_salary" class="block w-1/4" min="0" type="number" name="expected_salary" />
        <p class="block font-medium self-center mx-1 mt-1">万円</p>
    </div>
</div>

<div class="p-2">
    <label for="other" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">その他希望</label>
    <textarea 
        name="other"
        class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
    ></textarea>
</div>

