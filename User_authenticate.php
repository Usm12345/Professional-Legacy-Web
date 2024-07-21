<?php

 session_start();
    require_once "db_connection.php";

    if(isset($_SESSION["user"])) {
        $user = $_SESSION["user"];
        $user_id = $user["id"];

        $sql = "SELECT * FROM users WHERE id = $user_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            
  if ($row["is_permitted"] == 1) {
     echo '<div class="component"> 
     <a href="coursedetails(2)_unlocked.php">
          <img class="rectangle" src="img/rectangle-28.png">
          <div class="text-wrapper-2">Data Analysis with Excel</div>
          <div class="overlap">
            <img class="star" src="img/star-6-12.svg">
            <img class="img" src="img/star-7-12.svg">
            <img class="star-2" src="img/star-8-12.svg">
            <img class="star-3" src="img/star-9-12.svg">
          </div>
          <img class="star-4" src="img/star-10-12.svg">
          <div class="overlap-group"><a href="coursedetails(2)_unlocked.php"><div class="text-wrapper-3">Learn More</div></a></div>
      </a>
          <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
          
        </div>
        <div class="component-3">
        <img class="rectangle-2" src="img/rectangle-28-12.png" />
        <div class="data-analysis-with">Taxation (Pakistan)</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-10.svg" />
        <div class="overlap-group" style="width: 114px;
 left: 107px;
 position: absolute;
 height: 30px;
 top: 287px;
 background-color: #000636;
 border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
</div>

      
      
      <div class="component-6">
        <img class="rectangle-2" src="img/rectangle-28-9.png" />
        <div class="data-analysis-with">Taxation (Gulf)</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-7.svg" />
       <div class="overlap-group" style="width: 114px;
left: 107px;
position: absolute;
height: 30px;
top: 287px;
background-color: #000636;
border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
     </div>
      
     
     
      <div class="component-10">
        <img class="rectangle-2" src="img/rectangle-28-5.png" />
        <p class="data-analysis-with">Big Data with Power BI</p>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-3.svg" />
      <div class="overlap-group" style="width: 114px;
left: 107px;
position: absolute;
height: 30px;
top: 287px;
background-color: #000636;
border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
      </div>
      <div class="component-11">
        <img class="rectangle-2" src="img/rectangle-28-4.png" />
        <div class="flexcontainer">
          <p class="text-i">
            <span class="span">Freelancing<br /></span>
          </p>
          <p class="text-i"><span class="span">(Fiverr + Upwork)</span></p>
        </div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-2.svg" />
       <div class="overlap-group" style="width: 114px;
left: 107px;
position: absolute;
height: 30px;
top: 287px;
background-color: #000636;
border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
      </div>';
      }
      else{
        echo '  <div class="component">
        <a href="coursedetails(2).php">
        <img class="rectangle" src="img/rectangle-28.png">
        <div class="text-wrapper-2">Data Analysis with Excel</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg">
          <img class="img" src="img/star-7-12.svg">
          <img class="star-2" src="img/star-8-12.svg">
          <img class="star-3" src="img/star-9-12.svg">
        </div>
        <img class="star-4" src="img/star-10-12.svg">
        <div class="overlap-group"><a href="coursedetails(2).php"><div class="text-wrapper-3">Learn More</div></a></div>
        </a>
        <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6" ><div class="text-wrapper-4">Enquire Now</div></a></div>
      </div> 
      <div class="component-3">
            <img class="rectangle-2" src="img/rectangle-28-12.png" />
            <div class="data-analysis-with">Taxation (Pakistan)</div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-10.svg" />
            <div class="overlap-group" style="width: 114px;
     left: 107px;
     position: absolute;
     height: 30px;
     top: 287px;
     background-color: #000636;
     border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
  </div>
  
        
          <div class="component-6">
            <img class="rectangle-2" src="img/rectangle-28-9.png" />
            <div class="data-analysis-with">Taxation (Gulf)</div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-7.svg" />
           <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
         </div>
        
          
         
          <div class="component-10">
            <img class="rectangle-2" src="img/rectangle-28-5.png" />
            <p class="data-analysis-with">Big Data with Power BI</p>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-3.svg" />
          <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
          </div>
          <div class="component-11">
            <img class="rectangle-2" src="img/rectangle-28-4.png" />
            <div class="flexcontainer">
              <p class="text-i">
                <span class="span">Freelancing<br /></span>
              </p>
              <p class="text-i"><span class="span">(Fiverr + Upwork)</span></p>
            </div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-2.svg" />
           <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
          </div>';
      } 
      if ($row["is_permitted2"] == 1) {
        echo ' <div class="component-2">
        <a href="coursedetails(1)_unlocked.php">
        <img class="rectangle-2" src="img/rectangle-28-13.png" />
        <div class="flexcontainer">
          <p class="text-i">
            <span class="span">Financial Modeling &amp;<br /></span>
          </p>
          <p class="text-i"><span class="span"> Valuation Analysis (FMVA)</span></p>
        </div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-11.svg" />
        <div class="overlap-group"><a href="coursedetails(1)_unlocked.php"><div class="text-wrapper-3">Learn More</div></a></div>
        </a>
        <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
      </div>';
      
      }  else {
          echo '
        
          <div class="component-2">
          <a href="coursedetails(1).php">
          <img class="rectangle-2" src="img/rectangle-28-13.png" />
          <div class="flexcontainer">
            <p class="text-i">
              <span class="span">Financial Modeling &amp;<br /></span>
            </p>
            <p class="text-i"><span class="span"> Valuation Analysis (FMVA)</span></p>
          </div>
          <div class="overlap">
            <img class="star" src="img/star-6-12.svg" />
            <img class="img" src="img/star-7-12.svg" />
            <img class="star-2" src="img/star-8-12.svg" />
            <img class="star-3" src="img/star-9-12.svg" />
          </div>
          <img class="star-4" src="img/star-10-11.svg" />
          <div class="overlap-group"><a href="coursedetails(1).php"><div class="text-wrapper-3">Learn More</div></a></div>
          </a>
          <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
        </div>';
            
      }
      if ($row["is_permitted3"] == 1) {  
      echo'  <div class="component-12">
      <a href="coursedetails(12)_unlocked.php">
        <img class="rectangle" src="img/rectangle-28-3.png" />
        <div class="text-wrapper-2">Preparation of Financial Statements</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-1.svg" />
        <div class="overlap-group"><a href="coursedetails(12)_unlocked.php"><div class="text-wrapper-3">Learn More</div></a></div>
      </a>    
        <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
      </div>';

    }
    else{
      echo'   <div class="component-12">
      <a href="coursedetails(12).php">
      <img class="rectangle" src="img/rectangle-28-3.png" />
      <div class="text-wrapper-2">Preparation of Financial Statements</div>
      <div class="overlap">
        <img class="star" src="img/star-6-12.svg" />
        <img class="img" src="img/star-7-12.svg" />
        <img class="star-2" src="img/star-8-12.svg" />
        <img class="star-3" src="img/star-9-12.svg" />
      </div>
      <img class="star-4" src="img/star-10-1.svg" />
      <div class="overlap-group"><a href="coursedetails(12).php"><div class="text-wrapper-3">Learn More</div></a></div>
      </a>
      <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
    </div>';
    }
    if ($row["is_permitted4"] == 1) {   
    echo'  <div class="component-13">
    <a href="coursedetails(13)_unlocked.php">
      <img class="rectangle" src="img/rectangle-28-2.png" />
      <div class="text-wrapper-2">Audit of Financial Statements</div>
      <div class="overlap">
        <img class="star" src="img/star-6-12.svg" />
        <img class="img" src="img/star-7-12.svg" />
        <img class="star-2" src="img/star-8.svg" />
        <img class="star-3" src="img/star-9-12.svg" />
      </div>
      <img class="star-4" src="img/star-10.svg" />
      <div class="overlap-group"><a href="coursedetails(13)_unlocked.php"><div class="text-wrapper-3">Learn More</div></a></div>
    </a>  
      <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
    </div>
  </div>
</div>';
  }
  else{
    echo'
    <div class="component-13">
    <a href="coursedetails(13).php">
      <img class="rectangle" src="img/rectangle-28-2.png" />
      <div class="text-wrapper-2">Audit of Financial Statements</div>
      <div class="overlap">
        <img class="star" src="img/star-6-12.svg" />
        <img class="img" src="img/star-7-12.svg" />
        <img class="star-2" src="img/star-8.svg" />
        <img class="star-3" src="img/star-9-12.svg" />
      </div>
      <img class="star-4" src="img/star-10.svg" />
      <div class="overlap-group"><a href="coursedetails(13).php"><div class="text-wrapper-3">Learn More</div></a></div>
    </a>  
      <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
    </div>
  </div>
</div>';
  }
}
}
}
    
    
    elseif(isset($_SESSION["user_token"])){

     // Check database permissions and display message accordingly
    if ($userinfo['is_permitted']) {
     echo '<div class="component">
     <a href="coursedetails(2)_unlocked.php">
          <img class="rectangle" src="img/rectangle-28.png">
          <div class="text-wrapper-2">Data Analysis with Excel</div>
          <div class="overlap">
            <img class="star" src="img/star-6-12.svg">
            <img class="img" src="img/star-7-12.svg">
            <img class="star-2" src="img/star-8-12.svg">
            <img class="star-3" src="img/star-9-12.svg">
          </div>
          <img class="star-4" src="img/star-10-12.svg">
          <div class="overlap-group"><a href="coursedetails(2)_unlocked.php"><div class="text-wrapper-3">Learn More</div></a></div>
      </a>      
          <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
        </div>
        <div class="component-3">
        <img class="rectangle-2" src="img/rectangle-28-12.png" />
        <div class="data-analysis-with">Taxation (Pakistan)</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-10.svg" />
        <div class="overlap-group" style="width: 114px;
 left: 107px;
 position: absolute;
 height: 30px;
 top: 287px;
 background-color: #000636;
 border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
</div>

      
      <div class="component-6">
        <img class="rectangle-2" src="img/rectangle-28-9.png" />
        <div class="data-analysis-with">Taxation (Gulf)</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-7.svg" />
       <div class="overlap-group" style="width: 114px;
left: 107px;
position: absolute;
height: 30px;
top: 287px;
background-color: #000636;
border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
     </div>
    
      
      <div class="component-10">
        <img class="rectangle-2" src="img/rectangle-28-5.png" />
        <p class="data-analysis-with">Big Data with Power BI</p>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-3.svg" />
      <div class="overlap-group" style="width: 114px;
left: 107px;
position: absolute;
height: 30px;
top: 287px;
background-color: #000636;
border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
      </div>
      <div class="component-11">
        <img class="rectangle-2" src="img/rectangle-28-4.png" />
        <div class="flexcontainer">
          <p class="text-i">
            <span class="span">Freelancing<br /></span>
          </p>
          <p class="text-i"><span class="span">(Fiverr + Upwork)</span></p>
        </div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-2.svg" />
       <div class="overlap-group" style="width: 114px;
left: 107px;
position: absolute;
height: 30px;
top: 287px;
background-color: #000636;
border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
      </div>';
      }
      else{
        echo '  <div class="component">
    <a href="coursedetails(2).php">
        <img class="rectangle" src="img/rectangle-28.png">
        <div class="text-wrapper-2">Data Analysis with Excel</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg">
          <img class="img" src="img/star-7-12.svg">
          <img class="star-2" src="img/star-8-12.svg">
          <img class="star-3" src="img/star-9-12.svg">
        </div>
        <img class="star-4" src="img/star-10-12.svg">
        <div class="overlap-group"><a href="coursedetails(2).php"><div class="text-wrapper-3">Learn More</div></a></div>
    </a>
        <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6" ><div class="text-wrapper-4">Enquire Now</div></a></div>
      </div> 
      <div class="component-3">
            <img class="rectangle-2" src="img/rectangle-28-12.png" />
            <div class="data-analysis-with">Taxation (Pakistan)</div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-10.svg" />
            <div class="overlap-group" style="width: 114px;
     left: 107px;
     position: absolute;
     height: 30px;
     top: 287px;
     background-color: #000636;
     border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
  </div>
  
          
          <div class="component-6">
            <img class="rectangle-2" src="img/rectangle-28-9.png" />
            <div class="data-analysis-with">Taxation (Gulf)</div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-7.svg" />
           <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
         </div>
        
        
         
          <div class="component-10">
            <img class="rectangle-2" src="img/rectangle-28-5.png" />
            <p class="data-analysis-with">Big Data with Power BI</p>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-3.svg" />
          <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
          </div>
          <div class="component-11">
            <img class="rectangle-2" src="img/rectangle-28-4.png" />
            <div class="flexcontainer">
              <p class="text-i">
                <span class="span">Freelancing<br /></span>
              </p>
              <p class="text-i"><span class="span">(Fiverr + Upwork)</span></p>
            </div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-2.svg" />
           <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
          </div>';
      } 
      if ($userinfo["is_permitted2"] == 1) {
        echo ' <div class="component-2">
     <a href="coursedetails(1)_unlocked.php">
        <img class="rectangle-2" src="img/rectangle-28-13.png" />
        <div class="flexcontainer">
          <p class="text-i">
            <span class="span">Financial Modeling &amp;<br /></span>
          </p>
          <p class="text-i"><span class="span"> Valuation Analysis (FMVA)</span></p>
        </div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-11.svg" />
        <div class="overlap-group"><a href="coursedetails(1)_unlocked.php"><div class="text-wrapper-3">Learn More</div></a></div>
     </a>    
        <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
      </div>';
      
      }  else {
          echo '
        
          <div class="component-2">
        <a href="coursedetails(1).php">  
          <img class="rectangle-2" src="img/rectangle-28-13.png" />
          <div class="flexcontainer">
            <p class="text-i">
              <span class="span">Financial Modeling &amp;<br /></span>
            </p>
            <p class="text-i"><span class="span"> Valuation Analysis (FMVA)</span></p>
          </div>
          <div class="overlap">
            <img class="star" src="img/star-6-12.svg" />
            <img class="img" src="img/star-7-12.svg" />
            <img class="star-2" src="img/star-8-12.svg" />
            <img class="star-3" src="img/star-9-12.svg" />
          </div>
          <img class="star-4" src="img/star-10-11.svg" />
          <div class="overlap-group"><a href="coursedetails(1).php"><div class="text-wrapper-3">Learn More</div></a></div>
        </a>  
          <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
        </div>';
            
      }
      if ($userinfo["is_permitted3"] == 1) {  
      echo'  <div class="component-12">
      <a href="coursedetails(12)_unlocked.php">
        <img class="rectangle" src="img/rectangle-28-3.png" />
        <div class="text-wrapper-2">Preparation of Financial Statements</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg" />
          <img class="img" src="img/star-7-12.svg" />
          <img class="star-2" src="img/star-8-12.svg" />
          <img class="star-3" src="img/star-9-12.svg" />
        </div>
        <img class="star-4" src="img/star-10-1.svg" />
        <div class="overlap-group"><a href="coursedetails(12)_unlocked.php"><div class="text-wrapper-3">Learn More</div></a></div>
     </a>    
        <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
      </div>';

    }
    else{
      echo'   <div class="component-12">
    <a href="coursedetails(12).php">  
      <img class="rectangle" src="img/rectangle-28-3.png" />
      <div class="text-wrapper-2">Preparation of Financial Statements</div>
      <div class="overlap">
        <img class="star" src="img/star-6-12.svg" />
        <img class="img" src="img/star-7-12.svg" />
        <img class="star-2" src="img/star-8-12.svg" />
        <img class="star-3" src="img/star-9-12.svg" />
      </div>
      <img class="star-4" src="img/star-10-1.svg" />
      <div class="overlap-group"><a href="coursedetails(12).php"><div class="text-wrapper-3">Learn More</div></a></div>
    </a>  
      <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
    </div>';
    }
    if ($userinfo["is_permitted4"] == 1) {   
    echo'  <div class="component-13">
    <a href="coursedetails(13)_unlocked.php">
      <img class="rectangle" src="img/rectangle-28-2.png" />
      <div class="text-wrapper-2">Audit of Financial Statements</div>
      <div class="overlap">
        <img class="star" src="img/star-6-12.svg" />
        <img class="img" src="img/star-7-12.svg" />
        <img class="star-2" src="img/star-8.svg" />
        <img class="star-3" src="img/star-9-12.svg" />
      </div>
      <img class="star-4" src="img/star-10.svg" />
      <div class="overlap-group"><a href="coursedetails(13)_unlocked.php"><div class="text-wrapper-3">Learn More</div></a></div>
    </a>  
      <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
    </div>
  </div>
</div>';
  }
  else{
    echo'
    <div class="component-13">
    <a href="coursedetails(13).php">
      <img class="rectangle" src="img/rectangle-28-2.png" />
      <div class="text-wrapper-2">Audit of Financial Statements</div>
      <div class="overlap">
        <img class="star" src="img/star-6-12.svg" />
        <img class="img" src="img/star-7-12.svg" />
        <img class="star-2" src="img/star-8.svg" />
        <img class="star-3" src="img/star-9-12.svg" />
      </div>
      <img class="star-4" src="img/star-10.svg" />
      <div class="overlap-group"><a href="coursedetails(13).php"><div class="text-wrapper-3">Learn More</div></a></div>
    </a>  
      <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
    </div>
  </div>
</div>';
  }
}
else{
     echo '  <div class="component">
     <a href="coursedetails(2).php">
        <img class="rectangle" src="img/rectangle-28.png">
        <div class="text-wrapper-2">Data Analysis with Excel</div>
        <div class="overlap">
          <img class="star" src="img/star-6-12.svg">
          <img class="img" src="img/star-7-12.svg">
          <img class="star-2" src="img/star-8-12.svg">
          <img class="star-3" src="img/star-9-12.svg">
        </div>
        <img class="star-4" src="img/star-10-12.svg">
        <div class="overlap-group"><a href="coursedetails(2).php"><div class="text-wrapper-3">Learn More</div></a></div>
     </a>    
        <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6" ><div class="text-wrapper-4">Enquire Now</div></a></div>
      </div> 
      <div class="component-3">
            <img class="rectangle-2" src="img/rectangle-28-12.png" />
            <div class="data-analysis-with">Taxation (Pakistan)</div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-10.svg" />
            <div class="overlap-group" style="width: 114px;
     left: 107px;
     position: absolute;
     height: 30px;
     top: 287px;
     background-color: #000636;
     border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
  </div>
  
         
          <div class="component-6">
            <img class="rectangle-2" src="img/rectangle-28-9.png" />
            <div class="data-analysis-with">Taxation (Gulf)</div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-7.svg" />
           <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
         </div>
         
          
         
          <div class="component-10">
            <img class="rectangle-2" src="img/rectangle-28-5.png" />
            <p class="data-analysis-with">Big Data with Power BI</p>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8-12.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-3.svg" />
          <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
          </div>
          <div class="component-11">
            <img class="rectangle-2" src="img/rectangle-28-4.png" />
            <div class="flexcontainer">
              <p class="text-i">
                <span class="span">Freelancing<br /></span>
              </p>
              <p class="text-i"><span class="span">(Fiverr + Upwork)</span></p>
            </div>
            <div class="overlap">
              <img class="star" src="img/star-6-12.svg" />
              <img class="img" src="img/star-7-12.svg" />
              <img class="star-2" src="img/star-8.svg" />
              <img class="star-3" src="img/star-9-12.svg" />
            </div>
            <img class="star-4" src="img/star-10-2.svg" />
           <div class="overlap-group" style="width: 114px;
    left: 107px;
    position: absolute;
    height: 30px;
    top: 287px;
    background-color: #000636;
    border-radius: 25px ;"><div class="text-wrapper-3" style="width: 93px;">Coming Soon</div></div>
          </div>
          
     <div class="component-2">
     <a href="coursedetails(1).php">
          <img class="rectangle-2" src="img/rectangle-28-13.png" />
          <div class="flexcontainer">
            <p class="text-i">
              <span class="span">Financial Modeling &amp;<br /></span>
            </p>
            <p class="text-i"><span class="span"> Valuation Analysis (FMVA)</span></p>
          </div>
          <div class="overlap">
            <img class="star" src="img/star-6-12.svg" />
            <img class="img" src="img/star-7-12.svg" />
            <img class="star-2" src="img/star-8-12.svg" />
            <img class="star-3" src="img/star-9-12.svg" />
          </div>
          <img class="star-4" src="img/star-10-11.svg" />
          <div class="overlap-group"><a href="coursedetails(1).php"><div class="text-wrapper-3">Learn More</div></a></div>
     </a>      
          <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
        </div>
        
         <div class="component-12">
    <a href="coursedetails(12).php">     
      <img class="rectangle" src="img/rectangle-28-3.png" />
      <div class="text-wrapper-2">Preparation of Financial Statements</div>
      <div class="overlap">
        <img class="star" src="img/star-6-12.svg" />
        <img class="img" src="img/star-7-12.svg" />
        <img class="star-2" src="img/star-8-12.svg" />
        <img class="star-3" src="img/star-9-12.svg" />
      </div>
      <img class="star-4" src="img/star-10-1.svg" />
      <div class="overlap-group"><a href="coursedetails(12).php"><div class="text-wrapper-3">Learn More</div></a></div>
    </a>  
      <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
    </div>
    <div class="component-13">
    <a href="coursedetails(13).php">
      <img class="rectangle" src="img/rectangle-28-2.png" />
      <div class="text-wrapper-2">Audit of Financial Statements</div>
      <div class="overlap">
        <img class="star" src="img/star-6-12.svg" />
        <img class="img" src="img/star-7-12.svg" />
        <img class="star-2" src="img/star-8.svg" />
        <img class="star-3" src="img/star-9-12.svg" />
      </div>
      <img class="star-4" src="img/star-10.svg" />
      <div class="overlap-group"><a href="coursedetails(13).php"><div class="text-wrapper-3">Learn More</div></a></div>
    </a>  
      <div class="div-wrapper"><a href="https://forms.gle/e8CFWLrppCpNNrTQ6"><div class="text-wrapper-4">Enquire Now</div></a></div>
    </div>
  </div>
</div>
          ';
}




?>