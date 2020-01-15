<?php

namespace App\Http\Controllers\Api;

use App\Funcionarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    private $funcionarios;
    
    public function __construct(Funcionarios $funcionarios) {
        $this->funcionarios = $funcionarios;
    }
    
    public function show(Funcionarios $id) {
        return response()->json(['data' => $id]);
    }

    public function country($country) {
        $data = ['data' => $this->funcionarios->where('pais', '=', $country)->get()];
        return response()->json($data);
    }

}
