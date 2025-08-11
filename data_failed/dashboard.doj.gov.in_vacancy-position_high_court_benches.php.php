<!DOCTYPE html>
<html>
<head>
	<title>Vacancy Position</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-map.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
<script src="https://cdn.anychart.com/geodata/2.1.1/countries/india/india.js"></script>
  <style>
    html, body, #container {
    width: 100%;
    height: 750px;
    margin: 0;
    padding: 0;
  }

    .chart--container {
      min-height: 800px;
      width: 100%;
      height: 100%;
    }

    .zc-ref {
      display: none;
    }
  </style>
  <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #2f4f4f;
  padding: 5px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #2f4f4f;
  color: black;
}

.header a.active {
  background-color: #2f4f4f;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="doj.png" class="logo"><img src="doj.png" width=200px></a>
  <div class="header-right" style="padding-top:27px;">
    <a class="active" href="https://dashboard.doj.gov.in/vacancy-position/" style="border: 1px solid;">Back</a>
    <!-- <a href="#contact">Contact</a>
    <a href="#about">About</a> -->
  </div>
</div>

<section class="content">
	<h2 style="text-align: center;">High Courts: Principal Seats and Benches</h2>
	<div class="row">
        <div class="col-md-12">
        	<div id="container">
          </div>
        </div>
       <!--  <div class="col-md-12" style="padding-left:50px; padding-right:50px;">
        <p style="font-size:12px;"><b>DISCLAIMER:</b>The information and data depicted in the above infographics on this website is for general information purposes only. The information is provided by the respective High Courts on the Department of Justice MIS portal and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website. </p>
    	</div>
    </div> --><!-- /.container-fluid -->
</section>


<script type="text/javascript">
  
  anychart.onDocumentReady(function() {
  // create map
  var map = anychart.map();

  // create data set
  var dataSet = anychart.data.set(
    [ {"id":"IN.AN","value":0, label: 'Andaman and Nicobar', "Principal seat": 'Kolkata', "Other Benches": 'Port Blair, Jaipaiguri', "fill": '#ff99c2', 'customName': 'CALCUTTA HIGH COURT'},
      {"id":"IN.AP","value":1, label: 'Andhra Pradesh', "Principal seat": 'Amravati', "Other Benches": 'Nil', "fill": '#b3ffff', 'customName': 'ANDHRA PRADESH HIGH COURT'},
      {"id":"IN.AR","value":2, label: 'Arunachal Pradesh', "Principal seat": 'Guwahati', "Other Benches": 'Kohima, Aizawl, Itanagar', "fill": '#d0e2bc', 'customName': 'GAUHATI HIGH COURT'},
      {"id":"IN.AS","value":3, label: 'Assam', "Principal seat": 'Guwahati', "Other Benches": 'Kohima, Aizawl, Itanagar', "fill": '#d0e2bc', 'customName': 'GAUHATI HIGH COURT'},
      {"id":"IN.BR","value":4, label: 'Bihar', "Principal seat": 'Patna', "Other Benches": 'Nil', "fill": '#f5f5f5', 'customName': 'PATNA HIGH COURT'},
      {"id":"IN.CH","value":5, label: 'Chandigarh', "Principal seat": 'Chandigarh', "Other Benches": 'Nil', "fill": '#ddddbb', 'customName': 'PUNJAB & HARYANA HIGH COURT'},
      {"id":"IN.CT","value":6, label: 'Chhattisgarh', "Principal seat": 'Bilaspur', "Other Benches": 'Nil', "fill": '#ffff99', 'customName': 'CHHATTISGARH HIGH COURT'},
      {"id":"IN.DN","value":7,  label: 'Dadra and Nagar Haveli', "Principal seat": 'Mumbai', "Other Benches": 'Nagpur, Panaji, Aurangabad', "fill": '#ffad99', 'customName': 'BOMBAY HIGH COURT'},
      {"id":"IN.DD","value":8, label: 'Daman and Diu', "Principal seat": 'Mumbai', "Other Benches": 'Nagpur, Panaji, Aurangabad', "fill": '#ffad99', 'customName': 'BOMBAY HIGH COURT'},
      {"id":"IN.DL","value":9, label: 'Delhi', "Principal seat": 'New Delhi', "Other Benches": 'Nil', "fill": '#c2d6d6', 'customName': 'DELHI HIGH COURT'},
      {"id":"IN.GA","value":10, label: 'Goa', "Principal seat": 'Mumbai', "Other Benches": 'Nagpur, Panaji, Aurangabad', "fill": '#ffad99', 'customName': 'BOMBAY HIGH COURT'},
      {"id":"IN.GJ","value":11, label: 'Gujarat', "Principal seat": 'Sola(Ahmedabad)', "Other Benches": 'Nil', "fill": '#ffd480', 'customName': 'GUJARAT HIGH COURT'},
      {"id":"IN.HR","value":12, label: 'Haryana', "Principal seat": 'Chandigarh', "Other Benches": 'Nil', "fill": '#ddddbb', 'customName': 'PUNJAB & HARYANA HIGH COURT'},
      {"id":"IN.HP","value":13, label: 'Himachal Pradesh', "Principal seat": 'Shimla', "Other Benches": 'Nil', "fill": '#99ff99', 'customName': 'HIMACHAL PRADESH HIGH COURT'},
      {"id":"IN.JH","value":14, label: 'Jharkhand', "Principal seat": 'Ranchi', "Other Benches": '', "fill": '#ffcc99', 'customName': 'JHARKHAND HIGH COURT'},
      {"id":"IN.KA","value":15, label: 'Karnataka', "Principal seat": 'Bangalore', "Other Benches": 'Dharward, Gulbarga', "fill": '#e699ff', 'customName': 'KARNATAKA HIGH COURT'},
      {"id":"IN.KL","value":16, label: 'Kerala', "Principal seat": 'Kochi', "Other Benches": 'Nil', "fill": '#c2c2d6', 'customName': 'KERALA HIGH COURT'},
      {"id":"IN.LD","value":17, label: 'Lakshadweep', "Principal seat": 'Kochi', "Other Benches": 'Nil', "fill": '#c2c2d6', 'customName': 'KERALA HIGH COURT'},
      {"id":"IN.MP","value":18, label: 'Madhya Pradesh', "Principal seat": 'Jabalpur', "Other Benches": 'Gwalior, Indore', "fill": '#097969', 'customName': 'MADHYA PRADESH HIGH COURT'},
      {"id":"IN.MH","value":19, label: 'Maharashtra', "Principal seat": 'Mumbai', "Other Benches": 'Nagpur, Panaji, Aurangabad', "fill": '#ffad99', 'customName': 'BOMBAY HIGH COURT'},
      {"id":"IN.MNL","value":20, label: 'Manipur', "Principal seat": 'Imphal', "Other Benches": 'Nil', "fill": '#99ffff', 'customName': 'MANIPUR HIGH COURT'},
      {"id":"IN.ML","value":21, label: 'Meghalaya', "Principal seat": 'Shillong', "Other Benches": 'Nil', "fill": '#1ac6ff', 'customName': 'MEGHALAYA HIGH COURT'},
      {"id":"IN.MZ","value":22, label: 'Mizoram', "Principal seat": 'Guwahati', "Other Benches": 'Kohima, Aizawl, Itanagar', "fill": '#d0e2bc', 'customName': 'GAUHATI HIGH COURT'},
      {"id":"IN.NL","value":23, label: {x: 1, y: 1, positionMode: "relative", format: 'Nagaland'}, "Principal seat": 'Guwahati', "Other Benches": 'Kohima, Aizawl, Itanagar', "fill": '#d0e2bc', 'customName': 'GAUHATI HIGH COURT'},
      {"id":"IN.OR","value":24, label: 'Odisha', "Principal seat": 'Cuttack', "Other Benches": 'Nil', "fill": '#ff6666', 'customName': 'ORISSA HIGH COURT'},
      {"id":"IN.PY","value":25,  label: 'Puducherry', "Principal seat": 'Chennai', "Other Benches": 'Madurai', "fill": '#3366cc', 'customName': 'MADRAS HIGH COURT'},
      {"id":"IN.PB","value":26, label: 'Punjab', "Principal seat": 'Chandigarh', "Other Benches": 'Nil', "fill": '#ddddbb', 'customName': 'PUNJAB & HARYANA HIGH COURT'},
      {"id":"IN.RJ","value":27, label: 'Rajasthan', "Principal seat": 'Jodhpur', "Other Benches": 'Jaipur', "fill": '#ff66b3', 'customName': 'RAJASTHAN HIGH COURT'},
      {"id":"IN.SK","value":28, label: 'Sikkim', "Principal seat": 'Gangtok', "Other Benches": 'Nil', "fill": '#ffff99', 'customName': 'SIKKIM HIGH COURT'},
      {"id":"IN.TN","value":29,  label: 'Tamil Nadu', "Principal seat": 'Chennai', "Other Benches": 'Madurai', "fill": '#3366cc', 'customName': 'MADRAS HIGH COURT'},
      {"id":"IN.TR","value":30, label: 'Tripura', "Principal seat": 'Agartala', "Other Benches": 'Nil', "fill": '#ff9900', 'customName': 'TRIPURA HIGH COURT'},
      {"id":"IN.UP","value":31, label: 'Uttar Pradesh', "Principal seat": 'Prayagraj', "Other Benches": 'Lucknow', "fill": '#b3d9ff', 'customName': 'ALLAHABAD HIGH COURT'},
      {"id":"IN.UT","value":32, label: 'Uttarakhand', "Principal seat": 'Nainital', "Other Benches": 'Nil', "fill": '#9999ff', 'customName': 'UTTARAKHAND HIGH COURT'},
      {"id":"IN.WB","value":33, label: 'West Bengal', "Principal seat": 'Kolkata', "Other Benches": 'Port Blair, Jaipaiguri',  "fill": '#ff99c2', 'customName': 'CALCUTTA HIGH COURT'},
      {"id":"IN.TG","value":34, label: 'Telangana', "Principal seat": 'Hyderabad', "Other Benches": 'Nil', "fill": '#99ff99', 'customName': 'TELANGANA HIGH COURT'},
      {"id":"IN.JK","value":35, label: 'Jammu and Kashmir', "Principal seat": 'Jammu & Srinagar', "Other Benches": 'Nil', "fill": '#ffc299', 'customName': 'HIGH COURT OF JAMMU & KASHMIR and LADAKH'},
      {"id":"IN.LA","value":36, label: 'Ladakh', "Principal seat": 'Jammu & Srinagar', "Other Benches": 'Nil', "fill": '#ffc299', 'customName': 'HIGH COURT OF JAMMU & KASHMIR and LADAKH'}]
  );

  // create choropleth series
  series = map.choropleth(dataSet);

  // set geoIdField to 'id', this field contains in geo data meta properties
  series.geoIdField('id');

  // set map color settings
  series.colorScale(anychart.scales.linearColor('#deebf7', '#3182bd'));
  series.hovered().fill('#F5F5F5');
  series.labels(true);
  series.overlapMode("allow-overlap");

  series.tooltip().format(function() {
    // here return the desired content
    return `Principal seat: ${this.getData('Principal seat')}
    Other Benches: ${this.getData('Other Benches')}`;
  });

  series.tooltip().titleFormat(function() {
    return this.getData('customName');
  });


  // set geo data, you can find this map in our geo maps collection
  // https://cdn.anychart.com/#maps-collection
  map.geoData(anychart.maps['india']);

   map.tooltip().titleFormat('{%label}');
  series.labels().enabled(true).format('{%label}');

  //set map container id (div)
  map.container('container');

  //initiate map drawing
  map.draw();
});
</script>

</body>
</html>