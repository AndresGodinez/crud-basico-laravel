<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $titulo='Listado de productos';
    	$products = Product::orderBy('id','ASC')->paginate();
    	return view('products.index', compact('products', 'titulo'));
    }
    public function create()
    {
        $titulo = 'Nuevo producto';
        return view('products.create', compact('titulo'));
    }
    public function store(ProductRequest $request)
    {
        $product = New Product;

        $product->name = $request->name;
        $product->short = $request->short;
        $product->body = $request->body;
        $product->phone = $request->phone;
        $product->save();
        return redirect()->route('products.index')
            ->with('info', 'Producto guardado');
    }
    public function update(ProductRequest $request, $id)
    {
        // dd($request->phone);
        $product =  Product::find($id);
        $product->name = $request->name;
        $product->body = $request->body;
        $product->phone = $request->phone;
        $product->short = $request->short;
        $product->save();
        return redirect()->route('products.index')
                        ->with('info', 'Producto Actualizado');
    }
    public function edit($id)
    {
        $titulo = 'Editar producto';
        $producto = Product::find($id);
        return view('products.edit', compact('titulo', 'producto'));
    }
    public function show($id)
    {
        $titulo='Detalle de producto';

    	if(! isset($id)){
    		dd('No existe id, revise configuración');
    	}
    	$product = Product::find($id);
    	return view('products.show', compact('product', 'titulo'));
    }
    public function destroy($id)
    {
    	$product= Product::find($id);
    	$product->delete();
    	return back()->with('info', 'Producto eliminado');
    }
}
