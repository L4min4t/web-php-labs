<!doctype html>
<html lang="UA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Лаборатона №4</title>
</head>
<body>
<div class="container">
    <h1 class="center-text">Лабораторна робота №4</h1>
    <hr class="dot">
    <h2 class="center-text">Базовий синтаксис</h2>
    <hr>
    <h3>Вивід інформації</h3>
    <p>
        echo:
        <?php echo "Hello world!" ?>
    </p>
    <p>
        print:
        <?php print 100 ?>
    </p><p>
        json_encode(array):
        <?php
        $arr = array (1, 2, 3, 4, 5);
        echo json_encode($arr);
        ?>
    </p>
    <p>
        print_r:
        <?php $arr = [1, 2];
        print_r($arr); ?>
    </p>
    <p>
        var_dump:
        <?php var_dump([1, 2]) ?>
    </p>
    <p>
        var_export:
        <?php $arr = array ('r' => 'red', 'g' => 'green', 'b' => array ('blue', 'brown', 'black'));
        var_export($arr); ?>
    </p>
    <hr>
    <h3>Рядки</h3>
    <?php
     $HW = 'Hello world!';
     $ST = 'some text here'
     ?>
    <p>
        <?php
        print ("strlen($HW): ");
        echo strlen($HW);
        ?>
    </p>
    <p>
        <?php
        print ("str_word_count($HW): ");
        echo str_word_count($HW);
        ?>
    </p>
    <p>
        <?php
        print ("strrev($HW): ");
        echo strrev($HW);
        ?>
    </p>
    <p>
        <?php
        print ("strpos($HW, 'world'): ");
        echo strpos("Hello world!", "world");
        ?>
    </p>
    <p>
        <?php
        print ("str_replace('world', 'there', $HW): ");
        echo str_replace("world", "there", "Hello world!");
        ?>
    </p>
    <p>
        <?php
        print ('echo $HW . $ST: ');
        echo $HW . $ST;
        ?>
    </p>
    <hr>
    <h3>Цикли</h3>
    <p>
        Цикл на предекремент поки більше 0:
        <?php
        $i = 4;
        while ($i > 0){
            print("$i" . ' ');
            --$i;
        }
        ?>
    </p>
    <p>
        Цикл на перебір масиуву чиклом foreach:
        <?php
        $arr = ['перший', 'другий', 'третій'];
        foreach ($arr as $el){
            print("$el ");
        }
        ?>
    </p>
    <p>
        Цикл for:
        <?php
        for($i = 0; $i <= 4; $i++){
            print("$i ");
        }
        ?>
    </p>
    <hr>
    <h3>Функції</h3>
    <p>
        Рекурсивна функція на знаходження чисел Фібоначі:
        <?php
        $result = '';
        function fib($first, $second, $quantity)
        {
            if ($quantity > 0){
                print("$first ");
                $quantity--;
                fib($second, $first+$second, $quantity);
            }
        }
        fib(0, 1, 10);
        ?>
    </p>
    <hr class="dot">
    <h2>ООП</h2>
    <hr>
    <?php
    require_once 'Apple.php';
    require_once 'Fruit.php';
    $myApple = Apple::getInstanse("Яблуко", "200гр.", "Зелений", "Семеренька");
    $anotherApple = Apple::getInstanse("Яблуко", "100гр.", "Червоний", "Голден");
    ?>
    <p><?php echo $myApple->getInfo();?></p>
    <p><?php echo PHP_EOL;?></p>
    <p><?php print($anotherApple->getInfo());?></p>
    <p><?php print($myApple->eatFruit());?></p>

</div>
</body>
</html>
