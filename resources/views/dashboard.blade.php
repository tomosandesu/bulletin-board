<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ホーム画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="text-right flex">
                <a href="{{ route('post.form') }}" class="flex-1">
                    <x-primary-button class="bg-green-700">
                        新規作成
                    </x-primary-button>
                </a>

                <a href="{{ route('post.index') }}" class="flex-2">
                    <x-primary-button class="bg-blue-700 ml-3">
                        一覧画面表示
                    </x-primary-button>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
