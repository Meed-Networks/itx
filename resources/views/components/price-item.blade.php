<div class="flex flex-col items-start p-5 space-y-5 shadow-md rounded-md col-span-1 hover:bg-indigo-900 hover:-mt-4 hover:mb-4 transition duration-1000 ease-in-out group">
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <span class="text-lg font-bold text-purple-600 group-hover:text-white">{{ $name }}</span>
    <span class="text-purple-700 group-hover:text-white opacity-80 text-sm text-left">
        Pay up to <span class="font-bold">6 Months</span> and get <span class="font-bold">Free Set up</span>
    </span>
    <span class="flex space-x-1 text-purple-900 group-hover:text-white items-center justify-center">
        <span class="font-bold text-2xl">{{ $speed }}Mb </span>
        <span class="text-opacity-40 text-xs font-normal">/ sec</span>
    </span>
    <ul class="flex flex-col space-y-2">
        <li class="flex space-x-2 font-semibold text-sm text-purple-700 group-hover:text-white items-center">
            <span>
                <svg class="w-4 h-4 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </span>
            <span class="text-opacity-75">Unlimited Download</span>
        </li>
        <li class="flex space-x-2 font-semibold text-sm text-purple-700 group-hover:text-white items-center">
            <span>
                <svg class="w-4 h-4 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </span>
            <span class="text-opacity-75">High Speed Broadband</span>
        </li>
        <li class="flex space-x-2 font-semibold text-sm text-purple-700 group-hover:text-white items-center">
            <span>
                <svg class="w-4 h-4 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </span>
            <span class="text-opacity-75">Instant Access</span>
        </li>
        <li class="flex space-x-2 font-semibold text-sm text-purple-700 group-hover:text-white items-center">
            <span>
                <svg class="w-4 h-4 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </span>
            <span class="text-opacity-75">Unlimited</span>
        </li>
        <li class="flex space-x-2 font-semibold text-sm text-purple-700 group-hover:text-white items-center">
            <span>
                <svg class="w-4 h-4 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </span>
            <span class="text-opacity-75">Affordable Data Plan</span>
        </li>
    </ul>
    <span class="flex space-x-1 text-purple-900 group-hover:text-white items-center justify-center">
        <span class="font-bold text-2xl">N {{ $amount }}</span>
        <span class="text-opacity-20 text-xs font-semibold text-purple-400 group-hover:text-white">/ month</span>
    </span>
    <button type="submit" name="" class="font-semibold text-purple-700 group-hover:text-white border border-purple-700 hover:bg-purple-700 hover:text-white px-3 py-2 text-center w-full focus:outline-none">Choose Plan</button>
</div>
