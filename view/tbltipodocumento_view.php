<!DOCTYPE html> 
<html>
 <head> 
   <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
   <title>Ejemplo 2 MVC PHP</title>  
 </head>
 <body>
   
        <h1> nuevo registro </h1>
        <br>
        <form name="form1" method="post" action="index.php?accion=guardar">
            
            <p>nombre: <input type="text" name="txtnombre" ></p>
            <p><input type="submit" name="btnguardar" value="Guardar "></p>
</form>
   <br>
    <table>
       <thead>
           <tr>
               <th>id</th>
               <th>Nombre documento</th>
               <th>Modificar</th>
               <th>Eliminar</th>
           </tr>
       </thead>
         <tbody>
             <?php foreach($consulta as $datos):?>
               <tr>
                  <td> <?php echo $datos['idtipo'] ?> </td>
                  <td> <?php echo $datos['nombre'] ?> </td>
                  <td> <a href="index.php?accion=modificar&id=<?php echo $datos['idtipo'] ?>">modificar</a></td>
                  <td> <a href="index.php?accion=eliminar&id=<?php echo $datos['idtipo'] ?>">Eliminar</a></td>
               </tr>  
               <?php endforeach; ?>          
         </tbody>
    </table>

  </body>







 </html>