<?php 
if (!empty($_POST["btnmodificar"])) { 
    if (!empty($_POST["txtnombre"]) and !empty($_POST["txtapellido"]) and !empty($_POST["txtusuario"])) {
        $nombre = $_POST["txtnombre"];
        $apellido = $_POST["txtapellido"];
        $usuario = $_POST["txtusuario"];
        $id=$_POST["txtid"];
        $sql=$conexion->query(" select count(*) as 'total' from usuario where usuario='$usuario'and id_usuario!=$id ");
        if ($sql->fetch_object()->total > 0) { ?>
              <script>
            $(function notificacion() {
                new PNotify({
                    title:"ERROR",
                    type:"error",
                    text:"EL USUARIO <?= $usuario ?> YA EXISTE ",
                    styling:"bootstrap3"
                }) 
            })

        </script>
       <?php } else {
            $modificar=$conexion->query( " update usuario set nombre='$nombre', apellido='$apellido', usuario='$usuario' where id_usuario=$id " );
            if ($modificar == true ) { ?>
                <script>
            $(function notificacion() {
                new PNotify({
                    title:"CORRECTO",
                    type:"success",
                    text:"EL USUARIO SE HA MODIFICADO CORRECTAMENTE ",
                    styling:"bootstrap3"
                }) 
            })

                 </script>
           <?php } else { ?>
            <script>
            $(function notificacion() {
                new PNotify({
                    title:"ERROR",
                    type:"error",
                    text:"ERROR AL MODIFICAR USUARIO ",
                    styling:"bootstrap3"
                }) 
            })

        </script>
           <?php }
            
        }
        
    } else { ?>
        <script>
           $(function notificacion() {
               new PNotify({
                   title:"ERROR",
                   type:"error",
                   text:"LOS CAMPOS ESTAN VACIOS ",
                   styling:"bootstrap3"
               }) 
           })
       </script>
  <?php } ?>
    <script>
      setTimeout(() => {
       window.history.replaceState(null, null, window.location.pathname);
       }, 0);
      </script>
    <?php } 
?>