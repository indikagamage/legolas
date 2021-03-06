/* Price Table Style 1 */
/* -------------------------------------------------- */
.fw-price-1 {
	margin-left: auto;
	margin-right: auto;
}

/* Default column */
.fw-price-1 .fw-price-col {
	width: 228px;
	margin-bottom: 20px;
	color: #000;
}
.fw-price-1 .fw-price-col .fw-price-inner {
	border-right: 1px solid #e8eced;
}
.fw-price-1 .fw-price-col:first-child .fw-price-row,
.fw-price-1 .fw-price-col:first-child.fw-switch-row,
.fw-price-1 .fw-price-col:first-child .fw-price-foot {
	border-left: 1px solid #e8eced;
}

/* Caption column */
.fw-price-1 .fw-price-caption .fw-price-head,
.fw-price-1 .fw-price-caption .fw-price-amount {
	background-color: #fff;
	color: #000;
	border-left: 1px solid #e8eced;
}
.fw-price-1 .fw-price-caption .fw-price-head {
	border-top: 1px solid #e8eced;
}
.fw-price-1 .fw-price-caption .fw-price-row,
.fw-price-1 .fw-price-caption .fw-switch-row {
	font-family: <?php echo wp_kses($the_journal_less_variables['font-family-1'], array()); ?>;
	font-style: normal;
	font-size: <?php echo esc_js( ceil(floatval($the_journal_less_variables['font-size-base'])*0.65) ); ?>px;
	font-weight: normal;
	text-align: right;
	color: #4d4d4d;
}
.fw-price-1 .fw-price-caption .fw-price-caption-title {
	font-size: 26px;
	line-height: 36px;
	font-weight: normal;
	font-style: italic;
	margin: 0;
}
.fw-price-1 .fw-price-caption .fw-price-caption-title strong {
	display: block;
	font-style: normal;
	font-weight: normal;
}
.fw-price-1 .fw-price-caption .fw-price-inner {
	border-bottom: 1px solid transparent;
}
.fw-price-1 .fw-price-caption:first-child .fw-price-foot {
	border-left: none;
}

/* Columns head, price and description */
.fw-price-1 .fw-price-amount {
	background-color: #e8eced;
	color: #000;
	border-bottom: 1px solid #ddd;
}
.fw-price-1 .fw-price-head {
	background-color: #000;
	padding: 10px 0;
	height: 30px;
}
.fw-price-1 .fw-price-title {
	font-family: <?php echo wp_kses($the_journal_less_variables['font-family-1'], array()); ?>;
	font-weight: bold;
	font-style: normal;
	font-size: 14px;
	line-height: 30px;
	color: #fff;
}
.fw-price-1 .fw-price-amount {
	height: 80px;
	padding: 10px 0;
	display: table;
	width: 100%;
}
.fw-price-middle {
	display: table-cell;
	vertical-align: middle;
	text-align: center;
}
.fw-price-1 .fw-price-value {
	display: block;
	font-size: 26px;
	line-height: 1em;
}
.fw-price-1 .fw-price-caption .fw-price-middle {
	display: block;
}
.fw-price-1 .fw-price-value span {
	margin-right: 2px;
}
.fw-price-1 .fw-price-desc {
	font-size: <?php echo esc_js($the_journal_less_variables['font-size-base']); ?>;
	display: block;
	font-style: italic;
}
.fw-price-1 .fw-price-foot {
	min-height: 80px;
	background-color: #fff;
}
.fw-price-1 .fw-price-foot .fw-btn {
	margin: 17px 0;
}

/* Row with data in each package column */
.fw-price-1 .fw-price-row,
.fw-price-1 .fw-switch-row {
	padding: 10px;
	background-color: #fff;
	border-bottom: 1px solid #ddd;
}
.fw-price-1 .fw-price-row small,
.fw-price-1 .fw-switch-row small {
	color: #888;
}
.fw-price-1 .fw-price-row i,
.fw-price-1 .fw-switch-row i {
	font-size: 18px;
}

/* Icons in price table */
.fw-price-1 .fw-price-icon-no:before {
	content: "\f00d";
	color: #e11313;
}
.fw-price-1 .fw-price-icon-yes:before {
	content: "\f00c";
	color: #47a920;
}

/* Style with gap between Packages */
.fw-price-1.fw-price-gaps .fw-price-col {
	padding: 0 10px;
}
.fw-price-1.fw-price-gaps .fw-price-row,
.fw-price-1.fw-price-gaps .fw-switch-row,
.fw-price-1.fw-price-gaps .fw-price-foot {
	border-left: 1px solid #ddd;
}

/* Active column */
.fw-price-1 .fw-price-active .fw-price-inner {
	left: 0;
	top: 0;
	z-index: 50;
	box-shadow: 0 9px 40px rgba(0, 0, 0, 0.3);
}
.fw-price-1 .fw-price-active .fw-price-amount {
	background-color: #abb0b4;
}
.fw-price-1 .fw-switch-row.desc-col {
	border-left: 1px solid #ddd;
}
.fw-price-1 .fw-price-foot.default-col {
	border-bottom: 1px solid #ddd;
}

/* Responsive */
@media (max-width: 991px) {
	.fw-price-1 .fw-price-col {
		width: 100% !important;
		margin-bottom: 30px;
		border-left: 1px solid #ddd;
	}
	.fw-price-1 .fw-price-col:first-child {
		border-bottom: 1px solid #ddd;
	}
}

/* Screen 568px */
@media(max-width:767px){
	.fw-price-1 .fw-price-caption .fw-price-caption-title {
		font-size: 25px !important;
		line-height: normal !important;
	}
	.fw-price-1 .fw-price-title.default-col {
		font-size: 27px !important;
		line-height: normal !important;
	}
	.fw-price-1 .fw-icell.default-col {
		font-size: 20px !important;
		line-height: normal !important;
	}
	.fw-price-1 .fw-price-value.default-col,
	.fw-price-1 .fw-price-desc.default-col {
		font-size: 21px !important;
		line-height: normal !important;
	}
}


/* Default Style */
/* -------------------------------------------------- */
/* Price Table */
.fw-price-table .fw-price-col {
	display: inline-block;
	float: left;
	position: relative;
	text-align: center;
}
.fw-price-table .fw-price-inner {
	position: relative;
	transition: all 0.15s ease 0s;
}
.fw-price-table .fw-price-title {
	margin: 0;
}
.fw-price-table .fw-price-inner > div {
	box-sizing: content-box;
}

/* Responsive */
@media (max-width: 991px) {
	.fw-price-table {
		width: 100% !important;
	}
}

