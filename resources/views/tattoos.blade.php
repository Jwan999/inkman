@extends('master')
@section('content')

    @include('components.navbar')

    <div data-aos="fade-up" data-aos-duration="500" class="flex justify-center mt-10">
        <div class="lg:w-7/12 px-3 lg:px-0 lg:columns-3 md:columns-2 columns-1 gap-3 space-y-3">
            <img v-for="tattoo in tattoos" class="grayscale hover:grayscale-0 border-2 border-white w-full"
                 :src="'/storage/'+tattoo.image"
                 alt="">
        </div>
    </div>

    @include('components.contact')

@endsection

