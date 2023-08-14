<?php
    include 'dbConfig.php';
    $query = $db->query("SELECT * FROM hero_section_bg_image WHERE status = '1'");
    if ($query->num_rows > 0) {
       while ($row = $query->fetch_assoc()) {
         $imageURL = $row['images'];
    ?>


<section id="hero" style="background-image: url('admin/uploaded-hero-bg-images/<?php echo $imageURL ?>')" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class=" row">
        <div class="col-xl-6">
          <h1>Conduct your<span style="color: #5BC0F8;"> Meeting</span> in a</h1>
          <h1><span style="color: #5BC0F8;"> Convenient</span> way<span style="color: #5BC0F8;">.</span></h1>
          <h2>Forget all the
            traditional meeting systems that once done manually. No more tension and go for a new
            digital system. And here is introducing <strong>EzyMeeting</strong> </h2>
            <h2>Wanna get an experience of our app through a video?</h2>
          <a href="#video" class="btn-get-started scrollto">Let's go</a>
        </div>
      </div>
    </div>
  </section>

  <?php
    }
     }
     ?>