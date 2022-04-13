<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use Illuminate\Http\Request;

class ClanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        return view ('clan.index');
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
