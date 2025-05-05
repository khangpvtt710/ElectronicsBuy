const itemsliderbar = document.querySelectorAll(".cartegory-left > ul > li > a.cartegory-left-li");

itemsliderbar.forEach(function(menu) {
    menu.addEventListener("click", function(e) {
        e.preventDefault();  // Ngừng hành động mặc định khi click vào link

        const parentLi = menu.parentElement;  // Lấy phần tử <li> cha của <a>

        // Toggle lớp 'block' cho phần tử <li> khi click
        parentLi.classList.toggle("block");

        // Đảm bảo chỉ một menu con được mở tại một thời điểm
        const otherLi = document.querySelectorAll('.cartegory-left > ul > li');
        otherLi.forEach(function(other) {
            if (other !== parentLi) {
                other.classList.remove('block');  // Ẩn menu khác
            }
        });
    });
});

