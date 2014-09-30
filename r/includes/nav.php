<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Kapski Painting, Inc.</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li ><a href="/"> Home </a></li>
            <li class="<?=$servicesClass?>"><a href="/services.php"> Services </a></li>
            <li class="<?=$workSamplesClass?>"><a href="/workSamples.php"> Work Samples </a></li>
    
            <li class="<?=$askSteveClass?>"><a href="/askSteve.php"><span class="askSteveMenu"> Ask Steve</span></a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Company Info <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="/companyInfo.php">About Us</a></li>
            <li><a href="/references.php">References</a></li>
            <li class="<?=$employmentClass?>"><a href="/employment.php"> Employment Opportunities</a></li>
            <li ><a href="/faq.php"> FAQ </a></li>
            </ul>
            
            </li>
            <li class="<?=$contactClass?>"><a href="/contact.php"> Contact Us </a></li>
            
            <li class="<?=$blogClass?>"><a href="/wp/"> Blog</a></li>
		</ul>
 <!--     <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>