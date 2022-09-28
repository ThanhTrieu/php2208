<?php
function kiemTraSinhNhat(){
    if(isset($_POST['btnSubmit'])){
        $birthday = $_POST['birthday'] ?? null;
        $birthday = trim(strip_tags($birthday));
        // can lay ra dc ngay sinh va thang sinh cua nguoi dung
        $arrBirthday   = explode('-',$birthday);
        $yearBirthday  = $arrBirthday[0] ?? null;
        $monthBirthday = $arrBirthday[1] ?? null;
        $dateBirthday  = $arrBirthday[2] ?? null;
        if(checkdate(
            (int)$monthBirthday,
            (int)$dateBirthday,
            (int)$yearBirthday)
        ) {
            $currentYear = date('Y');
            $birthdayCurrentYear = "{$currentYear}-{$monthBirthday}-{$dateBirthday}";
            $today = date('Y-m-d');
            // so sanh today vs birthdayCurrentYear
            $timeBirthday = strtotime($birthdayCurrentYear);
            $timeToday = strtotime($today);
            if($timeBirthday < $timeToday){
                // qua sinh nhat roi
                header("Location:../birthday.php?mess=pass&date={$birthdayCurrentYear}");
            } elseif($timeBirthday === $timeToday){
                // dung la nhay sinh nhat
                header("Location:../birthday.php?mess=happy&date={$birthdayCurrentYear}");
            } else {
                // chua toi sinh nhat
                // tinh dc con bao nhieu ngay nua
                $day = ($timeBirthday - $timeToday)/86400;
                header("Location:../birthday.php?mess=wait&date={$birthdayCurrentYear}&day={$day}");
            }
        } else {
            header("Location:../birthday.php?error=fail");
        }
    }
}
kiemTraSinhNhat();