<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 02/04/2018
 * Time: 12:07
 */


include "schedule\ConnexionBD.php";
$day = array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche" ) ;
$dayeng= array('monday', 'tuesday', 'wednesday' ,'thursday' ,'friday' ,'saturday' ,'sunday'  ) ;
$i=0;

try
{
    $bdd=ConnexionBD::getInstance();
    // $sql = "SELECT * FROM `schedule` WHERE days = 'lundi'";

//$result = $conn->query($sql);
//
//    $stmt = $bdd->prepare($sql);
//    $stmt->execute();
//    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//    $rows=$stmt->fetchAll();
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

?>

<!doctype html>

<head>
    

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <link rel="stylesheet" href="schedule/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="schedule/css/style.css"> <!-- Resource style -->

    <title>Schedule Template | CodyHouse</title>
</head>
<body>


<!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="../index.html"><img src="schedule/logo/logo2.PNG" alt="logo" width="auto" height="auto" style = "display:block; margin-left: auto; margin-right: auto;"></a>-->

<div class="cd-schedule loading">
    <div class="timeline">
        <ul>
            <li><span>09:00</span></li>
            <li><span>09:30</span></li>
            <li><span>10:00</span></li>
            <li><span>10:30</span></li>
            <li><span>11:00</span></li>
            <li><span>11:30</span></li>
            <li><span>12:00</span></li>
            <li><span>12:30</span></li>
            <li><span>13:00</span></li>
            <li><span>13:30</span></li>
            <li><span>14:00</span></li>
            <li><span>14:30</span></li>
            <li><span>15:00</span></li>
            <li><span>15:30</span></li>
            <li><span>16:00</span></li>
            <li><span>16:30</span></li>
            <li><span>17:00</span></li>
            <li><span>17:30</span></li>
            <li><span>18:00</span></li>
            <li><span>18:30</span></li>
            <li><span>19:00</span></li>
            <li><span>19:30</span></li>
            <li><span>20:00</span></li>
            <li><span>20:30</span></li>
            <li><span>21:00</span></li>
            <li><span>21:30</span></li>
            <li><span>22:00</span></li>
        </ul>
    </div> <!-- .timeline -->

    <div class="events">
        <ul>
            <?php
            for ($i=0 ; $i < 7;$i++){


                try
                {
                    //$bdd=ConnexionBD::getInstance();
                    $sql = "SELECT * FROM `schedule` WHERE days = '$day[$i]'";

                    //$result = $conn->query($sql);
                    $stmt = $bdd->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    $rows=$stmt->fetchAll();
                }
                catch(PDOException $e)
                {
                    echo $sql . "<br>" . $e->getMessage();
                }


                // var_dump($rows);
//



                ?>

                <li class="events-group">
                    <div class="top-info"><span><?php print ($day[$i]) ?></span></div>
                    <ul>

                        <?php

                        foreach($rows as $cle =>$valeur){
                            if (is_array($valeur)){
                                foreach($valeur as $a=>$b){
                                    // echo $valeur['days'] ;

                                    ?>






                                    <li class="single-event" data-start="<?php echo $valeur['begin'] ?>
                                        " data-end="<?php echo $valeur['end'] ?>" 
                                        data-content="<?php echo $valeur['description'] ?>" 
                                        data-bind="<?php echo $valeur['cours'] ?>"
                                        data-event="event-<?php echo rand(1, 4) ?>"
                                        
                                        >


                                        <a href="#0">
                                            <em class="event-name"><?php echo $valeur['cours'] ?></em>
                                        </a>
                                    </li>





                                <?php }}} ?>
                    </ul>


                </li>
                <?php

            }
            ?>



        </ul>
    </div>

    <div class="event-modal">
        <header class="header">
            <div class="content">
                <span class="event-date"></span>
                <h3 class="event-name"></h3>
            </div>

            <div class="header-bg"></div>
        </header>

        <div class="body">
            <div class="event-info"></div>
            <div class="body-bg"></div>
        </div>

        <a href="#0" class="close">Close</a>
    </div>

    <div class="cover-layer"></div>
</div> <!-- .cd-schedule -->
<script src="schedule/js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script src="schedule/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>

