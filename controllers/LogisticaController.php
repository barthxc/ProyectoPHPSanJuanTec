<?php
namespace Controllers;

use PhpFashionTextil\Router;
use Models\Logistica;

class LogisticaController{

    public static function mostrarLogistica(Router $router)
    {
        $Informes = Logistica::all();
        $router->view('admin/logistica',['informes' => $Informes]);
    }

    public static function comprobarOrden(Router $router){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["orden"] == "Más vendido") {
                $registrosOrdenados = Logistica::dosMasVendidos();

                $router->view('admin/logistica', [
                    'informes' => $registrosOrdenados
                ]);
            } elseif ($_POST["orden"] == "Menos vendido") {
                $registrosOrdenados = Logistica::dosMenosVendidos();

                $router->view('admin/logistica', [
                    'informes' => $registrosOrdenados
                ]);
            }
        }
    }
}
