<?php
namespace Project2;

header('Content-type: text/plain');

class Autoloader{
    
    public function loader($name)
    {
        include ($name);
    }
}

?>