<?php 
$shortcodes = array(
	"button-pink" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Pink Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode"),
        "description" => __("Inserts a pink button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
	"button-grey" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Grey Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode"),
        "description" => __("Inserts a grey button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),

    "button-brown" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Brown Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode"),
        "description" => __("Inserts a brown button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
    "button-blue" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Blue Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a blue button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
	"button-lightblue" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Light Blue Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a light blue button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
    "button-green" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Green Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a green button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
    "button-red" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Red Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a red button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
    "button-white" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("White Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a white button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
	"button-orange" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Orange Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a orange button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
	"button-yellow" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Yellow Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a yellow button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
	"button-black" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Black Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a black button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
	
	"button-purple" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self"
        ),
        "label" => __("Purple Button", "niteshortcode"),
        "content" => __("Button text", "niteshortcode") ,
        "description" => __("Inserts a purple button. Set target to <strong>_blank</strong> to open link in a new window.", "niteshortcode")
    ),
	
	
    "alert-note" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Alert Note", "niteshortcode"),
        "content" => __("Note text", "niteshortcode"),
        "description" => __("Display a note.", "niteshortcode")
    ),
    "alert-announce" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Alert Announce", "niteshortcode"),
        "content" => __("Announce text", "niteshortcode"),
        "description" => __("Display an announcement.", "niteshortcode")
    ),
    "alert-success" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Alert Success", "niteshortcode"),
        "content" => __("Success text", "niteshortcode"),
        "description" => __("Display a success message.", "niteshortcode")
    ),
    "alert-warning" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Alert Warning", "niteshortcode"),
        "content" => __("Warning text", "niteshortcode"),
        "description" => __("Display warning or error message.", "niteshortcode")
    ),
    "dropcaps" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Dropcaps", "niteshortcode"),
        "content" => __("Dropcaps Content", "niteshortcode"),
        "description" => __("Enter text", "niteshortcode")
    ),
    "youtube" => array(
        "self-closing" => true,
        "atts" => array(
            "id" => "#",
            "width" => "600",
            "height" => "340",
            "position" => "left"
        ),
        "label" => __("YouTube Video", "niteshortcode"),
        "content" => "",
        "description" => __("Embed a Youtube Video", "niteshortcode")
    ),
    "vimeo" => array(
        "self-closing" => true,
        "atts" => array(
            "id" => "#",
            "width" => "600",
            "height" => "340",
            "position" => "left"
        ),
        "label" => __("Vimeo Video", "niteshortcode"),
        "content" => "",
        "description" => __("Embed a Vimeo Video.", "niteshortcode")
    ),
    "googlemap" => array(
        "self-closing" => true,
        "atts" => array(
            "address" => "Libertyville, Illinois, USA",
            "width" => "600",
            "height" => "340",
            "position" => "left"
        ),
        "label" => __("Google Map", "niteshortcode"),
        "content" => "",
        "description" => __("Embed a Google Map. Insert address or GPS location.", "niteshortcode")
    ),
    "toggle" => array(
        "self-closing" => false,
        "atts" => array(
            "title" => "Toggle Title"
        ),
        "label" => __("Toggle", "niteshortcode"),
        "content" => __("Insert Content Here", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Content will be shown after clicking on the toggle title.", "niteshortcode")
    ),
    "tabs" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Tabs", "niteshortcode"),
        "content" => __("[tab title=&quot;Tab 1 Title&quot;]Insert tab 1 content here[/tab]\n[tab title=&quot;Tab 2 Title&quot;]Insert tab 2 content here[/tab]\n[tab title=&quot;Tab 3 Title&quot;]Insert tab 3 content here[/tab]", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Display content in tabbed form.", "niteshortcode")
    ),

    "clear" => array(
        "self-closing" => true,
        "atts" => array(),
        "label" => __("Clear", "niteshortcode"),
        "content" => "",
        "description" => __("Clear shortcode can be used to clear an element of its neighbors, no floating elements are allowed on the left or the right side.", "niteshortcode")
    ),
    
    // Column Shortcodes
    
    "one_third" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Third", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_third_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Third (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "two_third" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Two Third", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")       
    ),
    "two_third_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Two Third (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_half" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Half", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_half_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Half (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_fourth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Fourth", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_fourth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Fourth (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "three_fourth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Three Fourth", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "three_fourth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Three Fourth (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_fifth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Fifth", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_fifth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Fifth (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "two_fifth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Two Fifth", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "two_fifth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Two Fifth (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "three_fifth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Three Fifth", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "three_fifth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Three Fifth (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "four_fifth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Four Fifth", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "four_fifth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Four Fifth (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_sixth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Sixth", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "one_sixth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Sixth (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "five_sixth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Five Sixth", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    ),
    "five_sixth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Five Sixth (Last)", "niteshortcode"),
        "content" => __("Column content", "niteshortcode"),
        "content_field" => "textarea",
        "description" => __("Create column content", "niteshortcode")
    )
);
echo "<script type=\"text/javascript\">var shortcodes = ".json_encode($shortcodes).";</script>";
?>