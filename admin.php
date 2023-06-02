        <?php

            $page_title = 'Control de Sedes';
            
            require_once( 'includes/load.php' );
            
            if($_GET['id'] && $_GET['cod']) 
            {
                $sql="UPDATE users SET sede = '{$_GET['cod']}' WHERE id='{$_GET['id']}'";
                if($db->query($sql));
            };
            $SuperUser = current_user();
            // Checkin What level user has permission to view this page
            page_require_level( 1 );

            $c_userTotals = count_by_id( 'users' );
            $c_userSedes = count_by_id_sede( 'users', $SuperUser[ 'sede' ] );
            //$all_user = find_all( 'users' );

            //$findUser = find_by_user( 'users', 'admin' );


            include_once( 'layouts/header.php' );
        ?>

        <div class='row'>
            <div class='col-md-12'>
                <?php echo display_msg( $msg );?>
            </div>
        </div>

        <?php

            if ( isset( $_POST[ 'sede_TChimb' ] ) )
                {
                    $var = updateSedeSuperUser( $SuperUser[ 'username' ], '1' );

                    if ( $var == true ) 
                    {
                        $session->msg( 's', 'Se encuentra en la sede de TASA-CHIMBOTE.' );
                        redirect( 'admin.php', false );
                    } else {
                        $session->msg( 'd', 'Ya se encuentra ubicado en la sede de TASA-CHIMBOTE' );
                        redirect( 'admin.php', false );
                    }
                }

                if ( isset( $_POST[ 'sede_tSamanco' ] ) )
                {
                    $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], '2' );

                    if ( $var2 == true ) 
                    {
                        $session->msg( 's', 'Se encuentra en la Sede de TASA-SAMANCO.' );
                        redirect( 'admin.php', false );
                    } else {
                        $session->msg( 'd', 'Ya se encuentra ubicado en la sede de TASA-SAMANCO' );
                        redirect( 'admin.php', false );
                    }
                }

                if ( isset( $_POST[ 'sede_tSupe' ] ) )
                {
                    $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], '3' );

                    if ( $var2 == true ) 
                    {
                        $session->msg( 's', 'Se encuentra en la Sede de TASA-SUPE.' );
                        redirect( 'admin.php', false );
                    } else {
                        $session->msg( 'd', 'Ya se encuentra ubicado en la sede de TASA-SUPE' );
                        redirect( 'admin.php', false );
                    }
                }

                if ( isset( $_POST[ 'sede_tVegeta' ] ) )
                {
                    $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], '4' );

                    if ( $var2 == true ) 
                    {
                        $session->msg( 's', 'Se encuentra en la Sede de TASA-VÉGUETA.' );
                        redirect( 'admin.php', false );
                    } else {
                        $session->msg( 'd', 'Ya se encuentra ubicado en la sede de TASA-VÉGUETA' );
                        redirect( 'admin.php', false );
                    }
                }
                if ( isset( $_POST[ 'sede_tCallao' ] ) )
                {
                    $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], '5' );

                    if ( $var2 == true ) 
                    {
                        $session->msg( 's', 'Se encuentra en la Sede de TASA-CALLAO.' );
                        redirect( 'admin.php', false );
                    } else {
                        $session->msg( 'd', 'Ya se encuentra ubicado en la sede de TASA-CALLAO' );
                        redirect( 'admin.php', false );
                    }
                }

                // if ( isset( $_POST[ 'sede_tPisco' ] ) )
                // {
                //     $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], 'T-Pisco' );

                //     if ( $var2 == true ) 
                //     {
                //         $session->msg( 's', 'Se encuentra en la Sede de TASA-PISCO.' );
                //         redirect( 'admin.php', false );
                //     } else {
                //         $session->msg( 'd', 'Ya se encuentra ubicado en la sede de TASA-PISCO' );
                //         redirect( 'admin.php', false );
                //     }
                // }

                if ( isset( $_POST[ 'sede_tAtico' ] ) )
                {
                    $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], '7' );

                    if ( $var2 == true ) 
                    {
                        $session->msg( 's', 'Se encuentra en la Sede de TASA-ATICO.' );
                        redirect( 'admin.php', false );
                    } else {
                        $session->msg( 'd', 'Ya se encuentra ubicado en la sede de TASA-ATICO' );
                        redirect( 'admin.php', false );
                    }
                }

                // if ( isset( $_POST[ 'sede_tMatarani' ] ) )
                // {
                //     $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], 'T-Matarani' );

                //     if ( $var2 == true ) 
                //     {
                //         $session->msg( 's', 'Se encuentra en la Sede de TASA-MATARANI.' );
                //         redirect( 'admin.php', false );
                //     } else {
                //         $session->msg( 'd', 'Ya se encuentra ubicado en la sede de TASA-MATARANI' );
                //         redirect( 'admin.php', false );
                //     }
                // }

                if ( isset( $_POST[ 'sede_eChimbote' ] ) )
                {
                    $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], '9' );

                    if ( $var2 == true ) 
                    {
                        $session->msg( 's', 'Se encuentra en la Sede de EXALMAR-CHIMBOTE.' );
                        redirect( 'admin.php', false );
                    } else {
                        $session->msg( 'd', 'Ya se encuentra ubicado en la sede de EXALMAR-CHIMBOTE' );
                        redirect( 'admin.php', false );
                    }
                }

                if ( isset( $_POST[ 'sede_eChicama' ] ) )
                {
                    $var2 = updateSedeSuperUser( $SuperUser[ 'username' ], '10' );

                    if ( $var2 == true ) 
                    {
                        $session->msg( 's', 'Se encuentra en la Sede de EXALMAR-CHICAMA.' );
                        redirect( 'admin.php', false );
                    } else {
                        $session->msg( 'd', 'Ya se encuentra ubicado en la sede de EXALMAR-CHICAMA' );
                        redirect( 'admin.php', false );
                    }
                }
        ?>

        <i class=''></i>
