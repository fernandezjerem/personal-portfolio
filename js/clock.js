// i stole this from https://www.elated.com/creating-a-javascript-clock/ ToT
// just added a condition to show the seconds or not

function updateClock(showSeconds)
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );
  var currentTimeString = "";
  var currentTimeStringWSeconds = "";

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Compose the string for display
  if(showSeconds) { 
  currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
  } else {
  currentTimeString = currentHours + ":" + currentMinutes + " " + timeOfDay;
  }
  currentTimeStringWSeconds = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
  //document.getElementById("clock").title = currentTimeStringWSeconds;
}