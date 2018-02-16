/* Lightbox CSS */
.pp_pic_holder.dark_square .pp_nav {
	font-family: <?php echo wp_kses($the_journal_less_variables['font-family-2'], array()); ?>;
	line-height: <?php echo esc_js( floatval($the_journal_less_variables['font-size-base'] ) +4 ); ?>px;
	position: relative;
	left: 50%;
	margin-left: -155px;
	margin-top: 8px;
}
.pp_pic_holder.dark_square .pp_nav .pp_text_devider {
	color: rgba(255, 255, 255, 0.5);
	display: inline;
	margin: 0 10px;
}
.pp_pic_holder.dark_square .pp_nav .pp_play {
	display: none;
}
.pp_pic_holder.dark_square .pp_nav .pp_arrow_next,
.pp_pic_holder.dark_square .pp_nav .pp_arrow_previous {
	font-size: <?php echo esc_js( floatval($the_journal_less_variables['font-size-base'] ) *0.7); ?>px;
	color: rgba(255, 255, 255, 0.5);
	text-indent: 0;
	width: auto;
	background: none;
	position: relative;
	font-weight: bold;
}
.pp_pic_holder.dark_square .pp_nav .pp_arrow_next:hover,
.pp_pic_holder.dark_square .pp_nav .pp_arrow_previous:hover {
	color: <?php echo esc_js($the_journal_less_variables['theme-color-3']); ?>;
}
.pp_pic_holder.dark_square .pp_nav .pp_arrow_previous:before,
.pp_pic_holder.dark_square .pp_nav .pp_arrow_next:after {
	font-size: 20px;
	font-family: 'FontAwesome';
	font-weight: bold;
	line-height: 20px;
	vertical-align: top;
}
.pp_pic_holder.dark_square .pp_nav .pp_arrow_previous:before {
	content: '\f104';
	margin-right: 10px;
}
.pp_pic_holder.dark_square .pp_nav .pp_arrow_next:after {
	content: '\f105';
	margin-left: 10px;
}
.pp_pic_holder.dark_square .pp_nav a.pp_arrow_previous,
.pp_pic_holder.dark_square .pp_nav a.pp_arrow_next {
	font-family: <?php echo wp_kses($the_journal_less_variables['font-family-1'], array()); ?>;
	height: auto;
	overflow: visible;
	vertical-align: top;
	display: inline;
	float: none;
}
.pp_pic_holder.dark_square .pp_nav a.pp_arrow_previous {
	margin-right: 50px;
}
.pp_pic_holder.dark_square .pp_nav a.pp_arrow_next {
	margin-left: 50px;
}
.pp_pic_holder.dark_square .pp_nav .currentTextHolder {
	font-size: <?php echo esc_js( floatval($the_journal_less_variables['font-size-base'] ) -1); ?>px;
	color: <?php echo esc_js($the_journal_less_variables['theme-color-3']); ?>;
	font-weight: bold;
	display: inline;
	float: none;
}
.pp_pic_holder.dark_square a.pp_previous,
.pp_pic_holder.dark_square a.pp_next {
	display: none;
}
.pp_pic_holder.dark_square a.pp_close {
	width: 23px;
	top: 25px;
	right: 30px;
	opacity: 0.5;
	z-index: 2;
	background: none;
}
.pp_pic_holder.dark_square a.pp_close:hover {
	color: #fff;
}
.pp_pic_holder.dark_square a.pp_close.fa-times:before {
	text-indent: 0;
	position: absolute;
	right: 0;
	font-size: 23px;
}
.pp_pic_holder.dark_square .pp_content_container .pp_left {
	padding-left: 60px;
	overflow: hidden;
}
.pp_pic_holder.dark_square .pp_top {
	height: 80px;
}
.pp_pic_holder.dark_square .pp_top .pp_left,
.pp_pic_holder.dark_square .pp_top .pp_middle,
.pp_pic_holder.dark_square .pp_top .pp_right {
	height: 80px;
}
.pp_pic_holder.dark_square .pp_bottom {
	height: 20px;
}
.pp_pic_holder.dark_square .pp_bottom .pp_left,
.pp_pic_holder.dark_square .pp_bottom .pp_middle,
.pp_pic_holder.dark_square .pp_bottom .pp_right {
	height: 50px;
}
.pp_pic_holder.dark_square a.pp_expand,
.pp_pic_holder.dark_square a.pp_contract {
	right: 110px;
}
.pp_pic_holder.dark_square .pp_details .pp_description {
	margin: 0;
	display: inline-block !important;
	position: absolute;
	left: 0;
	top: -16px;
}
.pp_pic_holder.dark_square .ppt {
	display: none !important;
}

