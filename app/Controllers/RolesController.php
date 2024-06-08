<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoleModel;
use CodeIgniter\HTTP\ResponseInterface;

class RolesController extends BaseController
{
    public function index()
    {
        $rolesModel = new RoleModel();
        $data['roles'] = $rolesModel->findAll();

        return view('admin/pages/roles/index', $data);
    }

    public function create()
    {
        return view('admin/pages/roles/create');
    }

    public function store()
    {
        $RoleModel = new RoleModel();

        $data = [
            'role_name' => $this->request->getPost('role_name'),
        ];

        $RoleModel->insert($data);

        return redirect()->to('/roles');
    }

    public function edit($id = null)
    {
        $rolesModel = new RoleModel();
        $data['role'] = $rolesModel->find($id);

        return view('admin/pages/roles/edit', $data);
    }

    public function update()
    {
        $rolesModel = new RoleModel();

        $data = [
            'role_name' => $this->request->getPost('role_name'),
        ];

        $rolesModel->update($this->request->getPost('id'), $data);

        return redirect()->to('/roles');
    }

    public function delete($id = null)
    {
        $rolesModel = new RoleModel();

        $rolesModel->delete($id);

        return redirect()->to('/roles');
    }
}
