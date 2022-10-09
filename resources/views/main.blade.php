@extends('master')
@section('content')
    {{--header--}}
    @include('components.navbar')

    {{--components--}}
    @include('components.hero')
    @include('components.sketches')
    @include('components.giveaways')
    @include('components.coloring')
    @include('components.beforePiercings')
    @include('components.piercings')
    @include('components.contact')

@endsection
