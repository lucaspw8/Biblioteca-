@extends('templates.template')

@section('conteudo')
<h1 class="titulo-pg">Editar Livros</h1>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<form class="form" method="post" action="{{route('livro.update', $livroEdit->id)}}">
    
    <div class="form-group">
    <input type="text" name="titulo" placeholder="Titulo" class="form-control" value="{{$livroEdit->titulo or old('titulo')}}">
    </div>
    <div class="form-group">
        <input type="text" name="autor" placeholder="Autor" class="form-control" value="{{$livroEdit->autor or old('autor')}}">
    </div>
    <div class="form-group">
        <input type="text" name="qtd" placeholder="Quantidade" class="form-control" value="{{$livroEdit->qtd or old('qtd')}}">
    </div>
        
    
    <div class="form-group">
        <select name="disponivel" class="form-control">
            <option>Disponibilidade</option>
            <option value="Fisico" @if($livroEdit->disponivel == "Fisico") selected @endif >Fisico</option>
            <option value="Virtual" @if($livroEdit->disponivel == "Virtual") selected @endif>Virtual</option>
            <option value="Não Disponivel" @if($livroEdit->disponivel == "Não Disponivel") selected @endif >Não Disponivel</option>

        </select>
    </div>
    
    {{method_field('PUT')}}
    {{csrf_field()}}
    <button class="btn btn-primary">Editar Livro</button>
</form>

@endsection
