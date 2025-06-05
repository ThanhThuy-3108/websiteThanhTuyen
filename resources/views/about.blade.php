<!-- about.blade.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giới thiệu - Cộng Đoàn Thanh Tuyển</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f9fafb;
      color: #222;
      padding: 20px;
    }
    header {
      background: #0d6efd; color: white; padding: 20px 0; text-align: center;
      font-size: 2rem; font-weight: 700; border-radius: 8px;
      box-shadow: 0 3px 8px rgba(13,110,253,0.6); margin-bottom: 20px;
    }
    nav {
      background: white; display: flex; justify-content: center; gap: 20px;
      padding: 10px 0; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }
    nav a {
      color: #0d6efd; text-decoration: none; font-weight: 600;
      padding: 8px 14px; border-radius: 6px;
      transition: background-color 0.3s ease;
    }
    nav a:hover, nav a.active {
      background-color: #0d6efd; color: white;
    }
    main {
      max-width: 900px; margin: 0 auto; background: white; padding: 30px 40px;
      border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    }
    h1 { color: #0d6efd; margin-bottom: 20px; }
    p { margin-bottom: 16px; font-size: 1.1rem; }
    img {
      max-width: 100%; border-radius: 10px; margin-top: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    footer {
      text-align: center; margin-top: 40px; padding-top: 20px; color: #666;
      border-top: 1px solid #ddd; font-size: 0.9rem;
    }
  </style>
</head>
<body>
<header>Cộng Đoàn Thanh Tuyển</header>
<nav>
  <a href="{{ url('/') }}">Trang chủ</a>
  <a href="{{ url('/about') }}" class="active">Giới thiệu</a>
  <a href="{{ url('/activities') }}">Sinh hoạt</a>
  <a href="{{ url('/testimonies') }}">Chia sẻ</a>
  <a href="{{ url('/gallery') }}">Thư viện</a>
  <a href="{{ url('/contact') }}">Liên hệ</a>
</nav>
<main>
  <h1>Giới thiệu</h1>
  <p>Cộng Đoàn Thanh Tuyển là ngôi nhà chung của những tâm hồn trẻ trung, đầy khát vọng, đang từng bước khám phá ơn gọi và dấn thân vào con đường đời sống thánh hiến. Tại đây, chúng ta cùng nhau vun đắp niềm tin, nâng đỡ nhau trong cầu nguyện, và sẻ chia những câu chuyện đẹp của đức tin mỗi ngày.
<img src="{{ asset('images/16.caunguyencongdoan.jpg') }}" alt="...">
  <p>Nơi ấy, tình yêu thương được thắp sáng trong từng cử chỉ, sự khiêm nhường là ánh sáng dẫn lối, và tinh thần phục vụ trở thành hơi thở tự nhiên của đời sống. Cộng đoàn không chỉ là nơi gặp gỡ, mà còn là hành trình đồng hành sâu lắng, nơi mỗi trái tim được mời gọi sống trọn vẹn trong ân sủng và hy vọng
Giá trị cốt lõi của cộng đoàn là tình yêu thương, khiêm nhường và phục vụ trong đời sống hằng ngày.</p>
<img src="{{ asset('images/9.chieusinh.jpg') }}" alt="...">
</main>
<footer>&copy; 2025 Cộng Đoàn Thanh Tuyển. Bảo lưu mọi quyền.</footer>
</body>
</html>
