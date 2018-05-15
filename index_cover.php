<?if (!defined('BASEPATH')) exit('No direct script access allowed')?>
<link rel="stylesheet" href="epic/css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Bungee+Hairline" rel="stylesheet">
<link rel="stylesheet" href="system/application/views/melons/cantaloupe/css/header.css">
<link rel="stylesheet" href="system/application/views/melons/cantaloupe/css/bootstrap.min.css">
<script src="system/application/views/melons/cantaloupe/js/bootstrap.min.js"></script>
<div class="page-wrap">
    <!-- Header -->
    <header class="navbar" id="header">
        <h1>Educational Partnerships with Indigenous Communities</h1>
        <?
        echo '<div class="login"><ul class="nav navbar-nav navbar-right" id="ScalarHeaderMenuRight"><li class="dropdown" id="userMenu">';
        echo '<a class="dropdown-toggle headerIcon" data-toggle="dropdown" role="button" aria-expanded="false" id="userIcon" title="User menu. Roll over to show account options." tabindex="13"><span class="visible-xs">User</span></a>';
        echo '<ul class="dropdown-menu" role="menu" id="ScalarHeaderMenuUserList">';
        // Logged in
        if ($login->is_logged_in):
        	echo '<li><a href="'.confirm_slash(base_url()).'system/logout?action=do_logout&redirect_url='.urlencode($_SERVER['REQUEST_URI']).'" onclick="return confirm(\''.lang('login.confirm_sign_out').'\')">'.lang('login.sign_out').'</a></li>';
        	if (!empty($book) && $this->uri->rsegments[1]=='system' && $this->uri->rsegments[2]=='dashboard') {
        		echo '<li><a href="'.confirm_slash(base_url()).$book->slug.'">Back to '.$book->scope.'</a></li>';
        	} elseif ($this->uri->rsegments[1]=='system' && $this->uri->rsegments[2]=='dashboard') {
        		echo '<li><a href="'.confirm_slash(base_url()).'">'.lang('login.back_to_index').'</a></li>';
        	} elseif (!empty($book) && $user_level!='Author') {
        		// echo '<span class="disabled_link">'.lang('login.manage_content').'</span>'."\n";
        	} else {
        		echo '<li><a href="'.confirm_slash(base_url()).'system/dashboard?book_id='.((isset($book->book_id))?$book->book_id:'').'&zone=style#tabs-style">'.lang('login.manage_content').'</a></li><li><a href="'.confirm_slash(base_url()).'">'.lang('login.index').'</a></li>'.'<li><a href="http://scalar.usc.edu/works/guide">'.lang('login.guide').'</a></li>';
        	}
        // Not logged in
        else:
        	echo '<li><a href="'.confirm_slash(base_url()).'system/login?redirect_url='.urlencode($_SERVER['REQUEST_URI']).'">';
        	echo lang('login.sign_in');
        	echo '</a></li>';
        	echo '<li><a href="'.confirm_slash(base_url()).'system/register?redirect_url='.urlencode($_SERVER['REQUEST_URI']).'">';
        	echo lang('login.register');
        	echo '</a></li>';
        endif;
    	echo "</ul></li></ul>";
        echo "</p></div>\n";
        ?>
    </header>


    <!-- Banner -->

    <div class="circle">
        <input type="checkbox" id="menu_opener_id" class="menu_opener">
        <label for="menu_opener_id"class="menu_opener_label"><img class=logo_image src="epic/images/logo.png" /></label>

        <a href="#open-modal1" class="link_one link_general">
            <h4 class="circletext">About </h4>
        </a>
        <a href="#open-modal2" class="link_two link_general">
            <h4 class="circletext">Partners</h4>
        </a>
        <a href="#open-modal3" class="link_three link_general">
            <h4 class="circletext">Student Projects</h4>
        </a>
        <a href="#open-modal4" class="link_four link_general">
            <h4 class="circletext">Tribal Projects</h4>
        </a>
    </input>
</div>



<!-- Circular Modals -->
<div id="open-modal1" class="modal-window">
    <div>
        <a href="#modal-close" title="Close" class="modal-close">Close</a>
        <h1>ABOUT EPIC</h1>
    </div>
</div>

<div id="open-modal2" class="modal-window">
    <div>
        <a href="#modal-close" title="Close" class="modal-close">Close</a>
        <h1>PARTNERSHIPS</h1>
    </div>
</div>

<div id="open-modal4" class="modal-window">
    <div>
        <a href="#modal-close" title="Close" class="modal-close">Close</a>
        <h1>TRIBAL PROJECTS</h1>
    </div>
</div>
</div>
