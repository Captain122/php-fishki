<?php
class Router
{
    private $routes;

    public function __construct(){
        $routesPath = ROOT. '\config\routes.php';
        $this->routes = include($routesPath);
        //var_dump($this->routes);
    }

    private function getUri(){
        // poluchit stroku zaprosa
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run(){
        //return request
       $uri = $this->getUri();
       //echo $uri;
       //proverit est li v routes etot uri
       foreach ($this->routes as $uriPattern => $path){
            //sravnivaem uripatern i uri
            if (preg_match("~$uriPattern~",$uri)){
               //opredelit kakoi controoler i action rabotayut
               //inthernal route
               $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
               $segments = explode('/', $internalRoute);
               $controllername = array_shift($segments).'Controller';
               $controllername = ucfirst($controllername);
               $actionname = 'action'.ucfirst(array_shift($segments));
               //echo $actionname;
               //echo $controllername;
               //podklyuchit fayl classa kontrollera
               $controllerFile = ROOT . '/controllers/' .
               $controllername . '.php';
               var_dump($controllerFile);
               if(file_exists($controllerFile)){
                   include_once($controllerFile);
               }    
               $controllerObject = new $controllername;
               $result = $controllerObject->$actionname();
               if($result != null){
                   break;
               }
            }
       }
    }
}
?>