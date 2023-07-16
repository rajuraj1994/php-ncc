<?php require 'include/header.php'; ?>

<h1 class="head text-center text-danger contact_us fw-bold mb-5"> Contanct Us</h1>

<div class="container contacts mt-3">
    <div class="row">
        <div class="col-6 left_icons">
            <div>
                <h3> <i class='bx bx-current-location'></i> Godawari</h3>
            </div>
            <p class="pgrph">where you want to go</p>
            <ul class="contact-info list-unstyled">

            </ul>
            <h4>Email</h4>
            <p class="pgrph">info@wildswimmingandcamping.com</p>

            <h4>Call</h4>
            <p class="pgrph">+977-9745372456</p>
        </div>

        <form class="col-5 formm" method = "POST" action = "contact_action.php">
            <div class="form-floating">
                <input type="text" name = "full_name" class="form-control my-1" id="name" placeholder="Your Name">
                <label for="name">Your Name</label>
            </div>

            <div class="form-floating">
                <input type="email" name = "email" class="form-control my-1" id="email" placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control my-1"  name ="message" placeholder="Leave a message here" id="message"
                    style="height: 150px"></textarea>
                <label for="message">Message</label>
            </div>
            <div class="my-2 btn-contact">
                <button class="btn contact_btn btn-primary" name ="submit" type="submit">Send Message</button>
            </div>
</form>
    </div>
</div>




<!-- bootsrap js external link -->
<script src="../js/bootstrap.min.js"></script>



<div class="iframes">
    <iframe class="my-5"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2296512928474!2d85.31627131504592!3d27.710194831973677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb056bfa5fcca3%3A0xbcae5e83e7563c0a!2sBanbhoj%20Nature%20Camp!5e0!3m2!1sen!2snp!4v1678787787494!5m2!1sen!2snp"
        width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<?php require 'include/footer.php'; ?>