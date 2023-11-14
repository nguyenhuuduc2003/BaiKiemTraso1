<!DOCTYPE html>
<html lang="en">
<body> 

<!-- 
Cau 1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
Cau 2: True
Cau 3: A
Cau 4: A
Cau 5: B
-->

<?php

// Cau 1

// function generateFibonacci($n) {
//     $fibonacciArray = array();
    
//     if ($n <= 0){
//         return $fibonacciArray;
//     } else if ($n == 1){
//         $fibonacciArray[] = 0;
//     } else if ($n == 2){
//         $fibonacciArray[] = 0;
//         $fibonacciArray[] = 1;
//     } else {
//         $fibonacciArray[] = 0;
//         $fibonacciArray[] = 1;
//         for ($i = 2; $i < $n; $i++) {
//             $fibonacciArray[] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
//         }
//     }
    
//     return $fibonacciArray;
// }
// $n = 10;
// $ShowFibonacci = generateFibonacci($n);
// echo "Dãy số Fibonacci đầu tiên có $n phần tử là: ";
// echo "$ShowFibonacci"

// Cau 2

// Mảng kết hợp
$hocSinh = array(
    array('id' => 01, 'name' => 'Duc', 'age' => 20, 'grade' => 9),
    array('id' => 02, 'name' => 'Anh', 'age' => 20, 'grade' => 10),
    array('id' => 03, 'name' => 'Mai', 'age' => 20, 'grade' => 10),
);

echo "Thông tin tất cả học sinh: " . "<br>";
foreach ($hocSinh as $hocSinh) {
    echo "ID: " . $hocSinh['id'] . "<br>" . " Tên: " . $hocSinh['name'] . "<br>" . " Tuổi: " . $hocSinh['age'] . "<br>" . " Điểm: " . $hocSinh['grade'] . "<br>";
}

// Tìm học sinh có điểm cao nhất
function timHSDiemCaoNhat($hocSinh) {
    $diemCaoNhat = 0;
    $hocSinhDiemCaoNhat = null;

    foreach ($hocSinh as $hocSinhh) {
        if ($hocSinhh['grade'] > $diemCaoNhat) {
            $diemCaoNhat = $hocSinhh['grade'];
            $hocSinhDiemCaoNhat = $hocSinhh;
        }
    }

    return $hocSinhDiemCaoNhat;
}

$hocSinhDiemCaoNhat = timHSDiemCaoNhat($hocSinh);
echo "Thông tin của học sinh có điểm cao nhất:" . "<br>";
echo "ID: " . $hocSinhDiemCaoNhat['id'] . "<br>" . "Tên: " . $hocSinhDiemCaoNhat['name'] . "<br>" . "Tuổi: " . $hocSinhDiemCaoNhat['age'] . "<br>" . "Điểm: " . $hocSinhDiemCaoNhat['grade'] . "<br>";

?>

</body>
</html>