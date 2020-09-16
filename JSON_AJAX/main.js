var con=document.getElementById("s");
var btn=document.getElementById("btn");
btn.addEventListener("click",function(){
    var ourreq=new XMLHttpRequest();
ourreq.open('GET','https://learnwebcode.github.io/json-example/animals-1.json',true);
ourreq.onload=function(){
    var ourData=JSON.parse(ourreq.responseText);
    //console.log(ourData[0]);
    renderHTML(ourData);

    
};
ourreq.send();

});
function renderHTML(data){
    var val=" ";
    for(i=0;i<data.length;i++){
        val+="<p>"+data[i].name+"</p>";
    }
    con.insertAdjacentHTML('beforeend',val);

}
