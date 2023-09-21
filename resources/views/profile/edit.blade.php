<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="flex flex-row gap-4 rounded-md bg-gray-200 dark:bg-gray-900">
        <label for="Icon" class="p-2 w-1/6 rounded-l-md bg-gray-500 dark:bg-gray-800 text-gray-100">
            {{__("Icon")}}
        </label>
        <select
            id="Icon"
            name="icon"
            class="p-2 w-5/6 bg-gray-200 dark:bg-gray-900 rounded-r-md">
            <option value="lemon" @if(old('icon')??$rating->icon == 'lemon') selected @endif>Lemon</option>
            <option value="star" @if(old('icon')??$rating->icon == 'star') selected @endif>Star</option>
            <option value="splotch" @if(old('icon')??$rating->icon == 'splotch') selected @endif>Splotch</option>
            <option value="poo" @if(old('icon')??$rating->icon == 'poo') selected @endif>Poo</option>
            <option value="cloud" @if(old('icon')??$rating->icon == 'cloud') selected @endif>Cloud</option>
            <option value="ghost" @if(old('icon')??$rating->icon == 'ghost') selected @endif>Ghost</option>
            <option value="thumbs-up" @if(old('icon')??$rating->icon == 'thumbs-up') selected @endif>Thumbs Up</option>
            <option value="thumbs-down" @if(old('icon')??$rating->icon == 'thumbs-down') selected @endif>Thumbs Down</option>
            <option value="" @if(old('icon')??$rating->icon == '') selected @endif disabled>Select an icon</option>
        </select>
    </div>
    <div class="flex flex-row gap-4 rounded-md bg-gray-200 dark:bg-gray-900">
        <label for="Stars" class="p-2 w-1/6 rounded-l-md bg-gray-500 dark:bg-gray-800 text-gray-100">
            {{__("Stars")}}
        </label>
        <input type="range" min="0" max="10" id="Stars" name="stars" class="p-2 w-5/6 bg-gray-200 dark:bg-gray-900 rounded-r-md"
               value="{{(old('stars') ?? $rating->stars)*2}}"/>

    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>


    <button
        Type="submit"
        class="text-centter p-2 grow
        text-white rounded-r-md
        bg-orange-500 hover:bg-orange-900
        dark:bg-orange-800
        "
    >
</x-app-layout>
