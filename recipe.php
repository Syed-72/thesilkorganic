<?php
  
  $Recipe = new Recipe($Conn);
  $recipe_data = $Recipe->getRecipe($_GET['id']);

  if($_POST['rating']) {
    $Review = new Review($Conn);
    $Review->createReview([
        "recipe_id" => (int) $_GET['id'],
        "review_rating" => $_POST['rating']
    ]);
}
?>

        

<div class="container">
  <h1 class="mb-4 pt-4 pb-2"><?php echo $recipe_data['recipe_name']; ?></h1>
  
  <div class="row">
    <div class="col-md-6">

      <?php if($recipe_data['images']) { ?>

        <div class="row">
            
          <?php foreach($recipe_data['images'] as $image) { ?>
            
            <div class="col-md-4 pt-2">
              <div class="recipe-image mb-4" style="background-image: url('./images/recipe-images/<?php echo $image['recipe_image']; ?>');">
                <a href="./images/recipe-images/<?php echo $image['recipe_image']; ?>" data-lightbox="recipe-imgs"></></a>
              </div>
            </div>

          <?php } ?>

        </div>

      <?php } ?>  

    </div>
      
    <div class="col-md-6">
              
      <p><?php echo $recipe_data['recipe_instructions']; ?></p>

      <ul class="recipe-features">

        <li>
          
          <?php
            $Review = new Review($Conn);
            $avg_rating = $Review->calculateRating($_GET['id']);
            $avg_rating = round($avg_rating['avg_rating'], 1);
          ?>
        
          <li><i class="fas fa-star-half-alt"></i> <?php echo $avg_rating; ?> Stars</li>
        
        </li>

        <li><i class="far fa-clock"></i> <?php echo $recipe_data['recipe_time']; ?></li>
        <li><i class="fas fa-users"></i> <?php echo $recipe_data['recipe_servings']; ?> Servings</li>
        <li><i class="fas fa-dollar-sign"></i> <?php echo $recipe_data['recipe_price']; ?></li>
        <li><i class="fas fa-tags"></i> <?php echo $recipe_data['tags']; ?></li>

      </ul>

      <?php
            $Favourite = new Favourite($Conn);
            $is_fav = $Favourite->isFavourite($_GET['id']);

            if($is_fav) {
      ?>
              <button id="removeFav" type="button" class="btn btn-primary mb-3" data-recipeid="<?php echo $_GET['id']; ?>">Remove from favourites</button>
      <?php
            }else{
      ?>
              <button id="addFav" type="button" class="btn btn-primary mb-3" data-recipeid="<?php echo $_GET['id']; ?>">Add to favourites</button>
      <?php
            }
      ?>


    </div>

  </div>

  <h2>Leave a review</h2>

  <?php
        if(!$_SESSION['is_loggedin']){
  ?>
          <p>Unfortunately, only registered users can leave a review.</p>
  <?php
        }else{
  ?>
          <!-- login form here-->
          <form action="" method="post">
            <div class="form-group">
              <label for="rating">Rating</label>
              <select class="form-control" id="rating" name="rating">
                <option value="5">5 Star (Very Good)</option>
                <option value="4">4 Star (Good)</option>
                <option value="3">3 Star (Okay)</option>
                <option value="2">2 Star (Bad)</option>
                <option value="1">1 Star (Very Bad)</option>
              </select>
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
    
          </form>
  <?php
        }
  ?>

</div>