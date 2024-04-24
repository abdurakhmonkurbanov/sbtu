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

@section('container')
    @include('part_user.abiturent_list')

@endsection

@section('footer')
    @include('parts.footer')
@endsection

@section('js')
    @include('parts.js')
@endsection
