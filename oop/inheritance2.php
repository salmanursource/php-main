<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

    <?php

    class User
    {
        public $username;
        private $email;

        // constructor - initializes properties
        public function __construct($username, $email)
        {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend()
        {
            return "$this->username just added a new friend";
        }

        // getters
        public function getEmail()
        {
            return $this->email;
        }

        // setters
        public function setEmail($email)
        {
            if (strpos($email, '@') > -1) {
                $this->email = $email;
            };
        }
    }

    class AdminUser extends User
    {
        public $adminLevel;

        public function __construct($username, $email, $adminLevel)
        {
            parent::__construct($username, $email);
            $this->adminLevel = $adminLevel;
        }
    }

    // $userOne = new User('Aeraf Abuhuseina', 'aeraf@outlook.com');
    // $userTwo = new User('Nadeem Khan', 'nadeem@gmail.com');

    $userThree = new AdminUser('Arif Shaikh', 'arif@gmail.com', 4);

    echo $userThree->adminLevel . '<br>';
    echo $userThree->username . '<br>';
    echo $userThree->getEmail() . '<br>';

    ?>


</body>

</html>