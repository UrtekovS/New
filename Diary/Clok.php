
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2017/thooclock/jquery.thooClock.js"></script>

<style>
/* background style */
body{
background: #FC354C;
background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
background: linear-gradient(to right, #0ABFBC, #FC354C);
}
/* clock style */
#myclock canvas{
width:100%;
max-width:100%;
}
</style>

<div class="container">
<div class="row">

 <div class="col-md-6 col-md-offset-3">

<div id="myclock"></div>

</div>

</div><!-- ./row -->
</div><!-- ./container -->

<script>
 $(document).ready(function(){
 $('#myclock').thooClock({
 size:$(document).width()/1.4,
 dialColor:'#fff',
 dialBackgroundColor:'transparent',
 secondHandColor:'#F3A829',
 minuteHandColor:'#e74c3c',
 hourHandColor:'#8bad4e',
 showNumerals:true,
 brandText:'BootstrapTema',
 brandText2:'Russia',
 });

 });
</script>