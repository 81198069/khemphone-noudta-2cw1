<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    
    
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">


<div class="hot-properties hidden-xs"></div>

</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result"></div>

</div>
<div class="row">


    <?php
    require_once ('../vendor/autoload.php');
    use App\Classes\RealEstate\RealEstate;
    $real_estate = new RealEstate();
    if(isset($_REQUEST['search'])){
        $allData = $real_estate->index();
      
        if(isset($_REQUEST['search']) )$allData =  $real_estate->search($_REQUEST);

        $availableKeywords=$real_estate->getAllKeywords();
        $comma_separated_keywords= '"'.implode('","',$availableKeywords).'"';
      


        if(isset($_REQUEST['search']) ) {
            $someData = $real_estate->search($_REQUEST);
            $serial = 1;
        }
      
    if(count($someData) <= 0){
        echo "<br>No Result Found";
    }
    foreach ($someData as $oneData){
        $image = explode(",",$oneData->images);
    ?>

      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="../resources/images/properties/<?php echo $image[0];?>" class="img-responsive" alt="properties">
        </div>
        <h4><a href="property-detail.php?id=<?php echo $oneData->id;?>"><?php echo $oneData->name;?></a></h4>
        <p class="price">Price: ₭<?php echo $oneData->monthly_charges;?></p>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $oneData->id;?>">View </a>
      </div>
      </div>
      <!-- properties -->
    <?php } } ?>

</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>