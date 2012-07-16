/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
function DurationDependency(start_field,end_field,duration_field,format){this.duration=0;this.start_field=start_field;this.end_field=end_field;this.duration_field=duration_field;this.format=format;this.lock_end_listener=false;var format_parts=this.format.split(" ");this.date_format=format_parts[0];this.time_format=format_parts[1];if(format_parts.length==3)
this.time_format+=""+this.time_format[2];this.date_delimiter=/([-.\\/])/.exec(this.date_format)[0];this.time_delimiter=/([.:])/.exec(this.time_format)[0];this.has_meridiem=/p/i.test(this.format);var date_format_cleaned=this.date_format.replace(/%/g,"").replace(new RegExp(this.date_delimiter,'g'),"");this.month_pos=date_format_cleaned.search(/m/);this.day_pos=date_format_cleaned.search(/d/);this.year_pos=date_format_cleaned.search(/Y/);if(document.getElementById(end_field).value!="")
this.calculate_duration();else
this.change_duration();this.update_duration_fields();this.set_duration_handler();var self=this;YAHOO.util.Event.addListener(start_field,"change",function(){self.change_start();});YAHOO.util.Event.addListener(end_field,"change",function(){if(self.lock_end_listener)
return;self.calculate_duration();self.update_duration_fields();self.set_duration_handler();});if(duration_field!=null){YAHOO.util.Event.addListener(duration_field,"change",function(){self.change_duration();self.update_duration_fields();SugarWidgetScheduler.update_time();});}}
DurationDependency.prototype.calculate_duration=function(){try{var start=this.parse_date(document.getElementById(this.start_field).value);var end=this.parse_date(document.getElementById(this.end_field).value);this.duration=(end.getTime()-start.getTime())/ 1000;}catch(e){this.duration=0;}}
DurationDependency.prototype.change_start=function(){this.lock_end_listener=true;var start=this.parse_date(document.getElementById(this.start_field).value);var end=new Date(start.getTime()+this.duration*1000);this.set_date(end,this.end_field);var self=this;setTimeout(function(){self.lock_end_listener=false;},300);}
DurationDependency.prototype.change_duration=function(){this.lock_end_listener=true;this.duration=document.getElementById(this.duration_field).value;var start=this.parse_date(document.getElementById(this.start_field).value);var end=new Date(start.getTime()+this.duration*1000);this.set_date(end,this.end_field);var self=this;setTimeout(function(){self.lock_end_listener=false;},300);}
DurationDependency.prototype.update_duration_fields=function(){var minutes=this.duration / 60;var hours_elm=document.getElementById(this.duration_field+"_hours");var minutes_elm=document.getElementById(this.duration_field+"_minutes");if(!hours_elm){hours_elm=document.createElement("input");hours_elm.setAttribute("type","hidden");hours_elm.name=this.duration_field+"_hours";hours_elm.id=hours_elm.name;document.getElementById(this.end_field).parentNode.appendChild(hours_elm);}
if(!minutes_elm){minutes_elm=document.createElement("input");minutes_elm.setAttribute("type","hidden");minutes_elm.name=this.duration_field+"_minutes";minutes_elm.id=minutes_elm.name;document.getElementById(this.end_field).parentNode.appendChild(minutes_elm);}
hours_elm.value=parseInt(minutes / 60);minutes_elm.value=parseInt(minutes%60);}
DurationDependency.prototype.get_duration_text=function(){var minutes=this.duration / 60;var d=parseInt(minutes / 60 / 24);var h=parseInt((minutes / 60)%24);var m=parseInt(minutes%60);d=format_part(d,SUGAR.language.get('app_strings',(d>1)?'LBL_DURATION_DAYS':'LBL_DURATION_DAY'));h=format_part(h,SUGAR.language.get('app_strings',(h>1)?'LBL_DURATION_HOURS':'LBL_DURATION_HOUR'));m=format_part(m,SUGAR.language.get('app_strings',(m>1)?'LBL_DURATION_MINUTES':'LBL_DURATION_MINUTE'));function format_part(v,s){if(v==0)
v="";else{v=v.toString();v=v+" "+s+" ";}
return v;}
return d+h+m;}
DurationDependency.prototype.set_duration_handler=function(){if(this.duration_field==null)
return;var dur_elm=document.getElementById(this.duration_field);if(dur_elm){if(this.duration>=0){this.add_custom_duration(dur_elm);}
dur_elm.value="";dur_elm.value=this.duration;}}
DurationDependency.prototype.add_custom_duration=function(dur_elm){for(var i=0;i<dur_elm.length;i++){if(dur_elm.options[i].className=='custom'){var el=dur_elm.options[i];el.parentNode.removeChild(el);}}
var option_exists=false;var pos_index=0;var pos_found=false;for(var i=0;i<dur_elm.length;i++){var v=dur_elm.options[i].value;if(v==this.duration){var option_exists=true;break;}
if(!pos_found&&v>this.duration){pos_index=i;pos_found=true;}
if(!pos_found&&i==(dur_elm.length-1)){pos_index=i+1;pos_found=true;}}
if(!option_exists){var option=document.createElement('option');option.value=this.duration;option.className='custom';option.innerHTML=this.get_duration_text();var ref=dur_elm.options[pos_index];if(pos_index==dur_elm.length){dur_elm.appendChild(option);}else{dur_elm.insertBefore(option,ref);}}}
DurationDependency.prototype.parse_date=function(d){var date_parts=d.split(" ");var date_str=date_parts[0];var time_str=date_parts[1];if(date_parts.length==3)
time_str+=date_parts[2];var date_arr=date_str.split(this.date_delimiter);var year=date_arr[this.year_pos];var month=date_arr[this.month_pos];var day=date_arr[this.day_pos];var hour=time_str.substr(0,2);var minute=time_str.substr(3,2);if(this.has_meridiem){var meridiem="am";if(/pm/i.test(time_str))
meridiem="pm";hour=hour%12+(meridiem==="am"?0:12);}
var date=new Date(year,month-1,day,hour,minute);return date;}
DurationDependency.prototype.set_date=function(date,field){try{var year=date.getFullYear();var month=date.getMonth()+1;var day=date.getDate();var hour=date.getHours();var minute=date.getMinutes();}catch(e){return false;}
if(this.has_meridiem){var meridiem="am";if(hour*60+minute>=12*60)
meridiem="pm";if(hour==0)
hour=12;if(hour>12)
hour=hour-12;}
year=pad(year);month=pad(month);day=pad(day);hour=pad(hour);minute=pad(minute);function pad(s){return s<10?"0"+s:s;}
var date="";for(var i=0;i<3;i++){if(i>0)
date+=this.date_delimiter;if(i==this.year_pos)
date+=year;if(i==this.month_pos)
date+=month;if(i==this.day_pos)
date+=day;}
document.getElementById(field+"_date").value=date;document.getElementById(field+"_hours").value=hour;document.getElementById(field+"_minutes").value=minute;if(this.has_meridiem){var nodes=document.getElementById(field+"_meridiem").childNodes;for(var i=0;i<nodes.length;i++){if(nodes[i].value=="AM"){meridiem=meridiem.toUpperCase();break;}}
document.getElementById(field+"_meridiem").value=meridiem;}
eval("combo_"+field+".update()");}