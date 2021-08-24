<?php

$php = array(
"1"=>array("11-10-2021","Webinar 1 - Opening Talk on 'Why Space'","Workshop 1 - See Through Math","left"),
"2"=>array(" 12-10-2021","Webinar 2- Big Bang to Dark Matter","Workshop 2 - How to publish and where to publish the research work","right"),
"3"=>array(" 13-10-2021","Webinar 3 - Exoplanets and Astrobiology","Workshop 3 - What is the difference between Internship, Traineship and Project","left"),
"4"=>array(" 14-10-2021","Webinar 4 - Trends of Rocket Technology Development","Workshop 4 - Softwares that any student must be aware of.","left"),
"5"=>array(" 15-10-2021","Webinar 5 - Satellites and its Applications","Workshop 5 - Difference between CV and Resume, how to create a best profile","right"),
"6"=>array(" 16-10-2021","Webinar 6 - Future Mission to Space","Workshop 6 - Entreprenueral Endevours","left"),

);
for ($x = 8; $x <= 23; $x++) {
/*
echo '<div class="timeline__elem timeline__elem--'. $php[$x][3].'">
<div class="timeline__date">
<span class="timeline__date-month">Day</span>
<span class="timeline__date-day">'.$x.'</span>

</div>
<div class="timeline__event">
<div class="timeline__event-date-time">
<div class="timeline__event-date"> <span>'.$php[$x][0].'</span></div>
<div class="timeline__event-time"><span>06:00 - 08:00  IST</span></div>
</div>
<h4 class="timeline__event-title">'.$php[$x][1].'</h4>
<h4 class="timeline__event-title">'.$php[$x][2].'</h4>
<div class="timeline__event-descr">
<p></p>
</div>
<div class="timeline__event-actions">
<a class="timeline__event-action"href="#"title="Speakers">Speakers </a>
<a class="timeline__event-action bg"href="./register.html"title="Register">Register </a>
</div>
</div>
</div>';
*/

echo '<a href="img/gallery/'.$x.'.webp" class="fancybox mt-2" rel="gallery1">   <img src="img/gallery/'.$x.'.webp" alt="Image" class="img-fluid"></a>
';
}