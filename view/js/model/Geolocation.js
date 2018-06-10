class Geolocation
{

	// Default constructor
	constructor(latitude, longitude)
	{
		this.latitude = latitude;
		this.longitude = longitude;
	}

	/**
	* Get current coodinates from device
	* @param callbackSuccess Succeed to get the device coordinates
	* @param callbackFail Fail in to get the device coordinates
	*/
	getCoordinates(callbackSuccess,callbackFail)
	{
		document.addEventListener('deviceready',
			function()
			{		
				var opts = { maximumAge: 3000, timeout: 5000, enableHighAccuracy: true };

				navigator.geolocation.getCurrentPosition
				(
					function(position)
					{
						callbackSuccess(position);
					},
			        function(error)
			        {
			        	callbackFail(error);
			        },
					opts
				);
			}
			,false);

	}

}