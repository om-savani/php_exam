<?php
class Database {
    private $HOST = "localhost"; 
    private $USERNAME = "root";  
    private $PASSWORD = "";      
    private $DB = "exam"; 

    public function connect()
    {
        return mysqli_connect($this->HOST,$this->USERNAME,$this->PASSWORD,$this->DB);
    }

    public function insertTrain($name)
    {
        $conn = $this->connect();
        $query = "INSERT INTO train (name) VALUES ('$name')";

        return mysqli_query($conn,$query);
    }

    public function getTrainData() {
        $conn = $this->connect();
        $query = "SELECT * FROM train";
        return mysqli_query($conn, $query); 
    }

    public function deleteTrain($id){
        $conn = $this->connect();
        $query="DELETE FROM train WHERE train_id=$id";
        return mysqli_query($conn,$query);
    }

    
    public function getSingleTrain($id) {
        $conn = $this->connect();
        $query="SELECT * FROM train WHERE train_id=$id";
        return mysqli_query($conn,$query);    
    }

    public function updateTrain($id,$name){
        $conn = $this->connect();
        $query="UPDATE train SET name='$name' WHERE train_id=$id";
        return mysqli_query($conn,$query);
    }


    public function insertBooking($p_name,$train_id)
    {
        $conn = $this->connect();
        $query = "INSERT INTO bookings (p_name,train_id) VALUES ('$p_name',$train_id)";
        return mysqli_query($conn,$query);
    }
    
    public function getBookings() {
        $conn = $this->connect();
        $query = "SELECT * FROM bookings";
        return mysqli_query($conn, $query); 
    }

    public function deleteBookings($id){
        $conn = $this->connect();
        $query="DELETE FROM bookings WHERE p_id=$id";
        return mysqli_query($conn,$query);
    }

    
    public function getSingleBooking($id) {
        $conn = $this->connect();
        $query="SELECT * FROM bookings WHERE p_id=$id";
        return mysqli_query($conn,$query);    
    }

    public function updateBooking($id,$name){
        $conn = $this->connect();
        $query="UPDATE bookings SET p_name='$name' WHERE p_id=$id";
        return mysqli_query($conn,$query);
    }

}   
?>
