<?php

    function cargar(){
        $consultas = new consultas();
        $filas = $consultas->mostrar();

        
        echo "<table>
                <tr>
                <th>User</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Type</th>
                <th>Photo</th>
                <th>Permissions</th>
                </tr>
        ";
        foreach($filas as $fila){
            echo "<tr>";
            echo "<td>".$fila['nombreUsu']."</td>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['email']."</td>";
            echo "<td>".$fila['tipo']."</td>";
            if(empty($fila['foto'])){
                echo "<td>There is no profile picture...</td>";
            }else {
                echo '<td><img src="data:image/jpg;base64, '.base64_encode($fila['foto']).'" width="200px"></td>';
            }
            echo "<td><a href='../controlador/ctrlTipo.php?nombreUsu=".$fila['nombreUsu']."'>Upgrade</a></td>";
            
            echo "</tr>";
        }
        echo "</table>";
    }

    function cargarMods(){
        $consultas = new consultas();
        $filas = $consultas->mostrarMods();

        
        echo "<table>
                <tr>
                <th>Username</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Type</th>
                <th>Photo</th>
                <th colspan='2'>Options</th>
                <th>Permissions</th>
                </tr>
        ";
        foreach($filas as $fila){
            echo "<tr>";
            echo "<td>".$fila['nombreUsu']."</td>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['email']."</td>";
            echo "<td>".$fila['pass']."</td>";
            echo "<td>".$fila['tipo']."</td>";
            if(empty($fila['foto'])){
                echo "<td>There is no profile picture...</td>";
            }else {
                echo '<td width="250px"><img src="data:image/jpg;base64, '.base64_encode($fila['foto']).'" width="250px"></td>';
            }
            echo "<td><a href='../controlador/ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=eliminar'>Delete</a></td>";
            echo "<td ><a href='../controlador/ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=modificar'>Modify</a></td>";
            echo "<td><a href='../controlador/ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=foto'>Change Photo</a></td>";
            echo "<td><a href='../controlador/ctrlRev.php?nombreUsu=".$fila['nombreUsu']."'>Revoke</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    function buscarUsu($nombreUsu){
        $consultas = new consultas();
        $filas = $consultas->buscar($nombreUsu);

        "<table>
                <tr>
                <th>Username</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Type</th>
                <th colspan='2'>Options</th>
                <th>Permissions</th>
                </tr>
        ";
        
        if(isset($filas)){
            foreach($filas as $fila){
                echo "<tr>";
                echo "<td>".$fila['nombreUsu']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['email']."</td>";
                echo "<td>".$fila['pass']."</td>";
                echo "<td>".$fila['tipo']."</td>";
                echo "<td><a href='../ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=eliminar'>Delete</a></td>";
                echo "<td><a href='../controlador/ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=modificar'>Modify</a></td>";
                echo "<td><a href='../controlador/ctrlRev.php?nombreUsu=".$fila['nombreUsu']."'>Revoke</a></td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    }

?>