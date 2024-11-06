<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Absensi Magang</title>
    <link rel="stylesheet" href="login3.css">
</head>
<body>
<div class="login-container">
    <div class="login-box">
        <div class="logo">
            <img src="img/Screenshot (7).png" alt="Logo" class="logo-image">
        </div>
        <h2>Silahkan Log In</h2>
        <form action="proses_login.php" method="POST" name="form_input">
            <div class="input-group">
                <div class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" width="24px" height="24px" viewBox="0 0 512 512" xml:space="preserve">
                        <path d="M256,246.296c-64.182,0-116.398-52.216-116.398-116.398S191.818,13.5,256,13.5s116.398,52.216,116.398,116.398  S320.182,246.296,256,246.296z M256,38.5c-50.397,0-91.398,41.001-91.398,91.398s41.001,91.398,91.398,91.398  s91.398-41.001,91.398-91.398S306.397,38.5,256,38.5z M403.196,498.5H108.804c-31.754,0-57.588-25.834-57.588-57.588v-36.027  c0-74.966,60.989-135.955,135.955-135.955h137.657c74.966,0,135.955,60.989,135.955,135.955v36.027  C460.784,472.666,434.95,498.5,403.196,498.5z M187.171,293.93c-61.181,0-110.955,49.774-110.955,110.955v36.027  c0,17.969,14.619,32.588,32.588,32.588h294.392c17.969,0,32.588-14.619,32.588-32.588v-36.027  c0-61.181-49.774-110.955-110.955-110.955H187.171z"/>
                    </svg>
                </div>
                <input type="text" id="username" name="username" placeholder="Username">
            </div>
            
            <div class="input-group">
                <div class="input-icon">
                    <svg height="24px" style="enable-background:new 0 0 1262 1710.258;" version="1.1" viewBox="0 0 1262 1710.258" width="24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="lock">
                            <g>
                                <path d="M1196.495,713.258H1090V459.592c0-253.285-205.802-459.35-459.001-459.35C377.799,0.242,172,206.442,172,459.892v253.366 H66.686C30.195,713.258,0,742.241,0,778.731v766.42c0,91.079,74.712,165.106,165.792,165.106h931.597 c91.08,0,164.611-74.027,164.611-165.106v-766.42C1262,742.241,1232.985,713.258,1196.495,713.258z M304,459.892 c0-180.588,146.664-327.508,326.999-327.508C811.335,132.384,958,279.168,958,459.592v253.666H304V459.892z M1130,1545.151 c0,18.218-14.395,33.106-32.611,33.106H165.792c-18.216,0-33.792-14.889-33.792-33.106V845.258h998V1545.151z"/>
                                <path d="M631,1409.707c36.491,0,66-29.58,66-66.071v-237.854c0-36.49-29.51-66.07-66-66.07c-36.49,0-66,29.58-66,66.07v237.854 C565,1380.127,594.509,1409.707,631,1409.707z"/>
                            </g>
                        </g>
                        <g id="Layer_1"/>
                    </svg>
                </div>
                <input type="password" id="password" name="kode_admin" placeholder="kode admin">
            </div>
            <button type="submit" class="login-button" name="input"><h1>Log In</h1></button>
            <!-- <button type="submit" class="login-button" name="input" onclick="window.location.href='0index.php'"><h1>Log In</h1></button> -->
        </form>
    </div>
</div>
</body>
</html>
