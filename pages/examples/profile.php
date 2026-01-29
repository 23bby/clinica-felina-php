<?php include("head1.html"); ?>



    <!-- Sidebar -->
    <div class="sidebar">

      

      <!-- Sidebar Menu -->
       <div class="overflow-auto">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
               <li class="nav-item">
         <a href="../../tabella_appuntamenti.php" class="nav-link active">
          <p>Calendario appuntamenti</p>
          </a>
         </li>

 
               <li class="nav-item">
         <a href="../../form_appuntamenti.php" class="nav-link active">
          <p>Inserisci appuntamento</p>
          </a>
         </li>
         
         <li class="nav-item">
            <a href="#" class="nav-link active">
              <p>
                Gatti
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
         
          <ul class = "nav nav-treeview">
         <li class="nav-item">
         <a href="../../form_gatti_ins.php" class="nav-link active">
          <p>Inserisci gatto</p>
          </a>
         </li>
          <li class="nav-item">
         <a href="../../form_gatti_agg.php" class="nav-link active">
          <p>Modifica gatto</p>
          </a>
         </li>
         </ul>
         

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <p>
                Proprietari
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
         
          <ul class = "nav nav-treeview">
         <li class ="nav-item">
         <a href="../../form_proprietari_ins.php" class="nav-link active">
          <p >Inserisci proprietario</p>
          </a>
         </li>
         <li class ="nav-item">
         <a href="../../form_proprietari_agg1.php" class="nav-link active">
          <p >Modifica proprietario</p>
          </a>
         </li>
         </ul>

         <li class ="nav-item">
         <a href="../../statistiche.php" class="nav-link active">
          <p >Statistiche</p>
          </a>
         </li>
          
           
         <li class="nav-item">
             <a href="#" class="nav-link active"> 
              <p>Profili
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class = "nav nav-treeview">
         <li class ="nav-item">
         <a href="gialloni.php" class="nav-link active">
          <p >Dott. Gialloni</p>
          </a>
         </li>
         <li class ="nav-item">
         <a href="monti.php" class="nav-link active">
          <p >Dott. Monti</p>
          </a>
         </li>
          <li class ="nav-item">
         <a href="seri.php" class="nav-link active">
          <p >Dott. Seri</p>
          </a>
         </li>
         </ul>


         
          
          
          
         
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      </div> <!-- fine scroll -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profilo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profilo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/gatto.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Paolo Gialloni</h3>

                <p class="text-muted text-center">Medico veterinario</p>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  Laurea in medicina veterinaria
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Roma, Italia</p>

               
             

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->



          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  
                </ul>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    
                   <p>
                  
                   </p>

              
                  </div>



                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-yellow">
                          2008
                        </span>
                      </div>
                      <!-- /.timeline-label -->


                      <!-- timeline item -->
                      <div>
                      <i class="fas fa-kiss-beam bg-primary bg-primary"></i> 
                      
                        <div class="timeline-item">

                          <h3 class="timeline-header"><a href="#">Laurea</a></h3>

                        </div>
                      </div>
                      <!-- END timeline item -->

                       <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-yellow">
                          2011
                        </span>
                      </div>
                      <!-- /.timeline-label -->


                      <!-- timeline item -->
                      <div>
                       <i class="fas fa-steam-symbol bg-primary bg-primary"></i> 
                      
                        <div class="timeline-item">

                          <h3 class="timeline-header"><a href="#">Specializzazione in ecografia</a> </h3>

                        </div>
                      </div>
                      <!-- END timeline item -->


                        <div class="time-label">
                        <span class="bg-yellow">
                          2013
                        </span>
                      </div>

                       <!-- timeline item -->
                      <div>
                        <i class="fas fa-globe bg-primary"></i>
                         <div class="timeline-item">

                          <h3 class="timeline-header border-0"><a href="#">Specializzazione in radiologia</a><br>Università La Sapienza</br></h3>
                        </div>
                      </div>
                      <!-- END timeline item -->

                       <div class="time-label">
                        <span class="bg-yellow">
                          2015
                        </span>
                      </div>

                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-thumbs-up bg-primary"></i>

                        <div class="timeline-item">
                         

                          <h3 class="timeline-header"><a href="#">Esercizio della professione</a><br>Clinica felina Marconi</br></h3>

                      
                        </div>
                      </div>
                      <!-- END timeline item -->

                 
                      <div>
                        <i class="far fa-clock bg-yellow"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>


 