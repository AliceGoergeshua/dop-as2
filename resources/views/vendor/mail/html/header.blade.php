@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://aliceaddams.duckdns.org/pblogo.png" alt="PB Logo" height="50" style="display: block; margin: auto;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
