/**
 * Created by mikola on 01.06.2018.
 */
var newDiv = document.createElement("div"), smallImg, bigImage;
newDiv.id = "wrapper";

var bigBlock = document.createElement("div");
bigBlock.id = "bigWrapper";

document.body.appendChild(newDiv);


for(var i = 1; i <= 4; i++){
    smallImg = document.createElement('img');
    smallImg.src = "img/small/img_"+[i]+".png";
    smallImg.id = "img_"+[i];
    newDiv.appendChild(smallImg);
    smallImg.setAttribute('onclick','createImg(this.src)');
    /*smallImg.onclick = "createImg(this.src)";*/

}
function createImg(src){
    document.body.appendChild(bigBlock);
    var x = src.split("/");
    x[1] = "big";
    document.getElementById("bidWrapper");
        var source = "img/"+x[1]+"/img_"+[i];

        bigImage = document.createElement("img");
        bigImage.src += source;
        bigBlock.appendChild(bigImage);

}



/*smallImg1.setAttribute('onclick','');*/
/*smallImg1.onclick = function removeImg(id){
    document.body.appendChild(bigBlock);
    var x = document.getElementById("id").src.replace('img/big/img_1.png');
    bigBlock.appendChild(x);


};*/
/*smallImg1.onclick = "";*/

