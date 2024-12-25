<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Monetag Ads Page">
    <meta name="keywords" content="Ads, Monetag, Earn Money, CPM">
    <meta name="author" content="Your Name">
    <title>Earn with Monetag Ads</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b); /* Gradient background */
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            width: 80%;
            max-width: 800px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #ddd;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            background-color: #ff6f61;
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #ff4e42;
            transform: translateY(-5px);
        }

        .monetag-ad {
            margin-top: 30px;
            padding: 15px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: none; /* Hide ad initially */
        }

        .monetag-ad h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
            color: #fff;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            .btn {
                padding: 12px 25px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Watch Ads & Earn Rewards!</h1>
        <p>Click below to watch ads and earn rewards. Your support helps us improve!</p>
        <button class="btn" onclick="showAd()">Show Ad</button>

        <!-- Monetag Ad Area -->
        <div id="monetag-ad" class="monetag-ad">
            <h3>Sponsored Ads</h3>
            <script src="//niphaumeenses.net/vignette.min.js" data-zone="8699700" data-sdk="show_8699700"></script>
        </div>
    </div>

    <script>
        function showAd() {
            const adArea = document.getElementById('monetag-ad');
            adArea.style.display = 'block'; // Show the ad area when button is clicked
        }
    </script>
</body>
</html>