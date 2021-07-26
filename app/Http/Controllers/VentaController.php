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
        return view('admin.venta.create', compact('user')); 
    }

    //
    public function store(Producto $request)
    {
        $venta = venta::create($request->all());

       foreach ($request -> producto_id as $key => $producto){
          $results[] = array("producto_id" => $request-> producto_id[$key],
            "cantidad"=>$request->cantidad[$key],"preciotal"=>$request->preciotal[$key],
            "estadoVenta"=>$request->estadoVenta[$key],"desc"=>$request->desc[$key]);
        }
        $venta->detalleVenta()-> createMany($results);
        return redirect()->route('venta.index');
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
        return view('admin.venta.show',compact('usuario')); 
    }

   
    //
    public function update(UpdateRequest $request, venta $venta)
    {
        //$venta->update($request->all());
        //return redirect()->route('venta.index');
    }


    public function destroy(venta $venta)
    {
        //$venta->delete();
        //return redirect()->route('venta.index');
    }
}
