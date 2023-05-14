<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	   <title>Live-tv | aaditv</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="./style.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
<link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amita">
<link rel="shortcut icon" type="image/x-icon" href="https://te.legra.ph/file/6977e311e6d0808e4a980.gif">

<style>
	
  	#livebbtvTable {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(110px, 0fr));
        grid-gap: 15px;
        grid-right: 10px;
        grid-left: 10px;
        justify-content: center; 
      }
      #livebbtvTable > div {
        font-size: 12px;
        color: Black;
        text-align: center;
      }
       .livebbtv-item { 
   border: 1.5px solid #490a3d; 
  width: 110px; 
  height: 145px; 
  overflow: hidden; 
  border-radius: 5px; 
  box-shadow: 2px 2px 5px rgba(0,0,0, .3); 
  
} 
       .livebbtv-thumb:hover { 
filter: blur(3px);
  transform: scale(0.97);
  }
.livebbtv-thumb img { 
    width: 100%; 
    height: 105px;     
}
.livebbtv-name{
  color: #000000;
  border-radius: 5px;
  margin-top: -5px; 
  padding: 3px; 
  border-top: 1.5px solid #490a3d; 
}
  a{
  	text-decoration: none;
  	}

    .up {
    position: fixed;
    bottom: 100px;
    right: 20px;
    font-size: 15px;
    background-color: #007bff;
    color: white;
    padding: 8px 10px;
    border-radius: 5px;
    cursor: pointer;
    display: none;
  }

  	</style>
  
</head>
<body>
	<i class="uil uil-angle-up up"></i>
<nav>
        <div class="nav-bar">
            <span class="logo navLogo"><a href="#">aaditv</a></span>
            
                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>
                    <div class="search-field">
                        <input type="text" placeholder="Search..." id="look_tv_here">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <br><br><br>
    	
 
 <div class="main" id="ch_list">
 <div> 
 <div id='livebbtvTable'>
 	<div class="livebbtv-item"> <a  href="https://t.me/ipllinkgroup"><div class="livebbtv-thumb" style=" bottom: 0px; "><img class="loading" src="https://te.legra.ph/file/6977e311e6d0808e4a980.gif" "  width="110px" height="100px" ><div class="livebbtv-name">Telegram</div></div> </a> </div>
  
    
    
    <?php
$json = json_decode(file_get_contents('channels') , true);
foreach ($json as $channel)
{
    echo '<div class="livebbtv-item">' . PHP_EOL;
    printf("<a href=\"play.php?id=%s\" >" . PHP_EOL, $channel['id']);
    printf("<img src=\"%s\"\"  width=\"110px\" height=\"110px\">" . PHP_EOL, $channel['logo']);
    

    echo '<span>' . PHP_EOL;
    printf("<div class=\"livebbtv-name\">%s</div>" . PHP_EOL, $channel['title']);
    echo '</span></a></div>' . PHP_EOL;

    
}
?> </div>
		</div>
        </div>
          <br>
        <footer>
        <p>Copyright &copy; 2023  <img src="https://te.legra.ph/file/6977e311e6d0808e4a980.gif" alt="logo">  All Rights Reserved.by aaditv</p>
    </footer>
    
           <script src="https://code.jquery.com/jquery-3.6.1.js" ></script>

    <script>
    	
$(document).ready(function(){
  $("#look_tv_here").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".livebbtv-item").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});





        $(document).ready(function(){
            $(".bx").click(function(){
               $("#drop").slideToggle("fast"); 
            });
        });

    </script>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https: // unpkg .com / ionicons @ 5.5.2 / dist / ionicons / ionicons.js"></script>
  
  <script  src="./script.js"></script>

<script> 
	
    const up = document.querySelector('.up')

window.addEventListener('scroll', () => {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    up.style.display = "block"
  } else {
    up.style.display = "none"
  }
  })
  
  up.addEventListener('click', () => {
  document.body.scrollTop = 0
  document.documentElement.scrollTop = 0
})

window.addEventListener('scroll', () => {
  if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) {
    htmlbar.classList.add('activehtml')
    cssbar.classList.add('activecss')
    jsbar.classList.add('activejs')
  }
})
</script>
</body>
</html>