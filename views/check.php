<?php
$kementerian = $_GET['pilihan1'];

$menteri = $db->query('SELECT dept_name FROM oprec_dept WHERE dept_id=?', $kementerian);
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <base href="/oprec/">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RAHASIA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-elements.css".
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <center><h3 style="color: white"><?php echo $menteri ;?></h3></center>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <center>
                <form action="">
                    <?php echo "<select class='form-control' name='pilihan1'>";
                    $f = $db->r('oprec_dept', 'dept_id,dept_name');
                    foreach ( $f as $r ) {
                        echo '<option value="'.$r['dept_id'].'">'.$r['dept_name'].'</option>';
                    }
                    echo "</select>";
                    ?>
                    <button type="submit" style="margin-top: 5px; line-height: 0; height: 30px" class="btn btn-block">Cari</button>
                </form>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 30px">
            <div class="col-md-12">
                <?php
                $kementerian = $_GET['pilihan1'];
                if ($_GET) {
                    $f = $db->r('oprec_result', '*', 'WHERE pilihan1=?', $kementerian);
                    foreach ($f as $r) {
                        echo '
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="col-md-12"><p>FOTO : '.$r['foto'].'</p></div>
                                <div class="col-md-12"><p>No. Pemberani : '.$r['id'].'</p></div>
                                <div class="col-md-12"><p>Nama : '.$r['nama'].'</p></div>
                                <div class="col-md-12"><p>NRP : '.$r['nrp'].'</p></div>
                                <div class="col-md-12"><p>Tempat Tanggal Lahir : '.$r['asal'].', '.$r['ttl'].'</p></div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12"><p>No.HP : '.$r['hp'].'</p></div>
                                <div class="col-md-12"><p>Email : '.$r['email'].'</p></div>
                                <div class="col-md-12"><p>Motto : '.$r['motto'].'</p></div>
                                <div class="col-md-12"><p>Hobby : '.$r['hobby'].'</p></div>
                                <div class="col-md-12"><p>Cita-cita : '.$r['cita'].'</p></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><center>Kementerian 1 : '.$r['pilihan1'].'</center></div>
                                    <div class="panel-body">
                                        '.$r['alasan1'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Kementerian 2 : '.$r['pilihan2'].'</center></div>
                                    <div class="panel-body">
                                        '.$r['alasan2'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Kementerian 3 : '.$r['pilihan3'].'</center></div>
                                    <div class="panel-body">
                                        '.$r['alasan3'].'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Pendidikan</center></div>
                                    <div class="panel-body">
                                        '.$r['pendidikan'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Organisasi</center></div>
                                    <div class="panel-body">
                                        '.$r['organisasi'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Kepanitiaan</center></div>
                                    <div class="panel-body">
                                        '.$r['kepanitiaan'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Pelatihan</center></div>
                                    <div class="panel-body">
                                        '.$r['pelatihan'].'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Motivasi</center></div>
                                    <div class="panel-body">
                                        '.$r['motivasi'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>SWOT</center></div>
                                    <div class="panel-body">
                                        '.$r['swot'].'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Apa itu Berani</center></div>
                                    <div class="panel-body">
                                        '.$r['berani'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Sosial Politik BEM ITS</center></div>
                                    <div class="panel-body">
                                        '.$r['sospol'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Sosial Politik BEM ITS</center></div>
                                    <div class="panel-body">
                                        '.$r['pergerakan'].'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Facebook</center></div>
                                    <div class="panel-body">
                                        '.$r['fb'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Instagram</center></div>
                                    <div class="panel-body">
                                        '.$r['ig'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>ID Line</center></div>
                                    <div class="panel-body">
                                       '.$r['line'].'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>CV Kreatif</center></div>
                                    <div class="panel-body">
                                        '.$r['cv'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Mindmap</center></div>
                                    <div class="panel-body">
                                        '.$r['mindmap'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Surat HMJ</center></div>
                                    <div class="panel-body">
                                        '.$r['surat'].'
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>Transkrip</center></div>
                                    <div class="panel-body">
                                        '.$r['transkrip'].'
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
</body>
</html>