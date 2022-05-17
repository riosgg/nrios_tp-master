  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Carreras</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Carreras</a></li>
              <li class="breadcrumb-item active">Lista</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Carreras</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Acciones</th>
                  </tr>
                  
                  </thead>
                  <tbody>
                  
                  <?php
                      try {
                          $stmt = "SELECT * FROM carreras";
                          $resultado = $conn->query($stmt);
                      } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                      }
                      while($admin = $resultado->fetch_assoc() ) { ?>
                          <tr>
                              <td><?php echo $admin['id']; ?></td>
                              <td><?php echo $admin['carrerasNombre']; ?></td>
                              <td>
                                  <a href="editCarreras.php?id=<?php echo $admin['id'] ?>" class="btn bg-orange btn-flat margin">
                                  <i class="fas fa-edit"></i>
                                  </a>
                                  <a href="delCarreras.php?id=<?php echo $admin['id']; ?>" class="btn bg-maroon bnt-flat margin">
                                  <i class="fas fa-eraser"></i>
                                  </a>
                              </td>
                          </tr>
                  <?php }  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->