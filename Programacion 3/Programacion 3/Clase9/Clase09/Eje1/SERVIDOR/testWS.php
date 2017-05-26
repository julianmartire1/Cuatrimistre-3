<?php 
///***********************************************************************************************///
///COMO PROVEEDOR DEL SERVICIO WEB///
///***********************************************************************************************///

//1.- INCLUIMOS LA LIBRERIA NUSOAP DENTRO DE NUESTRO ARCHIVO
	require_once('../lib/nusoap.php'); 
	
//2.- CREAMOS LA INSTACIA AL SERVIDOR
	$server = new nusoap_server(); 

//3.- INICIALIZAMOS EL SOPORTE WSDL (Web Service Description Language)
	$server->configureWSDL('Mi Web Service #2', 'urn:testWS'); 

//AGREGO TIPO COMPLEJO, INFORMANDO SU ESTRUCTURA

	$server->wsdl->addComplexType(
		"Numero",
		"complexType",
		"struct",
		"all",
		"",
		array(
				"numeroUno"=>array('name' => 'numeroUno', 'type' => 'xsd:int'),
				"numeroDos"=>array('name' => 'numeroDos', 'type' => 'xsd:int')
			)
	);
	
//4.- REGISTRAMOS EL METODO A EXPONER
	$server->register('Sumar',                	// METODO
				array('numero1' => 'xsd:int','numero2' => 'xsd:int'),  			// PARAMETROS DE ENTRADA
				array('return' => 'xsd:int'),    		// PARAMETROS DE SALIDA
				'urn:testWS',                			// NAMESPACE
				'urn:testWS#Sumar',           	// ACCION SOAP
				'rpc',                        			// ESTILO
				'encoded',                    			// CODIFICADO
				'Suma dos numeros'   // DOCUMENTACION
			);
	$server->register('Multiplicar',                	// METODO
				array('numero1' => 'xsd:int','numero2' => 'xsd:int'),  			// PARAMETROS DE ENTRADA
				array('return' => 'xsd:int'),    		// PARAMETROS DE SALIDA
				'urn:testWS',                			// NAMESPACE
				'urn:testWS#SumMultiplicarar',           	// ACCION SOAP
				'rpc',                        			// ESTILO
				'encoded',                    			// CODIFICADO
				'Multiplica dos numeros'   // DOCUMENTACION
			);
	$server->register('Restar',                	
						array('Numero' => 'tns:Numero'),  
						array('return' => 'xsd:int'),   
						'urn:testWSDL',                		
						'urn:testWSDL#Restar',             
						'rpc',                        		
						'encoded',                    		
						'Resta dos numeros'    			
					);

//5.- DEFINIMOS EL METODO COMO UNA FUNCION PHP
	function Sumar($numero1,$numero2) {
	 
		return $numero1+$numero2;
	}
	function Multiplicar($numero1,$numero2) {
	 
		return $numero1*$numero2;
	}
	function Restar($numero1,$numero2)
	{
		return $numero1-$numero2;
	}

//6.- USAMOS EL PEDIDO PARA INVOCAR EL SERVICIO
	$HTTP_RAW_POST_DATA = file_get_contents("php://input");
	
	$server->service($HTTP_RAW_POST_DATA);
