
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/styles/edit.css">
  <style type="text/css">
${demo.css}
    </style>
        
<div class="main-content">
        <section class="section">

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h2 class="text-center">Resultados Electorales</h2>
                  </div>
                  <div class="card-body w-100">
                    <ul class="nav nav-pills content-justify-center d-flex" id="myTab3" role="tablist">
                      <li class="nav-item w-25 p-2 flex-fill bd-highlight">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                          aria-controls="home" aria-selected="true" size='23'>Personeros</a>
                      </li>
                      <li class="nav-item w-25 p-2 flex-fill bd-highlight">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                          aria-controls="profile" aria-selected="false">Contralores</a>
                      </li>
                      <li class="nav-item w-25 p-2 flex-fill bd-highlight">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                          aria-controls="contact" aria-selected="false">Cabildantes</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                          <div class="card-body">
                            <div class="table-responsive">
                               <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Resultados Electorales'
        },
        subtitle: {
            text: 'Personeros'
        },
        xAxis: {
            categories: [
            <?php foreach ($results as $result) : 
              if ($result->candidatetype_name == 'Personero' || $result->candidatetype_name == 'Voto en blanco P') {
            ?>              

                ['<?php echo $result->candidate ?>'],
            <?php
            }
            ?>    
            <?php endforeach ?>
            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Votos',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Votos'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 200,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Total De Votos',

            data: [
              <?php foreach ($results as $result) : 
              if ($result->candidatetype_name == 'Personero' || $result->candidatetype_name == 'Voto en blanco P') {
            ?>              

                [<?php echo $result->number_votes ?>],
            <?php
            }
            ?>    
            <?php endforeach ?>
            ]
        }]
    });
});
    </script>
    <div id="container" style="min-width: 600px; height: 400px; margin: 0 auto"></div>
                            </div>
                          </div>  
                      </div>
                    
                      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                          <div class="card-body">
                            <div class="table-responsive">
                              <script type="text/javascript">
$(function () {
    $('#containerr').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Resultados Electorales'
        },
        subtitle: {
            text: 'Contralores'
        },
        xAxis: {
            categories: [
            <?php foreach ($results as $result) : 
              if ($result->candidatetype_name == 'Contralor' || $result->candidatetype_name == 'Voto en blanco C') {
            ?>              

                ['<?php echo $result->candidate ?>'],
            <?php
            }
            ?>    
            <?php endforeach ?>
            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Votos',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Votos'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 200,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Total De Votos',
            data: [
              <?php foreach ($results as $result) : 
              if ($result->candidatetype_name == 'Contralor' || $result->candidatetype_name == 'Voto en blanco C') {
            ?>              

                [<?php echo $result->number_votes ?>],
            <?php
            }
            ?>    
            <?php endforeach ?>
            ]
        }]
    });
});
    </script>
    <div id="containerr" style="min-width: 785px; height: 400px; margin: 0 auto"></div>
                            </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                        <div class="card-body">
                          <div class="table-responsive">
<script type="text/javascript">
$(function () {
    $('#containerC').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Resultados Electorales'
        },
        subtitle: {
            text: 'Cabildantes'
        },
        xAxis: {
            categories: [
            <?php foreach ($results as $result) : 
              if ($result->candidatetype_name == 'Cabildante' || $result->candidatetype_name == 'Voto en blanco CB') {
            ?>              

                ['<?php echo $result->candidate ?>'],
            <?php
            }
            ?>    
            <?php endforeach ?>
            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Votos',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Votos'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 200,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Total De Votos',
            data: [
              <?php foreach ($results as $result) : 
              if ($result->candidatetype_name == 'Cabildante' || $result->candidatetype_name == 'Voto en blanco CB') {
            ?>              

                [<?php echo $result->number_votes ?>],
            <?php
            }
            ?>    
            <?php endforeach ?>
            ]
        }]
    });
});
    </script>
    <div id="containerC" style="min-width: 785px; height: 400px; margin: 0 auto"></div>
                          </div>
                        </div>
                      </div>
                        <a href="?controller=home" type="button" class="btn btn-primary float-right">Volver </a>
                    </div>
                  </div>
                </div>
              </div>

        
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>

  <script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
  

