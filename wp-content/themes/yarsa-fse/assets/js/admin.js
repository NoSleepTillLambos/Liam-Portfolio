"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var redirectToKitPage = function redirectToKitPage(res) {
    window.location = "".concat(window.yarsa_fse.yarsa_fse_demo_import_page);
  }; // Activate plugin.


  $(document).on('click', '.yarsa-fse-activate-plugin', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('yarsa-fse-importing-plugin');
    apiFetch({
      path: '/wp/v2/plugins/olive-one-click-demo-import/olive-one-click-demo-import',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    })["catch"](function () {
      redirectToKitPage({});
    });
  });
  $(document).on('click', '.yarsa-fse-install-plugin', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('yarsa-fse-importing-plugin');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "olive-one-click-demo-import",
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    })["catch"](function () {
      redirectToKitPage({});
    });
  });
  $(document).on('click', '.yarsa-fse-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=yarsa_fse_hide_theme_info_noticebar&yarsa-fse-nonce-name=".concat(window.yarsa_fse.yarsa_fse_nonce));
    apiFetch({
      url: ajaxurl + "?action=yarsa_fse_hide_theme_info_noticebar&yarsa-fse-nonce-name=".concat(window.yarsa_fse.yarsa_fse_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});