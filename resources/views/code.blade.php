<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umil.xyz | Visit Shortened URL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="card">
            <div class="card-body mx-auto">
                <p>You will visit url {{ $url->url }}</p>
                <a href="{{ $url->url }}" class="btn btn-primary">Click here to visit</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>