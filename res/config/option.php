<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Vương Thanh Diệu <www.facebok.com/wusthanhdieu>
 */
interface ThanhDieuConfigInterface {
    public function CommonMethod();
}
class ThanhDieuHeader implements ThanhDieuConfigInterface {
    public $title = "Vinh | Profile";
    public $description = "Hi my name is Vinh / A Good Boy / newbie web developer / nghèo";
    public $keywords = "vinh,web vinh,hoang the vinh,vinhtv,vinh day,vinh ne,vinh home,profile vinh";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "VINH | HOME";
    public $avatar = "./res/v5/img/avatar.gif";
    public $userName = ["Hello", "My name is Vinh.", "I really like play game 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đâm mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư phát triển tình cảm";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://facebook.com/vinhdnah1", // Thay link facebook
        "instagram" => "https://www.instagram.com/whenicoe1a", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/@v_study36", // Thay link tiktok
        "telegram" => "https://t.me/vinhdnah", // Thay link telegram
        "locket" => "https://locket.cam/vinhbidepzai",
        "zalo" => "https://zalo.me/0346986808",
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}


class ThanhDieuLoveDays implements ThanhDieuConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "Vinh", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.jpeg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "My Love", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "28/03/2024" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/69hy7d.mp3",
            "avatar" => "https://i.ytimg.com/vi/rIaMeqnL1u0/maxresdefault.jpg",
            "title" => "2 AM",
            "author" => "JustaTee x BigDaddy"
        ],
[
            "url" => "https://files.catbox.moe/a9u2f8.mp3",
            "avatar" => "https://i.ytimg.com/vi/9-H2Jr5SliU/0.jpg",
            "title" => "Freed From Desire X Lệ Lưu Ly",
            "author" => "Qtrung Remix"
        ],
[
            "url" => "https://files.catbox.moe/0s15hx.mp3",
            "avatar" => "https://i.ytimg.com/vi/RQxCdfAUgaI/0.jpg",
            "title" => "CÓ DUYÊN KHÔNG NỢ",
            "author" => "TUKI x DEZIN ft TINA HỒ"
        ],
[
            "url" => "https://files.catbox.moe/703g1m.mp3",
            "avatar" => "https://i.ytimg.com/vi/V17ebpZNXuQ/maxresdefault.jpg",
            "title" => "THE NIGHT",
            "author" => "TVT x NEVER REMIX"
        ],
[
            "url" => "https://files.catbox.moe/g5svuu.mp3",
            "avatar" => "https://i.ytimg.com/vi/Sf9_daKZrnY/maxresdefault.jpg",
            "title" => "Tháng Tư Là Lời Nói Dối Của Em",
            "author" => "Hà Anh Tuấn"
        ],
        [
            "url" => "https://files.catbox.moe/4bjjfg.mp3",
            "avatar" => "https://i.ibb.co/Pt4ZJJd/that-girl-1545280005.jpg",
            "title" => "That Girl",
            "author" => "Olly Murs"
        ],
        [
            "url" => "https://files.catbox.moe/m8b4hr.mp3",
            "avatar" => "https://i.imgur.com/e28b0dD.png",
            "title" => "Thiên Lý Ơi",
            "author" => "Jack ( 5 Triệu )"
        ],
        [
            "url" => "https://files.catbox.moe/yrpft2.mp3",
            "avatar" => "https://i.imgur.com/DAaTklq.png",
            "title" => "Thuỷ Triều",
            "author" => "Quang Hùng MasterD"
        ],
        [
            "url" => "https://files.catbox.moe/jlat9a.mp3",
            "avatar" => "https://i.imgur.com/vp5Vsx5.png",
            "title" => "風立ちぬ ( Gió Nổi )",
            "author" => "周深"
        ],
        [
            "url" => "https://files.catbox.moe/hkqk6x.mp3",
            "avatar" => "https://i.imgur.com/GEOKT8b.png",
            "title" => "Chúng Ta Của Tương Lai",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/acg0vl.mp3",
            "avatar" => "https://i.ibb.co/MDVY07s/619964de31327dbf8491d14d2c25533f.jpg",
            "title" => "Hoa Cỏ Lau",
            "author" => "Phong Max"
        ],
        [
            "url" => "https://files.catbox.moe/s8opab.mp3",
            "avatar" => "https://i.ibb.co/6R8V7S7/ed0741228ad36870e13624120474e50a.jpg",
            "title" => "Sau Lời Từ Khước",
            "author" => "Phan Mạnh Quỳnh"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "https://i.ibb.co/gvXHBqv/ab67616d0000b273ae85dfd27beee97a3a009f68.jpg",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/dvjckq.mp3",
            "avatar" => "https://i.ibb.co/VpFyXhS/ab44498b5b432879428719390baf1180-1490064587.jpg",
            "title" => "Anh Đã Quen Với Cô Đơn",
            "author" => "Soobin Hoàng Sơn"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
