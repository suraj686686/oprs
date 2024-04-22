<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <meta name="author" content="Codeconvey" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/contactus.css">
</head>

<body>
    <?php
    include('php/header.php');
    ?>
    <div class="ScriptTop">
        <div class="rt-container">
            <div class="col-rt-4" id="float-right">
            </div>
            <div class="col-rt-2">
                <ul>
                    <li><a href="index.php" style="background-color:blue;">Back</a></li>
                </ul>
            </div>
        </div>
    </div>

    <header class="ScriptHeader">
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="rt-heading">
                    <center>
                        <h1 style="color: #ffffff;">Contact Us </h1>
                        <p style="color: #ffffff;">If you have any questions, feedback, or inquiries, please don't
                            hesitate to get in touch with us. We're here to assist you and provide the information you
                            need.</p>
                    </center>
                </div>
            </div>
        </div>

    </header>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <div>
                        <div class="container">
                            <div class="contact-parent">
                                <div class="contact-child child1">
                                    <p>
                                        <i class="fas fa-map-marker-alt"></i> Address <br />
                                        <span>
                                            <p>
                                                #000,Phase 9<br />
                                                Mohali,Punjab,India
                                            </p>
                                        </span>
                                    </p>

                                    <p>
                                        <i class="fas fa-phone-alt"></i> Let's Talk <br />
                                        <span>
                                            <p><a href="#">+91-6280560686</a></p>
                                        </span>
                                    </p>

                                    <p>
                                        <i class=" far fa-envelope"></i> General Support <br />
                                        <span>
                                            <p><a href="#">info@suraj686.com</a></p>
                                        </span>
                                    </p>
                                </div>

                                <div class="contact-child child2">
                                    <div class="inside-contact">
                                        <h2>Contact Us</h2>
                                        <h3>
                                            <span id="confirm">
                                        </h3>
                                        <div class="box">

                                            <p>Name *</p>
                                            <input id="txt_name" type="text" Required="required">

                                            <p>Email *</p>
                                            <input id="txt_email" type="text" Required="required">

                                            <p>Phone *</p>
                                            <input id="txt_phone" type="text" Required="required">

                                            <p>Subject *</p>
                                            <input id="txt_subject" type="text" Required="required">

                                            <p>Message *</p>
                                            <textarea id="txt_message" rows="4" cols="20"
                                                Required="required"></textarea>

                                            <input type="submit" id="btn_send" value="SEND">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <?php
    include('php/footer.php');
    ?>

</body>

</html>