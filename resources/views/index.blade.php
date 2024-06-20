<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="/assets/img/IMG-20240602-WA0003.jpg" />
    <title>Putri & Zia Wedding</title>
    <link rel="icon" type="image/png" href="/assets/img/IMG-20240602-WA0003.jpg">
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- Google Fonts -->
    <!-- Dancing Script Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Concert+One&family=Dancing+Script:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Satisfy Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet" />

    <!-- Concert One -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet" />

    <!-- Countdown -->
    <link rel="stylesheet" href="../css/simplyCountdown.theme.default.css" />
    <script src="../js/simplyCountdown.min.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/animation.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css"
        integrity="sha256-wiz7ZSCn/btzhjKDQBms9Hx4sSeUYsDrTLg7roPstac=" crossorigin="anonymous" />
</head>

<body>
    <section id="hero"
        class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white section">
        <main data-bs-spy="scroll" data-bs-target="#navbar-menus" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" tabindex="0">
            <h4>Undangan Pernikahan</h4>
            <h1>Putri & Zia</h1>
            <div class="container mt-5">
                <h4 class="mt-1">Kepada Bapak/Ibu/Saudara/i,</h4>
                <span id="recipient-name" style="text-transform: uppercase"> </span>
                <br />
                <h4 class="mt-1">di Tempat.</h4>
            </div>
            <a href="#home" class="btn btn-sm mt-4 btn-light mb-5"><i class="fa fa-envelope-open"></i>&nbsp;Lihat
                Undangan</a>
        </main>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-atas section">
        <path fill="#17a2b8" fill-opacity="1"
            d="M0,96L60,90.7C120,85,240,75,360,80C480,85,600,107,720,128C840,149,960,171,1080,160C1200,149,1320,107,1380,85.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>

    <section id="home" class="home section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Pasangan Mempelai</h2>
                    <p>
                        Maha Suci Allah yang telah menciptakan makhluk-Nya
                        berpasang-pasangan. Ya Allah semoga ridho-Mu tercurah mengiringi
                        pernikahan kami.
                    </p>
                </div>
            </div>
            <div class="row couple">
                <div class="col-lg-6 mb-5">
                    <div class="row">
                        <div class="col-8 text-end">
                            <h3>Putri Gustriyani Suryono, S.Kom</h3>
                            <p>
                                Anak ke tiga dari empat bersaudara <br />
                                Bpk. Suryono <br />& <br />
                                Ibu Dedeh
                            </p>
                        </div>
                        <div class="col-4">
                            <img src="assets/img/putri.jpg" alt="Putri" class="img-fluid rounded-circle" />
                        </div>
                    </div>
                </div>
                <!-- <div
            class="col-lg-2 d-flex align-items-center justify-content-center position-relative"
          >
            <span class="heart"><i class="bi bi-heart-fill"></i></span>
          </div> -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/img/zia.jpg" alt="Zia" class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-8">
                            <h3>Muhammadzia Fadhilah Ramdhani, S.T</h3>
                            <p>
                                Anak pertama dari tiga bersaudara <br />Bpk. Achdijat Supriady, S.T., Gr.
                                <br />& <br />
                                Ibu Tuti Mardiati
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="format-svg section">
        <path fill="#17a2b8" fill-opacity="1"
            d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>

    <section id="info" class="info section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-12 text-center">
                    <h2>Informasi Acara</h2>
                </div>
            </div>
            <p class="text-center text-uppercase">Menuju hari bahagia :</p>
            <div class="simply-countdown simply-section"></div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light mb-3">
                        <div class="card-header">Akad Nikah</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>09.00 WIB - 10.00 WIB</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Minggu, 30 Juni 2024</span>
                                </div>
                            </div>
                            <h3 class="mt-4" style="color: #5bc7d5">Antapani Food Hall</h3>
                            <p class="description">
                                Jl. Antapani Lama No.6, Sukapura, Kec. Antapani, Kota Bandung,
                                Jawa Barat 40291.
                            </p>
                            <a href="https://www.google.com/maps/dir//Jl.+Antapani+Lama+No.6,+Sukapura,+Kec.+Antapani,+Kota+Bandung,+Jawa+Barat+40291/@-6.9118727,107.6169561,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e68e7613c4bb691:0x797ec65befe810df!2m2!1d107.6581563!2d-6.9119597?entry=ttu"
                                target="_blank" class="btn btn-sm btn-light my-3">
                                <i class="bi bi-geo-alt"></i>
                                Buka Map
                            </a>
                        </div>
                        <div class="card-footer">
                            Saat acara diharapkan untuk kondusif, agar menjaga kekhidmatan
                            dan kekhusyuan seluruh prosesi.
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-10 mb-3">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">Resepsi</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>11.00 WIB - 14.00 WIB</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Minggu, 30 Juni 2024</span>
                                </div>
                            </div>
                            <h3 class="mt-4" style="color: #5bc7d5">Antapani Food Hall</h3>
                            <p class="description">
                                Jl. Antapani Lama No.6, Sukapura, Kec. Antapani, Kota Bandung,
                                Jawa Barat 40291.
                            </p>
                            <a href="https://www.google.com/maps/dir//Jl.+Antapani+Lama+No.6,+Sukapura,+Kec.+Antapani,+Kota+Bandung,+Jawa+Barat+40291/@-6.9118727,107.6169561,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e68e7613c4bb691:0x797ec65befe810df!2m2!1d107.6581563!2d-6.9119597?entry=ttu"
                                target="_blank" class="btn btn-sm btn-light my-3">
                                <i class="bi bi-geo-alt"></i>
                                Buka Map
                            </a>
                        </div>
                        <div class="card-footer">
                            Saat acara diharapkan untuk kondusif, agar menjaga kekhidmatan
                            dan kekhusyuan seluruh prosesi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 350" class="format-svg2 section">
        <path fill="white" fill-opacity="1"
            d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>

    <section id="story" class="story section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-12">
                    <h2>Sebuah Kisah Perjalanan Cinta</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-img"
                                style="background-image: url(&quot;https://lh5.googleusercontent.com/p/AF1QipO0i0A686pq-DWAVMb2X-oAG9c-rm_wKUQephUi=w203-h135-k-no&quot;);">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Pertama Bertemu</h3>
                                    <span>14 Juni 2020</span>
                                </div>
                                <div class="timeline-body"">
                                    <p>
                                        Kami dipertemukan melalui aplikasi Tinder. Setelah
                                        beberapa kali melakukan obrolan yang menyenangkan, kami
                                        memutuskan untuk bertemu di rumah sakit di Bandung yaitu
                                        RS Santosa karena saat itu adik dari Zia sedang jatuh
                                        sakit dan di rawat disana. Saat pertama kali bertemu,
                                        obrolan kami mengalir lancar, penuh tawa dan cerita.
                                        Pertemuan pertama itu terasa begitu alami dan
                                        menyenangkan, menjadi awal dari kisah indah kami.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-img" style="background-image: url('assets/img/Result8.jpg')"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Menjalin Hubungan</h3>
                                    <span>7 Juli 2020</span>
                                </div>
                                <div class="timeline-body"">
                                    <p>
                                        Setelah pertemuan yang kesekian kalinya, kami terus
                                        berkomunikasi dan semakin dekat. Pada 7 Juli 2020, kami
                                        resmi menjalani hubungan. Hari-hari berlalu dengan segala
                                        kenangan manis dan pahit nya, meski tidak selalu mudah,
                                        kebersamaan kami memberikan kekuatan dan kebahagiaan.
                                        Sungguh perjalanan yang sangat istimewa.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-img" style="background-image: url('assets/img/edited.jpg')"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Bertunangan</h3>
                                    <span>7 Januari 2024</span>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        Setelah hampir empat tahun bersama, pada 7 Januari 2024,
                                        kami mengambil langkah besar berikutnya dalam perjalanan
                                        kami. Di hari yang penuh kebahagiaan dan cinta, kami resmi
                                        bertunangan. Momen itu penuh kehangatan, harapan, dan
                                        janji untuk masa depan bersama. Kami bersyukur atas semua
                                        yang telah kami lalui dan menantikan babak baru dalam
                                        kisah cinta kami.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 350" class="format-svg section">
        <path fill="#17a2b8" fill-opacity="1"
            d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>

    <section id="galeri" class="galeri section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Galeri</h2>
                    <div class="col-md-12 col-12">
                        <div class="row mb-4">
                            <div class="col-md-6 col-6">
                                <img src="assets/img/IMG-20240602-WA0009.jpg" alt=""
                                    class="img-fluid w-100" />
                            </div>
                            <div class="col-md-6 col-6">
                                <img src="assets/img/IMG_2538.jpg" alt="" class="img-fluid w-100" />
                            </div>
                        </div>
                        <div id="carouselExampleAutoplaying" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/IMG-20240602-WA0004.jpg" class="d-block w-100 img-fluid"
                                        alt="" />
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/IMG-20240602-WA0007.jpg" class="d-block img-fluid"
                                        alt="" />
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/IMG-20240602-WA0005.jpg" class="d-block w-100 img-fluid"
                                        alt="" />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-6">
                            <img src="assets/img/walawe.jpg" alt="" class="img-fluid w-100" />
                        </div>
                        <div class="col-md-6 col-6">
                            <img src="assets/img/IMG-20240602-WA0002.jpg" alt="" class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="modalImage" class="img-fluid" alt="Zoomed Image">
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-gift section">
        <path fill="#17a2b8" fill-opacity="1"
            d="M0,96L60,90.7C120,85,240,75,360,80C480,85,600,107,720,128C840,149,960,171,1080,160C1200,149,1320,107,1380,85.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>

    <section id="gift" class="gift section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12 col-12 text-center">
                  <h2>Wedding Gift</h2>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-md-12 col-12 text-center">
                  <span style="color: white">Tanpa mengurangi rasa hormat, bagi keluarga, sahabat, dan rekan <br>yang ingin memberikan tanda kasih untuk kami, dapat melalui:</span>
              </div>
          </div>
          <div class="row justify-content-center mt-4">
              <div class="col-md-5 col-10">
                  <div class="card card-atm text-center text-bg-light mb-3">
                      <div class="card-body">
                          <img src="/assets/img/logo_bca.png" class="img-fluid w-50" alt=""><br>
                          <label class="mt-3" id="account1">4372971324</label><br>
                          <span>a/n Muhammadzia Fadhilah Ramdhani</span>
                      </div>
                      <div class="card-footer bg-transparent">
                          <button class="btn btn-sm btn-outline-dark" onclick="copyToClipboard('account1')"><i class="fas fa-copy"></i> Salin</button>
                      </div>
                  </div>
              </div>
              <div class="col-md-5 col-10">
                  <div class="card card-atm text-center text-bg-light mb-3">
                      <div class="card-body">
                          <img src="/assets/img/logo_bca.png" class="img-fluid w-50" alt=""><br>
                          <label class="mt-3" id="account2">7747005930</label><br>
                          <span>a/n Putri Gustriyani Suryono</span>
                      </div>
                      <div class="card-footer bg-transparent">
                          <button class="btn btn-sm btn-outline-dark" onclick="copyToClipboard('account2')"><i class="fas fa-copy"></i> Salin</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 350" class="format-svg section">
        <path fill="#17a2b8" fill-opacity="1"
            d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>

    <section id="ucapan" class="ucapan section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Ucapan & Do'a</h2>
                    <p>
                        Sapa dan kirim ucapan beserta doa yang terbaik untuk mereka yang
                        berbahagia.
                    </p>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="card col-md-6 mb-3">
                    <div class="col-md-12 mt-3">
                        <form id="commentForm">
                            @csrf
                            <div class="input-group">
                                <div class="col-md-12 col-12">
                                    <div class="col-md-12 col-12 mb-3">
                                        <input type="text" class="form-control" placeholder="Nama Kamu"
                                            name="name">
                                    </div>
                                    <div class="col-md-12 col-12 mb-3">
                                        <textarea name="comment_section" type="text" id="comment_section" class="form-control"
                                            placeholder="Tulis ucapan Kamu untuk mempelai di sini..."></textarea>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <select class="form-select form-select-md" aria-label="Default select example"
                                            name="presence">
                                            <option selected class="col-md-12 col-8">Konfirmasi Kehadiran</option>
                                            <option value="ya" class="col-md-12 col-8">Hadir</option>
                                            <option value="tidak" class="col-md-12 col-8">Tidak Hadir</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary mt-3 mb-3" type="submit">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
              <div class="card col-md-8 col-12">
                <div class="container mt-3">
                  @forelse ($get as $getall)
                      <ul class="list-group mb-3">
                          <li class="list-group-item">{{ $getall->to }} : {{ $getall->comment_section }}</li>
                      </ul>
                  @empty
                  <p>Belum ada ucapan</p> @endforelse
                </div>
              </div>
            </div>
        </div>
    </section>

    <audio id="background-music"
        src="assets/music/kesempurnaan-cinta.mp3" loop autoplay></audio>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


    <script src="../js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#commentForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '/index',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response.status);
                        location.reload();
                    },
                    error: function(response) {
                        alert(response.responseJSON.message);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('img').on('click', function() {
                var src = $(this).attr('src');
                $('#modalImage').attr('src', src);
                $('#imageModal').modal('show');
            });
        });
    </script>
    </body>

</html>
