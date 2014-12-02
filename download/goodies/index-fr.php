<?php
    $breadcrumbs = array
    (
        'T�l�charger' => 'download-fr.php',
        'Goodies' => 'download/goodies/index-fr.php'
    );
    include('../../header-fr.php');
?>

<h1>Goodies</h1>

<h2>Logo SFML</h2>
<p>
    Le logo officiel de SFML est dans le domaine publique, vous pouvez en faire tout ce que vous voulez.
</p>
<img class="screenshot"src="sfml-logo-small.png" title="Logo SFML" />

<div class="link-box three-columns-left">
    <a class="download" href="sfml-logo-small.png">
        <div class="title">Petit</div>
        <div class="description">PNG, 373x113 px</div>
    </a>
</div>

<div class="link-box three-columns-middle">
    <a class="download" href="sfml-logo-big.png">
        <div class="title">Grand</div>
        <div class="description">PNG, 1001x304</div>
    </a>
</div>

<div class="link-box three-columns-right">
    <a class="download" href="sfml-logo.svg">
        <div class="title">Vectoris�</div>
        <div class="description">SVG</div>
    </a>
</div>

<?php
    require("../../footer-fr.php");
?>