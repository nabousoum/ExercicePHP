<!doctype html>
<html>
    <head>
        <title>LISTE DE CHAMPS</title>
        <link href="style/styleS.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>TABLEAU</h1></marquee>
    <div class="princ">
        <div class="text">
          <?php
            include('fonctions.php');
            if (isset($_POST['btn_sub'])){
                    $N = $_POST['nbr'] ;
                    if(estNombre($N) && estEntier($N) && valeurControl($N)){
                            $nbr3=0;
                            $nbr2=0;
                            $nbr=0;
                            $tab2 = [];
                            $tab3 = [];
                            for($i=1;$i<=$N;$i++){
                                if (premier($i)){
                                    $nbr++;
                                    $tab1[$nbr]=$i;
                                }
                            }
                            
                            ?>
                            <br><br>
                            <?php
                            $moyenne = moyenne($N);
                            for($i=1;$i<=$nbr;$i++){
                                if ($tab1[$i]<$moyenne){
                                    $nbr2++;
                                    $tab2[$nbr2]=$tab1[$i];
                                }
                            }
                            for($i=1;$i<=$nbr;$i++){
                                if ($tab1[$i]>$moyenne){
                                    $nbr3++;
                                    $tab3[$nbr3]=$tab1[$i];
                                }
                            }
                           
                            ?>
                            

                            <table border="1">
                               <tr>
                                   <th>NOMBRES PREMIERS INFERIEURS</th>
                                   <th>NOMBRES PREMIERS SUPERIEURS</th>
                                </tr>
                                <tr>
                                            <td>
                                            <?php  for($i=0;$i<$nbr2;$i++){ ?>
                                        
                                            <?php
                                            
                                                echo $tab2[$i];
                                            
                                        ?>
                                        
                            
                                            <?php } ?>
                                    </td>
                                    <td>
                                            <?php  for($i=0;$i<$nbr3;$i++){ ?>
                                        
                                            
                                            <?php
                                            
                                                echo $tab3[$i];
                                            
                                            ?>
                            
                                            <?php } ?>
                                    </td>
                                </tr>
                            </table>
                            <?php
                           // $T = ['premier' => $pre, 'inferieur' => $inf, 'superieur' => $sup ];
                             //foreach ($T as $clef => $valeur){
                               // echo $clef." a ".$valeur;
                            // }

                        }
                        else{
                            echo "veuillez donner un nombre entier";
                        }
            }
            else{
                header('location:index.php');
            }
            ?>
   
        </div>
    </div>
    <button class="btn1"><a href="index.php">PRECEDENT</a></button>
</body>
</html>