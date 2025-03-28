

<!DOCTYPE html>
<html lang="vi" class="zeynep-initialized hydrated">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style data-styles="">
            ion-icon {
                visibility: hidden;
            }
            .hydrated {
                visibility: inherit;
            }
        </style>
      <script src="https://unpkg.com/html5-qrcode"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  <link rel="icon" type="image/png" href="a2.png">

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="theme-color" content="#01498b" />
      <link rel="apple-touch-icon" href="app.png" sizes="120x120">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Fonts-->

        <!-- CSS Library-->

        <style>
            :root {
                --color-1st: #01498b;
                /* --primary-font: 'Roboto', */
                /* sans-serif; */
            }
        </style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HNV8BGYG71"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HNV8BGYG71');
</script>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3HXJLD');</script>
      
<!-- End Google Tag Manager -->
        <title>E-Menu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <script src='https://thacolink.herokuapp.com/socket.io/socket.io.js'></script>
        <meta property="og:site_name" content="THACO AUTO" />
        <meta property="og:title" content="E-Saleskit" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="article" />
        <meta name="twitter:title" content="E-Saleskit" />
        <meta name="twitter:description" content="" />

        <link media="all" type="text/css" rel="stylesheet" href="/index_files/language-public.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/reset.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/jquery.fancybox.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/aos.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/all.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/owl.carousel.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/owl.theme.default.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/owl.theme.default.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/slick.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/semantic.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/select2.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/alertify.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/swiper-bundle.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/swiper-bundle.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/jquery-ui.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/semantic.min(1).css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/transition.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/dropdown.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/accordion.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/zeynep.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/leaflet.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/animate.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/jquery.timepicker.min.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/pannellum.css" />
        <link media="all" type="text/css" rel="stylesheet" href="/index_files/common.css" />

        <link media="all" type="text/css" rel="stylesheet" href="/index_files/style.integration.css" />


        <style>
		        #cart-header {
            background-color: #f0f0f0;
            padding: 10px 20px;
            position: fixed;
            bottom: 0;
			width:100vw;
			min-height:100px;
            z-index: 100;
        }

        #cart-items {
            display: flex;
            flex-wrap: wrap;
        }

        .cart-item {
            border: 1px solid #ddd;
            padding: 5px 10px;
            margin: 5px;
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 5px;
        }

        .cart-item button {
            background-color: #e44d26;
            color: white;
            padding: 2px 5px;
            border: none;
            cursor: pointer;
            margin-left: 10px;
        }
            .post-container__left .post__content .h1,
            .post-container__left .post__content .h2,
            .post-container__left .post__content .h3,
            .post-container__left .post__content .h4,
            .post-container__left .post__content .h5,
            .post-container__left .post__content .h6,
            .post-container__left .post__content h1,
            .post-container__left .post__content h2,
            .post-container__left .post__content h3,
            .post-container__left .post__content h4,
            .post-container__left .post__content h5,
            .post-container__left .post__content h6 {
                font-family: "Arial";
            }
          .tenant-business__filter-detail-title {
            text-align:center;
            color:#01498b;
            font-family: "Arial";
          }
          div {
            font-family: "Arial";
          }
            .post-container__left .post__content img {
                margin-bottom: 15px;
                width: 100%;
                height: auto;
            }

            .post-container__left .post__content ul {
                list-style: disc;
            }

            .post-container__left .post__content ol {
                list-style: decimal;
            }

            .post-container__left .post__content blockquote {
                display: block;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 40px;
                margin-inline-end: 40px;
                border-left: 2px solid #ccc;
                margin-left: 1.5rem;
                padding-left: 1rem;
            }

            .post-container__left .post__content a {
                color: #007bff;
                text-decoration: underline;
            }

            .post-container__left .post__content table,
            .post-container__left .post__content figure {
                margin: unset;
                margin-bottom: 1rem;
            }
            .post-container__left .post__content table,
            .post-container__left .post__content table tbody,
            .post-container__left .post__content table tbody tr,
            .post-container__left .post__content table tbody td {
                height: max-content !important;
            }
            .post-container__left .post__content figcaption {
                color: #999;
                display: block;
                margin-top: 0.5rem;
                text-align: center;
            }
            .post-container__left .post__content figure img {
                margin-bottom: unset;
            }
          .modal ul li {
           padding: 10px 20px;
 
    display: inline-block;
            margin:10px;
          }
          .tenant-business__list-box-card .tenant-business__card-location {
    display: block;
    margin-bottom: 1rem;
    margin-left: -15px;
}
          .modal {
            max-width: 800px !important;
             z-index:9999 !important;
          }
          .jquery-modal {
            z-index:999 !important;
          }
          .licar {
            display:none;
          }
          .car-active {
            display:block;
          }
          
          .tenant-business__list-box-card .tenant-business__card-info {
            display:block;
            width:100%;
            text-align:center;
          }
          .ligia, .lipk, .lith {
            background:silver;
            color:black;
          }
          .gia-active, .th-active, .pk-active {
            background:#01498b;
            color:white;
          }
          .modal li {
            border-radius:5px;
          }
          
          .modal li:hover {
            cursor:pointer;
            background:#01498bcc;
          }
          .tenant-business__filter {
            width:80%;
          }
          .tenant-business__filter-detail ul li {
        display: inline-block;
    padding: 3px 10px;
    margin: 2px 2px;
    border-radius: 5px;
    background: silver;
    font-size: 10pt;
    color: black;
          }
          .d-none {
            display:none !important;
          }
    
          #myframe {
          display: none;
            background:silver;
          width: 95vw;
          top: 0px;
          height: 92vh;
          margin: 0px;
          max-width: 95vw !important;
            /*overflow: scroll;*/
          }
          #myframe iframe {
            width: 100%;
    height: 90%;
            
          }
       .blocker:has(> #myframe):before {  height:0px;}
          #myframe   .blocker:before {
            height:0px;
          }
          .litemp {
            background: #929292 !important;
          }
          h1 {
  font-family: Arial, Helvetica, sans-serif !important;
          }
        </style>
    </head>

    <body class="tenant" style="" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" data-new-gr-c-s-check-loaded="14.1111.0" data-gr-ext-installed="" data-modal-open-count="0">
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3HXJLD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <script> 
		

        const cartItems = {}; // Use object
		const cartItemsKey = 'cartItems';
		const cartExpiryKey = 'cartExpiry';
		const cartExpiryHours = 3;

 const tableIdKey = 'tableId';
