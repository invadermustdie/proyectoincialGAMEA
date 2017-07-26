<!--suppress ALL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

<!--  page-wrapper -->
<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <h1 class="page-header">Escritorio</strong></h1>
        <!-- Page Header -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Proyectos por Distrito</strong>
                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        <canvas id="myChart2" height="150%"></canvas>
                    </div>
                </div>
                <div class="panel-footer">
                    <p>Detalles de información de base de datos actualizada a la fecha <strong>26/07/2017</strong></p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <strong>Montos Invertidos por Distritos (en Millones de Bs.-)</strong>
                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        <canvas id="myChart3" height="170%"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Beneficiarios por Fecha </strong>
                </div>
                <div class="panel-body">
                    <canvas id="myChart" height="50px"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end page-wrapper -->
<script>
    //var ctx = $("myChart").getContext('2d');
    $.post('<?php echo base_url();?>c_graficas/getDistrito', function (data) {

            // paso de paarametros desde el php
            var parametroFecha = [];
            var parametroMonto = [];

            // muestra una alerta en pantalla de lo que nos devuelve el json
            //alert(data);

            var obj = JSON.parse(data);

            $.each(obj, function (i, item) {
                // ir agregando los parametrods que nos devuelve el php
                // lo que esta despues de item. es lo que viene desde la base
                parametroFecha.push(item.urbanizacion);
                parametroMonto.push(item.impactosocial);
            });

            var ctx = $("#myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    //labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    //labels: parametroFecha,
                    labels: ["10/12/16", "11/12/16", "15/12/16", "19/12/16", "22/12/16", "27/12/16"],
                    datasets: [{
                        label: 'Beneficiarios en Miles de habitantes',
                        fill: true,
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        //data: [12, 19, 3, 5, 2, 3],
                        //data: parametroMonto,
                        data: [12, 19, 3, 15, 2, 6],

                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            // este es el otro ejemplo de un chart
            var ctx2 = $("#myChart2");
            var myChart2 = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ["Dist 1", "Dist 2", "Dist 3", "Dist 4", "Dist 5", "Dist 6", "Dist 7", "Dist 8", "Dist 9", "Dist 10", "Dist 11", "Dist 12", "Dist 13", "Dist 14"],
                    datasets: [{
                        label: 'Generación de Proyectos por Distritos ',
                        data: [12, 19, 5, 7, 1, 5, 19, 13, 2, 6, 12, 11, 10, 4],
                        backgroundColor: [
                            'rgba(231, 76, 60, 0.6)',
                            'rgba(142, 68, 173, 0.6)',
                            'rgba(2, 201, 176, 0.6)',
                            'rgba(244, 208, 63, 0.6)',
                            'rgba(235, 152, 78, 0.6)',
                            'rgba(183, 149, 11, 0.6)',
                            'rgba(34, 153, 84, 0.6)',
                            'rgba(46, 134, 193, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(95, 106, 106, 0.6)',
                            'rgba(176, 58, 46, 0.6)',
                            'rgba(214, 219, 223, 0.6)',
                            'rgba(25, 111, 61, 0.6)',
                            'rgba(163, 228, 215, 0.6)'
                        ],
                        borderColor: 'rgba(44, 62, 80, 0.5)'
                        ,
                        borderWidth: 0.5
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            //------------------------------------------------------
            // este es el otro ejemplo de un chart
            var ctx3 = $("#myChart3");
            var myChart3 = new Chart(ctx3, {
                type: 'doughnut',
                data: {
                    labels: ["Dist 1", "Dist 2", "Dist 3", "Dist 4", "Dist 5", "Dist 6", "Dist 7", "Dist 8", "Dist 9", "Dist 10", "Dist 11", "Dist 12", "Dist 13", "Dist 14"],
                    datasets: [{
                        backgroundColor: [
                            'rgba(231, 76, 60, 0.6)',
                            'rgba(142, 68, 173, 0.6)',
                            'rgba(2, 201, 176, 0.6)',
                            'rgba(244, 208, 63, 0.6)',
                            'rgba(235, 152, 78, 0.6)',
                            'rgba(183, 149, 11, 0.6)',
                            'rgba(34, 153, 84, 0.6)',
                            'rgba(46, 134, 193, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(95, 106, 106, 0.6)',
                            'rgba(176, 58, 46, 0.6)',
                            'rgba(214, 219, 223, 0.6)',
                            'rgba(25, 111, 61, 0.6)',
                            'rgba(163, 228, 215, 0.6)'
                        ],
                        borderColor: 'rgba(44, 62, 80, 0.5)'
                        ,
                        borderWidth: 2,

                        data: [12, 19, 3, 15, 20, 24, 7, 12, 13, 3, 13, 29, 14, 17,]
                    }]
                }
            });
        }
    );

</script>




























