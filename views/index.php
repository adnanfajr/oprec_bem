<?php
if ($_POST) {
    $target_dir = "static/uploads/";
    $uploadOk = 1;

    $target_file1 = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);

    $target_file2 = $target_dir . basename($_FILES["cv"]["name"]);
    $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);

    $target_file3 = $target_dir . basename($_FILES["mindmap"]["name"]);
    $imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);

    $target_file4 = $target_dir . basename($_FILES["surat"]["name"]);
    $imageFileType4 = pathinfo($target_file4,PATHINFO_EXTENSION);

    $target_file5 = $target_dir . basename($_FILES["transkrip"]["name"]);
    $imageFileType5 = pathinfo($target_file5,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check1 = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check1 !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if(file_exists($target_file1)){
        unlink($target_file1);
    }
    if(file_exists($target_file2)){
        unlink($target_file2);
    }
    if(file_exists($target_file3)){
        unlink($target_file3);
    }
    if(file_exists($target_file4)){
        unlink($target_file4);
    }
    if(file_exists($target_file5)){
        unlink($target_file5);
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 2097152) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($_FILES["cv"]["size"] > 2097152) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($_FILES["mindmap"]["size"] > 2097152) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($_FILES["surat"]["size"] > 2097152) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($_FILES["transkrip"]["size"] > 2097152) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType1 != "jpg" && $imageFileType1 != "jpeg"
        && $imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "PNG" && $imageFileType2 != "jpeg" && $imageFileType2 != "pdf"
        && $imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "PNG" && $imageFileType3 != "jpeg" && $imageFileType3 != "pdf"
        && $imageFileType4 != "pdf"
        && $imageFileType5 != "pdf") {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        //echo "<script>alert('Sorry, your file was not uploaded.');</script>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file1)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.')";
        }
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file2)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.')";
        }
        if (move_uploaded_file($_FILES["mindmap"]["tmp_name"], $target_file3)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.')";
        }
        if (move_uploaded_file($_FILES["surat"]["tmp_name"], $target_file4)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.')";
        }
        if (move_uploaded_file($_FILES["transkrip"]["tmp_name"], $target_file5)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.')";
        }

        $name=$_POST['name'];
        $foto=($_FILES["fileToUpload"]["name"]);
        $cv=($_FILES["cv"]["name"]);
        $mindmap=($_FILES["mindmap"]["name"]);
        $surat=($_FILES["surat"]["name"]);
        $transkrip=($_FILES["transkrip"]["name"]);

        // Insert to SQL
        $db->i('oprec_list', 'nama,nrp,asal,ttl,sex,alamat,ipk,hp,email,fb,ig,line,hobby,motto,cita,pilihan1,alasan1,pilihan2,alasan2,pilihan3,alasan3,pendidikan,organisasi,kepanitiaan,pelatihan,motivasi,swot,berani,sospol,pergerakan,foto,cv,transkrip,surat,mindmap',
            array($_POST['name'], $_POST['nrp'], $_POST['asal'], $_POST['ttl'], $_POST['sex'], $_POST['alamat'], $_POST['ipk'], $_POST['hp'], $_POST['email'], $_POST['fb'], $_POST['ig'], $_POST['line'], $_POST['hobby'], $_POST['motto'], $_POST['cita']
            , $_POST['pilihan1'], $_POST['alasan1'], $_POST['pilihan2'], $_POST['alasan2'], $_POST['pilihan3'], $_POST['alasan3'], $_POST['pendidikan'], $_POST['organisasi'], $_POST['kepanitiaan'], $_POST['pelatihan'], $_POST['motivasi'], $_POST['swot'], $_POST['berani'], $_POST['sospol'], $_POST['pergerakan']
            , $foto, $cv, $transkrip, $surat, $mindmap)
        );
        //echo 'Terimakasih! Data kamu berhasil dimasukkan!';

        // Redirect to homepaage
        header( 'Location: success' );
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <script>
        function validateForm() {
            var foto = document.forms["registration"]["fileToUpload"].value;
            var cv = document.forms["registration"]["cv"].value;
            var mindmap = document.forms["registration"]["mindmap"].value;
            var surat = document.forms["registration"]["surat"].value;
            var transkrip = document.forms["registration"]["transkrip"].value;

            if (foto == null || foto == "") {
                alert("Kamu harus melengkapi Foto!");
                return false;
            }
            else if (cv == null || cv == "") {
                alert("Kamu harus melengkapi CV!");
                return false;
            }
            else if (mindmap == null ||mindmap == "") {
                alert("Kamu harus melengkapi Mindmap!");
                return false;
            }
            else if (surat == null || surat == "") {
                alert("Kamu harus melengkapi Surat Keterangan HMJ!");
                return false;
            }
            else if (transkrip == null || transkrip == "") {
                alert("Kamu harus melengkapi Transkrip!");
                return false;
            }
        }
    </script>
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
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1>BEM ITS cari Pem-<strong>BERANI</strong></h1>
                    <div class="description">
                        <p>
                            Staff Open Recuitment
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">

                    <form role="form" onsubmit="return validateForm()" name="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="registration-form" enctype="multipart/form-data">

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Tahap 1 / 5</h3>
                                    <p>Masukkan identitas diri kamu</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Nama Lengkap</label>
                                    <input type="text" placeholder="Nama Lengkap" class="form-control" id="name"
                                           name="name" maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="nrp">NRP</label>
                                    <input type="text" placeholder="NRP" class="form-control" id="nrp"
                                           name="nrp" maxlength="10">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="asal">Asal</label>
                                    <input type="text" placeholder="Asal" class="form-control" id="asal"
                                           name="asal" maxlength="20">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="ttl">Tanggal Lahir</label>
                                    <input type="date" placeholder="Tanggal Lahir" class="form-control" id="ttl"
                                           name="ttl">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" >Jenis Kelamin</label>
                                    <select class="form-control" name="sex">
                                        <option value="o">Jenis Kelamin</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-alamat">Alamat (Surabaya)</label>
											<textarea placeholder="Alamat (Surabaya)"
                                                      class="form-about-yourself form-control" id="form-alamat" name="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-ipk">IPK</label>
                                    <input type="text" placeholder="IPK" class="form-last-name form-control" id="form-ipk" name="ipk"
                                           maxlength="4">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-hp">Nomor HP</label>
                                    <input type="text" placeholder="Nomor HP" class="form-last-name form-control" id="form-hp" name="hp"
                                           maxlength="12">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input type="text" placeholder="Email" class="form-last-name form-control" id="form-email" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-fb">Facebook</label>
                                    <input type="text" placeholder="Facebook" class="form-last-name form-control" id="form-fb" name="fb">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-ig">Instagram</label>
                                    <input type="text" placeholder="Instagram" class="form-last-name form-control" id="form-ig" name="ig">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-line">ID Line</label>
                                    <input type="text" placeholder="ID Line" class="form-last-name form-control" id="form-line" name="line">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-hobby">Hobby</label>
                                    <input type="text" placeholder="Hobby" class="form-last-name form-control" id="form-hobby" name="hobby"
                                           maxlength="140">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-motto">Motto</label>
                                    <input type="text" placeholder="Motto Hidup" class="form-last-name form-control" id="form-motto" name="motto"
                                           maxlength="140">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-cita">Cita-cita</label>
                                    <input type="text" placeholder="Cita-cita" class="form-last-name form-control" id="form-cita" name="cita"
                                           maxlength="140">
                                </div>
                                <center><button type="button" class="btn btn-next">Selanjutnya</button></center>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Tahap 2 / 5</h3>
                                    <p>Pilihan 3 Kementerian</p>
                                    <p>Pilihanmu menentukan skala prioritas</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" >Kementerian 1</label>
                                    <?php echo "<select class='form-control' name='pilihan1'>";
                                    $f = $db->r('oprec_dept', 'dept_id,dept_name');
                                    foreach ( $f as $r ) {
                                        echo '<option value="'.$r['dept_id'].'">'.$r['dept_name'].'</option>';
                                    }
                                    echo "</select>";
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-kementerian1">About yourself</label>
				                        	<textarea name="alasan1" placeholder="Alasan memilih kementerian 1 (max 500 karakter)"
                                                      class="form-about-yourself form-control" id="form-kementerian1" maxlength="500"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" >Kementerian 2</label>
                                    <?php echo "<select class='form-control' name='pilihan2'>";
                                    $f = $db->r('oprec_dept', 'dept_id,dept_name');
                                    foreach ( $f as $r ) {
                                        echo "<option value='" . $r['dept_id'] ."'>" . $r['dept_name'] ."</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-kementerian2">About yourself</label>
				                        	<textarea name="alasan2" placeholder="Alasan memilih kementerian 2 (max 500 karakter)"
                                                      class="form-about-yourself form-control" id="form-kementerian2" maxlength="500"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" >Kementerian 3</label>
                                    <?php echo "<select class='form-control' name='pilihan3'>";
                                    $f = $db->r('oprec_dept', 'dept_id,dept_name');
                                    foreach ( $f as $r ) {
                                        echo "<option value='" . $r['dept_id'] ."'>" . $r['dept_name'] ."</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-kementerian3">About yourself</label>
				                        	<textarea name="alasan3" placeholder="Alasan memilih kementerian 3 (max 500 karakter)"
                                                      class="form-about-yourself form-control" id="form-kementerian3" maxlength="500"></textarea>
                                </div>
                                <center>
                                    <button type="button" class="btn btn-previous">Sebelumnya</button>
                                    <button type="button" class="btn btn-next">Selanjutnya</button>
                                </center>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Tahap 3 / 5</h3>
                                    <p>Riwayat pendidikan, organisasi, kepanitiaan dan pelatihan mu</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="form-pend">Riwayat Pendidikan</label>
											<textarea name="pendidikan" placeholder="Riwayat Pendidikan"
                                                      class="form-about-yourself form-control" id="form-pend"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Pengalaman Organisasi</label>
											<textarea name="organisasi" placeholder="Pengalaman Organisasi"
                                                      class="form-about-yourself form-control" id="form-org"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-nrp">Pengalaman Kepanitiaan</label>
											<textarea name="kepanitiaan" placeholder="Pengalaman Kepanitiaan"
                                                      class="form-about-yourself form-control" id="form-pan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-pel">Pengalaman Pelatihan</label>
											<textarea name="pelatihan" placeholder="Pengalaman Pelatihan"
                                                      class="form-about-yourself form-control" id="form-pel"></textarea>
                                </div>
                                <center>
                                    <button type="button" class="btn btn-previous">Sebelumnya</button>
                                    <button type="button" class="btn btn-next">Selanjutnya</button>
                                </center>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Tahap 4 / 5</h3>
                                    <p>Kami ingin mengenalmu lebih dalam</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="form-motivasi">Motivasi mendaftar oprec</label>
											<textarea name="motivasi" placeholder="Motivasi mendaftar oprec (max 500 karakter)"
                                                      class="form-about-yourself form-control" id="form-motivasi" maxlength="500"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-swot">Analisis SWOT dirimu</label>
											<textarea name="swot" placeholder="Analisis SWOT dirimu (max 500 karakter)"
                                                      class="form-about-yourself form-control" id="form-swot" maxlength="500"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-berani">Apasih BERANI</label>
											<textarea name="berani" placeholder="Menurutmu, apasih BERANI itu? (max 500 karakter)"
                                                      class="form-about-yourself form-control" id="form-berani" maxlength="500"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-ask1">Pertanyaan 1</label>
											<textarea name="sospol" placeholder="Jelaskan makna sosial politik BEM ITS (max 500 karakter)"
                                                      class="form-about-yourself form-control" id="form-ask1" maxlength="500"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-ask2">Pertanyaan 2</label>
											<textarea name="pergerakan" placeholder="Sejauh mana BEM ITS mampu menjadi poros pergerakan mahasiswa? (max 500 karakter)"
                                                      class="form-about-yourself form-control" id="form-ask2" maxlength="500"></textarea>
                                </div>
                                <center>
                                    <button type="button" class="btn btn-previous">Sebelumnya</button>
                                    <button type="button" class="btn btn-next">Selanjutnya</button>
                                </center>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Tahap 5 / 5</h3>
                                    <p>Unggah foto, CV Kreatif, Mindmap, Surat Keterangan HMJ dan Transkrip IPK mu</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-twitter"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <p>Unggah Foto Bebas <strong>Memakai Almamater</strong> (NRP-foto.jpg)</p>
                                <center><img id="uploadPreview1" src="img/no_image.png" /></center><br />
                                <center>
                                    <input type="file" name="fileToUpload" id="uploadImage1" onchange="PreviewImage(1);">
                                </center>
                                <br>
                                <p>Unggah CV Kreatif (NRP-cv.jpg, NRP-cv.jpg atau NRP-cv.pdf)</p>
                                <center><img id="uploadPreview2" src="img/no_image.png" /></center><br />
                                <center>
                                    <input type="file" name="cv" id="uploadImage2" onchange="PreviewImage(2);">
                                </center>
                                <br>
                                <p>Unggah Mindmap Berani (NRP-mindmap.jpg atau NRP-mindmap.jpg)</p>
                                <center><img id="uploadPreview3" src="img/no_image.png" /></center><br />
                                <center>
                                    <input id="uploadImage3" type="file" name="mindmap" onchange="PreviewImage(3);" />
                                </center>
                                <br>
                                <p>Unggah Surat Keterangan HMJ (NRP-surat.pdf)</p>
                                <center>
                                    <input type="file" name="surat" id="uploadFile1" />
                                </center>
                                <br>
                                <p>Unggah Transkrip IPK (NRP-transkrip.pdf)</p>
                                <center>
                                    <input type="file" name="transkrip" id="uploadFile2" />
                                </center>
                                <br>
                                <center>
                                    <button type="button" class="btn btn-previous">Sebelumnya</button>
                                    <button type="submit" class="btn">Daftar!</button>
                                </center>
                            </div>
                        </fieldset>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->

<script type="text/javascript">

    window.reset = function (e) {
        e.wrap('<form>').closest('form').get(0).reset();
        e.unwrap();
    }

    $('input#uploadImage1').on('change', function () {
        var file = $(this).val();
        if (!(endsWith(file, ".jpg") || endsWith(file, ".jpeg") || endsWith(file, ".JPG"))) {
            reset($('#uploadImage1'));
            alert("Foto harus memiliki tipe jpg!");
        }
        var size = this.files[0].size;
        if (size > 2097152) {
            reset($('#uploadImage1'));
            alert("Ukuran file tidak boleh melebihi 2MB!");
        }
    });

    $('input#uploadImage2').on('change', function () {
        var file = $(this).val();
        if (!(endsWith(file, ".jpg") || endsWith(file, ".png") || endsWith(file, ".jpeg") || endsWith(file, ".JPG") || endsWith(file, ".PNG") || endsWith(file, ".pdf")) ) {
            reset($('#uploadImage2'));
            alert("CV harus memiliki tipe jpg atau png!");
        }
        var size = this.files[0].size;
        if (size > 2097152) {
            reset($('#uploadImage2'));
            alert("Ukuran file tidak boleh melebihi 2MB!");
        }
    });

    $('input#uploadImage3').on('change', function () {
        var file = $(this).val();
        if (!(endsWith(file, ".jpg") || endsWith(file, ".png") || endsWith(file, ".jpeg") || endsWith(file, ".JPG") || endsWith(file, ".PNG") || endsWith(file, ".pdf")) ) {
            reset($('#uploadImage3'));
            alert("Mindmap harus memiliki tipe jpg, png atau pdf!");
        }
        var size = this.files[0].size;
        if (size > 2097152) {
            reset($('#uploadImage3'));
            alert("Ukuran file tidak boleh melebihi 2MB!");
        }
    });

    $('input#uploadFile1').on('change', function () {
        var file = $(this).val();
        if (!endsWith(file, ".pdf")) {
            reset($('#uploadFile1'));
            alert("Surat Keterangan HMJ harus memiliki tipe pdf!");
        }
        var size = this.files[0].size;
        if (size > 2097152) {
            reset($('#uploadFile1'));
            alert("Ukuran file tidak boleh melebihi 2MB!");
        }
    });

    $('input#uploadFile2').on('change', function () {
        var file = $(this).val();
        if (!endsWith(file, ".pdf")) {
            reset($('#uploadFile2'));
            alert("Transkrip harus memiliki tipe pdf!");
        }
        var size = this.files[0].size;
        if (size > 2097152) {
            reset($('#uploadFile2'));
            alert("Ukuran file tidak boleh melebihi 2MB!");
        }
    });

    function endsWith(str, suffix) {
        return str.indexOf(suffix, str.length - suffix.length) !== -1;
    }

    function PreviewImage(no) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
        };
    }
</script>
<script>
$(function(){
$('#ttl').datepicker();
if ( $('#ttl')[0].type != 'date' ) $('#ttl').datepicker();
});
</script>
<script src="js/main.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/jquery.uploadPreview.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>

<!--[if lt IE 10]>
<script src="js/placeholder.js"></script>
<![endif]-->

</body>

</html>