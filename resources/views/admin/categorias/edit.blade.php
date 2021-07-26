@extends('layouts.admin')
@section('title','editar categoria')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <h3 class="page-header">
        editar de categorias
    </h3>
    <nav arial aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">panel administrador</a></li>
            <li class="breadcrumb-item"><a href="{{route("categorias.index")}}</a></li>
            <li class="breadcrumb-item active aria-current="page">Editar categoria</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid margin stretch-card">
        <div class="card">
            <div class="card body">
                
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Editar categorias</h4>
                </div>
                {!! Form::model($categoria,['route'=>['categorias.update',$categoria],'method'=>'PUT'])!!}
           
                <div class="form group">
                    <label for="name">nombre</label>
                    <input type="text"name="name"id="name"value="(($categoria->name))" class="form-control" placeholder="nombre"
                    required>
                </div>
                
                <div class="form group">
                    <label for="descripcion">descripcion</label>
                    <textarea class="form-control"name="descripcion"id="descripcion"rows="3">(($categoria->descripcion))
                    </textarea>
                </div>
           
            
            <button type="submit" class="btn btn primary mr-2">Registar</button>
            <a href="((route('categorias.index')))"class="btn btn-light">
                cancelar
            </a>
            (!!{!! Form::close() !!})
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
 (!! Html::script('melody/js/data.table.js')!!)   
@endsection
  