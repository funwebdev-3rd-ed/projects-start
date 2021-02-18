
/* note: you may get both a CORS error and module error if you test this locally 
   (i.e., directly from a local file). To work correctly, this needs to be tested on a 
   local web server. Some possibilities: if using Visual Code, use Live Server extension; 
   if Brackets, use built-in Live Preview.
*/

window.addEventListener('load', function() {

   const url = "https://www.randyconnolly.com/funwebdev/3rd/api/stocks/companies.php";



});

/* to display chart using same values as our completed version, use these settings:

   const trace1 = {
      x: xaxis,
      y: series1,
      name: label1,
      type: 'bar',
      marker: {
         color: '#5C6BC0'
       }      
   };
   const trace2 = {
      x: xaxis,
      y: series2,
      name: label2,
      type: 'bar',
      marker: {
         color: '#FF246D'
       }         
   };      

   const layout = {
      barmode: 'group',
      autosize: false,
      height: 280,
      margin: {
         l: 50,
         r: 10,
         b: 30,
         t: 10,
         pad: 5
       },      
   };
   
   const data = [trace1, trace2];
   const options = {responsive: true, displayModeBar: false, staticPlot: true};
   Plotly.newPlot("your DIV ID here", data, layout, options);
         
*/