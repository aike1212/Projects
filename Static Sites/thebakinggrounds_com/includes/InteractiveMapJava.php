<script type="text/javascript" src="http://dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6"></script>  

<script type="text/javascript">  
	    
	<!-- This is the msn Maps Script for Contact Page, Simply Set the Varibles below and Server Side include on the contact page. -->

	<!--Inorder for the map to work you need longitue and latiture -->
	<!--1. Go to google maps http://maps.google.com/ -->
	<!--2. input address of business for the web site -->
	<!--3. Click on "Link to this Page" -->
	<!--4. paste Link here: "http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=3131+Lawrenceville+Suwanee+Rd.+C-6+Suwanee,+GA.+30024&amp;aq=&amp;sll=33.42469,-111.903369&amp;sspn=0.009313,0.01929&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=3131+Lawrenceville+Suwanee+Rd,+Suwanee,+Gwinnett,+Georgia+30024&amp;ll=34.033682,-84.051012"
	<!--5. Set the Longiture and Latitude varibles to the LL= in the google query string in the above link. -->
	
	var LongitudeVar = 34.033682;
	var LatitudeVar = -84.051012; <!-- this will always be a negitive number -->
	
	var AddressVar = '3131 Lawrenceville Suwanee Rd. C-6 Suwanee, GA. 30024';          
	
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