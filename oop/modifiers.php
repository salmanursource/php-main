<!DOCTYPE html>
<html>

<body>

    <?php
    class Car
    {
        public $model;   // anyone can access
        public $name;
        protected $type; // only within the class and child classes
        private $noOfGears; // only within the class
    }

    $carObj = new Car();
    $carObj->model = '2020'; // OK
    $carObj->name = 'Maruti Ertiga'; // OK
    $carObj->type = 'SUV'; // ERROR
    $carObj->noOfGears = 5; // ERROR
    ?>

</body>

</html>