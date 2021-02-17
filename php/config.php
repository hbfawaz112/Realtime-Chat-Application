<?php
    $conn = mysqli_connect("localhost", "root", "", "chat" );

    if($conn)
    {
        //echo "databasae connect";
    }
    else{
        echo "db not connectd";
    }

?>