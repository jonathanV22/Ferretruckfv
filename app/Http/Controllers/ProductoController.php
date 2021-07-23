<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\Producto\StoreRequest;
use App\Http\Requests\Producto\UpdateRequest;
use App\User;

class ProductoController extends Controller
{
    //
    public function index()
    {
        $Productos =Producto::get();
        return view('admin.Producto.index',compact('Productos')); 
    }

    //
    public function create()
    {
        $categorias = Categoria::get();
        $users = User::get();
        return view('admin.Producto.create',compact('categorias','users')); 
    }

    //
    public function store(StoreRequest $request)
    {
        Producto::create($request->all());
        return redirect()->route('Productos.index');
    }

     //    
    public function show(Producto $Producto)
    {
        $categorias = Categoria::get();
        $users = User::get();
        return view('admin.Producto.show',compact('Producto','categorias','users')); 
    }

    //
    public function edit(Producto $Producto)
    {
       
    }

   
    //
    public function update(UpdateRequest $request, Producto $Producto)
    {
        $Producto->update($request->all());
        return redirect()->route('Productos.index');
    }

    //
    public function destroy(Producto $Producto)
    {
        $Producto->delete();
        return redirect()->route('Productos.index');
    }
}
