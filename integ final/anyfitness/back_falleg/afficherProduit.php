<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->

</head>

<body>
    <!-- Left Panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

  
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
											<th>Product Id</th>
                                            <th>Product Name</th>
											<th>Categorie</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
											<th>supprimer</th>
											<th>modifier</th>
                                        </tr>
                                    </thead>


                                    <tbody>
<?PHP
include "/core/produitC.php";
$produit1C=new produitC();
$listeproduits=$produit1C->afficherproduits();
?>

												
<?PHP
foreach($listeproduits as $row){
	?>
                                        <tr>
                                            
														<td><?PHP echo $row['id']; ?></td>
                                                        <td><?PHP echo $row['nom']; ?></td>
                                                        <td><?PHP echo $row['categorie'];?></td>
                                                        <td><?PHP echo $row['Qt']; ?></td>
                                                        <td><?PHP echo $row['prix'];?></td>
														<td><div class="m-r-10"><img src="<?PHP echo $row['folder']; ?>" alt="user" class="rounded" width="45"></div></td>
														<td><form method="POST" action="supprimerproduit.php">
														<input type="submit" name="supprimer" value="supprimer">
														<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
														</form>
														</td>
														<td><a href="modifierproduit.php?id=<?PHP echo $row['id']; ?>">
														Modifier</a></td>
													    </tr>
                                        </tr>
<?PHP
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

        </header><!-- /header -->
        <!-- Header-->

        
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


<script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
    


</body>

</html>
