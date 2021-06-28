<div {{ $attributes->merge(["class" => "flex flex-col items-center justify-center p-5 space-y-3 text-white rounded-md bg-gradient-to-r"]) }}>
    <div class="relative flex flex-col items-center justify-center px-3 space-y-2 border-4 border-purple-200 border-opacity-50 rounded-full w-60 h-60 ">
        <span class="block w-8 h-8 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('img/icons/left-quote.svg') }}')"></span>
        <p class="px-2 font-bold text-center text-xs">
            {{$statement}}
        </p>
        <span class="absolute bottom-0 right-0">
            <svg class="w-16 h-16 text-opacity-50 bg-opacity-50 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                </path>
            </svg>
        </span>
    </div>
    <div class="flex flex-col items-center self-start justify-center">
        <span class="text-lg font-bold">{{ $name }}</span>
        <span class="text-xs font-light">{{ $address }}</span>
    </div>
</div>
