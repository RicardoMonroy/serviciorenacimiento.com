<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Service;

class ServiceController extends Controller
{
    protected $table = "services";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'picture',
        'label',
        'status',
    ];

    protected $guarded = [

    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::All();

        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating |a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = Service::create($request->all());

        if ($request->file('picture')){
            $path = Storage::disk('public')->put('images', $request->file('picture'));
            $service->fill(['picture' => asset($path)])->save();
        }

        return redirect()->route('services.index', $service->id)
            ->with('info', 'Servicio guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);

        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);

        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->update($request->all());

        if ($request->file('picture')){
            $path = Storage::disk('public')->put('images', $request->file('picture'));
            $service->fill(['picture' => asset($path)])->save();
        }

        return redirect()->route('services.index', $service->id)
            ->with('info', 'Servicio actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
