<?php
/**
 * Strings class for Soliloquy.
 *
 * @since 1.0.0
 *
 * @package	Soliloquy
 * @author	Thomas Griffin
 */
class Tgmsp_Strings {

	/**
	 * Holds a copy of the object for easy reference.
	 *
	 * @since 1.0.0
	 *
	 * @var object
	 */
	private static $instance;

	/**
	 * Holds a copy of all the strings used by Soliloquy.
	 *
	 * @since 1.0.0
	 *
	 * @var array
	 */
	public $strings = array();

	/**
	 * Constructor. Hooks all interactions to initialize the class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		self::$instance = $this;

		$this->strings = apply_filters( 'tgmsp_strings', array(
			'add_edit_help'			=> __( 'Create and manage your slider from this screen. Click on the Upload Images button to begin uploading your images, and once uploaded, you can drag-and-drop sort them, add image meta and set slider options. Clicking on the Advanced Options checkbox will display more options for configuring your slider.', 'soliloquy' ),
			'add_html'				=> esc_attr__( 'Add HTML Slide', 'soliloquy' ),
			'add_slider'			=> esc_attr__( 'Add Soliloquy Slider', 'soliloquy' ),
			'add_slider_editor'		=> esc_attr__( 'Add Slider', 'soliloquy' ),
			'add_video'				=> esc_attr__( 'Add Video Slide', 'soliloquy' ),
			'addon_activate'		=> __( 'Activate', 'soliloquy' ),
			'addon_activating'		=> __( 'Activating...', 'soliloquy' ),
			'addon_active'			=> __( 'Status: Active', 'soliloquy' ),
			'addon_connect_error'	=> __( 'There was an error connecting. Please try again.', 'soliloquy' ),
			'addon_deactivate'		=> __( 'Deactivate', 'soliloquy' ),
			'addon_deactivating'	=> __( 'Deactivating...', 'soliloquy' ),
			'addon_inactive'		=> __( 'Status: Inactive', 'soliloquy' ),
			'addon_install'			=> __( 'Install Addon', 'soliloquy' ),
			'addon_install_error'	=> __( 'There was an error with the install. Please try again.', 'soliloquy' ),
			'addon_installing'		=> __( 'Installing...', 'soliloquy' ),
			'addon_not_installed'	=> __( 'Status: Not Installed', 'soliloquy' ),
			'addon_proceed'			=> __( 'Proceed', 'soliloquy' ),
			'addons_intro'			=> __( 'The following addons can be used to extend the functionality of Soliloquy.', 'soliloquy' ),
			'addons_menu_title'		=> __( 'Addons', 'soliloquy' ),
			'addons_page_title'		=> __( 'Soliloquy Addons', 'soliloquy' ),
			'advanced_help'			=> __( 'Soliloquy Advanced', 'soliloquy' ),
			'advanced_help_desc'	=> __( 'Each slider comes with dynamic action hooks to supply custom callback parameters using FlexSlider\'s Callback API. The callback parameters and related action hooks for this slider are listed below.', 'soliloquy' ),
			'attachment_green'		=> __( 'Images with a green overlay are being used by this slider. You can edit and modify the image and its metadata like normal, but the "Insert into Slider" button is disabled.' ),
			'attachment_red'		=> __( 'Images with a red overlay cannot be inserted into this slider. Soliloquy uses attachments to handle slider images, and because WordPress currently only allows you to attach an image to one post, images that have already been attached to another post cannot be used in this slider.', 'soliloquy' ),
			'attachment_white'		=> __( 'Images with no overlay can be edited, modified and inserted into this slider.', 'soliloquy' ),
			'attachment_notice'		=> __( 'Images with no overlay can be inserted into this slider. Images with a green overlay are being used by this slider. Images with a red overlay cannot be inserted into this slider.', 'soliloquy' ),
			'attachment_why'		=> __( 'Learn More', 'soliloquy' ),
			'column_date'			=> __( 'Date', 'soliloquy' ),
			'column_function'		=> __( 'Function', 'soliloquy' ),
			'column_modified'		=> __( 'Last Modified', 'soliloquy' ),
			'column_number'			=> __( 'Number of Slides', 'soliloquy' ),
			'column_shortcode'		=> __( 'Shortcode', 'soliloquy' ),
			'column_title'			=> __( 'Title', 'soliloquy' ),
			'confirm_delete'		=> __( 'Are you sure you want to delete this image?', 'soliloquy' ),
			'congrats'				=> __( 'Congratulations! You are now rocking the pro version of Soliloquy!', 'soliloquy' ),
			'congrats_desc'			=> __( '<strong>Soliloquy Lite is no more - welcome to the full version of Soliloquy!</strong> You can now enjoy the full list of benefits, including the new media UI, HTML and Video slides, advanced options and dramatic speed improvements. Check your email for account login details and your invoice, and if you need anything, you can login to your account at <a href="https://soliloquywp.com/members-area/">https://soliloquywp.com/members-area/</a> and submit a support ticket. <strong>Have fun and enjoy all the awesome new benefits of Soliloquy Pro!</strong>', 'soliloquy' ),
			'deactivate_key'		=> esc_attr__( 'Deactivate Your License Key from This Site', 'soliloquy' ),
			'editor_choose'			=> __( 'Choosing Your Slider', 'soliloquy' ),
			'editor_choose_desc'	=> __( 'To choose your slider, simply click on of the boxes to the left. The "Insert Slider" button will be activated once you have clicked on and selected a slider.', 'soliloquy' ),
			'editor_insert'			=> __( 'Inserting Your Slider', 'soliloquy' ),
			'editor_insert_desc'	=> __( 'To insert your slider in the visual editor, click on the "Insert Slider" button below.', 'soliloquy' ),
			'enter_key'				=> __( 'Enter Your License Key', 'soliloquy' ),
			'gallery'				=> __( 'Image Slides from Library', 'soliloquy' ),
			'html'					=> __( 'HTML Slides', 'soliloquy' ),
			'html_code'				=> __( 'HTML Slide Code', 'soliloquy' ),
			'html_remove'			=> esc_attr__( 'Remove Slide', 'soliloquy' ),
			'html_slide'			=> __( 'HTML Slide Title', 'soliloquy' ),
			'html_slide_mini'		=> __( 'HTML', 'soliloquy' ),
			'html_slide_place'		=> __( 'Enter HTML slide title here...', 'soliloquy' ),
			'html_start'			=> __( '<!-- Enter your HTML code here for this slide (you can delete this line). -->', 'soliloquy' ),
			'http_error'			=> __( 'Sorry, but there was an error connecting to the API server. Please try again.', 'soliloquy' ),
			'image'					=> __( 'Upload Image Slides', 'soliloquy' ),
			'imageinsert'			=> __( 'Insert Image Slides', 'soliloquy' ),
			'image_alt'				=> __( 'Image Alt Text', 'soliloquy' ),
			'image_caption'			=> __( 'Image Caption', 'soliloquy' ),
			'image_caption_desc'	=> __( 'Captions can accept <strong>any</strong> type of HTML input.', 'soliloquy' ),
			'image_link'			=> __( 'Image Link', 'soliloquy' ),
			'image_link_normal'		=> __( 'Normal Link', 'soliloquy' ),
			'image_link_title'		=> __( 'Link Title', 'soliloquy' ),
			'image_link_type'		=> __( 'Select the type of link you want to use for this slider.', 'soliloquy' ),
			'image_link_type_title'	=> __( 'Image Link Type', 'soliloquy' ),
			'image_link_video'		=> __( 'Video Link', 'soliloquy' ),
			'image_meta'			=> __( 'All of the fields below are optional, so leave blank the fields you do not want or need.', 'soliloquy' ),
			'image_title'			=> __( 'Image Title', 'soliloquy' ),
			'image_url'				=> __( 'URL', 'soliloquy' ),
			'image_url_title'		=> __( 'Title', 'soliloquy' ),
			'image_video_width'		=> __( 'Video Width', 'soliloquy' ),
			'image_video_height'	=> __( 'Video Height', 'soliloquy' ),
			'inserting'				=> __( 'Inserting...', 'soliloquy' ),
			'inserted'				=> __( 'Inserted.', 'soliloquy' ),
			'insert_slides'			=> esc_attr__( 'Insert All Slides Into Slider', 'soliloquy' ),
			'instructions'			=> __( 'You can place this slider anywhere into your posts, pages, custom post types or widgets by using the one of the shortcodes below:', 'soliloquy' ),
			'instructions_more'		=> __( 'You can also place this slider into your template files by using one of the functions below:', 'soliloquy' ),
			'invalid_id'			=> __( 'The slider ID you entered is not valid. Please check to make sure you entered it correctly.', 'soliloquy' ),
			'invalid_slug'			=> __( 'The slider slug you entered is not valid. Please check to make sure you entered it correctly.', 'soliloquy' ),
			'key_verified'			=> __( 'Your key has been verified! You are eligible for automatic updates.', 'soliloquy' ),
			'key_upgrade'			=> __( 'If the need arises, you can deactivate your license on this site and reactivate it on another. <strong>You can also upgrade to a developer license and use the plugin on an unlimited number of sites with the same key.</strong> Go to %s to login to your account and upgrade your license.', 'soliloquy' ),
			'license_deactivated'	=> __( 'The license for this site has been deactivated. Automatic updates have been turned off.', 'soliloquy' ),
			'link_existing'			=> __( 'Open Internal Linking Feature', 'soliloquy' ),
			'link_existing_close'	=> __( 'Close Internal Linking Feature', 'soliloquy' ),
			'link_tab'				=> __( 'Link Tab?', 'soliloquy' ),
			'loading'				=> __( 'Loading...', 'soliloquy' ),
			'load_images'			=> __( 'Load More Images from Library', 'soliloquy' ),
			'main_help'				=> __( 'Soliloquy utilizes custom post types in order to handle slider instances. Each slider instance has its own separate images, attributes and settings. You can get started by clicking the "Add New" button beside the page title.', 'soliloquy' ),
			'main_help_two'			=> __( 'This page can also be used as a quick reference to grab a slider\'s shortcode or template tag for outputting the slider in your posts, pages or theme files.', 'soliloquy' ),
			'media_img_cap'			=> __( 'Image Captions', 'soliloquy' ),
			'media_img_cap_desc'	=> __( 'Captions can take any type of HTML content, such as <code>form</code>, <code>iframe</code> and <code>h1</code> tags.', 'soliloquy' ),
			'media_img_links'		=> __( 'Image Links', 'soliloquy' ),
			'media_img_links_desc'	=> __( 'If you want to link to content from this site, click on the "Open Internal Linking Feature" button to open up a handy search and one-click linking feature for your internal content.', 'soliloquy' ),
			'media_img_seo'			=> __( 'Images and SEO', 'soliloquy' ),
			'media_img_seo_desc'	=> __( 'Images are a small but important part of your overall SEO strategy. In order to get the most SEO benefits from your slider, it is recommended that you fill out each applicable field with SEO friendly information about the image.', 'soliloquy' ),
			'media_insert'			=> __( 'Insert Images into Slider', 'soliloquy' ),
			'media_sb_se'			=> __( 'Saving and Exiting', 'soliloquy' ),
			'media_sb_se_desc'		=> __( 'Click on the blue button below to save your image metadata. You can close this window by either clicking on the "X" above or hitting the <code>esc</code> key on your keyboard.', 'soliloquy' ),
			'media_sb_tips'			=> __( 'Helpful Tips', 'soliloquy' ),
			'media_title'			=> __( 'Insert Image Slides', 'soliloquy' ),
			'media_uploaded'		=> __( 'Uploaded to this slider', 'soliloquy' ),
			'media_upload'			=> __( 'Upload Slider Images', 'soliloquy' ),
			'media_html_help'		=> __( 'Managing HTML Slides', 'soliloquy' ),
			'media_html_help_desc'  => __( 'Remember, custom HTML slides are, in fact, custom. You are responsible for styling and manipulating the code you insert into the slide; with great power comes great responsibility.', 'soliloquy' ),
			'media_video_help'		=> __( 'Managing Video Slides', 'soliloquy' ),
			'media_video_help_desc' => __( 'You can move, modify and delete video slides in the same manner as image slides. Video captions can also accept any type of HTML, just like image captions.', 'soliloquy' ),
			'menu_explain'			=> __( '<strong>Image Slides</strong><br />Image slides are the most basic slide type. You can upload images from your computer or use images already in your media library.</p><p><strong>Video Slides</strong><br />Video slides take YouTube or Vimeo video URLs and embed them directly into the slider. Soliloquy handles the rest for you.</p><p><strong>HTML Slides</strong><br />HTML slides allow you to create completely custom slides made up of text, images, videos or a combination of them all.</p>', 'soliloquy' ),
			'menu_title'			=> __( 'Settings', 'soliloquy' ),
			'meta_instructions'		=> __( 'Soliloquy Instructions', 'soliloquy' ),
			'meta_settings'			=> __( 'Soliloquy Settings', 'soliloquy' ),
			'meta_uploads'			=> __( 'Upload and Customize Images', 'soliloquy' ),
			'modify_image'			=> esc_attr__( 'Click Here to Modify Your Slide', 'soliloquy' ),
			'modify_image_tb'		=> __( 'Modify Your Image', 'soliloquy' ),
			'new_tab'				=> __( 'Open link in new tab?', 'soliloquy' ),
			'no_id'					=> __( 'No slider ID was entered. Please enter a slider ID.', 'soliloquy' ),
			'no_license'			=> __( 'No valid license key has been specified, so automatic updates have been turned off. <a href="%s">Please click here to enter and validate your license key</a>.', 'soliloquy' ),
			'no_results'			=> __( 'No results found. Please try your search again.', 'soliloquy' ),
			'no_results_default'	=> __( 'Enter a search above to display linkable results.', 'soliloquy' ),
			'no_updates'			=> __( 'All of your Soliloquy plugins are up to date. Update checks are performed automatically when you visit or reload this page.', 'soliloquy' ),
			'overview'				=> __( 'Overview', 'soliloquy' ),
			'page_title'			=> __( 'Soliloquy Settings', 'soliloquy' ),
			'plugin_details'		=> __( 'View version %1$s details', 'soliloquy' ),
			'plugin_settings'		=> __( 'Settings', 'soliloquy' ),
			'plugin_update_text'	=> __( 'You have version %1$s installed. Update to %2$s.', 'soliloquy' ),
			'plugins'				=> __( 'Plugins', 'soliloquy' ),
			'plugins_update_desc'	=> __( 'The following plugins have new versions available. Check the ones you want to update and then click &#8220;Update Plugins&#8221;. <strong>Update checks are performed automatically when you visit or reload this page.</strong>', 'soliloquy' ),
			'pm_cf_deleted'			=> __( 'Soliloquy slider custom field deleted.', 'soliloquy' ),
			'pm_cf_updated'			=> __( 'Soliloquy slider custom field updated.', 'soliloquy' ),
			'pm_draft'				=> __( 'Soliloquy slider draft updated.', 'soliloquy' ),
			'pm_general'			=> __( 'Soliloquy slider updated.', 'soliloquy' ),
			'pm_published'			=> __( 'Soliloquy slider published.', 'soliloquy' ),
			'pm_revision'			=> __( 'Soliloquy slider restored to revision from %s', 'soliloquy' ),
			'pm_saved'				=> __( 'Soliloquy slider saved.', 'soliloquy' ),
			'pm_scheduled'			=> __( 'Soliloquy slider scheduled for: <strong>%1$s</strong>.', 'soliloquy' ),
			'pm_submitted'			=> __( 'Soliloquy slider submitted.', 'soliloquy' ),
			'remove_image'			=> esc_attr__( 'Click Here to Remove Your Slide', 'soliloquy' ),
			'removing'				=> __( 'Removing...', 'soliloquy' ),
			'save_meta'				=> esc_attr__( 'Save Meta', 'soliloquy' ),
			'saved'					=> __( 'Saved.', 'soliloquy' ),
			'saving'				=> __( 'Saving...', 'soliloquy' ),
			'search'				=> __( 'Search', 'soliloquy' ),
			'searching'				=> __( 'Searching...', 'soliloquy' ),
			'select_all'			=> __( 'Select All', 'soliloquy' ),
			'sidebar_help_contact'	=> esc_attr__( 'Contact Soliloquy', 'soliloquy' ),
			'sidebar_help_support'	=> esc_attr__( 'Soliloquy Support', 'soliloquy' ),
			'sidebar_help_title'	=> __( 'For more information:', 'soliloquy' ),
			'slider_advanced'		=> __( 'Show Advanced Options?', 'soliloquy' ),
			'slider_advanced_desc'	=> __( 'Check this box to show more advanced settings for this slider.', 'soliloquy' ),
			'slider_animate'		=> __( 'Animate Slider Automatically?', 'soliloquy' ),
			'slider_animate_desc'	=> __( 'If unchecked, users must manually scroll through slides.', 'soliloquy' ),
			'slider_animation_dur'	=> __( 'Animation Duration', 'soliloquy' ),
			'slider_cb'				=> __( 'For more advanced functionality, please click on the contextual help tab at the top of this page.', 'soliloquy' ),
			'slider_cb_added'		=> __( 'added', 'soliloquy' ),
			'slider_cb_added_desc'	=> __( ' - Fires in the slider.addSlide() function. Dynamic action hook for this option callback: <code>tgmsp_callback_added_%s</code>', 'soliloquy' ),
			'slider_cb_after'		=> __( 'after', 'soliloquy' ),
			'slider_cb_after_desc'	=> __( ' - Fires after each slider animation completes. Dynamic action hook for this option callback: <code>tgmsp_callback_after_%s</code>', 'soliloquy' ),
			'slider_cb_before'		=> __( 'before', 'soliloquy' ),
			'slider_cb_before_desc'	=> __( ' - Fires asynchronously with each slider animation. Dynamic action hook for this option callback: <code>tgmsp_callback_before_%s</code>', 'soliloquy' ),
			'slider_cb_end'			=> __( 'end', 'soliloquy' ),
			'slider_cb_end_desc'	=> __( ' - Fires asynchronously when the slider reaches the last slide. Dynamic action hook for this option callback: <code>tgmsp_callback_end_%s</code>', 'soliloquy' ),
			'slider_cb_removed'		=> __( 'removed', 'soliloquy' ),
			'slider_cb_removed_desc'=> __( ' - Fires in the slider.removeSlide() function. Dynamic action hook for this option callback: <code>tgmsp_callback_removed_%s</code>', 'soliloquy' ),
			'slider_cb_start'		=> __( 'start', 'soliloquy' ),
			'slider_cb_start_desc'	=> __( ' - Fires when the slider loads the first slide. Dynamic action hook for this option callback: <code>tgmsp_callback_start_%s</code>', 'soliloquy' ),
			'slider_choose'			=> __( 'Choose Your Slider', 'soliloquy' ),
			'slider_control'		=> __( 'Use Control Navigation?', 'soliloquy' ),
			'slider_control_desc'	=> __( 'Create navigation for paging control of each slide?', 'soliloquy' ),
			'slider_css'			=> __( 'Use CSS Transitions?', 'soliloquy' ),
			'slider_css_desc'		=> __( 'CSS or JS transitions. CSS transitions are disabled when an embedded video is present.', 'soliloquy' ),
			'slider_default'		=> __( 'Slider Default Size', 'soliloquy' ),
			'slider_default_desc'	=> __( 'Specify an image size or use WordPress-generated image sizes.', 'soliloquy' ),
			'slider_delay'			=> __( 'Slider Delay', 'soliloquy' ),
			'slider_delay_desc'		=> __( 'Amount of time delay the start of the slider (in milliseconds).', 'soliloquy' ),
			'slider_hover'			=> __( 'Pause Slider on Hover?', 'soliloquy' ),
			'slider_insert_tb'		=> __( 'Insert into Slider', 'soliloquy' ),
			'slider_key'			=> __( 'Use Keyboard Navigation?', 'soliloquy' ),
			'slider_key_desc'		=> __( 'Allow slider navigation using left/right arrow keys?', 'soliloquy' ),
			'slider_loop'			=> __( 'Loop Animation?', 'soliloquy' ),
			'slider_loop_desc'		=> __( 'If unchecked, the slider will not loop from end to beginning and vice versa.', 'soliloquy' ),
			'slider_milliseconds'	=> __( 'Value is calculated using milliseconds.', 'soliloquy' ),
			'slider_mouse'			=> __( 'Use Mousewheel Navigation?', 'soliloquy' ),
			'slider_mouse_desc'		=> __( 'Allow slider navigation using a mousewheel? (uses <code>jquery.mousewheel.js</code>)', 'soliloquy' ),
			'slider_multi_key'		=> __( 'Enable Multi-Keyboard Navigation?', 'soliloquy' ),
			'slider_multi_key_desc'	=> __( 'Syncs all sliders on a page to the same keyboard strokes.', 'soliloquy' ),
			'slider_pause'			=> __( 'Pause When Using Controls?', 'soliloquy' ),
			'slider_pause_desc'		=> __( 'Pauses the slider when interacting with control elements (recommended).', 'soliloquy' ),
			'slider_pp'				=> __( 'Create Pause / Play Element?', 'soliloquy' ),
			'slider_pp_desc'		=> __( 'Create a dynamic pause / play element for this slider?', 'soliloquy' ),
			'slider_preloader'		=> __( 'Use Loading Icon?', 'soliloquy' ),
			'slider_preloader_desc'	=> __( 'Outputs a loading icon while your slider loads to prevent content shifting.', 'soliloquy' ),
			'slider_prevnext'		=> __( 'Use Previous / Next Navigation?', 'soliloquy' ),
			'slider_prevnext_desc'	=> __( 'Use previous / next arrow navigation?', 'soliloquy' ),
			'slider_random'			=> __( 'Randomize Slide Order?', 'soliloquy' ),
			'slider_reverse'		=> __( 'Reverse Animation Direction?', 'soliloquy' ),
			'slider_reverse_desc'	=> __( 'Reverses the default slider animation direction.', 'soliloquy' ),
			'slider_select'			=> __( 'Please select a slider.', 'soliloquy' ),
			'slider_select_desc'	=> __( 'Select a slider below from the list of available sliders and then click \'Insert\' to place the slider into the editor.', 'soliloquy' ),
			'slider_select_insert'	=> esc_attr__( 'Insert Slider', 'soliloquy' ),
			'slider_select_cancel'	=> esc_attr__( 'Cancel Slider Insertion', 'soliloquy' ),
			'slider_size'			=> __( 'Slider Size', 'soliloquy' ),
			'slider_size_desc'		=> __( 'The <strong>relative</strong> size of the slider in pixels (<strong>width</strong> &#215; <strong>height</strong>).', 'soliloquy' ),
			'slider_size_more'		=> __( 'Click here to learn more', 'soliloquy' ),
			'slider_size_explain'	=> __( '<strong>When setting your own slider size, the width and height of your images must match your specified size.</strong> This setting provides a truly responsive option for your slider and will not crop or adjust images exactly to the specified dimensions. This setting will only scale your images in proportion to the size you specify. If your images are different sizes, select the custom size option and then choose a WordPress-generated size for your slider. You can add your own sizes to this list using the function ', 'soliloquy' ),
			'slider_smooth'			=> __( 'Use Smooth Height?', 'soliloquy' ),
			'slider_smooth_desc'	=> __( 'Animates the height of the slider smoothly (recommended).', 'soliloquy' ),
			'slider_speed'			=> __( 'Slider Speed', 'soliloquy' ),
			'slider_start'			=> __( 'Slide Number To Start On', 'soliloquy' ),
			'slider_start_desc'		=> __( 'The number of the starting slide (0 = first slide, default).', 'soliloquy' ),
			'slider_touch'			=> __( 'Enable Touch Swiping?', 'soliloquy' ),
			'slider_touch_desc'		=> __( 'Enables touch swipe support for touch-enabled devices (recommended).', 'soliloquy' ),
			'slider_transition'		=> __( 'Slider Transition', 'soliloquy' ),
			'slider_type'			=> __( 'What type of slider do you want to create?', 'soliloquy' ),
			'slider_type_default'	=> __( 'Default Slider', 'soliloquy' ),
			'slider_video'			=> __( 'Add Embedded Video Support?', 'soliloquy' ),
			'slider_video_desc'		=> __( 'Enables embedded video support for the slider.', 'soliloquy' ),
			'specific'				=> __( 'The fields below are specific to Soliloquy.', 'soliloquy' ),
			'tab'					=> __( 'Tab', 'soliloquy' ),
			'update_available'		=> esc_attr__( 'Update Available', 'soliloquy' ),
			'update_compat'			=> __( 'Compatibility with WordPress %1$s: 100%% (according to its author)', 'soliloquy' ),
			'update_meta'			=> __( 'Update Image Metadata', 'soliloquy' ),
			'update_plugins'		=> __( 'Update Plugins', 'soliloquy' ),
			'update_html_meta'		=> __( 'Update HTML Metadata', 'soliloquy' ),
			'update_video_meta'		=> __( 'Update Video Metadata', 'soliloquy' ),
			'updates_menu_title'	=> __( 'Updates', 'soliloquy' ),
			'updates_page_title'	=> __( 'Soliloquy Updates', 'soliloquy' ),
			'upload_images'			=> esc_attr__( 'Click Here to Upload Slides', 'soliloquy' ),
			'upload_images_tb'		=> __( 'Upload Your Images', 'soliloquy' ),
			'upload_info'			=> __( 'Click on the button below to select and upload your images. Once your images have been uploaded, you can customize their properties and sort them according to your needs. The images will appear below the upload button as thumbnail versions of their actual size.', 'soliloquy' ),
			'upload_ui'				=> __( 'Format and Insert Slides', 'soliloquy' ),
			'uploading_html'		=> __( 'Creating HTML Slides', 'soliloquy' ),
			'uploading_html_desc'	=> __( 'Each HTML slide should have its own unique name (for identification purposes) and code for outputting into the slider. The code will be inserted inside of the slide <code>&lt;li&gt;</code> tag and can be styled with custom CSS as you need.', 'soliloquy' ),
			'uploading_images'		=> __( 'Uploading Images', 'soliloquy' ),
			'uploading_images_desc' => __( 'Images that have been uploaded from your computer will automatically be inserted into your slider. Once they have been uploaded, you can manage the images, modify captions, adjust image titles and more by clicking on the pencil icon above each image in the drag-and-drop area.', 'soliloquy' ),
			'uploading_vid'			=> __( 'Creating Video Slides', 'soliloquy' ),
			'uploading_vid_desc'	=> __( 'Each video slide should have its own unique name (for identification purposes) and the relevant URL scheme allowed for the video. Only YouTube and Vimeo videos are supported, and the URL entered for the video should match one of the examples listed below the slide insertion area.', 'soliloquy' ),
			'verify_key'			=> esc_attr__( 'Verify Your License Key', 'soliloquy' ),
			'video'					=> __( 'Video Slides', 'soliloquy' ),
			'video_caption'			=> __( 'Video Slide Caption', 'soliloquy' ),
			'video_dimensions'		=> __( 'Video Dimensions', 'soliloquy' ),
			'videoinsert'			=> __( 'Insert Video Slides', 'soliloquy' ),
			'video_link_info'		=> __( 'Video links can be from either YouTube or Vimeo. They must follow one of the formats listed below:', 'soliloquy' ),
			'video_link_error'		=> __( 'There was an error validating your video URL. Please update the video URL, save your changes and refresh your page.', 'soliloquy' ),
			'video_slide'			=> __( 'Video Slide Title', 'soliloquy' ),
			'video_slide_mini'		=> __( 'VIDEO', 'soliloquy' ),
			'video_slide_place'		=> __( 'Enter video slide title here...', 'soliloquy' ),
			'video_title'			=> __( 'Video Slide URL', 'soliloquy' ),
			'video_output'			=> __( 'Enter your video URL here...', 'soliloquy' ),
			'vimeo_urls'			=> __( 'Vimeo URLs', 'soliloquy' ),
			'widget_slider'			=> __( 'Slider', 'soliloquy' ),
			'widget_title'			=> __( 'Title', 'soliloquy' ),
			'wp_size'				=> __( 'Select an image size from those registered with WordPress.', 'soliloquy' ),
			'youtube_urls'			=> __( 'YouTube URLs', 'soliloquy' )
		) );

	}

	/**
	 * Getter method for retrieving the object instance.
	 *
	 * @since 1.0.0
	 */
	public static function get_instance() {

		return self::$instance;

	}

}