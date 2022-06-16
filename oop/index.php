<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo "======Object and class======<br>";
        // class Person{
        //     public $name;
        //     function printName(){
        //         echo $this->name."<br>";
        //     }
        // }
        // $p1=new Person();
        // $p1->printName();
        // $p1->name="chirag";
        // $p1->printName();

        // echo "======Constuctor======<br>";
        // class Person{
        //     public $name;
        //     public $age;
        //     function __construct($name,$age){
        //         $this->name=$name;
        //         $this->age=$age;
        //     }
        //     function display(){
        //         // echo $this->name;
        //         echo "$this->name is $this->age year old";
        //     }
        // }
        // $p1=new Person("chirag",21);
        // $p1->display();
        // echo "======destructor======<br>";
        // class Person{
            //     public $name;
        //     public $age;
        //     function __construct($name,$age){
        //         $this->name=$name;
        //         $this->age=$age;
        //     }
        //     function display(){
        //         // echo $this->name;
        //         echo "$this->name is $this->age year old <br>";
        //     }
        //     function __destruct(){
            //         echo "Object $this->name is destroyed <br>";
            //     }
            // }
            // $p1=new Person("chirag",21);
            // $p1->display();
            
            // echo "======overloading======<br>";
            // class Shape{
            //     function __call($name,$args){
            //         if($name==="area"){
            //             switch(count($args)){
            //                 case 1:
            //                     return $args[0]*$args[0];
            //                 case 2:
            //                     return $args[0]*$args[1];  
            //                 default:
            //                     return "invalid params length";
            //             }
            //         }
            //     }
            // }
            // $s1=new Shape();
            // echo $s1->area(5);
            // echo $s1->area(5,3);
            // echo $s1->area(5,3,8);

            
    // echo "======overriding======<br>";
    // class Person{
    //     function print(){
    //         echo "this is person";
    //     }
    // }
    // class Student extends Person{
    //     function print(){
    //         echo "this is child";
    //     }
    // }
    // $S1=new Student();
    // $S1->print();

    //   echo "======encapsulation======<br>";
    //   class Person{
    //     private $name;
    //     public function setName($name){
    //         $this->name=$name;
    //     }
    //     public function getName(){
    //         return $this->name;
    //     }
    //   }
    //   $p1=new Person();
    //   $p1->setName("chirag");
    //   echo $p1->getName();

    // echo "============single inheritance===========<br>";
    // class Person{
    //     public $name;
    //     public $age;
    //     function __construct($name,$age){
    //         $this->name=$name;
    //         $this->age=$age;
    //     }
    //     function personDetail(){
    //         echo "$this->name is $this->age years old <br>";
    //     }
    // }
    // class Student extends Person{
    //     public $class;
    //     public $college;
    //     function __construct($name,$age,$class,$college){
    //         parent::__construct($name,$age);
    //         $this->class=$class;
    //         $this->college=$college;
    //     }
    //     function studentDetail($marks){
    //         echo "$this->name student from $this->class got $marks";
    //     }
    // }
    // $s1=new Student("chirag",21,12,"tu");
    // $s1->personDetail();
    // $s1->studentDetail(95);
    echo "=============static=============<br>";
    class jptClass{
        public static $name="chirag";
        static function display(){
            echo "this is staic func";
        }

    }
    echo jptClass::$name;
    jptClass::display();

    ?>
</body>
</html>