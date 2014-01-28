    <?
    session_start();
    if (!$_SESSION['email'])
    {
    header ("location:../logreg.php");
    }
    else
    {

    session_destroy();
    header ("location:../");
    }
    ?>