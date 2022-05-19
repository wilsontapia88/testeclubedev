@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar produtos</div>

                <div class="card-body">
					<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="mb-4">
							<label for="product_name" class="form-label">Titulo produto</label>
							<input type="text" placeholder="Digite aqui" class="form-control" id="product_name" name="name" required>
						</div>

						<div class="mb-4">
							<label class="form-label">Descricao</label></label>
							<textarea placeholder="Digite aqui" class="form-control" rows="4" name="description" required></textarea>
						</div>

						<div class="mb-4">
							<label class="form-label">Preco</label>
							<div class="row gx-2">
								<div class="col-4">
									<input placeholder="Digite aqui" type="text" class="form-control" name="price" required>
								</div>
							</div> <!-- row.// -->
						</div>
						<div class="mb-4">
							<label class="form-label">Images</label>
							<input class="form-control" type="file" name="image" required multiple >
						</div>
						<button class="btn btn-primary">Submit item</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection