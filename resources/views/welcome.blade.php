@extends('layouts.app')

@section('content')
    <div x-data="{ open: false }">
        <button x-on:click="open = !open">Переключить</button>
        <div x-show="open">
            Текст
        </div>
    </div>
@endsection
