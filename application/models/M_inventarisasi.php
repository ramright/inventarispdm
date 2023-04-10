<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_inventarisasi extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function update_data($table, $key, $id, $data)
    {
        $this->db->where($key, $id);
        $this->db->update($table, $data);
    }

    function delete_data($key, $id, $table)
    {
        $this->db->where($key, $id);
        $this->db->delete($table);
    }

    function get_data_by_id($key, $id, $table)
    {
        $this->db->where($key, $id);
        return $this->db->get($table)->row();
    }

    function read_data($table, $key, $value)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($key, $value);
        $q = $this->db->get();
        if ($q->num_rows() > 0) {
            return $q->row_array();
        }
        return false;
    }

    function get_dd($table)
    {
        $getthis = $this->db->query("SELECT * FROM $table");
        return $getthis;
    }

    function data_inventory()
    {
        $this->db->select('
        inventaris.idinvent,
        inventaris.nosertif,
        inventaris.luas,
        inventaris.peruntukan,
        peruntukan.lembaga_unit,
        inventaris.lokasi,
        lokasi.nama_lokasi,
        inventaris.timestamp,
        ');
        $this->db->join('peruntukan', 'peruntukan.idperuntukan = inventaris.peruntukan');
        $this->db->join('lokasi', 'lokasi.idlokasi = inventaris.lokasi');
        $result = $this->db->get('inventaris');
        return $result->result();
    }

    function add_inventory()
    {
        $data = array(
            'nosertif' => $this->input->post('nosertif'),
            'luas' => $this->input->post('luas'),
            'peruntukan' => $this->input->post('peruntukan'),
            'lokasi' => $this->input->post('lokasi'),
        );
        $result = $this->db->insert('inventaris', $data);
        return $result;
    }

    function update_inventory($idinvent, $data)
    {
        $this->db->where('idinvent', $idinvent);
        $this->db->update('inventaris', $data);
    }

    function delete_inventory()
    {
        $idinvent = $this->input->post('idinvent');
        $this->db->where('idinvent', $idinvent);
        $result = $this->db->delete('inventaris');
        return $result;
    }

    function data_unit()
    {
        $this->db->select('*, (SELECT COUNT(*) FROM inventaris WHERE inventaris.peruntukan=peruntukan.idperuntukan) as peruntukancount');
        $result = $this->db->get('peruntukan');
        return $result->result();
    }

    function delete_unit()
    {
        $idperuntukan = $this->input->post('idperuntukan');
        $this->db->where('idperuntukan', $idperuntukan);
        $result = $this->db->delete('peruntukan');
        return $result;
    }

    function add_unit()
    {
        $data = array(
            'lembaga_unit' => $this->input->post('lembaga_unit'),
        );
        $result = $this->db->insert('peruntukan', $data);
        return $result;
    }

    function data_location()
    {
        $this->db->select('*, (SELECT COUNT(*) FROM inventaris WHERE inventaris.lokasi=lokasi.idlokasi) as lokasicount');
        $result = $this->db->get('lokasi');
        return $result->result();
    }

    function delete_location()
    {
        $idlokasi = $this->input->post('idlokasi');
        $this->db->where('idlokasi', $idlokasi);
        $result = $this->db->delete('lokasi');
        return $result;
    }

    function add_location()
    {
        $data = array(
            'nama_lokasi' => $this->input->post('nama_lokasi'),
        );
        $result = $this->db->insert('lokasi', $data);
        return $result;
    }
}
