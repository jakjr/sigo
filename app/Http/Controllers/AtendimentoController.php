<?php

namespace Sigo\Http\Controllers;

use Celepar\Light\Layout\LayoutDecoratorTrait;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AtendimentoController extends Controller
{

    use LayoutDecoratorTrait;

    public function index()
    {
        $v = view('sigo::atendimento.index');

        $this->setLayoutPage('Lista de atendimentos', 'fa fa-beer', null, $v);
        //$this->setLayoutActiveMenu('atendimentos-listagem');

        return $v;
    }

    public function create()
    {

    }

    public function store()
    {

    }

}
