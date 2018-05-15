<?if (!defined('BASEPATH')) exit('No direct script access allowed')?>
<?$this->template->add_css('system/application/views/arbors/admin/admin.css')?>
<?$this->template->add_css('system/application/views/modules/cover/title.css')?>
<?$this->template->add_css('system/application/views/modules/cover/login.css')?>
<?$this->template->add_css('system/application/views/modules/book_list/book_list.css')?>
<?$this->template->add_js('system/application/views/arbors/admin/jquery-1.7.min.js')?>
<?$this->template->add_js('system/application/views/arbors/admin/admin.js')?>
<div id="open-modal3" class="modal-window">
	<div class="content">
	    <h1>STUDENT PROJECTS</h1>
	    <a href="#modal-close" title="Close" class="modal-close">Close</a>
<?
function print_books($books, $is_large=false) {
	echo '<ul class="book_icons">';
	foreach ($books as $row) {
		$uri 		   = confirm_slash(base_url()).$row->slug;
		$title		   = trim($row->title);
		$book_id       = (int) $row->book_id;
		$thumbnail     = (!empty($row->thumbnail)) ? confirm_slash($row->slug).$row->thumbnail : null;
		$is_live       = ($row->display_in_index) ? true : false;
		if (empty($thumbnail) || !file_exists($thumbnail)) $thumbnail = path_from_file(__FILE__).'default_book_logo.png';
		$authors = array();
		foreach ($row->users as $user) {
			if ($user->relationship!=strtolower('author')) continue;
			if (!$user->list_in_index) continue;
			$authors[] = $user->fullname;
		}
		echo '<li><a href="'.$uri.'"><img class="book_icon large" src="'.confirm_base($thumbnail).'" /></a><h1><a href="'.$uri.'">'.$title.'</a></h1>';
		if (count($authors)) {
		    echo "<h3>";
			echo implode(', ',$authors);
			echo "</h3>";
		}
		echo '</li>';
	}
	echo '</ul>';
}

?>
<div id="other_books"<?=(($login->is_logged_in)?'':' class="wide"')?>>
<? 
if (count($featured_books) > 0) {
	print_books($featured_books);
	echo '<br clear="both" />';
}
?>
<br clear="both" />
</div>
</div>