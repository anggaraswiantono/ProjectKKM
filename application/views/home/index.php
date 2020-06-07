<main id="main">
  <div class="row mt-5">
    <div class="col-md-12 col-md-offset-2">
        <div id="carouselExampleCaptions" class="carousel slide mt-4 position-relative" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/apa-itu-covid19.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/pengaplikasian-sosial-distanting.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/bersama-lawan-covid19.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
    <!-- ======= Counts1 Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="section-title text-center">
          <p>Kasus COVID-19 di Indonesia</p>
        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-expressionless"></i>
              <h5>Positif</h5>
              <span data-toggle="counter-up"><?= $indonesia['positif']; ?></span>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-laughing"></i>
              <h5>Dalam Perawatan</h5>
              <span data-toggle="counter-up"><?= $indonesia['dirawat']; ?></span>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <h5>Sembuh</h5>
              <span data-toggle="counter-up"><?= $indonesia['sembuh']; ?></span>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-crying"></i>
              <h5>Meninggal</h5>
              <span data-toggle="counter-up"><?= $indonesia['meninggal']; ?></span>
              <p>Orang</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Counts2 Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="section-title text-center">
          <p>Kasus COVID-19 di Banten</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-expressionless"></i>
              <h5>Positif</h5>
              <span data-toggle="counter-up"><?= $banten['positif']; ?></span>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <h5>Sembuh</h5>
              <span data-toggle="counter-up"><?= $banten['sembuh']; ?></span>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-crying"></i>
              <h5>Meninggal</h5>
              <span data-toggle="counter-up"><?= $banten['meninggal']; ?></span>
              <p>Orang</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Table Section ======= -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Provinsi</th>
                    <th>Positif</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                  </tr>
                  </thead>
                  <?php
                  $no = 1;
                  foreach ($provinsi as $value) : ?>
                  <tbody>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><?= $value['attributes']['Provinsi']; ?></td>
                      <td><?= number_format($value['attributes']['Kasus_Posi']); ?></td>
                      <td><?= number_format($value['attributes']['Kasus_Semb']); ?></td>
                      <td><?= number_format($value['attributes']['Kasus_Meni']); ?></td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Table Section -->


    <!-- ======= Video Section ======= -->
    <section id="berita" class="berita">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Berita</p>
        </div>

        <div class="row" data-aos="fade-left">
          <?php foreach ($video as $value) : ?>
          <div class="col-lg-4 col-md-6">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $value['id']['videoId']; ?>?rel=0" allowfullscreen></iframe>
              </div>
              <span class="badge badge-danger"><?= $value['snippet']['channelTitle']; ?></span><br>
                <span class="badge badge-success"><?= $value['snippet']['publishedAt']; ?></span>
                <h4><?= $value['snippet']['title']; ?></h4>
          </div>
          <?php endforeach; ?>
        </div>

        

      </div>
    </section><!-- End Video Section -->





    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Pertanyaan Yang Sering Ditanyakan</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1"> Apakah COVID-19 perlu dikhawatirkan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Sebanyak 80 persen kasus COVID-19 bersifat "ringan", sehingga perawatan yang cukup dapat memulihkan mereka segera dalam waktu cepat. Namun, dikarenakan penyebarannya yang cepat, diimbau untuk tetap waspada pada penyebaran COVID-19. Jika Anda merasakan gejala-gejalanya, maka jangan ragu untuk menghubungi Hotline 024-3580713 atau ke fasilitas kesehatan terdekat. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Apakah orang tua rentan terkena COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Tidak hanya manula, bahkan generasi muda pun dapat tertular COVID-19 jika tidak menjaga diri. Biasanya, manula memang rentan terkena COVID-19 dikarenakan sistem imun tubuh yang sudah tidak seprima dulu. Selain itu, manula yang memiliki riwayat penyakit seperti hipertensi, diabetes, penyakit pernapasan, atau penyakit parah lainnya memiliki kemungkinan besar untuk tertular COVID-19 akut.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Apakah COVID-19 sama dengan SARS dan MERS? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Severe Acute Respiratory Syndrome (SARS-CoV) yang berawal dari 2003 dan Middle East Respiratory Syndrome (MERS-CoV) pada 2012 memang sama-sama menyerang pernapasan, sama seperti COVID-19. Meskipun disebabkan oleh jenis virus yang sama, COVID-19, dan MERS serta SARS memiliki jenis virus corona yang berbeda. Dari segi penularan, COVID-19 jauh lebih pesat dibandingkan SARS dan MERS. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Perlukah saya menggunakan masker? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Perlu. Karena ketika seseorang berada di luar rumah, akan ada banyak sekali ancaman penularan virus. Sesuai rekomendasi dari WHO, semua orang (baik yang sakit maupun yang sehat) perlu menggunakan masker. Masyarakat umum, dapat menggunakan masker berbahan dasar <b>kain</b>. Penggunaan masker kain tidak lebih dari 4 (empat) jam. Setelahnya, masker harus dicuci menggunakan sabun dan air, serta dipastikan bersih sebelum dipakai kembali. Masker bedah atau masker N95 <b>hanya untuk tenaga kesehatan</b> (karena terbatas). Lindungi diri kita dengan cara : semua orang menggunakan masker saat keluar rumah 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Apakah COVID-19 dapat melekat pada benda mati? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Ya. COVID-19 dapat menempel pada benda mati atau barang selama beberapa jam atau beberapa hari jika tidak secepatnya dibersihkan dengan disinfektan. Akan tetapi, ketahanan COVID-19 menempel pada satu benda tergantung dari beberapa faktor seperti suhu, kelembapan, dan jenis permukaan. Sesudah membersihkan barang yang terpapar COVID-19 dengan disinfektan, segera bersihkan tangan dengan alkohol atau sabun. Hindari menyentuh mata, hidung dan mulut. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">Apakah COVID-19 sudah ada obatnya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                <p>
                  Hingga saat ini, vaksin dan obat untuk COVID-19 masih dalam tahap penelitian. Pengobatan masih berupa pengobatan suportif. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-7" class="collapsed">Apakah hewan peliharaan dapat menularkan COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                <p>
                  WHO menyatakan bahwa COVID-19 tidak dapat ditularkan dari hewan peliharaan apapun, baik anjing maupun kucing. Tidak ada dasar ilmiah yang mendukung penyebaran COVID-19 lewat hewan peliharaan. Namun Anda tetap perlu menjaga kebersihan dengan rajin mencuci tangan setelah melakukan kontak dengan hewan peliharaan.  
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-8" class="collapsed">Apakah ada hal lain yang tidak boleh dilakukan demi mencegah COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                <p>
                  Tidak merokok dan tidak menggunakan masker berlapis-lapis. Jika Anda memang mengalami gejala-gejala COVID-19, segera hubungi Hotline 024-3580713 atau laporkan diri ke rumah sakit rujukan virus corona. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-9" class="collapsed"> Apakah Antibiotik efektif mencegah dan menangani COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-9" class="collapse" data-parent=".faq-list">
                <p>
                  Tidak. Antibiotik tidak dapat melawan virus, melainkan hanya melawan infeksi bakteri. COVID-19 disebabkan oleh virus sehingga antibiotik tidak efektif. Antibiotik tidak boleh digunakan untuk mencegah atau mengobati COVID-19. Antibiotik hanya digunakan sesuai arahan dokter untuk mengobati infeksi bakteri. 
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->
    

  </main><!-- End #main -->