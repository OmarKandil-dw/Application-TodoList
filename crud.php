<?php

    class TodoList{
        public $id_list;
        public $tittle;
        public $state;

        function __construct($id_list,$tittle,$state) {
            $this->id_list = $id_list;
            $this->tittle = $tittle;
            $this->state = $state;
          }
          function get_ts() {
            return $this->id_list;
            return $this->tittle;
            return $this->state;
          }

    };
 ?>