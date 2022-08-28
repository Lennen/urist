<?include 'header.php'; ?>

<main>
<div class="container">
<div class="main">
  <h2 style="margin-bottom: 15px;"> Сервис проверки НПА</h2>

  <div class="album py-4 bg-light">
    <div class="container">
    
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <div class="col" style="cursor: pointer;" onclick="window.location.href = 'analyze.php';">
          <div class="card shadow-sm card_params" style="display:flex; align-items:center;justify-content: center;">
            <div class="sphere"></div>
            <div class="d24"></div>
          </div>
        </div>
        
        <? for($i=0;$i<10;$i++):?> 
        <div class="col">
          <div class="card shadow-sm card_params">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text></svg>

            <div class="card-body">
              <p class="card-text">Документ1</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" style="margin-right: 10px;">Результаты проверки</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                </div>
              </div>
            </div>
            <div style="display: flex; align-items:center;justify-content: center; background: #02205F; color: white; font-size: 16px; border-radius: 3px;">Акт от 25.08.22</div>
          </div>
        </div>
        <? endfor; ?>
        
      </div>
    </div>
  </div>


</div>
</div>
</main>

<? include 'footer.php'; ?>
