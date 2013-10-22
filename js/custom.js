function verify()
{
var x=document.forms["register"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
 var ps=document.forms["register"]["pass"].value;
 var vps=document.forms["register"]["verpass"].value;
 if(!(str==vps))
 	{
  alert("Not a valid e-mail address");
  return false;
  }
}