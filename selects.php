<?php

$db = new mysqli("localhost", "root", "");
$db ->query("SET NAMES utf8");
$db->select_db("asvanyborze");

if ($db->connect_error) {
    http_response_code(404);
    die("Connection failed: " . $db->connect_error);
}

$telepulessql='SELECT megye.MegyeNev,telepules.* FROM megye INNER JOIN telepules ON megye.ID = telepules.MegyeID ORDER BY megye.MegyeNev, telepules.TelepulesNev';

$telepulesresult = $db->query($telepulessql);

if($telepulesresult->num_rows > 0)
{
    $values = $telepulesresult->fetch_all(MYSQLI_ASSOC);
    echo json_encode($values);
}
else
{

    echo json_encode(null);
}

?>