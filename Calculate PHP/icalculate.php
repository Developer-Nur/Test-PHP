<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form method="post" action="#">
            <input type="number" name="num1" required placeholder="Enter first number">
            <input type="number" name="num2" required placeholder="Enter second number">
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract" selected>Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="persentage">Persentage</option>
                <option value="divide">Division</option>
                <option value="binary">Binary Conversion</option>
                <option value="octal">Octal Conversion</option>
                <option value="hexadecimal">Hexadecimal Conversion</option>
            </select>
            <button type="submit">Calculate</button>
        </form>
        <div id="expretion">
        <!-- should use this formate to avoid warning (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") 
         -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];               
// basic calculator using ternary oparetor
                $result = $operation == "add" ? $num1 + $num2
                :($operation == "subtract"? $num1 - $num2
                :($operation == "multiply"? $num1 * $num2
                :($operation == "persentage"? ($num1 / 100) * $num2
                :($operation == "divide" && $num2 != 0 ? $num1 / $num2
                :($operation == "binary"? decbin($num1)
                :($operation == "octal"? decoct($num1)
                :($operation == "hexadecimal"? dechex($num1)
                :"Can't devide by 0")))))));
                echo "Result: $result";
// basic calculator using php match
                // $result = match ($operation){
                //     "add" => $num1 + $num2,
                //     "subtract" => $num1 - $num2,
                //     "multiply" => $num1 * $num2,
                //     "persentage" => ($num1 / 100) * $num2,
                //     "divide" => $num2 != 0 ? $num1 / $num2 : "Can't devide by 0",
                //     "binary" => decbin($num2),
                //     "octal" => decoct($num2),
                //     "hexadecimal" => dechex($num2),
                //     default => "Number Invalid"
                // };
                // echo "Result: $result";
// basic calculator using if else
                // if ($operation == "add"){
                //     $result = $num1 + $num2;
                //     echo "Result: $result";
                // }elseif($operation == "subtract"){
                //     $result = $num1 - $num2;
                //     echo "Result: $result";
                // }elseif($operation == "multiply"){
                //     $result = $num1 * $num2;
                //     echo "Result: $result";
                // }elseif($operation == "persentage"){
                //     $result = ($num1 / 100) * $num2;
                //     echo "Result: $result";
                // }elseif($operation == "divide"){
                //     if($num2 != 0){
                //         $result = $num1 / $num2;
                //         echo "Result: $result";
                //     }else{
                //         echo "Can't devide by 0";
                //     }   
                // }elseif($operation == "binary"){
                //     echo "Binary: " . decbin($num1);
                // }elseif($operation == "octal"){
                //     echo "Octal: " . decoct($num1);
                // }elseif($operation == "hexadecimal"){
                //     echo "Hexadecimal: " . dechex($num1);
                // }
// calculator using switch case
            //     switch ($operation) {
            //         case "add":
            //             $result = $num1 + $num2;
            //             echo "Result: $result";
            //             break;
            //         case "subtract":
            //             $result = $num1 - $num2;
            //             echo "Result: $result";
            //             break;
            //         case "multiply":
            //             $result = $num1 * $num2;
            //             echo "Result: $result";
            //             break;
            //         case "persentage":
            //             $result = ($num1 / 100) * $num2;
            //             echo "Result: $result";
            //             break;
            //         case "divide":
            //             if ($num2 != 0) {
            //                 $result = $num1 / $num2;
            //                 echo "Result: $result";
            //             } else {
            //                 echo "can't devide by 0";
            //             }
            //             break;
            //         case "binary":
            //             echo "Binary: " . decbin($num1);
            //             break;
            //         case "octal":
            //             echo "octal: " . decoct($num1);
            //             break;
            //         case "hexadecimal":
            //             echo "Hexadecimal: " . dechex($num1);
            //             break;
        }
            ?>
        </div>
    </div>
</body>

</html>