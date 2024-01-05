/**
 * Stretch plugin for Craft CMS
 *
 * Stretch
 *
 * @author    Rich Hayler
 * @copyright Copyright (c) 2019 Rich Hayler
 * @link      https://richhayler.com/projects/stretch
 * @package   Stretch
 * @since     1.2.0
 */

jQuery(document).ready(function(){
  $(".edit-entry #content-container").append('<a id="details-toggle" title="Toggle details sidebar"></a>');
  $(".edit-entry #details-toggle").on({
    click: function() {
      $("#global-container").toggleClass("stretch");}
  });
});
