<?php
/*
Template Name: Facts & Figures
*/
?>


<?php //get_header(); ?>

<div class="overview">
  <div class="rij kop subkop"></div>
  <div class='rij breadcrumbs'>
    <div class='pijl'></div>
  </div>

  <div class="rij">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="jumbotron">
          <h1>Facts & Figures</h1>
          <p>Het overzicht met feiten en visualisaties over duurzaamheid in Den Haag.</p> 
        </div>
      </div>
    </div>
  </div>
  <div class="rij">
    <div class="container-fluid">
      <div class="row-fluid">
        <h3>Transport en Vervoer</h3>
      </div>
      <div class="row-fluid">
        <div class="span4 chart" id="chart-1">
          <h4>Autobezit Den Haag</h4>
          <div class="controls">
            <ul>
              <li>
                <a class="tooltip" data-toggle="tooltip" title="bron" href="http://www.denhaag.buurtmonitor.nl/quickstep/QsBasic.aspx?sel_guid=e8a9b008-65a6-437d-b43e-0b8cbe0124a8">
                  <i class="icon-link-1"></i>
                </a>
              </li>
              <li>
                <a class="tooltip" data-toggle="tooltip" title="maximaliseer" href="#">
                  <i class="icon-resize-full"></i>
                </a>
              </li>
              <li>
                <a class="tooltip" data-toggle="tooltip" title="Meer informatie" href="#">
                  <i class="icon-info-circled-1"></i>
                </a>
              </li>
            </ul>
          </div>
          <p>Het aantal geregistreerde particuliere kentekens Den Haag (exclusief leaseauto's)</p>
          <div id="chart_div1" class="graph"> </div>
        </div>
      
        <div class="span4 chart middle" id="chart-2">
          <h4>Vervoerskeuze Den Haag</h4>
          <div class="controls">
            <ul>
              <li>
                <a class="tooltip" data-toggle="tooltip" title="bron" href="http://www.denhaag.buurtmonitor.nl/quickstep/QsBasic.aspx?sel_guid=d17c2e40-bb93-4a2b-b050-05eacb6bd018">
                  <i class="icon-link-1"></i>
                </a>
              </li>
              <li>
                <a class="tooltip" data-toggle="tooltip" title="maximaliseer" href="#">
                  <i class="icon-resize-full"></i>
                </a>
              </li>
              <li>
                <a class="tooltip" data-toggle="tooltip" title="Meer informatie" href="#">
                  <i class="icon-info-circled-1"></i>
                </a>
              </li>
            </ul>
          </div>
          <p>Het aandeel van verschillende vervoersvormen in Den Haag, volgens de Haagse Nota Mobiliteit 2011</p>
          <div id="chart_div2" class="graph"></div>
        </div>
      </div>

      <hr />

      <div class="span12">
        <h3>Energie</h3>
      </div>
      <div class="row-fluid">
        <div class="span4 chart" id="chart-3">
          <h4>Vastgoed: CO2 Uitstoot</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <div id="chart_div1" class="graph"> </div>
        </div>
        <div class="span4 chart middle">
          <h4>Vastgoed: Verbruik electra</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <div id="chart_div2" class="graph"> </div>
        </div>
        <div class="span4 chart">
          <h4>Vastgoed: Verbruik Gas</h4>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <div id="chart_div3" class="graph"> </div>
        </div>
      </div>

      <hr />
      
      <div class="row">
        <div class="span12">
          <h3>Duurzaam Den Haag</h3>
        </div>
        <div class="span4">
          <h4>Opwekking zonne-energie Den Haag</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <div id="chart_div4" class="graph"> </div>
        </div>

        <div class="span4">
          <h4>Resultaten Klimaatfonds</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <div id="chart_div5" class="graph"> </div>
        </div>

      </div>
    </div>
  </div>
</div>

<link href="/ddh-factsandfigures/factsfigures/fontello/css/fontello.css" rel="stylesheet" type="text/css">
<link href="/ddh-factsandfigures/factsfigures/main.css" rel="stylesheet" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="/ddh-factsandfigures/local/script-local.js"></script>


<?php //get_footer();?>