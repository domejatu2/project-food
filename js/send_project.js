// ใส่เฉพาะตัวเลข
function chkNumber(ele)
	{
		var vchar = String.fromCharCode(event.keyCode);
		if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
		ele.onKeyPress=vchar;
	}

// ตัวเช็คห้ามใส่ค่าว่าง
function send()
{
  with(send_project)
  {
    if(stpassword.value==''){
      alert('กรอกรหัสนิสิต');stpassword.focus();
      return false;
    }
    if(stfullname.value==''){
      alert('กรอกชื่อนิสิต');stfullname.focus();
      return false;
    }
    if(stteacher.value==''){
      alert('กรอกอาจารย์ที่ปรึกษา');stteacher.focus();
      return false;
    }
    if(stproject.value==''){
      alert('กรอกชื่อหัวข้อโครงงาน');stproject.focus();
      return false;
    }else{
      alert('กรอกข้อมูลเสร็จสิ้น')
    }
  }
}