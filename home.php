<?php session_start();$username="";?>
<html>

<head>
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/display.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <div class="nav-container">
        <span class="logo">BLOOM</span>
        <nav>
            <a href="#">Home</a>
            <a href="html/blog.html">Blog</a>
            <a href="html/activity.html">Activity</a>
            <a href="html/humor.html">Humor</a>
            <a href="html/about.html">About</a>
            <a href="html/contactus.html">Contact</a>
            <!-- <a href="#">MyAccount</a> -->
            <span class="myacc">
                <button class="dropbtn">MY ACCOUNT
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="profile card">
                    <div>
                        <img src="images/icon.jpeg" alt="profile" class="profile_img">

                    </div>
                    <div class="profile_name"><?php echo($_SESSION['username']);?></div>
                    <div class="box">
                        <a href="html/password.html">
                            <button class="pass-btn custom-button">
                                Change Password
                            </button>
                        </a>
                        </br>
                        <a href="backend\logout.php">
                            <button class="log-btn custom-button">
                                Logout
                            </button>
                        </a>
                    </div>
                </div>
                </span>
            <div class="animation start-Home"></div>
        </nav>
    </div>
    <br><br>

    <div class="hero-image">
        <div class="hero-text">
          <h1 style="font-size:50px">Where Flowers Bloom,<br> so does Hope</h1>
        </div>
    </div>
    <br><br><br><br><br>
      
    <div class="about-section">
        <div class="inner-container">
            <h1>Our Blog</h1>
            <p class="text">
            Blogging helps enhance local support, as well as connect people to shared experiences 
            of thoughts and feelings. Even the act of writing to the public community brings people 
            together, enhancing the mental health of the people connecting.So why not give a look 
            at our blogs and know some things about your health that you never knew!
            </p>
            <button><a href="html/blog.html">Explore</a></button>
           
        </div>
    </div>
    <br><br><br><br><br>

    <div class="about-section" style="background-image: url(images/activity.jpg);">
        <div class="inner-container">
            <h1>Activities</h1>
            <p class="text">
            We don't understand how important refreshment from our day to day life activities is 
            until and unless it drains us completely into pointless mind disturbing games. Where 
            our energy is used in thinking non-required things which could be used for better productivity. 
            Finding a solution on this, we introduce some humor and activities to make your day 
            little better than it was a while ago. Click here for some refreshment.</p>
            <button><a href="html/activity.html">Explore</a></button>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="about-section" style="background-image: url(images/laugh.jpg);">
        <div class="inner-container">
            <h1>Humor</h1>
            <p class="text">
                Laughter makes you feel good. And this positive feeling remains with you even after the laughter subsides.
                
                Humor helps you keep a positive, optimistic outlook through difficult situations, disappointments, and loss.
            </p>
            <button><a href="html/humor.html">Explore</a></button>
        </div>
    </div>

</br>
<footer class="footer">

    <div class="grid-container">
        <div class="grid-item"><a href="#">Policy</a></div>
        <div class="grid-item"> <span class="socials"><a href="#"><i class="fab fa-facebook-f"></i></a></span>
            <span class="socials"><a href="#"><i class="fab fa-twitter"></i></a></span>
            <span class="socials"><a href="#"><i class="fab fa-instagram"></i></a></span>
            <span class="socials"><a href="#"><i class="fab fa-linkedin"></i></a></span>
        </div>
        <div class="grid-item"><a href="#">FAQ</a></div>
    </div>
</footer>
</body>
</html>