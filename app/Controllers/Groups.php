<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\GroupModel;

class Groups extends ResourcePresenter
{
    // protected $helpers = ['custom'];
    function __construct()
    {
        $this->group = new GroupModel(); // Inisialisasi properti $group di konstruktor
    }

    /**
     * Present a view of resource objects.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data['groups'] = $this->group->findAll(); // Akses ke properti $group yang sudah diinisialisasi
        return view('group/index', $data);
    }

    /**
     * Present a view to present a specific resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        return view('group/new');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->group->insert($data); // ganti $this->model menjadi $this->group
        return redirect()->to(site_url('groups'))->with('success', 'Data berhasil ditambahkan!');
    }


    /**
     * Present a view to edit the properties of a specific resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $groups = $this->group->where('id_groups', $id)->first();
        if (is_object($groups)) {
            $data['groups'] = $groups;
            return view('group/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->group->update($id, $data);
        return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $this->group->where('id_groups', $id)->delete();
        return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Dihapus');
    }

    public function trash()
    {
        $data['groups'] = $this->group->onlyDeleted()->findAll(); // Akses ke properti $group yang sudah diinisialisasi
        return view('group/trash', $data);
    }

    public function restore($id = null)
    {
        $this->db = \Config\Database::connect();
        if ($id != null) {
            $this->db->table('groups')
                ->set('deleted_at', null, true)
                ->where(['id_groups' => $id])
                ->update();
        } else {
            $this->db = \Config\Database::connect();
            $this->db->table('groups')
                ->set('deleted_at', null, true)
                ->where('deleted_at is NOT NULL', NULL, FALSE)
                ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Direstore');
        }
    }
    public function delete2($id = null)
    {
        if ($id != null) {

            $this->group->where('id_groups', $id)->delete($id, true);
            return redirect()->to(site_url('groups/trash'))->with('success', 'Data Berhasil Dihapus Permanent');
        } else {
            $this->group->purgeDeleted();
            return redirect()->to(site_url('groups/trash'))->with('success', 'Data Trash Berhasil Dihapus Permanent');
        }
    }
}
