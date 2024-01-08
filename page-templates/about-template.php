<?php

/*

Template Name: about Template

*/

get_header();

?>

<div class="clkarenAboutUsPageBack">
    <div class="clkarenAboutUsPage">
        <div class="clkarenAboutUs">
            <div class="aboutUsText mainView">
                <h1>درباره ما</h1>
                <?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs" class="blogBreadCrumbs">','</p>' );
				}  
				?>
            </div>
            <div class="backgroundOverlay"></div>
        </div>
        <div class="clkarenAboutUsSectionContainer">
            <div class="clkarenAboutUsSection mainView">
                <div class="homeAboutUsContentPart">
                    <span class="homeAboutUsSubtitle">لورم ایپسوم</span>
                    <h2>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    <div class="homeAboutUsCard">
                        <div class="abourUsCardIconPart">
                        <svg fill="#e3b077" width="50" height="50" stroke="#e3b077" stroke-width="5px" viewBox="0 0 512 512"><path d="M393.2 42h-40.3a41.6 41.6 0 0 0-40.4-32h-113a41.6 41.6 0 0 0-40.4 32h-40.3a56.4 56.4 0 0 0-56.3 56.3v339.4a56.4 56.4 0 0 0 56.3 56.3h274.4a56.4 56.4 0 0 0 56.3-56.3V98.3A56.4 56.4 0 0 0 393.2 42Zm-217.4 0a25.6 25.6 0 0 1 23.7-16h113a25.6 25.6 0 0 1 23.7 16 26.8 26.8 0 0 1 1.8 9.5 27.5 27.5 0 0 1-.8 6.5 25.6 25.6 0 0 1-24.7 19h-113a25.6 25.6 0 0 1-24.7-19 27.5 27.5 0 0 1-.8-6.5 26.8 26.8 0 0 1 1.8-9.5Zm257.7 395.7a40.4 40.4 0 0 1-40.3 40.3H118.8a40.4 40.4 0 0 1-40.3-40.3V98.3A40.4 40.4 0 0 1 118.8 58h39.7a41.5 41.5 0 0 0 41 35h113a41.5 41.5 0 0 0 41-35h39.7a40.4 40.4 0 0 1 40.3 40.3Z"></path><path d="M211.7 193h17.8v17.8a13.2 13.2 0 0 0 13.2 13.2h26.6a13.2 13.2 0 0 0 13.2-13.2V193h17.8a13.2 13.2 0 0 0 13.2-13.2v-26.6a13.2 13.2 0 0 0-13.2-13.2h-17.8v-17.8a13.2 13.2 0 0 0-13.2-13.2h-26.6a13.2 13.2 0 0 0-13.2 13.2V140h-17.8a13.2 13.2 0 0 0-13.2 13.2v26.6a13.2 13.2 0 0 0 13.2 13.2Zm2.8-37h31v-31h21v31h31v21h-31v31h-21v-31h-31ZM368 250H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Zm0 71H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Zm0 71H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Z"></path></svg>
                        </div>
                        <div class="aboutUsCardContentPart">
                            <h3>لورم ایپسوم متن ساختگی</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                        </div>
                    </div>
                    <div class="homeAboutUsCard">
                        <div class="abourUsCardIconPart middleCardIcon">
                        <svg fill="#e3b077" width="50" height="50" stroke="#e3b077" stroke-width="5px" viewBox="0 0 512 512"><path d="M393.2 42h-40.3a41.6 41.6 0 0 0-40.4-32h-113a41.6 41.6 0 0 0-40.4 32h-40.3a56.4 56.4 0 0 0-56.3 56.3v339.4a56.4 56.4 0 0 0 56.3 56.3h274.4a56.4 56.4 0 0 0 56.3-56.3V98.3A56.4 56.4 0 0 0 393.2 42Zm-217.4 0a25.6 25.6 0 0 1 23.7-16h113a25.6 25.6 0 0 1 23.7 16 26.8 26.8 0 0 1 1.8 9.5 27.5 27.5 0 0 1-.8 6.5 25.6 25.6 0 0 1-24.7 19h-113a25.6 25.6 0 0 1-24.7-19 27.5 27.5 0 0 1-.8-6.5 26.8 26.8 0 0 1 1.8-9.5Zm257.7 395.7a40.4 40.4 0 0 1-40.3 40.3H118.8a40.4 40.4 0 0 1-40.3-40.3V98.3A40.4 40.4 0 0 1 118.8 58h39.7a41.5 41.5 0 0 0 41 35h113a41.5 41.5 0 0 0 41-35h39.7a40.4 40.4 0 0 1 40.3 40.3Z"></path><path d="M211.7 193h17.8v17.8a13.2 13.2 0 0 0 13.2 13.2h26.6a13.2 13.2 0 0 0 13.2-13.2V193h17.8a13.2 13.2 0 0 0 13.2-13.2v-26.6a13.2 13.2 0 0 0-13.2-13.2h-17.8v-17.8a13.2 13.2 0 0 0-13.2-13.2h-26.6a13.2 13.2 0 0 0-13.2 13.2V140h-17.8a13.2 13.2 0 0 0-13.2 13.2v26.6a13.2 13.2 0 0 0 13.2 13.2Zm2.8-37h31v-31h21v31h31v21h-31v31h-21v-31h-31ZM368 250H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Zm0 71H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Zm0 71H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Z"></path></svg>
                        </div>
                        <div class="aboutUsCardContentPart">
                            <h3>لورم ایپسوم متن ساختگی</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                        </div>
                    </div>
                    <div class="homeAboutUsCard">
                        <div class="abourUsCardIconPart">
                        <svg fill="#e3b077" width="50" height="50" stroke="#e3b077" stroke-width="5px" viewBox="0 0 512 512"><path d="M393.2 42h-40.3a41.6 41.6 0 0 0-40.4-32h-113a41.6 41.6 0 0 0-40.4 32h-40.3a56.4 56.4 0 0 0-56.3 56.3v339.4a56.4 56.4 0 0 0 56.3 56.3h274.4a56.4 56.4 0 0 0 56.3-56.3V98.3A56.4 56.4 0 0 0 393.2 42Zm-217.4 0a25.6 25.6 0 0 1 23.7-16h113a25.6 25.6 0 0 1 23.7 16 26.8 26.8 0 0 1 1.8 9.5 27.5 27.5 0 0 1-.8 6.5 25.6 25.6 0 0 1-24.7 19h-113a25.6 25.6 0 0 1-24.7-19 27.5 27.5 0 0 1-.8-6.5 26.8 26.8 0 0 1 1.8-9.5Zm257.7 395.7a40.4 40.4 0 0 1-40.3 40.3H118.8a40.4 40.4 0 0 1-40.3-40.3V98.3A40.4 40.4 0 0 1 118.8 58h39.7a41.5 41.5 0 0 0 41 35h113a41.5 41.5 0 0 0 41-35h39.7a40.4 40.4 0 0 1 40.3 40.3Z"></path><path d="M211.7 193h17.8v17.8a13.2 13.2 0 0 0 13.2 13.2h26.6a13.2 13.2 0 0 0 13.2-13.2V193h17.8a13.2 13.2 0 0 0 13.2-13.2v-26.6a13.2 13.2 0 0 0-13.2-13.2h-17.8v-17.8a13.2 13.2 0 0 0-13.2-13.2h-26.6a13.2 13.2 0 0 0-13.2 13.2V140h-17.8a13.2 13.2 0 0 0-13.2 13.2v26.6a13.2 13.2 0 0 0 13.2 13.2Zm2.8-37h31v-31h21v31h31v21h-31v31h-21v-31h-31ZM368 250H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Zm0 71H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Zm0 71H139a8 8 0 0 0 0 16h229a8 8 0 0 0 0-16Z"></path></svg>
                        </div>
                        <div class="aboutUsCardContentPart">
                            <h3>لورم ایپسوم متن ساختگی</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                        </div>
                    </div>
                    <div class="homeAboutUsBtnContainer">
                        <div class="homeAboutUsFounderPart">
                            <div class="founderPartImg"><img src="http://localhost/karenclinic/wp-content/themes/karenclinic/img/founder.jpg" alt=""></div>
                            <div class="founderPartName">
                                <h3>پروا گورانی</h3>
                                <span>موسس کلینیک کارن طب</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homeAboutUsImagePart">
                <div class="div1"><img src="http://localhost/karenclinic/wp-content/themes/karenclinic/img/grid3.jpg" alt=""></div>
                <div class="div2"><img src="http://localhost/karenclinic/wp-content/themes/karenclinic/img/grid1.jpg" alt=""></div>
                <div class="div3"><img src="http://localhost/karenclinic/wp-content/themes/karenclinic/img/grid2.jpg" alt=""></div>
                </div>
            </div>
            <div class="clkarenChooseUsSection">
                <div class="clkarenChooseUsImg">
                    <div class="ChooseUsBackground"></div>
                </div>
                <div class="clkarenChooseUsText">
                    <span class="clkarenChooseUsSubtitle">لورم ایپسوم</span>
                    <h2>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    <div class="clkarenChooseUsCards">
                        <div class="clkarenChooseUsCard">
                            <span>92%</span>
                            <h3>لورم ایپسوم</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
                        </div>
                        <div class="clkarenChooseUsCard">
                            <span>92%</span>
                            <h3>لورم ایپسوم</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
                        </div>
                    </div>
                    <a href="#">شروع مشاوره</a>
                </div>
            </div>
            <div class="clkarenOurDoctorsSection mainView">
                <span class="clkarenOurDoctorSubtitle">لورم ایپسوم</span>
                <h2>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                <div class="clkarenOurDoctorCards">
                    <div class="clkarenOurDoctorCard">
                        <div class="OurDoctorCardImg">
                            <img src="<?php echo get_template_directory_uri() ?>/img/doctor.jpg" alt="" >
                        </div>
                        <div class="OurDoctorCardText">
                            <h3>پروا گورانی</h3>
                            <span>جراحی زیبایی</span>
                        </div>
                    </div>
                    <div class="clkarenOurDoctorCard">
                        <div class="OurDoctorCardImg">
                            <img src="<?php echo get_template_directory_uri() ?>/img/doctor.jpg" alt="" >
                        </div>
                        <div class="OurDoctorCardText">
                            <h3>پروا گورانی</h3>
                            <span>جراحی زیبایی</span>
                        </div>
                    </div>
                    <div class="clkarenOurDoctorCard">
                        <div class="OurDoctorCardImg">
                            <img src="<?php echo get_template_directory_uri() ?>/img/doctor.jpg" alt="" >
                        </div>
                        <div class="OurDoctorCardText">
                            <h3>پروا گورانی</h3>
                            <span>جراحی زیبایی</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();