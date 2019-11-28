<?php

function redirect($to){
    echo "<html><head>
        <meta http-equiv='refresh' content='2; URL=".$to."'>
        <meta name='keywords' content='automatic redirection'>
    </head>
    <body> If your browser doesn't automatically go to the Installation within a few seconds,
    you may want to go to <a href='".$to."'>the destination</a> manually.
    </body></html>";
    die();
}

redirect("index.php/install");

?>
