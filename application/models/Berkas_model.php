<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas_model extends CI_Model {

	function get_total($parameter = array()) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_berkas')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_berkas');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function get_totaldownload() {
        $this->db->select('IFNULL(SUM(berkas_download), "0") AS Jumlah')
            ->from('tb_berkas');
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->row()->Jumlah : 0);
    }

    function insert($tabel = 'tb_berkas', $data) {
        $this->db->insert($tabel, $data);
    }

    function delete($tabel = 'tb_berkas', $id) {
        $this->db->where('berkas_id', $id)
            ->delete($tabel);
    }

    function update($tabel = 'tb_berkas', $id, $data) {
        $this->db->where('berkas_id', $id)
            ->update($tabel, $data);
    }

    function select($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_berkas b')
            ->join('tb_user u','b.user_id = u.user_id')
            ->where($data)
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

}

?>