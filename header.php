<html>
<head>
  <meta name="<?php echo $meta_name;?>" content="<?php echo $content;?>">
    <title><?php echo $title;?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
    <link href="stylesheets/styles.css" rel="stylesheet" type="text/css" /> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">


  </head>

  <body>
   <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="index.php">JAMES FRANKLIN MARKETING</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li <?php echo ($page == 'index') ? "class='active'" : ""; ?> ><a href="index.php">Home</a></li>
                <li <?php echo ($page == 'about') ? "class='active'" : ""; ?> ><a href="about.php">About Us</a></li>
                <li <?php echo ($page == 'contact_us') ? "class='active'" : ""; ?> ><a href="contact_us.php">Contact</a></li>
                <li <?php echo ($page == 'privacy') ? "class='active'" : ""; ?> ><a href="privacy.php">Privacy Policy</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown" <?php echo ($page == 'blog') ? "class='active'" : ""; ?> >
                  <a href="blog.php" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Web Design</a></li>

                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
    <a href="#top"></a>



  </div>