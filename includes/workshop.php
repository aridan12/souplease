
<?php
$server_name = "localhost";
$user_name = "idanar";
$password = "souplease12";
$database = "idanar_project";

//create connection
$conn=new mysqli($server_name,$user_name,$password,$database);
// Check connection
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}

$sql="select First_Name, Last_Name, Phone, Email, Cooking_Level, Participants, Preferred_Day, Preferred_Time, More_Info from workshop";
$result=$conn->query($sql);


if ($_POST){
// add a new order 
$first_name=$_POST['First_Name'];
$last_name=$_POST['Last_Name'];
$phone=$_POST['Phone'];
$email=$_POST['Email'];
$cooking_level=$_POST['Cooking_Level'];
$participants=$_POST['Participants'];
$pref_day=$_POST['Preferred_Day'];
$pref_time=$_POST['Preferred_Time'];
$more_info=$_POST['More_Info'];


    $sql="INSERT INTO `workshop` (`First_Name`, `Last_Name`,`Phone`, `Email`, `Cooking_Level`, `Participants`, `Preferred_Day`,`Preferred_Time`, `More_Info`) 
      VALUES ('".$first_name."','".$last_name."','".$phone."','".$email."','".$cooking_level."','".$participants."','".$pref_day."','".$pref_time."','".$more_info."')";


if ($conn->query($sql)==FALSE){
    echo "<h2>Can not add new order.  Error is: </h2>".$conn->error;
    exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="../images/logo/soup.png">
    <title>Let's make some Soup please!</title>
    <link rel="stylesheet" type="text/css" href="../css/workshop-style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="load-navbar"></nav>
    <!-- Background Video -->
    <div class="video-container">
        <video src="../images/videos/background-vid.mp4" loop muted autoplay id="video-bg"></video>
        <div class="overlay"></div>
        <h1 class="big-title">
            Ready to make some Soup?
        </h1>
        <!-- Form Section -->
        <div class="wrapper">
            <div class="form-title">
                <h3> Join Souplease Workshop!</h3>
            </div>
            <form method="POST" action="workshop.php">
                <div class="form">
                    <div class="inputfield">
                        <label for="First_Name">First Name*</label>
                        <input type="text" id="First_Name" name="First_Name" class="input" maxlength="30" autofocus required placeholder="Enter your first name">
                    </div>
                    <div class="inputfield">
                        <label for="Last_Name">Last Name*</label>
                        <input type="text" id="Last_Name" name="Last_Name" class="input" maxlength="30" required placeholder="Enter your last name">
                    </div>
                    <div class="inputfield">
                        <label for="Phone">Phone Number*</label>
                        <input type="text" id="Phone" name="Phone" class="input" maxlength="10" required pattern="[0-9]{10}" placeholder="Example: 0501234567">
                    </div>
                    <div class="inputfield">
                        <label for="Email">Email Address*</label>
                        <input type="email" id="Email" name="Email" class="input" maxlength="100" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="yourEmail@gmail.com">
                    </div>
                    <div class="inputfield">
                        <label for="Cooking_Level">Cooking Level*</label>
                        <div class="custom_select">
                            <select name="Cooking_Level" id="Cooking_Level" required>
                                <option value="" selected disabled>--- Select ---</option>
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Professional">Professional</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputfield">
                        <label for="Participants">Participants*</label>
                        <div class="custom_select">
                            <select name="Participants" id="Participants" required>
                                <option value="" selected disabled>--- Select ---</option>
                                <option value="Solo">Solo</option>
                                <option value="Couple">Couple</option>
                                <option value="Group">Group</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputfield">
                        <label for="Preferred_Day">Preferred Day*</label>
                        <div class="custom_select">
                            <select name="Preferred_Day" id="Preferred_Day" required>
                                <option value="" selected disabled>--- Select ---</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputfield">
                        <label for="Preferred_Time">Preferred Time*</label>
                        <div class="custom_select">
                            <select name="Preferred_Time" id="Preferred_Time" required>
                                <option value="" selected disabled>--- Select ---</option>
                                <option value="Morning">Morning</option>
                                <option value="Afternoon">Afternoon</option>
                                <option value="Evening">Evening</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputfield">
                        <label for="More_Info">Anything else you want to tell us? :)<br><br><span class="optional">(optional)</span></label>
                        <textarea class="textarea" maxlength="300" name="More_Info" id="More_Info"></textarea>
                    </div>
                    <div class="inputfield">
                        <input type="submit" value="I am ready to make soup!" class="btn" id="send-form">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Reviews Section -->
    <h1 class="big-title">Customers Stories</h1>
    <section class="gallery-reviews">
        <!-- Review 1 -->
        <div class="review">
            <div class="head-review">
                <img src="..\images\slideshow\reviews\large\avi.jpg" alt="customer_img_review">
            </div>
            <div class="body-review">
                <div class="name-review">Avi M.</div>
                <div class="location-review">Haifa</div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="desc-review">
                    My wife and I are terrible cooks (sorry Ana), we love soups and we decided to sign up
                    to the amazing Souplease workshop.<br> We made a delicious thai soup alongside Adam and Nicole who explained
                    everything so well, even for slow learners like us :) Thanks for an amazing workshop guys!
                </div>
            </div>
        </div>
        <!-- Review 2 -->
        <div class="review">
            <div class="head-review">
                <img src="..\images\slideshow\reviews\large\dana.jpg" alt="customer_img_review">
            </div>
            <div class="body-review">
                <div class="name-review">Dana G.</div>
                <div class="location-review">Ramat HaSharon</div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="desc-review">
                    What an amazing workshop that was! My boyfriend and I booked an evening workshop with Nicole and Adam and made
                    an incredible pea soup! We did it online due to Convid-19 but it was an amazing experience nevertheless.
                    I highly recommend it, treat yourself with a tasty soup and an awesome workshop!
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="review">
            <div class="head-review">
                <img src="..\images\slideshow\reviews\large\tomer.jpg" alt="customer_img_review">
            </div>
            <div class="body-review">
                <div class="name-review">Tomer A.</div>
                <div class="location-review">Be'er Sheva</div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="desc-review">
                   A friend of mine recommended Souplease to me and I couldn't be thankful enough.
                   I booked a group workshop for my family, we made delicious soups and had a good time
                   with Nicole and Adam, they are super friendly, super patient and made us all enjoy the food, laugh
                   and have a good time. Thank you guys, keep it going! 
                </div>
            </div>
        </div>
    </section>
	<!-- Footer -->
	<footer id="load-footer"></footer>
	<!-- Loading Footer and Header -->
	<script type="text/javascript">
		$(document).ready(function() {
			$(".load-navbar").load("navbar.html");
			$("#load-footer").load("footer.html");
		});
        // success message when form is validated
        $('#send-form').click(function(){
            var valid = this.form.checkValidity();
            if (valid) {
                alert('Thank you! We got your message!\nWe are super excited to make soup with you, we will be in touch shortly!')
            }
        });
	</script>
</body>
</html>