
<!DOCTYPE html>
<html>
<head>
<title>Impacting a billion lives!</title>
<link rel="stylesheet" href="style2.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 10px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>
<section class="hero">


<div class="hero-inner">
<h1>Hallo AWS!</h1>
<h3>How my TAM assignment can impact a billion lives ?</h3>
<!-- Trigger/Open The Modal -->
<button id="myBtn" class="btn">Click to read my inspiration for this assignment !</button>




<form action ="main.php">
<button id = "myBtn" class="btn">Concept store.. </a>
</form>

</div>
</section>


<main>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>

<p><span data-preserver-spaces="true">I was tasked with an assignment by AWS to build an AMI as a part of my TAM assignment. What I wanted to do was to think beyond, to think boldly, and to solve a global problem. The problem I choose was based on&nbsp;</span><a class="editor-rtfLink" href="https://www.financialexpress.com/industry/sme/8-crore-retail-wholesale-traders-incur-rs-6-25-lakh-cr-business-loss-due-to-covid-restrictions/2248611/" target="_blank" rel="noopener"><span data-preserver-spaces="true">this article</span></a></p>
<p><span data-preserver-spaces="true">In Mar 2021, India was one of the most severely affected countries as a part of the second wave and over&nbsp;</span><strong><span data-preserver-spaces="true">80 MN Retailers in India had lost their livelihood, resulting in over 90 BN losses</span></strong><span data-preserver-spaces="true">&nbsp;today. Many of them had to shut down their shops.&nbsp;</span></p>
<p><span data-preserver-spaces="true">Many of these Retailers were from villages, did not have access to technology and when COVID stuck, they had to shut down their stores.&nbsp;</span></p>
<p><strong><span data-preserver-spaces="true">What if a "Digital Platform" was available at their disposal?.&nbsp;</span></strong><span data-preserver-spaces="true">As</span><strong><span data-preserver-spaces="true">&nbsp;</span></strong><span data-preserver-spaces="true">a part of this assignment, my goal is to develop an AMI that can quickly start and enable an E-Commerce website. A Website that can help these small retailers to stay relevant, to service their local community, and sustain.</span></p>
<p><span data-preserver-spaces="true">During this process, I worked and learned several concepts. I built something, improved it, further built, further improved. It was a vicious circle of learning and an exciting journey. Thus far, I have reached the following summary -&nbsp;</span></p>
<p><span data-preserver-spaces="true">1. Packer deployed, Docker enabled E-Commerce built on PHP (had MySQL, was not able to deploy it due to performance issues)</span></p>
<p><span data-preserver-spaces="true">2. CIS Security 1 enabled</span></p>
<p><span data-preserver-spaces="true">3. Built to run on t2.micro</span></p>
<p><span data-preserver-spaces="true">I have&nbsp;</span><strong><span data-preserver-spaces="true">tested them through different means for security, accessibility, and functionality.&nbsp;</span></strong><span data-preserver-spaces="true">I discovered several gaps, and fixed them, and then found more and fixed them.&nbsp;</span></p>
<p><span data-preserver-spaces="true">It was truly humbling experience, I would like to discuss more on this during my discussion with you.</span></p>
<p><span data-preserver-spaces="true">Thank you</span></p>
<p><span data-preserver-spaces="true">Arvind</span></p>

    
	
	</p>
  </div>

</div>
</main>
</body>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</html>