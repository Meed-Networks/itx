<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itxtelecoms</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

    </style>
</head>

<body class="bg-gray-50">
    <div class="fixed top-0 w-full" id="navi">
        <div class="flex items-center justify-between px-3 py-2 text-white">
            <div class="text-xl font-bold text-purple-800">
                LOGO
            </div>
            <div class="static" x-data="dropdown()">
                <button class="text-purple-800 hover:outline-none lg:hidden" x-on:click="open">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <ul class="fixed right-0 grid items-center justify-center grid-cols-1 mr-3 bg-purple-900 divide-y divide-grey-500 lg:flex lg:divide-none lg:bg-transparent lg:space-x-2 lg:relative divide-opacity-50"
                    :class="{'hidden': isOpen() == false }" x-on:click.away="close">
                    <li>
                        <a href="" class="block px-2 py-1 hover:bg-purple-900 lg:hover:border-b lg:px-0 lg:hover:bg-transparent">Home</a>
                    </li>
                    <li>
                        <a href="" class="block px-2 py-1 hover:bg-purple-900 lg:hover:border-b lg:px-0 lg:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="" class="block px-2 py-1 hover:bg-purple-900 lg:hover:border-b lg:px-0 lg:hover:bg-transparent">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div style="background-image: url('{{ asset('img/img3.png') }}')"
        class="static flex flex-col items-center justify-center h-screen m-0 bg-fixed bg-center bg-no-repeat bg-cover"
        id="slider">
        <div
            class="flex flex-col items-center justify-center w-full h-full py-10 space-y-5 text-white bg-gray-800 bg-opacity-25">
            <div class="grid grid-cols-1 justify-items-center">
                <p class="pb-2 text-3xl font-bold text-center">
                    Fast and Unlimited Internet
                </p>
                <p class="pt-2 text-lg font-semibold text-center">
                    No Throttling
                </p>
            </div>
            <a href=""
                class="px-3 py-2 text-lg font-bold transition duration-300 ease-in-out border-2 border-purple-900 rounded hover:bg-purple-900">
                Connect
            </a>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-5 px-5 py-5 -my-20 sm:grid-cols-2 lg:grid-cols-4 justify-items-center">
        <div class="flex flex-col items-center justify-center w-3/4 px-5 py-10 space-y-3 bg-white shadow-md group">
            <div class="w-20 h-20 bg-center bg-no-repeat bg-cover hover:animate-bounce" style="background-image: url('{{ asset('img/icons/rocket.svg') }}')">

            </div>
            <div class="flex flex-col items-center justify-center h-20 font-semibold sm:hidden group-hover:flex">
                <p class="text-center ">
                    High Speed Internet connection
                </p>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center w-3/4 px-5 py-10 space-y-3 bg-white shadow-md group">
            <div class="w-20 h-20 bg-center bg-no-repeat bg-cover hover:animate-bounce" style="background-image: url('{{ asset('img/icons/bandwidth.svg') }}')">

            </div>
            <div class="flex flex-col items-center justify-center h-20 font-semibold sm:hidden group-hover:flex">
                <p class="text-center ">
                    Unlimited Data
                </p>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center w-3/4 px-5 py-10 space-y-3 bg-white shadow-md group">
            <div class="w-20 h-20 bg-center bg-no-repeat bg-cover hover:animate-bounce" style="background-image: url('{{ asset('img/icons/server.svg') }}')">

            </div>
            <div class="flex flex-col items-center justify-center h-20 font-semibold sm:hidden group-hover:flex">
                <p class="text-center ">
                    Free Installation
                </p>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center w-3/4 px-5 py-10 space-y-3 bg-white shadow-md group">
            <div class="w-20 h-20 bg-center bg-no-repeat bg-cover hover:animate-bounce" style="background-image: url('{{ asset('img/icons/data-flow.svg') }}')">

            </div>
            <div class="flex flex-col items-center justify-center h-20 font-semibold sm:hidden group-hover:flex">
                <p class="text-center ">
                    No Throttling
                </p>
            </div>
        </div>
    </div>
    <script>
        var slider = document.getElementById("slider");
        const images = [
            'url("{{ asset('img/img1.jpg') }}")',
            'url("{{ asset('img/img2.jpg') }}")',
            'url("{{ asset('img/img3.png') }}")'
        ]
        var i = 0
        setInterval(() => {
            i++;
            slider.style.backgroundImage = images[i];

            if (images.length == i) {
                i = 0;
            }
        }, 5000);

        window.onscroll = function(e) {
            var navi = document.getElementById("navi")
            navi.classList.add("bg-gray-100")
            navi.classList.add("bg-opacity-50")
            if (window.scrollY == 0) {
                navi.classList.remove("bg-gray-100")
                navi.classList.remove("bg-opacity-50")
            }
        }

        function dropdown() {
            return {
                show: false,
                open() {
                    this.show = !this.show;
                },
                close() {
                    this.show = false;
                },
                isOpen() {
                    return this.show;
                }
            }
        }

    </script>
</body>

</html>
