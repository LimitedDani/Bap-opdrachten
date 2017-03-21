<html>
    <head>
        <title>Opdracht met de switch</title>
    </head>
    <body>
    <p>Typ: rico, justin of peer</p>
    <form action="index.php" method="get">
        <input type="text" name="choice"/>
        <input type="submit" value="Druk is ffkes op dat knoppie"/>
    </form>
    </body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: daniq
 * Date: 28-2-2017
 * Time: 14:40
 */
if(isset($_REQUEST['choice'])) {
    $keuze = $_REQUEST['choice'];
    switch ($keuze) {
        case 'rico':
            echo 'Ik ben eigenlijk blauw';
            break;
        case 'justin':
            echo 'Dit is justin, hij woonde in Duitsland, hij hield graag van (ver)gassen';
            break;
        case 'peer':
            echo '<img src="data:image/jpeg;base64,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" alt=""/>';
            break;
        default:
            echo 'Dat is niet aardig';
            break;
    }
}