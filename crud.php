        <?php
        $server = "127.0.0.1";
        $user = "root";
        $pass = "root";
        $database = "estoque";

        // Conect MySQL
        @$mysqli = new mysqli($server, $user, $pass, $database);

        //Erro
        if (mysqli_connect_errno()) {
            echo "A conexão não foi estabelecida. "
            . "(" . $mysqli->connect_errno . ") "
            . $mysqli->connect_error;
            exit;
        }

        $sql = "SELECT * FROM USER";
        $query = $mysqli->query($sql);

        while ($data = $query->fetch_assoc()) {
            echo "ID: " . $data['id'] . "<br/>";
            echo "Nome: " . $data['name'] . "<br/>";
            echo "E-MAIL: " . $data['email'] . "<br/><hr>";
        }
        ?>