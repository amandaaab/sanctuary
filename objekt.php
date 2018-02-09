
<?php 

abstract class naturReservat {

    public $name;
    public $image;

    public function __construct() {
    $nameArray = array("rfr", "dfgf", "dfsdf", "greg", "hheej");
    $name = $nameArray;
    $this->name = $name[array_rand($name)];
    }
    
    public abstract function onClick();

    public function draw() {
        echo "<img style='width: 200px; height: 200px; border-radius:100px; margin:15px;' src='/".$this->image."' onclick='".$this->onClick()."'/>";
    }

}


abstract class Animal extends naturReservat {
 
}

abstract class Plants extends naturReservat {
    
}

class Tiger extends Animal{
    public $image = "tiger.jpg";

    public function onClick() {    
        return 'alert("Jag är en tigern '.$this->name.'")';
    }
}

class Giraff extends Animal{
    public $image = "giraff.jpg";

    public function onClick() {
        return 'alert("jag är en giraff '.$this->name.'")';
    }
}

class Apa extends Animal{
   public $image = "apa.jpg";

    public function onClick() {
    return 'alert("jag är en apa '.$this->name.'")';
    } 

}
    
    $tiger = $_GET['tigrar'];
    $apor = $_GET['apor'];
    $giraffer = $_GET['giraffer'];

    for($i = 0; $i < $tiger; $i++){
        $tigrarna = new Tiger();
        $tigrarna->draw();
    
    }

    for($i = 0; $i < $apor; $i++){
        $aporna = new Apa();
        $aporna->draw();
    
    }

    for($i = 0; $i < $giraffer; $i++){
        $girafferna = new Giraff();
        $girafferna->draw();
    
    }

?>