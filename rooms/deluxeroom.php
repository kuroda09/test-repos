<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../rooms/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <title>Deluxe Room</title>
</head>
<body>
<div class="about-wthree" id="about">
		  <div class="container">
          <button id="back-button">←</button>
			<img src="../rooms/image/delux.jpg" id="delux"> 
            <p>In a typical hotel, a deluxe room may include features such as:<br>
	• More square footage than standard rooms, providing extra space for guests to move around and relax.
<br>• Premium bedding and linens, such as high-thread-count sheets and plush pillows, to enhance the guest's comfort level.
<br>• Upgraded bathroom amenities, such as designer toiletries, robes, and slippers.
<br>• In-room technology, such as flat-screen TVs, and free high-speed internet access.
<br>• Enhanced views of the surrounding area, such as city or ocean views, depending on the location of the hotel.</p>
</div>
<div class="featured-about">
<h2 class="featured">Featured:</h2>
<p>• Wifi<br>
• Room Heater<br>
• Aircon<br>
• Television
</p>
<h2 class="title">Deluxe Room</h2>  
</div>
<script>
    const backButton = document.getElementById("back-button");

backButton.addEventListener("click", () => {
  window.history.back();
});
</script>
</body>
</html>