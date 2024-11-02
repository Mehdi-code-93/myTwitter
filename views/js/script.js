document.addEventListener('DOMContentLoaded', function () {

var like = document.getElementsByClassName("btnLike");

nb = 0;


    console.log(nb);

    like[nb].onclick = function start() {
        like[nb].style.color = 'red';
        nb++;
    }
    // console.log(nb+"1");
});

