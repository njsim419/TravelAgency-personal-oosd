<!DOCTYPE html>
<html>
 <head>
  <title>Travel Experts</title>
  <script>
   var images = new Array();
   images[0] = new Image();
   images[0].src = 'https://media.gadventures.com/media-server/cache/c1/76/c176acf764c928d66a7af017aa03d66d.jpg';
   images[1] = new Image();
   images[1].src = 'https://gypsyguide.com/wp-content/uploads/2017/09/Calgary-to-Banff-Tour.jpg';
   images[2] = new Image();
   images[2].src = 'https://gypsyguide.com/wp-content/uploads/2017/09/Icefields-Parkway-Tour.jpg';

   var imageDesc = ["Peru", "Banff", "Jasper"];
  </script>
 <head>
 <?php include "header.php"; ?>

 <style>
      .jumbotron{
         background-image:url('<?php echo getWelcomeMessage()[1]; ?>');
         height:40vh;
         background-position: center;
         color:#fff;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
       }
	 </style>
 <body>
	<div class="jumbotron text-center" style="border-radius:0px; background-image:url('<?php echo getWelcomeMessage()[1]; ?>')'">
		<h1><?php echo getWelcomeMessage()[0]; ?></h1>
	</div>

	<div class="container">
	 <table class="table table-cover">
     <thead>
	 <tr>
	 <th style="width:30%;">Image</th>
	 <th>Description</th>
	 </tr>

	 <tbody>
	 <script>
		for (index = 0; index < images.length; ++index) {
			document.write('<tr>');
			document.write('<td><img style="width:100%;" src="'+images[index].src+'"></td>');
			document.write('<td>'+imageDesc[index]+'</td>');
			document.write('</tr>');
		}
	 </script>


	 </table>

	</div>
 </body>
</html>

<?php 
    function getWelcomeMessage(){
        $hour = date("h");

        if($hour >= 6 && $hour < 12){
            return array("Good Morning", 
            "https://airshowinc.com/-/media/images/marketing/c/casp/-i5p1201.jpg?bc=white&amp;as=0&amp;h=1080&amp;la=en&amp;w=1920&amp;lastupdate=20180313160801&amp;hash=da3e123bfd0e5a16afd395dfe4ff98ce835057ce");
        }
        if($hour >= 12 && $hour < 5){
            return array("Good Afternoon", 
            "https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/rfI6R8g/commercial-airplane-flying-above-clouds-late-afternoon_bvxm7oefl_thumbnail-full05.png");
        }else{
            return array("Good Evening", 
            "https://jooinn.com/images/airplane-flying-12.jpg");
        }
    }
    ?>