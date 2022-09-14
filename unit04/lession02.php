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
    ['id' => 1,'name'=>'Teo','age'=> 21,'room_id'=>1],
    ['id' => 2,'name'=>'Ty','age'=> 21,'room_id'=>1],
    ['id' => 3,'name'=>'Hoi','age'=> 24,'room_id'=>2],
    ['id' => 4,'name'=>'Mao','age'=> 25,'room_id'=>3]
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
echo '<pre>';
print_r($staff);