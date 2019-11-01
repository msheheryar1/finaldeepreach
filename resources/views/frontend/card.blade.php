<html>
<head>


@if($card->card_size=='large')

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta name="robots" content="noindex, follow" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{$card->title}}" />
<meta name="twitter:description" content="{{$card->description}}" />
<meta name="twitter:image" content="{{asset('media/upload_image')}}/{{$card->twitter_image}}" />
<meta property="og:updated_time" content="1560282319" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$card->title}}" />
<meta property="og:description" content="{{$card->description}}" />
<meta property="og:image" content="{{asset('media/upload_image')}}/{{$card->twitter_image}}" />
<meta property="og:image:width" content="720" />
<meta property="og:image:height" content="404" />


@else



<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta name="robots" content="noindex, follow" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="{{$card->title}}" />
<meta name="twitter:description" content="{{$card->description}}" />
<meta name="twitter:image" content="{{asset('media/upload_image')}}/{{$card->twitter_image}}" />
<meta property="og:updated_time" content="1561064023" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$card->title}}" />
<meta property="og:description" content="{{$card->description}}" />
<meta property="og:image" content="{{asset('media/upload_image')}}/{{$card->twitter_image}}" />
<meta property="og:image:width" content="299" />
<meta property="og:image:height" content="299" />



@endif


<script>
            location.href = '//{{$card->destination}}';
    </script>
</head>

<body></body>
</html>