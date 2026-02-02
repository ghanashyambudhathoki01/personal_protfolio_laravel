<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f8fafc;
            color: #0f172a;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 48px;
            background-color: #0f172a;
            border-bottom: 1px solid #1e293b;
        }

        .navbar img {
            height: 44px;
            width: auto;
            object-fit: contain;
        }

        .navbar-links {
            display: flex;
            gap: 32px;
        }

        .navbar-links a {
            color: #e5e7eb;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.2px;
            position: relative;
            padding-bottom: 4px;
            transition: color 0.3s ease;
        }

        .navbar-links a:hover {
            color: #38bdf8;
        }

        .navbar-links a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: #38bdf8;
            transition: width 0.3s ease;
        }

        .navbar-links a:hover::after {
            width: 100%;
        }

        /* ================= MAIN ================= */
        main {
            min-height: 80vh;
            padding: 40px;
        }

        /* ================= FOOTER ================= */
        footer {
            background-color: #020617;
            color: #e5e7eb;
            text-align: center;
            padding: 18px;
            font-size: 14px;
        }
    </style>
</head>

<body>

<header>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="https://imgs.search.brave.com/ajqs--cZc1qdP0BViTyv1qQzae0mVJwHem5qV_c4MR0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wNDgv/MjM0LzU0Mi9zbWFs/bC9hLW1hbi1pcy1z/aXR0aW5nLW9uLXRo/ZS1mbG9vci13aXRo/LWEtbGFwdG9wLWlu/LWZyb250LW9mLWhp/bS1wcm9ncmFtbWVy/LXByb2Zlc3Npb24t/cG5nLnBuZw" alt="CodeIT Logo">
        </div>

        <div class="navbar-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/service">Service</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>
</header>

<main>
    {{ $slot }}
</main>

<footer>
   <p> &copy; Ghanashyam Budhathoki | All rights reserved</p>
</footer>

</body>
</html>
