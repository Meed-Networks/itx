<style>
    #loader-container {
        text-align: center;
        padding: 20px;
        height: 80px;
        vertical-align: center;
    }

    .loader {
        display: inline-block;
        width: 5px;
        height: 20px;
        margin: 0.3px;
        background: #207AC9;
    }

    @keyframes move {
        0% {
            height: 20px;
        }

        50% {
            height: 10px;
        }

        100% {
            height: 20px;
        }
    }

    @keyframes move2 {
        0% {
            height: 10px;
        }

        50% {
            height: 20px;
        }

        100% {
            height: 10px;
        }
    }

    #loader-one {
        animation-name: move;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

    #loader-two {
        animation-name: move2;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

    #loader-three {
        animation-name: move;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

</style>
<div class="absolute h-screen bg-gray-50 w-full top-0 z-50 flex items-center justify-center" id="loader">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <div id="loader-container">
        <div id="loader-one" class="loader"></div>
        <div id="loader-two" class="loader"></div>
        <div id="loader-three" class="loader"></div>
    </div>
</div>

<script>
    // function myFunction() {
    //     myVar = setTimeout(showPage, 3000);
    // }

    function showPage() {
        document.getElementById("loader").classList.add("hidden");
        // document.getElementById("myDiv").style.display = "block";
    }
</script>
