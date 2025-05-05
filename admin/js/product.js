const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")
smallImg.forEach(function (imgItem, x) {
    imgItem.addEventListener("click", function () {
        bigImg.src = imgItem.src
    })
})


const baohanh = document.querySelector(".baohanh")
const chitiet = document.querySelector(".chitiet")
if (baohanh) {
    baohanh.addEventListener("click", function () {
        document.querySelector(".product-content-right-botton-content-chitiet").style.display ="none"
        document.querySelector(".product-content-right-botton-content-baohanh").style.display ="block"
    })
}
if (chitiet) {
    chitiet.addEventListener("click", function () {
        document.querySelector(".product-content-right-botton-content-baohanh").style.display ="none"
        document.querySelector(".product-content-right-botton-content-chitiet").style.display ="block"
        
    })
}

const buttom = document.querySelector(".product-content-right-botton-top")
if (buttom) {
    buttom.addEventListener("click", function () {
        document.querySelector(".product-content-right-botton-content-big").classList.toggle("activeB")
    })
}

