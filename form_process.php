<?php

    //?name=&email=
    ///form_process.php?name=John+Doe&email=teszt%40mail.hu

    if($_POST['name'] != null && $_POST['email'] != null)
    {
        //var_dump($_POST);
        if($_POST['name'] == "John Doe" && $_POST['email'] == "teszt@mail.hu")
            echo "SUCCESS";
        else
            echo "DENIED";
    }


    // if($_GET['name'] != null && $_GET['email'] != null)
    // {
    //     // echo $_GET['name'];
    //     // echo "<br>";
    //     // echo $_GET['email'];

    //     if($_GET['name'] == "John Doe" && $_GET['email'] == "teszt@mail.hu")
    //         echo "SUCCESS";
    //     else
    //         echo "DENIED";
    // }

?>