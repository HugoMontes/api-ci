<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ClienteModel;


class Cliente extends ResourceController
{

  use ResponseTrait;

  // all users
  public function index()
  {
    $model = new ClienteModel();
    $data['clientes'] = $model->orderBy('id', 'DESC')->findAll();
    return $this->respond($data);
  }

  // create
  public function create()
  {
    $model = new ClienteModel();
    $data = [
      'nombre' => $this->request->getVar('nombre'),
      'email'  => $this->request->getVar('email'),
    ];
    $model->insert($data);
    $response = [
      'status'   => 201,
      'error'    => null,
      'messages' => [
        'success' => 'Cliente creado correctamente'
      ]
    ];
    return $this->respondCreated($response);
  }

  // single user
  public function show($id = null)
  {
    $model = new ClienteModel();
    $data = $model->where('id', $id)->first();
    if ($data) {
      return $this->respond($data);
    } else {
      return $this->failNotFound('No se encuentra el cliente');
    }
  }

  // update
  public function update($id = null)
  {
    $model = new ClienteModel();
    $data = [
      'nombre' => $this->request->getVar('nombre'),
      'email'  => $this->request->getVar('email'),
    ];
    $model->update($id, $data);
    $response = [
      'status'   => 200,
      'error'    => null,
      'messages' => [
        'success' => 'Cliente editado correctamente'
      ]
    ];
    return $this->respond($response);
  }

  // delete
  public function delete($id = null)
  {
    $model = new ClienteModel();
    $data = $model->where('id', $id)->delete($id);
    if ($data) {
      $model->delete($id);
      $response = [
        'status'   => 200,
        'error'    => null,
        'messages' => [
          'success' => 'Cliente eliminado correctamente'
        ]
      ];
      return $this->respondDeleted($response);
    } else {
      return $this->failNotFound('No se encuentra el cliente');
    }
  }
}
