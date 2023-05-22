<?php
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultados</title>
</head>
<body>";
    echo" <br><h1 align='center'>¡Felicidades! Se han generado los boletos para tu concierto</h1><br>";
        // $i=(issset($_POST['Nombre']))
        // var_dump($_POST);
        for ($i=0; $i<$_POST["boletos"] ; $i++) { 
            # code...
        
    
    echo"<table border='2' align='center' style 'border-collapse:collapse;' cellpadding='20px'>
    <thead>
        <tr>
            <th align='center' colspan='4'>Boletos para Morat</th>
        </tr>

    </thead>
    <tbody>
        <tr>
            <td align='center' colspan='4'><strong>Ticket Master 2.0</td></strong>
        </tr> 
        <tr>
            <td><strong>Nombre:</strong> ".$_POST["Nombre"]."
            </td>
            <td><strong>Apellido Paterno:</strong> ".$_POST["Apellidopaterno"]."
            </td>
            <td><strong>Apellido Materno:</strong> ".$_POST["Apellidomaterno"]."
            </td>
            <td rowspan='2' align='center'><strong>Artista:</strong>&nbsp;";
             if($_POST["Artista"]=="Martín"){
                echo"Martín<br><br>";
                echo"<embed type='image/jpg' src='../JPG/Martín.jpg' width='250'>";
            } else if($_POST["Artista"]=="Isaza"){
                echo"Isaza<br><br>";
                echo"<embed type='image/jpg' src='../JPG/Isa.jpg' width='250'>";
            } else if($_POST["Artista"]=="Villamil"){
                echo"Villamil<br><br>";
                echo"<embed type='image/jpeg' src='../JPG/Villa.jpeg' width='250'>";
            } else if($_POST["Artista"]=="Simón"){
                echo"Simón<br><br>";
                echo"<embed type='image/jpeg' src='../JPG/Simón.jpeg' width='250'>";
            }echo"
            </td> 
        </tr>
        <tr>
            <td><strong>Fecha: </strong>".$_POST["Fecha"]."
            </td>

            <td><strong>Lugar: </strong>";if($_POST["Lugar"]=="Auditorio Nacional"){
                echo"Auditorio Nacional";
            } else if ($_POST["Lugar"]=="Palacio de los Deportes"){
                echo"Palacio de los Deportes";
            } else if ($_POST["Lugar"]=="Bellas Artes"){
                echo"Bellas Artes";
            } else if ($_POST["Lugar"]=="El Palenque"){
                echo"El Palenque";
            }echo"
            </td>

            <td><strong>Zona: </strong>";if($_POST["Zona"]=="Zona A"){
                echo"Zona A";
            } else if($_POST["Zona"]=="Zona B"){
                echo"Zona B";
            } else if($_POST["Zona"]=="Zona C"){
                echo"Zona C";
            } else if($_POST["Zona"]=="Zona D"){
                echo"Zona D";
            }echo"
            </td>

        </tr>
        <tr>
            <td align='center' colspan='3'><strong>Extras: </strong>";
            if($_POST["Tipodepaquete"]=="VIP"){
                echo"VIP";
            } else if ($_POST["Tipodepaquete"]=="Pass Plus"){
                echo"Pass Plus";
            }echo"
            </td>

            <td><strong>Frase: </strong>";
            if($_POST["Artista"]=="Martín"){
                echo"Soy el más chiquito de la banda";

            } else if ($_POST["Artista"]=="Isaza"){
                echo"¿Cómo vamos México?";
            } else if ($_POST["Artista"]=="Villamil"){
                echo "Villa, alias el que extraña a su ex";
            } else if($_POST["Artista"]=="Simón"){
                echo "Simón, alias el que salta épicamente en los conciertos";
            }

            echo"
            </td> 
        </tr>
    </tbody>
    </table><br><br>";

        }
        
        // echo $_POST["Nombre"];
        // echo "<br><br>";
        // echo $_POST["Apellidomaterno"];
        // echo "<br><br>";
        // echo $_POST["Apellidopaterno"];
        // echo "<br><br>";

        // if($_POST["Zona"]=="Zona A"){
        //     echo"Zona A";
        // } else if($_POST["Zona"]=="Zona B"){
        //     echo"Zona B";
        // } else if($_POST["Zona"]=="Zona C"){
        //     echo"Zona C";
        // } else if($_POST["Zona"]=="Zona D"){
        //     echo"Zona D";
        // }
        // echo "<br><br>";

        // if($_POST["Artista"]=="Martín"){
        //     echo"Martín";
        // } else if($_POST["Artista"]=="Isaza"){
        //     echo "Isaza";
        // } else if($_POST["Artista"]=="Villamil"){
        //     echo "Villamil";
        // } else if($_POST["Artista"]=="Simón"){
        //     echo "Simón";
        // }
        // echo "<br><br>";

        // echo $_POST["Fecha"];
        // echo "<br><br>";

        // if($_POST["Lugar"]=="Auditorio Nacional"){
        //     echo"Auditorio Nacional";
        // } else if ($_POST["Lugar"]=="Palacio de los deportes"){
        //     echo"Palacio de los deportes";
        // } else if ($_POST["Lugar"]=="Bellas Artes"){
        //     echo"Bellas Artes";
        // } else if ($_POST["Lugar"]=="El Palenque"){
        //     echo"Bellas Artes";
        // }
        // echo "<br><br>";

        // echo $_POST["Número"];
        // echo "<br><br>";

        // echo $_POST["Correo"];
        // echo "<br><br>";

        // if($_POST["Tipodepaquete"]=="VIP"){
        //     echo"VIP";
        // } else if ($_POST["Tipodepaquete"]=="Pass Plus"){
        //     echo"Pass Plus";
        // }
        // echo "<br><br>";


  
    echo"
</body>
</html>";
?>

    