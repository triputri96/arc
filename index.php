<?php
  include 'partials/header.php';
?>

<body>
  <?php
    include 'partials/navbar.php';
  ?>
  <section id="heroSection" class="h-v-full d-flex align-center <?php if(isset($_SESSION['username'])){ echo 'mb-5'; } ?>">
    <div class="d-flex">
      <div class="col-6 d-flex align-center">
        <div>
          <div class="mb-3">
            <h1 class="hero-title mb-3">Frieren: Beyond Journey's End</h1>
            <p class="hero-description align-justify">Raja iblis telah dikalahkan, dan grup para pahlawan kembali ke
              rumah
              sebelum
              dibubarkan. Frieren si
              penyihir,
              Himmel sang pahlawan, Pendeta Heiter, dan Eisen sang pejuang mengenang perjalanan panjang mereka sembari
              tibanya momen untuk saling mengucapkan selamat tinggal. Tapi, alur waktu berjalan berbeda untuk ras elf,
              dan
              Frieren harus menyaksikan teman-temannya perlahan meninggal satu per satu.</p>
          </div>
          <a href="<?php if(!isset($_SESSION['username'])){ echo 'login.php'; } else { echo '#charaSection'; } ?>" class="btn hero-btn">Read More</a>
        </div>
      </div>
      <div class="col-6 d-flex justify-content-center">
        <img src="assets/imgs/hero-image.png" alt="Frieren" height="500">
      </div>
    </div>
  </section>

  <section id="charaSection" <?php if(!isset($_SESSION['username'])){ echo 'hidden'; } ?> class="ptb-4 mb-5">
    <h2 class="mb-1">Main Character</h2>
    <div class="d-flex mb-1">
      <div id="charaImg" class="col-4">
        <!-- <div class="info-img mb-2"></div> -->
        <!-- <img src="assets/imgs/frieren.png" alt="" class="fit-cover w-100" height="450"> -->
      </div>
      <div class="col-8 ml-5">
        <div id="charaDesc" class="mb-3">
          <!-- <h3 id="charaName" class="mb-2">Frieren<sup>「フリーレン Furīren?」</sup></h3> -->
          <!-- <p>Protagonis utama dalam "Frieren: Beyond Journey's End" adalah Mage dari Kelompok Pahlawan dan melakukan
          perjalanan bersama Hero Himmel, Warrior Eisen, dan Priest Heiter dalam perjalanan sepuluh tahun untuk
          mengalahkan Raja Iblis.</p> -->
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Jenis Kelamin</p>
          </div>
          <div class="col-3">
            <p id="gender" class="bio-text"></p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Usia</p>
          </div>
          <div class="col-3">
            <p id="age" class="bio-text"></p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Spesies</p>
          </div>
          <div class="col-3">
            <p id="species" class="bio-text"></p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Kelas</p>
          </div>
          <div class="col-3">
            <p id="class" class="bio-text"></p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Ranking</p>
          </div>
          <div class="col-3">
            <p id="rank" class="bio-text"></p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Keahlian</p>
          </div>
          <div class="col-3">
            <p id="affiliation" class="bio-text"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="img-selection-container d-flex justify-content-between">
      <div class="">
        <img src="assets/imgs/frieren.png" alt="Frieren" width="110" height="110" class="fit-cover chara-selection"
          onclick="selectImage(0)">
      </div>
      <div class="">
        <img src="assets/imgs/fern.png" alt="Fern" width="110" height="110" class="fit-cover chara-selection"
          onclick="selectImage(1)">
      </div>
      <div class="">
        <img src="assets/imgs/stark.png" alt="Stark" width="110" height="110" class="fit-cover chara-selection"
          onclick="selectImage(2)">
      </div>
    </div>
  </section>

  <section <?php if(!isset($_SESSION['username'])){ echo 'hidden'; } ?> id="videoTrailer" class="ptb-4 mb-5 <?php if(isset($_SESSION['username'])){ echo 'd-flex'; } ?> justify-content-center">
    <video src="assets/videos/frieren-trailer.mp4" type="video/mp4" controls autoplay muted loop class="w-90"></video>
  </section>
  <?php
  if(isset($_SESSION['username'])){
    include 'partials/footer.php';
  }
    include 'partials/script.php';
  ?>
  <script src="assets/js/home.js"></script>
</body>

</html>