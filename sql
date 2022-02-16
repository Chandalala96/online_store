CREATE TABLE admins(
   admin_id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
   firstname VARCHAR (255) NOT NULL,
   lastname VARCHAR (255) NOT NULL,
   phone_no INTEGER (11) NOT NULL,
   password VARCHAR NOT NULL
);

CREATE TABLE products(
   product_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
   product_name VARCHAR (255) NOT NULL,
   product_category VARCHAR (255) NOT NULL,
   product_price VARCHAR (255) NOT NULL,
   product_image VARCHAR (255) NOT NULL,
   registration_date VARCHAR (255) NOT NULL
)

$(document).ready(function(){
   console.log("Trap");
     $.ajax({
        type:'POST',
        url:'backend.php',
        
        success:function(data){
          $("#output").html(data);
        }
      });
    $("#search").keyup(function(){
       console.log("loaded");
      let data = $("#search").val();
      if(data.length == 0) {
           $.ajax({
        type:'POST',
        url:'backend.php',
        success:function(data){
          $("#output").html(data);
        }
      });
      } else if(data.length > 0) {
          // console.log(data);
      $.ajax({
        type:'POST',
        url:'backend.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
   
      }







--       <?php 
-- include("../database/db_connection.php");


-- if(!isset($_POST['name'])) {
--   $sql = "SELECT * FROM products;";
-- $result = mysqli_query($conn, $sql);
-- if(mysqli_num_rows($result)>0){
--   while ($row=mysqli_fetch_assoc($result)) {
--     echo "  <div class='grid-item".$row["product_category"]." border'>
--            <div class='item py-2' style='width: 200px;''>
--             <div class='product font-rale'>
--               <a href='#''><img src='uploads/".$row["product_image"] ?? 'defaultImage.png'."' alt='product1' class='img-fluid' id='p_img'></a>
--               <div class='text-center'>
--                 <p><b>Name</b>: ".$row["product_name"]."</p>
--                 <p><b>Category</b>: ".$row["product_category"]."</p>
--                 <p><b>Price</b>: ".$row["product_price"]."</p>
--                 <p><b>Date</b>: ".$row["registration_date"]."</p>
--                 <a href='editProductProcess.php?product_id=".$row["product_id"]."' class='btn btn-dark'>Edit</a>
--               </div>
--             </div>
--           </div>
--           </div>";
--   }
-- }
-- else{
--   echo "<tr><td>0 result's found</td></tr>";
-- }
-- } elseif(isset($_POST['name'])) {
--   $name = $_POST['name'];
--   $sql = "SELECT * FROM products WHERE product_name LIKE '%$name%'";
-- $result = mysqli_query($conn, $sql);
-- if(mysqli_num_rows($result)>0){
--   while ($row=mysqli_fetch_assoc($result)) {
--    echo "  <div class='grid-item".$row["product_category"]." border'>
--            <div class='item py-2' style='width: 200px;''>
--             <div class='product font-rale'>
--               <a href='#''><img src='uploads/".$row["product_image"] ?? 'defaultImage.png'."' alt='product1' class='img-fluid' id='p_img'></a>
--               <div class='text-center'>
--                 <p><b>Name</b>: ".$row["product_name"]."</p>
--                 <p><b>Category</b>: ".$row["product_category"]."</p>
--                 <p><b>Price</b>: ".$row["product_price"]."</p>
--                 <p><b>Date</b>: ".$row["registration_date"]."</p>
--                 <a href='editProductProcess.php?product_id=".$row["product_id"]."' class='btn btn-dark'>Edit</a>
--               </div>
--             </div>
--           </div>
--           </div>";
--   }
-- }
-- else{
--   echo "<tr><td>0 result's found</td></tr>";
-- }
-- }

#233008