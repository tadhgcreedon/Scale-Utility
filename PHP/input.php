<link rel="stylesheet" type="text/css" href="CSS/input.css">
<script src="JS/script.js"></script>
</head>
<body>



<div id="container">
<h1>Scale Utility</h1>
<div id="content">
<form method="post" action="index.php">
<br>

<div id="blackKeys">
  <span id="csharp">
    <input type="checkbox" id="csharpNote" name="c#" value="c#" class="note">
    <label for="csharpNote" class="noteLabel blackKey">C#/Db<label/>
  </span>
  <span id="dsharp">
    <input type="checkbox" id="dsharpNote" name="d#" value="d#" class="note">
    <label for="dsharpNote" class="noteLabel blackKey">D#/Eb<label/>
  </span>
  <span id="fsharp">
    <input type="checkbox" id="fsharpNote" name="f#" value="f#" class="note">
    <label for="fsharpNote" class="noteLabel blackKey">F#/Gb<label/>
  </span>
  <span id="gsharp">
    <input type="checkbox" id="gsharpNote" name="g#" value="g#" class="note">
    <label for="gsharpNote" class="noteLabel blackKey">G#/Ab<label/>
  </span>
  <span id="asharp">
    <input type="checkbox" id="asharpNote" name="a#" value="a#" class="note">
    <label for="asharpNote" class="noteLabel blackKey">A#/Bb<label/>
  </span>
</div>

<div>

  <span>
    <input type="checkbox" id="cNote" name="c" value="c" class="note">
    <label for="cNote" class="noteLabel whiteKey">C<label/>
  </span>
  <span>
    <input type="checkbox" id="dNote" name="d" value="d" class="note">
    <label for="dNote" class="noteLabel whiteKey">D<label/>
  </span>
  <span>
    <input type="checkbox" id="eNote" name="e" value="e" class="note">
    <label for="eNote" class="noteLabel whiteKey">E<label/>
  </span>
  <span>
    <input type="checkbox" id="fNote" name="f" value="f" class="note">
    <label for="fNote" class="noteLabel whiteKey">F<label/>
  </span>
  <span>
    <input type="checkbox" id="gNote" name="g" value="g" class="note">
    <label for="gNote" class="noteLabel whiteKey">G<label/>
  </span>
  <span>
    <input type="checkbox" id="aNote" name="a" value="a" class="note">
    <label for="aNote" class="noteLabel whiteKey">A<label/>
  </span>
  <span>
    <input type="checkbox" id="bNote" name="b" value="b" class="note">
    <label for="bNote" class="noteLabel whiteKey">B<label/>
  </span>
</div><br>

<button class="btn btn-success">Find!</button> |
<div id="infoButton">
  <a class="tip btn btn-default inline-block buttonSize" href="#" data-toggle="popover" data-html="true" id="item1" data-title="Scale Utility"
    data-content="
    <?php
      echo "<b>What is this?</b><br>";
      echo "An <a href='http://a'>open source<a/> web utility for musical scale look-up and reference.<br><br>";
      echo "<b>What can it do?</b><br>";
      echo "It combines several tools into one:
        <ul>
        <li>A scale finder,</li>
        <li>playable keyboard,</li>
        <li>note frequency chart,</li>
        <li>scale-chord reference,</li>
        <li>and Camelot Wheel reference.</li>
        </ul><hr class='horizontalRule'>";
      echo "<b>Scale Finder</b><br>";
      echo "Click on notes in the piano roll to select or deselect them. Click
        <button type='button' class='btn btn-success'>Find!</button> to submit the selected notes - the
        Scale Output page, showing all the scales in the database containing those notes, will be returned.<br><br>
        Key Commands:<br>
        <span class='keyCommandText'>Shift</span> + <span class='keyCommandText'>a | w | s | e | d | f | t | g | y | h | u | j</span>
         will select and deselect corresponding notes.<br><hr class='horizontalRule'>";
      echo "<b>Playable Keyboard</b><br>";
      echo "Using key commands you can 'play' the piano on the scale input page.<br><br>
        Key commands:<br>
        Pressing <span class='keyCommandText'>a | w | s | e | d | f | t | g | y | h | u | j</span> will play
        the corresponding notes and highlight the pressed key.<hr class='horizontalRule'>";

      echo "The rest of the features are documented by the tooltip on the Scale Output page.
        <hr class='horizontalRule'>";
      echo "Click <a class='tip btn btn-default inline-block buttonSize'><span id=
        'infoImage' class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></a>
          again to close this tooltip.";

    ?>
    "
    data-placement="bottom">
    <span id="infoImage" class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
</div>
</form>
</div>
</div>
