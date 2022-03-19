<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Hotel
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('hotels.update', $hotel->hotel_id)  }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            
                            <label for="_hotelname" class="block font-medium text-sm text-gray-700">旅館名稱</label>
                            <input type="text" name="_hotelname" id="_hotelname" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('_hotelname', $hotel->hotel_name) }}" required>
                            <label for="_city_name" class="block font-medium text-sm text-gray-700">旅館縣市</label>
                            <select class="form-select" name="_city_name">
                                        @foreach($copts as $opt)
                                            @if($opt->city_id<10) break
                                                @if ($opt->city_id == $hotel->city_id)
                                                    <option selected value={{ $opt->city_id}}>
                                                            {{ $opt->city_name}}
                                                    </option>
                                                @else
                                                <option value={{ $opt->city_id}}>
                                                        {{ $opt->city_name}}
                                                </option>
                                                
                                                @endif
                                            @endif
                                        @endforeach
                            </select>
                            <label for="_hotel_link" class="block font-medium text-sm text-gray-700">旅館連結</label>
                            <input type="url" name="_hotel_link" id="_hotel_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('_hotel_link', $hotel->hotel_link) }}" required>

                                   
                            @error('status')
                                <p class="text-sm text-red-600">{{ $message  }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>