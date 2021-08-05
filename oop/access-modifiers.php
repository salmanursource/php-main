<?php

class User
{
    // instance properties
    public $username;
    private $email;

    // instance functions
    public function __construct($username, $email)
    {
        //$this->username = 'ken';
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        //return "added a new friend";
        return "$this->username just added a new friend";
    }
}

$userOne = new User('Aeraf', 'aeraf@outlook.com');
$userTwo = new User('Sarfaraz', 'sarfaraz@gmail.com');

echo $userOne->email;
echo $userTwo->email;

?>

<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>