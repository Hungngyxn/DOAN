<?php require_once("header.php")
?>
            <main class="content dynamic-container">
                <?php
                echo '<h3 style="margin-bottom: 1rem;">Kết quả tìm kiếm cho "'. $_GET["keyword"] .'"</h3>';
                ?>
                <div style="margin-bottom: 1rem;" id="result-categories">
                    <?php
                    require_once ($_SERVER['DOCUMENT_ROOT']."/CONCASAU/DOAN/controllers/search_controller.php");
                    $controller = new SearchController();
                    $controller->search_invoke_for_buttons();
                    ?>
                </div>
                <div id="results-holder" class="results-holder">
                    <?php
                    require_once ($_SERVER['DOCUMENT_ROOT']."/CONCASAU/DOAN/controllers/search_controller.php");
                    $controller = new SearchController();
                    $controller->search_invoke($_GET['keyword']);
                    ?>
                </div>
            </main>
            <div style="height: 50px;"></div>
             <hr style="clear: both;">
        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4 col-sm-12">
                        <hr class="light" />
                        <h5>Contact Us</h5>
                        <hr class="light" />
                        <p>0948 999 999</p>
                        <p>269 Nguyễn Tri Phương</p>
                        <p>Quận 10, Thành phố Hồ Chí Minh</p>
                    </div>
                    <div class="col-md-4 d-none d-sm-block">
                        <hr class="light" />
                        <h5>Office Hours</h5>
                        <hr class="light" />
                        <p>Mon - Sar: 8:00 - 17:00</p>
                        <p>Sun: Closed</p>
                    </div>  
                    <div class="col-md-4 d-none d-sm-block">
                        <hr class="light" />
                        <h5>Regional Offices</h5>
                        <hr class="light" />
                        <p>Quận 10, Hồ Chí Minh</p>
                        <p>Quận 3, Hồ Chí Minh</p>
                        <p>Huyện Bình Chánh, Hồ Chí Minh</p>
                        <p>Vĩnh Long</p>
                    </div>
                    <div class="col-12">
                        <hr class="light-100" />
                        <h5>&copy; H&A Corp, 2022</h5>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </body>
</html>