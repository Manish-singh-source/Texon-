<!DOCTYPE html>
<html lang="en" data-theme="light" data-sidebar="darkgray" data-color="primary" data-topbar="white" data-layout="default" data-topbarcolor="white" data-card="bordered" data-size="default" data-width="fluid" data-loader="enable" style="--sidebar-rgb: 0, 0, 0; --topbarcolor-rgb: 0, 31, 213;">
<head>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard | Texon CRM</title><meta name="author" content="Technofra Technologies">
	<meta name="robots" content="index, follow">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicon.png')}}">

	<!-- Favicon -->
	<link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

	<!-- Theme Script js -->
	<script src="{{asset('assets/js/theme-script.js')}}"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Feather CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/icons/feather/feather.css')}}">

	 <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap5.min.css')}}">

	<!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/tabler-icons/tabler-icons.min.css')}}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-lite.min.css')}}">

	<!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">

	<!-- Color Picker Css -->
	<link rel="stylesheet" href="{{asset('assets/plugins/flatpickr/flatpickr.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/%40simonwep/pickr/themes/nano.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-papZfPssX++m0C1pR6MFhJr8Gc6S5k+lwF7Rtpr2HlmSXEJ9u+5i6T5n5a9V6k6rX+XsZlT6Qgk6Y4+R+QmS6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
</head>

