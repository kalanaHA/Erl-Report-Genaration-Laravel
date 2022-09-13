<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
      <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <title>ERL-Report</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
</style>
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>






     <style>
      /*plain map css*/
      html,
      body,
      #viewDiv {
        padding: 0;
        margin: 0;
        height: 100vh;
        width: 100%;
      }
      /*plain map css*/

      /*left menu*/
      .bs-canvas-overlay {
      opacity: 0.2;
    z-index: 1100;
  }

  .bs-canvas-header{
    background-color: #49b0f2;
    text-align: center;
  }

  .center{
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .h-center{
      display: flex;
    justify-content: center;
  }

  .h-equal{
     display: flex;
    align-items: center;
    justify-content: space-evenly;
  }


  .bs-canvas {
    font-family: 'Poppins', sans-serif;
    border-radius: 0 0.5rem 0.5rem 0;
    top: 0;
    z-index: 1110;
    overflow-x: hidden;
    overflow-y: auto;
    width: 20%;
    transition: margin 4s ease;
    -webkit-transition: margin .4s ease;
    -moz-transition: margin .4s ease;
    -ms-transition: margin .4s ease;
  }

  body {
    font-family: 'Poppins', sans-serif;
  }

  .bs-canvas-left {
    left: 0;
    margin-left: -20%;
  }

  .bs-canvas-right {
    right: 0;
    margin-right: -20%;
  }

  /* Only for demo */
  body {
      min-height: 100vh;
  }
  /*left menu*/

  .card-header{
    background-color: white;
  }

  .text-danger{
    text-align: left !important;
  }
    </style>
    <title>ERL-Report</title>


  </head>

