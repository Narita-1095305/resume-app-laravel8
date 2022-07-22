<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="mt-6">
                <p class="font-medium text-xl">プロフィール登録</p>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- 名前 -->
            <div>
                <div class="flex">
                    <x-label for="name" :value="__('名前')" />
                    <x-required-mark :value="__('必須')"/>
                </div>
                
                <div class="flex">
                    <x-input id="family_name" class="block mt-1 w-5/12 mr-2" type="text" name="family_name" :value="old('family_name')" required autofocus/>
                    <x-input id="first_name" class="block mt-1 w-5/12" type="text" name="first_name" :value="old('first_name')" required />
                </div>
            </div>

            <!-- ふりがな -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="furigana_name" :value="__('ふりがな')" />
                    <x-required-mark :value="__('必須')"/>
                </div>
                
                <div class="flex">
                    <x-input id="family_furigana" class="block mt-1 w-5/12 mr-2" type="text" name="family_furigana" :value="old('family_furigana')" required />
                    <x-input id="first_furigana" class="block mt-1 w-5/12" type="text" name="first_furigana" :value="old('first_furigana')" required />
                </div>
            </div>

            <!-- メールアドレス -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="email" :value="__('メールアドレス')" />
                    <x-required-mark :value="__('必須')"/>
                </div>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- パスワード -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="password" :value="__('パスワード')" />
                    <x-required-mark :value="__('必須')"/>
                </div>


                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- パスワード確認 -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="password_confirmation" :value="__('パスワード確認')" />
                    <x-required-mark :value="__('必須')"/>
                </div>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- 生年月日 -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="date_of_birth" :value="__('生年月日')" />
                    <x-required-mark :value="__('必須')"/>
                </div>
                <div class="flex">
                    <x-input id="birth_year" class="block mt-1 w-1/3" type="number" name="birth_year" :value="old('birth_year')" required />
                    <p class="block font-medium self-center mx-1 mt-1">年</p>
                    <x-input id="birth_month" class="block mt-1 w-1/4" type="number" name="birth_month" :value="old('birth_month')" required /> 
                    <p class="block font-medium  self-center mx-1 mt-1">月</p>
                    <x-input id="birth_day" class="block mt-1 w-1/4" type="number" name="birth_day" :value="old('birth_day')" required /> 
                    <p class="block font-medium self-center mx-1 mt-1">日</p>
                </div>
            </div>

            <!-- 性別 -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="gender" :value="__('性別')" />
                    <x-required-mark :value="__('必須')"/>
                </div>
                <x-select-box class="mt-1">
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </x-select-box>
            </div>

            <!-- 郵便番号 -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="zip_code" :value="__('郵便番号')" />
                    <x-required-mark :value="__('必須')"/>
                </div>
                <div class="flex">
                    <x-input id="zip_code" class="block mt-1 w-1/3" type="number" name="zip_code" :value="old('zip_code')" required />
                    <x-button class="ml-4 self-center mt-1">住所検索</x-button>
                </div>
            </div>

            <!-- 都道府県・市区町村・番地 -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="address" :value="__('都道府県・市区町村・番地')" />
                    <x-required-mark :value="__('必須')"/>
                </div>
                <div class="flex">
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                </div>
            </div>

            <!-- マンション・建物名 -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="building" :value="__('マンション・建物名')" />
                </div>
                <div class="flex">
                    <x-input id="building" class="block mt-1 w-full" type="text" name="building" :value="old('building')" />
                </div>
            </div>

            <!-- 住所ふりがな -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="address_furigana" :value="__('住所ふりがな')" />
                    <x-required-mark :value="__('必須')"/>
                </div>
                <div class="flex">
                    <x-input id="address_furigana" class="block mt-1 w-full" type="text" name="address_furigana" :value="old('address_furigana')" required />
                </div>
            </div>

            <!-- 電話番号 -->
            <div class="mt-4">
                <div class="flex">
                    <x-label for="telephone_number" :value="__('電話番号(ハイフン必須)')" />
                    <x-required-mark :value="__('必須')"/>
                </div>
                <div class="flex">
                    <x-input id="telephone_number" class="block mt-1 w-1/2" type="tel" name="telephone_number" :value="old('telephone_number')" required pattern="\d{2,4}-?\d{2,4}-?\d{3,4}"/>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('登録済みの場合') }}
                </a>

                <x-button class="ml-4">
                    {{ __('登録') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
