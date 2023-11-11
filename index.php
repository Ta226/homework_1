<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
<?php
    include './inc/conn.php';
    include './inc/form.php';
    include './inc/select.php';
?>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/main-like.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" type="text/css">
	<script type="text/javascript" src="./js/jquery.min1.js"></script>
    <script type="text/javascript" src="./js/bootstrap.bundle.min.js" ></script>
    <script src='./js/8.js'></script>
	<script type="text/javascript" src="./js/u.js"></script>
    <!-- <script src="./js/loading_bar.js"></script> -->
    <title>competition website </title>
</head>
<body>
    <div class="winner-pop">
        <canvas id="canvas" width="1920" height="950" style="display: block;position: relative;pointer-events: none;position: fixed;top: 0;"></canvas>
    </div>
    
    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">مرحبا بك معنا في موقع الربح</h1>
                <p class="lead fw-normal">متبقي على فتح التسجيل.</p>
                <h3 id="countdown"></h3>
                <p class="lead fw-normal">الفائز سيربح معنا نسخة مجانية من برنامج الفوتوشوب</p>
            </div>
            <div class="container">
                <h3>تعليمات الاشتراك</h3>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">تابع البث المباشر على صفحتنا في الفيس بوك بالتاريخ المذكور اعلاه</li>
            <li class="list-group-item">سيتم بث العديد من الاسئلة ليتم اختيار الفائز من بين الناجحين</li>
            <li class="list-group-item">سيتم تنزيلرابط الإشتراك على صفحاتنا</li>
            <li class="list-group-item">الفائز سيتم اختياره في نهاية الحلقة والبث المباشر</li>
            <li class="list-group-item"></li>
        </ul>
            </div>
        </div>
        <div class="position-relative text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form class="mt-5" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
            <h3>بيانات الإشتراك</h3>
            <div class="mb-3">
                <label for="firstName" class="form-label">الاسم الاول</label>
                <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo($errors['firstNameError']);?>">
                <div id="emailHelp" class="form-text error"><?php echo($errors['firstNameError']);?></div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">الاسم الاخير</label>
                <input type="text" class="form-control"  name="lastName" id="lastName" value="<?php echo($errors['lastNameError']);?>">
                <div id="emailHelp" class="form-text error"><?php echo($errors['lastNameError']);?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">الايميل</label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo($errors['emailError']);?>">
                <div id="emailHelp" class="form-text error"><?php echo($errors['emailError']);?></div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >انشاء الحساب</button>
        </form>
</div>
</div>
<div class="loader-con">
<div id="loader">
    <!--<div class="circular-progress">
        <span class="progress-value">0%</span>
    </div> -->
    <div class="circular">
            <div class="inner"></div>
            <div class="outer"></div>
            <div class="numb">
               0%
            </div>
            <div class="circle">
               <div class="dot">
                  <span></span>
               </div>
               <div class="bar left">
                  <div class="progress"></div>
               </div>
               <div class="bar right">
                  <div class="progress"></div>
               </div>
            </div>
         </div>
    <!-- <canvas id="circularLoader" width="200" height="200"></canvas> -->
</div>
</div>
<!--<canvas id="background"></canvas>
<canvas id="firework"></canvas> -->
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button id="winner" type="button" class="btn btn-primary" >
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">مبروك للرابح </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h5 class="display-1 text-centercard-title"><?php echo htmlspecialchars($user['firstName']).' '.htmlspecialchars($user['lastName']); ?></h5>
        <?php endforeach; ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>
    <!-- <script src="./js/loader.js"></script> -->
    <script src="./js/script.js"></script> 
    <script src="./js/5.js"></script>
    <script src="./js/6.js"></script>
    <script src="./js/7.js"></script>
    <!--<script src="./js/background.js"></script> 
    <script src="./js/firework.js"></script>  -->
    <script>
        
        const canvas = document.createElement('canvas');
		canvas.width = 32;
		canvas.height = 32;
		const context = canvas.getContext('2d');
		context.fillStyle = '#f00';
		context.beginPath();
		context.arc(32 / 2, 32 / 2, 32 / 2, 0, 2 * Math.PI);
		context.fill();
		context.fillStyle = '#fff';
		context.font = '24px Arial';
		context.textAlign = 'center';
		context.textBaseline = 'middle';
		context.fillText(1, 32 / 2, 32 / 2);

		const iconNode = document.createElement('link');
		iconNode.rel = 'icon';
		iconNode.type = 'image/png';
		iconNode.id = 'icon1';
		iconNode.href = canvas.toDataURL('image/png');

		const iconNode2 = document.createElement('link');
		iconNode2.rel = 'icon';
		iconNode2.type = 'image/png';
		iconNode2.id = 'icon2';
		iconNode2.href = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVQI12P4zwAAAgEBAKrChTYAAAAASUVORK5CYII=';

		function faviconPulse(time) {
			var counter = 0;
			var currentIcon;

			var interval = setInterval(function () {
				if (counter % 2 === 0) {
					currentIcon = document.getElementById('icon2');
					if (currentIcon != null) currentIcon.parentNode.removeChild(currentIcon);
					document.head.appendChild(iconNode);
				} else if ((counter % 2 === 1) && document.visibilityState === 'hidden') {
					var currentIcon = document.getElementById('icon1');
					if (currentIcon != null) currentIcon.parentNode.removeChild(currentIcon);
					document.head.appendChild(iconNode2);
				}

				counter++;
			}, time ? time : 500);
		}
//decodeAudioData
		faviconPulse(1000);

		$(document).ready(function () {
			//initStock('');
		});

		window.onload = function () {
			//$('#myModal').modal('show');
		};


    </script>
    </body>
    </html>