<h1>一覧表示</h1>

<table>
  <tr>
    <th>カレンダー</th>
  </tr>
  @foreach($reservations as $reservation)
  <tr>
    <td>{{$reservation->reservation_date}}</td>
  </tr>
  @endforeach
</table>
