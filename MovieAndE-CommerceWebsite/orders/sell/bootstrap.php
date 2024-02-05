<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"/>
    <!--Bottstrap 5--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!---optional
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    Bootstrap for right side navigation--->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!---bootstrap for icons--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!---download--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <title>Document</title>
</head>
<style> @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

/* Style the navigation bar */
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #000;
}

/* Current/active navbar link */
.active {
  background-color: #04AA6D;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

.icons{
        transform:rotate(360deg);
        padding-left: 100px;

    }
    
    img{
    max-width: 100%;
    width: 1500px;
   height: 550px;
}
.btn {
  background-color: red;
  border: none;
  color: white;
  padding: 10px 25px;
  cursor: pointer;
  font-size: 17px;
}
.btns {
  border: none;
  color: white;
  padding: 6px 14px;
  cursor: pointer;
  font-size: 14px;
}

.btns:hover{
    transform: scale(1.0) translateY(3px);
    transition: .1s;
    background-color: darkgreen;
}

.btnd {
  border: none;
  color: white;
  padding: 6px 14px;
  cursor: pointer;
  font-size: 14px;
}

.btnd:hover{
    transform: scale(1.0) translateY(3px);
    transition: .1s;
    background-color: darkred;
}


/* Darker background on mouse-over */
.btn:hover {
  background-color: darkred;
  color:white;
}
.btn:hover{
    transform: scale(1.02)translateY(5px);
    transition: .1s; 
}

.btnout {
  background-color: green;
  border: none;
  color: white;
  padding: 10px 25px;
  cursor: pointer;
  font-size: 17px;
}

/* Darker background on mouse-over */
.btnout:hover {
  color:white;
}
.btnout:hover{
    transform: scale(1.02)translateY(5px);
    transition: .1s; 
}

.tab {
  background-color: darkred;
  border: none;
  color: white;
  padding: 6px 14px;
  cursor: pointer;
  font-size: 14px;
  
}

/* Darker background on mouse-over */
.tab:hover {
  background-color: black;
  color:white;
}

.box h1{
    font-family:Georgia, 'Times New Roman', Times, serif;
     font-weight:bolder; 
    }
    .box p{
      background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */

    }
.bi{
  height: 40px;
  width:40px;
}

/* bootstrap for sidepanel*/
.sidepanel {
  height: 130px; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  right: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 25px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */
}

/* The sidepanel links */
.sidepanel a {
  padding: 4px 4px 4px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidepanel .closebtn {
  position: absolute;
  top: 0;
  left: 15px;
  font-size: 20px;
  margin-right: 25px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 7px 11px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}


/* for login */

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 30px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 15px;
  top: 0;
  color: #000;
  font-size: 25px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

.form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.but {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
.but:hover {
  opacity: 0.8;
}

.cancelbtn:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: 100%;
  padding: 14px 20px;
  background-color: #f44336;
  color:white;
  border:none;
}

.psw {
  width: auto;
  padding: 10px 18px;
  background-color: ;
  border:none;

}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 260px;
  height: 260px;
  border-radius: 50%;
}
.heading{
  text-align: center;
  color:red;

}


h3{
        text-align: center;
        color:red;
        weight:bold;
        font-size:30px;
      }
     

      body {
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
      }
      .swiper-container p{
        background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
        color: #f1f1f1; /* Grey text */
        height:130px;
      }
      .swiper-container {
        max-width: 100%;
        height: 360px;
        width: 1140px;
      }

      .swiper-slide {
        font-size: 12px;
      }

      .swiper-slide img {
        display: block;
        max-width: 100%;
        height: 160px;
        width: 315px;
        object-fit: cover;
        
      }
     .video .swiper-container {
        max-width: 100%;
        height: 200px;
        width: 1140px;
      }
      
      .video .swiper-container p{
        background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
        color: #f1f1f1; /* Grey text */
        
      }

      
      .front img{
        max-width: 100%;
        width:1350px;
        height:706px;
      }


/*Bootstrap for shop1 page*/
#home{
    background-color: beige;  
}
#brand img{
  height:100px;
  width:100px;
}

#new .one img{
  height:100%;
  width:100%;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

#new .one .details{
  position:absolute;
  height:100%;
  width:100%;
  top:0;
  left:0;
  transition:0.3s ease;
}

#new .one:hover .details{
  cursor: pointer;
  background-color: rgba(255, 178, 178, 0.4);
}
#new .one:hover .details{
  cursor: pointer;
  background-color: rgba(255, 178, 178, 0.4);
}
#new .one .details button{
  display:inline-block;
  font-size:12px;
  font-weight:500;
  color:#2a2a2a;
  background: none;
  text-transform: uppercase;
  border-top:0px;
  border-right:0px;
  border-left:0px;
  border-bottom:1px solid #2a2a2a;
  padding:2.5px;
  transform: translateY(70px);
  transition: 0.3s ease;
}
#new .one .details button:hover{
  color:red ;
  border-bottom:1px solid red;
}
.product{
  cursor:pointer;
  margin-bottom:2rem;
}
.product img{
  transition:0.3s all;
}

.product img:hover{
  opacity:0.7;
}
.star {
  padding:10px 0;
}
.star .fa{
  font-size:0.8rem;
  color:goldenrod;
}
.product .buy{
  background: darkred;
  border:none;
  transform:translateY(20px);
  opacity:0;
  transition: 0.3s all;
}
.product:hover .buy{
 transform:translateY(0);
  opacity:1;
}
#banner{
  background-image: url("../image/shopindeximg/banner/2.jpg");
  background-size: cover;
  height:100%;
  width:100%;
  justify-content: center;

}

#blogbanner{
  background-image: url("../image/shopindeximg/footer/bl.jpg");
  background-size: cover;
  height:100%;
  width:100%;
  justify-content: center;

}

button{
  background: black;
}
footer h5{
  font-weight:700; 
  font-size:1.2rem;
  }
  footer li{
    padding-bottom: 4px;
  }
  footer li a{
    font-size:0.8rem;
    color:#999
  }
  footer li a:hover{
    color:darkred
  }
  footer p{
    color:#999;
    font-size:0.8rem;
  }
  footer .copy a{
    color:black;
    width:38px;
    height:38px;
    background-color: white;
    text-align: center;
    line-height: 38px;
    border-radius: 50px;
    display:inline-block;
    transition: 0.3 ease;
    margin: 0 5px;
  }
  footer .copy a:hover{
    color:white;
    background-color: darkred;;
  }

  /* blog*/
  #blog .post .post-img{
    transition: 0.3 ease;
    overflow: hidden;
    cursor: pointer;
  }

  #blog .post:hover img{
    transform: scale(1.3) rotate(-10deg);
    opacity:0.8;
  }
  #blog .post:hover h4{
    color:darkred;
    transition: 0.3 ease;
    overflow: hidden;
    cursor: pointer;
  }


</style>


<body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script type="text/javascript">
   var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
  

  /* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

/* for login page */
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>