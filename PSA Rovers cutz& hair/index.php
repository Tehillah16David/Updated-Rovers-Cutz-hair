<?php
include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <script>
        function showSuccess() {
            const message = document.getElementById("successMessage");
            message.display.style = "block";
        }
    </script>

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init({
                publicKey: "5_hClfcJ9lk7rl1i9",
            });
        })();
    </script>
</head>

<body>
    <!--Home section-->
    <div class="hero">
        <div class="hero-tags">
            <span class="tag1">PROFESSIONAL HAIR & BEAUTY</span>
            <span class="tag2">UNISEX SALON</span>
        </div>
        <h1>Look Good, Feel Amazing</h1>
        <p>Premium hair and beauty services tailored just for you.<br>
            Walk in and leave feeling like a king and queen.
        </p>
        <div class="hero-btn">
            <a href="#book-now" class="hero-btn1">BOOK APPOINTMENT</a>
            <a href="#services" class="hero-btn2">VIEW SERVICES</a>
        </div>
    </div>

    <!--Service section-->
    <div class="service" id="services">
        <div class="service-header">
            <span>WHAT WE OFFER</span>
            <h1>Our Services</h1>
            <p>Quality treatment for all hair types - Men and Women are welcome</p>
        </div>
        <div class="service-container1" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
            <div class="service-card">
                <h3>Women</h3>
                <h4>Washing</h4>
                <p class="price">From 2,000</p>
                <p class="time-duration">45-60 MIN</p>
            </div>
            <div class="service-card">
                <h3>Men</h3>
                <h4>Haircut & Trim</h4>
                <p class="price">From 2,000</p>
                <p class="time-duration">45-60 MIN</p>
            </div>

            <div class="service-card">
                <h3>Women</h3>
                <h4>Braids</h4>
                <p class="price">From 2,000 - 12,000</p>
                <p class="time-duration">1 HR - 4 HRS</p>
                <p>Depending on the style choosen</p>
            </div>
        </div>
        <div class="service-container2" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">

            <div class="service-card">
                <h3>Women</h3>
                <h4>Manicure</h4>
                <p class="price">From 10,000 </p>
                <p class="time-duration">40 - 60 MIN</p>
            </div>

            <div class="service-card">
                <h3>Women</h3>
                <h4>Wig Installment</h4>
                <p class="price">From 15,000</p>
                <p class="time-duration">40 - 60 MIN</p>
            </div>

            <div class="service-card">
                <h3>Men & Women</h3>
                <h4>Pedicure</h4>
                <p class="price">From 2,000</p>
                <p class="time-duration">30 - 50 MIN</p>
            </div>
        </div>
        <button onclick="openModal()" class="price-btn">VIEW FULL PRICE</button>

        <div id="priceModal" class="modal">
            <div class="modal-content">
                <span onclick="closeModal()">X</span>
                <img src="assets/pricelist.jpeg" alt="a photo of our price-list" style="width: 100%; display: block; height: auto;">
            </div>
        </div>
    </div>

    <!--Gallery section-->
    <section class="Gallery" id="gallery">
        <div class="gallery-header">
            <span>OUR WORK</span>
            <h1>Gallery</h1>
            <p>A peak at some of our best looks</p>
        </div>
        <div class="gallery-container">
            <img src="assets/hair1.jpeg">
            <img src="assets/nail1.jpeg">
            <img src="assets/hair2.jpg">
            <img src="assets/nail2.jpeg">
            <img src="assets/hair3.jpg">
            <img src="assets/nail3.jpeg">
            <img src="assets/nail4.jpeg">
        </div>
    </section>

    <!--Booking section-->
    <div id="book-now" class="Booking">
        <div class="booking-header">
            <span>APPOINTMENTS</span>
            <h1>Book a session</h1>
        </div>

        <div class="information">
            <p>Fill in your details and we'll confirm your appointment</p>
            <form method="POST" id="book-now" action="./backend/backend.php">
                <div class="form-group">
                    <label>FULL NAME:</label>
                    <input type="text" placeholder="Enter your full name" name="fullname" id="name">
                </div>

                <div class="form-group">
                    <label>PHONE NUMBER:</label>
                    <input type="text" placeholder="e.g +234 9156 312 310" name="tel" id="tel">
                </div>

                <div class="form-group">
                    <label>EMAIL:</label>
                    <input type="text" placeholder="Enter valid email address" name="email" id="email">
                </div>

                <div class="form-group-gender">
                    <label>GENDER:</label>
                    <label class="male"><input type="radio" name="gender" value="Male">Male</label>
                    <label class="female"><input type="radio" name="gender" value="Female">Female</label>
                </div>

                <div class="form-group">
                    <label class="service-head" id="service">SERVICE:</label>
                    <select name="options">
                        <option></option>
                        <option>Manicure</option>
                        <option>Pedicure</option>
                        <option>Wig installation</option>
                        <option>Revamping of wig</option>
                        <option>Braiding</option>
                        <option>Haircut & trim</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>PREFERRED DATE:</label>
                    <input type="date" class="date" name="date" id="date" required>
                </div>

                <div class="form-group">
                    <label>ADDITIONAL NOTES:</label>
                    <textarea placeholder="Any special requests..." name="notes" id="message"></textarea>
                </div>

                <button class="submit-btn" type="submit" name="submit" onclick="showSuccess">BOOK MY APPOINTMENT</button>
                <p id="successMessage" style="display: none;">Successfully Submitted</p>
                <p id="errorMessage" style="display: none;"></p>
            </form>
        </div>
    </div>

    <!--Reviews section-->
    <div id="review" class="Review">
        <span>REVIEWS</span>
        <h1>What our clients say</h1>
        <p>Real people, Real results</p>

        <!-- carousel section-->
        <div class="testimonials">
            <div class="carousel" aria-hidden="true">
                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Best salon experience i've had in keffi. My hair looks so good!</p>
                    <h3>Ivey B.</h3>
                </div>

                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>I usually wash my hair at home because of the bad experiences i've had at previous salons but i
                        decided to give Rovers a try and i didn't regret it at because of the kind of hair treatment i
                        recieved</p>
                    <h3>Rheedah A.</h3>
                </div>

                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>As a guy i was skeptical but the Rovers team gave me one the cleanest braids ever</p>
                    <h3>Samuel O.</h3>
                </div>
            </div>
            <!--Duplicate cards-->
            <div class="carousel" aria-hidden>
                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Best salon experience i've had in keffi. My hair looks so good!</p>
                    <h3>Ivey B.</h3>
                </div>

                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>I usually wash my hair at home because of the bad experiences i've had at previous salons but i
                        decided to give Rovers a try and i didn't regret it at because of the kind of hair treatment i
                        recieved</p>
                    <h3>Rheedah A.</h3>
                </div>

                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>As a guy i was skeptical but the Rovers team gave me one the cleanest braids ever</p>
                    <h3>Samuel O.</h3>
                </div>

            </div>
            <!--
            <div class="carousel">
                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Best salon experience i've had in keffi. My hair looks so good!</p>
                    <h3>Ivey B.</h3>
                </div>

                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>I usually wash my hair at home because of the bad experiences i've had at previous salons but i
                        decided to give Rovers a try and i didn't regret it at because of the kind of hair treatment i
                        recieved</p>
                    <h3>Rheedah A.</h3>
                </div>

                <div class="testimonial">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>As a guy i was skeptical but the Rovers team gave me one the cleanest braids ever</p>
                    <h3>Samuel O.</h3>
                </div>
            </div>-->
        </div>

        <div class="leave-review" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <h2>Leave a review</h2>
            <p>Your feedback helps us maintain our premium salon standards.</p>
            <form>
                <div class="review-row">
                    <div class="review-name">
                        <label>NAME:</label>
                        <input type="text" placeholder="Enter your full name">
                    </div>

                    <div class="rating">
                        <label>RATING:</label>
                        <select>
                            <option></option>
                            <option value="5">★★★★★ (5 Stars)</option>
                            <option value="4">★★★★☆ (4 Stars)</option>
                            <option value="3">★★★☆☆ (3 Stars)</option>
                            <option value="2">★★☆☆☆ (2 Stars)</option>
                            <option value="1">★☆☆☆☆ (1 Star)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>REVIEW:</label>
                    <textarea required placeholder="Write your review here..."></textarea>
                </div>
                <button class="submit-button">SUBMIT REVIEW</button>
            </form>
        </div>
    </div>
    <script src="./script/style.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php include('includes/footer.php') ?>




</body>

</html>