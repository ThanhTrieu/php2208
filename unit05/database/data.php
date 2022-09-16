<?php
$dataCategory = [
    ['id' => 1, 'parent_id' => 0, 'name' => 'The thao'],
    ['id' => 2, 'parent_id' => 0, 'name' => 'Thoi trang'],
    ['id' => 3, 'parent_id' => 0, 'name' => 'Giai tri'],
    ['id' => 4, 'parent_id' => 1, 'name' => 'Bong da Anh'],
    ['id' => 5, 'parent_id' => 1, 'name' => 'Bong da Phap'],
    ['id' => 6, 'parent_id' => 2, 'name' => 'Thoi trang cong so'],
    ['id' => 7, 'parent_id' => 2, 'name' => 'Thoi trang dao pho'],
    ['id' => 8, 'parent_id' => 3, 'name' => 'Phim anh'],
    ['id' => 9, 'parent_id' => 3, 'name' => 'Ca nhac'],
    ['id' => 10, 'parent_id' => 9, 'name' => 'Ca nhac nuoc ngoai'],
    ['id' => 11, 'parent_id' => 9, 'name' => 'Ca nhac VN'],
    ['id' => 12, 'parent_id' => 8, 'name' => 'phim hanh dong'],
];
// xay dung mang de hien duoc menu
// can lay ra duoc tat ca nhung menu to nhat(parent_id  = 0)
function buildMenuCategory(){
    global $dataCategory;
    $tmpMenu = [];
    // c1
    foreach($dataCategory as $key => $item){
        if($item['parent_id'] == 0){
            $tmpMenu[] = $item;
            //loai bo nhung thang do ra khoi mang cha ban dau
            // xoa bo thang parent_id == 0
            unset($dataCategory[$key]);
        }
    }
    //c2
    foreach($tmpMenu as $key => $item){
        foreach($dataCategory as $k => $val){
            if($item['id'] == $val['parent_id']){
                $tmpMenu[$key]['sub_menu'][] = $val;
                unset($dataCategory[$k]);
            }
        }
    }
    //c3
    foreach ($tmpMenu as $key => $item) {
        if(!empty($item['sub_menu'])){
            foreach($item['sub_menu'] as $k => $val) {
                foreach($dataCategory as $i => $v){
                    if($val['id'] == $v['parent_id']){
                        $tmpMenu[$key]['sub_menu'][$k]['sub'][] = $v;
                        unset($dataCategory[$i]);
                    }
                }
            }
        }
    }
    return $tmpMenu;
}