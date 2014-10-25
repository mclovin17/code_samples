<!-- Написать класс Cat, который наследуется от класcа Animal. 
    Класс Animal имеет метод getName (name можно передать в конструктор). 
    Класс Cat имеет метод meow (возвращает строку «Cat {catname} is sayig meow». -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
    <h1>Test</h1>

    <?php
        class Animal 
        {
            protected $name;
            public function __construct ($name = '! define a name') 
            {
                $this->name = $name;
            }
            public function getName () 
            {
                return $this->name;
            }
        }

        class Cat extends Animal 
        {
            public function meow () 
            {
                return "Cat " . $this->name . " is saying meow";
            }
        }

        $cat = new Cat ('garfield');

        echo '1test: ' . ($cat->getName () === 'garfield'); // true
        echo '<br> 2test: ' . ($cat->meow () === 'Cat garfield is saying meow'); // true
        echo '<br> 3test: ' . $cat->meow ();
    ?>
    
</body>
</html>

        