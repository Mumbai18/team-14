<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<script type="text/javascript">
$(document).ready(function(){
  $('span').click(function(){
    if ($(this).hasClass('first')){
        $('#progress-bar').val('0');
        $(this).nextAll().removeClass('border-change');  
        $('.percent').html("0% Complete");
       }else if ($(this).hasClass('second')){
        $(this).nextAll().removeClass('border-change');  
        $('#progress-bar').val('34');
        $(this).prevAll().addClass('border-change');  
        $(this).addClass('border-change');
         $('.percent').html("33% Complete");
       }else if ($(this).hasClass('third')){
        $(this).nextAll().removeClass('border-change');  
        $('#progress-bar').val('67');
        $(this).prevAll().addClass('border-change'); 
        $(this).addClass('border-change');
        $('.percent').html("66% Complete");
       } else{
        $('#progress-bar').val('100');
         $(this).addClass('border-change');
        $(this).prevAll().addClass('border-change');
         $('.percent').html("100% Complete");
       }
  });
});// complete click 
</script>

<style type="text/css">
 *{
  box-sizing: border-box;
}
html,body{
  height: 100%;
  width: 100%;
  padding: 0;
  margin: 0 auto;
  color: #000;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/45816/noisy-bg.png') #27ae60;
}
.cont{
  height: 100%;
  width: 576px;
  left: calc(50% - 288px);
  padding: 0;
  margin: 0 auto;
  position: absolute;
}
#progress-bar{
  appearance:none;
  width: 576px;
  color: #000;
  height: 2px;
  margin: 0 auto;
}
span {
  height: 10px;
  width: 10px;
  border-radius: 100%;
  border: 3px solid #137CC0;
  background:#137CC0;
  position: absolute;
  left:0;
  top: 12px;
  cursor: pointer;
  transition: all 0.4s ease-in-out;
}
p{
  font-family: Arial;
  font-size: 14pt;
  text-shadow: 1px 1px 0px #000;
  color: #fff;
  text-align: center;
}
h1{
   font-family: Arial;
  font-size: 24pt;
  text-shadow: 1px 1px 0px #000;
  color: #fff;
  text-align: center; 
  margin:0;
  padding:0;
}
h3{
  font-family: Arial;
  font-size: 16pt;
  text-shadow: 1px 1px 0px #000;
  color: #fff;
  text-align: center; 
}
.second{
  left: 192px;
}
.third{
  left: 384px;
}
.fourth{
  left: 576px;
}
#progress-bar::-webkit-progress-value{ /* Changes line color */
  background: #fff;
  transition: all 0.4s ease-in-out;
}
#progress-bar::-webkit-progress-bar{ /* Changes background color */
  background: #137CC0;
}
.border-change{
  border-color:#fff;
  transition: all 0.4s ease-in-out;
}

</style>
<body>
<div class="cont">
 
<progress id="progress-bar" min="1" max="100" value="0"></progress>
<span class="first border-change"></span>
<span class="second"></span>
<span class="third"></span>
<span class="fourth"></span>
<p class="percent">0% Complete</p>
</div>
<div style="float: left;">
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
 
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
</body>
</html>
