<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Pessoa::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "Should create pessoa";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // echo $request->getPayload();
        $content = json_decode($request->getContent(), true);

        if($content) {
            // var_dump($content["stack"]);
            Pessoa::create($content);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoa = DB::table("Pessoas")->find($id);
        return $pessoa;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $content = json_decode($request->getContent(), true);

        if(empty($content)) {
            return response("Missing body content", 422);
        }

        $pessoa = Pessoa::find($id);

        if(!$pessoa) {
            return response("data not found", 404);
        }

        foreach($content as $key => $value) {
            $pessoa->$key = $value;
        }

        $pessoa->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Pessoa::destroy($id);
    }
}
