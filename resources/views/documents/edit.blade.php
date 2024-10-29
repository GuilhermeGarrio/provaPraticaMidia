<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Edição') }}

@section('content')
<div class="container  mt-12 bg-dark rounded-4">
    <h1 class="fs-2 text-light">Editar Documento</h1>
    
    <form action="{{ route('documents.update', $document->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        
        <div class="form-group">
            <label for="title" class="text-light">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $document->title) }}" required>
        </div>

        <h3 class="mt-4 text-light fs-3">Informações do Notebook</h3>

        <div class="row">
        <div class="form-group mt-2 col-md-2">
            <label for="product_brand" class="text-light">Marca</label>
            <input type="text" name="product_brand" id="product_brand" class="form-control" value="{{ old('product_brand', $document->product_brand) }}">
        </div>

        <div class="form-group mt-2 col-md-4">
            <label for="product_model" class="text-light">Modelo</label>
            <input type="text" name="product_model" id="product_model" class="form-control" value="{{ old('product_model', $document->product_model) }}">
        </div>

        <div class="form-group mt-2 col-md-6">
            <label for="product_serial_number" class="text-light">Número de Série</label>
            <input type="text" name="product_serial_number" id="product_serial_number" class="form-control" value="{{ old('product_serial_number', $document->product_serial_number) }}">
        </div>
        </div>

        <div class="row">
        <div class="form-group mt-2 col-md-4">
            <label for="product_processor" class="text-light">Processador</label>
            <input type="text" name="product_processor" id="product_processor" class="form-control" value="{{ old('product_processor', $document->product_processor) }}">
        </div>

        <div class="form-group mt-2 col-md-4">
            <label for="product_memory" class="text-light">Memória (GB)</label>
            <input type="number" name="product_memory" id="product_memory" class="form-control" value="{{ old('product_memory', $document->product_memory) }}">
        </div>
        

        
        <div class="form-group mt-2 col-md-4">
            <label for="product_disk" class="text-light">Disco Rígido (GB)</label>
            <input type="number" name="product_disk" id="product_disk" class="form-control" value="{{ old('product_disk', $document->product_disk) }}">
        </div>
    </div>
        <h3 class="mt-4 text-light fs-3">Informações de Data e Preço</h3>

        <div class="row">
        <div class="form-group mt-2 col-md-6">
            <label for="date" class="text-light">Data</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $document->date) }}">
        </div>
    

        <div class="form-group mt-2 col-md-6">
            <label for="product_price" class="text-light">Preço</label>
            <input type="number" step="0.01" name="product_price" id="product_price" class="form-control" value="{{ old('product_price', $document->product_price) }}">
        </div>
    </div>

        <div class="form-group mt-2">
            <label for="product_price_string" class="text-light">Preço por Extenso</label>
            <input type="text" name="product_price_string" id="product_price_string" class="form-control" value="{{ old('product_price_string', $document->product_price_string) }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Atualizar Documento</button>
        <a href="{{ route('documents.index') }}" class="btn btn-secondary mt-3 ml-3 col-md-2 "><i class="bi bi-arrow-left-short"></i>Voltar</a>
    </form>
</div>
@endsection
    </x-slot>
</x-app-layout>