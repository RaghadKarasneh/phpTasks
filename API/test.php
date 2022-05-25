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
    
        $query = "SELECT * FROM `employees`";
        $result = mysqli_query($conn,$query);
       while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) //MYSQLI_ASSOC: placing the data from the database into an associative array. 
    {
        $emplyeeData['emp_id'] = $row['emp_id'];
        $emplyeeData['emp_name'] = $row['emp_name'];
        $emplyeeData['emp_img'] = $row['emp_img'];
        $emplyeeData['emp_email'] = $row['emp_email'];
        $emplyeeData['emp_email'] = $row['emp_address'];
        $emplyeeData['emp_email'] = $row['emp_department'];
        $emplyeeData['emp_salary'] = $row['emp_salary'];
    
        $response["status"] = "true";
        $response["message"] = "emplyeeData";
        $response["employees"] = $emplyeeData;
    }
    
    echo json_encode($response); //convert PHP array or object into JSON representation.
  



    ?>