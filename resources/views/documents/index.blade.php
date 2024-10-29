<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Documentos') }}

@section('content')
    <div class="container mt-5">
        <h1 class="text-light">Meus Documentos</h1>
        <a href="{{ route('documents.create') }}" class="btn btn-primary"><i class="bi bi-folder-plus mr-2"></i>Adicionar Documento</a>
        <table class="table table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Título:</th>
                    <th>Produto:</th>
                    <th>Modelo:</th>
                    <th>Numero de Serie:</th>
                    <th>Data:</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $document)
                    <tr>
                        <td>{{ $document->title }}</td>
                        <td>{{ $document->product_brand }}</td>
                        <td>{{ $document->product_model }}</td>
                        <td>{{ $document->product_serial_number }}</td>
                        <td>{{ $document->created_at->format('d/m/Y') }}</td>
                        <td class="ml-10">
                            <a href="{{ route('documents.edit', $document->id) }}" class="btn  btn-primary"><i
                                    class="bi bi-pencil"></i></a>

                            <form action="{{ route('documents.destroy', $document->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn  btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-download"></i> Download
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('documents.download.docx', $document->id) }}">
                                            Baixar como DOCX
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('documents.download.pdf', $document->id) }}">
                                            Baixar como PDF
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
    </x-slot>
</x-app-layout>
