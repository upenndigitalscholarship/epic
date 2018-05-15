<?$this->template->add_css('epic/css/style.css')?>
<link href="https://fonts.googleapis.com/css?family=Bungee+Hairline" rel="stylesheet">
<div class="page-wrap">
    <!-- Header -->
    <header id="header">
        <h2>Educational Partnerships with Indigenous Communities</h2>
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
    <div class="push"></div>
</div>



<!-- Circular Modals -->
<div id="open-modal1" class="modal-window">
    <div>
        <a href="#modal-close" title="Close" class="modal-close">Close</a>
        <div>ABOUT EPIC</div>
    </div>
</div>

<div id="open-modal2" class="modal-window">
    <div>
        <a href="#modal-close" title="Close" class="modal-close">Close</a>
        <div>PARNTERNSHIPS</div>
    </div>
</div>

<div id="open-modal3" class="modal-window">
    <div>
        <a href="#modal-close" title="Close" class="modal-close">Close</a>
        <div>STUDENT PROJECTS</div>
        <?php
            if ($login->is_logged_in) {
        	echo '<div id="user_books">';
        	echo '<h3>Your Books</h3>';
        	if (count($user_books) > 0) {
        		echo '<ul class="book_icons">';
        		print_books($user_books, true);
        	} else {
        		echo '<p>You haven\'t created any books yet. You can in the Dashboard\'s My Account tab.</p>';
        	}
        	echo '</div>';
        }
        ?>
    </div>
</div>

<div id="open-modal4" class="modal-window">
    <div>
        <a href="#modal-close" title="Close" class="modal-close">Close</a>
        <div>TRIBAL PROJECTS</div>
    </div>
</div>
</div>


<!--Log in box as footer-->
<footer class="site-footer">
    <p><a href="http://scalar.usc.edu/works/system/login?redirect_url=%2Fworks%2F">Name Sign In</a></p>
    <p><a href = "scalar.usc.edu">Dashboard Index Guide</a></p>
</footer>
