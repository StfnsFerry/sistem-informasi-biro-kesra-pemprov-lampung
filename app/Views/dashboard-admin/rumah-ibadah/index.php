<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rumah Ibadah dan Pondok Pesantren</h1>
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">

                    <div class="row no-gutters align-items-center mb-2 mt-2">
                        <div class="col mr-2">
                            <div class="alert alert-warning mb-4" role="alert">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                Segera periksa kelengkapan berkas pendaftar baru untuk dilakukan verifikasi!
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-info text-uppercase mb-1">
                                Pendaftar Baru</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_pendaftar?> Pendaftar</div>
                            <a href="/admin/rumah-ibadah/pendaftar" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                        </div>
                    </div>

                </div>
            </div>            
        </div>

        <div class="col-xl-8">
            <div class="row">

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Masjid</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_masjid?> Unit</div>
                                    <a href="/admin/rumah-ibadah/masjid" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-mosque fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Musholla</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_musholla?> Unit</div>
                                    <a href="/admin/rumah-ibadah/musholla" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-mosque fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Gereja</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_gereja?> Unit</div>
                                    <a href="/admin/rumah-ibadah/gereja" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-church fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Pondok Pesantren</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_pondokpesantren?> Unit</div>
                                    <a href="/admin/rumah-ibadah/pondok-pesantren" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-home fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        TPA/TPQ</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_tpa_tpq?> Unit</div>
                                    <a href="/admin/rumah-ibadah/tpa-tpq" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-home fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pura</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_pura?> Unit</div>
                                    <a href="/admin/rumah-ibadah/pura" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-gopuram fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Penerima Bantuan Dana Hibah berdasarkan Kabupaten/Kota</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                    </div>
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

        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">List Seluruh Bangunan</h6>
                    <div class="button-header">
                        
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="exportData" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Jenis Bangunan</th>
                                    <th>Alamat</th>
                                    <th>Kab/Kota</th>
                                    <th>Jumlah Rekomendasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach($biodata as $list) : 
                                if($list['status_pendaftaran'] == 'Dana Berhasil Ditransfer'): ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $list['nama_bangunan']?></td>
                                    <td><?= $list['jenis_bangunan']?></td>
                                    <td><?= $list['alamat_bangunan']?></td>
                                    <td><?= $list['kabupaten_kota']?></td>
                                    <td>Rp <?= number_format($list['jumlah_rekomendasi'],0,',','.');?></td>
                                </tr>
                                <?php endif;
                             endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

    <script>
        // Data dari Controller
        var data = <?php echo json_encode($data_grafik); ?>;

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
    </script>

<?= $this->endSection() ?>