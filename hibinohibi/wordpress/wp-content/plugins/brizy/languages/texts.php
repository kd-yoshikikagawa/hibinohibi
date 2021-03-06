<?php
class Brizy_Languages_Texts
{

	public static function get_editor_texts()
	{
		$texts = array(
			// First Block Adder
			"START BUILDING YOUR PAGE" => __("START BUILDING YOUR PAGE", "brizy"),
			"Press the button above to add blocks" => __(
				"Press the button above to add blocks",
				"brizy"
			),
			"SWITCH TO DESKTOP" => __("SWITCH TO DESKTOP", "brizy"),
			"Switch to desktop to add blocks" => __(
				"Switch to desktop to add blocks",
				"brizy"
			),
		
			// Last Block Adder
			"Add a new block" => __("Add a new block", "brizy"),
			"Press the button to add blocks" => __(
				"Press the button to add blocks",
				"brizy"
			),
		
			// Left SideBar
			//-> Add Elements
			"Add Elements" => __("Add Elements", "brizy"),
			"Text" => __("Text", "brizy"),
			"Button" => __("Button", "brizy"),
			"Icon" => __("Icon", "brizy"),
			"Image" => __("Image", "brizy"),
			"Video" => __("Video", "brizy"),
			"Spacer" => __("Spacer", "brizy"),
			"Line" => __("Line", "brizy"),
			"Map" => __("Map", "brizy"),
			"Embed" => __("Embed", "brizy"),
			"Form" => __("Form", "brizy"),
			"Icon Box" => __("Icon Box", "brizy"),
			"SndCloud" => __("SndCloud", "brizy"),
			"Counter" => __("Counter", "brizy"),
			"Countdown" => __("Countdown", "brizy"),
			"Tabs" => __("Tabs", "brizy"),
			"Progress" => __("Progress", "brizy"),
			"Accordion" => __("Accordion", "brizy"),
			"Row" => __("Row", "brizy"),
			"Column" => __("Column", "brizy"),
			"Rows" => __("Rows", "brizy"),
			"Columns" => __("Columns", "brizy"),
			"Add to cart" => __("Add to cart", "brizy"),
			"Categories" => __("Categories", "brizy"),
			"Layouts" => __("Layouts", "brizy"),
			"layouts" => __("layouts", "brizy"),
			"layout" => __("layout", "brizy"),
			"Product" => __("Product", "brizy"),
			"Products" => __("Products", "brizy"),
			"Shortcode" => __("Shortcode", "brizy"),
			"Menu" => __("Menu", "brizy"),
			"WP Menu" => __("WP Menu", "brizy"),
			"Posts" => __("Posts", "brizy"),
			"Archives" => __("Archives", "brizy"),
			"Taxonomy" => __("Taxonomy", "brizy"),
			"Pagination" => __("Pagination", "brizy"),
			"Sidebar" => __("Sidebar", "brizy"),
			//-> Reorder Blocks
			"Reorder Blocks" => __("Reorder Blocks", "brizy"),
			"Drag to reorder" => __("Drag to reorder", "brizy"),
			//-> Styling
			"Styling" => __("Styling", "brizy"),
			"Add New Google Font" => __("Add New Google Font", "brizy"),
			"Type font name" => __("Type font name", "brizy"),
			"Add new option" => __("Add new option", "brizy"),
			"Add New" => __("Add New", "brizy"),
			"New Style #%s" => __("New Style #%s", "brizy"),
			"Copy" => __("Copy", "brizy"),
			"Paste" => __("Paste", "brizy"),
			"Paste Styles" => __("Paste Styles", "brizy"),
			//-> Device Mode
			"Mobile view" => __("Mobile view", "brizy"),
			"Tablet view" => __("Tablet view", "brizy"),
			"Desktop" => __("Desktop", "brizy"),
			"Tablet" => __("Tablet", "brizy"),
			"Mobile" => __("Mobile", "brizy"),
			//-> More
			"More" => __("More", "brizy"),
			"About Brizy" => __("About Brizy", "brizy"),
			"Back to Brizy" => __("Back to Brizy", "brizy"),
			"Plugin Settings" => __("Plugin Settings", "brizy"),
			"Back to WordPress" => __("Back to WordPress", "brizy"),
			"Featured Image" => __("Featured Image", "brizy"),
			"Submit an Issue" => __("Submit an Issue", "brizy"),
			"Upgrade to Pro" => __("Upgrade to Pro", "brizy"),
		
			// Fixed Bottom Panel
			"Save HTML" => __("Save HTML", "brizy"),
			"Update" => __("Update", "brizy"),
			"Publish" => __("Publish", "brizy"),
		
			// Right SideBar
			"More Settings" => __("More Settings", "brizy"),
			"Advanced" => __("Advanced", "brizy"),
			"Show on Desktop" => __("Show on Desktop", "brizy"),
			"Disable on Mobile" => __("Disable on Mobile", "brizy"),
			"Disable on Tablet" => __("Disable on Tablet", "brizy"),
			"Enable on Mobile" => __("Enable on Mobile", "brizy"),
			"Enable on Tablet" => __("Enable on Tablet", "brizy"),
			"Write your CSS here..." => __("Write your CSS here...", "brizy"),
			"Z-index" => __("Z-index", "brizy"),
			"Anchor Name" => __("Anchor Name", "brizy"),
			"CSS Class" => __("CSS Class", "brizy"),
			"Custom CSS" => __("Custom CSS", "brizy"),
		
		
			// Section
			"Slider" => __("Slider", "brizy"),
			//-> Make a Slider
			"Make it a Slider" => __("Make it a Slider", "brizy"),
			"Auto Play" => __("Auto Play", "brizy"),
			"Speed" => __("Speed", "brizy"),
			"Navigation" => __("Navigation", "brizy"),
			"Dots" => __("Dots", "brizy"),
			"None" => __("None", "brizy"),
			"Circle" => __("Circle", "brizy"),
			"Diamond" => __("Diamond", "brizy"),
			"Square" => __("Square", "brizy"),
			"Arrows" => __("Arrows", "brizy"),
			"Arrows Spacing" => __("Arrows Spacing", "brizy"),
			"Thin" => __("Thin", "brizy"),
			"Heavy" => __("Heavy", "brizy"),
			"Tail" => __("Tail", "brizy"),
			"Round" => __("Round", "brizy"),
			"Outline" => __("Outline", "brizy"),
			//-> Settings
			"Full Height" => __("Full Height", "brizy"),
			"Width" => __("Width", "brizy"),
			"Height" => __("Height", "brizy"),
			"Boxed" => __("Boxed", "brizy"),
			"Auto" => __("Auto", "brizy"),
			"Custom" => __("Custom", "brizy"),
			"Full" => __("Full", "brizy"),
			"Hover Transition" => __("Hover Transition", "brizy"),
		
			"Carousel" => __("Carousel", "brizy"),
			"Swipe" => __("Swipe", "brizy"),
		
			// Not Found
			"Missing Element" => __("Missing Element", "brizy"),
			"Could not find" => __("Could not find", "brizy"),
			"component" => __("component", "brizy"),
		
			// Popover
			"Add New Column" => __("Add New Column", "brizy"),
			//-> Bg
			"Background" => __("Background", "brizy"),
			"Bg Size" => __("Bg Size", "brizy"),
			"Parallax" => __("Parallax", "brizy"),
			"Fixed" => __("Fixed", "brizy"),
			"Animated" => __("Animated", "brizy"),
			"Sticky" => __("Sticky", "brizy"),
			"URL" => __("URL", "brizy"),
			"YouTube or Vimeo" => __("YouTube or Vimeo", "brizy"),
			"Quality" => __("Quality", "brizy"),
			"1080p" => __("1080p", "brizy"),
			"720p" => __("720p", "brizy"),
			"Loop" => __("Loop", "brizy"),
			"Address" => __("Address", "brizy"),
			"Enter address" => __("Enter address", "brizy"),
			"Zoom" => __("Zoom", "brizy"),
			//-> Colors
			"Colors" => __("Colors", "brizy"),
			"Color" => __("Color", "brizy"),
			"Overlay" => __("Overlay", "brizy"),
			"Border" => __("Border", "brizy"),
			"Solid" => __("Solid", "brizy"),
			"Gradient" => __("Gradient", "brizy"),
			"Linear" => __("Linear", "brizy"),
			"Radial" => __("Radial", "brizy"),
			//-> Settings
			"Dynamic Content" => __("Dynamic Content", "brizy"),
			"Settings" => __("Settings", "brizy"),
			//-> Duplicate & Delete
			"Duplicate" => __("Duplicate", "brizy"),
			"Delete" => __("Delete", "brizy"),
			//-> Animation
			"Entrance Animation" => __("Entrance Animation", "brizy"),
			"Duration" => __("Duration", "brizy"),
			"Delay" => __("Delay", "brizy"),
			"Bounce" => __("Bounce", "brizy"),
			"Flash" => __("Flash", "brizy"),
			"Pulse" => __("Pulse", "brizy"),
			"RubberBand" => __("RubberBand", "brizy"),
			"Shake" => __("Shake", "brizy"),
			"Swing" => __("Swing", "brizy"),
			"Tada" => __("Tada", "brizy"),
			"Wobble" => __("Wobble", "brizy"),
			"Jello" => __("Jello", "brizy"),
			"BounceIn" => __("BounceIn", "brizy"),
			"BounceInDown" => __("BounceInDown", "brizy"),
			"BounceInLeft" => __("BounceInLeft", "brizy"),
			"BounceInRight" => __("BounceInRight", "brizy"),
			"BounceInUp" => __("BounceInUp", "brizy"),
			"BounceOut" => __("BounceOut", "brizy"),
			"BounceOutDown" => __("BounceOutDown", "brizy"),
			"BounceOutLeft" => __("BounceOutLeft", "brizy"),
			"BounceOutRight" => __("BounceOutRight", "brizy"),
			"BounceOutUp" => __("BounceOutUp", "brizy"),
			"FadeIn" => __("FadeIn", "brizy"),
			"FadeInDown" => __("FadeInDown", "brizy"),
			"FadeInDownBig" => __("FadeInDownBig", "brizy"),
			"FadeInLeft" => __("FadeInLeft", "brizy"),
			"FadeInLeftBig" => __("FadeInLeftBig", "brizy"),
			"FadeInRight" => __("FadeInRight", "brizy"),
			"FadeInRightBig" => __("FadeInRightBig", "brizy"),
			"FadeInUp" => __("FadeInUp", "brizy"),
			"FadeInUpBig" => __("FadeInUpBig", "brizy"),
			"FadeOut" => __("FadeOut", "brizy"),
			"FadeOutDown" => __("FadeOutDown", "brizy"),
			"FadeOutDownBig" => __("FadeOutDownBig", "brizy"),
			"FadeOutLeft" => __("FadeOutLeft", "brizy"),
			"FadeOutLeftBig" => __("FadeOutLeftBig", "brizy"),
			"FadeOutRight" => __("FadeOutRight", "brizy"),
			"FadeOutRightBig" => __("FadeOutRightBig", "brizy"),
			"FadeOutUp" => __("FadeOutUp", "brizy"),
			"FadeOutUpBig" => __("FadeOutUpBig", "brizy"),
			"Flip" => __("Flip", "brizy"),
			"FlipInX" => __("FlipInX", "brizy"),
			"FlipInY" => __("FlipInY", "brizy"),
			"FlipOutX" => __("FlipOutX", "brizy"),
			"FlipOutY" => __("FlipOutY", "brizy"),
			"LightSpeedIn" => __("LightSpeedIn", "brizy"),
			"RotateIn" => __("RotateIn", "brizy"),
			"RotateInDownLeft" => __("RotateInDownLeft", "brizy"),
			"RotateInDownRight" => __("RotateInDownRight", "brizy"),
			"RotateInUpLeft" => __("RotateInUpLeft", "brizy"),
			"RotateInUpRight" => __("RotateInUpRight", "brizy"),
			"RotateOut" => __("RotateOut", "brizy"),
			"RotateOutDownLeft" => __("RotateOutDownLeft", "brizy"),
			"RotateOutDownRight" => __("RotateOutDownRight", "brizy"),
			"RotateOutUpLeft" => __("RotateOutUpLeft", "brizy"),
			"RotateOutUpRight" => __("RotateOutUpRight", "brizy"),
			"SlideInUp" => __("SlideInUp", "brizy"),
			"SlideInDown" => __("SlideInDown", "brizy"),
			"SlideInLeft" => __("SlideInLeft", "brizy"),
			"SlideInRight" => __("SlideInRight", "brizy"),
			"SlideOutUp" => __("SlideOutUp", "brizy"),
			"SlideOutDown" => __("SlideOutDown", "brizy"),
			"SlideOutLeft" => __("SlideOutLeft", "brizy"),
			"SlideOutRight" => __("SlideOutRight", "brizy"),
			"ZoomIn" => __("ZoomIn", "brizy"),
			"ZoomInDown" => __("ZoomInDown", "brizy"),
			"ZoomInLeft" => __("ZoomInLeft", "brizy"),
			"ZoomInRight" => __("ZoomInRight", "brizy"),
			"ZoomInUp" => __("ZoomInUp", "brizy"),
			"ZoomOut" => __("ZoomOut", "brizy"),
			"ZoomOutDown" => __("ZoomOutDown", "brizy"),
			"ZoomOutLeft" => __("ZoomOutLeft", "brizy"),
			"ZoomOutRight" => __("ZoomOutRight", "brizy"),
			"ZoomOutUp" => __("ZoomOutUp", "brizy"),
			"Hinge" => __("Hinge", "brizy"),
			"JackInTheBox" => __("JackInTheBox", "brizy"),
			"RollIn" => __("RollIn", "brizy"),
			"RollOut" => __("RollOut", "brizy"),
			//-> Align
			"Content" => __("Content", "brizy"),
			"Align" => __("Align", "brizy"),
			"Position" => __("Position", "brizy"),
			//-> Typography
			"Typography" => __("Typography", "brizy"),
			"Font Family" => __("Font Family", "brizy"),
			"Size" => __("Size", "brizy"),
			"Line Hgt." => __("Line Hgt.", "brizy"),
			"Letter Sp." => __("Letter Sp.", "brizy"),
			"List" => __("List", "brizy"),
			"Bold" => __("Bold", "brizy"),
			"Italic" => __("Italic", "brizy"),
			"Gap Above" => __("Gap Above", "brizy"),
			"Gap Below" => __("Gap Below", "brizy"),
			"HTML Tag" => __("HTML Tag", "brizy"),
			"P" => __("P", "brizy"),
			"H1" => __("H1", "brizy"),
			"H2" => __("H2", "brizy"),
			"H3" => __("H3", "brizy"),
			"H4" => __("H4", "brizy"),
			"H5" => __("H5", "brizy"),
			"H6" => __("H6", "brizy"),
			"PRE" => __("PRE", "brizy"),
			"Editable Text" => __("Editable Text", "brizy"),
			//-> Link
			"Link" => __("Link", "brizy"),
			"Anchor" => __("Anchor", "brizy"),
			"Link to" => __("Link to", "brizy"),
			"Open In New Tab" => __("Open In New Tab", "brizy"),
		
			// Option Style Element: padding, margin, border etc
			"Padding" => __("Padding", "brizy"),
			"Margin" => __("Margin", "brizy"),
			"Corner" => __("Corner", "brizy"),
			"Fill" => __("Fill", "brizy"),
			"Spacing" => __("Spacing", "brizy"),
		
			// Shadow
			"Shadow" => __("Shadow","brizy"),
		
			// State
			"Normal" => __("Normal", "brizy"),
			"Hover" => __("Hover", "brizy"),
		
			// Reverse Columns
			"Reverse Columns" => __("Reverse Columns", "brizy"),
		
			// Other Option in Shortcode
			//-> CountDown
			"Date" => __("Date", "brizy"),
			"Hour" => __("Hour", "brizy"),
			"Minutes" => __("Minutes", "brizy"),
			"Time Zone" => __("Time Zone", "brizy"),
			"- 11:00 (Niue)" => __("- 11:00 (Niue)", "brizy"),
			"- 10:00 (Honolulu, Papeete)" => __("- 10:00 (Honolulu, Papeete)", "brizy"),
			"- 9:00 (Anchorage)" => __("- 9:00 (Anchorage)", "brizy"),
			"- 8:00 (Los Angeles)" => __("- 8:00 (Los Angeles)", "brizy"),
			"- 7:00 (Denver, Phoenix)" => __("- 7:00 (Denver, Phoenix)", "brizy"),
			"- 6:00 (Chicago, Dallas)" => __("- 6:00 (Chicago, Dallas)", "brizy"),
			"- 5:00 (New York, Miami)" => __("- 5:00 (New York, Miami)", "brizy"),
			"- 4:00 (Halifax, Manaus)" => __("- 4:00 (Halifax, Manaus)", "brizy"),
			"- 3:00 (Brasilia, Santiago)" => __("- 3:00 (Brasilia, Santiago)", "brizy"),
			"- 2:00 (Noronha)" => __("- 2:00 (Noronha)", "brizy"),
			"- 1:00 (Cape Verde)" => __("- 1:00 (Cape Verde)", "brizy"),
			"00:00 (London, Dublin)" => __("00:00 (London, Dublin)", "brizy"),
			"+ 1:00 (Berlin, Paris)" => __("+ 1:00 (Berlin, Paris)", "brizy"),
			"+ 2:00 (Athens, Istanbul)" => __("+ 2:00 (Athens, Istanbul)", "brizy"),
			"+ 3:00 (Moscow, Baghdad)" => __("+ 3:00 (Moscow, Baghdad)", "brizy"),
			"+ 4:00 (Dubai, Baku)" => __("+ 4:00 (Dubai, Baku)", "brizy"),
			"+ 5:00 (Yekaterinburg)" => __("+ 5:00 (Yekaterinburg)", "brizy"),
			"+ 6:00 (Astana)" => __("+ 6:00 (Astana)", "brizy"),
			"+ 7:00 (Bangkok, Jakarta)" => __("+ 7:00 (Bangkok, Jakarta)", "brizy"),
			"+ 8:00 (Singapore, Beijing)" => __("+ 8:00 (Singapore, Beijing)", "brizy"),
			"+ 9:00 (Tokyo, Seoul)" => __("+ 9:00 (Tokyo, Seoul)", "brizy"),
			"+ 10:00 (Sidney, Melbourne)" => __("+ 10:00 (Sidney, Melbourne)", "brizy"),
			"+ 11:00 (Ponape)" => __("+ 11:00 (Ponape)", "brizy"),
			"+ 12:00 (Auckland)" => __("+ 12:00 (Auckland)", "brizy"),
			"Language" => __("Language", "brizy"),
			"German" => __("German", "brizy"),
			"English" => __("English", "brizy"),
			"Spanish" => __("Spanish", "brizy"),
			"French" => __("French", "brizy"),
			"Italian" => __("Italian", "brizy"),
			"Dutch" => __("Dutch", "brizy"),
			"Russian" => __("Russian", "brizy"),
			//-> Counter
			"Start" => __("Start", "brizy"),
			"End" => __("End", "brizy"),
			//-> Embed Code
			"Paste your code here..." => __("Paste your code here...", "brizy"),
			//-> Form
			"Field" => __("Field", "brizy"),
			"Field Type" => __("Field Type", "brizy"),
			"Label" => __("Label", "brizy"),
			"Message" => __("Message", "brizy"),
			"Success" => __("Success", "brizy"),
			"Error" => __("Error", "brizy"),
			"Message sent" => __("Message sent", "brizy"),
			"Message not sent" => __("Message not sent", "brizy"),
			"Redirect" => __("Redirect", "brizy"),
			"Go to" => __("Go to", "brizy"),
			"Required" => __("Required", "brizy"),
			"Email" => __("Email", "brizy"),
			"Number" => __("Number", "brizy"),
			"Paragraph" => __("Paragraph", "brizy"),
			"Select" => __("Select", "brizy"),
		
			//-> Image
			"Style" => __("Style", "brizy"),
			"Opacity" => __("Opacity", "brizy"),
			"Contrast" => __("Contrast", "brizy"),
			"Hue" => __("Hue", "brizy"),
			"Brightness" => __("Brightness", "brizy"),
			"Saturation" => __("Saturation", "brizy"),
			//-> LightBox
			"LightBox" => __("LightBox", "brizy"),
			"Open in Lightbox" => __("Open in Lightbox", "brizy"),
			//-> Gallery
			"Gallery" => __("Gallery", "brizy"),
			//-> ProgressBar
			"Percentage" => __("Percentage", "brizy"),
			"Show Percentage" => __("Show Percentage", "brizy"),
			"Bar" => __("Bar", "brizy"),
			//-> SoundCloud
			"SoundCloud" => __("SoundCloud", "brizy"),
			"SoundCloud Link" => __("SoundCloud Link", "brizy"),
			//-> Video
			"Video Link" => __("Video Link", "brizy"),
			"Ratio" => __("Ratio", "brizy"),
			"Controls" => __("Controls", "brizy"),
			"Cover" => __("Cover", "brizy"),
			"Play" => __("Play", "brizy"),
		
			// Header
			"Header" => __("Header", "brizy"),
		
			// Footer
			"Footer" => __("Footer", "brizy"),
			"MultiPage" => __("MultiPage", "brizy"),
		
			// SectionMenu
			"Type" => __("Type", "brizy"),
			"Static" => __("Static", "brizy"),
		
			// No matches found
			"No matches found" => __("No matches found", "brizy"),
		
			// Popup
			"Popup" => __("Popup", "brizy"),
			"Close" => __("Close", "brizy"),
		
			// Facebook
			"Comments" => __("Comments", "brizy"),
			"Like" => __("Like", "brizy"),
			"Recommend" => __("Recommend", "brizy"),
			"Include Share Button" => __("Include Share Button", "brizy"),
			"Show Friends' Faces" => __("Show Friends' Faces", "brizy"),
			"Show Button Counter" => __("Show Button Counter", "brizy"),
			"Dark Scheme" => __("Dark Scheme", "brizy"),
			"Target URL" => __("Target URL", "brizy"),
			"Current Page" => __("Current Page", "brizy"),
			"Custom Page" => __("Custom Page", "brizy"),
			"Include Full Post" => __("Include Full Post", "brizy"),
			"Full Screen" => __("Full Screen", "brizy"),
			"AutoPlay" => __("AutoPlay", "brizy"),
			"Captions" => __("Captions", "brizy"),
			"Timeline" => __("Timeline", "brizy"),
			"Events" => __("Events", "brizy"),
			"Messages" => __("Messages", "brizy"),
			"Use Small Header" => __("Use Small Header", "brizy"),
			"Hide Cover Photo" => __("Hide Cover Photo", "brizy"),
			"Show Friend's Faces" => __("Show Friend's Faces", "brizy"),
			"Facebook Button" => __("Facebook Button", "brizy"),
			"Facebook Comments" => __("Facebook Comments", "brizy"),
			"Facebook Embed" => __("Facebook Embed", "brizy"),
			"Facebook Page" => __("Facebook Page", "brizy"),
			// Add block
			"Back to Layouts" => __("Back to Layouts", "brizy"),
			"layouts" => __("layouts", "brizy"),
			"Import This Layout" => __("Import This Layout", "brizy"),
			"Nothing here yet, save a block first." => __("Nothing here yet, save a block first.", "brizy"),
			"Nothing here yet, make a global block first." => __("Nothing here yet, make a global block first.", "brizy"),
			// WordPress
			"Query" => __("Query", "brizy"),
			"Product ID" => __("Product ID", "brizy"),
			"Product ID or SKU" => __("Product ID or SKU", "brizy"),
			"Products Count" => __("Products Count", "brizy"),
			"Layout" => __("Layout", "brizy"),
			"Style Add to Cart" => __("Style Add to Cart", "brizy"),
			"Categories Count" => __("Categories Count", "brizy"),
			"Order" => __("Order", "brizy"),
			"Asc" => __("Asc", "brizy"),
			"Desc" => __("Desc", "brizy"),
			"Order By" => __("Order By", "brizy"),
			"Name" => __("Name", "brizy"),
			"Slug" => __("Slug", "brizy"),
			"Description" => __("Description", "brizy"),
			"Count" => __("Count", "brizy"),
			"Page" => __("Page", "brizy"),
			"Cart" => __("Cart", "brizy"),
			"Checkout" => __("Checkout", "brizy"),
			"My Account" => __("My Account", "brizy"),
			"Order Tracking" => __("Order Tracking", "brizy"),
			"Filter" => __("Filter", "brizy"),
			"Title" => __("Title", "brizy"),
			"Rating" => __("Rating", "brizy"),
			"Popularity" => __("Popularity", "brizy"),
			"Menu Order" => __("Menu Order", "brizy"),
			"Random" => __("Random", "brizy"),
			"ID" => __("ID", "brizy"),
			"Paste your wordpress shortcode here..." => __("Paste your wordpress shortcode here...", "brizy"),
			"Weight" => __("Weight", "brizy"),
			"Post Type" => __("Post Type", "brizy"),
			"Post" => __("Post", "brizy"),
			"Number posts" => __("Number posts", "brizy"),
			"Category" => __("Category", "brizy"),
			"Author" => __("Author", "brizy"),
			"Include" => __("Include", "brizy"),
			"Exclude" => __("Exclude", "brizy"),
			"Status" => __("Status", "brizy"),
			"Future" => __("Future", "brizy"),
			"Draft" => __("Draft", "brizy"),
			"Pending" => __("Pending", "brizy"),
			"Private" => __("Private", "brizy"),
			"Trash" => __("Trash", "brizy"),
			"Auto-Draft" => __("Auto-Draft", "brizy"),
			"Inherit" => __("Inherit", "brizy"),
			"Meta Key" => __("Meta Key", "brizy"),
			"Meta Value" => __("Meta Value", "brizy"),
			"Modified" => __("Modified", "brizy"),
			"Parent" => __("Parent", "brizy"),
			"Comment Count" => __("Comment Count", "brizy"),
			"Filter By" => __("Filter By", "brizy"),
			"Block" => __("Block", "brizy"),
			"Make it Global" => __("Make it Global", "brizy"),
			"Save" => __("Save", "brizy"),
			"Blocks" => __("Blocks", "brizy"),
			"Saved Blocks" => __("Saved Blocks", "brizy"),
			"Global Blocks" => __("Global Blocks", "brizy"),
			"Light" => __("Light", "brizy"),
			"Dark" => __("Dark", "brizy"),
			"All Categories" => __("All Categories", "brizy"),
			"Enter Search Keyword" => __("Enter Search Keyword", "brizy"),
			"Type to search" => __("Type to search", "brizy"),
			"Add a blank block" => __("Add a blank block", "brizy"),
			"An error happened while trying to display this block" => __("An error happened while trying to display this block", "brizy"),
			"You can" => __("You can", "brizy"),
			"open an issue" => __("open an issue", "brizy"),
			"or" => __("or", "brizy"),
			"remove this block" => __("remove this block", "brizy"),
			"Page Template" => __("Page Template", "brizy"),
			"Toggle Menu" => __("Toggle Menu", "brizy"),
			"Make it Nofollow" => __("Make it Nofollow", "brizy"),
			"Dividers" => __("Dividers", "brizy"),
			"Arrangement" => __("Arrangement", "brizy"),
			"Repeat" => __("Repeat", "brizy"),
			"Make it Hamburger" => __("Make it Hamburger", "brizy"),
			"Add a Menu" => __("Add a Menu", "brizy"),
			"Please select a menu" => __("Please select a menu", "brizy"),
			"Select a Menu" => __("Select a Menu", "brizy"),
			"in your WordPress admin" => __("in your WordPress admin", "brizy"),
			"Drawer Position" => __("Drawer Position", "brizy"),
			"anchor-name" => __("anchor-name", "brizy"),
			"APPS" => __("APPS", "brizy"),
			"It's a sample" => __("It's a sample", "brizy")
		);

		return apply_filters('brizy_editor_config_texts', $texts);
	}

}
