<?php 
    require_once('model.php');

    class students extends model{
        protected $name;
        protected $lastname;
        protected $dni;
        protected $email;

        public function __construct(){
            parent::__construct();
        }

        public function add($name,$lastname,$dni,$email){
            $sql="INSERT INTO students(nameStudent,lastname,dni,email) VALUES($name,$lastname,$dni,$email)";
            $resultado=$this->_db->query($sql);

            if(!$resultado){

                echo "Datos no ingresados";
                echo $resultado;
            }else{
                return $resultado;
                $resultado->close();
                $this->_db->close();
            }
        }

        public function list(){
            $sql="SELECT * FROM students";
            $resultado=$this->_db->query($sql);
            $registers=$resultado->fetch_all(MYSQLI_ASSOC);


            if($registers){
                return $registers;
            }
            $registers->close();
        }

        public function del($id){
            $sql="DELETE FROM students WHERE id='".$id."'";
            $delete=$this->_db->query($sql);
            
            if($delete){
                return $delete;
                $delete->close();
                $this->_db->close();
            }
        }



    }
?>