const showroomIdKey = 'showroomId';
const locationExpiryKey = 'locationExpiry';
const locationExpiryHours = 3;

function getQueryStringValue(key) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(key);
}

function saveLocationToLocal(tableId, showroomId) {
    localStorage.setItem(tableIdKey, tableId);
    localStorage.setItem(showroomIdKey, showroomId);
    const expiryTime = new Date().getTime() + (locationExpiryHours * 60 * 60 * 1000);
    localStorage.setItem(locationExpiryKey, expiryTime);
}

function checkLocation() {
    const tableId = localStorage.getItem(tableIdKey);
    const showroomId = localStorage.getItem(showroomIdKey);
    const expiryTime = localStorage.getItem(locationExpiryKey);

    if (expiryTime) {
        const now = new Date().getTime();
		console.log((now-parseInt(expiryTime))/3600000);
        if (now > parseInt(expiryTime)) {
            clearLocalLocation();
            redirectToErrorPage();
            return;
        }
    }

    if (!tableId || !showroomId) {
        redirectToErrorPage();
    }
}

function clearLocalLocation() {
    localStorage.removeItem(tableIdKey);
    localStorage.removeItem(showroomIdKey);
    localStorage.removeItem(locationExpiryKey);
}

function redirectToErrorPage() {
    // Thay đổi URL này thành trang báo lỗi của bạn
    window.location.href = '/error.html';
}

// Hàm xử lý querystring và redirect
function handleQueryString() {
    const tableId = getQueryStringValue('tbl');
    const showroomId = getQueryStringValue('sr');

    if (tableId && showroomId) {
        saveLocationToLocal(tableId, showroomId);
        // Redirect về URL không có querystring
        const cleanUrl = window.location.origin + window.location.pathname;
        window.location.replace(cleanUrl);
    } else {
        checkLocation();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    handleQueryString();
    loadCartFromLocal();
});
function saveCartToLocal() {
    const expiryTime = new Date().getTime() + (cartExpiryHours * 60 * 60 * 1000);
    localStorage.setItem(cartItemsKey, JSON.stringify(cartItems));
    localStorage.setItem(cartExpiryKey, expiryTime);
}

function loadCartFromLocal() {
    const storedCart = localStorage.getItem(cartItemsKey);
    const expiryTime = localStorage.getItem(cartExpiryKey);

    if (storedCart && expiryTime) {
        const now = new Date().getTime();
        if (now < parseInt(expiryTime)) {
            try {
                const parsedCart = JSON.parse(storedCart);
                // Kiểm tra xem parsedCart có phải là một object không
                if (typeof parsedCart === 'object' && parsedCart !== null) {
                    Object.assign(cartItems, parsedCart);
                    updateCart();
                    displayPreviousOrderNotification();
                } else {
                    clearLocalCart();
                }
            } catch (e) {
                clearLocalCart();
            }
        } else {
            clearLocalCart();
        }
    }
}

function clearLocalCart() {
    localStorage.removeItem(cartItemsKey);
    localStorage.removeItem(cartExpiryKey);
}

function addToCart(button) {
    const item = button;
    if (cartItems[item]) {
        cartItems[item]++;
    } else {
        cartItems[item] = 1;
    }
    updateCart();
    showNotification();
    saveCartToLocal(); // Lưu giỏ hàng vào Local Storage sau khi cập nhật
}

function removeFromCart(item) {
    delete cartItems[item];
    updateCart();
    saveCartToLocal(); // Lưu giỏ hàng vào Local Storage sau khi cập nhật
}

function updateCart() {
    const cartDiv = document.getElementById("cart-items");
    cartDiv.innerHTML = "";
    for (const item in cartItems) {
        const itemDiv = document.createElement("div");
        itemDiv.className = "cart-item";
        itemDiv.innerHTML = `<span>${item} (x${cartItems[item]})</span> <button onclick="removeFromCart('${item}')">Xóa</button>`;
        cartDiv.appendChild(itemDiv);
    }
    updateButtonQuantities();
}

function updateButtonQuantities() {
    const buttons = document.querySelectorAll('.drink-buttons button, .meal-buttons button');
    buttons.forEach(button => {
        const item = button.dataset.item;
        const quantity = cartItems[item] || 0;
        button.textContent = button.textContent.replace(/\(\d+\)/, `(${quantity})`);
    });
}

function showNotification() {
    const notification = document.getElementById('notification');
    notification.textContent = 'Đã thêm vào giỏ hàng!';
    notification.style.display = 'block';
    setTimeout(() => {
        notification.style.display = 'none';
    }, 1500);
}

function displayPreviousOrderNotification() {
    if (Object.keys(cartItems).length > 0) {
        const notification = document.getElementById('notification');
        notification.textContent = 'Quý khách có yêu cầu chưa hoàn thành.';
        notification.style.display = 'block';
        setTimeout(() => {
            notification.style.display = 'none';
        }, 3000); // Hiển thị lâu hơn một chút
    }
}

document.addEventListener('DOMContentLoaded', () => {
    loadCartFromLocal(); // Tải giỏ hàng từ Local Storage khi trang được tải
});


/*document.getElementById("confirm-order").addEventListener("click", () => {
    if (Object.keys(cartItems).length > 0) {
		
		var od=neworder ();
		
        alert("Yêu cầu của Quý khách đã được xác nhận. Chúng tôi hân hạnh được phục vụ.");
        cartItems = {};
        updateCart();
        clearLocalCart(); // Xóa giỏ hàng local sau khi đặt hàng thành công
    } else {
        alert("Quý khách vui lòng chọn đồ uống/đồ ăn nhẹ.");
    }
});*/

