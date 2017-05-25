<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 22.05.2017
 * Time: 19:45
 */

require_once "sphinxapi.php";
$mysqli = new mysqli('localhost', 'root', 'gfhjkmjn,fps','v_news');
if($mysqli->connect_errno){
    echo "Connect error";
    exit();
}
$mysqli->set_charset("utf8");
$s = new SphinxClient();
$s->setServer("localhost", 9312);
$s->setMatchMode(SPH_MATCH_PHRASE);

?>
<form action="" method="post">
    <input type="text" name="search" >
    <input type="submit" value="Искать">
</form>
<?php
if(isset($_POST['search'])) {
    $search = htmlspecialchars($_POST['search']);
    $result = $s->query($search);
    $total = $result['total'];
    $matches = array();
    foreach ($result['matches'] as $key => $value) {
        $query = "SELECT text FROM v_news WHERE id=" . $key;
        $res = $mysqli->query($query);
        $row = $res->fetch_assoc();
        $matches[] = $row['text'];
    }

    ?>
    Результаты поиска: <br>
    <b>Найдено строк:</b> <?= $total; ?><br><br>
    <?php
    if ($total) {
        foreach ($matches as $key => $value) {
            echo ++$key.'. ' . $value.'<br><br>';
        }
    }
}
    ?>