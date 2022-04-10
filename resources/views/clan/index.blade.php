@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            {{auth()->user()->ime}} {{auth()->user()->prezime}}
        </div>
    </div>
@endsection