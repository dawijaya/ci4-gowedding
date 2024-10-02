<?php

namespace App\Controllers;

class acara extends BaseController
{
    public function index()
    {

        $builder = $this->db->table('acara');
        $query   = $builder->get()->getResult();  // Produces: SELECT * FROM mytable
        $data['acara'] = $query;
        return view('acara/get', $data);
    }

    public function create()
    {
        return view('acara/add');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('acara')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
        }
    }
}
