## Cronograma 
Día 1: Configuración inicial y autenticación
Configurar el proyecto Laravel 11:

Crear un nuevo proyecto Laravel.

Configurar la base de datos (.env).

Instalar Laravel Breeze para autenticación.

Implementar autenticación:

Ejecutar php artisan breeze:install para configurar la autenticación.

Crear las migraciones necesarias para los usuarios.

Crear roles de usuario:

Añadir un campo role a la tabla de usuarios (valores: admin y user).

Crear un seeder para generar un usuario administrador por defecto.

Probar la autenticación:

Verificar que los usuarios puedan registrarse, iniciar sesión y cerrar sesión.

Día 2: CRUD de publicaciones y relación con usuarios
Crear el modelo y migración para las publicaciones:

Crear una migración para la tabla posts con campos como title, content, image, external_link, user_id, etc.

Definir la relación entre User y Post en los modelos.

Crear controladores y rutas para las publicaciones:

Crear un controlador PostController con métodos para crear, editar, ver y eliminar publicaciones.

Definir rutas para las publicaciones (usando Route::resource).

Implementar vistas con Blade:

Crear vistas para listar publicaciones (index), mostrar una publicación (show), y crear/editar publicaciones (create, edit).

Restringir acceso:

Usar middleware para asegurar que solo los usuarios autenticados puedan crear, editar o eliminar publicaciones.

Día 3: Funcionalidades de administrador
Panel de administrador:

Crear una ruta y vista exclusiva para el administrador.

Añadir opciones para que el administrador pueda ver todas las publicaciones y eliminarlas.

Gestión de usuarios:

Crear un controlador UserController para que el administrador pueda registrar nuevos usuarios y eliminar usuarios existentes.

Añadir vistas para listar usuarios y formularios para crear/eliminar usuarios.

Restringir acceso:

Usar middleware para asegurar que solo los usuarios con rol admin puedan acceder a estas funcionalidades.

Día 4: Perfiles de usuario
Crear perfiles de usuario:

Añadir campos adicionales a la tabla de usuarios (name, age, email, profile_picture, occupation, gender, phone, social_links).

Crear una ruta y vista para mostrar el perfil de cada usuario.

Relacionar publicaciones con perfiles:

En la vista de perfil, mostrar las publicaciones realizadas por ese usuario.

Editar perfil:

Permitir que los usuarios editen su propio perfil (usar un formulario en Blade).

Día 5: Mejoras y pruebas finales
Mejorar la interfaz:

Usar CSS personalizado para diseñar las vistas.

Asegurar que la página sea responsive.

Validaciones y seguridad:

Añadir validaciones a los formularios (crear/editar publicaciones, registro de usuarios, etc.).

Proteger rutas y acciones con políticas de autorización.

Pruebas:

Probar todas las funcionalidades (registro, login, publicaciones, roles, etc.).

Corregir errores y optimizar el código.

Detalles adicionales
Publicaciones con imágenes y enlaces:

Para manejar imágenes en las publicaciones, usaremos el sistema de archivos de Laravel (Storage) y validaremos que los archivos sean imágenes.

Los enlaces externos se validarán para asegurar que sean URLs válidas.

Perfiles de usuario:

Los campos como age, gender, phone, y social_links serán opcionales, excepto name y email.
## Notas
