<?php
$credential = "";
$page = (!empty($page)) ? $page : "";
switch ($page) {
    case 'credential':
        $credential = "credential";
        break;
    default:
        $credential = "";
        break;
}
$toast = !empty($this->session->msg) ? 1 : 0;

$notification = !empty($_SESSION['notification']) ? 1 : 0;


?>

<?php if ($page != 'credential') { ?>

    <!-- [ Main Content ] end -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- [ Main Content ] end -->
<?php } ?>

<style>
</style>



<div id="snackbar">
    <div class="snacktext"><?= $this->session->msg ?></div>
</div>

<div class="loader_container">
    <div class="loader_content">
        <div class="loader"></div>
    </div>
</div>
</div>


<!-- Required Js -->
<script src="<?= JS_PATH; ?>/vendor-all.min.js"></script>
<script src="<?= JS_PATH; ?>/pcoded.min.js"></script>

<!-- include js -->
<script src="<?= JS_PATH; ?>/common.js?v=<?= time(); ?>"></script>
<script src="<?= JS_PATH; ?>/action.js?v=<?= time(); ?>"></script>
<!-- aos animation -->
<script>
    AOS.init({
        once: true
    });
</script>
<!-- Swiper -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<?php
if (!empty($js) && isset($js)) {
    foreach ($js as $key => $js_value) {
        echo '<script src="' . $js_value . '?v=' . time() . '"></script>';
    }
}
?>

<script type="text/javascript">
    var url_hash = "";
    var ajaxBaseUrl = '<?= BASE_URL ?>';
    var router = '<?= uri_string() ?>';

    function refresh_csrf_data(successCallback) {
        callGetAjax('dashboard/refreshCSRFToken', {},
            function(result) {
                csrf_token_name = result.token_name;
                csrf_hash = result.hash;
                successCallback();
            },
            function(err) {

            }
        );
    }
    $(document).ready(function() {
        var notification = <?= $notification ?>;

        if (notification == 1) {
            notify("<?= $_SESSION['notification']['title'] ?>", "<?= $_SESSION['notification']['message'] ?>",
                "<?= $_SESSION['notification']['type'] ?>");
        }
        var toast = "<?= $toast ?>";
        if (toast == "1") {
            $("#snackbar").addClass("show");
            setTimeout(function() {
                $("#snackbar").removeClass("show");
            }, 3000);
        }

    });
</script>
<script src="<?= PLUGIN_PATH ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= PLUGIN_PATH ?>/bootstrap/js/popover.js"></script>
<script src="<?= PLUGIN_PATH ?>/notification/js/bootstrap-growl.min.js"></script>
</body>

</html>