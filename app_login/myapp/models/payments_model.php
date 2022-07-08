<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payments_model extends CI_Model
{

    private $table;
    public $primary_key;
    public $data;

    function __construct()
    {
        parent::__construct();
        $this->table = substr(strtolower(get_class($this)), 0, -6);
        $this->primary_key = array();
        $this->data = array();
    }

    private function reset()
    {
        $this->primary_key = array();
        $this->data = array();
    }

    private function reset_pk()
    {
        $this->primary_key = array();
    }

    private function reset_data()
    {
        $this->data = array();
    }

    public function view($table)
    {
        $query = $this->db->select('*')
            ->from($table)
            ->get();
        return $query->result();
    }
    public function settings($table)
    {
        $query = $this->db->select('*')
            ->from($table)
            ->order_by('display_order','asc')
            ->get();
        return $query->result();
    }

    public function get_row($table)
    {
        $this->db->where($this->primary_key);
        $query = $this->db->get($table);
        $row = $query->row();
        $this->reset_pk();
        return $row;
    }
    public function get_rowdata($table)
    {
       
        $this->db->where($this->primary_key);
        $query = $this->db->get($table);
        $row = $query->result();
        $this->reset_pk();
        return $row;
    }

    public function insert($table)
    {
        $this->db->insert($table, $this->data);
        $this->reset_data();
        return true;
    }

    public function update($table)
    {
        $this->db->update($table, $this->data, $this->primary_key);
        $this->reset();
        return true;
    }

    public function delete($table)
    {
        $this->db->where($this->primary_key);
        $this->db->delete($table);
        $this->reset_pk();
        return true;
    }

    public function get_pagination($table)
    {
        $this->db->select('*');
        $q = $this->db->get($table);
        return $q;
    }
    public function get_group_pagination($table, $table2)
    {
    //    $query =  $this->db->query('select id from payments UNION select amount from donations')->get()->result_array();
        // $this->db->select("*");
        // $this->db->from($table2);
        // $query1 = $this->db->get_compiled_select();
        // $this->db->select("*");
        // $this->db->from($table);
        // $query2 = $this->db->get_compiled_select();

        
        // $query = $this->db->query($query1 ." UNION ". $query2 );
        // print_r($query);exit;
        // return $query;



        $this->db->select('*');
        $this->db->from('donations');
        $query = $this->db->get();
        $subQuery1 = $this->db->_compile_select();

        $this->db->_reset_select();

        // #2 SubQueries no.2 -------------------------------------------

        $this->db->select('*');
        $this->db->from('payments');
        $query = $this->db->get();
        $subQuery2 = $this->db->_compile_select();

        $this->db->_reset_select();

        // #3 Union with Simple Manual Queries --------------------------

        $this->db->query("select * from ($subQuery1 UNION $subQuery2) as unionTable");

        // #3 (alternative) Union with another Active Record ------------

        $this->db->from("($subQuery1 UNION $subQuery2)");
       $q =  $this->db->get();
       print_r($q);exit;
    }
}