
<?php 

abstract class naturReservat {

    public $name;
    public $image;

    public function __construct($newName, $newImage) {
        $this->setCommon($newName, $newImage);
    }

    public function setCommon($newName, $newImage) {
    $this->$name = $newName;
    $this->$image = $newImage;
    }

    public abstract function onClick();

    public function draw() {
        echo "<img style='width: 200px; height: 200px;' src='/".$this->image."' onclick='".$this->onClick()."'/>";
    }
}


abstract class Animal extends naturReservat {
 
}

abstract class Plants extends naturReservat {
    
}

class Tiger extends Animal{
    public $image = "tiger.jpg";

    public function onClick() {    
        return 'alert("Jag är en tiger")';
    }
}

class Giraff extends Animal{
    public $image = "giraff.jpg";

    public function onClick() {
        return 'alert("jag är en giraff")';
    }
}

class Apa extends Animal{
   public $image = "apa.jpg";

    public function onClick() {
    return 'alert("jag är en apa")';
    } 

}
    
    $tiger = $_GET['tigrar'];
    $apor = $_GET['apor'];
    $giraffer = $_GET['giraffer'];

    for($i = 0; $i < $tiger; $i++){
        $tigrarna = new Tiger($newName, $newImage);
        $tigrarna->draw();
    
    }

    for($i = 0; $i < $apor; $i++){
        $aporna = new Apa($newName, $newImage);
        $aporna->draw();
    
    }

    for($i = 0; $i < $giraffer; $i++){
        $girafferna = new Giraff($newName, $newImage);
        $girafferna->draw();
    
    }

?>