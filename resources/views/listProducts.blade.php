@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">lista de produtos</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preco</th>
                            <th scope="col">Acoes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $productos as $producto )

                                <tr>
                                    <th scope="row">{{$producto->id}}</th>
                                    <td>{{$producto->name}}</td>
                                    <td>R$ {{$producto->price}}</td>
                                    <td><a href="{{route('products.edit', $producto->id)}}">Editar</a></td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection