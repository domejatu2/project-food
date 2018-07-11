// ใส่เฉพาะตัวเลข
function chkNumber(ele)
  {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
  }

// ห้ามใส่spacebar
$(function(){
  $("input#stpassword").on({
    keydown: function(e) {
      if (e.which === 32)
        return false;
    },
  })
})

// ตัวเช็คห้ามใส่ค่าว่าง
function send()
{
  with(send_apprentice)
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
    if(stapprentice.value==''){
      alert('กรอกชื่อหัวข้อโครงงาน');stapprentice.focus();
      return false;
    }else{
      alert('กรอกข้อมูลเสร็จสิ้น')
    }
  }
}