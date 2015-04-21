<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {
//class Buku_model extends CI_Model implements DatatableModel {

	function get_total($from = 'tb_buku', $parameter = array()) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from($from)
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from($from);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function get_totalbuku() {
        $this->db->select('SUM(buku_jumlah) AS Jumlah')
            ->from('tb_buku');
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->row()->Jumlah : 0);
    }

    function get_pinjam() {
        $this->db->select('SUM(buku_pinjam) AS Pinjam')
            ->from('tb_buku');
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->row()->Pinjam : 0);
    }

    function get_bpinjam() {
        $this->db->select('SUM(buku_jumlah) - SUM(buku_pinjam) AS Pinjam')
            ->from('tb_buku');
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->row()->Pinjam : 0);
    }

    function insert($tabel, $data) {
        $this->db->insert($tabel, $data);
    }

    function delete($tabel = "", $id) {
        $primaryKey = "";

        switch ($tabel) {
            case 'tb_buku': $primaryKey = "buku_id"; break;
            case 'tb_jenis': $primaryKey = "jenis_id"; break;
            case 'tb_koleksi': $primaryKey = "koleksi_id"; break;
            default: $primaryKey = "buku_id"; break;
        }

        $this->db->where($primaryKey, $id)
            ->delete($tabel);
    }

    function update($tabel, $id, $data) {
        $primaryKey = "";

        switch ($tabel) {
            case 'tb_buku': $primaryKey = "buku_id"; break;
            case 'tb_jenis': $primaryKey = "jenis_id"; break;
            case 'tb_koleksi': $primaryKey = "koleksi_id"; break;
            default: $primaryKey = "buku_id"; break;
        }

        $this->db->where($primaryKey, $id)
            ->update($tabel, $data);
    }

    function select($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_buku b')
            ->join('tb_jenis j', 'b.jenis_id = j.jenis_id')
            ->join('tb_koleksi k', 'b.koleksi_id = k.koleksi_id')
            ->where($data)
            ->order_by('buku_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function selectJenis($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_jenis')
            ->where($data)
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->result() : NULL);
    }

    function selectKoleksi($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_koleksi')
            ->where($data)
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->result() : NULL);
    }

    function listjenis($select) {
        $this->db->select($select)->from('tb_jenis');
        $query = $this->db->get();
        return $query;
    }

    function listkoleksi($select) {
        $this->db->select($select)->from('tb_koleksi');
        $query = $this->db->get();
        return $query;
    }

    /**
     * @return
     * Expressions / Columns to append to the select created by the Datatable library
     * fungsi untuk menggabungkan field di tabel
     * format: 'namaFieldbaru' => 'concat(namaField)'
     */
    public function appendToSelectStr() {
        //_protect_identifiers needs to be FALSE in the database.php when using custom expresions to avoid db errors.
        //CI is putting `` around the expression instead of just the column names
        return array(
            //'Bstatus' => 'REPLACE(REPLACE(`b`.`buku_status`,''0'',''Nonaktif''),''1'',''Aktif'')',
            'Bstatus' => "REPLACE(REPLACE(`b`.`buku_status`,'0','Tidak Ada'),'1','Ada')",
            'Bopsi' => 'b.buku_status'
        );
    }

    /**
     * @return
     * Nama tabel diikuti dengan alias. format: tabel t
     */
    public function fromTableStr() {
        return 'tb_buku b';
    }

    /**
     * @return
     * Associative array of joins.  Return NULL or empty array  when not joining
     * Fungsi untuk menggabungkan tabel-tabel. format: 'namaTabel alias' => 'alias.primaryKey = alias.foreignKey'
     */
    public function joinArray(){
        return array(
            'tb_jenis j' => 'b.jenis_id = j.jenis_id',
            'tb_koleksi k' => 'b.koleksi_id = k.koleksi_id'
        );
    }
    
    /**
     * 
     * @return
     * Static where clause to be appended to all search queries.  Return NULL or empty array
     * when not filtering by additional criteria
     * jika ada kriteria khusus untuk data yang ditampilkan format: array('namaField' => 'kriteria');
     */
    public function whereClauseArray(){
        return NULL;
    }
}

?>