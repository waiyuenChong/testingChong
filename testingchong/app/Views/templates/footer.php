<?php
$page = (!empty($page)) ? $page : "";
if ($page != 'credential') { ?>


<?php } ?>

<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2022©</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://themes.getbootstrap.com/product/good-bootstrap-5-admin-dashboard-template" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

<?php
if (!empty($js) && isset($js)) {
	foreach ($js as $key => $js_value) {
		echo '<script src="' . $js_value . '?v=' . time() . '"></script>';
	}
}
?>

<script src="<?= PLUGIN_PATH ?>/global/plugins.bundle.js"></script>
<script src="<?= JS_PATH ?>/scripts.bundle.js"></script>
<script src="<?= PLUGIN_PATH ?>/bootstrap/js/bootstrap5.1.min"></script>
<!-- <script src="<?= PLUGIN_PATH ?>/bootstrap/bootstrap-popover.js"></script> -->

</body>

</html>