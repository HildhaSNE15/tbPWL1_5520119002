@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    Ini adalah halaman Home <br/>
    Hello,{!! $name [0] !!} <br/>

    <x-alert theme="dark" closeable="true">
        Selamat Datang Di Toko Buah 
    </x-alert>

    <br/>

    @foreach($fruits as $fruit)
    @if($loop->first)
        ini adalah buah yang masih segar <br/>
        @endif
    {{ $fruit }} <br/>
    @if($loop->last)
        ini adalah buah yang paling favorit <br/>
        @endif    

    @endforeach

    @php
        $no = 1;
    @endphp

{{ $no }}
{!! $fruits[2] !!}

@stop

@section('js')
    <script>
        console.log('Hello');
    </script>
@stop
