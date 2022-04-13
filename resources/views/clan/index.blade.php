@extends('layouts.app')

@section('content')
    @auth
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <h3 class="text-2xl font-bold mb-4">{{auth()->user()->ime}} {{auth()->user()->prezime}}
                @if (auth()->user()->umjetnicko_ime)
                    - {{auth()->user()->umjetnicko_ime}}
                @endif
                @if (auth()->user()->zanimanje)
                    , {{auth()->user()->zanimanje}}
                @endif
            </h3>
            <ul class="text-md font-bold">
                <li class="mb-2">
                    Datum rođenja: <b>{{auth()->user()->datum_rodjenja}}</b>
                </li>
                <li class="mb-2">
                    JMBG: <b>{{auth()->user()->jmbg}}</b>
                </li>
                <li class="mb-2">
                    OIB: <b>{{auth()->user()->oib}}</b>
                </li>

                @if (!auth()->user()->adresa_boravista)
                    <li class="mb-2">   
                        Adresa: <b>{{auth()->user()->adresa_prebivalista}}</b>
                    </li>
                @else
                    <li class="mb-2">
                        Adresa prebivališta: <b>{{auth()->user()->adresa_prebivalista}}</b>
                    </li>
                    <li class="mb-2">
                        Adresa boravišta: <b>{{auth()->user()->adresa_boravista}}</b>
                    </li>
                @endif

                @if (auth()->user()->telefon)
                    <li class="mb-2">
                        Broj telefona: <b>{{auth()->user()->telefon}}</b>
                    </li>
                @endif

                @if (auth()->user()->fax)
                    <li class="mb-2">
                        Fax: <b>{{auth()->user()->fax}}</b>
                    </li>
                @endif

                @if (auth()->user()->mobitel)
                    <li class="mb-2">
                        Broj mobitela: <b>{{auth()->user()->mobitel}}</b>
                    </li>
                @endif

                @if (auth()->user()->email)
                    <li class="mb-2">
                        E-mail: <b>{{auth()->user()->email}}</b>
                    </li>
                @endif

                @if (auth()->user()->internet)
                    <li class="mb-2">
                        <a href="https://{{auth()->user()->internet}}" target="_blank" class="text-blue-500 underline">{{auth()->user()->internet}}</a>
                    </li>
                @endif

                

                @if (auth()->user()->zaposlenje)
                    <li class="mb-2">
                        Zaposlenje: <b>{{auth()->user()->zaposlenje}}</b>
                    </li>
                @endif

                @if (auth()->user()->manager)
                    <li class="mb-2">
                        Manager: <b>{{auth()->user()->manager}}</b>
                    </li>
                @endif
            </ul>
            <hr>
            <div class="mt-7 mb-2">
                <a href="{{ route('clan.edit', auth()->user()) }}" class="bg-white text-green-500 px-4 py-2 rounded
                    font-medium border-2 border-green-400">Izmijeni podatke</a>
                    
            </div>
        </div>
    </div>
    @endauth
@endsection

