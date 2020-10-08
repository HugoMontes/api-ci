# API REST BASICO EJEMPLO

## Referencia

API REST de ejemplo.
Para mas informacion visitar la [Pagina de referencia](https://www.positronx.io/codeigniter-rest-api-tutorial-with-example/).

## Modo de uso

### Listar empleados
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | GET                                                                                      |
| URL      | http://localhost/empleado                                                                |

### Guardar un empleado
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | POST                                                                                     |
| URL      | http://localhost/empleado                                                                |
| BODY     | x-www-form-urlencoded <br/> nombre: juan <br/> email: juan@gmail.com                     |

### Obtener un empleado
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | GET                                                                                      |
| URL      | http://localhost/empleado/4                                                              |

### Editar un empleado
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | POST                                                                                     |
| URL      | http://localhost/empleado/update/8                                                       |
| BODY     | x-www-form-urlencoded <br/> nombre: juana <br/> email: juana@gmail.com                   |

### Eliminar un empleado
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | POST                                                                                     |
| URL      | http://localhost/empleado/8                                                              |

