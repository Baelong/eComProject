<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .container {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        h1 {
            color: #007bff;
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .table {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        th, td {
            vertical-align: middle !important;
        }

        .table thead th {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            border-color: #ffffff;
            font-size: 16px;
            text-transform: uppercase;
        }

        .table th,
        .table td {
            padding: 12px;
        }

        .table tbody tr:hover {
            background-color: #f2f2f2;
        }

        .table-responsive {
            border-radius: 10px;
            margin-bottom: 30px;
        }

        #datepicker {
            width: 200px;
        }

        #chooseDateButton {
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #000;
            border-color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #333;
            border-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-secondary:focus, .btn-secondary.focus {
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }

        .btn-red {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        
        .btn-group {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            grid-gap: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= __('User Profile') ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href='<?= __('/ClientProfile/index') ?>'><?= __('Home') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='<?= __('/ClientProfile/edit_profile') ?>'><?= __('Modify my profile') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= __('/Appointment/clientAppointments') ?>"><?= __('My Appointments') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='<?= __('/Client/browse_barbers') ?>'><?= __('Browse for barbers') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= __('/Client/logout') ?>"><?= __('Logout') ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mb-4"><?= __('Barber Chosen') ?></h1>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col"><?= __('First Name') ?></th>
                        <th scope="col"><?= __('Last Name') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $index => $barber): ?>
                        <tr class="barber-row active" data-barber-id="<?= $barber->barber_profile_id ?>">
                            <td><?= $barber->first_name ?></td>
                            <td><?= $barber->last_name ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <h1 class="mb-4 mt-5"><?= __('Services Selected') ?></h1>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col"><?= __('Name') ?></th>
                        <th scope="col"><?= __('Description') ?></th>
                        <th scope="col"><?= __('Price') ?></th>
                        <th scope="col"><?= __('Discount') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data2 as $index => $service): ?>
                        <tr class="service-row active" data-service-id="<?= $service->service_id ?>">
                            <td><?= $service->name ?></td>
                            <td><?= $service->description ?></td>
                            <td><?= $service->price ?></td>
                            <td><?= $service->discount ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <h1 class="mb-4 mt-5"><?= __('Date Chosen') ?></h1>

        <h4> 
            <tr class="date">
                <td><?= $data3 ?></td>
            </tr>
        </h4>

        <div class="mt-5">
            <h1><?= __('Select Time') ?></h1>
            <div class="btn-group">
                <?php for($i = 0; $i <= 16; $i++): ?>
                    <?php
                        $hour = floor($i / 2) + 9;
                        $minute = ($i % 2) ? "30" : "00";
                        $time = $hour . ":" . $minute;
                        $id = $i + 1;
                        $slotTaken = false;
                        foreach ($data4 as $appointment) {
                            if ($id == $appointment->slot) {
                                $slotTaken = true;
                                break;
                            }
                        }
                    ?>
                    <?php if ($slotTaken): ?>
                        <button class="btn btn-secondary btn-red" id="<?= $id ?>" disabled><?= $time ?></button>
                    <?php else: ?>
                        <button class="btn btn-secondary" id="<?= $id ?>"><?= $time ?></button>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.btn-group').on('click', '.btn-secondary', function() {
                var selectedSlot = $(this).attr('id'); 
                if(selectedSlot) {
                    var form = $('<form method="POST" action="/Appointment/ConfirmInfo"></form>');
                    form.append('<input type="hidden" name="slot" value="' + selectedSlot + '">');
                    form.appendTo('body').submit();
                } else {
                    alert('Please select a Time.');
                }
            });
        });
    </script>
</body>

</html>
