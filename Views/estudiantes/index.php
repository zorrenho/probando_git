<h1> Lista de estudiantes </h1>
<div class="container">
<table class="table table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Promedio</th>
        </tr>
    </thead>
    <tbody>
<?php
//mostramos resultados
if(!$datos){
    echo "<h2><font color='red'>No se encontraron resultados...</font></h2>";
}else{
        foreach ($datos as $row){ 
?>
        <tr>
            <td><?php echo $row["nombre"];?> </td>
            <td><?php echo $row["edad"];?></td>
            <td><?php echo $row["promedio"];?></td>
        </tr>
<?php 
        }
}
 ?>
    </tbody>
</table>

</div>