<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Liên hệ - Cộng Đoàn Thanh Tuyển</title>
  <style>
    /* CSS đồng bộ */
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
      max-width: 600px;
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
    form {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    label {
      font-weight: 600;
      margin-bottom: 6px;
    }
    input[type="text"], input[type="email"], textarea {
      padding: 10px 12px;
      border-radius: 6px;
      border: 1px solid #ddd;
      font-size: 1rem;
      resize: vertical;
      font-family: inherit;
    }
    textarea {
      min-height: 120px;
    }
    button {
      background: #0d6efd;
      border: none;
      color: white;
      padding: 12px 0;
      font-size: 1.1rem;
      font-weight: 700;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background: #084cd6;
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
  <a href="{{ url('/gallery') }}">Thư viện</a>
  <a href="{{ url('/contact') }}" class="active">Liên hệ</a>
</nav>

<main>
  <h1>Liên hệ với chúng tôi</h1>
  <form action="#" method="post">
    <label for="name">Họ và tên</label>
    <input type="text" id="name" name="name" placeholder="Nhập họ và tên" required />

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Nhập email" required />

    <label for="message">Nội dung</label>
    <textarea id="message" name="message" placeholder="Viết lời nhắn..." required></textarea>

    <button type="submit">Gửi liên hệ</button>
  </form>
</main>

<footer>&copy; 2025 Cộng Đoàn Thanh Tuyển. Bảo lưu mọi quyền.</footer>

</body>
</html>
