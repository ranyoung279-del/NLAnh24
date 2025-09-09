<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Harry Potter</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #4b2e83;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #FFD43B;
        }
        main {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        footer {
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
            background-color: #f1f1f1;
            color: #555;
            font-size: 14px;
        }
    </style>
</head>
<body>

<header>
    <h1>📚 Harry Potter</h1>
    <nav>
        <a href="#">Trang chủ</a>
        <a href="#">Giới thiệu</a>
    </nav>
</header>

<main>  
    <h2>Giới thiệu</h2>
    <p><strong>Harry Potter</strong> là bộ tiểu thuyết kỳ ảo gồm 7 phần của nhà văn J.K. Rowling, 
    kể về cuộc đời và hành trình của cậu bé phù thủy Harry Potter cùng bạn bè tại trường Hogwarts.</p>

    <h2>Nội dung chính</h2>
    <p>Bộ truyện xoay quanh cuộc chiến giữa Harry và chúa tể hắc ám Voldemort – kẻ đã sát hại cha mẹ cậu. 
    Tình bạn, lòng dũng cảm và sự hy sinh là những giá trị xuyên suốt toàn bộ tác phẩm.</p>

    <h2>Điểm nổi bật</h2>
    <ul>
        <li>Thế giới phép thuật sáng tạo và cuốn hút.</li>
        <li>Nhân vật đa dạng, mỗi người có câu chuyện riêng.</li>
        <li>Được chuyển thể thành loạt phim ăn khách toàn cầu.</li>
    </ul>
</main>

<footer>
    &copy; <?php echo date("Y"); ?> - Giới thiệu Harry Potter
</footer>

</body>
</html>
