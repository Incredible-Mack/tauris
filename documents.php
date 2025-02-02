<?php include "inc-header.php"; ?>
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Documents</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
									
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Pages</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">User Profile</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Documents</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Filter menu-->
									<div class="m-0">
										<!--begin::Menu toggle-->
										<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
										<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Filter</a>
										<!--end::Menu toggle-->
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c1045e8">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Filter Options</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<div class="px-7 py-5">
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div>
														<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c1045e8" data-allow-clear="true">
															<option></option>
															<option value="1">Approved</option>
															<option value="2">Pending</option>
															<option value="2">In Process</option>
															<option value="2">Rejected</option>
														</select>
													</div>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Member Type:</label>
													<!--end::Label-->
													<!--begin::Options-->
													<div class="d-flex">
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
															<input class="form-check-input" type="checkbox" value="1" />
															<span class="form-check-label">Author</span>
														</label>
														<!--end::Options-->
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="2" checked="checked" />
															<span class="form-check-label">Customer</span>
														</label>
														<!--end::Options-->
													</div>
													<!--end::Options-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Notifications:</label>
													<!--end::Label-->
													<!--begin::Switch-->
													<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
														<label class="form-check-label">Enabled</label>
													</div>
													<!--end::Switch-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Menu 1-->
									</div>
									<!--end::Filter menu-->
									<!--begin::Secondary button-->
									<!--end::Secondary button-->
									<!--begin::Primary button-->
									<a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Navbar-->
								<div class="card mb-6">
									<div class="card-body pt-9 pb-0">
										<!--begin::Details-->
										<div class="d-flex flex-wrap flex-sm-nowrap">
											<!--begin: Pic-->
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img src="<?php echo $domain ; ?>assets/media/avatars/300-1.jpg" alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<!--begin::User-->
													<div class="d-flex flex-column">
														<!--begin::Name-->
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Max Smith</a>
															<a href="#">
																<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																		<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
																		<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</div>
														<!--end::Name-->
														<!--begin::Info-->
														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor" />
																	<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->Developer</a>
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
															<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
																	<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->SF, Bay Area</a>
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
																	<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->max@kt.com</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::User-->
													<!--begin::Actions-->
													<div class="d-flex my-4">
														<a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
															<span class="svg-icon svg-icon-3 d-none">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																	<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Indicator-->
															<span class="indicator-label">Follow</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															<!--end::Indicator-->
														</a>
														<a href="#" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
														<!--begin::Menu-->
														<div class="me-0">
															<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="bi bi-three-dots fs-3"></i>
															</button>
															<!--begin::Menu 3-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																<!--begin::Heading-->
																<div class="menu-item px-3">
																	<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																</div>
																<!--end::Heading-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Create Invoice</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link flex-stack px-3">Create Payment
																	<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Generate Bill</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">Subscription</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Plans</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Billing</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Statements</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu separator-->
																		<div class="separator my-2"></div>
																		<!--end::Menu separator-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<div class="menu-content px-3">
																				<!--begin::Switch-->
																				<label class="form-check form-switch form-check-custom form-check-solid">
																					<!--begin::Input-->
																					<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																					<!--end::Input-->
																					<!--end::Label-->
																					<span class="form-check-label text-muted fs-6">Recuring</span>
																					<!--end::Label-->
																				</label>
																				<!--end::Switch-->
																			</div>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3 my-1">
																	<a href="#" class="menu-link px-3">Settings</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 3-->
														</div>
														<!--end::Menu-->
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Stats-->
												<div class="d-flex flex-wrap flex-stack">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column flex-grow-1 pe-8">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Earnings</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="80">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Projects</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Success Rate</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Progress-->
													<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-bold fs-6 text-gray-400">Profile Compleation</span>
															<span class="fw-bolder fs-6">50%</span>
														</div>
														<div class="h-5px mx-3 w-100 bg-light mb-3">
															<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Navs-->
										<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/overview.html">Overview</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/projects.html">Projects</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/campaigns.html">Campaigns</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="../../demo1/dist/pages/user-profile/documents.html">Documents</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/followers.html">Followers</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/activity.html">Activity</a>
											</li>
											<!--end::Nav item-->
										</ul>
										<!--begin::Navs-->
									</div>
								</div>
								<!--end::Navbar-->
								<!--begin::Documents toolbar-->
								<div class="d-flex flex-wrap flex-stack mb-6">
									<!--begin::Title-->
									<h3 class="fw-bolder my-2">My Documents
									<span class="fs-6 text-gray-400 fw-bold ms-1">100+ resources</span></h3>
									<!--end::Title-->
									<!--begin::Controls-->
									<div class="d-flex my-2">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative me-4">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-3 position-absolute ms-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" id="kt_filter_search" class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search" />
										</div>
										<!--end::Search-->
										<a href="../../demo1/dist/apps/file-manager/files.html" class="btn btn-primary btn-sm">File Manager</a>
									</div>
									<!--end::Controls-->
								</div>
								<!--end::Documents toolbar-->
								<!--begin::Row-->
								<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-75px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/folder-document.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">Finance</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">7 files</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-75px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/folder-document.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">Customers</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">3 files</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-75px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/folder-document.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">CRM Project</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">25 files</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
								</div>
								<!--end:Row-->
								<!--begin::Row-->
								<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/pdf.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">Project Reqs..</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">3 days ago</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/doc.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">CRM App Docs..</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">3 days ago</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/css.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">User CRUD Styles</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">4 days ago</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/ai.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">Product Logo</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">5 days ago</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/sql.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">Orders backup</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">1 week ago</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/xml.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">UTAIR CRM API Co..</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">2 weeks ago</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="../../demo1/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<img src="<?php echo $domain ; ?>assets/media/svg/files/tif.svg" alt="" />
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">Tower Hill App..</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">3 weeks ago</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
								</div>
								<!--end:Row-->
								<!--begin::Modals-->
								<!--begin::Modal - Offer A Deal-->
								<div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-1000px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header py-7 d-flex justify-content-between">
												<!--begin::Modal title-->
												<h2>Offer a Deal</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--begin::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y m-5">
												<!--begin::Stepper-->
												<div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
													<!--begin::Nav-->
													<div class="stepper-nav justify-content-center py-2">
														<!--begin::Step 1-->
														<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
															<h3 class="stepper-title">Deal Type</h3>
														</div>
														<!--end::Step 1-->
														<!--begin::Step 2-->
														<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
															<h3 class="stepper-title">Deal Details</h3>
														</div>
														<!--end::Step 2-->
														<!--begin::Step 3-->
														<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
															<h3 class="stepper-title">Finance Settings</h3>
														</div>
														<!--end::Step 3-->
														<!--begin::Step 4-->
														<div class="stepper-item" data-kt-stepper-element="nav">
															<h3 class="stepper-title">Completed</h3>
														</div>
														<!--end::Step 4-->
													</div>
													<!--end::Nav-->
													<!--begin::Form-->
													<form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_modal_offer_a_deal_form">
														<!--begin::Type-->
														<div class="current" data-kt-stepper-element="content">
															<!--begin::Wrapper-->
															<div class="w-100">
																<!--begin::Heading-->
																<div class="mb-13">
																	<!--begin::Title-->
																	<h2 class="mb-3">Deal Type</h2>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="text-muted fw-bold fs-5">If you need more info, please check out
																	<a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
																	<!--end::Description-->
																</div>
																<!--end::Heading-->
																<!--begin::Input group-->
																<div class="fv-row mb-15" data-kt-buttons="true">
																	<!--begin::Option-->
																	<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6 active">
																		<!--begin::Input-->
																		<input class="btn-check" type="radio" checked="checked" name="offer_type" value="1" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<span class="d-flex">
																			<!--begin::Icon-->
																			<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor" />
																					<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																			<!--end::Icon-->
																			<!--begin::Info-->
																			<span class="ms-4">
																				<span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Personal Deal</span>
																				<span class="fw-bold fs-4 text-muted">If you need more info, please check it out</span>
																			</span>
																			<!--end::Info-->
																		</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Option-->
																	<!--begin::Option-->
																	<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6">
																		<!--begin::Input-->
																		<input class="btn-check" type="radio" name="offer_type" value="2" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<span class="d-flex">
																			<!--begin::Icon-->
																			<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																					<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																					<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																					<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																			<!--end::Icon-->
																			<!--begin::Info-->
																			<span class="ms-4">
																				<span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Corporate Deal</span>
																				<span class="fw-bold fs-4 text-muted">Create corporate account to manage users</span>
																			</span>
																			<!--end::Info-->
																		</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Option-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
																		<span class="indicator-label">Offer Details</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Type-->
														<!--begin::Details-->
														<div data-kt-stepper-element="content">
															<!--begin::Wrapper-->
															<div class="w-100">
																<!--begin::Heading-->
																<div class="mb-13">
																	<!--begin::Title-->
																	<h2 class="mb-3">Deal Details</h2>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="text-muted fw-bold fs-5">If you need more info, please check out
																	<a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
																	<!--end::Description-->
																</div>
																<!--end::Heading-->
																<!--begin::Input group-->
																<div class="fv-row mb-8">
																	<!--begin::Label-->
																	<label class="required fs-6 fw-bold mb-2">Customer</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" name="details_customer">
																		<option></option>
																		<option value="1" selected="selected">Keenthemes</option>
																		<option value="2">CRM App</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-8">
																	<!--begin::Label-->
																	<label class="required fs-6 fw-bold mb-2">Deal Title</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="Enter Deal Title" name="details_title" value="Marketing Campaign" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-8">
																	<!--begin::Label-->
																	<label class="fs-6 fw-bold mb-2">Deal Description</label>
																	<!--end::Label-->
																	<!--begin::Label-->
																	<textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description" name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
																	<!--end::Label-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-8">
																	<label class="required fs-6 fw-bold mb-2">Activation Date</label>
																	<div class="position-relative d-flex align-items-center">
																		<!--begin::Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
																		<span class="svg-icon svg-icon-2 position-absolute mx-4">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																				<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																				<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--end::Icon-->
																		<!--begin::Datepicker-->
																		<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="details_activation_date" />
																		<!--end::Datepicker-->
																	</div>
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-15">
																	<!--begin::Wrapper-->
																	<div class="d-flex flex-stack">
																		<!--begin::Label-->
																		<div class="me-5">
																			<label class="required fs-6 fw-bold">Notifications</label>
																			<div class="fs-7 fw-bold text-muted">Allow Notifications by Phone or Email</div>
																		</div>
																		<!--end::Label-->
																		<!--begin::Checkboxes-->
																		<div class="d-flex">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-10">
																				<!--begin::Input-->
																				<input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="details_notifications[]" />
																				<!--end::Input-->
																				<!--begin::Label-->
																				<span class="form-check-label fw-bold">Email</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="details_notifications[]" />
																				<!--end::Input-->
																				<!--begin::Label-->
																				<span class="form-check-label fw-bold">Phone</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Checkbox-->
																		</div>
																		<!--end::Checkboxes-->
																	</div>
																	<!--begin::Wrapper-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex flex-stack">
																	<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous">Deal Type</button>
																	<button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">
																		<span class="indicator-label">Financing</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Details-->
														<!--begin::Budget-->
														<div data-kt-stepper-element="content">
															<!--begin::Wrapper-->
															<div class="w-100">
																<!--begin::Heading-->
																<div class="mb-13">
																	<!--begin::Title-->
																	<h2 class="mb-3">Finance</h2>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="text-muted fw-bold fs-5">If you need more info, please check out
																	<a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
																	<!--end::Description-->
																</div>
																<!--end::Heading-->
																<!--begin::Input group-->
																<div class="fv-row mb-8">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																		<span class="required">Setup Budget</span>
																		<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
																	</label>
																	<!--end::Label-->
																	<!--begin::Dialer-->
																	<div class="position-relative w-lg-250px" id="kt_modal_finance_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
																		<!--begin::Decrease control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
																			<span class="svg-icon svg-icon-1">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																					<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																		<!--end::Decrease control-->
																		<!--begin::Input control-->
																		<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="finance_setup" readonly="readonly" value="$50" />
																		<!--end::Input control-->
																		<!--begin::Increase control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
																			<span class="svg-icon svg-icon-1">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																					<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																					<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																		<!--end::Increase control-->
																	</div>
																	<!--end::Dialer-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-8">
																	<!--begin::Label-->
																	<label class="fs-6 fw-bold mb-2">Budget Usage</label>
																	<!--end::Label-->
																	<!--begin::Row-->
																	<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
																		<!--begin::Col-->
																		<div class="col-md-6 col-lg-12 col-xxl-6">
																			<!--begin::Option-->
																			<label class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6" data-kt-button="true">
																				<!--begin::Radio-->
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="finance_usage" value="1" checked="checked" />
																				</span>
																				<!--end::Radio-->
																				<!--begin::Info-->
																				<span class="ms-5">
																					<span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Precise Usage</span>
																					<span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
																				</span>
																				<!--end::Info-->
																			</label>
																			<!--end::Option-->
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col-md-6 col-lg-12 col-xxl-6">
																			<!--begin::Option-->
																			<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
																				<!--begin::Radio-->
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="finance_usage" value="2" />
																				</span>
																				<!--end::Radio-->
																				<!--begin::Info-->
																				<span class="ms-5">
																					<span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Extreme Usage</span>
																					<span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
																				</span>
																				<!--end::Info-->
																			</label>
																			<!--end::Option-->
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Row-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-15">
																	<!--begin::Wrapper-->
																	<div class="d-flex flex-stack">
																		<!--begin::Label-->
																		<div class="me-5">
																			<label class="fs-6 fw-bold">Allow Changes in Budget</label>
																			<div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
																		</div>
																		<!--end::Label-->
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="1" name="finance_allow" checked="checked" />
																			<span class="form-check-label fw-bold text-muted">Allowed</span>
																		</label>
																		<!--end::Switch-->
																	</div>
																	<!--end::Wrapper-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex flex-stack">
																	<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="finance-previous">Project Settings</button>
																	<button type="button" class="btn btn-lg btn-primary" data-kt-element="finance-next">
																		<span class="indicator-label">Build Team</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Budget-->
														<!--begin::Complete-->
														<div data-kt-stepper-element="content">
															<!--begin::Wrapper-->
															<div class="w-100">
																<!--begin::Heading-->
																<div class="mb-13">
																	<!--begin::Title-->
																	<h2 class="mb-3">Deal Created!</h2>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="text-muted fw-bold fs-5">If you need more info, please check out
																	<a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
																	<!--end::Description-->
																</div>
																<!--end::Heading-->
																<!--begin::Actions-->
																<div class="d-flex flex-center pb-20">
																	<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Deal</button>
																	<a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Deal</a>
																</div>
																<!--end::Actions-->
																<!--begin::Illustration-->
																<div class="text-center px-4">
																	<img src="<?php echo $domain ; ?>assets/media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-300px" />
																</div>
																<!--end::Illustration-->
															</div>
														</div>
														<!--end::Complete-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Stepper-->
											</div>
											<!--begin::Modal body-->
										</div>
									</div>
								</div>
								<!--end::Modal - Offer A Deal-->
								<!--end::Modals-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>

		<?php include "inc-footer.php"; ?>