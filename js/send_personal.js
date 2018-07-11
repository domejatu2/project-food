// ใส่เฉพาะตัวเลข
function chkNumber(ele)
  {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
  }
  
// ห้ามใส่spacebar
$(function(){
  $("input#p_rank").on({
    keydown: function(e) {
      if (e.which === 32)
        return false;
    },
    change: function() {
      this.value = this.value.replace(/\s/g, "");
    }
  });
  $("input#p_phone").on({
    keydown: function(e) {
      if (e.which === 32)
        return false;
    },
    change: function() {
      this.value = this.value.replace(/\s/g, "");
    }
  });
  $("input#p_email").on({
    keydown: function(e) {
      if (e.which === 32)
        return false;
    },
    change: function() {
      this.value = this.value.replace(/\s/g, "");
    }
  });
})

// ตัวเช็คห้ามใส่ค่าว่าง
function ok()
{
  with(send_personal)
  {
    if(p_picture.value==''){
      alert('กรุณาเลือกรูปภาพ');p_picture.focus();
      return false;
    }
    if(p_fullname.value==''){
      alert('กรุณากรอกชื่อ-นามสกุล');p_fullname.focus();
      return false;
    }
    if(p_rank.value==''){
      alert('กรุณากรอกตำแหน่ง');p_rank.focus();
      return false;
    }
    if(p_phone.value==''){
      alert('กรุณากรอกเบอร์โทรศัพท์');p_phone.focus();
      return false;
    }
    if(p_email.value=='' ){
      alert('กรุณากรอก Email');p_email.focus();
      return false;
    }
    if(p_education.value==''){
      alert('กรุณากรอกข้อมูลการศึกษา');p_education.focus();
      return false;
    }
    if(p_research.value==''){
      alert('กรุณากรอกงานวิจัย');p_research.focus();
      return false;
    }
    else{
      alert('กรอกข้อมูลเสร็จสิ้น')
    }
  }
}
