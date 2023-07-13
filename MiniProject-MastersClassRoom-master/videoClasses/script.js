
          //video
          var video_player = document.getElementById("videoPlayer"),
          links = video_player.getElementsByTagName('a');
          for (var i=0; i<links.length; i++) {
              links[i].onclick = StartPlay;
          
          function StartPlay(e) {
              e.preventDefault();
              filename = this.getAttribute("href");
              video = document.querySelector("#videoPlayer video");
              source = document.querySelectorAll("#videoPlayer video source");
              source[0].src = filename;
              video.load();
              video.play();    
          }
      }
            //video end
      $(document).ready(function(){
          $(".text").click(function(){
              $("h1").animate({
                fontSize: "+=5px"
              //FontFace:"arial"
          });
          });
      });