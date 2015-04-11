<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_model extends CI_Model {

	function get_total($parameter) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total');
            $this->db->from('tb_hakakses');
            $this->db->where($parameter);
            $query = $this->db->get();
            return (count($query->row_array()) > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total');
            $this->db->from('tb_hakakses');
            $query = $this->db->get();
            return (count($query->row_array()) > 0 ? $query->row()->Total : 0);
        }
    }

    function insert($data) {
        $this->db->insert('tb_hakakses', $data);
    }

    function delete($id) {
        $this->db->where('akses_id', $id);
        $this->db->delete('tb_hakakses');
    }

    function update($id, $data) {
        $this->db->where('akses_id', $id);
        $this->db->update('tb_hakakses', $data);
    }

    function select($data, $no) {
        $this->db->select('*');
        $this->db->from('tb_hakakses');
        $this->db->where($data);
        $this->db->limit($no);
        $query = $this->db->get();
        return (count($query->row_array()) > 0 ? $query : NULL);
    }
}

?>