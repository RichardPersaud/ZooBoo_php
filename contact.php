<?php
    include 'header_nav.php'
?>

<div id="wrapper">
    <div class="img_banner"><img src="https://i.ibb.co/sFrRDLz/banner.png"></div>
</div>

<div id="wrapper"> 
    <section class="contact_text">
                    <div class="logo_pro"><img src="https://i.ibb.co/7N9MpRW/logo-design.png" width="300" height="300" ></div>

            <div class="small_wrap"> 
            <h2>Contact</h2>

                <p>If you would like to report a broken episode/anime or request an anime series, For all inquiries, use the contact form below.
                </p>
            </div>

    </section>


<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailto = "richardpersaud2010@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recived an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("location: mailsend.php?mailsend");
}

?>

<style type="text/css">
    
    .contact_form{
        background-color: #efefef;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
        margin-top: 20px;
        box-shadow: 5px 5px 15px 1px #000;
    }

    .container_cont{
        padding: 10px;
    }

    .contact-form label{
        font-size: 1em;
    }

    .contact-form input{
        padding: 10px;
        width: 80%;
    }

    .contact-form textarea{
        width: 100%;
    }

    .contact-form button{
        border-style: none;
        background-color: #10a18e;
        color: #fff;
        padding: 10px 20px 10px 20px;
    }

</style>


<div class="contact_form">
    <div class="container_cont">
        <form class="contact-form" action="contact.php" method="post">
            <label for="name"><b>Name</b></label><br>
            <input type="text" name="name" placeholder="Full name"required><br>
            <label for="e-mail"><b>Email</b></label><br>
            <input type="text" name="mail" placeholder="Your e-mail"equired><br>
            <abel for="subject"><b>Subject</b></label><br>
            <input type="text" name="subject" placeholder="subject"required><br>
            <label for="message"><b>Message</b></label><br>
            <textarea name="message" placeholder="message" required style=" height: 100px"></textarea><br>
            <button type="submit" name="submit"> Submit</button>
        </form>
    </div>
</div>

</div>



<?php
    include 'footer.php'
?>

</body>

</html>