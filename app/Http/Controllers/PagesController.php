<?php

namespace App\Http\Controllers;
use App\Information;
use App\Invoice;
use App\Mail\InvoiceReceived;
use App\Notice;
use App\Product;
use App\Service;
use App\Fuel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function welcome()
    {
        $information = Information::first();
        $fuel = Fuel::first();
        // dd($information->slogan);

        return view('welcome', compact('information', 'fuel'));
    }

    public function mision()
    {
        $information = Information::first();
        // dd($information->slogan);

        return view('mision-vision', compact('information'));
    }

    public function products()
    {
        $products = Product::where('status', 'Visible')->get();
        $services = Service::where('status', 'Visible')->get();

        return view('productos-servicios', compact('products', 'services'));
    }

    public function prensa()
    {
        $notices = Notice::orderBy('id', 'DESC')->get();

        return view('prensa', compact('notices'));
    }

    public function factura()
    {
        return view('facturacion');
    }

    public function invoice(Request $request)
    {
        $invoice = Invoice::create($request->all());

        // if ($request->file('ticket')){
        //     $path = Storage::disk('public')->put('tickets', $request->file('ticket'));
        //     $invoice->fill(['ticket' => asset($path)])->save();
        // }

        // dd($invoice);
        // Mail::to('contacto@serviciorenacimiento.com')->send(new InvoiceReceived($invoice));
        Mail::to('rmonroy.rodriguez@gmail.com')->send(new InvoiceReceived($invoice));

        return view('recibido');
    }
}
