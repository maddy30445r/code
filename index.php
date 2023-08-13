<?php
$conn = new mysqli("localhost","root","","new");

// Check connection
// if ($conn) {
//   echo "success";
  
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolute</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <header class="header">
        <div class="logo" >GLA Events</div>
        <nav class="navigation" id="navigation">
            <section class="navigation__icon" id="navigation__icon">
                <span class="topBar"></span>
                <span class="middleBar"></span>
                <span class="bottomBar"></span>
            </section>
            <ul class="navigation__ul">
                <li><a href="">HOME</a></li>
                <li><a href="">GALLERY</a></li>
                <li><a href="#clubs">CLIENT</a></li>
                <li><a  onclick="scrol()">CLUBS</a></li>
                <li><a href="loginMain.html" target="_blank">LOGIN</a></li>
            </ul>
        </nav>
        <video width="500" height="100vh" autoplay muted loop>
            <source src="Intro.mp4" type="video/mp4">
        </video>
        <div class="textAni">
            One Place For Everything
        </div>
    </header>
    <section class="sliderBox">
        <h1>Ongoing and Upcoming Events</h1>

        <!-- <div class="wave">
            <img src="up.png" class="up" alt="up">
            <img src="down.png" class="down" alt="down">
        </div> -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/00006955.jpg" alt="img1">
                </div>
                <div class="swiper-slide">
                    <img src="images/audience-g2b85bb3a5_1920.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/ticket-g14cad16f4_1920.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/WhatsApp Image 2023-04-07 at 02.09.58.jpg" alt="">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <h1 class="tagline">Get Yourself Register</h1>
    <div class="container" id="new">
        <form method='get' action='event.php'>
    <?php

        $sql="SELECT * FROM event;";
        $res=mysqli_query($conn,$sql);
        $check=mysqli_num_rows($res);


        if($check>0){
            while($row=mysqli_fetch_assoc($res)){?>
              <div class="card">
              <div class="imgBox">
                <?php 
                $img=$row['images'];
                ?>
                  <img src=<?php echo $img; ?> alt="img">
                  <div class="date">
                      <span><?php 
                      $date = (string)$row['dates'];
                      echo substr($date,8,2); 
                      $time=strtotime($row['dates']);
                      $month=date("F",$time);
                       ?></span>
                      <span><?php echo $month; ?></span>
                  </div>
              </div>
              <div class="content">
                  <div class="title"><?php echo $row['evena']; ?></div>
                  <div class="subtitle"> <?php echo '₹'.$row['tic_pr']; ?> </div>
                  <div class="details">
                    <div>

                        <img src="images/time.png" class="locat" alt="time">
                        <?php echo $row['dates']; ?>
                    </div>
                        <div>
                            <img src="images/ffi.png" class="locat" alt="venue">
                            <?php echo $row['venue'];?>
                        </div>                      
                  </div>
                  <a href="http://localhost/evolute/event.php?event=<?php echo $row['evena'];?>" class="btn">Tickets and Details</a>
              </div>
          </div>
        </form>
           <?php }
        }
