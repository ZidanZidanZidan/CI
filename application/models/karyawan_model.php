<?php defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $id;
    public $nama;
    public $alamat;
    public $telpon;

    public function getAll(){
      return $this->db->get($this->_table)->result();
    }
  }
