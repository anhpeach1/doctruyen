<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>@yield('title')</title>
    <style>
        /* CSS để căn chỉnh thanh tab bar */
        .nav {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa; /* Màu nền của thanh tab bar */
            position: fixed; /* Giữ thanh tab bar cố định */
            top: 0; /* Đặt thanh tab bar ở đầu trang */
            left: 0; /* Căn trái */
            width: 100%; /* Chiều rộng toàn bộ trang */
            z-index: 1000; /* Đảm bảo thanh tab bar hiển thị trên các phần tử khác */
        }
        .nav-item {
            margin: 0 10px;
        }
        .nav-item:last-child {
            margin-left: auto;
        }
        .logo-container {
            display: flex;
            align-items: center;
        }
        .logo-container img {
            margin-right: 10px;
        }
        .search-container {
            width: 33.33%; /* Thanh tìm kiếm chiếm 1/3 chiều rộng */
        }
        .search-container .input-group {
            width: 100%; /* Đảm bảo ô tìm kiếm chiếm toàn bộ chiều rộng của container */
        }
        main {
            padding: 20px;
            margin-top: 80px; /* Thêm margin-top để tránh bị thanh tab bar che phủ nội dung */
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    
<header>
    <ul class="nav">
        <!-- Phần logo và tiêu đề -->
        <li class="nav-item logo-container">
            <a class="nav-link active" href="#">
                <img src="{{ asset('storage/logo.png') }}" alt="Logo" width="auto" height="100"> 
            </a>
        </li>

        <!-- Phần menu điều hướng -->
        <li class="nav-item">
            <a class="nav-link active" href="#"><i class="bi bi-book-half"></i> Thể loại</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-gear"></i> Tuỳ chỉnh</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Thoát</a>
        </li>

        <!-- Phần thanh tìm kiếm -->
        <li class="nav-item search-container">
            <div class="input-group">
                <span class="input-group-text">🔍</span>
                <input type="text" class="form-control" placeholder="Tìm kiếm...">
            </div>
        </li>
    </ul>
</header>

<main>
    <!-- Nơi khai báo nội dung -->
    @yield('main')
    1
    1
    1
    1
    1
    







    1

</main>

<footer>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Phenikaa University</a>
        </li>
    </ul>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>