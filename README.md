# Thành viên nhóm:
1. Khuất Phú Kiên
2. Trần Duy Bim

# Tên đề tài: Xây dựng website giới thiệu khách sạn và đặt phòng trực tuyến

* Cho phép người dùng:
  - Tìm kiếm và xem thông tin về khách sạn, phòng trong khách sạn và các dịch vụ trong khách
sạn như nhà hàng, phòng họp, đám cưới, massage...
  - Tiến hành đặt phòng/các dịch vụ trực tuyến kèm những yêu cầu liên quan (như số khách, số
phòng, thời gian sử dụng phòng/dịch vụ...)
  - Nhận và xem các kết quả đặt phòng/dịch vụ
* Cho phép người quản lý:
  - Cập nhật thông tin về khách sạn, phòng trong khách sạn và các dịch vụ trong khách sạn như
nhà hàng, phòng họp, đám cưới, massage...
  - Quản lý người dùng
  - Quản lý và xử lý các đơn đặt phòng/dịch vụ của khách sạn
  - Quản lý giao diện...

# Framework sử dụng: Laravel (Mô hình MVC)
* Khái niệm: Laravel là một framework PHP mã nguồn mở dùng để xây dựng ứng dụng web. Nó tuân theo mô hình MVC (Model-View-Controller) và có cú pháp dễ hiểu. Các tính năng chính của Laravel bao gồm:
  - Eloquent ORM: Hệ thống ORM giúp tương tác với cơ sở dữ liệu dễ dàng.
  - Routing: Hệ thống định tuyến mạnh mẽ.
  - Blade: Công cụ tạo template đơn giản và mạnh mẽ.
  - Artisan: Giao diện dòng lệnh hỗ trợ nhiều lệnh hữu ích.
  - Bảo mật: Tích hợp nhiều tính năng bảo mật như mã hóa mật khẩu và chống SQL injection.
  - Lịch trình công việc: Hệ thống tự động hóa tác vụ.
  - Xác thực: Hệ thống xác thực toàn diện.
  - Kiểm thử: Hỗ trợ kiểm thử với PHPUnit.
  - Di cư cơ sở dữ liệu: Quản lý schema cơ sở dữ liệu.
  - Hệ thống đóng gói: Hỗ trợ quản lý và đóng gói mã nguồn dễ dàng qua Composer.
  
  => Laravel giúp đơn giản hóa và tối ưu hóa quá trình phát triển web.
* Các bước cài đặt:
  - Bước 1: Cài đặt Composer, XAMPP và PHP
  - Bước 2: Sau khi bạn đã cài đặt PHP và Composer, bạn có thể tạo một dự án Laravel mới thông qua lệnh của Composer (create-project):
    ![image](https://github.com/KhuatKien/WebNangCao-Nhom15/assets/91423106/20fb211a-8ec1-44ee-98d7-6832ef752494)
    Hoặc, bạn có thể tạo các dự án Laravel mới bằng cách cài đặt toàn cầu trình cài đặt Laravel thông qua Composer:
    ![image](https://github.com/KhuatKien/WebNangCao-Nhom15/assets/91423106/c0e23220-d5d7-4b5b-abe0-66f16ddd9405)
  - Bước 3: Khi project đã được tạo, khởi động local development server của Laravel bằng lệnh của Laravel Artisan:
    ![image](https://github.com/KhuatKien/WebNangCao-Nhom15/assets/91423106/64b93d21-f12d-4ead-9475-0da72a3d5144)
  - Bước 4: Vào file php.ini trong XAMPP bỏ dấu “;” trước dòng lệnh “extension=zip”