function neworder () {
	jQuery.ajax({url: "https://script.google.com/macros/s/AKfycbzxCzys9Qp7ZIZVBVRZgUXS9nmw93KZyVQIRicDzvBFYrxR-ydEheWhoT8FvoxJK6DlWw/exec?key=auto&sr="+localStorage.getItem('showroomId')+"&tbl="+localStorage.getItem('tableId')+"&ss="+localStorage.getItem('locationExpiry')+"&od="+localStorage.getItem('cartExpiry')+"&li="+ encodeURI(JSON.stringify(localStorage.getItem('cartItems'))), success: function(result){
                    localStorage.setItem("order-data", JSON.stringify(result)); 
	}})}
          function detail_log (url) {
           // url = jQuery('#divpro-1 h1').text();
            //jQuery.ajax({url: "https://docs.google.com/forms/d/e/1FAIpQLSdS-S2dnAMpi7rSkcFZ7urQ2VX6DUC25-OMufPO0uf_crD4Sg/formResponse?usp=pp_url&entry.598911957=<?php echo $_SESSION["dangnhap"];?>&entry.489614974="+url, success: function(result){
            //  console.log('logged');
           // }}); 
          }
           
         jQuery('document').ready(function () {
          //jQuery('.backhome').after().on('click', function() {
         //  loadchitiet(0);
            
         // });
       jQuery('.ulpro li').on('click', function() {detail_log(jQuery('#divpro-1 h1').text() + jQuery(this).text());});
         });
        function loctamgia() {
          
          jQuery('#loctamgia').modal();
          
        }
                  function locphankhuc() {
          
          jQuery('#locphankhuc').modal();
          
        }
                  function locthuonghieu() {
          
          jQuery('#locthuonghieu').modal();
          
        }
          function tamgia2(xx) {
            jQuery('#price-cars-showinput ul').html('<li data-gia="'+xx+'">'+xx+'</li>');
            jQuery('#pk-cars-showinput ul').html('');
            jQuery('#th-cars-showinput ul').html('');
               jQuery('.ligia[data-gia="'+xx+'"]').addClass('gia-active');
            jQuery('li.licar').removeClass('car-active');
             jQuery('li.licar[data-gia="'+xx+'"]').addClass('car-active');
            checkhienthi ();
            jQuery('.close-modal').click();
          }
            function phankhuc2(xx) {
            jQuery('#pk-cars-showinput ul').html('<li data-pk="'+xx+'">'+xx+'</li>');
            jQuery('#price-cars-showinput ul').html('');
            jQuery('#th-cars-showinput ul').html('');
              
            jQuery('.lipk[data-pk="'+xx+'"]').addClass('pk-active');
              
            jQuery('li.licar').removeClass('car-active');
            jQuery('li.licar[data-pk="'+xx+'"]').addClass('car-active');
              
            checkhienthi ();
            jQuery('.close-modal').click();
          }
          function thuonghieu2(xx) {
            jQuery('#th-cars-showinput ul').html('<li data-th="'+xx+'">'+xx+'</li>');
            jQuery('#price-cars-showinput ul').html('');
            jQuery('#pk-cars-showinput ul').html('');
              
            jQuery('.lith[data-th="'+xx+'"]').addClass('th-active');
              
            jQuery('li.licar').removeClass('car-active');
            jQuery('li.licar[data-th="'+xx+'"]').addClass('car-active');
              
            checkhienthi ();
            jQuery('.close-modal').click();
          }
          function tamgia(xx) {
            if(jQuery('.ligia[data-gia="'+xx+'"]').hasClass('gia-active')==true) {
              if(jQuery('#price-cars-showinput ul li[data-gia="'+xx+'"]').length==0) {
                jQuery('#price-cars-showinput ul').append('<li data-gia="'+xx+'">'+xx+'</li>');
                jQuery('.ligia').removeClass('gia-active');
                 jQuery('.ligia[data-gia="'+xx+'"]').addClass('gia-active');
            } else {
               jQuery('.ligia[data-gia="'+xx+'"]').removeClass('gia-active');
              jQuery('#price-cars-showinput ul li[data-gia="'+xx+'"]').remove();
            }
            } else {
             if(jQuery('#price-cars-showinput ul li[data-gia="'+xx+'"]').length==0) {
              jQuery('#price-cars-showinput ul').append('<li data-gia="'+xx+'">'+xx+'</li>');
               
            }
               jQuery('.ligia[data-gia="'+xx+'"]').addClass('gia-active');
            }
            
            jQuery('li.licar').removeClass('car-active');
           // hienthigia();
            hienthimoi();
            checkhienthi ();
            //jQuery('.close-modal').click();
          }
          
        function phankhuc(xx) {
            if(jQuery('.lipk[data-pk="'+xx+'"]').hasClass('pk-active')==true) {
              if(jQuery('#pk-cars-showinput ul li[data-pk="'+xx+'"]').length==0) {
                jQuery('#pk-cars-showinput ul').append('<li data-pk="'+xx+'">'+xx+'</li>');
                jQuery('.lipk').removeClass('pk-active');
                 jQuery('.lipk[data-pk="'+xx+'"]').addClass('pk-active');
            } else {
               jQuery('.lipk[data-pk="'+xx+'"]').removeClass('pk-active');
              jQuery('#pk-cars-showinput ul li[data-pk="'+xx+'"]').remove();
            }
            } else {
             if(jQuery('#pk-cars-showinput ul li[data-pk="'+xx+'"]').length==0) {
              jQuery('#pk-cars-showinput ul').append('<li data-pk="'+xx+'">'+xx+'</li>');
               
            }
               jQuery('.lipk[data-pk="'+xx+'"]').addClass('pk-active');
            }
            
            jQuery('li.licar').removeClass('car-active');
           // hienthigia();
          hienthimoi();
            checkhienthi ();
            //jQuery('.close-modal').click();
          }
                   
        function thuonghieu(xx) {
            if(jQuery('.lith[data-th="'+xx+'"]').hasClass('th-active')==true) {
              if(jQuery('#th-cars-showinput ul li[data-th="'+xx+'"]').length==0) {
                jQuery('#th-cars-showinput ul').append('<li data-th="'+xx+'">'+xx+'</li>');
                jQuery('.lith').removeClass('th-active');
                 jQuery('.lith[data-th="'+xx+'"]').addClass('th-active');
            } else {
               jQuery('.lith[data-th="'+xx+'"]').removeClass('th-active');
              jQuery('#th-cars-showinput ul li[data-th="'+xx+'"]').remove();
            }
            } else {
             if(jQuery('#th-cars-showinput ul li[data-th="'+xx+'"]').length==0) {
              jQuery('#th-cars-showinput ul').append('<li data-th="'+xx+'">'+xx+'</li>');
               
            }
               jQuery('.lith[data-th="'+xx+'"]').addClass('th-active');
            }
            
            jQuery('li.licar').removeClass('car-active');
           // hienthithuonghieu();
          hienthimoi();
            checkhienthi ();
            //jQuery('.close-modal').click();
          } 
          
          
          function hienthimoi() {
            var a = jQuery('#price-cars-showinput ul li').length;
            var b = jQuery('#pk-cars-showinput ul li').length;
            var c = jQuery('#th-cars-showinput ul li').length;
            if (a>0&&b>0&&c>0) {
                  jQuery('#price-cars-showinput ul li').each(function (index) {
                       var gia = jQuery(this).data('gia');
                          jQuery('#pk-cars-showinput ul li').each(function (index) {
                            var pk = jQuery(this).data('pk');
                                 jQuery('#th-cars-showinput ul li').each(function (index) {
                                    var th = jQuery(this).data('th');
                                   jQuery('li.licar[data-gia="'+gia+'"][data-pk="'+pk+'"][data-th="'+th+'"]').addClass('car-active');
                                 });
                             });
                     });
            } else if (a>0&&b>0) {
                          jQuery('#price-cars-showinput ul li').each(function (index) {
                       var gia = jQuery(this).data('gia');
                          jQuery('#pk-cars-showinput ul li').each(function (index) {
                            var pk = jQuery(this).data('pk');
                                
                                   jQuery('li.licar[data-gia="'+gia+'"][data-pk="'+pk+'"]').addClass('car-active');
                                
                             });
                     });
                       }  else if (a>0&&c>0) {
                          jQuery('#price-cars-showinput ul li').each(function (index) {
                       var gia = jQuery(this).data('gia');
                          jQuery('#th-cars-showinput ul li').each(function (index) {
                            var th = jQuery(this).data('th');
                                
                                   jQuery('li.licar[data-gia="'+gia+'"][data-th="'+th+'"]').addClass('car-active');
                                
                             });
                     });
                       } else if (b>0&&c>0) {
                          jQuery('#pk-cars-showinput ul li').each(function (index) {
                       var pk = jQuery(this).data('pk');
                          jQuery('#th-cars-showinput ul li').each(function (index) {
                            var th = jQuery(this).data('th');
                                
                                   jQuery('li.licar[data-pk="'+pk+'"][data-th="'+th+'"]').addClass('car-active');
                                
                             });
                     });
                       } else if (a>0) {
                          jQuery('#price-cars-showinput ul li').each(function (index) {
                       var gia = jQuery(this).data('gia');
                       
                           jQuery('li.licar[data-gia="'+gia+'"]').addClass('car-active');
                      
                     });
                       } else if (b>0) {
                          jQuery('#pk-cars-showinput ul li').each(function (index) {
                       var pk = jQuery(this).data('pk');
                       
                           jQuery('li.licar[data-pk="'+pk+'"]').addClass('car-active');
                      
                     });
                       }
                      else if (c>0) {
                          jQuery('#th-cars-showinput ul li').each(function (index) {
                       var th = jQuery(this).data('th');
                       
                           jQuery('li.licar[data-th="'+th+'"]').addClass('car-active');
                      
                     });
                       } else {
                           jQuery('li.licar').addClass('car-active');
                       }
          }
          
          function hienthigia() {
            if ( jQuery('#price-cars-showinput ul li').length>0) {
                     jQuery('#price-cars-showinput ul li').each(function (index) {
                       var gia = jQuery(this).data('gia');
                       if ( jQuery('#pk-cars-showinput ul li').length>0) {
                          jQuery('#pk-cars-showinput ul li').each(function (index) {
                            var pk = jQuery(this).data('pk');
                             if ( jQuery('#th-cars-showinput ul li').length>0) {
                                 jQuery('#th-cars-showinput ul li').each(function (index) {
                                   jQuery('li.licar[data-gia="'+gia+'"][data-pk="'+pk+'"][data-th="'+jQuery(this).data('th')+'"]').addClass('car-active');
                                 });
                             } else {
                                 jQuery('li.licar[data-gia="'+gia+'"][data-pk="'+pk+'"]').addClass('car-active');

                             }
                       });
                       } else {
                             if ( jQuery('#th-cars-showinput ul li').length>0) {
                                 jQuery('#th-cars-showinput ul li').each(function (index) {
                                   jQuery('li.licar[data-gia="'+gia+'"][data-th="'+jQuery(this).data('th')+'"]').addClass('car-active');
                                 });
                             } else {
                         jQuery('li.licar[data-gia="'+gia+'"]').addClass('car-active');

                             }
                       }
                     });
            } else if (jQuery('#th-cars-showinput ul li').length>0) {
                        hienthithuonghieu();
                       } else if (jQuery('#pk-cars-showinput ul li').length>0) {
                        hienthiphankhuc();
                       } else {
                          jQuery('li.licar').addClass('car-active');
                       }
          }
                       function hienthithuonghieu() {
                         if(jQuery('#th-cars-showinput ul li').length>0) {
                     jQuery('#th-cars-showinput ul li').each(function (index) {
                       var th = jQuery(this).data('th');
                       if ( jQuery('#pk-cars-showinput ul li').length>0) {
                          jQuery('#pk-cars-showinput ul li').each(function (index) {
                            var pk = jQuery(this).data('pk');
                             if ( jQuery('#price-cars-showinput ul li').length>0) {
                                 jQuery('#price-cars-showinput ul li').each(function (index) {
                                   jQuery('li.licar[data-th="'+th+'"][data-pk="'+pk+'"][data-th="'+jQuery(this).data('gia')+'"]').addClass('car-active');
                                 });
                             } else {
                                 jQuery('li.licar[data-th="'+th+'"][data-pk="'+pk+'"]').addClass('car-active');

                             }
                       });
                       } else {
                             if ( jQuery('#price-cars-showinput ul li').length>0) {
                                 jQuery('#price-cars-showinput ul li').each(function (index) {
                                   jQuery('li.licar[data-th="'+th+'"][data-gia="'+jQuery(this).data('gia')+'"]').addClass('car-active');
                                 });
                             } else {
                         jQuery('li.licar[data-th="'+th+'"]').addClass('car-active');

                             }
                       }
                     });
                         } else if ( jQuery('#price-cars-showinput ul li').length>0) {
                           hienthigia();
                         }else if (jQuery('#pk-cars-showinput ul li').length>0) {
                        hienthiphankhuc();
                       } else {
                          jQuery('li.licar').addClass('car-active');
                       }
          }   
           function hienthiphankhuc() {
                         if(jQuery('#pk-cars-showinput ul li').length>0) {
                     jQuery('#pk-cars-showinput ul li').each(function (index) {
                       var pk = jQuery(this).data('pk');
                       if ( jQuery('#th-cars-showinput ul li').length>0) {
                          jQuery('#th-cars-showinput ul li').each(function (index) {
                            var th = jQuery(this).data('th');
                             if ( jQuery('#price-cars-showinput ul li').length>0) {
                                 jQuery('#price-cars-showinput ul li').each(function (index) {
                                   jQuery('li.licar[data-pk="'+pk+'"][data-th="'+th+'"][data-gia="'+jQuery(this).data('gia')+'"]').addClass('car-active');
                                 });
                             } else {
                                 jQuery('li.licar[data-pk="'+pk+'"][data-th="'+th+'"]').addClass('car-active');

                             }
                       });
                       } else {
                             if ( jQuery('#price-cars-showinput ul li').length>0) {
                                 jQuery('#price-cars-showinput ul li').each(function (index) {
                                   jQuery('li.licar[data-pk="'+pk+'"][data-gia="'+jQuery(this).data('gia')+'"]').addClass('car-active');
                                 });
                             } else {
                         jQuery('li.licar[data-pk="'+pk+'"]').addClass('car-active');

                             }
                       }
                     });
                         } else if ( jQuery('#price-cars-showinput ul li').length>0) {
                           hienthigia();
                         }else if (jQuery('#th-cars-showinput ul li').length>0) {
                        hienthithuonghieu();
                       } else {
                          jQuery('li.licar').addClass('car-active');
                       }
          }
          function myclear() {
            //if(str=='locgia') {
              jQuery('#price-cars-showinput ul').html("");
             jQuery('.ligia').removeClass('gia-active'); 
          //  } 
             hienthimoi();
            checkhienthi ();
          }
                function myclearpk() {
            //if(str=='locgia') {
              jQuery('#pk-cars-showinput ul').html("");
             jQuery('.lipk').removeClass('pk-active'); 
          //  } 
             hienthimoi();
            checkhienthi ();
          }
                function myclearth() {
            //if(str=='locgia') {
              jQuery('#th-cars-showinput ul').html("");
             jQuery('.lith').removeClass('th-active'); 
          //  } 
             hienthimoi();
            checkhienthi ();
          }
          function checkhienthi () {
            jQuery('.tenant-business__list-box-card').each(function( index ) {
            // var x = jQuery( this ).find( "li" ).length);
             var x = jQuery( this ).find( "li.car-active" ).length;
              if (x==0) {
                jQuery( this ).css('display','none');
              } else {
                jQuery( this ).css('display','block');
              }
             // console.log(x);
            });
          }
           function taoloctamgia() {
            var datafull =  JSON.parse(localStorage.getItem("menu-data"));
            var data = datafull.detail;             
             var a = [];
             var b = [];
             var c = [];
             var index=0;
             for(var i=0;i<data.length;i++) {
               if(data[i][4]!=""){
                 a.push(data[i][4]);
               }
                if(data[i][5]!=""){
                 b.push(data[i][5]);
               }
             
               if(data[i][6]!=""){
                 c.push(data[i][6]);
               }
             }
             var unique = a.filter(function(itm, i, a) {
                return i == a.indexOf(itm);
            });
                    var unique2 = b.filter(function(itm, i, b) {
                return i == b.indexOf(itm);
            });
                    var unique3 = c.filter(function(itm, i, c) {
                return i == c.indexOf(itm);
            });
             jQuery('#loctamgia ul').html("");
             jQuery('#locphankhuc ul').html("");
             jQuery('#locthuonghieu ul').html("");
             for(var i=0;i<unique.length;i++) {
               jQuery('#loctamgia ul').append('<li onclick="tamgia(`'+unique[i]+'`)" class="ligia" data-gia="'+unique[i]+'">'+unique[i]+'</li>'); 
             }
             for(var i=0;i<unique2.length;i++) {
               jQuery('#locphankhuc ul').append('<li onclick="phankhuc(`'+unique2[i]+'`)" class="lipk" data-pk="'+unique2[i]+'">'+unique2[i]+'</li>'); 
             }
         
           }
         
        </script>
        <div class="overlay-loading d-none">
            <div class="moderspinner"></div>
        </div>
        <header class="header header-desktop" id="header" style="opacity: 1;">
            <div class="header-wrap container-remake" style='justify-content: center;'>
                <div class="logo" onclick="loadchitiet(0)">
                    <a href="#" class="page-logo logo-tenant">
                        <img loading="lazy" src="/index_files/logo-thacoauto-2023-w.png" alt="THACO AUTO" height="17" style='width: 250px; max-width: 250px;'/>
                    </a>
                </div>

                
            </div>
            
        </header>

        <div id="mobileNav">
            <div class="container-remake h-100 font-18" style='height:100%'>
                <div class="menu-main" style='justify-content:center;'>
                    <div class="logo" onclick="loadchitiet(0)">
                        <a href="#" class="page-logo">
                            <img loading="lazy" src="/index_files/logo-thacoauto-2023-w.png" alt="THACO AUTO" height="17" style='width: 180px;'/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            .text-form-submit p {
                margin-bottom: 5px;
            }
			.tenant-business__banner:after {
    background: url(https://e.thaco.link/bg.png);
    background-position: top center;
    content: "";
    display: block;
    height: 100%;
    inset: 0;
    position: absolute;
    width: 100%;
    z-index: 1;
}
         #drink-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensure it's on top */
}

#popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

#popup-title {
    margin-bottom: 10px;
}

#popup-image {
    margin-bottom: 10px;
}

#popup-options {
    margin-bottom: 10px;
}

#popup-close {
    padding: 10px 20px;
    background-color: #e44d26;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

#popup-close:hover {
    background-color: #333;
} 
        </style>
        <div class="bg-fixed-ab"></div>

        <div id="locphankhuc" class="modal">
          <p style="text-align:center">
             <h2 style="text-align:center">
               LỰA CHỌN LOẠI ĐỒ UỐNG / ĂN NHẸ
          </h2>
		  <p style="text-align:center">Choose the Drinks or The light meals</p>
          </p>
          <ul>
           
          </ul>
     <div style="padding: 20px 10px;margin:0px">
        <a href="#close-modal" onclick='neworder ()' style="width: 50%;padding: 5px;border: 1px solid silver;font-weight: bold;font-size: 12pt;display: block;text-align: center;color: #01498b;float: left;" rel="modal:close">XÁC NHẬN</a>
                <a style="width: 40%;padding: 5px;font-size: 12pt;display: block;text-align: center;color: black;font-style: italic;border: 1px solid white;border-bottom: 1px solid silver;float: right;" onclick="myclearpk()">Làm mới</a>

      </div>
      </div>

        <div id="page-wrap">
            <div id="thaco-business" style='height: 100vh;overflow: scroll;'>
                <div id='divfull' style='margin-bottom: 15vh;'>
                    <div class="tenant-business">
                        <div class="tenant-business__banner" style='height:200px'>
                            
                            <div class="tenant-business__filter">
                            <div class="tenant-business__filter-wrapper c-font-regular c-text-base" style='text-align: center;margin-top: 50px;padding-bottom: 20px;color: black;display: block;font-weight: bold;'>
                                    <h2 style="margin: 0;padding: 0;">PHÒNG CHỜ KHÁCH HÀNG</h2>
									<span>THACO AUTO Customer Lounge</span>
                                </div>
                                <div class="tenant-business__filter-wrapper c-font-regular c-text-base" style='display:none'>
                  
                                    
                                </div>
                                <div class="tenant-business__filter-detail container-remake">
       
                                    
                                    <div id="brand-filter-wrapper" class="tenant-business__filter-detail-item"  onclick='locphankhuc()' >
                                        <div class="tenant-business__filter-detail-title c-font-regular c-text-xl"><span>MENU</span></div>
                                        <div   id="pk-cars-showinput"  class="tenant-business__filter-detail-title c-font-regular c-text-sm">
                                      <ul>
                                        
                                          </ul></div>
                    
                                    </div>
                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tenant-business__content" style="padding-top:40px;">
                        <div id="cars-load-content" class="container-remake">
                            <div class="tenant-business__list-car">
                               
                               
                                
                        </div>
                        <div class="container-remake pb-5"><nav data-v-3826ef57="" class="nav-pagination"></nav></div>
                    </div>
                </div>
            </div>
			<div id="drink-popup" style="display: none;">
    <div id="popup-content">
        <h2 id="popup-title"></h2>
        <img id="popup-image" src="" alt="" width="200">
        <p id="popup-description"></p>
        <div id="popup-options">
            </div>
        <button id="popup-close">Đóng</button>
    </div>
