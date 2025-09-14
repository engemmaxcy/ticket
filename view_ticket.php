<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print Ticket</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .ticket {
      width: 300px; /* Small receipt size */
      margin: 20px auto;
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      border: 2px dashed #007bff;
      padding: 15px;
    }
    .ticket-header {
      background: linear-gradient(135deg, #007bff, #00c6ff);
      color: white;
      padding: 10px;
      text-align: center;
      font-size: 14px;
    }
    .ticket-body {
      padding: 10px;
      font-size: 13px;
    }
    .ticket-body h5 {
      font-size: 13px;
      font-weight: bold;
      margin-bottom: 3px;
      color: #007bff;
    }
    .qr-code {
      text-align: center;
      margin-top: 10px;
    }
    .qr-code img {
      width: 100px;
      height: 100px;
    }

    /* Print styles */
    @media print {
      body {
        background: none;
      }
      .ticket {
        box-shadow: none;
        border: none;
        margin: 0;
        width: 100%;
      }
    }
  </style>
</head>
<body onload="window.print()"><!-- Auto open print dialog -->

  <div class="ticket">
    <div class="ticket-header">
      <h4 class="mb-0">🎟 Ticket Pass</h4>
      <small>ID: TCK-2025-001</small>
    </div>
    <div class="ticket-body">
      <div class="mb-2">
        <h5>Ticket Number:</h5>
        <p>123456789</p>
      </div>
      <div class="mb-2">
        <h5>Status:</h5>
        <span class="badge bg-success">Available</span>
      </div>
      <div class="mb-2">
        <h5>Issued To:</h5>
        <p>Emma Kasongo</p>
      </div>
      <div class="mb-2">
        <h5>Date Issued:</h5>
        <p><?= date("l, F j, Y H:i:s"); ?></p>
      </div>

      <div class="qr-code">
        <h5>QR Code</h5>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data=123456789" alt="QR Code">
      </div>
    </div>
  </div>

</body>
</html>
