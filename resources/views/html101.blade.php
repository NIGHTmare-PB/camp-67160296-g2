<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>HTML-INTRODUCE YOURSELF (Compact Layout)</title>

    <style>
        h1{font-size: 50px; text-align: center;}
        body{font-size: 30px; font-family: 'Sarabun', sans-serif; background-color: #f0f2f5;}

        /* input, textarea, select element styles */
        input:not([type="radio"]):not([type="checkbox"]):not(#age), textarea, select {
            font-size: 30px;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%; /* ใช้ความกว้างเต็ม container */
            height: 50px;
            margin-top: 5px;
        }
        select {font-size: 24px;}

        /* Container หลักของฟอร์ม */
        .first-data, .secconde-data, .form-rowbutton-row {
            border:2px solid #000;
            padding:20px;
            margin:20px auto;
            border-radius:10px;
            background:#fff;
            width:740px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .overall{width:800px;margin:auto;}

        .form-group {
            margin-bottom: 20px;
        }

        /* --- New Layout Styles (Grid/Two-Column) --- */
        .two-column-row {
            display: grid;
            grid-template-columns: 1fr 1fr; /* แบ่ง 2 ช่องเท่ากัน */
            gap: 20px;
            margin-bottom: 20px;
        }
        .date-age-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 10px;
            margin-top: 5px;
        }
        .age-label {
            font-size: 24px;
            margin-bottom: 3px;
            display: block;
            line-height: 1.2;
            margin-top: -28px;
        }
        .age-input-group {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
        #age {
            background-color: #eee !important;
            font-weight: bold;
            text-align: center;
            font-size: 30px;
            width: 100%;
            height: 50px;
            margin-top: 0;
        }
        /* --- End New Layout Styles --- */

        /* --- Validation Styles (คงเดิม) --- */
        .field-warning {
            color: red;
            font-size: 20px;
            margin-top: 5px;
            display: none;
            font-weight: normal;
            margin-left: 5px;
        }

        .input-error {
            border: 2px solid red !important;
            box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
        }

        .input-success {
            border: 2px solid green !important;
            box-shadow: 0 0 5px rgba(0, 255, 0, 0.5);
        }

        #generalError {
            color: red;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            margin-top: 15px;
            display: none;
            border: 1px solid red;
            background-color: #fdd;
            padding: 10px;
            border-radius: 5px;
        }
        /* --- End Validation Styles --- */

        #preview{
            display:block;
            margin-top:10px;
            max-width:300px;
            max-height: 200px;
            object-fit: contain;
            border:1px solid #ddd;
            padding:5px;
            border-radius:5px;
        }

        /* Radio/Checkbox Styles */
        input[type="radio"], input[type="checkbox"] {
            transform: scale(1.2);
            margin-right: 5px;
        }
        .radio-group label {
            margin-right: 20px;
        }

        /* Button Styles (คงเดิม) */
        .button-row{text-align:center;padding-top:25px;}
        .button-row button{padding:12px 30px;margin:0 15px;border:none;border-radius:8px;font-size:18px;font-weight:bold;cursor:pointer; transition: background-color 0.3s;}
        .reset-button{background:#ffc107;color:#333;}
        .reset-button:hover{background:#e0a800;}
        .submit-button{background:#28a745;color:white;}
        .submit-button:hover{background:#1e7e34;}

    </style>
</head>

<body>

<h1>HTML - #HTML-INTRODUCE YOURSELF (Compact)</h1>

<form action="/workshop" method="post" id="myForm" enctype="multipart/form-data">
    @csrf

<div class="overall">

    <div class="first-data">

        <div class="two-column-row">
            <div class="form-group">
                <label>ชื่อ :
                    <input type="text" id="fname" name="fname" placeholder="สมยศ">
                </label>
                <p id="fname-error" class="field-warning">กรุณากรอกชื่อของคุณ</p>
            </div>

            <div class="form-group">
                <label>นามสกุล :
                    <input type="text" id="lname" name="lname" placeholder="ตดเหม็น">
                </label>
                <p id="lname-error" class="field-warning">กรุณากรอกนามสกุลของคุณ</p>
            </div>
        </div>

        <div class="form-group">
            <label>วันเดือนปีเกิด และ อายุ:</label>
            <div class="date-age-container">
                <div>
                    <input type="date" id="birth" name="birth" title="วันเดือนปีเกิด">
                </div>
                <div class="age-input-group">
                    <label class="age-label">อายุ (ปี):</label>
                    <input type="number" id="age" name="age" value="" readonly>
                </div>
            </div>
            <p id="birth-error" class="field-warning">กรุณาเลือกวันเดือนปีเกิด</p>
        </div>

        <div class="form-group">
            <label>เพศ :</label>
            <div class="radio-group" style="margin-top: 5px;">
                <input type="radio" name="gender" value="male" id="gender-male"><label for="gender-male">ชาย</label>
                <input type="radio" name="gender" value="female" id="gender-female"><label for="gender-female">หญิง</label>
            </div>
            <p id="gender-error" class="field-warning">กรุณาเลือกเพศ</p>
        </div>

        <div class="form-group">
            <label>ที่อยู่ :</label>
            <textarea id="address" name="address" rows="4" placeholder="ทุ่งนาแดนนี้ไม่มีความหมาย"></textarea>
            <p id="address-error" class="field-warning">กรุณากรอกที่อยู่ของคุณ</p>
        </div>

        <div class="form-group">
            <label>เลือกรูปภาพ:</label>
            <input type="file" id="photo" name="photo" accept="image/*">
            <img id="preview">
            <p id="photo-error" class="field-warning">กรุณาอัปโหลดรูปภาพ</p>
        </div>
    </div>

    <div class="secconde-data">

        <div class="form-group">
            <label>สีที่ชอบ :</label>
            <input type="color" id="favColor" name="favColor" value="#edf1f5" style="width:100px; height: 40px; margin-top: 5px;">
        </div>

        <div class="form-group">
            <label>แนวเพลงที่ชอบ :</label>
            <select id="music" name="music">
                <option value="" disabled selected>กรุณาเลือกแนวเพลง</option>
                <option value="Pop">ป๊อป</option>
                <option value="Rock">ร็อก</option>
                <option value="Hip Hop/Rap">ฮิปฮอป/แร็พ</option>
                <option value="R&B">อาร์แอนด์บี</option>
                <option value="Jazz">Jazz</option>
                <option value="EDM">Electronic/EDM</option>
            </select>
            <p id="music-error" class="field-warning">กรุณาเลือกแนวเพลง</p>
        </div>
    </div>

    <div class="form-rowbutton-row">
        <div class="form-group">
            <input type="checkbox" name="terms" id="termsAgree">
            <label for="termsAgree">ฉันยินยอมตามข้อกำหนดและเงื่อนไข</label>
            <p id="terms-error" class="field-warning">กรุณายินยอมตามข้อกำหนด</p>
        </div>

        <p id="generalError" class="field-warning">พบข้อผิดพลาด กรุณาแก้ไขช่องที่เป็นสีแดง</p>

        <div class="button-row">
            <button type="reset" class="reset-button" id="btnReset">พิมพ์ใหม่ / ล้างข้อมูล</button>
            <button type="submit" class="submit-button">บันทึกข้อมูล</button>
        </div>
    </div>

</div>
</form>

<script>
// ฟังก์ชันคำนวณอายุอัตโนมัติ (คงเดิม)
function calculateAge(birthDateString) {
    const ageInput = document.getElementById('age');
    if (!birthDateString) {
        ageInput.value = '';
        return;
    }

    const today = new Date();
    const birthDate = new Date(birthDateString);

    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDifference = today.getMonth() - birthDate.getMonth();

    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    ageInput.value = age >= 0 ? age : '';
}

// ฟังก์ชันจัดการการแสดงตัวอย่างรูปภาพ (คงเดิม)
function previewImage(fileInput, previewId) {
    const img = document.getElementById(previewId);
    if(fileInput.files.length > 0){
        img.src = URL.createObjectURL(fileInput.files[0]);
    } else {
        img.src = "";
    }
}

// ฟังก์ชันสำหรับรีเซ็ตสถานะทั้งหมด (คงเดิม)
function clearAllErrors() {
    // ลบ class error/success ออกจากทุก field
    document.querySelectorAll('input:not([type="radio"]):not([type="checkbox"]):not([type="number"]), textarea, select, #termsAgree, #birth').forEach(el => {
        el.classList.remove('input-error', 'input-success');
    });

    // ซ่อนข้อความเตือนเฉพาะช่องทั้งหมด
    document.querySelectorAll('.field-warning').forEach(el => {
        el.style.display = 'none';
    });

    // *** ส่วนที่ถูกลบ: document.getElementById('age').value = ''; ***
    // เราไม่ล้างช่องอายุในนี้แล้ว เพื่อให้ค่าคงอยู่แม้มีการกด Submit

    // ล้างสถานะสีของกลุ่ม Radio (เพศ)
    document.querySelector('.form-group:has(input[name="gender"])').classList.remove('input-error', 'input-success');
}

// จัดการการแสดงตัวอย่างรูปภาพ และการตรวจสอบ
document.getElementById('photo').addEventListener('change', function(event) {
    previewImage(this, 'preview');
    validateField(this, 'photo-error', true);
});

// จัดการปุ่ม Reset
document.getElementById("btnReset").addEventListener("click", function(){
    clearAllErrors();
    document.getElementById("preview").src = "";

    // *** ส่วนที่เพิ่ม: ล้างช่องอายุ เมื่อกดปุ่ม Reset จริงๆ ***
    document.getElementById('age').value = '';
});

// ฟังก์ชันหลักในการตรวจสอบ Field เดี่ยว (validateField และ Submit Logic)
// *** ส่วนนี้ไม่มีการแก้ไขที่กระทบช่องอายุ ***

// ... (ส่วน validateField และ Submit Logic) ...

document.getElementById("myForm").addEventListener("submit", function(e) {
    e.preventDefault();
    clearAllErrors(); // ล้าง Error/Success State (แต่ไม่ล้างช่องอายุ)

    let allValid = true;

    // ... (ส่วนตรวจสอบความถูกต้อง) ...

    const generalError = document.getElementById("generalError");
    if (allValid === false) {
        // ... (แสดง error) ...
    } else {
        // ... (แจ้งสำเร็จ) ...
    }
});

// Event listener สำหรับ วันเดือนปีเกิด
document.getElementById('birth').addEventListener('change', function() {
    calculateAge(this.value);
    validateField(this, 'birth-error', true);
});

// ฟังก์ชันหลักในการตรวจสอบ Field เดี่ยว (คงเดิม)
function validateField(element, errorId, isRequired) {
    const errorEl = document.getElementById(errorId);
    let isValid = true;

    element.classList.remove('input-error', 'input-success');
    if (errorEl) errorEl.style.display = 'none';

    if (!isRequired) return true;

    let value;
    let isChecked = false;
    let isRadioGroup = false;

    if (element.type === 'radio') {
        value = document.querySelector('input[name="' + element.name + '"]:checked');
        isChecked = value !== null;
        isRadioGroup = true;
    } else if (element.type === 'checkbox') {
        isChecked = element.checked;
    } else if (element.type === 'file') {
        isChecked = element.files.length > 0;
    } else {
        value = element.value.trim();
        isChecked = value.length > 0;
    }

    // ส่วนของการแสดงผลความผิดพลาด/สำเร็จ
    if (!isChecked) {
        isValid = false;
        if (!isRadioGroup) element.classList.add('input-error');
        if (errorEl) errorEl.style.display = 'block';
    } else {
        if (!isRadioGroup) element.classList.add('input-success');
    }

    // สำหรับ Radio Button และ Checkbox (ใช้การไฮไลต์กลุ่ม/ตัวเอง)
    if (isRadioGroup) {
        const radioGroup = document.querySelector('.form-group:has(input[name="' + element.name + '"])');
        radioGroup.classList.remove('input-error', 'input-success');
        if (isValid) {
             radioGroup.classList.add('input-success');
        } else {
             radioGroup.classList.add('input-error');
        }
    }

    if (element.type === 'checkbox') {
        if (isValid) {
            element.classList.add('input-success');
        } else {
            element.classList.add('input-error');
        }
    }


    return isValid;
}


// Event Listener สำหรับ Submit (คงเดิม)
document.getElementById("myForm").addEventListener("submit", function(e) {
    e.preventDefault();
    clearAllErrors();

    let allValid = true;

    if (!validateField(document.getElementById("fname"), 'fname-error', true)) allValid = false;
    if (!validateField(document.getElementById("lname"), 'lname-error', true)) allValid = false;
    if (!validateField(document.getElementById("birth"), 'birth-error', true)) allValid = false;
    if (!validateField(document.getElementById("address"), 'address-error', true)) allValid = false;
    if (!validateField(document.getElementById("photo"), 'photo-error', true)) allValid = false;
    if (!validateField(document.getElementById("music"), 'music-error', true)) allValid = false;

    if (!validateField(document.querySelector('input[name="gender"]'), 'gender-error', true)) allValid = false;

    const termsCheckbox = document.getElementById('termsAgree');
    if (!validateField(termsCheckbox, 'terms-error', true)) allValid = false;

    const generalError = document.getElementById("generalError");
    if (allValid === false) {
        generalError.style.display = "block";
        generalError.innerText = "พบข้อผิดพลาด กรุณาแก้ไขช่องที่เป็นสีแดง";
        generalError.scrollIntoView({ behavior: 'smooth', block: 'center' });

    } else {
        generalError.style.display = "none";
    this.submit();
    }
});

// Event Listener อื่นๆ (คงเดิม)
document.getElementById('photo').addEventListener('change', function(event) {
    previewImage(this, 'preview');
    validateField(this, 'photo-error', true);
});

document.getElementById("btnReset").addEventListener("click", function(){
    clearAllErrors();
    document.getElementById("preview").src = "";
});

document.getElementById('birth').addEventListener('change', function() {
    calculateAge(this.value);
    validateField(this, 'birth-error', true);
});

document.querySelectorAll('input:not([type="radio"]):not([type="checkbox"]):not([type="date"]), textarea, select').forEach(element => {
    element.addEventListener('blur', function() {
        const fieldId = this.id;
        if (fieldId === 'fname' || fieldId === 'lname' || fieldId === 'address' || fieldId === 'music') {
             validateField(this, fieldId + '-error', true);
        }
    });
});

document.querySelectorAll('input[type="radio"], input[type="checkbox"]').forEach(element => {
    element.addEventListener('click', function() {
        const fieldName = this.name;
        const errorId = fieldName + '-error';

        if (this.type === 'radio') {
            validateField(this, errorId, true);
        }

        if (this.type === 'checkbox') {
            validateField(this, errorId, true);
        }
    });
});
</script>

</body>
</html>
