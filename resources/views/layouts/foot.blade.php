<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    
<div class="footer">
  <div><br>
    <font color="white" size="5">

    <br><div class="part">
    <p><b>Flottec Partners</b></p>
    <img src="images/partners.png">
    </div>

    <div class="part2">
    <p><b>Sitemap</b></p>
    </font>
    <table class="spacerows">
        <tr><td><font color="white" size="3"><a href="/global-network">GLOBAL NETWORK</a></font></td><td></td><td><font color="white" size="3"><a href="/home">HOME</a></font></td></tr>
        <tr><td><font color="white" size="3"><a href="/company">COMPANY</a></font></td><td></td><td><font color="white" size="3"><a href="/products">PRODUCTS</a></font></td></tr>
        <tr><td><font color="white" size="3"><a href="/contact-us">CONTACT</a></font></td><td></td><td><font color="white" size="3"><a href="/research">R&D</a></font></td></tr>
        <tr><td><font color="white" size="3"><a href="http://flottec.mx/">FLOTTEC MEXICO</a></font></td><td></td><td><font color="white" size="3"><a href="/sds">SDS/MSDS</a></font></td></tr>
        <tr><td></td><td></td><td><font color="white" size="3"><a href="/privacy">PRIVACY POLICY</a></font></td></tr>
        <tr><td></td><td><font color="#424242">--------</font></td><td><font color="white" size="3"><a href="/disclaimer">DISCLAIMER</a></font></td></tr>
        </table>
    </div>
    </div>
    <br><br><br>
  </div>
</div>
</body>
</html>
