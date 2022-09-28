<?php include "connection.php";

    class TodoList{
        public $id_list;
        public $tittle;
        public $state;

        function __construct($id_list,$tittle,$state) {
            $this->id_list = $id_list;
            $this->tittle = $tittle;
            $this->state = $state; 
        }

        function addtodolist(){
            $sql = "INSERT INTO list (tittle,state) VALUES ('$this->tittle',$this->state)";
            $GLOBALS["conn"]->query($sql);
            }
        function deletetodo(){
            $sql = "DELETE FROM list WHERE id_list = $this->id_list";
            $GLOBALS["conn"]->query($sql);
            }

        function edittodo(){
            $sql = "UPDATE list SET tittle='$this->tittle' WHERE id_list =$this->id_list";
            $GLOBALS["conn"]->query($sql);
            }
        }

        if(isset($_POST["submit"])){
                $new_obj = new TodoList($_POST['tittle'],0);
                $new_obj->addtodolist();
                echo 'record added';

        } 
        if(isset($_POST["delete"])){
                $new_obj = new TodoList($_POST['id_list'],Null,Null);
                $new_obj->deletetodo();
                echo 'record deleted';
        } 

        if(isset($_POST["update"])){
                $new_obj = new TodoList($_POST['id_list'],$_POST['tittle'],Null);
                $new_obj->edittodo();
                echo 'record ypdated';

        } 

 ?>