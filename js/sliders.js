interval = (videoLocal) => {
    const interval = setInterval(function () {
        let progressBar = videoLocal.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.querySelector('.slick-dots li.slick-active button');
        let width = (videoLocal.currentTime * 100) / videoLocal.duration;
        progressBar.style.background = `linear-gradient(to right,white 0%, white ${width}%,lightgrey ${width}% , lightgrey ${100 - width}%)`;
        if (videoLocal.paused) {
            clearTimeout(interval);
        }
    }, 100);
}
const pauseVideo = document.querySelector('.pause__video');

document.addEventListener("DOMContentLoaded", function () {
    $('.slick-dots li button').on('click', function(e){
        e.stopPropagation(); // use this
    });
})
function sliders() {
    $('.slider').each(function() {
        let slider = $(this).slick({
            arrows:true,
            dots:true,
            infinite: false,
            slidesToShow:1,
            accessibility: false,
            swipeToSlide: false,
            touchMove: false,
            swipe: false,
            appendDots: $(this).parent().find('.slick-dots')
        });
        function stopVideos() {
            $(this).find('.slider__video-item').each(function (){
                this.pause();
            })
        }
        $('.overlay').each(function(){
            this.addEventListener('click', function(){
                this.parentElement.querySelector('.slider__video-item').play();
                interval(this.parentElement.querySelector('.slider__video-item'));
                this.classList.remove('active');
                Array.from(document.querySelectorAll('.popup')).forEach((elem) => {
                    elem.classList.remove('active');
                    pauseVideo.classList.remove('active');
                });
            })
        });
        $(this).find('.slider__video-item').each(function () {
            // Закончил здесь
            this.addEventListener('click', function (){
                let videoLocal = this;
                //let videoMirror = document.getElementById('mirrorVideo')
                interval(videoLocal);

                if(this.paused){
                    $('.slick-current').find('.play__video').removeClass('active');
                    $('.slick-current').find('.pause__video').removeClass('active');
                    //videoMirror.play();
                    this.play();
                }
                else{
                    $('.slick-current').find('.pause__video').addClass('active');
                    //videoMirror.pause();
                    this.pause();
                }
            })
        })
        $(this).on('afterChange', function (event, slick) {
            stopVideos();
            $(this).find('.slider__video-item').each(function () {
                let videoLocal = this;
                interval(videoLocal);
            })
        });

        $(this).on('beforeChange', function (event, slick ) {
            stopVideos();
            $(this).find('.slider__video-item').each(function () {
                let videoLocal = this;
                interval(videoLocal);
            });
        });
    });
}
sliders();
