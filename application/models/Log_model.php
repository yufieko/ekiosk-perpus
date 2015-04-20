<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {

	function get_total($parameter) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total');
            $this->db->from('tb_log');
            $this->db->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total');
            $this->db->from('tb_log');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function insert($data) {
        $this->db->insert('tb_log', $data);
    }

    function delete($id) {
        $this->db->where('log_id', $id);
        $this->db->delete('tb_log');
    }

    function update($id, $data) {
        $this->db->where('log_id', $id);
        $this->db->update('tb_log', $data);
    }

    function select($data, $no) {
        $this->db->select('*');
        $this->db->from('tb_log');
        $this->db->where($data);
        $this->db->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->result() : NULL);
    }
}

?>