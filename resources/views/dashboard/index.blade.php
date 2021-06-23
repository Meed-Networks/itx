<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer="defer"></script>
</head>

<body>
    <div class="h-screen bg-purple-900">
        <div class="bg-white dark:bg-black h-full dark:bg-opacity-90">
            <div class="h-full grid grid-cols-6 dark:text-white md:grid-cols-10 lg:grid-cols-12" x-data="{open: true}">
                <div class="h-full flex space-y-5 flex-col items-center justify-between py-2 "
                    :class="{'hidden md:flex': open == true}">
                    <div class="flex space-y-5 flex-col items-center justify-start">
                        <span>
                            Logo
                        </span>
                        <ul class="flex flex-col space-y-3 items-center">
                            <li>
                                <x-dashboard.nav />
                            </li>
                            <li>
                                <x-dashboard.nav />
                            </li>
                            <li>
                                <x-dashboard.nav />
                            </li>
                            <li>
                                <x-dashboard.nav />
                            </li>
                        </ul>
                    </div>
                    <a href="#">
                        <x-dashboard.nav />
                    </a>
                </div>
                <div class="h-full overflow-y-scroll " :class="{'col-span-5': open == false, 'col-span-6 md:col-span-9 lg:col-span-11': open == true}">
                    <div class="relative flex flex-col space-y-5">
                        <div class="sticky top-0 py-2 px-10 flex items-center">
                            <button x-on:click="open=!open" class="focus:outline-none focus:bg-none md:hidden">
                                <span class="" :class="{'hidden': open == false}">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>
                                </span>
                                <span class="" :class="{'hidden': open == true}">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </span>
                            </button>
                            <span>
                                Notification
                            </span>
                        </div>
                        <div class="px-3">
                            <div class="grid grid-cols-1 px-5 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                                <div class="relative bg-white bg-opacity-10 p-5 rounded-lg flex space-x-5 items-center">
                                    <span>
                                        <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                            </path>
                                        </svg>
                                    </span>
                                    <div class="flex flex-col">
                                        <span class="text-opacity-25 text-gray-50">
                                            Users
                                        </span>
                                        <span class="font-bold text-2xl">
                                            10k
                                        </span>
                                        <span class="text-opacity-25 text-gray-50">
                                            0.05% unique
                                        </span>
                                    </div>
                                </div>

                                <div class="relative bg-white bg-opacity-10 p-5 rounded-lg flex space-x-5 items-center">
                                    <span>
                                        <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                            </path>
                                        </svg>
                                    </span>
                                    <div class="flex flex-col">
                                        <span class="text-opacity-25 text-gray-50">
                                            Users
                                        </span>
                                        <span class="font-bold text-2xl">
                                            10k
                                        </span>
                                        <span class="text-opacity-25 text-gray-50">
                                            0.05% unique
                                        </span>
                                    </div>
                                </div>

                                <div class="relative bg-white bg-opacity-10 p-5 rounded-lg flex space-x-5 items-center">
                                    <span>
                                        <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                            </path>
                                        </svg>
                                    </span>
                                    <div class="flex flex-col">
                                        <span class="text-opacity-25 text-gray-50">
                                            Users
                                        </span>
                                        <span class="font-bold text-2xl">
                                            10k
                                        </span>
                                        <span class="text-opacity-25 text-gray-50">
                                            0.05% unique
                                        </span>
                                    </div>
                                </div>

                                <div class="relative bg-white bg-opacity-10 p-5 rounded-lg flex space-x-5 items-center">
                                    <span>
                                        <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                            </path>
                                        </svg>
                                    </span>
                                    <div class="flex flex-col">
                                        <span class="text-opacity-25 text-gray-50">
                                            Users
                                        </span>
                                        <span class="font-bold text-2xl">
                                            10k
                                        </span>
                                        <span class="text-opacity-25 text-gray-50">
                                            0.05% unique
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }

        // Whenever the user explicitly chooses light mode
        localStorage.theme = 'light'

        // Whenever the user explicitly chooses dark mode
        localStorage.theme = 'dark'

        // Whenever the user explicitly chooses to respect the OS preference
        localStorage.removeItem('theme')
    </script>
</body>

</html>
