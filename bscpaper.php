<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');
.height-100{
    height:75vh;
}
.card{
    
    width:400px;
    height:330px;
    border:none;
    border-radius:20px;
    overflow:hidden;
    cursor:pointer;
}

.card:hover .clip-path{
    clip-path: circle(320px at center 0);
}

.clip-path{
    position:relative;
    width:100%;
    height:100%;
    clip-path: circle(150px at center 0);
    background:#EEBF00;
    display:flex;
    justify-content:center;
    align-items:center;
    transition:all 0.3s;
}

.clip-path h2{
    color:black;
    font-size:30px;
}

.content{
   
    padding:15px;
   
    
}
.content p{
    font-size:15px;
    
}

.content a{
    
    width:100px;
    height:100px;
    background-color:#D17902;
    color:#fff !important;
    padding:7px;
    border-radius:6px;
    padding-left:20px;
    padding-right:20px;
    font-size:12px;
    text-decoration:none;
    
}

.content a:hover{
    
    background-color:black;
    color:black;
    text-decoration:none;
}	
  
  
</style>
<?php
include("header.php");
?>
<div class="cont">
<div class="container">
  <h1 style="text-align:center; font-family:Playfair Display; position:relative; top:80px;">BSc CS-Previous Year Papers</h1> 
<div class="row">
    <div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Semester-1</h2>
          </div>
    
          <div class="content text-center">
             <p>Notes of all semesters which help you to crack university examinations</p>
             <a href="bsc-paper-year.php">Explore</a>
           </div>

</div>
</div>
    
</div>

<div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Semester-2</h2>
          </div>
    
          <div class="content text-center">
             <p>Only previous year paper. All semesters papers are avalable here.</p>
             <a href="bsc-paper-year2.php">Explore</a>
           </div>

</div>
</div>
    
</div>

<div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Semester-3</h2>
          </div>
    
          <div class="content text-center">
             <p>Previous year paper with solution. Maths solutions are hand written</p>
             <a href="bsc-paper-year3.php">Explore</a>
           </div>

</div>
</div>
    
</div>

<div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Semester-4</h2>
          </div>
    
          <div class="content text-center">
             <p>Previous year paper with solution. Maths solutions are hand written</p>
             <a href="bsc-paper-year4.php">Explore</a>
           </div>

</div>
</div>
    
</div>

<div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Semester-5</h2>
          </div>
    
          <div class="content text-center">
             <p>Previous year paper with solution. Maths solutions are hand written</p>
             <a href="bsc-paper-year5.php">Explore</a>
           </div>

</div>
</div>
    
</div>

<div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Semester-6</h2>
          </div>
    
          <div class="content text-center">
             <p>Previous year paper with solution. Maths solutions are hand written</p>
             <a href="bsc-paper-year6.php">Explore</a>
           </div>

</div>
</div>
    
</div>


</div>
</div>
</div>
<!-- Start Dash Board -->
<?php
 include("footer.php");
?>