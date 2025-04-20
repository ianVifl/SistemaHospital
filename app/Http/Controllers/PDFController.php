<?php

namespace App\Http\Controllers;

use App\Models\Defuncion;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF(Request $request, $id_fallecido)
    {
        // Carga todas las relaciones necesarias de una sola vez
        $fallecido = Defuncion::with([
            'entidades',
            'infoFallecido',
            'residencia',
            'edad',
            'informante', // Asegúrate de usar "informante" (singular)
            'domicilioDefuncion',
            'detallesDefuncion',
            'causasDefuncion',
            'necropsiaDefuncion',
            'defuncionMujer',
            'detallesMedicos',
            'domicilioLesion',
            'datosCertificante',
            'domicilioCertificante',
            'datosRegistroCivil',
        ])->where('id_fallecido', $id_fallecido)->firstOrFail();

        // Se pasa el objeto completo a la vista del PDF
        $pdf = FacadePdf::loadView('modules.defunciones.pdf_template', [
            'fallecido' => $fallecido
        ]);

        return $pdf->download('Registro De Defuncion.pdf');
    }
}
