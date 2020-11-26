<?php

if (!$_SESSION['logged'])
    include('home/quest.php');
elseif ($_SESSION['role'] == 'klient')
    include('home/customer.php');
elseif ($_SESSION['role'] == 'pracownik')
    include('home/employee.php');
elseif ($_SESSION['role'] == 'kierownik')
    include('home/manager.php');
else
    include('home/accountant.php');
