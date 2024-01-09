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
                        <div class="OurDoctorCardSocialMedia">
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
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
                        <div class="OurDoctorCardSocialMedia">
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
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
                        <div class="OurDoctorCardSocialMedia">
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
                            <svg width="40" height="40" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clkarenOurMotiveSection">
                <div class="ourNativeText">
                    <svg width="70" height="70" viewBox="-3.9 0.9 28 30" xmlns="http://www.w3.org/2000/svg"><path d="m4 6 16.5 10L4 26V6Z"/></svg>
                    <h2>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    <a href="#">شروع مشاوره</a>
                </div>
                <div class="backgroundOverlay"></div>
            </div>
            <div class="clkarenOurBlogSection mainView">
                <span class="clkarenOurDoctorSubtitle">لورم ایپسوم</span>
                <h2>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                <div class="clkarenOurBlog"> 
                    <?php
                        $recent_posts_args = array(
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        );
                        $recent_posts_query = new WP_Query($recent_posts_args);
                        if ($recent_posts_query->have_posts()) {
                        while ($recent_posts_query->have_posts()) {
                            $recent_posts_query->the_post();
                            ?>
                                <a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('highRadius mediumMargined whiteBg'); ?>>
                                    <div class="archiveCardImg"><?php the_post_thumbnail() ?></div>
                                    <div class="cardText">
                                        <header class="entry-header">
                                            <?php if ( is_home() && ! is_front_page() ){ ?>
                                                <h2 class="entry-title"><?php echo get_the_title() ?></h2>
                                            <?php } else{ ?>
                                                <h3 class="entry-title"><?php echo get_the_title() ?></h3>
                                            <?php } ?>
                                        </header><!-- .entry-header -->
                                        <div class="archivePostFooter">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 7v5l2.5 1.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span><?php echo get_the_date() ?></span>
                                        </div>
                                        <?php the_excerpt(); ?>
                                    
                                        <div class="readMore">
                                            <span>ادامه مطلب</span>
                                            <svg width="16" height="16" viewBox="0 0 0.375 0.375" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><path d="M.207.057a.025.025 0 0 1 .035 0L.355.17a.025.025 0 0 1 0 .035L.242.318A.025.025 0 0 1 .207.283l.068-.07H.038a.025.025 0 0 1 0-.05h.237L.207.093a.025.025 0 0 1 0-.035Z"/></svg>
                                        </div>
                                    </div>
                                </a><!-- #post-<?php the_ID(); ?> -->
                            <?php
                        }
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();