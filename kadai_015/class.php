<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編_15章課題</title>
 </head>
 
 <body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function set_price(int $price) {
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

        }

        $food = new Food('potato', 250);
        print_r($food);
        ?>
    </p>
    <p>
        <?php
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function set_height(int $height) {
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight; 
            }
        }

        $animal = new Animal('dog', 60, 5000);
        print_r($animal);
        ?>
    </p>
    <p>
        <?php
        $food->set_price(250);
        $food->show_price();
        ?>
    </p>
    <p>
        <?php
        $animal->set_height(60);
        $animal->show_height();
        // echo $animal->height;
        ?>
    </p>
 </body>
 
 </html>