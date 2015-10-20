<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Crop estude</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  <link  href="https://cdn.rawgit.com/fengyuanchen/cropper/v1.0.0/dist/cropper.min.css" rel="stylesheet">
  <style type="text/css">
    .corte{
      border: 1px solid black;
      height: 500px;
      width: 500px;
    }
  </style>
</head>
<body>
  <div class="corte">
    <img src="python.png" style="width: 555px; height: 312px;" title="Python is the better">
  </div>


  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>  
  <script src="https://cdn.rawgit.com/fengyuanchen/cropper/v1.0.0/dist/cropper.min.js"></script>
  <script type="text/javascript">
  document.addEventListener('DOMContentLoaded',function(){
      $('.corte > img').cropper({
      aspectRatio: 16 / 9,
      autoCropArea: 0.65,
      strict: true,
      guides: true,
      highlight: true,
      dragCrop: true,
      cropBoxMovable: true,
      cropBoxResizable: true,
      modal: true,

    });
});


  </script>


<!-- 
Para usar o Cropper neccessita somente das bibliotecas dele. 
usa o jQuery e configura ele dentro do seu json 
exemplo 
$('lugar onde ele sera chamado').cropper({
  config: 'dados',
  config: 'dados'
});
 -->
</body>
</html>