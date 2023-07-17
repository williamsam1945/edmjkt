<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\SalesInvoice;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index() {
        return view('pages.sales.register');
    }

    public function store(Request $request) {
        $request->validate([
            'no_invoice' => 'required',
            'invoice_date' => 'required',
            'invoice_due_date' => 'required',
            'payment_method' => 'required'
        ]);

        // SalesInvoice::create($request->all());
        SalesInvoice::create([
            'no_invoice' => $request->no_invoice,
            'invoice_date' => $request->invoice_date,
            'invoice_due_date' => $request->invoice_due_date,
            'payment_method' => $request->payment_method
        ]);

        return redirect('sales-register-invoice')->with('success', 'Invoice Created!');
    }

    public function all() {
        $invoices = SalesInvoice::all();
        return view('pages.sales.settle', compact('invoices'));
    }

    public function createPDF() {
        $data = SalesInvoice::all();
        $pdf = PDF::loadview('export.settle-export', compact('data'));
        return $pdf->download('settle-invoices.pdf');
    }
}
