<?php

namespace Tests;

use App\ConversorCSV;
use \PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: gorka
 * Date: 5/02/18
 * Time: 20:20
 */
class ConversorCsvTest extends TestCase
{
    /** @test */
    public function test_se_convierte_correctamente()
    {
        $conversor = new ConversorCSV;

        $salida = $conversor->convertirFichero('diademas.csv', 1);

        $salidaEsperada = [
            [
                'nombre' => 'Diadema Swarosvki',
                'modelo' => 'SS18_201',
                'cantidad' => '20',
                'precio' => '50',
                'pvp' => '100',
            ],

            [
                'nombre' => 'Diadema verde simple',
                'modelo' => 'SS18_202',
                'cantidad' => '4',
                'precio' => '30',
                'pvp' => '60',
            ],

            [
                'nombre' => 'Diadema broches',
                'modelo' => 'SS18_203',
                'cantidad' => '33',
                'precio' => '45',
                'pvp' => '90',
            ]
        ];

        $erroresEsperados = [
            [
                'Diadema azul simple',
                'SS18_204',
                '6',
                'linea' => 2,
            ],

            [
                '',
                'linea' => 4,
            ]
        ];

        $this->assertSame( $salidaEsperada, $salida['salida'] );
        $this->assertSame( $erroresEsperados, $salida['errores'] );

    }
}