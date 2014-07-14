<?php
echo '<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>';
echo '<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>';
Yii::app()->getClientScript()->registerCssFile(bu().'/css/gmap.css');

?>

<?php
/* @var $this LocationController */
/* @var $model Location */
/* @var $form TbActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'location-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<div class="control-group" id="clipboard"><label class="control-label" for="Clipboard">Clipboard (for data entry
			purpose only. Will not be saved)</label>

		<div class="controls">
			<textarea class="col-md-12" maxlength="1500" type="" rows="6"></textarea>
		</div>
	</div>
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'store_name',array('class'=>'col-md-6','maxlength'=>500)); ?>

	<?php echo $form->textFieldControlGroup($model,'address_line_1',array('class'=>'col-md-6','maxlength'=>800)); ?>

	<?php echo $form->textFieldControlGroup($model,'address_line_2',array('class'=>'col-md-6','maxlength'=>800)); ?>

	<?php echo $form->textFieldControlGroup($model,'city',array('class'=>'col-md-6','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'state',array('class'=>'col-md-6','maxlength'=>45)); ?>

	<?php echo $form->textFieldControlGroup($model,'zipcode',array('class'=>'col-md-6','maxlength'=>45)); ?>

	<?php echo $form->textFieldControlGroup($model,'country_code',array('class'=>'col-md-6','maxlength'=>2)); ?>

	<?php echo $form->textFieldControlGroup($model,'note',array('class'=>'col-md-6','maxlength'=>45)); ?>

	<?php echo $form->textFieldControlGroup($model,'latitude',array('class'=>'col-md-6', 'label' => 'Latitude (type in or click on map to select)')); ?>

	<?php echo $form->textFieldControlGroup($model,'longitude',array('class'=>'col-md-6', 'label' => 'Longitude (type in or click on map to select)')); ?>

	<div class="form-actions">
		<?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
			'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
			'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
	</div>

	<input id="pac-input" class="controls" type="text" placeholder="Search Box">
	<div id="map-canvas" class="voffset3">
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
Yii::app()->clientScript->registerScriptFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyC1RpnsU0y0yPoQSg1G_GyvmBmO5i1UH5E&v=3.exp&libraries=places',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScript('google maps','
	console.log("Init map...");
	function initialize() {
//        var mapOptions = {
//          center: new google.maps.LatLng(1.310118, 103.803778),
//          zoom: 13
//        };
//        var map = new google.maps.Map(document.getElementById("map-canvas"),
//            mapOptions);

	  var markers = [];
	  var map = new google.maps.Map(document.getElementById("map-canvas"), {
		mapTypeId: google.maps.MapTypeId.ROADMAP
	  });

	  var defaultBounds = new google.maps.LatLngBounds(
		  new google.maps.LatLng(1.280118, 103.773778),
		  new google.maps.LatLng(1.340118, 103.833778));
	  map.fitBounds(defaultBounds);

	  // Create the search box and link it to the UI element.
	  var input = /** @type {HTMLInputElement} */(
		  document.getElementById("pac-input"));
	  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

	  var searchBox = new google.maps.places.SearchBox(
		/** @type {HTMLInputElement} */(input));

	  // Listen for the event fired when the user selects an item from the
	  // pick list. Retrieve the matching places for that item.
	  google.maps.event.addListener(searchBox, "places_changed", function() {
		var places = searchBox.getPlaces();

		if (places.length == 0) {
		  return;
		}
		for (var i = 0, marker; marker = markers[i]; i++) {
		  marker.setMap(null);
		}

		// For each place, get the icon, place name, and location.
		markers = [];
		var bounds = new google.maps.LatLngBounds();
		for (var i = 0, place; place = places[i]; i++) {
		  var image = {
			url: place.icon,
			size: new google.maps.Size(71, 71),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(17, 34),
			scaledSize: new google.maps.Size(25, 25)
		  };

		  // Create a marker for each place.
		  var marker = new google.maps.Marker({
			map: map,
			icon: image,
			title: place.name,
			position: place.geometry.location
		  });

		  markers.push(marker);

		  bounds.extend(place.geometry.location);
		}

		map.fitBounds(bounds);
	  });

	  // Bias the SearchBox results towards places that are within the bounds of the
	  // current map"s viewport.
	  google.maps.event.addListener(map, "bounds_changed", function() {
		var bounds = map.getBounds();
		searchBox.setBounds(bounds);
	  });



		google.maps.event.addListener(map, "click", function(e) {
			placeMarker(e.latLng, map);
		  });
      }
      google.maps.event.addDomListener(window, "load", initialize);
      function placeMarker(position, map) {
		  map.panTo(position);
		  console.log("long: " + position.lat());
		  console.log("lat: " + position.lng());
		  $("#Location_latitude").val(position.lat());
		  $("#Location_longitude").val(position.lng());
		}


	function updateMap() {
		  var myLatLng = new google.maps.LatLng($("#Location_latitude").val(), $("#Location_longitude").val());
		  var mapOptions = {
			zoom: 4,
			center: myLatLng
		  };
	    var map = new google.maps.Map(document.getElementById("map-canvas"),
	      mapOptions);

	  }
	  jQuery(document).ready(function(){
		 $("#Location_latitude").keypress(updateMap);
		 $("#Location_longitude").keypress(updateMap);
		 }
	 );

	',CClientScript::POS_END);
?>
