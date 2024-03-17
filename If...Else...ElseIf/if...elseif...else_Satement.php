<html>
    <head>
    </head>
    <body>
        <?php

        // variable
        $t = date("H");

        //if...elseif...else Statement
        if ($t < 10) {
            echo "Have a good morning!";
        } elseif ($t <20) {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
        ?>
    </body>
</html>