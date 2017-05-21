<?php
require_once('VK.php');
function getVkNews() {
   $vk = new VK\VK();
   $wall = $vk->api('wall.get', array(
       'owner_id' => -124650316,
       'count' => 10,
   ));
   echo '<pre>'; print_r($wall); echo '</pre>';
   sleep(0.5);
}
getVkNews();

