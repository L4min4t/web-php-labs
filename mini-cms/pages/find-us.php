<h1 class="our-branches">Наші відділення</h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.569558456315!2d30.46021525597019!3d50.449117828318045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce8314fdfde3%3A0xd09dbe758a8cc765!2z0JrQn9CGINGW0LwuINCG0LPQvtGA0Y8g0KHRltC60L7RgNGB0YzQutC-0LPQviDQmtC-0YDQv9GD0YEgNSDQotCV0KQ!5e0!3m2!1sru!2sua!4v1652197349910!5m2!1sru!2sua"class="my-map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>

<form action="" method="post">
    <select id="branch" name="branch[]" class="my-sel" onchange="this.form.submit()">
        <option <?php echo ($_POST['branch'][0] == 1) ? 'selected' : null;?> value="1">Відділення №1</option>
        <option <?php echo ($_POST['branch'][0] == 2) ? 'selected' : null;?> value="2">Відділення №2</option>
        <option <?php echo ($_POST['branch'][0] == 3) ? 'selected' : null;?> value="3">Відділення №3</option>
        <option <?php echo ($_POST['branch'][0] == 4) ? 'selected' : null;?> value="4">Відділення №4</option>
        <option <?php echo ($_POST['branch'][0] == 5) ? 'selected' : null;?> value="5">Відділення №5</option>
    </select>
    <p class="branch-info"><?php
        $conn = new PDO("mysql:host=localhost;dbname=burgera", 'root', '111111');
        if (isset($_POST['branch'])){
            switch (end($_POST['branch'])) {
                case '1':
                    $data = $conn->query("SELECT * FROM branch_info WHERE number=1");
                    $data = $data->fetchAll();
                    $data = $data[0];
                    echo $data[1] . '<br>' . $data[2] . '<br>' . $data[3];
                    break;
                case '2':
                    $data = $conn->query("SELECT * FROM branch_info WHERE number=2");
                    $data = $data->fetchAll();
                    $data = $data[0];
                    echo $data[1] . '<br>' . $data[2] . '<br>' . $data[3];
                    break;
                case '3':
                    $data = $conn->query("SELECT * FROM branch_info WHERE number=3");
                    $data = $data->fetchAll();
                    $data = $data[0];
                    echo $data[1] . '<br>' . $data[2] . '<br>' . $data[3];
                    break;
                case '4':
                    $data = $conn->query("SELECT * FROM branch_info WHERE number=4");
                    $data = $data->fetchAll();
                    $data = $data[0];
                    echo $data[1] . '<br>' . $data[2] . '<br>' . $data[3];
                    break;
                case '5':
                    $data = $conn->query("SELECT * FROM branch_info WHERE number=5");
                    $data = $data->fetchAll();
                    $data = $data[0];
                    echo $data[1] . '<br>' . $data[2] . '<br>' . $data[3];
                    break;
            }
        } else {
            $data = $conn->query("SELECT * FROM branch_info WHERE number=1");
            $data = $data->fetchAll();
            $data = $data[0];
            echo $data[1] . '<br>' . $data[2] . '<br>' . $data[3];
        }
        ?></p>
</form>

