<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update sinh viên</title>
</head>
<body>
    <h2>Sửa thông tin sinh viên</h2>
    <!-- Giả sử bạn chỉ cập nhật một sinh viên, không cần foreach -->
    <form method="POST">
        @csrf
       
        <div>
            <label for="name">Tên sinh viên:</label> <br>
            <input type="text" id="name" name="name" value="{{ $data_sv->ten_sinhvien }}"> <br>
        </div>
        <div>
            <label for="date">Tuổi:</label> <br>
            <input type="text" id="date" name="age" value="{{ $data_sv->tuoi }}"> <br>
        </div>
        <div>
            <label for="email">Email:</label><br> 
            <input type="text" id="email" name="email" value="{{ $data_sv->email }}"> <br>
        </div>
        <div>
            <label for="quoc_tich">Quốc tịch:</label> <br>
            <input type="text" id="quoc_tich" name="quoc_tich" value="{{ $data_sv->quoc_tich }}"> <br>
        </div>
        <div>
            <label for="masv">Mã sinh viên:</label> <br>
            <input type="text" id="masv" name="masv" value="{{ $data_sv->ma_sv }}" readonly> <br>
        </div>
        <button type="submit" name="submit">Cập nhật</button><br>
    </form>
</body>
</html>
