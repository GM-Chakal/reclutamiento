<html>
    <body>
        <center><h1>Cuestionario para cancelacion de solicitud</h1></center>
        <?php
            $con=mysqli_connect("localhost","root","","reclutamiento");
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $query = "SELECT * FROM cuestionario_cancelacion_solicitud";
            $result = mysqli_query($con,$query);
            echo "<table border = 1>\n";
            echo "  <tr>\n";
            echo "      <th>Pregunta </th>\n";
            echo "      <th>Editar </th>\n";
            echo "      <th>Eliminar</th>\n";
            echo "</tr>\n";
            while($row = mysqli_fetch_array($result)){
                echo "  <tr>\n";
                echo "      <td>".$row[1]."</td>\n";
                echo "      <td><a href = \"editar_pregunta.php?id=".$row[0]."\">Editar</a></td>\n";
                echo "      <td><a href = \"borrar_pregunta.php?id=".$row[0]."\">Eliminar</a></td>\n";
                echo "  </tr>";
            }
            echo "</table\n"
        ?>
        <label ><a href="preguntas_formulario.php">Agregar preguntas</a></label>
    </body>
</html>