<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php get file</title>
</head>

<body>
    <section>
        Welcome
        <?php
    $un = $_GET["reg_un"];
    $pw = $_GET["reg_pass"];
    $pn = $_GET["reg_pn"];

    if($un == "koren" && $pw =="123" && $pn == "ray" ){
        echo  nl2br ("<h2> Login successfully
         Welcome " . $un . " nice to see you" . "</h2>");
    }
    else{
    echo  nl2br ("<h2> Login failed
    Please try to enter your username\password\pet's name again " . $un . "</h2>");
}
        ?>
    </section>
</body>

</html>