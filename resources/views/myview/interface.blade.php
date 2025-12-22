<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Result</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Sarabun', sans-serif; /* ใช้ฟอนต์ Sarabun ทั้งหน้าเว็บ */
            background-color: #f4f7f6; /* สีพื้นหลังเทาอ่อนๆ ให้ดูสบายตา */
        }
        .profile-card {
            border: none;
            border-radius: 15px; /* ทำมุมกล่องให้มน */
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); /* ใส่เงาฟุ้งๆ ให้กล่องดูมีมิติ */
        }
        .header-section {
            /* ไล่เฉดสีม่วง-ฟ้า ที่หัวข้อ */
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0; /* มนเฉพาะมุมบน */
            padding: 20px;
        }
        .label-text {
            font-weight: bold;
            color: #555;
            width: 120px; /* กำหนดความกว้างคงที่เพื่อให้ข้อความหลัง ":" เรียงตรงกัน */
            display: inline-block;
        }
        .color-box {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 4px;
            vertical-align: middle;
            border: 1px solid #ddd; /* กล่องแสดงสีที่ผู้ใช้เลือก */
        }
    </style>
</head>
<body>

<div class="container py-5"> <div class="row justify-content-center"> <div class="col-md-6"> <div class="card profile-card">
                <div class="header-section text-center">
                    <h3 class="mb-0">Workshop #HTML-INTRODUCE YOURSELF</h3>
                    <small>(ผลลัพธ์การลงทะเบียน)</small>
                </div>

                <div class="card-body p-4">
                    <div class="mb-3">
                        <p><span class="label-text">ชื่อ-นามสกุล :</span> {{ $myfname }} {{ $mylname }}</p>
                        <hr> <p><span class="label-text">วันเกิด :</span> {{ $mybirth }}</p>
                        <p><span class="label-text">อายุ :</span> {{ $myage }} ปี</p>
                        <p><span class="label-text">เพศ :</span> {{ $mysex }}</p>
                        <p><span class="label-text">ที่อยู่ :</span> {{ $myaddress }}</p>
                        <hr>

                        <p><span class="label-text">รูปภาพ :</span> <small class="text-muted">{{ $myphoto }}</small></p>

                        <p>
                            <span class="label-text">สีที่ชอบ :</span>
                            <span class="color-box" style="background-color: {{ $mycolor }};"></span>
                            {{ $mycolor }}
                        </p>

                        <p><span class="label-text">แนวเพลง :</span> <span class="badge bg-info text-dark">{{ $mymusic }}</span></p>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">ย้อนกลับ</a>
                    </div>
                </div>
            </div> </div>
    </div>
</div>

</body>
</html>
