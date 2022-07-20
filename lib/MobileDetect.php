
/**
 * Backwards compatibility
 * Allow to use from LocalSettings.php
 */
function mobiledetect() {
	return MobileDetect::isMobile();
}
