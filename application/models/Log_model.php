<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {

	function get_total($parameter = array()) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_log')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_log');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function insert($data) {
        $this->db->insert('tb_log', $data);
    }

    function delete($id) {
        $this->db->where('log_id', $id)
            ->delete('tb_log');
    }

    function deleteAll() {
        $this->db->empty_table('tb_log');
    }

    function update($id, $data) {
        $this->db->where('log_id', $id)
            ->update('tb_log', $data);
    }

    function updateAll($data) {
        $this->db->update('tb_log', $data);
    }

    function select($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_log')
            ->where($data)
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }
}

?>