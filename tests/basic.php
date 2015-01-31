<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>SyntaxHighlighter Demo Page - <?= htmlspecialchars($title) ?></title>
</head>

<body>

<?
$stringWithUrl = "https://github.com/unitmatrix/sublime-syntaxhighlighter";
$stringWithOutUrl = 'hello world';

ob_start("parseOutputBuffer");      // Start Code Buffering
session_start();

/**
 * Multiline docblock comment
 * @param string $buf
 * @return string
 */
function parseOutputBuffer($buf) {
	global $portal_small_code, $portal_gzcompress;
	global $PHP_SELF, $HTTP_ACCEPT_ENCODING;

	// cleaning out the code.
	if($portal_small_code && !$portal_gzcompress) {
		$buf = str_replace("    ", "", $buf);
		$buf = str_replace("\n", "", $buf);
		$buf = str_replace(chr(13), "", $buf);
	}
	return $buf;
}
?>

<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->

</body>
</html>