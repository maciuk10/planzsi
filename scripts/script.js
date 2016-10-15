function showPosts(data){
  //console.log(data.posts[0].title);
  var html = '<ul data-role="listview">';
  $.each(data.posts, function(k,v){
    html += '<li>';
    html += '<a href="#post" onclick="loadPost('+v.id+')">';
    html += '<h3>'+v.title+'</h3>';
    html += '<p>'+v.excerpt+'</p>';
    html += '</a></li>';
  });
  html+= '</ul>';
  $('#blog-wrapper').html(html);
}
function loadPost(id){
  $.getJSON('http://blog.strefakursow.pl/?json=get_post&post_id='+id+'&callback=?', function(data){
    var html = '';
    html += '<h3>'+data.post.title+'</h3>';
    html += '<p>'+data.post.content+'</p>';
    $('#post-wrapper').html(html);
  });
}

$(window).ready(function(){
  
});

$(document).ready(function(){
  $('.searchForSchemas > div').removeClass("ui-corner-all ui-shadow-inset");
  $('.searchForSchemas > div').addClass("input-new");
  $('.searchForSchemas > div').on('focus', function(){
    $('.searchForSchemas > div').removeClass('ui-focus');
  });
  $('.db_item').removeClass("ui-btn-icon-right ui-icon-carat-r");
  $('.schema_search').on('keyup', function(){
    if ($('.schema_search').value == ''){

    }else{
      $('.item_list').css('display','none');
    }
  });

  $('.item_decor').on('click', function(){
    var hrefValue = $(this).attr('href');
    var elements = hrefValue.split('_');
    var typeOfElement = elements[1];
    var valueOfElement = elements[2];
    var typeElements = {
      "cl": ".class_plan",
      "t": ".teacher_plan",
      "cr": ".classroom_plan"
    }

    $(typeElements[typeOfElement]).attr('id', "plan"+"_"+typeOfElement+"_"+valueOfElement);
    $.ajax({
      type: 'POST',
      url: 'render.php',
      data: {
        elementType: typeOfElement,
        elementValue: valueOfElement,
      },
      success: function(msg){
        var base = "#plan"+"_"+typeOfElement+"_"+valueOfElement+" .full_name";
        $(base).html(msg);
      }
    });
  });

});
