			$.fn.dataTableExt.afnFiltering.push(
				function( oSettings, aData, iDataIndex ) {
					
					var today = new Date();
					var dd = today.getDate();
					var mm = today.getMonth() + 1;
					var yyyy = today.getFullYear();
					
					if (dd<10)
					dd = '0'+dd;
					
					if (mm<10)
					mm = '0'+mm;
					
					today = mm+'/'+dd+'/'+yyyy;
					
					if ($('#min').val() != '' || $('#max').val() != '') {
					var iMin_temp = $('#min').val();
					if (iMin_temp == '') {
					  iMin_temp = '01/01/1980';
					}
					
					var iMax_temp = $('#max').val();
					if (iMax_temp == '') {
					  iMax_temp = today;
					}
					
					var arr_min = iMin_temp.split("/");
					var arr_max = iMax_temp.split("/");
					var arr_datetime = aData[0].split(" ");
					
					var arr_date = arr_datetime[0].split("/");
          			
          			var iMin = new Date(arr_min[2], arr_min[0], arr_min[1], 0, 0, 0, 0)
					var iMax = new Date(arr_max[2], arr_max[0], arr_max[1], 0, 0, 0, 0)
					var iDate = new Date(arr_date[2], arr_date[0], arr_date[1], 0, 0, 0, 0)
					
					if ( iMin == "" && iMax == "" )
					{
						return true;
					}
					else if ( iMin == "" && iDate < iMax )
					{
						return true;
					}
					else if ( iMin <= iDate && "" == iMax )
					{
						return true;
					}
					else if ( iMin <= iDate && iDate <= iMax )
					{
						return true;
					}
					return false;
					}
				}
			);
			
			
var ComponentsDateTimePickers=function(){var t=function(){jQuery().datepicker&&$(".date-picker").datepicker({rtl:App.isRTL(),orientation:"left",autoclose:!0}),$(document).scroll(function(){$("#form_modal2 .date-picker").datepicker("place")})},e=function(){jQuery().timepicker&&($(".timepicker-default").timepicker({autoclose:!0,showSeconds:!0,minuteStep:1}),$(".timepicker-no-seconds").timepicker({autoclose:!0,minuteStep:5}),$(".timepicker-24").timepicker({autoclose:!0,minuteStep:5,showSeconds:!1,showMeridian:!1}),$(".timepicker").parent(".input-group").on("click",".input-group-btn",function(t){t.preventDefault(),$(this).parent(".input-group").find(".timepicker").timepicker("showWidget")}),$(document).scroll(function(){$("#form_modal4 .timepicker-default, #form_modal4 .timepicker-no-seconds, #form_modal4 .timepicker-24").timepicker("place")}))},o=function(){jQuery().daterangepicker&&($("#defaultrange").daterangepicker({opens:App.isRTL()?"left":"right",format:"MM/DD/YYYY",separator:" to ",startDate:moment().subtract("days",29),endDate:moment(),ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract("days",1),moment().subtract("days",1)],"Last 7 Days":[moment().subtract("days",6),moment()],"Last 30 Days":[moment().subtract("days",29),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract("month",1).startOf("month"),moment().subtract("month",1).endOf("month")]},minDate:"01/01/2012",maxDate:"12/31/2018"},function(t,e){$("#defaultrange input").val(t.format("MMMM D, YYYY")+" - "+e.format("MMMM D, YYYY"))}),$("#defaultrange_modal").daterangepicker({opens:App.isRTL()?"left":"right",format:"MM/DD/YYYY",separator:" to ",startDate:moment().subtract("days",29),endDate:moment(),minDate:"01/01/2012",maxDate:"12/31/2018"},function(t,e){$("#defaultrange_modal input").val(t.format("MMMM D, YYYY")+" - "+e.format("MMMM D, YYYY"))}),$("#defaultrange_modal").on("click",function(){$("#daterangepicker_modal").is(":visible")&&0==$("body").hasClass("modal-open")&&$("body").addClass("modal-open")}),$("#reportrange").daterangepicker({opens:App.isRTL()?"left":"right",startDate:moment().subtract("days",29),endDate:moment(),dateLimit:{days:60},showDropdowns:!0,showWeekNumbers:!0,timePicker:!1,timePickerIncrement:1,timePicker12Hour:!0,ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract("days",1),moment().subtract("days",1)],"Last 7 Days":[moment().subtract("days",6),moment()],"Last 30 Days":[moment().subtract("days",29),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract("month",1).startOf("month"),moment().subtract("month",1).endOf("month")]},buttonClasses:["btn"],applyClass:"green",cancelClass:"default",format:"MM/DD/YYYY",separator:" to ",locale:{applyLabel:"Apply",fromLabel:"From",toLabel:"To",customRangeLabel:"Custom Range",daysOfWeek:["Su","Mo","Tu","We","Th","Fr","Sa"],monthNames:["January","February","March","April","May","June","July","August","September","October","November","December"],firstDay:1}},function(t,e){$("#reportrange span").html(t.format("MMMM D, YYYY")+" - "+e.format("MMMM D, YYYY"))}),$("#reportrange span").html(moment().subtract("days",29).format("MMMM D, YYYY")+" - "+moment().format("MMMM D, YYYY")))},a=function(){jQuery().datetimepicker&&($(".form_datetime").datetimepicker({autoclose:!0,isRTL:App.isRTL(),format:"dd MM yyyy - hh:ii",pickerPosition:App.isRTL()?"bottom-right":"bottom-left"}),$(".form_advance_datetime").datetimepicker({isRTL:App.isRTL(),format:"dd MM yyyy - hh:ii",autoclose:!0,todayBtn:!0,startDate:"2013-02-14 10:00",pickerPosition:App.isRTL()?"bottom-right":"bottom-left",minuteStep:10}),$(".form_meridian_datetime").datetimepicker({isRTL:App.isRTL(),format:"dd MM yyyy - HH:ii P",showMeridian:!0,autoclose:!0,pickerPosition:App.isRTL()?"bottom-right":"bottom-left",todayBtn:!0}),$("body").removeClass("modal-open"),$(document).scroll(function(){$("#form_modal1 .form_datetime, #form_modal1 .form_advance_datetime, #form_modal1 .form_meridian_datetime").datetimepicker("place")}))},m=function(){jQuery().clockface&&($(".clockface_1").clockface(),$("#clockface_2").clockface({format:"HH:mm",trigger:"manual"}),$("#clockface_2_toggle").click(function(t){t.stopPropagation(),$("#clockface_2").clockface("toggle")}),$("#clockface_2_modal").clockface({format:"HH:mm",trigger:"manual"}),$("#clockface_2_modal_toggle").click(function(t){t.stopPropagation(),$("#clockface_2_modal").clockface("toggle")}),$(".clockface_3").clockface({format:"H:mm"}).clockface("show","14:30"),$(document).scroll(function(){$("#form_modal5 .clockface_1, #form_modal5 #clockface_2_modal").clockface("place")}))};return{init:function(){t(),e(),a(),o(),m()}}}();App.isAngularJsApp()===!1&&jQuery(document).ready(function(){ComponentsDateTimePickers.init()});