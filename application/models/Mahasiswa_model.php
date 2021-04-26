<?php

class Mahasiswa_model extends CI_Model {

public $nama;
public $gender;
public $usia;
public $alamat;

public function get_last_five_entries()
{
        $query = $this->db->get('mahasiswas', 5);
        return $query->result();
}

public function insert_entry()
{
        $this->nama   = $_POST();
        $this->gender = $_POST();
        $this->usia   = $_POST();
        $this->alamat = $_POST();

        $this->db->insert('mahasiswa', $this);
}

public function update_entry()
{
        $$this->nama   = $_POST();
        $this->gender  = $_POST();
        $this->usia    = $_POST();
        $this->alamat  = $_POST();


        $this->db->update('mahasiswa', $this, array('id' => $_POST['id']));
}

}