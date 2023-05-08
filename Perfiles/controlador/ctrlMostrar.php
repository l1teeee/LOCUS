<?php

    function cargar(){
        $consultas = new consultas();
        $filas = $consultas->mostrar();

        
        echo "<table>
                <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>tipo</th>
                <th>Foto</th>
                <th>Permisos</th>
                </tr>
        ";
        foreach($filas as $fila){
            echo "<tr>";
            echo "<td>".$fila['nombreUsu']."</td>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['email']."</td>";
            echo "<td>".$fila['tipo']."</td>";
            if(empty($fila['foto'])){
                echo "<td>No se encontro ninguna foto de perfil...</td>";
            }else {
                echo '<td><img src="data:image/jpg;base64, '.base64_encode($fila['foto']).'" width="200px"></td>';
            }
            echo "<td><a href='../controlador/ctrlTipo.php?nombreUsu=".$fila['nombreUsu']."'>Mejorar</a></td>";
            
            echo "</tr>";
        }
        echo "</table>";
    }

    function cargarMods(){
        $consultas = new consultas();
        $filas = $consultas->mostrarMods();

        
        echo "<table>
                <tr>
                <th>Nombre Usuario</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>tipo</th>
                <th>Foto</th>
                <th colspan='2'>Opciones</th>
                <th>Permisos</th>
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
                echo "<td>No se encontro ninguna foto de perfil...</td>";
            }else {
                echo '<td width="250px"><img src="data:image/jpg;base64, '.base64_encode($fila['foto']).'" width="250px"></td>';
            }
            echo "<td><a href='../controlador/ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=eliminar'>Eliminar</a></td>";
            echo "<td ><a href='../controlador/ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=modificar'>Modificar</a></td>";
            echo "<td><a href='../controlador/ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=foto'>Ponerme Foto</a></td>";
            echo "<td><a href='../controlador/ctrlRev.php?nombreUsu=".$fila['nombreUsu']."'>Revocar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    function buscarUsu($nombreUsu){
        $consultas = new consultas();
        $filas = $consultas->buscar($nombreUsu);

        "<table>
                <tr>
                <th>Nombre Usuario</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>tipo</th>
                <th colspan='2'>Opciones</th>
                <th>Permisos</th>
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
                echo "<td><a href='../ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=eliminar'>Eliminar</a></td>";
                echo "<td><a href='../controlador/ctrlUsuario.php?nombreUsu=".$fila['nombreUsu']."&accion=modificar'>Modificar</a></td>";
                echo "<td><a href='../controlador/ctrlRev.php?nombreUsu=".$fila['nombreUsu']."'>Revocar</a></td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    }

?>