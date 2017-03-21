<?php
/**
 * Created by PhpStorm.
 * User: daniq
 * Date: 7-3-2017
 * Time: 14:20
 */
echo '<h1>Opdracht 1</h1>';
opdracht11();
opdracht12();
opdracht13();
opdracht14();
opdracht15();
function opdracht11() {
    $numbers = array(0,1,2,3,4,5);
    echo '<p>Opdracht 1.1</p>';
    foreach ($numbers as $v) {
        echo '<br />'.$v;
    }
}
function opdracht12() {
    $numbers = array(0,1,2,3,4,5);
    $numbers[5] = random_int(0, 9);
    echo '<p>Opdracht 1.2</p>';
    foreach ($numbers as $v) {
        echo '<br />'.$v;
    }
}
function opdracht13() {
    $numbers = array(0,1,2,3,4,5);

    array_push($numbers, 6);
    array_push($numbers, 7);

    echo '<p>Opdracht 1.3</p>';
    foreach ($numbers as $v) {
        echo '<br />'.$v;
    }
}
function opdracht14() {
    $mixed = array('Mark', 1, 'lol', 2, 3, 'Snoepie', 'Justin');

    echo '<p>Opdracht 1.4</p>';
    foreach ($mixed as $v) {
        echo '<br />'.$v;
    }
}
function opdracht15() {
    $mixed = array('Mark', 1, 'lol', 2, 3, 'Snoepie', 'Justin');
    $mixed[0] = random_int(1, 900);
    $mixed[1] = random_int(1, 900);
    $mixed[2] = random_int(1, 900);
    echo '<p>Opdracht 1.5</p>';
    foreach ($mixed as $v) {
        echo '<br />'.$v;
    }
}

echo '<h1>Opdracht 2</h1>';
opdracht12();

function opdracht12() {
    $color = array('white', 'green', 'red', 'blue', 'black');
}
?>