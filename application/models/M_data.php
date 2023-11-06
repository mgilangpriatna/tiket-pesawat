<?php
class M_data extends CI_model {

    function tampil_data() {
        return $this->db->get('pesawat');
    }

    function tampil_data_pembeli() {
        return $this->db->get('pembeli');
    }

    public function get_harga($kode_pesawat, $kelas) {
        $this->db->where('kode_pesawat', $kode_pesawat);
        $this->db->where('kelas', $kelas);
        $query = $this->db->get('harga_tiket');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->harga;
        } else {
            return 0;
        }
    }

    public function input_data($data, $tabel) {
        $this->db->insert($tabel, $data);
    }
}

?>