<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Registration</title>
</head>
    <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold text-primary">Tickets Information</h2>
    <div>
        <button class="btn btn-success me-2" onclick="window.location.href='register.php';">Add Ticket</button>
        <button class="btn btn-primary" onclick="printTicket()">Print Tickets</button>
        <button class="btn btn-danger me-2" onclick="window.location.href='deletealltickets.php';"><i class="fa fa-trash"></i> Delete All Tickets</button>
    </div>
</div>


    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>Ticket Numbers</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $syber = $conn->query("SELECT * FROM tickets ORDER BY id DESC");
                while ($row = $syber->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= htmlspecialchars($row['ticketno']) ?></td>
                    <td>
                        <span class="badge <?= ($row['status'] == 0) ? 'bg-success' : 'bg-danger'; ?>">
                            <?= ($row['status'] == 0) ? "Available" : "Taken"; ?>
                        </span>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>


    <script>
        function printTicket() {
            window.print();
        }
        $('.table').DataTable();
    </script>
</body>
</html>