</div>
                 <div id="cart-header">
        <b class=" c-font-regular c-text-base">Yêu cầu của Quý Khách hàng:</b>
		<div class='cart-body' style='display: flex;justify-content: space-between;align-items: stretch;'>
        <div id="cart-items"></div>
        <button id="confirm-order">Xác nhận</button></div>
	
    </div>
<div class="notification c-text-base" id="notification" style="display: none;position: absolute;width: 40vw;top: 40vh;color: #01498b;padding: 30px;left: 30vw;text-align: center;background: rgb(217 217 217);border-radius: 10px;z-index: 999999;">Đã thêm!</div>        </div>


        <script>

       jQuery(document).ready(function () {
              if (localStorage.getItem('menu-data')==null||localStorage.getItem('menu-data')=='{"result":"error","error":{"name":"Exception"}}') {
                  init();
              } else {
                  loadfull();
                  init();
              }
              
            });
          
          function init() {
                            jQuery.ajax({url: "https://script.google.com/macros/s/AKfycbzxCzys9Qp7ZIZVBVRZgUXS9nmw93KZyVQIRicDzvBFYrxR-ydEheWhoT8FvoxJK6DlWw/exec?sr="+localStorage.getItem('showroomId')+"&tbl="+localStorage.getItem('tableId')+"&ss="+localStorage.getItem('locationExpiry'), success: function(result){
                    localStorage.setItem("menu-data", JSON.stringify(result)); 
                   loadfull();
                if (JSON.stringify(result)!=localStorage.getItem('menu-data')){
              console.log('cập nhật');
               localStorage.setItem("menu-data", JSON.stringify(result));
                 loadfull();
                   
              }
                   //loadfull();
          }}); 
          }

          function checklink(link) {
            if (link.indexOf('folders')>0) {
              link = link.substring(39,72);
            link = 'https://drive.google.com/embeddedfolderview?id='+link+'#list';
            return link;
            } else if (link.indexOf('/file/d/')>0) {
               link = link.substring(0,66);
              link = link + "preview";
              return link;
            } 
            
            else  if (link.indexOf('youtube')>0) {
              var num=0;
               if (link.indexOf('www')>0) { num=4;}
              if (link.indexOf('watch')>0) {
               link = link.substring(num+28,num+39);
            link = 'https://www.youtube.com/embed/'+link;
            return link;
            }  else if (link.indexOf('playlist')>0) {
               link = link.substring(num+34,num+69);
            
            link = 'https://youtube.com/embed/videoseries?controls=0&list='+link;
            return link;
            }
            }
           
            else {
              
              return link;
            }
          }
          function loadfull() {
            var datafull = JSON.parse('{"car":"","detail":""}');
            if (localStorage.getItem("menu-data")!="") {
                 datafull =  JSON.parse(localStorage.getItem("menu-data"));
            }
            var data = "";
            var data2 = "";
            if (datafull!="") {
               data = datafull.car;
               data2 = datafull.detail;
            }
            
            jQuery("#cars-load-content .tenant-business__list-car").html("");
			try{
            for (var i=0;i<data.length;i++) {
              var str = "";
                str = '<div class="tenant-business__list-box-card">';
                str+= '<div class="tenant-business__card">';
                str+= '<a href="#" class="tenant-business__card-image-frame"><img loading="lazy" src="'+data[i][4]+'" alt="'+data[i][2]+'" class="tenant-business__card-image" /></a>';
                str+= '<div class="tenant-business__card-info"> <a href="#" class="tenant-business__card-info-title font-pri-bold c-text-base m-0"> <b>'+data[i][2]+'</b> </a><div href="javascript:;" class="tenant-business__card-info-image"><img loading="lazy" src="'+data[i][8]+'" class="tenant-business__card-image" /></div></div>';
                str+= '<div class="tenant-business__card-desc c-text-base font-pri mt-0 pt-2 pb-0"></div>';
                str+= '<div class="tenant-business__card-location c-text-l"><div class="location"><span class="stuychon">Tùy chọn | Options:</span> <br><ul class="ulphienban">';

            for (var j=0;j<data2.length;j++) {
              if (data[i][1]==data2[j][0])  str+= ' <li class="licar car-active" style="display:flex; justify-content: space-between; " data-gia="'+data2[j][4]+'" data-th="'+data2[j][6]+'" data-pk="'+data2[j][5]+'"><span>'+data2[j][3]+'</span><span><button onclick="addToCart(`'+data2[j][1]+' '+data2[j][3].trim()+'`)">+</button></span></li>';
            }
                str+= '</ul></div></div>';
                str+= '</div></div>';      
              jQuery("#cars-load-content .tenant-business__list-car").append(str);
            }
			taoloctamgia();
			} catch {
			}
          }
        </script>
          <style>
            body {
              overflow:hidden;
            }
			.stuychon {
				margin-left: 15px;
    font-style: italic;
            img {
              width: 100%;
            }
			.licar span {color:#01498b !important; }
            .tenant-business__filter-detail-title span, h1 {
              font-weight:bold !important;
            }
            body, div, p, a {
              font-family: Arial, Helvetica, sans-serif !important;
            }
            .tenant-business__filter-detail.container-remake div.tenant-business__filter-detail-item {
             
              border: 1px silver solid !important;
            }
            .tenant-business__banner:after {
              background:none;
            }
            .tbr {
              display:none;
            }
            #divpro {
              width=100vw;height:90vh;display:none;
            }
            #divpro-1 {
                  height: 50px;    position: relative;    width: 100%;  padding-left: 20px; padding-top: 15px; padding-bottom: 50px;float:left;
            }
            .bpro {
              text-transform:uppercase;
            }
            .pro-left {
              position:relative;
              float:left;
              width:70%;
              padding:20px;
            }
            .pro-right {
              position:relative;
              float:left;
              width:30%;
             /* padding:30px;*/
              
            }
             .ulpro li {
            display:block;
            width:80%;
            border-radius:5px;
            border:1px solid silver;
            background:#01498b;
               color:white;
            padding:5px;
            text-align:center;
            margin:20px 10%;
               line-height:5vh;
          }
            .ulpro li:hover {
              cursor:pointer;
              background:#01498bcc;
            }
            .ulpro li a {
              color:white;
              text-decoration:none;
            }
            .ulpro li a:actived {
              color:white;
            }
            @media only screen and (max-width: 1080px) {
              
              .pro-left {
              width:100%;
            }
            .pro-right {

              width:100%;
              
            }
              .tenant-business__banner {
                height:200px !important;
              }
             .ulpro li {
             position: relative;
    float: left;
    width: 48%;
    padding: 10px;
    margin: 20px 1%;
    line-height: 600%;
          }
              }
             @media only screen and (max-width: 1090px) {
             #fullimg {
                  background-size:contain !important;
                }
            }
             @media only screen and (max-width: 720px) {
                .tbr {
                  display:block;
                }
                h1 {
                  font-size:4.5vw;
                }
             .ulpro li {
             position: relative;
            float: left;
            width: 48%;
            padding: 10px;
            margin: 20px 1%;
            line-height: 200%;
               font-size:2.5vw;
          }
               
                .tenant-business__filter-wrapper:nth-of-type(1) {
                  padding:0px;
                  
                }
.tenant-business__banner {
                height:40vh !important;
              }
                #fullimg {
                  display:none !important;
                }
               .tologin {
                 display:block !important;
               }
               .myid {
                 display:none !important;
               }
              }
            licar:hover {
              color:red;
              cursor:help;
            }
            
               .tologin {
     display: none;
    position: fixed;
    top: 0;
    width: 50px;
    height: 50px;
    right: 0;
    border-radius: 50%;
    /* background: #01498b; */
    background-size: 35px;
    cursor: pointer;
    /* border: 1px solid white;*/
          } 
            .tologin  a{
             background: url(https://cdn2.iconfinder.com/data/icons/zoldo-minimal-user-interface/32/fingerprint_scan_login-512.png) no-repeat center;
              filter: invert(100%);
               position: absolute;
              bottom: 0px;
              width: 50px;
              height: 50px;
              right: 0px;
              border-radius:50%;
          
              background-size: 35px;
            }
    .backhome, .totop, .toclose {
    position: fixed;
    bottom: 20px;
    width: 50px;
    height: 50px;
    right: 20px;
    border-radius: 50%;
    background: #01498b;
    background-size: 35px;
            cursor:pointer;
      border: 1px solid white;
          }
             .myid {
          position: fixed;
                 bottom: 10px;
    right: 20px;
                color:#217ccf;
               font-size:6pt;
               z-index:100000;
          }
            .totop  a{
             background: url(https://cdn.icon-icons.com/icons2/1883/PNG/512/caretsymbol_120671.png) no-repeat center;
              filter: invert(100%);
               position: absolute;
              bottom: 0px;
              width: 50px;
              height: 50px;
              right: 0px;
              border-radius:50%;
          
              background-size: 35px;
            }
                  .toclose  a{
             background: url(https://www.svgrepo.com/show/67631/back-arrow.svg) no-repeat center;
              filter: invert(100%);
               position: absolute;
              bottom: 0px;
              width: 50px;
              height: 50px;
              right: 0px;
              border-radius:50%;
          
              background-size: 35px;
            }
            .backhome a {
                  background: url(https://cdn-icons-png.flaticon.com/512/25/25694.png) no-repeat center;
              filter: invert(100%);
               position: absolute;
              bottom: 0px;
              width: 50px;
              height: 50px;
              right: 0px;
              border-radius:50%;
           
              background-size: 35px;
            }
            .btnshare span {
   
               background:  url(https://cdn.iconscout.com/icon/free/png-256/free-qr-code-1851030-1569017.png) no-repeat center;
              filter: invert(100%);
               position: absolute;
              bottom: 0px;
              width: 50px;
              height: 50px;
              right: 0px;
              border-radius:50%;
            
              background-size: 35px;
            }
            .btnshare  {
                 display:none;
              border: 1px solid white;
    position: fixed;
    bottom: 80px;
    width: 50px;
    height: 50px;
    right: 20px;
              border-radius:50%;
 background: #01498b;
              background-size: 35px;
            cursor:pointer;
              z-index:99999;
             
          }
            #qrcode {
              display:none;
              
    background: white;
    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    text-align: center;
z-index:9999999;
            }
            #qrcode iframe {
              
    position: relative;
    margin: auto;
    margin-top: 10vh;
max-width: 40vw;
    max-height: 40vw;
            }
             #qrcode .d-header {
               padding: 20px;
    width: 400px;
    position: relative;
    margin: auto;
    margin-top: 20px;
               max-width:60vw;
            }
                         #qrcode .d-bottom {
                           margin-top:50px;
            }
            /*

All grid code is placed in a 'supports' rule (feature query) at the bottom of the CSS (Line 77). 
        
The 'supports' rule will only run if your browser supports CSS grid.

Flexbox is used as a fallback so that browsers which don't support grid will still recieve an identical layout.

*/



.mycontainer, #fullimg {
  display:none;
 z-index: 999;
    background: white;
    position: fixed;
    top: 0px;
    width: 100vw;
    height: 100vh;
    overflow: scroll;
    margin: 0 auto;
    padding: 0 2rem 2rem;
}
            #fullimg {
              background-size: cover !important;
                  overflow: hidden;
            }
            #fullimg p {display:none;
                position: absolute;
    bottom: 0px;
    left: 0px;
    background: #00000087;
    color: white;
    font-size: 2vw;
    width: 100%;
    padding: 10px;
    margin: 0;
            }
  #fullimg button {
    position: absolute;
    
    top: 35vh;
    height: 30vh;
    border: 0px;
    width: 100px;
   background: #00000061;
    color: white;
            }
            #fullimg button:nth-of-type(1) {
    left: 0px;
            }
