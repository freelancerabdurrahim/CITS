<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Form test" ?></title>
</head>
<body>

  <?php
  if(isset($_POST['sdt_name'])){
    echo "My name is: " .$_POST['sdt_name'];
    echo  "My Ads is: " . $_POST['sdt_aadd'];
  }else{
    echo "kono name nai";
  }
    
  ?>

<form action="" method="POST">
  <input type="text" name="sdt_name" placeholder="type your name" id="">
  <br>
  <br>
  <input type="text" name="sdt_aadd" placeholder="type your address" id="">
  <br>
  <br>
  <input type="submit" value="submit">
</form>
  
</body>
</html>
