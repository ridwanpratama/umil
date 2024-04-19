<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free URL Shortener - Shorten URLs Instantly and Easily</title>
    <meta name="description" content="Shorten long, complex URLs with our free and easy-to-use URL shortener. Create concise, shareable links in just a few clicks without registration or fees.">
    <meta name="keywords" content="url shortener, free url shortener, shorten urls, short links, link shortener">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h1>Free URL Shortener | umil.xyz</h1>
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
                    <p class="lead">Shorten your URLs for <strong>FREE</strong> <br> Without wasting your time for Registration</p>
                </div>
                <form action="{{ route('shorten') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter a URL to shorten" aria-label="URL" name="url">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
                <div class="line-separator mt-5"></div>
                <div class="about-section mb-4">
                    <h3 class="text-center mb-3 mt-5">About Our Free URL Shortener</h3>
                    <p class="text-center">Our free URL shortener is designed to make sharing long, complex URLs easier and more convenient. With just a few clicks, you can create concise, shareable links without the hassle of registration or fees. Perfect for social media, messaging apps, and anywhere character limits apply.</p>
                    <p class="text-center">No registration is required to use our URL shortener. Simply enter your long URL, and we'll generate a short, easy-to-share link instantly.</p>
                </div>
                <div class="faq-section">
                    <h3 class="text-center mb-4 mt-5">Frequently Asked Questions</h3>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Why should I use a URL shortener?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    URL shorteners help you create concise, easy-to-share links from long, complex URLs. This is especially useful for sharing links on social media like <a href="https://twitter.com">Twitter / X</a> or in places where character limits apply.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Is this URL shortener free to use?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, our URL shortener is completely free to use. You don't need to register or pay any fees to shorten your URLs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I use this URL shortener for commercial purposes?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, you can use our URL shortener for commercial purposes without any restrictions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is my data safe with this URL shortener?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we don't store any personal information, so your data is safe with our URL shortener.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What is the lifespan of a shortened URL?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    A shortened URL is active for 30 days from its creation. Short URLs that do not have at least one click per month are removed.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>