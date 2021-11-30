<?php
    class model_Pengumuman extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
        public function selectAllData($value='')
        {
        	$data = $this->db->get('list_pengumuman');
        	return $data->result_array();
        }
        public function insertData($tableName, $data){
            $resp = $this->db->insert($tableName,$data);
            return $resp;
        }
        public function deleteData($tableName, $data){
            $resp = $this->db->delete($tableName, $data);
        }
        public function cek_delete($table, $where){
            return $this->db->get_where($table, $where);
        }
    }
?>