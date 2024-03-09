<?php
$number = array();
$room_number = array();
  
for($i=1; $i<=348;$i++) {
	array_push($number,$i);
	array_push($room_number,$i);
}
shuffle($room_number);	
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = 추첨결과.xls" );     //filename = 저장되는 파일명을 설정합니다.
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
	
	