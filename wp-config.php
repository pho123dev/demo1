<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'demo1' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%W)<him5%OF#v8T!d/8r_X>:AP]RrIylb^MKm1.amPT^`xgn__?@:O}.-H6JqA-8' );
define( 'SECURE_AUTH_KEY',  'jP|0apZtpKRl@G9W)@u.,}<@pcsq$ss{IS d3Z]a[r4?jQY67Y!)FZ[qrbz&8qdS' );
define( 'LOGGED_IN_KEY',    'kb7Rp_#qSWdXu3E#iya1f:I|`+,5~3oeeXaqw_lR2Xe~1=V *KWc*+CH|.1#Gt-|' );
define( 'NONCE_KEY',        'S}^.a[p3GG;,;>_Q@KU]4{u}AW`Jcr=Ax1]4`bxG#)/?ry|e VWxb^MU$fi~naP/' );
define( 'AUTH_SALT',        'JR}mB:_E0TPxZ[~3oU#nNV~t goKv~qCwl}6D.-l/9F@wZ%]m@zrr6RJ4^S!!17]' );
define( 'SECURE_AUTH_SALT', '9s<AQ?IL;Pe ?teC;zP%NMC4  !AGua={/H5ZzCA_NAc!m3Imw&w7`TZYaDl9NsG' );
define( 'LOGGED_IN_SALT',   '__2n-6B>r_U:(/m9A:3Re3tsD<?2w/Ba?XSC.t0n=%PHUs@^VhFAw 9w%=6O,vF4' );
define( 'NONCE_SALT',       'no4?)45kVkE5v;^F.gs:wC1D*!&Nvb!QkL?uCS0pl?F7|jhJIL,aVCP2W3|d-yV&' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
