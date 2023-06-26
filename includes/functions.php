<?php

// head function
function head(string $title) {
  return "
  <!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'/>
    <link rel='stylesheet' href='./css/bootstrap.min.css'/>
    <link rel='stylesheet' type='text/css' href='./css/style.css'/>
    <title>$title</title>
  </head>
  ";

}