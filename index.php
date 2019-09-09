<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();

// load header template
include_once('includes_frontend/header.php');?>
<style>
        .header {
            background-image: url(includes_frontend/img/header/header2.jpg);
            background-size: cover;
        }

        .jumbotron {;
             margin-top: 40px;
        }
        .footer {
            background-color: #0D243C;
            color: white;
            margin-top: 90px;
        }
    </style>
<div class="jumbotron header">
        <div class="container">
            <div class="row text-white">
                <?php if (isset($_SESSION['user_logged_in'])) {?>
                    <div class="col-sm-6">
                        <h1>SELAMAT BELAJAR DI SEKOLAH DESAIN</h1>
                        <P>Belajar membuat desain/aplikasi dari nol bersama puluhan ribu member lainnya</P>
                    

                        <a class="btn btn-success" href="kelas.php">LIHAT KELAS</a>
                    </div>
                <?php }else { ?>
                    <div class="col-sm-6">
                        <h1>EKSEKUSI IDEMU</h1>
                        <P>Belajar membuat desain/aplikasi dari nol bersama puluhan ribu member lainnya</P>
                        <?php include('includes/flash_messages.php') ?>
                        <form method="POST" action="daftar.php">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-success">DAFTAR GRATIS</button>
                        </form>
                        
                    </div>
                <?php } ?>
               
            </div>
        </div>
    </div>



    <!-- icon -->
    <section id="icon" class="icon">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <img src="includes_frontend/img/icon/belajar.png" width="220" alt="">
                    <br><br>
                    <p>Belajar lewat video, kapan & di mana saja. Bingung mulainya? Ngga masalah!</p>
                </div>

                <div class="col-sm-4">
                    <img src="includes_frontend/img/icon/diskusi.png" width="220" alt="">
                    <br><br>
                    <p>Bagikan pengalaman dan ilmu kamu di mading kami, agar kita bisa berkembang bersama</p>
                </div>

                <div class="col-sm-4">
                    <img src="includes_frontend/img/icon/berkarya.png" width="220" alt="">
                    <br><br>
                    <p>Mari kita berkarya bersama!</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Sekolah SuperHero -->
    <section class="superhero" id="superhero">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="includes_frontend/img/superhero/mading.png" width="200" alt="">
                </div>

                <div class="col-sm-9">
                    <h1>Sekolah Desain</h1>
                    <br>
                    <p>Mau punya kekuatan desain? kuasai skill desain, dengan ini, ngga akan ada lagi batas antara ide dan eksekusi. Mau bikin startup? mau bikin project? mau bantu banyak orang? tunggu apa lagi.. </p>

                    <p>Tidak seperti kuliah, sekolahdesain membebaskan membernya untuk belajar kapan saja dan dimana saja.</p>

                    <p>Anak IT atau bukan, laki-laki atau perempuan, masih muda atau sudah senior, sekolah desain tidak peduli. Tidak ada sertifikat, tidak ada nilai, tidak ada ujian. Yang kami tawarkan skill asli yang bisa digunakan di dunia nyata</p>

                    <?php if (empty($_SESSION['user_logged_in'])) {?>
                    <a href="">
                        <button type="button" name="login" class="btn btn-outline-light">Daftar Sekarang</button></a> 
                    <a href="kelas.php">
                        <button type="button" name="login" class="btn btn-outline-light">Bingung Mulai dari mana?</button>
                    </a>
                <?php }?>
                </div>
            </div>
        </div>
        <br><br>
    </section>


    <!-- perusahaan -->
    <section id="perusahaan" class="perusahaan">
  
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-2">
                    <img src="includes_frontend/img/perusahaan/99design.svg" width="150" alt="">
                </div>

                <div class="col-sm-2">
                    <img src="includes_frontend/img/perusahaan/shutter.svg" width="150" alt="">
                </div>

                <div class="col-sm-2">
                    <img src="includes_frontend/img/perusahaan/media_cp.png" width="150" alt="">
                </div>

                <div class="col-sm-2">
                    <img src="includes_frontend/img/perusahaan/media_marketeers.jpg" width="150" alt="">
                </div>

                <div class="col-sm-2">
                    <img src="includes_frontend/img/perusahaan/stackoverflow.png" width="150" alt="">
                </div>
            </div>
        </div>
   
    </section>



    <section id="motivasi" class="motivasi">
        <br>
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h4>Bukan hanya anak IT! Siapapun bisa belajar Desain, Jangan ragu investasi ke diri sendiri, tanam ilmu sekarang, panen di masa depan</h4>
                    <?php if (empty($_SESSION['user_logged_in'])) {?>
                        <a href="index.php"><button type="button" class="btn btn-outline-primary">Daftar gratis sekarang</button></a>
                    <?php }?>
                </div>
            </div>
        </div>
        <br>
    </section>



<!-- /#page-wrapper -->
<?php include_once('includes_frontend/footer.php'); ?>
