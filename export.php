<?php

    header('Content-Type: application/force-download');
    header('Content-disposition: attachment; filename=nrega.csv');

    print $_POST['exportdata'];

?>