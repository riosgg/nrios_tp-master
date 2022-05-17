  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Alumnos</a></li>
              <li class="breadcrumb-item active">Editar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Alumnos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                  try {
                    $stmt = "SELECT * FROM alumnos WHERE id = $id";
                    $resultado = $conn->query($stmt);
                    
                } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                }
                $student = $resultado->fetch_assoc();
                  
            //    while($res = mysqli_fetch_array($result))
             //   {
              //    $name = $res['alumnoNombre'];
               //   $lname = $res['qty'];
                //  $price = $res['price'];
               // }

              ?>

              <form name="form1" method="post" action="./updAlumnosView.php">
              <tr> 
			        	<td>Nombre</td>
			      	<td><input type="text" name="nameupda" value="<?php echo $student['alumnoNombre'];?>"></td>
		          </tr>
		          <tr> 
			        	<td>Apellido</td>
			      	<td><input type="text" name="lnameupda" value="<?php echo $student['alumnoApellido'];?>"></td>
	        		</tr>
		        	<tr> 
		        		<td>Email</td>
		      		<td><input type="email" name="emailupda" value="<?php echo $student['alumnoEmail'];?>"></td>
		        	</tr>
		        	<tr>
		        		<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
		        		<td><input type="submit" name="update" value="Update"></td>
		        	</tr>


               <!--
              <form action="./updAlumnosView.php" id="guardar-registro" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Nombre del Alumno" name="name" value="<?php echo $student['alumnoNombre']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDni">Apellido</label>
                    <input type="text" class="form-control" id="exampleInputDni" placeholder="Apellido del Alumno" name="lastname" value="<?php echo $student['alumnoApellido']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php echo $student['alumnoEmail']; ?>">
                  </div>
                </div>
                /.card-body 
--> 
               <div class="card-footer">
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
               <!-- <button type="submit" class="btn btn-primary">Guardar</button> -->
                
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
  <!-- /.control-sidebar -->
