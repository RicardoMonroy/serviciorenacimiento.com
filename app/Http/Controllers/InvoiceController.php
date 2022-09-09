<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    protected $table = "invoices";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'rfc',
        'phone',
        'mount',
        'address',
        'email',
        'ticket',
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
        $invoices = Invoice::orderBy('id', 'DESC')->get();

        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating |a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = Invoice::create($request->all());

        // if ($request->file('ticket')){
        //     $path = Storage::disk('public')->put('tickets', $request->file('ticket'));
        //     $invoice->fill(['ticket' => asset($path)])->save();
        // }

        return redirect()->route('invoices.index', $invoice->id)
            ->with('info', 'Factura guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);

        return view('invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);

        return view('invoices.edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        $invoice->update($request->all());

        // if ($request->file('ticket')){
        //     $path = Storage::disk('public')->put('tickets', $request->file('ticket'));
        //     $invoice->fill(['ticket' => asset($path)])->save();
        // }

        return redirect()->route('invoices.index', $invoice->id)
            ->with('info', 'Servicio actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
