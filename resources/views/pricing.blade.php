@extends('layout.main')

@section('main')
    <div class="flex flex-col items-center justify-center p-5 mt-10 space-y-5">
        <div class="flex flex-col items-center justify-center space-y-2 text-purple-900">
            <span class="text-xl font-bold ">
                Simple, transparent pricing
            </span>
            <span class="text-sm font-semibold text-purple-500 text-opacity-50">
                No contracts, No suprise fees.
            </span>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <x-price-item />
        </div>
    </div>
@endsection
