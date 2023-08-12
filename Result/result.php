<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Result Sheet" ?></title>
</head>
<body>

    <?php
        
        if(isset($_POST['submit_result'])){
            $st_marks= $_POST['st_mark'];
             $marks=$st_marks;

            if(empty($marks)){
                $error= "Input is Required";
            }else if(!is_numeric($marks)){
                $error= "Input value is mustbe Number";
            }
            else{
                
                if($marks>=90 & $marks<100){
                    $grade = "Grade Golde A+";
                }
                else if($marks>=80 & $marks<90){
                    $grade = "Grade is A+";
                }
                else if($marks>=70 & $marks<80){
                    $grade = "Grade is A";
                }
                else if($marks>=60 & $marks<70){
                    $grade = "Grade is B";
                }
                else if($marks>=50 & $marks<60){
                    $grade = "Grade is C";
                }
                else if($marks>=33 & $marks<50){
                    $grade = "Grade is D";
                }
                else if($marks<33){
                    $grade = "Grade is Failed";
                }
                else if($marks<0 OR $marks>100){
                    $error = "Invalid Number";
                }
                else{
                    $grade = "Invild Number";
                }

                if(isset($grade)){
                    echo $grade;
                }

               
            }

            
        }


    ?>


<p style="color: red;">
<?php 
    if(isset($error)){
        echo $error;
    }
?>
</p>



<form action="" method="POST">
    <input type="text" name="st_mark" placeholder="Input Student Marks" id="">
    <br>
    <br>
    <input type="submit" name="submit_result" value="Show Result">
</form>
    








</body>
</html>