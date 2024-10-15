<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            width: 400px;
        }
        h1 {
            color: #5d5fef;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #444;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #999;
        }
        .logo-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .logo-container img {
            width: 100px;
            height: auto;
        }
    </style>
    <script>
        function updateTime() {
            const options = { timeZone: 'Asia/Bangkok', year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
            const bangkokTime = new Intl.DateTimeFormat('en-CA', options).format(new Date());

            document.getElementById('current-time').textContent = bangkokTime.replace(', ', ' ');
        }

        function fetchIpAndPort() {
            // Extract IP from the URL (hostname)
            const url = new URL(window.location.href);
            const ipAddress = url.hostname;
            document.getElementById('ip-address').textContent = ipAddress;

            // Get port dynamically
            const port = url.port || "80"; // Default to port 80 if not specified
            document.getElementById('port').textContent = port;
        }

        window.onload = function() {
            updateTime();
            fetchIpAndPort();
            setInterval(updateTime, 1000); // Update time every second
        };
    </script>
</head>
<body>

    <div class="container">
        <div class="logo-container">
            <img src="https://www.apache.org/img/asf_logo.png" alt="Apache Logo">
            <img src="https://www.php.net/images/logos/php-logo.svg" alt="PHP Logo">
        </div>

        <h1>Exam</h1>

        <p><span class="label">IP Address:</span> <span id="ip-address"><?php echo $_SERVER['SERVER_ADDR']; ?></span></p>
        <p><span class="label">Port:</span> <span id="port"><?php echo $_SERVER['SERVER_PORT']; ?></span></p>
        <p><span class="label">Current Time (Bangkok):</span> <span id="current-time">Loading...</span></p>

        <div class="footer">
            <p>Powered by Apache & PHP</p>
        </div>
    </div>

</body>
</html>
