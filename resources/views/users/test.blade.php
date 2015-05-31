
              <div id="announcement">

              </div>

               <div id="test">

                            </div>
           {!! Html::script('js/jquery.min.js') !!}


     <h4>Ajax Test</h4>

<script>



    $(document).ready(function(){
       $('h4').click(function(){
               $.ajax({
                           'url':'article',
                           'dataType':'json'

                       }).success(function(data){
//                            console.log(data);


                           $(data).each(function(index,item){
//                               console.log(item);
//                               console.log(item.id);

                              $('#announcement').append("<a href= article/"+item.id+" class='list-group-item sofiapro-light'>"+item.title+"</a>");

                           });
                       }) ;

       });


        $.ajax({
                                  'url':'article',
                                  'dataType':'json'

                              }).success(function(data){
                                  console.log(data);


                                  $(data).each(function(index,item){
                      //                console.log(item.id);
                      //                console.log(item.Announcement.data);

                                     $('#test').append("<a href= article/"+item.id+" class='list-group-item sofiapro-light'>"+item.title+"</a>");

                                  });
                              }) ;




    });
</script>
