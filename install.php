<?php



	function createDB ($nameDB = "Usuarios", $pathDB = ""){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    echo "<i class='fa fa-check-square-o'></i> Se ha creado/seleccionado la base de datos correctamente."."<br/>";


		 //***** CREAR TABLA USUARIOS *****
		    $query = "CREATE TABLE 'Usuarios' (
						'idUsuario'	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						'usuario'	TEXT NOT NULL,
						'contrasena'	TEXT NOT NULL,
						'nombre'	TEXT NOT NULL,
						'apellidouno'	TEXT NOT NULL,
						'apellidodos'	TEXT NOT NULL,
						'titulo'	TEXT NOT NULL,
						'descripcion'	TEXT NOT NULL,
						'foto'	TEXT NOT NULL,
                        'webpersonal'	TEXT NOT NULL,
						'email'	TEXT NOT NULL,
						'permisos'	TEXT NOT NULL,

						
					);"; //Creacion del query para crear la tabla.
		    $result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
		    echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Usuarios."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Usuarios."."<br/>";


	//*****  CREAR TABLA CONFIG USUARIOS *****
		    $query = "CREATE TABLE `ConfigUsuarios` (
						`idConfigUsuarios`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						`usuario`	TEXT NOT NULL,
						`piel`	TEXT NOT NULL,
						`respuestas`	TEXT NOT NULL
					);";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla ConfigUsuarios."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla ConfigUsuarios."."<br/>";
			

	//*****  CREAR TABLA CONFIG POSTS *****
		    $query = "CREATE TABLE `Posts` (
						`idPosts`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						`utc`	TEXT NOT NULL,
						`anio`	TEXT NOT NULL,
						`mes`	TEXT NOT NULL,
						`dia`	TEXT NOT NULL,
						`hora`	TEXT NOT NULL,
						`minuto`	TEXT NOT NULL,
						`segundo`	TEXT NOT NULL,
						`usuario`	TEXT NOT NULL,
						`titulo`	TEXT NOT NULL,
						`subtitulo`	TEXT NOT NULL,
						`icono`	TEXT NOT NULL,
						`texto`	TEXT NOT NULL,
						`imagen`	TEXT NOT NULL,
						`video`	TEXT NOT NULL,
						`Sonido`	TEXT NOT NULL
					);";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Posts."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Posts."."<br/>";


			//*****  CREAR TABLA CONFIG LOGS *****
		    $query = "CREATE TABLE `Logs` (
						`idLogs`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						`utc`	TEXT NOT NULL,
						`anio`	TEXT NOT NULL,
						`mes`	TEXT NOT NULL,
						`dia`	TEXT NOT NULL,
						`hora`	TEXT NOT NULL,
						`minuto`	TEXT NOT NULL,
						`segundo`	TEXT NOT NULL,
						`ip`	TEXT NOT NULL,
						`navegador`	TEXT NOT NULL,
						`usuario`	TEXT NOT NULL,
						`operacion`	TEXT NOT NULL

					);";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Posts."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Posts."."<br/>";


		    $db = NULL; //Cerramos la conexion a la Base de datos.
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

	/* Funcion para ejecutar querys de tipo Insert, Update, Deleted */
	function excuteQuery ($nameDB = "Usuarios", $pathDB = "", $query, $params=NULL){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    if ($params === NULL){
				/* Intentamos Ejecutar el Query */
		    	$result = $db->exec($query);
		    }else{
		    	/* Intentamos Ejecutar el Query */
		    	$cmd = $db->prepare($query);
		    	$result = $cmd->execute($params);
		    }

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		    return ($result);
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

	/* Funcion para ejecutar querys de tipo Selects */
	function newQuery ($nameDB = "Usuarios", $pathDB = "", $query){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    
		    /* Intentamos Ejecutar el Query */
		    $result = $db->query($query);

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		    return ($result);
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

?>