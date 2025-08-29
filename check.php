    <div class="container mt-5">
        <h1 class="text-center text-primary"><i class="fas fa-ticket-alt"></i> Ticket Checking Board</h1>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" id="check" class="p-4 bg-white shadow rounded">
                    <div class="mb-3">
                        <label for="ticket" class="form-label">Enter Ticket Number</label>
                        <input name="tick" type="number" class="form-control" id="ticket" placeholder="Enter Ticket Number" required>
                    </div>
                    <div id="msg" class="text-center"></div>
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-search"></i> Check Ticket
                    </button>
                </form>
            </div>
        </div>

        <h2 class="text-center mt-5 text-secondary"><i class="fas fa-list"></i> Tickets Checked</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Ticket Number</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $syber = $conn->query("SELECT * FROM tickets WHERE status=1");
                    while ($row = $syber->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= htmlspecialchars($row['ticketno']) ?></td>
                        <td class="text-success fw-bold">Inside</td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
