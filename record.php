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
            <!-- <button class="btn btn-primary" onclick="printTicket()">Print Tickets</button> -->
            <!-- Delete All Tickets Button -->
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                Delete All Tickets
            </button>
        </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you really want to delete all the tickets? This action <strong>cannot</strong> be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="deletealltickets.php" class="btn btn-danger">Yes, Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>Ticket Numbers</th>
                    <th>Status</th>
                    <th>View Ticket ✅</th>
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
                        <td> 
                            <a href="view_ticket.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-info">
                            Print Ticket
                            </a>
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
