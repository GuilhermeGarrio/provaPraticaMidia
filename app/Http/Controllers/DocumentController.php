<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;


use Illuminate\Support\Facades\Storage;

use App\Models\Document;
use Illuminate\Http\Request;

use PhpOffice\PhpWord\TemplateProcessor;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\User;

class DocumentController extends Controller
{

    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::where('user_id', auth()->id())->get();
        return view('documents.index', compact('documents'));
    }

    // Exibir formulário de criação de documento
    public function create()
    {
        return view('documents.create');
    }

    // Salvar novo documento
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'product_brand' => 'nullable|string',
            'product_model' => 'nullable|string',
            'product_serial_number' => 'nullable|string',
            'product_processor' => 'nullable|string',
            'product_memory' => 'nullable|integer',
            'product_disk' => 'nullable|integer',
            'date' => 'nullable|date',
            'product_price' => 'nullable|numeric',
            'product_price_string' => 'nullable|string',
        ]);

        $document = new Document($request->all());
        $document->user_id = auth()->id();
        $document->save();

        return redirect()->route('documents.index')->with('success', 'Documento criado com sucesso!');
    }

    // Exibir formulário de edição de documento
    public function edit(Document $document)
    {
        $this->authorize('update', $document); // Verifica se o usuário tem permissão para editar
        return view('documents.edit', compact('document'));
    }

    // Atualizar documento
    public function update(Request $request, Document $document)
    {
        $this->authorize('update', $document);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'product_brand' => 'nullable|string',
            'product_model' => 'nullable|string',
            'product_serial_number' => 'nullable|string',
            'product_processor' => 'nullable|string',
            'product_memory' => 'nullable|integer',
            'product_disk' => 'nullable|integer',
            'date' => 'nullable|date',
            'product_price' => 'nullable|numeric',
            'product_price_string' => 'nullable|string',
        ]);

        $document->update($request->all());

        return redirect()->route('documents.index')->with('success', 'Documento atualizado com sucesso!');
    }

    // Excluir documento
    public function destroy(Document $document)
    {
        $this->authorize('delete', $document);
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Documento excluído com sucesso!');
    }


    public function downloadDocx($id)
    {
        $document = Document::findOrFail($id);
        $user = $document->user;

        $templatePath = storage_path('app/templates/anexo1.docx');
        $templateProcessor = new TemplateProcessor($templatePath);

        $templateProcessor->setValue('user_name', $user->name);
        $templateProcessor->setValue('user_role', $user->user_role);
        $templateProcessor->setValue('user_document', $user->user_document);
        $templateProcessor->setValue('product_brand', $document->product_brand);
        $templateProcessor->setValue('product_model', $document->product_model);
        $templateProcessor->setValue('product_serial_number', $document->product_serial_number);
        $templateProcessor->setValue('product_processor', $document->product_processor);
        $templateProcessor->setValue('product_memory', $document->product_memory);
        $templateProcessor->setValue('product_disk', $document->product_disk);
        $templateProcessor->setValue('product_price', $document->product_price);
        $templateProcessor->setValue('product_price_string', $document->product_price_string);
        $templateProcessor->setValue('date', $document->created_at->format('d/m/Y'));

        $outputPath = storage_path("app/public/documents/Document_{$document->id}.docx");
        $templateProcessor->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }

    public function downloadPdf($id)
    {
        $document = Document::findOrFail($id);
        $user = $document->user;

        $pdf = PDF::loadView('documents.pdf', [
            'document' => $document,
            'user_name' => $user->name,        
            'user_role' => $user->user_role,     
            'user_document' => $user->user_document, 
            'product_brand' => $document->product_brand, 
            'product_model' => $document->product_model,
            'product_serial_number' => $document->product_serial_number,
            'product_processor' => $document->product_processor,
            'product_memory' => $document->product_memory,
            'product_disk' => $document->product_disk,
            'product_price' => $document->product_price,
            'product_price_string' => $document->product_price_string,
            'date' => $document->created_at->format('d/m/Y'),
        ]);
        
        return $pdf->download('document.pdf');
    }

}
