<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'flux' => 'required|string|max:255',
            'company_id' => 'required|string|max:255',
            'product_id' => 'required|string|max:255',

            'initial_date' => 'required|date',
            'final_date' => 'required|date|after_or_equal:initial_date',
        ]);

        $initial_date = Carbon::parse($request->initial_date)->startOfDay();
        $final_date = Carbon::parse($request->final_date)->endOfDay();

        $movements = Movement::whereBetween('created_at', [$initial_date, $final_date]);

        $product_id = $request->product_id;

        $movements->whereHas('products', function ($query) use ($product_id) {
            if ($product_id != 'T') {
                $query->where('product_id', $product_id);
            }
        });

        if($request->flux != 'T'){
            $movements->where('flux', $request->flux);
        }

        if($request->company_id != 'T'){
            $movements->where('company_id', $request->company_id);
        }

        $movements = $movements->get();

        $pdf = Pdf::loadView('pdf.report', ['title' => 'Teste', 'movements' => $movements]);

        return $pdf->stream('meu_pdf_exemplo.pdf');

        //return view('pdf.report', ["movements" => $movements]);
    }
}