<div class='row'>
    <div class='row'>
        <div class='col-md-4 cont_init' id='usersT'>
            <a href='users.php'>
                <div class='panel panel-box clearfix'>
                    <div class='panel-icon pull-left bg-celeste'>
                        <i class='glyphicon glyphicon-user'></i>
                    </div>
                    <div class='panel-value pull-right'>
                        <h2 class='margin-top'> <?php  echo $c_userTotals[ 'total' ];?> </h2>
                        <p class='text-muted'>Usuarios Totales</p>
                    </div>
                </div>
            </a>
        </div>

        <div class='col-md-4 cont_init' id='usersT'>
            <a href='backup.php'>
                <div class='panel panel-box clearfix'>
                    <div class='panel-icon pull-left bg-gray'>
                        <i class='glyphicon glyphicon-download'></i>
                    </div>
                    <div class='panel-value pull-right'>
                        <h3 class='backup'>Backup </h3>

                    </div>
                </div>
            </a>
        </div>

        <div class='col-md-4 cont_init' id='usersS'>
            <a href='userSede.php'>
                <div class='panel panel-box clearfix'>
                    <div class='panel-icon pull-left bg-celeste'>
                        <i class='glyphicon glyphicon-user'></i>
                    </div>
                    <div class='panel-value pull-right'>
                        <h2 class='margin-top'> <?php  echo $c_userSedes[ 'total' ];?> </h2>
                        <p class='text-muted'>Usuarios por Sede</p>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class='row titleSedes'>
        <p class='p_sedes'>SEDES - CLIENTES</p>
    </div>

    <div class='row' style='margin-top:15px;'>
        <div class='col-md-6'>
            <div class='row titleClients'>
                <p class='p_clientes'> CLIENTES - TASA</p>
            </div>
            
            <a class='col-md-6 col-sm-12 panelForm' href="admin.php?cod=1&id=<?php echo (int)$SuperUser['id'];?>">
                <button type='submit' name='sede_TChimb' class='cont_sede cont_Sedetasa'>
                    <div class='panel panel-box clearfix'>
                        <div class='panel-icon pull-left bg-navy '>
                            <i class='glyphicon glyphicon-home formIco'></i>
                        </div>

                        <div class=' contTextForm'>
                            <h4 class='margin-top'> Chimbote </h4>
                        </div>
                    </div>
                </button>
            </a>
            
            <a class='col-md-6 col-sm-12 panelForm' href="admin.php?cod=5&id=<?php echo (int)$SuperUser['id'];?>">
                <button type='submit' name='sede_TChimb' class='cont_sede cont_Sedetasa'>
                    <div class='panel panel-box clearfix'>
                        <div class='panel-icon pull-left bg-navy '>
                            <i class='glyphicon glyphicon-home formIco'></i>
                        </div>

                        <div class=' contTextForm'>
                            <h4 class='margin-top'> Callao </h4>
                        </div>
                    </div>
                </button>
            </a>

            <a class='col-md-6 col-sm-12 panelForm' href="admin.php?cod=4&id=<?php echo (int)$SuperUser['id'];?>">
                <button type='submit' name='sede_TChimb' class='cont_sede cont_Sedetasa'>
                    <div class='panel panel-box clearfix'>
                        <div class='panel-icon pull-left bg-navy '>
                            <i class='glyphicon glyphicon-home formIco'></i>
                        </div>

                        <div class=' contTextForm'>
                            <h4 class='margin-top'> Végueta </h4>
                        </div>
                    </div>
                </button>
            </a>
           

            <!-- 
            <form method='post' action="admin.php" class='col-md-4 col-sm-12 panelForm'>
                <button type='submit' name='sede_tPisco' class='cont_sede cont_Sedetasa'>
                    <div class='panel panel-box clearfix'>
                        <div class='panel-icon pull-left bg-navy'>
                            <i class='glyphicon glyphicon-home formIco'></i>
                        </div>
                        <div class=' contTextForm'>
                            <h4 class='margin-top'> Pisco </h4>
                        </div>
                    </div>
                </button>
            </form> -->

            <!-- <div  class='col-md-1 col-sm-12'></div> -->
               
            <!-- 
                <form method='post' action="admin.php" class='col-md-5 col-sm-12 panelForm'>
                    <button type='submit' name='sede_tMatarani' class='cont_sede cont_Sedetasa'>
                        <div class='panel panel-box clearfix'>
                            <div class='panel-icon pull-left bg-navy'>
                                <i class='glyphicon glyphicon-home'></i>
                            </div>
                            <div class=' contTextForm2'>
                                <h4 class='margin-top'> Matarani </h4>
                            </div>
                        </div>
                    </button>
                </form> 
            -->
            
            <div class='col-md-12'>
                <div class='row titleClients'>
                    <p class='p_clientes'>INSPECCIÓN DE VEHÍCULOS</p>
                </div>
                <form method='post'class='col-md-6 col-sm-12 panelForm'>
                    <button type='submit' name='sede_tAtico' class='cont_sede cont_Sedetasa'>
                        <div class='panel panel-box clearfix'>
                            <div class='panel-icon pull-left bg-navy'>
                                <i class='glyphicon glyphicon-home formIco'></i>
                            </div>
                            <div class=' contTextForm'>
                                <h4 class='margin-top'> Atico </h4>
                            </div>
                        </div>
                    </button>
                </form>
                <form method='post'class='col-md-6 col-sm-12 panelForm'>
                    <button type='submit' name='sede_tSamanco' class='cont_sede cont_Sedetasa'>
                        <div class='panel panel-box clearfix'>
                            <div class='panel-icon pull-left bg-navy'>
                                <i class='glyphicon glyphicon-home formIco'></i>
                            </div>
                            <div class='contTextForm'>
                                <h4 class='margin-top'> Samanco </h4>
                            </div>
                        </div>
                    </button>
                </form>

                <form method='post' action='admin.php' class='col-md-6 col-sm-12 panelForm'>
                    <button type='submit' name='sede_tSupe' class='cont_sede cont_Sedetasa'>
                        <div class='panel panel-box clearfix'>
                            <div class='panel-icon pull-left bg-navy'>
                                <i class='glyphicon glyphicon-home formIco'></i>
                            </div>
                            <div class='contTextForm'>
                                <h4 class='margin-top'> Supe </h4>
                            </div>
                        </div>
                    </button>
                </form>
            </div>


        </div>

        <div class='col-md-6 col-sm-12'>
            <div class='row titleClients'>
                <p class='p_clientes'>CLIENTES - EXALMAR</p>
            </div>

            
                <!--         <form method='post' action="admin.php" class='col-md-4 col-sm-12 panelForm>
                                <button type='submit' name='sede_eChimbote' class='col-md-5  col-sm-12 cont_sede'>
                                    <div class='panel panel-box clearfix'>
                                        <div class='panel-icon pull-left bg-navy'>
                                            <i class='glyphicon glyphicon-home'></i>
                                        </div>
                                        <div class='contTextForm2'>
                                            <h4 class='margin-top'> Chimbote </h4>
                                        </div>
                                    </div>
                                </button>
                            </form>
                -->


            <a class='col-md-12 col-sm-12 panelForm' href="admin.php?cod=9&id=<?php echo (int)$SuperUser['id'];?>">
                <button type='submit' name='sede_TChimb' class='cont_sede cont_Sedetasa'>
                    <div class='panel panel-box clearfix'>
                        <div class='panel-icon pull-left bg-navy '>
                            <i class='glyphicon glyphicon-home formIco'></i>
                        </div>

                        <div class=' contTextForm'>
                            <h4 class='margin-top'> Chimbote </h4>
                        </div>
                    </div>
                </button>
            </a>
            <a class='col-md-12 col-sm-12 panelForm' href="admin.php?cod=10&id=<?php echo (int)$SuperUser['id'];?>">
                <button type='submit' name='sede_TChimb' class='cont_sede cont_Sedetasa'>
                    <div class='panel panel-box clearfix'>
                        <div class='panel-icon pull-left bg-navy '>
                            <i class='glyphicon glyphicon-home formIco'></i>
                        </div>

                        <div class=' contTextForm'>
                            <h4 class='margin-top'> Malabrigo </h4>
                        </div>
                    </div>
                </button>
            </a>
        </div>

    </div>
</div>

<?php include_once( 'layouts/footer.php' );?>