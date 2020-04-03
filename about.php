<!DOCTYPE html>
<html lang="en">
<head>
  <title>about
  </title>
<meta charset="utf=8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.footer {
    background-color:#212121;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 0;
    color:#007E33;
}
.r
{
  margin-bottom:3px;
  width:29%;
  height:100%;
  float:left;

}
.sec
{
  background:#007E33;
  width:100%;
  height:100%;
  padding:13px;
  padding-bottom:30px;
  animation-name:movingright;
  animation-duration:4s;
  animation-iteration-count:1;
}
.seci
{
  background:#73AD21;
  width:100%;
  height:100%;
  padding:13px;
  padding-bottom:30px;
  animation-name:movingrigh;
  animation-duration:7s;
  animation-iteration-count:1;
}
.sect
{
  background:#73AD21;
  width:100%;
  height:100%;
  padding:13px;
  padding-bottom:50px;
  animation-name:movingtop;
  animation-duration:9s;
  animation-iteration-count:1;
}
@keyframes movingtop
{
  from{transform:translateY(100%);}
  to{transform:translateY(-4%);}
  0% { opacity: 0; }
  80% { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes movingright
{
from{transform:translateX(100%);}
to{transform:translateX(-4%);} 
0% { opacity: 0; }
25% { opacity: 1; }
100% { opacity: 1; } 
}
@keyframes movingrigh
{
from{transform:translateX(100%);}
to{transform:translateX(-4%);}
0% { opacity: 0; }
50% { opacity: 1; }
100% { opacity: 1; } 
}
</style>
</head>
<body>
  <?php
include("nav.php");
?>
            <div class="container-fluid">
              <div class='r' style="margin-right:1%;">
             <div class="sec" style="margin-top:70px;padding-bottom:50px;"><h3>VISION</h3>The creation of the ideal woman through holistic education.</div>
              <div class="seci" style="margin-top:11px;"><h3>MISSION</h3>We aim at creating a learning environment for the girl child to maximize intellectual spiritual and emotional growth, so as to make her a responsible leader and valuable contributor to society.</div>
    </div> 
      <div class='r' style="width:70%;">
             <div class="sect" style="margin-top:70px;padding-bottom:50px;"><h3>OVERVIEW</h3>Established in 1880, Holy Angels’ Convent, a name synonymous with excellence in education, enjoys a phenomenal reputation built on the pillars of trust and commitment. The humble script written by our visionary predecessors has been re-written countless times.<br><br>

Rev. Mother Mary Theresa Veronica of the Passion (1823-1906) founded the Congregation of the Carmelite Religious in 1868. The Religious Order efficiently runs and administers the affairs of the institution. Rev. Mother Mary Elias of Jesus (1839-1933), the Co-foundress of the Congregation, founded Holy Angels’ in 1880.<br><br>

The fledgling Institution embodied the hopes, dreams and aspirations of our founders. From its humble beginnings, the Institution rapidly transformed itself into a mighty river of life, love and learning- its tributaries flowing far and wide, giving the living water of knowledge to all who aspired for it. Thousands flocked to this fountainhead of learning, over the decades, enriching themselves, the society they moved in and ultimately the world at large.<br><br>

The Congregation’s mission of empowering the girl child through education has since borne much fruit. Numerous educational institutions of good repute spread throughout India and even abroad bear witness to the efficacy of our mission and endeavour.<br><br></div>
    </div> 
</div>
<?php 
include("footer.php") ?>
</body>
</html>
