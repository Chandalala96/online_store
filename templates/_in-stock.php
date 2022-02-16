<?php 
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<style>
     #special-price .grid .grid-item {
    margin-right: 1.2rem;
    margin-top: 1rem;
}

@media(max-width: 991px) {
    #special-price .grid .grid-item{
      width: 100%;
      display:flex;
      flex-direction: column;
        align-items: center;
     
    }

    #special-price .grid .grid-item .product{
       
       
     /* width: 100%;
     margin: 0 auto; */
    }
}


</style>
<section id="special-price">
      <div class="container text-center">
        <h3><b>Items In Stock</b></h3>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
          <button class="btn is-checked" data-filter="*">All</button>
          <button class="btn" data-filter=".Men">Men</button>
          <button class="btn" data-filter=".Women">Women</button>
          <button class="btn" data-filter=".Children">Children</button>
        </div>

        <div class="grid">
            <?php 
               while($row = mysqli_fetch_assoc($result)) {  
            ?>
          <div class="grid-item <?=$row["product_category"]?> border">
           <div class="item py-2" style="width: 200px;">
            <div class="product font-rale">
              <a href="#"><img src='./admin_module/uploads/<?=$row["product_image"] ?? 'defaultImage.png'?>' alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6><?=$row["product_name"]?></h6>
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span><?=$row["product_price"]?></span>
                </div>
                <button type="submit" class="btn btn-dark">Add to Cart</button>
              </div>
            </div>
          </div>
          </div>
           <?php  } ?>
        </div>
      </div>
    </section>