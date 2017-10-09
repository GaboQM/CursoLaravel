<?php

namespace Market\Http\Controllers;

use Illuminate\Http\Request;

use Market\Http\Requests;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=\Market\ModelsProduct::select('products.id','products.name as product','price','marks.name as mark')->join('marks','marks.id','=','products.marks_id')->paginate(5);
        return view('producto/index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marks=\Market\ModelsMarca::lists('name','id')->prepend('Selecciona una marca');

        return view('producto.create')->with('marks',$marks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        \Market\ModelsProduct::create($request->all());

        return redirect()->route('product.index');
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
        $products=\Market\ModelsProduct::FindOrFail($id);
        return view('producto.show')->with('products',$products);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $marks=\Market\ModelsMarca::lists('name','id')->prepend('Selecciona una marca');
         $products=\Market\ModelsProduct::FindOrFail($id);

         return view('producto.edit',array('products' =>$products ,'marks'=>$marks));
        
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
        //

        $products=\Market\ModelsProduct::FindOrFail($id);
        $input=$request->all();
        $products->fill($input)->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products=\Market\ModelsProduct::FindOrFail($id);
       
        $products->delete();
        return redirect()->route('product.index');

    }
}
