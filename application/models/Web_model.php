<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web_model extends CI_Model {

    function update($data) {
        $this->db->update('tb_web', $data);
    }

    function select() {
        $this->db->select('*');
        $this->db->from('tb_web');
        $query = $this->db->get();
        return (count($query->row_array()) > 0 ? $query->row() : NULL);
    }
}

?>