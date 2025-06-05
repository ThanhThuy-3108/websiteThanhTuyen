<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Chia sẻ - Cộng Đoàn Thanh Tuyển</title>
  <style>
    /* CSS giống các trang khác */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f9fafb;
      color: #222;
      line-height: 1.6;
      padding: 20px;
    }
    header {
      background: #0d6efd;
      color: white;
      padding: 20px 0;
      text-align: center;
      font-size: 2rem;
      font-weight: 700;
      border-radius: 8px;
      box-shadow: 0 3px 8px rgba(13, 110, 253, 0.6);
      margin-bottom: 20px;
    }
    nav {
      background: white;
      display: flex;
      justify-content: center;
      gap: 20px;
      padding: 10px 0;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }
    nav a {
      color: #0d6efd;
      text-decoration: none;
      font-weight: 600;
      padding: 8px 14px;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }
    nav a:hover, nav a.active {
      background-color: #0d6efd;
      color: white;
    }
    nav a.active {
      font-weight: 700;
    }
    main {
      max-width: 900px;
      margin: 0 auto;
      background: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    }
    h1 {
      color: #0d6efd;
      margin-bottom: 20px;
    }
    p {
      margin-bottom: 16px;
      font-size: 1.1rem;
    }
    blockquote {
      border-left: 5px solid #0d6efd;
      padding-left: 20px;
      font-style: italic;
      margin-bottom: 20px;
      background: #e9f0ff;
      border-radius: 6px;
    }
    img {
      max-width: 100%;
      border-radius: 10px;
      margin-top: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    footer {
      text-align: center;
      margin-top: 40px;
      padding-top: 20px;
      color: #666;
      border-top: 1px solid #ddd;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

<header>Cộng Đoàn Thanh Tuyển</header>

<nav>
  <a href="{{ url('/') }}">Trang chủ</a>
  <a href="{{ url('/about') }}">Giới thiệu</a>
  <a href="{{ url('/activities') }}">Sinh hoạt</a>
  <a href="{{ url('/testimonies') }}" class="active">Chia sẻ</a>
  <a href="{{ url('/gallery') }}">Thư viện</a>
  <a href="{{ url('/contact') }}">Liên hệ</a>
</nav>

<main>
  <h1>Chia sẻ đức tin và kinh nghiệm sống</h1>
  <blockquote>
    "“Cộng đoàn là nơi đã nuôi dưỡng tôi trong đức tin và giúp tôi từng bước trưởng thành hơn trên hành trình tìm kiếm ý nghĩa cuộc sống. Tại đây, tôi tìm thấy niềm vui chân thật và bình an trong tâm hồn.”"
  </blockquote>
  <img src="images/11.noel.jpg" alt="Chia sẻ đức tin" />
  <p></p>
  <blockquote>
    ".Qua từng buổi sinh hoạt, tôi cảm nhận rõ nét sự ấm áp, gần gũi và tình thân quý giá nơi chị em trong cộng đoàn — như một gia đình thiêng liêng cùng đồng hành trong đức tin.."
  </blockquote>
  <img src="images/2.vuichoi.jpg" alt="Niềm vui trong cộng đoàn" />
</main>

<footer>&copy; 2025 Cộng Đoàn Thanh Tuyển. Bảo lưu mọi quyền.</footer>

</body>
</html>
