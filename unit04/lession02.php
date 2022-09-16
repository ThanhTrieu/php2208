<?php
$rooms = [
    [
        'id' => 1,
        'name' => 'To chuc'
    ],
    [
        'id' => 2,
        'name' => 'IT'
    ],
    [
        'id' => 3,
        'name' => 'Ke Toan'
    ]
];
$staff = [
    ['id' => 1,'name'=>'Teo','age'=> 21,'room_id'=>1,'money' => 1000],
    ['id' => 2,'name'=>'Ty','age'=> 21,'room_id'=>1,'money' => 800],
    ['id' => 3,'name'=>'Hoi','age'=> 24,'room_id'=>2,'money' =>1500],
    ['id' => 4,'name'=>'Mao','age'=> 25,'room_id'=>3,'money' =>2000]
];

foreach($staff as $key => $item) {
    foreach($rooms as $k => $value) {
        // kiem tra ma phong cua nguoi nhan co bang ma phong cua cac phong ban hay ko?
        if($item['room_id'] == $value['id']){
            // biet dc nhan nao thuoc phong ban nao roi
            // bo sung ten phong tu mang rooms sang mang staff
            $staff[$key]['name_room'] = $value['name'];
        }
    }
}
// echo '<pre>';
// print_r($staff);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong nhan vien</title>
</head>
<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Ma NV</th>
                <th>Ho Ten</th>
                <th>Tuoi</th>
                <th>Phong ban</th>
                <th>Tien luong</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($staff as $key => $item): ?>
                <tr>
                    <td><?= $item['id'];  ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['age']; ?></td>
                    <td><?= $item['name_room']; ?></td>
                    <td><?= number_format($item['money']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Tong tien luong</td>
                <td>3242343</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>