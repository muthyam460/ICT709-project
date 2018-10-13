<br>
<table class='table'>
  <tr>
    <th>Day</th> <th> Employee </th><th>Time IN</th> <th> Time out </th> <th> Break </th> <th> Total Hours </th>
  </tr>
  <?php foreach ($records as $year => $users){
    echo "<tr><td rowspan='".$totalCountByYear[$year]."' >".date('D', strtotime($year))."</td>";
    $r = 1;
    foreach ($users as $userId => $attendances) {
      $row = "";
      if( $r == 1 ){
        $row.="<td rowspan='".count($attendances)."'>".$attendances[0]->name."</td>";
        $row.=timeCol( $attendances );
      }else {
        $row.="<tr><td rowspan='".count($attendances)."'>".$attendances[0]->name."</td>";
        $row.=timeCol( $attendances );
        $row.="</tr>";
      }
      $r++;


      echo $row;
    }
    echo "</tr>";
  }
  function timeCol( $attendances ){
    $row = "";
    foreach ($attendances as $key => $attendance) {

      if( $key > 0 ){
        $row.="<tr><td > ".$attendance->time_in." </td> <td > ".$attendance->time_out." </td> <td > ".$attendance->break." </td> <td> ".getWorkingHours( $attendance )." </td> </tr>";
      } else {
        $row.="<td > ".$attendance->time_in." </td> <td > ".$attendance->time_out." </td>  <td > ".$attendance->break." </td> <td> ".getWorkingHours( $attendance )." </td> ";
      }

    }
    return $row;
  }

  function getWorkingHours( $attendance ){
    $minutes =  round((strtotime( $attendance->time_out ) - strtotime( $attendance->time_in ))/  60, 1);
    $final = $minutes - $attendance->break;
    return $final;
  }
  ?>
</table>
