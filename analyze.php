<?include 'header.php'; ?>
<?php header('Access-Control-Allow-Origin: *'); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php header('Access-Control-Allow-Origin: *'); ?>
<main>
<div class="container">
<div class="main">
  <h2 style="margin-bottom: 15px;"> Сервис проверки НПА</h2>

  <div class="album py-4 bg-light">
    <div class="container">
        <form method="post" style="font-size:18px;" id="formx" action="javascript:void(null);" onsubmit="call()">
            <p>
            <input type="file" name="article" />
            <input type="text" name="name" />
            <br/>
            <input type="submit" style="background:#02205F; border-width: 0; color: white; padding: 10px 10px; margin: 5px 5px; border-radius: 8px; font-size: 14px; box-shadow: none;" value="Анализировать" />
            </p>
        </form>
    </div>
  </div>
  
  
  <script>
    /*
 	function call() {
 	  
 	  var form = $('form')[0]; // You need to use standard javascript object here
      var formData = new FormData(form);
        
        console.log(
            formData.get("article"),
            formData.get("name")
        );
      
 	  
        $.ajax({
          type: 'POST',
          processData: false, // требуется
          url: 'http://185.185.68.227:80/insert_article',
          data: {name: formData.get("name"), article: formData.get("article")},
          success: function(data) {
            $('#results').html(data);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
        
        
        /*
        $.post('http://185.185.68.227:80/insert_article', function(msg) {
            $('.result').html(msg);
        alert('Загрузка завершена.');
        });
        */
 
    }
    */
  </script>


</div>
</div>
</main>

<? include 'footer.php'; ?>
