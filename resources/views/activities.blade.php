<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sinh hoạt - Cộng Đoàn Thanh Tuyển</title>
  <style>
    /* CSS giống các trang khác để đồng bộ giao diện */
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
    img {
      max-width: 100%;
      border-radius: 10px;
      margin-top: 20px;
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
  <a href="{{ url('/activities') }}" class="active">Sinh hoạt</a>
  <a href="{{ url('/testimonies') }}">Chia sẻ</a>
  <a href="{{ url('/gallery') }}">Thư viện</a>
  <a href="{{ url('/contact') }}">Liên hệ</a>
</nav>

<main>
  <h1>Chương trình sinh hoạt của cộng đoàn</h1>
  <p>Mỗi tuần, cộng đoàn chúng ta tổ chức các buổi sinh hoạt với nhiều nội dung phong phú nhằm phát triển đức tin và kết nối anh chị em.</p>
  <ul>
    <li>
      <strong>Thánh lễ</strong><br />
    </p>Hằng tuần, cộng đoàn chúng ta quy tụ trong những buổi sinh hoạt ấm áp, nơi mỗi thành viên đều có cơ hội lớn lên trong đức tin và cảm nhận sự gắn bó thân thương của anh chị em đồng hành. Các hoạt động được tổ chức đa dạng, giàu ý nghĩa, giúp chúng ta cùng nhau vun đắp đời sống thiêng liêng và lan tỏa yêu thương đến cộng đồng.</p>
<img src="{{ asset('images/10.toagiammuc.jpg') }}" alt="..."> 
  <p></p>
     <strong>Cầu nguyện chung</strong>
  </p>Trong không gian thân mật và trang nghiêm, chúng ta cùng dâng lời nguyện, nâng đỡ nhau trong từng thử thách, cùng sẻ chia những tâm tình thầm kín với Chúa.</p>
<img src="{{ asset('images/3.caunguyen.jpg') }}" alt="...">
<p></p>
    </li>
    <li>
      <strong>Thảo luận và chia sẻ kinh nghiệm sống đức tin</strong>
      <p>Đây là lúc mỗi người được mở lòng, lắng nghe và học hỏi qua những câu chuyện đức tin sống động, giúp chúng ta hiểu sâu hơn và áp dụng đức tin vào từng ngày sống.</p>
<img src="{{ asset('images/6.gapgo.jpg') }}" alt="...">
    </li>
    <li>
      <p></p>
      <strong>Hoạt động từ thiện và cộng đồng</strong> 
      <p>Cộng đoàn không chỉ dừng lại ở sự gặp gỡ mà còn là nơi khởi đầu cho những hành động yêu thương thiết thực, lan tỏa ánh sáng hy vọng đến những mảnh đời còn nhiều khó khăn quanh ta.</p> 
<img src="{{ asset('images/15.tuthien.jpg') }}" alt="...">
    </li>
  </ul>
</main>

<footer>&copy; 2025 Cộng Đoàn Thanh Tuyển. Bảo lưu mọi quyền.</footer>

</body>
</html>
