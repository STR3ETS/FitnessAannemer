<h2>Nieuwe aanvraag adviesgesprek</h2>

<table cellpadding="8" cellspacing="0" style="border-collapse:collapse;width:100%;max-width:600px;font-family:Arial,sans-serif;font-size:14px;">
    <tr style="background:#f8f9fa;">
        <td style="font-weight:bold;width:180px;border-bottom:1px solid #eee;">Naam</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['naam'] }}</td>
    </tr>
    <tr>
        <td style="font-weight:bold;border-bottom:1px solid #eee;">E-mail</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['email'] }}</td>
    </tr>
    <tr style="background:#f8f9fa;">
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Telefoon</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['telefoon'] }}</td>
    </tr>
    @if(!empty($data['bedrijfsnaam']))
    <tr>
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Bedrijfsnaam</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['bedrijfsnaam'] }}</td>
    </tr>
    @endif
    <tr style="background:#f8f9fa;">
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Type ruimte</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['ruimte_type'] }}</td>
    </tr>
    <tr>
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Oppervlakte</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['oppervlakte'] }}</td>
    </tr>
    <tr style="background:#f8f9fa;">
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Budget indicatie</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['budget'] }}</td>
    </tr>
    <tr>
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Gewenste start</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['startdatum'] }}</td>
    </tr>
    @if(!empty($data['bericht']))
    <tr style="background:#f8f9fa;">
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Bericht</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['bericht'] }}</td>
    </tr>
    @endif
</table>

@if(!empty($data['utm_source']) || !empty($data['utm_medium']) || !empty($data['utm_campaign']))
<br>
<h3>Marketingbron (UTM)</h3>
<table cellpadding="6" cellspacing="0" style="border-collapse:collapse;font-family:Arial,sans-serif;font-size:13px;color:#666;">
    @foreach(['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'] as $utm)
        @if(!empty($data[$utm]))
        <tr>
            <td style="font-weight:bold;width:140px;">{{ $utm }}</td>
            <td>{{ $data[$utm] }}</td>
        </tr>
        @endif
    @endforeach
</table>
@endif
