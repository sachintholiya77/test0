function printdata()
{
    //creating an object with name xhr for XMLHttpRequest class
    const xhr = new XMLHttpRequest();
    //calling xhr open() method to request the data
    
    xhr.open('GET','getdata.php',true);
    xhr.onprogress = function(){
        console.log("Request is in progress...!");
    }
    xhr.onreadystatechange = function(){
        console.log("State is changed..!");
    }
    xhr.onload = function(){
        console.log("Data is loaded..!");
        document.getElementById('FetchData').innerHTML = this.responseText;
    }
    xhr.send();
}
