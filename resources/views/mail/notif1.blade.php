
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAil</title>
</head>

<body>

    <div>


        <table style="background-color:#444;width:100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td style="padding:20px;text-align:center;font-family:sans-serif;color:#fff;font-size:28px">
                        Batipro63
                    </td>
                </tr>
            </tbody>
        </table>


        <table style="background-color:#eee;width:100%">
            <tbody>
                <tr>
                    <td align="center" style="padding:15px">


                        <table style="background-color:#fff;max-width:600px;width:100%;border:1px solid #ddd">
                            <tbody>
                                <tr>
                                    <td style="padding:15px;color:#333;font-size:16px;font-family:sans-serif">



                                        <p>Bonjour,</p>
                                        <p>{{ $details['body'] }}</p>
                                        <p>Très cordialement,</p>
                                        <p>Nom: {{ $details['nom']}}</p>
                                        <p>Tél. :{{ $details['telephone']}} - Email : <a href="mailto:{{ $details['email'] }}" target="_blank">{{ $details['email'] }}</a></p>

                                        <hr>

                                        <p>
                                            <small>
                                    <a href="https://batipro63.fr/" rel="nofollow noopener noreferrer nofollow noopener noreferrer" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://batipro63.fr/&amp;source=gmail&amp;ust=1641478464356000&amp;usg=AOvVaw251Dn4DGxeXzy3xmQX4GmO">https://batipro63.fr/</a><br>
                                    <br>
                                    
                                </small>
                                        </p>


                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>