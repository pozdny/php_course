<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 17.05.2017
 * Time: 20:45
 */

require_once "sphinxapi.php";
$s = new SphinxClient();
$s->setServer("localhost", 9312);
$s->setMatchMode(SPH_MATCH_PHRASE);

$search = htmlspecialchars($_POST['search']); echo $search;
$result = $s->query($search);
echo '<pre>';
print_r($result);
echo '</pre>';