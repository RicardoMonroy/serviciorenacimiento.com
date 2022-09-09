<?php

use Illuminate\Database\Seeder;
use App\Information;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create([
            'bannername' => 'SERVICIO RENACIMIENTO SA de CV',
            'slogan' => 'LITROS DE A LITRO',
            'politic' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'description' => 'Servicio Renacimiento S.A. de C.V. es una gasolinera 100% mexicana, la cual se constituye el 6 de septiembre de 1969, en Celaya, Guanajuato. Gracias al esfuerzo y colaboración de un exitoso grupo de profesionales encabezado por doña Catalina Pérez Vela Rivadeneyra y el Ing. Roberto Miguel Rivadeneyra Pérez Vela, hemos logrado crecer y ser en la actualidad una importante empresa dedicada en la venta de hidrocarburos, aditivos y aceites en la zona centro del estado.',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d871.1087094355037!2d-100.83487466358862!3d20.519242403151857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbaf9e7dcf6db%3A0xa46477fbb65b6eb0!2sBlvrd%20Adolfo%20L%C3%B3pez%20Mateos%201505%2C%20Renacimiento%2C%2038040%20Celaya%2C%20Gto.!5e0!3m2!1ses-419!2smx!4v1585779829135!5m2!1ses-419!2smx',
            'address' => 'BLVD. ADOLFO  LOPEZ  MATEOS  N. 1505 PTE.',
            'city' => 'CELAYA, GUANAJUATO',
            'privacidad' => '/pdf/aviso.pdf',
            'mission' => 'Satisfacer las necesidades cotidianas de productos y servicios gasolineros de nuestros clientes de una manera amable, rápida, practica y confiable. Estar siempre cuidádosos de del medio ambiente, la seguridad y la limpieza. Promoviendo el desarrollo integral de nuestros empleados y la comunicación abierta a todos los niveles de la organización.',
            'vision' => 'Ser la empresa dedicada a la venta de hidrocarburos con mayor presencia local, impulsado en el trabajo, el bienestar familiar, el desarrollo personal de nuestro equipo de trabajo así como una constante búsqueda que nos permite incrementar una nuestras ventas, todo esto mediante un esquema de trabajo en equipo, buen servicio calidad y todo bajo el respeto del marco legal que nos observa.',
            'value1title' => 'HONESTIDAD',
            'value1text' => 'Ser siempre honesto con nuestro clientes dándoles un trato justo y procurando el cuidado de sus autos y de su economía en cada visita, bajo el estricto seguimiento de nuestra política anti corrupción.',
            'value2title' => 'RAPIDEZ',
            'value2text' => 'Estamos conscientes de que el tiempo es muy valioso para nuestros clientes, por lo que siempre los atendemos de inmediato al llegar y procuramos que no pierdan tiempo innecesariamente.',
            'value3title' => 'DISPONIBILIDAD',
            'value3text' => 'Estamos pendientes de nuestros cliente en todo momento y nunca lo dejamos de atender mientras estén en nuestras estaciones.',
            'value4title' => 'AMABILIDAD',
            'value4text' => 'Siempre somos corteses con nuestros clientes; siempre los saludamos amablemente al llegar, los atendemos con gusto y los despedimos amablemente al retirarse.',
            'value5title' => '',
            'value5text' => '',
        ]);
    }
}
