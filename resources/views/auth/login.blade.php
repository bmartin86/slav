@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
        @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>    
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf
               
                <div class="mb-4">
                    <label for="username" class="sr-only">Korisničko ime</label>
                    <input type="username" name="username" id="username" placeholder="Unesite Vaše korisničko ime"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') 
                    border-red-500 @enderror" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Lozinka</label>
                    <input type="password" name="password" id="password" placeholder="Unesite Vašu lozinku"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') 
                    border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded
                    font-medium w-full">Prijavi se</button>
                </div>
            </form>
        </div>
    </div>
@endsection