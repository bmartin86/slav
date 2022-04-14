<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use App\Mail\ClanEdit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        //dd($request);
        
        Mail::to('martin@email.com')->send(new ClanEdit(auth()->user(), $request));
        
        return redirect()->route('clan.index');
    }
}
