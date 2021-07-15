$(function() {

    var Stickies = [], specialDays = [{"from":"2021-07-01","till":"2021-07-31","label":"יולי"},{"from":"2021-08-01","till":"2021-08-31","label":"אוגוסט"},{"from":"2021-09-06","till":"2021-09-08","label":"ראש השנה 2021"},{"from":"2021-09-20","till":"2021-09-28","label":"סוכות"},{"from":"2022-04-14","till":"2022-04-23","label":"פסח 2022"}];
    //date picker for hero section at the main page
    $('#datepicker').daterangepicker({
        "locale": {
            "direction": "rtl",
            "format": "DD/MM/YYYY",
            "applyLabel": "אשר",
            "cancelLabel": "ביטול",
            "fromLabel": "צ'ק אין",
            "separator": " צ'ק אאוט ",
            "toLabel": "צ'ק אאוט",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "calTitle" : "מתי מגיעים?",
            "daysOfWeek": ["א'","ב'","ג'","ד'","ה'","ו'","ש'"],
            "monthNames": ["ינואר","פברואר","מרץ","אפריל","מאי","יוני","יולי","אוגוסט","ספטמבר","אוקטובר","נובמבר","דצמבר"],
            "firstDay": 0
        },
            isCustomDate: function(date) {
                var d = date.format("YYYY-MM-DD"), len = specialDays.length, i;
    
                for(i = 0; i < len; ++i){
                    if (specialDays[i].from <= d && specialDays[i].till >= d)
                        return [true, ["sk_" + d, specialDays[i].from == d ? 'holiday first' : 'holiday'], {dataLabel: specialDays[i].label}];
                    else if (specialDays[i].from > d)
                        return [true, '', ''];
                }
            },
        "beforeShowDay": function(d){console.log(d);},
        "buttonClasses": "btn btn-sme",
        "applyButtonClasses": "btn-primary",
        "cancelClass": "btn-default",
        minDate  : moment(),
        startDate: moment(),
        endDate: moment().add(1,'days'),
        opens: "center"
    }, function(start, end, label) {
        this.element.parent().attr({
        'data-from': moment(start).format("D/MM/YY"),
        'data-to': moment(end).format("D/MM/YY")
        }).removeClass('second').addClass('active');
        
        
        start = moment(start);
        end = moment(end);
    
        var dur = Math.floor(moment.duration(end.diff(start)).asDays());
        if(dur==1){
            $('#sumDaysHero').html('חופשה של לילה אחד');
        }
        else if(dur==0){
            $('#sumDaysHero').html('');
        }
        else{
            $('#sumDaysHero').html('חופשה של  ' + dur + ' לילות');
        }
    
        $("#dateFrom").val(start.format('YYYY-MM-DD'));
        $("#dateTill").val(end.format('YYYY-MM-DD'));
    
        $('#inputRoomType').trigger('click');
        $('#freeBox').removeClass('pop');
    }).on('apply.daterangepicker', function(){
        if($('#searchEng').hasClass("autoSearch")){
            $('#searchEng .searchBtn').click();
        }
    }).on('cancel.daterangepicker', function(){
        $('#searchEng').removeClass("autoSearch");
    })

    var calendario = $(".drp-calendar left");

    calendario.on("swipeleft",function(){
        console.log('bebe');
                // $(this).hide();
      });

      if(calendario){
            console.log('bebe');
                 
      }


  });