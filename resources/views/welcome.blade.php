@extends('layout.main')

@section('main')
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
                <p class="text-xl leading-tight">
                    We are a broadband fiber/wireless internet company that specialize in providing and deploying unlimited
                    internet to your home/office. We have a knack for customer satisfaction.
                </p>
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
@endsection
