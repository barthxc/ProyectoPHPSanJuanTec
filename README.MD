A pesar de la falta de tiempo creo que he dado lo mejor para el proyecto.

Mi aplicación cuando logea un usuario accede directamente al portal de **No he logrado hacer el Login de usuario.
(Para acceder al proyecto completo puedes entrar en localhost:3000/gestion-producto) La información de acceso será más precisa accediendo a las rutas del archivo public/index.php
-Gesión de Productos.
    -Dentro de gestión de productos el usuario no verá nada hasta que seleccione los select para elegir el tipo de producto que desea ver
    -También he añadido a modo de alerta unos colores en base a la cantidad del producto que hay.
-El usuario puede navegar hacia la gestión de materiales donde muestra los materiales que u el stock de cada uno con sus alertas por colores correspondientes.

-En el apartado logística podemos ver la tabla de Entradas y Salidas de productos donde también podemos ver los movimientos de productos con las cantidades más bajas y más altas (elegí hacer una query solo de 2 productos para que sea vea visualmente como la cantidad de los productos cambia)

Podemos acceder a toda la información de Logistica presionando de nuevo "Ver todos los registros"

















# Caso de estudio

**Descripción:**
FashionTextil Tienda de ropa que vende una gran variedad de productos, Para poder optimizar su funcionamiento requieren de un sistema de control de stock.

**Requerimientos:**

1. **Gestión de Productos:**
    [x]- Los productos se dividen en categorías, como "Camisetas", "Pantalones" y "Chaquetas".
    [x]- Cada producto tiene un nombre, talle ,una descripción y un precio de venta .
    [x]- El sistema debe realizar un seguimiento del inventario disponible para cada producto y talla.
    [x]- Se necesita un registro de las entradas y salidas de inventario debido a la producción y las ventas.
    [x]- Debe haber alertas automáticas cuando el nivel de stock de un producto caiga por debajo de un umbral predefinido.
2. **Gestión de materiales:**
    [x]- La fábrica tiene un inventario de telas y materiales.

1. **Informes y Estadísticas:**
    [x-]- Deben Mostrarse y permitir filtrar por mas vendidos, un producto en especificó, etc.
2. **Seguridad:**
    []- El sistema debe garantizar que solo los usuarios autorizados tengan acceso a las funciones de gestión.




#El proyecto para ejecutarse se necesita utilizar

    cd public
    php -S localhost:3000

SE NECESITA ACCEDER A LA CARPETA PUBLIC PARA LEVANTAR EL SERVIDOR.



##BASE DE DATOS:
    -Hay un archivo llamado gestor.json que tiene la importación de la base de datos MySql

