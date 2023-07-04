<?php

namespace App\Http\Controllers;

use PDF;
use TCPDF;
use App\Models\History;
use App\Models\HistoryDamage;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pdfData = History::with('history_damages')->get();
        return view('admin.history', compact('pdfData'));
    }

    public function createPDF()
    {
        // Retrieve data from the histories table with related history_damages
        $data = History::with('history_damages.motorcycle')->get();

        // Create a new TCPDF instance
        $pdf = new TCPDF();
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        // Set the font family and size for the title
        $pdf->SetFont('helvetica', 'B', 16);

        // Add the title in the center of the page
        $pdf->Cell(0, 10, 'Histori Kerusakan', 0, 1, 'C');

        // Set the font family and size for the content
        $pdf->SetFont('helvetica', '', 12);

        // Iterate over each history record
        foreach ($data as $h) {
            // Get the motorcycle name
            $motorcycleName = $h->motorcycle->name;

            // Add the motorcycle name to the PDF
            $pdf->Cell(0, 10, 'Nama Kendaraan: ' . $motorcycleName, 0, 1);

            // Add the "Damage:" title
            $pdf->Cell(0, 10, 'Kerusakan : ', 0, 1);

            // Iterate over each history damage record
            foreach ($h->history_damages as $damage) {

                // Get the damage details
                $damageDetails = $damage->damage;

                // Add the damage details to the PDF
                $pdf->MultiCell(0, 10, $damageDetails, 0, 'L');
            }

            // Add the creation date to the PDF
            $createdAt = date('d-m-Y : h:m', strtotime($h->created_at));
            $pdf->Cell(0, 10, 'Tanggal ' . $createdAt, 0, 1);

            // Add an empty line between history records
            $pdf->Ln();
        }

        // Output the PDF as a download
        $pdf->Output('pdf_file.pdf', 'D');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
