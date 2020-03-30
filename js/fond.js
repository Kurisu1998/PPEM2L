function pouic()
{
  var tab = new Array();
  tab[0] = "1.jpg";
  tab[1] = "2.jpg";
  tab[2] = "3.jpg";
  


   var bg = Math.floor(Math.random()*tab.length);

   document.body.style.backgroundImage = "url("+tab[bg]+")";
}