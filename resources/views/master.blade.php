<!DOCTYPE html>
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

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/stylesheet.css" rel="stylesheet">
    <link href="/css/neon.css" rel="stylesheet">
    <link href="/css/sketches.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="bg-black text-white max-w-full">

<div v-cloak id="app" class="line-border">

    @yield('content')

</div>

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


</body>

</html>
