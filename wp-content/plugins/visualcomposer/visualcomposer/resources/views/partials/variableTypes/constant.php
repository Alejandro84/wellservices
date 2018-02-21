<?php
if (!defined('ABSPATH')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit;
}
/** @var array $values */
/** @var string $key */
?>
<script id="vcv-variable-<?php echo esc_attr(vchelper('Str')->slugify($key)); ?>">
  // Read-Only data
  Object.defineProperty(window, '<?php echo esc_attr($key); ?>', {
    value: function () {
      return <?php
        // @codingStandardsIgnoreLine
        echo json_encode($value);
        ?> },
    writable: false
  });
</script>