<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Desculpas Aleatórias</title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>



        <form>
            <fieldset>
                <legend>Legenda</legend>
                <label>Nome do título</label>
                <input type="text" placeholder="Digite algo...">
                <span class="help-block">Example block-level help text here.</span>
                <label class="checkbox">
                    <input type="checkbox"> Olha eu
                </label>
                <button type="submit" class="btn">Enviar</button>
            </fieldset>
        </form>



        <?php
        $server = "desculpasaleatorias.com.br";
        $user = "root";
        $pass = "SMEM1227jvgs";
        $database = "desculpas";

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
            echo "Nome: " . $data['desculpa'] . "<br/>";
            echo "E-MAIL: " . $data['responsavel'] . "<br/><hr>";
        }
        ?>
    </body>
</html>
