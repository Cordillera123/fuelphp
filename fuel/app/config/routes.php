<?php
return array(
    '_root_' => 'producto/index',  // Ruta raíz, muestra la lista de productos
    'producto' => 'producto/index',  // Ruta para listar productos
    'producto/(:num)' => 'producto/view/$1',  // Ruta para ver un producto específico
    'producto/create' => 'producto/create',  // Ruta para mostrar el formulario de creación de producto
    'producto/edit/(:num)' => 'producto/edit/$1',  // Ruta para mostrar el formulario de edición de producto
    'producto/delete/(:num)' => 'producto/delete/$1',  // Ruta para eliminar un producto

    'vehiculos' => 'vehiculos/index',  // Ruta para listar vehículos
    'vehiculos/(:num)' => 'vehiculos/view/$1',  // Ruta para ver un vehículo específico
    'vehiculos/create' => 'vehiculos/create',  // Ruta para mostrar el formulario de creación de vehículo
    'vehiculos/edit/(:num)' => 'vehiculos/edit/$1',  // Ruta para mostrar el formulario de edición de vehículo
    'vehiculos/delete/(:num)' => 'vehiculos/delete/$1',  // Ruta para eliminar un vehículo
    
    '_404_' => 'welcome/404', // Puedes mantener la ruta de página no encontrada
);
