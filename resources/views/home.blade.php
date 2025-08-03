@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="bg-blue-500 text-white p-4">
    <h1>welcome to the homepage!</h1>
</div>
    <x-alert2 type="warning" class="mb-4">
        
        <x-slot name="title"> titulo desde home</x-slot>
        contendio de la alerta 2
    </x-alert2>    
@endsection
