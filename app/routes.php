<?php
$this->addRoute('Authentication/index','Authentication,index');
$this->addRoute('Client/login','Client,login');
$this->addRoute('Barber/login','Barber,login');
$this->addRoute('Client/register','Client,register');
$this->addRoute('Barber/register','Barber,register');
$this->addRoute('Client/securePlace' , 'ClientProfile,index');
$this->addRoute('ClientProfile/edit_profile' , 'ClientProfile,modify');
$this->addRoute('Client/logout' , 'Client,logout');
$this->addRoute('Barber/logout' , 'Barber,logout');
$this->addRoute('ClientProfile/createProfile','ClientProfile,createProfile');
$this->addRoute('ClientProfile/index','ClientProfile,index');
$this->addRoute('Appointment/clientAppointments','Appointment,clientAppointments');
$this->addRoute('BarberProfile/createProfile','BarberProfile,createProfile');
$this->addRoute('BarberProfile/index','BarberProfile,index');
$this->addRoute('Barber/securePlace' , 'BarberProfile,index');
$this->addRoute('BarberProfile/editProfile','BarberProfile,editProfile');
$this->addRoute('Client/choose','Client,choose');
$this->addRoute('Client/browse_barbers','Client,browse_barbers');
$this->addRoute('Client/search','Client,search');

