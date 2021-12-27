
<?php get_header();?>

<!-- hero banner -->
<div class="hero">
    <div class="heroContent">
        <div class="heroContent-head">
            <h1 class="heroContent-heading">
                The Price of Excellence <br />
                is discipline.
            </h1>
        </div>
    </div>
    <!-- hero video -->
    <div class="bgVideo">
        <video class="bgVideo-content" autoplay muted loop>
            <source src="<?php echo get_theme_file_uri('/assets/images/workout-video.mp4')?>" />
            Your browser is not supported!
        </video>
    </div>
</div>
<!-- start of main page area -->
<main>
    <!-- a quote -->
    <div class="mainQuote">
        <div class="container">
            <q class="text"
                >Training gives us an outlet for suppressed energies
                created by stress and thus tones the spirit just as
                exercise conditions the body</q
            >
            <br />
            <cite>Arnold Schwarzenegger</cite>
        </div>
    </div>
    <!-- membership section -->
    <section id="members" class="members sections">
        <div class="container">
            <div class="membersHead">
                <h1 class="membersHeading">what we offer</h1>
            </div>
            <div class="membersGrid">
                <div class="membersGrid-training">
                    <h3 class="membersGrid-title">
                        1-On-1 Personal Training
                    </h3>
                    <p class="text">
                        All sessions are 1 hour and personalized to your
                        individual needs and interests. We offer
                        coaching in powerlifting, strongman,
                        Olympic-style weightlifting, sport-specific
                        performance training, kettlebell training, and
                        general fitness. Available in single sessions,
                        3- and 6-pack sessions, or 3 times per week.
                    </p>
                </div>
                <div class="membersGrid-Gym">
                    <h3 class="membersGrid-title">Open Gym</h3>
                    <p class="text">
                        Equipped for powerlifting, strongman,
                        Olympic-style weightlifting, and functional
                        fitness. Although you’re training without a
                        coach, you’re never training alone. Staff are
                        always available to spot or answer questions,
                        and you’ll become part of a community of
                        competitive and recreational lifters who have
                        fun and keep each other motivated.
                    </p>
                </div>
                <div class="membersGrid-guidance">
                    <h3 class="membersGrid-title">
                        Unrivaled Expertise
                    </h3>
                    <p class="text">
                        Founder and operator, Phil Clark, has had over
                        30 years of experience competing and training at
                        the world-class level, coaching top athletes,
                        and writing about fitness. He works with each
                        staff-instructor to determine the best exercises
                        to do (and the exercises to avoid), the best
                        order of those exercises, how the client should
                        be instructed to do those exercises, and what to
                        do when the client struggles to follow the
                        instructions.
                    </p>
                </div>
                <div class="membersGrid-equipment">
                    <h3 class="membersGrid-title">
                        STATE OF THE ART EQUIPMENT
                    </h3>
                    <p class="text">
                        The Training Station is in a new facility that
                        is meticulously maintained, full of state of the
                        art equipment and is run with unparalleled
                        passion by a staff that knows fitness. Owner
                        Phil Clark—running guru, Olympian trainer, 6ABC
                        health consultant, contributer to the
                        Philadelphia Inquirer—built the gym to be the
                        ideal training facility.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- staff / trainers carousel section -->
    <section id="staff" class="staff sections">
        <div class="staffContainer">
            <div class="staffIntro">
                <h1 class="staffHeading">
                    Meet our trainers <br />
                    <a href="<?php echo site_url('/trainers')?>" class="trainer-btn">See more</a>
                </h1>
            </div>
            <!-- staff images slider-->
            <div class="sliderWrapper">
                <div class="slider" id="slider">
                    <div class="slide slide-1">
                        <div class="slide-content">
                            <span class="slide-text">a</span>
                        </div>
                    </div>

                    <div class="slide slide-2">
                        <div class="slide-content">
                            <span class="slide-text">strong</span>
                        </div>
                    </div>

                    <div class="slide slide-3">
                        <div class="slide-content">
                            <span class="slide-text">spirit</span>
                        </div>
                    </div>

                    <div class="slide slide-4">
                        <div class="slide-content">
                            <span class="slide-text">needs</span>
                        </div>
                    </div>

                    <div class="slide slide-5">
                        <div class="slide-content">
                            <span class="slide-text"><p>a</p></span>
                        </div>
                    </div>

                    <div class="slide slide-6">
                        <div class="slide-content">
                            <span class="slide-text"
                                ><p>strong</p></span
                            >
                        </div>
                    </div>

                    <div class="slide slide-7">
                        <div class="slide-content">
                            <span class="slide-text"
                                ><p>powerful</p></span
                            >
                        </div>
                    </div>

                    <div class="slide slide-8">
                        <div class="slide-content">
                            <span class="slide-text"><p>body</p></span>
                        </div>
                    </div>
                </div>
                <div class="arrow" id="arrowLeft"></div>
                <div class="arrow" id="arrowRight"></div>
            </div>
        </div>
        <!--add trainers pop up modal -->
    </section>

    <!-- first timers tips section -->
    <section id="tips" class="tips sections">
        <div class="tips-head">
            <h1 class="tips-heading">First-Timer Tips</h1>
        </div>
        <div class="tips-text">
            <p class="text">
                Get ready to sweat, have fun and crush your fitness
                goals.
            </p>
        </div>
        <div class="tipBoxes">
            <!-- box 1 -->
            <div class="tipBoxes-1 box">
                <div class="box-head">
                    <img src="<?php echo get_theme_file_uri('/assets/images/handshakeHeart.png')?>" alt="" />
                    <h2 class="box-heading">We’ve Got Your Back</h2>
                </div>
                <div class="box-details">
                    <p class="text">
                        Don’t worry if the movements are new to you! Our
                        trainers are credentialed and caring. They
                        provide personalized attention and movement
                        modifications to ensure you're doing what's
                        right for your body without risk of injury.
                    </p>
                </div>
            </div>
            <!-- box 2 -->
            <div class="tipBoxes-2 box">
                <div class="box-head">
                    <img src="<?php echo get_theme_file_uri('/assets/images/shoes.png')?>" alt="" />
                    <h2 class="box-heading">Come Prepared</h2>
                </div>
                <div class="box-details">
                    <p class="text">
                        Our combination of cardio machines, weights, and
                        bodyweight training, so be sure to wear sneakers
                        and comfortable athletic clothes. Don’t forget
                        to hydrate! We have filling stations and bottled
                        water for purchase.
                    </p>
                </div>
            </div>
            <!-- box 3 -->
            <div class="tipBoxes-3 box">
                <div class="box-head">
                    <img src="<?php echo get_theme_file_uri('/assets/images/muscle.png')?>" alt="" />
                    <h2 class="box-heading">Get Ready to Have Fun</h2>
                </div>
                <div class="box-details">
                    <p class="text">
                        Be sure to come with an open mind and a positive
                        attitude. Get ready to be challenged and have
                        some fun along the way!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- image grid with location information -->
    <section id="location" class="location sections">
        <div class="container">
            <div class="locationGrid">
                <div class="galleryGrid">
                    <figure class="galleryFig galleryFig-1">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-1.jpg')?>"
                            alt="gallery image 1"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-2">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-2.jpg')?>"
                            alt="gallery image 2"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-3">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-3.jpg')?>"
                            alt="gallery image 3"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-4">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-4.jpg')?>"
                            alt="gallery image 4"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-5">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-5.jpg')?>"
                            alt="gallery image 5"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-6">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-6.jpg')?>"
                            alt="gallery image 6"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-7">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-7.jpg')?>"
                            alt="gallery image 7"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-8">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-8.jpg')?>"
                            alt="gallery image 8"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-9">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-9.jpg')?>"
                            alt="gallery image 9"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-10">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-10.jpg')?>"
                            alt="gallery image 10"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-11">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-11.jpg')?>"
                            alt="gallery image 11"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-12">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-12.jpg')?>"
                            alt="gallery image 12"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-13">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-13.jpg')?>"
                            alt="gallery image 13"
                            class="galleryFig-img"
                        />
                    </figure>
                    <figure class="galleryFig galleryFig-14">
                        <img
                            src="<?php echo get_theme_file_uri('/assets/images/view-14.jpg')?>"
                            alt="gallery image 14"
                            class="galleryFig-img"
                        />
                    </figure>
                </div>
                <div class="locationInfo">
                    <h3 class="locationInfo-heading">
                        Visit, Call, or Email
                    </h3>
                    <p class="text">
                        10 Crozerville Rd*<br />
                        Aston, PA 19014<br />
                        (610) 358-1888<br />
                        <a
                            class="locationInfo-link"
                            href="mailto:info@spartanfitgym.com"
                            >info@spartanfitgym.com</a
                        >
                    </p>

                    <h3 class="locationInfo-heading">Hours</h3>
                    <p class="text">
                        Monday-Friday: 5am-9pm<br />
                        Saturday: 8am-4pm<br />
                        Sunday: 8am-12pm
                    </p>
                    <h3 class="locationInfo-heading">
                        Semi-Private Session Schedule
                    </h3>
                    <p class="text">
                        <a class="locationInfo-link" href="/schedule"
                            >Click here to see our schedule</a
                        >
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