<body>

	{{-- <div id="global-loader">
		<div class="page-loader"></div>
	</div> --}}

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">
			<div class="main-header">

				<div class="header-left">
					<a href="{{route('index')}}" class="logo">
						<img src="{{asset('assets/img/logo.png')}}" alt="Logo">
					</a>
					<a href="{{route('index')}}" class="dark-logo">
						<img src="{{asset('assets/img/logo.png')}}" alt="Logo">
					</a>
				</div>

				<a id="mobile_btn" class="mobile_btn" href="#sidebar">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>

				<div class="header-user">
					<div class="nav user-menu nav-list">

						<div class="me-auto d-flex align-items-center" id="header-search">
							<a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-1">
								<i class="ti ti-arrow-bar-to-left"></i>
							</a>
							<!-- Search -->
							{{-- <div class="input-group input-group-flat d-inline-flex me-1">
								<span class="input-icon-addon">
									<i class="ti ti-search"></i>
								</span>
								<input type="text" class="form-control" placeholder="Search in HRMS">
								<span class="input-group-text">
									<kbd>CTRL + / </kbd>
								</span>
							</div> --}}
							<!-- /Search -->
							{{-- <a href="profile-settings.html" class="btn btn-menubar">
								<i class="ti ti-settings-cog"></i>
							</a>	 --}}
						</div>

						<!-- Horizontal Single -->
						<div class="sidebar sidebar-horizontal" id="horizontal-single">
							<div class="sidebar-menu">
								<div class="main-menu">
									<ul class="nav-menu">
										<li class="menu-title">
											<span>Main</span>
										</li>
										<li class="submenu">
											<a href="#" class="active">
												<i class="ti ti-smart-home"></i><span>Dashboard</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="{{route('index')}}" class="active">Admin Dashboard</a></li>
												<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
												<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
												<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-user-star"></i><span>Super Admin</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="dashboard.html">Dashboard</a></li>
												<li><a href="companies.html">Companies</a></li>
												<li><a href="subscription.html">Subscriptions</a></li>
												<li><a href="packages.html">Packages</a></li>
												<li><a href="domain.html">Domain</a></li>
												<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-layout-grid-add"></i><span>Applications</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="chat.html">Chat</a></li>
												<li class="submenu submenu-two">
													<a href="call.html">Calls<span
															class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="voice-call.html">Voice Call</a></li>
														<li><a href="video-call.html">Video Call</a></li>
														<li><a href="outgoing-call.html">Outgoing Call</a></li>
														<li><a href="incoming-call.html">Incoming Call</a></li>
														<li><a href="call-history.html">Call History</a></li>
													</ul>
												</li>
												<li><a href="calendar.html">Calendar</a></li>
												<li><a href="email.html">Email</a></li>
												<li><a href="todo.html">To Do</a></li>
												<li><a href="notes.html">Notes</a></li>
												<li><a href="file-manager.html">File Manager</a></li>
												<li><a href="kanban-view.html">Kanban</a></li>
												<li><a href="invoices.html">Invoices</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-layout-board-split"></i><span>Layouts</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="layout-horizontal.html">
														<span>Horizontal</span>
													</a>
												</li>
												<li>
													<a href="layout-detached.html">
														<span>Detached</span>
													</a>
												</li>
												<li>
													<a href="layout-modern.html">
														<span>Modern</span>
													</a>
												</li>
												<li>
													<a href="layout-two-column.html">
														<span>Two Column </span>
													</a>
												</li>
												<li>
													<a href="layout-hovered.html">
														<span>Hovered</span>
													</a>
												</li>
												<li>
													<a href="layout-box.html">
														<span>Boxed</span>
													</a>
												</li>
												<li>
													<a href="layout-horizontal-single.html">
														<span>Horizontal Single</span>
													</a>
												</li>
												<li>
													<a href="layout-horizontal-overlay.html">
														<span>Horizontal Overlay</span>
													</a>
												</li>
												<li>
													<a href="layout-horizontal-box.html">
														<span>Horizontal Box</span>
													</a>
												</li>
												<li>
													<a href="layout-horizontal-sidemenu.html">
														<span>Menu Aside</span>
													</a>
												</li>
												<li>
													<a href="layout-vertical-transparent.html">
														<span>Transparent</span>
													</a>
												</li>
												<li>
													<a href="layout-without-header.html">
														<span>Without Header</span>
													</a>
												</li>
												<li>
													<a href="layout-rtl.html">
														<span>RTL</span>
													</a>
												</li>
												<li>
													<a href="layout-dark.html">
														<span>Dark</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-user-star"></i><span>Projects</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="clients-grid.html"><span>Clients</span>
													</a>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Projects</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="projects-grid.html">Projects</a></li>
														<li><a href="tasks.html">Tasks</a></li>
														<li><a href="task-board.html">Task Board</a></li>
													</ul>
												</li>		
												<li class="submenu">
													<a href="call.html">Crm<span class="menu-arrow"></span></a>
													<ul>
														<li><a href="contacts-grid.html"><span>Contacts</span></a></li>
														<li><a href="companies-grid.html"><span>Companies</span></a></li>
														<li><a href="deals-grid.html"><span>Deals</span></a></li>
														<li><a href="leads-grid.html"><span>Leads</span></a></li>
														<li><a href="pipeline.html"><span>Pipeline</span></a></li>
														<li><a href="analytics.html"><span>Analytics</span></a></li>
														<li><a href="activity.html"><span>Activities</span></a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Employees</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="employees.html">Employee Lists</a></li>
														<li><a href="employees-grid.html">Employee Grid</a></li>
														<li><a href="employee-details.html">Employee Details</a></li>
														<li><a href="departments.html">Departments</a></li>
														<li><a href="designations.html">Designations</a></li>
														<li><a href="policy.html">Policies</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Tickets</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="tickets.html">Tickets</a></li>
														<li><a href="ticket-details.html">Ticket Details</a></li>
													</ul>
												</li>
												<li><a href="holidays.html"><span>Holidays</span></a></li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Attendance</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li class="submenu">
															<a href="javascript:void(0);">Leaves<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="leaves.html">Leaves (Admin)</a></li>
																<li><a href="leaves-employee.html">Leave (Employee)</a></li>
																<li><a href="leave-settings.html">Leave Settings</a></li>												
															</ul>												
														</li>
														<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
														<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
														<li><a href="timesheets.html">Timesheets</a></li>
														<li><a href="schedule-timing.html">Shift & Schedule</a></li>
														<li><a href="overtime.html">Overtime</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Performance</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="performance-indicator.html">Performance Indicator</a></li>
														<li><a href="performance-review.html">Performance Review</a></li>
														<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
														<li><a href="goal-tracking.html">Goal List</a></li>
														<li><a href="goal-type.html">Goal Type</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Training</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="training.html">Training List</a></li>
														<li><a href="trainers.html">Trainers</a></li>
														<li><a href="training-type.html">Training Type</a></li>
													</ul>
												</li>
												<li><a href="promotion.html"><span>Promotion</span></a></li>
												<li><a href="resignation.html"><span>Resignation</span></a></li>
												<li><a href="termination.html"><span>Termination</span></a></li>														
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-user-star"></i><span>Administration</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Sales</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="estimates.html">Estimates</a></li>
														<li><a href="invoices.html">Invoices</a></li>
														<li><a href="payments.html">Payments</a></li>
														<li><a href="expenses.html">Expenses</a></li>
														<li><a href="provident-fund.html">Provident Fund</a></li>
														<li><a href="taxes.html">Taxes</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Accounting</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="categories.html">Categories</a></li>
														<li><a href="budgets.html">Budgets</a></li>
														<li><a href="budget-expenses.html">Budget Expenses</a></li>
														<li><a href="budget-revenues.html">Budget Revenues</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Payroll</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="employee-salary.html">Employee Salary</a></li>
														<li><a href="payslip.html">Payslip</a></li>
														<li><a href="payroll.html">Payroll Items</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Assets</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="assets.html">Assets</a></li>
														<li><a href="asset-categories.html">Asset Categories</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Help & Supports</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="knowledgebase.html">Knowledge Base</a></li>
														<li><a href="activity.html">Activities</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>User Management</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="users.html">Users</a></li>
														<li><a href="roles-permissions.html">Roles & Permissions</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Reports</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li><a href="expenses-report.html">Expense Report</a></li>
														<li><a href="invoice-report.html">Invoice Report</a></li>
														<li><a href="payment-report.html">Payment Report</a></li>
														<li><a href="project-report.html">Project Report</a></li>
														<li><a href="task-report.html">Task Report</a></li>
														<li><a href="user-report.html">User Report</a></li>
														<li><a href="employee-report.html">Employee Report</a></li>
														<li><a href="payslip-report.html">Payslip Report</a></li>
														<li><a href="attendance-report.html">Attendance Report</a></li>
														<li><a href="leave-report.html">Leave Report</a></li>
														<li><a href="daily-report.html">Daily Report</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Settings</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li class="submenu">
															<a href="javascript:void(0);">General Settings<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="profile-settings.html">Profile</a></li>
																<li><a href="security-settings.html">Security</a></li>
																<li><a href="notification-settings.html">Notifications</a></li>
																<li><a href="connected-apps.html">Connected Apps</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Website Settings<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="bussiness-settings.html">Business Settings</a></li>
																<li><a href="seo-settings.html">SEO Settings</a></li>
																<li><a href="localization-settings.html">Localization</a></li>
																<li><a href="prefixes.html">Prefixes</a></li>
																<li><a href="preferences.html">Preferences</a></li>
																<li><a href="performance-appraisal.html">Appearance</a></li>
																<li><a href="language.html">Language</a></li>
																<li><a href="authentication-settings.html">Authentication</a></li>
																<li><a href="ai-settings.html">AI Settings</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">App Settings<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="salary-settings.html">Salary Settings</a></li>
																<li><a href="approval-settings.html">Approval Settings</a></li>
																<li><a href="invoice-settings.html">Invoice Settings</a></li>
																<li><a href="leave-type.html">Leave Type</a></li>
																<li><a href="custom-fields.html">Custom Fields</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">System Settings<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="email-settings.html">Email Settings</a></li>
																<li><a href="email-template.html">Email Templates</a></li>
																<li><a href="sms-settings.html">SMS Settings</a></li>
																<li><a href="sms-template.html">SMS Templates</a></li>
																<li><a href="otp-settings.html">OTP</a></li>
																<li><a href="gdpr.html">GDPR Cookies</a></li>
																<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Financial Settings<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="payment-gateways.html">Payment Gateways</a></li>
																<li><a href="tax-rates.html">Tax Rate</a></li>
																<li><a href="currencies.html">Currencies</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Other Settings<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="custom-css.html">Custom CSS</a></li>
																<li><a href="custom-js.html">Custom JS</a></li>
																<li><a href="cronjob.html">Cronjob</a></li>
																<li><a href="storage-settings.html">Storage</a></li>
																<li><a href="ban-ip-address.html">Ban IP Address</a></li>
																<li><a href="backup.html">Backup</a></li>
																<li><a href="clear-cache.html">Clear Cache</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="#">
												<i class="ti ti-page-break"></i><span>Pages</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="starter.html"><span>Starter</span></a></li>
												<li><a href="profile.html"><span>Profile</span></a></li>
												<li><a href="gallery.html"><span>Gallery</span></a></li>
												<li><a href="search-result.html"><span>Search Results</span></a></li>
												<li><a href="timeline.html"><span>Timeline</span></a></li>
												<li><a href="pricing.html"><span>Pricing</span></a></li>
												<li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
												<li><a href="under-maintenance.html"><span>Under Maintenance</span></a></li>
												<li><a href="under-construction.html"><span>Under Construction</span></a></li>
												<li><a href="api-keys.html"><span>API Keys</span></a></li>
												<li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
												<li><a href="terms-condition.html"><span>Terms & Conditions</span></a></li>
												<li class="submenu">
													<a href="#"><span>Content</span> <span class="menu-arrow"></span></a>
													<ul>
														<li><a href="pages.html">Pages</a></li>
														<li class="submenu">
															<a href="javascript:void(0);">Blogs<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="blogs.html">All Blogs</a></li>
																<li><a href="blog-categories.html">Categories</a></li>
																<li><a href="blog-comments.html">Comments</a></li>
																<li><a href="blog-tags.html">Tags</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Locations<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="countries.html">Countries</a></li>
																<li><a href="states.html">States</a></li>
																<li><a href="cities.html">Cities</a></li>
															</ul>
														</li>
														<li><a href="testimonials.html">Testimonials</a></li>
														<li><a href="faq.html">FAQ’S</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="#">
														<span>Authentication</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li class="submenu">
															<a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="login.html">Cover</a></li>
																<li><a href="login-2.html">Illustration</a></li>
																<li><a href="login-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="register.html">Cover</a></li>
																<li><a href="register-2.html">Illustration</a></li>
																<li><a href="register-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="forgot-password.html">Cover</a></li>
																<li><a href="forgot-password-2.html">Illustration</a></li>
																<li><a href="forgot-password-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Reset Password<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="reset-password.html">Cover</a></li>
																<li><a href="reset-password-2.html">Illustration</a></li>
																<li><a href="reset-password-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">Email Verification<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="email-verification.html">Cover</a></li>
																<li><a href="email-verification-2.html">Illustration</a></li>
																<li><a href="email-verification-3.html">Basic</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">2 Step Verification<span class="menu-arrow"></span></a>
															<ul>
																<li><a href="two-step-verification.html">Cover</a></li>
																<li><a href="two-step-verification-2.html">Illustration</a></li>
																<li><a href="two-step-verification-3.html">Basic</a></li>
															</ul>
														</li>
														<li><a href="lock-screen.html">Lock Screen</a></li>
														<li><a href="error-404.html">404 Error</a></li>
														<li><a href="error-500.html">500 Error</a></li>
													</ul>
												</li>
												<li class="submenu">
													<a href="#">
														<span>UI Interface</span>
														<span class="menu-arrow"></span>
													</a>
													<ul>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-hierarchy-2"></i>
																<span>Base UI</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="ui-alerts.html">Alerts</a>
																</li>
																<li>
																	<a href="ui-accordion.html">Accordion</a>
																</li>
																<li>
																	<a href="ui-avatar.html">Avatar</a>
																</li>
																<li>
																	<a href="ui-badges.html">Badges</a>
																</li>
																<li>
																	<a href="ui-borders.html">Border</a>
																</li>
																<li>
																	<a href="ui-buttons.html">Buttons</a>
																</li>
																<li>
																	<a href="ui-buttons-group.html">Button Group</a>
																</li>
																<li>
																	<a href="ui-breadcrumb.html">Breadcrumb</a>
																</li>
																<li>
																	<a href="ui-cards.html">Card</a>
																</li>
																<li>
																	<a href="ui-carousel.html">Carousel</a>
																</li>
																<li>
																	<a href="ui-colors.html">Colors</a>
																</li>
																<li>
																	<a href="ui-dropdowns.html">Dropdowns</a>
																</li>
																<li>
																	<a href="ui-grid.html">Grid</a>
																</li>
																<li>
																	<a href="ui-images.html">Images</a>
																</li>
																<li>
																	<a href="ui-lightbox.html">Lightbox</a>
																</li>
																<li>
																	<a href="ui-media.html">Media</a>
																</li>
																<li>
																	<a href="ui-modals.html">Modals</a>
																</li>
																<li>
																	<a href="ui-offcanvas.html">Offcanvas</a>
																</li>
																<li>
																	<a href="ui-pagination.html">Pagination</a>
																</li>
																<li>
																	<a href="ui-popovers.html">Popovers</a>
																</li>
																<li>
																	<a href="ui-progress.html">Progress</a>
																</li>
																<li>
																	<a href="ui-placeholders.html">Placeholders</a>
																</li>
																<li>
																	<a href="ui-spinner.html">Spinner</a>
																</li>
																<li>
																	<a href="ui-sweetalerts.html">Sweet Alerts</a>
																</li>
																<li>
																	<a href="ui-nav-tabs.html">Tabs</a>
																</li>
																<li>
																	<a href="ui-toasts.html">Toasts</a>
																</li>
																<li>
																	<a href="ui-tooltips.html">Tooltips</a>
																</li>
																<li>
																	<a href="ui-typography.html">Typography</a>
																</li>
																<li>
																	<a href="ui-video.html">Video</a>
																</li>
																<li>
																	<a href="ui-sortable.html">Sortable</a>
																</li>
																<li>
																	<a href="ui-swiperjs.html">Swiperjs</a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-hierarchy-3"></i>
																<span>Advanced UI</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="ui-ribbon.html">Ribbon</a>
																</li>
																<li>
																	<a href="ui-clipboard.html">Clipboard</a>
																</li>
																<li>
																	<a href="ui-drag-drop.html">Drag & Drop</a>
																</li>
																<li>
																	<a href="ui-rangeslider.html">Range Slider</a>
																</li>
																<li>
																	<a href="ui-rating.html">Rating</a>
																</li>
																<li>
																	<a href="ui-text-editor.html">Text Editor</a>
																</li>
																<li>
																	<a href="ui-counter.html">Counter</a>
																</li>
																<li>
																	<a href="ui-scrollbar.html">Scrollbar</a>
																</li>
																<li>
																	<a href="ui-stickynote.html">Sticky Note</a>
																</li>
																<li>
																	<a href="ui-timeline.html">Timeline</a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-input-search"></i>
																<span>Forms</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li class="submenu submenu-two">
																	<a href="javascript:void(0);">Form Elements <span class="menu-arrow inside-submenu"></span>
																	</a>
																	<ul>
																		<li>
																			<a href="form-basic-inputs.html">Basic Inputs</a>
																		</li>
																		<li>
																			<a href="form-checkbox-radios.html">Checkbox & Radios</a>
																		</li>
																		<li>
																			<a href="form-input-groups.html">Input Groups</a>
																		</li>
																		<li>
																			<a href="form-grid-gutters.html">Grid & Gutters</a>
																		</li>
																		<li>
																			<a href="form-select.html">Form Select</a>
																		</li>
																		<li>
																			<a href="form-mask.html">Input Masks</a>
																		</li>
																		<li>
																			<a href="form-fileupload.html">File Uploads</a>
																		</li>
																	</ul>
																</li>
																<li class="submenu submenu-two">
																	<a href="javascript:void(0);">Layouts <span class="menu-arrow inside-submenu"></span>
																	</a>
																	<ul>
																		<li>
																			<a href="form-horizontal.html">Horizontal Form</a>
																		</li>
																		<li>
																			<a href="form-vertical.html">Vertical Form</a>
																		</li>
																		<li>
																			<a href="form-floating-labels.html">Floating Labels</a>
																		</li>
																	</ul>
																</li>
																<li>
																	<a href="form-validation.html">Form Validation</a>
																</li>
																
																<li>
																	<a href="form-select2.html">Select2</a>
																</li>
																<li>
																	<a href="form-wizard.html">Form Wizard</a>
																</li>
																<li>
																	<a href="form-pickers.html">Form Pickers</a>
																</li>
																
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-table-plus"></i>
																<span>Tables</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="tables-basic.html">Basic Tables </a>
																</li>
																<li>
																	<a href="data-tables.html">Data Table </a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-chart-line"></i>
																<span>Charts</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="chart-apex.html">Apex Charts</a>
																</li>
																<li>
																	<a href="chart-c3.html">Chart C3</a>
																</li>
																<li>
																	<a href="chart-js.html">Chart Js</a>
																</li>
																<li>
																	<a href="chart-morris.html">Morris Charts</a>
																</li>
																<li>
																	<a href="chart-flot.html">Flot Charts</a>
																</li>
																<li>
																	<a href="chart-peity.html">Peity Charts</a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-icons"></i>
																<span>Icons</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="icon-fontawesome.html">Fontawesome Icons</a>
																</li>
																<li>
																	<a href="icon-tabler.html">Tabler Icons</a>
																</li>
																<li>
																	<a href="icon-bootstrap.html">Bootstrap Icons</a>
																</li>
																<li>
																	<a href="icon-remix.html">Remix Icons</a>
																</li>
																<li>
																	<a href="icon-feather.html">Feather Icons</a>
																</li>
																<li>
																	<a href="icon-ionic.html">Ionic Icons</a>
																</li>
																<li>
																	<a href="icon-material.html">Material Icons</a>
																</li>
																<li>
																	<a href="icon-pe7.html">Pe7 Icons</a>
																</li>
																<li>
																	<a href="icon-simpleline.html">Simpleline Icons</a>
																</li>
																<li>
																	<a href="icon-themify.html">Themify Icons</a>
																</li>
																<li>
																	<a href="icon-weather.html">Weather Icons</a>
																</li>
																<li>
																	<a href="icon-typicon.html">Typicon Icons</a>
																</li>
																<li>
																	<a href="icon-flag.html">Flag Icons</a>
																</li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);">
																<i class="ti ti-table-plus"></i>
																<span>Maps</span>
																<span class="menu-arrow"></span>
															</a>
															<ul>
																<li>
																	<a href="maps-vector.html">Vector</a>
																</li>
																<li>
																	<a href="maps-leaflet.html">Leaflet</a>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<li><a href="#">Documentation</a></li>
												<li><a href="#">Change Log</a></li>
												<li class="submenu">
													<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Multilevel 1</a></li>
														<li class="submenu submenu-two">
															<a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
															<ul>
																<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
																<li class="submenu submenu-two submenu-three">
																	<a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
																	<ul>
																		<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
																		<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
																	</ul>
																</li>
															</ul>
														</li>
														<li><a href="javascript:void(0);">Multilevel 3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Horizontal Single -->

						<div class="d-flex align-items-center">
							<div class="me-1">
								<a href="#" class="btn btn-menubar btnFullscreen">
									<i class="ti ti-maximize"></i>
								</a>
							</div>
							
							{{-- <div class="me-1">
								<a href="email.html" class="btn btn-menubar">
									<i class="ti ti-mail"></i>
								</a>
							</div> --}}
							<div class="me-1 notification_item">
								<a href="#" class="btn btn-menubar position-relative me-1" id="notification_popup"
									data-bs-toggle="dropdown">
									<i class="ti ti-bell"></i>
									@if(isset($unreadEnquiriesCount) && $unreadEnquiriesCount > 0)
										<span class="notification-status-dot"></span>
									@endif
								</a>
								<div class="dropdown-menu dropdown-menu-end notification-dropdown p-4">
									<div class="d-flex align-items-center justify-content-between border-bottom p-0 pb-3 mb-3">
										<h4 class="notification-title">Enquiries ({{ $unreadEnquiriesCount ?? 0 }})</h4>
										<div class="d-flex align-items-center">
											@if(isset($unreadEnquiriesCount) && $unreadEnquiriesCount > 0)
												<a href="#" class="text-primary fs-15 me-3 lh-1" id="markAllAsRead">Mark all as read</a>
											@endif
										</div>
									</div>
									<div class="noti-content">
										<div class="d-flex flex-column">
											@forelse($recentEnquiries ?? [] as $enquiry)
												<div class="border-bottom mb-3 pb-3">
													<a href="{{ route('view-enquiry', $enquiry->id) }}">
														<div class="d-flex">
															<div class="flex-grow-1">
																<p class="mb-1">
																	<strong>Enquiry ID:</strong> {{ $enquiry->enquiry_id }}<br>
																	<strong>Customer:</strong> {{ $enquiry->user_name }}<br>
																	<strong>Product:</strong> {{ $enquiry->product->product_name ?? 'N/A' }}
																</p>
																<span class="text-muted small">{{ $enquiry->time_ago }}</span>
															</div>
														</div>
													</a>
												</div>
											@empty
												<div class="text-center text-muted py-4">
													<i class="ti ti-inbox fs-1 mb-2"></i>
													<p class="mb-0">No enquiries found</p>
												</div>
											@endforelse
										</div>
									</div>
									<div class="d-flex p-0">
										<a href="#" class="btn btn-light w-100 me-2">Cancel</a>
										<a href="{{route('enquiries')}}" class="btn btn-primary w-100">View All Enquiries</a>
									</div>
								</div>
							</div>
							<div class="dropdown profile-dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
									data-bs-toggle="dropdown">
									<span class="avatar avatar-sm online">
										<img src="{{asset('assets/img/profiles/avatar-12.jpg')}}" alt="Img" class="img-fluid rounded-circle">
									</span>
								</a>
								<div class="dropdown-menu shadow-none">
									<div class="card mb-0">
										<div class="card-header">
											<div class="d-flex align-items-center">
												
												<div>
													<h5 class="mb-0">{{ Auth::guard('register')->user()->name }}</h5>
													<p class="fs-12 fw-medium mb-0">{{ Auth::guard('register')->user()->email }}</p>
												</div>
											</div>
										</div>
										
										<div class="card-footer">
											<form method="POST" action="{{ route('logout') }}" class="d-inline">
												@csrf
												<button type="submit" class="dropdown-item d-inline-flex align-items-center p-0 py-2">
													<i class="ti ti-login me-2"></i>Logout
												</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="profile-settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->

			</div>

		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<!-- Logo -->
			<div class="sidebar-logo">
				{{-- <a href="{{route('index')}}" class="logo logo-normal">
					<img src="assets/img/logo.svg" alt="Logo">
				</a> --}}
				<a href="{{route('index')}}" class="logo-small">
					<img src="{{asset('assets/img/favicon.png')}}" alt="Logo">
				</a>
				<a href="{{route('index')}}" class="light-logo">
					<img src="{{asset('assets/img/Logo.png')}}" alt="Logo">
				</a>
			</div>
			<!-- /Logo -->
			<div class="modern-profile p-3 pb-0">
				<div class="text-center rounded bg-light p-3 mb-4 user-profile">
					<div class="avatar avatar-lg online mb-3">
						<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
					</div>
					<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
					<p class="fs-10">System Admin</p>
				</div>
				<div class="sidebar-nav mb-3">
					<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
						<li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
						<li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
						<li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
					</ul>
				</div>
			</div>
			<div class="sidebar-header p-3 pb-0 pt-2">
				<div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
					<div class="avatar avatar-md onlin">
						<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
					</div>
					<div class="text-start sidebar-profile-info ms-2">
						<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
						<p class="fs-10">System Admin</p>
					</div>
				</div>
				<div class="input-group input-group-flat d-inline-flex mb-4">
					<span class="input-icon-addon">
						<i class="ti ti-search"></i>
					</span>
					<input type="text" class="form-control" placeholder="Search in HRMS">
					<span class="input-group-text">
						<kbd>CTRL + / </kbd>
					</span>
				</div>
				<div class="d-flex align-items-center justify-content-between menu-item mb-3">
					<div class="me-3">
						<a href="calendar.html" class="btn btn-menubar">
							<i class="ti ti-layout-grid-remove"></i>
						</a>
					</div>
					<div class="me-3">
						<a href="chat.html" class="btn btn-menubar position-relative">
							<i class="ti ti-brand-hipchat"></i>
							<span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
						</a>
					</div>
					<div class="me-3 notification-item">
						<a href="activity.html" class="btn btn-menubar position-relative me-1">
							<i class="ti ti-bell"></i>
							<span class="notification-status-dot"></span>
						</a>
					</div>
					<div class="me-0">
						<a href="email.html" class="btn btn-menubar">
							<i class="ti ti-message"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title"><span>MAIN MENU</span></li>
						<li>
							<ul>
								<li>
									<a href="{{ route('featured-products') }}">
										<i class="ti ti-apps"></i><span>Featured Products</span>
									</a>
								</li>
								<li>
									<a href="{{route('products')}}">
										<i class="ti ti-apps"></i><span>Products</span>
									</a>
								</li>
								<li>
									<a href="{{route('enquiries')}}">
										<i class="ti ti-message"></i><span>Enquiry</span>
									</a>
								</li>
								<li class="submenu">
								    <a href="javascript:void(0);">
								        <i class="ti ti-photo"></i><span>Banner</span>
								        <span class="menu-arrow"></span>
								    </a>
								    <ul>
								        <li><a href="{{route('banners')}}">Website Banner</a></li>
								        <li><a href="{{route('promotional-banners')}}">Promotional Banner</a></li>
								    </ul>
								</li>
								<li>
									<a href="{{route('testimonials')}}">
										<i class="ti ti-message"></i><span>Testimonials</span>
									</a>
								</li>
								
								{{-- <li>
									<a href="{{route('customers')}}">
										<i class="ti ti-message"></i><span>Customers</span>
									</a>
								</li> --}}
								<li>
									<a href="{{route('categories')}}">
										<i class="ti ti-message"></i><span>Categories</span>
									</a>
								</li>
								<li>
									<a href="{{route('brands')}}">
										<i class="ti ti-message"></i><span>Brands</span>
									</a>
								</li>
								<li>
									<a href="{{route('presence')}}">
										<i class="ti ti-message"></i><span>Presence</span>
									</a>
								</li>
								<li>
									<a href="{{route('blog')}}">
										<i class="ti ti-message"></i><span>Blogs</span>
									</a>
								</li>
								<li>
									<a href="{{ route('supports') }}">
										<i class="ti ti-message"></i><span>Support</span>
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Horizontal Menu -->
		<div class="sidebar sidebar-horizontal" id="horizontal-menu">
			<div class="sidebar-menu">
				<div class="main-menu">
					<ul class="nav-menu">
						<li class="menu-title">
							<span>Main</span>
						</li>
						<li class="submenu">
							<a href="#"   class="active subdrop">
								<i class="ti ti-smart-home"></i><span>Dashboard</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="{{route('index')}}" class="active">Admin Dashboard</a></li>
								<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
								<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
								<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-user-star"></i><span>Super Admin</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="companies.html">Companies</a></li>
								<li><a href="subscription.html">Subscriptions</a></li>
								<li><a href="packages.html">Packages</a></li>
								<li><a href="domain.html">Domain</a></li>
								<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-layout-grid-add"></i><span>Applications</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="chat.html">Chat</a></li>
								<li class="submenu submenu-two">
									<a href="call.html">Calls<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="voice-call.html">Voice Call</a></li>
										<li><a href="video-call.html">Video Call</a></li>
										<li><a href="outgoing-call.html">Outgoing Call</a></li>
										<li><a href="incoming-call.html">Incoming Call</a></li>
										<li><a href="call-history.html">Call History</a></li>
									</ul>
								</li>
								<li><a href="calendar.html">Calendar</a></li>
								<li><a href="email.html">Email</a></li>
								<li><a href="todo.html">To Do</a></li>
								<li><a href="notes.html">Notes</a></li>
								<li><a href="file-manager.html">File Manager</a></li>
								<li><a href="kanban-view.html">Kanban</a></li>
								<li><a href="invoices.html">Invoices</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-layout-board-split"></i><span>Layouts</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li>
									<a href="layout-horizontal.html">
										<span>Horizontal</span>
									</a>
								</li>
								<li>
									<a href="layout-detached.html">
										<span>Detached</span>
									</a>
								</li>
								<li>
									<a href="layout-modern.html">
										<span>Modern</span>
									</a>
								</li>
								<li>
									<a href="layout-two-column.html">
										<span>Two Column </span>
									</a>
								</li>
								<li>
									<a href="layout-hovered.html">
										<span>Hovered</span>
									</a>
								</li>
								<li>
									<a href="layout-box.html">
										<span>Boxed</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-single.html">
										<span>Horizontal Single</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-overlay.html">
										<span>Horizontal Overlay</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-box.html">
										<span>Horizontal Box</span>
									</a>
								</li>
								<li>
									<a href="layout-horizontal-sidemenu.html">
										<span>Menu Aside</span>
									</a>
								</li>
								<li>
									<a href="layout-vertical-transparent.html">
										<span>Transparent</span>
									</a>
								</li>
								<li>
									<a href="layout-without-header.html">
										<span>Without Header</span>
									</a>
								</li>
								<li>
									<a href="layout-rtl.html">
										<span>RTL</span>
									</a>
								</li>
								<li>
									<a href="layout-dark.html">
										<span>Dark</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-user-star"></i><span>Projects</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li>
									<a href="clients-grid.html"><span>Clients</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Projects</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="projects-grid.html">Projects</a></li>
										<li><a href="tasks.html">Tasks</a></li>
										<li><a href="task-board.html">Task Board</a></li>
									</ul>
								</li>		
								<li class="submenu">
									<a href="call.html">Crm<span class="menu-arrow"></span></a>
									<ul>
										<li><a href="contacts-grid.html"><span>Contacts</span></a></li>
										<li><a href="companies-grid.html"><span>Companies</span></a></li>
										<li><a href="deals-grid.html"><span>Deals</span></a></li>
										<li><a href="leads-grid.html"><span>Leads</span></a></li>
										<li><a href="pipeline.html"><span>Pipeline</span></a></li>
										<li><a href="analytics.html"><span>Analytics</span></a></li>
										<li><a href="activity.html"><span>Activities</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Employees</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employees.html">Employee Lists</a></li>
										<li><a href="employees-grid.html">Employee Grid</a></li>
										<li><a href="employee-details.html">Employee Details</a></li>
										<li><a href="departments.html">Departments</a></li>
										<li><a href="designations.html">Designations</a></li>
										<li><a href="policy.html">Policies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Tickets</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="tickets.html">Tickets</a></li>
										<li><a href="ticket-details.html">Ticket Details</a></li>
									</ul>
								</li>
								<li><a href="holidays.html"><span>Holidays</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Attendance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);">Leaves<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="leaves.html">Leaves (Admin)</a></li>
												<li><a href="leaves-employee.html">Leave (Employee)</a></li>
												<li><a href="leave-settings.html">Leave Settings</a></li>												
											</ul>												
										</li>
										<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
										<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
										<li><a href="timesheets.html">Timesheets</a></li>
										<li><a href="schedule-timing.html">Shift & Schedule</a></li>
										<li><a href="overtime.html">Overtime</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Performance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="performance-indicator.html">Performance Indicator</a></li>
										<li><a href="performance-review.html">Performance Review</a></li>
										<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
										<li><a href="goal-tracking.html">Goal List</a></li>
										<li><a href="goal-type.html">Goal Type</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Training</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="training.html">Training List</a></li>
										<li><a href="trainers.html">Trainers</a></li>
										<li><a href="training-type.html">Training Type</a></li>
									</ul>
								</li>
								<li><a href="promotion.html"><span>Promotion</span></a></li>
								<li><a href="resignation.html"><span>Resignation</span></a></li>
								<li><a href="termination.html"><span>Termination</span></a></li>														
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-user-star"></i><span>Administration</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Sales</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="estimates.html">Estimates</a></li>
										<li><a href="invoices.html">Invoices</a></li>
										<li><a href="payments.html">Payments</a></li>
										<li><a href="expenses.html">Expenses</a></li>
										<li><a href="provident-fund.html">Provident Fund</a></li>
										<li><a href="taxes.html">Taxes</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Accounting</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="categories.html">Categories</a></li>
										<li><a href="budgets.html">Budgets</a></li>
										<li><a href="budget-expenses.html">Budget Expenses</a></li>
										<li><a href="budget-revenues.html">Budget Revenues</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Payroll</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employee-salary.html">Employee Salary</a></li>
										<li><a href="payslip.html">Payslip</a></li>
										<li><a href="payroll.html">Payroll Items</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Assets</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="assets.html">Assets</a></li>
										<li><a href="asset-categories.html">Asset Categories</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Help & Supports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="knowledgebase.html">Knowledge Base</a></li>
										<li><a href="activity.html">Activities</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>User Management</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="users.html">Users</a></li>
										<li><a href="roles-permissions.html">Roles & Permissions</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Reports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="expenses-report.html">Expense Report</a></li>
										<li><a href="invoice-report.html">Invoice Report</a></li>
										<li><a href="payment-report.html">Payment Report</a></li>
										<li><a href="project-report.html">Project Report</a></li>
										<li><a href="task-report.html">Task Report</a></li>
										<li><a href="user-report.html">User Report</a></li>
										<li><a href="employee-report.html">Employee Report</a></li>
										<li><a href="payslip-report.html">Payslip Report</a></li>
										<li><a href="attendance-report.html">Attendance Report</a></li>
										<li><a href="leave-report.html">Leave Report</a></li>
										<li><a href="daily-report.html">Daily Report</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Settings</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);">General Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="profile-settings.html">Profile</a></li>
												<li><a href="security-settings.html">Security</a></li>
												<li><a href="notification-settings.html">Notifications</a></li>
												<li><a href="connected-apps.html">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Website Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="bussiness-settings.html">Business Settings</a></li>
												<li><a href="seo-settings.html">SEO Settings</a></li>
												<li><a href="localization-settings.html">Localization</a></li>
												<li><a href="prefixes.html">Prefixes</a></li>
												<li><a href="preferences.html">Preferences</a></li>
												<li><a href="performance-appraisal.html">Appearance</a></li>
												<li><a href="language.html">Language</a></li>
												<li><a href="authentication-settings.html">Authentication</a></li>
												<li><a href="ai-settings.html">AI Settings</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">App Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="salary-settings.html">Salary Settings</a></li>
												<li><a href="approval-settings.html">Approval Settings</a></li>
												<li><a href="invoice-settings.html">Invoice Settings</a></li>
												<li><a href="leave-type.html">Leave Type</a></li>
												<li><a href="custom-fields.html">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">System Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-settings.html">Email Settings</a></li>
												<li><a href="email-template.html">Email Templates</a></li>
												<li><a href="sms-settings.html">SMS Settings</a></li>
												<li><a href="sms-template.html">SMS Templates</a></li>
												<li><a href="otp-settings.html">OTP</a></li>
												<li><a href="gdpr.html">GDPR Cookies</a></li>
												<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Financial Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="payment-gateways.html">Payment Gateways</a></li>
												<li><a href="tax-rates.html">Tax Rate</a></li>
												<li><a href="currencies.html">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Other Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="custom-css.html">Custom CSS</a></li>
												<li><a href="custom-js.html">Custom JS</a></li>
												<li><a href="cronjob.html">Cronjob</a></li>
												<li><a href="storage-settings.html">Storage</a></li>
												<li><a href="ban-ip-address.html">Ban IP Address</a></li>
												<li><a href="backup.html">Backup</a></li>
												<li><a href="clear-cache.html">Clear Cache</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-page-break"></i><span>Pages</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="starter.html"><span>Starter</span></a></li>
								<li><a href="profile.html"><span>Profile</span></a></li>
								<li><a href="gallery.html"><span>Gallery</span></a></li>
								<li><a href="search-result.html"><span>Search Results</span></a></li>
								<li><a href="timeline.html"><span>Timeline</span></a></li>
								<li><a href="pricing.html"><span>Pricing</span></a></li>
								<li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
								<li><a href="under-maintenance.html"><span>Under Maintenance</span></a></li>
								<li><a href="under-construction.html"><span>Under Construction</span></a></li>
								<li><a href="api-keys.html"><span>API Keys</span></a></li>
								<li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
								<li><a href="terms-condition.html"><span>Terms & Conditions</span></a></li>
								<li class="submenu">
									<a href="#"><span>Content</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="pages.html">Pages</a></li>
										<li class="submenu">
											<a href="javascript:void(0);">Blogs<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="blogs.html">All Blogs</a></li>
												<li><a href="blog-categories.html">Categories</a></li>
												<li><a href="blog-comments.html">Comments</a></li>
												<li><a href="blog-tags.html">Tags</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Locations<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="countries.html">Countries</a></li>
												<li><a href="states.html">States</a></li>
												<li><a href="cities.html">Cities</a></li>
											</ul>
										</li>
										<li><a href="testimonials.html">Testimonials</a></li>
										<li><a href="faq.html">FAQ’S</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<span>Authentication</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="login.html">Cover</a></li>
												<li><a href="login-2.html">Illustration</a></li>
												<li><a href="login-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="register.html">Cover</a></li>
												<li><a href="register-2.html">Illustration</a></li>
												<li><a href="register-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="forgot-password.html">Cover</a></li>
												<li><a href="forgot-password-2.html">Illustration</a></li>
												<li><a href="forgot-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Reset Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="reset-password.html">Cover</a></li>
												<li><a href="reset-password-2.html">Illustration</a></li>
												<li><a href="reset-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Email Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-verification.html">Cover</a></li>
												<li><a href="email-verification-2.html">Illustration</a></li>
												<li><a href="email-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">2 Step Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="two-step-verification.html">Cover</a></li>
												<li><a href="two-step-verification-2.html">Illustration</a></li>
												<li><a href="two-step-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li><a href="lock-screen.html">Lock Screen</a></li>
										<li><a href="error-404.html">404 Error</a></li>
										<li><a href="error-500.html">500 Error</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<span>UI Interface</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-hierarchy-2"></i>
												<span>Base UI</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="ui-alerts.html">Alerts</a>
												</li>
												<li>
													<a href="ui-accordion.html">Accordion</a>
												</li>
												<li>
													<a href="ui-avatar.html">Avatar</a>
												</li>
												<li>
													<a href="ui-badges.html">Badges</a>
												</li>
												<li>
													<a href="ui-borders.html">Border</a>
												</li>
												<li>
													<a href="ui-buttons.html">Buttons</a>
												</li>
												<li>
													<a href="ui-buttons-group.html">Button Group</a>
												</li>
												<li>
													<a href="ui-breadcrumb.html">Breadcrumb</a>
												</li>
												<li>
													<a href="ui-cards.html">Card</a>
												</li>
												<li>
													<a href="ui-carousel.html">Carousel</a>
												</li>
												<li>
													<a href="ui-colors.html">Colors</a>
												</li>
												<li>
													<a href="ui-dropdowns.html">Dropdowns</a>
												</li>
												<li>
													<a href="ui-grid.html">Grid</a>
												</li>
												<li>
													<a href="ui-images.html">Images</a>
												</li>
												<li>
													<a href="ui-lightbox.html">Lightbox</a>
												</li>
												<li>
													<a href="ui-media.html">Media</a>
												</li>
												<li>
													<a href="ui-modals.html">Modals</a>
												</li>
												<li>
													<a href="ui-offcanvas.html">Offcanvas</a>
												</li>
												<li>
													<a href="ui-pagination.html">Pagination</a>
												</li>
												<li>
													<a href="ui-popovers.html">Popovers</a>
												</li>
												<li>
													<a href="ui-progress.html">Progress</a>
												</li>
												<li>
													<a href="ui-placeholders.html">Placeholders</a>
												</li>
												<li>
													<a href="ui-spinner.html">Spinner</a>
												</li>
												<li>
													<a href="ui-sweetalerts.html">Sweet Alerts</a>
												</li>
												<li>
													<a href="ui-nav-tabs.html">Tabs</a>
												</li>
												<li>
													<a href="ui-toasts.html">Toasts</a>
												</li>
												<li>
													<a href="ui-tooltips.html">Tooltips</a>
												</li>
												<li>
													<a href="ui-typography.html">Typography</a>
												</li>
												<li>
													<a href="ui-video.html">Video</a>
												</li>
												<li>
													<a href="ui-sortable.html">Sortable</a>
												</li>
												<li>
													<a href="ui-swiperjs.html">Swiperjs</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-hierarchy-3"></i>
												<span>Advanced UI</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="ui-ribbon.html">Ribbon</a>
												</li>
												<li>
													<a href="ui-clipboard.html">Clipboard</a>
												</li>
												<li>
													<a href="ui-drag-drop.html">Drag & Drop</a>
												</li>
												<li>
													<a href="ui-rangeslider.html">Range Slider</a>
												</li>
												<li>
													<a href="ui-rating.html">Rating</a>
												</li>
												<li>
													<a href="ui-text-editor.html">Text Editor</a>
												</li>
												<li>
													<a href="ui-counter.html">Counter</a>
												</li>
												<li>
													<a href="ui-scrollbar.html">Scrollbar</a>
												</li>
												<li>
													<a href="ui-stickynote.html">Sticky Note</a>
												</li>
												<li>
													<a href="ui-timeline.html">Timeline</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-input-search"></i>
												<span>Forms</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Form Elements <span class="menu-arrow inside-submenu"></span>
													</a>
													<ul>
														<li>
															<a href="form-basic-inputs.html">Basic Inputs</a>
														</li>
														<li>
															<a href="form-checkbox-radios.html">Checkbox & Radios</a>
														</li>
														<li>
															<a href="form-input-groups.html">Input Groups</a>
														</li>
														<li>
															<a href="form-grid-gutters.html">Grid & Gutters</a>
														</li>
														<li>
															<a href="form-select.html">Form Select</a>
														</li>
														<li>
															<a href="form-mask.html">Input Masks</a>
														</li>
														<li>
															<a href="form-fileupload.html">File Uploads</a>
														</li>
													</ul>
												</li>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Layouts <span class="menu-arrow inside-submenu"></span>
													</a>
													<ul>
														<li>
															<a href="form-horizontal.html">Horizontal Form</a>
														</li>
														<li>
															<a href="form-vertical.html">Vertical Form</a>
														</li>
														<li>
															<a href="form-floating-labels.html">Floating Labels</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="form-validation.html">Form Validation</a>
												</li>
												<li>
													<a href="form-select2.html">Select2</a>
												</li>
												<li>
													<a href="form-wizard.html">Form Wizard</a>
												</li>
												<li>
													<a href="form-pickers.html">Form Pickers</a>
												</li>
												
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-table-plus"></i>
												<span>Tables</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="tables-basic.html">Basic Tables </a>
												</li>
												<li>
													<a href="data-tables.html">Data Table </a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-chart-line"></i>
												<span>Charts</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="chart-apex.html">Apex Charts</a>
												</li>
												<li>
													<a href="chart-c3.html">Chart C3</a>
												</li>
												<li>
													<a href="chart-js.html">Chart Js</a>
												</li>
												<li>
													<a href="chart-morris.html">Morris Charts</a>
												</li>
												<li>
													<a href="chart-flot.html">Flot Charts</a>
												</li>
												<li>
													<a href="chart-peity.html">Peity Charts</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-icons"></i>
												<span>Icons</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="icon-fontawesome.html">Fontawesome Icons</a>
												</li>
												<li>
													<a href="icon-tabler.html">Tabler Icons</a>
												</li>
												<li>
													<a href="icon-bootstrap.html">Bootstrap Icons</a>
												</li>
												<li>
													<a href="icon-remix.html">Remix Icons</a>
												</li>
												<li>
													<a href="icon-feather.html">Feather Icons</a>
												</li>
												<li>
													<a href="icon-ionic.html">Ionic Icons</a>
												</li>
												<li>
													<a href="icon-material.html">Material Icons</a>
												</li>
												<li>
													<a href="icon-pe7.html">Pe7 Icons</a>
												</li>
												<li>
													<a href="icon-simpleline.html">Simpleline Icons</a>
												</li>
												<li>
													<a href="icon-themify.html">Themify Icons</a>
												</li>
												<li>
													<a href="icon-weather.html">Weather Icons</a>
												</li>
												<li>
													<a href="icon-typicon.html">Typicon Icons</a>
												</li>
												<li>
													<a href="icon-flag.html">Flag Icons</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-table-plus"></i>
												<span>Maps</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="maps-vector.html">Vector</a>
												</li>
												<li>
													<a href="maps-leaflet.html">Leaflet</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Documentation</a></li>
								<li><a href="#">Change Log</a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Multilevel 1</a></li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
												<li class="submenu submenu-two submenu-three">
													<a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
														<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="javascript:void(0);">Multilevel 3</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<div class="d-xl-flex align-items-center d-none">
						<a href="#" class="me-3 avatar avatar-sm">
							<img src="assets/img/profiles/avatar-07.jpg" alt="profile" class="rounded-circle">
						</a>
						<a href="#" class="btn btn-icon btn-sm rounded-circle mode-toggle">
							<i class="ti ti-sun"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Horizontal Menu -->

		<!-- Two Col Sidebar -->
		<div class="two-col-sidebar" id="two-col-sidebar">
			<div class="sidebar sidebar-twocol">
				<div class="twocol-mini">
					<a href="{{route('index')}}" class="logo-small">
						<img src="assets/img/favicon.png" alt="Logo">
					</a>
					<div class="sidebar-left slimscroll">
						<div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist" aria-orientation="vertical">
							<a href="#" class="nav-link active" title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
								<i class="ti ti-smart-home"></i>
							</a>
							<a href="#" class="nav-link" title="Apps" data-bs-toggle="tab" data-bs-target="#application">
								<i class="ti ti-layout-grid-add"></i>
							</a>
							<a href="#" class="nav-link" title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
								<i class="ti ti-user-star"></i>
							</a>
							<a href="#" class="nav-link" title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
								<i class="ti ti-layout-board-split"></i>
							</a>
							<a href="#" class="nav-link" title="Projects" data-bs-toggle="tab" data-bs-target="#projects">
								<i class="ti ti-users-group"></i>
							</a>
							<a href="#" class="nav-link" title="Crm" data-bs-toggle="tab" data-bs-target="#crm">
								<i class="ti ti-user-shield"></i>
							</a>
							<a href="#" class="nav-link" title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
								<i class="ti ti-user"></i>
							</a>
							<a href="#" class="nav-link" title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
								<i class="ti ti-shopping-cart-dollar"></i>
							</a>
							<a href="#" class="nav-link" title="Administration" data-bs-toggle="tab" data-bs-target="#administration">
								<i class="ti ti-cash"></i>
							</a>
							<a href="#" class="nav-link" title="Content" data-bs-toggle="tab" data-bs-target="#content">
								<i class="ti ti-license"></i>
							</a>
							<a href="#" class="nav-link" title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
								<i class="ti ti-page-break"></i>
							</a>
							<a href="#" class="nav-link" title="Authentication" data-bs-toggle="tab"
								data-bs-target="#authentication">
								<i class="ti ti-lock-check"></i>
							</a>
							<a href="#" class="nav-link " title="UI Elements" data-bs-toggle="tab"
								data-bs-target="#ui-elements">
								<i class="ti ti-ux-circle"></i>
							</a>
							<a href="#" class="nav-link" title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
								<i class="ti ti-vector-triangle"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="sidebar-right">
					<div class="sidebar-logo mb-4">
						<a href="{{route('index')}}" class="logo logo-normal">
							<img src="{{asset('assets/img/logo.png')}}" alt="Logo">
						</a>
						<a href="{{route('index')}}" class="dark-logo">
							<img src="{{asset('assets/img/logo.png')}}" alt="Logo">
						</a>
					</div>
					<div class="sidebar-scroll">
						<h6 class="mb-3">Welcome to SmartHR</h6>
						<div class="text-center rounded bg-light p-3 mb-4">
							<div class="avatar avatar-lg online mb-3">
								<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
							</div>
							<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
							<p class="fs-10">System Admin</p>
						</div>
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="dashboard">
								<ul>
									<li class="menu-title"><span>MAIN MENU</span></li>
									<li><a href="{{route('index')}}" class="active">Admin Dashboard</a></li>
									<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
									<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
									<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="application">
								<ul>
									<li class="menu-title"><span>APPLICATION</span></li>
									<li><a href="voice-call.html">Voice Call</a></li>
									<li><a href="video-call.html">Video Call</a></li>
									<li><a href="outgoing-call.html">Outgoing Call</a></li>
									<li><a href="incoming-call.html">Incoming Call</a></li>
									<li><a href="call-history.html">Call History</a></li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="email.html">Email</a></li>
									<li><a href="todo.html">To Do</a></li>
									<li><a href="notes.html">Notes</a></li>
									<li><a href="file-manager.html">File Manager</a></li>
									<li><a href="kanban-view.html">Kanban</a></li>
									<li><a href="invoices.html">Invoices</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="super-admin">
								<ul>
									<li class="menu-title"><span>SUPER ADMIN</span></li>
									<li><a href="dashboard.html">Dashboard</a></li>
									<li><a href="companies.html">Companies</a></li>
									<li><a href="subscription.html">Subscriptions</a></li>
									<li><a href="packages.html">Packages</a></li>
									<li><a href="domain.html">Domain</a></li>
									<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="layout">
								<ul>
									<li class="menu-title"><span>LAYOUT</span></li>
									<li><a href="layout-horizontal.html"><span>Horizontal</span></a></li>
									<li><a href="layout-detached.html"><span>Detached</span></a></li>
									<li><a href="layout-modern.html"><span>Modern</span></a></li>
									<li><a href="layout-two-column.html"><span>Two Column </span></a></li>
									<li><a href="layout-hovered.html"><span>Hovered</span></a></li>
									<li><a href="layout-box.html"><span>Boxed</span></a></li>
									<li><a href="layout-horizontal-single.html"><span>Horizontal Single</span></a></li>
									<li><a href="layout-horizontal-overlay.html"><span>Horizontal Overlay</span></a></li>
									<li><a href="layout-horizontal-box.html"><span>Horizontal Box</span></a></li>
									<li><a href="layout-horizontal-sidemenu.html"><span>Menu Aside</span></a></li>
									<li><a href="layout-vertical-transparent.html"><span>Transparent</span></a></li>
									<li><a href="layout-without-header.html"><span>Without Header</span></a></li>
									<li><a href="layout-rtl.html"><span>RTL</span></a></li>
									<li><a href="layout-dark.html"><span>Dark</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="projects">
								<ul>
									<li class="menu-title"><span>PROJECTS</span></li>
									<li><a href="clients-grid.html">Clients</a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Projects</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="projects-grid.html">Projects</a></li>
											<li><a href="tasks.html">Tasks</a></li>
											<li><a href="task-board.html">Task Board</a></li>
										</ul>
									</li>	
								</ul>
							</div>
							<div class="tab-pane fade" id="crm">
								<ul>
									<li class="menu-title"><span>CRM</span></li>
									<li><a href="contacts-grid.html"><span>Contacts</span></a></li>
									<li><a href="companies-grid.html"><span>Companies</span></a></li>
									<li><a href="deals-grid.html"><span>Deals</span></a></li>
									<li><a href="leads-grid.html"><span>Leads</span></a></li>
									<li><a href="pipeline.html"><span>Pipeline</span></a></li>
									<li><a href="analytics.html"><span>Analytics</span></a></li>
									<li><a href="activity.html"><span>Activities</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="hrm">
								<ul>
									<li class="menu-title"><span>HRM</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Employees</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="employees.html">Employee Lists</a></li>
											<li><a href="employees-grid.html">Employee Grid</a></li>
											<li><a href="employee-details.html">Employee Details</a></li>
											<li><a href="departments.html">Departments</a></li>
											<li><a href="designations.html">Designations</a></li>
											<li><a href="policy.html">Policies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Tickets</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="tickets.html">Tickets</a></li>
											<li><a href="ticket-details.html">Ticket Details</a></li>
										</ul>
									</li>
									<li><a href="holidays.html"><span>Holidays</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Attendance</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Leaves<span
														class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="leaves.html">Leaves (Admin)</a></li>
													<li><a href="leaves-employee.html">Leave (Employee)</a></li>
													<li><a href="leave-settings.html">Leave Settings</a></li>												
												</ul>												
											</li>
											<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
											<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
											<li><a href="timesheets.html">Timesheets</a></li>
											<li><a href="schedule-timing.html">Shift & Schedule</a></li>
											<li><a href="overtime.html">Overtime</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Performance</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="performance-indicator.html">Performance Indicator</a></li>
											<li><a href="performance-review.html">Performance Review</a></li>
											<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
											<li><a href="goal-tracking.html">Goal List</a></li>
											<li><a href="goal-type.html">Goal Type</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Training</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="training.html">Training List</a></li>
											<li><a href="trainers.html">Trainers</a></li>
											<li><a href="training-type.html">Training Type</a></li>
										</ul>
									</li>
									<li><a href="promotion.html"><span>Promotion</span></a></li>
									<li><a href="resignation.html"><span>Resignation</span></a></li>
									<li><a href="termination.html"><span>Termination</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="finance">
								<ul>
									<li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Sales</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="estimates.html">Estimates</a></li>
											<li><a href="invoices.html">Invoices</a></li>
											<li><a href="payments.html">Payments</a></li>
											<li><a href="expenses.html">Expenses</a></li>
											<li><a href="provident-fund.html">Provident Fund</a></li>
											<li><a href="taxes.html">Taxes</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Accounting</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="categories.html">Categories</a></li>
											<li><a href="budgets.html">Budgets</a></li>
											<li><a href="budget-expenses.html">Budget Expenses</a></li>
											<li><a href="budget-revenues.html">Budget Revenues</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Payroll</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="employee-salary.html">Employee Salary</a></li>
											<li><a href="payslip.html">Payslip</a></li>
											<li><a href="payroll.html">Payroll Items</a></li>
										</ul>
									</li>									
								</ul>
							</div>
							<div class="tab-pane fade" id="administration">
								<ul>
									<li class="menu-title"><span>ADMINISTRATION</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Assets</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="assets.html">Assets</a></li>
											<li><a href="asset-categories.html">Asset Categories</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Help & Supports</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="knowledgebase.html">Knowledge Base</a></li>
											<li><a href="activity.html">Activities</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>User Management</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="users.html">Users</a></li>
											<li><a href="roles-permissions.html">Roles & Permissions</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Reports</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="expenses-report.html">Expense Report</a></li>
											<li><a href="invoice-report.html">Invoice Report</a></li>
											<li><a href="payment-report.html">Payment Report</a></li>
											<li><a href="project-report.html">Project Report</a></li>
											<li><a href="task-report.html">Task Report</a></li>
											<li><a href="user-report.html">User Report</a></li>
											<li><a href="employee-report.html">Employee Report</a></li>
											<li><a href="payslip-report.html">Payslip Report</a></li>
											<li><a href="attendance-report.html">Attendance Report</a></li>
											<li><a href="leave-report.html">Leave Report</a></li>
											<li><a href="daily-report.html">Daily Report</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											General Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="profile-settings.html">Profile</a></li>
											<li><a href="security-settings.html">Security</a></li>
											<li><a href="notification-settings.html">Notifications</a></li>
											<li><a href="connected-apps.html">Connected Apps</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Website Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="bussiness-settings.html">Business Settings</a></li>
											<li><a href="seo-settings.html">SEO Settings</a></li>
											<li><a href="localization-settings.html">Localization</a></li>
											<li><a href="prefixes.html">Prefixes</a></li>
											<li><a href="preferences.html">Preferences</a></li>
											<li><a href="performance-appraisal.html">Appearance</a></li>
											<li><a href="language.html">Language</a></li>
											<li><a href="authentication-settings.html">Authentication</a></li>
											<li><a href="ai-settings.html">AI Settings</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">App Settings<span class="menu-arrow"></span></a>
										<ul>
											<li><a href="salary-settings.html">Salary Settings</a></li>
											<li><a href="approval-settings.html">Approval Settings</a></li>
											<li><a href="invoice-settings.html">Invoice Settings</a></li>
											<li><a href="leave-type.html">Leave Type</a></li>
											<li><a href="custom-fields.html">Custom Fields</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											System Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="email-settings.html">Email Settings</a></li>
											<li><a href="email-template.html">Email Templates</a></li>
											<li><a href="sms-settings.html">SMS Settings</a></li>
											<li><a href="sms-template.html">SMS Templates</a></li>
											<li><a href="otp-settings.html">OTP</a></li>
											<li><a href="gdpr.html">GDPR Cookies</a></li>
											<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Financial Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="payment-gateways.html">Payment Gateways</a></li>
											<li><a href="tax-rates.html">Tax Rate</a></li>
											<li><a href="currencies.html">Currencies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">Other Settings<span class="menu-arrow"></span></a>
										<ul>
											<li><a href="custom-css.html">Custom CSS</a></li>
											<li><a href="custom-js.html">Custom JS</a></li>
											<li><a href="cronjob.html">Cronjob</a></li>
											<li><a href="storage-settings.html">Storage</a></li>
											<li><a href="ban-ip-address.html">Ban IP Address</a></li>
											<li><a href="backup.html">Backup</a></li>
											<li><a href="clear-cache.html">Clear Cache</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="content">
								<ul>
									<li class="menu-title"><span>CONTENT</span></li>
									<li><a href="pages.html">Pages</a></li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Blogs
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="blogs.html">All Blogs</a></li>
											<li><a href="blog-categories.html">Categories</a></li>
											<li><a href="blog-comments.html">Comments</a></li>
											<li><a href="blog-tags.html">Blog Tags</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Locations
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="countries.html">Countries</a></li>
											<li><a href="states.html">States</a></li>
											<li><a href="cities.html">Cities</a></li>
										</ul>
									</li>
									<li><a href="testimonials.html">Testimonials</a></li>
									<li><a href="faq.html">FAQ’S</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="pages">
								<ul>
									<li class="menu-title"><span>PAGES</span></li>
									<li><a href="starter.html"><span>Starter</span></a></li>
									<li><a href="profile.html"><span>Profile</span></a></li>
									<li><a href="gallery.html"><span>Gallery</span></a></li>
									<li><a href="search-result.html"><span>Search Results</span></a></li>
									<li><a href="timeline.html"><span>Timeline</span></a></li>
									<li><a href="pricing.html"><span>Pricing</span></a></li>
									<li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
									<li><a href="under-maintenance.html"><span>Under Maintenance</span></a></li>
									<li><a href="under-construction.html"><span>Under Construction</span></a></li>
									<li><a href="api-keys.html"><span>API Keys</span></a></li>
									<li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
									<li><a href="terms-condition.html"><span>Terms & Conditions</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="authentication">
								<ul>
									<li class="menu-title"><span>AUTHENTICATION</span></li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Login<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="login.html">Cover</a></li>
											<li><a href="login-2.html">Illustration</a></li>
											<li><a href="login-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Register<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="register.html">Cover</a></li>
											<li><a href="register-2.html">Illustration</a></li>
											<li><a href="register-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Forgot Password<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="forgot-password.html">Cover</a></li>
											<li><a href="forgot-password-2.html">Illustration</a></li>
											<li><a href="forgot-password-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Reset Password<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="reset-password.html">Cover</a></li>
											<li><a href="reset-password-2.html">Illustration</a></li>
											<li><a href="reset-password-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Email Verification<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="email-verification.html">Cover</a></li>
											<li><a href="email-verification-2.html">Illustration</a></li>
											<li><a href="email-verification-3.html">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											2 Step Verification<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="two-step-verification.html">Cover</a></li>
											<li><a href="two-step-verification-2.html">Illustration</a></li>
											<li><a href="two-step-verification-3.html">Basic</a></li>
										</ul>
									</li>
									<li><a href="lock-screen.html">Lock Screen</a></li>
									<li><a href="error-404.html">404 Error</a></li>
									<li><a href="error-500.html">500 Error</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="ui-elements">
								<ul>
									<li class="menu-title"><span>UI INTERFACE</span></li>
									<li class="submenu">
										<a href="javascript:void(0);">Base UI<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="ui-alerts.html">Alerts</a></li>
											<li><a href="ui-accordion.html">Accordion</a></li>
											<li><a href="ui-avatar.html">Avatar</a></li>
											<li><a href="ui-badges.html">Badges</a></li>
											<li><a href="ui-borders.html">Border</a></li>
											<li><a href="ui-buttons.html">Buttons</a></li>
											<li><a href="ui-buttons-group.html">Button Group</a></li>
											<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
											<li><a href="ui-cards.html">Card</a></li>
											<li><a href="ui-carousel.html">Carousel</a></li>
											<li><a href="ui-colors.html">Colors</a></li>
											<li><a href="ui-dropdowns.html">Dropdowns</a></li>
											<li><a href="ui-grid.html">Grid</a></li>
											<li><a href="ui-images.html">Images</a></li>
											<li><a href="ui-lightbox.html">Lightbox</a></li>
											<li><a href="ui-media.html">Media</a></li>
											<li><a href="ui-modals.html">Modals</a></li>
											<li><a href="ui-offcanvas.html">Offcanvas</a></li>
											<li><a href="ui-pagination.html">Pagination</a></li>
											<li><a href="ui-popovers.html">Popovers</a></li>
											<li><a href="ui-progress.html">Progress</a></li>
											<li><a href="ui-placeholders.html">Placeholders</a></li>
											<li><a href="ui-spinner.html">Spinner</a></li>
											<li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
											<li><a href="ui-nav-tabs.html">Tabs</a></li>
											<li><a href="ui-toasts.html">Toasts</a></li>
											<li><a href="ui-tooltips.html">Tooltips</a></li>
											<li><a href="ui-typography.html">Typography</a></li>
											<li><a href="ui-video.html">Video</a></li>
											<li><a href="ui-sortable.html">Sortable</a></li>
											<li><a href="ui-swiperjs.html">Swiperjs</a></li>						
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"> Advanced UI <span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="ui-ribbon.html">Ribbon</a></li>
											<li><a href="ui-clipboard.html">Clipboard</a></li>
											<li><a href="ui-drag-drop.html">Drag & Drop</a></li>
											<li><a href="ui-rangeslider.html">Range Slider</a></li>
											<li><a href="ui-rating.html">Rating</a></li>
											<li><a href="ui-text-editor.html">Text Editor</a></li>
											<li><a href="ui-counter.html">Counter</a></li>
											<li><a href="ui-scrollbar.html">Scrollbar</a></li>
											<li><a href="ui-stickynote.html">Sticky Note</a></li>
											<li><a href="ui-timeline.html">Timeline</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"> Forms <span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
													<li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
													<li><a href="form-input-groups.html">Input Groups</a></li>
													<li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
													<li><a href="form-select.html">Form Select</a></li>
													<li><a href="form-mask.html">Input Masks</a></li>
													<li><a href="form-fileupload.html">File Uploads</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-horizontal.html">Horizontal Form</a></li>
													<li><a href="form-vertical.html">Vertical Form</a></li>
													<li><a href="form-floating-labels.html">Floating Labels</a></li>
												</ul>
											</li>
											<li><a href="form-validation.html">Form Validation</a></li>
											<li><a href="form-select2.html">Select2</a></li>
											<li><a href="form-wizard.html">Form Wizard</a></li>
											<li><a href="form-pickers.html">Form Picker</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">Tables <span class="menu-arrow"></span></a>
										<ul>
											<li><a href="tables-basic.html">Basic Tables </a></li>
											<li><a href="data-tables.html">Data Table </a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">Charts<span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="chart-apex.html">Apex Charts</a></li>
											<li><a href="chart-c3.html">Chart C3</a></li>
											<li><a href="chart-js.html">Chart Js</a></li>
											<li><a href="chart-morris.html">Morris Charts</a></li>
											<li><a href="chart-flot.html">Flot Charts</a></li>
											<li><a href="chart-peity.html">Peity Charts</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">Icons<span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
											<li><a href="icon-tabler.html">Tabler Icons</a></li>
											<li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
											<li><a href="icon-remix.html">Remix Icons</a></li>
											<li><a href="icon-feather.html">Feather Icons</a></li>
											<li><a href="icon-ionic.html">Ionic Icons</a></li>
											<li><a href="icon-material.html">Material Icons</a></li>
											<li><a href="icon-pe7.html">Pe7 Icons</a></li>
											<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
											<li><a href="icon-themify.html">Themify Icons</a></li>
											<li><a href="icon-weather.html">Weather Icons</a></li>
											<li><a href="icon-typicon.html">Typicon Icons</a></li>
											<li><a href="icon-flag.html">Flag Icons</a></li>
											
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<i class="ti ti-table-plus"></i>
											<span>Maps</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li>
												<a href="maps-vector.html">Vector</a>
											</li>
											<li>
												<a href="maps-leaflet.html">Leaflet</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="extras">
								<ul>
									<li class="menu-title"><span>EXTRAS</span></li>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Change Log</a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="javascript:void(0);">Multilevel 1</a></li>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
													<li class="submenu submenu-two submenu-three">
														<a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
														<ul>
															<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
															<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="javascript:void(0);">Multilevel 3</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Two Col Sidebar -->

		<!-- Stacked Sidebar -->
		<div class="stacked-sidebar" id="stacked-sidebar">
			<div class="sidebar sidebar-stacked" style="display: flex !important;">
				<div class="stacked-mini">
					<a href="{{route('index')}}" class="logo-small">
						<img src="assets/img/logo-small.svg" alt="Logo">
					</a>
					<div class="sidebar-left slimscroll">
						<div class="d-flex align-items-center flex-column">
							<div class="mb-1 notification-item">
								<a href="#" class="btn btn-menubar position-relative">
									<i class="ti ti-bell"></i>
									<span class="notification-status-dot"></span>
								</a>
							</div>
							<div class="mb-1">
								<a href="#" class="btn btn-menubar btnFullscreen">
									<i class="ti ti-maximize"></i>
								</a>
							</div>
							<div class="mb-1">
								<a href="calendar.html" class="btn btn-menubar">
									<i class="ti ti-layout-grid-remove"></i>
								</a>
							</div>
							<div class="mb-1">
								<a href="chat.html" class="btn btn-menubar position-relative">
									<i class="ti ti-brand-hipchat"></i>
									<span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
								</a>
							</div>
							<div class="mb-1">
								<a href="email.html" class="btn btn-menubar">
									<i class="ti ti-mail"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar-right d-flex justify-content-between flex-column">
					<div class="sidebar-scroll">
						<h6 class="mb-3">Welcome to SmartHR</h6>
						<div class="sidebar-profile text-center rounded bg-light p-3 mb-4">
							<div class="avatar avatar-lg online mb-3">
								<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
							</div>
							<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
							<p class="fs-10">System Admin</p>
						</div>
						<div class="stack-menu">
							<div class="nav flex-column align-items-center nav-pills" role="tablist" aria-orientation="vertical">
								<div class="row g-2">
									<div class="col-6">
										<a href="#menu-dashboard" role="tab" class="nav-link active" title="Dashboard" data-bs-toggle="tab" data-bs-target="#menu-dashboard" aria-selected="true">
											<span><i class="ti ti-smart-home"></i></span>
											<p>Dashboard</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-application" role="tab" class="nav-link" title="Apps" data-bs-toggle="tab" data-bs-target="#menu-application" aria-selected="false">
											<span><i class="ti ti-layout-grid-add"></i></span>
											<p>Applications</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-superadmin" role="tab" class="nav-link" title="Apps" data-bs-toggle="tab" data-bs-target="#menu-superadmin" aria-selected="false">
											<span><i class="ti ti-user-star"></i></span>
											<p>Super Admin</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-layout" role="tab" class="nav-link" title="Layout" data-bs-toggle="tab" data-bs-target="#menu-layout" aria-selected="false">
											<span><i class="ti ti-layout-board-split"></i></span>
											<p>Layouts</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-project" role="tab" class="nav-link" title="Projects" data-bs-toggle="tab" data-bs-target="#menu-project" aria-selected="false">
											<span><i class="ti ti-folder"></i></span>
											<p>Projects</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-crm" role="tab" class="nav-link" title="CRM" data-bs-toggle="tab" data-bs-target="#menu-crm" aria-selected="false">
											<span><i class="ti ti-user-shield"></i></span>
											<p>Crm</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-hrm" role="tab" class="nav-link" title="HRM" data-bs-toggle="tab" data-bs-target="#menu-hrm" aria-selected="false">
											<span><i class="ti ti-users"></i></span>
											<p>Hrm</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-finance" role="tab" class="nav-link" title="Finance & Accounts" data-bs-toggle="tab" data-bs-target="#menu-finance" aria-selected="false">
											<span><i class="ti ti-shopping-cart-dollar"></i></span>
											<p>Finance & Accounts</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-administration" role="tab" class="nav-link" title="Administration" data-bs-toggle="tab" data-bs-target="#menu-administration" aria-selected="false">
											<span><i class="ti ti-cash"></i></span>
											<p>Administration</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-content" role="tab" class="nav-link" title="Content" data-bs-toggle="tab" data-bs-target="#menu-content" aria-selected="false">
											<span><i class="ti ti-license"></i></span>
											<p>Contents</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-pages" role="tab" class="nav-link" title="Pages"
											data-bs-toggle="tab" data-bs-target="#menu-pages" aria-selected="false">
											<span><i class="ti ti-page-break"></i></span>
											<p>Pages</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-authentication" role="tab" class="nav-link" title="Authentication" data-bs-toggle="tab" data-bs-target="#menu-authentication" aria-selected="false">
											<span><i class="ti ti-lock-check"></i></span>
											<p>Authentication</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-ui-elements" role="tab" class="nav-link" title="UI Elements" data-bs-toggle="tab" data-bs-target="#menu-ui-elements" aria-selected="false">
											<span><i class="ti ti-ux-circle"></i></span>
											<p>Basic UI</p>
										</a>
									</div>
								</div>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="menu-dashboard">
									<ul class="stack-submenu">
										<li><a href="{{route('index')}}" class="active">Admin Dashboard</a></li>
										<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
										<li><a href="deals-dashboard.html">Deals Dashboard</a></li>
										<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-superadmin">
									<ul class="stack-submenu">
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="companies.html">Companies</a></li>
										<li><a href="subscription.html">Subscriptions</a></li>
										<li><a href="packages.html">Packages</a></li>
										<li><a href="domain.html">Domain</a></li>
										<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-application">
									<ul class="stack-submenu">
										<li><a href="chat.html">Chat</a></li>
										<li class="submenu submenu-two">
											<a href="call.html">Calls<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="voice-call.html">Voice Call</a></li>
												<li><a href="video-call.html">Video Call</a></li>
												<li><a href="outgoing-call.html">Outgoing Call</a></li>
												<li><a href="incoming-call.html">Incoming Call</a></li>
												<li><a href="call-history.html">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.html">Calendar</a></li>
										<li><a href="email.html">Email</a></li>
										<li><a href="todo.html">To Do</a></li>
										<li><a href="notes.html">Notes</a></li>
										<li><a href="social-feed.html">Social Feed</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
										<li><a href="kanban-view.html">Kanban</a></li>
										<li><a href="invoices.html">Invoices</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-layout">
									<ul class="stack-submenu">
										<li><a href="layout-horizontal.html">Horizontal</a></li>
										<li><a href="layout-detached.html">Detached</a></li>
										<li><a href="layout-modern.html">Modern</a></li>
										<li><a href="layout-two-column.html">Two Column</a></li>
										<li><a href="layout-hovered.html">Hovered</a></li>
										<li><a href="layout-box.html">Boxed</a></li>
										<li><a href="layout-horizontal-single.html">Horizontal Single</a></li>
										<li><a href="layout-horizontal-overlay.html">Horizontal Overlay</a></li>
										<li><a href="layout-horizontal-box.html">Horizontal Box</a></li>
										<li><a href="layout-horizontal-sidemenu.html">Menu Aside</a></li>
										<li><a href="layout-vertical-transparent.html">Transparent</a></li>
										<li><a href="layout-without-header.html">Without Header</a></li>
										<li><a href="layout-rtl.html">RTL</a></li>
										<li><a href="layout-dark.html">Dark</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-project">
									<ul class="stack-submenu">
										<li><a href="clients-grid.html"><span>Clients</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Projects</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="projects-grid.html">Projects</a></li>
												<li><a href="tasks.html">Tasks</a></li>
												<li><a href="task-board.html">Task Board</a></li>
											</ul>
										</li>	
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-crm">
									<ul class="stack-submenu">
										<li><a href="contacts-grid.html"><span>Contacts</span></a></li>
										<li><a href="companies-grid.html"><span>Companies</span></a></li>
										<li><a href="deals-grid.html"><span>Deals</span></a></li>
										<li><a href="leads-grid.html"><span>Leads</span></a></li>
										<li><a href="pipeline.html"><span>Pipeline</span></a></li>
										<li><a href="analytics.html"><span>Analytics</span></a></li>
										<li><a href="activity.html"><span>Activities</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-hrm">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"><span>Employees</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="employees.html">Employee Lists</a></li>
												<li><a href="employees-grid.html">Employee Grid</a></li>
												<li><a href="employee-details.html">Employee Details</a></li>
												<li><a href="departments.html">Departments</a></li>
												<li><a href="designations.html">Designations</a></li>
												<li><a href="policy.html">Policies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Tickets</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="tickets.html">Tickets</a></li>
												<li><a href="ticket-details.html">Ticket Details</a></li>
											</ul>
										</li>
										<li><a href="holidays.html"><span>Holidays</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Attendance</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Leaves<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="leaves.html">Leaves (Admin)</a></li>
														<li><a href="leaves-employee.html">Leave (Employee)</a></li>
														<li><a href="leave-settings.html">Leave Settings</a></li>												
													</ul>												
												</li>
												<li><a href="attendance-admin.html">Attendance (Admin)</a></li>
												<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
												<li><a href="timesheets.html">Timesheets</a></li>
												<li><a href="schedule-timing.html">Shift & Schedule</a></li>
												<li><a href="overtime.html">Overtime</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Performance</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="performance-indicator.html">Performance Indicator</a></li>
												<li><a href="performance-review.html">Performance Review</a></li>
												<li><a href="performance-appraisal.html">Performance Appraisal</a></li>
												<li><a href="goal-tracking.html">Goal List</a></li>
												<li><a href="goal-type.html">Goal Type</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Training</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="training.html">Training List</a></li>
												<li><a href="trainers.html">Trainers</a></li>
												<li><a href="training-type.html">Training Type</a></li>
											</ul>
										</li>
										<li><a href="promotion.html"><span>Promotion</span></a></li>
										<li><a href="resignation.html"><span>Resignation</span></a></li>
										<li><a href="termination.html"><span>Termination</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-finance">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"><span>Sales</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="estimates.html">Estimates</a></li>
												<li><a href="invoices.html">Invoices</a></li>
												<li><a href="payments.html">Payments</a></li>
												<li><a href="expenses.html">Expenses</a></li>
												<li><a href="provident-fund.html">Provident Fund</a></li>
												<li><a href="taxes.html">Taxes</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Accounting</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="categories.html">Categories</a></li>
												<li><a href="budgets.html">Budgets</a></li>
												<li><a href="budget-expenses.html">Budget Expenses</a></li>
												<li><a href="budget-revenues.html">Budget Revenues</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Payroll</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="employee-salary.html">Employee Salary</a></li>
												<li><a href="payslip.html">Payslip</a></li>
												<li><a href="payroll.html">Payroll Items</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-administration">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"><span>Assets</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="assets.html">Assets</a></li>
												<li><a href="asset-categories.html">Asset Categories</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Help & Supports</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="knowledgebase.html">Knowledge Base</a></li>
												<li><a href="activity.html">Activities</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>User Management</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="users.html">Users</a></li>
												<li><a href="roles-permissions.html">Roles & Permissions</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Reports</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="expenses-report.html">Expense Report</a></li>
												<li><a href="invoice-report.html">Invoice Report</a></li>
												<li><a href="payment-report.html">Payment Report</a></li>
												<li><a href="project-report.html">Project Report</a></li>
												<li><a href="task-report.html">Task Report</a></li>
												<li><a href="user-report.html">User Report</a></li>
												<li><a href="employee-report.html">Employee Report</a></li>
												<li><a href="payslip-report.html">Payslip Report</a></li>
												<li><a href="attendance-report.html">Attendance Report</a></li>
												<li><a href="leave-report.html">Leave Report</a></li>
												<li><a href="daily-report.html">Daily Report</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												General Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="profile-settings.html">Profile</a></li>
												<li><a href="security-settings.html">Security</a></li>
												<li><a href="notification-settings.html">Notifications</a></li>
												<li><a href="connected-apps.html">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												Website Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="bussiness-settings.html">Business Settings</a></li>
												<li><a href="seo-settings.html">SEO Settings</a></li>
												<li><a href="localization-settings.html">Localization</a></li>
												<li><a href="prefixes.html">Prefixes</a></li>
												<li><a href="preferences.html">Preferences</a></li>
												<li><a href="performance-appraisal.html">Appearance</a></li>
												<li><a href="language.html">Language</a></li>
												<li><a href="authentication-settings.html">Authentication</a></li>
												<li><a href="ai-settings.html">AI Settings</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">App Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="salary-settings.html">Salary Settings</a></li>
												<li><a href="approval-settings.html">Approval Settings</a></li>
												<li><a href="invoice-settings.html">Invoice Settings</a></li>
												<li><a href="leave-type.html">Leave Type</a></li>
												<li><a href="custom-fields.html">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												System Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="email-settings.html">Email Settings</a></li>
												<li><a href="email-template.html">Email Templates</a></li>
												<li><a href="sms-settings.html">SMS Settings</a></li>
												<li><a href="sms-template.html">SMS Templates</a></li>
												<li><a href="otp-settings.html">OTP</a></li>
												<li><a href="gdpr.html">GDPR Cookies</a></li>
												<li><a href="maintenance-mode.html">Maintenance Mode</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												Financial Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="payment-gateways.html">Payment Gateways</a></li>
												<li><a href="tax-rates.html">Tax Rate</a></li>
												<li><a href="currencies.html">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Other Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="custom-css.html">Custom CSS</a></li>
												<li><a href="custom-js.html">Custom JS</a></li>
												<li><a href="cronjob.html">Cronjob</a></li>
												<li><a href="storage-settings.html">Storage</a></li>
												<li><a href="ban-ip-address.html">Ban IP Address</a></li>
												<li><a href="backup.html">Backup</a></li>
												<li><a href="clear-cache.html">Clear Cache</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-content">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);">Blogs<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="blogs.html">All Blogs</a></li>
												<li><a href="blog-categories.html">Categories</a></li>
												<li><a href="blog-comments.html">Comments</a></li>
												<li><a href="blog-tags.html">Tags</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Locations<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="countries.html">Countries</a></li>
												<li><a href="states.html">States</a></li>
												<li><a href="cities.html">Cities</a></li>
											</ul>
										</li>
										<li><a href="testimonials.html">Testimonials</a></li>
										<li><a href="faq.html">FAQ’S</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-pages">
									<ul class="stack-submenu">
										<li><a href="starter.html">Starter</a></li>
										<li><a href="profile.html">Profile</a></li>
										<li><a href="profile-settings.html">Profile Settings</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="search-result.html">Search Results</a></li>
										<li><a href="timeline.html">Timeline</a></li>
										<li><a href="pricing.html">Pricing</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="under-maintenance.html">Under Maintenance</a></li>
										<li><a href="under-construction.html">Under Construction</a></li>
										<li><a href="api-keys.html">API Keys</a></li>
										<li><a href="privacy-policy.html">Privacy Policy</a></li>
										<li><a href="terms-condition.html">Terms & Conditions</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-authentication">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="login.html">Cover</a></li>
												<li><a href="login-2.html">Illustration</a></li>
												<li><a href="login-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="register.html">Cover</a></li>
												<li><a href="register-2.html">Illustration</a></li>
												<li><a href="register-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Reset Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="reset-password.html">Cover</a></li>
												<li><a href="reset-password-2.html">Illustration</a></li>
												<li><a href="reset-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Email Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-verification.html">Cover</a></li>
												<li><a href="email-verification-2.html">Illustration</a></li>
												<li><a href="email-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">2 Step Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="two-step-verification.html">Cover</a></li>
												<li><a href="two-step-verification-2.html">Illustration</a></li>
												<li><a href="two-step-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li><a href="lock-screen.html">Lock Screen</a></li>
										<li><a href="error-404.html">404 Error</a></li>
										<li><a href="error-500.html">500 Error</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="menu-ui-elements">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);">Base UI<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="ui-alerts.html">Alerts</a></li>
												<li><a href="ui-accordion.html">Accordion</a></li>
												<li><a href="ui-avatar.html">Avatar</a></li>
												<li><a href="ui-badges.html">Badges</a></li>
												<li><a href="ui-borders.html">Border</a></li>
												<li><a href="ui-buttons.html">Buttons</a></li>
												<li><a href="ui-buttons-group.html">Button Group</a></li>
												<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
												<li><a href="ui-cards.html">Card</a></li>
												<li><a href="ui-carousel.html">Carousel</a></li>
												<li><a href="ui-colors.html">Colors</a></li>
												<li><a href="ui-dropdowns.html">Dropdowns</a></li>
												<li><a href="ui-grid.html">Grid</a></li>
												<li><a href="ui-images.html">Images</a></li>
												<li><a href="ui-lightbox.html">Lightbox</a></li>
												<li><a href="ui-media.html">Media</a></li>
												<li><a href="ui-modals.html">Modals</a></li>
												<li><a href="ui-offcanvas.html">Offcanvas</a></li>
												<li><a href="ui-pagination.html">Pagination</a></li>
												<li><a href="ui-popovers.html">Popovers</a></li>
												<li><a href="ui-progress.html">Progress</a></li>
												<li><a href="ui-placeholders.html">Placeholders</a></li>
												<li><a href="ui-spinner.html">Spinner</a></li>
												<li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
												<li><a href="ui-nav-tabs.html">Tabs</a></li>
												<li><a href="ui-toasts.html">Toasts</a></li>
												<li><a href="ui-tooltips.html">Tooltips</a></li>
												<li><a href="ui-typography.html">Typography</a></li>
												<li><a href="ui-video.html">Video</a></li>
											<li><a href="ui-sortable.html">Sortable</a></li>
											<li><a href="ui-swiperjs.html">Swiperjs</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"> Advanced UI<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="ui-ribbon.html">Ribbon</a></li>
												<li><a href="ui-clipboard.html">Clipboard</a></li>
												<li><a href="ui-drag-drop.html">Drag & Drop</a></li>
												<li><a href="ui-rangeslider.html">Range Slider</a></li>
												<li><a href="ui-rating.html">Rating</a></li>
												<li><a href="ui-text-editor.html">Text Editor</a></li>
												<li><a href="ui-counter.html">Counter</a></li>
												<li><a href="ui-scrollbar.html">Scrollbar</a></li>
												<li><a href="ui-stickynote.html">Sticky Note</a></li>
												<li><a href="ui-timeline.html">Timeline</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Forms<span class="menu-arrow"></span> </a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
														<li><a href="form-checkbox-radios.html">Checkbox & Radios</a> </li>
														<li><a href="form-input-groups.html">Input Groups</a></li>
														<li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
														<li><a href="form-select.html">Form Select</a></li>
														<li><a href="form-mask.html">Input Masks</a></li>
														<li><a href="form-fileupload.html">File Uploads</a></li>
														
													</ul>
												</li>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="form-horizontal.html">Horizontal Form</a></li>
														<li><a href="form-vertical.html">Vertical Form</a></li>
														<li><a href="form-floating-labels.html">Floating Labels</a></li>
													</ul>
												</li>
												<li><a href="form-validation.html">Form Validation</a></li>
												<li><a href="form-select2.html">Select2</a></li>
												<li><a href="form-wizard.html">Form Wizard</a></li>
												<li><a href="form-pickers.html">Form Picker</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Tables<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="tables-basic.html">Basic Tables </a></li>
												<li><a href="data-tables.html">Data Table </a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Charts<span class="menu-arrow"></span> </a>
											<ul>
												<li><a href="chart-apex.html">Apex Charts</a></li>
												<li><a href="chart-c3.html">Chart C3</a></li>
												<li><a href="chart-js.html">Chart Js</a></li>
												<li><a href="chart-morris.html">Morris Charts</a></li>
												<li><a href="chart-flot.html">Flot Charts</a></li>
												<li><a href="chart-peity.html">Peity Charts</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Icons<span class="menu-arrow"></span> </a>
											<ul>
												<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
												<li><a href="icon-tabler.html">Tabler Icons</a></li>
												<li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
												<li><a href="icon-remix.html">Remix Icons</a></li>
												<li><a href="icon-feather.html">Feather Icons</a></li>
												<li><a href="icon-ionic.html">Ionic Icons</a></li>
												<li><a href="icon-material.html">Material Icons</a></li>
												<li><a href="icon-pe7.html">Pe7 Icons</a></li>
												<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
												<li><a href="icon-themify.html">Themify Icons</a></li>
												<li><a href="icon-weather.html">Weather Icons</a></li>
												<li><a href="icon-typicon.html">Typicon Icons</a></li>
												<li><a href="icon-flag.html">Flag Icons</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<i class="ti ti-table-plus"></i>
												<span>Maps</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="maps-vector.html">Vector</a>
												</li>
												<li>
													<a href="maps-leaflet.html">Leaflet</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="p-3">
						<a href="javascript:void(0);" class="d-flex align-items-center fs-12 mb-3">Documentation</a>
						<a href="https://smarthr.co.in/demo/documentation/changelog.html">
										<i class="ti ti-exchange"></i><span>Changelog</span>
										<span class="badge bg-pink badge-xs text-white fs-10 ms-s">v4.1.1</span>
									</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Stacked Sidebar -->

		@yield('content')


	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Feather Icon JS -->
	<script src="{{asset('assets/js/feather.min.js')}}"></script>

	<!-- Slimscroll JS -->
	<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

	<!-- Chart JS -->
	<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>

	<!-- Chart JS -->
	<script src="{{asset('assets/plugins/chartjs/chart.min.js')}}"></script>
	<script src="{{asset('assets/plugins/chartjs/chart-data.js')}}"></script>

	 <!-- Datatable JS -->
   <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script>	

	<!-- Datetimepicker JS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Daterangepikcer JS -->
	<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

	<!-- Summernote JS -->
	<script src="{{asset('assets/plugins/summernote/summernote-lite.min.js')}}"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>

	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

	<!-- Color Picker JS -->
	<script src="{{asset('assets/plugins/%40simonwep/pickr/pickr.es5.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{asset('assets/js/todo.js')}}"></script>
	<script src="{{asset('assets/js/theme-colorpicker.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>

	<!-- Notification Mark as Read Script -->
	<script>
		$(document).ready(function() {
			// Mark all enquiries as read
			$('#markAllAsRead').on('click', function(e) {
				e.preventDefault();

				$.ajax({
					url: '{{ route("enquiries.mark-all-as-read") }}',
					type: 'POST',
					data: {
						_token: '{{ csrf_token() }}'
					},
					success: function(response) {
						if (response.success) {
							// Reload page to update notification count
							location.reload();
						}
					},
					error: function(xhr) {
						console.error('Error marking enquiries as read');
					}
				});
			});
		});
	</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"d05194593ce14c8fa5c20a9737ff5d07","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>