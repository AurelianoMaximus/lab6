<html>
    <head>
        <title>Welcome to the receit page</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <style>

    </style>

    <body>
        <h2 class="text-center">Order Details</h2><br><br>
        <?php
        $pass = $_POST["password"];
        $shippingOption = $_POST["ship"];
        $quantity1 = $_POST["quantity1"];
        $quantity2 = $_POST["quantity2"];
        $quantity3 = $_POST["quantity3"];


        $finalPrice = $quantity1*4 + $quantity2*3 + $quantity3*24 + $shippingPrice;

        if ($shippingOption == "free 7 day")
        {
            $shippingPrice = 0;
        }

        else if ($shippingOption == "50 overnight")
        {
            $shippingPrice = 50;
        }

        else if ($shippingOption == "5 three day")
        {
            $shippingPrice = 5;
        }

        else
        {
            $shippingPrice = 0;
        }


        echo "Welcome to the Receit page"."<br>";
        echo "Your password is:".$password."<br>"."<br>";

        echo "<table>";
            echo "<tr>";
                echo "<td>"."    "."</td>";
                echo "<td>"."Quantity"."</td>";
                echo "<td>"."Cost Per Item"."</td>";
                echo "<td>"."Sub Total"."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>"."Scissors"."</td>";
                echo "<td>".$quantity1."</td>";
                echo "<td>"."$4"."</td>";
                echo "<td>"."$".$quantity1*4,"</td>";
            echo "</tr>";
                echo "<td>"."Pillow"."</td>";
                echo "<td>".$quantity2."</td>";
                echo "<td>"."$3"."</td>";
                echo "<td>"."$".$quantity2*3,"</td>";
            echo "<tr>";  
                echo "<td>"."Monitor"."</td>";
                echo "<td>".$quantity3."</td>";
                echo "<td>"."$24"."</td>";
                echo "<td>"."$".$quantity3*24,"</td>";
            echo "</tr>";
                echo "<td>"."Shipping"."</td>";
                echo "<td>".$shippingOption."</td>";
                echo "<td>".""."</td>";
                echo "<td>"."$".$shippingPrice."</td>";
            echo "<tr>";
                echo "<td>".""."</td>";
                echo "<td>"."Total Cost"."</td>";
                echo "<td>".""."</td>";
                echo "<td>"."$".$finalPrice."</td>";
            echo "</tr>";
        echo "</table>";
        ?>
    </body>

</html>
