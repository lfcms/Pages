<?php

include 'model/pages.orm.php';

$page = pages_orm::getpage($_app['ini']);
 
echo '<h2>'.$page['title'].'</h2>';
echo $page['content'];

?>