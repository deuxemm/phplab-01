<?php
$title = 'User Functions';
include 'includes/header.php';
?>

<body>
    <h2>
        <?php echo $title ?>
    </h2>

    <?php
    /* Defining a Function*/

    function writeMessage()
    {
        echo "You are a nice person <br/>";
        echo "Have a lovely time! <br/>";
        echo '<p>';
    }

    /* Calling a Function*/
    writeMessage();
    writeMessage();

    // Function with Parameters 
    function addNumbers($num1, $num2)
    {
        $num2 = $num2 + 1;
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 = $sum <br/>";
        echo '<p>';
    }

    // now test our function and show it works
    addNumbers(4, 7);

    /*  Function and variable scope
        we could use Pass by Reference
        use ampersand in parameter.
        OR to be less obscure we can use a return statement.
    */
    function changeNum(&$num)
    {
        $num = $num + 10;
        // $num+= 10;
        // return $num;
    }

    // our variable here has a global scope
    $num = 500;

    echo addNumbers(10, 20);
    echo addNumbers(10, $num);
    echo addNumbers('10', "50");

    echo "Right now 'num' = $num <br/>";
    /* 
    THERE ARE 2 WAYS OF DOING THIS:
    1) function changeNum can use a return statement.
    2) use the & sign in front of the parameter passed into changeNum,
    for it to work and add 10 to num.
    */
    changeNum($num);
    echo $num;

    /*
    For variables used either as parameters or inside a 
    function, those variables can be used/defined more than once,
    because they're only "alive" within the function.
    */

    ?>


    <?php
    require 'includes/footer.php'
        ?>