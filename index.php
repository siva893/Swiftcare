<?php

$db_host = 'localhost'; // Replace with your database host
$db_user = 'id20645669_root'; // Replace with your database user
$db_pass = 'Webhost@2023'; // Replace with your database password
$db_name = 'id20645669_hms'; // Replace with your database name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];
   $doctor = mysqli_real_escape_string($conn, $_POST['doctor']);
   $department = mysqli_real_escape_string($conn, $_POST['department']);


   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date, doctor, department) VALUES('$name','$email','$number','$date', '$doctor', '$department')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by group-5:: bindhu madhavi students</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
    
<!-- header section starts  -->

<header class="header" >
    
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>SwiftCare</strong> <br></a>
    <p>The Fast and Reliable Hospital Management Solution</p>

    <nav class="navbar"  >
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>
    

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">


    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>


<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">
                                                                <!-- printing docotors detilas -->
    
    <div>                                                                                <!-- doctors tab printing-->
   <head>
<title>Table with database</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
}
th {
    background-color: #588c7e;
    color: white;
}
th.doctor-name {
    font-weight: bold;
}
tr:nth-child(even) {background-color: #f2f2f2}

/* hide the details table by default */
.details {
    display: none;
}
</style>
<script>
function toggleDetailsTable(buttonId, tableId) {
    var button = document.getElementById(buttonId);
    var table = document.getElementById(tableId);
    if (table.style.display === "none") {
        table.style.display = "table";
        button.innerHTML = "Hide Details";
    } else {
        table.style.display = "none";
        button.innerHTML = "View Details";
    }
}
</script>
</head>

<body>
<?php
define('DB_USER', 'id20645669_root');
define('DB_PASSWORD', 'Webhost@2023');
define('DB_HOST', 'localhost');
define('DB_NAME', 'id20645669_hms');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('connection failed' . mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');

$sql = "SELECT DISTINCT doctor FROM contact_form";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each doctor
    while($row = $result->fetch_assoc()) {
        $doctor = $row["doctor"];
        echo "<h2 class='doctor-name'>" . $doctor . "</h2>";
        echo "<button onclick=\"toggleDetailsTable('button-" . $doctor . "', 'table-" . $doctor . "')\">View Details</button>";
        echo "<table class='details' id='table-" . $doctor . "'><tr><th>Name</th><th>Department</th><th>Date</th></tr>";
        $sql2 = "SELECT name, department, date FROM contact_form WHERE doctor = '$doctor'";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            // output data of each patient who selected this doctor
            while($row2 = $result2->fetch_assoc()) {
                echo "<tr><td>" . $row2["name"]. "</td><td>" . $row2["department"] . "</td><td>" . $row2["date"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
        }
        echo "</table>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>


<!-- doctors section ends -->
                                                                    <!-- end of printing doctor detials-->  

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>sam</h3>
            <span> Expert who specializes in diagnosing and treating skin-related conditions such as acne, eczema, and psoriasis.</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>manish</h3>
            <span>Expert who specializes in caring for infants, children, and adolescents</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>joe</h3>
            <span> Expert who specializes in diagnosing and treating conditions related to the nervous system, such as multiple sclerosis, Parkinson's disease, and epilepsy</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>jade</h3>
            <span>A medical doctor who specializes in the diagnosis and treatment of mental illness and emotional disorders.</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>danel</h3>
            <span>Expert who specializes in the diagnosis and treatment of cancer.</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>guru</h3>
            <span>Expert who specializes in the diagnosis and treatment of conditions related to the musculoskeletal system, such as bone fractures, joint injuries, and arthritis.</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>joesh</h3>
            <span> A primary care physician who provides a broad range of medical services to patients of all ages</span>
            <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>harry</h3>
            <span>emergency doctor handles all type of cases</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>fury</h3>
            <span>the other emergency doctor deals with all types of cases</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>
<!-- doctors section ends -->




<!-- appointmenting section starts   -->
<h1 class="heading"> <span>appointment</span> now </h1>    
<section class="appointment" id="appointment">     
<div class="row">

    <div class="image">
        <img src="image/appointment-img.svg" alt="">
    </div>

    <?php
        $host = 'localhost';
        $user = 'id20645669_root';
        $password = 'Webhost@2023';
        $database = 'id20645669_hms';
        $conn = mysqli_connect($host, $user, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $doctor = $_POST['doctor'];
            $department = $_POST['department'];
            
            $sql = "INSERT INTO contact_form (name, number, email, date, doctor, department) 
                    VALUES ('$name', '$number', '$email', '$date', '$doctor', '$department')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='message'>Appointment booked successfully!</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h3>make appointment</h3>
        <input type="text"name="name" placeholder="your name" class="box">
        <input type="number"name="number" placeholder="your number" class="box">
        <input type="email"name="email" placeholder="your email" class="box">
        <input type="date"name="date" class="box">
        <select class="box" id="doctor" name="doctor" >
            <option>select doctor</option>
            <option value="sam">sam</option>
            <option value="manish">manish</option>
            <option value="joe">joe</option>
            <option value="jade">jade</option>
            <option value="danel">danel</option>
            <option value="guru">guru</option>
            <option value="joesh">joesh</option>
            <option value="harry">harry</option>
            <option value="fury">fury</option>
        </select>
        <select class="box" id="department" name="department" >
            <option >select department</option>
            <option value="dental">dental</option>
            <option value="massage">massage</option>
            <option value="cardiology">cardiology</option>
            <option value="orthopedics">orthopedics</option>
            <option value="neurology">neurology</option>
            <option value="dermatalogy">dermatalogy</option>
        </select>
     
        <input type="submit" name="submit" value="appointment now" class="btn">
    </form>
</div>
</section>

<!-- printing patinet appointment details -->

  
<head>
  <title>Show Patient Details</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 16px;
      text-align: left;
      border: 2px solid #ccc;
    }
  button {
  width: 150px;
  height: 50px;
  border-radius: 0;
  border: 2px solid #ccc;
  background-color: #85c1a1; /* set background color to dark whitish green */
  color: #fff; /* set text color to white */
  box-shadow: 2px 2px 2px #999; /* add box shadow */
}




    
    th {
      background-color: #ddd;
      font-weight: bold;
      text-transform: uppercase;
      padding: 10px;
      border: 2px solid #ccc;
    }
    
    td {
      padding: 10px;
      border: 2px solid #ccc;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    tr:hover {
      background-color: #ddd;
    }
    
    #details {
      display: none;
    }
  </style>
</head>


<body>
<button onclick="showDetails()">Show Patient Details</button>
<div id="details">
  <table>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>number</th>
      <th>date</th>
    </tr>
    <?php
      $conn = mysqli_connect("localhost", "id20645669_root", "Webhost@2023", "id20645669_hms");
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT id, name, email, number, date FROM contact_form";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
          . $row["email"]. "</td><td>" . $row["number"] . "</td><td>" . $row["date"] . "</td></tr>";
        }
        echo "</table>";
      } else { 
        echo "0 results"; 
      }
      $conn->close();
    ?>
  </table>
</div>

<script>
function showDetails() {
  var detailsDiv = document.getElementById("details");
  if (detailsDiv.style.display === "none") {
    detailsDiv.style.display = "block";
  } else {
    detailsDiv.style.display = "none";
  }
}
</script>
</body>






<!-- end of printing user details -->

<!-- appointmenting section ends -->




<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            
            <h3>kris</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
           
            <h3>fury</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            
            <h3>hakai</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

    </div>

</section>

<!-- review section ends -->


<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by bruse </a>
                </div>
                <h3>blog title steev goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by natasha </a>
                </div>
                <h3>blog title henry goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by jeeva </a>
                </div>
                <h3>blog title keerthy goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by reve </a>
                </div>
                <h3>blog title fenry goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by danial </a>
                </div>
                <h3>blog title singa goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by dhanu </a>
                </div>
                <h3>blog title arjun goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardiology </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 957645321 </a>
            <a href="#"> <i class="fas fa-phone"></i> 9462537283 </a>
            <a href="#"> <i class="fas fa-envelope"></i> swiftcare@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> swiftcare@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>  </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

      <div class="credit"> </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>