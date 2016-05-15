<?php
    $rowcount = 0;
    $count_kominfo = 0;
    $count_hublu = 0;
    $count_pemkeb = 0;
    $count_kebpub = 0;
    $count_kesma = 0;
    $count_dagri = 0;
    $count_psdm = 0;
    $count_jakpus = 0;
    $count_ristek = 0;
    $count_perkom = 0;
    $count_sosmas = 0;
    $count_vip = 0;
    $count_bakor = 0;
    $count_iecc = 0;
    $count_fmipa = 0;
    $count_fti = 0;
    $count_ftsp = 0;
    $count_ftk = 0;
    $count_ftif = 0;

    include 'abc.php';

    $fmipa="SELECT DISTINCT nrp FROM oprec_list WHERE LEFT(nrp,1)=1";
    if ($result=mysqli_query($con,$fmipa))
    {
        // Return the number of rows in result set
        $count_fmipa=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $fti="SELECT DISTINCT nrp FROM oprec_list WHERE LEFT(nrp,1)=2";
    if ($result=mysqli_query($con,$fti))
    {
        // Return the number of rows in result set
        $count_fti=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $ftsp="SELECT DISTINCT nrp FROM oprec_list WHERE LEFT(nrp,1)=3";
    if ($result=mysqli_query($con,$ftsp))
    {
        // Return the number of rows in result set
        $count_ftsp=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $ftk="SELECT DISTINCT nrp FROM oprec_list WHERE LEFT(nrp,1)=4";
    if ($result=mysqli_query($con,$ftk))
    {
        // Return the number of rows in result set
        $count_ftk=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $ftif="SELECT DISTINCT nrp FROM oprec_list WHERE LEFT(nrp,1)=5";
    if ($result=mysqli_query($con,$ftif))
    {
        // Return the number of rows in result set
        $count_ftif=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $sql="SELECT DISTINCT nrp FROM oprec_list";
    if ($result=mysqli_query($con,$sql))
    {
        // Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $kominfo="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=2";
    if ($result=mysqli_query($con,$kominfo))
    {
        // Return the number of rows in result set
        $count_kominfo=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $hublu="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=3";
    if ($result=mysqli_query($con,$hublu))
    {
        // Return the number of rows in result set
        $count_hublu=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $pemkeb="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=4";
    if ($result=mysqli_query($con,$pemkeb))
    {
        // Return the number of rows in result set
        $count_pemkeb=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $kebpub="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=5";
    if ($result=mysqli_query($con,$kebpub))
    {
        // Return the number of rows in result set
        $count_kebpub=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $psdm="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=6";
    if ($result=mysqli_query($con,$psdm))
    {
        // Return the number of rows in result set
        $count_psdm=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $dagri="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=7";
    if ($result=mysqli_query($con,$dagri))
    {
        // Return the number of rows in result set
        $count_dagri=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $jakpus="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=8";
    if ($result=mysqli_query($con,$jakpus))
    {
        // Return the number of rows in result set
        $count_jakpus=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $ristek="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=9";
    if ($result=mysqli_query($con,$ristek))
    {
        // Return the number of rows in result set
        $count_ristek=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $perkom="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=10";
    if ($result=mysqli_query($con,$perkom))
    {
        // Return the number of rows in result set
        $count_perkom=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $sosmas="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=11";
    if ($result=mysqli_query($con,$sosmas))
    {
        // Return the number of rows in result set
        $count_sosmas=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $kesma="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=12";
    if ($result=mysqli_query($con,$kesma))
    {
        // Return the number of rows in result set
        $count_kesma=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $vip="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=13";
    if ($result=mysqli_query($con,$vip))
    {
        // Return the number of rows in result set
        $count_vip=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $bakor="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=14";
    if ($result=mysqli_query($con,$bakor))
    {
        // Return the number of rows in result set
        $count_bakor=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }

    $iecc="SELECT DISTINCT nrp FROM oprec_list WHERE pilihan1=15";
    if ($result=mysqli_query($con,$iecc))
    {
        // Return the number of rows in result set
        $count_iecc=mysqli_num_rows($result);
        //printf("Result set has %d rows.\n",$rowcount);

        // Free result set
        mysqli_free_result($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/oprec/">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BERANI Oprec</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../static/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/Chart.min.js"></script>
</head>

<body>
<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://bem.its.ac.id/">BERANI</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
							<span class="li-text"><a href="#"><strong>
                                        Bersama Melayani Indonesia</a></strong>
							</span>
                    </li>
                </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1>Statistik para Pem-<strong>BERANI</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-box">
                    <div class="form-top" style="padding : 0 0 0 0">
                            <div class="col-sm-12">
                                <center>
                                <h3>Saat ini ada <strong><span id="count" style="color: #dd0029; font-size: 30px;"><?php echo $rowcount;?></span></strong> orang pemberani terdaftar</h3>
                                </center>
                            </div>
                            <div class="col-sm-12">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <h3>FMIPA - <?php echo $count_fmipa;?></h3>
                                </div>
                                <div class="col-sm-2">
                                    <h3>FTI - <?php echo $count_fti;?></h3>
                                </div>
                                <div class="col-sm-2">
                                    <h3>FTSP - <?php echo $count_ftsp;?></h3>
                                </div>
                                <div class="col-sm-2">
                                    <h3>FTK - <?php echo $count_ftk;?> </h3>
                                </div>
                                <div class="col-sm-2">
                                    <h3>FTIF - <?php echo $count_ftif;?> </h3>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
<div class="col-sm-12">
<center><p style="font-size : 12px">.. dan ada <?php $all = $count_fmipa + $count_fti + $count_ftsp + $count_ftk + $count_ftif; $invalid = $rowcount - $all; echo $invalid;?> orang pemberani yang NRP nya tidak valid</p></center>
</div>
                    </div>
                    <div class="form-bottom">
                        <p style="color: #dd0029">Berdasarkan Kementerian pilihan ke-1</p>
                        <div style="width: 100%">
                            <canvas id="canvas" height="190" width="600"></canvas>
                        </div>
                    </div>
                    <center><p>BEM ITS Berani 2016</p></center>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script>
    var kominfo = <?php echo $count_kominfo;?>;
    var hublu = <?php echo $count_hublu;?>;
    var pemkeb = <?php echo $count_pemkeb;?>;
    var kebpub = <?php echo $count_kebpub;?>;

    var kesma = <?php echo $count_kesma;?>;
    var psdm = <?php echo $count_psdm;?>;
    var dagri = <?php echo $count_dagri;?>;
    var jakpus = <?php echo $count_jakpus;?>;

    var ristek = <?php echo $count_ristek;?>;
    var perkom = <?php echo $count_perkom;?>;
    var sosmas = <?php echo $count_sosmas;?>;

    var vip = <?php echo $count_vip;?>;
    var bakor = <?php echo $count_bakor;?>;
    var iecc = <?php echo $count_iecc;?>;

    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

    var barChartData = {
        labels : ["Kominfo","Hublu", "PemKeb", "KebPub",
            "KesMa","PSDM","Dagri","JakPus",
            "Ristek","Perkom","SosMas",
            "BSO ViP","BSO Bakor","BSO IECC"],
        datasets : [
            {
                fillColor : "rgba(255,0,0,0.3)",
                strokeColor : "rgba(220,220,220,0.8)",
                highlightFill: "rgba(220,220,220,0.75)",
                highlightStroke: "rgba(220,220,220,1)",
                data : [kominfo,hublu,pemkeb,kebpub
                    ,kesma,psdm,dagri,jakpus
                    ,ristek,perkom,sosmas
                    ,vip,bakor,iecc
                ]
            }
        ]
    }
    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
            responsive : true
        });
    }
</script>
<script src="js/main.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>

<!--[if lt IE 10]>
<script src="js/placeholder.js"></script>
<![endif]-->

</body>

</html>