@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar produtos</div>

                <div class="card-body">
               

					<form action="{{ route('products.update', $produto->id)}}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
						@csrf
						<div class="mb-4">
							<label for="product_name" class="form-label">Titulo produto</label>
							<input type="text" placeholder="Digite aqui" class="form-control" id="product_name" name="name" required value={{$produto->name}}>
						</div>

						<div class="mb-4">
							<label class="form-label">Descricao</label></label>
							<textarea placeholder="Digite aqui" class="form-control" rows="4" name="description" required>{{$produto->description}}</textarea>
						</div>

						<div class="mb-4">
							<label class="form-label">Preco</label>
							<div class="row gx-2">
								<div class="col-4">
									<input placeholder="Digite aqui" type="text" class="form-control" name="price" required value={{$produto->price}}>
								</div>
							</div> <!-- row.// -->
						</div>
						<div class="mb-4">


							<label class="form-label">Images</label>
                            <img src="{{asset('storage/'.$produto->image)}}" class="img-thumbnail">
							<input class="form-control" type="file" name="image" multiple >
						</div>
						<button class="btn btn-primary">Submit item</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection