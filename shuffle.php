<?php
$number = array(); // 추첨번호 배열 선언
$room_number = array(); // 세대창고 번호 배열 선언
  
for($i=1; $i<=348;$i++) {
	array_push($number,$i); // 추첨번호 1~348 number 변수에 push
	array_push($room_number,$i); // 세대창고 번호 1~348 room_number 변수에 push
}
shuffle($room_number);	// 세대창고 배열 섞기

/*
섞은 세대창고 번호표와 추첨번호표 엑셀 저장
*/

header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = 추첨결과.xls" );
header( "Content-Description: PHP4 Generated Data" );
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
			for($i=0; $i<=348;$i++) {
			?>
			<tr>
				<td><?=$number[$i]?></td>
				<td><?=$room_number[$i]?></td>
			</tr>
			<?php
			}
			?>
			</tr>
			</tbody>
			</table>
	
	