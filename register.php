<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <link rel='stylesheet' href='css/style-register.css' type='text/css'>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100&family=Zilla+Slab:wght@600&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel='shortcut icon' href='images/icon.png' type='image/x-icon'>

    <!-- TITLE -->
    <title>Devil's Wiki</title>

</head>
<body>
    
    <!-- HEADER -->
    <header>

        <h1 class="logo"><a href="home.php">Devil's Wiki</a></h1>

        <i class="fa fa-bars menu-toggle"></i>

        <ul class="nav">
            <li><a href="home.html">Franchise<i class="fas fa-caret-down" style="font-size: .7em; margin-left: 6px;"></i></a>
                <ul>
                    <li><a href="dmc_1/dmc1home.html">Devil May Cry 1</a></li>
                    <li><a href="dmc_2/dmc2home.html">Devil May Cry 2</a></li>
                    <li><a href="dmc_3/dmc3home.html">Devil May Cry 3</a></li>
                    <li><a href="dmc_4/dmc4home.html">Devil May Cry 4</a></li>
                    <li><a href="dmc_5/dmc5home.html">Devil May Cry 5</a></li>
                </ul>
            </li>
        </ul>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT -->
    <div class="wrapper">
    <div class="bg">

    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
        
        <div class="background">
            <form method="GET" action="processa.php">

                <h2 class="title">Fique por dentro das novidades!</h2>

                <div>
                    <label>Nome de usuário</label>
                    <input type="text" name="user" id="inputUser" class="text-input" placeholder="Digite um nome de usuario" required>
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" id="inputEmail" class="text-input" placeholder="digite seu email" required>
                </div>
                
                <img src="images/danteheart.jpg">

                <div>
                    <button type="submit" value="Cadastrar" class="btn">Assinar</button>
                </div>

            

            </form>
        </div>

    </div>
    </div>
    <!-- CONTENT END -->

    <!-- FOOTER -->
    <div class="footer">

        <div class="footer-content">

            <div class="section-dw">

                <h1><a href="home.html">Devil's Wiki</a></h1>

            </div>

            <!-- SOCIAL MEDIA ICONS -->

            <div class="section-social">

                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>

            </div>

        </div>

        <div class="footer-bottom">
            &copy; DEVIL'S WIKI
        </div>

    </div>
    <!-- FOOTER END -->

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JAVASCRIPT -->
    <script src="js/scripts.js"></script>

</body>
</html>