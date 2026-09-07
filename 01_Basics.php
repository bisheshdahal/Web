<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Makes the website responsive on different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP class</title>
</head>

<body>

    <!-- Main container -->
    <div class="Container">

        This is my first PHP website

        <?php

        // Prints a line break
        echo "<br>";

        // Prints text using PHP
        echo "Hello world this is printed using PHP";

        // This is a single-line comment
        // Secret algorithm

        ?>


        <?php

        // Defining a constant named PI
        // Constants cannot be changed once defined
        define('PI', 3.14);

        echo "<br>";

        // Printing a message
        echo "Hello world again";

        // -------------------------------
        // COMMENTS IN PHP
        // -------------------------------

        // Single-line comment

        /*
            Multi-line comment
            This comment can span
            multiple lines
        */


        // -------------------------------
        // VARIABLES
        // -------------------------------

        // Creating two variables
        $variable1 = 5;
        $variable2 = 2;

        // Printing the value of variable1
        echo $variable1;

        // Printing the value of variable2
        echo $variable2;

        // Adding two variables
        echo $variable1 + $variable2;


        // -------------------------------
        // OPERATORS IN PHP
        // -------------------------------

        // Arithmetic Operators
        // +  Addition
        // -  Subtraction
        // *  Multiplication
        // /  Division

        echo "<br>";
        echo "<br>";

        // Addition
        echo "The value of variable 1 + variable 2 is ";
        echo $variable1 + $variable2;

        echo "<br>";

        // Subtraction
        echo "The value of variable 1 - variable 2 is ";
        echo $variable1 - $variable2;

        echo "<br>";

        // Multiplication
        echo "The value of variable 1 * variable 2 is ";
        echo $variable1 * $variable2;

        echo "<br>";

        // Division
        echo "The value of variable 1 / variable 2 is ";
        echo $variable1 / $variable2;


        // -------------------------------
        // ASSIGNMENT OPERATORS
        // -------------------------------

        echo "<br>";
        echo "<br>";

        // Assigning the value of variable1 to newVar
        $newVar = $variable1;

        // Same as: $newVar = $newVar + 1;
        $newVar += 1;

        // Other assignment operators:
        // $newVar -= 1;
        // $newVar *= 1;
        // $newVar /= 1;

        echo "The value of new variable is ";
        echo $newVar;


        // -------------------------------
        // COMPARISON OPERATORS
        // -------------------------------

        echo "<h1>Comparison Operators</h1>";

        // == checks if two values are equal
        echo "The value of (1 == 4) is ";
        var_dump(1 == 4);
        echo "<br>";

        // != checks if two values are NOT equal
        echo "The value of (1 != 4) is ";
        var_dump(1 != 4);
        echo "<br>";

        // >= checks if the first value is greater than or equal to the second
        echo "The value of (1 >= 4) is ";
        var_dump(1 >= 4);
        echo "<br>";

        // <= checks if the first value is less than or equal to the second
        echo "The value of (1 <= 4) is ";
        var_dump(1 <= 4);
        echo "<br>";


        // -------------------------------
        // INCREMENT / DECREMENT OPERATORS
        // -------------------------------

        // Post-increment
        // First prints the current value, then increases it by 1
        echo $variable1++;
        echo "<br>";

        echo $variable1;
        echo "<br>";
        echo "<br>";


        // Post-decrement
        // First prints the current value, then decreases it by 1
        echo $variable1--;
        echo "<br>";

        echo $variable1;
        echo "<br>";
        echo "<br>";


        // Pre-increment
        // First increases the value by 1, then prints it
        echo ++$variable1;
        echo "<br>";

        echo $variable1;
        echo "<br>";
        echo "<br>";


        // Pre-decrement
        // First decreases the value by 1, then prints it
        echo --$variable1;
        echo "<br>";

        echo $variable1;
        echo "<br>";
        echo "<br>";


        // -------------------------------
        // LOGICAL OPERATORS
        // -------------------------------

        /*
            Logical operators:

            AND / &&  -> True only when both conditions are true
            OR  / ||  -> True when at least one condition is true
            XOR       -> True when exactly one condition is true
            NOT / !   -> Reverses true/false
        */


        // TRUE AND TRUE = TRUE
        $myVar = (true and true);
        var_dump($myVar);
        echo "<br>";
        echo "<br>";


        // FALSE AND TRUE = FALSE
        $myVar = (false and true);
        var_dump($myVar);
        echo "<br>";
        echo "<br>";


        // TRUE AND FALSE = FALSE
        $myVar = (true and false);
        var_dump($myVar);
        echo "<br>";
        echo "<br>";


        // TRUE OR FALSE = TRUE
        $myVar = (true or false);
        var_dump($myVar);
        echo "<br>";
        echo "<br>";


        // TRUE XOR FALSE = TRUE
        // XOR is true when only one condition is true
        $myVar = (true xor false);
        var_dump($myVar);
        echo "<br>";
        echo "<br>";


        // TRUE XOR TRUE = FALSE
        // Both are true, so XOR returns false
        $myVar = (true xor true);
        var_dump($myVar);
        echo "<br>";
        echo "<br>";


        // FALSE XOR FALSE = FALSE
        $myVar = (false xor false);
        var_dump($myVar);
        echo "<br>";
        echo "<br>";


        // FALSE XOR TRUE = TRUE
        $myVar = (false xor true);
        var_dump($myVar);
        echo "<br>";
        echo "<br>";

        ?>


        <?php

        // -------------------------------
        // DATA TYPES IN PHP
        // -------------------------------

        /*
            Common PHP data types:

            1. String  -> Text
            2. Integer -> Whole numbers
            3. Float   -> Decimal numbers
            4. Boolean -> True or False
            5. Array   -> Collection of values
            6. Object  -> Instance of a class
        */

        echo "<br>Data types <br>";


        // -------------------------------
        // STRING
        // -------------------------------

        // A string contains text
        $var = "This is a string";

        // var_dump() displays the data type and value
        var_dump($var);

        echo "<br>";


        // -------------------------------
        // INTEGER
        // -------------------------------

        // An integer is a whole number
        $var = 67;

        var_dump($var);

        echo "<br>";


        // -------------------------------
        // FLOAT
        // -------------------------------

        // A float is a number containing a decimal
        $var = 67.1;

        var_dump($var);

        echo "<br>";


        // -------------------------------
        // BOOLEAN
        // -------------------------------

        // Boolean can have only two values:
        // true or false
        $var = true;

        var_dump($var);

        echo "<br>";


        // -------------------------------
        // PI FUNCTION
        // -------------------------------

        // pi() is a built-in PHP function
        // that returns the value of Pi
        echo pi();

        ?>

    </div>

</body>

</html>