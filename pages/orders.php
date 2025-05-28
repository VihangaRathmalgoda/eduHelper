<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Orders</h5>
                <h6 class="card-subtitle text-muted">List of all orders</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#12345</td>
                            <td>John Doe</td>
                            <td>2023-05-15</td>
                            <td>$99.99</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>
                                <button class="btn btn-sm btn-primary">View</button>
                                <button class="btn btn-sm btn-danger">Cancel</button>
                            </td>
                        </tr>
                        <!-- More rows would be generated from database -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>