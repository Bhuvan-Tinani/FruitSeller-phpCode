<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
    <style>
      .dropDown {
        display: inline-block;
      }
      .dropDown:hover .dropMenu {
        visibility: visible;
      }
      .dropMenu {
        visibility: hidden;
      }
      #item_btn {
        visibility: visible !important;
      }
      .dropMenu {
        display: flex;
        flex-direction: column;
      }
      .dropMenu a {
        text-decoration: none;
        background-color: white;
      }
    </style>
  </head>
  <body>
    <div class="dropDown">
      <button id="item_btn">Item</button>
      <div class="dropMenu">
        <a href="">Add Item</a>
        <a href="">View Item</a>
      </div>
    </div>
  </body>
</html>
