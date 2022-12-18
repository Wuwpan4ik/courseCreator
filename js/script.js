/*SmallPlayer*/$(document).ready(function() {    const button = document.querySelectorAll('.button-open');    let video = document.querySelectorAll('.slider__video-item');    const pauseVideo = document.querySelector('.pause__video');    const playVideo = document.querySelectorAll('.play__video');    const popUpBuy = document.querySelector('.popup__buy');    const videoChoice = document.querySelectorAll('.popup__allLessons-item-video');    const buttonBuy = document.querySelectorAll('.button-buy');    const backPopUpBuy = document.querySelectorAll('.button-back');    Array.from(playVideo).forEach((elem) => {        elem.addEventListener('click', () => {            elem.parentElement.querySelector('.slider__video-item').play();            elem.classList.remove('active');        })    })    Array.from(button).forEach((elem) => {        elem.addEventListener('click', () => {            if(document.querySelector('.play__video').classList.contains('active')){                document.querySelector('.play__video').classList.remove('active');            }            elem.parentElement.parentElement.querySelector('.overlay').classList.add('active');            if (pauseVideo) {                pauseVideo.classList.add('active');            }            setTimeout(function () {                elem.parentElement.parentElement.querySelector('.popup').classList.add('active');            }, (0));            Array.from(video).forEach((elem) => {                elem.pause();            })        })    })    Array.from(videoChoice).forEach((elem) => {        elem.addEventListener('click', () => {            popUpBuy.classList.add('active');            popUpBuy.querySelector('#creator_id').value = elem.dataset.author;            popUpBuy.querySelector('#course_id').value = elem.dataset.course;            popUpBuy.querySelector('#price').innerHTML = elem.dataset.price;            document.getElementById('BuyPopup').action = "/ClientsController/CourseVideo";        })    })    Array.from(buttonBuy).forEach((elem) => {        elem.addEventListener('click', () => {            popUpBuy.classList.add('active');            popUpBuy.querySelector('#creator_id').value = elem.dataset.author;            popUpBuy.querySelector('#course_id').value = elem.dataset.course;            popUpBuy.querySelector('#price').innerHTML = elem.dataset.price;            document.getElementById('BuyPopup').action = "/ClientsController/CourseBuy";            console.log(popUpBuy)        })    })    Array.from(backPopUpBuy).forEach((elem) => {        elem.addEventListener('click', () => {            Array.from(button).forEach((elem) => {                setTimeout(function () {                    popUpBuy.classList.remove('active');                }, (20));            })        })    })    Array.from(document.querySelectorAll('.overlay')).forEach((elem) => {        elem.onclick = function (event) {            if (event.target === elem) {                elem.parentElement.querySelector('.slider__video-item').play();                Array.from(document.querySelectorAll('.popup')).forEach((elem) => {                    elem.classList.remove('active');                    pauseVideo.classList.remove('active');                    let videoLocal = document.querySelector('.slider__video-item');                    let intervalVideo = setInterval(function () {                        let progressBar = videoLocal.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.querySelector('.slick-dots li.slick-active button');                        width = (videoLocal.currentTime * 100) / videoLocal.duration;                        progressBar.style.background = `linear-gradient(to right,white 0%, white ${width}%,lightgrey ${width}% , lightgrey ${100 - width}%)`;                    }, 300);                });                setTimeout(function () {                    elem.classList.remove('active');                }, (500));            }        };    });});document.addEventListener("click", function (is_close) {    var close_next;    if (is_close.target.className == "showup") {        close_next = is_close.target.id;        document.getElementById(close_next).nextElementSibling.style = "display:block";    }    if (is_close.target.className == "close") {        document.getElementById(close_next).nextElementSibling.style = "display:none";        console.log('lol')    }});document.addEventListener('DOMContentLoaded', function () {    let rebootButtons = document.querySelectorAll('.reboot');    rebootButtons.forEach((elem) => {        elem.addEventListener('onclick', function () {        })    });});/* Analytics*/const checkBox = document.body.querySelectorAll('.checkbox');checkBox.forEach(item =>{    item.onclick = function (){        item.parentElement.parentElement.classList.toggle('completed')    }})/*UserPopups*/const otherCourses = document.querySelectorAll('.otherCourses');const availableСoursesBtn = document.querySelectorAll('.availableСoursesBtn');const aboutTheAuthor = document.querySelector('.aboutTheAuthor');const availableToYou = document.querySelector('.availableToYou');const questionBtn = document.querySelectorAll('.questionBtn');const question = document.querySelector('.question');const course = document.querySelector('.Course');const allLessons = document.querySelector('.AllLessons');const youChosen = document.querySelector('.youChosen');const backToCourse = document.querySelectorAll('.courseBackBtn');backToCourse.forEach((item) => {    item.addEventListener('click', function () {        document.querySelectorAll('.userPopup').forEach(item => {            if (item.classList.contains('active')) {                item.classList.remove('active');            }        })        aboutTheAuthor.classList.add('active');    })})availableСoursesBtn.forEach(item => {    item.onclick = function () {        availableToYou.classList.add('active');        aboutTheAuthor.classList.remove('active')    }})questionBtn.forEach(item => {    item.onclick = function () {        question.classList.add('active');        availableToYou.classList.remove('active');        aboutTheAuthor.classList.remove('active');        course.classList.remove('active');        course.classList.remove('active');        youChosen.classList.remove('active');    }})otherCourses.forEach(item => {    item.onclick = function () {        allLessons.classList.add('active');        availableToYou.classList.remove('active')    }})