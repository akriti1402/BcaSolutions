 <?php
include("header.php");
?>

<style>

main {
  margin: 20px;
}
.discussion {
  margin-top: 23px;
  margin-bottom:20px;
}
.post {
    display:flex;
  padding: 10px;
  
}
.post-author{
    width:100%;
}
.profile-image {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}
.profile-image img{
    width:100%;
    height:auto;
}
.post-content {
  margin-top: 10px;
}

.create-post {
  margin-top: 20px;
  width:100%;
}
.form-group {
  margin-bottom: 10px;
}

label {
  font-weight: bold;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 10px;
  border:none;
  border-radius:6px;
}

button[type="submit"] {
  background-color:black;
  color: white;
  padding: 5px 10px;
  border: black;
  border-radius:50rem;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color:#D17902;
  color:black;
}
.btn-more{
    margin:10px;
    border:black;
    border-radius:50rem;
    background-color:black;
    color:white;
}
.btn-more:hover{
    background-color:#D17902;
    color:black;
}
#more {display: none;}
.shad{
margin-top:70px!important;
 
}
 </style>
 <div class="container-fluid cont">
   <div class="container">
  

  
       <!--  <div class="jumbotron">--><div class="mt-4 p-5 text-dark rounded shad">
            <h3 class="display-6">Q : What is IT tools and technologies</h3>
            <p class="lead" style="font-size:17px" >Please explain this topic in breif</p>
            <hr style="background-color:rgb(160, 157, 157); height:2px">
           
            <p class="text-left" >Posted by<b style="color:green">&nbsp&nbsp&nbsp Rohan</b></p>
         </div>
         
         </div>
    <div class="container">
 <section class="discussion">
      <h3>Discussion</h3>
     
    <div class="post">
        <div class="profile-image">
    <img src="Images/newLogoScap.png" alt="Profile Image">
        </div>
        
    <div class="post-author">
        <h5>John Doe</h5>
        <p><a href="discussion.php">How can I improve my coding skills?</a></p>
       </div>
      
</div>
<div class="post">
        <div class="profile-image">
    <img src="Images/newLogoScap.png" alt="Profile Image">
        </div>
        
    <div class="post-author">
        <h5>John Doe</h5>
        <p><a href="discussion.php">How can I improve my coding skills?</a></p>
       </div>
     </div> 
<div class="post">
        <div class="profile-image">
       <img src="Images/newLogoScap.png" alt="Profile Image">
        </div>
        
    <div class="post-author">
        <h5>John Doe</h5>
        <p>How can I improve my coding skills?</p>
      </div> 
</div>
<div class="post">
        <div class="profile-image">
    <img src="Images/newLogoScap.png" alt="Profile Image">
        </div>
        
    <div class="post-author">
        <h5>John Doe</h5>
        <p>How can I improve my coding skills?</p>
       </div>
      </div>

<span id="dots"></span><span id="more"><div class="post">
        <div class="profile-image">
    <img src="profile.jpg" alt="Profile Image">
        </div>
        
    <div class="post-author">
        <h5>John Doe</h5>
        <p>How can I improve my coding skills?</p>
       </div>
      <
</div>
<div class="post">
        <div class="profile-image">
    <img src="profile.jpg" alt="Profile Image">
        </div>
        
    <div class="post-author">
        <h5>John Doe</h5>
        <p><a href="discussion.php">How can I improve my coding skills?</a></p>
       </div>
      
</div>
<div class="post">
        <div class="profile-image">
    <img src="profile.jpg" alt="Profile Image">
        </div>
        
    <div class="post-author">
        <h5>John Doe</h5>
        <p><a href="dicussion.php">How can I improve my coding skills?</a></p>
       </div>
      </div>
</span>

<button onclick="myFunction()" id="myBtn" class="btn btn-more">More posts</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "More posts";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Less posts";
    moreText.style.display = "inline";
  }
}
</script>

</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
