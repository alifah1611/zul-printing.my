<?php

// Template header, feel free to customize this
function template_header($title) 
{
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link rel="shortcut icon" type="x-icon" href="images/logo.jpg">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale =1">
    </head>
    <body>
EOT;
}

// Template footer
function template_footer() {
echo <<<EOT
<div class="footer">
    <div class="footer-content">
        <h3 id="contact">HUBUNGI KAMI</h3>
        <b><p>ALAMAT</br></b>
        Zul Tshirt & Design No. 3, Jalan TU41, Taman Tasik Utama, 75450 Ayer Keroh Melaka</p>

        <div class="contact">
            <ul>
                <li><a href="https://wa.me/60132850982" target="_blank"><i class="fa-li fa fa-whatsapp" aria-hidden="true"></i>Whatsapp/Call</a></li>
                <li><a href="https://www.facebook.com/zulprintingbaju/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
                <li><a href="https://www.instagram.com/zul_printing_baju_murah/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
                <li><a href="mailto:zultshirtdesign@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i>Email</a></li>
            </ul>

            
        </div>

    </div>

    <div class="footer-bottom">
        Created by Wan Nurul Alifah | &copy; Zul Printing Baju Murah
    </div>

</div>
   
    </body>
</html>
EOT;
}
?>