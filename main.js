$(document).ready(function(){
    


    prova.onclick = function(){
        var apiKey = "253780c9c6e44010f51ea842e5513340";

        var city = $("#city").val();

        var uri = "http://api.openweathermap.org/data/2.5/weather?q=" + city + "&appid=" + apiKey;

        var request = new XMLHttpRequest();
        request.open('GET', uri, true);

        request.onload = function(){

               

                var data = JSON.parse(this.response);
                var temp = data.main.temp;

                var imaginina = data.main.humidity;

                temp = parseInt(temp) - 273;
                var ris = $("#ris");
                
                $(ris).append("A" +" " + city +" "+ "ci sono " + temp +" "+ "Gradi"+ " " + imaginina );
               

        }

        request.send();


    }
   
 





});