<p id="novaklasa">The <b>Los Angeles Clippers</b>, often abbreviated by the team as the <b>LA Clippers</b>, are an American professional  basketball team based in  Los Angeles, California. The Clippers compete in the National Basketball Association(NBA) as a member of the league's Western Conference Pacific Division.</p>

  


      <script type = "text/javascript">
          function displayNextImage() {
              $('#img').css("height",500);
              $('#img').css("width","auto");
              $('#img').fadeIn(1000);
              $('#img').delay(3000);
              $('#img').fadeOut(1000);
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];

          }

          function startTimer() {

              setInterval(displayNextImage, 5000);
              $('#img').delay(2000);
              $('#img').css("height",500);
              $('#img').css("width","auto");
              $('#img').fadeOut(3000);
          }

          var images = [], x = -1;
          images[0] = "images/history/1.jpg";
          images[1] = "images/history/2.jpg";
          images[2] = "images/history/3.jpg";
          images[3] = "images/history/4.jpg";
          images[4] = "images/history/5.jpg";
          images[5] = "images/history/6.jpg";
          images[6] = "images/history/7.jpg";
          images[7] = "images/history/8.jpg";
          images[8] = "images/history/9.jpg";
      </script>
   <body onload = "startTimer()">
       <img id="img" src="images/history/9.jpg"/>
       <br>
<span class="title">Here are some quick facts about Clippers</span>
<p><blockquote>
Founded:                    1971   </br>
Former cities:              Buffalo, San Diego   </br>
Arena:                      Staples Center </br>
Division Championships:     2 (2013, 2014)</br>
NBA Titles:                 0</br>
Playoffs appearances: 13</br>
Best Season:                57-25 (2013-14)</br>
Worst Season:               12-70 (1986-87)</br></br></blockquote>
</p>
