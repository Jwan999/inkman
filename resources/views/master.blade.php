<!doctype html>
<html lang="3">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/stylesheet.css" rel="stylesheet">
    <link href="/css/neon.css" rel="stylesheet">
    <link href="/css/sketches.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    {{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    {{--    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500&display=swap" rel="stylesheet">--}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" href="/images/inkman2.png">

    <title>inkman Studio</title>
    <style>
        body {
            /*border-image: url('/images/Left.png') 30 stretch;*/
            /*font-family: 'Barlow Condensed', sans-serif;*/
            font-family: 'Rajdhani', sans-serif;
            overflow-x: hidden;
            height: 100%;
        }

        .text-2 {
            font-size: 2.50rem; /* 36px */
            line-height: 2.5rem; /* 40px */
        }

        .w-100 {
            width: 40rem
        }

        .letter-spacing {
            letter-spacing: 10px;
        }

        .line-border{
            background: url('/images/Left.svg') right top repeat-y, url('/images/Right.svg') left top repeat-y;
            background-size: 4rem, 4rem, auto;
            /*height: 150vh;*/
            /*background-attachment: fixed;*/

        }

        .left-border {
            background-image: url('/images/Left.svg');
            /*bg-re*/
            background-repeat: repeat-y;
            height: 150vh;
            /*background-attachment: fixed;*/
            background-position: right;
            /*opacity: 0.1;*/
            /*float: left;*/
            /*width:1*/
            /*position: absolute;*/
            /*top: 0px;*/
            /*left: 0px;*/
        }

        .right-border {
            background-image: url('/images/Right.svg');
            /*bg-re*/
            background-repeat: repeat-y;
            height: 150vh;
            /*background-attachment: fixed;*/
            background-position: left;
            /*opacity: 0.1;*/
            /*float: right;*/
            /*width:1*/
            /*position: absolute;*/
            /*top: 0px;*/
            /*left: 0px;*/
        }

        /*.right-border {*/
        /*    background-image: url('/images/Right.svg');*/
        /*    background-repeat: repeat-y;*/
        /*    height: 150vh;*/
        /*    !*float: right;*!*/
        /*    background-attachment: fixed;*/
        /*    background-position: right;*/

        /*}*/
    </style>

</head>
<body class="bg-black text-white max-w-full">
{{--<div class="relative">--}}

{{--    <div class="left-border absolute top-0 left-0 z-10"></div>--}}
{{--    <div class="right-border absolute top-0 right-0 z-10"></div>--}}

    <div id="app" class="line-border">

        @yield('content')

    </div>
{{--</div>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{--@stack('scripts')--}}

<script>
    let vue = new Vue({
        el: '#app',
        data: {
            name: '',
            image: '',
            price: '',
            hours: '',
            tattoos: [],
            showForm: false,
            navbar: false
        },
        methods: {
            getTattoos() {
                axios.get('/api/tattoos').then(response => {
                    console.log(response.data)
                    this.tattoos = response.data
                })
            }
        }, created() {
            AOS.init()
        },
        mounted() {
            AOS.init()
            this.getTattoos()
        }
    })
</script>

<script>
    const panels = document.querySelectorAll(".panel");

    function toggleOpen() {
        this.classList.toggle("open");
    }

    function toggleActive(event) {
        if (event.propertyName.includes("flex")) {
            this.classList.toggle("open-active");
        }
    }

    panels.forEach(panel => {
        panel.addEventListener("click", toggleOpen);
    });

    panels.forEach(panel => {
        panel.addEventListener("transitionend", toggleActive);
    });

</script>
<script>
    const container = document.querySelector('.container');
    document.querySelector('.slider').addEventListener('input', (e) => {
        container.style.setProperty('--position', `${e.target.value}%`);
    })
</script>

</body>
</html>
