    var dayData = {
    labels: [
        "bat"
    ],
    datasets: [
        {
            data: [20, 80],
            backgroundColor: [
                "#3ec556",
                "#455a64"
            ],
            hoverBackgroundColor: [
                "#3ec556",
                "#455a64"
            ],
            borderWidth: [
                0, 0
            ]
        }]
};

var hmdData = {
    labels: [
        "hmd"
    ],
    datasets: [
        {
            data: [70, 30],
            backgroundColor: [
                "#2196f3",
                "#455a64"
            ],
            hoverBackgroundColor: [
                "#2196f3",
                "#455a64"
            ],
            borderWidth: [
                0, 0
            ]
        }]
};
var tempData = {
    labels: [
        "temp"
    ],
    datasets: [
        {
            data: [76, 38],
            backgroundColor: [
                "#ff9800",
                "#455a64"
            ],
            hoverBackgroundColor: [
                "#ff9800",
                "#455a64"
            ],
            borderWidth: [
                0, 0
            ]
        }]
};

var gaugeOpt = {
    cutoutPercentage: 80,
    animation: {
        animationRotate: true,
        duration: 2000
    },
    legend: {
        display: false
    },
    tooltips: {
        enabled: false
    }
};

var trendOpt = {
    legend: {
        defaultFontColor: "white",
        labels: {
            fontColor: 'white',
            fontFamily: "Karla"
        }
    },
    scales: { 
        xAxes: [{
            ticks: {
                fontColor: "white",
                fontFamily: "Karla"
                
            },
            gridLines: {
                "color": "#9e9e9e",
                lineWidth: .5
            }
        }],
        yAxes: [{
            
            ticks: {
                fontColor: "white",
                fontFamily: "Karla"
                
            },
            gridLines: {
                "color": "#9e9e9e",
                lineWidth: .5
            }
        }]
    }
};


var hTrendData = {
    "labels":["January","February","March","April","May","June","July"],
    "datasets":[{
        "label":"Humidity Trend",
        "data":[65,59,80,81,56,55,40],
        "backgroundColor":"#2196f3",
        "fill":false,
        "borderColor":"#2196f3",
        "borderWidth": 2,
        "lineTension":0.1}]
};
var tTrendData = {
    "labels":["January","February","March","April","May","June","July"],
    "datasets":[{
        "label":"Humidity Trend",
        "data":[65,59,80,81,56,55,40],
        "backgroundColor":"#ff9800",
        "fill":false,
        "borderColor":"#ff9800",
        "borderWidth": 2,
        "lineTension":0.1}]
};

var chart = new Chart($('#dayGauge'), { // day gauge
    type: 'doughnut',
    data: dayData,
    options: gaugeOpt
});

var chart = new Chart($('#hmdGauge'), { // humidity gauge
    type: 'doughnut',
    data: hmdData,
    options: gaugeOpt
});

var chart = new Chart($('#tempGauge'), { // temperature gauge
    type: 'doughnut',
    data: tempData,
    options: gaugeOpt
});

var hTrendChart = new Chart("hmdTrend", {  // daily humidity trend graph
    type: 'line',
    data: hTrendData,
    options: trendOpt
});

var tTrendChart = new Chart("tempTrend", { // daily temperature trend graph
    type: 'line',
    data: tTrendData,
    options: trendOpt
});

function getData(id) {
    return Promise.resolve($.ajax({
        url: "getData.php",
        method: "GET",
        data: {
            id: id
        }
    }));
}

function update() {
    getData(1).then((res) => {
        let json = JSON.parse(res);
        console.log(json);
        document.getElementById('temp').innerText = json.temp;
        document.getElementById('battery').innerText = json.battery;
        document.getElementById('humidity').innerText = json.humidity;
        document.getElementById('lastUpdate').innerText = json.lastUpdate;
    });
}

update();