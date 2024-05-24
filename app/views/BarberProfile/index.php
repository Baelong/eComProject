<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        dl {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        dt, dd {
            flex: 1 0 40%;
            text-align: center;
            padding: 10px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }
    </style>
</head>
<body>
	<div class='container'>
		<h1><?= __('Barber profile') ?></h1>
		<dl>
			<dt><?= __('First name:') ?></dt>
			<dd><?= $data->first_name ?></dd>
			<dt><?= __('Last name:') ?></dt>
			<dd><?= $data->last_name ?></dd>
			<dt><?= __('Bio:') ?></dt>
			<dd><?= $data->bio ?></dd>
			<dt><?= __('Phone Number:') ?></dt>
			<dd><?= $data->phone_number ?></dd>
            <dt><?= __('Age:') ?></dt>
			<dd><?= $data->age ?></dd>
		</dl>
        <dd>
		    <a href='/BarberProfile/editProfile'><?= __('Modify my profile') ?></a>
        </dd>
        <dd>
		<a href='/BarberProfile/editProfile'> <?= __(Modify my profile) ?></a>
          </dd>
          
          <dd>
		<a href='/Service/index'><?= __('My Services') ?></a>
          </dd>
          <dd>
        <a href="/Availability/index"><?= __('Availability') ?></a>
         </dd>
        <dd>
            <a href="/Barber/logout"><?= __('Logout') ?></a>
        </dd>
       
       

	</div>
</body>

</html>
