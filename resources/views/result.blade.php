<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortened URL | umil.xyz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h1>Shortened URL | umil.xyz</h1>
                <nav>
                    <ul class="nav justify-content-center">
                        <li><a href="/">Home</a></li>
                        <li><a href="/terms-of-service">Terms of Service</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/contact-us">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2>Your shortened URL:</h2>
                    <p class="lead ress">https://umil.xyz/{{ $url->short_url }}</p>
                </div>
                <div class="text-center mb-4">
                    <p>This shortened URL redirects to the original URL:</p>
                    <p class="lead">{{ $url->url }}</p>
                </div>
                <div class="text-center">
                    <p>Share the shortened URL on social media, messaging apps, or anywhere you need a concise and shareable link. Make sure to copy the shortened URL before closing this tab.</p>
                    <button class="btn btn-primary">Copy Shortened URL</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const copyButton = document.querySelector('.btn-primary');
        copyButton.addEventListener('click', () => {
            const shortenedUrl = document.querySelector('.ress').textContent.trim();
            const tempInput = document.createElement('input');
            tempInput.value = shortenedUrl;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            alert('Shortened URL copied to clipboard!');
        });
    </script>
</body>

</html>