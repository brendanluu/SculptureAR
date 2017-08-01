<?php require_once 'includes/initialize.php'; ?>

<!-- begin the site, YUH -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
    <title>UncomfortableVR - Innovative WebVR-sites</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <!-- google-analytics -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-101605458-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>




    <!-- a-frame uncomfortablevr logo embed -->
    <section id="content">

    <div id=topwrapper>
      <a-scene Embedded vr-mode-ui="enabled: false">

      <a-assets>
    <a-asset-item id="obj-1" src="https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Flogo3d.obj"></a-asset-item>
    <a-asset-item id="mtl-1" src="https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Flogo3d.mtl"></a-asset-item>
    <a-asset-item id="obj-2" src="https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Fword3d.obj"></a-asset-item>
    <a-asset-item id="mtl-2" src="https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Fword3d.mtl"></a-asset-item>
    </a-assets>

      <a-entity id="wholeFace"
                scale = ".11 .11 .11"
                position="0 1.75 -2.0"
                material="metalness: 1">

      <a-entity id="logo"
                obj-model="obj: #obj-1; mtl: #mtl-1"
                rotation="45 0 0"
                position="0 0 .5">

                <a-animation attribute="rotation"
                         dur="1000000"
                         fill="forwards"
                         to="-36000 1080 0"
                         easing="linear"
                         repeat="indefinite">
                </a-animation>

      </a-entity>

      <a-entity id="logo"
                obj-model="obj: #obj-1; mtl: #mtl-1"
                position="-20 0 15"
                rotation="0 60 0">


                <a-animation attribute="rotation"
                         dur="1000000"
                         fill="forwards"
                         to="36000 3600 0"
                         easing="linear"
                         repeat="indefinite">
                </a-animation>

      </a-entity>

      <a-entity id="logo"
                obj-model="obj: #obj-1; mtl: #mtl-1"
                position="20 0 15"
                rotation="0 60 0">


                <a-animation attribute="rotation"
                         dur="500000"
                         fill="forwards"
                         to="36000 1080 0"
                         easing="linear"
                         repeat="indefinite">
                </a-animation>

      </a-entity>


      <a-entity id="logo"
                obj-model="obj: #obj-1; mtl: #mtl-1"
                position="0 0 40"
                rotation="0 60 0">


                <a-animation attribute="rotation"
                         dur="500000"
                         fill="forwards"
                         to="36000 1080 0"
                         easing="linear"
                         repeat="indefinite">
                </a-animation>

      </a-entity>

      <!-- <a-entity id="word"
                obj-model="obj: #obj-2; mtl: #mtl-2"
                scale = "1 1 1"
                position="0 -2.15 -10"
      ></a-entity> -->

      </a-entity>




      <a-entity geometry="primitive:plane;height:10000;width:10000"
                material="shader:flat;transparent:true;repeat:10000 10000; src:https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Fgrid.png;metalness:0.6;roughness:0.4;"
                rotation="-90 90 0"
                position="-11 0 0"></a-entity>



      <a-sky color="#00FC00"></a-sky>
    </a-scene>


    </div>

    <div id="loading">
      <p>
        loading...
      </p>
    </div>



    <div id=bottomwrapper>



      <div id="bottomcontent">

        <div id=topinfo>

            <div id=logo>
              <!-- <img id=logomark src="imgs\uncomfortablevr_logo.svg" alt="Uncomfortable V R Logo"> -->
              <h1 id=logotype>UncomfortableVR</h1>
            </div>

            <h3>Innovative WebVR-sites.</h3>
            <h3><a href="mailto:brenkluu@gmail.com?subject=UncomfortableVR%20Submission&body=Enter%20link%20here...">Submit</a></h3>

      </div>

      <div id="allexp">

        <?php   $query = "SELECT * FROM sites ORDER BY id DESC";
          $result = mysqli_query($connection, $query);

          // Check there are no errors with our SQL statement
          if (!$result) {
            die ("Database query failed.");
          }
          while ($site = mysqli_fetch_assoc($result)) {
        ?>

        <div id="exp">
          <a href="<?php echo $site['siteLink']; ?>" target="_blank" >
            <img src="<?php echo $site['siteImage']; ?>" alt="<?php echo $site['siteTitle']; ?>"><?php echo $site['siteTitle']; ?></a>
        </div>

        <?php
      } // end while
      mysqli_free_result($result);
    ?>

    </div>

    <div id="bottominfo">
      <h3>Created by <a href="http://www.brendanluu.com">brendan luu</a></h3>
    </div>


  </div>

</div>

    </section>



  </body>
</html>
