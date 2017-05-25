<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 17.05.2017
 * Time: 20:27
 */
date_default_timezone_set('Asia/Yekaterinburg');
require_once('VK.php');
echo "Starting\n";
$gmworker = new GearmanWorker();
$gmworker->addServer();
$gmworker->addFunction('exampleData', 'loadData');
while ($gmworker->work());
function loadData($job)
{
    $mysqli = new mysqli('localhost', 'root', 'gfhjkmjn,fps','v_news');
    if($mysqli->connect_errno){
        echo "Connect error";
        exit();
    }
    $mysqli->set_charset("utf8");

    //$memcache = new Memcached();
    //$memcache->addServer('127.0.0.1', 11211);

    $vk = new VK\VK();
    $wall = $vk->api('wall.get', array(
        'owner_id' => -24136539,
        'count' => 10,
    ));

    $result = $mysqli->query("SELECT vk_id FROM v_news");
    if($result->num_rows){
        foreach($result as $v){
            foreach ($wall['response'] as $key=>$value){
                if(is_array($value)){
                    //memcached
                    //$memcache->set('news'.$key, $value);
                    if($v['vk_id'] != $value['id']){
                        $mysqli->query("INSERT INTO v_news (vk_id,`date`,text) VALUES (".$value['id'].", ".$value['id'].", '".$value['text']."')");
                    }
                }

            }
        }
    }else{
        foreach ($wall['response'] as $key=>$value) {
            if(is_array($value)) {
                //memcached
                //$memcache->set('news'.$key, $value);
                $mysqli->query("INSERT INTO v_news (vk_id,`date`,text) VALUES (" . $value['id'] . ", ".$value['id'].", '" . $value['text'] . "')");
            }
        }
    }
    file_put_contents('/var/www/html/text.txt', 'cron update '.date("l dS of F Y h:i:s A"));
    $mysqli->close();
	sleep(5);
}
