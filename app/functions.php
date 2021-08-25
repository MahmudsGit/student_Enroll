<?php
    class stdFunction{
        public $conn;
        public function __construct(){
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "std_en";

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if (!$this->conn){
                die("Database connection error!");
            }
        }
        function userLogin($data){

            $user_email = $data['user_email'];
            $user_password = md5($data['user_password']);

            $query = "SELECT * FROM `user` WHERE `user_email`= '$user_email' AND `user_password`='$user_password' ";

            if (mysqli_query($this->conn, $query)){
                $result = mysqli_query($this->conn, $query);
                $userInfo = mysqli_fetch_assoc($result);
                if ($userInfo){
                    $_SESSION['user_id'] = $userInfo['user_id'];
                    $_SESSION['user_name'] = $userInfo['user_name'];

                    $msg = "Loged in as ".$_SESSION['user_name'];
                    return $msg;
                }else{
                    $errmsg = "Your Email or Password is Incerrect!";
                    return $errmsg;
                }
            }

        }
        function logOut(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_name']);
            session_destroy();
        }

        function enrollStudent($data){
            $first_name = $data['first_name'];
            $last_name = $data['last_name'];
            $school_name = $data['school_name'];
            $roll_no = $data['roll_no'];
            $class_id = $data['class_id'];
            $tution_fee = $data['tution_fee'];
            $paid = $data['paid'];
            $phone = $data['phone'];
            $address = $data['address'];
            $picture = $_FILES['picture']['name'];
            $picture_tmp = $_FILES['picture']['tmp_name'];
            $picture_size = $_FILES['picture']['size'];
            $picture_extention = pathinfo($picture,PATHINFO_EXTENSION);
            $picture_directory = 'uploads/students/'.$picture;

            if ($first_name == '' or $last_name == '' or $school_name == '' or $roll_no == '' or $class_id == '' or $paid == '' or $phone == '' or $address == ''){
                $msg = "please Fillup all Filled!";
                return $msg;
            }else{
                if ($picture_extention == 'jpg' or $picture_extention == 'JPG' or $picture_extention == 'jepeg'){
                    if ($picture_size <= 2097152){
                        $query = "INSERT INTO `students`(`first_name`, `last_name`, `school_name`, `roll_no`, `class_id`, `tution_fee`, `paid`, `phone`, `picture`, `address`) VALUES ('$first_name','$last_name','$school_name','$roll_no','$class_id','$tution_fee','$paid','$phone','$picture','$address')";
                        if (mysqli_query($this->conn, $query)){
                            move_uploaded_file($picture_tmp, $picture_directory);
                            $msg  = "New Student Successfully Enrolled";
                            return $msg;
                        }else{
                            $msg  = "Information not Saved. Error!";
                            return $msg;
                        }
                    }else{
                        $msg  = "image file is too big!";
                        return $msg;
                    }
                }else{
                    $msg  = "Select an Image File!";
                    return $msg;
                }
            }
        }

        function stdList($class_id){
            $query = "SELECT * FROM `students` WHERE `class_id` = $class_id";

            if (mysqli_query($this->conn, $query)){
                $stdData = mysqli_query($this->conn, $query);
                return $stdData;
            }
        }

        function stdLDetail($id){
            $query = "SELECT * FROM `students` WHERE `id` = $id";

            if (mysqli_query($this->conn, $query)){
                $stdData = mysqli_query($this->conn, $query);
                return $stdData;
            }
        }

        function savePaid($data, $id){
            $query = "UPDATE `students` SET `paid`='$data' WHERE `id`= $id";
            if (mysqli_query($this->conn, $query)){
                $msg  = "Update Paid Information";
                return $msg;
            }
        }

        function clearStudent($clsId){
            $query = "DELETE FROM `students` WHERE `class_id`= $clsId";
            if (mysqli_query($this->conn, $query)){
                $msg  = "cleared";
                return $msg;
            }
        }



    }
?>