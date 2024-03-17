<html>
    <head></head>
    <body>
        <?php

        // variable
        $a = 13;

        // Nested if
        if ($a > 10) {
            echo "Greater than 10";
            if ($a > 20) {
                echo "Also greater than 20";
            } else {
                echo "But not above 20";
            }
        }

        ?>
    </body>
</html>