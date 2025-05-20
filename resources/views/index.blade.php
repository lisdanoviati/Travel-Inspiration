<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dr.Travel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .hero-section {
      padding: 80px 0;
      background-color: #f8f9fa;
    }

    .hero-section h1 {
      font-size: 2.8rem;
      font-weight: bold;
    }

    .hero-section p {
      font-size: 1.1rem;
      color: #555;
    }

    .section-title {
      margin-top: 60px;
      text-align: center;
      font-size: 2rem;
      font-weight: 600;
    }

    .card img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

@include('components.navbar')

  
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 mb-4 mb-md-0">
          <h1>Hai!<br/>Selamat Datang Calon Traveler</h1>
          <p class="mt-3 mb-4">
            Mau berpetualang tanpa repot buat jadwal wisata? Yuk ikutan kelas travel yang membantu menyusun jadwal wisata, tiket pesawat, dan paket menarik lainnya.
          </p>
          <a class="btn btn-success btn-lg" href="#">Mulai Sekarang</a>
        </div>
        <div class="col-md-7 text-center">
            <img src="https://tse3.mm.bing.net/th?id=OIP.Uy9aQ47ZfGMwmajICFxyowHaE8&pid=Api&P=0&h=180" 
                 alt="Travel illustration" 
                 class="img-fluid rounded w-100" 
                 style="max-height: 400px; object-fit: cover;">
        </div>

      </div>
    </div>
  </section>

  <!-- Rekomendasi Section -->
  <div class="container">
    <h2 class="section-title">Rekomendasi Wisata Untuk Anda</h2>
    <div class="row mt-5 justify-content-center">
      
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="https://tse4.mm.bing.net/th?id=OIP.sJh2uqrco2DtN1_ksf3kiAHaE8&pid=Api&P=0&h=180" class="card-img-top" alt="Paris">
          <div class="card-body">
            <h5 class="card-title">Paris: City of Love</h5>
            <p class="card-text">Paris adalah ibukota dari Perancis. Beberapa tempat wisata terkenal adalah Menara Eiffel, Louvre, dan Arc de Triomphe.</p>
            <a href="#" class="btn btn-primary">Cek Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="https://2.bp.blogspot.com/_DNF0mICS8pk/TSWguWaKk7I/AAAAAAAAAIA/2P0Hcp8ENB8/s1600/69dps-bali-lake-bratan-temple2_b.jpg" class="card-img-top" alt="Bali">
          <div class="card-body">
            <h5 class="card-title">Bali: The Island of the Gods</h5>
            <p class="card-text">Bali terkenal dengan keunikan arsitektur dan pemandangan alamnya yang indah, menjadikannya destinasi favorit wisatawan.</p>
            <a href="#" class="btn btn-primary">Cek Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="https://tcsvoyages.ch/wp-content/uploads/2020/05/shutterstock-1050996575-mont-fuji-du-sakura-et-du-chureito-dans-la-prefecture-de-yamanashi-au-japon-scaled.jpg" class="card-img-top" alt="Tokyo">
          <div class="card-body">
            <h5 class="card-title">Tokyo: Flower City</h5>
            <p class="card-text">Tokyo menawarkan destinasi populer seperti taman sakura, Gunung Fuji, Tokyo Tower, dan Akihabara.</p>
            <a href="#" class="btn btn-primary">Cek Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
