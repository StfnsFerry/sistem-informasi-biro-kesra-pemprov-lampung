<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>


                    <!-- Content Row -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">

                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Penerima Hibah Rumah Ibadah berdasarkan Kabupaten/Kota</h6>
                                </div>

                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="BarChart"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">

                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Penerima Hibah Tahfidzul Qur'an berdasarkan Kabupaten/Kota</h6>
                                </div>

                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="TahfidzulChart"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">

                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Penerima Hibah Tokoh Agama berdasarkan Kabupaten/Kota</h6>
                                </div>

                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="TokohChart"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <script>
        // Data dari Controller
        var data = <?php echo json_encode($grafik_rumah_ibadah); ?>;

        // Pisahkan kota/kabupaten dan jumlah menjadi dua array terpisah
        var cities = [];
        var counts = [];

        data.forEach(function(item) {
            cities.push(item.kabupaten_kota);
            counts.push(item.jumlah);
        });

        // Buat Bar Chart menggunakan Chart.js
        var ctx = document.getElementById("BarChart");
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: cities,
                datasets: [{
                    label: 'Jumlah Pendaftar per Kabupaten/Kota',
                    data: counts,
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#2e59d9",
                    borderColor: "#4e73df",
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0,
                    },
                },
                scales: {
                    xAxes: [
                        {
                    
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            maxTicksLimit: 15,
                        },
                        maxBarThickness: 25,
                        },
                    ],
                    yAxes: [
                        {
                        ticks: {
                            min: 0,
                            max: 500,
                            maxTicksLimit: 5,
                            padding: 10,
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2],
                        },
                        },
                    ],
                    },
                    legend: {
                    display: false,
                    },
                    tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function (tooltipItem, chart) {
                        var datasetLabel =
                            chart.datasets[tooltipItem.datasetIndex].label || "";
                        return datasetLabel + ": " + number_format(tooltipItem.yLabel);
                        },
                    },
                },
            }
        });

        // Data dari Controller
        var data = <?php echo json_encode($grafik_tahfidzul); ?>;

        // Pisahkan kota/kabupaten dan jumlah menjadi dua array terpisah
        var cities = [];
        var counts = [];

        data.forEach(function(item) {
            cities.push(item.kabupaten_kota);
            counts.push(item.jumlah);
        });

        // Buat Bar Chart menggunakan Chart.js
        var ctx = document.getElementById("TahfidzulChart");
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: cities,
                datasets: [{
                    label: 'Jumlah Pendaftar per Kabupaten/Kota',
                    data: counts,
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#2e59d9",
                    borderColor: "#4e73df",
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0,
                    },
                },
                scales: {
                    xAxes: [
                        {
                    
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            maxTicksLimit: 15,
                        },
                        maxBarThickness: 25,
                        },
                    ],
                    yAxes: [
                        {
                        ticks: {
                            min: 0,
                            max: 500,
                            maxTicksLimit: 5,
                            padding: 10,
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2],
                        },
                        },
                    ],
                    },
                    legend: {
                    display: false,
                    },
                    tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function (tooltipItem, chart) {
                        var datasetLabel =
                            chart.datasets[tooltipItem.datasetIndex].label || "";
                        return datasetLabel + ": " + number_format(tooltipItem.yLabel);
                        },
                    },
                },
            }
        });

        // Data dari Controller
        var data = <?php echo json_encode($grafik_tahfidzul); ?>;

        // Pisahkan kota/kabupaten dan jumlah menjadi dua array terpisah
        var cities = [];
        var counts = [];

        data.forEach(function(item) {
            cities.push(item.kabupaten_kota);
            counts.push(item.jumlah);
        });

        // Buat Bar Chart menggunakan Chart.js
        var ctx = document.getElementById("TokohChart");
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: cities,
                datasets: [{
                    label: 'Jumlah Pendaftar per Kabupaten/Kota',
                    data: counts,
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#2e59d9",
                    borderColor: "#4e73df",
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0,
                    },
                },
                scales: {
                    xAxes: [
                        {
                    
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            maxTicksLimit: 15,
                        },
                        maxBarThickness: 25,
                        },
                    ],
                    yAxes: [
                        {
                        ticks: {
                            min: 0,
                            max: 500,
                            maxTicksLimit: 5,
                            padding: 10,
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2],
                        },
                        },
                    ],
                    },
                    legend: {
                    display: false,
                    },
                    tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function (tooltipItem, chart) {
                        var datasetLabel =
                            chart.datasets[tooltipItem.datasetIndex].label || "";
                        return datasetLabel + ": " + number_format(tooltipItem.yLabel);
                        },
                    },
                },
            }
        });
    </script>
<?= $this->endSection() ?>


            