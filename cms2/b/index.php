<?php
require "connect.php";
$ID = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM posts WHERE ID = $ID");
$query->execute();
while ($posts = $query->fetch()) { 
  $headline = $posts[1];
  $text = $posts[2];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <style>
    /* Reset styles */
    body{ 
      background-color: white; 
      box-sizing: border-box; 
      color:black;
      font-family: arial;
    }

      h1, h2, h3, h4, h5, h6, p, img {
	padding:8px;
}
div{

}
*, *:before, *:after {
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box !important;
	-moz-box-sizing: border-box !important;
	-ms-box-sizing: border-box !important;
	box-sizing: border-box !important;
}
/* Clear floats after the columns */
.row:after {content: ""; display: table;  clear: both;}
.column0 {float: left; width: 100%; }
.column  {float: left; width: 50%;  }
.column3 {float: left; width: 33.33%; }
.column10{float: left; width: 10%; }
.column20{float: left; width: 20%; }
.column30{float: left; width: 30%; }
.column40{float: left; width: 40%; }
.column50{float: left; width: 50%; }
.column60{float: left; width: 60%; }
.column70{float: left; width: 70%; }
.column80{float: left; width: 80%; }
.column90{float: left; width: 90%; }

/* Responsive layout - makes the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
.column0 {width: 100%; }
.column  {width: 100%; }
.column3 {width: 100%; }
.column10{width: 100%; }
.column20{width: 100%; }
.column30{width: 100%; }
.column40{width: 100%; }
.column50{width: 100%; }
.column60{width: 100%; }
.column70{width: 100%; }
.column80{width: 100%; }
.column90{width: 100%; }
}


    /* Navbar styles */
    .navbar {
      background-color: #333;
      color: #fff;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }

   

    .navbar-toggle {
      display: none;
      font-size: 2em;
      cursor: pointer;
    }

    .navbar-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-end;
      align-items: center;
    }

    .navbar-link {
      margin-left: 20px;
      color: #fff;
      text-decoration: none;
      text-transform: uppercase;
      transition: opacity 0.2s;
    }

    .navbar-link:hover {
      opacity: 0.8;
    }

    /* Mobile styles */
    @media (max-width: 767px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar-toggle {
        display: block;
      }

      .navbar-links {
        display: none;
        width: 100%;
        margin-top: 20px;
      }

      .navbar-links.show {
        display: flex;
      }

      .navbar-link {
        display: block;
        margin: 10px 0;
      }
    }

    /* Tablet and desktop styles */
    @media (min-width: 768px) {
      .navbar {
        justify-content: space-between;
      }

      .navbar-toggle {
        display: none;
      }

      .navbar-links {
        display: flex;
        width: auto;
        margin: 0;
      }

      .navbar-link {
        margin: 0 20px;
      }
    }
    
  </style>
</head>
<body>
  <header class="navbar">
    
    <div class="navbar-toggle">&#9776;</div>
    <div class="navbar-links">
      <?php
      $query = $pdo->prepare("SELECT * FROM posts");
      $query->execute();
      while ($posts = $query->fetch()) { 
        echo '<a class="navbar-link" href="index.php?id='.$posts[0].'">'.$posts[1].'</a>';
      }
      ?>
    </div>
  </header>

  <main>
  
    <?php echo $text; ?>
  </main>

  <script>
    // Add click event listener to navbar toggle button
    var navbarToggle = document.querySelector('.navbar-toggle');
    navbarToggle.addEventListener('click', function() {
      // Toggle show class on navbar
      </script>

        
      </body>

      <?php 
      require "connection.php";
       require "footer.php";

       ?>