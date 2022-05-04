<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fornecedors = fornecedor::all();
        return view('fornecedor.index',
            compact('fornecedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view ('fornecedor.create').
                    compact("categorias");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $fornecedor = new fornecedor();
            $dados = $request->only($fornecedor->getFillable());
            fornecedor::create($dados);
            return redirect()
                ->action([FornecedorController::class,
                        'index']);
        } catch (\Exception $e){
            echo "Erro ao inserir!:  ". $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $categorias = Categoria::all();
            $fornecedor = fornecedor::findOrFail($id);
            return view("fornecedor.edit", compact("categorias","fornecedor"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
        $fornecedor = new fornecedor();
        $dados = $request->only($fornecedor->getFillable());
        fornecedor::whereId($id)->update($dados);
        return redirect()
        ->action([FornecedorController::class, 'index']);
        }catch(\Exception $e){
            echo "erro: ".$e;

        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try {
           fornecedor::destroy($id);
           return redirect()
           ->action([FornecedorController::class, 'index']);
       } catch (\Exception $th){
           echo $th;
       }
    }
}
