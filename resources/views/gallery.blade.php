<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Thư viện ảnh - Cộng Đoàn Thanh Tuyển</title>
  <style>
    /* CSS đồng bộ với các trang khác */
    * {
      margin: 0; 
      padding: 0; 
      box-sizing: border-box;
    }
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
      text-align: center;
    }
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 15px;
    }
    .gallery-grid img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      cursor: pointer;
    }
    .gallery-grid img:hover {
      transform: scale(1.05);
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
  <a href="{{ url('/testimonies') }}">Chia sẻ</a>
  <a href="{{ url('/gallery') }}" class="active">Thư viện</a>
  <a href="{{ url('/contact') }}">Liên hệ</a>
</nav>

<main>
  <h1>Thư viện ảnh hoạt động cộng đoàn</h1>
  <div class="gallery-grid">
    <img src="images/12.trian.jpg" alt="Hoạt động 1" />
    <img src="images/13.suvu.jpg" alt="Hoạt động 2" />
    <img src="images/4.didao.jpg" />
    <img src="images/8.mayva.jpg" alt="Hoạt động 4" />
    <img src="images/7.ruounho.jpg" />
    <img src="images/14.with DucChaBan.jpg" />
  </div>
</main>

<footer>&copy; 2025 Cộng Đoàn Thanh Tuyển. Bảo lưu mọi quyền.</footer>

</body>
</html>
