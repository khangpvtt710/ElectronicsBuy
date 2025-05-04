const header = document.querySelector("header")
window.addEventListener("scroll", function () {
    x = window.pageYOffset
    if (x > 0) {
        header.classList.add("sticky")
    }
    else {
        header.classList.remove("sticky")
    }
})

const imgPosition = document.querySelectorAll(".aspect-radio img");
const imgContainer = document.querySelector(".aspect-radio");  // Container chứa các ảnh
let index = 0; // Chỉ số ảnh hiện tại
const dotItem = document.querySelectorAll(".dot");
// Thiết lập vị trí ban đầu cho mỗi ảnh
imgPosition.forEach(function (image, index) {
    image.style.left = index * 100 + "%"; // Đặt các ảnh ở vị trí ngang 100% chiều rộng mỗi ảnh
    dotItem[index].addEventListener("click",function(){
        slider(index);
    })
});

// Hàm để chuyển ảnh
function imgSlide() {
    index++; // Tăng chỉ số ảnh
    if (index >= imgPosition.length) { // Nếu đã đến ảnh cuối cùng, quay lại đầu
        index = 0;
    }
    slider(index); // Gọi hàm slider để di chuyển ảnh
}

// Hàm để di chuyển ảnh theo chỉ số
function slider(index) {
    imgContainer.style.transform = "translateX(-" + index * 100 + "%)"; // Di chuyển container sang trái
    const doActive = document.querySelector('.active')
    doActive.classList.remove("active")
    dotItem[index].classList.add("active")
}

// Gọi imgSlide mỗi 5 giây
setInterval(imgSlide, 5000);

