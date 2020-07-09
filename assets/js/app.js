import 'bootstrap';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/dropdown';
import anychart from 'anychart';

import '../css/main.scss';


var ages = [];
for(const property in age) {
    ages.push([`${property}`, age[property].length])
}

anychart.onDocumentReady(function() {
    // create a pie chart
    var chart = anychart.pie([
        ages[0],
        ages[1],
        ages[2]
    ]);
    chart.title("Top 5 pancake fillings");
    // set the container where chart will be drawn
    chart.container("container");
    //  draw the chart on the page
    chart.draw();
});

