To add a menu in header use the following code in your plugin function.
<pre>
$OhyesTheme = new OhYesTheme;
$menu   = array(
              'url' => 'url for page',
	         'title' => 'title text',							    'image_class' => 'css class name for icon',
              );
$OhyesTheme->register_menu_item('header', $menu);	

</pre>