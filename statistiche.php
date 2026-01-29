<?php include "head.html"; include "database.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-sm-6">
            <h1 class="m-0">Statistiche</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Statistiche</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mb-2">
          <div class="col-sm-12">


<div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Distribuzione giornaliera tipologia di vaccini</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

<?php



$sql = "SELECT CASE 
    WHEN appuntamenti.id_giorno = 1 THEN 'Lunedì'
    WHEN appuntamenti.id_giorno = 2 THEN 'Martedì'
    WHEN appuntamenti.id_giorno = 3 THEN 'Mercoledì'
    WHEN appuntamenti.id_giorno = 4 THEN 'Giovedì'
    WHEN appuntamenti.id_giorno = 5 THEN 'Venerdì'
    WHEN appuntamenti.id_giorno = 9 THEN 'Sabato'
    END as giorno,
    vaccini.tipologia_vaccino, 
    COUNT(*) as numero_vaccini 
    FROM appuntamenti 
    RIGHT JOIN vaccini ON appuntamenti.id_vaccino = vaccini.id 
    GROUP BY giorno, vaccini.tipologia_vaccino 
    ORDER BY FIELD(giorno, 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'), vaccini.tipologia_vaccino";

$db = $db2 -> query($sql);

$result = $db -> fetchAll();

$labels = ['Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];
$data = [];
$tipi_vaccino = [];

foreach($result as $row){
    if (!array_key_exists($row["tipologia_vaccino"], $data)) {
        $data[$row["tipologia_vaccino"]] = array_fill(0, count($labels), 0);
        $tipi_vaccino[] = $row["tipologia_vaccino"];
    }
    $index = array_search($row["giorno"], $labels);
    if ($index !== false) {
        $data[$row["tipologia_vaccino"]][$index] = $row["numero_vaccini"];
    }
}

$labels_json = json_encode($labels);
$data_json = json_encode($data);
$tipi_vaccino_json = json_encode($tipi_vaccino);


?>

<script>

var labels = JSON.parse('<?php echo $labels_json; ?>');
var data = JSON.parse('<?php echo $data_json; ?>');
var tipi_vaccino = JSON.parse('<?php echo $tipi_vaccino_json; ?>');

var colori = ['rgba(173, 255, 47, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(111, 0, 255, 0.2)', 'rgba(255, 205, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(201, 203, 207, 0.2)'];
var bordi = ['rgba(173, 255, 47, 1)', 'rgba(255, 99, 132, 1)', 'rgba(111, 0, 255, 1)', 'rgba(255, 205, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)', 'rgba(153, 102, 255, 1)', 'rgba(201, 203, 207, 1)'];

var datasets = tipi_vaccino.map(function(tipo_vaccino, index) {
	
    return {
        label: tipo_vaccino,
        data: data[tipo_vaccino],
        backgroundColor: colori[index % colori.length],
        borderColor: bordi[index % bordi.length],
        borderWidth: 1
    };
});

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: datasets
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</div>
</div>


 </div>
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->



<?php include "footer.html"; ?>