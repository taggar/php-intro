<?php
session_start();
$anArray = [];
$_SESSION['simpleArray'] = $anArray;
$anAssocArray = [];
$_SESSION['assocArray'] = $anAssocArray;
$anObject = new stdClass();
$_SESSION['anObject'] = $anObject;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object Manipulation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>

    <div class="container-fluid mt-3 pt-5">

        <h1>Object Manipulation</h1>
        <ol>
            <li>Create an array, an associative array and an object in <code>home.php</code>.</li>
            <li>What are the differences between an array, an associative array and an object?
                <ul>
                    <li>Array: no key, only an index. address items as $array[index].</li>
                    <li>Associative array: every item of the array consists of a key-value pair. Items can be addressed as $array[key].</li>
                    <li>Object: is an instance of a class. It is simply a specimen of a class and has a memory allocated. Elements in the object can be addressed using the property names as keys. </li>
                </ul>
            </li>
            <li>Write a for-loop that adds an item to all of the above.</li>
            <li>Write an if-statement that has a 20% chance to edit a random item of one of the above.</li>
            <li>Put this if statement in a loop so every array/object has a random chance of having a random item changed</li>
            <li>Divide the array in half (if uneven items half-1, unless half-1 makes it empty)</li>
            <li>Remove the last item of the associative array</li>
            <li>Add the arrays to the object as <code>arr1</code> and <code>arr2</code></li>
            <li>Loop through the associative array adding all items to the object as <code>key =&gt; value</code></li>
            <li>Save the object in the <code>$_COOKIE</code> superglobal</li>
            <li>Find a way to print this final object on the homepage, in an easily readable way</li>
        </ol>


        <?php
        echo ("<pre>");
        var_dump($_SESSION);
        echo ("</pre>");
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>