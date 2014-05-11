<?php

class Person {

    public $name = '';

    public function __construct( $name ) {
        $this->name = $name;
    }

}

$person = new Person( "Joe" );
echo $person->name;



echo"<br/>";

class cat {
    function speak() {
        echo "meow";  
    }
}


$mycat = new cat();
$mycat = cat->speak();
echo $mycat;


?>
