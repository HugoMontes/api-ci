<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\EmpleadoModel;


class Empleado extends ResourceController
{

  use ResponseTrait;

  // all users
  public function index()
  {
    $model = new EmpleadoModel();
    $data['empleados'] = $model->orderBy('id', 'DESC')->findAll();
    return $this->respond($data);
  }

  // create
  public function create()
  {
    $model = new EmpleadoModel();
    $data = [
      'nombre' => $this->request->getVar('nombre'),
      'email'  => $this->request->getVar('email'),
    ];
    $model->insert($data);
    $response = [
      'status'   => 201,
      'error'    => null,
      'messages' => [
        'success' => 'Empleado creado correctamente'
      ]
    ];
    return $this->respondCreated($response);
  }

  // single user
  public function show($id = null)
  {
    $model = new EmpleadoModel();
    $data = $model->where('id', $id)->first();
    if ($data) {
      return $this->respond($data);
    } else {
      return $this->failNotFound('No se encuentra el empleado');
    }
  }

  // update
  public function update($id = null)
  {
    $model = new EmpleadoModel();
    $data = [
      'nombre' => $this->request->getVar('nombre'),
      'email'  => $this->request->getVar('email'),
    ];
    $model->update($id, $data);
    $response = [
      'status'   => 200,
      'error'    => null,
      'messages' => [
        'success' => 'Empleado editado correctamente'
      ]
    ];
    return $this->respond($response);
  }

  // delete
  public function delete($id = null)
  {
    $model = new EmpleadoModel();
    $data = $model->where('id', $id)->delete($id);
    if ($data) {
      $model->delete($id);
      $response = [
        'status'   => 200,
        'error'    => null,
        'messages' => [
          'success' => 'Empleado eliminado correctamente'
        ]
      ];
      return $this->respondDeleted($response);
    } else {
      return $this->failNotFound('No se encuentra el empleado');
    }
  }
}
