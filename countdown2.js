var x = setInterval(function() {
	var minutes_element = document.getElementsByClassName("minutes-remaining");
	var seconds_element = document.getElementsByClassName("seconds-remaining");
	if (minutes_element != null) {
		var minutes = minutes_element[0].innerHTML;
		var minutes_dec = minutes -1;
	}
	if (seconds_element != null) {
		var seconds = seconds_element[0].innerHTML;
		var seconds_dec = seconds - 1;
	}
	if ((minutes_element != null) && (seconds_element != null)) {
		if  (seconds_dec >= 0) {
			document.getElementsByClassName("seconds-remaining")[0].innerHTML = seconds_dec;
		} else if (minutes_dec >= 0) {
			document.getElementsByClassName("minutes-remaining")[0].innerHTML = minutes_dec;
			document.getElementsByClassName("seconds-remaining")[0].innerHTML = 59;
		}
	}
}, 1000);