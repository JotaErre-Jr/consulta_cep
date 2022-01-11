@extends('app')

@section('content')
    <h1>Buscar CEP</h1>
    <form action="{{route('buscar')}}" method="GET">
        <div class="mb-3">
          <label>CEP</label>
          <input type="text" class="form-control" name="cep">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection    