<?php

// OWNCLOUD THEME SHORTCODE
function owncloud_func( $atts ) {

    global $VERSIONS;
    global $DOWNLOADS;
    global $DOCUMENTATIONS;

    $owncloud = shortcode_atts( array(
        'version' => 'default',
        'download' => 'default',
        'documentation' => 'default',
    ), $atts );


    //Versions
    switch($owncloud['version']) {
     case ("major-stable"):
      return $VERSIONS['SERVER_MAJOR_STABLE'];
      break;
     case ("full-stable"):
      return $VERSIONS['SERVER_FULL_STABLE'];
      break;
     case ("major-development"):
      return $VERSIONS['SERVER_MAJOR_DEVELOPMENT'];
      break;
     case ("major-dev-docs"):
      return $VERSIONS['SERVER_MAJOR_DEV_DOCS'];
      break;
     case ("client-desktop-stable-full"):
      return $VERSIONS['CLIENT_DESKTOP_STABLE_FULL'];
      break;
     case ("client-desktop-stable-short"):
      return $VERSIONS['CLIENT_DESKTOP_STABLE_SHORT'];
      break;
     case ("client-desktop-testing"):
      return $VERSIONS['CLIENT_DESKTOP_TESTING'];
      break;
     case ("server-testing-version"):
      return $VERSIONS['SERVER_TESTING_VERSION'];
      break;
    };

    //Documentation
    switch($owncloud['documentation']) {
     case ("developer"):
      return $DOCUMENTATIONS['DEVELOPER'];
      break;
     case ("admin"):
      return $DOCUMENTATIONS['ADMIN'];
      break;
     case ("user"):
      return $DOCUMENTATIONS['USER'];
      break;
     case ("client-desktop"):
      return $DOCUMENTATIONS['CLIENT_DESKTOP'];
      break;
    };

    //Download
    switch($owncloud['download']) {

     //Server
     case ("server-stable-tar"):
      return $DOWNLOADS['SERVER_STABLE_TAR'];
      break;
     case ("server-stable-tar-md5"):
      return $DOWNLOADS['SERVER_STABLE_TAR_MD5'];
      break;
     case ("server-stable-tar-sha256"):
      return $DOWNLOADS['SERVER_STABLE_TAR_SHA256'];
      break;
     case ("server-stable-tar-pgp"):
      return $DOWNLOADS['SERVER_STABLE_TAR_PGP'];
      break;
     case ("server-packages-stable"):
      return $DOWNLOADS['SERVER_PACKAGES_STABLE'];
      break;
     case ("server-stable-zip"):
      return $DOWNLOADS['SERVER_STABLE_ZIP'];
      break;
     case ("server-stable-zip-md5"):
      return $DOWNLOADS['SERVER_STABLE_ZIP_MD5'];
      break;
     case ("server-stable-zip-sha256"):
      return $DOWNLOADS['SERVER_STABLE_ZIP_SHA256'];
      break;
     case ("server-stable-zip-pgp"):
      return $DOWNLOADS['SERVER_STABLE_ZIP_PGP'];
      break;

     //Daily
     case ("server-daily-tar"):
      return $DOWNLOADS['SERVER_DAILY_TAR'];
      break;
     case ("server-daily-tar-md5"):
      return $DOWNLOADS['SERVER_DAILY_TAR_MD5'];
      break;
     case ("server-packages-daily"):
      return $DOWNLOADS['SERVER_PACKAGES_DAILY'];
      break;

     //Web Installer
     case ("server-web-installer"):
      return $DOWNLOADS['SERVER_WEB_INSTALLER'];
      break;

     //VWs
     case ("vm-ova"):
      return $DOWNLOADS['VM_OVA'];
      break;
     case ("vm-qcow2"):
      return $DOWNLOADS['VM_QCOW2'];
      break;
     case ("vm-raw"):
      return $DOWNLOADS['VM_RAW'];
      break;
     case ("vm-vhdx"):
      return $DOWNLOADS['VM_VHDX'];
      break;
     case ("vm-vmdk"):
      return $DOWNLOADS['VM_VMDK'];
      break;
     case ("vm-vmx"):
      return $DOWNLOADS['VM_VMX'];
      break;

     //GPG
     case ("gpg"):
      return $DOWNLOADS['OWNCLOUD_GPG'];
      break;

     //CLIENTS
     case ("client-desktop-stable-win"):
      return $DOWNLOADS['CLIENT_DESKTOP_STABLE_WIN'];
      break;
     case ("client-desktop-stable-mac"):
      return $DOWNLOADS['CLIENT_DESKTOP_STABLE_MAC'];
      break;
     case ("client-desktop-stable-linux"):
      return $DOWNLOADS['CLIENT_DESKTOP_STABLE_LINUX'];
      break;
     case ("client-desktop-stable-sources"):
      return $DOWNLOADS['CLIENT_DESKTOP_STABLE_SOURCES'];
      break;
     case ("client-desktop-stable-sources-pgp"):
      return $DOWNLOADS['CLIENT_DESKTOP_STABLE_SOURCES'] . '.asc';
      break;

     //TESTING
     case ("server-packages-testing"):
      return $DOWNLOADS['SERVER_PACKAGES_TESTING'];
      break;
     case ("server-tar-testing"):
      return $DOWNLOADS['SERVER_TAR_TESTING'];
      break;
     case ("server-zip-testing"):
      return $DOWNLOADS['SERVER_ZIP_TESTING'];
      break;

     // MOBILE CLIENTS
     case ("client-mobile-ios"):
      return $DOWNLOADS['CLIENT_MOBILE_IOS'];
      break;
     case ("client-mobile-android"):
      return $DOWNLOADS['CLIENT_MOBILE_ANDROID'];
      break;
     case ("client-mobile-blackberry"):
      return $DOWNLOADS['CLIENT_MOBILE_BLACKBERRY'];
      break;
     case ("client-mobile-amazon"):
      return $DOWNLOADS['CLIENT_MOBILE_AMAZON'];
      break;

     //CLIENT TESTING
     case ("client-desktop-test-win"):
      return $DOWNLOADS['CLIENT_DESKTOP_TEST_WIN'];
      break;
     case ("client-desktop-test-mac"):
      return $DOWNLOADS['CLIENT_DESKTOP_TEST_MAC'];
      break;
     case ("client-desktop-test-linux"):
      return $DOWNLOADS['CLIENT_DESKTOP_TEST_LINUX'];
      break;
     case ("client-desktop-testpilot-win"):
      return $DOWNLOADS['CLIENT_DESKTOP_TESTPILOT_WIN'];
      break;
     case ("client-desktop-testpilot-mac"):
      return $DOWNLOADS['CLIENT_DESKTOP_TESTPILOT_MAC'];
      break;
     case ("client-desktop-testpilot-linux"):
      return $DOWNLOADS['CLIENT_DESKTOP_TESTPILOT_LINUX'];
      break;
     case ("client-desktop-test-sources"):
      return $DOWNLOADS['CLIENT_DESKTOP_TEST_SOURCES'];
      break;
     case ("client-desktop-test-sources-pgp"):
      return $DOWNLOADS['CLIENT_DESKTOP_TEST_SOURCES'] . '.asc';
      break;

    }
}
add_shortcode( 'owncloud', 'owncloud_func' );
?>
