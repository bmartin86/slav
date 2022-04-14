<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $clan = auth()->user();
        return view ('clan.index')->with(compact('clan'));
    }

    public function edit(Clan $clan)
    {
        return view('clan.edit', [
            'clan' => $clan,
        ]);
    }

    public function modify(Request $request, Clan $clan)
    {
        dd($request);
    }
}
