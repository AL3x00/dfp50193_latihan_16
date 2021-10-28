<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknologi Kejuteraan Awam Dengan Kepujian' => [
            'STPM'
        ],
    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awam' => [
            'SPM',
            'Sijil Kolej Komuniti'
        ],
        'Diploma Seni Bina' => [
            'SPM',
            'Sijil Kolej Komuniti'
        ],
        'Diploma Geomatik' => [
            'SPM',
            'Sijil Kolej Komuniti'
        ],
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            background: orange;
        }
    </style>
</head>

<body>
    <table>
        <tr style="background: brown; color: white">
            <td><b>PROGRAM</b></td>
            <td><b>KELAYAKAN</b></td>
        </tr>
        <?php
        foreach ($program as $poli => $value) {
            echo "<th colspan=2>$poli</th>";
            echo "<tr>";
            foreach ($value as $course => $test) {
                echo "<td rowspan=2>$course</td>";

                foreach ($test as $kelayakan) {
                    echo "<td>$kelayakan</td>";
                    echo "<tr>";
                }
                echo '</td>';
                echo "</tr>";
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>