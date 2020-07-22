<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16">Mail</div>
    <div class="w3-center w3-padding-16">The Frostbite</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="icecream">
    <div class="w3-quarter">
      <img src="/IceCreamStore/webroot/img/black ice cream.jpeg" alt="black ice cream" style="width:100%">
      <h3>Black Ice Cream</h3>
      <h4>RM18.90</h4>
      <p>The flavor and color of this ice cream hinge on high-quality Japanese-style black sesame paste, which is made from roasted, un-hulled black sesame seeds. The jet-black paste is rich, intensely nutty, and pleasantly bitter, like dark chocolate.</p>
    </div>
    <div class="w3-quarter">
      <img src="/IceCreamStore/webroot/img/blue moon ice cream.jpg" alt="blue moon ice cream" style="width:100%">
      <h3>Blue Moon Ice Cream</h3>
      <h4>RM18.90</h4>
      <p>Blue moon is an ice cream flavor with bright blue coloring, Blue moon ice cream is a mysterious blue-colored ice cream that is popular in our store.</p>
    </div>
    <div class="w3-quarter">
      <img src="/IceCreamStore/webroot/img/cookies and cream ice cream 1.jpg" alt="cookies and cream ice cream" style="width:100%">
      <h3>Cookies And Cream Ice Cream</h3>
      <h4>RM22.90</h4>
      <p>Cookies and cream (or cookies 'n cream) is a variety of ice cream and milkshake based on flavoring from chocolate sandwich cookies, with the most popular version containing hand or pre-crumbled cookies.</p>
    </div>
    <div class="w3-quarter">
      <img src="/IceCreamStore/webroot/img/cotton candy ice cream.jpg" alt="cotton candy ice cream" style="width:100%">
      <h3>Cotton Candy Ice Cream</h3>
      <h4>RM21.90</h4>
      <p>Unicorn Ice Cream is magic ! There’s nothing better on a hot day than rainbow ice cream that’s covered in star sprinkles and glitter!This is is your standard vanilla ice cream made fabulous with a little food coloring, lots of glitter, and star sprinkles all over the place!</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="/IceCreamStore/webroot/img/matcha ice cream.jpg" alt="matcha ice cream" style="width:100%">
      <h3>Matcha Ice Cream</h3>
      <h4>RM20.90</h4>
      <p>The Japanese green tea ice cream is not as creamy. It is sweet, but it has a very strong matcha taste that is slightly bitter. It’s a perfect balance! Itadakimasu!</p>
    </div>
    <div class="w3-quarter">
      <img src="/IceCreamStore/webroot/img/nutella ice cream.jpg" alt="nutella ice cream" style="width:100%">
      <h3>Nutella Ice Cream</h3>
      <h4>RM18.90</h4>
      <p>Nutella is a chocolate hazelnut spread. Much like you grind peanuts for peanut butter, here you grind hazelnuts and cocoa for Nutella. If you love Nutella you definitely need to try this amazing Nutella ice cream , a perfect chocolaty treat for summer. The taste is beyond words. </p>
    </div>
    <div class="w3-quarter">
      <img src="/IceCreamStore/webroot/img/salted caramel ice cream.jpg" alt="salted caramel ice cream" style="width:100%">
      <h3>Salted Caramel Ice Cream</h3>
      <h4>RM17.90</h4>
      <p>Our Sea Salt Caramel ice cream starts with our original velvety smooth sweet cream ice cream.This luxurious ice cream is the ideal balance of sweet yet salty and rich yet light.The combination of the decadent texture with the salty kick is just sublime!</p>
    </div>
    <div class="w3-quarter">
      <img src="/IceCreamStore/webroot/img/strawberry cheesecake.jpg" alt="strawberry cheesecake" style="width:100%">
      <h3>Strawberry Cheesecake</h3>
      <h4>RM21.90</h4>
      <p>For strawberry cheesecake lovers who’ve always wanted to have their cheesecake & scoop it, too, we’ve created a flavor jam-packed with strawberry cheesecake-greatness & a fantastic graham-cracker swirl.</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Us</h3><br>
    <img src="/IceCreamStore/webroot/img/logo.jpg" alt="Us" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>A touch of frost, makes your heart soft</b></h4>
      <h6><i>Only serve the best product for the best out there</i></h6>
      <p>We, The Frostbite IceCream Shop, founded in 2012 by a group of 4 entrepenuers and businessmen who seeks to accomplish the goal of owning ice cream shop and manufacture our own 
ice cream invention so that people can enjoy what ice cream can be made with top careness and love. What matters the most to us is that people can enjoy our own version of ice creams with 
our own unique and secret ingredients that are certifited Halal and safe for consumption. With the grand opening of our latest branch at Arau, we are proudly to announce
that we have exceed more than 8 branches across Peninsular Malaysia. Our goal is to have an establishment at every district in Malaysia including oversea such as Singapore, Indonesia 
and Thailand. We will always come up with new and unthought creation for our ice cream so that customers all around can experience new enjoyment for their taste buds to handle and we will 
persuade you to eat our ice cream more and more till Frostbite appears in you.</p>
    </div>
  </div>
  <hr>
  
  <hr id="contact">
  <!-- Contact Section -->
  <h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

  

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <form action="/customer">
    <input type="submit" value="Go" />
</form>
  </form>
</div>

  <hr>
  

  
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
