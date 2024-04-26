<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Submission</title>

    <!-- Include necessary CSS files here -->

    <!-- External JavaScript library for Swal.fire() -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Wrapper and other page elements can be added here -->

    <!-- Button to trigger Swal.fire() prompt -->
    <button id="orderButton" class="btn btn-primary">Place Order</button>

    <!-- JavaScript code -->
    <script>
        // Function to trigger Swal.fire() prompt
        Swal.fire({
            title: "Submit your order details",
            html:
                '<input id="user_id" class="swal2-input" placeholder="User ID">' +
                '<input id="item_name" class="swal2-input" placeholder="Item Name">' +
                '<input id="quantity" class="swal2-input" placeholder="Quantity">' +
                '<input id="order_date" type="date" class="swal2-input" placeholder="Order Date">',
            showCancelButton: true,
            confirmButtonText: "Submit",
            showLoaderOnConfirm: true,
            preConfirm: async () => {
                const user_id = document.getElementById('user_id').value;
                const item_name = document.getElementById('item_name').value;
                const quantity = document.getElementById('quantity').value;
                const order_date = document.getElementById('order_date').value;

                try {
                    const response = await fetch('insert_order.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: `user_id=${user_id}&item_name=${item_name}&quantity=${quantity}&order_date=${order_date}`,
                    });

                    if (!response.ok) {
                        throw new Error(await response.text());
                    }

                    return response.text();
                } catch (error) {
                    Swal.showValidationMessage(`Request failed: ${error}`);
                }
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Success!",
                    text: result.value,
                    icon: "success"
                });
            }
        });
    </script>

    <!-- Include necessary JavaScript files and footer content here -->
</body>
</html>
