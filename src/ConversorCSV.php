<?php
namespace App;
/**
 * Created by PhpStorm.
 * User: gorka
 * Date: 31/01/18
 * Time: 12:18
 */

class ConversorCSV
{

    public function convertirFichero($fichero, $tipo)
    {
        if (file_exists($fichero)) {
            $fich = file_get_contents($fichero);
            $fich_lineas = explode("\n", $fich);
            $linea = array_shift($fich_lineas);
            switch ($tipo) {
                case 1:
                    if (sizeof(explode(",", $linea)) != 5) {
                        return -2;
                    }
                    break;
                case 2:
                    if (sizeof(",", $linea) != 6) {
                        return -2;
                    }
            }
            $salida = [];
            $errores = [];
            $i = 0;
            foreach ($fich_lineas as $linea) {
                $campos = explode(",", $linea);

                $err = false;
                switch ($tipo) {
                    case 1:
                        if (sizeof($campos) != 5) {
                            $campos['linea'] = $i;
                            $errores[] = $campos;
                            $err = true;
                        }
                        break;
                    case 2:
                        if (sizeof($campos) != 6) {
                            $campos['linea'] = $i;
                            $errores[] = $campos;
                            $err = true;
                        }
                }

                if (!$err) {
                    $nuevaLinea = [];
                    switch ($tipo) {
                        case 1:
                            $nuevaLinea = [
                                'nombre' => $campos[0],
                                'modelo' => $campos[1],
                                'cantidad' => $campos[2],
                                'precio' => $campos[3],
                                'pvp' => $campos[4],
                            ];
                            break;
                        case 2:
                            $nuevaLinea = [
                                'nombre' => $campos[0],
                                'cantidad_t40' => $campos[1],
                                'cantidad_t42' => $campos[2],
                                'cantidad_t44' => $campos[3],
                                'modelo' => $campos[4],
                                'precio' => $campos[5],
                            ];
                            break;
                    }
                    $salida[] = $nuevaLinea;

                }
                $i++;
            }
            return ['salida' => $salida, 'errores' => $errores];

        } else {
            return -1;
        }
    }
}
