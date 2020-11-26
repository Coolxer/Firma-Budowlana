
<?php
if (empty($_SESSION['logged']))
    include('home/notlogged.php');
elseif ($_SESSION['role'] == 'klient')
    echo "a is equal to b";
elseif ($_SESSION['role'] == 'kierownik')
    echo "a is smaller than b";
else
    echo 'ksiegowy';
