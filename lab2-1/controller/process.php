<?php
    // Get content
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    if(!empty($_POST['gender']))$gender = $_POST['gender'];
    else $gender = '';
    $date_of_birth = $_POST['date_of_birth'];
    $university = $_POST['university'];
    $class = $_POST['class'];
    
    if(!empty($_POST['sport'])){
        $sports = $_POST['sport'];
        $array_sports = (array)$sports;
    }else $array_sports = [];
    
    if(!empty($_POST['game'])){
        $games = $_POST['game'];
        $array_games = (array)$games;
    }else $array_games = [];
    
    $other_hobbies = $_POST['other_hobbies'];
?>
 <html>
    <head>
        <title>Lab 2_1 Group 26</title>
        <link rel="stylesheet" href="../view/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="form_container">
            <div id="form_title">
                <h1>Personal Information</h1>
            </div>
            <div id="form_content">
                <div class="info_wrap">
                    <span style="font-size: 18px; font-weight: bold;">Hello <?php echo $name ?>,</span>
                </div>
                <div class="info_wrap">
                    <span style="font-size: 18px;">Your phone number: <?php echo $phone_number ?>,</span>
                </div>
                <div class="info_wrap">
                    <span style="font-size: 18px;">Your address: <?php echo $address ?>,</span>
                </div>
                <div class="info_wrap">
                    <span style="font-size: 18px;">You are: <?php echo $gender ?>,</span>
                </div>
                <div class="info_wrap">
                    <span style="font-size: 18px;">Your date of birth: <?php echo $date_of_birth ?>,</span>
                </div>
                <div class="info_wrap">
                    <span style="font-size: 18px;">Your are student of: <?php echo $university ?>,</span>
                </div>
                <div class="info_wrap">
                    <span style="font-size: 18px;">Your class: <?php echo $class ?>,</span>
                </div>
                <div class="info_wrap">
                    <span style="font-size: 18px;">Your hobbies:</span>
                    <ol>
                        <li>Sports:</li>
                        <?php
                            foreach ($array_sports as $sport) {
                                echo '<dd>- '.$sport.'</dd>';    
                            }
                        ?>
                        <li>Games:</li>
                        <?php
                            foreach ($array_games as $game) {
                                echo '<dd>- '.$game.'</dd>';    
                            }
                        ?>
                        <li>Others:</li>
                        <span><?php echo $other_hobbies?></span>
                    </ol>
                </div>
                <div class="info_wrap" style="text-align: center;">
                    <span style="font-size: 20px; width: 100%; color: red;">Thanks for your response!</span>
                </div>
            </div>
        </div>
    </body>
</html>