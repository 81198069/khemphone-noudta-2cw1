<?php include'header.php';?>

</div>
</div>


<div class="container">
<div class="properties-listing spacer">

<div class="row">


<div class="col-lg-10 col-sm-8 ">


<?php
require_once ('../vendor/autoload.php');
use App\Classes\RealEstate\RealEstate;
$real_estate = new RealEstate();
$singleData = $real_estate->viewSingleData($_GET['id']);
?>

<h2><?php echo $singleData->name ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <!-- Php code block 2 of 2 starts -->
        <?php
            $image = explode(",",$singleData->images);
            $image_count = count($image);
            $image_index = 0;
            while ($image_index<$image_count) {
                if ($image_index == 0) {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $image_index; ?>" class="active"></li>
                    <?php
                } else {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $image_index; ?>" class=""></li>
                    <?php
                }
                $image_index++;
            }
            ?>
      </ol>
      <div class="carousel-inner">

        <?php
            $image = explode(",",$singleData->images);
            $image_count = count($image);
            $i = 0;
            while ($i<$image_count){
                if($i == 0){
        ?>
        <!-- Item 1 -->
        <div class="item active">
          <img src="../resources/images/properties/<?php echo $image[$i]; ?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->
        <?php } else{ ?>
        <!-- Item 2 -->
         <div class="item">
           <img src="../resources/images/properties/<?php echo $image[$i]; ?>" class="properties" alt="properties" />
         </div>
         <?php
            }
            $i++;
            }
         ?>
         <!-- Php code block 2 of 2 ends -->
         <!-- #Item 2 -->

      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4></span> </h4>
  

  </div>


  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">₭ <?php echo $singleData->monthly_charges ?></p>

</div>


<div class="col-lg-12 col-sm-6 ">
        
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>