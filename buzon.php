<?php

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/intel-header-logo.svg">
    <link rel="stylesheet" href="buzon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Portal de denuncias | Intel´s watcher</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/intel-header-logo.svg" alt="" width="70" height="40"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menú
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Buzón de ética</a></li>
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">Código de ética</a></li>
                        </ul>
                    </li>
            </div>
        </div>
    </nav>
    
    <div class="about">
        <h1><b>Portal de Denuncias</b></h1>
        <h2 class="portal-h2">Generar reporte</h2>
        <p class="about-text">
            No tenga miedo de denunciar y compartir los detalles de cualquier acción o comportamiento que crea que es 
            incompatible con nuestro <a href="#">Código de conducta.</a>
        </p>

        <h2 class="portal-h2">Este no es un servicio de emergencia</h2>
        <p class="about-text">
            <b>Esta pagina no forma parte del 911 o Servicios de Emergencia.</b>
            Los informes enviados a través de este servicio pueden no recibir una respuesta inmediata. 
            Si necesita asistencia de emergencia, comuníquese con los servicios públicos de emergencia.
        </p>

        <h2 class="portal-h2">Sea preciso en la información</h2>
        <p class="about-text">
            Incluya la mayor cantidad de información en cada uno de los campos requeridos. Entre más información obtengamos del
            incidente ocurrido, mayor rápidez y respuesta podremos otorgar.
        </p>
        <p><b>Nota: </b>Aunque puede enviar su inquietud de forma anónima (donde lo permita la ley), proporcionar su nombre e
            información de contacto nos permitirá comunicarnos con usted si necesitamos información adicional durante el
            curso de nuestra revisión.</p>
    </div>

    <div class="portal">
        <h2><b>Introduzca la información que se solicita (<a style="color:red;">*</a> Campos obligatorios)</b></h2>
        <script>
            function anonimo()
            {
                var checkbox = document.getElementById('rbAnonimo');
                if (checkbox.checked != true)
                {
                    document.getElementById("txtNombre").disabled=false;
                    document.getElementById("txtApellido").disabled=false;
                    document.getElementById("txtTelefono").disabled=false;
                    document.getElementById("txtEmail").disabled=false;
                    document.getElementById("txtHorarioContacto").disabled=false;
                }else{
                    document.getElementById("txtNombre").value="";
                    document.getElementById("txtNombre").disabled=true;
                    document.getElementById("txtApellido").value="";
                    document.getElementById("txtApellido").disabled=true;
                    document.getElementById("txtTelefono").value="";
                    document.getElementById("txtTelefono").disabled=true;
                    document.getElementById("txtEmail").value="";
                    document.getElementById("txtEmail").disabled=true;
                    document.getElementById("txtHorarioContacto").value="";
                    document.getElementById("txtHorarioContacto").disabled=true;
                }
                
            }
        </script>
        <form class="portal">
            <h2>Contacto</h2>
            <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" id="rbAnonimo" value="anonimo"  onclick="anonimo()">
                <label for="rbAnonimo">
                    Anónimo
                </label>
            </div>
            <div class="row" id="DivNombre">
                <div class="col">
                    <label for="txtNombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre(s)" id="txtNombre">
                </div>
                <div class="col">
                    <label for="txtNombre">Apellidos</label>
                    <input type="text" class="form-control" placeholder="Apellidos" id="txtApellido">
                </div>
            </div>
            <div class="form-group">
                <label for="txtTelefono">Teléfono</label>
                <input type="tel" class="form-control" id="txtTelefono" placeholder="01-00000000" pattern="[0-9]{2}-[0-9]{8}">
            </div>
            <div class="form-group">
                <label for="txtEmail">Dirección de Email</label>
                <input type="email" class="form-control" id="txtEmail" placeholder="nombre@ejemplo.com">
            </div>
            <div class="form-group">
                <label for="txtHorarioContacto">Horario en el que puede ser contactado(a)</label>
                <textarea class="form-control" id="txtHorarioContacto" rows="3" placeholder="De lunes a viernes de 08:00hrs a 15:00hrs"></textarea>
            </div>
            <h2>Relación</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                
                <label for="tipoRelacion"><a style="color:red;">*</a> ¿Qué relación tienes con Intel?</label>
                <select id="tipoRelacion" class="form-control">
                    <option selected>Selecciona una opción</option>
                    <option>Empleado</option>
                    <option>Empleado Formal</option>
                    <option>Trabajador Eventual/Contratista</option>
                    <option>Cliente</option>
                    <option>Proveedor</option>
                    <option>Socio</option>
                    <option>Otro</option>
                </select>
                </div>
 
            </div>

            <h2>Reporte | Informe de línea directa</h2>
            <div class="form-group">
                <label for="txtDescripcion"><a style="color:red;">*</a>
                    <b> Descripción del incidente.</b> 
                    Describe con la mayor cantidad de detalles que te sea posible.
                    Incluye todos los nombres de proyectos y programas relevantes.
                </label>
                <textarea class="form-control" id="txtDescripcion" rows="7" placeholder="Escribe aquí"></textarea>
            </div>
            <div class="form-group">
                <label for="txtInvolucrados">
                    <b>Involucrados.</b> 
                    ¿Quiénes crees que están involucrados?
                    Incluye nombres, compañía, departamento, grupo y puesto en la medida de lo posible.
                </label>
                <textarea class="form-control" id="txtInvolucrados" rows="4" placeholder="Escribe aquí"></textarea>
            </div>
            <div class="form-group">
                <label for="txtMomento">
                    <b>Momento del incidente.</b> 
                    Porfavor escribe la fecha y hora o el plazo de tiempo en el que el incidente sucedió.
                </label>
                <textarea class="form-control" id="txtMomento" rows="4" placeholder="Escribe aquí"></textarea>
            </div>
            <div class="form-group">
                <label for="txtForma">
                    <b>¿Cómo te enteraste del incidente?</b> 
                    Describelo con la mayor cantidad de detalles posibles.
                </label>
                <textarea class="form-control" id="txtForma" rows="6" placeholder="Escribe aquí"></textarea>
            </div>
            <div class="form-group">
                <label for="txtAvance">
                    <b>¿Has hablado o reportado el incidente con alguien?</b> 
                    Si la respuesta es si, por favor detalla a quién y la manera en que sucedió.
                </label>
                <textarea class="form-control" id="txtAvance" rows="5" placeholder="Escribe aquí"></textarea>
            </div>
            <div class="form-group">
                <label for="txtOtro">
                    <b>Otro.</b> 
                    ¿Hay más información de relevancia que consideras que pueda ayudar a la revisión del incidente?
                </label>
                <textarea class="form-control" id="txtOtro" rows="3" placeholder="Escribe aquí"></textarea>
            </div>
            <div class="form-group">
                <label for="txtOtro">
                    <b>Archivo.</b> 
                    Si tienes algún archivo que pueda ser de relevancia para la revisión del incidente por favor agrégalo.
                </label>
                <input type="file" class="custom-file-input" id="archivo" style="margin-top: 10px;" required>
            </div>
            
            <h2>Seguimiento</h2>
            <div class="form-row">
                <p>
                    Cuando envíes el reporte, generarás una contraseña. Pofavor mantenla en un lugar seguro. 
                    Esta contraseña te será solicitada más adelante para consultar el seguimiento del caso.
                </p>
                <div class="form-group col-md-4">
                    <label for="txtPassword"><a style="color:red;">*</a> <b>Contraseña.</b> 
                    </label>
                    <input type="password" class="form-control" id="txtPassword">
                </div>
                <div class="form-group col-md-4">
                    <label for="txtPassword2"><a style="color:red;">*</a> <b>Confirma la contraseña.</b> 
                    </label>
                    <input type="password" class="form-control" id="txtPassword2">
                </div>
            </div>
            <div class="col text-center">
                <button class="btn btn-primary" style="margin-top:30px; font-size: 22px;" type="submit">Enviar Reporte</button>
            </div>
        </form>
    </div>

    <footer>
        <div>
            <p class="about">Este portal forma parte del producto integrador de la materia Ética Profesional de la
                carrera de Ingenieria en Desarrollo de Software en CETI Colomos.</p>
            <p class="about warning">No es de ninguna manera un sitio oficial de Intel.</p>
        </div>

        <div class="divFooter">
            <p style="font-weight: bold;">
                Desarrolladores
            </p>
            <div class="developers">
                <div class="dev">
                    <i class="bi bi-github"></i>
                    <a class="dev-link" href="https://github.com/Chit0mx" target="_blank">Andrés Mercado</a><br>
                </div>
                <div class="dev">
                    <i class="bi bi-github"></i>
                    <a class="dev-link" href="https://github.com/ClaudiaPC3" target="_blank">Claudia Pérez</a>
                </div>
                <div class="dev">
                    <i class="bi bi-github"></i>
                    <a class="dev-link" href="https://github.com/luisfgarav" target="_blank">Felipe García</a>
                </div>
                <div class="dev">
                    <i class="bi bi-github"></i>
                    <a class="dev-link" href="https://github.com/JesusMartinez20" target="_blank">Jesús Martínez</a>
                </div>
                <div class="dev">
                    <i class="bi bi-github"></i>
                    <a class="dev-link" href="https://github.com/TheRaven0" target="_blank">Kevin Medina</a><br>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>