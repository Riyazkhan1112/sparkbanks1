<?php include('nav.php'); ?>

<style>


.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}

.contact-form .form-control{
    border-radius:1rem;
}

.contact-image{
    text-align: center;
}

.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}

.contact-form form{
    padding: 4%;
}

.contact-form form .row{
    margin-bottom: -7%;
}

.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color:maroon;
}

.contact-form .btnContact {
    width: 50%;
    height: 40px;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    float: right;
    margin-top: 97px;
    background:maroon;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}

.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color:maroon;
    border: none;
    cursor: pointer;
}
h1{

background-color:transparent;
cursor: pointer;
color: black;
text-align: center;
height: 70px;
margin-bottom: 0 !important;
border: 0 !important;
height: auto;
transform: 1s;
font-family: 'Suez One', serif;
}

h1:hover{
background-color:transparent;
color:maroon;
transition-duration: 1s;
}
.navbar{
    height: 60px;
    margin-bottom: 0 !important;
    border: 0 !important;
}

.nav-item{
    background-color: maroon;
    border-radius: 10px;
}


</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" id="sendmsg">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
