<html>
    <head>
        <title>Assignment</title>
    </head>
    <body>
        <?php
            //------(Q1)-------
            echo "Q1)<br>";
            //call
            //i. condition true!!!
            evaluate("kushal karki",20,70,3);
            //ii. condition false!!!
            evaluate("Apple Mango",90,70,7);



            function evaluate($name,$attendence,$hygiene,$rating)
            {
                if($attendence<80 || $hygiene<50 || $rating<2)
                {
                    echo $name . ", " . "You are fired from the Rojan krina Passal!<br>";
                }
                else
                {
                    echo "Not fired for now..<br>";
                }
            }


            //-------(Q2)-------
            echo "<br><br> Q2)<br>";
            //call
            //i.condition true!!!
            $a="change_evaluation";
            $a("Test",70,20,5);

            //ii. condition false!!!
            $a("hari bahadur",90,40,1);

            //iii.condition true!!!
            $a("sita shrestha",100,55,10);


            function change_evaluation($name,$attendence,$hygiene,$rating)
            {
                if($attendence<80 && $hygiene<50)
                {
                    echo $name . ", " . "You are fired from the Rojan krina Passal!<br>";
                }
                elseif($hygiene<50 and $rating<2)
                {
                    echo $name . ", " . "You are fired from the Rojan krina Passal!<br>";
                }
                else
                {
                    echo "Not fired for now..<br>";
                }
            }
        ?>
    </body>
</html>