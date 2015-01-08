//<!--
var variableslide=new Array()

variableslide[0]=['files/slideshow/1.png', '', '']
variableslide[1]=['files/slideshow/2.jpg', '', '']
variableslide[2]=['files/slideshow/3.jpg', '', '']
variableslide[3]=['files/slideshow/4.jpg', '', '']
variableslide[4]=['files/slideshow/5.jpg', '', '']
variableslide[5]=['files/slideshow/6.jpg', '', '']

var slidewidth="350px"
var slideheight="263px"
var slidebgcolor="black"
var slidedelay=5000

var ie=document.all
var dom=document.getElementById

for (i=0;i<variableslide.length;i++){
var cacheimage=new Image()
cacheimage.src=variableslide[i][0]
}

var currentslide=0

function rotateimages(){
contentcontainer='<center>'
if (variableslide[currentslide][1]!="")
contentcontainer+='<a href="'+variableslide[currentslide][1]+'">'
contentcontainer+='<img src="'+variableslide[currentslide][0]+'" border="1" vspace="0">'
if (variableslide[currentslide][1]!="")
contentcontainer+='</a>'
contentcontainer+='</center>'
if (variableslide[currentslide][2]!="")
contentcontainer+=variableslide[currentslide][2]

if (document.layers){
crossrotateobj.document.write(contentcontainer)
crossrotateobj.document.close()
}
else if (ie||dom)
crossrotateobj.innerHTML=contentcontainer
if (currentslide==variableslide.length-1) currentslide=0
else currentslide++
setTimeout("rotateimages()",slidedelay)
}

if (ie||dom)
document.write('<div id="slidedom" style="width:'+slidewidth+';height:'+slideheight+'; background-color:'+slidebgcolor+'"></div>')

function start_slider(){
crossrotateobj=dom? document.getElementById("slidedom") : ie? document.all.slidedom : document.slidensmain.document.slidenssub
if (document.layers)
document.slidensmain.visibility="show"
rotateimages()
}

if (ie||dom)
start_slider()
else if (document.layers)
window.onload=start_slider

//-->