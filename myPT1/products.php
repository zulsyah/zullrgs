<!DOCTYPE html>
<html>
<head>
  <title>Zul's Mighty Car Radio System : Products</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="products.php" method="post">
      <table>
        <tr>
          <td>Product ID:</td>
          <td><input name="pid" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>"> </td>
        </tr>
        <tr>
          <td>Name:</td>
          <td><input name="name" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"></td>
        </tr>
        <tr>
          <td>Price (RM):</td>
          <td><input name="price" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_price']; ?>"></td>
        </tr>
        <tr>
          <td>Size (CM):</td> 
          <td><input name="size" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_size']; ?>"></td>
        </tr>
        <tr>
          <td>Type:</td>
          <td>
            <select name="Type">
              <option value="Cabinet&Drawer"               <?php if(isset($_GET['edit'])) if($editrow['fld_type']=="Cabinet&Drawer") echo "selected"; ?>>Cabinet&Drawer</option>
              <option value="Candle holders & candles"     <?php if(isset($_GET['edit'])) if($editrow['fld_type']=="Candle holders & candles") echo "selected"; ?>>Cabinet&Drawer</option>
              <option value="Chair&Sofa"               <?php if(isset($_GET['edit'])) if($editrow['fld_type']=="Chair&Sofa") echo "selected"; ?>>Chair&Sofa</option>
              <option value="Frames&Picture" 
              <?php if(isset($_GET['edit'])) if($editrow['fld_type']=="Frames&Picture") echo "selected"; ?>>Frames&Picture</option>
              <option value="Lighting" 
              <?php if(isset($_GET['edit'])) if($editrow['fld_type']=="Lighting") echo "selected"; ?>>Lighting</option>
              <option value="Mirrors" 
              <?php if(isset($_GET['edit'])) if($editrow['fld_type']=="Mirrors") echo "selected"; ?>>Mirrors</option>
              <option value="Plant,plant pots&stands"
              <?php if(isset($_GET['edit'])) if($editrow['fld_type']=="Plant,plant pots&stands") echo "selected"; ?>>Plant,plant pots&stands</option>
            </select>
          </td>
        </tr>
        <tr>
          <td> Made In:</td>
          <td>
            <input name="Manufacturer" type="radio" value="China"> China<br>
            <input name="Manufacturer" type="radio" value="Indonesia"> Indonesia <br>
            <input name="Manufacturer" type="radio" value="Japan"> Japan <br>
            <input name="Manufacturer" type="radio" value="Korea"> Korea <br>
            <input name="Manufacturer" type="radio" value="Malaysia"> Malaysia <br>
            <input name="Manufacturer" type="radio" value="Thailand"> Thailand <br>
          </td>
        </tr>
        <tr>
          <td>Description:</td>
          <td><input nama="Description" type="text"></td>
        </tr>
      </table><br>
        <button type="submit" name="create">Create</button>
        <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr align="center">
        <td>ID</td>
        <td>Name</td>
        <td>Price(RM)</td>
        <td>Size(CM)</td>
        <td>Type</td>
        <td>Made In</td>
        <td>Description</td>
        <td></td>
      </tr>
      <tr>
        <td>P001</td>
        <td>9 inch Android Car Player</td>
        <td>200.00</td>
        <td>30x40x2</td>
        <td>Car Radio</td>
        <td>Malaysia</td>
        <td>Fits A4 size pictures if used with the mount. You can enhance and add depth to your picture by using the accompanying mount when you frame it.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P002</td>
        <td>NJUTNING</td>
        <td>35.00</td>
        <td>326x8x8</td>
        <td>Plant,plant pots&stands</td>
        <td>China</td>
        <td>A spicy scent of bergamot and tea with warm milk. These decorative scented sticks in a vase are ideal for creating a comfortable and pleasant atmosphere in places like halls, bathrooms and bedrooms.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P003</td>
        <td>ANTHURIUM</td>
        <td>49.00</td>
        <td>15x50</td>
        <td>Plant,plant pots&stands</td>
        <td>Thailand</td>
        <td>Decorate your home with plants combined with a plant pot to suit your style.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P004</td>
        <td>10.1 inch Android Car Player</td>
        <td>230.00</td>
        <td>30x17</td>
        <td>Car Radio</td>
        <td>Malaysia</td>
        <td>The warm light from the candle shines decoratively through the pattern on the lantern.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P005</td>
        <td>FEJKA</td>
        <td>25.00</td>
        <td>30x22</td>
        <td>Plant,plant pots&stands</td>
        <td>Indonesia</td>
        <td>FEJKA artificial potted plants that don’t require a green thumb. Perfect when you have better things to do than water plants and tidy up dead leaves. You’ll have everyone fooled because they look so real.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P006</td>
        <td>JUBLA</td>
        <td>30.00</td>
        <td>40x47x58</td>
        <td>Candle holders & candles</td>
        <td>Malaysia</td>
        <td>The candle burns with a clear and steady flame because it is made of 100% stearin.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P007</td>
        <td>NISSEDAL</td>
        <td>129.00</td>
        <td>40x150</td>
        <td>Mirrors</td>
        <td>Malaysia</td>
        <td>The timeless design works just as well in the bedroom as in the bathroom. Hang it vertically or horizontally – and if you mount the mirror with hinges you can hide keys and smaller things on hooks behind.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P008</td>
        <td>RIBBA</td>
        <td>35.00</td>
        <td>30x40</td>
        <td>Frames&Picture</td>
        <td>China</td>
        <td>Fits A4 size pictures if used with the mount. The mount enhances the picture and makes framing easy.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P009</td>
        <td>MOSSLANDA</td>
        <td>40.00</td>
        <td>115x12</td>
        <td>Frames&Picture</td>
        <td>Korea</td>
        <td>The picture ledge has a special groove to keep smaller frames at the perfect angle.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
      <td>P010</td>
        <td>KARMSUND</td>
        <td>249.00</td>
        <td>40x167</td>
        <td>Mirrors</td>
        <td>Korea</td>
        <td>You decide the style of this mirror by adding or removing the crown up top. Hang tomorrow’s outfit on the hooks and rail behind the mirror and enjoy a few more minutes of sleep in the morning.</td>
       
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>