<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animeflix</title>
    <?php include './bootstrap.php';?> 
    <style>
/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/* Top right text */
.top-right {
  position: absolute;
  padding-left: 15px;
  padding-right: 0.1%;
  top: 20px;
  right: 50px;

}
/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
 .prg h1 {
        background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
        color: #f1f1f1; /* Grey text */
        height:700px;
        width:1350px;
        
      }
    </style>           
</head>
<body class="bg-dark">
    <div class="row">
        <div class="col-sm-12">
            <div class="front">
            <img src="image/indeximg/front2.jpg" alt="Snow">
            <div class="prg">
                    <div>
                        <h1 class="text-danger top-left"><i class="bi bi-meta"></i><svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-meta" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z"/></svg> <b>Animefl!x</b></h1>
                    </div>
                    <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4  top-right text-white">
                        <h3 class=" dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true">English</h3>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item bg-dark text-white" href="#.php">हिंदी </a>
                    </div></div>
                    </div>
                </div>
            </div>
            <div class="centered">
                <h1 class="text-white" style=" font-size:55px;text-align: center"><b>Unlimited movies, TV shows and more.</b></h1><h3 class="text-white text-align: center">Watch anywhere. Cancel anytime.</h3>
                <p class="text-white" style="font-size:20px; text-align: center">Ready to watch? Enter your email to create or restart your membership.</p>
                <input type="text" placeholder="Email address" name="email" required>
                <button type="submit" class="btn" style="font-size:22px;">Get Started</button>
            </div>
            <div>
            </div>
            </div>
        </div>
    </div>

    <section class="top-right">
<!--for login page-->
<!-- Button to open the modal login form -->
<a onclick="document.getElementById('id01').style.display='block'" class="btn"> 
<i class="fa fa-fw fa-user"></i> Login
</a>

