<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Test Script
                </div>

                <div class="links">
                {!! Form::open(["route('test-page')"]) !!}
                    {!! Form::text('text') !!}
                    <br>
                    {!! Form::label('uppercase','To Uppercase') !!}
                    {!! Form::radio('style','uppercase') !!}
                    <br>
                    {!! Form::label('randomlowerupper','Random Lower Upper Case') !!}
                    {!! Form::radio('style','random') !!}
                    <br>
                    {!! Form::label('tocsv','To CSV') !!}
                    {!! Form::radio('style','tocsv') !!}
                    <br>
                    {!! Form::submit('Submit') !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </body>
</html>
