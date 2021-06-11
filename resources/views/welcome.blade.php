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

<body>
    <div class="fixed top-0 w-full" id="navi">
        <div class="flex items-center justify-between px-3 text-white">
            <div class="text-xl font-bold text-green-800">
                LOGO
            </div>
            <div class="static" x-data="dropdown()">
                <button class="text-green-800 hover:outline-none lg:hidden" x-on:click="open">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <ul class="fixed right-0 grid grid-cols-1 mr-2 border border-green-900 divide-y divide-green-900"
                    :class="{'hidden lg:flex lg:border-none  lg:divide-none lg:bg-none lg:space-x-2': isOpen() == false }" x-on:click.away="close">
                    <li>
                        <a href="" class="block px-2 py-1 hover:bg-green-900 lg:hover:border-b lg:px-0 lg:hover:bg-none">Home</a>
                    </li>
                    <li>
                        <a href="" class="block px-2 py-1 hover:bg-green-900 lg:hover:border-b lg:px-0 lg:hover:bg-none">Services</a>
                    </li>
                    <li>
                        <a href="" class="block px-2 py-1 hover:bg-green-900 lg:hover:border-b lg:px-0 lg:bg-none">Contact Us</a>
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
                class="px-3 py-2 text-lg font-bold transition duration-300 ease-in-out border-2 border-green-900 rounded hover:bg-green-900">
                Connect
            </a>
        </div>
    </div>
    <div>
        If your elements are in reverse order (using say flex-row-reverse or flex-col-reverse), use the divide-x-reverse
        or divide-y-reverse utilities to ensure the border is added to the correct side of each element The divide width
        scale inherits its values from the borderWidth scale by default, so if you’d like to customize your values for
        both border width and divide width together, use the theme.borderWidth section of your tailwind.config.js file.
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
            navi.classList.add("bg-gray-800")
            navi.classList.add("bg-opacity-50")
            if (window.scrollY == 0) {
                navi.classList.remove("bg-gray-800")
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
