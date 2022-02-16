 <?php 
include("../database/db_connection.php");

$gang = "defaultImage.png";

if(sizeof($_POST) > 0 && $_POST["name"] == "search_product") {
  $item = $_POST['item'];
  $sql = "SELECT * FROM products WHERE product_name = '$item'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
  echo'<div class="row">';
  while ($row=mysqli_fetch_assoc($result)) {
   echo "
    <div class='post col-sm-4 text-center ".$row["product_category"]." border' style='margin: auto;'>
           <div class='card text-black' style='height:100%;'>
            <div class='card-body' style='display: flex; flex-direction: column;'>
              <a href='#''><img src='uploads/".$row["product_image"]."' alt='product1' class='img-fluid' id='p_img'></a>
              <div class='text-center'>
                <p><b>Name</b>: ".$row["product_name"]."</p>
                <p><b>Category</b>: ".$row["product_category"]."</p>
                <p><b>Price</b>: ".$row["product_price"]."</p>
                <p><b>Date</b>: ".$row["registration_date"]."</p>
                <a href='deleteProductProcess.php?product_id=".$row["product_id"]."' class='btn btn-dark'>Delete</a>
              </div>
            </div>
          </div>
          </div>
          ";

          
  }
  echo'</div>';
}
else{
    echo "<div class='alert alert-danger text-center'>No matching products</div>";
  }
}else if(!isset($_POST['name'])) {
  $sql = "SELECT * FROM products;";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo'<div class="row">';
  while ($row=mysqli_fetch_assoc($result)) {
    echo "
    <div class='post col-sm-4 text-center ".$row["product_category"]." border' style='margin: auto;'>
           <div class='card text-black' style='height:100%;'>
            <div class='card-body' style='display: flex; flex-direction: column;'>
              <a href='#''><img src='uploads/".$row["product_image"]."' alt='product1' class='img-fluid' id='p_img'></a>
              <div class='text-center'>
                <p><b>Name</b>: ".$row["product_name"]."</p>
                <p><b>Category</b>: ".$row["product_category"]."</p>
                <p><b>Price</b>: ".$row["product_price"]."</p>
                <p><b>Date</b>: ".$row["registration_date"]."</p>
                <a href='deleteProductProcess.php?product_id=".$row["product_id"]."' class='btn btn-dark'>Delete</a>
              </div>
            </div>
          </div>
          </div>
          ";
  }
  echo "</div>";
}
} elseif(isset($_POST['name']) && isset($_POST['name']) !== "search_product" ) {
  $name = $_POST['name'];
  $sql = "SELECT * FROM products WHERE product_name LIKE '%$name%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
  echo'<div class="row">';
  while ($row=mysqli_fetch_assoc($result)) {
   echo "
    <div class='post col-sm-4 text-center ".$row["product_category"]." border' style='margin: auto;'>
           <div class='card text-black' style='height:100%;'>
            <div class='card-body' style='display: flex; flex-direction: column;'>
              <a href='#''><img src='uploads/".$row["product_image"]."' alt='product1' class='img-fluid' id='p_img'></a>
              <div class='text-center'>
                <p><b>Name</b>: ".$row["product_name"]."</p>
                <p><b>Category</b>: ".$row["product_category"]."</p>
                <p><b>Price</b>: ".$row["product_price"]."</p>
                <p><b>Date</b>: ".$row["registration_date"]."</p>
                <a href='deleteProductProcess.php?product_id=".$row["product_id"]."' class='btn btn-dark'>Delete</a>
              </div>
            </div>
          </div>
          </div>
          ";

          
  }
  echo'</div>';
}
else{
    echo "<div class='alert alert-danger text-center'>No matching products</div>";
}
}