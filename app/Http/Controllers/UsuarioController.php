<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\Usuario\StoreRequest;
use App\Http\Requests\Usuario\UpdateRequest;

class UsuarioController extends Controller
{
   //
   public function index()
   {
       $Usuarios =Usuario::get();
       return view('admin.Usuario.index',compact('Usuarios')); 
   }

   //
   public function create()
   {
       return view('admin.Usuario.create'); 
   }

   //
   public function store(StoreRequest $request)
   {
       Usuario::create($request->all());
       return redirect()->route('Usuarios.index');
   }

    //    
   public function show(Usuario $Usuario)
   {
       return view('admin.Usuario.show',compact('Usuario')); 
   }

   //
   public function edit(Usuario $Usuario)
   {
      
   }

  
   //
   public function update(UpdateRequest $request, Usuario $Usuario)
   {
       $Usuario->update($request->all());
       return redirect()->route('Usuarios.index');
   }

   //
   public function destroy(Usuario $Usuario)
   {
       $Usuario->delete();
       return redirect()->route('Usuarios.index');
   }
}
