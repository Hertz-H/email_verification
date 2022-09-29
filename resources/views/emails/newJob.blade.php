<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h3> {{ $data['job']['title'] }}</h3>
    <div class="lowe_head">
        {{ $data['job']['description'] }}
        {{-- <a href="jobDetails/{{ $offer->sal_project_id->id }}#job{{ $offer->id }}"> click here</a> --}}
        <a href="http://localhost:8000/jobDetails/{{ $data['job']['id'] }}"> click here for more detials</a>


    </div>
    {{-- <form method="POST" action="{{ route('optAction') }}">
        <input type="text"style='display:none;' name='subscriber_id' value='{{ $data['subscriber_id'] }}'>
        <button type="submit"> opt out</button>
        <button type="submit"> opt in</button>


    </form> --}}


    </div>
</body>

</html>
