<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class BillController extends Controller
{
    // load bills using client dni
    public function index()
    {
        // get dni from request
        $dni = request('dni');
        // get client using dni
        $client = Client::where('dni', $dni)->first();
        // if client does not exist
        if (!$client) {
            // return error message
            return back()->withErrors(['dni' => 'Cliente no encontrado']);
        }

        // get bills using client id
        $bills = $client->bills;
        // return bills and client to view
        return view('bills', compact('bills', 'client'));

    }
    public function generateBlankPdf()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<html><body><h1>Factura de prueba</h1></body></html>');
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('factura.pdf');
    }



}