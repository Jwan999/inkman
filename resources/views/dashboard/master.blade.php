<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/stylesheet.css" rel="stylesheet">

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
            /*font-family: 'Barlow Condensed', sans-serif;*/
            font-family: 'Rajdhani', sans-serif;
        }

        .japan-font {
            font-family: 'japan', Arial, sans-serif;
        }

        .buttonBg {
            background-image: url('images/buttonBg.svg');
        }


    </style>
</head>
<body class="bg-black text-md">
<div id="app">
    {{--delete confirmation--}}
    <div v-if="isVisible" class="flex justify-center mt-10">
        <div class="flex items-center justify-between bg-red lg:w-5/12 w-11/12 py-6 px-6">
            <h1 class="text-white font-bold text-lg">You sure you wanna delete that?</h1>
            <div class="flex justify-between space-x-2">
                <button @click="confirmTattooDelete = true; deleteTattoo()"
                        class="bg-white text-sm font-bold text-black px-6 py-2">
                    YEP
                </button>
                <button @click="isVisible = false; confirmTattooDelete = false; chosenTattooID = ''"
                        class="bg-white text-sm font-bold text-black px-6 py-2">
                    NOPE
                </button>
            </div>

        </div>
    </div>

    {{--create form--}}
    <div v-if="showForm" class="overflow-x-auto mt-10">
        <div class="min-w-screen flex justify-center overflow-hidden">
            <div class="w-11/12 lg:w-5/6 pb-10 bg-white p-4 flex flex-wrap justify-center">
                <div class="w-full flex justify-end">
                    <button @click="showForm = false" class="japan-font text-red font-bold text-xl mb-4 ">
                        X
                    </button>
                </div>
                <form class="w-6/12 mt-10">
                    <div class="mt-2 space-y-4">
                        <h1 v-if="!editState" class="font-bold text-2xl japan-font text-red">more tattoos</h1>
                        <h1 v-if="editState" class="font-bold text-2xl japan-font text-red">edit tattoo</h1>
                        <input type="text" v-model="name"
                               class="w-full  border-2 border-black focus:border-red bg-gray-100 outline-none px-4 py-2"
                               placeholder="Name of tattoo">
                        <input type="file" @change="handleFileUpload( $event )"
                               class="outline-none border-2 border-black focus:border-red block w-full text-sm text-black file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-black file:text-white hover:file:bg-red-100"/>
                        <input type="text" v-model="hours"
                               class="w-full border-2 border-black focus:border-red bg-gray-100 outline-none px-4 py-2"
                               placeholder="Hours spent">
                        <input type="text" v-model="price"
                               class="w-full  border-2 border-black focus:border-red bg-gray-100 outline-none px-4 py-2"
                               placeholder="Price">
                        <div class="flex justify-end">
                            <button v-if="!editState" @click="addTattoo" @keyup.enter="addTattoo"
                                    class="outline-none font-bold bg-black text-white border-2 border-black focus:border-red px-6 py-2">
                                ADD
                            </button>
                            <button type="button" v-if="editState" @click="editTattoo(null)" @keyup.enter="editTattoo"
                                    class="outline-none font-bold bg-black text-white border-2 border-black focus:border-red px-6 py-2">
                                EDIT
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{--posts--}}
    <div class="overflow-x-auto mt-16">
        <div class="min-w-screen flex items-center justify-center overflow-hidden">
            <div class="w-11/12 lg:w-5/6">
                <div class="flex justify-between items-center mb-10">
                    <h1 class="font-bold text-2xl japan-font text-white">cool tattoos, keep 'em coming</h1>
                    <button @click="showForm = true"
                            class="font-bold bg-white text-red border-2 border-white focus:border-red px-6 py-2">
                        ADD
                    </button>
                </div>
                <div class="bg-white shadow-md my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                        <tr class="bg-black text-white uppercase leading-normal">
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Image</th>
                            <th class="py-3 px-6 text-left">Hours spent</th>
                            <th class="py-3 px-6 text-left">Price</th>
                            <th class="py-3 px-6 text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-slate-900">
                        <tr v-for="(tattoo, index) in tattoos" class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">@{{tattoo.name}}</span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <img
                                        class="rounded-full w-10 h-10 object-cover object-center hover:transform hover:scale-125 ease-in-out duration-300"
                                        :src="'/storage/' + tattoo.image" alt="">
                                    {{--                                    <span class="font-medium">@{{}}</span>--}}
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">@{{tattoo.hours}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">@{{tattoo.price}}</span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    {{--edit--}}
                                    <div @click="editTattoo(tattoo.id)"
                                         class="w-4 mr-2 transform hover:text-red hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                        </svg>
                                    </div>
                                    {{--delete--}}
                                    <div @click="deleteTattoo(tattoo.id)"
                                         class="w-4 mr-2 transform hover:text-red hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
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
            chosenTattooID: '',
            isVisible: false,
            confirmTattooDelete: false,
            editState: false,
        },
        methods: {
            handleFileUpload(event) {
                this.image = event.target.files[0];
            },
            addTattoo() {
                let formData = new FormData();
                formData.append('image', this.image);

                axios.post('/add/tattoo',
                    formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }, params: {
                            name: this.name,
                            price: this.price,
                            hours: this.hours
                        }
                    }
                ).then(function () {
                    console.log('SUCCESS!!');
                    // todo
                    // this.name = ''
                    // this.image = ''
                    // this.price = ''
                    // this.hours = ''
                }).catch(function () {
                    console.log('FAILURE!!');
                });

                this.showForm = false;
                this.getTattoos()
            },
            getTattoos() {
                axios.get('/api/tattoos').then(response => {
                    // console.log(response.data)
                    this.tattoos = response.data
                })
            },
            deleteTattoo(id) {
                if (id) {
                    this.isVisible = true
                    this.chosenTattooID = id
                } else {
                    axios.delete(`/delete/tattoo/${this.chosenTattooID}`)
                    this.getTattoos()
                    this.isVisible = false
                    this.chosenTattooID = ''
                }

            },
            editTattoo(id) {
                console.log(id);
                if (id) {
                    this.chosenTattooID = id
                    this.editState = true
                    this.showForm = true
                    let tattooToEdit = this.tattoos.find(tattoo => tattoo.id == id)

                    console.log(tattooToEdit);

                    this.name = tattooToEdit.name
                    this.image = tattooToEdit.image
                    this.price = tattooToEdit.price
                    this.hours = tattooToEdit.hours

                }
                if (!id) {
                    let formData = new FormData();
                    formData.append('image', this.image);

                    axios.post(`/edit/tattoo/${this.chosenTattooID}`,
                        formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }, params: {
                                name: this.name,
                                price: this.price,
                                hours: this.hours
                            }
                        })
                        .then(response => console.log(response))
                        .catch(error => console.log(error))

                    this.getTattoos()
                    this.isVisible = false
                    this.chosenTattooID = ''
                    this.showForm = false

                }

            }
        },
        mounted() {
            this.getTattoos();
        }
    })
</script>
</body>
</html>
