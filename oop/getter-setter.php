<?php

class User
{
    public $username;
    private $email;

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

    // getters
    public function getEmail()
    {
        return $this->email;
    }

    // setters
    public function setEmail($username)
    {
        if (strpos($username, '@') > -1) {
            $this->email = $username;
        };
    }
}

$userOne = new User('Aeraf', 'aeraf@outlook.com');
$userTwo = new User('Sarfaraz', 'sarfaraz@gmail.com');

echo $userOne->getEmail() . '<br>';
echo $userTwo->getEmail() . '<br>';

$userTwo->setEmail('sarfaraz.d@gmail.com');

echo $userTwo->getEmail() . '<br>';

?>

<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>