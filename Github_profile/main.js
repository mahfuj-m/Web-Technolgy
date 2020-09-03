var page=1;
var con=document.getElementById("s");
var btn=document.getElementById("btn");
btn.addEventListener("click",function(){
var ourreq=new XMLHttpRequest();
ourreq.open('GET','https://api.github.com/users',true);
ourreq.onload=function(){
    var ourData=JSON.parse(ourreq.responseText);
    //console.log(ourData[0]);
    renderHTML(ourData);

    
};
ourreq.send();
page++;
if(page>1){
    document.getElementById("btn").disabled=true;
}

});
function renderHTML(data){
    var val=" ";
    for(i=0;i<data.length;i++){
        val+= '<div> <table> <tr> <td>' +
        		'<img src="'+data[i].avatar_url+'" alt="'+data[i].login+'" width="100" height="100"> </td> <td>'+
				 '<ul style="list-style-type:none;">' +
				 '<li>ID: '+data[i].id+'</li>' +
				 '<li>Login: '+data[i].login+'</li>' +
				 '<li>Repos:'+data[i].repos_url +'</li>'+
				 '</ul> </td>' +
				 '</tr></table></div>';
    }
    con.insertAdjacentHTML('beforeend',val);

}