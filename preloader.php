<style>
.preloader
{
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100vh;
background:#D17902;
z-index: 9999;
text-align: center;
}
.preloader-icon
{
position: relative;
top: 45%;
width: 200px;
border-radius: 50%;
animation: shake 1.5s infinite;
}
@keyframes shake
{
0% { transform: translate(1px, -1px) rotate(0deg);}
10% { transform: translate(1px, -3px) rotate(-1deg);}
20% { transform: translate(1px, -5px) rotate(-3deg);}
30% { transform: translate(1px, -7px) rotate(0deg);}
40% { transform: translate(1px, -9px) rotate(1deg);}
50% { transform: translate(1px, -11px) rotate(3deg);}
60% { transform: translate(1px, -9px) rotate(0deg);}
70% { transform: translate(1px, -7px) rotate(-1deg);}
80% { transform: translate(1px, -5px) rotate(-3deg);}
90% { transform: translate(1px, -3px) rotate(0deg);}
100% { transform: translate(1px, -1px) rotate(-1deg);}
}
</style>
<div class="preloader"> <img class="preloader-icon" src="Images/newLogoScap.png" alt="My Site Preloader"> </div>
<script>
window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }
</script>