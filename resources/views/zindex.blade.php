<html>
    <head>
        <title>Praktek Z-Index</title>
        <style>
        .box {
            height: 100px;
            width: 100px;
            position: relative;
        }

        .box-red {
            background: red;
            z-index: 1;
        }

        .box-yellow {
            background: yellow;
            left: 33px;
            bottom: 66px;
            z-index: 2;
        }

        .box-blue {
            background: blue;
            left: 66px;
            bottom: 99px;
            z-index: 3;
        }
    </style>
    </head>
    <body>
        <h1>Praktek Z-Index</h1>
        <div class="box box-red"></div>
        <div class="box box-yellow"></div>
        <div class="box box-blue"></div>
    </body>
</html>