<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Gran Calzada')
<img src="{{ asset('img/Icons/Calzada-2.svg') }}" class="logo" width="150px" alt="Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
