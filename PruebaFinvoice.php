<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Finvoice</title>
    <style>
        body {
            font-size: 18px;
        }

        table {
            border: 1px solid;
        }

        table td,
        table th {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <h1>Prueba Finvoice</h1>
    
    <h2>EJERCICIOS. SOLO PHP Y HTML</h2>

    <!-- PREGUNTA 1 PHP Y HTML  -->

    <p><b>1. ¿Qué es una API?</b></p>

    Se trata de un conjunto de definiciones y protocolos que se utiliza para desarrollar e integrar el software de las aplicaciones, permitiendo la comunicación entre dos aplicaciones de software a través de un conjunto de reglas.
    Sus siglas significa “Interfaz de programación de aplicaciones”.

    <!-- PREGUNTA 2 PHP Y HTML  -->

    <p><b>2. ¿Qué es DOCTYPE HTML?</b></p>

    Es la declaración del tipo de documento, se encarga de especificar al navegador que tipo de documento se visualizará.

    <!-- PREGUNTA 3 PHP Y HTML  -->

    <p><b> 3. A partir del siguiente listado necesitamos crear una tabla que contenga la información de los empleados de los cuales su índice sea un numero impar. (opcional): Nombre y Apellido deben ir en la misma celda.
            $empleados = [["Nombre" => "Marcelo","Apellido" => "Velez","Edad" => 25,"Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",],["Nombre" => "Alberto","Apellido"=> "Unbertini","Edad" => 36,"Area" => "RRHH","Correo" => "albert.unbert@hotmail.com",],["Nombre"=>"Isidora","Apellido" => "Gutierrez","Edad" => 33,"Area" => "Desarrollador","Correo" => "isi_gutie@gmail.cl",],["Nombre" =>"Sebastian","Apellido" => "Jimenez","Edad" => 21,"Area" => "No Asignada","Correo" =>"s.jimenez@gmail.cl",],["Nombre" => "Manuel","Apellido" => "Osorio","Edad" => 19,"Area" =>"Desarrollador","Correo" => "manu007@outlook.com",],["Nombre" =>"Alonso","Apellido" => "Villa","Edad" => 47,"Area" => "Product Manager","Correo" =>"alvilla@hotmail.com",]];
            EJM.
            Nombre y Apellido Edad Área Correo
            Alberto Unbertini 36 RRHH albert.unbert@hotmail.com
        </b></p>

    <?php
    $empleados = [
        ["Nombre" => "Marcelo", "Apellido" => "Velez", "Edad" => 25, "Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",],
        ["Nombre" => "Alberto", "Apellido" => "Unbertini", "Edad" => 36, "Area" => "RRHH", "Correo" => "albert.unbert@hotmail.com",],
        ["Nombre" => "Isidora", "Apellido" => "Gutierrez", "Edad" => 33, "Area" => "Desarrollador", "Correo" => "isi_gutie@gmail.cl",],
        ["Nombre" => "Sebastian", "Apellido" => "Jimenez", "Edad" => 21, "Area" => "No Asignada", "Correo" => "s.jimenez@gmail.cl",],
        ["Nombre" => "Manuel", "Apellido" => "Osorio", "Edad" => 19, "Area" => "Desarrollador", "Correo" => "manu007@outlook.com",],
        ["Nombre" => "Alonso", "Apellido" => "Villa", "Edad" => 47, "Area" => "Product Manager", "Correo" => "alvilla@hotmail.com",]
    ];

    ?>

    <h3>Empleados con indice impar</h3>

    <table>
        <tr>
            <th>Indice</th>
            <th>Nombre y Apellido</th>
            <th>Edad</th>
            <th>Área</th>
            <th>Correo</th>
        </tr>
        <?php
        for ($i = 0; $i < count($empleados); $i++) :
            if ($i % 2 != 0) :
        ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $empleados[$i]['Nombre'] . " " . $empleados[$i]['Apellido'] ?></td>
                    <td><?= $empleados[$i]['Edad'] ?></td>
                    <td><?= $empleados[$i]['Area'] ?></td>
                    <td><?= $empleados[$i]['Correo'] ?></td>
                </tr>
        <?php
            endif;
        endfor;

        ?>
    </table>

    <h3>Todos los Empleados</h3>

    <table>
        <tr>
            <th>Indice</th>
            <th>Nombre y Apellido</th>
            <th>Edad</th>
            <th>Área</th>
            <th>Correo</th>
        </tr>
        <?php
        for ($i = 0; $i < count($empleados); $i++) :

        ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $empleados[$i]['Nombre'] . " " . $empleados[$i]['Apellido'] ?></td>
                <td><?= $empleados[$i]['Edad'] ?></td>
                <td><?= $empleados[$i]['Area'] ?></td>
                <td><?= $empleados[$i]['Correo'] ?></td>
            </tr>
        <?php

        endfor;

        ?>

    </table>

    <!-- PREGUNTA 4 PHP Y HTML  -->

    <p><b>
            4. Dado el siguiente array de objetos obtener los datos de la persona con la mayor edad encontrada.

            $personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
        </b></p>

    <?php

    $personas = array("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
    $mayor = 0;
    $personaMayor = '';
    foreach ($personas as $persona => $edad) {
        if ($mayor < $edad) {
            $mayor = $edad;
            $personaMayor = $persona;
        }
    }
    echo $personaMayor . " es el mayor y tiene " . $mayor . " años";
    ?>

    <!-- PREGUNTA 5 PHP Y HTML  -->

    <p><b>5. Crea una función llamada “cantidad_caracteres” que retorne el número de caracteres de un texto.</b></p>

    <?php

    function cantidad_caracteres($texto)
    {
        echo $texto . " => Tiene " . strlen($texto) . " caracteres";
    }

    cantidad_caracteres("Brayan");
    ?>


    <h2>EJERCICIOS. SOLO JS Y HTML</h2>

    <!-- PREGUNTA 1 JS Y HTML  -->
    <p><b>1. Imprimir números impares mayores a 100 y menores a 150
            EJM. 101,103,105,107, n...
        </b></p>
    <div id="respuesta1"></div>

    <!-- PREGUNTA 2 JS Y HTML  -->
    <p><b>2. Crea una función que permita sumar, restar, multiplicar y dividir. Los valores para calcular deben ser enviados mediante inputs que solo permitan números enteros, el evento se iniciará a la pulsación de un botón llamado "calcular", Imprimir resultados por pantalla.
        </b></p>
    <input type="number" id="num1">
    <input type="number" id="num2">
    <button onclick="calcular()">Calcular</button>
    <div id="respuesta2">

    </div>

    <!-- PREGUNTA 3 JS Y HTML  -->
    <p><b> 3. ¿Qué significa HTML, y cuál es su estructura básica?</b></p>
    <div id="respuesta3">
        HTML son las siglas de HyperText Markup Language, hace referencia al lenguaje de marcado y estructura para la elaboración de páginas web.<br>
        La estructura básica es :
        <pre>
        <code>
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
             &lt;header&gt;

             &lt;/header&gt;
             &lt;body&gt;

             &lt;/body&gt;
            &lt;/html&gt;
         </code>
        </pre>

    </div>

    <!-- PREGUNTA 4 JS Y HTML  -->
    <p><b>
            4. A partir del siguiente listado filtre los vehículos que tengan una capacidad mayor a 10 y sean de color azul.
            <br>
            let vehiculo = [{"color": "rojo","marca": "bmw","capacidad": 11},{"color": "azul","marca": "fiat","capacidad": 2},{"color": "negro","marca": "hyundai","capacidad": 6},{"color": "amarillo","marca": "jeep","capacidad": 15},{"color": "azul","marca": "citroen","capacidad": 20},{"color": "azul","marca": "renault","capacidad": 12},{"color": "rojo","marca": "ford","capacidad": 4},{"color": "gris","marca": "toyota","capacidad": 8}];
        </b></p>
    <div id="respuesta4"></div>

    <script>
        /* JS Y HTML */

        /*
          1. Imprimir números impares mayores a 100 y menores a 150
          EJM. 101,103,105,107, n...
          */
        let result = '';

        for (i = 100; i < 150; i++) {
            if (i % 2 != 0) {
                result += i + ",";
            }
        }
        document.getElementById('respuesta1').innerHTML = result;


        /*
        2. Crea una función que permita sumar, restar, multiplicar y dividir. Los valores para calcular deben ser enviados mediante inputs que solo permitan números enteros, el evento se iniciará a la pulsación de un botón llamado "calcular", Imprimir resultados por pantalla.
        */
        function calcular() {

            num1 = document.getElementById('num1').value;
            num2 = document.getElementById('num2').value;
            respuesta = document.getElementById('respuesta2');

            if (num1 % 1 == 0 && num2 % 1 == 0) {
                num1 = parseInt(num1);
                num2 = parseInt(num2);
                respuesta.innerHTML = `Suma : ${num1+num2}<br>
                                     Resta : ${num1-num2}<br>
                                     Multiplicación : ${num1*num2}<br>
                                     Divición : ${num1/num2}`;
            } else {
                alert("Solo se acepta números enteros");
                respuesta.innerHTML = '';
            }

        }

        /*
        4  A partir del siguiente listado filtre los vehículos que tengan una capacidad mayor a 10 y sean de color azul. 
        */

        let vehiculo = [{
            "color": "rojo",
            "marca": "bmw",
            "capacidad": 11
        }, {
            "color": "azul",
            "marca": "fiat",
            "capacidad": 2
        }, {
            "color": "negro",
            "marca": "hyundai",
            "capacidad": 6
        }, {
            "color": "amarillo",
            "marca": "jeep",
            "capacidad": 15
        }, {
            "color": "azul",
            "marca": "citroen",
            "capacidad": 20
        }, {
            "color": "azul",
            "marca": "renault",
            "capacidad": 12
        }, {
            "color": "rojo",
            "marca": "ford",
            "capacidad": 4
        }, {
            "color": "gris",
            "marca": "toyota",
            "capacidad": 8
        }];

        let filtrados = vehiculo.filter(el => el.capacidad > 10 && el.color === "azul");
        let resp = "<table><tr><th>Color</th><th>Marca</th><th>Capacidad</th></tr>";
        filtrados.forEach(el => {
            resp += `<tr><td>${el.color}</td><td>${el.marca}</td><td>${el.capacidad}</td></tr>`;
        })
        resp += "</table>";

        document.getElementById('respuesta4').innerHTML = resp;
    </script>
</body>

</html>