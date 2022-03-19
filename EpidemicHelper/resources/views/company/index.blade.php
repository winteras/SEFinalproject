<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($company as $article)

                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ $article->company_name }}
                        </h2>
                    
                        <x-jet-danger-button type="submit" class="ml-2" wire:click="editCompany" wire:loading.attr="disabled">
                            <a href="{{route('Company.edit',  $article->company_id  ) }}">
                                {{ __('Edit') }}
                            </a>
                            
                        </x-jet-danger-button>
                        <hr>    
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
