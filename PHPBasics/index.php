<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php echo "Welcome to my web site!"; ?>
    </title>
</head>

<body>
    <?
    //include "amortize.php";
    $a = 15;
    // $example = function () {
    //     $a += 100;
    //     echo $a . "\n";
    // };
    // $example();
    // echo $a . "\n";

    // $example = function () use ($a) {
    //     $a += 100;
    //     echo $a . "\n";
    // };
    // $example();
    // echo $a . "\n";
    
    $example = function () use (&$a) {
        $a += 100;
        echo $a . "\n";
    };
    $example();
    echo $a . "\n";
    
    ?>

</body>

</html>