<?php

namespace App\Http\Controllers;

use App\DetalleVenta;
use App\venta;
use App\Providers;
use Illuminate\Http\Request;
use App\Http\Requests\venta\StoreRequest;
use App\Http\Requests\venta\UpdateRequest;
use App\Producto;
use App\Usuario;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        $venta =venta::get();
        return view('admin.venta.index',compact('venta')); 
    }

    //
    public function create()
    {
        $user = Usuario :: get();
        return view('admin.venta.create', compact('usuario')); 
    }

    //
    public function store(Producto $request)
    {
        $venta = venta::create($request->all());

       // foreach ($request -> id as $key => $producto){
          //  $results[] = array("id") => $request-> id [$key];
            //"quantily"->$request->quantily[$key];"precio"->$request->precio[$key];
       // }
        //$venta ->DetalleVenta()-> createMany($results);
        //return redirect()->route('venta.index');
    }

     //    
    public function show(venta $venta)
    {
        return view('admin.venta.show',compact('venta')); 
    }

    //
    public function edit(venta $venta)
    {
        $usuario = Usuario :: get();
        return view('admin.venta.show'); compact('venta');
    }

   
    //
    //public function update(UpdateRequest $request, venta $venta)
    //{
       // $venta->update($request->all());
        // return redirect()->route('venta.index');
    //}

    //
    public function destroy(venta $venta)
    {
       // $venta->delete();
        //return redirect()->route('venta.index');
    }
}
