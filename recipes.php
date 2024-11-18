<?php
  
  $category_id = $_GET['id'];
  $Recipe = new Recipe($Conn);
  $recipes = $Recipe->getAllRecipes($category_id);
?>

<div class="container">

  <h1 class="mb-4 pt-4 pb-2">Recipes</h1>

  <p>Browse our wide range of lunch recipes below.</p>

  <div class="row">
      
    <?php foreach($recipes as $recipe) { ?>

    <div class="col-md-3">
            
      <div class="recipe-card">
                
        <div class="recipe-card-image" style="background-image: url('./images/recipe-images/<?php echo $recipe['recipe_image']; ?>');"
            
          <a href="index.php?p=recipe&id=<?php echo $recipe['recipe_id']; ?>"></a>
              
        </div>
                
        <a href="index.php?p=recipe&id=<?php echo $recipe['recipe_id']; ?>"><h3><?php echo $recipe['recipe_name']; ?></h3></a>
            
      </div>
    </div>

    <?php } ?>

  </div>

</div>