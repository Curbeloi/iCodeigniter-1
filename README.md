# ¿Qué es iCodeigniter para iSeries iBM OS (sistema Operativo)?
iCodeigniter es una versión del framework conocido. Codeigniter, this version has a product tool are the programme that using PHP in the systems iSeries of IBM.

# Versión 1.0
Esta versión esta siendo usada en producción con excelentes resultados, pero no se descarta posibles errores 
sobre todo en el uso del asistente de gestión de Base de Datos (driver db2).  

# Datos de contacto del desarrollador
Ing. Hector Curbelo Barrios
hcurbelo@gmail.com

# Requisitos del servidor
Se recomienda PHP versión 5.6 o posterior.
Debería funcionar en 5.3.7 también, pero le recomendamos que NO ejecute
versiones antiguas de PHP, debido a la seguridad y el rendimiento, pueden tener potenciales
problemas, así como las características que faltan.

# Instalación

1. Copiar los archivos del framework en el directorio www de tu servidor de aplicaciones dentro del OS AS-400.
2. Ir al directorio application/config/database.php y editar este archivo.
3. Configurar las conexiones por ejemplo:

'hostname' => 'localhost',
'username' => 'yourusername',
'password' => 'yourpassword',
'database' => 'databasename',
'dbdriver' => 'db2',
'dbprefix' => '',
'libdata' => 'myschema',
	

4. Con esto puedes usar desde los modelos las sentecias para las cosultas a base de datos que nos 
proporciona Codeigniter:

$this->db->get('tablename');

$data = array(
		'col1' => 'HECTOR T',
		'col2 => 'HECTOR A',
);

$this->db->insert('tablename', $data);

# Licencia

 La misma de Codeigniter:
 <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

