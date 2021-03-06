<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Banner/slider
	public function slider() {
		$this->db->select('*');
		$this->db->from('berita');
		// Where slider
		$this->db->where(array(	'jenis_berita'	=> 'Slider',
								'status_berita'	=> 'Publish'));
		$this->db->order_by('id_berita','DESC');
		// Batasi 5 slide saja
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}

	// Berita
	public function berita() {
		$this->db->select('*');
		$this->db->from('berita');
		// Where slider
		$this->db->where(array(	'jenis_berita'	=> 'Berita',
								'status_berita'	=> 'Publish'));
		$this->db->order_by('id_berita','DESC');
		// Batasi 1 berita saja
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	// Berita lain
	public function berita_lain() {
		$this->db->select('*');
		$this->db->from('berita');
		// Where slider
		$this->db->where(array(	'status_berita'	=> 'Publish'));
		$this->db->order_by('id_berita','DESC');
		// Batasi 1 berita saja
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result();
	}

	// Read Berita
	public function read($slug_berita) {
		$this->db->select('*');
		$this->db->from('berita');
		// Where slider
		$this->db->where(array(	'slug_berita'	=> $slug_berita,
								'status_berita'	=> 'Publish'));
		$this->db->order_by('id_berita','DESC');
		// Batasi 1 berita saja
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	//Detail
	public function detail($id_berita) {
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('id_berita',$id_berita);
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	//Tambah
	public function tambah($data) {
		$this->db->insert('berita',$data);
	}

	//Edit
	public function edit($data) {
		$this->db->where('id_berita',$data['id_berita']);
		$this->db->update('berita',$data);
	}

	//Delete
	public function delete($data) {
		$this->db->where('id_berita',$data['id_berita']);
		$this->db->delete('berita',$data);
	}

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */