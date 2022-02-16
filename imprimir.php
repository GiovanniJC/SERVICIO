
<?php
  include("conexion.php");
  $con=conectar();

  $sql="SELECT * FROM imprimir";
  $query=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>IMPRIMIR</title>
</head>
<body>

    <div class="container mt-lg-5">
  <div class="row">
    <div class="col-md-8">
      <img src="img/logo2.jfif" class="rounded mx-auto d-block" alt=""width="200">


        <h2 class= "fw-bold text-center py-5"mb-5>BIENVENIDO</h2>
         <form action="insertar.php" method="post">

        
              <label for="password" class="form-label">Nombre</label>
              <input type="text" class="form-control mb-3" name="nombre">
           
              <label for="password" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control mb-3" name="Apaterno">
            

            
              <label for="password" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control mb-3" name="Amaterno">
            


            
               <label for="password" class="form-label">Division academica</label>
             <input type="text" class="form-control mb-3" name="division">
    

            
             <label for="password" class="form-label">Nombre del Curso</label>
             <input type="text" class="form-control mb-3" name="curso">
            

            
      
              <label for="password" class="form-label">Fecha Inicio</label>
              <input type="text" class="form-control mb-3" name="fechaI">
   

            <div class="col"></div>
              <label for="password" class="form-label">Feccha Final</label>
              <input type="text" class="form-control mb-3" name="fechaT">
            
            
              <button type="submit" class="btn btn-success">GUARDAR</button>
            

          </form>
           
    </div>
    <div class="col-md-3">
      <button type="submit" class="btn btn-success">IMPRIMIR</button>
    </div>
  </div>

<br>

  <div class="row">
    <div class="col-md-10 text-center">
      <table class="table">
        <thead class="table-success table-striped">
          <h2>registrados</h2>
          <tr>
             <th>nombre</th>
             <th>Apaterno</th>
             <th>Amaterno</th>
             <th>division</th>
             <th>curso</th>
             <th>fechaI</th>
             <th>fechaT</th>
              <th></th>
              
          </tr>

        </thead>

        <tbody>
          <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['Apaterno']?></th>
                                                <th><?php  echo $row['Amaterno']?></th>
                                                <th><?php  echo $row['division']?></th>
                                                <th><?php  echo $row['curso']?></th>
                                                <th><?php  echo $row['fechaI']?></th>
                                                <th><?php  echo $row['fechaT']?></th> 
                                                
                                                
                                                
                                                <th><a href="impri1.php?id=<?php echo $row['nombre'] ?>" class="btn btn-dark">Imprimir</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>


        </tbody>





      </table>


    </div>
    
    
  </div>
</div>

</body>
</html>