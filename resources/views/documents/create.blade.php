<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Cadastro de Documentos') }}
@section('content')
    <div class="container mt-12 bg-dark rounded-4">
        <h1 class="text-light fs-2">Formulario Documento</h1>

        <form action="{{ route('documents.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group mt-3">
                    <label for="title" class="text-light">Título</label>
                    <input type="text" name="title" id="title" class="form-control border border-black"
                        value="{{ old('title') }}" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-2 col-md-3">
                    <label for="product_brand" class="text-light rounded-4">Marca</label>
                    <input type="text" name="product_brand" id="product_brand" class="form-control"
                        value="{{ old('product_brand') }}">
                </div>

                <div class="form-group mt-2 col-md-3">
                    <label for="product_model" class="text-light">Modelo</label>
                    <input type="text" name="product_model" id="product_model" class="form-control"
                        value="{{ old('product_model') }}">
                </div>

                <div class="form-group mt-2 col-md-3">
                    <label for="product_serial_number" class="text-light">Número de Série</label>
                    <input type="text" name="product_serial_number" id="product_serial_number" class="form-control"
                        value="{{ old('product_serial_number') }}">
                </div>

                <div class="form-group mt-2 col-md-3">
                    <label for="product_processor" class="text-light">Processador</label>
                    <input type="text" name="product_processor" id="product_processor" class="form-control"
                        value="{{ old('product_processor') }}">
                </div>
            </div>

            <div class="row">

            <div class="form-group mt-2 col-md-6">
                <label for="product_memory" class="text-light">Memória (GB)</label>
                <input type="number" name="product_memory" id="product_memory" class="form-control"
                    value="{{ old('product_memory') }}">
            </div>

            <div class="form-group mt-2 col-md-6">
                <label for="product_disk" class="text-light">Disco Rígido (GB)</label>
                <input type="number" name="product_disk" id="product_disk" class="form-control"
                    value="{{ old('product_disk') }}">
            </div>
        </div>

            <h3 class="mt-4 text-light">Informações de Data e Preço</h3>
            <div class="row">
            <div class="form-group mt-2 col-md-4">
                <label for="date" class="text-light">Data</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
            </div>

            <div class="form-group mt-2 col-md-4">
                <label for="product_price" class="text-light">Preço</label>
                <input type="number" step="0.01" name="product_price" id="product_price" class="form-control"
                    value="{{ old('product_price') }}">
            </div>

            <div class="form-group mt-2 col-md-4">
                <label for="product_price_string" class="text-light">Preço por Extenso</label>
                <input type="text" name="product_price_string" id="product_price_string" class="form-control"
                    value="{{ old('product_price_string') }}">
            </div>
            </div>

            
        </form>

        <div class="row mt-5">
            <button type="submit" class="btn btn-primary mt-3 col-md-2"><i class="bi bi-floppy2"></i>Salvar</button>

            <a href="{{ route('documents.index') }}" class="btn btn-secondary mt-3 ml-3 col-md-2 "><i class="bi bi-arrow-left-short"></i>Voltar</a>
            </div>
    </div>
@endsection

    </x-slot>
</x-app-layout>
