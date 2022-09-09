<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Bardahl Líquido',
            'picture' => '/img/productos/agua.png',
            'description' => 'Bardahl Líquido para Batería es agua 100% desmineralizada. Restaura la eficiencia de la batería, no forma incrustaciones en las celdas, no contiene material ácido. Se recomienda para mantener el nivel del electrolito de las baterías automotrices que permiten mantenimiento.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Anticongelante',
            'picture' => '/img/productos/anticongelante.png',
            'description' => 'Anticongelante Fórmula Premium de alto desempeño y máxima protección contra la corrosión y cavitación que protege contra el desgaste al sistema de enfriamiento. Es compatible con cualquier anticongelante o refrigerante de cualquier color y tecnología.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Mobil ATF D/M',
            'picture' => '/img/productos/atf.png',
            'description' => 'Mobil ATF D/M proporciona excelente estabilidad contra la oxidación y la fricción, propiedades antidesgaste, y la fluidez a bajas temperaturas deseada para la mayoría de las transmisiones automáticas.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Diesel Monogrado CF/CF-2',
            'picture' => '/img/productos/cf2.png',
            'description' => 'Diesel Monogrado CF/CF-2 Aceite lubricante para motor a Disel monogrado . Para motores a Diesel de cuatro tiempos con más de diez años de uso interrumpido, operando en condiciones severas de transporte de carga y pasajeros.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Bardahl 2',
            'picture' => '/img/productos/formula2.png',
            'description' => 'Bardahl 2 es un aditivo estabilizador que evita que el aceite se adelgace previniendo el desgaste provocado por la fricción, prolongado la vida al motor. Autos medianos: 1 lata de 450 ml, Autos grandes y camionetas: 1 lata de 950 ml ó 2 latas de 450 ml. Se coloca en el depósito del aceite para motor.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Bardahl Líquido para Frenos',
            'picture' => '/img/productos/frenos.png',
            'description' => 'Bardahl Líquido para Frenos Este líquido para frenos se recomienda para usarse en automóviles y camionetas que tengan sistema de frenado a disco y tambor.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Mobil Special 40 and 50',
            'picture' => '/img/productos/mobilspecial.png',
            'description' => 'Mobil Special 40 and 50 son aceites monogradopara ser utilizados en motores automotrices de gasolina de vehículos pasajeros, vehículos comerciales y equipos agrícolas.  Protección contra el desgaste y la corrosión. Bajo consumo de aceite. Menores costos de inventario para operaciones de flotas mixtas.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Bardahl Motos 2T',
            'picture' => '/img/productos/moto2t.png',
            'description' => 'Para motores de 2 tiempos de motocicletas, motosierras, podadoras, carritos de golf, generadores de electricidad, etc. donde se requiera una mezcla de Aceite-Gasolina.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Líquido Limpia Parabrisas',
            'picture' => '/img/productos/parabrisas.png',
            'description' => 'Líquido Limpia Parabrisas  • No deja residuos opacos.  • Facilita la eliminación de mugre e insectos adheridos al parabrisas. • Alarga la vida de las plumas de los limpiadores.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Limpiadr General',
            'picture' => '/img/productos/restore.png',
            'description' => 'Limpiador general para sistemas fuel injection y carburadores, a Gasolina y Diesel. Eleva los niveles de octanaje más de 4 puntos incrementando la fuerza y la potencia del motor,  reduce 95% la emisión de gases contaminantes y ahorra combustible.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Lubricante',
            'picture' => '/img/productos/sj50.png',
            'description' => 'Lubricante elaborado con aceites básicos vírgenes minerales del tipo parafínico y un paquete de aditivos para la lubricacion de motores a diesel turboalimentados de alta potencia operando bajo condiciones severas de trabajo con combustibles de alto contenido de azufre.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Lubricante',
            'picture' => '/img/productos/sl40.png',
            'description' => 'Lubricante elaborado con aceites basicos virgenes minerales del tipo parafinico y un paquete de aditivos para la lubricacion de motores a diesel turboalimentados de alta potencia operando bajo condiciones severas de trabajo con combustibles de alto contenido de azufre.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Mobil Super 7,500',
            'picture' => '/img/productos/super7500.png',
            'description' => '• Satisface los más recientes requisitos para los aceites (o sea, 5W-30) de muchos fabricantes de motores a gasolina • Proporciona mayor eficiencia en el consumo de combustible al usar un grado para ahorro de combustible • Proporciona excelente protección a motores de alto desempeño • Reduce el desgaste y la corrosión en los motores',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Top Oil Aditivo Limpieza Contínua',
            'picture' => '/img/productos/topoilamarillo.png',
            'description' => 'Top Oil Aditivo Limpieza Contínua es un aditivo sintético economizador de gasolina que minimiza la formación de depósitos e impurezas en el sistema de combustible.',
            'status' => 'Visible',
        ]);
        Product::create([
            'name' => 'Top Oil Aditivo Limpieza Profunda',
            'picture' => '/img/productos/topoilverde.png',
            'description' => 'Top Oil Aditivo Limpieza Profunda es un aditivo sintético que limpia el sistema de combustible y sus componentes tales como inyectores, válvulas y cámara de combustión.',
            'status' => 'Visible',
        ]);
    }
}
