<?php 
include('admin_header.php');
include("../database/db_connection.php");



if(isset($_GET["success"])) {
  echo '<div class="alert alert-success text-center">Product deleted successfully</div>';
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
  <h1>Delete Products <span><i class="bi bi-trash-fill"></i></span></h1>
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



</main>
<!--Footer---->
<footer class="mt-5" id="contact"> 
    <div class="container-fluid mt-3 bg-dark text-center">
  <div class="row"> 
  <br>
  <br>
  <p style="color: white;">Back to top<a href="#top"><i class="bi bi-arrow-up-circle-fill" style="font-size: 29px; margin-left: 5px;"></i></a></p>
  <br>
  <p style="color: white;">Developed by <a href="https://www.chandalalawebdev.com" target="blank" style="text-decoration: none">Chandalala</a></p>
 </div>

</footer>
<!---End footer--->
     <!---Bootstrap JS--->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>


  <!---J Query-->
 <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


 <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

       <!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!--custom JS-->
    <script src="deleteProduct.js"></script>
    <script src="search.js"></script>

</body>
</html>