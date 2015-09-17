<link rel="stylesheet" type="text/css" href="CSS/output.css">
<script src="JS/script.js"></script>
</head>
<body>

  <div id="container">
  <h1>Scale Utility</h1>
  <div id="content">
  <span class="underline">Diatonic</span>

  <?php
    $notesArray = array();

    if(isset($_POST["a"])) { array_push($notesArray, "A"); };
    if(isset($_POST["a#"])) { array_push($notesArray, "Bb/A#"); };
    if(isset($_POST["b"])) { array_push($notesArray, "B"); };
    if(isset($_POST["c"])) { array_push($notesArray, "C"); };
    if(isset($_POST["c#"])) { array_push($notesArray, "Db/C#"); };
    if(isset($_POST["d"])) { array_push($notesArray, "D"); };
    if(isset($_POST["d#"])) { array_push($notesArray, "Eb/D#"); };
    if(isset($_POST["e"])) { array_push($notesArray, "E"); };
    if(isset($_POST["f"])) { array_push($notesArray, "F"); };
    if(isset($_POST["f#"])) { array_push($notesArray, "Gb/F#"); };
    if(isset($_POST["g"])) { array_push($notesArray, "G"); };
    if(isset($_POST["g#"])) { array_push($notesArray, "Ab/G#"); };

   ?>
   <table class="table table-bordered table-condensed">
     <tr>
       <th>#</th>
       <th>A</th>
       <th>B</th>
       <th>Root (minor)</th>
       <th>2nd (diminished)</th>
       <th>3rd (major)</th>
       <th>4th (minor)</th>
       <th>5th (minor)</th>
       <th>6th (major)</th>
       <th>7th (major)</th>
       <!--<th>Goes with</th>-->
     </tr>

     <?php
      $scales_arrays = json_decode(file_get_contents("JS/scales.json"), true);
      $scalesArray = array();

      foreach($scales_arrays["diatonic"] as $scale) {
        $temp = 1;
        foreach($notesArray as $note) {
          if(!in_array($note, $scale)) {
            $temp = 0;
          }
        }
        if($temp === 1)
        {
          array_push($scalesArray, $temp);
        }
      }

      //now generate table

      foreach($scalesArray as $scale)
      {
        echo "<tr>";

        //camelot#
        echo "<td>" . $scale['camelot#'] . '</td>';
        //a
        echo "<td>" . $scale['a'] . '</td>';
        //b
        echo "<td>" . $scale['b'] . '</td>';
        //root
        echo "<td>" . $scale['root'] . '</td>';
        //2nd
        echo "<td>" . $scale['2nd'] . '</td>';
        //3rd
        echo "<td>" . $scale['3rd'] . '</td>';
        //4th
        echo "<td>" . $scale['4th'] . '</td>';
        //5th
        echo "<td>" . $scale['5th'] . '</td>';
        //6th
        echo "<td>" . $scale['6th'] . '</td>';
        //7th
        echo "<td>" . $scale['7th'] . '</td>';

      }

    ?>
   </table>
  <form method="post" action="index.php">
    <button class="btn btn-danger">Go Back</button> |
    <div id="infoButton">
      <a class="tip btn btn-default inline-block buttonSize" href="#" data-toggle="popover" data-html="true" id="item1" data-title="Scale Utility"
        data-content="
        <?php
          echo " Click <button type='button' class='btn btn-danger'>Go Back</button> to go back to the
            Scale Input page.<br><hr class='horizontalRule'>";

          echo "<b>Camelot Wheel Reference</b><hr class='horizontalRule'>";
          echo "<b>Scale-Chord Reference</b><hr class='horizontalRule'>";
          echo "<b>Note Frequency Chart</b><hr class='horizontalRule'>";

          echo "The rest of the features are documented by the tooltip on the Scale Input page.
            <hr class='horizontalRule'>";

          echo "Click <a class='tip btn btn-default inline-block buttonSize'><span id=
            'infoImage' class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></a>
              again to close this tooltip.";

        ?>
        "
        data-placement="top">
        <span id="infoImage" class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
    </div>
  </form>

</div>
</div>
