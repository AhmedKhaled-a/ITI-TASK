let pic = $('.slider-img');
let imgArr = ['img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg', 'img/img6.jpg']
let i = 1;


function fade(){
    pic.fadeOut(1000, () => {
        i < imgArr.length ? i++ : i = 1;
        pic.attr('src', `img/img${i}.jpg`)
        pic.fadeIn(1000)
    })
}
fade()
let imgSlider = setInterval(fade,3000);

$('.stop').on('click',()=>{
    clearInterval(imgSlider);
})


// for(let i = 0; i< $('.item-img').length; i++){
//     $('.item-img').eq(i).on('click',()=>{
//         $('.desc').eq(i).slideToggle(1000);
//     })
// }    // ALSO WORKS

$('.item-img').on('click', function(){
    $(this).siblings('p').slideToggle(1000);
})
console.log($('.item-img').siblings());

