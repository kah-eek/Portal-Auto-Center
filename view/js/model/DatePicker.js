class DatePicker
{

	/**
	* Default constructor
	* @param callbackSuccess Succeed to get the date selected
	* @param callbackFail Fail in to get the date selected
	*/
	constructor(callbackSuccess,callbackFail, type)
	{
		if (type == undefined)
		{
			 var options = {
			    date: new Date(),
			    mode: 'date'
			 };
		}
		else 
		{
			var options = {
			    date: new Date(),
			    mode: type
			 };
		}

		 document.addEventListener('deviceready',function(){

		  	datePicker.show(
		  		options, 
		  		function(date)
		  		{
		  			callbackSuccess(date);
		  		}, 
		  		function(error)
		  		{
		  			callbackFail(error);
		  		}
		  	);
		 
		 },false);  
	}

	/**
	* Parse full hour to one format
	* @param formatTo Fromat type. (user = HHhMM)
	* @param fullHour Full hour to parse it
	* @return String Hour formatted
	*/
	static parseHour(formatTo, fullHour)
	{

		if (formatTo == 'user')
		{
			// Thu May 31 2018 16:54:00 GMT-0300 (-03)
			var hour = fullHour.substring(16,18);
			var minutes = fullHour.substring(19,21);
			var seconds = fullHour.substring(22,24);

			return `${hour}h${minutes}`; 
		}
		else if(formatTo == 'mysql')
		{
			// 11h25
			var hour = fullHour.substring(0,2);
			var minutes = fullHour.substring(3);
			return `${hour}:${minutes}:00`;
		}
	}

	/**
	* Get date on one format
	* @param formatType Fromat type. (user = dd/mm/yyyy)
	* @return String Date formatted
	*/
	static getOnFormat(formatType, fullDate)
	{

		if (formatType == 'user')
		{
			var day = fullDate.substring(8,10); 

			var month = fullDate.substring(4,7);

			var formatedMonth = '00';

			switch(month.toLowerCase())
			{
				case 'jan':
					formatedMonth = '01';
					break;
				case 'feb':
					formatedMonth = '02';
					break;
				case 'mar':
					formatedMonth = '03';
					break;
				case 'apr':
					formatedMonth = '04';
					break;
				case 'may':
					formatedMonth = '05';
					break;
				case 'jun':
					formatedMonth = '06';
					break;
				case 'jul':
					formatedMonth = '07';
					break;
				case 'aug':
					formatedMonth = '08';
					break;
				case 'sep':
					formatedMonth = '09';
					break;
				case 'oct':
					formatedMonth = '10';
					break;
				case 'nov':
					formatedMonth = '11';
					break;
				case 'dec':
					formatedMonth = '12';
					break;
			}

			var year = fullDate.substring(11,15);

			return day+'/'+formatedMonth+'/'+year;
		}
		else if(formatType == 'mysql')
		{	
			var day = fullDate.substring(0,2);
			var month = fullDate.substring(3,5);
			var year = fullDate.substring(6);

			return year+'-'+month+'-'+day;
		}
	}

	/**
	* Get only the day from full date
	* @param fullDate Full date to get the day
	* @retrun Only the day from full date
	*/
	static getDayFromFullDate(fullDate)
	{
		return fullDate.substring(0,2);
	}

	/**
	* Get only the month from full date
	* @param fullDate Full date to get the day
	* @retrun Only the month from full date
	*/
	static getMonthFromFullDate(fullDate)
	{
		return fullDate.substring(3,5);
	}

	/**
	* Get only the year from full date
	* @param fullDate Full date to get the day
	* @retrun Only the year from full date
	*/
	static getYearFromFullDate(fullDate)
	{
		return fullDate.substring(6);
	}

	/*
	* Get the current day
	* @return String The current day
	*/
	static getDay()
	{
		return new Date().getDate();
	}

	/*
	* Get the current month
	* @return String The current month
	*/
	static getMonth()
	{
		var month = new Date().getMonth()+1;
		return month < 10 ? String('0'+month) : month;
	}

	/*
	* Get the currentyear
	* @return String The current year
	*/
	static getYear()
	{
		return new Date().getFullYear();
	}

	/*
	* Get the current full date
	* @return String The current full date
	*/
	static getCurrentDate()
	{	
		var date = new Date();
		var day = date.getDate();
		var month = date.getMonth()+1;
		
		// Format the day
		if(day < 10)
		{
			day = String('0'+day);
		}

		// Format the month
		if(month < 10)
		{
			month = String('0'+month);
		}
	
		var year = date.getFullYear();

		return `${day}/${month}/${year}`;
	}
}