$(document).ready(function(){
  $('.form-signin').on('submit', function(e){
    $login = $('.login_field').val();
    $password = $('.password_field').val();
    $.ajax({
      type: "POST",
      url: "login.php",
      data: {
        login: $login,
        password: $password
      },
      success: function(ret){
        var arr_ret = ret.split(' ');
        if (arr_ret[1] == 'Niepoprawne'){
          $('.login_status').css('display', 'block');
          $('.login_status').html(arr_ret[1]+" "+arr_ret[2]+" "+arr_ret[3]);
        }else {
          location.replace('./'+arr_ret[0]);
        }
      }
    });
    e.preventDefault();
  });

  $('.form-logout').on('submit', function(e){
    $.ajax({
      type: "POST",
      url: "logout.php",
      success: function(ret){
        location.replace('./'+ret);
      }
    });
    e.preventDefault();
  });


  $('.add-schema-row').on('submit', function(e){
    var s_name = $('.s').val();
    var d_name = $('.d').val();
    var t_name = $('.t').val();
    var cr_name = $('.cr').val();
    var h_name = $('.h').val();
    var c_name = $('.c').val();
    $.ajax({
      type: "POST",
      url: "add.php",
      data: {
        d_name: d_name,
        subject_name: s_name,
        teacher_name: t_name,
        classroom_name: cr_name,
        hour_name: h_name,
        class_name: c_name
      },
      success: function(ret){
        var status = ret;
        $('.modal_desc').html("Status: "+status);
        $('#myModal').modal({
          backdrop: true,
          keyboard: true,
          show: true
        });
      }
    });
    e.preventDefault();
  });

  $('.showPlan').on("submit", function(e){

    var s_val = $('.showPlanSelect').val();

    $.ajax({
      type: "POST",
      url: "showPlan.php",
      data: {
        selectVal: s_val
      },
      success:function(msg){
        location.replace('./#plan_table');
      }
    });
    e.preventDefault();
  });
});
