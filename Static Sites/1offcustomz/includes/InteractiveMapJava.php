<script type="text/javascript" src="http://dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6"></script>  

<script type="text/javascript">  
	    
	<!-- This is the msn Maps Script for Contact Page, Simply Set the Varibles below and Server Side include on the contact page. -->

	<!--Inorder for the map to work you need longitue and latiture -->
	<!--1. Go to google maps http://maps.google.com/ -->
	<!--2. input address of business for the web site -->
	<!--3. Click on "Link to this Page" -->
	<!--4. paste Link here: "http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=14721+Camden+Cir,+Strongsville,+Cuyahoga,+Ohio+44136&amp;aq=&amp;sll=37.6,-95.665&amp;sspn=36.911991,86.572266&amp;ie=UTF8&amp;geocode=FUrldQId1tMf-w&amp;split=0&amp;hq=&amp;hnear=14721+Camden+Cir,+Strongsville,+Cuyahoga,+Ohio+44136&amp;t=m&amp;z=14&amp;ll=41.280842,-81.800234&amp;output=embed"-->
	<!--5. Set the Longiture and Latitude varibles to the LL= in the google query string in the above link. -->
	
	var LongitudeVar = 41.280842;
	var LatitudeVar = -81.800234; <!-- this will always be a negitive number -->
	
	var AddressVar = '14721 Camben Dr Strongville, Ohio 44136';          
	
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