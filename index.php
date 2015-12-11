<?php                                                                                                       
				
include LF.'system/lib/3rdparty/parsedown/Parsedown.php';                                            

$page = (new LfPages)->getById($_app['ini']);

$this->lf->select['title'] = $page['title'];                                                         

$Parsedown = new Parsedown();                                                                        
//echo '<h2>'.$page['title'].'</h2>';                                                            

// apploader for separate apps.                                                                      
// this addresses the inability to have a home page composed of                                      
$frame = $Parsedown->text($page['content']);                                                                           

$count = 1;                                                                                          
$cwd = getcwd();                                                                                     
preg_match_all('/{([^}]+)}/', $frame, $match);                                                       
foreach($match[1] as $replace)                                                                       
{                                                                                                    
        $ini = NULL;                                                                                 
        $vars = '';                                                                                  

        if(!preg_match('/^'                                                                          
                .'(?:([^#?\/]+))'       // [1] app                                                   
                .'(?:\/([^\/#?]+))'     // [2] /controller                                           
                .'(?:#([^?]+))?'        // [2] #vars                                                 
                .'(?:\?(.*))?'          // [3] ?ini                                                  
        .'$/', $replace, $parts)) continue;                                                          

        $app = $parts[1];                                                                            
        if(isset($parts[2]) && $parts[2] != '')                                                      
                $controller = $parts[2];                                                             
        if(isset($parts[3]) && $parts[3] != '')                                                      
                $vars = explode('/', $parts[3]);                                                     
        if(isset($parts[4]) && $parts[4] != '')                                                      
                $ini = $parts[4];                                                     
			
        chdir(LF.'apps/'.$app);                                                                      
        $ftimer = microtime(true);                                                                   
        //$frame = str_replace('{'.$replace.'}', $this->apploader($app, $ini, $vars), $frame);       
        $frame = str_replace('{'.$replace.'}', $this->apploader($controller, $ini, $vars), $frame);
        
        // needs to be preg replace so it is replaced 1 time                                                  
        
        /*$this->app_timer['Frontpage ('.$count++.') - '.$app.'/'.$vars[0]] = microtime(true) - $ftim
er; //timer for app*/                                                                                
}                                                                                                    
chdir($cwd);                                                                                         

echo $frame; //(new User)->resolveIds( $frame );
