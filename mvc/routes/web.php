<?php


use lib\Route;
use app\controllers;
use app\controllers\HomeController;


Route::get("/", function(){
    echo "RUTA RAIZ";
});


Route::get("/inicio", function(){
    echo "Inicio";
});

Route::get("/Home", [HomeController::class,"index"]);


Route::dispatch();




?>
