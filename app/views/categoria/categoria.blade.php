@extends('layouts.template')

@section('content')
    <h1>Categoria</h1>
    <div class="form-group">
    <form>
    <div class="col-sm-2">
    <select name="categorias" class="col-lg-2 form-control">
        <option id="categoria1">Categoria 1</option>
        <option id="categoria2">Categoria 2</option>
    </select>
    </div>
    <div class="col-sm-2">
    <input class="form-control" type="text" value="" />
    </div>

    </form>
    </div>


@stop