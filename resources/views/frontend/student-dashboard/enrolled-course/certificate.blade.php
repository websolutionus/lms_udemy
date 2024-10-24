<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <style>
        .certificate-body {
            width: 930px !important;
            height: 600px !important;
            background: gray;
            background-repeat: no-repeat;
            text-align: center;
        }
        body {
            margin: 0;
            padding: 0;
        }

        @page {
            size: 930px 600px;
            margin: 0;
        }

        .certificate-body div {
            /* display: inline-block; */
        }

        .certificate-body .title {
            font-size: 20px;
            font-weight: 600;
        }

        .certificate-body .subtitle {
            font-size: 18px;
            font-weight: 400;
        }

        .certificate-body .signature img {
            width: 120px;
            height: 100px;

        }

        @foreach($certificateItems as $item)
            #{{ $item->element_id }} {
                left: {{ $item->x_position }}px;
                top: {{ $item->y_position }}px;
                position: relative;
            }
        @endforeach
    </style>
</head>

<body>
    <div class="certificate-body" style="background-image: url({{ public_path($certificate->background) }});">
        <div id="title" class="title draggable-element">{{ $certificate->title }}</div>
        <div id="subtitle" class="subtitle draggable-element">{{ $certificate->sub_title }}</div>
        <div id="description" class="descrition draggable-element">{{ $certificate->description }}</div>
        <div id="signature" class="signature draggable-element"><img src="{{ public_path($certificate->signature) }}"
                alt=""></div>
    </div>
</body>

</html>
