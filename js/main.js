// slider
// $('.single-item').slick({
//     arrows: true,
//     // infinite: true,
//     dots: false,
//     slidesToShow: 3,
//     slidesToScroll: 1
// });

document.querySelector('.burger').addEventListener('click', function () {
    this.classList.toggle('active');
    document.querySelector('.navbar').classList.toggle('open');
})

// preloader
// document.body.onload = function () {
//     setTimeout(function () {
//         var preloader = document.getElementById('page-preloader');
//         if (!preloader.classList.contains('done'))
//         {
//             preloader.classList.add('done');
//         }
//     }, 1000)
// }
// document.querySelector(".js-menu_button").addEventListener("click", e => {
//     e.preventDefault();
//     // document.querySelector(".menu_list").classList.toggle("active");
//     document.querySelector(".menu_list").style.display = "block";
//     console.log(document.querySelectorAll(".menu_link"));
//     // document.querySelector(".menu_list").innerHTML = Array.from(document.querySelectorAll(".menu_link")).reduce( (acc, elem) => acc + elem.textContent + "\n", "" );
// })
    