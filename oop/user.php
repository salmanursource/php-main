<?php

class User
{
    public $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        return "$this->username just added a new friend";
    }

    //getter - a function that gets value of a property 
    public function getEmail()
    {
        return $this->email;
    }

    // setters - a function that sets value of a property 
    public function setEmail($email)
    {
        $positionOfAt = strpos($email, '@'); // aeraf@outlook.com -> 5

        if ($positionOfAt > -1) {
            $this->email = $email;
        };
    }
}

$userOne = new User('Aeraf', 'aeraf@outlook.com');
$userOne->username = 'Aeraf Abuhuseina';
$userOne->setEmail('aeraf123@outlook.com');

echo $userOne->username . '<br>';
echo $userOne->getEmail() . '<br>';
echo $userOne->addFriend() . '<br><hr>';

$userTwo = new User('Sarfaraz', 'sarfaraz@gmail.com');
echo $userTwo->username . '<br>';
echo $userTwo->getEmail() . '<br>';
echo $userTwo->addFriend() . '<br><hr>';

?>

<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>