?>
    </div>
    
    <div class="clubs" id="clubs">
        <div class="head">Our Popular Clubs</div>
        <div class="design">
        <div class="club">
                <div class="name">DedSec</div>
                <div class="tag">Welcome to Our Universe</div>
                <div class="data">The main objective of our club is to create a strong pragmatic environment where
                    the students are made aware of real-life scenarios and have hands-on practice in creating models and
                    deploying them in the technical industry.

                    Another outlook is through research and projects where the students can form groups, divide
                    responsibilities and assemble to solve real-life problems. These research papers if approved would
                    be rewarded with funding and patents.</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">NINAD MUSIC CLUB</div>
                <div class="tag">Feel the Dance</div>
                <div class="data">NINAD - the music hub of GLA University is a place where passionate music lovers
                    find their home. Music explains and connects people when words fail to do so. After a long day of
                    studies and other academic activities, music is the best therapy that rejuvenates the soul. This
                    isnt just a club, this is more like a family of music lovers who stay committed towards their
                    passion for music which reflects in our stage performances, practice sessions, workshops, etc.</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">DATUM CLUB</div>
                <div class="tag">Welcome to Our Universe</div>
                <div class="data">                                                                                                        It is the only Data Science club in GLAU. Here, we educate members on what exactly Machine Learning is and possibilities for its growth in the future. DATUM emphasises developing the interests of members in ML. The club aims at making members familiar with ML frameworks' best practices. The club's prime objective is that the members should understand the ML algorithms and its real-world uses.
                    The club focuses on making the students job-ready with the holistic knowledge of trending technologies like Data Science & Machine Learning. It is anticipated that the Machine Learning market size with grow at a whopping 44.1% Compounded Annual Growth Rate (CAGR). Such an overwhelming CAGR indicates that this industry will produce a sea of job opportunities. 
                    The Club shall have the following objectives:
                    Provide awareness to the faculties and students about the cutting edge technologies in the area of data</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">NATRAJ CLUB</div>
                <div class="tag">Feel the Dance</div>
                <div class="data">NATRAJ is the official Dance Club of GLA University, Mathura. Dance, the art of precise, expressive, and graceful purposefully selected sequences of human movement, is performed according to musical accompaniment. It’s an art, a way to express oneself, a way to exercise, and a way to get feelings out. Dancing developed as a natural expression of united emotion and action.
                    NATRAJ dance club facilitates adequate dance space, which allows students to learn techniques that will help them how to dance and give them self-confidence, better balance, and more fluid movements. We organize and perform in all the major events of GLA University. NATRAJ has given such dancers who even won the international competitions for India. NATRAJ is not just a dance club; it is more like a family of students</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">VIHITI CLUB</div>
                <div class="tag">Feel the Dance</div>
                <div class="data">Incepted in 2015, "Vihiti is recognized as the official Theatre Club of GLA University. Theatre is an art, concerned with the action which is precisely planned to present a real-life event in a coherent and significant sense of drama. Vihiti is the right platform where students can exhibit their acting, scriptwriting and directorial skills to give wings to their creative streak.
                    Theatre teaches collaboration, processes to manage time, raises confidence, exposes skills, and makes us realistic while being dramatic. A theatre is certainly a place for learning about the brevity of human glory, and with 200+ members, Vihiti Theatre Club gets GLAians excited about a theatrical experience.
                    Some of the notable events we have organized:
                    Navaratri Act
                    Mata Ki Chowki
                    DJ Night
                    Nukkad-Natak</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">IOT CLUB</div>
                <div class="tag">Feel the Dance</div>
                <div class="data">The Internet of Things Club (Under ABACUS Computer Society CEA Department) is where you can find the latest information around The Internet of Things. The club provides every detail to its members, from news and ideas where the IoT can take us to examples from everyday applications. The internet of Things Club can be defined as a place open to everyone and everything.
                    Internet of Things (IoT) is an emerging technology that allows establishing a network with devices and systems to connect and exchange data using the internet. The IoT-enabled products are equipped with processing ability, sensors, software, and other technologies for data exchange.
                    We often come across real-life examples that define IoT more simply. For example, smart homes work on IoT technology.</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">MARKETING CLUB</div>
                <div class="tag">Feel the Dance</div>
                <div class="data">The Marketing Club of GLA university, aims to facilitate an all-round development of the students in the field of marketing and keep them abreast with the latest happenings in the said domain. We bring together some of the brightest minds, interested in exploring the ever changing dynamics of marketing and integrating the vast experience of its members across  functions and industries such as  advertising, research, branding communication and  digital marketing.
                    What do we do
                    We provide opportunities for our members to learn about marketing, grow their network, and amplify their chances as a marketer. These opportunities include events like personal branding workshops, digital marketing workshops, marketing expert guest speaker sessions, peer to peer mock interviews, and networking oppor </div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">NINAD MUSIC CLUB</div>
                <div class="tag">Feel the Dance</div>
                <div class="data">NINAD - the music hub of GLA University is a place where passionate music lovers
                    find their home. Music explains and connects people when words fail to do so. After a long day of
                    studies and other academic activities, music is the best therapy that rejuvenates the soul. This
                    isnt just a club, this is more like a family of music lovers who stay committed towards their
                    passion for music which reflects in our stage performances, practice sessions, workshops, etc.</div>
                <div class="readMore">Explore</div>
            </div>
        </div>
    </div>
        <button class="leave" id="leave">
            Apply for
            <br>
            Leave
        </button>
    <div class="formPop show" id="formPop">
        <div class="classPop show" id="classPop">
            <h3>Select Your Subject Code:</h3>
            <fieldset>
                <legend>Choose your Subject Code</legend>
                <div>
                  <input type="checkbox" id="BCSG002" name="subCode" value="BCSG002" />
                  <label for="coding">BCSG002</label>
                </div>
                <div>
                  <input type="checkbox" id="BCSG001" name="subCode" value="BCSG001" />
                  <label for="music">BCSG001</label>
                </div>
                <div>
                  <input type="checkbox" id="BCSG003" name="subCode" value="BCSG001" />
                  <label for="music">BCSG001</label>
                </div>
                <div>
                  <input type="checkbox" id="BCSG004" name="subCode" value="BCSG001" />
                  <label for="music">BCSG001</label>
                </div>
                <div>
                  <input type="checkbox" id="BCSG005" name="subCode" value="BCSG001" />
                  <label for="music">BCSG001</label>
                </div>
                    <div>
                    <input type="checkbox" id="BCSG007" name="subCode" value="BCSG001" />
                    <label for="music">BCSG001</label>
                    </div>
              </fieldset>
        </div>
        <div class="form">
            <!-- <div class="formTitle">Apply For Leave</div>
            <div class="formSubtitle">Enter your details</div> -->
            <div class="input-container ic1">
                <select id="event" name="event" class="sel">
                    <option disabled selected value="">Select an Option</option>
                    <option value="Event#1">New Event</option>
                    <option value="Event#2">Event</option>
                    <option value="Event#3">Event</option>
                    <option value="Event#4">Event</option>
                    <option value="Event#5">Event</option>
                </select>
                <div class="cut"></div>
            </div>
            <div class="input-container ic1">
                <input id="ticketId" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="ticketId" class="placeholder">Ticket Id</label>
            </div>
            <div class="input-container ic2">
                <input id="name" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="name" class="placeholder">Name</label>
            </div>
            <div class="input-container ic2">
                <input id="rollno" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="rollno" class="placeholder">University Roll No</label>
            </div>
            <div class="input-container ic1">
                <input id="firstname" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="firstname" class="placeholder">Section</label>
            </div>
            <div class="input-container ic1">
                <input id="date" class="input" disabled type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="date" class="placeholder">Date</label>
            </div>
            <div class="input-container ic1">
                <input id="time" class="input" disabled type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="time" class="placeholder">Timing</label>
            </div>
            <div class="input-container ic1">
                <div id="sel" class="sel">Select Classes</div>
            </div>
            <div class="input-container ic2">
                <input id="email" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="ticket" class="placeholder">Attendance Percentange</label>
            </div>
            <button type="text" class="submit">Submit</button>
        </div>
    </div>


    <footer
        class="px-3 py-8 text-gray-500 transition-colors duration-200  bg-gray-800 text-2 text-gray-200">
        <div class="flex flex-col">
            <div class="h-px mx-auto rounded-full md:hidden mt-7 w-11">
            </div>
            <div class="flex flex-col mt-4 md:mt-0 md:flex-row">
                <nav
                    class="flex flex-col items-center justify-center flex-1 border-gray-100 md:items-end md:border-r md:pr-5">
                    <a aria-current="page" href="#" class="hover:text-gray-700 dark:hover:text-white">
                        Components
                    </a>
                    <a aria-current="page" href="#" class="hover:text-gray-700 dark:hover:text-white">
                        Contacts
                    </a>
                   
                </nav>
                <div class="h-px mx-auto mt-4 rounded-full md:hidden w-11">
                </div>
                <div class="flex items-center  justify-center flex-1 mt-4 border-gray-100 md:mt-0 md:border-r">
                    <div class="pt-8 gap-3  flex border-t border-gray-200 max-w-xs mx-auto items-center justify-between">
                        <a href="#">
                            <svg width="20" height="20" fill="currentColor" class="text-xl transition-colors duration-200 hover:text-gray-800 dark:hover:text-white" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z">
                                </path>
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="20" height="20" fill="currentColor" class="text-xl transition-colors duration-200 hover:text-gray-800 dark:hover:text-white" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z">
                                </path>
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="20" height="20" fill="currentColor" class="text-xl transition-colors duration-200 hover:text-gray-800 dark:hover:text-white" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                                </path>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2Z" fill="#6b7280"></path> <path d="M11.9991 15.8801C14.142 15.8801 15.8791 14.143 15.8791 12.0001C15.8791 9.85725 14.142 8.12012 11.9991 8.12012C9.85628 8.12012 8.11914 9.85725 8.11914 12.0001C8.11914 14.143 9.85628 15.8801 11.9991 15.8801Z" fill="#6b7280"></path> <path d="M17 7.4999C16.73 7.4999 16.48 7.3999 16.29 7.2099C16.2 7.1099 16.13 6.9999 16.08 6.8799C16.03 6.7599 16 6.6299 16 6.4999C16 6.3699 16.03 6.2399 16.08 6.1199C16.13 5.9899 16.2 5.8899 16.29 5.7899C16.52 5.5599 16.87 5.4499 17.19 5.5199C17.26 5.5299 17.32 5.5499 17.38 5.5799C17.44 5.5999 17.5 5.6299 17.56 5.6699C17.61 5.6999 17.66 5.7499 17.71 5.7899C17.8 5.8899 17.87 5.9899 17.92 6.1199C17.97 6.2399 18 6.3699 18 6.4999C18 6.6299 17.97 6.7599 17.92 6.8799C17.87 6.9999 17.8 7.1099 17.71 7.2099C17.61 7.2999 17.5 7.3699 17.38 7.4199C17.26 7.4699 17.13 7.4999 17 7.4999Z" fill="#6b7280"></path> </g></svg>
                        </a>
                    </div>
                </div>
                <div class="h-px mx-auto mt-4 rounded-full md:hidden w-11 ">
                </div>
                <div class="flex flex-col items-center justify-center flex-1 mt-7 md:mt-0 md:items-start md:pl-5">
                    <span class="">
                        © 2023
                    </span>
                    <span class="mt-7 md:mt-1">
                        Created by
                        <a class="underline hover:text-primary-gray-20" href="https://www.linkedin.com/in/crabiller/">
                            Team:TECHQUILA
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </footer>


    

    <script>
        function hello(){
            console.log("hjh");
        }
        var scrollDiv = document.getElementById("clubs").offsetTop;
        function scrol() {

            console.log("hello");
            window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>