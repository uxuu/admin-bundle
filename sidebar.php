<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
  'menu' => [[
		'icon' => 'fa fa-sitemap',
		'title' => 'Dashboard',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/index.html',
			'title' => 'Dashboard v1',
			'route-name' => 'dashboard-v1'
		],[
			'url' => '#pages/index_v2.html',
			'title' => 'Dashboard v2',
			'route-name' => 'dashboard-v2'
		],[
			'url' => '#pages/index_v3.html',
			'title' => 'Dashboard v3',
			'route-name' => 'dashboard-v3'
		]]
	],[
		'icon' => 'fa fa-hdd',
		'title' => 'Email',
		'url' => 'javascript:;',
		'badge' => '10',
		'sub_menu' => [[
			'url' => '#pages/email_inbox.html',
			'title' => 'Inbox',
			'route-name' => 'email-inbox'
		],[
			'url' => '#pages/email_compose.html',
			'title' => 'Compose',
			'route-name' => 'email-compose'
		],[
			'url' => '#pages/email_detail.html',
			'title' => 'Detail',
			'route-name' => 'email-detail'
		]]
	],[
		'icon' => 'fab fa-simplybuilt',
		'title' => 'Widgets',
		'label' => 'NEW',
		'url' => '#pages/widget.html',
		'route-name' => 'widget'
	],[
		'icon' => 'fa fa-gem',
		'title' => 'UI Elements',
		'url' => 'javascript:;',
		'label' => 'NEW',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/ui_general.html',
			'title' => 'General',
			'highlight' => true,
			'route-name' => 'ui-general'
		],[
			'url' => '#pages/ui_typography.html',
			'title' => 'Typography',
			'route-name' => 'ui-typography'
		],[
			'url' => '#pages/ui_tabs_accordions.html',
			'title' => 'Tabs & Accordions',
			'route-name' => 'ui-tabs-accordions'
		],[
			'url' => '#pages/ui_unlimited_nav_tabs.html',
			'title' => 'Unlimited Nav Tabs',
			'route-name' => 'ui-unlimited-nav-tabs'
		],[
			'url' => '#pages/ui_modal_notification.html',
			'title' => 'Modal & Notification',
			'highlight' => true,
			'route-name' => 'ui-modal-notification'
		],[
			'url' => '#pages/ui_widget_boxes.html',
			'title' => 'Widget Boxes',
			'route-name' => 'ui-widget-boxes'
		],[
			'url' => '#pages/ui_media_object.html',
			'title' => 'Media Object',
			'route-name' => 'ui-media-object'
		],[
			'url' => '#pages/ui_buttons.html',
			'title' => 'Buttons',
			'highlight' => true,
			'route-name' => 'ui-buttons'
		],[
			'url' => '#pages/ui_icons.html',
			'title' => 'Icons',
			'route-name' => 'ui-icons'
		],[
			'url' => '#pages/ui_simple_line_icons.html',
			'title' => 'Simple Line Icons',
			'route-name' => 'ui-simple-line-icons'
		],[
			'url' => '#pages/ui_ionicons.html',
			'title' => 'Ionicons',
			'route-name' => 'ui-ionicons'
		],[
			'url' => '#pages/ui_tree_view.html',
			'title' => 'Tree View',
			'route-name' => 'ui-tree-view'
		],[
			'url' => '#pages/ui_language_bar_icon.html',
			'title' => 'Language Bar & Icon',
			'route-name' => 'ui-language-bar-icon'
		],[
			'url' => '#pages/ui_social_buttons.html',
			'title' => 'Social Buttons',
			'route-name' => 'ui-social-buttons'
		],[
			'url' => '#pages/ui_intro_js.html',
			'title' => 'Intro JS',
			'route-name' => 'ui-intro-js'
		],[
			'url' => '#pages/ui_offcanvas_toasts.html',
			'title' => 'Offcanvas Toasts',
			'highlight' => true,
			'route-name' => 'ui-offcanvas-toasts'
		]]
	],[
		'img' => 'img/logo/logo-bs5.png',
		'title' => 'Bootstrap 5',
		'url' => '#pages/bootstrap_5.html',
		'label' => 'NEW',
		'route-name' => 'bootstrap-5'
	],[
		'icon' => 'fa fa-list-ol',
		'title' => 'Form Stuff',
		'url' => 'javascript:;',
		'label' => 'NEW',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/form_elements.html',
			'title' => 'Form Elements',
			'highlight' => true,
			'route-name' => 'form-elements'
		],[
			'url' => '#pages/form_plugins.html',
			'title' => 'Form Plugins',
			'highlight' => true,
			'route-name' => 'form-plugins'
		],[
			'url' => '#pages/form_slider_switcher.html',
			'title' => 'Form Slider + Switcher',
			'route-name' => 'form-slider-switcher'
		],[
			'url' => '#pages/form_validation.html',
			'title' => 'Form Validation',
			'route-name' => 'form-validation'
		],[
			'url' => '#pages/form_wizards.html',
			'title' => 'Wizards',
			'highlight' => true,
			'route-name' => 'form-wizards'
		],[
			'url' => '#pages/form_wysiwyg.html',
			'title' => 'WYSIWYG',
			'route-name' => 'form-wysiwyg'
		],[
			'url' => '#pages/form_editable.html',
			'title' => 'X-Editable',
			'route-name' => 'form-x-editable'
		],[
			'url' => '#pages/form_multiple_file_upload.html',
			'title' => 'Multiple File Upload',
			'route-name' => 'form-multiple-file-upload'
		],[
			'url' => '#pages/form_summernote.html',
			'title' => 'Summernote',
			'route-name' => 'form-summernote'
		],[
			'url' => '#pages/form_dropzone.html',
			'title' => 'Dropzone',
			'route-name' => 'form-dropzone'
		]]
	],[
		'icon' => 'fa fa-table',
		'title' => 'Tables',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/table_basic.html',
			'title' => 'Basic',
			'route-name' => 'table-basic'
		],[
			'url' => 'javascript:;',
			'title' => 'Managed Tables',
			'sub_menu' => [[
				'url' => '#pages/table_manage.html',
				'title' => 'Default',
				'route-name' => 'table-manage-default'
			],[
				'url' => '#pages/table_manage_buttons.html',
				'title' => 'Buttons',
				'route-name' => 'table-manage-buttons'
			],[
				'url' => '#pages/table_manage_colreorder.html',
				'title' => 'ColReorder',
				'route-name' => 'table-manage-colreorder'
			],[
				'url' => '#pages/table_manage_fixed_column.html',
				'title' => 'Fixed Column',
				'route-name' => 'table-manage-fixed-column'
			],[
				'url' => '#pages/table_manage_fixed_header.html',
				'title' => 'Fixed Header',
				'route-name' => 'table-manage-fixed-header'
			],[
				'url' => '#pages/table_manage_keytable.html',
				'title' => 'KeyTable',
				'route-name' => 'table-manage-keytable'
			],[
				'url' => '#pages/table_manage_responsive.html',
				'title' => 'Responsive',
				'route-name' => 'table-manage-responsive'
			],[
				'url' => '#pages/table_manage_rowreorder.html',
				'title' => 'RowReorder',
				'route-name' => 'table-manage-rowreorder'
			],[
				'url' => '#pages/table_manage_scroller.html',
				'title' => 'Scroller',
				'route-name' => 'table-manage-scroller'
			],[
				'url' => '#pages/table_manage_select.html',
				'title' => 'Select',
				'route-name' => 'table-manage-select'
			],[
				'url' => '#pages/table_manage_combine.html',
				'title' => 'Extension Combination',
				'route-name' => 'table-manage-combine'
			]]
		]]
	],[
		'icon' => 'fa fa-cash-register',
		'title' => 'POS System',
		'url' => 'javascript:;',
		'caret' => true,
		'label' => 'NEW',
		'sub_menu' => [[
			'url' => '#pages/pos_customer_order.html',
			'title' => 'Customer Order',
			'route-name' => 'pos-customer-order'
		],[
			'url' => '#pages/pos_kitchen_order.html',
			'title' => 'Kitchen Order',
			'route-name' => 'pos-kitchen-order'
		],[
			'url' => '#pages/pos_counter_checkout.html',
			'title' => 'Counter Checkout',
			'route-name' => 'pos-counter-checkout'
		],[
			'url' => '#pages/pos_table_booking.html',
			'title' => 'Table Booking',
			'route-name' => 'pos-table-booking'
		],[
			'url' => '#pages/pos_menu_stock.html',
			'title' => 'Menu Stock',
			'route-name' => 'pos-menu-stock'
		]]
	],[
		'icon' => 'fa fa-star',
		'title' => 'Frontend',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'javascript:;',
			'title' => 'One Page Parallax'
		],[
			'url' => 'javascript:;',
			'title' => 'Blog'
		],[
			'url' => 'javascript:;',
			'title' => 'Forum'
		],[
			'url' => 'javascript:;',
			'title' => 'E-Commerce'
		]]
	],[
		'icon' => 'fa fa-envelope',
		'title' => 'Email Template',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/email_template_system.html',
			'title' => 'System Template',
			'route-name' => 'email-template-system'
		],[
			'url' => '#pages/email_template_newsletter.html',
			'title' => 'Newsletter Template',
			'route-name' => 'email-template-newsletter'
		]]
	],[
		'icon' => 'fa fa-chart-pie',
		'title' => 'Chart',
		'url' => 'javascript:;',
		'label' => 'NEW',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/chart-flot.html',
			'title' => 'Flot Chart',
			'route-name' => 'chart-flot'
		],[
			'url' => '#pages/chart-js.html',
			'title' => 'Chart JS',
			'route-name' => 'chart-js'
		],[
			'url' => '#pages/chart-d3.html',
			'title' => 'd3 Chart',
			'route-name' => 'chart-d3'
		],[
			'url' => '#pages/chart-apex.html',
			'title' => 'Apex Chart',
			'highlight' => true,
			'route-name' => 'chart-apex'
		]]
	],[
		'icon' => 'fa fa-calendar',
		'title' => 'Calendar',
		'url' => '#pages/calendar.html',
		'route-name' => 'calendar'
	],[
		'icon' => 'fa fa-map',
		'title' => 'Map',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/map_vector.html',
			'title' => 'Vector Map',
			'route-name' => 'map-vector'
		],[
			'url' => '#pages/map_google.html',
			'title' => 'Google Map',
			'route-name' => 'map-google'
		]]
	],[
		'icon' => 'fa fa-image',
		'title' => 'Gallery',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/gallery.html',
			'title' => 'Gallery v1',
			'route-name' => 'gallery-v1'
		],[
			'url' => '#pages/gallery_v2.html',
			'title' => 'Gallery v2',
			'route-name' => 'gallery-v2'
		]]
	],[
		'icon' => 'fa fa-cogs',
		'title' => 'Page Options',
		'url' => 'javascript:;',
		'label' => 'NEW',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/page_blank.html',
			'title' => 'Blank Page',
			'route-name' => 'page-blank'
		],[
			'url' => '#pages/page_with_footer.html',
			'title' => 'Page with Footer',
			'route-name' => 'page-with-footer'
		],[
			'url' => '#pages/page_with_fixed_footer.html',
			'title' => 'Page with Fixed Footer',
			'highlight' => true,
			'route-name' => 'page-with-fixed-footer'
		],[
			'url' => '#pages/page_without_sidebar.html',
			'title' => 'Page without Sidebar',
			'route-name' => 'page-without-sidebar'
		],[
			'url' => '#pages/page_with_right_sidebar.html',
			'title' => 'Page with Right Sidebar',
			'route-name' => 'page-with-right-sidebar'
		],[
			'url' => '#pages/page_with_minified_sidebar.html',
			'title' => 'Page with Minified Sidebar',
			'route-name' => 'page-with-minified-sidebar'
		],[
			'url' => '#pages/page_with_two_sidebar.html',
			'title' => 'Page with Two Sidebar',
			'route-name' => 'page-with-two-sidebar'
		],[
			'url' => '#pages/page_full_height.html',
			'title' => 'Full Height Content',
			'route-name' => 'page-full-height'
		],[
			'url' => '#pages/page_with_wide_sidebar.html',
			'title' => 'Page with Wide Sidebar',
			'route-name' => 'page-with-wide-sidebar'
		],[
			'url' => '#pages/page_with_light_sidebar.html',
			'title' => 'Page with Light Sidebar',
			'route-name' => 'page-with-light-sidebar'
		],[
			'url' => '#pages/page_with_mega_menu.html',
			'title' => 'Page with Mega Menu',
			'route-name' => 'page-with-mega-menu'
		],[
			'url' => '#pages/page_with_top_menu.html',
			'title' => 'Page with Top Menu',
			'route-name' => 'page-with-top-menu'
		],[
			'url' => '#pages/page_with_boxed_layout.html',
			'title' => 'Page with Boxed Layout',
			'route-name' => 'page-with-boxed-layout'
		],[
			'url' => '#pages/page_with_mixed_menu.html',
			'title' => 'Page with Mixed Menu',
			'route-name' => 'page-with-mixed-menu'
		],[
			'url' => '#pages/boxed_layout_with_mixed_menu.html',
			'title' => 'Boxed Layout with Mixed Menu',
			'route-name' => 'boxed-layout-with-mixed-menu'
		],[
			'url' => '#pages/page_with_transparent_sidebar.html',
			'title' => 'Page with Transparent Sidebar',
			'route-name' => 'page-with-transparent-sidebar'
		],[
			'url' => '#pages/page_with_search_sidebar.html',
			'title' => 'Page with Search Sidebar',
			'highlight' => true,
			'route-name' => 'page-with-search-sidebar'
		]]
	],[
		'icon' => 'fa fa-gift',
		'title' => 'Extra',
		'url' => 'javascript:;',
		'label' => 'NEW',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/extra_timeline.html',
			'title' => 'Timeline',
			'route-name' => 'extra-timeline'
		],[
			'url' => '#pages/extra_coming_soon.html',
			'title' => 'Coming Soon Page',
			'route-name' => 'extra-coming-soon'
		],[
			'url' => '#pages/extra_search_result.html',
			'title' => 'Search Results',
			'route-name' => 'extra-search-result'
		],[
			'url' => '#pages/extra_invoice.html',
			'title' => 'Invoice',
			'route-name' => 'extra-invoice'
		],[
			'url' => '#pages/extra_404_page.html',
			'title' => '404 Error Page',
			'route-name' => 'extra-error-page'
		],[
			'url' => '#pages/extra_profile.html',
			'title' => 'Profile Page',
			'route-name' => 'extra-profile'
		],[
			'url' => '#pages/extra_scrum_board.html',
			'title' => 'Scrum Board',
			'highlight' => true,
			'route-name' => 'extra-scrum-board'
		],[
			'url' => '#pages/extra_cookie_acceptance_banner.html',
			'title' => 'Cookie Acceptance Banner',
			'highlight' => true,
			'route-name' => 'extra-cookie-acceptance-banner'
		],[
			'url' => '#pages/extra_orders.html',
			'title' => 'Orders',
			'highlight' => true,
			'route-name' => 'extra-orders'
		],[
			'url' => '#pages/extra_products.html',
			'title' => 'Products',
			'highlight' => true,
			'route-name' => 'extra-products'
		]]
	],[
		'icon' => 'fa fa-key',
		'title' => 'Login & Register',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/login.html',
			'title' => 'Login',
			'route-name' => 'login-v1'
		],[
			'url' => '#pages/login_v2.html',
			'title' => 'Login v2',
			'route-name' => 'login-v2'
		],[
			'url' => '#pages/login_v3.html',
			'title' => 'Login v3',
			'route-name' => 'login-v3'
		],[
			'url' => '#pages/register_v3.html',
			'title' => 'Register v3',
			'route-name' => 'register-v3'
		]]
	],[
		'icon' => 'fa fa-cube',
		'title' => 'Version',
		'url' => 'javascript:;',
		'label' => 'NEW',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'javascript:;',
			'title' => 'HTML'
		],[
			'url' => 'javascript:;',
			'title' => 'AJAX'
		],[
			'url' => 'javascript:;',
			'title' => 'ANGULAR JS'
		],[
			'url' => 'javascript:;',
			'title' => 'ANGULAR JS 13'
		],[
			'url' => 'javascript:;',
			'title' => 'LARAVEL'
		],[
			'url' => 'javascript:;',
			'title' => 'REACT JS'
		],[
			'url' => 'javascript:;',
			'title' => 'ASP.NET'
		],[
			'url' => 'javascript:;',
			'title' => 'MATERIAL DESIGN'
		],[
			'url' => 'javascript:;',
			'title' => 'APPLE DESIGN',
			'highlight' => true
		],[
			'url' => 'javascript:;',
			'title' => 'TRANSPARENT DESIGN',
			'highlight' => true
		],[
			'url' => 'javascript:;',
			'title' => 'FACEBOOK DESIGN',
			'highlight' => true
		],[
			'url' => 'javascript:;',
			'title' => 'GOOGLE DESIGN',
			'highlight' => true
		]]
	],[
		'icon' => 'fa fa-medkit',
		'title' => 'Helper',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '#pages/helper_css.html',
			'title' => 'Predefined CSS Classes',
			'route-name' => 'helper-css'
		]]
	],[
		'icon' => 'fa fa-align-left',
		'title' => 'Menu Level',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'javascript:;',
			'title' => 'Menu 1.1',
			'sub_menu' => [[
				'url' => 'javascript:;',
				'title' => 'Menu 2.1',
				'sub_menu' => [[
					'url' => 'javascript:;',
					'title' => 'Menu 3.1',
				],[
					'url' => 'javascript:;',
					'title' => 'Menu 3.2'
				]]
			],[
				'url' => 'javascript:;',
				'title' => 'Menu 2.2'
			],[
				'url' => 'javascript:;',
				'title' => 'Menu 2.3'
			]]
		],[
			'url' => 'javascript:;',
			'title' => 'Menu 1.2'
		],[
			'url' => 'javascript:;',
			'title' => 'Menu 1.3'
		]]
	]]
];
