<?php

namespace App\Http\Controllers;



//use App\Models\Categoria;
use App\Models\fornecedor;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
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

        $produtos = Produto::all();
        return view('produto.index',
            compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::all();
        return view ('produto.create',
                    compact("produtos"));
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
            //dd($request->all());
            $produto = new Produto();
            $dados = $request->only($produto->getFillable());
            //dd($dados);
            Produto::create($dados);
            return redirect()
                ->action([ProdutoController::class,
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
            $fornecedors = fornecedor::all();
            $produto = Produto::findOrFail($id);
            return view("produto.edit", compact("fornecedors","produtos"));

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
        $produto = new Produto();
        $dados = $request->only($produto->getFillable());
        produto::whereId($id)->update($dados);
        return redirect()
        ->action([ProdutoController::class, 'index']);
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
           produto::destroy($id);
           return redirect()
           ->action([ProdutoController::class, 'index']);
       } catch (\Exception $th){
           echo $th;
       }
    }
}
