<?php
include 'head.php';
include 'array.php';

;?>

<main>
  <!-- div wrapper -->
  <div class="wrapper">
    <div class="ctn_disk">
      <!-- inizio box -->
      <!-- inizio ciclo -->
      <?php foreach ($database as $key){ ?>
      <div class="box_disk">
        <h3><?php echo $key['title']; ?></h3>


      </div>
      <!-- fine box -->
      <?php } ?>
      <!-- fine ciclo -->
    </div>

  </div>
  <!--/ div wrapper -->
</main>


<?php
// chiusura pagina html
include 'closing.php';
 ?>
