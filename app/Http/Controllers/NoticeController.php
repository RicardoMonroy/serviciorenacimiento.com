<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('id', 'DESC')->get();

        return view('notices.index', compact('notices'));
    }

    /**
     * Show the form for creating |a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notice = Notice::create($request->all());

        if ($request->file('picture')){
            $path = Storage::disk('public')->put('images', $request->file('picture'));
            $notice->fill(['picture' => asset($path)])->save();
        }

        return redirect()->route('notices.index', $notice->id)
            ->with('info', 'nota guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::find($id);

        return view('notices.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nssssotice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);

        return view('notices.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notice = Notice::find($id);
        $notice->update($request->all());

        if ($request->file('picture')){
            $path = Storage::disk('public')->put('images', $request->file('picture'));
            $notice->fill(['picture' => asset($path)])->save();
        }

        return redirect()->route('notices.index', $notice->id)
            ->with('info', 'Nota actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
