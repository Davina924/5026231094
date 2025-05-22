<html>
    <head>
        <style>
      .content-box {
        width: 160px;
            height: 80px;
            padding: 20px;
            border: 8px solid red;
            background: yellow;
        box-sizing:  content-box;
      }
      
      .border-box {
        width: 160px;
            height: 80px;
            padding: 20px;
            border: 8px solid red;
            background: yellow;
        box-sizing: border-box;
      } 
    </style>
    </head>
    <body>
        <h1>Box-Sizing</h1>

        <div class="content-box">Content-box</div>
        <br>
        <div class="border-box">Border-box</div>
    </body>
</html>