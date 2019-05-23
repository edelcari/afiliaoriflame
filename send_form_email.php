<?php
$destino = "edelmira.oriflame.gt@gmail.com";
$Nombre = $_post["first_name"];
$Apellido= $_post["last_name"];
$Fechadenacimiento = $_post["bdday, bdmonth, bdyear "];
$DPI = $_post["dpiNumber"];
$Email = $_post["email"];
$Nit = $_post["nitNbr"];
$Direccion = $_post["address1"];
$Direccion2 = $_post["address2"];
$Departamento = $_post["depto"];
$Direccionalterna = $_post["address3"];
$Telefonodecasa = $_post["homePhone"];
$Celular = $_post["cellPhone"];
$Telefonodetrabajo = $_post["workPhone"];
$NombreApellido = $_post["R1firstName"];
$Telefonos = $_post["R1homePhones"];
$NombreApellido2 = $_post["R2firstName"];
$Telefonos2 = $_post["R2homePhones"];
$contenido = "Información Personal" . "\nNombre : " . $Nombre . "\nApellido : " . $Apellido . "\n Fecha de Nacimiento : " . $Fechadenacimiento . "\nDPI : " . $DPI . "\nE-mail : " . $Email . "\nNit : " . $Nit . "\nDireccion* (Calle, avenida, zona, colonia, número de casa) : " . $Direccion . "\nDirección 2: (Indicaciones de cómo puede llegar el mensajero) : " . $Direccion2 . "\nDepartamento : " . $Departamento . "\nDirección Alterna : " . $Direccionalterna . "\nTeléfono de casa : " . $Telefonodecasa . "\nCelular : " . $Celular . "\nTeléfono de trabajo : " . $Telefonodetrabajo . "\nNombre/Apellido : " . $NombreApellido . "\nTeléfonos : " . $Telefonos . "\nNombre/Apellido : " . $NombreApellido2 . "\nTeléfonos : " . $Telefonos2;
mail($destino, "Nuevo Socio Oriflame", $contenido);
header("Location=gracias.html");

?>