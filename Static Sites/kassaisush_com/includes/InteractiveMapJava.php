<script type="text/javascript" src="http://dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6"></script>  

<script type="text/javascript">  
	    
	<!-- This is the msn Maps Script for Contact Page, Simply Set the Varibles below and Server Side include on the contact page. -->

	<!--Inorder for the map to work you need longitue and latiture -->
	<!--1. Go to google maps http://maps.google.com/ -->
	<!--2. input address of business for the web site -->
	<!--3. Click on "Link to this Page" -->
	<!--4. paste Link here: <div id="mapviewer"><iframe id="map" scrolling="no" width="500" height="400" frameborder="0" src="http://www.bing.com/maps/embed/?v=2&amp;cp=39.72759794088541~-104.90352004766464&amp;lvl=16&amp;dir=0&amp;sty=r&amp;where1=731%20Quebec%20St%2C%20Denver%2C%20CO%2080220&amp;form=LMLTEW&amp;pp=39.72759783267975~-104.90352004766464&amp;emid=9e195a1a-c41f-7a1f-e9ab-36104a2e4797"></iframe><div id="LME_maplinks" style="line-height:20px;"><a id="LME_largerMap" href="http://www.bing.com/maps/?v=2&amp;cp=39.72759794088541~-104.90352004766464&amp;lvl=16&amp;dir=0&amp;sty=r&amp;where1=731%20Quebec%20St%2C%20Denver%2C%20CO%2080220&amp;form=LMLTEW" target="_blank" style="margin:0 7px">View Larger Map</a><a id="LME_directions" href="http://www.bing.com/maps/?v=2&amp;cp=39.72759794088541~-104.90352004766464&amp;lvl=16&amp;dir=0&amp;sty=r&amp;where1=731%20Quebec%20St%2C%20Denver%2C%20CO%2080220&amp;form=LMLTEW&amp;rtp=%7Epos.39.72759794088541_-104.90352004766464_Southeast" target="_blank" style="margin:0 7px">Driving Directions</a></div></div> -->
	<!--5. Set the Longiture and Latitude varibles to the LL= in the google query string in the above link. -->
	
	var LongitudeVar = 39.72759794088541;
	var LatitudeVar = -104.90352004766464; <!-- this will always be a negitive number -->
	
	var AddressVar = '731 Quebec Street Denver, CO 80220';          
	
	var map = null;  
	var pinid = 0;
	
	function GetMap()      
	{
		map = new VEMap('myMap');         
		map.LoadMap(new VELatLong(LongitudeVar, LatitudeVar), 16 , VEMapStyle.Road ,false);
		AddPushpin();   	   
	}
	
	function AddPushpin()     
	{          
		var shape = new VEShape(VEShapeType.Pushpin, map.GetCenter());
		shape.SetTitle('Address ');
		shape.SetDescription(AddressVar);
		pinid++;          
		map.AddShape(shape);   
	}
	         
</script>