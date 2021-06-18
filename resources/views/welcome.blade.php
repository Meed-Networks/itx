<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itxtelecoms</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

    </style>
</head>

<body class="bg-gray-50">
    <x-nav-bar />
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
    <x-service-item />
    <x-map />
    <div class="h-[500px] static">
        <div class="grid h-full grid-cols-1 gap-5 px-3 py-10 text-white bg-fixed bg-center bg-no-repeat bg-cover md:grid-cols-2"
            style="background-image: url('{{ asset('img/bg1.jpg') }}')">
            <div class="flex flex-col items-start justify-start space-y-2 sm:px-10 place-self-center">
                <p class="text-3xl font-semibold leading-tight">Providing High Speed, Robust and dependable internet
                    services
                    to
                    your door steps.</p>
                <p class="text-xl leading-tight">We specialize in providing dynamic out of the box solutions for
                    all your wireless connectivity needs.</p>
                <a href="#"
                    class="px-3 py-2 text-lg font-bold transition duration-300 ease-in-out border-2 border-purple-900 rounded hover:bg-purple-900">Connect
                </a>
            </div>
            <div class="w-full h-full px-5">
                <div class="hidden w-full h-full bg-center bg-no-repeat bg-cover md:block md:grid-cols-2 sm:px-10"
                    style="background-image: url('{{ asset('img/internet.jpg') }}')">

                </div>
            </div>
        </div>
    </div>
    <x-testimony />
    <div class="bg-purple-900 ">
        <div class="text-white bg-black bg-opacity-75 ">
            <div class="grid grid-cols-1 gap-5 px-3 py-5 sm:grid-cols-3 lg:gap-10">
                <div class="flex flex-col items-start justify-start space-y-2">
                    <span class="text-sm font-bold">OUR PURPOSE AND VALUES</span>
                    <p class="text-sm">
                        Commitment to you as our Customer
                        Creating a Platform from which you can operate efficiently
                    </p>
                </div>
                <div class="flex flex-col items-start justify-start space-y-2">
                    <span class="text-sm font-bold">CONTACT</span>
                    <div class="flex flex-col items-start justify-start space-y-2 text-sm">
                        <a href="tel:+2348153244101"
                            class="flex items-center justify-start space-x-1 hover:text-purple-500">
                            <span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </span>
                            <span>+2348153244101</span>
                        </a>
                        <a href="tel:+234(9)2918976"
                            class="flex items-center justify-start space-x-1 hover:text-purple-500">
                            <span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </span>
                            <span>+234(9)2918976</span>
                        </a>
                        <a href="mailto:info@itxtelecoms.com"
                            class="flex items-center justify-start space-x-1 hover:text-purple-500">
                            <span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </span>
                            <span>info@itxtelecoms.com</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-start space-y-2">
                    <span class="text-sm font-bold uppercase">GET IN TOUCH</span>
                    <form action="mailto:info@itxtelecoms.com" method="POST"
                        class="grid w-full grid-cols-1 gap-2 text-sm lg:grid-cols-2">
                        <div class="flex flex-col items-start justify-center space-y-0.5 ">
                            <label for="firstname" class="text-xs font-bold uppercase">First Name</label>
                            <input type="text" name="FirstName" id="firstName"
                                class="w-full px-2 py-1 text-black focus:outline-none focus:ring focus:border-purple-300">
                        </div>
                        <div class="flex flex-col items-start justify-center space-y-0.5">
                            <label for="surname" class="text-xs font-bold uppercase">Surname</label>
                            <input type="text" name="surname" id="surname"
                                class="w-full px-2 py-1 text-black focus:outline-none focus:ring focus:border-purple-300">
                        </div>
                        <div class="flex flex-col items-start justify-center space-y-0.5 w-full col-span-full">
                            <label for="email" class="text-xs font-bold uppercase ">Email</label>
                            <input type="email" name="email" id="email"
                                class="w-full px-2 py-1 text-black focus:outline-none focus:ring focus:border-purple-300">
                        </div>
                        <div class="flex flex-col items-start justify-center space-y-0.5 col-span-full">
                            <label class="text-xs font-bold uppercase">Message</label>
                            <textarea name="message" id="message" row="10" col="10"
                                class="w-full px-2 py-1 text-black resize-none focus:outline-none focus:ring focus:border-purple-300">

                            </textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex items-center justify-center py-3 border border-t border-gray-500 border-opacity-50">
                <span class="text-center">
                    &copy Copyright Property of ITX Telecoms. All Rights Reserved.
                </span>
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
    </script>
</body>

</html>
