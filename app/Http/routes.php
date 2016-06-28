<?php

Route::post('atendimento/filter', 'Sigo\Http\Controllers\AtendimentoController@filter');
Route::resource('atendimento', 'Sigo\Http\Controllers\AtendimentoController');

