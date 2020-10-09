# API REST BASICO EJEMPLO

## Referencia

API REST de ejemplo.
Para mas informacion visitar la [Pagina de referencia](https://www.positronx.io/codeigniter-rest-api-tutorial-with-example/).

## Modo de uso

### Listar clientes
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | GET                                                                                      |
| URL      | http://localhost/cliente                                                                |

### Guardar un cliente
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | POST                                                                                     |
| URL      | http://localhost/cliente                                                                |
| BODY     | x-www-form-urlencoded <br/> nombre: juan <br/> email: juan@gmail.com                     |

### Obtener un cliente
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | GET                                                                                      |
| URL      | http://localhost/cliente/4                                                              |

### Editar un cliente
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | POST                                                                                     |
| URL      | http://localhost/cliente/update/8                                                       |
| BODY     | x-www-form-urlencoded <br/> nombre: juana <br/> email: juana@gmail.com                   |

### Eliminar un cliente
| OPCIONES | VALORES                                                                                  |
|----------|------------------------------------------------------------------------------------------|
| METHOD   | POST                                                                                     |
| URL      | http://localhost/cliente/8                                                              |

