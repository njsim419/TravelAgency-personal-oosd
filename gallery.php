<!DOCTYPE html>
<?php
 include "header.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta description content="Photo Gallery">
        <meta name="author" content="Nicholas Sim">
        <meta name="viewpoint" content="width=device-width, inital-scale=1.0">
        <title>Photo Gallery</title>
        <script>  var images =[];</script>
    </head>
    <style>
    img{
        border-radius:3px;
    }
    </style>
    <body>
    <div class="jumbotron text-center">
        <h2>Photo Gallery</h2>
    </div>


    <div class="container">
    <div class="row">


        <script>


var createImage = function(src, desc){
    var img = new Image();
    img.src = src;
    img.alt = desc;
    img.title = desc;
    return img;
};

images.push(createImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKiufo_Yuwr4bCJjHZBAC7JUmeSC2mLUK72QpaoeYbVM3SKbRe","Rocky Mountains"));
images.push(createImage("https://www.nps.gov/lacl/learn/nature/images/Mountains-page_-Image-w-cred-cap_-1200w_-Neacola-CRL00222_3.jpg","Jasper"));
images.push(createImage("https://static1.squarespace.com/static/57b9b98a29687f1ef5c622df/t/58076a282994cac220a54fc0/1476880941503/Tatra+Mountains","Banff"));
images.push(createImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKiufo_Yuwr4bCJjHZBAC7JUmeSC2mLUK72QpaoeYbVM3SKbRe","Mountains"));
images.push(createImage("https://www.narcity.com/u/2018/06/14/ceded7734fe147d8eaa63b08313bd1384879e2af.jpg_1200x630.jpg","Beach"));
images.push(createImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0vHjyZVyQJhwp25bMa8C1lZG7FPhnxVcSLaiUuqQPUliemE49 ","Ocean"));
images.push(createImage("https://www.rd.com/wp-content/uploads/2017/10/06_Paris_The-Best-Travel-Destinations-for-Fall-New-Survey-Finds_556743958-MarinaDa-760x506.jpg","No Image"));
images.push(createImage("https://via.placeholder.com/728x250.png?text=No%20Image%20Found","No Image"));
images.push(createImage("https://via.placeholder.com/728x250.png?text=No%20Image%20Found","No Image"));
images.push(createImage("https://via.placeholder.com/728x250.png?text=No%20Image%20Found","No Image"));
images.push(createImage("https://via.placeholder.com/728x250.png?text=No%20Image%20Found","No Image"));
images.push(createImage("https://via.placeholder.com/728x250.png?text=No%20Image%20Found","No Image"));
images.push(createImage("https://via.placeholder.com/728x250.png?text=No%20Image%20Found","No Image"));


for(x = 0; x < images.length; x++) {
   console.log(images[x].src);
   document.writeln('<div class="col-sm-12 col-md-4">');
   document.writeln('<img src="' + images[x].src + '" style="height:200px; width:100%;" />');
   document.writeln('<p class="text-center">'+images[x].alt +'</p>');
   document.writeln('</div>');

}
</script>



    </body>
</html>