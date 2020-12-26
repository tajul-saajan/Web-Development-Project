<script>
var images = ["images/h1.jpg", "images/h2.jpg", "images/h3.jpg","images/h4.jpg"];

var i = 1;
var max = images.length;

function changeImage(){
  document.getElementById("slider").src = images[i++];
  if(i==max){
    i=0;
  }
}

setInterval(function(){changeImage()}, 3000);

</script>

<p align="center"><img src="images/h1.jpg" class="img-responsive" width="100%" id="slider" align="center"></p>
