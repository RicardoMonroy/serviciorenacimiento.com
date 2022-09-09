<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $information = Information::first();

        return view('informations.edit', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $information = Information::find($id);
        $information->update($request->all());

        if ($request->file('privacidad')){
            $path = Storage::disk('public')->put('pdf', $request->file('privacidad'));
            $information->fill(['privacidad' => asset($path)])->save();
        }

        return redirect()->route('informations.index', $information->id)
            ->with('info', 'Información actualizado con éxito');
    }
}
