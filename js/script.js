

var food_id = document.getElementsByClassName("add");

for (var i = 0; food_id.length; i++){
    food_id[i].addEventListener("click", function(event){
        var target = event.target;
        var id = target.getAttribute("data-id");
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
               var data =JSON.parse(this.responseText);
               target.innerHTML = data.in_cart;             
            }
        }
        xml.open("GET", "include/dbh.inc.php?id="+id,true);
        xml.send();
        
    })
}