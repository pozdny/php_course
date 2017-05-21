<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 17.05.2017
 * Time: 20:20
 */

$gmclient = new GearmanClient();
$gmclient->addServer();
echo "Sending job\n";
$gmclient->doBackground('exampleData', '3');
//echo '555';
