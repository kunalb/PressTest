<?php 

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-atom.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/taxonomy.php */

if( !function_exists( 'create_initial_taxonomies' ) ) { function create_initial_taxonomies() {;} }

if( !function_exists( 'get_taxonomies' ) ) { function get_taxonomies($args = '', $output = '', $operator = '') {;} }

if( !function_exists( 'get_object_taxonomies' ) ) { function get_object_taxonomies($object, $output = '') {;} }

if( !function_exists( 'get_taxonomy' ) ) { function get_taxonomy($taxonomy) {;} }

if( !function_exists( 'taxonomy_exists' ) ) { function taxonomy_exists($taxonomy) {;} }

if( !function_exists( 'is_taxonomy_hierarchical' ) ) { function is_taxonomy_hierarchical($taxonomy) {;} }

if( !function_exists( 'register_taxonomy' ) ) { function register_taxonomy($taxonomy, $object_type, $args = '') {;} }

if( !function_exists( 'get_taxonomy_labels' ) ) { function get_taxonomy_labels($tax) {;} }

if( !function_exists( 'register_taxonomy_for_object_type' ) ) { function register_taxonomy_for_object_type($taxonomy, $object_type) {;} }

if( !function_exists( 'get_objects_in_term' ) ) { function get_objects_in_term($term_ids, $taxonomies, $args = '') {;} }

if( !function_exists( 'get_tax_sql' ) ) { function get_tax_sql($tax_query, $primary_table, $primary_id_column) {;} }

if( !function_exists( 'get_term' ) ) { function get_term($term, $taxonomy, $output = '', $filter = '') {;} }

if( !function_exists( 'get_term_by' ) ) { function get_term_by($field, $value, $taxonomy, $output = '', $filter = '') {;} }

if( !function_exists( 'get_term_children' ) ) { function get_term_children($term_id, $taxonomy) {;} }

if( !function_exists( 'get_term_field' ) ) { function get_term_field($field, $term, $taxonomy, $context = '') {;} }

if( !function_exists( 'get_term_to_edit' ) ) { function get_term_to_edit($id, $taxonomy) {;} }

if( !function_exists( 'get_terms' ) ) { function get_terms($taxonomies, $args = '') {;} }

if( !function_exists( 'term_exists' ) ) { function term_exists($term, $taxonomy = '', $parent = '') {;} }

if( !function_exists( 'sanitize_term' ) ) { function sanitize_term($term, $taxonomy, $context = '') {;} }

if( !function_exists( 'sanitize_term_field' ) ) { function sanitize_term_field($field, $value, $term_id, $taxonomy, $context) {;} }

if( !function_exists( 'wp_count_terms' ) ) { function wp_count_terms($taxonomy, $args = '') {;} }

if( !function_exists( 'wp_delete_object_term_relationships' ) ) { function wp_delete_object_term_relationships($object_id, $taxonomies) {;} }

if( !function_exists( 'wp_delete_term' ) ) { function wp_delete_term($term, $taxonomy, $args = '') {;} }

if( !function_exists( 'wp_delete_category' ) ) { function wp_delete_category($cat_ID) {;} }

if( !function_exists( 'wp_get_object_terms' ) ) { function wp_get_object_terms($object_ids, $taxonomies, $args = '') {;} }

if( !function_exists( 'wp_insert_term' ) ) { function wp_insert_term($term, $taxonomy, $args = '') {;} }

if( !function_exists( 'wp_set_object_terms' ) ) { function wp_set_object_terms($object_id, $terms, $taxonomy, $append = '') {;} }

if( !function_exists( 'wp_unique_term_slug' ) ) { function wp_unique_term_slug($slug, $term) {;} }

if( !function_exists( 'wp_update_term' ) ) { function wp_update_term($term_id, $taxonomy, $args = '') {;} }

if( !function_exists( 'wp_defer_term_counting' ) ) { function wp_defer_term_counting($defer = '') {;} }

if( !function_exists( 'wp_update_term_count' ) ) { function wp_update_term_count($terms, $taxonomy, $do_deferred = '') {;} }

if( !function_exists( 'wp_update_term_count_now' ) ) { function wp_update_term_count_now($terms, $taxonomy) {;} }

if( !function_exists( 'clean_object_term_cache' ) ) { function clean_object_term_cache($object_ids, $object_type) {;} }

if( !function_exists( 'clean_term_cache' ) ) { function clean_term_cache($ids, $taxonomy = '', $clean_taxonomy = '') {;} }

if( !function_exists( 'get_object_term_cache' ) ) { function get_object_term_cache($id, $taxonomy) {;} }

if( !function_exists( 'update_object_term_cache' ) ) { function update_object_term_cache($object_ids, $object_type) {;} }

if( !function_exists( 'update_term_cache' ) ) { function update_term_cache($terms, $taxonomy = '') {;} }

if( !function_exists( '_get_term_hierarchy' ) ) { function _get_term_hierarchy($taxonomy) {;} }

if( !function_exists( '_get_term_children' ) ) { function _get_term_children($term_id, $terms, $taxonomy) {;} }

if( !function_exists( '_pad_term_counts' ) ) { function _pad_term_counts($terms, $taxonomy) {;} }

if( !function_exists( '_update_post_term_count' ) ) { function _update_post_term_count($terms, $taxonomy) {;} }

if( !function_exists( 'get_term_link' ) ) { function get_term_link($term, $taxonomy = '') {;} }

if( !function_exists( 'the_taxonomies' ) ) { function the_taxonomies($args = '') {;} }

if( !function_exists( 'get_the_taxonomies' ) ) { function get_the_taxonomies($post = '', $args = '') {;} }

if( !function_exists( 'get_post_taxonomies' ) ) { function get_post_taxonomies($post = '') {;} }

if( !function_exists( 'is_object_in_term' ) ) { function is_object_in_term($object_id, $taxonomy, $terms = '') {;} }

if( !function_exists( 'is_object_in_taxonomy' ) ) { function is_object_in_taxonomy($object_type, $taxonomy) {;} }

if( !function_exists( 'get_ancestors' ) ) { function get_ancestors($object_id = '', $object_type = '') {;} }

if( !function_exists( 'wp_get_term_taxonomy_parent_id' ) ) { function wp_get_term_taxonomy_parent_id($term_id, $taxonomy) {;} }

if( !function_exists( 'wp_check_term_hierarchy_for_loops' ) ) { function wp_check_term_hierarchy_for_loops($parent, $term_id, $taxonomy) {;} }

if( !class_exists( 'WP_Tax_Query' ) ) {
	class WP_Tax_Query {
		public $queries = '';
		public $relation;
		private static $no_results = '';

		public function __construct($tax_query) {;}
		public function get_sql($primary_table, $primary_id_column) {;}
		private function clean_query($query) {;}
		private function transform_query($query, $resulting_field) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/update.php */

if( !function_exists( 'wp_version_check' ) ) { function wp_version_check() {;} }

if( !function_exists( 'wp_update_plugins' ) ) { function wp_update_plugins() {;} }

if( !function_exists( 'wp_update_themes' ) ) { function wp_update_themes() {;} }

if( !function_exists( '_maybe_update_core' ) ) { function _maybe_update_core() {;} }

if( !function_exists( '_maybe_update_plugins' ) ) { function _maybe_update_plugins() {;} }

if( !function_exists( '_maybe_update_themes' ) ) { function _maybe_update_themes() {;} }

if( !function_exists( 'wp_schedule_update_checks' ) ) { function wp_schedule_update_checks() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/post-thumbnail-template.php */

if( !function_exists( 'has_post_thumbnail' ) ) { function has_post_thumbnail($post_id = '') {;} }

if( !function_exists( 'get_post_thumbnail_id' ) ) { function get_post_thumbnail_id($post_id = '') {;} }

if( !function_exists( 'the_post_thumbnail' ) ) { function the_post_thumbnail($size = '', $attr = '') {;} }

if( !function_exists( 'update_post_thumbnail_cache' ) ) { function update_post_thumbnail_cache() {;} }

if( !function_exists( 'get_the_post_thumbnail' ) ) { function get_the_post_thumbnail($post_id = '', $size = '', $attr = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/wp-mce-help.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/rpc.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/includes/general.php */

if( !function_exists( 'getRequestParam' ) ) { function getRequestParam($name, $default_value = '') {;} }

if( !function_exists( 'getLogger' ) ) { function getLogger() {;} }

if( !function_exists( 'debug' ) ) { function debug($msg) {;} }

if( !function_exists( 'info' ) ) { function info($msg) {;} }

if( !function_exists( 'error' ) ) { function error($msg) {;} }

if( !function_exists( 'warn' ) ) { function warn($msg) {;} }

if( !function_exists( 'fatal' ) ) { function fatal($msg) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/classes/GoogleSpell.php */

if( !function_exists( 'mb_substr' ) ) { function mb_substr($str, $start, $len = '', $encoding = '') {;} }

if( !class_exists( 'GoogleSpell' ) ) {
	class GoogleSpell {

		public function checkWords($lang, $words) {;}
		public function getSuggestions($lang, $word) {;}
		public function _getMatches($lang, $str) {;}
		public function _unhtmlentities($string) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/classes/SpellChecker.php */

if( !class_exists( 'SpellChecker' ) ) {
	class SpellChecker {

		public function SpellChecker($config) {;}
		public function loopback() {;}
		public function checkWords($lang, $words) {;}
		public function getSuggestions($lang, $word) {;}
		public function throwError($str) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/classes/PSpell.php */

if( !class_exists( 'PSpell' ) ) {
	class PSpell {

		public function checkWords($lang, $words) {;}
		public function getSuggestions($lang, $word) {;}
		public function _getPLink($lang) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/classes/PSpellShell.php */

if( !class_exists( 'PSpellShell' ) ) {
	class PSpellShell {

		public function checkWords($lang, $words) {;}
		public function getSuggestions($lang, $word) {;}
		public function _getCMD($lang) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/classes/EnchantSpell.php */

if( !class_exists( 'EnchantSpell' ) ) {
	class EnchantSpell {

		public function checkWords($lang, $words) {;}
		public function getSuggestions($lang, $word) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/classes/utils/Logger.php */

if( !class_exists( 'Moxiecode_Logger' ) ) {
	class Moxiecode_Logger {
		public $_path;
		public $_filename;
		public $_maxSize;
		public $_maxFiles;
		public $_maxSizeBytes;
		public $_level;
		public $_format;

		public function Moxiecode_Logger() {;}
		public function setLevel($level) {;}
		public function getLevel() {;}
		public function setPath($path) {;}
		public function getPath() {;}
		public function setFileName($file_name) {;}
		public function getFileName() {;}
		public function setFormat($format) {;}
		public function getFormat() {;}
		public function setMaxSize($size) {;}
		public function getMaxSize() {;}
		public function setMaxFiles($max_files) {;}
		public function getMaxFiles() {;}
		public function debug($msg) {;}
		public function info($msg) {;}
		public function warn($msg) {;}
		public function error($msg) {;}
		public function fatal($msg) {;}
		public function isDebugEnabled() {;}
		public function isInfoEnabled() {;}
		public function isWarnEnabled() {;}
		public function isErrorEnabled() {;}
		public function isFatalEnabled() {;}
		public function _logMsg($level, $message) {;}
		public function toOSPath($path) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/classes/utils/JSON.php */

if( !class_exists( 'Moxiecode_JSONReader' ) ) {
	class Moxiecode_JSONReader {
		public $_data;
		public $_value;
		public $_location;
		public $_needProp;

		public function Moxiecode_JSONReader($data) {;}
		public function getToken() {;}
		public function getLocation() {;}
		public function getTokenName() {;}
		public function getValue() {;}
		public function readToken() {;}
		public function _readBool($chr) {;}
		public function _readNull() {;}
		public function _readString($quote) {;}
		public function _int2utf8($int) {;}
		public function _readNumber($start) {;}
		public function readAway() {;}
		public function read($len = '') {;}
		public function skip($len) {;}
		public function peek() {;}

	}
}

if( !class_exists( 'Moxiecode_JSON' ) ) {
	class Moxiecode_JSON {

		public function Moxiecode_JSON() {;}
		public function decode($input) {;}
		public function readValue($reader) {;}
		public function addArray($key) {;}
		public function getDelim($index, $reader) {;}
		public function encode($input) {;}
		public function encodeString($input) {;}
		public function _utf82utf16($utf8) {;}
		public function _encodeArray($input) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/plugins/spellchecker/config.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/wp-tinymce.php */

if( !function_exists( 'get_file' ) ) { function get_file($path) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/js/tinymce/langs/wp-langs.php */

if( !function_exists( 'mce_escape' ) ) { function mce_escape($text) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-phpmailer.php */

if( !class_exists( 'PHPMailer' ) ) {
	class PHPMailer {
		public $Priority = '';
		public $CharSet = '';
		public $ContentType = '';
		public $Encoding = '';
		public $ErrorInfo = '';
		public $From = '';
		public $FromName = '';
		public $Sender = '';
		public $Subject = '';
		public $Body = '';
		public $AltBody = '';
		public $WordWrap = '';
		public $Mailer = '';
		public $Sendmail = '';
		public $PluginDir = '';
		public $ConfirmReadingTo = '';
		public $Hostname = '';
		public $MessageID = '';
		public $Host = '';
		public $Port = '';
		public $Helo = '';
		public $SMTPSecure = '';
		public $SMTPAuth = '';
		public $Username = '';
		public $Password = '';
		public $Timeout = '';
		public $SMTPDebug = '';
		public $SMTPKeepAlive = '';
		public $SingleTo = '';
		public $SingleToArray = '';
		public $LE = '';
		public $DKIM_selector = '';
		public $DKIM_identity = '';
		public $DKIM_domain = '';
		public $DKIM_private = '';
		public $action_function = '';
		public $Version = '';
		private $smtp = '';
		private $to = '';
		private $cc = '';
		private $bcc = '';
		private $ReplyTo = '';
		private $all_recipients = '';
		private $attachment = '';
		private $CustomHeader = '';
		private $message_type = '';
		private $boundary = '';
		protected $language = '';
		private $error_count = '';
		private $sign_cert_file = '';
		private $sign_key_file = '';
		private $sign_key_pass = '';
		private $exceptions = '';

		public function __construct($exceptions = '') {;}
		public function IsHTML($ishtml = '') {;}
		public function IsSMTP() {;}
		public function IsMail() {;}
		public function IsSendmail() {;}
		public function IsQmail() {;}
		public function AddAddress($address, $name = '') {;}
		public function AddCC($address, $name = '') {;}
		public function AddBCC($address, $name = '') {;}
		public function AddReplyTo($address, $name = '') {;}
		private function AddAnAddress($kind, $address, $name = '') {;}
		public function SetFrom($address, $name = '', $auto = '') {;}
		public static function ValidateAddress($address) {;}
		public function Send() {;}
		protected function SendmailSend($header, $body) {;}
		protected function MailSend($header, $body) {;}
		protected function SmtpSend($header, $body) {;}
		public function SmtpConnect() {;}
		public function SmtpClose() {;}
		public function SetLanguage($langcode = '', $lang_path = '') {;}
		public function GetTranslations() {;}
		public function AddrAppend($type, $addr) {;}
		public function AddrFormat($addr) {;}
		public function WrapText($message, $length, $qp_mode = '') {;}
		public function UTF8CharBoundary($encodedText, $maxLength) {;}
		public function SetWordWrap() {;}
		public function CreateHeader() {;}
		public function GetMailMIME() {;}
		public function CreateBody() {;}
		private function GetBoundary($boundary, $charSet, $contentType, $encoding) {;}
		private function EndBoundary($boundary) {;}
		private function SetMessageType() {;}
		public function HeaderLine($name, $value) {;}
		public function TextLine($value) {;}
		public function AddAttachment($path, $name = '', $encoding = '', $type = '') {;}
		public function GetAttachments() {;}
		private function AttachAll() {;}
		private function EncodeFile($path, $encoding = '') {;}
		public function EncodeString($str, $encoding = '') {;}
		public function EncodeHeader($str, $position = '') {;}
		public function HasMultiBytes($str) {;}
		public function Base64EncodeWrapMB($str) {;}
		public function EncodeQPphp($input = '', $line_max = '', $space_conv = '') {;}
		public function EncodeQP($string, $line_max = '', $space_conv = '') {;}
		public function EncodeQ($str, $position = '') {;}
		public function AddStringAttachment($string, $filename, $encoding = '', $type = '') {;}
		public function AddEmbeddedImage($path, $cid, $name = '', $encoding = '', $type = '') {;}
		public function InlineImageExists() {;}
		public function ClearAddresses() {;}
		public function ClearCCs() {;}
		public function ClearBCCs() {;}
		public function ClearReplyTos() {;}
		public function ClearAllRecipients() {;}
		public function ClearAttachments() {;}
		public function ClearCustomHeaders() {;}
		protected function SetError($msg) {;}
		public static function RFCDate() {;}
		private function ServerHostname() {;}
		private function Lang($key) {;}
		public function IsError() {;}
		private function FixEOL($str) {;}
		public function AddCustomHeader($custom_header) {;}
		public function MsgHTML($message, $basedir = '') {;}
		public static function _mime_types($ext = '') {;}
		public function set($name, $value = '') {;}
		public function SecureHeader($str) {;}
		public function Sign($cert_filename, $key_filename, $key_pass) {;}
		public function DKIM_QP($txt) {;}
		public function DKIM_Sign($s) {;}
		public function DKIM_HeaderC($s) {;}
		public function DKIM_BodyC($body) {;}
		public function DKIM_Add($headers_line, $subject, $body) {;}
		protected function doCallback($isSent, $to, $cc, $bcc, $subject, $body) {;}

	}
}

if( !class_exists( 'phpmailerException' ) ) {
	class phpmailerException {

		public function errorMessage() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class.wp-dependencies.php */

if( !class_exists( 'WP_Dependencies' ) ) {
	class WP_Dependencies {
		public $registered = '';
		public $queue = '';
		public $to_do = '';
		public $done = '';
		public $args = '';
		public $groups = '';
		public $group = '';

		public function do_items($handles = '', $group = '') {;}
		public function do_item($handle) {;}
		public function all_deps($handles, $recursion = '', $group = '') {;}
		public function add($handle, $src, $deps = '', $ver = '', $args = '') {;}
		public function add_data($handle, $data_name, $data) {;}
		public function remove($handles) {;}
		public function enqueue($handles) {;}
		public function dequeue($handles) {;}
		public function query($handle, $list = '') {;}
		public function set_group($handle, $recursion, $group) {;}

	}
}

if( !class_exists( '_WP_Dependency' ) ) {
	class _WP_Dependency {
		public $handle;
		public $src;
		public $deps = '';
		public $ver = '';
		public $args = '';
		public $extra = '';

		public function __construct() {;}
		public function add_data($name, $data) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/widgets.php */

if( !function_exists( 'register_widget' ) ) { function register_widget($widget_class) {;} }

if( !function_exists( 'unregister_widget' ) ) { function unregister_widget($widget_class) {;} }

if( !function_exists( 'register_sidebars' ) ) { function register_sidebars($number = '', $args = '') {;} }

if( !function_exists( 'register_sidebar' ) ) { function register_sidebar($args = '') {;} }

if( !function_exists( 'unregister_sidebar' ) ) { function unregister_sidebar($name) {;} }

if( !function_exists( 'wp_register_sidebar_widget' ) ) { function wp_register_sidebar_widget($id, $name, $output_callback, $options = '') {;} }

if( !function_exists( 'wp_widget_description' ) ) { function wp_widget_description($id) {;} }

if( !function_exists( 'wp_sidebar_description' ) ) { function wp_sidebar_description($id) {;} }

if( !function_exists( 'wp_unregister_sidebar_widget' ) ) { function wp_unregister_sidebar_widget($id) {;} }

if( !function_exists( 'wp_register_widget_control' ) ) { function wp_register_widget_control($id, $name, $control_callback, $options = '') {;} }

if( !function_exists( '_register_widget_update_callback' ) ) { function _register_widget_update_callback($id_base, $update_callback, $options = '') {;} }

if( !function_exists( '_register_widget_form_callback' ) ) { function _register_widget_form_callback($id, $name, $form_callback, $options = '') {;} }

if( !function_exists( 'wp_unregister_widget_control' ) ) { function wp_unregister_widget_control($id) {;} }

if( !function_exists( 'dynamic_sidebar' ) ) { function dynamic_sidebar($index = '') {;} }

if( !function_exists( 'is_active_widget' ) ) { function is_active_widget($callback = '', $widget_id = '', $id_base = '', $skip_inactive = '') {;} }

if( !function_exists( 'is_dynamic_sidebar' ) ) { function is_dynamic_sidebar() {;} }

if( !function_exists( 'is_active_sidebar' ) ) { function is_active_sidebar($index) {;} }

if( !function_exists( 'wp_get_sidebars_widgets' ) ) { function wp_get_sidebars_widgets($deprecated = '') {;} }

if( !function_exists( 'wp_set_sidebars_widgets' ) ) { function wp_set_sidebars_widgets($sidebars_widgets) {;} }

if( !function_exists( 'wp_get_widget_defaults' ) ) { function wp_get_widget_defaults() {;} }

if( !function_exists( 'wp_convert_widget_settings' ) ) { function wp_convert_widget_settings($base_name, $option_name, $settings) {;} }

if( !function_exists( 'the_widget' ) ) { function the_widget($widget, $instance = '', $args = '') {;} }

if( !function_exists( '_get_widget_id_base' ) ) { function _get_widget_id_base($id) {;} }

if( !class_exists( 'WP_Widget' ) ) {
	class WP_Widget {
		public $id_base;
		public $name;
		public $widget_options;
		public $control_options;
		public $number = '';
		public $id = '';
		public $updated = '';

		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}
		public function WP_Widget($id_base = '', $name, $widget_options = '', $control_options = '') {;}
		public function __construct($id_base = '', $name, $widget_options = '', $control_options = '') {;}
		public function get_field_name($field_name) {;}
		public function get_field_id($field_name) {;}
		public function _register() {;}
		public function _set($number) {;}
		public function _get_display_callback() {;}
		public function _get_update_callback() {;}
		public function _get_form_callback() {;}
		public function display_callback($args, $widget_args = '') {;}
		public function update_callback($widget_args = '') {;}
		public function form_callback($widget_args = '') {;}
		public function _register_one($number = '') {;}
		public function save_settings($settings) {;}
		public function get_settings() {;}

	}
}

if( !class_exists( 'WP_Widget_Factory' ) ) {
	class WP_Widget_Factory {
		public $widgets = '';

		public function WP_Widget_Factory() {;}
		public function register($widget_class) {;}
		public function unregister($widget_class) {;}
		public function _register_widgets() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-wp-error.php */

if( !function_exists( 'is_wp_error' ) ) { function is_wp_error($thing) {;} }

if( !class_exists( 'WP_Error' ) ) {
	class WP_Error {
		public $errors = '';
		public $error_data = '';

		public function __construct($code = '', $message = '', $data = '') {;}
		public function get_error_codes() {;}
		public function get_error_code() {;}
		public function get_error_messages($code = '') {;}
		public function get_error_message($code = '') {;}
		public function get_error_data($code = '') {;}
		public function add($code, $message, $data = '') {;}
		public function add_data($data, $code = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/http.php */

if( !function_exists( '_wp_http_get_object' ) ) { function _wp_http_get_object() {;} }

if( !function_exists( 'wp_remote_request' ) ) { function wp_remote_request($url, $args = '') {;} }

if( !function_exists( 'wp_remote_get' ) ) { function wp_remote_get($url, $args = '') {;} }

if( !function_exists( 'wp_remote_post' ) ) { function wp_remote_post($url, $args = '') {;} }

if( !function_exists( 'wp_remote_head' ) ) { function wp_remote_head($url, $args = '') {;} }

if( !function_exists( 'wp_remote_retrieve_headers' ) ) { function wp_remote_retrieve_headers($response) {;} }

if( !function_exists( 'wp_remote_retrieve_header' ) ) { function wp_remote_retrieve_header($response, $header) {;} }

if( !function_exists( 'wp_remote_retrieve_response_code' ) ) { function wp_remote_retrieve_response_code($response) {;} }

if( !function_exists( 'wp_remote_retrieve_response_message' ) ) { function wp_remote_retrieve_response_message($response) {;} }

if( !function_exists( 'wp_remote_retrieve_body' ) ) { function wp_remote_retrieve_body($response) {;} }

if( !function_exists( 'wp_http_supports' ) ) { function wp_http_supports($capabilities = '', $url = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/ms-deprecated.php */

if( !function_exists( 'generate_random_password' ) ) { function generate_random_password($len = '') {;} }

if( !function_exists( 'is_site_admin' ) ) { function is_site_admin($user_login = '') {;} }

if( !function_exists( 'graceful_fail' ) ) { function graceful_fail($message) {;} }

if( !function_exists( 'get_user_details' ) ) { function get_user_details($username) {;} }

if( !function_exists( 'clear_global_post_cache' ) ) { function clear_global_post_cache($post_id) {;} }

if( !function_exists( 'is_main_blog' ) ) { function is_main_blog() {;} }

if( !function_exists( 'validate_email' ) ) { function validate_email($email, $check_domain = '') {;} }

if( !function_exists( 'get_blog_list' ) ) { function get_blog_list($start = '', $num = '', $deprecated = '') {;} }

if( !function_exists( 'get_most_active_blogs' ) ) { function get_most_active_blogs($num = '', $display = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/capabilities.php */

if( !function_exists( 'map_meta_cap' ) ) { function map_meta_cap($cap, $user_id) {;} }

if( !function_exists( 'current_user_can' ) ) { function current_user_can($capability) {;} }

if( !function_exists( 'current_user_can_for_blog' ) ) { function current_user_can_for_blog($blog_id, $capability) {;} }

if( !function_exists( 'author_can' ) ) { function author_can($post, $capability) {;} }

if( !function_exists( 'user_can' ) ) { function user_can($user, $capability) {;} }

if( !function_exists( 'get_role' ) ) { function get_role($role) {;} }

if( !function_exists( 'add_role' ) ) { function add_role($role, $display_name, $capabilities = '') {;} }

if( !function_exists( 'remove_role' ) ) { function remove_role($role) {;} }

if( !function_exists( 'get_super_admins' ) ) { function get_super_admins() {;} }

if( !function_exists( 'is_super_admin' ) ) { function is_super_admin($user_id = '') {;} }

if( !class_exists( 'WP_Roles' ) ) {
	class WP_Roles {
		public $roles;
		public $role_objects = '';
		public $role_names = '';
		public $role_key;
		public $use_db = '';

		public function __construct() {;}
		public function _init() {;}
		public function add_role($role, $display_name, $capabilities = '') {;}
		public function remove_role($role) {;}
		public function add_cap($role, $cap, $grant = '') {;}
		public function remove_cap($role, $cap) {;}
		public function get_role($role) {;}
		public function get_names() {;}
		public function is_role($role) {;}

	}
}

if( !class_exists( 'WP_Role' ) ) {
	class WP_Role {
		public $name;
		public $capabilities;

		public function __construct($role, $capabilities) {;}
		public function add_cap($cap, $grant = '') {;}
		public function remove_cap($cap) {;}
		public function has_cap($cap) {;}

	}
}

if( !class_exists( 'WP_User' ) ) {
	class WP_User {
		public $data;
		public $ID = '';
		public $id = '';
		public $caps = '';
		public $cap_key;
		public $roles = '';
		public $allcaps = '';
		public $first_name = '';
		public $last_name = '';
		public $filter = '';

		public function __construct($id, $name = '', $blog_id = '') {;}
		public function _init_caps($cap_key = '') {;}
		public function get_role_caps() {;}
		public function add_role($role) {;}
		public function remove_role($role) {;}
		public function set_role($role) {;}
		public function level_reduction($max, $item) {;}
		public function update_user_level_from_caps() {;}
		public function add_cap($cap, $grant = '') {;}
		public function remove_cap($cap) {;}
		public function remove_all_caps() {;}
		public function has_cap($cap) {;}
		public function translate_level_to_cap($level) {;}
		public function for_blog($blog_id = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/rss-functions.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-wp-http-ixr-client.php */

if( !class_exists( 'WP_HTTP_IXR_Client' ) ) {
	class WP_HTTP_IXR_Client {

		public function __construct($server, $path = '', $port = '', $timeout = '') {;}
		public function query() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/shortcodes.php */

if( !function_exists( 'add_shortcode' ) ) { function add_shortcode($tag, $func) {;} }

if( !function_exists( 'remove_shortcode' ) ) { function remove_shortcode($tag) {;} }

if( !function_exists( 'remove_all_shortcodes' ) ) { function remove_all_shortcodes() {;} }

if( !function_exists( 'do_shortcode' ) ) { function do_shortcode($content) {;} }

if( !function_exists( 'get_shortcode_regex' ) ) { function get_shortcode_regex() {;} }

if( !function_exists( 'do_shortcode_tag' ) ) { function do_shortcode_tag($m) {;} }

if( !function_exists( 'shortcode_parse_atts' ) ) { function shortcode_parse_atts($text) {;} }

if( !function_exists( 'shortcode_atts' ) ) { function shortcode_atts($pairs, $atts) {;} }

if( !function_exists( 'strip_shortcodes' ) ) { function strip_shortcodes($content) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/Text/Diff.php */

if( !class_exists( 'Text_Diff' ) ) {
	class Text_Diff {
		public $_edits;

		public function Text_Diff($engine, $params) {;}
		public function getDiff() {;}
		public function countAddedLines() {;}
		public function countDeletedLines() {;}
		public function reverse() {;}
		public function isEmpty() {;}
		public function lcs() {;}
		public function getOriginal() {;}
		public function getFinal() {;}
		public function trimNewlines($line, $key) {;}
		public function _getTempDir() {;}
		public function _check($from_lines, $to_lines) {;}

	}
}

if( !class_exists( 'Text_MappedDiff' ) ) {
	class Text_MappedDiff {

		public function Text_MappedDiff($from_lines, $to_lines, $mapped_from_lines, $mapped_to_lines) {;}

	}
}

if( !class_exists( 'Text_Diff_Op' ) ) {
	class Text_Diff_Op {
		public $orig;
		public $final;

		public function reverse() {;}
		public function norig() {;}
		public function nfinal() {;}

	}
}

if( !class_exists( 'Text_Diff_Op_copy' ) ) {
	class Text_Diff_Op_copy {

		public function Text_Diff_Op_copy($orig, $final = '') {;}
		public function reverse() {;}

	}
}

if( !class_exists( 'Text_Diff_Op_delete' ) ) {
	class Text_Diff_Op_delete {

		public function Text_Diff_Op_delete($lines) {;}
		public function reverse() {;}

	}
}

if( !class_exists( 'Text_Diff_Op_add' ) ) {
	class Text_Diff_Op_add {

		public function Text_Diff_Op_add($lines) {;}
		public function reverse() {;}

	}
}

if( !class_exists( 'Text_Diff_Op_change' ) ) {
	class Text_Diff_Op_change {

		public function Text_Diff_Op_change($orig, $final) {;}
		public function reverse() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/Text/Diff/Engine/xdiff.php */

if( !class_exists( 'Text_Diff_Engine_xdiff' ) ) {
	class Text_Diff_Engine_xdiff {

		public function diff($from_lines, $to_lines) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/Text/Diff/Engine/native.php */

if( !class_exists( 'Text_Diff_Engine_native' ) ) {
	class Text_Diff_Engine_native {

		public function diff($from_lines, $to_lines) {;}
		public function _diag($xoff, $xlim, $yoff, $ylim, $nchunks) {;}
		public function _lcsPos($ypos) {;}
		public function _compareseq($xoff, $xlim, $yoff, $ylim) {;}
		public function _shiftBoundaries($lines, $changed, $other_changed) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/Text/Diff/Engine/string.php */

if( !class_exists( 'Text_Diff_Engine_string' ) ) {
	class Text_Diff_Engine_string {

		public function diff($diff, $mode = '') {;}
		public function parseUnifiedDiff($diff) {;}
		public function parseContextDiff($diff) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/Text/Diff/Engine/shell.php */

if( !class_exists( 'Text_Diff_Engine_shell' ) ) {
	class Text_Diff_Engine_shell {
		public $_diffCommand = '';

		public function diff($from_lines, $to_lines) {;}
		public function _getLines($text_lines, $line_no, $end = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/Text/Diff/Renderer.php */

if( !class_exists( 'Text_Diff_Renderer' ) ) {
	class Text_Diff_Renderer {
		public $_leading_context_lines = '';
		public $_trailing_context_lines = '';

		public function Text_Diff_Renderer($params = '') {;}
		public function getParams() {;}
		public function render($diff) {;}
		public function _block($xbeg, $xlen, $ybeg, $ylen, $edits) {;}
		public function _startDiff() {;}
		public function _endDiff() {;}
		public function _blockHeader($xbeg, $xlen, $ybeg, $ylen) {;}
		public function _startBlock($header) {;}
		public function _endBlock() {;}
		public function _lines($lines, $prefix = '') {;}
		public function _context($lines) {;}
		public function _added($lines) {;}
		public function _deleted($lines) {;}
		public function _changed($orig, $final) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/Text/Diff/Renderer/inline.php */

if( !class_exists( 'Text_Diff_Renderer_inline' ) ) {
	class Text_Diff_Renderer_inline {
		public $_leading_context_lines = '';
		public $_trailing_context_lines = '';
		public $_ins_prefix = '';
		public $_ins_suffix = '';
		public $_del_prefix = '';
		public $_del_suffix = '';
		public $_block_header = '';
		public $_split_characters = '';
		public $_split_level = '';

		public function _blockHeader($xbeg, $xlen, $ybeg, $ylen) {;}
		public function _startBlock($header) {;}
		public function _lines($lines, $prefix = '', $encode = '') {;}
		public function _added($lines) {;}
		public function _deleted($lines, $words = '') {;}
		public function _changed($orig, $final) {;}
		public function _splitOnWords($string, $newlineEscape = '') {;}
		public function _encode($string) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/formatting.php */

if( !function_exists( 'wptexturize' ) ) { function wptexturize($text) {;} }

if( !function_exists( '_wptexturize_pushpop_element' ) ) { function _wptexturize_pushpop_element($text, $stack, $disabled_elements, $opening = '', $closing = '') {;} }

if( !function_exists( 'clean_pre' ) ) { function clean_pre($matches) {;} }

if( !function_exists( 'wpautop' ) ) { function wpautop($pee, $br = '') {;} }

if( !function_exists( '_autop_newline_preservation_helper' ) ) { function _autop_newline_preservation_helper($matches) {;} }

if( !function_exists( 'shortcode_unautop' ) ) { function shortcode_unautop($pee) {;} }

if( !function_exists( 'seems_utf8' ) ) { function seems_utf8($str) {;} }

if( !function_exists( '_wp_specialchars' ) ) { function _wp_specialchars($string, $quote_style = '', $charset = '', $double_encode = '') {;} }

if( !function_exists( 'wp_specialchars_decode' ) ) { function wp_specialchars_decode($string, $quote_style = '') {;} }

if( !function_exists( 'wp_check_invalid_utf8' ) ) { function wp_check_invalid_utf8($string, $strip = '') {;} }

if( !function_exists( 'utf8_uri_encode' ) ) { function utf8_uri_encode($utf8_string, $length = '') {;} }

if( !function_exists( 'remove_accents' ) ) { function remove_accents($string) {;} }

if( !function_exists( 'sanitize_file_name' ) ) { function sanitize_file_name($filename) {;} }

if( !function_exists( 'sanitize_user' ) ) { function sanitize_user($username, $strict = '') {;} }

if( !function_exists( 'sanitize_key' ) ) { function sanitize_key($key) {;} }

if( !function_exists( 'sanitize_title' ) ) { function sanitize_title($title, $fallback_title = '', $context = '') {;} }

if( !function_exists( 'sanitize_title_for_query' ) ) { function sanitize_title_for_query($title) {;} }

if( !function_exists( 'sanitize_title_with_dashes' ) ) { function sanitize_title_with_dashes($title) {;} }

if( !function_exists( 'sanitize_sql_orderby' ) ) { function sanitize_sql_orderby($orderby) {;} }

if( !function_exists( 'sanitize_html_class' ) ) { function sanitize_html_class($class, $fallback = '') {;} }

if( !function_exists( 'convert_chars' ) ) { function convert_chars($content, $deprecated = '') {;} }

if( !function_exists( 'balanceTags' ) ) { function balanceTags($text, $force = '') {;} }

if( !function_exists( 'force_balance_tags' ) ) { function force_balance_tags($text) {;} }

if( !function_exists( 'format_to_edit' ) ) { function format_to_edit($content, $richedit = '') {;} }

if( !function_exists( 'format_to_post' ) ) { function format_to_post($content) {;} }

if( !function_exists( 'zeroise' ) ) { function zeroise($number, $threshold) {;} }

if( !function_exists( 'backslashit' ) ) { function backslashit($string) {;} }

if( !function_exists( 'trailingslashit' ) ) { function trailingslashit($string) {;} }

if( !function_exists( 'untrailingslashit' ) ) { function untrailingslashit($string) {;} }

if( !function_exists( 'addslashes_gpc' ) ) { function addslashes_gpc($gpc) {;} }

if( !function_exists( 'stripslashes_deep' ) ) { function stripslashes_deep($value) {;} }

if( !function_exists( 'urlencode_deep' ) ) { function urlencode_deep($value) {;} }

if( !function_exists( 'antispambot' ) ) { function antispambot($emailaddy, $mailto = '') {;} }

if( !function_exists( '_make_url_clickable_cb' ) ) { function _make_url_clickable_cb($matches) {;} }

if( !function_exists( '_make_web_ftp_clickable_cb' ) ) { function _make_web_ftp_clickable_cb($matches) {;} }

if( !function_exists( '_make_email_clickable_cb' ) ) { function _make_email_clickable_cb($matches) {;} }

if( !function_exists( 'make_clickable' ) ) { function make_clickable($ret) {;} }

if( !function_exists( 'wp_rel_nofollow' ) ) { function wp_rel_nofollow($text) {;} }

if( !function_exists( 'wp_rel_nofollow_callback' ) ) { function wp_rel_nofollow_callback($matches) {;} }

if( !function_exists( 'translate_smiley' ) ) { function translate_smiley($smiley) {;} }

if( !function_exists( 'convert_smilies' ) ) { function convert_smilies($text) {;} }

if( !function_exists( 'is_email' ) ) { function is_email($email, $deprecated = '') {;} }

if( !function_exists( 'wp_iso_descrambler' ) ) { function wp_iso_descrambler($string) {;} }

if( !function_exists( '_wp_iso_convert' ) ) { function _wp_iso_convert($match) {;} }

if( !function_exists( 'get_gmt_from_date' ) ) { function get_gmt_from_date($string, $format = '') {;} }

if( !function_exists( 'get_date_from_gmt' ) ) { function get_date_from_gmt($string, $format = '') {;} }

if( !function_exists( 'iso8601_timezone_to_offset' ) ) { function iso8601_timezone_to_offset($timezone) {;} }

if( !function_exists( 'iso8601_to_datetime' ) ) { function iso8601_to_datetime($date_string, $timezone = '') {;} }

if( !function_exists( 'popuplinks' ) ) { function popuplinks($text) {;} }

if( !function_exists( 'sanitize_email' ) ) { function sanitize_email($email) {;} }

if( !function_exists( 'human_time_diff' ) ) { function human_time_diff($from, $to = '') {;} }

if( !function_exists( 'wp_trim_excerpt' ) ) { function wp_trim_excerpt($text) {;} }

if( !function_exists( 'ent2ncr' ) ) { function ent2ncr($text) {;} }

if( !function_exists( 'wp_richedit_pre' ) ) { function wp_richedit_pre($text) {;} }

if( !function_exists( 'wp_htmledit_pre' ) ) { function wp_htmledit_pre($output) {;} }

if( !function_exists( '_deep_replace' ) ) { function _deep_replace($search, $subject) {;} }

if( !function_exists( 'esc_sql' ) ) { function esc_sql($sql) {;} }

if( !function_exists( 'esc_url' ) ) { function esc_url($url, $protocols = '', $_context = '') {;} }

if( !function_exists( 'esc_url_raw' ) ) { function esc_url_raw($url, $protocols = '') {;} }

if( !function_exists( 'htmlentities2' ) ) { function htmlentities2($myHTML) {;} }

if( !function_exists( 'esc_js' ) ) { function esc_js($text) {;} }

if( !function_exists( 'esc_html' ) ) { function esc_html($text) {;} }

if( !function_exists( 'esc_attr' ) ) { function esc_attr($text) {;} }

if( !function_exists( 'esc_textarea' ) ) { function esc_textarea($text) {;} }

if( !function_exists( 'tag_escape' ) ) { function tag_escape($tag_name) {;} }

if( !function_exists( 'like_escape' ) ) { function like_escape($text) {;} }

if( !function_exists( 'wp_make_link_relative' ) ) { function wp_make_link_relative($link) {;} }

if( !function_exists( 'sanitize_option' ) ) { function sanitize_option($option, $value) {;} }

if( !function_exists( 'wp_parse_str' ) ) { function wp_parse_str($string, $array) {;} }

if( !function_exists( 'wp_pre_kses_less_than' ) ) { function wp_pre_kses_less_than($text) {;} }

if( !function_exists( 'wp_pre_kses_less_than_callback' ) ) { function wp_pre_kses_less_than_callback($matches) {;} }

if( !function_exists( 'wp_sprintf' ) ) { function wp_sprintf($pattern) {;} }

if( !function_exists( 'wp_sprintf_l' ) ) { function wp_sprintf_l($pattern, $args) {;} }

if( !function_exists( 'wp_html_excerpt' ) ) { function wp_html_excerpt($str, $count) {;} }

if( !function_exists( 'links_add_base_url' ) ) { function links_add_base_url($content, $base, $attrs = '') {;} }

if( !function_exists( '_links_add_base' ) ) { function _links_add_base($m) {;} }

if( !function_exists( 'links_add_target' ) ) { function links_add_target($content, $target = '', $tags = '') {;} }

if( !function_exists( '_links_add_target' ) ) { function _links_add_target($m) {;} }

if( !function_exists( 'normalize_whitespace' ) ) { function normalize_whitespace($str) {;} }

if( !function_exists( 'wp_strip_all_tags' ) ) { function wp_strip_all_tags($string, $remove_breaks = '') {;} }

if( !function_exists( 'sanitize_text_field' ) ) { function sanitize_text_field($str) {;} }

if( !function_exists( 'wp_basename' ) ) { function wp_basename($path, $suffix = '') {;} }

if( !function_exists( 'capital_P_dangit' ) ) { function capital_P_dangit($text) {;} }

if( !function_exists( 'sanitize_mime_type' ) ) { function sanitize_mime_type($mime_type) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/pluggable.php */

if( !function_exists( 'wp_set_current_user' ) ) { function wp_set_current_user($id, $name = '') {;} }

if( !function_exists( 'wp_get_current_user' ) ) { function wp_get_current_user() {;} }

if( !function_exists( 'get_currentuserinfo' ) ) { function get_currentuserinfo() {;} }

if( !function_exists( 'get_userdata' ) ) { function get_userdata($user_id) {;} }

if( !function_exists( 'cache_users' ) ) { function cache_users($users) {;} }

if( !function_exists( 'get_user_by' ) ) { function get_user_by($field, $value) {;} }

if( !function_exists( 'get_userdatabylogin' ) ) { function get_userdatabylogin($user_login) {;} }

if( !function_exists( 'get_user_by_email' ) ) { function get_user_by_email($email) {;} }

if( !function_exists( 'wp_mail' ) ) { function wp_mail($to, $subject, $message, $headers = '', $attachments = '') {;} }

if( !function_exists( 'wp_authenticate' ) ) { function wp_authenticate($username, $password) {;} }

if( !function_exists( 'wp_logout' ) ) { function wp_logout() {;} }

if( !function_exists( 'wp_validate_auth_cookie' ) ) { function wp_validate_auth_cookie($cookie = '', $scheme = '') {;} }

if( !function_exists( 'wp_generate_auth_cookie' ) ) { function wp_generate_auth_cookie($user_id, $expiration, $scheme = '') {;} }

if( !function_exists( 'wp_parse_auth_cookie' ) ) { function wp_parse_auth_cookie($cookie = '', $scheme = '') {;} }

if( !function_exists( 'wp_set_auth_cookie' ) ) { function wp_set_auth_cookie($user_id, $remember = '', $secure = '') {;} }

if( !function_exists( 'wp_clear_auth_cookie' ) ) { function wp_clear_auth_cookie() {;} }

if( !function_exists( 'is_user_logged_in' ) ) { function is_user_logged_in() {;} }

if( !function_exists( 'auth_redirect' ) ) { function auth_redirect() {;} }

if( !function_exists( 'check_admin_referer' ) ) { function check_admin_referer($action = '', $query_arg = '') {;} }

if( !function_exists( 'check_ajax_referer' ) ) { function check_ajax_referer($action = '', $query_arg = '', $die = '') {;} }

if( !function_exists( 'wp_redirect' ) ) { function wp_redirect($location, $status = '') {;} }

if( !function_exists( 'wp_sanitize_redirect' ) ) { function wp_sanitize_redirect($location) {;} }

if( !function_exists( 'wp_safe_redirect' ) ) { function wp_safe_redirect($location, $status = '') {;} }

if( !function_exists( 'wp_validate_redirect' ) ) { function wp_validate_redirect($location, $default = '') {;} }

if( !function_exists( 'wp_notify_postauthor' ) ) { function wp_notify_postauthor($comment_id, $comment_type = '') {;} }

if( !function_exists( 'wp_notify_moderator' ) ) { function wp_notify_moderator($comment_id) {;} }

if( !function_exists( 'wp_password_change_notification' ) ) { function wp_password_change_notification($user) {;} }

if( !function_exists( 'wp_new_user_notification' ) ) { function wp_new_user_notification($user_id, $plaintext_pass = '') {;} }

if( !function_exists( 'wp_nonce_tick' ) ) { function wp_nonce_tick() {;} }

if( !function_exists( 'wp_verify_nonce' ) ) { function wp_verify_nonce($nonce, $action = '') {;} }

if( !function_exists( 'wp_create_nonce' ) ) { function wp_create_nonce($action = '') {;} }

if( !function_exists( 'wp_salt' ) ) { function wp_salt($scheme = '') {;} }

if( !function_exists( 'wp_hash' ) ) { function wp_hash($data, $scheme = '') {;} }

if( !function_exists( 'wp_hash_password' ) ) { function wp_hash_password($password) {;} }

if( !function_exists( 'wp_check_password' ) ) { function wp_check_password($password, $hash, $user_id = '') {;} }

if( !function_exists( 'wp_generate_password' ) ) { function wp_generate_password($length = '', $special_chars = '', $extra_special_chars = '') {;} }

if( !function_exists( 'wp_rand' ) ) { function wp_rand($min = '', $max = '') {;} }

if( !function_exists( 'wp_set_password' ) ) { function wp_set_password($password, $user_id) {;} }

if( !function_exists( 'get_avatar' ) ) { function get_avatar($id_or_email, $size = '', $default = '', $alt = '') {;} }

if( !function_exists( 'wp_text_diff' ) ) { function wp_text_diff($left_string, $right_string, $args = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-wp-xmlrpc-server.php */

if( !class_exists( 'wp_xmlrpc_server' ) ) {
	class wp_xmlrpc_server {

		public function __construct() {;}
		public function serve_request() {;}
		public function sayHello($args) {;}
		public function addTwoNumbers($args) {;}
		public function login_pass_ok($user_login, $user_pass) {;}
		public function login($username, $password) {;}
		public function escape($array) {;}
		public function get_custom_fields($post_id) {;}
		public function set_custom_fields($post_id, $fields) {;}
		public function initialise_blog_option_info() {;}
		public function wp_getUsersBlogs($args) {;}
		public function wp_getPage($args) {;}
		public function wp_getPages($args) {;}
		public function wp_newPage($args) {;}
		public function wp_deletePage($args) {;}
		public function wp_editPage($args) {;}
		public function wp_getPageList($args) {;}
		public function wp_getAuthors($args) {;}
		public function wp_getTags($args) {;}
		public function wp_newCategory($args) {;}
		public function wp_deleteCategory($args) {;}
		public function wp_suggestCategories($args) {;}
		public function wp_getComment($args) {;}
		public function wp_getComments($args) {;}
		public function wp_deleteComment($args) {;}
		public function wp_editComment($args) {;}
		public function wp_newComment($args) {;}
		public function wp_getCommentStatusList($args) {;}
		public function wp_getCommentCount($args) {;}
		public function wp_getPostStatusList($args) {;}
		public function wp_getPageStatusList($args) {;}
		public function wp_getPageTemplates($args) {;}
		public function wp_getOptions($args) {;}
		public function _getOptions($options) {;}
		public function wp_setOptions($args) {;}
		public function wp_getMediaItem($args) {;}
		public function wp_getMediaLibrary($args) {;}
		public function wp_getPostFormats($args) {;}
		public function blogger_getUsersBlogs($args) {;}
		public function _multisite_getUsersBlogs($args) {;}
		public function blogger_getUserInfo($args) {;}
		public function blogger_getPost($args) {;}
		public function blogger_getRecentPosts($args) {;}
		public function blogger_getTemplate($args) {;}
		public function blogger_setTemplate($args) {;}
		public function blogger_newPost($args) {;}
		public function blogger_editPost($args) {;}
		public function blogger_deletePost($args) {;}
		public function mw_newPost($args) {;}
		public function add_enclosure_if_new($post_ID, $enclosure) {;}
		public function attach_uploads($post_ID, $post_content) {;}
		public function mw_editPost($args) {;}
		public function mw_getPost($args) {;}
		public function mw_getRecentPosts($args) {;}
		public function mw_getCategories($args) {;}
		public function mw_newMediaObject($args) {;}
		public function mt_getRecentPostTitles($args) {;}
		public function mt_getCategoryList($args) {;}
		public function mt_getPostCategories($args) {;}
		public function mt_setPostCategories($args) {;}
		public function mt_supportedMethods($args) {;}
		public function mt_supportedTextFilters($args) {;}
		public function mt_getTrackbackPings($args) {;}
		public function mt_publishPost($args) {;}
		public function pingback_ping($args) {;}
		public function pingback_extensions_getPingbacks($args) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/canonical.php */

if( !function_exists( 'redirect_canonical' ) ) { function redirect_canonical($requested_url = '', $do_redirect = '') {;} }

if( !function_exists( 'redirect_guess_404_permalink' ) ) { function redirect_guess_404_permalink() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-simplepie.php */

if( !class_exists( 'SimplePie' ) ) {
	class SimplePie {
		public $data = '';
		public $error;
		public $sanitize;
		public $useragent = '';
		public $feed_url;
		public $file;
		public $raw_data;
		public $timeout = '';
		public $force_fsockopen = '';
		public $force_feed = '';
		public $xml_dump = '';
		public $cache = '';
		public $cache_duration = '';
		public $autodiscovery_cache_duration = '';
		public $cache_location = '';
		public $cache_name_function = '';
		public $order_by_date = '';
		public $input_encoding = '';
		public $autodiscovery = '';
		public $cache_class = '';
		public $locator_class = '';
		public $parser_class = '';
		public $file_class = '';
		public $item_class = '';
		public $author_class = '';
		public $category_class = '';
		public $enclosure_class = '';
		public $caption_class = '';
		public $copyright_class = '';
		public $credit_class = '';
		public $rating_class = '';
		public $restriction_class = '';
		public $content_type_sniffer_class = '';
		public $source_class = '';
		public $javascript = '';
		public $max_checked_feeds = '';
		public $all_discovered_feeds = '';
		public $favicon_handler = '';
		public $image_handler = '';
		public $multifeed_url = '';
		public $multifeed_objects = '';
		public $config_settings = '';
		public $item_limit = '';
		public $strip_attributes = '';
		public $strip_htmltags = '';

		public function SimplePie($feed_url = '', $cache_location = '', $cache_duration = '') {;}
		public function __toString() {;}
		public function __destruct() {;}
		public function force_feed($enable = '') {;}
		public function set_feed_url($url) {;}
		public function set_file($file) {;}
		public function set_raw_data($data) {;}
		public function set_timeout($timeout = '') {;}
		public function force_fsockopen($enable = '') {;}
		public function enable_xml_dump($enable = '') {;}
		public function enable_cache($enable = '') {;}
		public function set_cache_duration($seconds = '') {;}
		public function set_autodiscovery_cache_duration($seconds = '') {;}
		public function set_cache_location($location = '') {;}
		public function enable_order_by_date($enable = '') {;}
		public function set_input_encoding($encoding = '') {;}
		public function set_autodiscovery_level($level = '') {;}
		public function set_cache_class($class = '') {;}
		public function set_locator_class($class = '') {;}
		public function set_parser_class($class = '') {;}
		public function set_file_class($class = '') {;}
		public function set_sanitize_class($class = '') {;}
		public function set_item_class($class = '') {;}
		public function set_author_class($class = '') {;}
		public function set_category_class($class = '') {;}
		public function set_enclosure_class($class = '') {;}
		public function set_caption_class($class = '') {;}
		public function set_copyright_class($class = '') {;}
		public function set_credit_class($class = '') {;}
		public function set_rating_class($class = '') {;}
		public function set_restriction_class($class = '') {;}
		public function set_content_type_sniffer_class($class = '') {;}
		public function set_source_class($class = '') {;}
		public function set_useragent($ua = '') {;}
		public function set_cache_name_function($function = '') {;}
		public function set_javascript($get = '') {;}
		public function set_stupidly_fast($set = '') {;}
		public function set_max_checked_feeds($max = '') {;}
		public function remove_div($enable = '') {;}
		public function strip_htmltags($tags = '', $encode = '') {;}
		public function encode_instead_of_strip($enable = '') {;}
		public function strip_attributes($attribs = '') {;}
		public function set_output_encoding($encoding = '') {;}
		public function strip_comments($strip = '') {;}
		public function set_url_replacements($element_attribute = '') {;}
		public function set_favicon_handler($page = '', $qs = '') {;}
		public function set_image_handler($page = '', $qs = '') {;}
		public function set_item_limit($limit = '') {;}
		public function init() {;}
		public function error() {;}
		public function get_encoding() {;}
		public function handle_content_type($mime = '') {;}
		public function get_type() {;}
		public function get_favicon() {;}
		public function subscribe_url() {;}
		public function subscribe_feed() {;}
		public function subscribe_outlook() {;}
		public function subscribe_podcast() {;}
		public function subscribe_itunes() {;}
		public function subscribe_service($feed_url, $site_url = '') {;}
		public function subscribe_aol() {;}
		public function subscribe_bloglines() {;}
		public function subscribe_eskobo() {;}
		public function subscribe_feedfeeds() {;}
		public function subscribe_feedster() {;}
		public function subscribe_google() {;}
		public function subscribe_gritwire() {;}
		public function subscribe_msn() {;}
		public function subscribe_netvibes() {;}
		public function subscribe_newsburst() {;}
		public function subscribe_newsgator() {;}
		public function subscribe_odeo() {;}
		public function subscribe_podnova() {;}
		public function subscribe_rojo() {;}
		public function subscribe_yahoo() {;}
		public function get_feed_tags($namespace, $tag) {;}
		public function get_channel_tags($namespace, $tag) {;}
		public function get_image_tags($namespace, $tag) {;}
		public function get_base($element = '') {;}
		public function sanitize($data, $type, $base = '') {;}
		public function get_title() {;}
		public function get_category($key = '') {;}
		public function get_categories() {;}
		public function get_author($key = '') {;}
		public function get_authors() {;}
		public function get_contributor($key = '') {;}
		public function get_contributors() {;}
		public function get_link($key = '', $rel = '') {;}
		public function get_permalink() {;}
		public function get_links($rel = '') {;}
		public function get_all_discovered_feeds() {;}
		public function get_description() {;}
		public function get_copyright() {;}
		public function get_language() {;}
		public function get_latitude() {;}
		public function get_longitude() {;}
		public function get_image_title() {;}
		public function get_image_url() {;}
		public function get_image_link() {;}
		public function get_image_width() {;}
		public function get_image_height() {;}
		public function get_item_quantity($max = '') {;}
		public function get_item($key = '') {;}
		public function get_items($start = '', $end = '') {;}
		public function sort_items($a, $b) {;}
		public function merge_items($urls, $start = '', $end = '', $limit = '') {;}

	}
}

if( !class_exists( 'SimplePie_Item' ) ) {
	class SimplePie_Item {
		public $feed;
		public $data = '';

		public function SimplePie_Item($feed, $data) {;}
		public function __toString() {;}
		public function __destruct() {;}
		public function get_item_tags($namespace, $tag) {;}
		public function get_base($element = '') {;}
		public function sanitize($data, $type, $base = '') {;}
		public function get_feed() {;}
		public function get_id($hash = '') {;}
		public function get_title() {;}
		public function get_description($description_only = '') {;}
		public function get_content($content_only = '') {;}
		public function get_category($key = '') {;}
		public function get_categories() {;}
		public function get_author($key = '') {;}
		public function get_contributor($key = '') {;}
		public function get_contributors() {;}
		public function get_authors() {;}
		public function get_copyright() {;}
		public function get_date($date_format = '') {;}
		public function get_local_date($date_format = '') {;}
		public function get_permalink() {;}
		public function get_link($key = '', $rel = '') {;}
		public function get_links($rel = '') {;}
		public function get_enclosure($key = '', $prefer = '') {;}
		public function get_enclosures() {;}
		public function get_latitude() {;}
		public function get_longitude() {;}
		public function get_source() {;}
		public function add_to_service($item_url, $title_url = '', $summary_url = '') {;}
		public function add_to_blinklist() {;}
		public function add_to_blogmarks() {;}
		public function add_to_delicious() {;}
		public function add_to_digg() {;}
		public function add_to_furl() {;}
		public function add_to_magnolia() {;}
		public function add_to_myweb20() {;}
		public function add_to_newsvine() {;}
		public function add_to_reddit() {;}
		public function add_to_segnalo() {;}
		public function add_to_simpy() {;}
		public function add_to_spurl() {;}
		public function add_to_wists() {;}
		public function search_technorati() {;}

	}
}

if( !class_exists( 'SimplePie_Source' ) ) {
	class SimplePie_Source {
		public $item;
		public $data = '';

		public function SimplePie_Source($item, $data) {;}
		public function __toString() {;}
		public function get_source_tags($namespace, $tag) {;}
		public function get_base($element = '') {;}
		public function sanitize($data, $type, $base = '') {;}
		public function get_item() {;}
		public function get_title() {;}
		public function get_category($key = '') {;}
		public function get_categories() {;}
		public function get_author($key = '') {;}
		public function get_authors() {;}
		public function get_contributor($key = '') {;}
		public function get_contributors() {;}
		public function get_link($key = '', $rel = '') {;}
		public function get_permalink() {;}
		public function get_links($rel = '') {;}
		public function get_description() {;}
		public function get_copyright() {;}
		public function get_language() {;}
		public function get_latitude() {;}
		public function get_longitude() {;}
		public function get_image_url() {;}

	}
}

if( !class_exists( 'SimplePie_Author' ) ) {
	class SimplePie_Author {
		public $name;
		public $link;
		public $email;

		public function SimplePie_Author($name = '', $link = '', $email = '') {;}
		public function __toString() {;}
		public function get_name() {;}
		public function get_link() {;}
		public function get_email() {;}

	}
}

if( !class_exists( 'SimplePie_Category' ) ) {
	class SimplePie_Category {
		public $term;
		public $scheme;
		public $label;

		public function SimplePie_Category($term = '', $scheme = '', $label = '') {;}
		public function __toString() {;}
		public function get_term() {;}
		public function get_scheme() {;}
		public function get_label() {;}

	}
}

if( !class_exists( 'SimplePie_Enclosure' ) ) {
	class SimplePie_Enclosure {
		public $bitrate;
		public $captions;
		public $categories;
		public $channels;
		public $copyright;
		public $credits;
		public $description;
		public $duration;
		public $expression;
		public $framerate;
		public $handler;
		public $hashes;
		public $height;
		public $javascript;
		public $keywords;
		public $lang;
		public $length;
		public $link;
		public $medium;
		public $player;
		public $ratings;
		public $restrictions;
		public $samplingrate;
		public $thumbnails;
		public $title;
		public $type;
		public $width;

		public function SimplePie_Enclosure($link = '', $type = '', $length = '', $javascript = '', $bitrate = '', $captions = '', $categories = '', $channels = '', $copyright = '', $credits = '', $description = '', $duration = '', $expression = '', $framerate = '', $hashes = '', $height = '', $keywords = '', $lang = '', $medium = '', $player = '', $ratings = '', $restrictions = '', $samplingrate = '', $thumbnails = '', $title = '', $width = '') {;}
		public function __toString() {;}
		public function get_bitrate() {;}
		public function get_caption($key = '') {;}
		public function get_captions() {;}
		public function get_category($key = '') {;}
		public function get_categories() {;}
		public function get_channels() {;}
		public function get_copyright() {;}
		public function get_credit($key = '') {;}
		public function get_credits() {;}
		public function get_description() {;}
		public function get_duration($convert = '') {;}
		public function get_expression() {;}
		public function get_extension() {;}
		public function get_framerate() {;}
		public function get_handler() {;}
		public function get_hash($key = '') {;}
		public function get_hashes() {;}
		public function get_height() {;}
		public function get_language() {;}
		public function get_keyword($key = '') {;}
		public function get_keywords() {;}
		public function get_length() {;}
		public function get_link() {;}
		public function get_medium() {;}
		public function get_player() {;}
		public function get_rating($key = '') {;}
		public function get_ratings() {;}
		public function get_restriction($key = '') {;}
		public function get_restrictions() {;}
		public function get_sampling_rate() {;}
		public function get_size() {;}
		public function get_thumbnail($key = '') {;}
		public function get_thumbnails() {;}
		public function get_title() {;}
		public function get_type() {;}
		public function get_width() {;}
		public function native_embed($options = '') {;}
		public function embed($options = '', $native = '') {;}
		public function get_real_type($find_handler = '') {;}

	}
}

if( !class_exists( 'SimplePie_Caption' ) ) {
	class SimplePie_Caption {
		public $type;
		public $lang;
		public $startTime;
		public $endTime;
		public $text;

		public function SimplePie_Caption($type = '', $lang = '', $startTime = '', $endTime = '', $text = '') {;}
		public function __toString() {;}
		public function get_endtime() {;}
		public function get_language() {;}
		public function get_starttime() {;}
		public function get_text() {;}
		public function get_type() {;}

	}
}

if( !class_exists( 'SimplePie_Credit' ) ) {
	class SimplePie_Credit {
		public $role;
		public $scheme;
		public $name;

		public function SimplePie_Credit($role = '', $scheme = '', $name = '') {;}
		public function __toString() {;}
		public function get_role() {;}
		public function get_scheme() {;}
		public function get_name() {;}

	}
}

if( !class_exists( 'SimplePie_Copyright' ) ) {
	class SimplePie_Copyright {
		public $url;
		public $label;

		public function SimplePie_Copyright($url = '', $label = '') {;}
		public function __toString() {;}
		public function get_url() {;}
		public function get_attribution() {;}

	}
}

if( !class_exists( 'SimplePie_Rating' ) ) {
	class SimplePie_Rating {
		public $scheme;
		public $value;

		public function SimplePie_Rating($scheme = '', $value = '') {;}
		public function __toString() {;}
		public function get_scheme() {;}
		public function get_value() {;}

	}
}

if( !class_exists( 'SimplePie_Restriction' ) ) {
	class SimplePie_Restriction {
		public $relationship;
		public $type;
		public $value;

		public function SimplePie_Restriction($relationship = '', $type = '', $value = '') {;}
		public function __toString() {;}
		public function get_relationship() {;}
		public function get_type() {;}
		public function get_value() {;}

	}
}

if( !class_exists( 'SimplePie_File' ) ) {
	class SimplePie_File {
		public $url;
		public $useragent;
		public $success = '';
		public $headers = '';
		public $body;
		public $status_code;
		public $redirects = '';
		public $error;
		public $method = '';

		public function SimplePie_File($url, $timeout = '', $redirects = '', $headers = '', $useragent = '', $force_fsockopen = '') {;}

	}
}

if( !class_exists( 'SimplePie_HTTP_Parser' ) ) {
	class SimplePie_HTTP_Parser {
		public $http_version = '';
		public $status_code = '';
		public $reason = '';
		public $headers = '';
		public $body = '';
		public $state = '';
		public $data = '';
		public $data_length = '';
		public $position = '';
		public $name = '';
		public $value = '';

		public function SimplePie_HTTP_Parser($data) {;}
		public function parse() {;}
		public function has_data() {;}
		public function is_linear_whitespace() {;}
		public function http_version() {;}
		public function status() {;}
		public function reason() {;}
		public function new_line() {;}
		public function name() {;}
		public function linear_whitespace() {;}
		public function value() {;}
		public function value_char() {;}
		public function quote() {;}
		public function quote_char() {;}
		public function quote_escaped() {;}
		public function body() {;}

	}
}

if( !class_exists( 'SimplePie_gzdecode' ) ) {
	class SimplePie_gzdecode {
		public $compressed_data;
		public $compressed_size;
		public $min_compressed_size = '';
		public $position = '';
		public $flags;
		public $data;
		public $MTIME;
		public $XFL;
		public $OS;
		public $SI1;
		public $SI2;
		public $extra_field;
		public $filename;
		public $comment;

		public function __set($name, $value) {;}
		public function SimplePie_gzdecode($data) {;}
		public function parse() {;}

	}
}

if( !class_exists( 'SimplePie_Cache' ) ) {
	class SimplePie_Cache {

		public function SimplePie_Cache() {;}
		public function create($location, $filename, $extension) {;}

	}
}

if( !class_exists( 'SimplePie_Cache_File' ) ) {
	class SimplePie_Cache_File {
		public $location;
		public $filename;
		public $extension;
		public $name;

		public function SimplePie_Cache_File($location, $filename, $extension) {;}
		public function save($data) {;}
		public function load() {;}
		public function mtime() {;}
		public function touch() {;}
		public function unlink() {;}

	}
}

if( !class_exists( 'SimplePie_Cache_DB' ) ) {
	class SimplePie_Cache_DB {

		public function prepare_simplepie_object_for_cache($data) {;}

	}
}

if( !class_exists( 'SimplePie_Cache_MySQL' ) ) {
	class SimplePie_Cache_MySQL {
		public $mysql;
		public $options;
		public $id;

		public function SimplePie_Cache_MySQL($mysql_location, $name, $extension) {;}
		public function save($data) {;}
		public function load() {;}
		public function mtime() {;}
		public function touch() {;}
		public function unlink() {;}

	}
}

if( !class_exists( 'SimplePie_Misc' ) ) {
	class SimplePie_Misc {

		public function time_hms($seconds) {;}
		public function absolutize_url($relative, $base) {;}
		public function remove_dot_segments($input) {;}
		public function get_element($realname, $string) {;}
		public function element_implode($element) {;}
		public function error($message, $level, $file, $line) {;}
		public function display_cached_file($identifier_url, $cache_location = '', $cache_extension = '', $cache_class = '', $cache_name_function = '') {;}
		public function fix_protocol($url, $http = '') {;}
		public function parse_url($url) {;}
		public function compress_parse_url($scheme = '', $authority = '', $path = '', $query = '', $fragment = '') {;}
		public function normalize_url($url) {;}
		public function percent_encoding_normalization($match) {;}
		public function utf8_bad_replace($str) {;}
		public function windows_1252_to_utf8($string) {;}
		public function change_encoding($data, $input, $output) {;}
		public function encoding($charset) {;}
		public function get_curl_version() {;}
		public function is_subclass_of($class1, $class2) {;}
		public function strip_comments($data) {;}
		public function parse_date($dt) {;}
		public function entities_decode($data) {;}
		public function uncomment_rfc822($string) {;}
		public function parse_mime($mime) {;}
		public function htmlspecialchars_decode($string, $quote_style) {;}
		public function atom_03_construct_type($attribs) {;}
		public function atom_10_construct_type($attribs) {;}
		public function atom_10_content_construct_type($attribs) {;}
		public function is_isegment_nz_nc($string) {;}
		public function space_seperated_tokens($string) {;}
		public function array_unique($array) {;}
		public function codepoint_to_utf8($codepoint) {;}
		public function stripos($haystack, $needle, $offset = '') {;}
		public function parse_str($str) {;}
		public function xml_encoding($data) {;}
		public function output_javascript() {;}

	}
}

if( !class_exists( 'SimplePie_Decode_HTML_Entities' ) ) {
	class SimplePie_Decode_HTML_Entities {
		public $data = '';
		public $consumed = '';
		public $position = '';

		public function SimplePie_Decode_HTML_Entities($data) {;}
		public function parse() {;}
		public function consume() {;}
		public function consume_range($chars) {;}
		public function unconsume() {;}
		public function entity() {;}

	}
}

if( !class_exists( 'SimplePie_IRI' ) ) {
	class SimplePie_IRI {
		public $scheme;
		public $userinfo;
		public $host;
		public $port;
		public $path;
		public $query;
		public $fragment;
		public $valid = '';

		public function __toString() {;}
		public function SimplePie_IRI($iri) {;}
		public function absolutize($base, $relative) {;}
		public function parse_iri($iri) {;}
		public function remove_dot_segments($input) {;}
		public function replace_invalid_with_pct_encoding($string, $valid_chars, $case = '') {;}
		public function is_valid() {;}
		public function set_scheme($scheme) {;}
		public function set_authority($authority) {;}
		public function set_userinfo($userinfo) {;}
		public function set_host($host) {;}
		public function set_port($port) {;}
		public function set_path($path) {;}
		public function set_query($query) {;}
		public function set_fragment($fragment) {;}
		public function get_iri() {;}
		public function get_scheme() {;}
		public function get_authority() {;}
		public function get_userinfo() {;}
		public function get_host() {;}
		public function get_port() {;}
		public function get_path() {;}
		public function get_query() {;}
		public function get_fragment() {;}

	}
}

if( !class_exists( 'SimplePie_Net_IPv6' ) ) {
	class SimplePie_Net_IPv6 {

		public function removeNetmaskSpec($ip) {;}
		public function Uncompress($ip) {;}
		public function SplitV64($ip) {;}
		public function checkIPv6($ip) {;}

	}
}

if( !class_exists( 'SimplePie_Parse_Date' ) ) {
	class SimplePie_Parse_Date {
		public $date;
		public $day = '';
		public $month = '';
		public $timezone = '';
		public $day_pcre;
		public $month_pcre;
		public $built_in = '';
		public $user = '';

		public function SimplePie_Parse_Date() {;}
		public function get() {;}
		public function parse($date) {;}
		public function add_callback($callback) {;}
		public function date_w3cdtf($date) {;}
		public function remove_rfc2822_comments($string) {;}
		public function date_rfc2822($date) {;}
		public function date_rfc850($date) {;}
		public function date_asctime($date) {;}
		public function date_strtotime($date) {;}

	}
}

if( !class_exists( 'SimplePie_Content_Type_Sniffer' ) ) {
	class SimplePie_Content_Type_Sniffer {
		public $file;

		public function SimplePie_Content_Type_Sniffer($file) {;}
		public function get_type() {;}
		public function text_or_binary() {;}
		public function unknown() {;}
		public function image() {;}
		public function feed_or_html() {;}

	}
}

if( !class_exists( 'SimplePie_XML_Declaration_Parser' ) ) {
	class SimplePie_XML_Declaration_Parser {
		public $version = '';
		public $encoding = '';
		public $standalone = '';
		public $state = '';
		public $data = '';
		public $data_length = '';
		public $position = '';

		public function SimplePie_XML_Declaration_Parser($data) {;}
		public function parse() {;}
		public function has_data() {;}
		public function skip_whitespace() {;}
		public function get_value() {;}
		public function before_version_name() {;}
		public function version_name() {;}
		public function version_equals() {;}
		public function version_value() {;}
		public function encoding_name() {;}
		public function encoding_equals() {;}
		public function encoding_value() {;}
		public function standalone_name() {;}
		public function standalone_equals() {;}
		public function standalone_value() {;}

	}
}

if( !class_exists( 'SimplePie_Locator' ) ) {
	class SimplePie_Locator {
		public $useragent;
		public $timeout;
		public $file;
		public $local = '';
		public $elsewhere = '';
		public $file_class = '';
		public $cached_entities = '';
		public $http_base;
		public $base;
		public $base_location = '';
		public $checked_feeds = '';
		public $max_checked_feeds = '';
		public $content_type_sniffer_class = '';

		public function SimplePie_Locator($file, $timeout = '', $useragent = '', $file_class = '', $max_checked_feeds = '', $content_type_sniffer_class = '') {;}
		public function find($type = '', $working) {;}
		public function is_feed($file) {;}
		public function get_base() {;}
		public function autodiscovery() {;}
		public function get_links() {;}
		public function extension($array) {;}
		public function body($array) {;}

	}
}

if( !class_exists( 'SimplePie_Parser' ) ) {
	class SimplePie_Parser {
		public $error_code;
		public $error_string;
		public $current_line;
		public $current_column;
		public $current_byte;
		public $separator = '';
		public $namespace = '';
		public $element = '';
		public $xml_base = '';
		public $xml_base_explicit = '';
		public $xml_lang = '';
		public $data = '';
		public $datas = '';
		public $current_xhtml_construct = '';
		public $encoding;

		public function parse($data, $encoding) {;}
		public function get_error_code() {;}
		public function get_error_string() {;}
		public function get_current_line() {;}
		public function get_current_column() {;}
		public function get_current_byte() {;}
		public function get_data() {;}
		public function tag_open($parser, $tag, $attributes) {;}
		public function cdata($parser, $cdata) {;}
		public function tag_close($parser, $tag) {;}
		public function split_ns($string) {;}

	}
}

if( !class_exists( 'SimplePie_Sanitize' ) ) {
	class SimplePie_Sanitize {
		public $base;
		public $remove_div = '';
		public $image_handler = '';
		public $strip_htmltags = '';
		public $encode_instead_of_strip = '';
		public $strip_attributes = '';
		public $strip_comments = '';
		public $output_encoding = '';
		public $enable_cache = '';
		public $cache_location = '';
		public $cache_name_function = '';
		public $cache_class = '';
		public $file_class = '';
		public $timeout = '';
		public $useragent = '';
		public $force_fsockopen = '';
		public $replace_url_attributes = '';

		public function remove_div($enable = '') {;}
		public function set_image_handler($page = '') {;}
		public function pass_cache_data($enable_cache = '', $cache_location = '', $cache_name_function = '', $cache_class = '') {;}
		public function pass_file_data($file_class = '', $timeout = '', $useragent = '', $force_fsockopen = '') {;}
		public function strip_htmltags($tags = '') {;}
		public function encode_instead_of_strip($encode = '') {;}
		public function strip_attributes($attribs = '') {;}
		public function strip_comments($strip = '') {;}
		public function set_output_encoding($encoding = '') {;}
		public function set_url_replacements($element_attribute = '') {;}
		public function sanitize($data, $type, $base = '') {;}
		public function replace_urls($data, $tag, $attributes) {;}
		public function do_strip_htmltags($match) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/l10n.php */

if( !function_exists( 'get_locale' ) ) { function get_locale() {;} }

if( !function_exists( 'translate' ) ) { function translate($text, $domain = '') {;} }

if( !function_exists( 'before_last_bar' ) ) { function before_last_bar($string) {;} }

if( !function_exists( 'translate_with_gettext_context' ) ) { function translate_with_gettext_context($text, $context, $domain = '') {;} }

if( !function_exists( '__' ) ) { function __($text, $domain = '') {;} }

if( !function_exists( 'esc_attr__' ) ) { function esc_attr__($text, $domain = '') {;} }

if( !function_exists( 'esc_html__' ) ) { function esc_html__($text, $domain = '') {;} }

if( !function_exists( '_e' ) ) { function _e($text, $domain = '') {;} }

if( !function_exists( 'esc_attr_e' ) ) { function esc_attr_e($text, $domain = '') {;} }

if( !function_exists( 'esc_html_e' ) ) { function esc_html_e($text, $domain = '') {;} }

if( !function_exists( '_x' ) ) { function _x($text, $context, $domain = '') {;} }

if( !function_exists( '_ex' ) ) { function _ex($text, $context, $domain = '') {;} }

if( !function_exists( 'esc_attr_x' ) ) { function esc_attr_x($single, $context, $domain = '') {;} }

if( !function_exists( 'esc_html_x' ) ) { function esc_html_x($single, $context, $domain = '') {;} }

if( !function_exists( '_n' ) ) { function _n($single, $plural, $number, $domain = '') {;} }

if( !function_exists( '_nx' ) ) { function _nx($single, $plural, $number, $context, $domain = '') {;} }

if( !function_exists( '_n_noop' ) ) { function _n_noop($singular, $plural) {;} }

if( !function_exists( '_nx_noop' ) ) { function _nx_noop($singular, $plural, $context) {;} }

if( !function_exists( 'translate_nooped_plural' ) ) { function translate_nooped_plural($nooped_plural, $count, $domain = '') {;} }

if( !function_exists( 'load_textdomain' ) ) { function load_textdomain($domain, $mofile) {;} }

if( !function_exists( 'unload_textdomain' ) ) { function unload_textdomain($domain) {;} }

if( !function_exists( 'load_default_textdomain' ) ) { function load_default_textdomain() {;} }

if( !function_exists( 'load_plugin_textdomain' ) ) { function load_plugin_textdomain($domain, $abs_rel_path = '', $plugin_rel_path = '') {;} }

if( !function_exists( 'load_muplugin_textdomain' ) ) { function load_muplugin_textdomain($domain, $mu_plugin_rel_path = '') {;} }

if( !function_exists( 'load_theme_textdomain' ) ) { function load_theme_textdomain($domain, $path = '') {;} }

if( !function_exists( 'load_child_theme_textdomain' ) ) { function load_child_theme_textdomain($domain, $path = '') {;} }

if( !function_exists( 'get_translations_for_domain' ) ) { function get_translations_for_domain($domain) {;} }

if( !function_exists( 'is_textdomain_loaded' ) ) { function is_textdomain_loaded($domain) {;} }

if( !function_exists( 'translate_user_role' ) ) { function translate_user_role($name) {;} }

if( !function_exists( 'get_available_languages' ) ) { function get_available_languages($dir = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/cache.php */

if( !function_exists( 'wp_cache_add' ) ) { function wp_cache_add($key, $data, $flag = '', $expire = '') {;} }

if( !function_exists( 'wp_cache_close' ) ) { function wp_cache_close() {;} }

if( !function_exists( 'wp_cache_delete' ) ) { function wp_cache_delete($id, $flag = '') {;} }

if( !function_exists( 'wp_cache_flush' ) ) { function wp_cache_flush() {;} }

if( !function_exists( 'wp_cache_get' ) ) { function wp_cache_get($id, $flag = '') {;} }

if( !function_exists( 'wp_cache_init' ) ) { function wp_cache_init() {;} }

if( !function_exists( 'wp_cache_replace' ) ) { function wp_cache_replace($key, $data, $flag = '', $expire = '') {;} }

if( !function_exists( 'wp_cache_set' ) ) { function wp_cache_set($key, $data, $flag = '', $expire = '') {;} }

if( !function_exists( 'wp_cache_add_global_groups' ) ) { function wp_cache_add_global_groups($groups) {;} }

if( !function_exists( 'wp_cache_add_non_persistent_groups' ) ) { function wp_cache_add_non_persistent_groups($groups) {;} }

if( !function_exists( 'wp_cache_reset' ) ) { function wp_cache_reset() {;} }

if( !class_exists( 'WP_Object_Cache' ) ) {
	class WP_Object_Cache {
		public $cache = '';
		public $non_existent_objects = '';
		public $cache_hits = '';
		public $cache_misses = '';
		public $global_groups = '';

		public function add($id, $data, $group = '', $expire = '') {;}
		public function add_global_groups($groups) {;}
		public function delete($id, $group = '', $force = '') {;}
		public function flush() {;}
		public function get($id, $group = '') {;}
		public function replace($id, $data, $group = '', $expire = '') {;}
		public function reset() {;}
		public function set($id, $data, $group = '', $expire = '') {;}
		public function stats() {;}
		public function __construct() {;}
		public function __destruct() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/author-template.php */

if( !function_exists( 'get_the_author' ) ) { function get_the_author($deprecated = '') {;} }

if( !function_exists( 'the_author' ) ) { function the_author($deprecated = '', $deprecated_echo = '') {;} }

if( !function_exists( 'get_the_modified_author' ) ) { function get_the_modified_author() {;} }

if( !function_exists( 'the_modified_author' ) ) { function the_modified_author() {;} }

if( !function_exists( 'get_the_author_meta' ) ) { function get_the_author_meta($field = '', $user_id = '') {;} }

if( !function_exists( 'the_author_meta' ) ) { function the_author_meta($field = '', $user_id = '') {;} }

if( !function_exists( 'get_the_author_link' ) ) { function get_the_author_link() {;} }

if( !function_exists( 'the_author_link' ) ) { function the_author_link() {;} }

if( !function_exists( 'get_the_author_posts' ) ) { function get_the_author_posts() {;} }

if( !function_exists( 'the_author_posts' ) ) { function the_author_posts() {;} }

if( !function_exists( 'the_author_posts_link' ) ) { function the_author_posts_link($deprecated = '') {;} }

if( !function_exists( 'get_author_posts_url' ) ) { function get_author_posts_url($author_id, $author_nicename = '') {;} }

if( !function_exists( 'wp_list_authors' ) ) { function wp_list_authors($args = '') {;} }

if( !function_exists( 'is_multi_author' ) ) { function is_multi_author() {;} }

if( !function_exists( '__clear_multi_author_cache' ) ) { function __clear_multi_author_cache() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/bookmark.php */

if( !function_exists( 'get_bookmark' ) ) { function get_bookmark($bookmark, $output = '', $filter = '') {;} }

if( !function_exists( 'get_bookmark_field' ) ) { function get_bookmark_field($field, $bookmark, $context = '') {;} }

if( !function_exists( 'get_bookmarks' ) ) { function get_bookmarks($args = '') {;} }

if( !function_exists( 'sanitize_bookmark' ) ) { function sanitize_bookmark($bookmark, $context = '') {;} }

if( !function_exists( 'sanitize_bookmark_field' ) ) { function sanitize_bookmark_field($field, $value, $bookmark_id, $context) {;} }

if( !function_exists( 'clean_bookmark_cache' ) ) { function clean_bookmark_cache($bookmark_id) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/registration-functions.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/category-template.php */

if( !function_exists( 'get_category_link' ) ) { function get_category_link($category) {;} }

if( !function_exists( 'get_category_parents' ) ) { function get_category_parents($id, $link = '', $separator = '', $nicename = '', $visited = '') {;} }

if( !function_exists( 'get_the_category' ) ) { function get_the_category($id = '') {;} }

if( !function_exists( '_usort_terms_by_name' ) ) { function _usort_terms_by_name($a, $b) {;} }

if( !function_exists( '_usort_terms_by_ID' ) ) { function _usort_terms_by_ID($a, $b) {;} }

if( !function_exists( 'get_the_category_by_ID' ) ) { function get_the_category_by_ID($cat_ID) {;} }

if( !function_exists( 'get_the_category_list' ) ) { function get_the_category_list($separator = '', $parents = '', $post_id = '') {;} }

if( !function_exists( 'in_category' ) ) { function in_category($category, $post = '') {;} }

if( !function_exists( 'the_category' ) ) { function the_category($separator = '', $parents = '', $post_id = '') {;} }

if( !function_exists( 'category_description' ) ) { function category_description($category = '') {;} }

if( !function_exists( 'wp_dropdown_categories' ) ) { function wp_dropdown_categories($args = '') {;} }

if( !function_exists( 'wp_list_categories' ) ) { function wp_list_categories($args = '') {;} }

if( !function_exists( 'wp_tag_cloud' ) ) { function wp_tag_cloud($args = '') {;} }

if( !function_exists( 'default_topic_count_text' ) ) { function default_topic_count_text($count) {;} }

if( !function_exists( 'default_topic_count_scale' ) ) { function default_topic_count_scale($count) {;} }

if( !function_exists( 'wp_generate_tag_cloud' ) ) { function wp_generate_tag_cloud($tags, $args = '') {;} }

if( !function_exists( '_wp_tag_cloud_name_sort_cb' ) ) { function _wp_tag_cloud_name_sort_cb($a, $b) {;} }

if( !function_exists( '_wp_tag_cloud_count_sort_cb' ) ) { function _wp_tag_cloud_count_sort_cb($a, $b) {;} }

if( !function_exists( 'walk_category_tree' ) ) { function walk_category_tree() {;} }

if( !function_exists( 'walk_category_dropdown_tree' ) ) { function walk_category_dropdown_tree() {;} }

if( !function_exists( 'get_tag_link' ) ) { function get_tag_link($tag) {;} }

if( !function_exists( 'get_the_tags' ) ) { function get_the_tags($id = '') {;} }

if( !function_exists( 'get_the_tag_list' ) ) { function get_the_tag_list($before = '', $sep = '', $after = '') {;} }

if( !function_exists( 'the_tags' ) ) { function the_tags($before = '', $sep = '', $after = '') {;} }

if( !function_exists( 'tag_description' ) ) { function tag_description($tag = '') {;} }

if( !function_exists( 'term_description' ) ) { function term_description($term = '', $taxonomy = '') {;} }

if( !function_exists( 'get_the_terms' ) ) { function get_the_terms($id = '', $taxonomy) {;} }

if( !function_exists( 'get_the_term_list' ) ) { function get_the_term_list($id = '', $taxonomy, $before = '', $sep = '', $after = '') {;} }

if( !function_exists( 'the_terms' ) ) { function the_terms($id = '', $taxonomy, $before = '', $sep = '', $after = '') {;} }

if( !function_exists( 'has_category' ) ) { function has_category($category = '', $post = '') {;} }

if( !function_exists( 'has_tag' ) ) { function has_tag($tag = '', $post = '') {;} }

if( !function_exists( 'has_term' ) ) { function has_term($term = '', $taxonomy = '', $post = '') {;} }

if( !class_exists( 'Walker_Category' ) ) {
	class Walker_Category {
		public $tree_type = '';
		public $db_fields = '';

		public function start_lvl($output, $depth, $args) {;}
		public function end_lvl($output, $depth, $args) {;}
		public function start_el($output, $category, $depth, $args) {;}
		public function end_el($output, $page, $depth, $args) {;}

	}
}

if( !class_exists( 'Walker_CategoryDropdown' ) ) {
	class Walker_CategoryDropdown {
		public $tree_type = '';
		public $db_fields = '';

		public function start_el($output, $category, $depth, $args) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/meta.php */

if( !function_exists( 'add_metadata' ) ) { function add_metadata($meta_type, $object_id, $meta_key, $meta_value, $unique = '') {;} }

if( !function_exists( 'update_metadata' ) ) { function update_metadata($meta_type, $object_id, $meta_key, $meta_value, $prev_value = '') {;} }

if( !function_exists( 'delete_metadata' ) ) { function delete_metadata($meta_type, $object_id, $meta_key, $meta_value = '', $delete_all = '') {;} }

if( !function_exists( 'get_metadata' ) ) { function get_metadata($meta_type, $object_id, $meta_key = '', $single = '') {;} }

if( !function_exists( 'update_meta_cache' ) ) { function update_meta_cache($meta_type, $object_ids) {;} }

if( !function_exists( 'get_meta_sql' ) ) { function get_meta_sql($meta_query = '', $type, $primary_table, $primary_id_column, $context = '') {;} }

if( !function_exists( '_get_meta_table' ) ) { function _get_meta_table($type) {;} }

if( !function_exists( 'is_protected_meta' ) ) { function is_protected_meta($meta_key, $meta_type = '') {;} }

if( !function_exists( 'sanitize_meta' ) ) { function sanitize_meta($meta_key, $meta_value, $meta_type = '') {;} }

if( !class_exists( 'WP_Meta_Query' ) ) {
	class WP_Meta_Query {
		public $queries = '';
		public $relation;

		public function __construct($meta_query = '') {;}
		public function parse_query_vars($qv) {;}
		public function get_sql($type, $primary_table, $primary_id_column, $context = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/plugin.php */

if( !function_exists( 'add_filter' ) ) { function add_filter($tag, $function_to_add, $priority = '', $accepted_args = '') {;} }

if( !function_exists( 'has_filter' ) ) { function has_filter($tag, $function_to_check = '') {;} }

if( !function_exists( 'apply_filters' ) ) { function apply_filters($tag, $value) {;} }

if( !function_exists( 'apply_filters_ref_array' ) ) { function apply_filters_ref_array($tag, $args) {;} }

if( !function_exists( 'remove_filter' ) ) { function remove_filter($tag, $function_to_remove, $priority = '', $accepted_args = '') {;} }

if( !function_exists( 'remove_all_filters' ) ) { function remove_all_filters($tag, $priority = '') {;} }

if( !function_exists( 'current_filter' ) ) { function current_filter() {;} }

if( !function_exists( 'add_action' ) ) { function add_action($tag, $function_to_add, $priority = '', $accepted_args = '') {;} }

if( !function_exists( 'do_action' ) ) { function do_action($tag, $arg = '') {;} }

if( !function_exists( 'did_action' ) ) { function did_action($tag) {;} }

if( !function_exists( 'do_action_ref_array' ) ) { function do_action_ref_array($tag, $args) {;} }

if( !function_exists( 'has_action' ) ) { function has_action($tag, $function_to_check = '') {;} }

if( !function_exists( 'remove_action' ) ) { function remove_action($tag, $function_to_remove, $priority = '', $accepted_args = '') {;} }

if( !function_exists( 'remove_all_actions' ) ) { function remove_all_actions($tag, $priority = '') {;} }

if( !function_exists( 'plugin_basename' ) ) { function plugin_basename($file) {;} }

if( !function_exists( 'plugin_dir_path' ) ) { function plugin_dir_path($file) {;} }

if( !function_exists( 'plugin_dir_url' ) ) { function plugin_dir_url($file) {;} }

if( !function_exists( 'register_activation_hook' ) ) { function register_activation_hook($file, $function) {;} }

if( !function_exists( 'register_deactivation_hook' ) ) { function register_deactivation_hook($file, $function) {;} }

if( !function_exists( 'register_uninstall_hook' ) ) { function register_uninstall_hook($file, $callback) {;} }

if( !function_exists( '_wp_call_all_hook' ) ) { function _wp_call_all_hook($args) {;} }

if( !function_exists( '_wp_filter_build_unique_id' ) ) { function _wp_filter_build_unique_id($tag, $function, $priority) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/feed-rss.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/cron.php */

if( !function_exists( 'wp_schedule_single_event' ) ) { function wp_schedule_single_event($timestamp, $hook, $args = '') {;} }

if( !function_exists( 'wp_schedule_event' ) ) { function wp_schedule_event($timestamp, $recurrence, $hook, $args = '') {;} }

if( !function_exists( 'wp_reschedule_event' ) ) { function wp_reschedule_event($timestamp, $recurrence, $hook, $args = '') {;} }

if( !function_exists( 'wp_unschedule_event' ) ) { function wp_unschedule_event($timestamp, $hook, $args = '') {;} }

if( !function_exists( 'wp_clear_scheduled_hook' ) ) { function wp_clear_scheduled_hook($hook, $args = '') {;} }

if( !function_exists( 'wp_next_scheduled' ) ) { function wp_next_scheduled($hook, $args = '') {;} }

if( !function_exists( 'spawn_cron' ) ) { function spawn_cron($local_time = '') {;} }

if( !function_exists( 'wp_cron' ) ) { function wp_cron() {;} }

if( !function_exists( 'wp_get_schedules' ) ) { function wp_get_schedules() {;} }

if( !function_exists( 'wp_get_schedule' ) ) { function wp_get_schedule($hook, $args = '') {;} }

if( !function_exists( '_get_cron_array' ) ) { function _get_cron_array() {;} }

if( !function_exists( '_set_cron_array' ) ) { function _set_cron_array($cron) {;} }

if( !function_exists( '_upgrade_cron_array' ) ) { function _upgrade_cron_array($cron) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/load.php */

if( !function_exists( 'wp_unregister_GLOBALS' ) ) { function wp_unregister_GLOBALS() {;} }

if( !function_exists( 'wp_fix_server_vars' ) ) { function wp_fix_server_vars() {;} }

if( !function_exists( 'wp_check_php_mysql_versions' ) ) { function wp_check_php_mysql_versions() {;} }

if( !function_exists( 'wp_favicon_request' ) ) { function wp_favicon_request() {;} }

if( !function_exists( 'wp_maintenance' ) ) { function wp_maintenance() {;} }

if( !function_exists( 'timer_start' ) ) { function timer_start() {;} }

if( !function_exists( 'timer_stop' ) ) { function timer_stop($display = '', $precision = '') {;} }

if( !function_exists( 'wp_debug_mode' ) ) { function wp_debug_mode() {;} }

if( !function_exists( 'wp_set_lang_dir' ) ) { function wp_set_lang_dir() {;} }

if( !function_exists( 'require_wp_db' ) ) { function require_wp_db() {;} }

if( !function_exists( 'wp_set_wpdb_vars' ) ) { function wp_set_wpdb_vars() {;} }

if( !function_exists( 'wp_start_object_cache' ) ) { function wp_start_object_cache() {;} }

if( !function_exists( 'wp_not_installed' ) ) { function wp_not_installed() {;} }

if( !function_exists( 'wp_get_mu_plugins' ) ) { function wp_get_mu_plugins() {;} }

if( !function_exists( 'wp_get_active_and_valid_plugins' ) ) { function wp_get_active_and_valid_plugins() {;} }

if( !function_exists( 'wp_set_internal_encoding' ) ) { function wp_set_internal_encoding() {;} }

if( !function_exists( 'wp_magic_quotes' ) ) { function wp_magic_quotes() {;} }

if( !function_exists( 'shutdown_action_hook' ) ) { function shutdown_action_hook() {;} }

if( !function_exists( 'wp_clone' ) ) { function wp_clone($object) {;} }

if( !function_exists( 'is_admin' ) ) { function is_admin() {;} }

if( !function_exists( 'is_blog_admin' ) ) { function is_blog_admin() {;} }

if( !function_exists( 'is_network_admin' ) ) { function is_network_admin() {;} }

if( !function_exists( 'is_user_admin' ) ) { function is_user_admin() {;} }

if( !function_exists( 'is_multisite' ) ) { function is_multisite() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/ms-functions.php */

if( !function_exists( 'get_sitestats' ) ) { function get_sitestats() {;} }

if( !function_exists( 'get_admin_users_for_domain' ) ) { function get_admin_users_for_domain($sitedomain = '', $path = '') {;} }

if( !function_exists( 'get_active_blog_for_user' ) ) { function get_active_blog_for_user($user_id) {;} }

if( !function_exists( 'is_user_member_of_blog' ) ) { function is_user_member_of_blog($user_id, $blog_id = '') {;} }

if( !function_exists( 'get_user_count' ) ) { function get_user_count() {;} }

if( !function_exists( 'get_blog_count' ) ) { function get_blog_count($id = '') {;} }

if( !function_exists( 'get_blog_post' ) ) { function get_blog_post($blog_id, $post_id) {;} }

if( !function_exists( 'add_user_to_blog' ) ) { function add_user_to_blog($blog_id, $user_id, $role) {;} }

if( !function_exists( 'remove_user_from_blog' ) ) { function remove_user_from_blog($user_id, $blog_id = '', $reassign = '') {;} }

if( !function_exists( 'create_empty_blog' ) ) { function create_empty_blog($domain, $path, $weblog_title, $site_id = '') {;} }

if( !function_exists( 'get_blog_permalink' ) ) { function get_blog_permalink($_blog_id, $post_id) {;} }

if( !function_exists( 'get_blog_id_from_url' ) ) { function get_blog_id_from_url($domain, $path = '') {;} }

if( !function_exists( 'wpmu_admin_do_redirect' ) ) { function wpmu_admin_do_redirect($url = '') {;} }

if( !function_exists( 'wpmu_admin_redirect_add_updated_param' ) ) { function wpmu_admin_redirect_add_updated_param($url = '') {;} }

if( !function_exists( 'is_email_address_unsafe' ) ) { function is_email_address_unsafe($user_email) {;} }

if( !function_exists( 'wpmu_validate_user_signup' ) ) { function wpmu_validate_user_signup($user_name, $user_email) {;} }

if( !function_exists( 'wpmu_validate_blog_signup' ) ) { function wpmu_validate_blog_signup($blogname, $blog_title, $user = '') {;} }

if( !function_exists( 'wpmu_signup_blog' ) ) { function wpmu_signup_blog($domain, $path, $title, $user, $user_email, $meta = '') {;} }

if( !function_exists( 'wpmu_signup_user' ) ) { function wpmu_signup_user($user, $user_email, $meta = '') {;} }

if( !function_exists( 'wpmu_signup_blog_notification' ) ) { function wpmu_signup_blog_notification($domain, $path, $title, $user, $user_email, $key, $meta = '') {;} }

if( !function_exists( 'wpmu_signup_user_notification' ) ) { function wpmu_signup_user_notification($user, $user_email, $key, $meta = '') {;} }

if( !function_exists( 'wpmu_activate_signup' ) ) { function wpmu_activate_signup($key) {;} }

if( !function_exists( 'wpmu_create_user' ) ) { function wpmu_create_user($user_name, $password, $email) {;} }

if( !function_exists( 'wpmu_create_blog' ) ) { function wpmu_create_blog($domain, $path, $title, $user_id, $meta = '', $site_id = '') {;} }

if( !function_exists( 'newblog_notify_siteadmin' ) ) { function newblog_notify_siteadmin($blog_id, $deprecated = '') {;} }

if( !function_exists( 'newuser_notify_siteadmin' ) ) { function newuser_notify_siteadmin($user_id) {;} }

if( !function_exists( 'domain_exists' ) ) { function domain_exists($domain, $path, $site_id = '') {;} }

if( !function_exists( 'insert_blog' ) ) { function insert_blog($domain, $path, $site_id) {;} }

if( !function_exists( 'install_blog' ) ) { function install_blog($blog_id, $blog_title = '') {;} }

if( !function_exists( 'install_blog_defaults' ) ) { function install_blog_defaults($blog_id, $user_id) {;} }

if( !function_exists( 'wpmu_welcome_notification' ) ) { function wpmu_welcome_notification($blog_id, $user_id, $password, $title, $meta = '') {;} }

if( !function_exists( 'wpmu_welcome_user_notification' ) ) { function wpmu_welcome_user_notification($user_id, $password, $meta = '') {;} }

if( !function_exists( 'get_current_site' ) ) { function get_current_site() {;} }

if( !function_exists( 'get_user_id_from_string' ) ) { function get_user_id_from_string($string) {;} }

if( !function_exists( 'get_most_recent_post_of_user' ) ) { function get_most_recent_post_of_user($user_id) {;} }

if( !function_exists( 'get_dirsize' ) ) { function get_dirsize($directory) {;} }

if( !function_exists( 'recurse_dirsize' ) ) { function recurse_dirsize($directory) {;} }

if( !function_exists( 'upload_is_user_over_quota' ) ) { function upload_is_user_over_quota($echo = '') {;} }

if( !function_exists( 'check_upload_mimes' ) ) { function check_upload_mimes($mimes) {;} }

if( !function_exists( 'update_posts_count' ) ) { function update_posts_count($deprecated = '') {;} }

if( !function_exists( 'wpmu_log_new_registrations' ) ) { function wpmu_log_new_registrations($blog_id, $user_id) {;} }

if( !function_exists( 'fix_import_form_size' ) ) { function fix_import_form_size($size) {;} }

if( !function_exists( 'global_terms' ) ) { function global_terms($term_id, $deprecated = '') {;} }

if( !function_exists( 'redirect_this_site' ) ) { function redirect_this_site($deprecated = '') {;} }

if( !function_exists( 'upload_is_file_too_big' ) ) { function upload_is_file_too_big($upload) {;} }

if( !function_exists( 'signup_nonce_fields' ) ) { function signup_nonce_fields() {;} }

if( !function_exists( 'signup_nonce_check' ) ) { function signup_nonce_check($result) {;} }

if( !function_exists( 'maybe_redirect_404' ) ) { function maybe_redirect_404() {;} }

if( !function_exists( 'maybe_add_existing_user_to_blog' ) ) { function maybe_add_existing_user_to_blog() {;} }

if( !function_exists( 'add_existing_user_to_blog' ) ) { function add_existing_user_to_blog($details = '') {;} }

if( !function_exists( 'add_new_user_to_blog' ) ) { function add_new_user_to_blog($user_id, $email, $meta) {;} }

if( !function_exists( 'fix_phpmailer_messageid' ) ) { function fix_phpmailer_messageid($phpmailer) {;} }

if( !function_exists( 'is_user_spammy' ) ) { function is_user_spammy($username = '') {;} }

if( !function_exists( 'update_blog_public' ) ) { function update_blog_public($old_value, $value) {;} }

if( !function_exists( 'get_dashboard_blog' ) ) { function get_dashboard_blog() {;} }

if( !function_exists( 'is_user_option_local' ) ) { function is_user_option_local($key, $user_id = '', $blog_id = '') {;} }

if( !function_exists( 'users_can_register_signup_filter' ) ) { function users_can_register_signup_filter() {;} }

if( !function_exists( 'welcome_user_msg_filter' ) ) { function welcome_user_msg_filter($text) {;} }

if( !function_exists( 'force_ssl_content' ) ) { function force_ssl_content($force = '') {;} }

if( !function_exists( 'filter_SSL' ) ) { function filter_SSL($url) {;} }

if( !function_exists( 'wp_schedule_update_network_counts' ) ) { function wp_schedule_update_network_counts() {;} }

if( !function_exists( 'wp_update_network_counts' ) ) { function wp_update_network_counts() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/comment.php */

if( !function_exists( 'check_comment' ) ) { function check_comment($author, $email, $url, $comment, $user_ip, $user_agent, $comment_type) {;} }

if( !function_exists( 'get_approved_comments' ) ) { function get_approved_comments($post_id) {;} }

if( !function_exists( 'get_comment' ) ) { function get_comment($comment, $output = '') {;} }

if( !function_exists( 'get_comments' ) ) { function get_comments($args = '') {;} }

if( !function_exists( 'get_comment_statuses' ) ) { function get_comment_statuses() {;} }

if( !function_exists( 'get_lastcommentmodified' ) ) { function get_lastcommentmodified($timezone = '') {;} }

if( !function_exists( 'get_comment_count' ) ) { function get_comment_count($post_id = '') {;} }

if( !function_exists( 'add_comment_meta' ) ) { function add_comment_meta($comment_id, $meta_key, $meta_value, $unique = '') {;} }

if( !function_exists( 'delete_comment_meta' ) ) { function delete_comment_meta($comment_id, $meta_key, $meta_value = '') {;} }

if( !function_exists( 'get_comment_meta' ) ) { function get_comment_meta($comment_id, $key, $single = '') {;} }

if( !function_exists( 'update_comment_meta' ) ) { function update_comment_meta($comment_id, $meta_key, $meta_value, $prev_value = '') {;} }

if( !function_exists( 'sanitize_comment_cookies' ) ) { function sanitize_comment_cookies() {;} }

if( !function_exists( 'wp_allow_comment' ) ) { function wp_allow_comment($commentdata) {;} }

if( !function_exists( 'check_comment_flood_db' ) ) { function check_comment_flood_db($ip, $email, $date) {;} }

if( !function_exists( 'separate_comments' ) ) { function separate_comments($comments) {;} }

if( !function_exists( 'get_comment_pages_count' ) ) { function get_comment_pages_count($comments = '', $per_page = '', $threaded = '') {;} }

if( !function_exists( 'get_page_of_comment' ) ) { function get_page_of_comment($comment_ID, $args = '') {;} }

if( !function_exists( 'wp_blacklist_check' ) ) { function wp_blacklist_check($author, $email, $url, $comment, $user_ip, $user_agent) {;} }

if( !function_exists( 'wp_count_comments' ) ) { function wp_count_comments($post_id = '') {;} }

if( !function_exists( 'wp_delete_comment' ) ) { function wp_delete_comment($comment_id, $force_delete = '') {;} }

if( !function_exists( 'wp_trash_comment' ) ) { function wp_trash_comment($comment_id) {;} }

if( !function_exists( 'wp_untrash_comment' ) ) { function wp_untrash_comment($comment_id) {;} }

if( !function_exists( 'wp_spam_comment' ) ) { function wp_spam_comment($comment_id) {;} }

if( !function_exists( 'wp_unspam_comment' ) ) { function wp_unspam_comment($comment_id) {;} }

if( !function_exists( 'wp_get_comment_status' ) ) { function wp_get_comment_status($comment_id) {;} }

if( !function_exists( 'wp_transition_comment_status' ) ) { function wp_transition_comment_status($new_status, $old_status, $comment) {;} }

if( !function_exists( 'wp_get_current_commenter' ) ) { function wp_get_current_commenter() {;} }

if( !function_exists( 'wp_insert_comment' ) ) { function wp_insert_comment($commentdata) {;} }

if( !function_exists( 'wp_filter_comment' ) ) { function wp_filter_comment($commentdata) {;} }

if( !function_exists( 'wp_throttle_comment_flood' ) ) { function wp_throttle_comment_flood($block, $time_lastcomment, $time_newcomment) {;} }

if( !function_exists( 'wp_new_comment' ) ) { function wp_new_comment($commentdata) {;} }

if( !function_exists( 'wp_set_comment_status' ) ) { function wp_set_comment_status($comment_id, $comment_status, $wp_error = '') {;} }

if( !function_exists( 'wp_update_comment' ) ) { function wp_update_comment($commentarr) {;} }

if( !function_exists( 'wp_defer_comment_counting' ) ) { function wp_defer_comment_counting($defer = '') {;} }

if( !function_exists( 'wp_update_comment_count' ) ) { function wp_update_comment_count($post_id, $do_deferred = '') {;} }

if( !function_exists( 'wp_update_comment_count_now' ) ) { function wp_update_comment_count_now($post_id) {;} }

if( !function_exists( 'discover_pingback_server_uri' ) ) { function discover_pingback_server_uri($url, $deprecated = '') {;} }

if( !function_exists( 'do_all_pings' ) ) { function do_all_pings() {;} }

if( !function_exists( 'do_trackbacks' ) ) { function do_trackbacks($post_id) {;} }

if( !function_exists( 'generic_ping' ) ) { function generic_ping($post_id = '') {;} }

if( !function_exists( 'pingback' ) ) { function pingback($content, $post_ID) {;} }

if( !function_exists( 'privacy_ping_filter' ) ) { function privacy_ping_filter($sites) {;} }

if( !function_exists( 'trackback' ) ) { function trackback($trackback_url, $title, $excerpt, $ID) {;} }

if( !function_exists( 'weblog_ping' ) ) { function weblog_ping($server = '', $path = '') {;} }

if( !function_exists( 'clean_comment_cache' ) ) { function clean_comment_cache($ids) {;} }

if( !function_exists( 'update_comment_cache' ) ) { function update_comment_cache($comments) {;} }

if( !function_exists( '_close_comments_for_old_posts' ) ) { function _close_comments_for_old_posts($posts) {;} }

if( !function_exists( '_close_comments_for_old_post' ) ) { function _close_comments_for_old_post($open, $post_id) {;} }

if( !class_exists( 'WP_Comment_Query' ) ) {
	class WP_Comment_Query {

		public function query($query_vars) {;}
		public function get_search_sql($string, $cols) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/wp-diff.php */

if( !class_exists( 'WP_Text_Diff_Renderer_Table' ) ) {
	class WP_Text_Diff_Renderer_Table {
		public $_leading_context_lines = '';
		public $_trailing_context_lines = '';
		public $_diff_threshold = '';
		public $inline_diff_renderer = '';

		public function __construct($params = '') {;}
		public function _startBlock($header) {;}
		public function _lines($lines, $prefix = '') {;}
		public function addedLine($line) {;}
		public function deletedLine($line) {;}
		public function contextLine($line) {;}
		public function emptyLine() {;}
		public function _added($lines, $encode = '') {;}
		public function _deleted($lines, $encode = '') {;}
		public function _context($lines, $encode = '') {;}
		public function _changed($orig, $final) {;}
		public function interleave_changed_lines($orig, $final) {;}
		public function compute_string_distance($string1, $string2) {;}
		public function difference($a, $b) {;}

	}
}

if( !class_exists( 'WP_Text_Diff_Renderer_inline' ) ) {
	class WP_Text_Diff_Renderer_inline {

		public function _splitOnWords($string, $newlineEscape = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/ms-load.php */

if( !function_exists( 'is_subdomain_install' ) ) { function is_subdomain_install() {;} }

if( !function_exists( 'wp_get_active_network_plugins' ) ) { function wp_get_active_network_plugins() {;} }

if( !function_exists( 'ms_site_check' ) ) { function ms_site_check() {;} }

if( !function_exists( 'get_current_site_name' ) ) { function get_current_site_name($current_site) {;} }

if( !function_exists( 'wpmu_current_site' ) ) { function wpmu_current_site() {;} }

if( !function_exists( 'ms_not_installed' ) ) { function ms_not_installed() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/bookmark-template.php */

if( !function_exists( '_walk_bookmarks' ) ) { function _walk_bookmarks($bookmarks, $args = '') {;} }

if( !function_exists( 'wp_list_bookmarks' ) ) { function wp_list_bookmarks($args = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/template-loader.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/default-constants.php */

if( !function_exists( 'wp_initial_constants' ) ) { function wp_initial_constants() {;} }

if( !function_exists( 'wp_plugin_directory_constants' ) ) { function wp_plugin_directory_constants() {;} }

if( !function_exists( 'wp_cookie_constants' ) ) { function wp_cookie_constants() {;} }

if( !function_exists( 'wp_ssl_constants' ) ) { function wp_ssl_constants() {;} }

if( !function_exists( 'wp_functionality_constants' ) ) { function wp_functionality_constants() {;} }

if( !function_exists( 'wp_templating_constants' ) ) { function wp_templating_constants() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/ms-settings.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/feed-rss2-comments.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/ms-default-filters.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/feed-rdf.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-wp-admin-bar.php */

if( !class_exists( 'WP_Admin_Bar' ) ) {
	class WP_Admin_Bar {
		public $changed_locale = '';
		public $menu;
		public $need_to_change_locale = '';
		public $proto = '';
		public $user;

		public function initialize() {;}
		public function add_menu($args = '') {;}
		public function remove_menu($id) {;}
		public function render() {;}
		public function recursive_render($id, $menu_item) {;}
		public function add_node($parent_id, $menu, $child) {;}
		public function add_menus() {;}
		public function remove_node($id, $menu) {;}
		public function load_user_locale_translations() {;}
		public function unload_user_locale_translations() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/ms-blogs.php */

if( !function_exists( 'wpmu_update_blogs_date' ) ) { function wpmu_update_blogs_date() {;} }

if( !function_exists( 'get_blogaddress_by_id' ) ) { function get_blogaddress_by_id($blog_id) {;} }

if( !function_exists( 'get_blogaddress_by_name' ) ) { function get_blogaddress_by_name($blogname) {;} }

if( !function_exists( 'get_blogaddress_by_domain' ) ) { function get_blogaddress_by_domain($domain, $path) {;} }

if( !function_exists( 'get_id_from_blogname' ) ) { function get_id_from_blogname($name) {;} }

if( !function_exists( 'get_blog_details' ) ) { function get_blog_details($fields, $get_all = '') {;} }

if( !function_exists( 'refresh_blog_details' ) ) { function refresh_blog_details($blog_id) {;} }

if( !function_exists( 'update_blog_details' ) ) { function update_blog_details($blog_id, $details = '') {;} }

if( !function_exists( 'get_blog_option' ) ) { function get_blog_option($blog_id, $setting, $default = '') {;} }

if( !function_exists( 'add_blog_option' ) ) { function add_blog_option($id, $key, $value) {;} }

if( !function_exists( 'delete_blog_option' ) ) { function delete_blog_option($id, $key) {;} }

if( !function_exists( 'update_blog_option' ) ) { function update_blog_option($id, $key, $value, $deprecated = '') {;} }

if( !function_exists( 'switch_to_blog' ) ) { function switch_to_blog($new_blog, $validate = '') {;} }

if( !function_exists( 'restore_current_blog' ) ) { function restore_current_blog() {;} }

if( !function_exists( 'is_archived' ) ) { function is_archived($id) {;} }

if( !function_exists( 'update_archived' ) ) { function update_archived($id, $archived) {;} }

if( !function_exists( 'update_blog_status' ) ) { function update_blog_status($blog_id, $pref, $value, $deprecated = '') {;} }

if( !function_exists( 'get_blog_status' ) ) { function get_blog_status($id, $pref) {;} }

if( !function_exists( 'get_last_updated' ) ) { function get_last_updated($deprecated = '', $start = '', $quantity = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/compat.php */

if( !function_exists( '_' ) ) { function _($string) {;} }

if( !function_exists( 'mb_substr' ) ) { function mb_substr($str, $start, $length = '', $encoding = '') {;} }

if( !function_exists( '_mb_substr' ) ) { function _mb_substr($str, $start, $length = '', $encoding = '') {;} }

if( !function_exists( 'hash_hmac' ) ) { function hash_hmac($algo, $data, $key, $raw_output = '') {;} }

if( !function_exists( '_hash_hmac' ) ) { function _hash_hmac($algo, $data, $key, $raw_output = '') {;} }

if( !function_exists( 'json_encode' ) ) { function json_encode($string) {;} }

if( !function_exists( 'json_decode' ) ) { function json_decode($string, $assoc_array = '') {;} }

if( !function_exists( '_json_decode_object_helper' ) ) { function _json_decode_object_helper($data) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class.wp-scripts.php */

if( !class_exists( 'WP_Scripts' ) ) {
	class WP_Scripts {
		public $base_url;
		public $content_url;
		public $default_version;
		public $in_footer = '';
		public $concat = '';
		public $concat_version = '';
		public $do_concat = '';
		public $print_html = '';
		public $print_code = '';
		public $ext_handles = '';
		public $ext_version = '';
		public $default_dirs;

		public function __construct() {;}
		public function print_scripts($handles = '', $group = '') {;}
		public function print_scripts_l10n($handle, $echo = '') {;}
		public function do_item($handle, $group = '') {;}
		public function localize($handle, $object_name, $l10n) {;}
		public function set_group($handle, $recursion, $group = '') {;}
		public function all_deps($handles, $recursion = '', $group = '') {;}
		public function do_head_items() {;}
		public function do_footer_items() {;}
		public function in_default_dir($src) {;}
		public function reset() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/post.php */

if( !function_exists( 'create_initial_post_types' ) ) { function create_initial_post_types() {;} }

if( !function_exists( 'get_attached_file' ) ) { function get_attached_file($attachment_id, $unfiltered = '') {;} }

if( !function_exists( 'update_attached_file' ) ) { function update_attached_file($attachment_id, $file) {;} }

if( !function_exists( '_wp_relative_upload_path' ) ) { function _wp_relative_upload_path($path) {;} }

if( !function_exists( 'get_children' ) ) { function get_children($args = '', $output = '') {;} }

if( !function_exists( 'get_extended' ) ) { function get_extended($post) {;} }

if( !function_exists( 'get_post' ) ) { function get_post($post, $output = '', $filter = '') {;} }

if( !function_exists( 'get_post_ancestors' ) ) { function get_post_ancestors($post) {;} }

if( !function_exists( 'get_post_field' ) ) { function get_post_field($field, $post, $context = '') {;} }

if( !function_exists( 'get_post_mime_type' ) ) { function get_post_mime_type($ID = '') {;} }

if( !function_exists( 'get_post_format' ) ) { function get_post_format($post = '') {;} }

if( !function_exists( 'has_post_format' ) ) { function has_post_format($format, $post = '') {;} }

if( !function_exists( 'set_post_format' ) ) { function set_post_format($post, $format) {;} }

if( !function_exists( 'get_post_status' ) ) { function get_post_status($ID = '') {;} }

if( !function_exists( 'get_post_statuses' ) ) { function get_post_statuses() {;} }

if( !function_exists( 'get_page_statuses' ) ) { function get_page_statuses() {;} }

if( !function_exists( 'register_post_status' ) ) { function register_post_status($post_status, $args = '') {;} }

if( !function_exists( 'get_post_status_object' ) ) { function get_post_status_object($post_status) {;} }

if( !function_exists( 'get_post_stati' ) ) { function get_post_stati($args = '', $output = '', $operator = '') {;} }

if( !function_exists( 'is_post_type_hierarchical' ) ) { function is_post_type_hierarchical($post_type) {;} }

if( !function_exists( 'post_type_exists' ) ) { function post_type_exists($post_type) {;} }

if( !function_exists( 'get_post_type' ) ) { function get_post_type($the_post = '') {;} }

if( !function_exists( 'get_post_type_object' ) ) { function get_post_type_object($post_type) {;} }

if( !function_exists( 'get_post_types' ) ) { function get_post_types($args = '', $output = '', $operator = '') {;} }

if( !function_exists( 'register_post_type' ) ) { function register_post_type($post_type, $args = '') {;} }

if( !function_exists( 'get_post_type_capabilities' ) ) { function get_post_type_capabilities($args) {;} }

if( !function_exists( '_post_type_meta_capabilities' ) ) { function _post_type_meta_capabilities($capabilities = '') {;} }

if( !function_exists( 'get_post_type_labels' ) ) { function get_post_type_labels($post_type_object) {;} }

if( !function_exists( '_get_custom_object_labels' ) ) { function _get_custom_object_labels($object, $nohier_vs_hier_defaults) {;} }

if( !function_exists( '_add_post_type_submenus' ) ) { function _add_post_type_submenus() {;} }

if( !function_exists( 'add_post_type_support' ) ) { function add_post_type_support($post_type, $feature) {;} }

if( !function_exists( 'remove_post_type_support' ) ) { function remove_post_type_support($post_type, $feature) {;} }

if( !function_exists( 'post_type_supports' ) ) { function post_type_supports($post_type, $feature) {;} }

if( !function_exists( 'set_post_type' ) ) { function set_post_type($post_id = '', $post_type = '') {;} }

if( !function_exists( 'get_posts' ) ) { function get_posts($args = '') {;} }

if( !function_exists( 'add_post_meta' ) ) { function add_post_meta($post_id, $meta_key, $meta_value, $unique = '') {;} }

if( !function_exists( 'delete_post_meta' ) ) { function delete_post_meta($post_id, $meta_key, $meta_value = '') {;} }

if( !function_exists( 'get_post_meta' ) ) { function get_post_meta($post_id, $key, $single = '') {;} }

if( !function_exists( 'update_post_meta' ) ) { function update_post_meta($post_id, $meta_key, $meta_value, $prev_value = '') {;} }

if( !function_exists( 'delete_post_meta_by_key' ) ) { function delete_post_meta_by_key($post_meta_key) {;} }

if( !function_exists( 'get_post_custom' ) ) { function get_post_custom($post_id = '') {;} }

if( !function_exists( 'get_post_custom_keys' ) ) { function get_post_custom_keys($post_id = '') {;} }

if( !function_exists( 'get_post_custom_values' ) ) { function get_post_custom_values($key = '', $post_id = '') {;} }

if( !function_exists( 'is_sticky' ) ) { function is_sticky($post_id = '') {;} }

if( !function_exists( 'sanitize_post' ) ) { function sanitize_post($post, $context = '') {;} }

if( !function_exists( 'sanitize_post_field' ) ) { function sanitize_post_field($field, $value, $post_id, $context) {;} }

if( !function_exists( 'stick_post' ) ) { function stick_post($post_id) {;} }

if( !function_exists( 'unstick_post' ) ) { function unstick_post($post_id) {;} }

if( !function_exists( 'wp_count_posts' ) ) { function wp_count_posts($type = '', $perm = '') {;} }

if( !function_exists( 'wp_count_attachments' ) ) { function wp_count_attachments($mime_type = '') {;} }

if( !function_exists( 'wp_match_mime_types' ) ) { function wp_match_mime_types($wildcard_mime_types, $real_mime_types) {;} }

if( !function_exists( 'wp_post_mime_type_where' ) ) { function wp_post_mime_type_where($post_mime_types, $table_alias = '') {;} }

if( !function_exists( 'wp_delete_post' ) ) { function wp_delete_post($postid = '', $force_delete = '') {;} }

if( !function_exists( 'wp_trash_post' ) ) { function wp_trash_post($post_id = '') {;} }

if( !function_exists( 'wp_untrash_post' ) ) { function wp_untrash_post($post_id = '') {;} }

if( !function_exists( 'wp_trash_post_comments' ) ) { function wp_trash_post_comments($post = '') {;} }

if( !function_exists( 'wp_untrash_post_comments' ) ) { function wp_untrash_post_comments($post = '') {;} }

if( !function_exists( 'wp_get_post_categories' ) ) { function wp_get_post_categories($post_id = '', $args = '') {;} }

if( !function_exists( 'wp_get_post_tags' ) ) { function wp_get_post_tags($post_id = '', $args = '') {;} }

if( !function_exists( 'wp_get_post_terms' ) ) { function wp_get_post_terms($post_id = '', $taxonomy = '', $args = '') {;} }

if( !function_exists( 'wp_get_recent_posts' ) ) { function wp_get_recent_posts($args = '', $output = '') {;} }

if( !function_exists( 'wp_get_single_post' ) ) { function wp_get_single_post($postid = '', $mode = '') {;} }

if( !function_exists( 'wp_insert_post' ) ) { function wp_insert_post($postarr, $wp_error = '') {;} }

if( !function_exists( 'wp_update_post' ) ) { function wp_update_post($postarr = '') {;} }

if( !function_exists( 'wp_publish_post' ) ) { function wp_publish_post($post_id) {;} }

if( !function_exists( 'check_and_publish_future_post' ) ) { function check_and_publish_future_post($post_id) {;} }

if( !function_exists( 'wp_unique_post_slug' ) ) { function wp_unique_post_slug($slug, $post_ID, $post_status, $post_type, $post_parent) {;} }

if( !function_exists( 'wp_add_post_tags' ) ) { function wp_add_post_tags($post_id = '', $tags = '') {;} }

if( !function_exists( 'wp_set_post_tags' ) ) { function wp_set_post_tags($post_id = '', $tags = '', $append = '') {;} }

if( !function_exists( 'wp_set_post_terms' ) ) { function wp_set_post_terms($post_id = '', $tags = '', $taxonomy = '', $append = '') {;} }

if( !function_exists( 'wp_set_post_categories' ) ) { function wp_set_post_categories($post_ID = '', $post_categories = '') {;} }

if( !function_exists( 'wp_transition_post_status' ) ) { function wp_transition_post_status($new_status, $old_status, $post) {;} }

if( !function_exists( 'add_ping' ) ) { function add_ping($post_id, $uri) {;} }

if( !function_exists( 'get_enclosed' ) ) { function get_enclosed($post_id) {;} }

if( !function_exists( 'get_pung' ) ) { function get_pung($post_id) {;} }

if( !function_exists( 'get_to_ping' ) ) { function get_to_ping($post_id) {;} }

if( !function_exists( 'trackback_url_list' ) ) { function trackback_url_list($tb_list, $post_id) {;} }

if( !function_exists( 'get_all_page_ids' ) ) { function get_all_page_ids() {;} }

if( !function_exists( 'get_page' ) ) { function get_page($page, $output = '', $filter = '') {;} }

if( !function_exists( 'get_page_by_path' ) ) { function get_page_by_path($page_path, $output = '', $post_type = '') {;} }

if( !function_exists( 'get_page_by_title' ) ) { function get_page_by_title($page_title, $output = '', $post_type = '') {;} }

if( !function_exists( 'get_page_children' ) ) { function get_page_children($page_id, $pages) {;} }

if( !function_exists( 'get_page_hierarchy' ) ) { function get_page_hierarchy($pages, $page_id = '') {;} }

if( !function_exists( '_page_traverse_name' ) ) { function _page_traverse_name($page_id, $children, $result) {;} }

if( !function_exists( 'get_page_uri' ) ) { function get_page_uri($page) {;} }

if( !function_exists( 'get_pages' ) ) { function get_pages($args = '') {;} }

if( !function_exists( 'is_local_attachment' ) ) { function is_local_attachment($url) {;} }

if( !function_exists( 'wp_insert_attachment' ) ) { function wp_insert_attachment($object, $file = '', $parent = '') {;} }

if( !function_exists( 'wp_delete_attachment' ) ) { function wp_delete_attachment($post_id, $force_delete = '') {;} }

if( !function_exists( 'wp_get_attachment_metadata' ) ) { function wp_get_attachment_metadata($post_id = '', $unfiltered = '') {;} }

if( !function_exists( 'wp_update_attachment_metadata' ) ) { function wp_update_attachment_metadata($post_id, $data) {;} }

if( !function_exists( 'wp_get_attachment_url' ) ) { function wp_get_attachment_url($post_id = '') {;} }

if( !function_exists( 'wp_get_attachment_thumb_file' ) ) { function wp_get_attachment_thumb_file($post_id = '') {;} }

if( !function_exists( 'wp_get_attachment_thumb_url' ) ) { function wp_get_attachment_thumb_url($post_id = '') {;} }

if( !function_exists( 'wp_attachment_is_image' ) ) { function wp_attachment_is_image($post_id = '') {;} }

if( !function_exists( 'wp_mime_type_icon' ) ) { function wp_mime_type_icon($mime = '') {;} }

if( !function_exists( 'wp_check_for_changed_slugs' ) ) { function wp_check_for_changed_slugs($post_id, $post, $post_before) {;} }

if( !function_exists( 'get_private_posts_cap_sql' ) ) { function get_private_posts_cap_sql($post_type) {;} }

if( !function_exists( 'get_posts_by_author_sql' ) ) { function get_posts_by_author_sql($post_type, $full = '', $post_author = '') {;} }

if( !function_exists( 'get_lastpostdate' ) ) { function get_lastpostdate($timezone = '') {;} }

if( !function_exists( 'get_lastpostmodified' ) ) { function get_lastpostmodified($timezone = '') {;} }

if( !function_exists( '_get_last_post_time' ) ) { function _get_last_post_time($timezone, $field) {;} }

if( !function_exists( 'update_post_cache' ) ) { function update_post_cache($posts) {;} }

if( !function_exists( 'clean_post_cache' ) ) { function clean_post_cache($id) {;} }

if( !function_exists( 'update_page_cache' ) ) { function update_page_cache($pages) {;} }

if( !function_exists( 'clean_page_cache' ) ) { function clean_page_cache($id) {;} }

if( !function_exists( 'update_post_caches' ) ) { function update_post_caches($posts, $post_type = '', $update_term_cache = '', $update_meta_cache = '') {;} }

if( !function_exists( 'update_postmeta_cache' ) ) { function update_postmeta_cache($post_ids) {;} }

if( !function_exists( 'clean_attachment_cache' ) ) { function clean_attachment_cache($id, $clean_terms = '') {;} }

if( !function_exists( '_transition_post_status' ) ) { function _transition_post_status($new_status, $old_status, $post) {;} }

if( !function_exists( '_future_post_hook' ) ) { function _future_post_hook($deprecated = '', $post) {;} }

if( !function_exists( '_publish_post_hook' ) ) { function _publish_post_hook($post_id) {;} }

if( !function_exists( '_save_post_hook' ) ) { function _save_post_hook($post_id, $post) {;} }

if( !function_exists( '_get_post_ancestors' ) ) { function _get_post_ancestors($_post) {;} }

if( !function_exists( '_wp_post_revision_fields' ) ) { function _wp_post_revision_fields($post = '', $autosave = '') {;} }

if( !function_exists( 'wp_save_post_revision' ) ) { function wp_save_post_revision($post_id) {;} }

if( !function_exists( 'wp_get_post_autosave' ) ) { function wp_get_post_autosave($post_id) {;} }

if( !function_exists( '_wp_get_post_autosave_hack' ) ) { function _wp_get_post_autosave_hack($query) {;} }

if( !function_exists( 'wp_is_post_revision' ) ) { function wp_is_post_revision($post) {;} }

if( !function_exists( 'wp_is_post_autosave' ) ) { function wp_is_post_autosave($post) {;} }

if( !function_exists( '_wp_put_post_revision' ) ) { function _wp_put_post_revision($post = '', $autosave = '') {;} }

if( !function_exists( 'wp_get_post_revision' ) ) { function wp_get_post_revision($post, $output = '', $filter = '') {;} }

if( !function_exists( 'wp_restore_post_revision' ) ) { function wp_restore_post_revision($revision_id, $fields = '') {;} }

if( !function_exists( 'wp_delete_post_revision' ) ) { function wp_delete_post_revision($revision_id) {;} }

if( !function_exists( 'wp_get_post_revisions' ) ) { function wp_get_post_revisions($post_id = '', $args = '') {;} }

if( !function_exists( '_set_preview' ) ) { function _set_preview($post) {;} }

if( !function_exists( '_show_post_preview' ) ) { function _show_post_preview() {;} }

if( !function_exists( 'wp_get_post_parent_id' ) ) { function wp_get_post_parent_id($post_ID) {;} }

if( !function_exists( 'wp_check_post_hierarchy_for_loops' ) ) { function wp_check_post_hierarchy_for_loops($post_parent, $post_ID) {;} }

if( !function_exists( 'get_post_format_strings' ) ) { function get_post_format_strings() {;} }

if( !function_exists( 'get_post_format_slugs' ) ) { function get_post_format_slugs() {;} }

if( !function_exists( 'get_post_format_string' ) ) { function get_post_format_string($slug) {;} }

if( !function_exists( 'set_post_thumbnail' ) ) { function set_post_thumbnail($post, $thumbnail_id) {;} }

if( !function_exists( 'get_post_format_link' ) ) { function get_post_format_link($format) {;} }

if( !function_exists( '_post_format_request' ) ) { function _post_format_request($qvs) {;} }

if( !function_exists( '_post_format_link' ) ) { function _post_format_link($link, $term, $taxonomy) {;} }

if( !function_exists( '_post_format_get_term' ) ) { function _post_format_get_term($term) {;} }

if( !function_exists( '_post_format_get_terms' ) ) { function _post_format_get_terms($terms, $taxonomies, $args) {;} }

if( !function_exists( '_post_format_wp_get_object_terms' ) ) { function _post_format_wp_get_object_terms($terms) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-feed.php */

if( !class_exists( 'WP_Feed_Cache' ) ) {
	class WP_Feed_Cache {

		public function create($location, $filename, $extension) {;}

	}
}

if( !class_exists( 'WP_Feed_Cache_Transient' ) ) {
	class WP_Feed_Cache_Transient {
		public $name;
		public $mod_name;
		public $lifetime = '';

		public function __construct($location, $filename, $extension) {;}
		public function save($data) {;}
		public function load() {;}
		public function mtime() {;}
		public function touch() {;}
		public function unlink() {;}

	}
}

if( !class_exists( 'WP_SimplePie_File' ) ) {
	class WP_SimplePie_File {

		public function __construct($url, $timeout = '', $redirects = '', $headers = '', $useragent = '', $force_fsockopen = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/nav-menu-template.php */

if( !function_exists( 'wp_nav_menu' ) ) { function wp_nav_menu($args = '') {;} }

if( !function_exists( '_wp_menu_item_classes_by_context' ) ) { function _wp_menu_item_classes_by_context($menu_items) {;} }

if( !function_exists( 'walk_nav_menu_tree' ) ) { function walk_nav_menu_tree($items, $depth, $r) {;} }

if( !function_exists( '_nav_menu_item_id_use_once' ) ) { function _nav_menu_item_id_use_once($id, $item) {;} }

if( !class_exists( 'Walker_Nav_Menu' ) ) {
	class Walker_Nav_Menu {
		public $tree_type = '';
		public $db_fields = '';

		public function start_lvl($output, $depth) {;}
		public function end_lvl($output, $depth) {;}
		public function start_el($output, $item, $depth, $args) {;}
		public function end_el($output, $item, $depth) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/vars.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/query.php */

if( !function_exists( 'get_query_var' ) ) { function get_query_var($var) {;} }

if( !function_exists( 'get_queried_object' ) ) { function get_queried_object() {;} }

if( !function_exists( 'get_queried_object_id' ) ) { function get_queried_object_id() {;} }

if( !function_exists( 'set_query_var' ) ) { function set_query_var($var, $value) {;} }

if( !function_exists( 'query_posts' ) ) { function query_posts($query) {;} }

if( !function_exists( 'wp_reset_query' ) ) { function wp_reset_query() {;} }

if( !function_exists( 'wp_reset_postdata' ) ) { function wp_reset_postdata() {;} }

if( !function_exists( 'is_archive' ) ) { function is_archive() {;} }

if( !function_exists( 'is_post_type_archive' ) ) { function is_post_type_archive($post_types = '') {;} }

if( !function_exists( 'is_attachment' ) ) { function is_attachment() {;} }

if( !function_exists( 'is_author' ) ) { function is_author($author = '') {;} }

if( !function_exists( 'is_category' ) ) { function is_category($category = '') {;} }

if( !function_exists( 'is_tag' ) ) { function is_tag($slug = '') {;} }

if( !function_exists( 'is_tax' ) ) { function is_tax($taxonomy = '', $term = '') {;} }

if( !function_exists( 'is_comments_popup' ) ) { function is_comments_popup() {;} }

if( !function_exists( 'is_date' ) ) { function is_date() {;} }

if( !function_exists( 'is_day' ) ) { function is_day() {;} }

if( !function_exists( 'is_feed' ) ) { function is_feed($feeds = '') {;} }

if( !function_exists( 'is_comment_feed' ) ) { function is_comment_feed() {;} }

if( !function_exists( 'is_front_page' ) ) { function is_front_page() {;} }

if( !function_exists( 'is_home' ) ) { function is_home() {;} }

if( !function_exists( 'is_month' ) ) { function is_month() {;} }

if( !function_exists( 'is_page' ) ) { function is_page($page = '') {;} }

if( !function_exists( 'is_paged' ) ) { function is_paged() {;} }

if( !function_exists( 'is_preview' ) ) { function is_preview() {;} }

if( !function_exists( 'is_robots' ) ) { function is_robots() {;} }

if( !function_exists( 'is_search' ) ) { function is_search() {;} }

if( !function_exists( 'is_single' ) ) { function is_single($post = '') {;} }

if( !function_exists( 'is_singular' ) ) { function is_singular($post_types = '') {;} }

if( !function_exists( 'is_time' ) ) { function is_time() {;} }

if( !function_exists( 'is_trackback' ) ) { function is_trackback() {;} }

if( !function_exists( 'is_year' ) ) { function is_year() {;} }

if( !function_exists( 'is_404' ) ) { function is_404() {;} }

if( !function_exists( 'have_posts' ) ) { function have_posts() {;} }

if( !function_exists( 'in_the_loop' ) ) { function in_the_loop() {;} }

if( !function_exists( 'rewind_posts' ) ) { function rewind_posts() {;} }

if( !function_exists( 'the_post' ) ) { function the_post() {;} }

if( !function_exists( 'have_comments' ) ) { function have_comments() {;} }

if( !function_exists( 'the_comment' ) ) { function the_comment() {;} }

if( !function_exists( 'wp_old_slug_redirect' ) ) { function wp_old_slug_redirect() {;} }

if( !function_exists( 'setup_postdata' ) ) { function setup_postdata($post) {;} }

if( !class_exists( 'WP_Query' ) ) {
	class WP_Query {
		public $query;
		public $query_vars = '';
		public $tax_query;
		public $meta_query = '';
		public $queried_object;
		public $queried_object_id;
		public $request;
		public $posts;
		public $post_count = '';
		public $current_post = '';
		public $in_the_loop = '';
		public $post;
		public $comments;
		public $comment_count = '';
		public $current_comment = '';
		public $comment;
		public $found_posts = '';
		public $max_num_pages = '';
		public $max_num_comment_pages = '';
		public $is_single = '';
		public $is_preview = '';
		public $is_page = '';
		public $is_archive = '';
		public $is_date = '';
		public $is_year = '';
		public $is_month = '';
		public $is_day = '';
		public $is_time = '';
		public $is_author = '';
		public $is_category = '';
		public $is_tag = '';
		public $is_tax = '';
		public $is_search = '';
		public $is_feed = '';
		public $is_comment_feed = '';
		public $is_trackback = '';
		public $is_home = '';
		public $is_404 = '';
		public $is_comments_popup = '';
		public $is_paged = '';
		public $is_admin = '';
		public $is_attachment = '';
		public $is_singular = '';
		public $is_robots = '';
		public $is_posts_page = '';
		public $is_post_type_archive = '';
		public $query_vars_hash = '';
		public $query_vars_changed = '';
		public $thumbnails_cached = '';

		public function init_query_flags() {;}
		public function init() {;}
		public function parse_query_vars() {;}
		public function fill_query_vars($array) {;}
		public function parse_query($query = '') {;}
		public function parse_tax_query($q) {;}
		public function set_404() {;}
		public function get($query_var) {;}
		public function set($query_var, $value) {;}
		public function get_posts() {;}
		public function next_post() {;}
		public function the_post() {;}
		public function have_posts() {;}
		public function rewind_posts() {;}
		public function next_comment() {;}
		public function the_comment() {;}
		public function have_comments() {;}
		public function rewind_comments() {;}
		public function query($query) {;}
		public function get_queried_object() {;}
		public function get_queried_object_id() {;}
		public function __construct($query = '') {;}
		public function is_archive() {;}
		public function is_post_type_archive($post_types = '') {;}
		public function is_attachment() {;}
		public function is_author($author = '') {;}
		public function is_category($category = '') {;}
		public function is_tag($slug = '') {;}
		public function is_tax($taxonomy = '', $term = '') {;}
		public function is_comments_popup() {;}
		public function is_date() {;}
		public function is_day() {;}
		public function is_feed($feeds = '') {;}
		public function is_comment_feed() {;}
		public function is_front_page() {;}
		public function is_home() {;}
		public function is_month() {;}
		public function is_page($page = '') {;}
		public function is_paged() {;}
		public function is_preview() {;}
		public function is_robots() {;}
		public function is_search() {;}
		public function is_single($post = '') {;}
		public function is_singular($post_types = '') {;}
		public function is_time() {;}
		public function is_trackback() {;}
		public function is_year() {;}
		public function is_404() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/pomo/entry.php */

if( !class_exists( 'Translation_Entry' ) ) {
	class Translation_Entry {
		public $is_plural = '';
		public $context = '';
		public $singular = '';
		public $plural = '';
		public $translations = '';
		public $translator_comments = '';
		public $extracted_comments = '';
		public $references = '';
		public $flags = '';

		public function Translation_Entry($args = '') {;}
		public function key() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/pomo/streams.php */

if( !class_exists( 'POMO_Reader' ) ) {
	class POMO_Reader {
		public $endian = '';
		public $_post = '';

		public function POMO_Reader() {;}
		public function setEndian($endian) {;}
		public function readint32() {;}
		public function readint32array($count) {;}
		public function substr($string, $start, $length) {;}
		public function strlen($string) {;}
		public function str_split($string, $chunk_size) {;}
		public function pos() {;}
		public function is_resource() {;}
		public function close() {;}

	}
}

if( !class_exists( 'POMO_FileReader' ) ) {
	class POMO_FileReader {

		public function POMO_FileReader($filename) {;}
		public function read($bytes) {;}
		public function seekto($pos) {;}
		public function is_resource() {;}
		public function feof() {;}
		public function close() {;}
		public function read_all() {;}

	}
}

if( !class_exists( 'POMO_StringReader' ) ) {
	class POMO_StringReader {
		public $_str = '';

		public function POMO_StringReader($str = '') {;}
		public function read($bytes) {;}
		public function seekto($pos) {;}
		public function length() {;}
		public function read_all() {;}

	}
}

if( !class_exists( 'POMO_CachedFileReader' ) ) {
	class POMO_CachedFileReader {

		public function POMO_CachedFileReader($filename) {;}

	}
}

if( !class_exists( 'POMO_CachedIntFileReader' ) ) {
	class POMO_CachedIntFileReader {

		public function POMO_CachedIntFileReader($filename) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/pomo/mo.php */

if( !class_exists( 'MO' ) ) {
	class MO {
		public $_nplurals = '';

		public function import_from_file($filename) {;}
		public function export_to_file($filename) {;}
		public function export_original($entry) {;}
		public function export_translations($entry) {;}
		public function export_headers() {;}
		public function get_byteorder($magic) {;}
		public function import_from_reader($reader) {;}
		public function make_entry($original, $translation) {;}
		public function select_plural_form($count) {;}
		public function get_plural_forms_count() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/pomo/po.php */

if( !function_exists( 'unpoify' ) ) { function unpoify($string) {;} }

if( !function_exists( 'prepend_each_line' ) ) { function prepend_each_line($string, $with) {;} }

if( !function_exists( 'comment_block' ) ) { function comment_block($text, $char = '') {;} }

if( !function_exists( 'export_entry' ) ) { function export_entry($entry) {;} }

if( !function_exists( 'import_from_file' ) ) { function import_from_file($filename) {;} }

if( !function_exists( 'read_entry' ) ) { function read_entry($f, $lineno = '') {;} }

if( !function_exists( 'read_line' ) ) { function read_line($f, $action = '') {;} }

if( !function_exists( 'add_comment_to_entry' ) ) { function add_comment_to_entry($entry, $po_comment_line) {;} }

if( !function_exists( 'trim_quotes' ) ) { function trim_quotes($s) {;} }

if( !class_exists( 'PO' ) ) {
	class PO {
		public $quote;
		public $string = '';

		public function export_headers() {;}
		public function export_entries() {;}
		public function export($include_headers = '') {;}
		public function export_to_file($filename, $include_headers = '') {;}
		public function poify($string) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/pomo/translations.php */

if( !class_exists( 'Translations' ) ) {
	class Translations {
		public $entries = '';
		public $headers = '';

		public function add_entry($entry) {;}
		public function set_header($header, $value) {;}
		public function set_headers($headers) {;}
		public function get_header($header) {;}
		public function translate_entry($entry) {;}
		public function translate($singular, $context = '') {;}
		public function select_plural_form($count) {;}
		public function get_plural_forms_count() {;}
		public function translate_plural($singular, $plural, $count, $context = '') {;}
		public function merge_with($other) {;}

	}
}

if( !class_exists( 'Gettext_Translations' ) ) {
	class Gettext_Translations {

		public function gettext_select_plural_form($count) {;}
		public function nplurals_and_expression_from_header($header) {;}
		public function make_plural_form_function($nplurals, $expression) {;}
		public function parenthesize_plural_exression($expression) {;}
		public function make_headers($translation) {;}
		public function set_header($header, $value) {;}

	}
}

if( !class_exists( 'NOOP_Translations' ) ) {
	class NOOP_Translations {
		public $entries = '';
		public $headers = '';

		public function add_entry($entry) {;}
		public function set_header($header, $value) {;}
		public function set_headers($headers) {;}
		public function get_header($header) {;}
		public function translate_entry($entry) {;}
		public function translate($singular, $context = '') {;}
		public function select_plural_form($count) {;}
		public function get_plural_forms_count() {;}
		public function translate_plural($singular, $plural, $count, $context = '') {;}
		public function merge_with($other) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/feed-rss2.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/user.php */

if( !function_exists( 'wp_signon' ) ) { function wp_signon($credentials = '', $secure_cookie = '') {;} }

if( !function_exists( 'wp_authenticate_username_password' ) ) { function wp_authenticate_username_password($user, $username, $password) {;} }

if( !function_exists( 'wp_authenticate_cookie' ) ) { function wp_authenticate_cookie($user, $username, $password) {;} }

if( !function_exists( 'count_user_posts' ) ) { function count_user_posts($userid) {;} }

if( !function_exists( 'count_many_users_posts' ) ) { function count_many_users_posts($users, $post_type = '') {;} }

if( !function_exists( 'user_pass_ok' ) ) { function user_pass_ok($user_login, $user_pass) {;} }

if( !function_exists( 'get_current_user_id' ) ) { function get_current_user_id() {;} }

if( !function_exists( 'get_user_option' ) ) { function get_user_option($option, $user = '', $deprecated = '') {;} }

if( !function_exists( 'update_user_option' ) ) { function update_user_option($user_id, $option_name, $newvalue, $global = '') {;} }

if( !function_exists( 'delete_user_option' ) ) { function delete_user_option($user_id, $option_name, $global = '') {;} }

if( !function_exists( 'get_users' ) ) { function get_users($args = '') {;} }

if( !function_exists( 'get_blogs_of_user' ) ) { function get_blogs_of_user($id, $all = '') {;} }

if( !function_exists( 'is_blog_user' ) ) { function is_blog_user($blog_id = '') {;} }

if( !function_exists( 'add_user_meta' ) ) { function add_user_meta($user_id, $meta_key, $meta_value, $unique = '') {;} }

if( !function_exists( 'delete_user_meta' ) ) { function delete_user_meta($user_id, $meta_key, $meta_value = '') {;} }

if( !function_exists( 'get_user_meta' ) ) { function get_user_meta($user_id, $key, $single = '') {;} }

if( !function_exists( 'update_user_meta' ) ) { function update_user_meta($user_id, $meta_key, $meta_value, $prev_value = '') {;} }

if( !function_exists( 'count_users' ) ) { function count_users($strategy = '') {;} }

if( !function_exists( 'setup_userdata' ) ) { function setup_userdata($for_user_id = '') {;} }

if( !function_exists( 'wp_dropdown_users' ) ) { function wp_dropdown_users($args = '') {;} }

if( !function_exists( '_fill_user' ) ) { function _fill_user($user) {;} }

if( !function_exists( 'get_user_metavalues' ) ) { function get_user_metavalues($ids) {;} }

if( !function_exists( '_fill_single_user' ) ) { function _fill_single_user($user, $metavalues) {;} }

if( !function_exists( '_fill_many_users' ) ) { function _fill_many_users($users) {;} }

if( !function_exists( 'sanitize_user_object' ) ) { function sanitize_user_object($user, $context = '') {;} }

if( !function_exists( 'sanitize_user_field' ) ) { function sanitize_user_field($field, $value, $user_id, $context) {;} }

if( !function_exists( 'update_user_caches' ) ) { function update_user_caches($user) {;} }

if( !function_exists( 'clean_user_cache' ) ) { function clean_user_cache($id) {;} }

if( !function_exists( 'username_exists' ) ) { function username_exists($username) {;} }

if( !function_exists( 'email_exists' ) ) { function email_exists($email) {;} }

if( !function_exists( 'validate_username' ) ) { function validate_username($username) {;} }

if( !function_exists( 'wp_insert_user' ) ) { function wp_insert_user($userdata) {;} }

if( !function_exists( 'wp_update_user' ) ) { function wp_update_user($userdata) {;} }

if( !function_exists( 'wp_create_user' ) ) { function wp_create_user($username, $password, $email = '') {;} }

if( !function_exists( '_wp_get_user_contactmethods' ) ) { function _wp_get_user_contactmethods($user = '') {;} }

if( !class_exists( 'WP_User_Query' ) ) {
	class WP_User_Query {
		public $results;
		public $total_users = '';
		public $query_fields;
		public $query_from;
		public $query_where;
		public $query_orderby;
		public $query_limit;

		public function __construct($query = '') {;}
		public function prepare_query() {;}
		public function query() {;}
		public function get_search_sql($string, $cols, $wild = '') {;}
		public function get_results() {;}
		public function get_total() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/feed-atom.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-wp.php */

if( !class_exists( 'WP' ) ) {
	class WP {
		public $public_query_vars = '';
		public $private_query_vars = '';
		public $extra_query_vars = '';
		public $query_vars;
		public $query_string;
		public $request;
		public $matched_rule;
		public $matched_query;
		public $did_permalink = '';

		public function add_query_var($qv) {;}
		public function set_query_var($key, $value) {;}
		public function parse_request($extra_query_vars = '') {;}
		public function send_headers() {;}
		public function build_query_string() {;}
		public function register_globals() {;}
		public function init() {;}
		public function query_posts() {;}
		public function handle_404() {;}
		public function main($query_args = '') {;}

	}
}

if( !class_exists( 'WP_MatchesMapRegex' ) ) {
	class WP_MatchesMapRegex {
		public $_matches;
		public $output;
		public $_subject;
		public $_pattern = '';

		public function WP_MatchesMapRegex($subject, $matches) {;}
		public function apply($subject, $matches) {;}
		public function _map() {;}
		public function callback($matches) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-wp-walker.php */

if( !class_exists( 'Walker' ) ) {
	class Walker {
		public $tree_type;
		public $db_fields;
		public $max_pages = '';

		public function start_lvl($output) {;}
		public function end_lvl($output) {;}
		public function start_el($output) {;}
		public function end_el($output) {;}
		public function display_element($element, $children_elements, $max_depth, $depth = '', $args, $output) {;}
		public function walk($elements, $max_depth) {;}
		public function paged_walk($elements, $max_depth, $page_num, $per_page) {;}
		public function get_number_of_root_elements($elements) {;}
		public function unset_children($e, $children_elements) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/theme.php */

if( !function_exists( 'is_child_theme' ) ) { function is_child_theme() {;} }

if( !function_exists( 'get_stylesheet' ) ) { function get_stylesheet() {;} }

if( !function_exists( 'get_stylesheet_directory' ) ) { function get_stylesheet_directory() {;} }

if( !function_exists( 'get_stylesheet_directory_uri' ) ) { function get_stylesheet_directory_uri() {;} }

if( !function_exists( 'get_stylesheet_uri' ) ) { function get_stylesheet_uri() {;} }

if( !function_exists( 'get_locale_stylesheet_uri' ) ) { function get_locale_stylesheet_uri() {;} }

if( !function_exists( 'get_template' ) ) { function get_template() {;} }

if( !function_exists( 'get_template_directory' ) ) { function get_template_directory() {;} }

if( !function_exists( 'get_template_directory_uri' ) ) { function get_template_directory_uri() {;} }

if( !function_exists( 'get_theme_data' ) ) { function get_theme_data($theme_file) {;} }

if( !function_exists( 'get_themes' ) ) { function get_themes() {;} }

if( !function_exists( 'get_theme_roots' ) ) { function get_theme_roots() {;} }

if( !function_exists( 'get_theme' ) ) { function get_theme($theme) {;} }

if( !function_exists( 'get_current_theme' ) ) { function get_current_theme() {;} }

if( !function_exists( 'register_theme_directory' ) ) { function register_theme_directory($directory) {;} }

if( !function_exists( 'search_theme_directories' ) ) { function search_theme_directories() {;} }

if( !function_exists( 'get_theme_root' ) ) { function get_theme_root($stylesheet_or_template = '') {;} }

if( !function_exists( 'get_theme_root_uri' ) ) { function get_theme_root_uri($stylesheet_or_template = '') {;} }

if( !function_exists( 'get_raw_theme_root' ) ) { function get_raw_theme_root($stylesheet_or_template, $no_cache = '') {;} }

if( !function_exists( 'get_query_template' ) ) { function get_query_template($type, $templates = '') {;} }

if( !function_exists( 'get_index_template' ) ) { function get_index_template() {;} }

if( !function_exists( 'get_404_template' ) ) { function get_404_template() {;} }

if( !function_exists( 'get_archive_template' ) ) { function get_archive_template() {;} }

if( !function_exists( 'get_author_template' ) ) { function get_author_template() {;} }

if( !function_exists( 'get_category_template' ) ) { function get_category_template() {;} }

if( !function_exists( 'get_tag_template' ) ) { function get_tag_template() {;} }

if( !function_exists( 'get_taxonomy_template' ) ) { function get_taxonomy_template() {;} }

if( !function_exists( 'get_date_template' ) ) { function get_date_template() {;} }

if( !function_exists( 'get_home_template' ) ) { function get_home_template() {;} }

if( !function_exists( 'get_front_page_template' ) ) { function get_front_page_template() {;} }

if( !function_exists( 'get_page_template' ) ) { function get_page_template() {;} }

if( !function_exists( 'get_paged_template' ) ) { function get_paged_template() {;} }

if( !function_exists( 'get_search_template' ) ) { function get_search_template() {;} }

if( !function_exists( 'get_single_template' ) ) { function get_single_template() {;} }

if( !function_exists( 'get_attachment_template' ) ) { function get_attachment_template() {;} }

if( !function_exists( 'get_comments_popup_template' ) ) { function get_comments_popup_template() {;} }

if( !function_exists( 'locate_template' ) ) { function locate_template($template_names, $load = '', $require_once = '') {;} }

if( !function_exists( 'load_template' ) ) { function load_template($_template_file, $require_once = '') {;} }

if( !function_exists( 'locale_stylesheet' ) ) { function locale_stylesheet() {;} }

if( !function_exists( 'preview_theme' ) ) { function preview_theme() {;} }

if( !function_exists( '_preview_theme_template_filter' ) ) { function _preview_theme_template_filter() {;} }

if( !function_exists( '_preview_theme_stylesheet_filter' ) ) { function _preview_theme_stylesheet_filter() {;} }

if( !function_exists( 'preview_theme_ob_filter' ) ) { function preview_theme_ob_filter($content) {;} }

if( !function_exists( 'preview_theme_ob_filter_callback' ) ) { function preview_theme_ob_filter_callback($matches) {;} }

if( !function_exists( 'switch_theme' ) ) { function switch_theme($template, $stylesheet) {;} }

if( !function_exists( 'validate_current_theme' ) ) { function validate_current_theme() {;} }

if( !function_exists( 'get_theme_mods' ) ) { function get_theme_mods() {;} }

if( !function_exists( 'get_theme_mod' ) ) { function get_theme_mod($name, $default = '') {;} }

if( !function_exists( 'set_theme_mod' ) ) { function set_theme_mod($name, $value) {;} }

if( !function_exists( 'remove_theme_mod' ) ) { function remove_theme_mod($name) {;} }

if( !function_exists( 'remove_theme_mods' ) ) { function remove_theme_mods() {;} }

if( !function_exists( 'get_header_textcolor' ) ) { function get_header_textcolor() {;} }

if( !function_exists( 'header_textcolor' ) ) { function header_textcolor() {;} }

if( !function_exists( 'get_header_image' ) ) { function get_header_image() {;} }

if( !function_exists( 'get_random_header_image' ) ) { function get_random_header_image() {;} }

if( !function_exists( 'is_random_header_image' ) ) { function is_random_header_image($type = '') {;} }

if( !function_exists( 'header_image' ) ) { function header_image() {;} }

if( !function_exists( 'get_uploaded_header_images' ) ) { function get_uploaded_header_images() {;} }

if( !function_exists( 'add_custom_image_header' ) ) { function add_custom_image_header($header_callback, $admin_header_callback, $admin_image_div_callback = '') {;} }

if( !function_exists( 'remove_custom_image_header' ) ) { function remove_custom_image_header() {;} }

if( !function_exists( 'register_default_headers' ) ) { function register_default_headers($headers) {;} }

if( !function_exists( 'unregister_default_headers' ) ) { function unregister_default_headers($header) {;} }

if( !function_exists( 'get_background_image' ) ) { function get_background_image() {;} }

if( !function_exists( 'background_image' ) ) { function background_image() {;} }

if( !function_exists( 'get_background_color' ) ) { function get_background_color() {;} }

if( !function_exists( 'background_color' ) ) { function background_color() {;} }

if( !function_exists( 'add_custom_background' ) ) { function add_custom_background($header_callback = '', $admin_header_callback = '', $admin_image_div_callback = '') {;} }

if( !function_exists( 'remove_custom_background' ) ) { function remove_custom_background() {;} }

if( !function_exists( '_custom_background_cb' ) ) { function _custom_background_cb() {;} }

if( !function_exists( 'add_editor_style' ) ) { function add_editor_style($stylesheet = '') {;} }

if( !function_exists( 'remove_editor_styles' ) ) { function remove_editor_styles() {;} }

if( !function_exists( 'add_theme_support' ) ) { function add_theme_support($feature) {;} }

if( !function_exists( 'get_theme_support' ) ) { function get_theme_support($feature) {;} }

if( !function_exists( 'remove_theme_support' ) ) { function remove_theme_support($feature) {;} }

if( !function_exists( '_remove_theme_support' ) ) { function _remove_theme_support($feature) {;} }

if( !function_exists( 'current_theme_supports' ) ) { function current_theme_supports($feature) {;} }

if( !function_exists( 'require_if_theme_supports' ) ) { function require_if_theme_supports($feature, $include) {;} }

if( !function_exists( '_delete_attachment_theme_mod' ) ) { function _delete_attachment_theme_mod($id) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/registration.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-IXR.php */

if( !class_exists( 'IXR_Value' ) ) {
	class IXR_Value {
		public $data;
		public $type;

		public function IXR_Value($data, $type = '') {;}
		public function calculateType() {;}
		public function getXml() {;}
		public function isStruct($array) {;}

	}
}

if( !class_exists( 'IXR_Message' ) ) {
	class IXR_Message {
		public $message;
		public $messageType;
		public $faultCode;
		public $faultString;
		public $methodName;
		public $params;
		public $_arraystructs = '';
		public $_arraystructstypes = '';
		public $_currentStructName = '';
		public $_param;
		public $_value;
		public $_currentTag;
		public $_currentTagContents;
		public $_parser;

		public function IXR_Message($message) {;}
		public function parse() {;}
		public function tag_open($parser, $tag, $attr) {;}
		public function cdata($parser, $cdata) {;}
		public function tag_close($parser, $tag) {;}

	}
}

if( !class_exists( 'IXR_Server' ) ) {
	class IXR_Server {
		public $data;
		public $callbacks = '';
		public $message;
		public $capabilities;

		public function IXR_Server($callbacks = '', $data = '', $wait = '') {;}
		public function serve($data = '') {;}
		public function call($methodname, $args) {;}
		public function error($error, $message = '') {;}
		public function output($xml) {;}
		public function hasMethod($method) {;}
		public function setCapabilities() {;}
		public function getCapabilities($args) {;}
		public function setCallbacks() {;}
		public function listMethods($args) {;}
		public function multiCall($methodcalls) {;}

	}
}

if( !class_exists( 'IXR_Request' ) ) {
	class IXR_Request {
		public $method;
		public $args;
		public $xml;

		public function IXR_Request($method, $args) {;}
		public function getLength() {;}
		public function getXml() {;}

	}
}

if( !class_exists( 'IXR_Client' ) ) {
	class IXR_Client {
		public $server;
		public $port;
		public $path;
		public $useragent;
		public $response;
		public $message = '';
		public $debug = '';
		public $timeout;
		public $headers = '';
		public $error = '';

		public function IXR_Client($server, $path = '', $port = '', $timeout = '') {;}
		public function query() {;}
		public function getResponse() {;}
		public function isError() {;}
		public function getErrorCode() {;}
		public function getErrorMessage() {;}

	}
}

if( !class_exists( 'IXR_Error' ) ) {
	class IXR_Error {
		public $code;
		public $message;

		public function IXR_Error($code, $message) {;}
		public function getXml() {;}

	}
}

if( !class_exists( 'IXR_Date' ) ) {
	class IXR_Date {
		public $year;
		public $month;
		public $day;
		public $hour;
		public $minute;
		public $second;
		public $timezone;

		public function IXR_Date($time) {;}
		public function parseTimestamp($timestamp) {;}
		public function parseIso($iso) {;}
		public function getIso() {;}
		public function getXml() {;}
		public function getTimestamp() {;}

	}
}

if( !class_exists( 'IXR_Base64' ) ) {
	class IXR_Base64 {
		public $data;

		public function IXR_Base64($data) {;}
		public function getXml() {;}

	}
}

if( !class_exists( 'IXR_IntrospectionServer' ) ) {
	class IXR_IntrospectionServer {
		public $signatures;
		public $help;

		public function IXR_IntrospectionServer() {;}
		public function addCallback($method, $callback, $args, $help) {;}
		public function call($methodname, $args) {;}
		public function methodSignature($method) {;}
		public function methodHelp($method) {;}

	}
}

if( !class_exists( 'IXR_ClientMulticall' ) ) {
	class IXR_ClientMulticall {
		public $calls = '';

		public function IXR_ClientMulticall($server, $path = '', $port = '') {;}
		public function addCall() {;}
		public function query() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/nav-menu.php */

if( !function_exists( 'wp_get_nav_menu_object' ) ) { function wp_get_nav_menu_object($menu) {;} }

if( !function_exists( 'is_nav_menu' ) ) { function is_nav_menu($menu) {;} }

if( !function_exists( 'register_nav_menus' ) ) { function register_nav_menus($locations = '') {;} }

if( !function_exists( 'unregister_nav_menu' ) ) { function unregister_nav_menu($location) {;} }

if( !function_exists( 'register_nav_menu' ) ) { function register_nav_menu($location, $description) {;} }

if( !function_exists( 'get_registered_nav_menus' ) ) { function get_registered_nav_menus() {;} }

if( !function_exists( 'get_nav_menu_locations' ) ) { function get_nav_menu_locations() {;} }

if( !function_exists( 'has_nav_menu' ) ) { function has_nav_menu($location) {;} }

if( !function_exists( 'is_nav_menu_item' ) ) { function is_nav_menu_item($menu_item_id = '') {;} }

if( !function_exists( 'wp_create_nav_menu' ) ) { function wp_create_nav_menu($menu_name) {;} }

if( !function_exists( 'wp_delete_nav_menu' ) ) { function wp_delete_nav_menu($menu) {;} }

if( !function_exists( 'wp_update_nav_menu_object' ) ) { function wp_update_nav_menu_object($menu_id = '', $menu_data = '') {;} }

if( !function_exists( 'wp_update_nav_menu_item' ) ) { function wp_update_nav_menu_item($menu_id = '', $menu_item_db_id = '', $menu_item_data = '') {;} }

if( !function_exists( 'wp_get_nav_menus' ) ) { function wp_get_nav_menus($args = '') {;} }

if( !function_exists( '_sort_nav_menu_items' ) ) { function _sort_nav_menu_items($a, $b) {;} }

if( !function_exists( '_is_valid_nav_menu_item' ) ) { function _is_valid_nav_menu_item($item) {;} }

if( !function_exists( 'wp_get_nav_menu_items' ) ) { function wp_get_nav_menu_items($menu, $args = '') {;} }

if( !function_exists( 'wp_setup_nav_menu_item' ) ) { function wp_setup_nav_menu_item($menu_item) {;} }

if( !function_exists( 'wp_get_associated_nav_menu_items' ) ) { function wp_get_associated_nav_menu_items($object_id = '', $object_type = '') {;} }

if( !function_exists( '_wp_delete_post_menu_item' ) ) { function _wp_delete_post_menu_item($object_id = '') {;} }

if( !function_exists( '_wp_delete_tax_menu_item' ) ) { function _wp_delete_tax_menu_item($object_id = '') {;} }

if( !function_exists( '_wp_auto_add_pages_to_menu' ) ) { function _wp_auto_add_pages_to_menu($new_status, $old_status, $post) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class.wp-styles.php */

if( !class_exists( 'WP_Styles' ) ) {
	class WP_Styles {
		public $base_url;
		public $content_url;
		public $default_version;
		public $text_direction = '';
		public $concat = '';
		public $concat_version = '';
		public $do_concat = '';
		public $print_html = '';
		public $default_dirs;

		public function __construct() {;}
		public function do_item($handle) {;}
		public function all_deps($handles, $recursion = '', $group = '') {;}
		public function _css_href($src, $ver, $handle) {;}
		public function in_default_dir($src) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/script-loader.php */

if( !function_exists( 'wp_default_scripts' ) ) { function wp_default_scripts($scripts) {;} }

if( !function_exists( 'wp_default_styles' ) ) { function wp_default_styles($styles) {;} }

if( !function_exists( 'wp_prototype_before_jquery' ) ) { function wp_prototype_before_jquery($js_array) {;} }

if( !function_exists( 'wp_just_in_time_script_localization' ) ) { function wp_just_in_time_script_localization() {;} }

if( !function_exists( 'wp_style_loader_src' ) ) { function wp_style_loader_src($src, $handle) {;} }

if( !function_exists( 'print_head_scripts' ) ) { function print_head_scripts() {;} }

if( !function_exists( 'print_footer_scripts' ) ) { function print_footer_scripts() {;} }

if( !function_exists( '_print_scripts' ) ) { function _print_scripts() {;} }

if( !function_exists( 'wp_print_head_scripts' ) ) { function wp_print_head_scripts() {;} }

if( !function_exists( 'wp_print_footer_scripts' ) ) { function wp_print_footer_scripts() {;} }

if( !function_exists( 'wp_enqueue_scripts' ) ) { function wp_enqueue_scripts() {;} }

if( !function_exists( 'print_admin_styles' ) ) { function print_admin_styles() {;} }

if( !function_exists( 'script_concat_settings' ) ) { function script_concat_settings() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/deprecated.php */

if( !function_exists( 'get_postdata' ) ) { function get_postdata($postid) {;} }

if( !function_exists( 'start_wp' ) ) { function start_wp() {;} }

if( !function_exists( 'the_category_ID' ) ) { function the_category_ID($echo = '') {;} }

if( !function_exists( 'the_category_head' ) ) { function the_category_head($before = '', $after = '') {;} }

if( !function_exists( 'previous_post' ) ) { function previous_post($format = '', $previous = '', $title = '', $in_same_cat = '', $limitprev = '', $excluded_categories = '') {;} }

if( !function_exists( 'next_post' ) ) { function next_post($format = '', $next = '', $title = '', $in_same_cat = '', $limitnext = '', $excluded_categories = '') {;} }

if( !function_exists( 'user_can_create_post' ) ) { function user_can_create_post($user_id, $blog_id = '', $category_id = '') {;} }

if( !function_exists( 'user_can_create_draft' ) ) { function user_can_create_draft($user_id, $blog_id = '', $category_id = '') {;} }

if( !function_exists( 'user_can_edit_post' ) ) { function user_can_edit_post($user_id, $post_id, $blog_id = '') {;} }

if( !function_exists( 'user_can_delete_post' ) ) { function user_can_delete_post($user_id, $post_id, $blog_id = '') {;} }

if( !function_exists( 'user_can_set_post_date' ) ) { function user_can_set_post_date($user_id, $blog_id = '', $category_id = '') {;} }

if( !function_exists( 'user_can_edit_post_date' ) ) { function user_can_edit_post_date($user_id, $post_id, $blog_id = '') {;} }

if( !function_exists( 'user_can_edit_post_comments' ) ) { function user_can_edit_post_comments($user_id, $post_id, $blog_id = '') {;} }

if( !function_exists( 'user_can_delete_post_comments' ) ) { function user_can_delete_post_comments($user_id, $post_id, $blog_id = '') {;} }

if( !function_exists( 'user_can_edit_user' ) ) { function user_can_edit_user($user_id, $other_user) {;} }

if( !function_exists( 'get_linksbyname' ) ) { function get_linksbyname($cat_name = '', $before = '', $after = '', $between = '', $show_images = '', $orderby = '', $show_description = '', $show_rating = '', $limit = '', $show_updated = '') {;} }

if( !function_exists( 'wp_get_linksbyname' ) ) { function wp_get_linksbyname($category, $args = '') {;} }

if( !function_exists( 'get_linkobjectsbyname' ) ) { function get_linkobjectsbyname($cat_name = '', $orderby = '', $limit = '') {;} }

if( !function_exists( 'get_linkobjects' ) ) { function get_linkobjects($category = '', $orderby = '', $limit = '') {;} }

if( !function_exists( 'get_linksbyname_withrating' ) ) { function get_linksbyname_withrating($cat_name = '', $before = '', $after = '', $between = '', $show_images = '', $orderby = '', $show_description = '', $limit = '', $show_updated = '') {;} }

if( !function_exists( 'get_links_withrating' ) ) { function get_links_withrating($category = '', $before = '', $after = '', $between = '', $show_images = '', $orderby = '', $show_description = '', $limit = '', $show_updated = '') {;} }

if( !function_exists( 'get_autotoggle' ) ) { function get_autotoggle($id = '') {;} }

if( !function_exists( 'list_cats' ) ) { function list_cats($optionall = '', $all = '', $sort_column = '', $sort_order = '', $file = '', $list = '', $optiondates = '', $optioncount = '', $hide_empty = '', $use_desc_for_title = '', $children = '', $child_of = '', $categories = '', $recurse = '', $feed = '', $feed_image = '', $exclude = '', $hierarchical = '') {;} }

if( !function_exists( 'wp_list_cats' ) ) { function wp_list_cats($args = '') {;} }

if( !function_exists( 'dropdown_cats' ) ) { function dropdown_cats($optionall = '', $all = '', $orderby = '', $order = '', $show_last_update = '', $show_count = '', $hide_empty = '', $optionnone = '', $selected = '', $exclude = '') {;} }

if( !function_exists( 'list_authors' ) ) { function list_authors($optioncount = '', $exclude_admin = '', $show_fullname = '', $hide_empty = '', $feed = '', $feed_image = '') {;} }

if( !function_exists( 'wp_get_post_cats' ) ) { function wp_get_post_cats($blogid = '', $post_ID = '') {;} }

if( !function_exists( 'wp_set_post_cats' ) ) { function wp_set_post_cats($blogid = '', $post_ID = '', $post_categories = '') {;} }

if( !function_exists( 'get_archives' ) ) { function get_archives($type = '', $limit = '', $format = '', $before = '', $after = '', $show_post_count = '') {;} }

if( !function_exists( 'get_author_link' ) ) { function get_author_link($echo = '', $author_id, $author_nicename = '') {;} }

if( !function_exists( 'link_pages' ) ) { function link_pages($before = '', $after = '', $next_or_number = '', $nextpagelink = '', $previouspagelink = '', $pagelink = '', $more_file = '') {;} }

if( !function_exists( 'get_settings' ) ) { function get_settings($option) {;} }

if( !function_exists( 'permalink_link' ) ) { function permalink_link() {;} }

if( !function_exists( 'permalink_single_rss' ) ) { function permalink_single_rss($deprecated = '') {;} }

if( !function_exists( 'wp_get_links' ) ) { function wp_get_links($args = '') {;} }

if( !function_exists( 'get_links' ) ) { function get_links($category = '', $before = '', $after = '', $between = '', $show_images = '', $orderby = '', $show_description = '', $show_rating = '', $limit = '', $show_updated = '', $echo = '') {;} }

if( !function_exists( 'get_links_list' ) ) { function get_links_list($order = '') {;} }

if( !function_exists( 'links_popup_script' ) ) { function links_popup_script($text = '', $width = '', $height = '', $file = '', $count = '') {;} }

if( !function_exists( 'get_linkrating' ) ) { function get_linkrating($link) {;} }

if( !function_exists( 'get_linkcatname' ) ) { function get_linkcatname($id = '') {;} }

if( !function_exists( 'comments_rss_link' ) ) { function comments_rss_link($link_text = '') {;} }

if( !function_exists( 'get_category_rss_link' ) ) { function get_category_rss_link($echo = '', $cat_ID = '') {;} }

if( !function_exists( 'get_author_rss_link' ) ) { function get_author_rss_link($echo = '', $author_id = '') {;} }

if( !function_exists( 'comments_rss' ) ) { function comments_rss() {;} }

if( !function_exists( 'create_user' ) ) { function create_user($username, $password, $email) {;} }

if( !function_exists( 'gzip_compression' ) ) { function gzip_compression() {;} }

if( !function_exists( 'get_commentdata' ) ) { function get_commentdata($comment_ID, $no_cache = '', $include_unapproved = '') {;} }

if( !function_exists( 'get_catname' ) ) { function get_catname($cat_ID) {;} }

if( !function_exists( 'get_category_children' ) ) { function get_category_children($id, $before = '', $after = '', $visited = '') {;} }

if( !function_exists( 'get_the_author_description' ) ) { function get_the_author_description() {;} }

if( !function_exists( 'the_author_description' ) ) { function the_author_description() {;} }

if( !function_exists( 'get_the_author_login' ) ) { function get_the_author_login() {;} }

if( !function_exists( 'the_author_login' ) ) { function the_author_login() {;} }

if( !function_exists( 'get_the_author_firstname' ) ) { function get_the_author_firstname() {;} }

if( !function_exists( 'the_author_firstname' ) ) { function the_author_firstname() {;} }

if( !function_exists( 'get_the_author_lastname' ) ) { function get_the_author_lastname() {;} }

if( !function_exists( 'the_author_lastname' ) ) { function the_author_lastname() {;} }

if( !function_exists( 'get_the_author_nickname' ) ) { function get_the_author_nickname() {;} }

if( !function_exists( 'the_author_nickname' ) ) { function the_author_nickname() {;} }

if( !function_exists( 'get_the_author_email' ) ) { function get_the_author_email() {;} }

if( !function_exists( 'the_author_email' ) ) { function the_author_email() {;} }

if( !function_exists( 'get_the_author_icq' ) ) { function get_the_author_icq() {;} }

if( !function_exists( 'the_author_icq' ) ) { function the_author_icq() {;} }

if( !function_exists( 'get_the_author_yim' ) ) { function get_the_author_yim() {;} }

if( !function_exists( 'the_author_yim' ) ) { function the_author_yim() {;} }

if( !function_exists( 'get_the_author_msn' ) ) { function get_the_author_msn() {;} }

if( !function_exists( 'the_author_msn' ) ) { function the_author_msn() {;} }

if( !function_exists( 'get_the_author_aim' ) ) { function get_the_author_aim() {;} }

if( !function_exists( 'the_author_aim' ) ) { function the_author_aim() {;} }

if( !function_exists( 'get_author_name' ) ) { function get_author_name($auth_id = '') {;} }

if( !function_exists( 'get_the_author_url' ) ) { function get_the_author_url() {;} }

if( !function_exists( 'the_author_url' ) ) { function the_author_url() {;} }

if( !function_exists( 'get_the_author_ID' ) ) { function get_the_author_ID() {;} }

if( !function_exists( 'the_author_ID' ) ) { function the_author_ID() {;} }

if( !function_exists( 'the_content_rss' ) ) { function the_content_rss($more_link_text = '', $stripteaser = '', $more_file = '', $cut = '', $encode_html = '') {;} }

if( !function_exists( 'make_url_footnote' ) ) { function make_url_footnote($content) {;} }

if( !function_exists( '_c' ) ) { function _c($text, $domain = '') {;} }

if( !function_exists( 'translate_with_context' ) ) { function translate_with_context($text, $domain = '') {;} }

if( !function_exists( '_nc' ) ) { function _nc($single, $plural, $number, $domain = '') {;} }

if( !function_exists( '__ngettext' ) ) { function __ngettext() {;} }

if( !function_exists( '__ngettext_noop' ) ) { function __ngettext_noop() {;} }

if( !function_exists( 'get_alloptions' ) ) { function get_alloptions() {;} }

if( !function_exists( 'get_the_attachment_link' ) ) { function get_the_attachment_link($id = '', $fullsize = '', $max_dims = '', $permalink = '') {;} }

if( !function_exists( 'get_attachment_icon_src' ) ) { function get_attachment_icon_src($id = '', $fullsize = '') {;} }

if( !function_exists( 'get_attachment_icon' ) ) { function get_attachment_icon($id = '', $fullsize = '', $max_dims = '') {;} }

if( !function_exists( 'get_attachment_innerHTML' ) ) { function get_attachment_innerHTML($id = '', $fullsize = '', $max_dims = '') {;} }

if( !function_exists( 'get_link' ) ) { function get_link($bookmark_id, $output = '', $filter = '') {;} }

if( !function_exists( 'sanitize_url' ) ) { function sanitize_url($url, $protocols = '') {;} }

if( !function_exists( 'clean_url' ) ) { function clean_url($url, $protocols = '', $context = '') {;} }

if( !function_exists( 'js_escape' ) ) { function js_escape($text) {;} }

if( !function_exists( 'wp_specialchars' ) ) { function wp_specialchars($string, $quote_style = '', $charset = '', $double_encode = '') {;} }

if( !function_exists( 'attribute_escape' ) ) { function attribute_escape($text) {;} }

if( !function_exists( 'register_sidebar_widget' ) ) { function register_sidebar_widget($name, $output_callback, $classname = '') {;} }

if( !function_exists( 'unregister_sidebar_widget' ) ) { function unregister_sidebar_widget($id) {;} }

if( !function_exists( 'register_widget_control' ) ) { function register_widget_control($name, $control_callback, $width = '', $height = '') {;} }

if( !function_exists( 'unregister_widget_control' ) ) { function unregister_widget_control($id) {;} }

if( !function_exists( 'delete_usermeta' ) ) { function delete_usermeta($user_id, $meta_key, $meta_value = '') {;} }

if( !function_exists( 'get_usermeta' ) ) { function get_usermeta($user_id, $meta_key = '') {;} }

if( !function_exists( 'update_usermeta' ) ) { function update_usermeta($user_id, $meta_key, $meta_value) {;} }

if( !function_exists( 'get_users_of_blog' ) ) { function get_users_of_blog($id = '') {;} }

if( !function_exists( 'automatic_feed_links' ) ) { function automatic_feed_links($add = '') {;} }

if( !function_exists( 'get_profile' ) ) { function get_profile($field, $user = '') {;} }

if( !function_exists( 'get_usernumposts' ) ) { function get_usernumposts($userid) {;} }

if( !function_exists( 'funky_javascript_callback' ) ) { function funky_javascript_callback($matches) {;} }

if( !function_exists( 'funky_javascript_fix' ) ) { function funky_javascript_fix($text) {;} }

if( !function_exists( 'is_taxonomy' ) ) { function is_taxonomy($taxonomy) {;} }

if( !function_exists( 'is_term' ) ) { function is_term($term, $taxonomy = '', $parent = '') {;} }

if( !function_exists( 'is_plugin_page' ) ) { function is_plugin_page() {;} }

if( !function_exists( 'update_category_cache' ) ) { function update_category_cache() {;} }

if( !function_exists( 'wp_timezone_supported' ) ) { function wp_timezone_supported() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/functions.wp-styles.php */

if( !function_exists( 'wp_print_styles' ) ) { function wp_print_styles($handles = '') {;} }

if( !function_exists( 'wp_register_style' ) ) { function wp_register_style($handle, $src, $deps = '', $ver = '', $media = '') {;} }

if( !function_exists( 'wp_deregister_style' ) ) { function wp_deregister_style($handle) {;} }

if( !function_exists( 'wp_enqueue_style' ) ) { function wp_enqueue_style($handle, $src = '', $deps = '', $ver = '', $media = '') {;} }

if( !function_exists( 'wp_dequeue_style' ) ) { function wp_dequeue_style($handle) {;} }

if( !function_exists( 'wp_style_is' ) ) { function wp_style_is($handle, $list = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/theme-compat/header.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/theme-compat/comments.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/theme-compat/sidebar.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/theme-compat/footer.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/theme-compat/comments-popup.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-wp-ajax-response.php */

if( !class_exists( 'WP_Ajax_Response' ) ) {
	class WP_Ajax_Response {
		public $responses = '';

		public function __construct($args = '') {;}
		public function add($args = '') {;}
		public function send() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/rss.php */

if( !function_exists( 'fetch_rss' ) ) { function fetch_rss($url) {;} }

if( !function_exists( '_fetch_remote_file' ) ) { function _fetch_remote_file($url, $headers = '') {;} }

if( !function_exists( '_response_to_rss' ) ) { function _response_to_rss($resp) {;} }

if( !function_exists( 'init' ) ) { function init() {;} }

if( !function_exists( 'is_info' ) ) { function is_info($sc) {;} }

if( !function_exists( 'is_success' ) ) { function is_success($sc) {;} }

if( !function_exists( 'is_redirect' ) ) { function is_redirect($sc) {;} }

if( !function_exists( 'is_error' ) ) { function is_error($sc) {;} }

if( !function_exists( 'is_client_error' ) ) { function is_client_error($sc) {;} }

if( !function_exists( 'is_server_error' ) ) { function is_server_error($sc) {;} }

if( !function_exists( 'parse_w3cdtf' ) ) { function parse_w3cdtf($date_str) {;} }

if( !function_exists( 'wp_rss' ) ) { function wp_rss($url, $num_items = '') {;} }

if( !function_exists( 'get_rss' ) ) { function get_rss($url, $num_items = '') {;} }

if( !class_exists( 'MagpieRSS' ) ) {
	class MagpieRSS {
		public $parser;
		public $current_item = '';
		public $items = '';
		public $channel = '';
		public $textinput = '';
		public $image = '';
		public $feed_type;
		public $feed_version;
		public $stack = '';
		public $inchannel = '';
		public $initem = '';
		public $incontent = '';
		public $intextinput = '';
		public $inimage = '';
		public $current_field = '';
		public $current_namespace = '';
		public $_CONTENT_CONSTRUCTS = '';

		public function MagpieRSS($source) {;}
		public function feed_start_element($p, $element, $attrs) {;}
		public function feed_cdata($p, $text) {;}
		public function feed_end_element($p, $el) {;}
		public function concat($str1, $str2 = '') {;}
		public function append_content($text) {;}
		public function append($el, $text) {;}
		public function normalize() {;}
		public function is_rss() {;}
		public function is_atom() {;}
		public function map_attrs($k, $v) {;}
		public function error($errormsg, $lvl = '') {;}

	}
}

if( !class_exists( 'RSSCache' ) ) {
	class RSSCache {
		public $BASE_CACHE;
		public $MAX_AGE = '';
		public $ERROR = '';

		public function RSSCache($base = '', $age = '') {;}
		public function set($url, $rss) {;}
		public function get($url) {;}
		public function check_cache($url) {;}
		public function serialize($rss) {;}
		public function unserialize($data) {;}
		public function file_name($url) {;}
		public function error($errormsg, $lvl = '') {;}
		public function debug($debugmsg, $lvl = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/category.php */

if( !function_exists( 'get_all_category_ids' ) ) { function get_all_category_ids() {;} }

if( !function_exists( 'get_categories' ) ) { function get_categories($args = '') {;} }

if( !function_exists( 'get_category' ) ) { function get_category($category, $output = '', $filter = '') {;} }

if( !function_exists( 'get_category_by_path' ) ) { function get_category_by_path($category_path, $full_match = '', $output = '') {;} }

if( !function_exists( 'get_category_by_slug' ) ) { function get_category_by_slug($slug) {;} }

if( !function_exists( 'get_cat_ID' ) ) { function get_cat_ID($cat_name = '') {;} }

if( !function_exists( 'get_cat_name' ) ) { function get_cat_name($cat_id) {;} }

if( !function_exists( 'cat_is_ancestor_of' ) ) { function cat_is_ancestor_of($cat1, $cat2) {;} }

if( !function_exists( 'sanitize_category' ) ) { function sanitize_category($category, $context = '') {;} }

if( !function_exists( 'sanitize_category_field' ) ) { function sanitize_category_field($field, $value, $cat_id, $context) {;} }

if( !function_exists( 'get_tags' ) ) { function get_tags($args = '') {;} }

if( !function_exists( 'get_tag' ) ) { function get_tag($tag, $output = '', $filter = '') {;} }

if( !function_exists( 'clean_category_cache' ) ) { function clean_category_cache($id) {;} }

if( !function_exists( '_make_cat_compat' ) ) { function _make_cat_compat($category) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/wp-db.php */

if( !class_exists( 'wpdb' ) ) {
	class wpdb {
		public $show_errors = '';
		public $suppress_errors = '';
		public $last_error = '';
		public $num_queries = '';
		public $num_rows = '';
		public $rows_affected = '';
		public $insert_id = '';
		public $last_query;
		public $last_result;
		public $col_info;
		public $queries;
		public $prefix = '';
		public $ready = '';
		public $blogid = '';
		public $siteid = '';
		public $tables = '';
		public $old_tables = '';
		public $global_tables = '';
		public $ms_global_tables = '';
		public $comments;
		public $commentmeta;
		public $links;
		public $options;
		public $postmeta;
		public $posts;
		public $terms;
		public $term_relationships;
		public $term_taxonomy;
		public $usermeta;
		public $users;
		public $blogs;
		public $blog_versions;
		public $registration_log;
		public $signups;
		public $site;
		public $sitecategories;
		public $sitemeta;
		public $field_types = '';
		public $charset;
		public $collate;
		public $real_escape = '';
		public $dbuser;
		public $func_call;

		public function __construct($dbuser, $dbpassword, $dbname, $dbhost) {;}
		public function __destruct() {;}
		public function init_charset() {;}
		public function set_charset($dbh, $charset = '', $collate = '') {;}
		public function set_prefix($prefix, $set_table_names = '') {;}
		public function set_blog_id($blog_id, $site_id = '') {;}
		public function get_blog_prefix($blog_id = '') {;}
		public function tables($scope = '', $prefix = '', $blog_id = '') {;}
		public function select($db, $dbh = '') {;}
		public function _weak_escape($string) {;}
		public function _real_escape($string) {;}
		public function _escape($data) {;}
		public function escape($data) {;}
		public function escape_by_ref($string) {;}
		public function prepare($query = '') {;}
		public function print_error($str = '') {;}
		public function show_errors($show = '') {;}
		public function hide_errors() {;}
		public function suppress_errors($suppress = '') {;}
		public function flush() {;}
		public function db_connect() {;}
		public function query($query) {;}
		public function insert($table, $data, $format = '') {;}
		public function replace($table, $data, $format = '') {;}
		public function _insert_replace_helper($table, $data, $format = '', $type = '') {;}
		public function update($table, $data, $where, $format = '', $where_format = '') {;}
		public function get_var($query = '', $x = '', $y = '') {;}
		public function get_row($query = '', $output = '', $y = '') {;}
		public function get_col($query = '', $x = '') {;}
		public function get_results($query = '', $output = '') {;}
		public function get_col_info($info_type = '', $col_offset = '') {;}
		public function timer_start() {;}
		public function timer_stop() {;}
		public function bail($message, $error_code = '') {;}
		public function check_database_version() {;}
		public function supports_collation() {;}
		public function has_cap($db_cap) {;}
		public function get_caller() {;}
		public function db_version() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/functions.php */

if( !function_exists( 'mysql2date' ) ) { function mysql2date($dateformatstring, $mysqlstring, $translate = '') {;} }

if( !function_exists( 'current_time' ) ) { function current_time($type, $gmt = '') {;} }

if( !function_exists( 'date_i18n' ) ) { function date_i18n($dateformatstring, $unixtimestamp = '', $gmt = '') {;} }

if( !function_exists( 'number_format_i18n' ) ) { function number_format_i18n($number, $decimals = '') {;} }

if( !function_exists( 'size_format' ) ) { function size_format($bytes, $decimals = '') {;} }

if( !function_exists( 'get_weekstartend' ) ) { function get_weekstartend($mysqlstring, $start_of_week = '') {;} }

if( !function_exists( 'maybe_unserialize' ) ) { function maybe_unserialize($original) {;} }

if( !function_exists( 'is_serialized' ) ) { function is_serialized($data) {;} }

if( !function_exists( 'is_serialized_string' ) ) { function is_serialized_string($data) {;} }

if( !function_exists( 'get_option' ) ) { function get_option($option, $default = '') {;} }

if( !function_exists( 'wp_protect_special_option' ) ) { function wp_protect_special_option($option) {;} }

if( !function_exists( 'form_option' ) ) { function form_option($option) {;} }

if( !function_exists( 'wp_load_alloptions' ) ) { function wp_load_alloptions() {;} }

if( !function_exists( 'wp_load_core_site_options' ) ) { function wp_load_core_site_options($site_id = '') {;} }

if( !function_exists( 'update_option' ) ) { function update_option($option, $newvalue) {;} }

if( !function_exists( 'add_option' ) ) { function add_option($option, $value = '', $deprecated = '', $autoload = '') {;} }

if( !function_exists( 'delete_option' ) ) { function delete_option($option) {;} }

if( !function_exists( 'delete_transient' ) ) { function delete_transient($transient) {;} }

if( !function_exists( 'get_transient' ) ) { function get_transient($transient) {;} }

if( !function_exists( 'set_transient' ) ) { function set_transient($transient, $value, $expiration = '') {;} }

if( !function_exists( 'wp_user_settings' ) ) { function wp_user_settings() {;} }

if( !function_exists( 'get_user_setting' ) ) { function get_user_setting($name, $default = '') {;} }

if( !function_exists( 'set_user_setting' ) ) { function set_user_setting($name, $value) {;} }

if( !function_exists( 'delete_user_setting' ) ) { function delete_user_setting($names) {;} }

if( !function_exists( 'get_all_user_settings' ) ) { function get_all_user_settings() {;} }

if( !function_exists( 'wp_set_all_user_settings' ) ) { function wp_set_all_user_settings($all) {;} }

if( !function_exists( 'delete_all_user_settings' ) ) { function delete_all_user_settings() {;} }

if( !function_exists( 'maybe_serialize' ) ) { function maybe_serialize($data) {;} }

if( !function_exists( 'xmlrpc_getposttitle' ) ) { function xmlrpc_getposttitle($content) {;} }

if( !function_exists( 'xmlrpc_getpostcategory' ) ) { function xmlrpc_getpostcategory($content) {;} }

if( !function_exists( 'xmlrpc_removepostdata' ) ) { function xmlrpc_removepostdata($content) {;} }

if( !function_exists( 'debug_fopen' ) ) { function debug_fopen($filename, $mode) {;} }

if( !function_exists( 'debug_fwrite' ) ) { function debug_fwrite($fp, $string) {;} }

if( !function_exists( 'debug_fclose' ) ) { function debug_fclose($fp) {;} }

if( !function_exists( 'do_enclose' ) ) { function do_enclose($content, $post_ID) {;} }

if( !function_exists( 'wp_get_http' ) ) { function wp_get_http($url, $file_path = '', $red = '') {;} }

if( !function_exists( 'wp_get_http_headers' ) ) { function wp_get_http_headers($url, $deprecated = '') {;} }

if( !function_exists( 'is_new_day' ) ) { function is_new_day() {;} }

if( !function_exists( 'build_query' ) ) { function build_query($data) {;} }

if( !function_exists( '_http_build_query' ) ) { function _http_build_query($data, $prefix = '', $sep = '', $key = '', $urlencode = '') {;} }

if( !function_exists( 'add_query_arg' ) ) { function add_query_arg() {;} }

if( !function_exists( 'remove_query_arg' ) ) { function remove_query_arg($key, $query = '') {;} }

if( !function_exists( 'add_magic_quotes' ) ) { function add_magic_quotes($array) {;} }

if( !function_exists( 'wp_remote_fopen' ) ) { function wp_remote_fopen($uri) {;} }

if( !function_exists( 'wp' ) ) { function wp($query_vars = '') {;} }

if( !function_exists( 'get_status_header_desc' ) ) { function get_status_header_desc($code) {;} }

if( !function_exists( 'status_header' ) ) { function status_header($header) {;} }

if( !function_exists( 'wp_get_nocache_headers' ) ) { function wp_get_nocache_headers() {;} }

if( !function_exists( 'nocache_headers' ) ) { function nocache_headers() {;} }

if( !function_exists( 'cache_javascript_headers' ) ) { function cache_javascript_headers() {;} }

if( !function_exists( 'get_num_queries' ) ) { function get_num_queries() {;} }

if( !function_exists( 'bool_from_yn' ) ) { function bool_from_yn($yn) {;} }

if( !function_exists( 'do_feed' ) ) { function do_feed() {;} }

if( !function_exists( 'do_feed_rdf' ) ) { function do_feed_rdf() {;} }

if( !function_exists( 'do_feed_rss' ) ) { function do_feed_rss() {;} }

if( !function_exists( 'do_feed_rss2' ) ) { function do_feed_rss2($for_comments) {;} }

if( !function_exists( 'do_feed_atom' ) ) { function do_feed_atom($for_comments) {;} }

if( !function_exists( 'do_robots' ) ) { function do_robots() {;} }

if( !function_exists( 'is_blog_installed' ) ) { function is_blog_installed() {;} }

if( !function_exists( 'wp_nonce_url' ) ) { function wp_nonce_url($actionurl, $action = '') {;} }

if( !function_exists( 'wp_nonce_field' ) ) { function wp_nonce_field($action = '', $name = '', $referer = '', $echo = '') {;} }

if( !function_exists( 'wp_referer_field' ) ) { function wp_referer_field($echo = '') {;} }

if( !function_exists( 'wp_original_referer_field' ) ) { function wp_original_referer_field($echo = '', $jump_back_to = '') {;} }

if( !function_exists( 'wp_get_referer' ) ) { function wp_get_referer() {;} }

if( !function_exists( 'wp_get_original_referer' ) ) { function wp_get_original_referer() {;} }

if( !function_exists( 'wp_mkdir_p' ) ) { function wp_mkdir_p($target) {;} }

if( !function_exists( 'path_is_absolute' ) ) { function path_is_absolute($path) {;} }

if( !function_exists( 'path_join' ) ) { function path_join($base, $path) {;} }

if( !function_exists( 'get_temp_dir' ) ) { function get_temp_dir() {;} }

if( !function_exists( 'wp_upload_dir' ) ) { function wp_upload_dir($time = '') {;} }

if( !function_exists( 'wp_unique_filename' ) ) { function wp_unique_filename($dir, $filename, $unique_filename_callback = '') {;} }

if( !function_exists( 'wp_upload_bits' ) ) { function wp_upload_bits($name, $deprecated, $bits, $time = '') {;} }

if( !function_exists( 'wp_ext2type' ) ) { function wp_ext2type($ext) {;} }

if( !function_exists( 'wp_check_filetype' ) ) { function wp_check_filetype($filename, $mimes = '') {;} }

if( !function_exists( 'wp_check_filetype_and_ext' ) ) { function wp_check_filetype_and_ext($file, $filename, $mimes = '') {;} }

if( !function_exists( 'get_allowed_mime_types' ) ) { function get_allowed_mime_types() {;} }

if( !function_exists( 'wp_explain_nonce' ) ) { function wp_explain_nonce($action) {;} }

if( !function_exists( 'wp_nonce_ays' ) ) { function wp_nonce_ays($action) {;} }

if( !function_exists( 'wp_die' ) ) { function wp_die($message, $title = '', $args = '') {;} }

if( !function_exists( '_default_wp_die_handler' ) ) { function _default_wp_die_handler($message, $title = '', $args = '') {;} }

if( !function_exists( '_xmlrpc_wp_die_handler' ) ) { function _xmlrpc_wp_die_handler($message, $title = '', $args = '') {;} }

if( !function_exists( '_xmlrpc_wp_die_filter' ) ) { function _xmlrpc_wp_die_filter() {;} }

if( !function_exists( '_config_wp_home' ) ) { function _config_wp_home($url = '') {;} }

if( !function_exists( '_config_wp_siteurl' ) ) { function _config_wp_siteurl($url = '') {;} }

if( !function_exists( '_mce_set_direction' ) ) { function _mce_set_direction($input) {;} }

if( !function_exists( 'smilies_init' ) ) { function smilies_init() {;} }

if( !function_exists( 'wp_parse_args' ) ) { function wp_parse_args($args, $defaults = '') {;} }

if( !function_exists( 'wp_parse_id_list' ) ) { function wp_parse_id_list($list) {;} }

if( !function_exists( 'wp_array_slice_assoc' ) ) { function wp_array_slice_assoc($array, $keys) {;} }

if( !function_exists( 'wp_filter_object_list' ) ) { function wp_filter_object_list($list, $args = '', $operator = '', $field = '') {;} }

if( !function_exists( 'wp_list_filter' ) ) { function wp_list_filter($list, $args = '', $operator = '') {;} }

if( !function_exists( 'wp_list_pluck' ) ) { function wp_list_pluck($list, $field) {;} }

if( !function_exists( 'wp_maybe_load_widgets' ) ) { function wp_maybe_load_widgets() {;} }

if( !function_exists( 'wp_widgets_add_menu' ) ) { function wp_widgets_add_menu() {;} }

if( !function_exists( 'wp_ob_end_flush_all' ) ) { function wp_ob_end_flush_all() {;} }

if( !function_exists( 'dead_db' ) ) { function dead_db() {;} }

if( !function_exists( 'absint' ) ) { function absint($maybeint) {;} }

if( !function_exists( 'url_is_accessable_via_ssl' ) ) { function url_is_accessable_via_ssl($url) {;} }

if( !function_exists( '_deprecated_function' ) ) { function _deprecated_function($function, $version, $replacement = '') {;} }

if( !function_exists( '_deprecated_file' ) ) { function _deprecated_file($file, $version, $replacement = '', $message = '') {;} }

if( !function_exists( '_deprecated_argument' ) ) { function _deprecated_argument($function, $version, $message = '') {;} }

if( !function_exists( '_doing_it_wrong' ) ) { function _doing_it_wrong($function, $message, $version) {;} }

if( !function_exists( 'is_lighttpd_before_150' ) ) { function is_lighttpd_before_150() {;} }

if( !function_exists( 'apache_mod_loaded' ) ) { function apache_mod_loaded($mod, $default = '') {;} }

if( !function_exists( 'iis7_supports_permalinks' ) ) { function iis7_supports_permalinks() {;} }

if( !function_exists( 'validate_file' ) ) { function validate_file($file, $allowed_files = '') {;} }

if( !function_exists( 'is_ssl' ) ) { function is_ssl() {;} }

if( !function_exists( 'force_ssl_login' ) ) { function force_ssl_login($force = '') {;} }

if( !function_exists( 'force_ssl_admin' ) ) { function force_ssl_admin($force = '') {;} }

if( !function_exists( 'wp_guess_url' ) ) { function wp_guess_url() {;} }

if( !function_exists( 'wp_suspend_cache_invalidation' ) ) { function wp_suspend_cache_invalidation($suspend = '') {;} }

if( !function_exists( 'get_site_option' ) ) { function get_site_option($option, $default = '', $use_cache = '') {;} }

if( !function_exists( 'add_site_option' ) ) { function add_site_option($option, $value) {;} }

if( !function_exists( 'delete_site_option' ) ) { function delete_site_option($option) {;} }

if( !function_exists( 'update_site_option' ) ) { function update_site_option($option, $value) {;} }

if( !function_exists( 'delete_site_transient' ) ) { function delete_site_transient($transient) {;} }

if( !function_exists( 'get_site_transient' ) ) { function get_site_transient($transient) {;} }

if( !function_exists( 'set_site_transient' ) ) { function set_site_transient($transient, $value, $expiration = '') {;} }

if( !function_exists( 'is_main_site' ) ) { function is_main_site($blog_id = '') {;} }

if( !function_exists( 'global_terms_enabled' ) ) { function global_terms_enabled() {;} }

if( !function_exists( 'wp_timezone_override_offset' ) ) { function wp_timezone_override_offset() {;} }

if( !function_exists( '_wp_timezone_choice_usort_callback' ) ) { function _wp_timezone_choice_usort_callback($a, $b) {;} }

if( !function_exists( 'wp_timezone_choice' ) ) { function wp_timezone_choice($selected_zone) {;} }

if( !function_exists( '_cleanup_header_comment' ) ) { function _cleanup_header_comment($str) {;} }

if( !function_exists( 'wp_scheduled_delete' ) ) { function wp_scheduled_delete() {;} }

if( !function_exists( 'get_file_data' ) ) { function get_file_data($file, $default_headers, $context = '') {;} }

if( !function_exists( '_search_terms_tidy' ) ) { function _search_terms_tidy($t) {;} }

if( !function_exists( '__return_true' ) ) { function __return_true() {;} }

if( !function_exists( '__return_false' ) ) { function __return_false() {;} }

if( !function_exists( '__return_zero' ) ) { function __return_zero() {;} }

if( !function_exists( '__return_empty_array' ) ) { function __return_empty_array() {;} }

if( !function_exists( 'send_nosniff_header' ) ) { function send_nosniff_header() {;} }

if( !function_exists( '_wp_mysql_week' ) ) { function _wp_mysql_week($column) {;} }

if( !function_exists( 'wp_find_hierarchy_loop' ) ) { function wp_find_hierarchy_loop($callback, $start, $start_parent, $callback_args = '') {;} }

if( !function_exists( 'wp_find_hierarchy_loop_tortoise_hare' ) ) { function wp_find_hierarchy_loop_tortoise_hare($callback, $start, $override = '', $callback_args = '', $_return_loop = '') {;} }

if( !function_exists( 'send_frame_options_header' ) ) { function send_frame_options_header() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/link-template.php */

if( !function_exists( 'the_permalink' ) ) { function the_permalink() {;} }

if( !function_exists( 'user_trailingslashit' ) ) { function user_trailingslashit($string, $type_of_url = '') {;} }

if( !function_exists( 'permalink_anchor' ) ) { function permalink_anchor($mode = '') {;} }

if( !function_exists( 'get_permalink' ) ) { function get_permalink($id = '', $leavename = '') {;} }

if( !function_exists( 'get_post_permalink' ) ) { function get_post_permalink($id = '', $leavename = '', $sample = '') {;} }

if( !function_exists( 'post_permalink' ) ) { function post_permalink($post_id = '', $deprecated = '') {;} }

if( !function_exists( 'get_page_link' ) ) { function get_page_link($id = '', $leavename = '', $sample = '') {;} }

if( !function_exists( '_get_page_link' ) ) { function _get_page_link($id = '', $leavename = '', $sample = '') {;} }

if( !function_exists( 'get_attachment_link' ) ) { function get_attachment_link($id = '') {;} }

if( !function_exists( 'get_year_link' ) ) { function get_year_link($year) {;} }

if( !function_exists( 'get_month_link' ) ) { function get_month_link($year, $month) {;} }

if( !function_exists( 'get_day_link' ) ) { function get_day_link($year, $month, $day) {;} }

if( !function_exists( 'the_feed_link' ) ) { function the_feed_link($anchor, $feed = '') {;} }

if( !function_exists( 'get_feed_link' ) ) { function get_feed_link($feed = '') {;} }

if( !function_exists( 'get_post_comments_feed_link' ) ) { function get_post_comments_feed_link($post_id = '', $feed = '') {;} }

if( !function_exists( 'post_comments_feed_link' ) ) { function post_comments_feed_link($link_text = '', $post_id = '', $feed = '') {;} }

if( !function_exists( 'get_author_feed_link' ) ) { function get_author_feed_link($author_id, $feed = '') {;} }

if( !function_exists( 'get_category_feed_link' ) ) { function get_category_feed_link($cat_id, $feed = '') {;} }

if( !function_exists( 'get_term_feed_link' ) ) { function get_term_feed_link($term_id, $taxonomy = '', $feed = '') {;} }

if( !function_exists( 'get_tag_feed_link' ) ) { function get_tag_feed_link($tag_id, $feed = '') {;} }

if( !function_exists( 'get_edit_tag_link' ) ) { function get_edit_tag_link($tag_id, $taxonomy = '') {;} }

if( !function_exists( 'edit_tag_link' ) ) { function edit_tag_link($link = '', $before = '', $after = '', $tag = '') {;} }

if( !function_exists( 'get_edit_term_link' ) ) { function get_edit_term_link($term_id, $taxonomy, $object_type = '') {;} }

if( !function_exists( 'edit_term_link' ) ) { function edit_term_link($link = '', $before = '', $after = '', $term = '', $echo = '') {;} }

if( !function_exists( 'get_search_link' ) ) { function get_search_link($query = '') {;} }

if( !function_exists( 'get_search_feed_link' ) ) { function get_search_feed_link($search_query = '', $feed = '') {;} }

if( !function_exists( 'get_search_comments_feed_link' ) ) { function get_search_comments_feed_link($search_query = '', $feed = '') {;} }

if( !function_exists( 'get_post_type_archive_link' ) ) { function get_post_type_archive_link($post_type) {;} }

if( !function_exists( 'get_post_type_archive_feed_link' ) ) { function get_post_type_archive_feed_link($post_type, $feed = '') {;} }

if( !function_exists( 'get_edit_post_link' ) ) { function get_edit_post_link($id = '', $context = '') {;} }

if( !function_exists( 'edit_post_link' ) ) { function edit_post_link($link = '', $before = '', $after = '', $id = '') {;} }

if( !function_exists( 'get_delete_post_link' ) ) { function get_delete_post_link($id = '', $deprecated = '', $force_delete = '') {;} }

if( !function_exists( 'get_edit_comment_link' ) ) { function get_edit_comment_link($comment_id = '') {;} }

if( !function_exists( 'edit_comment_link' ) ) { function edit_comment_link($link = '', $before = '', $after = '') {;} }

if( !function_exists( 'get_edit_bookmark_link' ) ) { function get_edit_bookmark_link($link = '') {;} }

if( !function_exists( 'edit_bookmark_link' ) ) { function edit_bookmark_link($link = '', $before = '', $after = '', $bookmark = '') {;} }

if( !function_exists( 'get_previous_post' ) ) { function get_previous_post($in_same_cat = '', $excluded_categories = '') {;} }

if( !function_exists( 'get_next_post' ) ) { function get_next_post($in_same_cat = '', $excluded_categories = '') {;} }

if( !function_exists( 'get_adjacent_post' ) ) { function get_adjacent_post($in_same_cat = '', $excluded_categories = '', $previous = '') {;} }

if( !function_exists( 'get_adjacent_post_rel_link' ) ) { function get_adjacent_post_rel_link($title = '', $in_same_cat = '', $excluded_categories = '', $previous = '') {;} }

if( !function_exists( 'adjacent_posts_rel_link' ) ) { function adjacent_posts_rel_link($title = '', $in_same_cat = '', $excluded_categories = '') {;} }

if( !function_exists( 'adjacent_posts_rel_link_wp_head' ) ) { function adjacent_posts_rel_link_wp_head() {;} }

if( !function_exists( 'next_post_rel_link' ) ) { function next_post_rel_link($title = '', $in_same_cat = '', $excluded_categories = '') {;} }

if( !function_exists( 'prev_post_rel_link' ) ) { function prev_post_rel_link($title = '', $in_same_cat = '', $excluded_categories = '') {;} }

if( !function_exists( 'get_boundary_post' ) ) { function get_boundary_post($in_same_cat = '', $excluded_categories = '', $start = '') {;} }

if( !function_exists( 'get_boundary_post_rel_link' ) ) { function get_boundary_post_rel_link($title = '', $in_same_cat = '', $excluded_categories = '', $start = '') {;} }

if( !function_exists( 'start_post_rel_link' ) ) { function start_post_rel_link($title = '', $in_same_cat = '', $excluded_categories = '') {;} }

if( !function_exists( 'get_index_rel_link' ) ) { function get_index_rel_link() {;} }

if( !function_exists( 'index_rel_link' ) ) { function index_rel_link() {;} }

if( !function_exists( 'get_parent_post_rel_link' ) ) { function get_parent_post_rel_link($title = '') {;} }

if( !function_exists( 'parent_post_rel_link' ) ) { function parent_post_rel_link($title = '') {;} }

if( !function_exists( 'previous_post_link' ) ) { function previous_post_link($format = '', $link = '', $in_same_cat = '', $excluded_categories = '') {;} }

if( !function_exists( 'next_post_link' ) ) { function next_post_link($format = '', $link = '', $in_same_cat = '', $excluded_categories = '') {;} }

if( !function_exists( 'adjacent_post_link' ) ) { function adjacent_post_link($format, $link, $in_same_cat = '', $excluded_categories = '', $previous = '') {;} }

if( !function_exists( 'get_pagenum_link' ) ) { function get_pagenum_link($pagenum = '') {;} }

if( !function_exists( 'get_next_posts_page_link' ) ) { function get_next_posts_page_link($max_page = '') {;} }

if( !function_exists( 'next_posts' ) ) { function next_posts($max_page = '', $echo = '') {;} }

if( !function_exists( 'get_next_posts_link' ) ) { function get_next_posts_link($label = '', $max_page = '') {;} }

if( !function_exists( 'next_posts_link' ) ) { function next_posts_link($label = '', $max_page = '') {;} }

if( !function_exists( 'get_previous_posts_page_link' ) ) { function get_previous_posts_page_link() {;} }

if( !function_exists( 'previous_posts' ) ) { function previous_posts($echo = '') {;} }

if( !function_exists( 'get_previous_posts_link' ) ) { function get_previous_posts_link($label = '') {;} }

if( !function_exists( 'previous_posts_link' ) ) { function previous_posts_link($label = '') {;} }

if( !function_exists( 'get_posts_nav_link' ) ) { function get_posts_nav_link($args = '') {;} }

if( !function_exists( 'posts_nav_link' ) ) { function posts_nav_link($sep = '', $prelabel = '', $nxtlabel = '') {;} }

if( !function_exists( 'get_comments_pagenum_link' ) ) { function get_comments_pagenum_link($pagenum = '', $max_page = '') {;} }

if( !function_exists( 'get_next_comments_link' ) ) { function get_next_comments_link($label = '', $max_page = '') {;} }

if( !function_exists( 'next_comments_link' ) ) { function next_comments_link($label = '', $max_page = '') {;} }

if( !function_exists( 'get_previous_comments_link' ) ) { function get_previous_comments_link($label = '') {;} }

if( !function_exists( 'previous_comments_link' ) ) { function previous_comments_link($label = '') {;} }

if( !function_exists( 'paginate_comments_links' ) ) { function paginate_comments_links($args = '') {;} }

if( !function_exists( 'get_shortcut_link' ) ) { function get_shortcut_link() {;} }

if( !function_exists( 'home_url' ) ) { function home_url($path = '', $scheme = '') {;} }

if( !function_exists( 'get_home_url' ) ) { function get_home_url($blog_id = '', $path = '', $scheme = '') {;} }

if( !function_exists( 'site_url' ) ) { function site_url($path = '', $scheme = '') {;} }

if( !function_exists( 'get_site_url' ) ) { function get_site_url($blog_id = '', $path = '', $scheme = '') {;} }

if( !function_exists( 'admin_url' ) ) { function admin_url($path = '', $scheme = '') {;} }

if( !function_exists( 'get_admin_url' ) ) { function get_admin_url($blog_id = '', $path = '', $scheme = '') {;} }

if( !function_exists( 'includes_url' ) ) { function includes_url($path = '') {;} }

if( !function_exists( 'content_url' ) ) { function content_url($path = '') {;} }

if( !function_exists( 'plugins_url' ) ) { function plugins_url($path = '', $plugin = '') {;} }

if( !function_exists( 'network_site_url' ) ) { function network_site_url($path = '', $scheme = '') {;} }

if( !function_exists( 'network_home_url' ) ) { function network_home_url($path = '', $scheme = '') {;} }

if( !function_exists( 'network_admin_url' ) ) { function network_admin_url($path = '', $scheme = '') {;} }

if( !function_exists( 'user_admin_url' ) ) { function user_admin_url($path = '', $scheme = '') {;} }

if( !function_exists( 'self_admin_url' ) ) { function self_admin_url($path = '', $scheme = '') {;} }

if( !function_exists( 'get_dashboard_url' ) ) { function get_dashboard_url($user_id, $path = '', $scheme = '') {;} }

if( !function_exists( 'get_edit_profile_url' ) ) { function get_edit_profile_url($user, $scheme = '') {;} }

if( !function_exists( 'rel_canonical' ) ) { function rel_canonical() {;} }

if( !function_exists( 'wp_get_shortlink' ) ) { function wp_get_shortlink($id = '', $context = '', $allow_slugs = '') {;} }

if( !function_exists( 'wp_shortlink_wp_head' ) ) { function wp_shortlink_wp_head() {;} }

if( !function_exists( 'wp_shortlink_header' ) ) { function wp_shortlink_header() {;} }

if( !function_exists( 'the_shortlink' ) ) { function the_shortlink($text = '', $title = '', $before = '', $after = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/kses.php */

if( !function_exists( 'wp_kses' ) ) { function wp_kses($string, $allowed_html, $allowed_protocols = '') {;} }

if( !function_exists( 'wp_kses_hook' ) ) { function wp_kses_hook($string, $allowed_html, $allowed_protocols) {;} }

if( !function_exists( 'wp_kses_version' ) ) { function wp_kses_version() {;} }

if( !function_exists( 'wp_kses_split' ) ) { function wp_kses_split($string, $allowed_html, $allowed_protocols) {;} }

if( !function_exists( '_wp_kses_split_callback' ) ) { function _wp_kses_split_callback($match) {;} }

if( !function_exists( 'wp_kses_split2' ) ) { function wp_kses_split2($string, $allowed_html, $allowed_protocols) {;} }

if( !function_exists( 'wp_kses_attr' ) ) { function wp_kses_attr($element, $attr, $allowed_html, $allowed_protocols) {;} }

if( !function_exists( 'wp_kses_hair' ) ) { function wp_kses_hair($attr, $allowed_protocols) {;} }

if( !function_exists( 'wp_kses_check_attr_val' ) ) { function wp_kses_check_attr_val($value, $vless, $checkname, $checkvalue) {;} }

if( !function_exists( 'wp_kses_bad_protocol' ) ) { function wp_kses_bad_protocol($string, $allowed_protocols) {;} }

if( !function_exists( 'wp_kses_no_null' ) ) { function wp_kses_no_null($string) {;} }

if( !function_exists( 'wp_kses_stripslashes' ) ) { function wp_kses_stripslashes($string) {;} }

if( !function_exists( 'wp_kses_array_lc' ) ) { function wp_kses_array_lc($inarray) {;} }

if( !function_exists( 'wp_kses_js_entities' ) ) { function wp_kses_js_entities($string) {;} }

if( !function_exists( 'wp_kses_html_error' ) ) { function wp_kses_html_error($string) {;} }

if( !function_exists( 'wp_kses_bad_protocol_once' ) ) { function wp_kses_bad_protocol_once($string, $allowed_protocols) {;} }

if( !function_exists( 'wp_kses_bad_protocol_once2' ) ) { function wp_kses_bad_protocol_once2($string, $allowed_protocols) {;} }

if( !function_exists( 'wp_kses_normalize_entities' ) ) { function wp_kses_normalize_entities($string) {;} }

if( !function_exists( 'wp_kses_named_entities' ) ) { function wp_kses_named_entities($matches) {;} }

if( !function_exists( 'wp_kses_normalize_entities2' ) ) { function wp_kses_normalize_entities2($matches) {;} }

if( !function_exists( 'wp_kses_normalize_entities3' ) ) { function wp_kses_normalize_entities3($matches) {;} }

if( !function_exists( 'valid_unicode' ) ) { function valid_unicode($i) {;} }

if( !function_exists( 'wp_kses_decode_entities' ) ) { function wp_kses_decode_entities($string) {;} }

if( !function_exists( '_wp_kses_decode_entities_chr' ) ) { function _wp_kses_decode_entities_chr($match) {;} }

if( !function_exists( '_wp_kses_decode_entities_chr_hexdec' ) ) { function _wp_kses_decode_entities_chr_hexdec($match) {;} }

if( !function_exists( 'wp_filter_kses' ) ) { function wp_filter_kses($data) {;} }

if( !function_exists( 'wp_kses_data' ) ) { function wp_kses_data($data) {;} }

if( !function_exists( 'wp_filter_post_kses' ) ) { function wp_filter_post_kses($data) {;} }

if( !function_exists( 'wp_kses_post' ) ) { function wp_kses_post($data) {;} }

if( !function_exists( 'wp_filter_nohtml_kses' ) ) { function wp_filter_nohtml_kses($data) {;} }

if( !function_exists( 'kses_init_filters' ) ) { function kses_init_filters() {;} }

if( !function_exists( 'kses_remove_filters' ) ) { function kses_remove_filters() {;} }

if( !function_exists( 'kses_init' ) ) { function kses_init() {;} }

if( !function_exists( 'safecss_filter_attr' ) ) { function safecss_filter_attr($css, $deprecated = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/default-widgets.php */

if( !function_exists( 'wp_widget_rss_output' ) ) { function wp_widget_rss_output($rss, $args = '') {;} }

if( !function_exists( 'wp_widget_rss_form' ) ) { function wp_widget_rss_form($args, $inputs = '') {;} }

if( !function_exists( 'wp_widget_rss_process' ) ) { function wp_widget_rss_process($widget_rss, $check_feed = '') {;} }

if( !function_exists( 'wp_widgets_init' ) ) { function wp_widgets_init() {;} }

if( !class_exists( 'WP_Widget_Pages' ) ) {
	class WP_Widget_Pages {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Links' ) ) {
	class WP_Widget_Links {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Search' ) ) {
	class WP_Widget_Search {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function form($instance) {;}
		public function update($new_instance, $old_instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Archives' ) ) {
	class WP_Widget_Archives {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Meta' ) ) {
	class WP_Widget_Meta {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Calendar' ) ) {
	class WP_Widget_Calendar {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Text' ) ) {
	class WP_Widget_Text {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Categories' ) ) {
	class WP_Widget_Categories {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Recent_Posts' ) ) {
	class WP_Widget_Recent_Posts {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function flush_widget_cache() {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Recent_Comments' ) ) {
	class WP_Widget_Recent_Comments {

		public function __construct() {;}
		public function recent_comments_style() {;}
		public function flush_widget_cache() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_RSS' ) ) {
	class WP_Widget_RSS {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

if( !class_exists( 'WP_Widget_Tag_Cloud' ) ) {
	class WP_Widget_Tag_Cloud {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}
		public function _get_current_taxonomy($instance) {;}

	}
}

if( !class_exists( 'WP_Nav_Menu_Widget' ) ) {
	class WP_Nav_Menu_Widget {

		public function __construct() {;}
		public function widget($args, $instance) {;}
		public function update($new_instance, $old_instance) {;}
		public function form($instance) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/rewrite.php */

if( !function_exists( 'add_rewrite_rule' ) ) { function add_rewrite_rule($regex, $redirect, $after = '') {;} }

if( !function_exists( 'add_rewrite_tag' ) ) { function add_rewrite_tag($tagname, $regex) {;} }

if( !function_exists( 'add_permastruct' ) ) { function add_permastruct($name, $struct, $with_front = '', $ep_mask = '') {;} }

if( !function_exists( 'add_feed' ) ) { function add_feed($feedname, $function) {;} }

if( !function_exists( 'flush_rewrite_rules' ) ) { function flush_rewrite_rules($hard = '') {;} }

if( !function_exists( 'add_rewrite_endpoint' ) ) { function add_rewrite_endpoint($name, $places) {;} }

if( !function_exists( '_wp_filter_taxonomy_base' ) ) { function _wp_filter_taxonomy_base($base) {;} }

if( !function_exists( 'url_to_postid' ) ) { function url_to_postid($url) {;} }

if( !class_exists( 'WP_Rewrite' ) ) {
	class WP_Rewrite {
		public $permalink_structure;
		public $use_trailing_slashes;
		public $author_base = '';
		public $author_structure;
		public $date_structure;
		public $page_structure;
		public $search_base = '';
		public $search_structure;
		public $comments_base = '';
		public $pagination_base = '';
		public $feed_base = '';
		public $comments_feed_structure;
		public $feed_structure;
		public $front;
		public $root = '';
		public $index = '';
		public $matches = '';
		public $rules;
		public $extra_rules = '';
		public $extra_rules_top = '';
		public $non_wp_rules = '';
		public $extra_permastructs = '';
		public $endpoints;
		public $use_verbose_rules = '';
		public $use_verbose_page_rules = '';
		public $rewritecode = '';
		public $rewritereplace = '';
		public $queryreplace = '';
		public $feeds = '';

		public function using_permalinks() {;}
		public function using_index_permalinks() {;}
		public function using_mod_rewrite_permalinks() {;}
		public function preg_index($number) {;}
		public function page_uri_index() {;}
		public function page_rewrite_rules() {;}
		public function get_date_permastruct() {;}
		public function get_year_permastruct() {;}
		public function get_month_permastruct() {;}
		public function get_day_permastruct() {;}
		public function get_category_permastruct() {;}
		public function get_tag_permastruct() {;}
		public function get_extra_permastruct($name) {;}
		public function get_author_permastruct() {;}
		public function get_search_permastruct() {;}
		public function get_page_permastruct() {;}
		public function get_feed_permastruct() {;}
		public function get_comment_feed_permastruct() {;}
		public function add_rewrite_tag($tag, $pattern, $query) {;}
		public function generate_rewrite_rules($permalink_structure, $ep_mask = '', $paged = '', $feed = '', $forcomments = '', $walk_dirs = '', $endpoints = '') {;}
		public function generate_rewrite_rule($permalink_structure, $walk_dirs = '') {;}
		public function rewrite_rules() {;}
		public function wp_rewrite_rules() {;}
		public function mod_rewrite_rules() {;}
		public function iis7_url_rewrite_rules($add_parent_tags = '') {;}
		public function add_rule($regex, $redirect, $after = '') {;}
		public function add_external_rule($regex, $redirect) {;}
		public function add_endpoint($name, $places) {;}
		public function add_permastruct($name, $struct, $with_front = '', $ep_mask = '') {;}
		public function flush_rules($hard = '') {;}
		public function init() {;}
		public function set_permalink_structure($permalink_structure) {;}
		public function set_category_base($category_base) {;}
		public function set_tag_base($tag_base) {;}
		public function __construct() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/post-template.php */

if( !function_exists( 'the_ID' ) ) { function the_ID() {;} }

if( !function_exists( 'get_the_ID' ) ) { function get_the_ID() {;} }

if( !function_exists( 'the_title' ) ) { function the_title($before = '', $after = '', $echo = '') {;} }

if( !function_exists( 'the_title_attribute' ) ) { function the_title_attribute($args = '') {;} }

if( !function_exists( 'get_the_title' ) ) { function get_the_title($id = '') {;} }

if( !function_exists( 'the_guid' ) ) { function the_guid($id = '') {;} }

if( !function_exists( 'get_the_guid' ) ) { function get_the_guid($id = '') {;} }

if( !function_exists( 'the_content' ) ) { function the_content($more_link_text = '', $stripteaser = '') {;} }

if( !function_exists( 'get_the_content' ) ) { function get_the_content($more_link_text = '', $stripteaser = '') {;} }

if( !function_exists( '_convert_urlencoded_to_entities' ) ) { function _convert_urlencoded_to_entities($match) {;} }

if( !function_exists( 'the_excerpt' ) ) { function the_excerpt() {;} }

if( !function_exists( 'get_the_excerpt' ) ) { function get_the_excerpt($deprecated = '') {;} }

if( !function_exists( 'has_excerpt' ) ) { function has_excerpt($id = '') {;} }

if( !function_exists( 'post_class' ) ) { function post_class($class = '', $post_id = '') {;} }

if( !function_exists( 'get_post_class' ) ) { function get_post_class($class = '', $post_id = '') {;} }

if( !function_exists( 'body_class' ) ) { function body_class($class = '') {;} }

if( !function_exists( 'get_body_class' ) ) { function get_body_class($class = '') {;} }

if( !function_exists( 'post_password_required' ) ) { function post_password_required($post = '') {;} }

if( !function_exists( 'sticky_class' ) ) { function sticky_class($post_id = '') {;} }

if( !function_exists( 'wp_link_pages' ) ) { function wp_link_pages($args = '') {;} }

if( !function_exists( '_wp_link_page' ) ) { function _wp_link_page($i) {;} }

if( !function_exists( 'post_custom' ) ) { function post_custom($key = '') {;} }

if( !function_exists( 'the_meta' ) ) { function the_meta() {;} }

if( !function_exists( 'wp_dropdown_pages' ) ) { function wp_dropdown_pages($args = '') {;} }

if( !function_exists( 'wp_list_pages' ) ) { function wp_list_pages($args = '') {;} }

if( !function_exists( 'wp_page_menu' ) ) { function wp_page_menu($args = '') {;} }

if( !function_exists( 'walk_page_tree' ) ) { function walk_page_tree($pages, $depth, $current_page, $r) {;} }

if( !function_exists( 'walk_page_dropdown_tree' ) ) { function walk_page_dropdown_tree() {;} }

if( !function_exists( 'the_attachment_link' ) ) { function the_attachment_link($id = '', $fullsize = '', $deprecated = '', $permalink = '') {;} }

if( !function_exists( 'wp_get_attachment_link' ) ) { function wp_get_attachment_link($id = '', $size = '', $permalink = '', $icon = '', $text = '') {;} }

if( !function_exists( 'prepend_attachment' ) ) { function prepend_attachment($content) {;} }

if( !function_exists( 'get_the_password_form' ) ) { function get_the_password_form() {;} }

if( !function_exists( 'is_page_template' ) ) { function is_page_template($template = '') {;} }

if( !function_exists( 'wp_post_revision_title' ) ) { function wp_post_revision_title($revision, $link = '') {;} }

if( !function_exists( 'wp_list_post_revisions' ) ) { function wp_list_post_revisions($post_id = '', $args = '') {;} }

if( !class_exists( 'Walker_Page' ) ) {
	class Walker_Page {
		public $tree_type = '';
		public $db_fields = '';

		public function start_lvl($output, $depth) {;}
		public function end_lvl($output, $depth) {;}
		public function start_el($output, $page, $depth, $args, $current_page) {;}
		public function end_el($output, $page, $depth) {;}

	}
}

if( !class_exists( 'Walker_PageDropdown' ) ) {
	class Walker_PageDropdown {
		public $tree_type = '';
		public $db_fields = '';

		public function start_el($output, $page, $depth, $args) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/version.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/comment-template.php */

if( !function_exists( 'get_comment_author' ) ) { function get_comment_author($comment_ID = '') {;} }

if( !function_exists( 'comment_author' ) ) { function comment_author($comment_ID = '') {;} }

if( !function_exists( 'get_comment_author_email' ) ) { function get_comment_author_email($comment_ID = '') {;} }

if( !function_exists( 'comment_author_email' ) ) { function comment_author_email($comment_ID = '') {;} }

if( !function_exists( 'comment_author_email_link' ) ) { function comment_author_email_link($linktext = '', $before = '', $after = '') {;} }

if( !function_exists( 'get_comment_author_email_link' ) ) { function get_comment_author_email_link($linktext = '', $before = '', $after = '') {;} }

if( !function_exists( 'get_comment_author_link' ) ) { function get_comment_author_link($comment_ID = '') {;} }

if( !function_exists( 'comment_author_link' ) ) { function comment_author_link($comment_ID = '') {;} }

if( !function_exists( 'get_comment_author_IP' ) ) { function get_comment_author_IP($comment_ID = '') {;} }

if( !function_exists( 'comment_author_IP' ) ) { function comment_author_IP($comment_ID = '') {;} }

if( !function_exists( 'get_comment_author_url' ) ) { function get_comment_author_url($comment_ID = '') {;} }

if( !function_exists( 'comment_author_url' ) ) { function comment_author_url($comment_ID = '') {;} }

if( !function_exists( 'get_comment_author_url_link' ) ) { function get_comment_author_url_link($linktext = '', $before = '', $after = '') {;} }

if( !function_exists( 'comment_author_url_link' ) ) { function comment_author_url_link($linktext = '', $before = '', $after = '') {;} }

if( !function_exists( 'comment_class' ) ) { function comment_class($class = '', $comment_id = '', $post_id = '', $echo = '') {;} }

if( !function_exists( 'get_comment_class' ) ) { function get_comment_class($class = '', $comment_id = '', $post_id = '') {;} }

if( !function_exists( 'get_comment_date' ) ) { function get_comment_date($d = '', $comment_ID = '') {;} }

if( !function_exists( 'comment_date' ) ) { function comment_date($d = '', $comment_ID = '') {;} }

if( !function_exists( 'get_comment_excerpt' ) ) { function get_comment_excerpt($comment_ID = '') {;} }

if( !function_exists( 'comment_excerpt' ) ) { function comment_excerpt($comment_ID = '') {;} }

if( !function_exists( 'get_comment_ID' ) ) { function get_comment_ID() {;} }

if( !function_exists( 'comment_ID' ) ) { function comment_ID() {;} }

if( !function_exists( 'get_comment_link' ) ) { function get_comment_link($comment = '', $args = '') {;} }

if( !function_exists( 'get_comments_link' ) ) { function get_comments_link($post_id = '') {;} }

if( !function_exists( 'comments_link' ) ) { function comments_link($deprecated = '', $deprecated_2 = '') {;} }

if( !function_exists( 'get_comments_number' ) ) { function get_comments_number($post_id = '') {;} }

if( !function_exists( 'comments_number' ) ) { function comments_number($zero = '', $one = '', $more = '', $deprecated = '') {;} }

if( !function_exists( 'get_comment_text' ) ) { function get_comment_text($comment_ID = '') {;} }

if( !function_exists( 'comment_text' ) ) { function comment_text($comment_ID = '') {;} }

if( !function_exists( 'get_comment_time' ) ) { function get_comment_time($d = '', $gmt = '', $translate = '') {;} }

if( !function_exists( 'comment_time' ) ) { function comment_time($d = '') {;} }

if( !function_exists( 'get_comment_type' ) ) { function get_comment_type($comment_ID = '') {;} }

if( !function_exists( 'comment_type' ) ) { function comment_type($commenttxt = '', $trackbacktxt = '', $pingbacktxt = '') {;} }

if( !function_exists( 'get_trackback_url' ) ) { function get_trackback_url() {;} }

if( !function_exists( 'trackback_url' ) ) { function trackback_url($deprecated_echo = '') {;} }

if( !function_exists( 'trackback_rdf' ) ) { function trackback_rdf($deprecated = '') {;} }

if( !function_exists( 'comments_open' ) ) { function comments_open($post_id = '') {;} }

if( !function_exists( 'pings_open' ) ) { function pings_open($post_id = '') {;} }

if( !function_exists( 'wp_comment_form_unfiltered_html_nonce' ) ) { function wp_comment_form_unfiltered_html_nonce() {;} }

if( !function_exists( 'comments_template' ) ) { function comments_template($file = '', $separate_comments = '') {;} }

if( !function_exists( 'comments_popup_script' ) ) { function comments_popup_script($width = '', $height = '', $file = '') {;} }

if( !function_exists( 'comments_popup_link' ) ) { function comments_popup_link($zero = '', $one = '', $more = '', $css_class = '', $none = '') {;} }

if( !function_exists( 'get_comment_reply_link' ) ) { function get_comment_reply_link($args = '', $comment = '', $post = '') {;} }

if( !function_exists( 'comment_reply_link' ) ) { function comment_reply_link($args = '', $comment = '', $post = '') {;} }

if( !function_exists( 'get_post_reply_link' ) ) { function get_post_reply_link($args = '', $post = '') {;} }

if( !function_exists( 'post_reply_link' ) ) { function post_reply_link($args = '', $post = '') {;} }

if( !function_exists( 'get_cancel_comment_reply_link' ) ) { function get_cancel_comment_reply_link($text = '') {;} }

if( !function_exists( 'cancel_comment_reply_link' ) ) { function cancel_comment_reply_link($text = '') {;} }

if( !function_exists( 'get_comment_id_fields' ) ) { function get_comment_id_fields($id = '') {;} }

if( !function_exists( 'comment_id_fields' ) ) { function comment_id_fields($id = '') {;} }

if( !function_exists( 'comment_form_title' ) ) { function comment_form_title($noreplytext = '', $replytext = '', $linktoparent = '') {;} }

if( !function_exists( 'wp_list_comments' ) ) { function wp_list_comments($args = '', $comments = '') {;} }

if( !function_exists( 'comment_form' ) ) { function comment_form($args = '', $post_id = '') {;} }

if( !class_exists( 'Walker_Comment' ) ) {
	class Walker_Comment {
		public $tree_type = '';
		public $db_fields = '';

		public function start_lvl($output, $depth, $args) {;}
		public function end_lvl($output, $depth, $args) {;}
		public function display_element($element, $children_elements, $max_depth, $depth = '', $args, $output) {;}
		public function start_el($output, $comment, $depth, $args) {;}
		public function end_el($output, $comment, $depth, $args) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/default-filters.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/ms-default-constants.php */

if( !function_exists( 'ms_upload_constants' ) ) { function ms_upload_constants() {;} }

if( !function_exists( 'ms_cookie_constants' ) ) { function ms_cookie_constants() {;} }

if( !function_exists( 'ms_file_constants' ) ) { function ms_file_constants() {;} }

if( !function_exists( 'ms_subdomain_constants' ) ) { function ms_subdomain_constants() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-smtp.php */

if( !class_exists( 'SMTP' ) ) {
	class SMTP {
		public $SMTP_PORT = '';
		public $CRLF = '';
		public $do_debug;
		public $do_verp = '';
		private $smtp_conn;
		private $error;
		private $helo_rply;

		public function __construct() {;}
		public function Connect($host, $port = '', $tval = '') {;}
		public function StartTLS() {;}
		public function Authenticate($username, $password) {;}
		public function Connected() {;}
		public function Close() {;}
		public function Data($msg_data) {;}
		public function Hello($host = '') {;}
		private function SendHello($hello, $host) {;}
		public function Mail($from) {;}
		public function Quit($close_on_error = '') {;}
		public function Recipient($to) {;}
		public function Reset() {;}
		public function SendAndMail($from) {;}
		public function Turn() {;}
		public function getError() {;}
		private function get_lines() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-snoopy.php */

if( !class_exists( 'Snoopy' ) ) {
	class Snoopy {
		public $host = '';
		public $port = '';
		public $proxy_host = '';
		public $proxy_port = '';
		public $proxy_user = '';
		public $proxy_pass = '';
		public $agent = '';
		public $referer = '';
		public $cookies = '';
		public $rawheaders = '';
		public $maxredirs = '';
		public $lastredirectaddr = '';
		public $offsiteok = '';
		public $maxframes = '';
		public $expandlinks = '';
		public $passcookies = '';
		public $user = '';
		public $pass = '';
		public $accept = '';
		public $results = '';
		public $error = '';
		public $response_code = '';
		public $headers = '';
		public $maxlength = '';
		public $read_timeout = '';
		public $timed_out = '';
		public $status = '';
		public $temp_dir = '';
		public $curl_path = '';
		public $_maxlinelen = '';
		public $_httpmethod = '';
		public $_httpversion = '';
		public $_submit_method = '';
		public $_submit_type = '';
		public $_mime_boundary = '';
		public $_redirectaddr = '';
		public $_redirectdepth = '';
		public $_frameurls = '';
		public $_framedepth = '';
		public $_isproxy = '';
		public $_fp_timeout = '';

		public function fetch($URI) {;}
		public function submit($URI, $formvars = '', $formfiles = '') {;}
		public function fetchlinks($URI) {;}
		public function fetchform($URI) {;}
		public function fetchtext($URI) {;}
		public function submitlinks($URI, $formvars = '', $formfiles = '') {;}
		public function submittext($URI, $formvars = '', $formfiles = '') {;}
		public function set_submit_multipart() {;}
		public function set_submit_normal() {;}
		public function _striplinks($document) {;}
		public function _stripform($document) {;}
		public function _striptext($document) {;}
		public function _expandlinks($links, $URI) {;}
		public function _httprequest($url, $fp, $URI, $http_method, $content_type = '', $body = '') {;}
		public function _httpsrequest($url, $URI, $http_method, $content_type = '', $body = '') {;}
		public function setcookies() {;}
		public function _check_timeout($fp) {;}
		public function _connect($fp) {;}
		public function _disconnect($fp) {;}
		public function _prepare_post_body($formvars, $formfiles) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/feed-atom-comments.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/media.php */

if( !function_exists( 'image_constrain_size_for_editor' ) ) { function image_constrain_size_for_editor($width, $height, $size = '') {;} }

if( !function_exists( 'image_hwstring' ) ) { function image_hwstring($width, $height) {;} }

if( !function_exists( 'image_downsize' ) ) { function image_downsize($id, $size = '') {;} }

if( !function_exists( 'add_image_size' ) ) { function add_image_size($name, $width = '', $height = '', $crop = '') {;} }

if( !function_exists( 'set_post_thumbnail_size' ) ) { function set_post_thumbnail_size($width = '', $height = '', $crop = '') {;} }

if( !function_exists( 'get_image_tag' ) ) { function get_image_tag($id, $alt, $title, $align, $size = '') {;} }

if( !function_exists( 'wp_load_image' ) ) { function wp_load_image($file) {;} }

if( !function_exists( 'wp_constrain_dimensions' ) ) { function wp_constrain_dimensions($current_width, $current_height, $max_width = '', $max_height = '') {;} }

if( !function_exists( 'image_resize_dimensions' ) ) { function image_resize_dimensions($orig_w, $orig_h, $dest_w, $dest_h, $crop = '') {;} }

if( !function_exists( 'image_resize' ) ) { function image_resize($file, $max_w, $max_h, $crop = '', $suffix = '', $dest_path = '', $jpeg_quality = '') {;} }

if( !function_exists( 'image_make_intermediate_size' ) ) { function image_make_intermediate_size($file, $width, $height, $crop = '') {;} }

if( !function_exists( 'image_get_intermediate_size' ) ) { function image_get_intermediate_size($post_id, $size = '') {;} }

if( !function_exists( 'get_intermediate_image_sizes' ) ) { function get_intermediate_image_sizes() {;} }

if( !function_exists( 'wp_get_attachment_image_src' ) ) { function wp_get_attachment_image_src($attachment_id, $size = '', $icon = '') {;} }

if( !function_exists( 'wp_get_attachment_image' ) ) { function wp_get_attachment_image($attachment_id, $size = '', $icon = '', $attr = '') {;} }

if( !function_exists( '_wp_post_thumbnail_class_filter' ) ) { function _wp_post_thumbnail_class_filter($attr) {;} }

if( !function_exists( '_wp_post_thumbnail_class_filter_add' ) ) { function _wp_post_thumbnail_class_filter_add($attr) {;} }

if( !function_exists( '_wp_post_thumbnail_class_filter_remove' ) ) { function _wp_post_thumbnail_class_filter_remove($attr) {;} }

if( !function_exists( 'img_caption_shortcode' ) ) { function img_caption_shortcode($attr, $content = '') {;} }

if( !function_exists( 'gallery_shortcode' ) ) { function gallery_shortcode($attr) {;} }

if( !function_exists( 'previous_image_link' ) ) { function previous_image_link($size = '', $text = '') {;} }

if( !function_exists( 'next_image_link' ) ) { function next_image_link($size = '', $text = '') {;} }

if( !function_exists( 'adjacent_image_link' ) ) { function adjacent_image_link($prev = '', $size = '', $text = '') {;} }

if( !function_exists( 'get_attachment_taxonomies' ) ) { function get_attachment_taxonomies($attachment) {;} }

if( !function_exists( 'gd_edit_image_support' ) ) { function gd_edit_image_support($mime_type) {;} }

if( !function_exists( 'wp_imagecreatetruecolor' ) ) { function wp_imagecreatetruecolor($width, $height) {;} }

if( !function_exists( 'wp_embed_register_handler' ) ) { function wp_embed_register_handler($id, $regex, $callback, $priority = '') {;} }

if( !function_exists( 'wp_embed_unregister_handler' ) ) { function wp_embed_unregister_handler($id, $priority = '') {;} }

if( !function_exists( 'wp_embed_defaults' ) ) { function wp_embed_defaults() {;} }

if( !function_exists( 'wp_expand_dimensions' ) ) { function wp_expand_dimensions($example_width, $example_height, $max_width, $max_height) {;} }

if( !function_exists( 'wp_oembed_get' ) ) { function wp_oembed_get($url, $args = '') {;} }

if( !function_exists( 'wp_oembed_add_provider' ) ) { function wp_oembed_add_provider($format, $provider, $regex = '') {;} }

if( !function_exists( 'wp_maybe_load_embeds' ) ) { function wp_maybe_load_embeds() {;} }

if( !function_exists( 'wp_embed_handler_googlevideo' ) ) { function wp_embed_handler_googlevideo($matches, $attr, $url, $rawattr) {;} }

if( !class_exists( 'WP_Embed' ) ) {
	class WP_Embed {
		public $handlers = '';
		public $post_ID;
		public $usecache = '';
		public $linkifunknown = '';

		public function __construct() {;}
		public function run_shortcode($content) {;}
		public function maybe_run_ajax_cache() {;}
		public function register_handler($id, $regex, $callback, $priority = '') {;}
		public function unregister_handler($id, $priority = '') {;}
		public function shortcode($attr, $url = '') {;}
		public function delete_oembed_caches($post_ID) {;}
		public function cache_oembed($post_ID) {;}
		public function autoembed($content) {;}
		public function autoembed_callback($match) {;}
		public function maybe_make_link($url) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/feed.php */

if( !function_exists( 'get_bloginfo_rss' ) ) { function get_bloginfo_rss($show = '') {;} }

if( !function_exists( 'bloginfo_rss' ) ) { function bloginfo_rss($show = '') {;} }

if( !function_exists( 'get_default_feed' ) ) { function get_default_feed() {;} }

if( !function_exists( 'get_wp_title_rss' ) ) { function get_wp_title_rss($sep = '') {;} }

if( !function_exists( 'wp_title_rss' ) ) { function wp_title_rss($sep = '') {;} }

if( !function_exists( 'get_the_title_rss' ) ) { function get_the_title_rss() {;} }

if( !function_exists( 'the_title_rss' ) ) { function the_title_rss() {;} }

if( !function_exists( 'get_the_content_feed' ) ) { function get_the_content_feed($feed_type = '') {;} }

if( !function_exists( 'the_content_feed' ) ) { function the_content_feed($feed_type = '') {;} }

if( !function_exists( 'the_excerpt_rss' ) ) { function the_excerpt_rss() {;} }

if( !function_exists( 'the_permalink_rss' ) ) { function the_permalink_rss() {;} }

if( !function_exists( 'comments_link_feed' ) ) { function comments_link_feed() {;} }

if( !function_exists( 'comment_guid' ) ) { function comment_guid($comment_id = '') {;} }

if( !function_exists( 'get_comment_guid' ) ) { function get_comment_guid($comment_id = '') {;} }

if( !function_exists( 'comment_link' ) ) { function comment_link() {;} }

if( !function_exists( 'get_comment_author_rss' ) ) { function get_comment_author_rss() {;} }

if( !function_exists( 'comment_author_rss' ) ) { function comment_author_rss() {;} }

if( !function_exists( 'comment_text_rss' ) ) { function comment_text_rss() {;} }

if( !function_exists( 'get_the_category_rss' ) ) { function get_the_category_rss($type = '') {;} }

if( !function_exists( 'the_category_rss' ) ) { function the_category_rss($type = '') {;} }

if( !function_exists( 'html_type_rss' ) ) { function html_type_rss() {;} }

if( !function_exists( 'rss_enclosure' ) ) { function rss_enclosure() {;} }

if( !function_exists( 'atom_enclosure' ) ) { function atom_enclosure() {;} }

if( !function_exists( 'prep_atom_text_construct' ) ) { function prep_atom_text_construct($data) {;} }

if( !function_exists( 'self_link' ) ) { function self_link() {;} }

if( !function_exists( 'feed_content_type' ) ) { function feed_content_type($type = '') {;} }

if( !function_exists( 'fetch_feed' ) ) { function fetch_feed($url) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/ms-files.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-json.php */

if( !function_exists( 'Services_JSON_Error' ) ) { function Services_JSON_Error($message = '', $code = '', $mode = '', $options = '', $userinfo = '') {;} }

if( !class_exists( 'Services_JSON' ) ) {
	class Services_JSON {

		public function Services_JSON($use = '') {;}
		public function utf162utf8($utf16) {;}
		public function utf82utf16($utf8) {;}
		public function encode($var) {;}
		public function encodeUnsafe($var) {;}
		public function _encode($var) {;}
		public function name_value($name, $value) {;}
		public function reduce_string($str) {;}
		public function decode($str) {;}
		public function isError($data, $code = '') {;}

	}
}

if( !class_exists( 'Services_JSON_Error' ) ) {
	class Services_JSON_Error {

		public function Services_JSON_Error($message = '', $code = '', $mode = '', $options = '', $userinfo = '') {;}

	}
}

if( !class_exists( 'Services_JSON_Error' ) ) {
	class Services_JSON_Error {


	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/locale.php */

if( !function_exists( 'is_rtl' ) ) { function is_rtl() {;} }

if( !class_exists( 'WP_Locale' ) ) {
	class WP_Locale {
		public $weekday;
		public $weekday_initial;
		public $weekday_abbrev;
		public $month;
		public $month_abbrev;
		public $meridiem;
		public $text_direction = '';
		public $locale_vars = '';

		public function init() {;}
		public function get_weekday($weekday_number) {;}
		public function get_weekday_initial($weekday_name) {;}
		public function get_weekday_abbrev($weekday_name) {;}
		public function get_month($month_number) {;}
		public function get_month_abbrev($month_name) {;}
		public function get_meridiem($meridiem) {;}
		public function register_globals() {;}
		public function __construct() {;}
		public function is_rtl() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/admin-bar.php */

if( !function_exists( '_wp_admin_bar_init' ) ) { function _wp_admin_bar_init() {;} }

if( !function_exists( 'wp_admin_bar_render' ) ) { function wp_admin_bar_render() {;} }

if( !function_exists( 'wp_admin_bar_my_account_menu' ) ) { function wp_admin_bar_my_account_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_dashboard_view_site_menu' ) ) { function wp_admin_bar_dashboard_view_site_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_my_sites_menu' ) ) { function wp_admin_bar_my_sites_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_shortlink_menu' ) ) { function wp_admin_bar_shortlink_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_edit_menu' ) ) { function wp_admin_bar_edit_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_new_content_menu' ) ) { function wp_admin_bar_new_content_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_comments_menu' ) ) { function wp_admin_bar_comments_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_appearance_menu' ) ) { function wp_admin_bar_appearance_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_updates_menu' ) ) { function wp_admin_bar_updates_menu($wp_admin_bar) {;} }

if( !function_exists( 'wp_admin_bar_header' ) ) { function wp_admin_bar_header() {;} }

if( !function_exists( '_admin_bar_bump_cb' ) ) { function _admin_bar_bump_cb() {;} }

if( !function_exists( 'show_admin_bar' ) ) { function show_admin_bar($show) {;} }

if( !function_exists( 'is_admin_bar_showing' ) ) { function is_admin_bar_showing() {;} }

if( !function_exists( '_get_admin_bar_pref' ) ) { function _get_admin_bar_pref($context, $user = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/pluggable-deprecated.php */

if( !function_exists( 'set_current_user' ) ) { function set_current_user($id, $name = '') {;} }

if( !function_exists( 'wp_setcookie' ) ) { function wp_setcookie($username, $password = '', $already_md5 = '', $home = '', $siteurl = '', $remember = '') {;} }

if( !function_exists( 'wp_clearcookie' ) ) { function wp_clearcookie() {;} }

if( !function_exists( 'wp_get_cookie_login' ) ) { function wp_get_cookie_login() {;} }

if( !function_exists( 'wp_login' ) ) { function wp_login($username, $password, $deprecated = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-http.php */

if( !class_exists( 'WP_Http' ) ) {
	class WP_Http {

		public function request($url, $args = '') {;}
		public function _get_first_available_transport($args, $url = '') {;}
		private function _dispatch_request($url, $args) {;}
		public function post($url, $args = '') {;}
		public function get($url, $args = '') {;}
		public function head($url, $args = '') {;}
		public function processResponse($strResponse) {;}
		public function processHeaders($headers) {;}
		public function buildCookieHeader($r) {;}
		public function chunkTransferDecode($body) {;}
		public function block_request($uri) {;}

	}
}

if( !class_exists( 'WP_Http_Fsockopen' ) ) {
	class WP_Http_Fsockopen {

		public function request($url, $args = '') {;}
		public function test($args = '') {;}

	}
}

if( !class_exists( 'WP_Http_Streams' ) ) {
	class WP_Http_Streams {

		public function request($url, $args = '') {;}
		public function test($args = '') {;}

	}
}

if( !class_exists( 'WP_Http_Curl' ) ) {
	class WP_Http_Curl {
		private $headers = '';

		public function request($url, $args = '') {;}
		private function stream_headers($handle, $headers) {;}
		public function test($args = '') {;}

	}
}

if( !class_exists( 'WP_HTTP_Proxy' ) ) {
	class WP_HTTP_Proxy {

		public function is_enabled() {;}
		public function use_authentication() {;}
		public function host() {;}
		public function port() {;}
		public function username() {;}
		public function password() {;}
		public function authentication() {;}
		public function authentication_header() {;}
		public function send_through_proxy($uri) {;}

	}
}

if( !class_exists( 'WP_Http_Cookie' ) ) {
	class WP_Http_Cookie {
		public $name;
		public $value;
		public $expires;
		public $path;
		public $domain;

		public function __construct($data) {;}
		public function test($url) {;}
		public function getHeaderValue() {;}
		public function getFullHeader() {;}

	}
}

if( !class_exists( 'WP_Http_Encoding' ) ) {
	class WP_Http_Encoding {

		public function compress($raw, $level = '', $supports = '') {;}
		public function decompress($compressed, $length = '') {;}
		public function compatible_gzinflate($gzData) {;}
		public function accept_encoding() {;}
		public function content_encoding() {;}
		public function should_decode($headers) {;}
		public function is_available() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-pop3.php */

if( !function_exists( 'stripos' ) ) { function stripos($haystack, $needle) {;} }

if( !class_exists( 'POP3' ) ) {
	class POP3 {
		public $ERROR = '';
		public $TIMEOUT = '';
		public $COUNT = '';
		public $BUFFER = '';
		public $FP = '';
		public $MAILSERVER = '';
		public $DEBUG = '';
		public $BANNER = '';
		public $ALLOWAPOP = '';

		public function POP3($server = '', $timeout = '') {;}
		public function update_timer() {;}
		public function connect($server, $port = '') {;}
		public function user($user = '') {;}
		public function pass($pass = '') {;}
		public function apop($login, $pass) {;}
		public function login($login = '', $pass = '') {;}
		public function top($msgNum, $numLines = '') {;}
		public function pop_list($msgNum = '') {;}
		public function get($msgNum) {;}
		public function last($type = '') {;}
		public function reset() {;}
		public function send_cmd($cmd = '') {;}
		public function quit() {;}
		public function popstat() {;}
		public function uidl($msgNum = '') {;}
		public function delete($msgNum = '') {;}
		public function is_ok($cmd = '') {;}
		public function strip_clf($text = '') {;}
		public function parse_banner($server_text) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-oembed.php */

if( !function_exists( '_wp_oembed_get_object' ) ) { function _wp_oembed_get_object() {;} }

if( !class_exists( 'WP_oEmbed' ) ) {
	class WP_oEmbed {
		public $providers = '';

		public function __construct() {;}
		public function get_html($url, $args = '') {;}
		public function discover($url) {;}
		public function fetch($provider, $url, $args = '') {;}
		public function _fetch_with_format($provider_url_with_args, $format) {;}
		public function _parse_json($response_body) {;}
		public function _parse_xml($response_body) {;}
		public function data2html($data, $url) {;}
		public function _strip_newlines($html, $data, $url) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/atomlib.php */

if( !class_exists( 'AtomFeed' ) ) {
	class AtomFeed {
		public $links = '';
		public $categories = '';
		public $entries = '';


	}
}

if( !class_exists( 'AtomEntry' ) ) {
	class AtomEntry {
		public $links = '';
		public $categories = '';


	}
}

if( !class_exists( 'AtomParser' ) ) {
	class AtomParser {
		public $NS = '';
		public $ATOM_CONTENT_ELEMENTS = '';
		public $ATOM_SIMPLE_ELEMENTS = '';
		public $debug = '';
		public $depth = '';
		public $indent = '';
		public $in_content;
		public $ns_contexts = '';
		public $ns_decls = '';
		public $content_ns_decls = '';
		public $content_ns_contexts = '';
		public $is_xhtml = '';
		public $is_html = '';
		public $is_text = '';
		public $skipped_div = '';
		public $FILE = '';
		public $feed;
		public $current;

		public function AtomParser() {;}
		public function _p($msg) {;}
		public function error_handler($log_level, $log_text, $error_file, $error_line) {;}
		public function parse() {;}
		public function start_element($parser, $name, $attrs) {;}
		public function end_element($parser, $name) {;}
		public function start_ns($parser, $prefix, $uri) {;}
		public function end_ns($parser, $prefix) {;}
		public function cdata($parser, $data) {;}
		public function _default($parser, $data) {;}
		public function ns_to_prefix($qname, $attr = '') {;}
		public function is_declared_content_ns($new_mapping) {;}
		public function xml_escape($string) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/general-template.php */

if( !function_exists( 'get_header' ) ) { function get_header($name = '') {;} }

if( !function_exists( 'get_footer' ) ) { function get_footer($name = '') {;} }

if( !function_exists( 'get_sidebar' ) ) { function get_sidebar($name = '') {;} }

if( !function_exists( 'get_template_part' ) ) { function get_template_part($slug, $name = '') {;} }

if( !function_exists( 'get_search_form' ) ) { function get_search_form($echo = '') {;} }

if( !function_exists( 'wp_loginout' ) ) { function wp_loginout($redirect = '', $echo = '') {;} }

if( !function_exists( 'wp_logout_url' ) ) { function wp_logout_url($redirect = '') {;} }

if( !function_exists( 'wp_login_url' ) ) { function wp_login_url($redirect = '', $force_reauth = '') {;} }

if( !function_exists( 'wp_login_form' ) ) { function wp_login_form($args = '') {;} }

if( !function_exists( 'wp_lostpassword_url' ) ) { function wp_lostpassword_url($redirect = '') {;} }

if( !function_exists( 'wp_register' ) ) { function wp_register($before = '', $after = '', $echo = '') {;} }

if( !function_exists( 'wp_meta' ) ) { function wp_meta() {;} }

if( !function_exists( 'bloginfo' ) ) { function bloginfo($show = '') {;} }

if( !function_exists( 'get_bloginfo' ) ) { function get_bloginfo($show = '', $filter = '') {;} }

if( !function_exists( 'get_current_blog_id' ) ) { function get_current_blog_id() {;} }

if( !function_exists( 'wp_title' ) ) { function wp_title($sep = '', $display = '', $seplocation = '') {;} }

if( !function_exists( 'single_post_title' ) ) { function single_post_title($prefix = '', $display = '') {;} }

if( !function_exists( 'post_type_archive_title' ) ) { function post_type_archive_title($prefix = '', $display = '') {;} }

if( !function_exists( 'single_cat_title' ) ) { function single_cat_title($prefix = '', $display = '') {;} }

if( !function_exists( 'single_tag_title' ) ) { function single_tag_title($prefix = '', $display = '') {;} }

if( !function_exists( 'single_term_title' ) ) { function single_term_title($prefix = '', $display = '') {;} }

if( !function_exists( 'single_month_title' ) ) { function single_month_title($prefix = '', $display = '') {;} }

if( !function_exists( 'get_archives_link' ) ) { function get_archives_link($url, $text, $format = '', $before = '', $after = '') {;} }

if( !function_exists( 'wp_get_archives' ) ) { function wp_get_archives($args = '') {;} }

if( !function_exists( 'calendar_week_mod' ) ) { function calendar_week_mod($num) {;} }

if( !function_exists( 'get_calendar' ) ) { function get_calendar($initial = '', $echo = '') {;} }

if( !function_exists( 'delete_get_calendar_cache' ) ) { function delete_get_calendar_cache() {;} }

if( !function_exists( 'allowed_tags' ) ) { function allowed_tags() {;} }

if( !function_exists( 'the_date_xml' ) ) { function the_date_xml() {;} }

if( !function_exists( 'the_date' ) ) { function the_date($d = '', $before = '', $after = '', $echo = '') {;} }

if( !function_exists( 'get_the_date' ) ) { function get_the_date($d = '') {;} }

if( !function_exists( 'the_modified_date' ) ) { function the_modified_date($d = '', $before = '', $after = '', $echo = '') {;} }

if( !function_exists( 'get_the_modified_date' ) ) { function get_the_modified_date($d = '') {;} }

if( !function_exists( 'the_time' ) ) { function the_time($d = '') {;} }

if( !function_exists( 'get_the_time' ) ) { function get_the_time($d = '', $post = '') {;} }

if( !function_exists( 'get_post_time' ) ) { function get_post_time($d = '', $gmt = '', $post = '', $translate = '') {;} }

if( !function_exists( 'the_modified_time' ) ) { function the_modified_time($d = '') {;} }

if( !function_exists( 'get_the_modified_time' ) ) { function get_the_modified_time($d = '') {;} }

if( !function_exists( 'get_post_modified_time' ) ) { function get_post_modified_time($d = '', $gmt = '', $post = '', $translate = '') {;} }

if( !function_exists( 'the_weekday' ) ) { function the_weekday() {;} }

if( !function_exists( 'the_weekday_date' ) ) { function the_weekday_date($before = '', $after = '') {;} }

if( !function_exists( 'wp_head' ) ) { function wp_head() {;} }

if( !function_exists( 'wp_footer' ) ) { function wp_footer() {;} }

if( !function_exists( 'feed_links' ) ) { function feed_links($args = '') {;} }

if( !function_exists( 'feed_links_extra' ) ) { function feed_links_extra($args = '') {;} }

if( !function_exists( 'rsd_link' ) ) { function rsd_link() {;} }

if( !function_exists( 'wlwmanifest_link' ) ) { function wlwmanifest_link() {;} }

if( !function_exists( 'noindex' ) ) { function noindex() {;} }

if( !function_exists( 'rich_edit_exists' ) ) { function rich_edit_exists() {;} }

if( !function_exists( 'user_can_richedit' ) ) { function user_can_richedit() {;} }

if( !function_exists( 'wp_default_editor' ) ) { function wp_default_editor() {;} }

if( !function_exists( 'the_editor' ) ) { function the_editor($content, $id = '', $prev_id = '', $media_buttons = '', $tab_index = '', $extended = '') {;} }

if( !function_exists( 'get_search_query' ) ) { function get_search_query($escaped = '') {;} }

if( !function_exists( 'the_search_query' ) ) { function the_search_query() {;} }

if( !function_exists( 'language_attributes' ) ) { function language_attributes($doctype = '') {;} }

if( !function_exists( 'paginate_links' ) ) { function paginate_links($args = '') {;} }

if( !function_exists( 'wp_admin_css_color' ) ) { function wp_admin_css_color($key, $name, $url, $colors = '') {;} }

if( !function_exists( 'register_admin_color_schemes' ) ) { function register_admin_color_schemes() {;} }

if( !function_exists( 'wp_admin_css_uri' ) ) { function wp_admin_css_uri($file = '') {;} }

if( !function_exists( 'wp_admin_css' ) ) { function wp_admin_css($file = '', $force_echo = '') {;} }

if( !function_exists( 'add_thickbox' ) ) { function add_thickbox() {;} }

if( !function_exists( 'wp_generator' ) ) { function wp_generator() {;} }

if( !function_exists( 'the_generator' ) ) { function the_generator($type) {;} }

if( !function_exists( 'get_the_generator' ) ) { function get_the_generator($type = '') {;} }

if( !function_exists( 'checked' ) ) { function checked($checked, $current = '', $echo = '') {;} }

if( !function_exists( 'selected' ) ) { function selected($selected, $current = '', $echo = '') {;} }

if( !function_exists( 'disabled' ) ) { function disabled($disabled, $current = '', $echo = '') {;} }

if( !function_exists( '__checked_selected_helper' ) ) { function __checked_selected_helper($helper, $current, $echo, $type) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/class-phpass.php */

if( !class_exists( 'PasswordHash' ) ) {
	class PasswordHash {
		public $itoa64;
		public $iteration_count_log2;
		public $portable_hashes;
		public $random_state;

		public function PasswordHash($iteration_count_log2, $portable_hashes) {;}
		public function get_random_bytes($count) {;}
		public function encode64($input, $count) {;}
		public function gensalt_private($input) {;}
		public function crypt_private($password, $setting) {;}
		public function gensalt_extended($input) {;}
		public function gensalt_blowfish($input) {;}
		public function HashPassword($password) {;}
		public function CheckPassword($password, $stored_hash) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-includes/functions.wp-scripts.php */

if( !function_exists( 'wp_print_scripts' ) ) { function wp_print_scripts($handles = '') {;} }

if( !function_exists( 'wp_register_script' ) ) { function wp_register_script($handle, $src, $deps = '', $ver = '', $in_footer = '') {;} }

if( !function_exists( 'wp_localize_script' ) ) { function wp_localize_script($handle, $object_name, $l10n) {;} }

if( !function_exists( 'wp_deregister_script' ) ) { function wp_deregister_script($handle) {;} }

if( !function_exists( 'wp_enqueue_script' ) ) { function wp_enqueue_script($handle, $src = '', $deps = '', $ver = '', $in_footer = '') {;} }

if( !function_exists( 'wp_dequeue_script' ) ) { function wp_dequeue_script($handle) {;} }

if( !function_exists( 'wp_script_is' ) ) { function wp_script_is($handle, $list = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/upgrade-functions.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/update.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/edit.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/js/revisions-js.php */

if( !function_exists( 'dvortr' ) ) { function dvortr($str) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/edit-tag-form.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/ms-themes.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/user/index-extra.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/user/menu.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/user/index.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/user/profile.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/user/admin.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/user/user-edit.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/export.php */

if( !function_exists( 'add_js' ) ) { function add_js() {;} }

if( !function_exists( 'export_date_options' ) ) { function export_date_options() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/widgets.php */

if( !function_exists( 'retrieve_widgets' ) ) { function retrieve_widgets() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/plugins.php */

if( !function_exists( 'plugin_sandbox_scrape' ) ) { function plugin_sandbox_scrape($plugin) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/users.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/moderation.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/async-upload.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/ms-upgrade-network.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/maint/repair.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/nav-menus.php */

if( !function_exists( 'wp_nav_menu_max_depth' ) ) { function wp_nav_menu_max_depth() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/media-new.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/ms-users.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/freedoms.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/update.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/edit.php */

if( !function_exists( 'confirm_delete_users' ) ) { function confirm_delete_users($users) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/plugins.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/users.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/site-settings.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/sites.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/index-extra.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/themes.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/theme-editor.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/setup.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/user-new.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/menu.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/site-users.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/index.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/plugin-install.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/profile.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/update-core.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/site-info.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/settings.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/admin.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/site-themes.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/user-edit.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/site-new.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/upgrade.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/plugin-editor.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network/theme-install.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/index-extra.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/themes.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/admin-header.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/edit-link-form.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/load-styles.php */

if( !function_exists( '__' ) ) { function __() {;} }

if( !function_exists( '_x' ) ) { function _x() {;} }

if( !function_exists( 'add_filter' ) ) { function add_filter() {;} }

if( !function_exists( 'esc_attr' ) ) { function esc_attr() {;} }

if( !function_exists( 'apply_filters' ) ) { function apply_filters() {;} }

if( !function_exists( 'get_option' ) ) { function get_option() {;} }

if( !function_exists( 'is_lighttpd_before_150' ) ) { function is_lighttpd_before_150() {;} }

if( !function_exists( 'add_action' ) ) { function add_action() {;} }

if( !function_exists( 'do_action_ref_array' ) ) { function do_action_ref_array() {;} }

if( !function_exists( 'get_bloginfo' ) ) { function get_bloginfo() {;} }

if( !function_exists( 'is_admin' ) ) { function is_admin() {;} }

if( !function_exists( 'site_url' ) ) { function site_url() {;} }

if( !function_exists( 'admin_url' ) ) { function admin_url() {;} }

if( !function_exists( 'wp_guess_url' ) ) { function wp_guess_url() {;} }

if( !function_exists( 'get_file' ) ) { function get_file($path) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/link.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options-general.php */

if( !function_exists( 'add_js' ) ) { function add_js() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/comment.php */

if( !function_exists( 'comment_footer_die' ) ) { function comment_footer_die($msg) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/theme-editor.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/revision.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/install-helper.php */

if( !function_exists( 'maybe_create_table' ) ) { function maybe_create_table($table_name, $create_ddl) {;} }

if( !function_exists( 'maybe_add_column' ) ) { function maybe_add_column($table_name, $column_name, $create_ddl) {;} }

if( !function_exists( 'maybe_drop_column' ) ) { function maybe_drop_column($table_name, $column_name, $drop_ddl) {;} }

if( !function_exists( 'check_column' ) ) { function check_column($table_name, $col_name, $col_type, $is_null = '', $key = '', $default = '', $extra = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/setup-config.php */

if( !function_exists( 'display_header' ) ) { function display_header() {;} }

if( !function_exists( 'get_bloginfo' ) ) { function get_bloginfo() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/link-parse-opml.php */

if( !function_exists( 'startElement' ) ) { function startElement($parser, $tagName, $attrs) {;} }

if( !function_exists( 'endElement' ) ) { function endElement($parser, $tagName) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options-head.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/user-new.php */

if( !function_exists( 'admin_created_user_email' ) ) { function admin_created_user_email($text) {;} }

if( !function_exists( 'admin_created_user_subject' ) ) { function admin_created_user_subject($text) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/menu.php */

if( !function_exists( '_add_themes_utility_last' ) ) { function _add_themes_utility_last() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/index.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/menu-header.php */

if( !function_exists( '_wp_menu_output' ) ) { function _wp_menu_output($menu, $submenu, $submenu_as_parent = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/network.php */

if( !function_exists( 'network_domain_check' ) ) { function network_domain_check() {;} }

if( !function_exists( 'allow_subdomain_install' ) ) { function allow_subdomain_install() {;} }

if( !function_exists( 'allow_subdirectory_install' ) ) { function allow_subdirectory_install() {;} }

if( !function_exists( 'get_clean_basedomain' ) ) { function get_clean_basedomain() {;} }

if( !function_exists( 'network_step1' ) ) { function network_step1($errors = '') {;} }

if( !function_exists( 'network_step2' ) ) { function network_step2($errors = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/plugin-install.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/profile.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/upload.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-plugin-install-list-table.php */

if( !class_exists( 'WP_Plugin_Install_List_Table' ) ) {
	class WP_Plugin_Install_List_Table {

		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function no_items() {;}
		public function get_views() {;}
		public function display_tablenav($which) {;}
		public function get_table_classes() {;}
		public function get_columns() {;}
		public function display_rows() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/taxonomy.php */

if( !function_exists( 'category_exists' ) ) { function category_exists($cat_name, $parent = '') {;} }

if( !function_exists( 'get_category_to_edit' ) ) { function get_category_to_edit($id) {;} }

if( !function_exists( 'wp_create_category' ) ) { function wp_create_category($cat_name, $parent = '') {;} }

if( !function_exists( 'wp_create_categories' ) ) { function wp_create_categories($categories, $post_id = '') {;} }

if( !function_exists( 'wp_insert_category' ) ) { function wp_insert_category($catarr, $wp_error = '') {;} }

if( !function_exists( 'wp_update_category' ) ) { function wp_update_category($catarr) {;} }

if( !function_exists( 'tag_exists' ) ) { function tag_exists($tag_name) {;} }

if( !function_exists( 'wp_create_tag' ) ) { function wp_create_tag($tag_name) {;} }

if( !function_exists( 'get_tags_to_edit' ) ) { function get_tags_to_edit($post_id, $taxonomy = '') {;} }

if( !function_exists( 'get_terms_to_edit' ) ) { function get_terms_to_edit($post_id, $taxonomy = '') {;} }

if( !function_exists( 'wp_create_term' ) ) { function wp_create_term($tag_name, $taxonomy = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-terms-list-table.php */

if( !class_exists( 'WP_Terms_List_Table' ) ) {
	class WP_Terms_List_Table {
		public $callback_args;

		public function __construct() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function has_items() {;}
		public function get_bulk_actions() {;}
		public function current_action() {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function display_rows_or_placeholder() {;}
		public function _rows($taxonomy, $terms, $children, $start = '', $per_page = '', $count, $parent = '', $level = '') {;}
		public function single_row($tag, $level = '') {;}
		public function column_cb($tag) {;}
		public function column_name($tag) {;}
		public function column_description($tag) {;}
		public function column_slug($tag) {;}
		public function column_posts($tag) {;}
		public function column_links($tag) {;}
		public function column_default($tag, $column_name) {;}
		public function inline_edit() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-ftp-pure.php */

if( !class_exists( 'ftp' ) ) {
	class ftp {

		public function ftp($verb = '', $le = '') {;}
		public function __construct($verb = '', $le = '') {;}
		public function _settimeout($sock) {;}
		public function _connect($host, $port) {;}
		public function _readmsg($fnction = '') {;}
		public function _exec($cmd, $fnction = '') {;}
		public function _data_prepare($mode = '') {;}
		public function _data_read($mode = '', $fp = '') {;}
		public function _data_write($mode = '', $fp = '') {;}
		public function _data_write_block($mode, $block) {;}
		public function _data_close() {;}
		public function _quit($force = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/update.php */

if( !function_exists( 'get_preferred_from_update_core' ) ) { function get_preferred_from_update_core() {;} }

if( !function_exists( 'get_core_updates' ) ) { function get_core_updates($options = '') {;} }

if( !function_exists( 'dismiss_core_update' ) ) { function dismiss_core_update($update) {;} }

if( !function_exists( 'undismiss_core_update' ) ) { function undismiss_core_update($version, $locale) {;} }

if( !function_exists( 'find_core_update' ) ) { function find_core_update($version, $locale) {;} }

if( !function_exists( 'core_update_footer' ) ) { function core_update_footer($msg = '') {;} }

if( !function_exists( 'update_nag' ) ) { function update_nag() {;} }

if( !function_exists( 'update_right_now_message' ) ) { function update_right_now_message() {;} }

if( !function_exists( 'get_plugin_updates' ) ) { function get_plugin_updates() {;} }

if( !function_exists( 'wp_plugin_update_rows' ) ) { function wp_plugin_update_rows() {;} }

if( !function_exists( 'wp_plugin_update_row' ) ) { function wp_plugin_update_row($file, $plugin_data) {;} }

if( !function_exists( 'wp_update_plugin' ) ) { function wp_update_plugin($plugin, $feedback = '') {;} }

if( !function_exists( 'get_theme_updates' ) ) { function get_theme_updates() {;} }

if( !function_exists( 'wp_update_theme' ) ) { function wp_update_theme($theme, $feedback = '') {;} }

if( !function_exists( 'wp_theme_update_rows' ) ) { function wp_theme_update_rows() {;} }

if( !function_exists( 'wp_theme_update_row' ) ) { function wp_theme_update_row($theme_key, $theme) {;} }

if( !function_exists( 'wp_update_core' ) ) { function wp_update_core($current, $feedback = '') {;} }

if( !function_exists( 'maintenance_nag' ) ) { function maintenance_nag() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/export.php */

if( !function_exists( 'export_wp' ) ) { function export_wp($args = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/template.php */

if( !function_exists( 'wp_category_checklist' ) ) { function wp_category_checklist($post_id = '', $descendants_and_self = '', $selected_cats = '', $popular_cats = '', $walker = '', $checked_ontop = '') {;} }

if( !function_exists( 'wp_terms_checklist' ) ) { function wp_terms_checklist($post_id = '', $args = '') {;} }

if( !function_exists( 'wp_popular_terms_checklist' ) ) { function wp_popular_terms_checklist($taxonomy, $default = '', $number = '', $echo = '') {;} }

if( !function_exists( 'wp_link_category_checklist' ) ) { function wp_link_category_checklist($link_id = '') {;} }

if( !function_exists( 'get_column_headers' ) ) { function get_column_headers($screen) {;} }

if( !function_exists( 'get_hidden_columns' ) ) { function get_hidden_columns($screen) {;} }

if( !function_exists( 'get_inline_data' ) ) { function get_inline_data($post) {;} }

if( !function_exists( 'wp_comment_reply' ) ) { function wp_comment_reply($position = '', $checkbox = '', $mode = '', $table_row = '') {;} }

if( !function_exists( 'wp_comment_trashnotice' ) ) { function wp_comment_trashnotice() {;} }

if( !function_exists( 'list_meta' ) ) { function list_meta($meta) {;} }

if( !function_exists( '_list_meta_row' ) ) { function _list_meta_row($entry, $count) {;} }

if( !function_exists( 'meta_form' ) ) { function meta_form() {;} }

if( !function_exists( 'touch_time' ) ) { function touch_time($edit = '', $for_post = '', $tab_index = '', $multi = '') {;} }

if( !function_exists( 'page_template_dropdown' ) ) { function page_template_dropdown($default = '') {;} }

if( !function_exists( 'parent_dropdown' ) ) { function parent_dropdown($default = '', $parent = '', $level = '') {;} }

if( !function_exists( 'the_attachment_links' ) ) { function the_attachment_links($id = '') {;} }

if( !function_exists( 'wp_dropdown_roles' ) ) { function wp_dropdown_roles($selected = '') {;} }

if( !function_exists( 'wp_convert_hr_to_bytes' ) ) { function wp_convert_hr_to_bytes($size) {;} }

if( !function_exists( 'wp_convert_bytes_to_hr' ) ) { function wp_convert_bytes_to_hr($bytes) {;} }

if( !function_exists( 'wp_max_upload_size' ) ) { function wp_max_upload_size() {;} }

if( !function_exists( 'wp_import_upload_form' ) ) { function wp_import_upload_form($action) {;} }

if( !function_exists( 'add_meta_box' ) ) { function add_meta_box($id, $title, $callback, $page, $context = '', $priority = '', $callback_args = '') {;} }

if( !function_exists( 'do_meta_boxes' ) ) { function do_meta_boxes($page, $context, $object) {;} }

if( !function_exists( 'remove_meta_box' ) ) { function remove_meta_box($id, $page, $context) {;} }

if( !function_exists( 'meta_box_prefs' ) ) { function meta_box_prefs($screen) {;} }

if( !function_exists( 'get_hidden_meta_boxes' ) ) { function get_hidden_meta_boxes($screen) {;} }

if( !function_exists( 'add_settings_section' ) ) { function add_settings_section($id, $title, $callback, $page) {;} }

if( !function_exists( 'add_settings_field' ) ) { function add_settings_field($id, $title, $callback, $page, $section = '', $args = '') {;} }

if( !function_exists( 'do_settings_sections' ) ) { function do_settings_sections($page) {;} }

if( !function_exists( 'do_settings_fields' ) ) { function do_settings_fields($page, $section) {;} }

if( !function_exists( 'add_settings_error' ) ) { function add_settings_error($setting, $code, $message, $type = '') {;} }

if( !function_exists( 'get_settings_errors' ) ) { function get_settings_errors($setting = '', $sanitize = '') {;} }

if( !function_exists( 'settings_errors' ) ) { function settings_errors($setting = '', $sanitize = '', $hide_on_update = '') {;} }

if( !function_exists( 'find_posts_div' ) ) { function find_posts_div($found_action = '') {;} }

if( !function_exists( 'the_post_password' ) ) { function the_post_password() {;} }

if( !function_exists( 'favorite_actions' ) ) { function favorite_actions($screen = '') {;} }

if( !function_exists( '_draft_or_post_title' ) ) { function _draft_or_post_title($post_id = '') {;} }

if( !function_exists( '_admin_search_query' ) ) { function _admin_search_query() {;} }

if( !function_exists( 'iframe_header' ) ) { function iframe_header($title = '', $limit_styles = '') {;} }

if( !function_exists( 'iframe_footer' ) ) { function iframe_footer() {;} }

if( !function_exists( '_post_states' ) ) { function _post_states($post) {;} }

if( !function_exists( '_media_states' ) ) { function _media_states($post) {;} }

if( !function_exists( 'convert_to_screen' ) ) { function convert_to_screen($screen) {;} }

if( !function_exists( 'screen_meta' ) ) { function screen_meta($screen) {;} }

if( !function_exists( 'add_contextual_help' ) ) { function add_contextual_help($screen, $help) {;} }

if( !function_exists( 'screen_layout' ) ) { function screen_layout($screen) {;} }

if( !function_exists( 'add_screen_option' ) ) { function add_screen_option($option, $args = '') {;} }

if( !function_exists( 'screen_options' ) ) { function screen_options($screen) {;} }

if( !function_exists( 'screen_icon' ) ) { function screen_icon($screen = '') {;} }

if( !function_exists( 'get_screen_icon' ) ) { function get_screen_icon($screen = '') {;} }

if( !function_exists( 'compression_test' ) ) { function compression_test() {;} }

if( !function_exists( 'get_current_screen' ) ) { function get_current_screen() {;} }

if( !function_exists( 'set_current_screen' ) ) { function set_current_screen($id = '') {;} }

if( !function_exists( 'submit_button' ) ) { function submit_button($text = '', $type = '', $name = '', $wrap = '', $other_attributes = '') {;} }

if( !function_exists( 'get_submit_button' ) ) { function get_submit_button($text = '', $type = '', $name = '', $wrap = '', $other_attributes = '') {;} }

if( !class_exists( 'Walker_Category_Checklist' ) ) {
	class Walker_Category_Checklist {
		public $tree_type = '';
		public $db_fields = '';

		public function start_lvl($output, $depth, $args) {;}
		public function end_lvl($output, $depth, $args) {;}
		public function start_el($output, $category, $depth, $args) {;}
		public function end_el($output, $category, $depth, $args) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/widgets.php */

if( !function_exists( 'wp_list_widgets' ) ) { function wp_list_widgets() {;} }

if( !function_exists( '_sort_name_callback' ) ) { function _sort_name_callback($a, $b) {;} }

if( !function_exists( 'wp_list_widget_controls' ) ) { function wp_list_widget_controls($sidebar) {;} }

if( !function_exists( 'wp_list_widget_controls_dynamic_sidebar' ) ) { function wp_list_widget_controls_dynamic_sidebar($params) {;} }

if( !function_exists( 'next_widget_id_number' ) ) { function next_widget_id_number($id_base) {;} }

if( !function_exists( 'wp_widget_control' ) ) { function wp_widget_control($sidebar_args) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/dashboard.php */

if( !function_exists( 'wp_dashboard_setup' ) ) { function wp_dashboard_setup() {;} }

if( !function_exists( 'wp_add_dashboard_widget' ) ) { function wp_add_dashboard_widget($widget_id, $widget_name, $callback, $control_callback = '') {;} }

if( !function_exists( '_wp_dashboard_control_callback' ) ) { function _wp_dashboard_control_callback($dashboard, $meta_box) {;} }

if( !function_exists( 'wp_dashboard' ) ) { function wp_dashboard() {;} }

if( !function_exists( 'wp_dashboard_right_now' ) ) { function wp_dashboard_right_now() {;} }

if( !function_exists( 'wp_network_dashboard_right_now' ) ) { function wp_network_dashboard_right_now() {;} }

if( !function_exists( 'wp_dashboard_quick_press' ) ) { function wp_dashboard_quick_press() {;} }

if( !function_exists( 'wp_dashboard_recent_drafts' ) ) { function wp_dashboard_recent_drafts($drafts = '') {;} }

if( !function_exists( 'wp_dashboard_recent_comments' ) ) { function wp_dashboard_recent_comments() {;} }

if( !function_exists( '_wp_dashboard_recent_comments_row' ) ) { function _wp_dashboard_recent_comments_row($comment, $show_date = '') {;} }

if( !function_exists( 'wp_dashboard_recent_comments_control' ) ) { function wp_dashboard_recent_comments_control() {;} }

if( !function_exists( 'wp_dashboard_incoming_links' ) ) { function wp_dashboard_incoming_links() {;} }

if( !function_exists( 'wp_dashboard_incoming_links_output' ) ) { function wp_dashboard_incoming_links_output() {;} }

if( !function_exists( 'wp_dashboard_incoming_links_control' ) ) { function wp_dashboard_incoming_links_control() {;} }

if( !function_exists( 'wp_dashboard_primary' ) ) { function wp_dashboard_primary() {;} }

if( !function_exists( 'wp_dashboard_primary_control' ) ) { function wp_dashboard_primary_control() {;} }

if( !function_exists( 'wp_dashboard_rss_output' ) ) { function wp_dashboard_rss_output($widget_id) {;} }

if( !function_exists( 'wp_dashboard_secondary' ) ) { function wp_dashboard_secondary() {;} }

if( !function_exists( 'wp_dashboard_secondary_control' ) ) { function wp_dashboard_secondary_control() {;} }

if( !function_exists( 'wp_dashboard_secondary_output' ) ) { function wp_dashboard_secondary_output() {;} }

if( !function_exists( 'wp_dashboard_plugins' ) ) { function wp_dashboard_plugins() {;} }

if( !function_exists( 'wp_dashboard_plugins_output' ) ) { function wp_dashboard_plugins_output() {;} }

if( !function_exists( 'wp_dashboard_cached_rss_widget' ) ) { function wp_dashboard_cached_rss_widget($widget_id, $callback, $check_urls = '') {;} }

if( !function_exists( 'wp_dashboard_trigger_widget_control' ) ) { function wp_dashboard_trigger_widget_control($widget_control_id = '') {;} }

if( !function_exists( 'wp_dashboard_rss_control' ) ) { function wp_dashboard_rss_control($widget_id, $form_inputs = '') {;} }

if( !function_exists( 'wp_dashboard_quota' ) ) { function wp_dashboard_quota() {;} }

if( !function_exists( 'wp_dashboard_browser_nag' ) ) { function wp_dashboard_browser_nag() {;} }

if( !function_exists( 'dashboard_browser_nag_class' ) ) { function dashboard_browser_nag_class($classes) {;} }

if( !function_exists( 'wp_check_browser_version' ) ) { function wp_check_browser_version() {;} }

if( !function_exists( 'wp_dashboard_empty' ) ) { function wp_dashboard_empty() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/schema.php */

if( !function_exists( 'populate_options' ) ) { function populate_options() {;} }

if( !function_exists( 'populate_roles' ) ) { function populate_roles() {;} }

if( !function_exists( 'populate_roles_160' ) ) { function populate_roles_160() {;} }

if( !function_exists( 'populate_roles_210' ) ) { function populate_roles_210() {;} }

if( !function_exists( 'populate_roles_230' ) ) { function populate_roles_230() {;} }

if( !function_exists( 'populate_roles_250' ) ) { function populate_roles_250() {;} }

if( !function_exists( 'populate_roles_260' ) ) { function populate_roles_260() {;} }

if( !function_exists( 'populate_roles_270' ) ) { function populate_roles_270() {;} }

if( !function_exists( 'populate_roles_280' ) ) { function populate_roles_280() {;} }

if( !function_exists( 'populate_roles_300' ) ) { function populate_roles_300() {;} }

if( !function_exists( 'populate_network' ) ) { function populate_network($network_id = '', $domain = '', $email = '', $site_name = '', $path = '', $subdomain_install = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/ms-deprecated.php */

if( !function_exists( 'wpmu_menu' ) ) { function wpmu_menu() {;} }

if( !function_exists( 'wpmu_checkAvailableSpace' ) ) { function wpmu_checkAvailableSpace() {;} }

if( !function_exists( 'mu_options' ) ) { function mu_options($options) {;} }

if( !function_exists( 'activate_sitewide_plugin' ) ) { function activate_sitewide_plugin() {;} }

if( !function_exists( 'deactivate_sitewide_plugin' ) ) { function deactivate_sitewide_plugin($plugin = '') {;} }

if( !function_exists( 'is_wpmu_sitewide_plugin' ) ) { function is_wpmu_sitewide_plugin($file) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/ms.php */

if( !function_exists( 'check_upload_size' ) ) { function check_upload_size($file) {;} }

if( !function_exists( 'wpmu_delete_blog' ) ) { function wpmu_delete_blog($blog_id, $drop = '') {;} }

if( !function_exists( 'wpmu_delete_user' ) ) { function wpmu_delete_user($id) {;} }

if( !function_exists( 'wpmu_get_blog_allowedthemes' ) ) { function wpmu_get_blog_allowedthemes($blog_id = '') {;} }

if( !function_exists( 'update_option_new_admin_email' ) ) { function update_option_new_admin_email($old_value, $value) {;} }

if( !function_exists( 'send_confirmation_on_profile_email' ) ) { function send_confirmation_on_profile_email() {;} }

if( !function_exists( 'new_user_email_admin_notice' ) ) { function new_user_email_admin_notice() {;} }

if( !function_exists( 'get_site_allowed_themes' ) ) { function get_site_allowed_themes() {;} }

if( !function_exists( 'is_upload_space_available' ) ) { function is_upload_space_available() {;} }

if( !function_exists( 'upload_size_limit_filter' ) ) { function upload_size_limit_filter($size) {;} }

if( !function_exists( 'get_upload_space_available' ) ) { function get_upload_space_available() {;} }

if( !function_exists( 'get_space_allowed' ) ) { function get_space_allowed() {;} }

if( !function_exists( 'display_space_usage' ) ) { function display_space_usage() {;} }

if( !function_exists( 'upload_space_setting' ) ) { function upload_space_setting($id) {;} }

if( !function_exists( 'update_user_status' ) ) { function update_user_status($id, $pref, $value, $deprecated = '') {;} }

if( !function_exists( 'refresh_user_details' ) ) { function refresh_user_details($id) {;} }

if( !function_exists( 'format_code_lang' ) ) { function format_code_lang($code = '') {;} }

if( !function_exists( 'sync_category_tag_slugs' ) ) { function sync_category_tag_slugs($term, $taxonomy) {;} }

if( !function_exists( '_access_denied_splash' ) ) { function _access_denied_splash() {;} }

if( !function_exists( 'check_import_new_users' ) ) { function check_import_new_users($permission) {;} }

if( !function_exists( 'mu_dropdown_languages' ) ) { function mu_dropdown_languages($lang_files = '', $current = '') {;} }

if( !function_exists( 'secret_salt_warning' ) ) { function secret_salt_warning() {;} }

if( !function_exists( 'site_admin_notice' ) ) { function site_admin_notice() {;} }

if( !function_exists( 'avoid_blog_page_permalink_collision' ) ) { function avoid_blog_page_permalink_collision($data, $postarr) {;} }

if( !function_exists( 'choose_primary_blog' ) ) { function choose_primary_blog() {;} }

if( !function_exists( 'ms_deprecated_blogs_file' ) ) { function ms_deprecated_blogs_file() {;} }

if( !function_exists( 'grant_super_admin' ) ) { function grant_super_admin($user_id) {;} }

if( !function_exists( 'revoke_super_admin' ) ) { function revoke_super_admin($user_id) {;} }

if( !function_exists( 'can_edit_network' ) ) { function can_edit_network($site_id) {;} }

if( !function_exists( '_thickbox_path_admin_subfolder' ) ) { function _thickbox_path_admin_subfolder() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-list-table.php */

if( !class_exists( 'WP_List_Table' ) ) {
	class WP_List_Table {
		public $items;
		public $_args;
		public $_pagination_args = '';
		public $screen;
		public $_actions;
		public $_pagination;

		public function __construct($args = '') {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function set_pagination_args($args) {;}
		public function get_pagination_arg($key) {;}
		public function has_items() {;}
		public function no_items() {;}
		public function search_box($text, $input_id) {;}
		public function get_views() {;}
		public function views() {;}
		public function get_bulk_actions() {;}
		public function bulk_actions() {;}
		public function current_action() {;}
		public function row_actions($actions, $always_visible = '') {;}
		public function months_dropdown($post_type) {;}
		public function view_switcher($current_mode) {;}
		public function comments_bubble($post_id, $pending_comments) {;}
		public function get_pagenum() {;}
		public function get_items_per_page($option, $default = '') {;}
		public function pagination($which) {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function get_column_info() {;}
		public function get_column_count() {;}
		public function print_column_headers($with_id = '') {;}
		public function display() {;}
		public function get_table_classes() {;}
		public function display_tablenav($which) {;}
		public function extra_tablenav($which) {;}
		public function display_rows_or_placeholder() {;}
		public function display_rows() {;}
		public function single_row($item) {;}
		public function single_row_columns($item) {;}
		public function ajax_response() {;}
		public function _js_vars() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-filesystem-direct.php */

if( !class_exists( 'WP_Filesystem_Direct' ) ) {
	class WP_Filesystem_Direct {
		public $errors = '';

		public function __construct($arg) {;}
		public function connect() {;}
		public function get_contents($file) {;}
		public function get_contents_array($file) {;}
		public function put_contents($file, $contents, $mode = '') {;}
		public function cwd() {;}
		public function chdir($dir) {;}
		public function chgrp($file, $group, $recursive = '') {;}
		public function chmod($file, $mode = '', $recursive = '') {;}
		public function chown($file, $owner, $recursive = '') {;}
		public function owner($file) {;}
		public function getchmod($file) {;}
		public function group($file) {;}
		public function copy($source, $destination, $overwrite = '', $mode = '') {;}
		public function move($source, $destination, $overwrite = '') {;}
		public function delete($file, $recursive = '', $type = '') {;}
		public function exists($file) {;}
		public function is_file($file) {;}
		public function is_dir($path) {;}
		public function is_readable($file) {;}
		public function is_writable($file) {;}
		public function atime($file) {;}
		public function mtime($file) {;}
		public function size($file) {;}
		public function touch($file, $time = '', $atime = '') {;}
		public function mkdir($path, $chmod = '', $chown = '', $chgrp = '') {;}
		public function rmdir($path, $recursive = '') {;}
		public function dirlist($path, $include_hidden = '', $recursive = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-posts-list-table.php */

if( !class_exists( 'WP_Posts_List_Table' ) ) {
	class WP_Posts_List_Table {
		public $hierarchical_display;
		public $comment_pending_count;
		public $user_posts_count;
		public $sticky_posts_count = '';

		public function __construct() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function has_items() {;}
		public function no_items() {;}
		public function get_views() {;}
		public function get_bulk_actions() {;}
		public function extra_tablenav($which) {;}
		public function current_action() {;}
		public function pagination($which) {;}
		public function get_table_classes() {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function display_rows($posts = '') {;}
		public function _display_rows($posts) {;}
		public function _display_rows_hierarchical($pages, $pagenum = '', $per_page = '') {;}
		public function _page_rows($children_pages, $count, $parent, $level, $pagenum, $per_page) {;}
		public function single_row($a_post, $level = '') {;}
		public function inline_edit() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/bookmark.php */

if( !function_exists( 'add_link' ) ) { function add_link() {;} }

if( !function_exists( 'edit_link' ) ) { function edit_link($link_id = '') {;} }

if( !function_exists( 'get_default_link_to_edit' ) ) { function get_default_link_to_edit() {;} }

if( !function_exists( 'wp_delete_link' ) ) { function wp_delete_link($link_id) {;} }

if( !function_exists( 'wp_get_link_cats' ) ) { function wp_get_link_cats($link_id = '') {;} }

if( !function_exists( 'get_link_to_edit' ) ) { function get_link_to_edit($link_id) {;} }

if( !function_exists( 'wp_insert_link' ) ) { function wp_insert_link($linkdata, $wp_error = '') {;} }

if( !function_exists( 'wp_set_link_cats' ) ) { function wp_set_link_cats($link_id = '', $link_categories = '') {;} }

if( !function_exists( 'wp_update_link' ) ) { function wp_update_link($linkdata) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/file.php */

if( !function_exists( 'get_file_description' ) ) { function get_file_description($file) {;} }

if( !function_exists( 'get_home_path' ) ) { function get_home_path() {;} }

if( !function_exists( 'get_real_file_to_edit' ) ) { function get_real_file_to_edit($file) {;} }

if( !function_exists( 'list_files' ) ) { function list_files($folder = '', $levels = '') {;} }

if( !function_exists( 'wp_tempnam' ) ) { function wp_tempnam($filename = '', $dir = '') {;} }

if( !function_exists( 'validate_file_to_edit' ) ) { function validate_file_to_edit($file, $allowed_files = '') {;} }

if( !function_exists( 'wp_handle_upload' ) ) { function wp_handle_upload($file, $overrides = '', $time = '') {;} }

if( !function_exists( 'wp_handle_sideload' ) ) { function wp_handle_sideload($file, $overrides = '') {;} }

if( !function_exists( 'download_url' ) ) { function download_url($url, $timeout = '') {;} }

if( !function_exists( 'unzip_file' ) ) { function unzip_file($file, $to) {;} }

if( !function_exists( '_unzip_file_ziparchive' ) ) { function _unzip_file_ziparchive($file, $to, $needed_dirs = '') {;} }

if( !function_exists( '_unzip_file_pclzip' ) ) { function _unzip_file_pclzip($file, $to, $needed_dirs = '') {;} }

if( !function_exists( 'copy_dir' ) ) { function copy_dir($from, $to, $skip_list = '') {;} }

if( !function_exists( 'WP_Filesystem' ) ) { function WP_Filesystem($args = '', $context = '') {;} }

if( !function_exists( 'get_filesystem_method' ) ) { function get_filesystem_method($args = '', $context = '') {;} }

if( !function_exists( 'request_filesystem_credentials' ) ) { function request_filesystem_credentials($form_post, $type = '', $error = '', $context = '', $extra_fields = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/manifest.php */

if( !function_exists( 'get_manifest' ) ) { function get_manifest() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-filesystem-base.php */

if( !class_exists( 'WP_Filesystem_Base' ) ) {
	class WP_Filesystem_Base {
		public $verbose = '';
		public $cache = '';
		public $method = '';

		public function abspath() {;}
		public function wp_content_dir() {;}
		public function wp_plugins_dir() {;}
		public function wp_themes_dir() {;}
		public function wp_lang_dir() {;}
		public function find_base_dir($base = '', $echo = '') {;}
		public function get_base_dir($base = '', $echo = '') {;}
		public function find_folder($folder) {;}
		public function search_for_folder($folder, $base = '', $loop = '') {;}
		public function gethchmod($file) {;}
		public function getnumchmodfromh($mode) {;}
		public function is_binary($text) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-filesystem-ftpsockets.php */

if( !class_exists( 'WP_Filesystem_ftpsockets' ) ) {
	class WP_Filesystem_ftpsockets {
		public $ftp = '';
		public $errors = '';
		public $options = '';

		public function __construct($opt = '') {;}
		public function connect() {;}
		public function get_contents($file, $type = '', $resumepos = '') {;}
		public function get_contents_array($file) {;}
		public function put_contents($file, $contents, $mode = '') {;}
		public function cwd() {;}
		public function chdir($file) {;}
		public function chgrp($file, $group, $recursive = '') {;}
		public function chmod($file, $mode = '', $recursive = '') {;}
		public function chown($file, $owner, $recursive = '') {;}
		public function owner($file) {;}
		public function getchmod($file) {;}
		public function group($file) {;}
		public function copy($source, $destination, $overwrite = '', $mode = '') {;}
		public function move($source, $destination, $overwrite = '') {;}
		public function delete($file, $recursive = '', $type = '') {;}
		public function exists($file) {;}
		public function is_file($file) {;}
		public function is_dir($path) {;}
		public function is_readable($file) {;}
		public function is_writable($file) {;}
		public function atime($file) {;}
		public function mtime($file) {;}
		public function size($file) {;}
		public function touch($file, $time = '', $atime = '') {;}
		public function mkdir($path, $chmod = '', $chown = '', $chgrp = '') {;}
		public function rmdir($path, $recursive = '') {;}
		public function dirlist($path = '', $include_hidden = '', $recursive = '') {;}
		public function __destruct() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-links-list-table.php */

if( !class_exists( 'WP_Links_List_Table' ) ) {
	class WP_Links_List_Table {

		public function __construct() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function no_items() {;}
		public function get_bulk_actions() {;}
		public function extra_tablenav($which) {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function display_rows() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/plugin.php */

if( !function_exists( 'get_plugin_data' ) ) { function get_plugin_data($plugin_file, $markup = '', $translate = '') {;} }

if( !function_exists( '_get_plugin_data_markup_translate' ) ) { function _get_plugin_data_markup_translate($plugin_file, $plugin_data, $markup = '', $translate = '') {;} }

if( !function_exists( 'get_plugin_files' ) ) { function get_plugin_files($plugin) {;} }

if( !function_exists( 'get_plugins' ) ) { function get_plugins($plugin_folder = '') {;} }

if( !function_exists( 'get_mu_plugins' ) ) { function get_mu_plugins() {;} }

if( !function_exists( '_sort_uname_callback' ) ) { function _sort_uname_callback($a, $b) {;} }

if( !function_exists( 'get_dropins' ) ) { function get_dropins() {;} }

if( !function_exists( '_get_dropins' ) ) { function _get_dropins() {;} }

if( !function_exists( 'is_plugin_active' ) ) { function is_plugin_active($plugin) {;} }

if( !function_exists( 'is_plugin_inactive' ) ) { function is_plugin_inactive($plugin) {;} }

if( !function_exists( 'is_plugin_active_for_network' ) ) { function is_plugin_active_for_network($plugin) {;} }

if( !function_exists( 'is_network_only_plugin' ) ) { function is_network_only_plugin($plugin) {;} }

if( !function_exists( 'activate_plugin' ) ) { function activate_plugin($plugin, $redirect = '', $network_wide = '', $silent = '') {;} }

if( !function_exists( 'deactivate_plugins' ) ) { function deactivate_plugins($plugins, $silent = '') {;} }

if( !function_exists( 'activate_plugins' ) ) { function activate_plugins($plugins, $redirect = '', $network_wide = '', $silent = '') {;} }

if( !function_exists( 'delete_plugins' ) ) { function delete_plugins($plugins, $redirect = '') {;} }

if( !function_exists( 'validate_active_plugins' ) ) { function validate_active_plugins() {;} }

if( !function_exists( 'validate_plugin' ) ) { function validate_plugin($plugin) {;} }

if( !function_exists( 'is_uninstallable_plugin' ) ) { function is_uninstallable_plugin($plugin) {;} }

if( !function_exists( 'uninstall_plugin' ) ) { function uninstall_plugin($plugin) {;} }

if( !function_exists( 'add_menu_page' ) ) { function add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', $position = '') {;} }

if( !function_exists( 'add_object_page' ) ) { function add_object_page($page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '') {;} }

if( !function_exists( 'add_utility_page' ) ) { function add_utility_page($page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '') {;} }

if( !function_exists( 'add_submenu_page' ) ) { function add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_management_page' ) ) { function add_management_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_options_page' ) ) { function add_options_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_theme_page' ) ) { function add_theme_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_plugins_page' ) ) { function add_plugins_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_users_page' ) ) { function add_users_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_dashboard_page' ) ) { function add_dashboard_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_posts_page' ) ) { function add_posts_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_media_page' ) ) { function add_media_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_links_page' ) ) { function add_links_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_pages_page' ) ) { function add_pages_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'add_comments_page' ) ) { function add_comments_page($page_title, $menu_title, $capability, $menu_slug, $function = '') {;} }

if( !function_exists( 'remove_menu_page' ) ) { function remove_menu_page($menu_slug) {;} }

if( !function_exists( 'remove_submenu_page' ) ) { function remove_submenu_page($menu_slug, $submenu_slug) {;} }

if( !function_exists( 'menu_page_url' ) ) { function menu_page_url($menu_slug, $echo = '') {;} }

if( !function_exists( 'get_admin_page_parent' ) ) { function get_admin_page_parent($parent = '') {;} }

if( !function_exists( 'get_admin_page_title' ) ) { function get_admin_page_title() {;} }

if( !function_exists( 'get_plugin_page_hook' ) ) { function get_plugin_page_hook($plugin_page, $parent_page) {;} }

if( !function_exists( 'get_plugin_page_hookname' ) ) { function get_plugin_page_hookname($plugin_page, $parent_page) {;} }

if( !function_exists( 'user_can_access_admin_page' ) ) { function user_can_access_admin_page() {;} }

if( !function_exists( 'register_setting' ) ) { function register_setting($option_group, $option_name, $sanitize_callback = '') {;} }

if( !function_exists( 'unregister_setting' ) ) { function unregister_setting($option_group, $option_name, $sanitize_callback = '') {;} }

if( !function_exists( 'option_update_filter' ) ) { function option_update_filter($options) {;} }

if( !function_exists( 'add_option_whitelist' ) ) { function add_option_whitelist($new_options, $options = '') {;} }

if( !function_exists( 'remove_option_whitelist' ) ) { function remove_option_whitelist($del_options, $options = '') {;} }

if( !function_exists( 'settings_fields' ) ) { function settings_fields($option_group) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/image.php */

if( !function_exists( 'wp_create_thumbnail' ) ) { function wp_create_thumbnail($file, $max_side, $deprecated = '') {;} }

if( !function_exists( 'wp_crop_image' ) ) { function wp_crop_image($src_file, $src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs = '', $dst_file = '') {;} }

if( !function_exists( 'wp_generate_attachment_metadata' ) ) { function wp_generate_attachment_metadata($attachment_id, $file) {;} }

if( !function_exists( 'get_udims' ) ) { function get_udims($width, $height) {;} }

if( !function_exists( 'wp_exif_frac2dec' ) ) { function wp_exif_frac2dec($str) {;} }

if( !function_exists( 'wp_exif_date2ts' ) ) { function wp_exif_date2ts($str) {;} }

if( !function_exists( 'wp_read_image_metadata' ) ) { function wp_read_image_metadata($file) {;} }

if( !function_exists( 'file_is_valid_image' ) ) { function file_is_valid_image($path) {;} }

if( !function_exists( 'file_is_displayable_image' ) ) { function file_is_displayable_image($path) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-filesystem-ftpext.php */

if( !class_exists( 'WP_Filesystem_FTPext' ) ) {
	class WP_Filesystem_FTPext {
		public $link;
		public $errors = '';
		public $options = '';

		public function __construct($opt = '') {;}
		public function connect() {;}
		public function get_contents($file, $type = '', $resumepos = '') {;}
		public function get_contents_array($file) {;}
		public function put_contents($file, $contents, $mode = '') {;}
		public function cwd() {;}
		public function chdir($dir) {;}
		public function chgrp($file, $group, $recursive = '') {;}
		public function chmod($file, $mode = '', $recursive = '') {;}
		public function chown($file, $owner, $recursive = '') {;}
		public function owner($file) {;}
		public function getchmod($file) {;}
		public function group($file) {;}
		public function copy($source, $destination, $overwrite = '', $mode = '') {;}
		public function move($source, $destination, $overwrite = '') {;}
		public function delete($file, $recursive = '', $type = '') {;}
		public function exists($file) {;}
		public function is_file($file) {;}
		public function is_dir($path) {;}
		public function is_readable($file) {;}
		public function is_writable($file) {;}
		public function atime($file) {;}
		public function mtime($file) {;}
		public function size($file) {;}
		public function touch($file, $time = '', $atime = '') {;}
		public function mkdir($path, $chmod = '', $chown = '', $chgrp = '') {;}
		public function rmdir($path, $recursive = '') {;}
		public function parselisting($line) {;}
		public function dirlist($path = '', $include_hidden = '', $recursive = '') {;}
		public function __destruct() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-ftp-sockets.php */

if( !class_exists( 'ftp' ) ) {
	class ftp {

		public function ftp($verb = '', $le = '') {;}
		public function __construct($verb = '', $le = '') {;}
		public function _settimeout($sock) {;}
		public function _connect($host, $port) {;}
		public function _readmsg($fnction = '') {;}
		public function _exec($cmd, $fnction = '') {;}
		public function _data_prepare($mode = '') {;}
		public function _data_read($mode = '', $fp = '') {;}
		public function _data_write($mode = '', $fp = '') {;}
		public function _data_write_block($mode, $block) {;}
		public function _data_close() {;}
		public function _quit() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/comment.php */

if( !function_exists( 'comment_exists' ) ) { function comment_exists($comment_author, $comment_date) {;} }

if( !function_exists( 'edit_comment' ) ) { function edit_comment() {;} }

if( !function_exists( 'get_comment_to_edit' ) ) { function get_comment_to_edit($id) {;} }

if( !function_exists( 'get_pending_comments_num' ) ) { function get_pending_comments_num($post_id) {;} }

if( !function_exists( 'floated_admin_avatar' ) ) { function floated_admin_avatar($name) {;} }

if( !function_exists( 'enqueue_comment_hotkeys_js' ) ) { function enqueue_comment_hotkeys_js() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-filesystem-ssh2.php */

if( !class_exists( 'WP_Filesystem_SSH2' ) ) {
	class WP_Filesystem_SSH2 {
		public $link = '';
		public $sftp_link = '';
		public $keys = '';
		public $errors = '';
		public $options = '';

		public function __construct($opt = '') {;}
		public function connect() {;}
		public function run_command($command, $returnbool = '') {;}
		public function get_contents($file, $type = '', $resumepos = '') {;}
		public function get_contents_array($file) {;}
		public function put_contents($file, $contents, $mode = '') {;}
		public function cwd() {;}
		public function chdir($dir) {;}
		public function chgrp($file, $group, $recursive = '') {;}
		public function chmod($file, $mode = '', $recursive = '') {;}
		public function chown($file, $owner, $recursive = '') {;}
		public function owner($file) {;}
		public function getchmod($file) {;}
		public function group($file) {;}
		public function copy($source, $destination, $overwrite = '', $mode = '') {;}
		public function move($source, $destination, $overwrite = '') {;}
		public function delete($file, $recursive = '', $type = '') {;}
		public function exists($file) {;}
		public function is_file($file) {;}
		public function is_dir($path) {;}
		public function is_readable($file) {;}
		public function is_writable($file) {;}
		public function atime($file) {;}
		public function mtime($file) {;}
		public function size($file) {;}
		public function touch($file, $time = '', $atime = '') {;}
		public function mkdir($path, $chmod = '', $chown = '', $chgrp = '') {;}
		public function rmdir($path, $recursive = '') {;}
		public function dirlist($path, $include_hidden = '', $recursive = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-themes-list-table.php */

if( !class_exists( 'WP_Themes_List_Table' ) ) {
	class WP_Themes_List_Table {
		public $search = '';
		public $features = '';

		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function no_items() {;}
		public function tablenav($which = '') {;}
		public function display() {;}
		public function get_columns() {;}
		public function display_rows() {;}
		public function search_theme($theme) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/meta-boxes.php */

if( !function_exists( 'post_submit_meta_box' ) ) { function post_submit_meta_box($post) {;} }

if( !function_exists( 'post_format_meta_box' ) ) { function post_format_meta_box($post, $box) {;} }

if( !function_exists( 'post_tags_meta_box' ) ) { function post_tags_meta_box($post, $box) {;} }

if( !function_exists( 'post_categories_meta_box' ) ) { function post_categories_meta_box($post, $box) {;} }

if( !function_exists( 'post_excerpt_meta_box' ) ) { function post_excerpt_meta_box($post) {;} }

if( !function_exists( 'post_trackback_meta_box' ) ) { function post_trackback_meta_box($post) {;} }

if( !function_exists( 'post_custom_meta_box' ) ) { function post_custom_meta_box($post) {;} }

if( !function_exists( 'post_comment_status_meta_box' ) ) { function post_comment_status_meta_box($post) {;} }

if( !function_exists( 'post_comment_meta_box_thead' ) ) { function post_comment_meta_box_thead($result) {;} }

if( !function_exists( 'post_comment_meta_box' ) ) { function post_comment_meta_box($post) {;} }

if( !function_exists( 'post_slug_meta_box' ) ) { function post_slug_meta_box($post) {;} }

if( !function_exists( 'post_author_meta_box' ) ) { function post_author_meta_box($post) {;} }

if( !function_exists( 'post_revisions_meta_box' ) ) { function post_revisions_meta_box($post) {;} }

if( !function_exists( 'page_attributes_meta_box' ) ) { function page_attributes_meta_box($post) {;} }

if( !function_exists( 'link_submit_meta_box' ) ) { function link_submit_meta_box($link) {;} }

if( !function_exists( 'link_categories_meta_box' ) ) { function link_categories_meta_box($link) {;} }

if( !function_exists( 'link_target_meta_box' ) ) { function link_target_meta_box($link) {;} }

if( !function_exists( 'xfn_check' ) ) { function xfn_check($class, $value = '', $deprecated = '') {;} }

if( !function_exists( 'link_xfn_meta_box' ) ) { function link_xfn_meta_box($link) {;} }

if( !function_exists( 'link_advanced_meta_box' ) ) { function link_advanced_meta_box($link) {;} }

if( !function_exists( 'post_thumbnail_meta_box' ) ) { function post_thumbnail_meta_box() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/menu.php */

if( !function_exists( 'add_cssclass' ) ) { function add_cssclass($add, $class) {;} }

if( !function_exists( 'add_menu_classes' ) ) { function add_menu_classes($menu) {;} }

if( !function_exists( 'sort_menu' ) ) { function sort_menu($a, $b) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/list-table.php */

if( !function_exists( '_get_list_table' ) ) { function _get_list_table($class) {;} }

if( !function_exists( 'register_column_headers' ) ) { function register_column_headers($screen, $columns) {;} }

if( !function_exists( 'print_column_headers' ) ) { function print_column_headers($screen, $id = '') {;} }

if( !class_exists( '_WP_List_Table_Compat' ) ) {
	class _WP_List_Table_Compat {
		public $_screen;
		public $_columns;

		public function _WP_List_Table_Compat($screen, $columns = '') {;}
		public function get_column_info() {;}
		public function get_columns() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-comments-list-table.php */

if( !class_exists( 'WP_Comments_List_Table' ) ) {
	class WP_Comments_List_Table {
		public $checkbox = '';
		public $pending_count = '';

		public function __construct() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function get_per_page($comment_status = '') {;}
		public function no_items() {;}
		public function get_views() {;}
		public function get_bulk_actions() {;}
		public function extra_tablenav($which) {;}
		public function current_action() {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function display() {;}
		public function single_row($a_comment) {;}
		public function column_cb($comment) {;}
		public function column_comment($comment) {;}
		public function column_author($comment) {;}
		public function column_date($comment) {;}
		public function column_response($comment) {;}
		public function column_default($comment, $column_name) {;}

	}
}

if( !class_exists( 'WP_Post_Comments_List_Table' ) ) {
	class WP_Post_Comments_List_Table {

		public function get_column_info() {;}
		public function get_table_classes() {;}
		public function display($output_empty = '') {;}
		public function get_per_page($comment_status = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-theme-install-list-table.php */

if( !class_exists( 'WP_Theme_Install_List_Table' ) ) {
	class WP_Theme_Install_List_Table {

		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function no_items() {;}
		public function get_views() {;}
		public function get_columns() {;}
		public function display() {;}
		public function display_rows() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-ftp.php */

if( !class_exists( 'ftp_base' ) ) {
	class ftp_base {
		public $LocalEcho;
		public $Verbose;
		public $OS_local;
		public $OS_remote;
		public $_lastaction;
		public $_errors;
		public $_type;
		public $_umask;
		public $_timeout;
		public $_passive;
		public $_host;
		public $_fullhost;
		public $_port;
		public $_datahost;
		public $_dataport;
		public $_ftp_control_sock;
		public $_ftp_data_sock;
		public $_ftp_temp_sock;
		public $_ftp_buff_size;
		public $_login;
		public $_password;
		public $_connected;
		public $_ready;
		public $_code;
		public $_message;
		public $_can_restore;
		public $_port_available;
		public $_curtype;
		public $_features;
		public $_error_array;
		public $AuthorizedTransferMode;
		public $OS_FullName;
		public $_eol_code;
		public $AutoAsciiExt;

		public function ftp_base($port_mode = '') {;}
		public function __construct($port_mode = '', $verb = '', $le = '') {;}
		public function parselisting($line) {;}
		public function SendMSG($message = '', $crlf = '') {;}
		public function SetType($mode = '') {;}
		public function _settype($mode = '') {;}
		public function Passive($pasv = '') {;}
		public function SetServer($host, $port = '', $reconnect = '') {;}
		public function SetUmask($umask = '') {;}
		public function SetTimeout($timeout = '') {;}
		public function connect($server = '') {;}
		public function quit($force = '') {;}
		public function login($user = '', $pass = '') {;}
		public function pwd() {;}
		public function cdup() {;}
		public function chdir($pathname) {;}
		public function rmdir($pathname) {;}
		public function mkdir($pathname) {;}
		public function rename($from, $to) {;}
		public function filesize($pathname) {;}
		public function abort() {;}
		public function mdtm($pathname) {;}
		public function systype() {;}
		public function delete($pathname) {;}
		public function site($command, $fnction = '') {;}
		public function chmod($pathname, $mode) {;}
		public function restore($from) {;}
		public function features() {;}
		public function rawlist($pathname = '', $arg = '') {;}
		public function nlist($pathname = '') {;}
		public function is_exists($pathname) {;}
		public function file_exists($pathname) {;}
		public function fget($fp, $remotefile, $rest = '') {;}
		public function get($remotefile, $localfile = '', $rest = '') {;}
		public function fput($remotefile, $fp) {;}
		public function put($localfile, $remotefile = '', $rest = '') {;}
		public function mput($local = '', $remote = '', $continious = '') {;}
		public function mget($remote, $local = '', $continious = '') {;}
		public function mdel($remote, $continious = '') {;}
		public function mmkdir($dir, $mode = '') {;}
		public function glob($pattern, $handle = '') {;}
		public function glob_pattern_match($pattern, $string) {;}
		public function glob_regexp($pattern, $probe) {;}
		public function dirlist($remote) {;}
		public function _checkCode() {;}
		public function _list($arg = '', $cmd = '', $fnction = '') {;}
		public function PushError($fctname, $msg, $desc = '') {;}
		public function PopError() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/plugin-install.php */

if( !function_exists( 'plugins_api' ) ) { function plugins_api($action, $args = '') {;} }

if( !function_exists( 'install_popular_tags' ) ) { function install_popular_tags($args = '') {;} }

if( !function_exists( 'install_dashboard' ) ) { function install_dashboard() {;} }

if( !function_exists( 'install_search_form' ) ) { function install_search_form() {;} }

if( !function_exists( 'install_plugins_upload' ) ) { function install_plugins_upload($page = '') {;} }

if( !function_exists( 'display_plugins_table' ) ) { function display_plugins_table() {;} }

if( !function_exists( 'install_plugin_install_status' ) ) { function install_plugin_install_status($api, $loop = '') {;} }

if( !function_exists( 'install_plugin_information' ) ) { function install_plugin_information() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-users-list-table.php */

if( !class_exists( 'WP_Users_List_Table' ) ) {
	class WP_Users_List_Table {
		public $site_id;
		public $is_site_users;

		public function __construct() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function no_items() {;}
		public function get_views() {;}
		public function get_bulk_actions() {;}
		public function extra_tablenav($which) {;}
		public function current_action() {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function display_rows() {;}
		public function single_row($user_object, $style = '', $role = '', $numposts = '') {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/post.php */

if( !function_exists( '_wp_translate_postdata' ) ) { function _wp_translate_postdata($update = '', $post_data = '') {;} }

if( !function_exists( 'edit_post' ) ) { function edit_post($post_data = '') {;} }

if( !function_exists( 'bulk_edit_posts' ) ) { function bulk_edit_posts($post_data = '') {;} }

if( !function_exists( 'get_default_post_to_edit' ) ) { function get_default_post_to_edit($post_type = '', $create_in_db = '') {;} }

if( !function_exists( 'get_default_page_to_edit' ) ) { function get_default_page_to_edit() {;} }

if( !function_exists( 'get_post_to_edit' ) ) { function get_post_to_edit($id) {;} }

if( !function_exists( 'post_exists' ) ) { function post_exists($title, $content = '', $date = '') {;} }

if( !function_exists( 'wp_write_post' ) ) { function wp_write_post() {;} }

if( !function_exists( 'write_post' ) ) { function write_post() {;} }

if( !function_exists( 'add_meta' ) ) { function add_meta($post_ID) {;} }

if( !function_exists( 'delete_meta' ) ) { function delete_meta($mid) {;} }

if( !function_exists( 'get_meta_keys' ) ) { function get_meta_keys() {;} }

if( !function_exists( 'get_post_meta_by_id' ) ) { function get_post_meta_by_id($mid) {;} }

if( !function_exists( 'has_meta' ) ) { function has_meta($postid) {;} }

if( !function_exists( 'update_meta' ) ) { function update_meta($meta_id, $meta_key, $meta_value) {;} }

if( !function_exists( '_fix_attachment_links' ) ) { function _fix_attachment_links($post_ID) {;} }

if( !function_exists( '_fix_attachment_links_replace_cb' ) ) { function _fix_attachment_links_replace_cb($match) {;} }

if( !function_exists( '_relocate_children' ) ) { function _relocate_children($old_ID, $new_ID) {;} }

if( !function_exists( 'get_available_post_statuses' ) ) { function get_available_post_statuses($type = '') {;} }

if( !function_exists( 'wp_edit_posts_query' ) ) { function wp_edit_posts_query($q = '') {;} }

if( !function_exists( 'get_post_mime_types' ) ) { function get_post_mime_types() {;} }

if( !function_exists( 'get_available_post_mime_types' ) ) { function get_available_post_mime_types($type = '') {;} }

if( !function_exists( 'wp_edit_attachments_query' ) ) { function wp_edit_attachments_query($q = '') {;} }

if( !function_exists( '_edit_attachments_query_helper' ) ) { function _edit_attachments_query_helper($where) {;} }

if( !function_exists( 'postbox_classes' ) ) { function postbox_classes($id, $page) {;} }

if( !function_exists( 'get_sample_permalink' ) ) { function get_sample_permalink($id, $title = '', $name = '') {;} }

if( !function_exists( 'get_sample_permalink_html' ) ) { function get_sample_permalink_html($id, $new_title = '', $new_slug = '') {;} }

if( !function_exists( '_wp_post_thumbnail_html' ) ) { function _wp_post_thumbnail_html($thumbnail_id = '') {;} }

if( !function_exists( 'wp_check_post_lock' ) ) { function wp_check_post_lock($post_id) {;} }

if( !function_exists( 'wp_set_post_lock' ) ) { function wp_set_post_lock($post_id) {;} }

if( !function_exists( '_admin_notice_post_locked' ) ) { function _admin_notice_post_locked() {;} }

if( !function_exists( 'wp_create_post_autosave' ) ) { function wp_create_post_autosave($post_id) {;} }

if( !function_exists( 'post_preview' ) ) { function post_preview() {;} }

if( !function_exists( 'wp_tiny_mce' ) ) { function wp_tiny_mce($teeny = '', $settings = '') {;} }

if( !function_exists( 'wp_preload_dialogs' ) ) { function wp_preload_dialogs($init) {;} }

if( !function_exists( 'wp_quicktags' ) ) { function wp_quicktags() {;} }

if( !function_exists( 'wp_print_editor_js' ) ) { function wp_print_editor_js() {;} }

if( !function_exists( 'wp_fullscreen_html' ) ) { function wp_fullscreen_html() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-ms-users-list-table.php */

if( !class_exists( 'WP_MS_Users_List_Table' ) ) {
	class WP_MS_Users_List_Table {

		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function get_bulk_actions() {;}
		public function no_items() {;}
		public function get_views() {;}
		public function pagination($which) {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function display_rows() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/update-core.php */

if( !function_exists( 'update_core' ) ) { function update_core($from, $to) {;} }

if( !function_exists( '_copy_dir' ) ) { function _copy_dir($from, $to, $skip_list = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/user.php */

if( !function_exists( 'add_user' ) ) { function add_user() {;} }

if( !function_exists( 'edit_user' ) ) { function edit_user($user_id = '') {;} }

if( !function_exists( 'get_editable_roles' ) ) { function get_editable_roles() {;} }

if( !function_exists( 'get_user_to_edit' ) ) { function get_user_to_edit($user_id) {;} }

if( !function_exists( 'get_users_drafts' ) ) { function get_users_drafts($user_id) {;} }

if( !function_exists( 'wp_delete_user' ) ) { function wp_delete_user($id, $reassign = '') {;} }

if( !function_exists( 'wp_revoke_user' ) ) { function wp_revoke_user($id) {;} }

if( !function_exists( 'default_password_nag_handler' ) ) { function default_password_nag_handler($errors = '') {;} }

if( !function_exists( 'default_password_nag_edit_user' ) ) { function default_password_nag_edit_user($user_ID, $old_data) {;} }

if( !function_exists( 'default_password_nag' ) ) { function default_password_nag() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-importer.php */

if( !function_exists( 'get_cli_args' ) ) { function get_cli_args($param, $required = '') {;} }

if( !class_exists( 'WP_Importer' ) ) {
	class WP_Importer {

		public function __construct() {;}
		public function get_imported_posts($importer_name, $bid) {;}
		public function count_imported_posts($importer_name, $bid) {;}
		public function get_imported_comments($bid) {;}
		public function set_blog($blog_id) {;}
		public function set_user($user_id) {;}
		public function cmpr_strlen($a, $b) {;}
		public function get_page($url, $username = '', $password = '', $head = '') {;}
		public function bump_request_timeout($val) {;}
		public function is_user_over_quota() {;}
		public function min_whitespace($string) {;}
		public function stop_the_insanity() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/misc.php */

if( !function_exists( 'got_mod_rewrite' ) ) { function got_mod_rewrite() {;} }

if( !function_exists( 'extract_from_markers' ) ) { function extract_from_markers($filename, $marker) {;} }

if( !function_exists( 'insert_with_markers' ) ) { function insert_with_markers($filename, $marker, $insertion) {;} }

if( !function_exists( 'save_mod_rewrite_rules' ) ) { function save_mod_rewrite_rules() {;} }

if( !function_exists( 'iis7_save_url_rewrite_rules' ) ) { function iis7_save_url_rewrite_rules() {;} }

if( !function_exists( 'update_recently_edited' ) ) { function update_recently_edited($file) {;} }

if( !function_exists( 'update_home_siteurl' ) ) { function update_home_siteurl($old_value, $value) {;} }

if( !function_exists( 'url_shorten' ) ) { function url_shorten($url) {;} }

if( !function_exists( 'wp_reset_vars' ) ) { function wp_reset_vars($vars) {;} }

if( !function_exists( 'show_message' ) ) { function show_message($message) {;} }

if( !function_exists( 'wp_doc_link_parse' ) ) { function wp_doc_link_parse($content) {;} }

if( !function_exists( 'set_screen_options' ) ) { function set_screen_options() {;} }

if( !function_exists( 'iis7_rewrite_rule_exists' ) ) { function iis7_rewrite_rule_exists($filename) {;} }

if( !function_exists( 'iis7_delete_rewrite_rule' ) ) { function iis7_delete_rewrite_rule($filename) {;} }

if( !function_exists( 'iis7_add_rewrite_rule' ) ) { function iis7_add_rewrite_rule($filename, $rewrite_rule) {;} }

if( !function_exists( 'saveDomDocument' ) ) { function saveDomDocument($doc, $filename) {;} }

if( !function_exists( 'win_is_writable' ) ) { function win_is_writable($path) {;} }

if( !function_exists( 'admin_color_scheme_picker' ) ) { function admin_color_scheme_picker() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/theme.php */

if( !function_exists( 'current_theme_info' ) ) { function current_theme_info() {;} }

if( !function_exists( 'delete_theme' ) ) { function delete_theme($template, $redirect = '') {;} }

if( !function_exists( 'get_broken_themes' ) ) { function get_broken_themes() {;} }

if( !function_exists( 'get_allowed_themes' ) ) { function get_allowed_themes() {;} }

if( !function_exists( 'get_page_templates' ) ) { function get_page_templates() {;} }

if( !function_exists( '_get_template_edit_filename' ) ) { function _get_template_edit_filename($fullpath, $containingfolder) {;} }

if( !function_exists( 'theme_update_available' ) ) { function theme_update_available($theme) {;} }

if( !function_exists( 'get_theme_feature_list' ) ) { function get_theme_feature_list() {;} }

if( !function_exists( 'themes_api' ) ) { function themes_api($action, $args = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/nav-menu.php */

if( !function_exists( '_wp_ajax_menu_quick_search' ) ) { function _wp_ajax_menu_quick_search($request = '') {;} }

if( !function_exists( 'wp_nav_menu_setup' ) ) { function wp_nav_menu_setup() {;} }

if( !function_exists( 'wp_initial_nav_menu_meta_boxes' ) ) { function wp_initial_nav_menu_meta_boxes() {;} }

if( !function_exists( 'wp_nav_menu_post_type_meta_boxes' ) ) { function wp_nav_menu_post_type_meta_boxes() {;} }

if( !function_exists( 'wp_nav_menu_taxonomy_meta_boxes' ) ) { function wp_nav_menu_taxonomy_meta_boxes() {;} }

if( !function_exists( 'wp_nav_menu_locations_meta_box' ) ) { function wp_nav_menu_locations_meta_box() {;} }

if( !function_exists( 'wp_nav_menu_item_link_meta_box' ) ) { function wp_nav_menu_item_link_meta_box() {;} }

if( !function_exists( 'wp_nav_menu_item_post_type_meta_box' ) ) { function wp_nav_menu_item_post_type_meta_box($object, $post_type) {;} }

if( !function_exists( 'wp_nav_menu_item_taxonomy_meta_box' ) ) { function wp_nav_menu_item_taxonomy_meta_box($object, $taxonomy) {;} }

if( !function_exists( 'wp_save_nav_menu_items' ) ) { function wp_save_nav_menu_items($menu_id = '', $menu_data = '') {;} }

if( !function_exists( '_wp_nav_menu_meta_box_object' ) ) { function _wp_nav_menu_meta_box_object($object = '') {;} }

if( !function_exists( 'wp_get_nav_menu_to_edit' ) ) { function wp_get_nav_menu_to_edit($menu_id = '') {;} }

if( !function_exists( 'wp_nav_menu_manage_columns' ) ) { function wp_nav_menu_manage_columns() {;} }

if( !function_exists( '_wp_delete_orphaned_draft_menu_items' ) ) { function _wp_delete_orphaned_draft_menu_items() {;} }

if( !class_exists( 'Walker_Nav_Menu_Edit' ) ) {
	class Walker_Nav_Menu_Edit {

		public function start_lvl($output) {;}
		public function end_lvl($output) {;}
		public function start_el($output, $item, $depth, $args) {;}

	}
}

if( !class_exists( 'Walker_Nav_Menu_Checklist' ) ) {
	class Walker_Nav_Menu_Checklist {

		public function __construct($fields = '') {;}
		public function start_lvl($output, $depth) {;}
		public function end_lvl($output, $depth) {;}
		public function start_el($output, $item, $depth, $args) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-ms-sites-list-table.php */

if( !class_exists( 'WP_MS_Sites_List_Table' ) ) {
	class WP_MS_Sites_List_Table {

		public function __construct() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function no_items() {;}
		public function get_bulk_actions() {;}
		public function pagination($which) {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function display_rows() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/admin.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/import.php */

if( !function_exists( 'get_importers' ) ) { function get_importers() {;} }

if( !function_exists( 'register_importer' ) ) { function register_importer($id, $name, $description, $callback) {;} }

if( !function_exists( 'wp_import_cleanup' ) ) { function wp_import_cleanup($id) {;} }

if( !function_exists( 'wp_import_handle_upload' ) ) { function wp_import_handle_upload() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/deprecated.php */

if( !function_exists( 'tinymce_include' ) ) { function tinymce_include() {;} }

if( !function_exists( 'documentation_link' ) ) { function documentation_link() {;} }

if( !function_exists( 'wp_shrink_dimensions' ) ) { function wp_shrink_dimensions($width, $height, $wmax = '', $hmax = '') {;} }

if( !function_exists( 'dropdown_categories' ) ) { function dropdown_categories($default = '', $parent = '', $popular_ids = '') {;} }

if( !function_exists( 'dropdown_link_categories' ) ) { function dropdown_link_categories($default = '') {;} }

if( !function_exists( 'wp_dropdown_cats' ) ) { function wp_dropdown_cats($currentcat = '', $currentparent = '', $parent = '', $level = '', $categories = '') {;} }

if( !function_exists( 'add_option_update_handler' ) ) { function add_option_update_handler($option_group, $option_name, $sanitize_callback = '') {;} }

if( !function_exists( 'remove_option_update_handler' ) ) { function remove_option_update_handler($option_group, $option_name, $sanitize_callback = '') {;} }

if( !function_exists( 'codepress_get_lang' ) ) { function codepress_get_lang($filename) {;} }

if( !function_exists( 'codepress_footer_js' ) ) { function codepress_footer_js() {;} }

if( !function_exists( 'use_codepress' ) ) { function use_codepress() {;} }

if( !function_exists( 'get_author_user_ids' ) ) { function get_author_user_ids() {;} }

if( !function_exists( 'get_editable_authors' ) ) { function get_editable_authors($user_id) {;} }

if( !function_exists( 'get_editable_user_ids' ) ) { function get_editable_user_ids($user_id, $exclude_zeros = '', $post_type = '') {;} }

if( !function_exists( 'get_nonauthor_user_ids' ) ) { function get_nonauthor_user_ids() {;} }

if( !function_exists( 'get_others_unpublished_posts' ) ) { function get_others_unpublished_posts($user_id, $type = '') {;} }

if( !function_exists( 'get_others_drafts' ) ) { function get_others_drafts($user_id) {;} }

if( !function_exists( 'get_others_pending' ) ) { function get_others_pending($user_id) {;} }

if( !function_exists( 'wp_dashboard_quick_press_output' ) ) { function wp_dashboard_quick_press_output() {;} }

if( !class_exists( 'WP_User_Search' ) ) {
	class WP_User_Search {
		public $results;
		public $search_term;
		public $page;
		public $role;
		public $raw_page;
		public $users_per_page = '';
		public $first_user;
		public $last_user;
		public $query_limit;
		public $query_orderby;
		public $query_from;
		public $query_where;
		public $total_users_for_query = '';
		public $too_many_total_users = '';
		public $search_errors;
		public $paging_text;

		public function WP_User_Search($search_term = '', $page = '', $role = '') {;}
		public function prepare_query() {;}
		public function query() {;}
		public function prepare_vars_for_template_usage() {;}
		public function do_paging() {;}
		public function get_results() {;}
		public function page_links() {;}
		public function results_are_paged() {;}
		public function is_search() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-ms-themes-list-table.php */

if( !class_exists( 'WP_MS_Themes_List_Table' ) ) {
	class WP_MS_Themes_List_Table {
		public $site_id;
		public $is_site_themes;

		public function __construct() {;}
		public function get_table_classes() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function _search_callback($theme) {;}
		public function _order_callback($theme_a, $theme_b) {;}
		public function no_items() {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function get_views() {;}
		public function get_bulk_actions() {;}
		public function bulk_actions($which) {;}
		public function current_action() {;}
		public function display_rows() {;}
		public function single_row($key, $theme) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/continents-cities.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/upgrade.php */

if( !function_exists( 'wp_install' ) ) { function wp_install($blog_title, $user_name, $user_email, $public, $deprecated = '', $user_password = '') {;} }

if( !function_exists( 'wp_install_defaults' ) ) { function wp_install_defaults($user_id) {;} }

if( !function_exists( 'wp_new_blog_notification' ) ) { function wp_new_blog_notification($blog_title, $blog_url, $user_id, $password) {;} }

if( !function_exists( 'wp_upgrade' ) ) { function wp_upgrade() {;} }

if( !function_exists( 'upgrade_all' ) ) { function upgrade_all() {;} }

if( !function_exists( 'upgrade_100' ) ) { function upgrade_100() {;} }

if( !function_exists( 'upgrade_101' ) ) { function upgrade_101() {;} }

if( !function_exists( 'upgrade_110' ) ) { function upgrade_110() {;} }

if( !function_exists( 'upgrade_130' ) ) { function upgrade_130() {;} }

if( !function_exists( 'upgrade_160' ) ) { function upgrade_160() {;} }

if( !function_exists( 'upgrade_210' ) ) { function upgrade_210() {;} }

if( !function_exists( 'upgrade_230' ) ) { function upgrade_230() {;} }

if( !function_exists( 'upgrade_230_options_table' ) ) { function upgrade_230_options_table() {;} }

if( !function_exists( 'upgrade_230_old_tables' ) ) { function upgrade_230_old_tables() {;} }

if( !function_exists( 'upgrade_old_slugs' ) ) { function upgrade_old_slugs() {;} }

if( !function_exists( 'upgrade_250' ) ) { function upgrade_250() {;} }

if( !function_exists( 'upgrade_252' ) ) { function upgrade_252() {;} }

if( !function_exists( 'upgrade_260' ) ) { function upgrade_260() {;} }

if( !function_exists( 'upgrade_270' ) ) { function upgrade_270() {;} }

if( !function_exists( 'upgrade_280' ) ) { function upgrade_280() {;} }

if( !function_exists( 'upgrade_290' ) ) { function upgrade_290() {;} }

if( !function_exists( 'upgrade_300' ) ) { function upgrade_300() {;} }

if( !function_exists( 'upgrade_network' ) ) { function upgrade_network() {;} }

if( !function_exists( 'maybe_create_table' ) ) { function maybe_create_table($table_name, $create_ddl) {;} }

if( !function_exists( 'drop_index' ) ) { function drop_index($table, $index) {;} }

if( !function_exists( 'add_clean_index' ) ) { function add_clean_index($table, $index) {;} }

if( !function_exists( 'maybe_add_column' ) ) { function maybe_add_column($table_name, $column_name, $create_ddl) {;} }

if( !function_exists( 'get_alloptions_110' ) ) { function get_alloptions_110() {;} }

if( !function_exists( '__get_option' ) ) { function __get_option($setting) {;} }

if( !function_exists( 'deslash' ) ) { function deslash($content) {;} }

if( !function_exists( 'dbDelta' ) ) { function dbDelta($queries, $execute = '') {;} }

if( !function_exists( 'make_db_current' ) ) { function make_db_current() {;} }

if( !function_exists( 'make_db_current_silent' ) ) { function make_db_current_silent() {;} }

if( !function_exists( 'make_site_theme_from_oldschool' ) ) { function make_site_theme_from_oldschool($theme_name, $template) {;} }

if( !function_exists( 'make_site_theme_from_default' ) ) { function make_site_theme_from_default($theme_name, $template) {;} }

if( !function_exists( 'make_site_theme' ) ) { function make_site_theme() {;} }

if( !function_exists( 'translate_level_to_role' ) ) { function translate_level_to_role($level) {;} }

if( !function_exists( 'wp_check_mysql_version' ) ) { function wp_check_mysql_version() {;} }

if( !function_exists( 'maybe_disable_automattic_widgets' ) ) { function maybe_disable_automattic_widgets() {;} }

if( !function_exists( 'pre_schema_upgrade' ) ) { function pre_schema_upgrade() {;} }

if( !function_exists( 'install_network' ) ) { function install_network() {;} }

if( !function_exists( 'install_global_terms' ) ) { function install_global_terms() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-plugins-list-table.php */

if( !class_exists( 'WP_Plugins_List_Table' ) ) {
	class WP_Plugins_List_Table {

		public function __construct() {;}
		public function get_table_classes() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function _search_callback($plugin) {;}
		public function _order_callback($plugin_a, $plugin_b) {;}
		public function no_items() {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function get_views() {;}
		public function get_bulk_actions() {;}
		public function bulk_actions($which) {;}
		public function extra_tablenav($which) {;}
		public function current_action() {;}
		public function display_rows() {;}
		public function single_row($plugin_file, $plugin_data) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-upgrader.php */

if( !class_exists( 'WP_Upgrader' ) ) {
	class WP_Upgrader {
		public $strings = '';
		public $skin = '';
		public $result = '';

		public function __construct($skin = '') {;}
		public function init() {;}
		public function generic_strings() {;}
		public function fs_connect($directories = '') {;}
		public function download_package($package) {;}
		public function unpack_package($package, $delete_package = '') {;}
		public function install_package($args = '') {;}
		public function run($options) {;}
		public function maintenance_mode($enable = '') {;}

	}
}

if( !class_exists( 'Plugin_Upgrader' ) ) {
	class Plugin_Upgrader {
		public $result;
		public $bulk = '';
		public $show_before = '';

		public function upgrade_strings() {;}
		public function install_strings() {;}
		public function install($package) {;}
		public function upgrade($plugin) {;}
		public function bulk_upgrade($plugins) {;}
		public function plugin_info() {;}
		public function deactivate_plugin_before_upgrade($return, $plugin) {;}
		public function delete_old_plugin($removed, $local_destination, $remote_destination, $plugin) {;}

	}
}

if( !class_exists( 'Theme_Upgrader' ) ) {
	class Theme_Upgrader {
		public $result;

		public function upgrade_strings() {;}
		public function install_strings() {;}
		public function install($package) {;}
		public function upgrade($theme) {;}
		public function bulk_upgrade($themes) {;}
		public function current_before($return, $theme) {;}
		public function current_after($return, $theme) {;}
		public function delete_old_theme($removed, $local_destination, $remote_destination, $theme) {;}
		public function theme_info($theme = '') {;}

	}
}

if( !class_exists( 'Core_Upgrader' ) ) {
	class Core_Upgrader {

		public function upgrade_strings() {;}
		public function upgrade($current) {;}

	}
}

if( !class_exists( 'WP_Upgrader_Skin' ) ) {
	class WP_Upgrader_Skin {
		public $upgrader;
		public $done_header = '';
		public $result = '';

		public function __construct($args = '') {;}
		public function set_upgrader($upgrader) {;}
		public function add_strings() {;}
		public function set_result($result) {;}
		public function request_filesystem_credentials($error = '') {;}
		public function header() {;}
		public function footer() {;}
		public function error($errors) {;}
		public function feedback($string) {;}
		public function before() {;}
		public function after() {;}

	}
}

if( !class_exists( 'Plugin_Upgrader_Skin' ) ) {
	class Plugin_Upgrader_Skin {
		public $plugin = '';
		public $plugin_active = '';
		public $plugin_network_active = '';

		public function __construct($args = '') {;}
		public function after() {;}
		public function before() {;}

	}
}

if( !class_exists( 'Bulk_Upgrader_Skin' ) ) {
	class Bulk_Upgrader_Skin {
		public $in_loop = '';
		public $error = '';

		public function __construct($args = '') {;}
		public function add_strings() {;}
		public function feedback($string) {;}
		public function header() {;}
		public function footer() {;}
		public function error($error) {;}
		public function bulk_header() {;}
		public function bulk_footer() {;}
		public function before($title = '') {;}
		public function after($title = '') {;}
		public function reset() {;}
		public function flush_output() {;}

	}
}

if( !class_exists( 'Bulk_Plugin_Upgrader_Skin' ) ) {
	class Bulk_Plugin_Upgrader_Skin {
		public $plugin_info = '';

		public function __construct($args = '') {;}
		public function add_strings() {;}
		public function before() {;}
		public function after() {;}
		public function bulk_footer() {;}

	}
}

if( !class_exists( 'Bulk_Theme_Upgrader_Skin' ) ) {
	class Bulk_Theme_Upgrader_Skin {
		public $theme_info = '';

		public function __construct($args = '') {;}
		public function add_strings() {;}
		public function before() {;}
		public function after() {;}
		public function bulk_footer() {;}

	}
}

if( !class_exists( 'Plugin_Installer_Skin' ) ) {
	class Plugin_Installer_Skin {
		public $api;
		public $type;

		public function __construct($args = '') {;}
		public function before() {;}
		public function after() {;}

	}
}

if( !class_exists( 'Theme_Installer_Skin' ) ) {
	class Theme_Installer_Skin {
		public $api;
		public $type;

		public function __construct($args = '') {;}
		public function before() {;}
		public function after() {;}

	}
}

if( !class_exists( 'Theme_Upgrader_Skin' ) ) {
	class Theme_Upgrader_Skin {
		public $theme = '';

		public function __construct($args = '') {;}
		public function after() {;}

	}
}

if( !class_exists( 'File_Upload_Upgrader' ) ) {
	class File_Upload_Upgrader {
		public $package;
		public $filename;

		public function __construct($form, $urlholder) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/media.php */

if( !function_exists( 'media_upload_tabs' ) ) { function media_upload_tabs() {;} }

if( !function_exists( 'update_gallery_tab' ) ) { function update_gallery_tab($tabs) {;} }

if( !function_exists( 'the_media_upload_tabs' ) ) { function the_media_upload_tabs() {;} }

if( !function_exists( 'get_image_send_to_editor' ) ) { function get_image_send_to_editor($id, $caption, $title, $align, $url = '', $rel = '', $size = '', $alt = '') {;} }

if( !function_exists( 'image_add_caption' ) ) { function image_add_caption($html, $id, $caption, $title, $align, $url, $size, $alt = '') {;} }

if( !function_exists( 'media_send_to_editor' ) ) { function media_send_to_editor($html) {;} }

if( !function_exists( 'media_handle_upload' ) ) { function media_handle_upload($file_id, $post_id, $post_data = '', $overrides = '') {;} }

if( !function_exists( 'media_handle_sideload' ) ) { function media_handle_sideload($file_array, $post_id, $desc = '', $post_data = '') {;} }

if( !function_exists( 'wp_iframe' ) ) { function wp_iframe($content_func) {;} }

if( !function_exists( 'media_buttons' ) ) { function media_buttons() {;} }

if( !function_exists( '_media_button' ) ) { function _media_button($title, $icon, $type) {;} }

if( !function_exists( 'get_upload_iframe_src' ) ) { function get_upload_iframe_src($type) {;} }

if( !function_exists( 'media_upload_form_handler' ) ) { function media_upload_form_handler() {;} }

if( !function_exists( 'media_upload_image' ) ) { function media_upload_image() {;} }

if( !function_exists( 'media_sideload_image' ) ) { function media_sideload_image($file, $post_id, $desc = '') {;} }

if( !function_exists( 'media_upload_audio' ) ) { function media_upload_audio() {;} }

if( !function_exists( 'media_upload_video' ) ) { function media_upload_video() {;} }

if( !function_exists( 'media_upload_file' ) ) { function media_upload_file() {;} }

if( !function_exists( 'media_upload_gallery' ) ) { function media_upload_gallery() {;} }

if( !function_exists( 'media_upload_library' ) ) { function media_upload_library() {;} }

if( !function_exists( 'image_align_input_fields' ) ) { function image_align_input_fields($post, $checked = '') {;} }

if( !function_exists( 'image_size_input_fields' ) ) { function image_size_input_fields($post, $check = '') {;} }

if( !function_exists( 'image_link_input_fields' ) ) { function image_link_input_fields($post, $url_type = '') {;} }

if( !function_exists( 'image_attachment_fields_to_edit' ) ) { function image_attachment_fields_to_edit($form_fields, $post) {;} }

if( !function_exists( 'media_single_attachment_fields_to_edit' ) ) { function media_single_attachment_fields_to_edit($form_fields, $post) {;} }

if( !function_exists( 'media_post_single_attachment_fields_to_edit' ) ) { function media_post_single_attachment_fields_to_edit($form_fields, $post) {;} }

if( !function_exists( 'image_attachment_fields_to_save' ) ) { function image_attachment_fields_to_save($post, $attachment) {;} }

if( !function_exists( 'image_media_send_to_editor' ) ) { function image_media_send_to_editor($html, $attachment_id, $attachment) {;} }

if( !function_exists( 'get_attachment_fields_to_edit' ) ) { function get_attachment_fields_to_edit($post, $errors = '') {;} }

if( !function_exists( 'get_media_items' ) ) { function get_media_items($post_id, $errors) {;} }

if( !function_exists( 'get_media_item' ) ) { function get_media_item($attachment_id, $args = '') {;} }

if( !function_exists( 'media_upload_header' ) ) { function media_upload_header() {;} }

if( !function_exists( 'media_upload_form' ) ) { function media_upload_form($errors = '') {;} }

if( !function_exists( 'media_upload_type_form' ) ) { function media_upload_type_form($type = '', $errors = '', $id = '') {;} }

if( !function_exists( 'media_upload_type_url_form' ) ) { function media_upload_type_url_form($type = '', $errors = '', $id = '') {;} }

if( !function_exists( 'media_upload_gallery_form' ) ) { function media_upload_gallery_form($errors) {;} }

if( !function_exists( 'media_upload_library_form' ) ) { function media_upload_library_form($errors) {;} }

if( !function_exists( 'type_url_form_image' ) ) { function type_url_form_image() {;} }

if( !function_exists( 'type_url_form_audio' ) ) { function type_url_form_audio() {;} }

if( !function_exists( 'type_url_form_video' ) ) { function type_url_form_video() {;} }

if( !function_exists( 'type_url_form_file' ) ) { function type_url_form_file() {;} }

if( !function_exists( '_insert_into_post_button' ) ) { function _insert_into_post_button($type) {;} }

if( !function_exists( 'media_upload_use_flash' ) ) { function media_upload_use_flash($flash) {;} }

if( !function_exists( 'media_upload_flash_bypass' ) ) { function media_upload_flash_bypass() {;} }

if( !function_exists( 'media_upload_html_bypass' ) ) { function media_upload_html_bypass($flash = '') {;} }

if( !function_exists( 'media_upload_bypass_url' ) ) { function media_upload_bypass_url($url) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/image-edit.php */

if( !function_exists( 'wp_image_editor' ) ) { function wp_image_editor($post_id, $msg = '') {;} }

if( !function_exists( 'load_image_to_edit' ) ) { function load_image_to_edit($post_id, $mime_type, $size = '') {;} }

if( !function_exists( 'wp_stream_image' ) ) { function wp_stream_image($image, $mime_type, $post_id) {;} }

if( !function_exists( 'wp_save_image_file' ) ) { function wp_save_image_file($filename, $image, $mime_type, $post_id) {;} }

if( !function_exists( '_image_get_preview_ratio' ) ) { function _image_get_preview_ratio($w, $h) {;} }

if( !function_exists( '_rotate_image_resource' ) ) { function _rotate_image_resource($img, $angle) {;} }

if( !function_exists( '_flip_image_resource' ) ) { function _flip_image_resource($img, $horz, $vert) {;} }

if( !function_exists( '_crop_image_resource' ) ) { function _crop_image_resource($img, $x, $y, $w, $h) {;} }

if( !function_exists( 'image_edit_apply_changes' ) ) { function image_edit_apply_changes($img, $changes) {;} }

if( !function_exists( 'stream_preview_image' ) ) { function stream_preview_image($post_id) {;} }

if( !function_exists( 'wp_restore_image' ) ) { function wp_restore_image($post_id) {;} }

if( !function_exists( 'wp_save_image' ) ) { function wp_save_image($post_id) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-pclzip.php */

if( !function_exists( 'PclZipUtilPathReduction' ) ) { function PclZipUtilPathReduction($p_dir) {;} }

if( !function_exists( 'PclZipUtilPathInclusion' ) ) { function PclZipUtilPathInclusion($p_dir, $p_path) {;} }

if( !function_exists( 'PclZipUtilCopyBlock' ) ) { function PclZipUtilCopyBlock($p_src, $p_dest, $p_size, $p_mode = '') {;} }

if( !function_exists( 'PclZipUtilRename' ) ) { function PclZipUtilRename($p_src, $p_dest) {;} }

if( !function_exists( 'PclZipUtilOptionText' ) ) { function PclZipUtilOptionText($p_option) {;} }

if( !function_exists( 'PclZipUtilTranslateWinPath' ) ) { function PclZipUtilTranslateWinPath($p_path, $p_remove_disk_letter = '') {;} }

if( !class_exists( 'PclZip' ) ) {
	class PclZip {
		public $zipname = '';
		public $zip_fd = '';
		public $error_code = '';
		public $error_string = '';
		public $magic_quotes_status;

		public function PclZip($p_zipname) {;}
		public function create($p_filelist) {;}
		public function add($p_filelist) {;}
		public function listContent() {;}
		public function extract() {;}
		public function extractByIndex($p_index) {;}
		public function delete() {;}
		public function deleteByIndex($p_index) {;}
		public function properties() {;}
		public function duplicate($p_archive) {;}
		public function merge($p_archive_to_add) {;}
		public function errorCode() {;}
		public function errorName($p_with_code = '') {;}
		public function errorInfo($p_full = '') {;}
		public function privCheckFormat($p_level = '') {;}
		public function privParseOptions($p_options_list, $p_size, $v_result_list, $v_requested_options = '') {;}
		public function privOptionDefaultThreshold($p_options) {;}
		public function privFileDescrParseAtt($p_file_list, $p_filedescr, $v_options, $v_requested_options = '') {;}
		public function privFileDescrExpand($p_filedescr_list, $p_options) {;}
		public function privCreate($p_filedescr_list, $p_result_list, $p_options) {;}
		public function privAdd($p_filedescr_list, $p_result_list, $p_options) {;}
		public function privOpenFd($p_mode) {;}
		public function privCloseFd() {;}
		public function privAddList($p_filedescr_list, $p_result_list, $p_options) {;}
		public function privAddFileList($p_filedescr_list, $p_result_list, $p_options) {;}
		public function privAddFile($p_filedescr, $p_header, $p_options) {;}
		public function privAddFileUsingTempFile($p_filedescr, $p_header, $p_options) {;}
		public function privCalculateStoredFilename($p_filedescr, $p_options) {;}
		public function privWriteFileHeader($p_header) {;}
		public function privWriteCentralFileHeader($p_header) {;}
		public function privWriteCentralHeader($p_nb_entries, $p_size, $p_offset, $p_comment) {;}
		public function privList($p_list) {;}
		public function privConvertHeader2FileInfo($p_header, $p_info) {;}
		public function privExtractByRule($p_file_list, $p_path, $p_remove_path, $p_remove_all_path, $p_options) {;}
		public function privExtractFile($p_entry, $p_path, $p_remove_path, $p_remove_all_path, $p_options) {;}
		public function privExtractFileUsingTempFile($p_entry, $p_options) {;}
		public function privExtractFileInOutput($p_entry, $p_options) {;}
		public function privExtractFileAsString($p_entry, $p_string, $p_options) {;}
		public function privReadFileHeader($p_header) {;}
		public function privReadCentralFileHeader($p_header) {;}
		public function privCheckFileHeaders($p_local_header, $p_central_header) {;}
		public function privReadEndCentralDir($p_central_dir) {;}
		public function privDeleteByRule($p_result_list, $p_options) {;}
		public function privDirCheck($p_dir, $p_is_dir = '') {;}
		public function privMerge($p_archive_to_add) {;}
		public function privDuplicate($p_archive_filename) {;}
		public function privErrorLog($p_error_code = '', $p_error_string = '') {;}
		public function privErrorReset() {;}
		public function privDisableMagicQuotes() {;}
		public function privSwapBackMagicQuotes() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/class-wp-media-list-table.php */

if( !class_exists( 'WP_Media_List_Table' ) ) {
	class WP_Media_List_Table {

		public function __construct() {;}
		public function ajax_user_can() {;}
		public function prepare_items() {;}
		public function get_views() {;}
		public function get_bulk_actions() {;}
		public function extra_tablenav($which) {;}
		public function current_action() {;}
		public function has_items() {;}
		public function no_items() {;}
		public function get_columns() {;}
		public function get_sortable_columns() {;}
		public function display_rows() {;}
		public function _get_row_actions($post, $att_title) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/internal-linking.php */

if( !function_exists( 'wp_link_query' ) ) { function wp_link_query($args = '') {;} }

if( !function_exists( 'wp_link_dialog' ) ) { function wp_link_dialog() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/includes/theme-install.php */

if( !function_exists( 'install_themes_feature_list' ) ) { function install_themes_feature_list() {;} }

if( !function_exists( 'install_theme_search_form' ) ) { function install_theme_search_form() {;} }

if( !function_exists( 'install_themes_dashboard' ) ) { function install_themes_dashboard() {;} }

if( !function_exists( 'install_themes_upload' ) ) { function install_themes_upload($page = '') {;} }

if( !function_exists( 'display_theme' ) ) { function display_theme($theme, $actions = '', $show_details = '') {;} }

if( !function_exists( 'display_themes' ) ) { function display_themes() {;} }

if( !function_exists( 'install_theme_information' ) ) { function install_theme_information() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/load-scripts.php */

if( !function_exists( '__' ) ) { function __() {;} }

if( !function_exists( '_x' ) ) { function _x() {;} }

if( !function_exists( 'add_filter' ) ) { function add_filter() {;} }

if( !function_exists( 'esc_attr' ) ) { function esc_attr() {;} }

if( !function_exists( 'apply_filters' ) ) { function apply_filters() {;} }

if( !function_exists( 'get_option' ) ) { function get_option() {;} }

if( !function_exists( 'is_lighttpd_before_150' ) ) { function is_lighttpd_before_150() {;} }

if( !function_exists( 'add_action' ) ) { function add_action() {;} }

if( !function_exists( 'do_action_ref_array' ) ) { function do_action_ref_array() {;} }

if( !function_exists( 'get_bloginfo' ) ) { function get_bloginfo() {;} }

if( !function_exists( 'is_admin' ) ) { function is_admin() {;} }

if( !function_exists( 'site_url' ) ) { function site_url() {;} }

if( !function_exists( 'admin_url' ) ) { function admin_url() {;} }

if( !function_exists( 'home_url' ) ) { function home_url() {;} }

if( !function_exists( 'includes_url' ) ) { function includes_url() {;} }

if( !function_exists( 'wp_guess_url' ) ) { function wp_guess_url() {;} }

if( !function_exists( 'get_file' ) ) { function get_file($path) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/admin-functions.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/post.php */

if( !function_exists( 'redirect_post' ) ) { function redirect_post($post_id = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/post-new.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/update-core.php */

if( !function_exists( 'list_core_update' ) ) { function list_core_update($update) {;} }

if( !function_exists( 'dismissed_updates' ) ) { function dismissed_updates() {;} }

if( !function_exists( 'core_upgrade_preamble' ) ) { function core_upgrade_preamble() {;} }

if( !function_exists( 'list_plugin_updates' ) ) { function list_plugin_updates() {;} }

if( !function_exists( 'list_theme_updates' ) ) { function list_theme_updates() {;} }

if( !function_exists( 'do_core_upgrade' ) ) { function do_core_upgrade($reinstall = '') {;} }

if( !function_exists( 'do_dismiss_core_update' ) ) { function do_dismiss_core_update() {;} }

if( !function_exists( 'do_undismiss_core_update' ) ) { function do_undismiss_core_update() {;} }

if( !function_exists( 'no_update_actions' ) ) { function no_update_actions($actions) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/my-sites.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/link-manager.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/edit-form-comment.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/media-upload.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options-reading.php */

if( !function_exists( 'add_js' ) ) { function add_js() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/press-this.php */

if( !function_exists( 'press_it' ) ) { function press_it() {;} }

if( !function_exists( 'get_images_from_uri' ) ) { function get_images_from_uri($uri) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/edit-comments.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/edit-tags.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/edit-form-advanced.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/ms-options.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/custom-header.php */

if( !class_exists( 'Custom_Image_Header' ) ) {
	class Custom_Image_Header {
		public $admin_header_callback;
		public $admin_image_div_callback;
		public $default_headers = '';
		public $uploaded_headers = '';
		public $page = '';

		public function __construct($admin_header_callback, $admin_image_div_callback = '') {;}
		public function init() {;}
		public function help() {;}
		public function step() {;}
		public function js_includes() {;}
		public function css_includes() {;}
		public function header_text() {;}
		public function take_action() {;}
		public function process_default_headers() {;}
		public function show_header_selector($type = '') {;}
		public function js() {;}
		public function js_1() {;}
		public function js_2() {;}
		public function step_1() {;}
		public function step_2() {;}
		public function step_3() {;}
		public function finished() {;}
		public function admin_page() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/admin.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/import.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/install.php */

if( !function_exists( 'display_header' ) ) { function display_header() {;} }

if( !function_exists( 'display_setup_form' ) ) { function display_setup_form($error = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options-discussion.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/gears-manifest.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options-writing.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/user-edit.php */

if( !function_exists( 'use_ssl_preference' ) ) { function use_ssl_preference($user) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options-media.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options-privacy.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/admin-post.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/tools.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/ms-sites.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/options-permalink.php */

if( !function_exists( 'add_js' ) ) { function add_js() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/upgrade.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/custom-background.php */

if( !class_exists( 'Custom_Background' ) ) {
	class Custom_Background {
		public $admin_header_callback;
		public $admin_image_div_callback;
		public $page = '';

		public function __construct($admin_header_callback = '', $admin_image_div_callback = '') {;}
		public function init() {;}
		public function admin_load() {;}
		public function take_action() {;}
		public function admin_page() {;}
		public function handle_upload() {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/link-add.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/ms-admin.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/media.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/plugin-editor.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/ms-edit.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/ms-delete-site.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/admin-footer.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/admin-ajax.php */

if( !function_exists( '_wp_ajax_delete_comment_response' ) ) { function _wp_ajax_delete_comment_response($comment_id, $delta = '') {;} }

if( !function_exists( '_wp_ajax_add_hierarchical_term' ) ) { function _wp_ajax_add_hierarchical_term() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/credits.php */

if( !function_exists( '_wp_credits_add_css' ) ) { function _wp_credits_add_css() {;} }

if( !function_exists( 'wp_credits' ) ) { function wp_credits() {;} }

if( !function_exists( '_wp_credits_add_profile_link' ) ) { function _wp_credits_add_profile_link($display_name, $username, $profiles) {;} }

if( !function_exists( '_wp_credits_build_object_link' ) ) { function _wp_credits_build_object_link($data) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-admin/theme-install.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-config-sample.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-rss2.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-app.php */

if( !function_exists( 'log_app' ) ) { function log_app($label, $msg) {;} }

if( !function_exists( 'wa_posts_where_include_drafts_filter' ) ) { function wa_posts_where_include_drafts_filter($where) {;} }

if( !class_exists( 'AtomServer' ) ) {
	class AtomServer {
		public $ATOM_CONTENT_TYPE = '';
		public $CATEGORIES_CONTENT_TYPE = '';
		public $SERVICE_CONTENT_TYPE = '';
		public $ATOM_NS = '';
		public $ATOMPUB_NS = '';
		public $ENTRIES_PATH = '';
		public $CATEGORIES_PATH = '';
		public $MEDIA_PATH = '';
		public $ENTRY_PATH = '';
		public $SERVICE_PATH = '';
		public $MEDIA_SINGLE_PATH = '';
		public $params = '';
		public $media_content_types = '';
		public $atom_content_types = '';
		public $selectors = '';
		public $do_output = '';

		public function __construct() {;}
		public function handle_request() {;}
		public function get_service() {;}
		public function get_categories_xml() {;}
		public function create_post() {;}
		public function get_post($postID) {;}
		public function put_post($postID) {;}
		public function delete_post($postID) {;}
		public function get_attachment($postID = '') {;}
		public function create_attachment() {;}
		public function put_attachment($postID) {;}
		public function delete_attachment($postID) {;}
		public function get_file($postID) {;}
		public function put_file($postID) {;}
		public function get_entries_url($page = '') {;}
		public function the_entries_url($page = '') {;}
		public function get_categories_url($deprecated = '') {;}
		public function the_categories_url() {;}
		public function get_attachments_url($page = '') {;}
		public function the_attachments_url($page = '') {;}
		public function get_service_url() {;}
		public function get_entry_url($postID = '') {;}
		public function the_entry_url($postID = '') {;}
		public function get_media_url($postID = '') {;}
		public function the_media_url($postID = '') {;}
		public function set_current_entry($postID) {;}
		public function get_posts($page = '', $post_type = '') {;}
		public function get_attachments($page = '', $post_type = '') {;}
		public function get_feed($page = '', $post_type = '') {;}
		public function get_entry($postID, $post_type = '') {;}
		public function echo_entry() {;}
		public function ok() {;}
		public function no_content() {;}
		public function internal_error($msg = '') {;}
		public function bad_request() {;}
		public function length_required() {;}
		public function invalid_media() {;}
		public function forbidden($reason = '') {;}
		public function not_found() {;}
		public function not_allowed($allow) {;}
		public function redirect($url) {;}
		public function client_error($msg = '') {;}
		public function created($post_ID, $content, $post_type = '') {;}
		public function auth_required($msg) {;}
		public function output($xml, $ctype = '') {;}
		public function escape($array) {;}
		public function authenticate() {;}
		public function get_accepted_content_type($types = '') {;}
		public function process_conditionals() {;}
		public function rfc3339_str2time($str) {;}
		public function get_publish_time($published) {;}

	}
}

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-trackback.php */

if( !function_exists( 'trackback_response' ) ) { function trackback_response($error = '', $error_message = '') {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/xmlrpc.php */

if( !function_exists( 'logIO' ) ) { function logIO($io, $msg) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-blog-header.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-commentsrss2.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-register.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-signup.php */

if( !function_exists( 'do_signup_header' ) ) { function do_signup_header() {;} }

if( !function_exists( 'signuppageheaders' ) ) { function signuppageheaders() {;} }

if( !function_exists( 'wpmu_signup_stylesheet' ) ) { function wpmu_signup_stylesheet() {;} }

if( !function_exists( 'show_blog_form' ) ) { function show_blog_form($blogname = '', $blog_title = '', $errors = '') {;} }

if( !function_exists( 'validate_blog_form' ) ) { function validate_blog_form() {;} }

if( !function_exists( 'show_user_form' ) ) { function show_user_form($user_name = '', $user_email = '', $errors = '') {;} }

if( !function_exists( 'validate_user_form' ) ) { function validate_user_form() {;} }

if( !function_exists( 'signup_another_blog' ) ) { function signup_another_blog($blogname = '', $blog_title = '', $errors = '') {;} }

if( !function_exists( 'validate_another_blog_signup' ) ) { function validate_another_blog_signup() {;} }

if( !function_exists( 'confirm_another_blog_signup' ) ) { function confirm_another_blog_signup($domain, $path, $blog_title, $user_name, $user_email = '', $meta = '') {;} }

if( !function_exists( 'signup_user' ) ) { function signup_user($user_name = '', $user_email = '', $errors = '') {;} }

if( !function_exists( 'validate_user_signup' ) ) { function validate_user_signup() {;} }

if( !function_exists( 'confirm_user_signup' ) ) { function confirm_user_signup($user_name, $user_email) {;} }

if( !function_exists( 'signup_blog' ) ) { function signup_blog($user_name = '', $user_email = '', $blogname = '', $blog_title = '', $errors = '') {;} }

if( !function_exists( 'validate_blog_signup' ) ) { function validate_blog_signup() {;} }

if( !function_exists( 'confirm_blog_signup' ) ) { function confirm_blog_signup($domain, $path, $blog_title, $user_name = '', $user_email = '', $meta) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-settings.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/index.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-cron.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-activate.php */

if( !function_exists( 'do_activate_header' ) ) { function do_activate_header() {;} }

if( !function_exists( 'wpmu_activate_stylesheet' ) ) { function wpmu_activate_stylesheet() {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-comments-post.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-feed.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-links-opml.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-login.php */

if( !function_exists( 'login_header' ) ) { function login_header($title = '', $message = '', $wp_error = '') {;} }

if( !function_exists( 'login_footer' ) ) { function login_footer($input_id = '') {;} }

if( !function_exists( 'wp_shake_js' ) ) { function wp_shake_js() {;} }

if( !function_exists( 'retrieve_password' ) ) { function retrieve_password() {;} }

if( !function_exists( 'check_password_reset_key' ) ) { function check_password_reset_key($key, $login) {;} }

if( !function_exists( 'reset_password' ) ) { function reset_password($user, $new_pass) {;} }

if( !function_exists( 'register_new_user' ) ) { function register_new_user($user_login, $user_email) {;} }

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-mail.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-rdf.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-rss.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-load.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-pass.php */

/**#@-*/

/**#@+ @file: /home/kunalb/.build/wp-builds/eventpress/wp-config.php */

/**#@-*/
