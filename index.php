<?php

include 'model/pages.orm.php';
$page = pages_orm::getpage($_app['ini']);

include ROOT.'system/lib/3rdparty/parsedown/Parsedown.php';

echo '<h2>'.$page['title'].'</h2>';
//echo $page['content'];

$Parsedown = new Parsedown();
echo $Parsedown->text($page['content']);

?>