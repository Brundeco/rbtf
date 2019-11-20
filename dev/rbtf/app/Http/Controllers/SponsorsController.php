<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sponsor;
use Symfony\Component\VarDumper\VarDumper;

class SponsorsController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::all();

        return view('sponsors.index')->with(compact('sponsors'));
    }

    public function show($id)
    {
        $sponsor = Sponsor::findOrFail($id);

        return view('sponsors.show', compact('sponsor'));
    }

    public function create()
    {
        return view('sponsors.create');
    }
    
    public function store(Request $request)
    {
        $sponsor = new Sponsor();

        $sponsor->image = request('sponsorImage')->getClientOriginalName();

        $sponsor->save();

        $request->sponsorImage->storeAs('public/uploads', $request->sponsorImage->getClientOriginalName());

        return redirect('sponsors');

    }

    public function edit($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('sponsors.edit', compact('sponsor'));
    }

    public function update($id)
    {
        $sponsor = Sponsor::find($id);

        $sponsor->image = request()->image;

        $sponsor->save();

        return redirect('/sponsors');
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);

        $sponsor->delete();

        return redirect('/sponsors');
    }
}
