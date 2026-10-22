<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    {{-- Header --}}
    <h1>Selamat Datang di Web Personalku!</h1>

    {{-- Navigasi --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Web Personal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Biodata</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- Konten --}}
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h1>Hello Guyss! </h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptates totam nostrum, perferendis
                cum voluptatem ullam dicta, dolore sit cupiditate quaerat, et doloribus quibusdam aperiam hic deleniti.
                Quasi, nobis. Incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cum fugit
                magnam quo non nisi quas consectetur explicabo voluptates iste, laudantium amet? Officia ipsum impedit
                voluptate vitae exercitationem voluptatem ut?
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <nav class="navbar fixed-bottom bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Web Personal &copy; 2026</a>
            <a class="navbar-brand" href="#">Dikembangkan Oleh : Joko</a>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
