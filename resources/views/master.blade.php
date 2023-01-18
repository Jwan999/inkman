<!doctype html>
<html lang="3">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

        .tips-img {
            background-image: url("images/tipsForTattoo.png");
            width: 100%;

        }

        html, body {
            position: relative;
            overflow-x: hidden;
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

        .line-border {
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

        .japan-font {
            font-family: 'japan', Arial, sans-serif;
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


        * {
            box-sizing: border-box;
        }

        body .cybr-btn + .cybr-btn {
            margin-top: 2rem;
        }

        .cybr-btn {
            /*   --primary: hsl(var(--primary-hue), 85%, calc(var(--primary-lightness, 50) * 1%)); */
            --primary: #B01C2C;
            --shadow-primary: #ffffff;
            /*   --shadow-primary: hsl(var(--shadow-primary-hue), 90%, 50%); */
            --primary-hue: 0;
            --primary-lightness: 50;
            --color: white;
            --font-size: 20px;
            --shadow-primary-hue: 180;
            --label-size: 9px;
            --shadow-secondary-hue: 60;
            --shadow-secondary: black;
            /*   --shadow-secondary: hsl(var(--shadow-secondary-hue), 90%, 60%); */
            --clip: polygon(0 0, 100% 0, 100% 100%, 95% 100%, 95% 90%, 85% 90%, 85% 100%, 8% 100%, 0 70%);
            --border: 4px;
            --shimmy-distance: 5;
            --clip-one: polygon(0 2%, 100% 2%, 100% 95%, 95% 95%, 95% 90%, 85% 90%, 85% 95%, 8% 95%, 0 70%);
            --clip-two: polygon(0 78%, 100% 78%, 100% 100%, 95% 100%, 95% 90%, 85% 90%, 85% 100%, 8% 100%, 0 78%);
            --clip-three: polygon(0 44%, 100% 44%, 100% 54%, 95% 54%, 95% 54%, 85% 54%, 85% 54%, 8% 54%, 0 54%);
            --clip-four: polygon(0 0, 100% 0, 100% 0, 95% 0, 95% 0, 85% 0, 85% 0, 8% 0, 0 0);
            --clip-five: polygon(0 0, 100% 0, 100% 0, 95% 0, 95% 0, 85% 0, 85% 0, 8% 0, 0 0);
            --clip-six: polygon(0 40%, 100% 40%, 100% 85%, 95% 85%, 95% 85%, 85% 85%, 85% 85%, 8% 85%, 0 70%);
            --clip-seven: polygon(0 63%, 100% 63%, 100% 80%, 95% 80%, 95% 80%, 85% 80%, 85% 80%, 8% 80%, 0 70%);
            /*font-family: 'Cyber', sans-serif;*/
            color: var(--color);
            cursor: pointer;
            background: transparent;
            text-transform: uppercase;
            font-size: var(--font-size);
            outline: transparent;
            letter-spacing: 2px;
            position: relative;
            font-weight: 700;
            border: 0;
            min-width: 300px;
            height: 150px;
            width: 100%;
            line-height: 65px;
            transition: background 0.2s;
        }

        .cybr-btn:hover {
            --primary: black;
            --shadow-primary: #B01C2C;
        }

        .monthly-text {
            color: black;
        }

        .monthly-text:hover {
            color: #B01C2C;
        }

        .cybr-btn:active {
            --primary: black;
        }

        .cybr-btn:after,
        .cybr-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            clip-path: var(--clip);
            z-index: -1;
        }

        .cybr-btn:before {
            background: var(--shadow-primary);
            transform: translate(var(--border), 0);
        }

        .cybr-btn:after {
            background: var(--primary);
            color: var(--shadow-primary);
        }

        .cybr-btn__tag {
            position: absolute;
            padding: 1px 4px;
            letter-spacing: 1px;
            line-height: 1;
            bottom: 1%;
            right: 5%;
            font-weight: bold;
            color: white;
            font-size: var(--label-size);
        }

        .cybr-btn__glitch {
            position: absolute;
            top: calc(var(--border) * -1);
            left: calc(var(--border) * -1);
            right: calc(var(--border) * -1);
            bottom: calc(var(--border) * -1);
            background: var(--shadow-primary);
            text-shadow: 2px 2px var(--shadow-primary), -2px -2px var(--shadow-secondary);
            clip-path: var(--clip);
            animation: glitch 2s infinite;
            display: none;
        }

        .cybr-btn:hover .cybr-btn__glitch {
            display: block;
        }

        .cybr-btn__glitch:before {
            content: '';
            position: absolute;
            top: calc(var(--border) * 1);
            right: calc(var(--border) * 1);
            bottom: calc(var(--border) * 1);
            left: calc(var(--border) * 1);
            clip-path: var(--clip);
            background: var(--primary);
            z-index: -1;
        }

        @keyframes glitch {
            0% {
                clip-path: var(--clip-one);
            }
            2%, 8% {
                clip-path: var(--clip-two);
                transform: translate(calc(var(--shimmy-distance) * -1%), 0);
            }
            6% {
                clip-path: var(--clip-two);
                transform: translate(calc(var(--shimmy-distance) * 1%), 0);
            }
            9% {
                clip-path: var(--clip-two);
                transform: translate(0, 0);
            }
            10% {
                clip-path: var(--clip-three);
                transform: translate(calc(var(--shimmy-distance) * 1%), 0);
            }
            13% {
                clip-path: var(--clip-three);
                transform: translate(0, 0);
            }
            14%, 21% {
                clip-path: var(--clip-four);
                transform: translate(calc(var(--shimmy-distance) * 1%), 0);
            }
            25% {
                clip-path: var(--clip-five);
                transform: translate(calc(var(--shimmy-distance) * 1%), 0);
            }
            30% {
                clip-path: var(--clip-five);
                transform: translate(calc(var(--shimmy-distance) * -1%), 0);
            }
            35%, 45% {
                clip-path: var(--clip-six);
                transform: translate(calc(var(--shimmy-distance) * -1%));
            }
            40% {
                clip-path: var(--clip-six);
                transform: translate(calc(var(--shimmy-distance) * 1%));
            }
            50% {
                clip-path: var(--clip-six);
                transform: translate(0, 0);
            }
            55% {
                clip-path: var(--clip-seven);
                transform: translate(calc(var(--shimmy-distance) * 1%), 0);
            }
            60% {
                clip-path: var(--clip-seven);
                transform: translate(0, 0);
            }
            31%, 61%, 100% {
                clip-path: var(--clip-four);
            }
        }

        .cybr-btn:nth-of-type(2) {
            --primary-hue: 260;
        }
    </style>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/stylesheet.css" rel="stylesheet">
    <link href="/css/neon.css" rel="stylesheet">
    <link href="/css/sketches.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    {{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    {{--    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500&display=swap" rel="stylesheet">--}}


</head>
<body class="bg-black text-white max-w-full">
{{--<div class="relative">--}}

{{--    <div class="left-border absolute top-0 left-0 z-10"></div>--}}
{{--    <div class="right-border absolute top-0 right-0 z-10"></div>--}}

<div v-cloak id="app" class="line-border">

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
