@extends('layouts.main')

@section('container')
  <div class="container">
    <h1>Register Sales Invoice</h1>
    
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <form action="/sales-register-invoice" method="post">
      @csrf
      <div class="form-group">
        <label for="no_invoice">No. Invoice</label>
        <input type="text" name="no_invoice" id="no_invoice" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="invoice_date">Date Invoice</label>
        <input type="date" name="invoice_date" id="invoice_date" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="invoice_due_date">Due Date Invoice</label>
        <input type="date" name="invoice_due_date" id="invoice_due_date" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="payment_method">Payment Method</label>
        <select name="payment_method" id="payment_method" class="form-control" required>
          <option value="">Select a category</option>
          <option value="cash">Cash</option>
          <option value="credit-card">Credit Card</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary mt-4">Submit</button>

    </form>

  </div>
@endsection