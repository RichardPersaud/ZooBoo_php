<?php
    include 'header_nav.php'
?>

<div id="wrapper">
<div class="img_banner"><img src="assets/img/banner.png"></div>
</div>

    <div id="wrapper"> 
    <section class="contact_text">
                <div class="logo_pro"><img src="assets/img/logo_design.png" width="300" height="300" ></div>

        <div class="small_wrap"> 
        <h2>Contact</h2>

            <p>If you would like to report a broken episode/anime or request an anime series, please use our <b> Email address</b>. You will receive a response much quicker. For all other inquiries, use the contact form below.
            </p>
        </div>

 </section>
<div class="contact">
    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
    <div class="row">
        <label for="name">Your name:</label><br />
        <input id="name" class="input" name="name" type="text" value="" size="50" /><br />
    </div>
    <div class="row">
        <label for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="50" /><br />
    </div>
    <div class="row">
        <label for="message">Your message:</label><br />
        <textarea id="message" class="input" name="message" rows="7" cols="52"></textarea><br />
    </div>
    <input id="submit_button" type="submit" class="btn btn-success btn-lg" role="button" value="Send email"></i></a>
</form>
</div>
         <div class="small_wrap"> 
            
        </div>
 
</div>
    <?php
    include 'footer.php'
?>

</body>

</html>