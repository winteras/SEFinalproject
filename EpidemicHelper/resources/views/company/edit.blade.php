<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('Company.update',$company[0]->company_id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"><input name="name" value='{{$company[0]->company_name}}' required> </h2>
                    <div class="flex items-center  mt-4">
                        <x-jet-button class="ml-4">
                            {{ __('確認') }}
                        </x-jet-button>
                    </div>
                    <x-jet-danger-button  class="ml-4" >
                        <a href="{{route('Company.index') }}">
                            {{ __('返回') }}
                        </a>
                        
                    </x-jet-danger-button>
                    <hr>
                </form>

                <!-- <form method="POST" action="{{ route('Company.update',$company[0]->company_id ) }}">
                    @csrf

                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>


                    <div class="flex items-center justify-end mt-4">

                        <x-jet-button class="ml-4">
                            {{ __('確認') }}
                        </x-jet-button>
                        
                    </div>
                    
                </form> -->

                
            </div>
        </div>
    </div>
</x-app-layout>
