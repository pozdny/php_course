<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 17.05.2017
 * Time: 19:19
 */
$gmclient= new GearmanClient();
# Указание сервера по умолчанию (localhost).
$gmclient->addServer();
echo  "Sending job\n";

$gmclient->doBackground('exampleData', "test" );

