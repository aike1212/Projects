<script type="text/javascript" src="http://dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6"></script>  

<script type="text/javascript">  
	    
	<!-- This is the msn Maps Script for Contact Page, Simply Set the Varibles below and Server Side include on the contact page. -->

	<!--Inorder for the map to work you need longitue and latiture -->
	<!--1. Go to google maps http://maps.google.com/ -->
	<!--2. input address of business for the web site -->
	<!--3. Click on "Link to this Page" -->
	<!--4. paste Link here: "http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=10+Cabot+Road+Suite+302+Medford,+MA+02155+&amp;ie=UTF8&amp;hq=&amp;hnear=10+Cabot+Rd+%23302,+Medford,+Massachusetts+02155&amp;t=m&amp;z=14&amp;ll=42.406594,-71.076426 -->
	<!--5. Set the Longiture and Latitude varibles to the LL= in the google query string in the above link. -->
	
	var LongitudeVar = 42.406594;
	var LatitudeVar = -71.076426; <!-- this will always be a negitive number -->
	
	var AddressVar = '10 Cabot Road Suite 302 Medford, MA 02155';          
	
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