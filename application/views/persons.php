  <div class="container-fluid">
  <h2 class="text-center" id="about">about us</h2>
<div class="jumbotron">

<div class="row">
   

<?php foreach ($result['results']['0']['multimedia'] as $per ) : ?>
  <div class="col-md-4 text-center persons">
    <img src="<?php echo $per['url']?>" class="img-responsive img-circle centerr" alt="Cinque Terre">
    <div class="text-center">
      <h4> copyright </h4>
      <p> <?php echo $per['copyright'] ?> </p>
      <h4> height,width </h4>
      <p> <?php echo $per['height'] ?> <?php echo $per['width'] ?> </p>
  </div></div>
<?php endforeach; ?>

</div>
</div>
</div>