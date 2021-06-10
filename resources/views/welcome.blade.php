<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itxtelecoms</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

    </style>
</head>

<body>
    <div class="static bg-cover bg-center bg-no-repeat m-0 bg-fixed h-screen flex flex-col items-center justify-center"
        id="slider" style="background-image: url('{{ asset('img/img1.jpg') }}')">
        <div class="flex flex-col space-y-2  justify-center items-center fixed top-0 w-full">
            <span class="font-extrabold text-xl text-white mt-5">logo</span>
            <div class="flex justify-center items-center text-white space-x-5 py-5 text-sm font-light ">
                <a href=""
                    class="border-b hover:border-gray-200 border-transparent pb-2 transition duration-300 ease-in-out">Home</a>
                <a href=""
                    class="border-b hover:border-gray-200 border-transparent pb-2 transition duration-300 ease-in-out">Services</a>
                <a href=""
                    class="border-b hover:border-gray-200 border-transparent pb-2 transition duration-300 ease-in-out">Pricing</a>
            </div>
        </div>
        <div
            class="flex flex-col justify-center items-center space-y-5 text-white py-10 bg-gray-800 bg-opacity-25 w-full h-full">
            <div class="flex items-center flex-col justify-center divide-y">
                <p class="font-bold text-3xl pb-2 text-center">
                    Fast and Unlimited Internet
                </p>
                <p class="pt-2 font-semibold text-lg">
                    No Throttling
                </p>
            </div>
            <a href=""
                class="font-bold text-lg border-2 border-purple-900 px-3 py-2 hover:bg-purple-900 transition duration-300 ease-in-out rounded">
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

    </script>
</body>

</html>
