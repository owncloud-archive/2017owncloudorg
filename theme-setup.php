<?php

// Strings used throughout ownCloud.org.

/* GENERAL SETTINGS */
//-----------------------------------------------------------------------------------------------------------//
$COMPANY = 'ownCloud';

/* CUSTOM POST TYPES */
//-----------------------------------------------------------------------------------------------------------//

// Set to false to disable the post type
$PROVIDER  = true;
$FAQ       = true;

/* VERSIONS */
//-----------------------------------------------------------------------------------------------------------//

$VERSIONS_VM = '9.1.5-1.1-201704201507';
$VM_UBUNTU_RELEASE = '14.04';

$VERSIONS = array (
 'SERVER_MAJOR_STABLE' => '10.0',
 'SERVER_FULL_STABLE' => '10.0.0',
 'SERVER_MAJOR_DEVELOPMENT' => '10.0',
 'SERVER_MAJOR_DEV_DOCS' => '10.0',
 'SERVER_TESTING_VERSION' => '10.0.0 RC2',
 'CLIENT_DESKTOP_STABLE_FULL' => '2.3.1',
 'CLIENT_DESKTOP_STABLE_SHORT' => '2.3',
 'CLIENT_DESKTOP_TESTING' => '2.3.2 rc1'
);

/* DOCUMENTATION */
//-----------------------------------------------------------------------------------------------------------//

$DOCUMENTATION_BASE = 'https://doc.owncloud.org';

$DOCUMENTATIONS = array (
 'DEVELOPER' => $DOCUMENTATION_BASE.'/server/'.$VERSIONS['SERVER_MAJOR_DEV_DOCS'].'/developer_manual/',
 'ADMIN' => $DOCUMENTATION_BASE.'/server/latest/admin_manual/',
 'USER' => $DOCUMENTATION_BASE.'/server/latest/user_manual/',
 'CLIENT_DESKTOP' => $DOCUMENTATION_BASE.'/desktop/'.$VERSIONS['CLIENT_DESKTOP_STABLE_SHORT']
);


/* DOWNLOADS */
//-----------------------------------------------------------------------------------------------------------//

$DOWNLOAD_SERVER_BASE = 'https://download.owncloud.org/community/';
$DOWNLOAD_VM_BASE = 'https://download.owncloud.org/community/production/vm/';
$DOWNLOAD_CLIENT_DESKTOP_BASE = 'https://download.owncloud.com/desktop/stable/';

$DOWNLOAD_CLIENT_DESKTOP_TEST_BASE= 'https://download.owncloud.com/desktop/testing/';

  $DOWNLOADS = array (

   // Stable
   'SERVER_STABLE_TAR' => $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS['SERVER_FULL_STABLE'].'.tar.bz2',
   'SERVER_STABLE_TAR_MD5' => $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS['SERVER_FULL_STABLE'].'.tar.bz2.md5',
   'SERVER_STABLE_TAR_SHA256' => $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS['SERVER_FULL_STABLE'].'.tar.bz2.sha256',
   'SERVER_STABLE_TAR_PGP' => $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS['SERVER_FULL_STABLE'].'.tar.bz2.asc',
   'SERVER_PACKAGES_STABLE' => 'https://download.owncloud.org/download/repositories/stable/owncloud',
   'SERVER_STABLE_ZIP' => $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS['SERVER_FULL_STABLE'].'.zip',
   'SERVER_STABLE_ZIP_MD5' => $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS['SERVER_FULL_STABLE'].'.zip.md5',
   'SERVER_STABLE_ZIP_SHA256' => $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS['SERVER_FULL_STABLE'].'.zip.sha256',
   'SERVER_STABLE_ZIP_PGP' => $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS['SERVER_FULL_STABLE'].'.zip.asc',

   // Daily
   'SERVER_DAILY_TAR' => $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2',
   'SERVER_DAILY_TAR_MD5' => $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2.md5',
   'SERVER_PACKAGES_DAILY' => 'https://download.owncloud.org/download/repositories/nightly/owncloud',

   // Web Installer
   'SERVER_WEB_INSTALLER' => 'https://download.owncloud.com/download/community/setup-owncloud.php',

   //  GPG
   'OWNCLOUD_GPG' => 'https://owncloud.org/owncloud.asc',

   //  VMs
   'VM_OVA'   => $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.ova.zip',
   'VM_QCOW2' => $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.qcow2.zip',
   'VM_RAW'   => $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.raw.zip',
   'VM_VHDX'  => $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.vhdx.zip',
   'VM_VMDK'  => $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.vmdk.zip',
   'VM_VMX'   => $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-owncloud-'.$VERSIONS_VM.'.vmx.zip',

   // Desktop client stable
   'CLIENT_DESKTOP_STABLE_WIN' => $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-2.3.1.6824-setup.exe',
   'CLIENT_DESKTOP_STABLE_MAC' => $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-2.3.1.4139.pkg',
   'CLIENT_DESKTOP_STABLE_LINUX' => 'https://software.opensuse.org/download/package?project=isv:ownCloud:desktop&amp;package=owncloud-client',
   'CLIENT_DESKTOP_STABLE_SOURCES' => $DOWNLOAD_CLIENT_DESKTOP_BASE.'owncloudclient-2.3.1.tar.xz',

   // Testing
   'SERVER_PACKAGES_TESTING' => 'https://download.owncloud.org/download/repositories/testing/owncloud',
   'SERVER_TAR_TESTING' => 'https://download.owncloud.org/community/testing/owncloud-10.0.0RC2.tar.bz2',
   'SERVER_ZIP_TESTING' => 'https://download.owncloud.org/community/testing/owncloud-10.0.0RC2.zip',

   // Mobile clients
   'CLIENT_MOBILE_IOS' => 'https://itunes.apple.com/us/app/owncloud/id543672169?ls=1&mt=8',
   'CLIENT_MOBILE_ANDROID' => 'https://play.google.com/store/apps/details?id=com.owncloud.android',
   'CLIENT_MOBILE_BLACKBERRY' => 'https://appworld.blackberry.com/webstore/content/59955931/',
   'CLIENT_MOBILE_AMAZON' => 'https://www.amazon.com/ownCloud-Inc/dp/B00944PQMK',


   // Desktop client testing
   // By having an empty VERSIONS_CLIENT_DESKTOP_TESTING the website should show the nightly links instead
   'CLIENT_DESKTOP_TEST_WIN' => $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud-2.3.2.6896rc1-setup.exe',
   'CLIENT_DESKTOP_TEST_MAC' => $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud-2.3.2.4217rc1.pkg',
   'CLIENT_DESKTOP_TEST_LINUX' => 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:testing&amp;package=owncloud-client',
   'CLIENT_DESKTOP_TESTPILOT_WIN' => $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'testpilotcloud-2.3.2.6897rc1-setup.exe',
   'CLIENT_DESKTOP_TESTPILOT_MAC' => $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'testpilotcloud-2.3.2.4219rc1.pkg',
   'CLIENT_DESKTOP_TESTPILOT_LINUX' => 'https://software.opensuse.org/download/package?project=isv:ownCloud:testpilot:testing&amp;package=testpilotcloud-client',
   'CLIENT_DESKTOP_TEST_SOURCES' => $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'owncloudclient-2.3.2rc1.tar.xz'

  );
