function show()   /* Функция происходит при нажатии на кнопку стартовой страницы */
      {
          $.ajax({
              url: "insert_db.php",
              cache: false,
              success: function(html){
                  $(".main").html(html);
              }
          });
      }

      $(document).ready(function(){
        $(".add_db").click(function(){
          show();
        });
      });
