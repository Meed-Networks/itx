@extends('layout.main')

@section('main')
    <div class="h-screen w-full bg-cover bg-no-repeat bg-left text-white px-3 sm:px-10 grid grid-cols-1 md:grid-cols-2" id="node1"
        style="background-image: url('{{ asset('img/giphy.gif') }}')">
        <div class="flex flex-col items-start space-y-5 justify-center">
            <span class="font-bold text-2xl w-3/4 md:font-extrabold md:text-4xl sm:w-full" id="head1">
                Providing High Speed, Robust and dependable internet services to your door steps.
            </span>
            <span class="text-sm w-3/4 sm:w-full md:text-lg" id="head2">
                We are a broadband fiber/wireless internet company that specialize in providing and deploying unlimited
                internet
                to your home/office. We have a knack for customer satisfaction.
            </span>
            <a href=""
                class="px-3 py-2 border-2 border-blue-900 hover:bg-blue-900 font-bold rounded-sm focus:outline-none">Subscribe</a>
        </div>
    </div>
    <x-service-item />
    <script>
        var slider = document.getElementById("slider");
        const images = [
            'url("{{ asset('img/img1.jpg') }}")',
            'url("{{ asset('img/img2.jpg') }}")',
            'url("{{ asset('img/img3.png') }}")'
        ]


        // ScrollReveal().reveal(node);
        // var i = 0
        // setInterval(() => {
        //     i++;
        //     slider.style.backgroundImage = images[i];

        //     if (images.length == i) {
        //         i = 0;
        //     }
        // }, 5000);
    </script>
@endsection
