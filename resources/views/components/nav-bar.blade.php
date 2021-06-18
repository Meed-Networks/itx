<div class="fixed top-0 z-50 w-full" id="navi">
    <div class="flex items-center justify-between px-3 py-2 text-white">
        <div class="text-xl font-bold text-purple-800">
            LOGO
        </div>
        <div class="static" x-data="dropdown()">
            <button class="text-purple-800 hover:outline-none lg:hidden" x-on:click="open">
                <svg class="w-6 h-6" :class="{'hidden': isOpen() == true }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg class="w-6 h-6" :class="{'hidden': isOpen() == false }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>

            </button>
            <ul class="box-content fixed right-0 grid justify-center grid-cols-1 mr-3 font-bold text-purple-900 bg-white bg-opacity-50 border border-b divide-y divide-grey-500 lg:flex lg:divide-none lg:bg-transparent lg:space-x-2 lg:relative divide-opacity-50 lg:border-none"
                :class="{'hidden': isOpen() == false }" x-on:click.away="close">
                <li>
                    <x-nav-items link="{{ route('home') }}" linkName="Home" />
                </li>
                <li>
                    <x-nav-items link="{{ route('service') }}" linkName="Services" />
                </li>
                <li>
                    <x-nav-items link="{{ route('pricing') }}" linkName="pricing" />
                </li>
                <li>
                    <x-nav-items link="{{ route('contact') }}" linkName="Contact Us" />
                </li>
            </ul>
        </div>
    </div>
    <hr class="border-purple-900" width="0%" id="animeHr">
</div>

<script>
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

    window.onscroll = function(e) {
        var navi = document.getElementById("navi")
        navi.classList.add("bg-gray-100")
        navi.classList.add("bg-opacity-50")
        if (window.scrollY == 0) {
            navi.classList.remove("bg-gray-100")
            navi.classList.remove("bg-opacity-50")
        }


        let scrollHeight = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
        ) - 667;

        scrollOffset = window.pageYOffset;

        var animeHr = document.getElementById('animeHr');
        animeHr.style.width = ((scrollOffset / scrollHeight) * 100) + "%";
    }

</script>
