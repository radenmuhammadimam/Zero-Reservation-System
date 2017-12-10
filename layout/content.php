        <?php 
        if(isset($_GET['page'])) {
            //Part admin
            if ($_GET['page'] == "admin") {
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == "viewmaskapai") {
                        include 'admin/viewmaskapai.php';

                        if(isset($_GET['act'])) {
                            if($_GET['act'] == "delete") {
                                include 'admin/deletemaskapai.php';
                            } elseif($_GET['act'] == "edit") {
                                include 'admin/editmaskapai.php';
                            }
                        }
                    } elseif ($_GET['menu'] == "insertmaskapai"){
                        include 'admin/insertmaskapai.php';
                    } elseif ($_GET['menu'] == "viewcustomer") {
                        include 'admin/viewcustomer.php';

                        if(isset($_GET['act'])) {
                            if($_GET['act'] == "delete") {
                                include 'admin/deletecustomer.php';
                            } elseif($_GET['act'] == "edit") {
                                include 'admin/editcustomer.php';
                            }
                        }
                    } elseif ($_GET['menu'] == "insertcustomer"){
                        include 'admin/insertcustom.php';
                    } elseif ($_GET['menu'] == "viewpesanan"){
                        include 'admin/viewkonfirmasi.php';

                        if (isset($_GET['act'])) {
                            if($_GET['act'] == "edit") {
                                include 'admin/editpesanan.php';
                            } elseif ($_GET['act'] == "delete") {
                                include 'admin/deletepesanan.php';
                            }
                        }
                    } elseif ($_GET['menu'] == 'editprofile') {
                        include 'admin/editprofileadmin.php';
                    }
                } else {
                    include 'defaultcontent.php';
                }
            
            } elseif($_GET['page'] == 'customer') {
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 'viewmaupesan'){
                     include 'customer/viewallpenerbangan.php';

                     if (isset($_GET['act'])){
                        if ($_GET['act'] == "pesan") {
                            include 'customer/pesanpenerbangan.php';
                        }
                     } 
                    } elseif ($_GET['menu'] == 'kelolapesanan'){
                        include 'customer/myflight.php';
                    } elseif ($_GET['menu'] == 'isisaldo') {
                        include 'customer/kelolasaldo.php';
                    } elseif ($_GET['menu'] == 'editprofile') {
                        include 'customer/editprofilecustomer.php';
                    }
                } else {
                     include 'customer/flightcard.php';
                }
            } elseif($_GET['page'] == 'maskapai') {
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 'viewpesawat'){
                        include 'maskapai/viewlistpesawat.php';

                        if(isset($_GET['act'])) {
                            if($_GET['act'] == "edit") {
                                include 'maskapai/editpesawat.php';
                            } elseif ($_GET['act'] == "delete"){
                                include 'maskapai/deletepesawat.php';
                            }
                        }
                    } elseif ($_GET['menu'] == 'viewjamterbang'){
                        include 'maskapai/viewjamterbang.php';
                    } elseif ($_GET['menu'] == 'insertpesawat'){
                        include 'maskapai/insertpesawat.php';
                    } elseif($_GET['menu'] == 'viewjadwal'){
                        include 'maskapai/viewjadwalpenerbangan.php';

                        if(isset($_GET['act'])) {
                            if($_GET['act'] == "edit") {
                                include 'maskapai/editjadwalpenerbangan.php';
                            } elseif ($_GET['act'] == "delete"){
                                include 'maskapai/deletejadwalpenerbangan.php';
                            }
                        }
                    } elseif($_GET['menu'] == 'insertjadwal') {
                        include 'maskapai/insertjadwal.php';
                    } elseif ($_GET['menu'] == 'editprofile') {
                        include 'maskapai/editprofilemaskapai.php';
                    } elseif ($_GET['menu'] == 'insertjamterbang') {
                        include 'maskapai/insertjamterbang.php';
                    }


                } else {
                    include 'maskapai/viewpesawat.php';
                }

            }
        }

        ?>
