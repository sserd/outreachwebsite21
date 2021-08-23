<?php

$php = array("1"=>array("04-10-2021","Opening Ceremony - WSW Program","WSW - 1st Panel Discussion","05:30 - 6:30 PM IST","left"),
"2"=>array("05-10-2021","WSW - 2nd PD on \"Challenges in the pathway of Space Tourism\"","Workshop 1 - Art of resume Writing.","05:30 - 7:00 PM IST","right"),
"3"=>array("06-10-2021","WSW - 3rd PD on \"Scope of privatization in the space industry\"","\"Workshop 2 - Where do you see yourself in future? 
\"","05:30 - 7:00 PM IST","left"),
"4"=>array("07-10-2021","WSW - 4th PD on \"Role of art & literature in space industry\"","Workshop 3 - Overcoming the barriers","05:30 - 7:00 PM IST","right"),
"5"=>array("08-10-2021","WSW - 5th PD on \"Theory and practical application go hand-in-hand\"","Workshop 4 - Sound mind Sound body","05:30 - 7:00 PM IST","left"),
"6"=>array("09-10-2021","WSW - 6th PD on \"Opportunities & challenges for women in space sector\"","Workshop 5 - Communication Skills","05:30 - 7:00 PM IST","right"),
"7"=>array("10-10-2021","WSW - 7th PD on \"Future of space era\"","Closing Ceremony and Announcement of Competition Winners. Opening Ceremony of Outreach program ","05:30 - 7:00 PM IST","left"),

);
for ($x = 1; $x <= 7; $x++) {

echo '<div class="timeline__elem timeline__elem--'. $php[$x][4].'">        
                  <div class="timeline__date">
                    <span class="timeline__date-month">Day</span>
                  <span class="timeline__date-day">'.$x.'</span>

                  </div>
                  <div class="timeline__event">
                    <div class="timeline__event-date-time">
                      <div class="timeline__event-date"> <span>'.$php[$x][0].'</span></div>
                      <div class="timeline__event-time"><span>'.$php[$x][3].'</span></div>
                    </div>
                    <h4 class="timeline__event-title">'.$php[$x][1].'</h4>
                    <h4 class="timeline__event-title">'.$php[$x][2].'</h4>
                    <div class="timeline__event-descr">
                      <p></p>
                    </div>
                    <div class="timeline__event-actions">
                      <a class="timeline__event-action" href="#" title="Speakers">Speakers </a>
                      <a class="timeline__event-action bg" href="./register.html" title="Register">Register </a>
                    </div>
                  </div>
                </div>';

}