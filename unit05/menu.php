<?php
// nhung file php tu noi khac sang
require('database/data.php');

$dataMenu = buildMenuCategory();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .clearfix::after {
            display: block;
            content: '';
            clear: both;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
            font-size: 23px;
            display: block;
            height: 30px;
            width: 200px;
            padding-left: 20px;
            padding-right: 20px;
        }

        ul.level1 {
            background-color: antiquewhite;
        }

        nav ul.level1 > li {
            float: left;
            width: 200px;
            height: 30px;
           
            position: relative;
        }

        ul.level2 {
            position: absolute;
            background-color: blueviolet;
            top: 30px;
            left: 0;
            display: none;
        }

        ul.level2 > li {
            position: relative;
        }

        ul.level3 {
            position: absolute;
            left: 240px;
            top: 0;
            background-color: orange;
            display: none;
        }

        ul.level1 > li:hover ul.level2 {
            display: block;
        }

        ul.level2 > li:hover ul.level3 {
            display: block;
        }
    </style>
</head>
<body>
    <h1>menu đa cấp</h1>

    <nav>
        <ul class="level1 clearfix">
            <?php foreach($dataMenu as $key => $item): ?>
            <li>
                <a href="#"><?= $item['name']; ?></a>
                <ul class="level2 clearfix">
                    <?php if(!empty($item['sub_menu'])): ?>
                        <?php foreach($item['sub_menu'] as $k => $val): ?>
                            <li>
                                <a href="#"><?= $val['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    
</body>
</html>
