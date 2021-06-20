@extends('layout.main')

@section('main')
    <div class="px-5 mt-10 py-5" x-data="{tab: 1}">
        <div
            class="flex items-center justify-center flex-col space-y-5 py-5 md:flex-row md:justify-between md:px-10 lg:px-20">
            <div class="flex items-center flex-col justify-center lg:items-start">
                <span class="font-extrabold text-sm md:text-xl text-purple-900">Simple, transparent pricing</span>
                <span class="font-semibold text-xs opacity-50 text-gray-400">No contracts, No suprise fees</span>
            </div>
            <span class="flex border rounded-full text-gray-700 bg-clip-border shadow-sm">
                <button x-on:click="tab = 1" :class="{'bg-purple-700 text-white ' : tab == 1 }"
                    class="px-3 py-2 text-xs font-semibold  rounded-full focus:outline-none">Residential</button>
                <button x-on:click="tab = 2" :class="{'bg-purple-700 text-white ' : tab == 2 }"
                    class="px-3 py-2 text-xs font-semibold  rounded-full focus:outline-none">Corporate</button>
            </span>
        </div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5" :class="{'hidden': tab != 1}">
                <x-price-item />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5" :class="{'hidden': tab != 2}">
                <x-price-item />
            </div>
        </div>
    </div>
@endsection
