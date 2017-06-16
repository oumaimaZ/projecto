 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Tableau de bord</a>
                    </li>
                   
<?php

        $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM user as u 
            , maison_user as m 
            WHERE u.username = m.username 
            and m.username=?
           ');

        
            $query-> bindValue(1,$_SESSION['username'],PDO::PARAM_STR);
        

        $query->execute();

        if($query->rowCount() >= 1){
            $row = $query->fetch();
            $_SESSION['id_maison'] = $row['id_maison'];
        
        echo ' <li>
                        <a href="gestion_maison.php"><i class="fa fa-fw fa-home"></i> Maison</a>
                    </li>';
           

        
        }else{
           echo'  <li>
                        <a href="Confpage.php"><i class="fa fa-fw fa-wrench"></i> Configuration de la  maison</a>
                    </li>';
           
            
        }
    

      ?>                
                   

                   
                    <li>
                        <a href="user.php"><i class="fa fa-fw fa-user"></i> Collaborateur</a>
                    </li>
                   
                   <!--  <li>
                        <a href="dash.php"><i class="fa fa-fw fa-user"></i> dash</a>
                    </li>
                   
                   <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>

                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.php"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.php"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>  -->
 <li>
                        <a href="scenario.php"><i class="fa fa-fw fa-calendar-o"></i>Scénario</a>
                    </li>
              
                   <li>
                        <a href="historique.php"><i class="fa fa-fw fa-history"></i> Historique </a>
                    </li>
                    
                
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        