@extends('layouts.main')

@section('css')
    @include('parts.css_editor')
@endsection
    <?php
    $menu_color = "";
    ?>
@section('menu')
    @include('parts.page_menu')
@endsection


@section('container')
    @include('parts.content_list')
@endsection


@section('js')
    @include('parts.js_editor')
@endsection

