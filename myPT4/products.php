<?php
  include_once 'products_crud.php';
  include_once 'logged_in.php';
  include_once 'database.php';
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Zul's Mighty Car Radio System : Products</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bg2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


          <!-- Modal Script -->
          <script type="text/javascript">

           function openModal(cpid){
             $('.modal-body').load('products_details.php?pid='+cpid,function(){
                  $('#myModal').modal({show:true});
              });
           }

          </script>

</head>
<body>

<?php include_once 'nav_bar.php'; ?>

<div class="container-fluid">
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Create New Product</h2>
      </div>
    <form action="products.php" method="post" class="form-horizontal">

        <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">Product ID : </label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <input name="pid" type="text" class="form-control" id="productid" placeholder="Product ID" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>"required> 
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <input name="pid" type="text" class="form-control" id="productid" placeholder="Product ID" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>"required> 
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <input name="pid" type="text" class="form-control" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>"> 
        <?php } ?>

        </div>
        </div>
        <div class="form-group">
          <label for="productname" class="col-sm-3 control-label">Product Name : </label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>
      <input name="name" type="text" class="form-control" id="productname" placeholder="Product Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"required>  
        <?php } if($_SESSION['role'] == "Admin"){ ?>
      <input name="name" type="text" class="form-control" id="productname" placeholder="Product Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"required> 
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
      <input name="name" type="text" class="form-control" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"> 
        <?php } ?>

        </div>
        </div>
        <div class="form-group">
          <label for="productprice" class="col-sm-3 control-label">Product Price : </label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>
      <input name="price" type="text" class="form-control" id="productprice" placeholder="Product Price" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>"required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
      <input name="price" type="text" class="form-control" id="productprice" placeholder="Product Price" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>"required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
      <input name="price" type="text" class="form-control" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>">
        <?php } ?>

        </div>
        </div>
        <div class="form-group">
          <label for="productsize" class="col-sm-3 control-label">Product Size : </label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>      
      <input name="size" type="text" class="form-control" id="productsize" placeholder="Product Size" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_size']; ?>"required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
      <input name="size" type="text" class="form-control" id="productsize" placeholder="Product Size" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_size']; ?>"required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
      <input name="size" type="text" class="form-control" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_size']; ?>">
        <?php } ?>

        </div>
        </div>
        <div class="form-group">
          <label for="producttype" class="col-sm-3 control-label">Product Type : </label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>      
      <input name="type" type="text" class="form-control" id="producttype" placeholder="Product Type" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_type']; ?>"required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
      <input name="type" type="text" class="form-control" id="producttype" placeholder="Product Type" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_type']; ?>"required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
      <input name="type" type="text" class="form-control" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_type']; ?>">
        <?php } ?>

        </div>
        </div>
        
        <div class="form-group">
          <label for="productbrand" class="col-sm-3 control-label">Product Brand : </label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>      
      <input name="brand" type="text" class="form-control" id="productbrand" placeholder="Product Brand" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_brand']; ?>"required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
      <input name="brand" type="text" class="form-control" id="productbrand" placeholder="Product Brand" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_brand']; ?>"required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
      <input name="brand" type="text" class="form-control" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_brand']; ?>">
        <?php } ?>

        </div>
        </div>

        <div class="form-group">
          <label for="productdesc" class="col-sm-3 control-label">Product Description : </label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>      
      <input name="description" type="text" class="form-control" id="productdesc" placeholder="Product Description" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_description']; ?>"required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
        <input name="description" type="text" class="form-control" id="productdesc" placeholder="Product Description" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_description']; ?>"required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
      <input name="description" type="text" class="form-control" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_description']; ?>">
        <?php } ?>

        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">

        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
          <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>
          <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <?php } ?>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
          <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>
          <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <?php } ?>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <button class="btn btn-default" onclick=" confirm('You do not have right to add product')" type="reset"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        <?php } ?>

      </div>
      </div>
    </form>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>Products List</h2>
      </div>
      <table class="table table-striped table-bordered">
      <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Type</th>
        <th>Brand</th>
        <th></th>
      </tr>
      <?php
      // Read
      $per_page = 10;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_products_a166007_pt2 LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>   
      <tr>
        <td><?php echo $readrow['fld_product_num']; ?></td>
        <td><?php echo $readrow['fld_product_name']; ?></td>
        <td><?php echo $readrow['fld_product_price']; ?></td>
        <td><?php echo $readrow['fld_product_type']; ?></td>
        <td><?php echo $readrow['fld_product_brand']; ?></td>
        <td>

        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <!-- Trigger the modal with a button -->
          <a onclick="openModal('<?php echo $readrow['fld_product_num']; ?>'); return false;" class="btn btn-warning btn-xs" role="button">Details</a>

          <!-- Modal Page-->
          <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Product Details</h4>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End of Modal -->

          <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-success btn-xs" role="button"> Edit </a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <!-- Trigger the modal with a button -->
          <a onclick="openModal('<?php echo $readrow['fld_product_num']; ?>'); return false;" class="btn btn-warning btn-xs" role="button">Details</a>

          <!-- Modal Page-->
          <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Product Details</h4>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End of Modal -->

          <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-success btn-xs" role="button"> Edit </a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <!-- Trigger the modal with a button -->
          <a onclick="openModal('<?php echo $readrow['fld_product_num']; ?>'); return false;" class="btn btn-warning btn-xs" role="button">Details</a>

          <!-- Modal Page-->
          <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Product Details</h4>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End of Modal -->
          
          <a onclick=" confirm('You do not have right to edit product : <?php echo $readrow['fld_product_num']; ?>');" class="btn btn-danger btn-xs" role="button"> Edit </a>
          <a onclick=" confirm('You do not have right to delete product : <?php echo $readrow['fld_product_num']; ?>');" class="btn btn-danger btn-xs" role="button">Delete</a>
        <?php } ?>

        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
 
    </table>
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_products_a166007_pt2");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"products.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"products.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </div>
</div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>