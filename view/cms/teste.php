
<!-- Gira um pouco a div -->
<style type="text/css" media="screen">
.square {
    width: 144px;
    height: 144px;
    background: #f0f;
    margin-right: 48px;
    float: left;
}

.transformed {
    -webkit-transform: rotate(15deg) scale(1.25, 0.5);
    -moz-transform: rotate(15deg) scale(1.25, 0.5);
    -ms-transform: rotate(15deg) scale(1.25, 0.5);
    transform: rotate(15deg) scale(1.25, 0.5);
}

.rotate{
  width: 200px;
  height: 200px;
  margin: 200px;
  float: left;
  background-color: blue;
}

.rotate:hover
{


        -webkit-transform: rotateZ(-30deg);
        -ms-transform: rotateZ(-30deg);
        transform: rotateZ(-30deg);
}
</style>


<div class="square"><p>Lorem ipsum dolor sit amet.</p></div>
<div class="square transformed"><p>Lorem ipsum dolor sit amet.</p></div>


<div class="rotate">
  texte
</div>


<!-- link com efeitos
http://wime.com.br/2015/08/21/8-efeitos-de-transicao-em-css3-css3-transitions/

 -->
