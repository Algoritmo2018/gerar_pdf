<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function () {
    $data['name'] = 'Luis Mateus';
    $pdf = Pdf::loadView('welcome', $data)->setPaper('a4', 'landscape');
    return $pdf->stream();

});
