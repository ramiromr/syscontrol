<hl>lista</hl>
{{ $resultado }}
<table border="1">
@foreach($resultado as $row)
<tr>
    <td>{{$row->pr_nomb}}</td>
    <td>{{$row->pr_senomb}}</td>
    <td>{{$row->pr_prape}}</td>
        
</tr>
@endforeach
</table>
