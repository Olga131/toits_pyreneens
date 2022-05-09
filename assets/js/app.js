import '../css/app.scss';

const li1 = document.getElementById("li1");
console.log(li1);
const li2 = document.getElementById("li2");
const li3 = document.getElementById("li3");
const li4 = document.getElementById("li4");
const li5 = document.getElementById("li5");
const li6 = document.getElementById("li6");
const li7 = document.getElementById("li7");
const li8 = document.getElementById("li8");

const div1 = document.getElementById("div1");
const div2 = document.getElementById("div2");
const div3 = document.getElementById("div3");
const div4 = document.getElementById("div4");
const div5 = document.getElementById("div5");
const div6 = document.getElementById("div6");
const div7 = document.getElementById("div7");
const div8 = document.getElementById("div8");
console.log(div4);

function showContent(obj) {

    if (obj.style.display === "none") {
        obj.style.display = "block";
      } else {
        obj.style.display = "none";
      }
    } 


li1.addEventListener('click', function() { showContent(div1)});
li2.addEventListener('click', function() { showContent(div2)});
li3.addEventListener('click', function() {showContent(div3)});
li4.addEventListener('click', function() { showContent(div4)});
li5.addEventListener('click', function() { showContent(div5)});
li6.addEventListener('click', function() {showContent(div6)});
li7.addEventListener('click', function() { showContent(div7)});
li8.addEventListener('click', function() {showContent(div8)});

console.log(obj);
