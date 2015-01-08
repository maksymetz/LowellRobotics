var length=7
var spot1=1;var spot2=2;var spot3=3;var spot4=4;var spot5=5;

function down() {
if(1<spot1<length){document.getElementById("down").innerHTML='<input type="button" style="width:22px;font-family:arial;font-weight:bold;font-size:15px;text-align:center;margin:2px;" value="&#8744;" onclick="down()" />';document.getElementById("up").innerHTML='<input type="button" style="width:22px;font-family:arial;font-weight:bold;font-size:15px;text-align:center;margin:2px;" value="&#8743;" onclick="up()" />';spot1++;document.getElementById("img1t").src="/common/photo_gallery/thumbs/" + spot1 + ".jpg";}
if(spot1==length){document.getElementById("down").innerHTML='<input type="button" style="width:22px;font-family:arial;font-weight:bold;font-size:15px;text-align:center;margin:2px;color:#aaa;" value="&#8744;" />';document.getElementById("up").innerHTML='<input type="button" style="width:22px;font-family:arial;font-weight:bold;font-size:15px;text-align:center;margin:2px;" value="&#8743;" onclick="up()" />';}
if(spot2>length) {spot2++;document.getElementById("img2t").src="/common/photo_gallery/thumbs/blank.gif";}
if(spot2<=length) {spot2++;document.getElementById("img2t").src="/common/photo_gallery/thumbs/" + spot2 + ".jpg";}
if(spot3>length) {spot3++;document.getElementById("img3t").src="/common/photo_gallery/thumbs/blank.gif";}
if(spot3<=length) {spot3++;document.getElementById("img3t").src="/common/photo_gallery/thumbs/" + spot3 + ".jpg";}
if(spot4>length) {spot4++;document.getElementById("img4t").src="/common/photo_gallery/thumbs/blank.gif";}
if(spot4<=length) {spot4++;document.getElementById("img4t").src="/common/photo_gallery/thumbs/" + spot4 + ".jpg";}
if(spot5>length) {spot5++;document.getElementById("img5t").src="/common/photo_gallery/thumbs/blank.gif";}
if(spot5<=length) {spot5++;document.getElementById("img5t").src="/common/photo_gallery/thumbs/" + spot5 + ".jpg";}


sidesource = document.getElementById("img1t").src;
firsthalf=sidesource.substring(0,51);
secondhalf=sidesource.substring(59,63);
src=firsthalf + spot1 + secondhalf;
document.getElementById("bigpic").src=src;

}

function up() {
if(spot1==2) {
spot1--;spot2--;spot3--;spot4--;spot5--;
document.getElementById("img1t").src="/common/photo_gallery/thumbs/" + spot1 + ".jpg";

document.getElementById("img2t").src="/common/photo_gallery/thumbs/" + spot2 + ".jpg";document.getElementById("img3t").src="/common/photo_gallery/thumbs/" + spot3 + ".jpg";document.getElementById("img4t").src="/common/photo_gallery/thumbs/" + spot4 + ".jpg";document.getElementById("img5t").src="/common/photo_gallery/thumbs/" + spot5 + ".jpg";document.getElementById("up").innerHTML='<input type="button" style="width:22px;font-family:arial;font-weight:bold;font-size:15px;text-align:center;margin:2px;color:#aaa;" value="&#8743;" />';document.getElementById("down").innerHTML='<input type="button" style="width:22px;font-family:arial;font-weight:bold;font-size:15px;text-align:center;margin:2px;" value="&#8744;" onclick="down()" />';}
else {
spot1--;spot2--;spot3--;spot4--;spot5--;document.getElementById("img1t").src="/common/photo_gallery/thumbs/" + spot1 + ".jpg";document.getElementById("img2t").src="/common/photo_gallery/thumbs/" + spot2 + ".jpg";document.getElementById("img3t").src="/common/photo_gallery/thumbs/" + spot3 + ".jpg";document.getElementById("img4t").src="/common/photo_gallery/thumbs/" + spot4 + ".jpg";document.getElementById("img5t").src="/common/photo_gallery/thumbs/" + spot5 + ".jpg";document.getElementById("down").innerHTML='<input type="button" style="width:22px;font-family:arial;font-weight:bold;font-size:15px;text-align:center;margin:2px;" value="&#8744;" onclick="down()" />';document.getElementById("up").innerHTML='<input type="button" style="width:22px;font-family:arial;font-weight:bold;font-size:15px;text-align:center;margin:2px;" value="&#8743;" onclick="up()" />';}
sidesource = document.getElementById("img1t").src;
firsthalf=sidesource.substring(0,51);
secondhalf=sidesource.substring(59,63);
src=firsthalf + spot1 + secondhalf;
document.getElementById("bigpic").src=src;
}

var description=document.getElementById('description');
document.getElementById("img1t").src=img1thumbsrc;
document.getElementById("img2t").src=img2thumbsrc;
document.getElementById("img3t").src=img3thumbsrc;
document.getElementById("img4t").src=img4thumbsrc;
document.getElementById("img5t").src=img5thumbsrc;
document.getElementById("bigpic").src=img1bigsrc;
document.getElementById("pictitle").innerHTML=img1title;