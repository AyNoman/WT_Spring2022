<?php
if (isset($_POST["Submit"])) {
    $FirstName = $_REQUEST["First Name"];
    if ($FirstName == "") {
        echo "Enter a valid First Name";
    } else {
        echo "Your First Name is-" . $FirstName;
    }
    echo "<br>";
    $LastName = $_REQUEST['LastName'];
    if ($LastName == '') {
        echo "Enter a valid Last Name";
    } else {
        echo "Your Last Name is-" . $LastName;
    }
    echo '<br>';
    $Age = $_REQUEST['Age'];
    if ($Age == '') {
        echo "Enter your Age";
    } else {
        echo "Your Age is-" . $Age;
    }
    echo '<br>';
    if (
        isset($_POST["radioB1"]) || isset($_POST["radioB2"]) || isset($_POST["radioB3"])) 
        {
        if (isset($_POST["radioB1"])) {
            echo "Junior Programmer";
            echo '<br>';
        }
        if (isset($_POST["radioB2"])) {
            echo 'Senior Programmer';
            echo '<br>';
        }
        if (isset($_POST["radioB3"])) {
            echo 'Project Lead';
            echo '<br>';
        }
    } else {
        echo "You selected nothing in RadioBox";
    }
    echo '<br>';
    if (
        isset($_POST["checkboxB1"]) || isset($_POST["checkboxB2"]) || isset($_POST["checkboxB3"])) 
        {
        if (isset($_POST["checkboxB1"])) {
            echo 'JAVA ';
            echo '<br>';
        }
        if (isset($_POST["checkboxB2"])) {
            echo 'PHP';
            echo '<br>';
        }
        if (isset($_POST["checkboxB3"])) {
            echo 'C++';
            echo '<br>';
        }
    } else {
        echo  "You selected nothing in CheckBox";
        echo '<br>';
    }

    $Email = $_POST['Email'];
    if (
        empty($Email) ||
        !preg_match(
            '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            $Email
        )
    ) {
        echo 'Invalid email';
    } else {
        echo 'Your email is ' . $Email . '<br>';
    }

    $Password = $_REQUEST['Password'];
    if (strlen($Password) < 5) {
        echo 'Enter a valid password';
    } else {
        echo 'password is valid';
    }
}
?>