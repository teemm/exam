

<div class="container">
<div class="row">
<?php foreach($result['results'] as $res) : ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo $res['thumbnail_standard'];?>" alt="...">
      <div class="caption">
           <h3><?php echo $res['title'] ?></h3>
        <p><?php echo $res['section'] ?></p>
        <hr>
         <h4>source</h4>
        <p><?php echo $res['source'] ?></p>
        <h4>type</h4>
        <p><?php echo $res['item_type'] ?></p>
        <hr>
         <p><a href="#" class="btn btn-primary" role="button">See More</a></p>
      </div>
    </div>
  </div>
<?php endforeach; ?> 

    
  </div>
  </div>

