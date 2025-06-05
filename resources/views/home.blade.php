<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Trang chủ - Cộng Đoàn Thanh Tuyển</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Quicksand', sans-serif;
      background: #f2f6fc;
      color: #222;
      padding: 20px;
    }
    header {
      background: #007bff;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 2rem;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    nav {
      background: white;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }
    nav a {
      color: #007bff;
      text-decoration: none;
      padding: 8px 14px;
      border-radius: 6px;
      transition: 0.3s;
      font-weight: 600;
    }
    nav a:hover, nav a.active {
      background: #007bff;
      color: white;
    }
    main {
      max-width: 900px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 3px 15px rgba(0,0,0,0.08);
    }
    h1 { color: #007bff; margin-bottom: 20px; }
    p { font-size: 1.1rem; margin-bottom: 20px; }
    img {
      max-width: 100%;
      border-radius: 10px;
      margin-top: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    footer {
      text-align: center;
      color: #666;
      margin-top: 40px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
<header>Cộng Đoàn Thanh Tuyển</header>
<nav>
  <a href="{{ url('/') }}" class="active">Trang chủ</a>
  <a href="{{ url('/about') }}">Giới thiệu</a>
  <a href="{{ url('/activities') }}">Sinh hoạt</a>
  <a href="{{ url('/testimonies') }}">Chia sẻ</a>
  <a href="{{ url('/gallery') }}">Thư viện</a>
  <a href="{{ url('/contact') }}">Liên hệ</a>
</nav>
<main>
  <h1>Chào mừng bạn đến với Cộng Đoàn Thanh Tuyển</h1>
  <p>Nơi mỗi bước chân đều được dẫn dắt bởi tình yêu và đức tin.
Chúng ta cùng nhau sẻ chia niềm vui, nâng đỡ nhau trong những lúc khó khăn, và nuôi dưỡng tâm hồn để ngày một gần Chúa hơn.
Ở đây, bạn không chỉ tìm thấy một cộng đoàn, mà còn tìm thấy một gia đình để yêu thương và được yêu thương.</p>
<img src="{{ asset('images/1.canha.jpg') }}" alt="...">
<footer>&copy; 2025 Cộng Đoàn Thanh Tuyển</footer>
</body>
</html>
