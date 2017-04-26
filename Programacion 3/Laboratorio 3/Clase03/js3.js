

window.onload=function()
{
    var ids=document.getElementsByTagName("*");

    for(var i=0;i<ids.length;i++)
    {
        if(ids[i].id=="div1")
        {
            ids[i].className="Tachar";
        }
    } 

}    



function Subrayar()
{
    var id=document.getElementById("div2");
    id.className="Subrayado";
}
function Alternar()
{
    var id=document.getElementById("div1");
    id.className="NoSubrayado";
}
function Tachar()
{
    var id=document.getElementById("div1");
    id.className="Tachar";
}
