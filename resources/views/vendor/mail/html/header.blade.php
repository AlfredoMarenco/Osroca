<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Gran Calzada')
<img src="{{ asset('img/Icons/Calzada-1.png') }}" width="50%" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
