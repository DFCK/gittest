<?php
/**
 * 1. Abstract:
 *    - Một class chỉ Kế thừa một abstract
 *    - là một class cha cho tất cả các class có cùng bản chất.
 *      Bản chất là loại (kiểu). VD loại động vật và loại máy móc cùng
 *      một interface là Runable nhưng khác nhau về bản chất(loại).
 *      Car và Dog đều có thể chạy nhưng Car là máy móc
 *      còn Dog là động vật
 *    - định nghĩa được phần thân cho các phương thức của abstract
 * 2. Interface:
 *    - Một class Kế thừa nhiều interface
 *    - interface gồm nhiều phương thức và tất cả cùng hướng tới một chức năng
 *    - không thể định nghĩa phần thân cho các phương thức của interface
 */
interface Runable{
//    private $speed;
//    public function setData($s)
//    {
//            $this->speed=$s;
//    }
     function getName();
 }
interface Barkable{
    function getAction();
}
class Car implements Runable{
    public function getName(){
        return "Car can run";
    }

}
class Dog implements Runable,Barkable{
    public function getName(){
        return "Dog can run";
    }
    public function getAction(){
        return "Dog can bark Gow gow";
    }
}

abstract class Animal{
    private $color;
    public function setData($c)
    {
        $this->color=$c;
    }
//    abstract public function color();
    abstract public function type();
//    abstract public function useful();
}
class Dog1 extends Animal{
    public function type(){
        return "Dog1 is a animal";
    }
}


abstract class Machine{
    abstract public function type();
}
class Car1 extends Machine{
    public function type(){
        return "Car1 is a machine";
    }
}

//output
$a=new Car();
echo $a->getName();
$b=new Dog();
echo "<br/>" . $b->getName() . " - " . $b->getAction();

//check class implement interface
$interfaces=class_implements("Car");
if(isset($interfaces["Runable"])){
    echo "<br/> Car implement Runable";
}



