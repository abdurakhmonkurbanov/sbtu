@extends('layouts.main')

@section('css')
    @include('parts.css')
@endsection
    <?php
    $menu_color = " nav-light";
    ?>
@section('menu')
    @include('parts.main_menu')
@endsection

@section('hero')
    @include('parts.hero_main')
@endsection

@section('container')
    @include('parts.main_container')

@endsection


@section('footer')
    @include('parts.footer')
@endsection

@section('js')
    @include('parts.js')
@endsection
