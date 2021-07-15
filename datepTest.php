<html lang="he" class="">

<head>
    <title>הפסגה: צימרים, וילות נופש ומלונות בוטיק שעברו את המבחן שלנו</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="facebook-domain-verification" content="5l616g352p986g6czo48oi0w9ctz51" />
    <link rel="apple-touch-icon" sizes="57x57" href="/webimages/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/webimages/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/webimages/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/webimages/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/webimages/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/webimages/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/webimages/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/webimages/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/webimages/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/webimages/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/webimages/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/webimages/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/webimages/fav/favicon-16x16.png">
    <link rel="manifest" href="/webimages/fav/manifest.json">


    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/webimages/ogpic.jpg" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="description"
        content="אנחנו ממליצים רק על מקומות טובים - ביקורות אמיתיות על צימרים, וילות נופש ומלונות בוטיק עם כל מה שמעניין אתכם לפני שמזמינים חופשה | הפסגה" />
    <meta name="keywords" content="צימרים, צימר, צימרים רומנטיים, צימרים יוקרתיים, צימרים בצפון" />

    <meta charset="utf-8" />

    <link rel="stylesheet" href="/css/allStyles.php?v=1">
    <link href="/css/style_ctrl.php?dir=rtl&v=1626315359" rel="stylesheet" type="text/css" media="screen">

    <script src="/js/jquery-2.2.4.min.js"></script>
    <script>
    var rtl = true;
    var langCode = '';
    </script>
</head>

<body>

    <div class="inputWrap">
        <div class="wrapToIco">
            <i class="icon-date2"></i>
            <div class="datePickWrap" data-from="מתי?" data-to="צ'ק אאוט">
                <span>עד</span>
                <input type="text" readonly="readonly" placeholder="תאריכי החופשה" id="datesPicker">
            </div>
            <div id="sumDaysHero" class="inputBotLbl">
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="/addons/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="daterangepicker2.js?v=<?=rand()?>"></script>
<script src="/addons/sweetalert2-master/src/sweetalert2.min.js"></script>
<script src="/js/AComplete.js?v=1.01"></script>
<script src="/js/owl.carousel.min.js?v=2.3.4"></script>
<script src="/js/WebManager.js?v=1"></script>
<script src="/js/jquery.ui.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/SmartSticky.js"></script>
<script src="/js/jquery.lazy.min.js"></script>
<!--<link rel="stylesheet" href="/css/odedPopStyle.css?v=1626315544" />-->
<link href="/css/uploadfile.css" rel="stylesheet">
<script src="/js/jquery.uploadfile.min.js"></script>
<script src="/js/website.js?v=2.11"></script>
<script src="/js/searchManager.js?v="></script>
<script src="style.css"></script>
<!-- // zabdi -->
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->

<script type="text/javascript">
if (window.activeSearchManager) {
    var SearchParams = new SearchParamsManager(SearchManagerOptions);

    window.initSearchFunctions && initSearchFunctions();
}

$(document).ready(function() {
    if ($('.inc_searchResult').length) {
        SearchParams.searchStats();
    }
});

var Stickies = [],
    specialDays = [{
        "from": "2021-07-01",
        "till": "2021-07-31",
        "label": "יולי"
    }, {
        "from": "2021-08-01",
        "till": "2021-08-31",
        "label": "אוגוסט"
    }, {
        "from": "2021-09-06",
        "till": "2021-09-08",
        "label": "ראש השנה 2021"
    }, {
        "from": "2021-09-20",
        "till": "2021-09-28",
        "label": "סוכות"
    }, {
        "from": "2022-04-14",
        "till": "2022-04-23",
        "label": "פסח 2022"
    }];
//date picker for hero section at the main page
$('#datesPicker').daterangepicker({

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
        "calTitle": "מתי מגיעים?",
        "daysOfWeek": ["א'", "ב'", "ג'", "ד'", "ה'", "ו'", "ש'"],
        "monthNames": ["ינואר", "פברואר", "מרץ", "אפריל", "מאי", "יוני", "יולי", "אוגוסט", "ספטמבר", "אוקטובר",
            "נובמבר", "דצמבר"
        ],
        "firstDay": 0
    },

    isCustomDate: function(date) {
        var d = date.format("YYYY-MM-DD"),
            len = specialDays.length,
            i;

        for (i = 0; i < len; ++i) {
            if (specialDays[i].from <= d && specialDays[i].till >= d)
                return [true, ["sk_" + d, specialDays[i].from == d ? 'holiday first' : 'holiday'], {
                    dataLabel: specialDays[i].label
                }];
            else if (specialDays[i].from > d)
                return [true, '', ''];
        }
    },
    "beforeShowDay": function(d) {
        console.log(d);
    },
    "buttonClasses": "btn btn-sme",
    "applyButtonClasses": "btn-primary",
    "cancelClass": "btn-default",
    minDate: moment(),
    startDate: moment(),
    endDate: moment().add(1, 'days'),
    opens: "center"
}, function(start, end, label) {
    this.element.parent().attr({
        'data-from': moment(start).format("D/MM/YY"),
        'data-to': moment(end).format("D/MM/YY")
    }).removeClass('second').addClass('active');


    start = moment(start);
    end = moment(end);

    var dur = Math.floor(moment.duration(end.diff(start)).asDays());
    if (dur == 1) {
        $('#sumDaysHero').html('חופשה של לילה אחד');
    } else if (dur == 0) {
        $('#sumDaysHero').html('');
    } else {
        $('#sumDaysHero').html('חופשה של ' + dur + ' לילות');
    }

    $("#dateFrom").val(start.format('YYYY-MM-DD'));
    $("#dateTill").val(end.format('YYYY-MM-DD'));

    $('#inputRoomType').trigger('click');
    $('#freeBox').removeClass('pop');
}).on('apply.daterangepicker', function() {
    if ($('#searchEng').hasClass("autoSearch")) {
        $('#searchEng .searchBtn').click();
    }
}).on('cancel.daterangepicker', function() {
    $('#searchEng').removeClass("autoSearch");
})

var dateFrame;

/*.on('showCalendar.daterangepicker', function(ev, picker) {
$.each(specialDays, function(date, obj){
picker.container.find('.sk_'+date).attr('data-label', obj.label);
});
})*/
;
</script>
<style>
@media(max-width:540px) {
    .daterangepicker .drp-calendar.left {
        margin: 0 auto
    }
}


.arrows {
    display: flex;
    justify-content: space-between;
    position: absolute;
    top: 0px;
    width: 100%;
}

.arrows>button {
    background: red;
    width: 25%;
    padding: -0.5em;
}

.arrows>button>span {
    font-size: 3em;
}
</style>