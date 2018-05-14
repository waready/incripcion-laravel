<?php

namespace App\Http\Controllers\Producto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product\Mark;
use App\Models\Product\Product;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use App\Http\Requests\ProductoCreateRequest;
use App\Http\Requests\ProductoUpdateRequest;


class ProductoController extends Controller
{
    public function excel(){
      

        Excel::create('export', function($excel)
        {
            $excel->sheet('inscritos',function($sheet)
            {
                $marks = product::all();
                $sheet->fromArray($marks);
            });
        })->download('xlsx');

    }
    public function index( Request $request ){
                
        $product = Product::name($request->get('name'))->select('product.id','product.name as products','product.lastname','product.cellnumber',
        'product.email','product.nivel','product.price','marks.name as mark','marks.costo as costo')
        ->join('marks','marks.id','=','product.marks_id')->paginate(20);

            return view('productos/productos')->with('productos', $product);      
        
    }
     public function create()
    {
        $marks = Mark::lists('name','id');
        return view('productos/create')->with('marks',$marks);
    }
    public function store(Request $request)
    {
        Product::create($request->all());

        Session::flash('save','Se ha creado correctamente');

        return redirect()->route('producto.create');
    }
     public function show($id)
    {
        $producto = Product::FindOrFail($id);
        return view('productos/delete')->with('producto',$producto);
    }
      public function destroy($id)
    {
        //
        $producto = Product::FindOrFail($id);
        $producto->delete();

        Session::flash('update','Se ha cambiado los datos');

        return redirect()->route('producto.index');
    }
     public function edit($id)
    {   
        $marks = Mark::lists('name','id')->prepend('Seleccioname la Marca');   
        $producto = Product::FindOrFail($id);
        return view('productos/editar', array('producto'=>$producto,'marks'=>$marks));
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
        $producto = Product::FindOrFail($id);
        $input = $request->all();
        $producto->fill($input)->save();

        Session::flash('delete','Se Elimino el registro');
        
        return redirect()->route('producto.index');
    }



}
