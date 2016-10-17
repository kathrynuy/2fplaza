<h1>Guest List</h1>

<table border="1px">
  @foreach($guests as $guest)
  <tr>
    <td>{{ $guest -> firstname }}</td>
    <td>{{ $guest -> lastname }}</td>
    <td>Edit</td>
  </tr>
  @endforeach
</table>
