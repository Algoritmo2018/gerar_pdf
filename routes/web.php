<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function () {
    $pdf = Pdf::loadView('welcome');
    return $pdf->download('invoice.pdf');

});
