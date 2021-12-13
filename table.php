<!DOCTYPE html>
<html>
    <head>
    <style>
        body{
            
            margin :0;
        }
        table{
            background-color:black;
            border-collapse: collapse;
            margin:0;
            padding:0;
            width:1917.3px;
        }
        td{
            color:white;
            border: 0.5px solid black;
            height: 65.3px;
        }
    </style>
    </head>
<body>
<table>
    <tbody>
        <?php $num=0;?>
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?php for ($k = 0; $k < 28; $k++) : ?>
                    <?php $num = $num + 1; ?>
                    <td><?= $num; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>
</body>
</html>