<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = array();
    $room_number = array();

    $input_text = $_POST['textarea_input'];
    $number = explode("\n", trim($input_text));

        for($i=11; $i<=184; $i++) {
            array_push($room_number, $i);
        }
        shuffle($room_number);

        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=추첨결과.xls");
        header("Content-Description: PHP Generated Data");
        ?>
        <table>
        <thead>
        <tr>
        <th scope="col">번호표</th>
        <th scope="col">계절창고번호</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for($i=0; $i < count($number); $i++) {
        ?>
        <tr>
            <td><?= trim($number[$i]) ?></td>
            <td><?= $room_number[$i] ?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
        <?php
        exit; // HTML 폼이 표시되지 않도록 스크립트 종료
}
?>
