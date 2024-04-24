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
    @include('journal_parts.journal_hero')
@endsection

@section('container')
    @include('journal_parts.journal_container')
@endsection



@section('footer')
    @include('parts.footer')
@endsection

@section('js')
    @include('parts.js')
@endsection
