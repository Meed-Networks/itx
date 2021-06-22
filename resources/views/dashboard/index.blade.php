<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="h-screen bg-purple-900">
        <div class="bg-white dark:bg-black h-full dark:bg-opacity-90">
            <div class="h-full grid grid-cols-6 dark:text-white" x-data="{open: false}">
                <div class="h-full border flex space-y-5 flex-col items-center justify-between py-2" :class="{'hidden': open == true}">
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
                <div class="h-full overflow-scroll  border"
                    :class="{'col-span-5': open == false, 'col-span-6': open == true}">
                    <div class="relative">
                        <div class="sticky top-0">
                            <button x-on:click="open=!open" class="focus:outline-none focus:bg-none">
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
                        </div>
                        <div class="p-5">
                            Body
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio maxime veniam voluptates
                            magnam, iure labore suscipit sit! Adipisci, reprehenderit repellendus iste ad voluptatum,
                            deserunt similique provident sint exercitationem voluptas possimus.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consectetur unde quae
                            optio,
                            doloremque sit asperiores, eaque totam quas delectus maxime deserunt perferendis nihil
                            distinctio sint harum a quibusdam enim. Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            At minus omnis dignissimos in consequuntur consequatur fuga odio, doloribus iste eligendi
                            dolorem repellendus voluptate praesentium ratione similique nobis ducimus, dolore amet.
                            Officia quos corrupti nesciunt amet dolorem nam provident nobis, veniam nostrum expedita
                            aliquam
                            et id numquam consectetur, aspernatur tempora voluptates nisi exercitationem commodi sed
                            temporibus consequuntur? Pariatur consequatur doloribus consequuntur.
                            Accusantium fugit consequatur ex eligendi quidem ad. Aut, beatae error, praesentium nesciunt
                            perferendis iure ex consequuntur saepe tempora culpa consectetur cupiditate corrupti
                            ratione,
                            commodi fugit quod? Ab possimus animi eaque.
                            Voluptatem laborum placeat, tenetur pariatur eius earum tempore deleniti cum atque ad non
                            consequatur, harum odio facere qui? Voluptates hic debitis similique assumenda perferendis
                            pariatur illum ad? Voluptatibus, delectus illum!
                            Omnis architecto possimus recusandae illum quam non esse, aut ratione eaque quod officiis in
                            hic
                            maiores eos optio ex quo consectetur voluptas. Quod eveniet tenetur eius quis atque
                            accusamus
                            debitis.
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
