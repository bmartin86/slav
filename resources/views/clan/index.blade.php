@extends('layouts.app')

@section('content')
    @auth
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <h3 class="text-2xl font-bold mb-4">{{$clan->ime}} {{$clan->prezime}}
                @if ($clan->umjetnicko_ime)
                    - {{$clan->umjetnicko_ime}}
                @endif
                @if ($clan->zanimanje)
                    , {{$clan->zanimanje}}
                @endif
            </h3>
            <ul class="text-md font-bold">
                <li class="mb-2">
                    Datum rođenja: <b>{{$clan->datum_rodjenja}}</b>
                </li>
                <li class="mb-2">
                    JMBG: <b>{{$clan->jmbg}}</b>
                </li>
                <li class="mb-2">
                    OIB: <b>{{$clan->oib}}</b>
                </li>

                @if (!$clan->adresa_boravista)
                    <li class="mb-2">   
                        Adresa: <b>{{$clan->adresa_prebivalista}}</b>
                    </li>
                @else
                    <li class="mb-2">
                        Adresa prebivališta: <b>{{$clan->adresa_prebivalista}}</b>
                    </li>
                    <li class="mb-2">
                        Adresa boravišta: <b>{{$clan->adresa_boravista}}</b>
                    </li>
                @endif

                @if ($clan->telefon)
                    <li class="mb-2">
                        Broj telefona: <b>{{$clan->telefon}}</b>
                    </li>
                @endif

                @if ($clan->fax)
                    <li class="mb-2">
                        Fax: <b>{{$clan->fax}}</b>
                    </li>
                @endif

                @if ($clan->mobitel)
                    <li class="mb-2">
                        Broj mobitela: <b>{{$clan->mobitel}}</b>
                    </li>
                @endif

                @if ($clan->email)
                    <li class="mb-2">
                        E-mail: <b>{{$clan->email}}</b>
                    </li>
                @endif

                @if ($clan->internet)
                    <li class="mb-2">
                        <a href="https://{{$clan->internet}}" target="_blank" class="text-blue-500 underline">{{$clan->internet}}</a>
                    </li>
                @endif

                

                @if ($clan->zaposlenje)
                    <li class="mb-2">
                        Zaposlenje: <b>{{$clan->zaposlenje}}</b>
                    </li>
                @endif

                @if ($clan->manager)
                    <li class="mb-2">
                        Manager: <b>{{$clan->manager}}</b>
                    </li>
                @endif
            </ul>
            <hr>
            <div class="mt-7 mb-2">
                <a href="{{ route('clan.edit', $clan) }}" class="bg-white text-green-500 px-4 py-2 rounded
                    font-medium border-2 border-green-400">Izmijeni podatke</a>
                    
            </div>
        </div>
    </div>
    @endauth
@endsection

