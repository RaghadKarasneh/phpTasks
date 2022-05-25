<?php

    // class SixGrade {
    //     public $name;
    //     private $age=13;
    //     public $eyeColor;
    
        

        
    //     public function __construct($name,$eyeColor){
    //         $this->name = $name;
    //         $this->eyeColor = $eyeColor;
    //        echo $this->get_name(). '<br>';
    //        echo $this->get_age(). "<br>";
    //        echo $this->get_eyeColor(). '<br>';
    //     }

    //     public function  get_name (){
    //         return  $this->name;
    //     }
    //     public function get_age(){
    //        return $this->age;
    //         // return $this->$p_age;
    //     }
    //     public function get_eyeColor(){
    //         return $this->eyeColor;
    //     }


    // }

    // echo "hadi info:".'<br>';
    // $hadi = new SixGrade('hadi','black');
  
    // echo "duaa info:".'<br>';
    // $Dua = new SixGrade('Dua','Green');
   

    // echo "dyar info:".'<br>';
    // $dyar = new SixGrade('dyar','Green');

    header("Content-Type:application/json");
    include('Configration/connection.php');
    
    $query = "SELECT * FROM employees";
    $result = mysqli_query($conn,$query);

   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
   {


$emplyeeData[] = array (

'emp_id' => $row['emp_id'],
    'emp_name' => $row['emp_name'],
    'emp_email' => $row['emp_email'],
    'emp_img' => $row['emp_img'],
    'emp_salary' => $row['emp_salary'],
    'emp_address' => $row['emp_address'],
    'emp_department' => $row['emp_department'],



);


    $response["status"] = "true";
    $response["message"] = "emplyeeData";
    $response["employees"] = $emplyeeData;


}

echo json_encode($response); exit;
?>



    ?>