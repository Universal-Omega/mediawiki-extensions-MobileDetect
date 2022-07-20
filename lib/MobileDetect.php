<?php

/**
 * Backwards compatibility
 * Allow to use from LocalSettings.php
 */
function mobiledetect() {
	return MediaWiki\Extension\MobileDetect\Hooks::isMobile();
}
