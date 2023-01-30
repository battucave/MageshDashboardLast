$(document).ready(function(){
    $(".sidebar__links a").click(function(e){
        var idP = $(this).attr("href");
        $(".sidebar__links a").removeClass("active").addClass("collapsed");
        $(this).addClass("active").removeClass("collapsed");
        $(".sidebar__links a").each(function(){
            var id = $(this).attr("href");
            if(idP != id){
                $(id).removeClass("show").addClass("collapse");
            }
        });
        $(".content_profile").addClass("visually-hidden");
    });
    $(".tab__container .tab__button").click(function(e){
        var id = $(this).attr("data-target");
        $(".tab__button").removeClass("active");
        $(this).addClass("active");
        //---------------------------------
        $(".topic__container").addClass("visually-hidden");
        $("#"+id).removeClass("visually-hidden");
    });
    $(".popup__days .popup__days-button").click(function(e){
        var id = $(this).attr("data-target");
        $(".popup__days-button").removeClass("active__button");
        $(this).addClass("active__button");
    });

    $(".navbar__profile").click(function(e){
        $(".sidebar__links a").each(function(){
            var id = $(this).attr("href");
            $(id).removeClass("show").addClass("collapse");
        });
        $(".sidebar__links a").removeClass("active").addClass("collapsed");
        $(".content_profile").removeClass("visually-hidden");
    });
    //show popver in table
    $('.poppup').each(function(){
      var popover = new bootstrap.Popover(this, {
        html: true,
        container: this.closest('td'),
        trigger: "click",
        content:'<div class="list-group">\
          <a href="#" class="list-group-item list-group-item-action">View</a>\
          <a href="#" class="list-group-item list-group-item-action">Edit</a>\
          <a href="#" class="list-group-item list-group-item-action">Detail</a>\
        </div>',
      });
    })
    //show topics
    $('.topic__topics .topic__section .topic__column .topic__row').each(function(){
      $(this).on("click", function(){
        $('.topic__topics .topic__section .topic__column .topic__row').removeClass("selected");
        $(this).addClass("selected");
        $(".topic__topics").find(".topic_search").removeClass("visually-hidden");
      })
    })
    //show edit answer and question
    $('.topic_search .topic__row').each(function(){
      $(this).on("click", function(){
        $('.topic_search .topic__row').removeClass("selected");
        $(this).addClass("selected");
        $(".topic__topics").find(".ans_ques").removeClass("visually-hidden");
      })
    })

    $('.sort__button').each(function(){
      $(this).on("click", function(){
        if($(this).find('[data-testid="KeyboardArrowUpIcon"]').length > 0 || $(this).find('[data-testid="SortIcon"]').length > 0){
          $(this).find(".sort__button-icons").html('<svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="KeyboardArrowDownIcon"><path d="M7.41 8.59 12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path></svg>');
        }
        else{
          $(this).find(".sort__button-icons").html('<svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="KeyboardArrowUpIcon"><path d="M7.41 15.41 12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path></svg>');
        }
      })
    })

    
    
    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }
  
    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    var lineChartCanvas = $('#lineChartAks').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })
    // Get context with jQuery - using jQuery's .get() method.
    //var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Age 10-17',
          'Age 18-25',
          'Age 26-40',
          'Age 41-60',
          'Age 60+',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    /*var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }*/
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

});