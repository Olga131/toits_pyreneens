import '../css/app.scss';

const li1 = document.getElementsByClassName("li1");
console.log(li1);
const li2 = document.getElementsByClassName("li2");
const li3 = document.getElementsByClassName("li3");
const li4 = document.getElementsByClassName("li4");
const li5 = document.getElementsByClassName("li5");
const li6 = document.getElementsByClassName("li6");
const li7 = document.getElementsByClassName("li7");
const li8 = document.getElementsByClassName("li8");

const div1 = document.getElementsByClassName("div1");
const div2 = document.getElementsByClassName("div2");
const div3 = document.getElementsByClassName("div3");
const div4 = document.getElementsByClassName("div4");
const div5 = document.getElementsByClassName("div5");
const div6 = document.getElementsByClassName("div6");
const div7 = document.getElementsByClassName("div7");
const div8 = document.getElementsByClassName("div8");
console.log(div4);

function showContent(obj) {

    if (obj.style.display === "none") {
        obj.style.display = "block";
      } else {
        x.style.display = "none";
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

