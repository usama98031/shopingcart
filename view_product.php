<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <!---link css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
    <?php include('header.php')?>
    <!---table--->
    <div class="container">
        <section class="display_product">
           
                    <?php
$display_product=mysqli_query($conn,"select * from `products`");
$num=1;
if(mysqli_num_rows($display_product)>0){
    echo " <table>
                <thead>
                    <th>S NO</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>
                </thead>
                <tbody>";
    while($row=mysqli_fetch_assoc($display_product)){
        ?>
        <tr>
        <td><?php echo $num ?></td>
        <td><img src="images/<?php echo $row['image']?>"
         alt=<?php echo $row['name']?>></td>
        <td><?php echo $row['name'] ?></td>
      <td>
          <a href="delete.php?delete=<?php echo $row['id'] ?>"
           class="delete_product_btn" onclick="return confirm
           ('Are you sure you want to delete this product');">
           <i class="fas fa-trash"></i></a>
          <a href="" class="update_product_btn"><i class="fas fa-edit"></i></a>
      </td>
     </tr>
     
     <?php
     $num++;
    }

}else{
    echo "<div clas='empty_text'>No product Available</div>";
}
                    ?>
                  
                </tbody>
            </table>
        </section>
    </div>

    
</body>
</html>