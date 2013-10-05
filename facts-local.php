<html>
<head>

  <link href="local/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="factsfigures/fontello/css/fontello.css" rel="stylesheet" type="text/css">
  <link href="local/style.css" rel="stylesheet" type="text/css">
  <link href="factsfigures/main.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="local/jquery.js"></script>
  <script type="text/javascript" src="local/bootstrap.js"></script>
  <script type="text/javascript" src="local/jsapi.js"></script>
  <script type="text/javascript" src="local/script.js"></script>

</head>
<body>

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
      <ul class="nav nav-tabs">
        <li class="facts active"><a href="#">Facts</a></li>
        <li class="figures"><a href="#">Figures</a></li>
      </ul>
    </div>
  </div>

  <div class="rij facts">
    <div class="container-fluid">
      <h2>Facts</h2>
      <div class="row-fluid">
        <h3>Energie</h3>
      </div>
      
      <div class="row-fluid">
        <div class="span4 chart col1" id="chart-1">
            <div class="controls">
              <ul>
                <li><a class="source chart-1" title="bron"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-1" title="Meer informatie"><i class="icon-info-circled-1"></i></a></li>
              </ul>
            </div>
          <h4></h4>
          <p></p>
          <div id="chart_div1" class="graph"></div>
        </div>
        <div class="span4 chart col2" id="chart-2">
          <div class="controls">
              <ul>
                <li><a class="source chart-2" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-2" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div2" class="graph"></div>
        </div>
        <div class="span4 chart col3" id="chart-3">
          <div class="controls">
              <ul>
                <li><a class="source chart-3" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-3" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div3" class="graph"></div>
        </div>
      </div>
      <hr />

      <div class="row-fluid">
        <div class="span4 chart col1" id="chart-4">
          <div class="controls">
              <ul>
                <li><a class="source chart-4" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-4" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div4" class="graph"> </div>
        </div>
        <div class="span4 chart col2" id="chart-5">
          <div class="controls">
              <ul>
                <li><a class="source chart-5" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-5" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div5" class="graph"> </div>
        </div>
        <div class="span4 chart col3" id="chart-6">
          <div class="controls">
              <ul>
                <li><a class="source chart-6" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-6" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div6" class="graph"> </div>
        </div>
      </div>
      <hr />

      <div class="row-fluid">
        <div class="span4 chart col1" id="chart-7">
          <div class="controls">
              <ul>
                <li><a class="source chart-7" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-7" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div7" class="graph"> </div>
        </div>
        <div class="span4 chart col2" id="chart-8">
          <div class="controls">
              <ul>
                <li><a class="source chart-8" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-8" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div8" class="graph"> </div>
        </div>
      </div>

      <hr />
      <div class="row-fluid">
        <h3>Klimaatfonds Haaglanden</h3>
      </div>
      
      <div class="row-fluid">
        <div class="span4 chart col1" id="chart-9">
          <div class="controls">
              <ul>
                <li><a class="source chart-9" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-9" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div9" class="graph"> </div>
        </div>
      </div>

      <hr />
      <div class="row-fluid">
        <h3>Mobiliteit</h3>
      </div>
      
      <div class="row-fluid">
        <div class="span4 chart col1" id="chart-10">
          <div class="controls">
              <ul>
                <li><a class="source chart-10" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-10" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div10" class="graph"> </div>
        </div>
        <div class="span4 chart col2" id="chart-11">
          <div class="controls">
              <ul>
                <li><a class="source chart-11" title="bron" href="#infoModal"><i class="icon-link-1"></i></a></li>
                <li><a class="info chart-11" title="Meer informatie" href="#infoModal"><i class="icon-info-circled-1"></i></a></li>
              </ul>
          </div>
          <h4></h4>
          <p></p>
          <div id="chart_div11" class="graph"> </div>
        </div>
      </div>
    </div>
  </div>

  <div class="rij figures"> 
    <div class="container-fluid">
      <h2>Figures</h2>
      <p>Duurzaam Den Haag maakt onder andere gebruik van ArcGIS online voor de presentatie van kaartmateriaal.</p>
      <a href="http://ddh.maps.arcgis.com/home/"><img src="factsfigures/img/arcgis.png" width="50%";/></a>
      <div class="map-examples">
        <p>Bekijk het totale aanbod van kaarten op <a href="http://ddh.maps.arcgis.com" target="_blank">Arcgis Online</a>. Hieronder staat een selectie van een aantal beschikbare kaarten:</p>
        <div class="map">
          <img src="factsfigures/img/map1.png" width="150px" />
          <p>CO2 Uitstoot Den Haag</p>
        </div>
        <div class="map">
          <img src="factsfigures/img/map2.png" width="150px" />
          <p>Energie opwekking</p>
        </div>
        <div class="map">
          <img src="factsfigures/img/map3.png" width="150px" />
          <p>Energielabels</p>
        </div>
        <div class="map">
          <img src="factsfigures/img/map4.png" width="150px" />
          <p>Stadsboerderijen</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="infoModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Header</h3>
  </div>
  <div class="modal-body">
    <p>Information</p>
  </div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn">Close</a>
  </div>
</div>

</body>