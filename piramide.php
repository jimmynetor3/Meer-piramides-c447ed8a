<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            height: 50px;
            width: 50px;
            padding: 0px;
        }
        table {
            border: black 0.5px solid;
        }
        .black {
            background-color: black;
            border: black 5px solid;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php 
                for ($i=1; $i <= 8; $i++) { 
                    echo("<tr>");
                    for ($j=0; $j < $i; $j++) { 
                        echo('<td class="black"></td>');
                    }
                    echo("</tr>");
                }
            ?>
        </tbody>
    </table>
</body>
</html>