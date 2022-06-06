<html>
    <head>
     <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="wrapper">

            <div class="registration_form">
           <!-- Title -->
             <div class="title">
              Event Registration Form
             </div>
           
           <!-- Form -->
            <form action="send.php" method="POST">
             <div class="form_wrap">
              <div class="input_grp">
           
           <!-- Frist name input Place -->
                <!-- <div class="input_wrap">
                 <label for="fname">booking id</label>
                 <input type="text" id="fname" name="booking_id" placeholder="automatically generated" disabled>
                </div><br>
            -->
           <!--  hallName input place -->
               <div class="input_wrap">
                 <label for="lname">Hall name</label>
                 <input type="text" id="lname" name="hall_name">
               </div>
             </div>
           
           <!-- hallId input Place -->
            <div class="input_wrap">
             <label for="number">Hall no</label>
             <input type="number" id="email" name="hall_id">
            </div>
           
           <!-- functionName input place -->
            <div class="input_wrap">
             <label for="city">event name</label>
             <input type="text" id="city" name="function_name">
            </div>
           
             <!-- date of event input place -->
             <div class="input_wrap">
             <label for="country">date of event</label>
             <input type="date" id="country" name="date_of_event">
            </div>
 
           <!-- Submit button -->
            <div class="input_wrap">
              <input type="submit" value="Register Now" class="submit_btn">
            </div>
           
           </div>
           </form>
           </div>
           </div>
      
           <a href="events.php"><button class="top-left" style="background-color:red;width:200px;height:70px;justify-content:center;margin-left:45%;margin-top:3px;font-size:30px">HOME</button></a>

    </body>
</html>
