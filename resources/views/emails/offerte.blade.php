<h2>Nieuwe offerte-aanvraag</h2>

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
    @if(!empty($data['bedrijf']))
    <tr>
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Bedrijfsnaam</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['bedrijf'] }}</td>
    </tr>
    @endif
    <tr style="background:#f8f9fa;">
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Type ruimte</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['type_ruimte'] }}</td>
    </tr>
    @if(!empty($data['oppervlakte']))
    <tr>
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Oppervlakte</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['oppervlakte'] }}</td>
    </tr>
    @endif
    @if(!empty($data['budget']))
    <tr style="background:#f8f9fa;">
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Budget indicatie</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['budget'] }}</td>
    </tr>
    @endif
    @if(!empty($data['diensten']))
    <tr>
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Gewenste diensten</td>
        <td style="border-bottom:1px solid #eee;">{{ implode(', ', $data['diensten']) }}</td>
    </tr>
    @endif
    @if(!empty($data['bericht']))
    <tr style="background:#f8f9fa;">
        <td style="font-weight:bold;border-bottom:1px solid #eee;">Bericht</td>
        <td style="border-bottom:1px solid #eee;">{{ $data['bericht'] }}</td>
    </tr>
    @endif
</table>

<br>
<p style="font-family:Arial,sans-serif;font-size:12px;color:#999;">Bron: Offerte-aanvraag formulier op fitnessaannemer.nl</p>
