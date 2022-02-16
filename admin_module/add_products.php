<?php 
include('admin_header.php');
include("../database/db_connection.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"] == "POST") {
   
       $file = $_FILES['p_image'];
      $p_name = test_input($_POST["p_name"]);
      $p_category = test_input($_POST["p_category"]);
      $p_price = test_input($_POST["p_price"]);
      $p_date = test_input($_POST["p_date"]);

      $sql = "INSERT INTO `products` (`product_name`, `product_category`, `product_price`, `registration_date`) VALUES ('$p_name', '$p_category', '$p_price', '$p_date');";
      if(mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success text-center'>Product added Succesfully</div>";
     }

    $fileName = $_FILES['p_image']['name'];
    $fileTmpName = $_FILES['p_image']['tmp_name'];
    $fileSize = $_FILES['p_image']['size'];
    $fileError = $_FILES['p_image']['error'];
    $fileType = $_FILES['p_image']['type'];


    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(isset($file) && in_array($fileActualExt, $allowed)) {
       if($fileError === 0) {
           if($fileSize < 500000) {
             $fileNameNeww = uniqid('', true).".".$fileActualExt;
             $fileDestt = 'uploads/'.$fileNameNeww;
             move_uploaded_file($fileTmpName, $fileDestt);
 
             $sql_two = "UPDATE `products` SET `product_image` = '$fileNameNeww' WHERE `product_name` = '$p_name';";     
             if(mysqli_query($conn, $sql_two)) {
                echo "";
             } else{
                echo "<div class='alert alert-danger text-center'>There was an error uploading your file</div>";
             }
           } else {
            echo "error uploading file3";
           }
       } else {
         echo "error uploading file1";
       }
    } else{

       $sql_two = "UPDATE `products` SET `product_image` = 'defaultImage.png' WHERE `product_name` = '$p_name';";     
             if(mysqli_query($conn, $sql_two)) {
                echo "";
             } else{
                echo "<div class='alert alert-danger text-center'>There was an error uploading your file</div>";
             }
  }
    }
?>
<style>
    #add-product {
        width: 50%;
    }

    @media(max-width:991px) {
	 #add-product{
		 width: 100%;
	 }
 }
</style>
<section>
    <div class="container text-center" id="add-product">
        <h1>Add New Products <span><i class="bi bi-plus-circle-fill"></i></span></h1>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="pName" class="form-label">Name</label>
        <input type="text" class="form-control" id="pName" name="p_name" placeholder="product name">
        </div>
        <div class="mb-3">
        <label for="pCategory" class="form-label">Category</label>
        <select name="p_category" id="pCategory" class="form-control">
        <option value="" disabled selected>choose category</option>
            <option value="Men">Men</option>
            <option value="Women">Women</option>
            <option value="Children">Children</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="pPrice" class="form-label">Price</label>
        <input type="text" class="form-control" id="pPrice" name="p_price" placeholder="product price">
        </div>
        <div class="mb-3">
        <label for="pImage" class="form-label">Image</label>
        <input type="file" class="form-control" id="pImage" name="p_image">
        </div>
        <div class="mb-3">
        <label for="pDate" class="form-label">Registration Date</label>
        <input type="date" class="form-control" id="pDate" name="p_date">
        </div>
        <button type="submit" name="submit" class="btn btn-dark">Add Product</button>
        </form>

    </div>
</section>

<?php 
include('admin_footer.php');
?>