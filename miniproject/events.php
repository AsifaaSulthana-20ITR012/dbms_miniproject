<html>
    <head>
        <title>Event hall Booking</title>
        <style>
            body{
                background-image:url("https://valleycultural.org/wp-content/uploads/2019/11/Mic_Card_Background.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                padding:5px;
                border:4px groove grey;
            }
            
/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 100px;
  left: 100px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 150px;
  left: 100px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 150px;
  right: 100px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 100px;
  right: 100px;
}
.header{
    width:100%;
    height:15%;
    padding:4px;
    border:5px groove;
    background-color:#348781;
    color:#413839;
    font-size:1.875em;
    font-weight:bold;
    text-align:center;
    text-shadow:3px 1px #686A6C;
}
button{
    background-color:pink;
    color:white;
    width:30%;
    height:15%;
    padding:10px;
    margin:5px;
    border:5px solid #F6358A;
    font-weight:bold;
    text-shadow:3px 1px #F6358A;
    font-size:30px
    
}

        </style>
    </head>
    <body>
        <div class="header"><h3>KEC HALL REGISTRATION</h3></div>
        <a href="hall_details.php"><button class="top-left">Halls Available</button></a>
        <a href="form.php"><button class="top-right">Halls Registration</button></a>
        <a href="home.php"> <button class="bottom-left">Halls booked</button></a>
        <a href="delete_form.php"><button class="bottom-right">cancel Registration</button></a>


    </body>
</html>