<!-- The Modal -->
<div id="id01" class="modal">
  <span style="padding-top:5%; padding-right:20%; font-size:50px;" onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content --><br/><br/><br/><br/><br/><br/>
  <form class="form modal-content animate" action="movies/home.php">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" class="but">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="reset" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
    </section>

    <section style="padding-top:0.5%">
        <div class="row" style="background:black;">
            <div class="col-sm-6">
                <h1 class="text-white" style=" font-size:55px; padding-left:20%; padding-top:20%;">Enjoy on your TV.</h1>
                <p class="text-white" style="font-size:25px; padding-left:20%">Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</p>
            </div>
            <div class="col-sm-6 ">
                <img src="image/IndexImg/tv.png" style="height:400px; width:600px" src="image/front3.jpg" style="height:300px; width:400px" >
            </div>
        </div>
    </section>

    <section style="padding-top:0.5%">
        <div class="row" style="background:black;">
            <div class="col-sm-5 ">
                <img src="image/Indeximg/mobile-0819.jpg" style="height:400px; width:600px" src="image/front3.jpg" style="height:300px; width:400px" >
            </div>
            <div class="col-sm-7">
                <h1 class="text-white" style=" font-size:56px; padding-right:20%; padding-top:17%;">Download your shows to watch offline.</h1>
                <p class="text-white" style="font-size:25px; padding-:20%">Save your favourites easily and always have something to watch.</p>
            </div>
        </div>
    </section>

    <section style="padding-top:0.5%">
        <div class="row" style="background:black;">
            <div class="col-sm-6">
                <h1 class="text-white" style=" font-size:55px; padding-left:20%; padding-top:20%;">Watch everywhere.</h1>
                <p class="text-white" style="font-size:25px; padding-left:20%">Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
            </div>
            <div class="col-sm-6 ">
                <img src="image/Indeximg/tv2.png" style="height:400px; width:600px" src="image/front3.jpg" style="height:300px; width:400px" >
            </div>
        </div>
    </section>
      
    <section style="padding-top:0.5%">
        <div class="row" style="background:black;">
            <div class="col-sm-6 ">
                <img src="image/Indeximg/childp.png" style="height:400px; padding-top:8%; padding-left:8%;width:600px" src="image/front3.jpg" style="height:300px; width:400px" >
            </div>
            <div class="col-sm-6">
                <h1 class="text-white" style=" font-size:56px; padding-right:18%; padding-top:17%;">Create profiles for children.</h1>
                <p class="text-white" style="font-size:25px; padding-:20%">Send children on adventures with their <br/>favourite characters in a space made just for <br/>them—free with your membership.</p>
            </div>
        </div>
    </section>

    <section style="padding-top:0.5%">
    <div class="row" style="background-color:black;padding-top:6%">
        <div class="col-sm-2"></div>   
        <div class="col-sm-8 text-center text-white">
            <h1 style="font-size:60px;">Frequently Asked Questions</h1>
        </div></div>
     
    <div class="row " style="background-color:black;padding-top:2%">
    <div class="col-sm-2"></div>   
    <div class="col-sm-8">
        <div class="accordion  bg-dark text-white" id="RelatedQuestions">
            <div class="accordion-item  bg-dark text-white">
                <h2 class="accordion-header  bg-dark text-white" id="QuestionsNo1">
                    <button class="accordion-button  text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h2>What is Animeflix ?             </h2>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="QuestionsNo1" data-bs-parent="#RelatedQuestions">
                    <div class="accordion-body">
                        <div class="row  bg-dark text-white">
                            <div class="col-sm-10 text-white bg-dark">
                                <p class="bg-dark" style="font-size:25px;">Animeflix is all about Anime basically this application is made for all Anime fans that offers all kind of Anime related services like award-winning TV shows, movies, documentaries, novel, series, manga, comics, action-cosplay and more - on thousands of internet-connected devices.
                                    You can watch as much as you want, whenever you want, without a single ad - all for one low monthly price. There's always something new to discover, and new TV shows and movies are added every week!<br/>
                                    And also it is not only a streaming platform but it is a one of best shopping or shelling platform.You can buy or sell your products.
                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="col-sm-2"></div>   
            </div></div></div></div>

            <div class="row " style="background-color:black;padding-top:0.2%">
    <div class="col-sm-2"></div>   
    <div class="col-sm-8">
        <div class="accordion  bg-dark text-white" id="RelatedQuestions2">
            <div class="accordion-item  bg-dark text-white">
                <h2 class="accordion-header  bg-dark text-white" id="QuestionsNo2">
                    <button class="accordion-button  text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapseOne">
                        <h2>How much does Animeflix cost ?             </h2>
                    </button>
                </h2>
                <div id="collapsetwo" class="accordion-collapse collapse " aria-labelledby="QuestionsNo2" data-bs-parent="#RelatedQuestions">
                    <div class="accordion-body">
                        <div class="row  bg-dark text-white">
                            <div class="col-sm-10 text-white bg-dark">
                                <p class="bg-dark" style="font-size:25px;">Watch Animeflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from ₹ 149 to ₹ 649 a month. No extra costs, no contracts.
                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="col-sm-2"></div>   
            </div></div></div></div>
            <div class="row " style="background-color:black;padding-top:0.2%">
    <div class="col-sm-2"></div>   
    <div class="col-sm-8">
        <div class="accordion  bg-dark text-white" id="RelatedQuestions3">
            <div class="accordion-item  bg-dark text-white">
                <h2 class="accordion-header  bg-dark text-white" id="QuestionsNo3">
                    <button class="accordion-button  text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                        <h2>Where can i watch ?             </h2>
                    </button>
                </h2>
                <div id="collapsethree" class="accordion-collapse collapse " aria-labelledby="QuestionsNo3" data-bs-parent="#RelatedQuestions">
                    <div class="accordion-body">
                        <div class="row  bg-dark text-white">
                            <div class="col-sm-10 text-white bg-dark">
                                <p class="bg-dark" style="font-size:25px;">Watch anywhere, anytime. Sign in with your Animeflix account to watch instantly on the web at Animeflix.com from your personal computer or on any internet-connected device that offers the Animeflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.
                                You can also download your favourite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Animeflix with you anywhere.

                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="col-sm-2"></div>   
            </div></div></div></div>
        
            <div class="row " style="background-color:black;padding-top:0.2%">
    <div class="col-sm-2"></div>   
    <div class="col-sm-8">
        <div class="accordion  bg-dark text-white" id="RelatedQuestions">
            <div class="accordion-item  bg-dark text-white">
                <h2 class="accordion-header  bg-dark text-white" id="QuestionsNo4">
                    <button class="accordion-button  text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        <h2>How do i cancel ?             </h2>
                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse " aria-labelledby="QuestionsNo4" data-bs-parent="#RelatedQuestions">
                    <div class="accordion-body">
                        <div class="row  bg-dark text-white">
                            <div class="col-sm-10 text-white bg-dark">
                                <p class="bg-dark" style="font-size:25px;">Animeflix is flexible. There are no annoying contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.

                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="col-sm-2"></div>   
            </div></div></div></div>
            <div class="row " style="background-color:black;padding-top:0.2%">
    <div class="col-sm-2"></div>   
    <div class="col-sm-8">
        <div class="accordion  bg-dark text-white" id="RelatedQuestions">
            <div class="accordion-item  bg-dark text-white">
                <h2 class="accordion-header  bg-dark text-white" id="QuestionsNo5">
                    <button class="accordion-button  text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        <h2>Where can i watch on Animeflix ?             </h2>
                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse " aria-labelledby="QuestionsNo5" data-bs-parent="#RelatedQuestions">
                    <div class="accordion-body">
                        <div class="row  bg-dark text-white">
                            <div class="col-sm-10 text-white bg-dark">
                                <p class="bg-dark" style="font-size:25px;">Animeflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Animeflix originals, and more. Watch as much as you want, anytime you want.

                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="col-sm-2"></div>   
            </div></div></div></div>
    
    <div class="row " style="background-color:black;padding-top:0.2%">
    <div class="col-sm-2"></div>   
    <div class="col-sm-8">
        <div class="accordion  bg-dark text-white" id="RelatedQuestions">
            <div class="accordion-item  bg-dark text-white">
                <h2 class="accordion-header  bg-dark text-white" id="QuestionsNo6">
                    <button class="accordion-button  text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        <h2>Is Animeflix good for kids ?             </h2>
                    </button>
                </h2>
                <div id="collapsesix" class="accordion-collapse collapse " aria-labelledby="QuestionsNo6" data-bs-parent="#RelatedQuestions">
                    <div class="accordion-body">
                        <div class="row  bg-dark text-white">
                            <div class="col-sm-10 text-white bg-dark">
                                <p class="bg-dark" style="font-size:25px;">The Animeflix Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and films in their own space.
                                Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don’t want kids to see.

                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="col-sm-2"></div>   
            </div></div></div></div>

    <div class="row " style="background-color:black;padding-top:0.2%">
    <div class="col-sm-2"></div>   
    <div class="col-sm-8">
        <div class="accordion  bg-dark text-white" id="RelatedQuestions">
            <div class="accordion-item  bg-dark text-white">
                <h2 class="accordion-header  bg-dark text-white" id="QuestionsNo7">
                    <button class="accordion-button  text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        <h2>Where can i Buy or Sell products ?             </h2>
                    </button>
                </h2>
                <div id="collapseseven" class="accordion-collapse collapse " aria-labelledby="QuestionsNo7" data-bs-parent="#RelatedQuestions">
                    <div class="accordion-body">
                        <div class="row  bg-dark text-white">
                            <div class="col-sm-10 text-white bg-dark">
                                <p class="bg-dark" style="font-size:25px;">The Animeflix provides some advance featrues were you buy or sell your products. First yoou have to create an account if you want to to create a bussiness account you have to contact with Animeflix. and if you want to buy some products from Animeflix First you have to create an account and then you have to rent Animeflix for 1 month to get all serviices for streaming and then you also get shopping services too.....Read more.

                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="col-sm-2"></div>  
            </div></div></div></div>
            
            <div class="row" style="background-color:black;">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <p class="text-white" style="font-size:20px; text-align: center ; padding-top:6%;">Ready to watch? Enter your email to create or restart your membership.</p>
                <input type="text" placeholder="Email address" name="email" required>
                <button type="submit" class="btn" style="font-size:22px;">Get Started</button><br/><br/> 
                </div>
            </div>
            
    </section>

    <section style="padding-top:0.5%">
    <div class="row" style="background:black; padding-top:5%">
            <div class="col-sm-12 text-dark">
                <p style="padding-left:20%; font-size:17px;">Questions? Call 000-800-919-1694</p>
            </div>
        </div>
        <div class="row" style="background:black;  padding-top:1%">
        <div class="col-sm-2 text-dark ">
            <p style="padding-left:134%; font-size:13px;">FAQ</p>
        </div>
        <div class="col-sm-4 text-dark ">
            <p style="padding-left:60%; font-size:13px;">Help Center</p>
        </div>
        <div class="col-sm-3 text-dark ">
            <p style="padding-left:20%; font-size:13px;">Accounts</p>
            </div>
            <div class="col-sm-3 text-dark ">
            <p style="padding-left:3%; font-size:13px;">Media Center</p>
            </div>

        </div>

        
        <div class="row" style="background:black;  padding-top:0.1%">
        <div class="col-sm-4 text-dark ">
            <p style="padding-left:62%; font-size:13px;">Investor Relations</p>
        </div>
        <div class="col-sm-2 text-dark ">
            <p style="padding-left:13%; font-size:13px;">Jobs</p>
        </div>
        <div class="col-sm-3 text-dark ">
            <p style="padding-left:20%; font-size:13px;">Ways To Watch</p>
            </div>
            <div class="col-sm-3 text-dark ">
            <p style="padding-left:3%; font-size:13px;">Terms Of Use</p>
            </div>

        </div>

        
        <div class="row" style="background:black;  padding-top:0.1%">
        <div class="col-sm-2 text-dark ">
            <p style="padding-left:134%; font-size:13px;">Privacy</p>
        </div>
        <div class="col-sm-4 text-dark ">
            <p style="padding-left:60%; font-size:13px;">Cookie Preferences</p>
        </div>
        <div class="col-sm-3 text-dark ">
            <p style="padding-left:20%; font-size:13px;">Corporate Information</p>
            </div>
            <div class="col-sm-3 text-dark ">
            <p style="padding-left:3%; font-size:13px;">Contact Us</p>
            </div>

        </div>

        
        <div class="row" style="background:black;  padding-top:0.1%">
        <div class="col-sm-4 text-dark ">
            <p style="padding-left:61%; font-size:13px;">Speed Test</p>
        </div>
        <div class="col-sm-3 text-dark ">
            <p style="padding-left:10%; font-size:13px;">Legal Notices</p>
        </div>
       
        <div class="row" style="background:black;  padding-top:0.1%; padding-left:15%">
        <div class="col-sm-3">
           <h3 class=" dropdown-toggle text-dark" data-toggle="dropdown" aria-haspopup="true">English</h3>
            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <a class="dropdown-item bg-dark text-white" href="#.php">हिंदी </a>
            </div></div></div>
            <p class="text-dark" style="background:black; c padding-top:0.1%; padding-left:20%">Animeflix India</p>
    </section>

</body >
</html>

