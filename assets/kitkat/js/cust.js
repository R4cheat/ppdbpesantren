$(document).ready(function() {
    $("#berat,#tgg,#pos,#rt,#rw,#nilai,#nilai1,#nilai2,#nilai3,#nilai4,#nilai5,#nilai6,#nilai7,#nilai8,#nilai9,#nilai10,#nilai11,#nilai12,#nilai13,#nilai14,#nilai15,#nilai16,#gajia,#gajib,#jsdr,#hp").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, dont do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });   
});

$(function () {
   $( "#nilai,#nilai1,#nilai2,#nilai3,#nilai4,#nilai5,#nilai6,#nilai7,#nilai8,#nilai9,#nilai10,#nilai11,#nilai12,#nilai13,#nilai14,#nilai15,#nilai16" ).change(function() {
      var max = parseInt($(this).attr('max'));
      var min = parseInt($(this).attr('min'));
      if ($(this).val() > max)
      {
          $(this).val(max);
      }
      else if ($(this).val() < min)
      {
          $(this).val(min);
      }       
    }); 
});
