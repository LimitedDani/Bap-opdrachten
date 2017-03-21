<form method="post">
    <input type="text" name="string">
    <input type="submit" name="button" value="submit">
</form>

<?php
/**
 * Created by PhpStorm.
 * User: daniq
 * Date: 13-3-2017
 * Time: 08:42
 */
if(isset($_POST['button'])) {
    $str = $_POST['string'];
    $str_lower = strtolower($str);
    $str_camel = ucwords($str);

    $str_length = strlen($str);
    $str_spaces = substr_count($str, ' ');
    $str_lastSpace = strrpos($str," ");
    $str_firstUppercase = ucfirst($str);
    $str_upper = strtolower($str);
    echo '<p><b>Length of string: </b>'.$str_length.'</p>';
    if($str_spaces > 0) {
        echo '<p><b>There is a space on position: </b>'.$str_lastSpace.'</p>';
    } else {
        echo '<p><b>There are no spaces in this string: </b></p>';
    }
    echo '<p><b>Count of spaces in string: </b>'.$str_spaces.'</p>';
    echo '<p><b>First character of word in uppercase: </b>'.$str_firstUppercase.'</p>';
    echo '<p><b>Full string to uppercase: </b>'.$str_upper.'</p>';

    $helloWorldCase = strcasecmp($str, "Hello World") ? 'Yes' : 'No';

    echo '<p><b>String equals to "Hello World": </b>'.$helloWorldCase.'</p>';

    $helloWorldIgnoreCase = strcasecmp($str, "Hello World") ? 'Yes' : 'No';
    
    echo '<p><b>String equals to "Hello World" or "hello world" or "HELLO WORLD": </b>'.$helloWorldIgnoreCase.'</p>';
}
