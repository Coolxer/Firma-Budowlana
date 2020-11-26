<?php

if (!$_SESSION['logged'])
    include('howitworks/quest.php');
elseif ($_SESSION['role'] == 'klient')
    include('howitworks/customer.php');
elseif ($_SESSION['role'] == 'pracownik')
    include('howitworks/employee.php');
elseif ($_SESSION['role'] == 'kierownik')
    include('howitworks/manager.php');
else
    include('howitworks/accountant.php');
