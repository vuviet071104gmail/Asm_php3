const ngayGioElement = document.getElementById('ngay-gio');

function layNgayGioHienTai() {
    const now = new Date();
    const ngay = now.getDate();
    const thang = now.getMonth() + 1; // Tháng trong JavaScript bắt đầu từ 0
    const nam = now.getFullYear();
    const gio = now.getHours();
    const phut = now.getMinutes();


    const formattedDate = `${ngay}/${thang}/${nam} ${gio}:${phut}`;
    ngayGioElement.textContent = formattedDate;
}

layNgayGioHienTai();

setInterval(layNgayGioHienTai, 1000); // Cập nhật ngày giờ mỗi giây
