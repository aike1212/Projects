<script type="text/javascript" src="http://dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6"></script>  

<script type="text/javascript">  
	    
	<!-- This is the msn Maps Script for Contact Page, Simply Set the Varibles below and Server Side include on the contact page. -->

	<!--Inorder for the map to work you need longitue and latiture -->
	<!--1. Go to google maps http://maps.google.com/ -->
	<!--2. input address of business for the web site -->
	<!--3. Click on "Link to this Page" -->
	<!--4. paste Link here: http://maps.google.com/maps?f=q&hl=en&geocode=&time=&date=&ttype=&q=15700+lexington+blvd,+houston+texas+77059&sll=37.0625,-95.677068&sspn=39.780156,95.800781&ie=UTF8&ll=29.598984,-95.557194&spn=0.085526,0.187111&z=13&iwloc=cent&om=0 -->
	<!--5. Set the Longiture and Latitude varibles to the LL= in the google query string in the above link. -->
	
	var LongitudeVar = 39.68900299999999;
	var LatitudeVar = -104.86757000000006; <!-- this will always be a negitive number -->
	
	var AddressVar = '1535 S Havana Street Suite A, Aurora, CO 80012-5051';          
	
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