// (c)2012 Red Arrow Robotics //

var roboticsCalendar;

function Calendar()
{

	this.date = new Date(); // Date Object for calendar
	this.today = new Object; // Holds actual date
	this.today.month = this.date.getMonth();
	this.today.year = this.date.getFullYear();
	this.days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	this.daysPerMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
	this.months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	
	this.getDate = function() {
	
	}

	this.build = function(_month, _year) {
		this.month = (isNaN(_month) || _month == null) ? this.today.month : _month;
		this.year = (isNaN(_year) || _year == null) ? this.today.year : _year;
	}
	
	this.render = function() {
	
		var firstDay = new Date(this.year, this.month, 1);
		var startingDay = firstDay.getDay(); // Now holds what day of the week the first date falls on (0-6)
		
		var monthLength = this.daysPerMonth[this.month];
		
		if (this.month == 1) { //if February
				monthLength = 29; // Adjust for leap year
		}
		var monthName = this.months[this.month];
		var html = '<table class = "calendar-table">';
		html += '<tr><th colspan="7"><center>';
		html += monthName + "&nbsp;" + this.year;
		html += '</center></th></tr>';
		html += '<tr class="calendar-header">';
		for (var i=0; i<=6; i++)
		{
			html += '<td class="calendar-header-day">';
			html += this.days[i];
			html += '</td>';
		}
		html += '</tr><tr>';
		
		var day = 1;
		
		for(var i=0; i<9; i++) //weeks
		{
			for(var j=0; j<7; j++) //days
			{
				html += '<td class="calendar-day">';
				if (day <= monthLength && (i > 0 || j>= startingDay)) {
					html += day;
					day++;
				}
				html += '</td>';
			}
			if (day > monthLength)
			{
				break;
			} else {
				html += '</tr><tr>';
			}
		}
		
		html += '</tr></table>';
		this.html = html;
	}
	
	this.print = function() {
		return this.html;
	}
}

function initCalendar()
{
	roboticsCalendar = new Calendar();
	roboticsCalendar.build();
	roboticsCalendar.render();
	document.getElementById('calendar').innerHTML = roboticsCalendar.print();
}