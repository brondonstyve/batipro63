<!DOCTYPE html>
<html>
<head>
    <title>{{env('APP_NAME')}}</title>
</head>
<body>


    @if ($details['title']=='demande de terrain')
    
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <br>
    Ces informations sont les suivantes:
    <br>
    <span>Email : {{ $details['email'] }}</span>
    <br>
    <span>Nom : {{ $details['nom']}}</span>
    <br>
    <span>Code Postal : {{ $details['postal'] }}</span>
    <br>
    <span>Ville : {{ $details['ville'] }}</span>
    <br>
    <span>Téléphone : {{ $details['telephone'] }}</span>

       @else
       <h1>{{ $details['title'] }}</h1>
       <p>{{ $details['body'] }}</p>
       <br>
       <span>Email : {{ $details['email'] }}</span>
       <br>
       <span>Nom : {{ $details['nom'] }}</span>
    @endif

    


   
    <p>Merci!</p>
</body>
</html>