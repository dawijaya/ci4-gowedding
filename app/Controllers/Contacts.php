<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\GroupModel;
use App\Models\ContactModel;

class Contacts extends ResourceController
{
    protected $helpers = ['custom'];


    function __construct()
    {
        $this->group = new GroupModel(); // Inisialisasi properti $group di konstruktor
        $this->contact = new ContactModel(); // Inisialisasi properti $group di konstruktor
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data['contacts'] = $this->contact->getAll();
        return view('contact/index', $data);
    }

    /**
     * Return the properties of a resource object.
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
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        $data['groups'] = $this->group->findAll();
        return view('contact/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->contact->insert($data); // ganti $this->model menjadi $this->group
        return redirect()->to(site_url('contacts'))->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $contact = $this->contact->find($id);
        if (is_object($contact)) {
            $data['contact'] = $contact;
            $data['groups'] = $this->group->findAll();
            return view('contact/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->contact->update($id, $data);
        return redirect()->to(site_url('contacts'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $this->contact->delete($id);
        return redirect()->to(site_url('contacts'))->with('success', 'Data Berhasil Dihapus');
    }
}
