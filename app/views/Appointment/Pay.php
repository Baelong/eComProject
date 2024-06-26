<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <style>
        body {
            margin-top: 8%;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #007bff;
            text-align: center;
        }

        .checkout-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        .form-heading {
            margin-bottom: 30px;
            text-align: center;
        }

        h3 {
            color: #333;
            margin-bottom: 15px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .card-images {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .card-images img {
            width: 45%;
        }

        .card-info {
            color: #666;
            margin-bottom: 20px;
        }

        .checkbox-label {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .checkbox-label input[type="checkbox"] {
            margin-right: 10px;
        }

        .form-message {
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= __('User Profile') ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href='/ClientProfile/index'><?= __('Home') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/ClientProfile/edit_profile'><?= __('Modify my profile') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Appointment/clientAppointments"><?= __('My Appointments') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/Client/browse_barbers'><?= __('Browse for barbers') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Client/logout"><?= __('Logout') ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h2><?= __('Checkout') ?></h2>

    <main>
        <div class="container">
            <div class="checkout-form">
                <div class="form-heading">
                    <h4 class="pay-via-card"><?= __('Pay With Card') ?></h4>
                </div>
                <form id="myForm" class="form" method="POST" action="/Appointment/Receipt"
                    onsubmit="return validateForm()">
                    <h3><?= __('Payment Details') ?></h3>
                    <p class="card-info"><?= __('Accepted Cards: Visa, Mastercard, MultiCard') ?></p>
                    <input type="text" placeholder="<?= __('Card Number (XXXX-XXXX-XXXX-XXXX)') ?>" id="cardNumber"
                        required><br>
                    <input type="text" placeholder="<?= __('Expiry Date (XX/XX or XX\XX)') ?>" id="expiry"
                        required><br>
                    <input type="text" placeholder="<?= __('CVC (XXX)') ?>" id="cvc" required><br>

                    <input type="submit" value="<?= __('Pay') ?>">
                </form>
                <p class="form-message"><?= __('By clicking "Pay", you agree to our Terms & Conditions') ?></p>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

    <script>
        function validateForm() {
            var cardNumber = document.getElementById("cardNumber").value;
            var expiry = document.getElementById("expiry").value;
            var cvc = document.getElementById("cvc").value;

            var cardNumberRegex = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
            var expiryRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
            var cvcRegex = /^\d{3}$/;

            if (!cardNumberRegex.test(cardNumber)) {
                alert("<?= __('Invalid card number format! Please enter in the format XXXX-XXXX-XXXX-XXXX') ?>");
                return false;
            }
            if (!expiryRegex.test(expiry)) {
                alert("<?= __('Invalid expiry date format! Please enter in the format XX/XX or XX\\XX') ?>");
                return false;
            }
            if (!cvcRegex.test(cvc)) {
                alert("<?= __('Invalid CVC format! Please enter a 3-digit code') ?>");
                return false;
            }

            return true;
        }
    </script>

</body>

</html>
