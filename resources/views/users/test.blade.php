
              <div id="announcement">

              </div>
           {!! Html::script('js/jquery.min.js') !!}




<script>



    $(document).ready(function(){

        $.ajax({
            'url':'article',
            'dataType':'json'

        }).success(function(data){
            console.log(data);


           /* $(data).each(function(index,item){
//                console.log(item.id);
//                console.log(item.Announcement.data);

               $('#announcement').append("<a href= article/"+item.id+" class='list-group-item sofiapro-light'>"+item.title+"</a>");

            });*/
        }) ;


    });
</script>
