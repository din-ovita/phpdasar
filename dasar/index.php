<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo "Hello World" ?>
    <br />

    <!-- setelah variable wajib ; -->
    <?php $txt = "hai";
    echo $txt ?>
    <br />

    <!-- var_dump() mengecek data type -->
    <?php $x = 12;
    var_dump($x) ?>
    <br />
    <!-- operators boolean -->

    <!-- if else -->
    <?php $t = 20;
    if ($t > 13) {
        echo "lebih dari 13";
    } else {
        echo "kurang dari 13";
    }
    ?>
    <br />

    <!-- foreach = memunculkan data array, as = alias-->
    <?php
    $car = array("toyota", "suzuki", "bwm");
    foreach ($car as $value) {
        echo "$value <br/>";
    }
    ?>

    <!-- switch -->
    <?php
    $favcolor = "yellow";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
    <br />
    <!-- length = strlen -->
    <!-- reverse the string = strrev -->
    <!-- to replace = str_replace -->

    <!-- function -->
    <?php
    function nama($nama, $nickname)
    {
        echo "Hai, my name is $nama, but somepeople call me $nickname";
    }

    nama("Dinda Novita Puteri Utami", "Tami");

    ?>
    <br>

    <!-- array -->
    <?php
    $snack = array("Chocolate", "Strawberry", "Lemon");
    echo "I like " . $snack[0] . ", " . $snack[1] . " and " . $snack[2] . ".";
    ?>
    <br>

    <!-- date and time, default time 0, inggris -->
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>
    <br>
    <!-- time GMT0 -->
    <?php
    echo "The time is " . date("h:i:sa");
    ?>
    <br>
    <!-- time locale -->
    <?php
    date_default_timezone_set("Asia/Jakarta");
    echo "The time is " . date("h:i:sa");
    ?>
    <br>

    <!-- php oop -->
    <?php
    class Fruit
    {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    ?>
    <br>

    <!-- constructor  __construct, dijalankan ketika post-->
    <?php
    class komputer
    {
        public $prosesor;
        public $memory;
        public $ram;
        public function __construct($prosesor = "Prosesor", $memory = "Memory", $ram = "RAM")
        {
            $this->prosesor = $prosesor;
            $this->memory = $memory;
            $this->ram = $ram;
        }
        public function getData()
        {
            return "$this->prosesor | $this->memory | $this->ram";
        }
    }
    $komputer1 = new komputer("Core i7", "225 GB", "8 GB");
    $komputer2 = new komputer("Core i9", "500 GB");
    echo "Spek Komputer Sekolah : " . $komputer1->getData();
    echo "<br />";
    echo "<br />";
    echo "Spek Komputer Rumah : " . $komputer2->getData();

    ?>
    <br>
    <br>

    <!-- destructor, __destruct, untuk delete -->
    <?php
    class product
    {
        public $ram;
        public function __construct($ram = "RAM")
        {
            $this->ram = $ram;
        }
        public function __destruct()
        {
            echo "RAM komputer {$this->ram}";
        }
    }

    $komputer1 = new product('255 GB');
    ?>
    <br>
    <br>

    <!-- str_word_count = menghitung kata, by spasi -->
    <!--  -->

    <!-- session -->
    <?php
    session_start();
    echo "Id user saya adalah " . $_SESSION['logged_in_user_id'];
    echo '<br>';
    echo "Username saya adalah " . $_SESSION['logged_in_user_name'];
    ?>
    <br>
    <br>
</body>

</html>