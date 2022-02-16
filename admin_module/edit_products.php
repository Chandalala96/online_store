<?php 
  include('admin_header.php');

  if(isset($_GET["success"])) {
  echo '<div class="alert alert-success text-center">Product updated successfully</div>';
}

?>
  <style>
    
    #p_search {
        width: 50%;
    }

    #p_img{
        height: 200px;
    }

    @media(max-width:991px) {
   #p_search{
     width: 100%;
   }
     }
     #edit-product .grid .grid-item {
    margin-right: 1.2rem;
    margin-top: 1rem;
}

@media(max-width: 991px) {
    #edit-product .grid .grid-item{
      width: 100%;
      display:flex;
      flex-direction: column;
        align-items: center;
     
    }

    #edit-product .grid .grid-item .product{
       
       
     /* width: 100%;
     margin: 0 auto; */
    }
}   
</style>

<section>
<div class="container mt-5 text-center" id="p_search">
  <h1>Edit Products <span><i class="bi bi-gear-fill"></i></span></h1>
  <br>
  <h3>Search Product Database</h3>
  
    <div class="row" style="text-align: left;">
      <div class="col-sm-12">
      <label for="subject">Product Name</label>
        <input class="form-control" type="text" name="product_search" id="search" placeholder="Enter product name">
    </div>
    <button
    id="search_btn"
            name="search_product" 
            class="btn btn-dark mt-3"
            style="width: 350px;
                   margin: auto;">Search</button>
  </div>

  
  <br>
<br>
  <hr  style="background: black; border:1px solid black;">
</div>
</section>

<section id="edit-product">
      <div class="container text-center">
        <h3><b>Products</b></h3>
         <div>
         <button id="filter_button" style="background: white; border: none">All</button>
         <button id="filter_button0" class="Men" style="background: white; border: none">Men</button>
         <button id="filter_button1" class="Women" style="background: white; border: none">Women</button>
         <button id="filter_button2" class="Children" style="background: white; border: none">Children</button>
        </div>
        <br>
        <div class="grid">
      
        </div>
        
      </div>
    </section>


<script>

</script>

<?php 
  include('admin_footer.php');
?>