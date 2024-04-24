@extends('layouts.main')

@section('css')
    @include('parts.css')
@endsection
    <?php
    $menu_color = "";
    ?>
@section('menu')
    @include('parts.page_menu')
@endsection


@if (count($pages) > 1)
    @section('container')
    @include('parts.block_container')
@endsection
@else
    @section('container')
    @include('parts.page_container')
@endsection
@endif

@section('footer')
    @include('parts.footer')
@endsection

@section('js')
    @include('parts.js')
@endsection
