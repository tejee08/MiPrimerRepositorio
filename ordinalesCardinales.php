<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/199/xhtml">
<link rel="icon" href="/favicon.ico">
	<head>
		<title>ordinalesCardinales</title>
        <style>
            table,th,td {border: 1px solid black; border-collapse: collapse; font-style:italic;text-align: center;}
            th {background-color:#dbe5f1;}
        </style>
	</head>
	<!-- comentario -->
	<body>
        <?php
            $numero = 1;
            echo"<table>";
                echo"<th>"."Cardinal"."</th>";
                echo"<th>"."Ordinal"."</th>";
            
            while($numero<=10)
            {
                echo"<tr>";
                    echo"<td>". $numero ."</td>";
                    switch($numero){
                        case 1:
                            echo"<td>Pimero</td>";
                        break;
                        case 2:
                            echo"<td>Segundo</td>";
                        break;
                        case 3:
                            echo"<td>Tercero</td>";
                        break;
                        case 4:
                            echo"<td>Cuarto</td>";
                        break;
                        case 5:
                            echo"<td>Quinto</td>";
                        break;
                        case 6:
                            echo"<td>Sexto</td>";
                        break;
                        case 7:
                            echo"<td>Séptimo</td>";
                        break;
                        case 8:
                            echo"<td>Octavo</td>";
                        break;
                        case 9:
                            echo"<td>Noveno</td>";
                        break;
                        case 10:
                            echo"<td>Décimo</td>";
                        break;
                    }
                   
                echo"</tr>";
        ?>
        <?php 
            $numero++;
            }
            echo"</table>";
        ?>
    </body>
</html>