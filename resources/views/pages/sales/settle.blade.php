@extends('layouts.main')

@section('container')
  <div class="container">
    {{-- <button type="button" class="btn btn-success m-4">Export</button> --}}
    <a href="/settle-sales-invoice-export" class="">Export</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">No Invoice</th>
          <th scope="col">Invoice Date</th>
          <th scope="col">Invoice Due Date</th>
          <th scope="col">Payment Method</th>
        </tr>
      </thead>
      <tbody>
        @php
          $index = 1;
        @endphp
        @foreach ($invoices as $row)
          <tr>
            <th scope="row">{{ $index }}</th>
            <td>{{ $row->no_invoice }}</td>
            <td>{{ \Carbon\Carbon::parse($row->invoice_date)->format('d/m/Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($row->invoice_due_date)->format('d/m/Y') }}</td>
            <td>{{ ucfirst($row->payment_method) }}</td>
          </tr>
          @php
            $index++
          @endphp
        @endforeach
      </tbody>
    </table>
  </div>
@endsection