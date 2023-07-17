<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
<body>
  <div class="container">
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
        @foreach ($data as $row)
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>