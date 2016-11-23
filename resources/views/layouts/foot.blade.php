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

    <br><div style="margin-left: 150px;">
    <p><b>Flottec Partners</b></p>
    <img src="images/partners.png">
    </div>

    <div style="margin-left: 750px; margin-top: -730px; z-index:1; position: absolute;">
    <p><b>Sitemap</b></p>
    </font>
    <table class="spacerows">
        <tr><td><font color="white" size="3">GLOBAL NETWORK</font></td><td></td><td><font color="white" size="3">HOME</font></td></tr>
        <tr><td><font color="white" size="3">COMPANY</font></td><td></td><td><font color="white" size="3">PRODUCTS</font></td></tr>
        <tr><td><font color="white" size="3">CONTACT</font></td><td></td><td><font color="white" size="3">R&D</font></td></tr>
        <tr><td><font color="white" size="3">FLOTTEC MEXICO</font></td><td></td><td><font color="white" size="3">SDS/MSDS</font></td></tr>
        <tr><td></td><td></td><td><font color="white" size="3">PRIVACY POLICY</font></td></tr>
        <tr><td></td><td><font color="#424242">--------</font></td><td><font color="white" size="3">DISCLAIMER</font></td></tr>
        </table>
    </div>
    </div>
    <br><br><br>
  </div>
</div>
</body>
</html>
