<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAYTO | Lorenzo's Farm and Resort</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #24352a;
        }

        header {
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            margin-left: 18px;
            color: #24352a;
            text-decoration: none;
        }

        .hero {
            min-height: 420px;
            display: flex;
            align-items: center;
            padding: 35px 8%;
            color: white;
            background:
                linear-gradient(#0006, #0006),
                url('https://images.unsplash.com/photo-1449158743715-0a90ebb6d2d8?auto=format&fit=crop&w=1600&q=80')
                center/cover;
        }

        .hero div {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 42px;
        }

        .btn {
            display: inline-block;
            background: #28734a;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        section {
            padding: 35px 8%;
        }

        .rooms {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .room {
            border: 1px solid #ddd;
            padding: 20px;
            flex: 1;
            min-width: 200px;
            border-radius: 8px;
        }

        footer {
            background: #24352a;
            color: white;
            padding: 20px 8%;
        }
    </style>
</head>

<body>
    <header>
        <strong>WAYTO</strong>

        <nav>
            <a href="#home">Home</a>
            <a href="#accommodations">Accommodations</a>
            <a href="#about">About</a>
            <a href="#booking">Booking</a>
        </nav>
    </header>

    <main>
        <section class="hero" id="home"
            @if (!empty($setting?->hero_image))
                style="background-image: linear-gradient(#0006, #0006), url('{{ asset('storage/' . $setting->hero_image) }}');"
            @endif
        >
            <div>
                <h1>{{ $setting?->title ?? "Welcome to Lorenzo's Farm and Resort" }}</h1>

                <p>{{ $setting?->description ?? 'Discover a relaxing escape and explore our accommodation options in one convenient place.' }}</p>

                <a class="btn" href="#booking">Request a Booking</a>
            </div>
        </section>

        <section id="accommodations">
            <h2>Our Accommodations</h2>
            <p>Explore accommodation options for your next visit.</p>

            <div class="rooms">
                <article class="room">
                    <h3>Resort Cottage</h3>
                    <p>A comfortable place to relax with family and friends.</p>
                </article>

                <article class="room">
                    <h3>Family Accommodation</h3>
                    <p>A space for guests planning a family getaway.</p>
                </article>

                <article class="room">
                    <h3>Group Accommodation</h3>
                    <p>An option for groups and special gatherings.</p>
                </article>
            </div>
        </section>

        <section id="about">
            <h2>About the Resort</h2>
            <p>
                Lorenzo's Farm and Resort offers guests a place to relax
                and enjoy their stay. Explore the available accommodations
                and contact the resort to inquire about reservations.
            </p>
        </section>

        <section id="booking">
            <h2>Booking Inquiries</h2>
            <p>
                Interested in staying with us? Contact the resort to inquire
                about accommodation availability and rates.
            </p>

            <a class="btn"
               href="mailto:lorenzosresort@example.com?subject=WAYTO%20Booking%20Inquiry">
                Send an Inquiry
            </a>

            <p>
                <small>
                    Replace this sample email address with the resort's actual contact details.
                </small>
            </p>
        </section>
    </main>

    <footer>
        <p>WAYTO — Lorenzo's Farm and Resort Accommodation Services</p>
    </footer>
</body>
</html>