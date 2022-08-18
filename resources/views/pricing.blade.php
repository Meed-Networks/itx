@extends('layout.main')

@section('main')
    <div class="px-5 mt-10 py-5 flex flex-col space-y-5" x-data="{tab: 1}">
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
        <div class="px-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 lg:px-20" :class="{'hidden': tab != 1}">
                <x-price-item speed="2" amount="10,750" name="Freedom Package" freeSetup="0" />
                <x-price-item speed="4" amount="16,200" name="Family Mini" freeSetup="1" />
                <x-price-item speed="6" amount="25,500" name="Family Max" freeSetup="1" />
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10" :class="{'hidden': tab != 2}">
                <x-price-item speed="2" amount="32,250" name="Dedicated Package" freeSetup="1" />
                <x-price-item speed="3" amount="50,000" name="Dedicated Package" freeSetup="1" />
                <x-price-item speed="4" amount="70,250" name="Dedicated Package" freeSetup="1" />
                <x-price-item speed="6" amount="98,000" name="Dedicated Package" freeSetup="1" />
                <x-price-item speed="8" amount="115,000" name="Dedicated Package" freeSetup="1" />
                <x-price-item speed="10" amount="122,500" name="Dedicated Package" freeSetup="1" />
            </div>
        </div>
    </div>
@endsection
