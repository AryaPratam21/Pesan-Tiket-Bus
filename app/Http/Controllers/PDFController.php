<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;

class PDFController extends Controller
{
    public function cetakDetail($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        // Setup Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);

        // Load HTML content
        $view = view('transaksis.detail-pdf', compact('transaksi'))->render();
        $dompdf->loadHtml($view);

        // Set paper size and orientation
        $dompdf->setPaper('A5', 'landscape');

        // Render PDF (optional settings)
        $dompdf->render();

        // Stream PDF to browser
        return $dompdf->stream('detail-transaksi.pdf');
    }
}