#fullimg button:nth-of-type(2) {
    right: 0px;
            }
.gallery {
  margin-top:40px !important;
	display: flex;
	flex-wrap: wrap;
	/* Compensate for excess margin on outer gallery flex items */
	margin: -1rem -1rem;
}

.gallery-item {
	/* Minimum width of 24rem and grow to fit available space */
	flex: 1 0 24rem;
	/* Margin value should be half of grid-gap value as margins on flex items don't collapse */
	margin: 1rem;
	box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
	overflow: hidden;
}

.gallery-image {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: transform 400ms ease-out;
}

.gallery-image:hover {
	transform: scale(1.15);
}

/*

The following rule will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling. 

*/

@supports (display: grid) {
	.gallery {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
		grid-gap: 2rem;
    
	}
  .backhome:after {
    content: "eMenu v2.0";
    position: absolute;
    margin-left: -45px;
    margin-top: 50px;
    text-align: right;
    font-size: 8pt;
    color:#01498b;
  }
	.gallery,
	.gallery-item {
		margin: 0;
	}
}

          </style>
           

              
          </div>

        
         <div class='totop'><a href=#></a></div>
       
        <!-- JS Library-->


<div style='width:80px;height:80px;top:0px;left:0px;position:absolute;z-index:999999999' onclick="localStorage.clear();">
  
</div>

    </body>
</html>
