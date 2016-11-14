<!DOCTYPE html>
<html lang="en">
<body>
<?php


$msg = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '';

require_once '../config/database.php';

$username = $_SESSION['user_session'];

$query = mysql_query("select * from user");

?>
   
   
					
                    <h3 class="page-title"> User
                        <small>List of Users</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="../home">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="./category">User</a>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <a href="index.php?view=create" type="button" class="btn btn-fit-height grey-salt" > Add a new User
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
						
							<?php if ($msg != ""){?>
						
                                <div class="alert alert-block alert-success fade in">
                                        <button type="button" class="close" data-dismiss="alert"></button>
                                <p><?=$msg;?></p>
                            </div>
							
							<?php }?>
							
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa"></i>List of Users  </div>
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                 
                                        <tbody>
										
										<?php

											if(mysql_num_rows($query)>0){ 
											while($row= mysql_fetch_array($query)){ 

											?>
										
                                            <tr>
                                                <td> <b><?=$row['fname']?> <?=$row['lname']?></b> <br>
													<small>(<?=$row['access']?>)</small>
												</td>
												<td width="10%"><a href="index.php?view=update&id=<?=$row['id']?>" class="btn sbold green">update</a></td>
												<td width="10%"><a class="btn sbold red" data-toggle="confirmation" data-original-title="Are you sure ?" href="process.php?action=delete&id=<?=$row['id']?>">delete</a></td>
                                            </tr>
											<?php        
        
											}        
											}

										else{
											?>

												<tr>
													<td align="center"> No Record
												</tr>
												
											<?php	}

											?>
                                          
                                        </tbody>
                                    </table>
									
                               

                                </div>
                            </div>
							</div>
                            <!-- END SAMPLE TABLE PORTLET-->