IMPORTACION:

    [
    {"type":"header","version":"5.2.0","comment":"Export to JSON plugin for PHPMyAdmin"},
    {"type":"database","name":"gestor"},
    {"type":"table","name":"categorias","database":"gestor","data":
    [
    {"id":"1","nombre":"Camisetas"},
    {"id":"2","nombre":"Pantalones"},
    {"id":"3","nombre":"Chaquetas"}
    ]
    }
    ,{"type":"table","name":"materiales","database":"gestor","data":
    [
    {"id":"1","nombre":"Algodón","stock":"500","materialescol":"Tipo A"},
    {"id":"2","nombre":"Cuero","stock":"300","materialescol":"Tipo B"},
    {"id":"3","nombre":"Denim","stock":"200","materialescol":"Tipo C"}
    ]
    }
    ,{"type":"table","name":"productos","database":"gestor","data":
    [
    {"id":"1","nombre":"Camiseta Manga Corta","talle":"M","stock":"50","categorias_id":"1"},
    {"id":"2","nombre":"Pantalón Vaquero","talle":"32","stock":"30","categorias_id":"2"},
    {"id":"3","nombre":"Chaqueta de Cuero","talle":"L","stock":"20","categorias_id":"3"},
    {"id":"4","nombre":"Camiseta Manga Larga","talle":"L","stock":"50","categorias_id":"1"},
    {"id":"5","nombre":"Pantalón Deportivo","talle":"M","stock":"25","categorias_id":"2"},
    {"id":"6","nombre":"Chaqueta de Invierno","talle":"XL","stock":"15","categorias_id":"3"},
    {"id":"7","nombre":"Falda Vaquera","talle":"S","stock":"20","categorias_id":"2"},
    {"id":"8","nombre":"Jersey de Lana","talle":"M","stock":"30","categorias_id":"1"}
    ]
    }
    ,{"type":"table","name":"registros_materiales","database":"gestor","data":
    [
    {"id":"1","fecha":"2023-09-25 12:00:00","tipo":"Entrada","cantidad":"100","materiales_nombre":"Algodón","materiales_id":"1"},
    {"id":"2","fecha":"2023-09-26 13:00:00","tipo":"Entrada","cantidad":"50","materiales_nombre":"Cuero","materiales_id":"2"},
    {"id":"3","fecha":"2023-09-27 14:00:00","tipo":"Entrada","cantidad":"80","materiales_nombre":"Denim","materiales_id":"3"}
    ]
    }
    ,{"type":"table","name":"registros_productos","database":"gestor","data":
    [
    {"id":"1","fecha":"2023-09-25 10:00:00","cantidad":"10","productos_nombre":"Camiseta Manga Corta","productos_talle":"M","categoria":"Camisetas","Productos_id":"1"},
    {"id":"2","fecha":"2023-09-25 10:30:00","cantidad":"5","productos_nombre":"Pantalón Vaquero","productos_talle":"32","categoria":"Pantalones","Productos_id":"2"},
    {"id":"3","fecha":"2023-09-26 11:00:00","cantidad":"8","productos_nombre":"Chaqueta de Cuero","productos_talle":"L","categoria":"Chaquetas","Productos_id":"3"}
    ]
    }
    ,{"type":"table","name":"usuarios","database":"gestor","data":
    [
    {"id":"5","usuario":"usuario1","contraseña":"password1","email":"usuario1@example.com"},
    {"id":"6","usuario":"usuario2","contraseña":"password2","email":"usuario2@example.com"},
    {"id":"7","usuario":"usuario3","contraseña":"password3","email":"usuario3@example.com"},
    {"id":"8","usuario":" usuariocool","contraseña":"123123123","email":"dasa@correo.com "},
    {"id":"9","usuario":" prueba","contraseña":"123123","email":"asdasd@casd.com "},
    {"id":"10","usuario":" prueba","contraseña":"$2y$10$YHsnFPcVQfmloK3FibJ.B.Cju1VZmyE1mvX2xY","email":"prueba@pruebita.com "},
    {"id":"11","usuario":" ","contraseña":"$2y$10$tcJxbo7vNUqGG0mR3\/cxIu5q3PFSxx.dd03elR","email":" "},
    {"id":"22","usuario":" usuario123","contraseña":"$2y$10$CnANSGj3ipWUDT2VDrgoHOxC94w0OsFUbDO121","email":"usuario123@usuario.com "},
    {"id":"23","usuario":" Persona1","contraseña":"$2y$10$ZCvQGvG.l\/2UmmVmodoPwuzN\/SXcvi\/ylgI26Q","email":"persona1@persona.com "},
    {"id":"24","usuario":"cool","contraseña":"$2y$10$sfrX42ZxCJ0Q1yQzXPurd.eP.ujgWLnhnBztLJ","email":"cool@cool.com "},
    {"id":"25","usuario":" prueba0","contraseña":"$2y$10$TMfrK2G.z2VDGwdP89xrz..ihRCOIyCIxAyjoY","email":"prueba0@prueba0.com "},
    {"id":"26","usuario":" hey","contraseña":"$2y$10$FDtytVEeKi4GM7R6LKeMI.YJ5i\/tmhEA7BruK\/","email":"hey@hey.com "},
    {"id":"27","usuario":"nospace","contraseña":"$2y$10$sutjDrFZo1JrOixNGfyE0uvzlxhR4O1TJ1qYlK","email":"nospace@correo.com"},
    {"id":"28","usuario":"gpt","contraseña":"$2y$10$1X1y8E7eIxTlJMXeeeS19.wWGz6PGSAH43Wgn.","email":"gpt@gpt.com"},
    {"id":"29","usuario":"please","contraseña":"$2y$10$5BogEc52JFcFJgZPQcznO.pBW0lqJFgSNBIr9u","email":"please@please.com"}
    ]
    }
    ]







