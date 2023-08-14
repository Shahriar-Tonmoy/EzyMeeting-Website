<?php
include 'dbConfig.php';
?>

<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">
    <?php
    $query = $db->query("SELECT * FROM logo WHERE status = '1'");
    if ($query->num_rows > 0) {
      while ($row = $query->fetch_assoc()) {
        $imageURL = $row['images'];
    ?>
        <a href="index.php" class="logo me-auto">
          <img src="admin/uploaded_logo/<?php echo $imageURL; ?>" alt="logo">
        </a>
    <?php }
    } ?>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#Explore-App">Explore App</a></li>
        <li><a class="nav-link scrollto" href="#software-summary">Summary</a></li>
        <li><a class="nav-link scrollto" href="#features">Features</a></li>

        <!-- <li><a class="nav-link scrollto" href="#video">Explore More</a></li> -->
        <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

    <!-- <a href="#video" class="get-started-btn scrollto">Get Started</a> -->
  </div>
</header>