<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Flight
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('flights.update', $flight->airplane_id)  }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="airplane_id" class="block font-medium text-sm text-gray-700">航班 : {{$flight->airplane_id}}</label>
                            <label for="destination" class="block font-medium text-sm text-gray-700">目的地</label>
                            <select class="form-select" name="_airport">
                                        @foreach($opts as $opt)
                                            @if ($opt->airport_id == $flight->airport_id)
                                                <option selected value={{ $opt->airport_id}}>
                                                        {{ $opt->airport_name}}
                                                </option>
                                            @else
                                            <option value={{ $opt->airport_id}}>
                                                    {{ $opt->airport_name}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>
                            <label for="_year" class="block font-medium text-sm text-gray-700">年</label>
                            <select class="form-select" name="_year">
                                        @foreach($yopts as $opt)
                                            @if ($opt->year_id == $flight->year_id)
                                                <option selected value={{ $opt->year_id}}>
                                                        {{ $opt->year_id}}
                                                </option>
                                            @else
                                            <option value={{ $opt->year_id}}>
                                                    {{ $opt->year_id}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>
                            <label for="_month" class="block font-medium text-sm text-gray-700">月</label>
                            <select class="form-select" name="_month">
                                        @foreach($mopts as $opt)
                                            @if ($opt->month_id == $flight->month_id)
                                                <option selected value={{ $opt->month_id}}>
                                                        {{ $opt->month_id}}
                                                </option>
                                            @else
                                            <option value={{ $opt->month_id}}>
                                                    {{ $opt->month_id}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>
                            <label for="_day" class="block font-medium text-sm text-gray-700">日</label>
                            <select class="form-select" name="_day">
                                        @foreach($dopts as $opt)
                                            @if ($opt->day_id == $flight->day_id)
                                                <option selected value={{ $opt->day_id}}>
                                                        {{ $opt->day_id}}
                                                </option>
                                            @else
                                            <option value={{ $opt->day_id}}>
                                                    {{ $opt->day_id}}
                                            </option>
                                            @endif
                                        @endforeach
                            </select>
                            <label for="airplane_time" class="block font-medium text-sm text-gray-700">時間</label>
                            <input type="time" name="airplane_time" id="airplane_time" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('airplane_time', $flight->time_id) }}" required>

                            <label for="airplane_status" class="block font-medium text-sm text-gray-700">狀態</label>
                            <select class="form-select" name="airplane_status">
                                        <option selected value='出發DEPARTED'>
                                        出發DEPARTED
                                        </option>
                                        <option  value='已到ARRIVED'>
                                        已到ARRIVED
                                        </option>
                                        <option  value='準時ON TIME'>
                                        準時ON TIME
                                        </option>
                                        <option  value='客機載貨Cargo Only'>
                                        客機載貨Cargo Only
                                        </option>
                            </select>
                                   
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