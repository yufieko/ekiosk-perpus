<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {
//class Buku_model extends CI_Model implements DatatableModel {

	function get_total($from = 'tb_buku', $parameter = array()) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total');
            $this->db->from($from);
            $this->db->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total');
            $this->db->from($from);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function insert($data) {
        $this->db->insert('tb_buku', $data);
    }

    function delete($id) {
        $this->db->where('akses_id', $id);
        $this->db->delete('tb_buku');
    }

    function update($id, $data) {
        $this->db->where('akses_id', $id);
        $this->db->update('tb_buku', $data);
    }

    function select($data, $no) {
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->where($data);
        $this->db->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->result() : NULL);
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