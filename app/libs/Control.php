<?php
/**
 * Clase que controla todo el flujo
 */
class Control{
  
    function __construct()
  {
    $url = $this->separarURL();
    var_dump($url);
  }

  private function separarURL(){
    $url = "";
    if (isset($_GET["url"])) {
      //eliminamos la ultima diagonal
      //gato/perro/
      $url = rtrim($_GET["url"],"/");
      //limpiamos caracteres ajenos a una URL
      $url = filter_var($url,FILTER_SANITIZE_URL);
      //separamos
      $url = explode("/",$url);
    }
    //regresamos el arreglo
	
	
	//echo $_SERVER['REQUEST_TIME_FLOAT'];//The timestamp of the start of the request, with microsecond precision.
	echo $_SERVER['SCRIPT_FILENAME'];   //The absolute pathname of the currently executing script.
	echo "<br>";
	
	echo $_SERVER['SCRIPT_NAME'];   //Contains the current script's path. 
	echo "<br>";
	
	echo $_SERVER['REQUEST_URI'];  //The URI which was given in order to access this page
	echo "<br>";
	
	echo $_SERVER['DOCUMENT_ROOT'];//The document root directory under which the current script is executing, as defined in the server's configuration file.
	echo "<br>";
	
	
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	
	//echo $_SERVER['argv'];
	//echo "<br>";
    return $url;
  }
}
?>