<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hero-wrapper {
          width: 100vw;          /* Full lebar layar */
          height: 60vh;          /* Tinggi lebih pendek */
          overflow: hidden;
        }
        .hero-image {
          width: 100%;       /* Biar memenuhi lebar website */
          height: 100%;      /* Atur tinggi jadi lebih pendek (60% tinggi layar) */
          object-fit: cover; /* Memotong bagian yang kelebihan tanpa mengubah rasio */
          display: block;    /* Hindari whitespace di bawah img */
        }

        .section-title {
          margin-top: 60px;
          text-align: center;
          font-size: 2rem;
          font-weight: 600;
        }

    </style>
</head>
<body>
    @include('components.navbar')

    <div class="hero-wrapper">
        <img src="https://www.novo-monde.com/app/uploads/2019/05/travel-the-world.png" alt="foto travel" class="hero-image">
    </div>

    <div class="container mt-5">
      <div class="row mt-5 justify-content-center">
          <h2 class="section-title">TRIP ITINERARY</h2>
          @foreach ($itineraries as $itinerary)
          @foreach ($post_tag as $tag)
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
              <img src="{{$itinerary->photo_url}}" class="card-img-top" alt="photo">
            <div class="card-body">
              <h5 class="card-title">{{$itinerary->title}}</h5>
              <p class="card-text">{{$tag->posted_in}}</p>
              <p class="card-text">{{$tag->categories}}</p>
              <a href="#" class="btn btn-primary">Cek Selengkapnya</a>
            </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
</body>
</html>