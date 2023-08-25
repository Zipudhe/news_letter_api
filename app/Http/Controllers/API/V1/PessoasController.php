<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Models\User;

class PessoasController extends Controller {


    /**
     * Retorna lista de pessoas cadastradas
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return User::all();
    }
}
