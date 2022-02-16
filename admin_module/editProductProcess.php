<?php 
include('admin_header.php');
include('../database/db_connection.php');

$product_id = $_GET["product_id"];
$defaultImg = "defaultImage.png";
$query = "SELECT * FROM products WHERE `product_id` = '$product_id';";
if($result = mysqli_query($conn, $query)) {
    $row = @mysqli_fetch_array($result);
    if(isset($row["product_image"])) {
        $defaultImg = false;
    }
  } else {
    echo "error"; 
  }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// if($_SERVER["REQUEST_METHOD"] == "POST") {
//   
//      }

     if (array_key_exists("update_product", $_POST)) {
        $file = $_FILES['p_image'];
        $p_name = test_input($_POST["p_name"]);
        $p_category = test_input($_POST["p_category"]);
        $p_price = test_input($_POST["p_price"]);
        $p_date = test_input($_POST["p_date"]);
  
        $sql = "UPDATE `products` SET `product_name`='$p_name',`product_category`='$p_category',`product_price`='$p_price',`registration_date`='$p_date' WHERE product_id = '$product_id';";
     
        $run = mysqli_query($conn, $sql);
        echo "<div class='alert alert-success text-center' id='alert' role='alert'>Product Updated!!</div>";

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
 
             $sql_two = "UPDATE `products` SET `product_image` = '$fileNameNeww' WHERE `product_id` = '$product_id';";     
             if(mysqli_query($conn, $sql_two)) {
                echo "";
             } else{
                echo "<div class='alert alert-danger text-center'>There was an error uploading your file</div>";
             }
           } else {
            echo "Your photo is too large";
           }
       } else {
         echo "error uploading file1";
       }
    } else {
         if($defaultImg == false) {
            "";
         } else if($defaultImg) {
           $sql_two = "UPDATE `products` SET `product_image` = '$defaultImg' WHERE `product_id` = '$product_id';";     
             if(mysqli_query($conn, $sql_two)) {
                echo "";
             } else{
                echo "<div class='alert alert-danger text-center'>There was an error uploading your file</div>";
             }
         }
        
    }

    header('Location: edit_products.php?success=yes');
    
      }

    
//}

?>

<section>
<div class="container text-center mt-3">
    <h1>Edit <?= $row["product_name"] ?> </h1>
    <div class="row">
        <div class="col-sm-6">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="pName" class="form-label">Name</label>
        <input type="text" class="form-control" id="pName" name="p_name" value="<?=$row["product_name"]?>">
        </div>
        <div class="mb-3">
        <label for="pCategory" class="form-label">Category</label>
        <select name="p_category" id="pCategory" class="form-control">
            <?php
              if($row["product_category"] == "Men") {
                  echo '<option value="Men" selected>Men</option>
                        <option value="Women">Women</option>
                        <option value="Children">Children</option>';
              } elseif($row["product_category"] == "Women") {
                  echo '<option value="Women" selected>Women</option>
                        <option value="Men">Men</option>
                        <option value="Children">Children</option>';
              } elseif($row["product_category"] == "Children") {
                  echo '<option value="Children" selected>Children</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>';
              } else{
                  echo '<option value="" disabled selected>choose category</option>';
              }
            ?>      
        </select>
        </div>
        <div class="mb-3">
        <label for="pPrice" class="form-label">Price</label>
        <input type="text" class="form-control" id="pPrice" name="p_price" value="<?=$row["product_price"]?>">
        </div>
        <div class="mb-3">
        <label for="pImage" class="form-label">Image</label>
        <input type="file" class="form-control" id="pImage" name="p_image">
        </div>
        <div class="mb-3">
        <label for="pDate" class="form-label">Registration Date</label>
        <input type="date" class="form-control" id="pDate" name="p_date" value="<?=$row["registration_date"]?>">
        </div>
        <button type="submit" name="update_product" class="btn btn-dark">Update Product</button>
        </form>

        </div>
        <div class="col-sm-6">
            <img src='uploads/<?=$row["product_image"] ?? 'defaultImage.png'?>' class="img-fluid">
        </div>
    </div>
</div>

</section>

<?php
include('admin_footer.php');
?>