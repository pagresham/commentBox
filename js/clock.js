$(function() {

	
	/**
	 * Creates current Clock string
	 * @return Sting clockString
	 */
	function get_Clock() {
		var date = new Date();
		var hours = date.getHours();
		var min = date.getMinutes();
		var sec = date.getSeconds();
		var amPm = (hours < 12) ? "am" : "pm";
		
		hours = (hours < 10) ? "0" + hours : hours;
		min = (min < 10) ? "0" + min : min;
		sec = (sec < 10) ? "0" + sec : sec;

		// return hours + ":" + min + ":" + sec + " " + amPm;
		return hours + ":" + min + " " + amPm
	}

	/**
	 * Gets the elements to write to
	 * @return void - writes a cur clock string to the specified elements in dom 
	 */
	function runClock() {
		var el = document.getElementsByClassName("clock-span");
		var clockString = get_Clock();
		for(var i in el) {
			el[i].innerHTML = "  " + clockString;
		}

	}

	runClock();
	setInterval(runClock, 1000);


	/**
	 * Creates current Date string
	 * @return Sting dateString
	 */
	function get_Date() {
		var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
		var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
		var date = new Date();
		var day = days[date.getDay()];
		var numDay = date.getDate();
		var month = months[date.getMonth()];
		var year = date.getFullYear();
		var ext = (numDay == 1) ? "st" : (numDay == 2) ? "nd" : (numDay == 3) ? "rd" : "th";
		return day + ", " + month + " " + numDay + ext + " " + year
	}

	/**
	 * gets a date as DD/MM/YYYY
	 * @return {[type]} [description]
	 */
	function getSmallDate() {
		var date = new Date();
		var day = date.getDate();
		var month = date.getMonth();
		var year = date.getFullYear();
		var dateString = month + "/" + day + "/" + year;
		return dateString;
	}
	

	
	/**
	 * Gets the elements to write to
	 * @return void - writes a cur date string to the specified elements in dom 
	 */
	function runDate() {
		var el = document.getElementsByClassName("date-span");
		// var dateString = get_Date();
		var dateString = getSmallDate();
		for(var i in el) {
			el[i].innerHTML = "  " + dateString;
		}
	}
	runDate();
	setInterval(runDate, 60000);





function log(input) {
	console.log(input);
}

})