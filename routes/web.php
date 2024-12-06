<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function () {
    $pdf = Pdf::loadView('welcome')->setPaper('a4', 'landscape');
    return $pdf->stream();

});
