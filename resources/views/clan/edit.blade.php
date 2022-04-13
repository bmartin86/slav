@extends('layouts.app')

@section('content')
    <div class="flex justify-center mb-10">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <p class="text-2xl mb-4 ml-2 font-bold text-blue-500">Uredi podatke:</p>
            <form action="{{ route('clan.edit', auth()->user()) }}" method="post" class="mb-4">
                @csrf
                    <div class="mb-4">
                        <label for="ime" class="text-sm font-bold ml-2">Ime:</label>
                        <input type="text" name="ime" id="ime" placeholder="Ime"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->ime }}">
                    </div>
                    <div class="mb-4">
                        <label for="prezime" class="text-sm font-bold ml-2">Prezime:</label>
                        <input type="text" name="prezime" id="prezime" placeholder="Prezime"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->prezime }}">
                    </div>
                    <div class="mb-4">
                        <label for="umjetnicko_ime" class="text-sm font-bold ml-2">Umjetničko ime:</label>
                        <input type="text" name="umjetnicko_ime" id="umjetnicko_ime" placeholder="Umjetničko ime"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->umjetnicko_ime }}">
                    </div>
                    <div class="mb-4">
                        <label for="jmbg" class="text-sm font-bold ml-2">JMBG:</label>
                        <input type="text-numeric" name="jmbg" id="jmbg" placeholder="JMBG" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->jmbg }}">
                    </div>
                    <div class="mb-4">
                        <label for="oib" class="text-sm font-bold ml-2">OIB:</label>
                        <input type="text" name="oib" id="oib" placeholder="OIB" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->oib }}">
                    </div>
                    <div class="mb-4">
                        <label for="datum_rodjenja" class="text-sm font-bold ml-2">Datum rođenja (mm/dd/gggg):</label>
                        <input type="date" name="datum_rodjenja" id="datum_rodjenja" placeholder="Datum rođenja"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->datum_rodjenja }}">
                    </div>
                    <div class="mb-4">
                        <label for="adresa_prebivalista" class="text-sm font-bold ml-2">Adresa prebivališta:</label>
                        <input type="text" name="adresa_prebivalista" id="adresa_prebivalista" placeholder="Adresa prebivališta"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->adresa_prebivalista }}">
                    </div>
                    <div class="mb-4">
                        <label for="pbr_prebivalista" class="text-sm font-bold ml-2">Poštanski broj prebivališta:</label>
                        <input type="text" name="pbr_prebivalista" id="pbr_prebivalista" placeholder="Poštanski broj prebivališta"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->pbr_prebivalista }}">
                    </div>
                    <div class="mb-4">
                        <label for="adresa_boravista" class="text-sm font-bold ml-2">Adresa boravišta:</label>
                        <input type="text" name="adresa_boravista" id="adresa_boravista" placeholder="Adresa boravišta"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->adresa_boravista }}">
                    </div>
                    <div class="mb-4">
                        <label for="pbr_boravista" class="text-sm font-bold ml-2">Poštanski broj boravišta:</label>
                        <input type="text" name="pbr_boravista" id="pbr_boravista" placeholder="Poštanski broj prebivališta"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->pbr_boravista }}">
                    </div>
                    <div class="mb-4">
                        <label for="telefon" class="text-sm font-bold ml-2">Broj telefona:</label>
                        <input type="text" name="telefon" id="telefon" placeholder="Telefon" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->telefon }}">
                    </div>
                    <div class="mb-4">
                        <label for="fax" class="text-sm font-bold ml-2">Fax:</label>
                        <input type="text" name="fax" id="fax" placeholder="Fax" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->fax }}">
                    </div>
                    <div class="mb-4">
                        <label for="mobitel" class="text-sm font-bold ml-2">Broj mobitela:</label>
                        <input type="text" name="mobitel" id="mobitel" placeholder="Broj mobitela" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->mobitel }}">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="text-sm font-bold ml-2">E-Mail:</label>
                        <input type="email" name="email" id="email" placeholder="E-Mail" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->email }}">
                    </div>
                    <div class="mb-4">
                        <label for="internet" class="text-sm font-bold ml-2">Web stranica:</label>
                        <input type="text" name="internet" id="internet" placeholder="Web stranica" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->internet }}">
                    </div>
                    <div class="mb-4">
                        <label for="zanimanje" class="text-sm font-bold ml-2">Zanimanje:</label>
                        <input type="text" name="zanimanje" id="zanimanje" placeholder="Zanimanje" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->zanimanje }}">
                    </div>
                    <div class="mb-4">
                        <label for="zaposlenje" class="text-sm font-bold ml-2">Zaposlenje:</label>
                        <input type="text" name="zaposlenje" id="zaposlenje" placeholder="Zaposlenje" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->zaposlenje }}">
                    </div>
                    <div class="mb-4">
                        <label for="putovnica" class="text-sm font-bold ml-2">Broj putovnice:</label>
                        <input type="text" name="putovnica" id="putovnica" placeholder="Broj putovnice" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->putovnica }}">
                    </div>
                    <div class="mb-4">
                        <label for="manager" class="text-sm font-bold ml-2">Manager:</label>
                        <input type="text" name="manager" id="manager" placeholder="Manager" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ auth()->user()->manager }}">
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded
                        font-medium w-full">Potvrdi izmjene</button>
                    </div>
            </form>
        </div>
    </div>
@endsection