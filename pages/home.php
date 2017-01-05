<h1>Dashboard</h1><br/>

<div class="row">
<?php


$dashboard = get_dashboard();


foreach($dashboard as $dash){


// $cubecolor a mettre dans la fonc.home.php
$cubecolor=$dash->state;  

    if ($cubecolor=="GOOD") {
            $cubecolor='green';
        }elseif($cubecolor=="WEAK"){
            $cubecolor='orange';
        }elseif($cubecolor=="POOR"){
            $cubecolor='red';
        }


    ?>


<!-- Voir pourquoi le collapsible ne revient pas a sa place -->

    <ul class="collapsible popout" data-collapsible="accordion">
        <li>

            <div class="collapsible-header align-left <?php echo $cubecolor ?>"><?= $dash->an ?>
            <a href="index.php?page=form&aid=<?= $dash->an ?>"class="waves-effect waves-teal btn-flat right">Modifier</a>
            </div>
            <div class="collapsible-body"><p><?= date("d/m/Y à H:i",strtotime($dash->datetime)); ?>  <br/><?= $dash->comment ?></p>


            </div>

        </li>
    </ul>





    
    <?php
}

?>
</div>