/*************************************
Project: Phone Formatting
Original Dev: Angel Magaña, June 2008
@2009-2010 Angel Magaña
cheleguanaco[at]cheleguanaco.com

Desc: JavaScript functions to format phone numbers
 
The contents of this file are governed by the GNU General Public License (GPL).
A copy of said license is available here: http://www.gnu.org/copyleft/gpl.html
This code is provided AS IS and WITHOUT WARRANTY OF ANY KIND.
*************************************/

function fmt(num, id) {
	var phone = num;
	var pre = '';
	var main = '';
	var ext = '';

	phone = phone.replace(/\s|\(|\-|\)|\.|x|:|\*/g, "");

	if (phone.length == 0) {
		return false;
	}

	area = "(" + phone.substr(0,3) + ") ";
	pre = phone.substr(3,3) + "-";
	main = phone.substr(6,4);
	
	if (phone.length > 10) {
		ext = " Ext: " + phone.substr(10);
		phone = area + pre + main + ext;
	} 
	else {
		phone = area + pre + main;
	}
	
	document.getElementById(id).value = phone; 
}