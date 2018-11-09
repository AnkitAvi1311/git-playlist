"use strict";

window.addEventListener('load',function(){
    
    let http = new XMLHttpRequest();
    let data;
    
    http.onreadystatechange = () => {
        if(http.readyState == 4 && http.status == 200){
            data = JSON.parse(http.response).tweets[0];
            console.log(data);
        }
    }

    http.open("GET", "data/tweets.json", true);
    http.send();
    console.log("test");
    
});