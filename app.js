var items = [];
var index = 0;
for (let i = 0; i < 20; i++) {
    items[i] = "images/phones/" + i + ".jpg";
    console.log(items[i]);
}
var bgImg = document.getElementById("container");
var countImg = document.getElementById("count-img");

function viewPrevImg() {
    index--;
    if (index < 0) index = items.length - 1;
    bgImg.style.background = "url('" + items[index] + "') no-repeat center";
    bgImg.style.backgroundSize = "300px 300px";
    countImg.innerText = "Ảnh " + parseInt(index + 1) + "/20";
}

function viewNextImg() {
    index++;
    if (index >= items.length) index = 0;
    bgImg.style.background = "url('" + items[index] + "') no-repeat center";
    bgImg.style.backgroundSize = "300px 300px";
    countImg.innerText = "Ảnh " + parseInt(index + 1) + "/20";
}