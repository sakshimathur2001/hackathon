<?php
    class crud{
        // private database object 
        private $db;

        //constructor to initialise private variable
        function __construct($conn)
        {
            $this->db = $conn;

        }
        public function insert(){
            try {
                //code...
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        public function getNgoenv(){
            $sql = "SELECT * FROM `tb_env` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgoage(){
            $sql = "SELECT * FROM `tb_age` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgoagri(){
            $sql = "SELECT * FROM `tb_agri` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgoah(){
            $sql = "SELECT * FROM `tb_ah` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgochild(){
            $sql = "SELECT * FROM `tb_child` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgodif(){
            $sql = "SELECT * FROM `tb_dif` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgoedu(){
            $sql = "SELECT * FROM `tb_edu` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgoenergy(){
            $sql = "SELECT * FROM `tb_energy` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgohiv(){
            $sql = "SELECT * FROM `tb_hiv` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgohumr(){
            $sql = "SELECT * FROM `tb_humr` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgoud(){
            $sql = "SELECT * FROM `tb_ud` ";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getNgowd(){
            $sql = "SELECT * FROM `tb_wd` ";
            $result = $this->db->query($sql);
            return $result;
        }
    }
?>