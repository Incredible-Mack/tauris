					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1"><?php echo date("Y"); ?>©</span>
								<a href="<?php echo $domain ; ?>" target="_blank" class="text-gray-800 text-hover-primary">Tauris Tech</a>
							</div>
							<!--end::Copyright-->
													</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
	
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->

<?php //include "inc-drawer-footer.php"; ?>

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?php echo $domain ; ?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo $domain ; ?>assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?php echo $domain ; ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="<?php echo $domain ; ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		

<script src="<?php echo $domain ; ?>assets/js/custom/apps/user-management/users/list/table.js"></script>
<script src="<?php echo $domain ; ?>assets/js/custom/apps/user-management/users/list/export-users.js"></script>
<script src="<?php echo $domain ; ?>assets/js/custom/apps/user-management/users/list/add.js"></script>


		<script src="<?php echo $domain ; ?>assets/js/widgets.bundle.js"></script>
		<script src="<?php echo $domain ; ?>assets/js/custom/widgets.js"></script>
		<script src="<?php echo $domain ; ?>assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo $domain ; ?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?php echo $domain ; ?>assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="<?php echo $domain ; ?>assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="<?php echo $domain ; ?>assets/js/custom/documentation/forms/tagify.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>