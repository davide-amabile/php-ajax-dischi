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
        <div class="ctn_img">
          <img src="<?php echo $key['poster'];?>" alt="">
        </div>
        <!-- stampa del titolo -->
        <h3><?php echo $key['title']; ?></h3>
        <!-- /stampa del titolo -->
        <!-- stampa autore -->
        <p><?php echo $key['author']; ?></p>
        <!--/ stampa autore -->
        <!-- stampo l'anno -->
        <p><?php echo $key['year']; ?></p>
        <!-- stampo l'anno -->
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
