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
              <li class="breadcrumb-item"><a href="#">Profes</a></li>
              <li class="breadcrumb-item active">Nuevo</li>
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
                <h3 class="card-title">Profes</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start   -->

                <form action="includes/models/studentsModel2.php" id="guardar-registro" method="POST" autocomplete="off" enctype="multipart/form-data">
                   <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Nombre del Profesor" name="nameaddp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDni">Apellido</label>
                    <input type="text" class="form-control" id="exampleInputDni" placeholder="Apellido del Profesor" name="lnameaddp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="emailaddp">
                  </div>
                </div>
                <div class="card-footer">
                <input type="hidden" name="registro" value="nuevo">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
<!--
              <form name="form1" method="post" action="./modeles/studentModel2.php">
              <tr> 
			        	<td>Nombre</td>
			      	<td><input type="text" name="nameaddp" value="<?php echo $student['profeNombre'];?>"></td>
		          </tr>
		          <tr> 
			        	<td>Apellido</td>
			      	<td><input type="text" name="lnameaddp" value="<?php echo $student['profeApellido'];?>"></td>
	        		</tr>
		        	<tr> 
		        		<td>Email</td>
		      		<td><input type="email" name="emailaddp" value="<?php echo $student['profeEmail'];?>"></td>
		        	</tr>
		        	<tr>
		        		<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
		        		<td><input type="submit" name="nuevo" value="Nuevo"></td>
		        	</tr>

               <div class="card-footer">
                <input type="hidden" name="registro" value="nuevo">
                <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-primary">Guardar</button> -->
                
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
