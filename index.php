<?php

//echo orm::qUsers('lf')->cols('id, user, display_name');

/*

$user = new User();
$user->refreshTimeout()->toSession();

// ->fromSession()

pre($user, 'var_dump');
echo 'session:';
pre($_SESSION, 'var_dump');

*/

	
	
	
	

include LF.'system/lib/3rdparty/parsedown/Parsedown.php';
include 'model/page.php';
//if($_app['ini'] != '')


//$this->lf->setTitle($page['title']);
$page = Page::get($_app['ini']);
$this->lf->select['title'] = $page['title'];

$Parsedown = new Parsedown();
echo '<h2>'.$page['title'].'</h2>';

// apploader for separate apps.
// this addresses the inability to have a home page composed of 
$frame = $page['content'];

$count = 1;
$cwd = getcwd();
preg_match_all('/{([^}]+)}/', $frame, $match);
foreach($match[1] as $replace)
{
	$ini = NULL;
	$vars = '';
	
	if(!preg_match('/^'
		.'(?:([^#?]+))' 	// [1] app
		.'(?:#([^?]+))?' 	// [2] #vars
		.'(?:\?(.*))?'		// [3] ?ini
	.'$/', $replace, $parts)) continue;
	
	$app = $parts[1];
	if(isset($parts[2]) && $parts[2] != '') 
		$vars = explode('/', $parts[2]);
	if(isset($parts[3]) && $parts[3] != '') 
		$ini = $parts[3];
	
	chdir(LF.'apps/'.$app);
	$ftimer = microtime(true);
	//$frame = str_replace('{'.$replace.'}', $this->apploader($app, $ini, $vars), $frame);
	$frame = str_replace('{'.$replace.'}', $this->apploader($app, $ini, $vars), $frame); // needs to be preg replace so it is replaced 1 time   
	/*$this->app_timer['Frontpage ('.$count++.') - '.$app.'/'.$vars[0]] = microtime(true) - $ftimer; //timer for app*/
}
chdir($cwd);

echo $Parsedown->text($frame);