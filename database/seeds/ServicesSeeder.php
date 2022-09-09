<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'picture' => '/img/servicios/despachadores.svg',
            'label' => 'DESPACHO DE GASOLINA',
            'status' => 'Visible',
        ]);
        Service::create([
            'picture' => '/img/servicios/facturacion_poster_.png',
            'label' => 'FACTURACIÓN INMEDIATA FÍSICA /ONLINE',
            'status' => 'Visible',
        ]);
        Service::create([
            'picture' => '/img/servicios/bannos_poster_.png',
            'label' => 'SERVICIO DE BAÑOS',
            'status' => 'Visible',
        ]);
        Service::create([
            'picture' => '/img/servicios/tarjetas_poster_.png',
            'label' => 'COBRO CON TARJETAS',
            'status' => 'Visible',
        ]);
        Service::create([
            'picture' => '/img/servicios/nivel-aceite_poster_.png',
            'label' => 'CHEQUEO DE NIVEL DE ACEITE',
            'status' => 'Visible',
        ]);
        Service::create([
            'picture' => '/img/servicios/capacitacion_poster_.png',
            'label' => 'PERSONAL CAPACITADO',
            'status' => 'Visible',
        ]);
        Service::create([
            'picture' => '/img/servicios/aceite_poster_.png',
            'label' => 'VENTA DE ACEITES',
            'status' => 'Visible',
        ]);
        Service::create([
            'picture' => '/img/servicios/supervisor_poster_.png',
            'label' => 'SUPERVISOR',
            'status' => 'Visible',
        ]);
        Service::create([
            'picture' => '/img/servicios/llantas_poster_.png',
            'label' => 'PRESIÓN DE LLANTAS',
            'status' => 'Visible',
        ]);
    }
}
