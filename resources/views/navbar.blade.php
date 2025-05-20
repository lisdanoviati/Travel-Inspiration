  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .navbar-brand {
      font-weight: 600;
      font-size: 1.5rem;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="#">Dr.Travel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav me-4">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('itinerary.index') }}">Trip Itinerary</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
            <li class="nav-item">
                <form action="search.php" method="GET">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" class="search-field" name="s" placeholder="Cari sesuatu...">
                <button type="submit">Search</button>
                </form>     
            </li>

            <i class="fa-regular fa-magnifying-glass"></i>
        </ul>
        <a href="register.php" class="btn btn-outline-light me-2">Daftar</a>
        <a href="login.php" class="btn btn-success">Masuk</a>
    </div>
</nav>
